<?php

namespace App\Tests\Entity;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserTest extends WebTestCase
{
    private $client;

    protected function setUp(): void {
        $this->client = static::createClient(['environment' => 'test']);
    }

    // Test si la méthode getEmail ressorte bien un string
    public function testGetEmail(): void
    {
        $userRepo = static::getContainer()->get(UserRepository::class);

        $user = $userRepo->find(1);
        $email = $user->getEmail();

        $result = false;

        if (is_string($email)) {
            $result = true;
        }

        $this->assertTrue($result);

    }

// Test si la méthode getAddress ressorte bien un string
    public function testGetAddress(): void
    {
        $userRepo = static::getContainer()->get(UserRepository::class);

        $user = $userRepo->find(1);
        $address = $user->getAddress();

        $result = false;

        if (is_string($address)) {
            $result = true;
        }

        $this->assertTrue($result);

    }

    // Test si la méthode getAvatarImg ressorte bien un string
    public function testGetAvatarImg(): void
    {
        $userRepo = static::getContainer()->get(UserRepository::class);

        $user = $userRepo->find(1);
        $avatarImg = $user->getAvatarImg();

        $result = false;

        if (is_string($avatarImg)) {
            $result = true;
        }

        $this->assertTrue($result);

    }

}