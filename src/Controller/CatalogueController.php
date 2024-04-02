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
    public function catalogue(PostRepository $postRepository, ImagesRepository $imagesRepository, ParagraphesRepository $paragraphesRepository, SessionInterface $session): \Symfony\Component\HttpFoundation\Response
    {
        $posts = $postRepository->findBy(['status' => 3]);
        $images = $imagesRepository->findAll();
        $imagesPosts = [];
        $utilisateur = $this->getUser();
        foreach ($posts as $post) {
            $post_id = $post->getId();
            $imagesPostId = [];
            foreach ($images as $image) {
                if ($post_id == $image->getPostId()->getId()) {
                    $imagesPostId[] = $image;
                }
            }
            $imagesPosts[$post_id] = $imagesPostId;
            $catId = $post->getType();
        }
        return $this->render('default/catalogue.html.twig', [
            'posts' => $posts, 
            'utilisateur' => $utilisateur, 
            'images' => $imagesPosts
        ]);
    }
}
