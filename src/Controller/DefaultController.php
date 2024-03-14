<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\CommentResponse;
use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Favorite;
use App\Entity\Repost;
use App\Repository\RepostRepository;
use http\Client\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ImagesRepository;
use App\Repository\ParagraphesRepository;
use App\Entity\Like;
use App\Entity\UserParticipation;
use App\Repository\LikeRepository;
use App\Repository\FavoriteRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;





class DefaultController extends AbstractController
{

    #[Route('/default', name: 'app_default')]
    public function index(): \Symfony\Component\HttpFoundation\JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DefaultController.php',
        ]);
    }


    #[Route("/base", name:"app_base")]
    public function base(PostRepository $postRepository): \Symfony\Component\HttpFoundation\Response
    {
        $posts = $postRepository->findAll();
        $utilisateur = $this->getUser();
        return $this->render('base.html.twig', ['posts' => $posts, 'utilisateur' => $utilisateur]);
    }

    #[Route("/", name:"app_homepage")]
    public function post(PostRepository $postRepository, ImagesRepository $imagesRepository, ParagraphesRepository $paragraphesRepository, SessionInterface $session, RepostRepository $repostRepository): \Symfony\Component\HttpFoundation\Response
    {
        $images = $imagesRepository->findAll();
        $imagesPosts = [];
        $utilisateur = $this->getUser();
        $posts = $postRepository->findPostsByUser($utilisateur);

        foreach ($posts as $post) {
            $post_id = $post->getId();
            $imagesPostId = [];
            foreach ($images as $image) {
                if ($post_id == $image->getPostId()->getId()) {
                    $imagesPostId[] = $image;
                }
            }
            $imagesPosts[$post_id] = $imagesPostId;
        }


        $user = $this->getUser();
        if($user){
            $repostPosts = $repostRepository->findRepostPostsByUser($user);

        }else{
            $repostPosts='null';
        }


        $allposts = $postRepository->findAll();


        return $this->render('default/index.html.twig', ['user' => $this->getUser(),'posts' => $posts, 'allposts'=>$allposts,  'repostPosts' => $repostPosts,
        'utilisateur' => $utilisateur, 'images' => $imagesPosts]);
    }

    #[Route("/catalogue", name:"app_catalogue")]
    public function catalogue(PostRepository $postRepository, ImagesRepository $imagesRepository, ParagraphesRepository $paragraphesRepository, RepostRepository $repostRepository, SessionInterface $session): \Symfony\Component\HttpFoundation\Response
    {
        $visitDate = new \DateTime();
        $session->set('visitDates', [$visitDate->format('Y-m-d H:i:s')]);


        $posts = $postRepository->findAll();
        $images = $imagesRepository->findAll();
        $imagesPosts = [];
        $utilisateur = $this->getUser();
        foreach ($posts as $post) {
            $post_id = $post->getId();
            $imagesPostId = [];
            foreach ($images as $image) {
                if ($post_id == $image->getPostId()->getId()) {
                    $imagesPostId[] = $image;
                }
            }
            $imagesPosts[$post_id] = $imagesPostId;
            $catId = $post->getType();
        }
        return $this->render('default/catalogue.html.twig', ['posts' => $posts, 'utilisateur' => $utilisateur, 'images' => $imagesPosts]);
    }

    //quand je met la route de app_favorite avant ça fait l'inverse

// Controller


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

    public function postDetail($id, PostRepository $postRepository, ImagesRepository $imagesRepository, ParagraphesRepository $paragraphesRepository, LikeRepository $likeRepository, FavoriteRepository $favoriteRepository, RepostRepository $repostyRepository, Request $request, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\Response
    {
        $post = $postRepository->find($id);
        $images = $imagesRepository->findBy(['post_id' => $id]);
        $paragraphes = $paragraphesRepository->findBy(['post_id' => $id]);
        // Récupérer les commentaires du post
        $comments = $post->getComments();

        $existingLike = $entityManager->getRepository(Like::class)->findOneBy([
            'user' => $this->getUser(),
            'post' => $post,
        ]);  


        $existingFavorite = $entityManager->getRepository(Favorite::class)->findOneBy([
            'user' => $this->getUser(),
            'post' => $post,
        ]);

        $existingRepost = $entityManager->getRepository(Post::class)->findOneBy([
            'user' => $this->getUser(),
            'post' => $post,
        ]);

        $existingExploited = $entityManager->getRepository(UserParticipation::class)->findOneBy([
            'user' => $this->getUser(),
            'post' => $post,
        ]);
        
    
        return $this->render('default/postDetail.html.twig', ['id' => $id, 'existingLike' => $existingLike, 'existingFavorite' => $existingFavorite, 'existingRepost' => $existingRepost,'post' => $post, 'images' => $images, 'paragraphes' => $paragraphes, 'existingExploited' => $existingExploited, 'comments' => $comments]);
    }
}