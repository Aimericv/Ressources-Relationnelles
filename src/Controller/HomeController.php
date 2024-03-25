<?php

namespace App\Controller;

use App\Repository\ImagesRepository;
use App\Repository\ParagraphesRepository;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route("/base", name:"app_base")]
    public function base(PostRepository $postRepository): \Symfony\Component\HttpFoundation\Response
    {
        $utilisateur = $this->getUser();
        return $this->render('base.html.twig', ['utilisateur' => $utilisateur]);
    }

    #[Route("/", name:"app_homepage")]
    public function post(PostRepository $postRepository, ImagesRepository $imagesRepository, ParagraphesRepository $paragraphesRepository, SessionInterface $session): \Symfony\Component\HttpFoundation\Response
    {

        $visitDate = new \DateTime();
        $session->set('visitDates', [$visitDate->format('Y-m-d H:i:s')]);

        $images = $imagesRepository->findAll();
        $imagesPosts = [];
        $utilisateur = $this->getUser();

        $posts = [];

        $repostPosts = [];

        if ($utilisateur) {
            $follows = $utilisateur->getFollows();

            foreach ($follows as $follow) {
                $posts[] = $follow->getPosts();
            }

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
            $repostPosts = $utilisateur->getReposts();
        }

        $allposts = $postRepository->findBy(['status' => 3]);

        return $this->render('default/index.html.twig', ['user' => $this->getUser(),'posts' => $posts, 'allposts'=>$allposts,  'repostPosts' => $repostPosts,
            'utilisateur' => $utilisateur, 'images' => $imagesPosts]);
    }
}
