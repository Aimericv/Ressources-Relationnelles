<?php
namespace Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;

class LikeTest extends WebTestCase
{

    private $client;

    protected function setUp(): void {
        $this->client = static::createClient(['environment' => 'test']);
    }

    public function isLikeValid($postId, $userId): bool
    {   

        $postRepo = static::getContainer()->get(PostRepository::class);
        $userRepo = static::getContainer()->get(UserRepository::class);

        $post = $postRepo->find($postId);
        $user = $userRepo->find($userId);

        if (isset($user, $post)) {
            $postStatus = $post->getStatus();
            if($postStatus == 3) {
                return true;
            }
        }

        return false;
    }
    
    public function testCreateLike()
    {
        $postId = 1;
        $userId = 1;

        $this->assertTrue($this->isLikeValid($postId, $userId));

        $nonExistentPostId = 999;
        $this->assertFalse($this->isLikeValid($nonExistentPostId, $userId));

        $nonExistentUserId = 999;
        $this->assertFalse($this->isLikeValid($postId, $nonExistentUserId));
    }
}

?>
