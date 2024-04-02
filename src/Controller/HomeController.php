<?php

namespace App\Controller;

use App\Repository\ImagesRepository;
use App\Repository\ParagraphesRepository;
use App\Repository\PostRepository;
use App\Repository\RoleRepository;
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
    public function post(PostRepository $postRepository, ImagesRepository $imagesRepository, ParagraphesRepository $paragraphesRepository, SessionInterface $session, RoleRepository $roleRepo): \Symfony\Component\HttpFoundation\Response
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

            $imagesPosts = [];

            foreach ($follows as $follow) {
                $followPosts = $follow->getPosts()->toArray();
            
                foreach ($followPosts as $post) {
                    if ($post->getStatus()->getId() == 3) { // Vérifiez si le statut du post est égal à 3
                        $posts[] = $post; // Ajoutez le post au tableau $posts
            
                        $post_id = $post->getId();
                        $imagesPostId = [];
                        foreach ($images as $image) {
                            if ($post_id == $image->getPostId()->getId()) {
                                $imagesPostId[] = $image;
                            }
                        }
                        $imagesPosts[$post_id] = $imagesPostId;
                    }
                }
            }
            
            $abonnees = $utilisateur->getFollows();
            $imagesReposts = [];

            foreach ($abonnees as $repostUser) {
                $repostPosts = $repostUser->getReposts();

                foreach ($repostPosts as $repost) {
                    $repost_id = $repost->getId();
                    $imagesRepostId = [];

                    foreach ($images as $image) {
                        if ($repost_id == $image->getPostId()->getId()) {
                            $imagesRepostId = $image;
                        }
                    }
                    $imagesReposts[$repost_id] = $imagesRepostId;
                }
            }

        }
        $allposts = $postRepository->findBy(['status' => 3]);

        dd($imagesPosts);

        return $this->render('default/index.html.twig', [
            'user' => $this->getUser(),
            'posts' => $posts, 
            'allposts'=>$allposts,  
            'repostPosts' => $repostPosts,
            'utilisateur' => $utilisateur, 
            'images' => $imagesPosts,
            'repostImage' => $imagesReposts,
            'repostUser' => $repostUser,
        ]);
    }
}
