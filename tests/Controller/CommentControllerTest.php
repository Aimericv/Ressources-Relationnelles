<?php

namespace App\Tests\Controller;

use App\Entity\Comment;
use App\Repository\CommentRepository;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentControllerTest extends WebTestCase
{

    private $client;

    protected function setUp(): void {
        $this->client = static::createClient(['environment' => 'test']);
    }

    public function testCreateComments()
    {
        // Initialisation
        $commentRepo = static::getContainer()->get(CommentRepository::class);
        $userRepo = static::getContainer()->get(UserRepository::class);
        $entityManager = static::getContainer()->get(EntityManagerInterface::class);
        $postRepo = static::getContainer()->get(PostRepository::class);

        $result = false;

        $contentComment = "Test Unitaire";
        $userId = 1;
        $postId = 1;

        $user = $userRepo->find(1);
        $post = $postRepo->find(1);

        // Création d'un commentaire

        $comment = new Comment();
        $comment->setUser($user);
        $comment->setPost($post);
        $comment->setContent($contentComment);
        $comment->setDate(new \DateTime());
        $entityManager->persist($comment);
        $entityManager->flush();

        // Vérification de la création du commentaire
        $commentRepo = static::getContainer()->get(CommentRepository::class);

        $comment = $commentRepo->findBy(['content' => $contentComment]);

        if ($comment[0]->getUser()->getId() == $userId) {
            if ($comment[0]->getPost()->getId() == $postId) {
                $result = true;
            }
        }

        $this->assertTrue($result);
    }
}
