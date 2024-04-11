<?php

namespace App\Tests\Entity;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserTest extends WebTestCase
{
    private $client;
    private $user;

    protected function setUp(): void {
        $this->client = static::createClient(['environment' => 'test']);
        $this->user = $this->client->getContainer()->get(UserRepository::class)->findAll()[0];
    }

    // Test si la méthode getEmail ressorte bien un string
    public function testGetEmail(): void
    {
        $email = $this->user->getEmail();

        $result = false;

        if (is_string($email)) {
            $result = true;
        }

        $this->assertTrue($result);

    }

// Test si la méthode getAddress ressorte bien un string
    public function testGetAddress(): void
    {
        $address = $this->user->getAddress();

        $result = false;

        if (is_string($address)) {
            $result = true;
        }

        $this->assertTrue($result);

    }

    // Test si la méthode getAvatarImg ressorte bien un string
    public function testGetAvatarImg(): void
    {
        $avatarImg = $this->user->getAvatarImg();

        $result = false;

        if (is_string($avatarImg)) {
            $result = true;
        }

        $this->assertTrue($result);

    }

}