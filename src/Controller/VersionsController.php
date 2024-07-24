<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\VersionsRepository;

class VersionsController extends AbstractController
{
    #[Route('/versions', name: 'app_versions')]
    public function versions(VersionsRepository $versionRepo): Response
    {
        $version = $versionRepo->findOneBy(['status' => 1]);

        return $this->render('versions/index.html.twig', [
            'version' => $version,
        ]);
    }
}
