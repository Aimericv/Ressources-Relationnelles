<?php

// src/Controller/SecurityController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Repository\VersionsRepository;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(Request $request, VersionsRepository $versionRepo, AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        $version = $versionRepo->findOneBy(['status' => 1]);

        if ($request->isMethod('POST')) {
            // Récupérer le score reCAPTCHA v3 envoyé avec le formulaire
            $recaptchaScore = $request->request->get('recaptcha_score');

            // Définir le score minimum que vous acceptez pour la connexion
            $minimumScore = 0.5; // Par exemple, vous pouvez ajuster ce score en fonction de vos besoins

            // Vérifier si le score est supérieur ou égal au score minimum
            if ($recaptchaScore >= $minimumScore) {
                // Si le score est acceptable, continuez avec le processus de connexion
                // ...
            } else {
                // Sinon, afficher un message d'erreur
                $error = 'Veuillez compléter le CAPTCHA';
            }
        }

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'version' => $version,
            'recaptcha_site_key' => $this->getParameter('google_recaptcha_site_key')
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
