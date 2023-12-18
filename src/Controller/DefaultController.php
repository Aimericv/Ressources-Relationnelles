<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use http\Client\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DefaultController.php',
        ]);
    }

//    #[Route("/", name:"app_homepage")]
//    public function indexs()
//    {
//        //$utilisateur = $this->getUser();
//
//
//        return $this->render('default/index.html.twig', /*[
//            'utilisateur' => $utilisateur,
//        ]*/);
//    }


    #[Route("/", name:"app_homepage")]
    public function post(PostRepository $postRepository): \Symfony\Component\HttpFoundation\Response
    {
        $posts = $postRepository->findAll();
        $utilisateur = $this->getUser();
        return $this->render('default/index.html.twig', ['posts' => $posts, 'utilisateur' => $utilisateur]);
    }

    #[Route("/post{id}", name: "app_post_detail")]
    public function postDetail($id, PostRepository $postRepository): \Symfony\Component\HttpFoundation\Response
    {
        $post = $postRepository->find($id);

        // Vérifiez si le post existe
        if (!$post) {
            throw $this->createNotFoundException('Le poste n\'existe pas.');
        }

        return $this->render('default/postDetail.html.twig', ['post' => $post]);
    }


}
