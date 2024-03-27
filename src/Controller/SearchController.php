<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\ImagesRepository;
use App\Repository\PostStatusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route("/search", name:"app_post_search")]
    public function search(Request $request, ImagesRepository $imagesRepository, PostStatusRepository $postStatusRepo): Response
    {
        $term = $request->query->get('term');
        $posts = $this->entityManager->getRepository(Post::class)->findByTitle($term);

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
        return $this->render('post/search.html.twig', [
            'posts' => $posts,
            'utilisateur' => $utilisateur,
            'images' => $imagesPosts
        ]);
    }
}