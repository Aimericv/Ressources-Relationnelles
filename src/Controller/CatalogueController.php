<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\ImagesRepository;
use App\Repository\ParagraphesRepository;
use App\Repository\PostRepository;
use App\Repository\VersionsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CatalogueController extends AbstractController
{
    #[Route("/catalogue", name: "app_catalogue")]
    public function catalogue(VersionsRepository $versionRepo, Request $request, PostRepository $postRepository, SessionInterface $session, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\Response
    {
        $dateOrder = $request->query->get('date_order', 'desc');
        $categoryId = $request->query->get('category');
        $categoryId = ($categoryId === '') ? null : (int) $categoryId;

        $posts = $postRepository->findByFilters($dateOrder, $categoryId);
        $utilisateur = $this->getUser();
        $categories = $entityManager->getRepository(Category::class)->findAll();
        $version = $versionRepo->findOneBy(['status' => 1]);

        return $this->render('default/catalogue.html.twig', [
            'posts' => $posts,
            'utilisateur' => $utilisateur,
            'categories' => $categories,
            'version' => $version,
        ]);
    }
}
