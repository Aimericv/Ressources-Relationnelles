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
    private $user;
    private $post;

    protected function setUp(): void {
        $this->client = static::createClient(['environment' => 'test']);
        $this->user = static::getContainer()->get(UserRepository::class)->findAll()[0];
        $this->post = static::getContainer()->get(PostRepository::class)->findAll()[0];
    }

    public function testCreateComments()
    {
        // Initialisation
        $entityManager = static::getContainer()->get(EntityManagerInterface::class);

        $result = false;

        $contentComment = "Test Unitaire";

        // Création d'un commentaire

        $comment = new Comment();
        $comment->setUser($this->user);
        $comment->setPost($this->post);
        $comment->setContent($contentComment);
        $comment->setDate(new \DateTime());
        $entityManager->persist($comment);
        $entityManager->flush();

        // Vérification de la création du commentaire
        $commentRepo = static::getContainer()->get(CommentRepository::class);

        $comment = $commentRepo->findBy(['content' => $contentComment]);

        if ($comment[0]->getUser()->getId() == $this->user->getId()) {
            if ($comment[0]->getPost()->getId() == $this->post->getId()) {
                $result = true;
            }
        }

        $this->assertTrue($result);
    }
}
