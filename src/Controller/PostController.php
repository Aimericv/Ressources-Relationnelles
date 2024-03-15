<?php

namespace App\Controller;

use App\Entity\Favorite;
use App\Entity\Like;
use App\Entity\Post;
use App\Entity\Repost;
use App\Entity\UserParticipation;
use App\Form\PostType;
use App\Repository\FavoriteRepository;
use App\Repository\UserParticipationRepository;
use App\Repository\ImagesRepository;
use App\Repository\LikeRepository;
use App\Repository\ParagraphesRepository;
use App\Repository\PostRepository;
use App\Repository\RepostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/post')]
class PostController extends AbstractController
{
    #[Route('/', name: 'app_post_index', methods: ['GET'])]
    public function index(PostRepository $postRepository): Response
    {
        return $this->render('post/index.html.twig', [
            'posts' => $postRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_post_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('post/new.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_post_show', methods: ['GET'])]
    public function show(Post $post): Response
    {
        return $this->render('post/show.html.twig', [
            'post' => $post,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_post_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Post $post, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('post/edit.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_post_delete', methods: ['POST'])]
    public function delete(Request $request, Post $post, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$post->getId(), $request->request->get('_token'))) {
            $entityManager->remove($post);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route("/post/{id}", name: "app_post_actions", methods: ['POST'])]
    public function postActions($id, Request $request, PostRepository $postRepository, ImagesRepository $imagesRepository, ParagraphesRepository $paragraphesRepository, LikeRepository $likeRepository, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\Response
    {
        $post = $postRepository->find($id);
        $images = $imagesRepository->findBy(['post_id' => $id]);
        $paragraphes = $paragraphesRepository->findBy(['post_id' => $id]);

        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $post = $entityManager->getRepository(Post::class)->find($id);

        if (!$post) {
            throw $this->createNotFoundException('Post not found');
        }

        $action = $request->request->get('action');

        $existingLike = $entityManager->getRepository(Like::class)->findOneBy([
            'user' => $this->getUser(),
            'post' => $post,
        ]);

        $existingFavorite = $entityManager->getRepository(Favorite::class)->findOneBy([
            'user' => $this->getUser(),
            'post' => $post,
        ]);

        $existingRepost = $entityManager->getRepository(Repost::class)->findOneBy([
            'user' => $this->getUser(),
            'post' => $post,
        ]);

        $existingExploited = $entityManager->getRepository(UserParticipation::class)->findOneBy([
            'user' => $this->getUser(),
            'post' => $post,
        ]);

        if ($action === 'like') {
            if (!$existingLike) {

                $like = new Like();
                $like->setUser($this->getUser());
                $like->setPost($post);

                $entityManager->persist($like);
                $entityManager->flush();

                $existingLike=true;
            }else{
                $entityManager->remove($existingLike);
                $entityManager->flush();
                $existingLike=false;

            }
        } elseif ($action === 'favorite') {
            if (!$existingFavorite) {

                $favorite = new Favorite();
                $favorite->setUser($this->getUser());
                $favorite->setPost($post);

                $entityManager->persist($favorite);
                $entityManager->flush();

                $existingFavorite=true;
            }else{
                $entityManager->remove($existingFavorite);
                $entityManager->flush();
                $existingFavorite=false;

            }
        } elseif ($action === 'repost') {
            if (!$existingRepost) {

                $repost = new Repost();
                $repost->setUser($this->getUser());
                $repost->setPost($post);

                $entityManager->persist($repost);
                $entityManager->flush();

                $existingRepost=true;
            }else{
                $entityManager->remove($existingRepost);
                $entityManager->flush();
                $existingRepost=false;

            }
        }
        elseif ($action === 'exploited') {
            if (!$existingExploited) {

                $exploited = new UserParticipation();
                $exploited->setUser($this->getUser());
                $exploited->setPost($post);

                $entityManager->persist($exploited);
                $entityManager->flush();

                $existingExploited=true;
            }else{
                $entityManager->remove($existingExploited);
                $entityManager->flush();
                $existingExploited=false;

            }
        }

        // ... existing logic

        return $this->redirectToRoute('app_post_detail', ['id' => $id]);
    }



    #[Route("/post/{id}", name: "app_post_detail")]

    public function postDetail($id, PostRepository $postRepository, ImagesRepository $imagesRepository, ParagraphesRepository $paragraphesRepository, LikeRepository $likeRepository, FavoriteRepository $favoriteRepository, RepostRepository $repostyRepository, Request $request, EntityManagerInterface $entityManager, UserParticipationRepository $userPartRepo): \Symfony\Component\HttpFoundation\Response
    {
        $post = $postRepository->find($id);
        $images = $imagesRepository->findBy(['post_id' => $id]);
        $paragraphes = $paragraphesRepository->findBy(['post_id' => $id]);
        // Récupérer les commentaires du post
        $comments = $post->getComments();

        $existingLike = $likeRepository->findOneBy([
            'user' => $this->getUser(),
            'post' => $post,
        ]);


        $existingFavorite = $favoriteRepository->findOneBy([
            'user' => $this->getUser(),
            'post' => $post,
        ]);

        $existingRepost = $repostyRepository->findOneBy([
            'user' => $this->getUser(),
            'post' => $post,
        ]);

        $existingExploited = $userPartRepo->findOneBy([
            'user' => $this->getUser(),
            'post' => $post,
        ]);


        return $this->render('default/postDetail.html.twig', ['id' => $id, 'existingLike' => $existingLike, 'existingFavorite' => $existingFavorite, 'existingRepost' => $existingRepost,'post' => $post, 'images' => $images, 'paragraphes' => $paragraphes, 'existingExploited' => $existingExploited, 'comments' => $comments]);
    }
}
