<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Entity\User;
use App\Repository\HelpEntityRepository;
use App\Repository\VersionsRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\HelpEntity;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;



class HelpController extends AbstractController
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    #[Route('/help', name: 'app_help')]
    public function index(Request $request, VersionsRepository $versionRepo, HelpEntityRepository $helpEntityRepository): Response
    {
        $helpEntities = $helpEntityRepository->findBy(['Status' => 2], ['id' => 'DESC']);
        $version = $versionRepo->findOneBy(['status' => 1]);

        return $this->render('help/index.html.twig', [
            'helpEntities' => $helpEntities,
            'version' => $version,
        ]);     
    }

    #[Route('/help/add', name: 'app_help_add')]
    public function addQuestions(Request $request, HelpEntityRepository $helpEntityRepository, EntityManagerInterface $entityManager): Response
    {
        $mySession = new Session();
        $mySession->getFlashBag()->clear();
        $email = $request->request->get('email');
        $subject = $request->request->get('subject');
        $question = $request->request->get('question');
        if ($subject == "bug") {
            $adminEmails = $entityManager->getRepository(User::class)->findAdminEmails();
            $corpsMail = "Vous avez reçu une detection de bug de " .$email ." : <br>" . $question;
            foreach ($adminEmails as $admin) {
                $adminEmail = $admin['email'];
                $this->sendEmail($adminEmail, 'Ressource Relationnelle Bug', $corpsMail);
            }
        } else {

            $helpEntity = new HelpEntity();
            $helpEntity->setEmail($email);
            $helpEntity->setCatégorie($subject);
            $helpEntity->setQuestions($question);
            $helpEntity->setStatus(0);
    
            try {
                $entityManager->persist($helpEntity);
                $entityManager->flush();
                $this->sendEmail($email, 'Ressources Relationnelles', 'Votre question a bien été envoyée');
                $adminEmails = $entityManager->getRepository(User::class)->findAdminEmails();
                foreach ($adminEmails as $admin) {
                    $email = $admin['email'];
                    $this->sendEmail($email, 'Admin Notification', 'Vous avez reçu une question.');
                }
                $this->addFlash('success', 'Votre question a bien été envoyée.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de l\'envoi de votre question.');
            }
        }

        return $this->redirectToRoute('app_help');    
    }

    private function sendEmail(string $to, string $subject, string $body): void
    {
        $email = (new Email())
            ->from('help@ressources-relationnelles.com')
            ->to($to)
            ->subject($subject)
            ->html($body);

        $this->mailer->send($email);
    }
}