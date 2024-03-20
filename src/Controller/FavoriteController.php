<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// ...

use App\Repository\FavoriteRepository;

class FavoriteController extends AbstractController
{
    #[Route('/favorite', name: 'app_favorite')]
    public function index(FavoriteRepository $favoriteRepository): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $user = $this->getUser();
        $favoritePosts = $favoriteRepository->findFavoritePostsByUser($user);

        return $this->render('favorite/index.html.twig', [
            'utilisateur' => $user,
            'favoritePosts' => $favoritePosts,
        ]);
    }
}