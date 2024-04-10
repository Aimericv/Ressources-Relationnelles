<?php

namespace App\Controller;

use App\Repository\ImagesRepository;
use App\Repository\ParagraphesRepository;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    #[Route("/catalogue", name:"app_catalogue")]
    public function catalogue(PostRepository $postRepository, SessionInterface $session): \Symfony\Component\HttpFoundation\Response
    {
        $posts = $postRepository->findBy(['status' => 3]);
        $utilisateur = $this->getUser();
        
        return $this->render('default/catalogue.html.twig', [
            'posts' => $posts, 
            'utilisateur' => $utilisateur,
        ]);
    }
}
