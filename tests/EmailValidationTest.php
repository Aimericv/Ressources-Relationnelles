<?php

namespace App\Tests;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EmailValidationTest extends WebTestCase
{

    private $client;
    private $user;

    protected function setUp(): void {
        $this->client = static::createClient(['environment' => 'test']);
        $this->user = $this->client->getContainer()->get(UserRepository::class)->findAll()[0];
    }

    public function testValidEmailFormat()
    {

        // Définir une adresse email valide
        $result = preg_match("/^[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$/", $this->user->getEmail());

        $bool = false;
        if ($result === 1) {
            $bool = true;
        }

        // Vérifier qu'il n'y a pas de violations de contraintes
        $this->assertTrue($bool);
    }
}
