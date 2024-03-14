<?php

namespace App\Controller;

use App\Repository\ImagesRepository;
use App\Repository\ParagraphesRepository;
use App\Repository\PostRepository;
use App\Repository\RepostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route("/base", name:"app_base")]
    public function base(PostRepository $postRepository): \Symfony\Component\HttpFoundation\Response
    {
        $posts = $postRepository->findAll();
        $utilisateur = $this->getUser();
        return $this->render('base.html.twig', ['posts' => $posts, 'utilisateur' => $utilisateur]);
    }

    #[Route("/", name:"app_homepage")]
    public function post(PostRepository $postRepository, ImagesRepository $imagesRepository, ParagraphesRepository $paragraphesRepository, SessionInterface $session, RepostRepository $repostRepository): \Symfony\Component\HttpFoundation\Response
    {
        $images = $imagesRepository->findAll();
        $imagesPosts = [];
        $utilisateur = $this->getUser();
        $posts = $postRepository->findPostsByUser($utilisateur);

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


        $user = $this->getUser();
        if($user){
            $repostPosts = $repostRepository->findRepostPostsByUser($user);

        }else{
            $repostPosts='null';
        }


        $allposts = $postRepository->findAll();


        return $this->render('default/index.html.twig', ['user' => $this->getUser(),'posts' => $posts, 'allposts'=>$allposts,  'repostPosts' => $repostPosts,
            'utilisateur' => $utilisateur, 'images' => $imagesPosts]);
    }
}
