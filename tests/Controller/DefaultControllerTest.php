<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{

    private $client;

    protected function setUp(): void {
        $this->client = static::createClient(['environment' => 'test']);
    }

    /*public function testIndex()
    {
        $this->client->request('GET', '/default');

        $this->assertResponseIsSuccessful();
        $this->assertJson($this->client->getResponse()->getContent());
        $this->assertJsonStringEqualsJsonString(
            '{"message":"Welcome to your new controller!","path":"src/Controller/DefaultController.php"}',
            $this->client->getResponse()->getContent()
        );
    }

    public function testBase()
    {
        $this->client->request('GET', '/base');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Base Page'); // Replace 'h1' with your heading selector
    }

    public function testPost()
    {
        $this->client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Post Page'); // Replace 'h1' with your heading selector
    }

    public function testCatalogue()
    {
        $this->client->request('GET', '/catalogue');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Catalogue Page'); // Replace 'h1' with your heading selector
    }

    public function testPostDetail()
    {
        $this->client->request('GET', '/post/1'); // Replace '1' with the ID of a post in your database

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Post Detail Page'); // Replace 'h1' with your heading selector
    }*/
}
?>
