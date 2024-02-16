<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Like; // Import the Like entity
use App\Entity\Post; // Add this line to import the Post entity


class LikeController extends AbstractController
{
    private $security;
    private $entityManager;

    public function __construct(Security $security, EntityManagerInterface $entityManager)
    {
        $this->security = $security;
        $this->entityManager = $entityManager;
    }

    #[Route('/like/{id}', name: 'app_like', requirements: ['id' => '\d+'])]
    public function likeAction($id): Response
    {
        // Check if the user is authenticated
        if (!$this->security->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        // Find the post in the database (you need to adapt this based on your actual entity structure)
        $post = $this->entityManager->getRepository(Post::class)->find($id);

        // Create a new Like entity and associate it with the user and post
        $like = new Like();
        $like->setUser($this->security->getUser());
        $like->setPost($post);

        // Persist and flush the like to the database
        $this->entityManager->persist($like);
        $this->entityManager->flush();

        // You may want to redirect to a different page or return a JSON response

        return $this->redirectToRoute('app_post_show', ['id' => $id]);
    }
}