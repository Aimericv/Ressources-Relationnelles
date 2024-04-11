<?php

namespace App\Tests\ServicesTests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;

class LikeTest extends WebTestCase
{

    private $client;
    private $user;

    protected function setUp(): void {
        $this->client = static::createClient(['environment' => 'test']);
        $this->user = $this->client->getContainer()->get(UserRepository::class)->findAll()[0];
    }

    public function isLikeValid($postId, $userId): bool
    {   

        $postRepo = static::getContainer()->get(PostRepository::class);
        $userRepo = static::getContainer()->get(UserRepository::class);

        $post = $postRepo->find($postId);
        $user = $userRepo->find($userId);

        if (isset($user, $post)) {
            $postStatus = $post->getStatus();
            if($postStatus->getId() == 3) {
                return true;
            }
        }

        return false;
    }
    
    public function testCreateLike()
    {
        $postId = 218;
        $userId = 39;

        $this->assertTrue($this->isLikeValid($postId, $userId));

        $nonExistentPostId = 999;
        $this->assertFalse($this->isLikeValid($nonExistentPostId, $userId));

        $nonExistentUserId = 999;
        $this->assertFalse($this->isLikeValid($postId, $nonExistentUserId));
    }
}

?>
