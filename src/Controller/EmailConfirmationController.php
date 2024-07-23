<?php
namespace App\Controller;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmailConfirmationController extends AbstractController
{
    #[Route('/confirm-email/{token}', name: 'app_confirm_email')]
    public function confirmEmail(string $token, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        // Rechercher l'utilisateur par le token de confirmation
        $user = $userRepository->findOneBy(['confirmationToken' => $token]);

        // Si aucun utilisateur n'est trouvé, lancer une exception
        if (!$user) {
            throw $this->createNotFoundException('No user found for confirmation token.');
        }

        // Marquer l'email de l'utilisateur comme confirmé
        $user->setIsConfirmed(true);
        $user->setConfirmationToken(null);

        // Persister les changements dans la base de données
        $entityManager->persist($user);
        $entityManager->flush();

        // Ajouter un message flash pour informer l'utilisateur
        $this->addFlash('success', 'Your email has been confirmed successfully.');

        // Rediriger l'utilisateur vers la page d'accueil ou une autre page pertinente
        return $this->redirectToRoute('app_homepage');
    }
}

