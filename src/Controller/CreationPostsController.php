<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreationPostsController extends AbstractController
{
    #[Route('/creation-posts', name: 'app_creation_posts')]
    public function index(): Response
    {
        return $this->render('creation_posts/index.html.twig', [
            'controller_name' => 'CreationPostsController',
        ]);
    }
}
