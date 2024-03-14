<?php

namespace App\Tests\ServicesTests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostTest extends WebTestCase
{    
    public function isResponseValid(array $responseData): bool
    {
        foreach ($responseData as $data) {
            if ($data['type'] === 'parametre') {
                $requiredKeys = ['title', 'description', 'category', 'address'];
                if (array_diff($requiredKeys, array_keys($data))) {
                    return false;
                }
            } elseif ($data['type'] === 'paragraph') {
                $paragraphKeys = ['content', 'x', 'y', 'width', 'height'];
                if (array_diff($paragraphKeys, array_keys($data))) {
                    return false;
                }
            } elseif ($data['type'] === 'image') {
                $imageKeys = ['src', 'x', 'y', 'width', 'height'];
                if (array_diff($imageKeys, array_keys($data))) {
                    return false;
                }
            }
        }

        return true;
    }

    public function testCreatePost()
    {
        $postData = [
            [
                'type' => 'parametre',
                'title' => 'Sample Title',
                'description' => 'Sample Description',
                'category' => 'Sample Category',
                'address' => 'Sample Address',
            ],
            [
                'type' => 'paragraph', 
                'x' => 10,
                'y' => 20,
                'content' => 'Sample Content',
                'width' => 100,
                'height' => 200
            ],
            [
                'type' => 'image',
                'src' => 'sample-image.jpg',
                'x' => 50,
                'y' => 60,
                'width' => 300,
                'height' => 400
            ]
        ];

        $this->assertTrue($this->isResponseValid($postData));
    }
}
?>
