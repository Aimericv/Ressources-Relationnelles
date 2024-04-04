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
    public function post(PostRepository $postRepository, SessionInterface $session): \Symfony\Component\HttpFoundation\Response
    {

        $visitDate = new \DateTime();
        $visitDates = $session->get('visitDates', []);
        $visitDates[] = $visitDate->format('Y-m-d H:i:s');
        $session->set('visitDates', $visitDates);

        $utilisateur = $this->getUser();

        if ($utilisateur) {
            $follows = $utilisateur->getFollows();
        }
        $allposts = $postRepository->findBy(['status' => 3]);

        return $this->render('default/index.html.twig', [
            'utilisateur' => $utilisateur,
            'posts'=>$allposts,
        ]);
    }
}
