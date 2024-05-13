<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VersionsController extends AbstractController
{
    #[Route('/versions', name: 'app_versions')]
    public function versions(): Response
    {
        return $this->render('versions/index.html.twig', [
            'controller_name' => 'VersionsController',
        ]);
    }
}
