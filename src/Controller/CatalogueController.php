<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\ImagesRepository;
use App\Repository\ParagraphesRepository;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CatalogueController extends AbstractController
{
    #[Route("/catalogue", name: "app_catalogue")]
    public function catalogue(Request $request, PostRepository $postRepository, SessionInterface $session, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\Response
    {
        // Récupérer les valeurs des filtres depuis la requête
        $dateOrder = $request->query->get('date_order', 'desc');
        $categoryId = $request->query->get('category');
        $categoryId = ($categoryId === '') ? null : (int) $categoryId;

        // Récupérer les posts filtrés en fonction des critères
        $posts = $postRepository->findByFilters($dateOrder, $categoryId);

        // Récupérer l'utilisateur connecté
        $utilisateur = $this->getUser();

        // Récupérer toutes les catégories depuis la base de données
        $categories = $entityManager->getRepository(Category::class)->findAll();

        // Passer les posts, l'utilisateur et les catégories à la vue
        return $this->render('default/catalogue.html.twig', [
            'posts' => $posts,
            'utilisateur' => $utilisateur,
            'categories' => $categories,
        ]);
    }
}
