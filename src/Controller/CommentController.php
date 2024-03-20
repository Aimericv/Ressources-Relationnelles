<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\CommentResponse;
use App\Repository\CommentRepository;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class CommentController extends AbstractController
{
    #[Route('/comment/add/{id}', name: 'app_comment_add')]
    public function addComment($id, Request $request, CommentRepository $commentRepository, PostRepository $postRepo, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\Response
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

        return $this->redirectToRoute('app_post_detail', ['id' => $id]);

    }

    #[Route('/comment/response/{id}', name: 'app_comment_response')]
    public function responseComment($id, Request $request, CommentRepository $commentRepository, PostRepository $postRepo, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $formData = $request->request->get('response-comment');
        $commentResponseId = $request->request->get('comment-id');
        $comment = new Comment();
        $user = $this->getUser();
        $comment->setUser($user);
        $post = $postRepo->find($id);
        $comment->setPost($post);
        $comment->setContent($formData);
        $comment->setDate(new \DateTime());
        $comment->setIsResponse(true);
        $entityManager->persist($comment);
        $entityManager->flush();

        $commentResponse = new CommentResponse();
        $commentId = $comment->getId();
        $commentObj = $commentRepository->find($commentId);
        $commentResponseObj = $commentRepository->find($commentResponseId);
        $commentResponse->setComment($commentObj);
        $commentResponse->setCommentToComment($commentResponseObj);
        $commentResponse->setDate(new \DateTime());
        $entityManager->persist($commentResponse);
        $entityManager->flush();


        return $this->redirectToRoute('app_post_detail', ['id' => $id]);

    }
}