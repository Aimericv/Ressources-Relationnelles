<?php
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentControllerTest extends WebTestCase
{
    public function testCreateComment()
    {
        // Créer un client HTTP
        $client = static::createClient();

        // Se connecter en tant qu'utilisateur (vous pouvez adapter cela en fonction de votre système d'authentification)
        $crawler = $client->request('GET', '/login');
        $form = $crawler->selectButton('Se connecter')->form();
        $form['username'] = 'test_user';
        $form['password'] = 'test_password';
        $client->submit($form);

        // Effectuer une requête POST pour créer un commentaire
        $client->request('POST', '/comment/create', [], [], ['CONTENT_TYPE' => 'application/json'], '{"content": "Contenu du commentaire"}');

        // Vérifier que la réponse est réussie (code 200)
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // Vérifier que le commentaire a été créé en vérifiant la réponse JSON
        $this->assertJsonStringEqualsJsonString('{"success": true}', $client->getResponse()->getContent());
    }

    public function testGetComments()
    {
        // Créer un client HTTP
        $client = static::createClient();

        // Se connecter en tant qu'utilisateur (vous pouvez adapter cela en fonction de votre système d'authentification)
        $crawler = $client->request('GET', '/login');
        $form = $crawler->selectButton('Se connecter')->form();
        $form['username'] = 'test_user';
        $form['password'] = 'test_password';
        $client->submit($form);

        // Effectuer une requête GET pour obtenir la liste des commentaires
        $client->request('GET', '/comments');

        // Vérifier que la réponse est réussie (code 200)
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // Vérifier que la réponse contient des données de commentaires
        $this->assertStringContainsString('Comment 1', $client->getResponse()->getContent());
        $this->assertStringContainsString('Comment 2', $client->getResponse()->getContent());
        // Ajoutez autant d'assertions que nécessaire en fonction de la structure de votre réponse JSON
    }
}
