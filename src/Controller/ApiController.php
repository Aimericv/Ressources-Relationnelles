<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends AbstractController
{
    #[Route("/api-test", name: "app_api_test")]
    public function apiTest(): Response
    {
        return $this->render('api/apiTest.html.twig');
    }

    #[Route("/api-test/add", name: "app_api_test_add")]
    public function apiTestAdd(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $response = [
            'status' => 'success',
            'receivedData' => $data
        ];

        return new JsonResponse($response);
    }
}