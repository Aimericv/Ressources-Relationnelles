<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UpdateProfilType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class UpdateProfilController extends AbstractController
{
    #[Route('/user/edit', name: 'user_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        /** @var User $user */
        $user = $this->getUser(); // Assurez-vous que l'utilisateur est connecté et récupéré correctement

        $form = $this->createForm(UpdateProfilType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newEmail = $form->get('email')->getData();

            // Vérifiez si l'adresse email a changé
            if ($newEmail !== $user->getEmail()) {
                $confirmationToken = bin2hex(random_bytes(32));
                $user->setConfirmationToken($confirmationToken);
                $user->setPreviousEmail($user->getEmail());
                $user->setEmail($newEmail);
                $user->setIsConfirmed(false);

                // Envoi de l'email de confirmation
                $this->sendConfirmationEmail($user, $confirmationToken, $mailer);
            }

            /** @var UploadedFile $avatarFile */
            $avatarFile = $form->get('avatar_img')->getData();
            
            if ($avatarFile) {
                $newFilename = uniqid().'.'.$avatarFile->guessExtension();

                try {
                    $avatarFile->move(
                        $this->getParameter('avatars_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Gérer les erreurs d'upload
                }

                $user->setAvatarImg($newFilename);
            }

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Vos informations ont été mises à jour avec succès.');

            return $this->redirectToRoute('user_edit');
        }

        return $this->render('user/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    private function sendConfirmationEmail(User $user, string $confirmationToken, MailerInterface $mailer): void
    {
        $email = (new Email())
            ->from('no-reply@example.com')
            ->to($user->getEmail())
            ->subject('Confirm your new email address')
            ->html("<p>Please confirm your new email address by clicking <a href=\"/confirm-email?token=$confirmationToken\">here</a>.</p>");

        $mailer->send($email);
    }
}

