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
        $user = $userRepository->findOneBy(['confirmationToken' => $token]);

        if (!$user) {
            throw $this->createNotFoundException('No user found for confirmation token.');
        }

        // Mark the user's email as confirmed
        $user->setIsConfirmed(true);
        $user->setConfirmationToken(null);
        $entityManager->persist($user);
        $entityManager->flush();

        // Optionally, we could log the user in and redirect them to their profile or home page
        return $this->redirectToRoute('app_homepage');
    }
}
