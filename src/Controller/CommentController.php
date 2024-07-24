<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\CommentResponse;
use App\Repository\CommentRepository;
use App\Repository\PostRepository;
use App\Repository\VersionsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class CommentController extends AbstractController
{
    #[Route('/comment/add/{id}', name: 'app_comment_add')]
    public function addComment($id, VersionsRepository $versionRepo, Request $request, CommentRepository $commentRepository, PostRepository $postRepo, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $formData = $request->request->get('comment');
        $comment = new Comment();
        $user = $this->getUser();
        $comment->setUser($user);
        $post = $postRepo->find($id);
        $comment->setPost($post);
        $comment->setContent($formData);
        $comment->setDate(new \DateTime());
        $entityManager->persist($comment);
        $entityManager->flush();
        $version = $versionRepo->findOneBy(['status' => 1]);

        return $this->redirectToRoute('app_post_detail', [
            'id' => $id,
            'version' => $version,
        ]);

    }

    #[Route('/comment/response/{id}', name: 'app_comment_response')]
    public function responseComment($id, VersionsRepository $versionRepo, Request $request, CommentRepository $commentRepository, PostRepository $postRepo, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $formData = $request->request->get('response-comment');

        $commentResponse = new CommentResponse();
        $comment = $commentRepository->find($id);
        $commentResponse->setComment($comment);
        $commentResponse->setDate(new \DateTime());
        $commentResponse->setContent($formData);
        $user = $this->getUser();
        $commentResponse->setUser($user);
        $entityManager->persist($commentResponse);
        $entityManager->flush();
        $postId = $comment->getPost()->getId();
        $version = $versionRepo->findOneBy(['status' => 1]);


        return $this->redirectToRoute('app_post_detail', [
            'id' => $postId,
            'version' => $version,
        ]);

    }
}