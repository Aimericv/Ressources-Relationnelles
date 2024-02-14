<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Paragraphes;
use App\Entity\Images;
use App\Entity\PostStatus; // Assurez-vous d'importer l'entité PostStatus
use Doctrine\ORM\EntityManagerInterface; // Importez l'interface EntityManagerInterface
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Entity\User;

class CreationPostsController extends AbstractController
{
    private $security;
    private $entityManager; // Ajoutez la propriété entityManager

    public function __construct(Security $security, EntityManagerInterface $entityManager)
    {
        $this->security = $security;
        $this->entityManager = $entityManager; // Initialisez la propriété entityManager
    }

    #[Route('/creation-posts', name: 'app_creation_posts')]
    public function index(): Response
    {
        if (!$this->security->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('creation_posts/index.html.twig');
    }

    #[Route('/creation-posts/add', name: 'app_creation_posts_add')]
    public function add(Request $request): Response
    {
        $userId = $this->security->getUser()->getId();

        // Récupérer les données JSON depuis la requête
        $jsonData = json_decode($request->request->get('json_data'), true);


        $entityManager = $this->entityManager;

        $post = new Post();
        $post->setTitle($jsonData[0]['title']); // Récupérer le titre du premier élément du tableau JSON
        $post->setDescription($jsonData[0]['description']); // Récupérer la description du premier élément du tableau JSON
        $post->setType($jsonData[0]['category']);
        $post->setCreatedAt(new \DateTime());

        $postStatus = $entityManager->getRepository(PostStatus::class)->findOneBy(['name' => 'Pending']);
        if (!$postStatus) {
            throw new \Exception('Statut de post non trouvé');
        }
        $post->setStatus($postStatus);

        $userRepository = $entityManager->getRepository(User::class);
        $user = $userRepository->find($userId);

        if (!$user) {
            throw new \Exception('Utilisateur non trouvé');
        }

        $post->setUser($user);

        $entityManager->persist($post);

//////////////////////////////////

$uploadedFile = $request->files->get('image-input');
var_dump($uploadedFile);

if ($uploadedFile) {
    $fileName = md5(uniqid()) . '.' . $uploadedFile->getClientOriginalExtension();
    $directory = $this->getParameter('kernel.project_dir') . '/public/images/post/';
    $uploadedFile->move($directory, $fileName);
    $imagePath = '/images/post/' . $fileName;

    var_dump($jsonData);

    foreach ($jsonData as $key => $element) {
        if ($key === 0) {
            continue;
        }
        if ($element['type'] == 'paragraph') {
            $paragraph = new Paragraphes();
            $paragraph->setContent($element['content']);
            $paragraph->setWidth($element['width']);
            $paragraph->setHeight($element['height']);
            $paragraph->setX($element['x']);
            $paragraph->setY($element['y']);
            $paragraph->setPostId($post);
            $entityManager->persist($paragraph);
            echo("para ok");
        } elseif ($element['type'] == 'image') {
            $image = new Images();
            $image->setSrc($imagePath);
            $image->setWidth($element['width']);
            $image->setHeight($element['height']);
            $image->setX($element['x']);
            $image->setY($element['y']);
            $image->setPostId($post);
            $entityManager->persist($image);
            echo("image ok");
        }
    }
}

        $entityManager->flush();

        return new Response('Post ajouté avec succès', Response::HTTP_OK);
    }

    #[Route('/modification-posts/{id}', name: 'app_modification_posts')]
    public function modify(Request $request, $id): Response
    {
        $userId = $this->security->getUser()->getId();

        $entityManager = $this->entityManager;

        // Trouver le post à modifier
        $post = $entityManager->getRepository(Post::class)->find($id);

        if (!$post) {
            throw new \Exception('Post non trouvé');
        }

        // Récupérer les données JSON depuis la requête
        $jsonData = json_decode($request->request->get('json_data'), true);

        $post->setTitle($jsonData[0]['title']); // Modifier le titre du post
        $post->setDescription($jsonData[0]['description']); // Modifier la description du post
        $post->setType($jsonData[0]['category']);

        // Mettre à jour la date de modification
        $post->setModifiedAt(new \DateTime());

        // Mettre à jour le statut du post s'il y a lieu
        if (isset($jsonData[0]['status'])) {
            $postStatus = $entityManager->getRepository(PostStatus::class)->findOneBy(['name' => $jsonData[0]['status']]);
            if (!$postStatus) {
                throw new \Exception('Statut de post non trouvé');
            }
            $post->setStatus($postStatus);
        }

        $entityManager->persist($post);

        // Gérer les modifications d'image ou de contenu de paragraphe
        $uploadedFile = $request->files->get('image-input');
        if ($uploadedFile) {
            $fileName = md5(uniqid()) . '.' . $uploadedFile->getClientOriginalExtension();
            $directory = $this->getParameter('kernel.project_dir') . '/public/images/post/';
            $uploadedFile->move($directory, $fileName);
            $imagePath = '/images/post/' . $fileName;

            foreach ($jsonData as $key => $element) {
                if ($key === 0) {
                    continue;
                }
                if ($element['type'] == 'paragraph') {
                    // Modifier le contenu du paragraphe existant
                    $paragraphId = $element['id']; // Supposons que l'identifiant du paragraphe soit envoyé depuis le frontend
                    $paragraph = $entityManager->getRepository(Paragraphes::class)->find($paragraphId);
                    if ($paragraph) {
                        $paragraph->setContent($element['content']);
                        $entityManager->persist($paragraph);
                    }
                } elseif ($element['type'] == 'image') {
                    // Modifier le chemin de l'image existante
                    $imageId = $element['id']; // Supposons que l'identifiant de l'image soit envoyé depuis le frontend
                    $image = $entityManager->getRepository(Images::class)->find($imageId);
                    if ($image) {
                        $image->setSrc($imagePath);
                        $entityManager->persist($image);
                    }
                }
            }
        }

        $entityManager->flush();

        return new Response('Post modifié avec succès', Response::HTTP_OK);
    }



    #[Route('/suppression-posts/{id}', name: 'app_suppression_posts')]
    public function delete($id): Response
    {
        $entityManager = $this->entityManager;

        // Trouver le post à supprimer
        $post = $entityManager->getRepository(Post::class)->find($id);

        if (!$post) {
            throw new \Exception('Post non trouvé');
        }

        // Supprimer les images associées au post
        $images = $post->getImages();
        foreach ($images as $image) {
            $imagePath = $this->getParameter('kernel.project_dir') . '/public' . $image->getSrc();
            if (file_exists($imagePath)) {
                unlink($imagePath); // Supprimer le fichier image du répertoire public
            }
            $entityManager->remove($image); // Supprimer l'entité image de la base de données
        }

        // Supprimer les paragraphes associés au post
        $paragraphs = $post->getParagraphes();
        foreach ($paragraphs as $paragraph) {
            $entityManager->remove($paragraph); // Supprimer l'entité paragraphe de la base de données
        }

        // Supprimer le post lui-même
        $entityManager->remove($post);
        $entityManager->flush();

        return new Response('Post et ses éléments associés supprimés avec succès', Response::HTTP_OK);
    }

}