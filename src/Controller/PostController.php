<?php

namespace App\Controller;

use App\Entity\Images;
use App\Entity\Paragraphes;
use App\Entity\Post;
use App\Entity\User;
use App\Form\PostType;
use App\Repository\CategoryRepository;
use App\Repository\ImagesRepository;
use App\Repository\ParagraphesRepository;
use App\Repository\PostRepository;
use App\Repository\CommentResponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/post')]
class PostController extends AbstractController
{
    #[Route("/post/actions/{id}", name: "app_post_actions", methods: ['POST'])]
    public function postActions($id, Request $request, PostRepository $postRepository, ImagesRepository $imagesRepository, ParagraphesRepository $paragraphesRepository, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\Response
    {
        $post = $postRepository->find($id);
        $images = $imagesRepository->findBy(['post' => $id]);
        $paragraphes = $paragraphesRepository->findBy(['post' => $id]);

        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        if (!$post) {
            throw $this->createNotFoundException('Post not found');
        }

        $action = $request->request->get('action');

        if ($action === 'like') {
            if (!$post->getUsersLike()->contains($this->getUser())) {

                $post->addUsersLike($this->getUser());

                $entityManager->persist($post);
                $entityManager->flush();

            }else{
                $post->removeUsersLike($this->getUser());
                $entityManager->persist($post);
                $entityManager->flush();

            }
        } elseif ($action === 'favorite') {
            if (!$post->getUsersFavorite()->contains($this->getUser())) {

                $post->addUsersFavorite($this->getUser());

                $entityManager->persist($post);
                $entityManager->flush();

            }else{

                $post->removeUsersFavorite($this->getUser());
                $entityManager->persist($post);
                $entityManager->flush();
            }
        } elseif ($action === 'repost') {
            if (!$post->getUsersRepost()->contains($this->getUser())) {

                $post->addUsersRepost($this->getUser());

                $entityManager->persist($post);
                $entityManager->flush();

            }else{
                $post->removeUsersRepost($this->getUser());
                $entityManager->persist($post);
                $entityManager->flush();

            }
        }
        elseif ($action === 'exploited') {
            if (!$post->getUsersParticipation()->contains($this->getUser())) {

                $post->addUsersParticipation($this->getUser());

                $entityManager->persist($post);
                $entityManager->flush();

            }else{
                $post->removeUsersParticipation($this->getUser());

                $entityManager->persist($post);
                $entityManager->flush();

            }
        }

        // ... existing logic

        return $this->redirectToRoute('app_post_detail', ['id' => $id]);
    }

    #[Route('/creation-posts', name: 'app_creation_posts')]
    public function creationPosts(CategoryRepository $catRepo): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $categories = $catRepo->findAll();

        return $this->render('creation_posts/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/creation-posts/add', name: 'app_creation_posts_add')]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $userId = $this->getUser()->getId();
        $jsonData = json_decode($request->request->get('json_data'), true);

        $post = new Post();
        $post->setTitle($jsonData[0]['title']); // Récupérer le titre du premier élément du tableau JSON
        $post->setDescription($jsonData[0]['description']); // Récupérer la description du premier élément du tableau JSON
        $category_id = $jsonData[0]['category'];
        $category = $entityManager->getReference('App\Entity\Category', $category_id);
        $post->setType($category);
        $post->setCreatedAt(new \DateTime());
        $post->setStatus($entityManager->getReference('App\Entity\PostStatus', 2));
        $userRepository = $entityManager->getRepository(User::class);
        $user = $userRepository->find($userId);
        $post->setUser($user);
        $post->setAddress($jsonData[0]['address']);
        $entityManager->persist($post);
        $entityManager->flush();

        foreach ($jsonData as $key => $element) {
            if ($element['type'] == 'paragraph') {
                $paragraph = new Paragraphes();
                $paragraph->setContent($element['content']);
                $paragraph->setWidth($element['width']);
                $paragraph->setHeight($element['height']);
                $paragraph->setX($element['x']);
                $paragraph->setY($element['y']);
                $paragraph->setPostId($post);
                $entityManager->persist($paragraph);
                $entityManager->flush();
            } elseif ($element['type'] == 'image') {
                $image = new Images();
                $image->setSrc($element['src']);
                $image->setWidth($element['width']);
                $image->setHeight($element['height']);
                $image->setX($element['x']);
                $image->setY($element['y']);
                $image->setPostId($post);
                $entityManager->persist($image);
                $entityManager->flush();
            }
        }

        return $this->redirectToRoute('app_user');
    }


    #[Route('/modification-posts/{id}', name: 'app_modification_posts')]
    public function modify(Request $request, $id, CategoryRepository $catRepo, EntityManagerInterface $entityManager): Response
    {
        $userId = $this->getUser()->getId();

        $post = $entityManager->getRepository(Post::class)->find($id);
        $paragraphs = $entityManager->getRepository(Paragraphes::class)->findByPostId($id);
        $images = $entityManager->getRepository(Images::class)->findByPostId($id);
        $categorie = $catRepo->findAll();

        if (!$post) {
            throw new \Exception('Post non trouvé');
        }
        return $this->render('creation_posts/index.html.twig', [
            'categories' => $categorie,
            'post' => $post,
            'images' => $images,
            'paragraphes' => $paragraphs
        ]);
    }


    #[Route('/modification-posts/{id}/edit', name: 'app_modification_posts_edit')]
    public function editPosts(Request $request, $id, CategoryRepository $catRepo, EntityManagerInterface $entityManager): Response
    {
        $jsonData = json_decode($request->request->get('json_data'), true);
        var_dump($jsonData);

        $post = $entityManager->getRepository(Post::class)->find($id);

        if (!$post) {
            throw new \Exception('Post non trouvé');
        }

        $post->setTitle($jsonData[0]['title']);
        $post->setDescription($jsonData[0]['description']);
        $category = $catRepo->find((int) $jsonData[0]['category']);
        $post->setType($category);
        $post->setCreatedAt(new \DateTime());
        $post->setAddress($jsonData[0]['address']);
        $post->setStatus($entityManager->getReference('App\Entity\PostStatus', 2));

        $entityManager->persist($post);
        $entityManager->flush();

        foreach ($jsonData as $key => $element) {
            if ($element['type'] == "image") {
                if ($element['id'] != "") {
                    $imageId = $element['id'];
                    $imageRepository = $entityManager->getRepository(Images::class);
                    $image = $imageRepository->find($imageId);
                }
                else {
                    $image = new Images();
                }
                $image->setWidth($element['width']);
                $image->setHeight($element['height']);
                $image->setX($element['x']);
                $image->setY($element['y']);
                $image->setPostId($post);
                $image->setSrc($element['src']);
                $entityManager->persist($image);
                $entityManager->flush();
            }

            if ($element['type'] == 'paragraph') {
                if (!isset($element['id']) || $element['id'] == "") {
                    $paragraph = new Paragraphes();
                } else {
                    $paragraphId = $element['id'];
                    $paragraphRepository = $entityManager->getRepository(Paragraphes::class);
                    $paragraph = $paragraphRepository->find($paragraphId);
                }
                if($element['content'] == "" || $element['content'] == null) {
                    $paragraph->setContent("");
                }else{
                    $paragraph->setContent($element['content']);
                }
                $paragraph->setWidth($element['width']);
                $paragraph->setHeight($element['height']);
                $paragraph->setX($element['x']);
                $paragraph->setY($element['y']);
                $paragraph->setPostId($post);
                $entityManager->persist($paragraph);
                $entityManager->flush();
            }
        }

        return $this->redirectToRoute('app_user');
    }


    #[Route('/modification-post/upload', name: 'app_modification_posts_upload')]
    public function upload(Request $request)
    {
        $uploadedFile = $request->files->get('file'); // Récupérer le fichier
        $imageName = $request->request->get('image-name'); // Récupérer le nom de l'image

        if ($imageName !== null && $uploadedFile !== null) {
            $directory = $this->getParameter('kernel.project_dir') . '/public/images/post/';
            $uploadedFile->move($directory, $imageName);
            return new Response('Image uploaded successfully', Response::HTTP_OK);
        }

        return new Response('No file uploaded or invalid request', Response::HTTP_BAD_REQUEST);
    }


    #[Route('/modification-post/delete', name: 'app_modification_post_delete')]
    public function deleteImage(Request $request, EntityManagerInterface $entityManager, ImagesRepository $imageRepository): Response
    {
        $data = json_decode($request->getContent(), true);
        $imageName = $data['imageName'];

        $filePath = $this->getParameter('kernel.project_dir') . '/public' . $imageName;

        if (file_exists($filePath)) {
            unlink($filePath);

            $image = $imageRepository->findOneBySrc($imageName);

            if ($image != null) {
                $entityManager->remove($image);
                $entityManager->flush();
            }

            return new Response('Image deleted successfully', Response::HTTP_OK);
        } else {
            return new Response('File not found: ' . $filePath, Response::HTTP_NOT_FOUND);
        }
    }




    #[Route('/delete-posts/{id}', name: 'app_delete_posts')]
    public function deletePosts($id, Request $request, EntityManagerInterface $entityManager, PostRepository $postRepo): Response
    {
        $post = $postRepo->find($id);

        if (!$post) {
            throw new \Exception('Post non trouvé');
        }

        $images = $entityManager->getRepository(Images::class)->findByPostId($id);
        foreach ($images as $image) {
            $imagePath = $this->getParameter('kernel.project_dir') . '/public' . $image->getSrc();
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $entityManager->remove($image);
        }

        $paragraphs = $entityManager->getRepository(Paragraphes::class)->findByPostId($id);
        foreach ($paragraphs as $paragraph) {
            $entityManager->remove($paragraph);
        }

        $entityManager->remove($post);
        $entityManager->flush();

        if ($request->headers->get('referer') === $this->generateUrl('dashboard')) {
            return $this->redirectToRoute('app_dashboard');
        } else {
            return $this->redirectToRoute('app_user');
        }
    }

    #[Route("/post/{id}", name: "app_post_detail")]

    public function postDetail($id, CommentResponseRepository $commentRespRepo, PostRepository $postRepository, ImagesRepository $imagesRepository, ParagraphesRepository $paragraphesRepository, Request $request, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\Response
    {
        $user = $this->getUser();

        if(!$user) {
            return $this->redirectToRoute('app_login');
        }

        $post = $postRepository->find($id);
        $images = $imagesRepository->findBy(['post' => $id]);
        $paragraphes = $paragraphesRepository->findBy(['post' => $id]);
        $comments = $post->getComments();
        $commentResponse = $commentRespRepo->findAll();

        $existingLike = $user->getLikes()->contains($post);


        $existingFavorite = $user->getFavorites()->contains($post);

        $existingRepost = $user->getReposts()->contains($post);

        $existingExploited = $user->getPostsParticipation()->contains($post);


        return $this->render('default/postDetail.html.twig', ['utilisateur' => $user, 'existingLike' => $existingLike, 'existingFavorite' => $existingFavorite, 'existingRepost' => $existingRepost,'post' => $post, 'images' => $images, 'paragraphes' => $paragraphes, 'existingExploited' => $existingExploited, 'comments' => $comments, 'commentResponse' => $commentResponse]);
    }
}
