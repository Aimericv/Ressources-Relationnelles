<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\ImagesRepository;
use App\Repository\PostStatusRepository;
use App\Repository\VersionsRepository;
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
    public function search(Request $request, VersionsRepository $versionRepo): Response
    {
        $term = $request->query->get('term');
        $posts = $this->entityManager->getRepository(Post::class)->findByTitle($term);
        $utilisateur = $this->getUser();
        $version = $versionRepo->findOneBy(['status' => 1]);

        return $this->render('post/search.html.twig', [
            'posts' => $posts,
            'utilisateur' => $utilisateur,
            'version' => $version,
        ]);
    }
}