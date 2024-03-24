<?php

namespace App\Controller;

use App\Entity\Role;
use App\Form\UserAddType;
use Doctrine\ORM\EntityManager;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
// use http\Client\Request;
use Psr\EventDispatcher\EventDispatcherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\PostRepository;
use App\Repository\PostStatusRepository;
use App\Repository\ImagesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;
use Symfony\Component\Security\Http\Event\LogoutEvent;

class UserController extends AbstractController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    // Méthode pour personnaliser les actions de liste
    // Par exemple, pour filtrer les utilisateurs actifs uniquement
    public function index(AdminContext $context)
    {
        $response = parent::index($context);

        // Personnalisez ici la liste des utilisateurs si nécessaire

        return $response;
    }

    // Méthode pour personnaliser l'affichage d'un utilisateur spécifique
    public function show(AdminContext $context)
    {
        $response = parent::show($context);

        // Personnalisez ici l'affichage de l'utilisateur si nécessaire

        return $response;
    }

    // Méthode pour personnaliser le formulaire d'édition d'un utilisateur
    public function edit(AdminContext $context)
    {
        $response = parent::edit($context);

        // Personnalisez ici le formulaire d'édition de l'utilisateur si nécessaire

        return $response;
    }

    // Méthode pour personnaliser l'action de suppression d'un utilisateur
    #[Route('/delete-user', name: 'app_delete_user')]
    public function delete(EntityManagerInterface $entityManager, Security $security): Response
    {
        $utilisateur = $this->getUser();

        // Deconnecte l'utilisateur avant de le supprimer
        $security->logout(false);

        // Dispatcher l'événement de déconnexion

        $entityManager->remove($utilisateur);
        $entityManager->flush();

        // Ajoutez ici des actions supplémentaires après la suppression de l'utilisateur si nécessaire
        return $this->render('user/complete-deletion.html.twig', [
        ]);
    }

    #[Route('/user', name: 'app_user')]
    public function monCompte(UserRepository $userRepo, ImagesRepository $imageRepo, PostRepository $postRepo): Response
    {
        $utilisateur = $this->getUser();
        if (!isset($utilisateur)) {
            return $this->redirectToRoute('app_login');
        }
        $id = $this->getUser()->getId();
        $posts = $postRepo->findBy(['user' => $id]);
        $imageSrc = null;
        foreach ($posts as $post) {
            $postId = $post->getId();
            $images = $imageRepo->findBy(['post_id' => $postId]);
            if (!empty($images)) {
                $image = $images[0];
                $imageSrc[$postId] = $image->getSrc();
            } else {
                $imageSrc[$postId] = null;
            }
        }

        return $this->render('user/user.html.twig', [
            'utilisateur' => $utilisateur,
            'posts' => $posts,
            'imageSrc' => $imageSrc,
        ]);
    }

    #[Route(path: '/register', name: 'app_register')]
    public function register(Request $request, EntityManagerInterface $entityManager): Response
    {
        $roleRepo = $entityManager->getRepository(Role::class);
        $user = new User();
        $form = $this->createForm(UserAddType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoles(['ROLE_USER'], $roleRepo);
            $user->setPolice('Arial');
            $user->setCreatedAt(new \DateTime());

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/user/{id}', name: 'app_other_user')]
    public function otherUser($id, UserRepository $userRepo, ImagesRepository $imageRepo, PostRepository $postRepo): Response
    {
        $utilisateur = $this->getUser();
        $user = $userRepo->find($id);
        $posts = $postRepo->findBy(['user' => $id]);
        foreach ($posts as $post) {
            $postId = $post->getId();
            $images = $imageRepo->findBy(['post_id' => $postId]);
            if (!empty($images)) {
                $image = $images[0];
                $imageSrc[$postId] = $image->getSrc();
            } else {
                $imageSrc[$postId] = null;
            }
        }

        return $this->render('user/otherUser.html.twig', [
            'utilisateur' => $utilisateur,
            'user' => $user,
            'posts' => $posts,
            'imageSrc' => $imageSrc,
        ]);
    }

    #[Route('/police', name: 'app_police')]
    public function changePolice(Request $request, UserRepository $userRepo, EntityManagerInterface $entityManager): void
    {
        $donnees = json_decode($request->getContent(), true);
        $valeurPolice = $donnees['police'];

        $user = $this->getUser();
        $user->setPolice($valeurPolice);
        $entityManager->persist($user);
        $entityManager->flush();
    }
}