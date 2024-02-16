<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use http\Client\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ImagesRepository;
use App\Repository\ParagraphesRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class DefaultController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

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

    #[Route("/base", name:"app_base")]
    public function base(PostRepository $postRepository): \Symfony\Component\HttpFoundation\Response
    {
        $posts = $postRepository->findAll();
        $utilisateur = $this->getUser();
        return $this->render('base.html.twig', ['posts' => $posts, 'utilisateur' => $utilisateur]);
    }

    #[Route("/", name:"app_homepage")]
    public function post(PostRepository $postRepository, ImagesRepository $imagesRepository, ParagraphesRepository $paragraphesRepository, SessionInterface $session): \Symfony\Component\HttpFoundation\Response
    {
        $visitDate = new \DateTime();
        $session->set('visitDates', [$visitDate->format('Y-m-d H:i:s')]);


        $posts = $postRepository->findAll();
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
        }
        return $this->render('default/index.html.twig', ['posts' => $posts, 'utilisateur' => $utilisateur, 'images' => $imagesPosts]);
    }

    #[Route("/catalogue", name:"app_catalogue")]
    public function catalogue(PostRepository $postRepository, ImagesRepository $imagesRepository, ParagraphesRepository $paragraphesRepository): \Symfony\Component\HttpFoundation\Response
    {
        $posts = $postRepository->findAll();
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
        }
        return $this->render('default/catalogue.html.twig', ['posts' => $posts, 'utilisateur' => $utilisateur, 'images' => $imagesPosts]);
    }

    #[Route("/post/{id}", name: "app_post_detail")]
    public function postDetail($id, PostRepository $postRepository, ImagesRepository $imagesRepository, ParagraphesRepository $paragraphesRepository): \Symfony\Component\HttpFoundation\Response
    {
        $post = $postRepository->find($id);
        $user = $post->getUser();
        $images = $imagesRepository->findBy(['post_id' => $id]);
        $paragraphes = $paragraphesRepository->findBy(['post_id' => $id]);
    
        return $this->render('default/postDetail.html.twig', [
            'user' => $user,
            'post' => $post,
            'images' => $images,
            'paragraphes' => $paragraphes
        ]);
    }


    /* Route /user dans userController */


}
