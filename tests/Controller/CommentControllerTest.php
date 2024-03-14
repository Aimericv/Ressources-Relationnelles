<?php
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentControllerTest extends WebTestCase
{
    protected function setUp(): void {
        $this->client = static::createClient(['environment' => 'test']);
    }

    public function testCommentValid($postId, $userId, $contentComment):bool
    {
        $commentRepo = static::getContainer()->get(CommentRepository::class);

        $comment = $commentRepo->findBy(['content' => $contentComment]);
         
        if ($comment->getUser()->getId() == $userId) {
            if ($comment->getPost()->getId() == $postId) {
                return true;
            }
        }

        return false;
    }

    public function testCreateComments()
    {
        $commentRepo = static::getContainer()->get(CommentRepository::class);
        $userRepo = static::getContainer()->get(UserRepository::class);
        $entityManager = static::getContainer()->get(EntityManagerInterface::class);

        $content = "Test Unitaire";
        $userId = 1;
        $postId = 1;

        $user = $userRepo->find(1);
        $post = $postRepo->find(1);

        $comment = new Comment();
        $comment->setUser($user);
        $comment->setPost($post);
        $comment->setContent($content);
        $comment->setDate(new \DateTime());
        $entityManager->persist($comment);
        $entityManager->flush();

        $this->assertTrue($this->testCommentValid($postId, $userId, $content));
    }
}
