<?php

namespace App\Controller;

use App\Entity\Role;
use App\Form\UserAddType;
use Doctrine\ORM\EntityManager;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use Psr\EventDispatcher\EventDispatcherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\PostRepository;
use App\Repository\FolderRepository;
use App\Repository\PostStatusRepository;
use App\Repository\ImagesRepository;
use App\Repository\VersionsRepository;
use App\Entity\Folder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;
use Symfony\Component\Security\Http\Event\LogoutEvent;

class UserController extends AbstractController
{
    #[Route('/delete-user', name: 'app_delete_user')]
    public function delete(VersionsRepository $versionRepo, EntityManagerInterface $entityManager, Security $security): Response
    {
        $utilisateur = $this->getUser();

        if ($utilisateur) {
            $security->logout(false);

            $entityManager->remove($utilisateur);
            $entityManager->flush();
        }
        else {
            $this->addFlash('error', 'Vous devez être connecté pour supprimer votre compte.');
        }

        $version = $versionRepo->findOneBy(['status' => 1]);

        return $this->render('user/complete-deletion.html.twig', [
            'version' => $version,
        ]);
    }

    #[Route('/favorite', name: 'app_favorite')]
    public function favorite(VersionsRepository $versionRepo, PostRepository $postRepo): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $user = $this->getUser();
        $favoritePosts = $user->getFavorites();
        $posts = [];
        foreach ($favoritePosts as $favoritePost) {
            if ($favoritePost->getFolder() == null) {
                $posts[] = $favoritePost;
            }
        }
        $folders = $user->getFolders();
        $version = $versionRepo->findOneBy(['status' => 1]);

        return $this->render('favorite/index.html.twig', [
            'utilisateur' => $user,
            'favoritePosts' => $posts,
            'folders' => $folders,
            'version' => $version,
        ]);
    }

    #[Route('/favorite/folder/{id}', name: 'app_favorite_folder_detail')]
    public function folderDetail($id, VersionsRepository $versionRepo, PostRepository $postRepo, FolderRepository $folderRepo)
    {
        $user = $this->getUser();
        $folder = $folderRepo->find($id);
        $posts = $postRepo->findBy(['folder' => $folder]);
        $version = $versionRepo->findOneBy(['status' => 1]);

        return $this->render('favorite/index.html.twig', [
            'utilisateur' => $user,
            'favoritePosts' => $posts,
            'folderDetail' => $folder,
            'version' => $version,
        ]);
    }

    #[Route('/favorite/post-folder', name: 'app_favorite_post_folder')]
    public function postFolder(Request $request, EntityManagerInterface $entityManager, PostRepository $postRepo, FolderRepository $folderRepo)
    {
        $data = json_decode($request->getContent(), true);
        $postId = $data['element'];
        $folderId = $data['folder'];
        
        $post = $postRepo->find($postId);
        $folder = $folderRepo->find($folderId);

        if ($post !== null && $folder !== null) {
            $post->setFolder($folder);
            $entityManager->flush();
            return new Response('Image uploaded successfully', Response::HTTP_OK);
        }

        return new Response('Erreur', Response::HTTP_BAD_REQUEST);
    }

    #[Route('/favorite/post-exit-folder', name: 'app_favorite_post_exit_folder')]
    public function postExitFolder(Request $request, EntityManagerInterface $entityManager, PostRepository $postRepo, FolderRepository $folderRepo)
    {
        $data = json_decode($request->getContent(), true);
        $postId = $data['element'];
        $post = $postRepo->find($postId);

        if ($post !== null) {
            $post->setFolder(null);
            $entityManager->flush();
            return new Response('Image uploaded successfully', Response::HTTP_OK);
        }

        return new Response('Erreur', Response::HTTP_BAD_REQUEST);
    }

    #[Route('/favorite/folder-name', name: 'app_favorite_folder_name')]
    public function folderName(Request $request, EntityManagerInterface $entityManager, FolderRepository $folderRepo)
    {
        $data = json_decode($request->getContent(), true);
        $folderId = $data['folder'];
        $name = $data['name'];
        $folder = $folderRepo->find($folderId);

        if ($folder !== null) {
            $folder->setName($name);
            $entityManager->flush();
            return new Response('Image uploaded successfully', Response::HTTP_OK);
        }

        return new Response('Erreur', Response::HTTP_BAD_REQUEST);
    }

    #[Route('/favorite/remove-folder', name: 'app_favorite_remove_folder')]
    public function removeFolder(Request $request, EntityManagerInterface $entityManager, FolderRepository $folderRepo)
    {
        $data = json_decode($request->getContent(), true);
        $folderId = $data['folder'];
        $folder = $folderRepo->find($folderId);

        if ($folder !== null) {
            $entityManager->remove($folder);
            $entityManager->flush();
            return new Response('Image uploaded successfully', Response::HTTP_OK);
        }

        return new Response('Erreur', Response::HTTP_BAD_REQUEST);
    }

    #[Route('/favorite/add-folder', name: 'app_favorite_add_folder')]
    public function addFolder(Request $request, EntityManagerInterface $entityManager, FolderRepository $folderRepo)
    {
        $data = json_decode($request->getContent(), true);
        $name = $data['name'];
        $user = $this->getUser();

        $folder = new Folder();
        $folder->setName($name);
        $folder->setUser($user);
        $entityManager->persist($folder);
        $entityManager->flush();

        return new Response('Image uploaded successfully', Response::HTTP_OK);
    }

    #[Route('/user', name: 'app_user')]
    public function monCompte(VersionsRepository $versionRepo, UserRepository $userRepo, ImagesRepository $imageRepo, PostRepository $postRepo): Response
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
            $images = $imageRepo->findBy(['post' => $postId]);
            if (!empty($images)) {
                $image = $images[0];
                $imageSrc[$postId] = $image->getSrc();
            } else {
                $imageSrc[$postId] = null;
            }
        }
        $version = $versionRepo->findOneBy(['status' => 1]);

        return $this->render('user/user.html.twig', [
            'utilisateur' => $utilisateur,
            'posts' => $posts,
            'imageSrc' => $imageSrc,
            'version' => $version,
        ]);
    }

    #[Route(path: '/register', name: 'app_register')]
    public function register(VersionsRepository $versionRepo, Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, TokenGeneratorInterface $tokenGenerator): ?Response
    {
        $roleRepo = $entityManager->getRepository(Role::class);
        $user = new User();
        $form = $request->request->get('submit');

        if (isset($form)) {
            $avatar = $request->files->get('avatarImg');
            if ($avatar) {
                $newFilename = uniqid().'.'.$avatar->guessExtension();
                $directory = $this->getParameter('kernel.project_dir') . '/public/profiles/';
                $avatar->move($directory, $newFilename);
                $user->setAvatarImg($newFilename);
            }

            $regexPassword = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?]).*$/';
            $regexEmail = '/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4})$/';
 
            $firstName = $request->request->get('firstname');
            $name = $request->request->get('name');
            $formAddress = $request->request->get('address');
            $postalCode = strval($request->request->get('postalCode'));
            $city = $request->request->get('city');
            $address = $formAddress . ', ' . $postalCode . ' ' . $city;
            $email = $request->request->get('email');
            $password = $request->request->get('password');
            
            if (preg_match($regexEmail, $email)){
                if (preg_match($regexPassword, $password)){
                    $user->setRoles(['ROLE_USER'], $roleRepo);
                    $user->setEmail($email);
                    $user->setPassword($password);
                    $user->setFirstName($firstName);
                    $user->setLastName($name);
                    $user->setAddress($address);
                    $user->setCreatedAt(new \DateTime());
                    $user->setPolice('16');
                    // Generate a confirmation token
                    $user->setConfirmationToken($tokenGenerator->generateToken());

                    $entityManager->persist($user);
                    $entityManager->flush();

                    // Send confirmation email
                    $email = (new Email())
                    ->from('no-reply@ressourcerelationnelles.com')
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->html(
                        $this->renderView(
                            'emails/confirmation.html.twig',
                            ['confirmationToken' => $user->getConfirmationToken()]
                        )
                    );

                    $mailer->send($email);

                    $this->addFlash('success', 'Un mail de confirmation a été envoyé à votre adresse mail.');

                    return $this->redirectToRoute('app_login');
                }
                else {
                    $this->addFlash('error', 'Le mot de passe est invalide.');
                }
            }
            else {
                $this->addFlash('error', 'L\'adresse email est invalide.');
            }
        }
        $version = $versionRepo->findOneBy(['status' => 1]);

        return $this->render('registration/register.html.twig', [
            'version' => $version,
        ]);
    }

    #[Route('/user/{id}', name: 'app_other_user')]
    public function otherUser($id, VersionsRepository $versionRepo, UserRepository $userRepo, ImagesRepository $imageRepo, PostRepository $postRepo): Response
    {
        $utilisateur = $this->getUser();   
        $user = $userRepo->find($id);

        if ($utilisateur) {
            $follow = $user->isFollowing($utilisateur);
        } else {
            $follow = false;
        }

        $posts = $postRepo->findBy(['user' => $id, 'status' => 3]);
        $imageSrc = null;
        foreach ($posts as $post) {
            $postId = $post->getId();
            $images = $imageRepo->findBy(['post' => $postId]);
            if (!empty($images)) {
                $image = $images[0];
                $imageSrc[$postId] = $image->getSrc();
            } else {
                $imageSrc[$postId] = null;
            }
        }
        $version = $versionRepo->findOneBy(['status' => 1]);

        return $this->render('user/otherUser.html.twig', [
            'utilisateur' => $utilisateur,
            'user' => $user,
            'posts' => $posts,
            'imageSrc' => $imageSrc,
            'follow' => $follow,
            'version' => $version,
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

    #[Route('/user/{id}/subscribe', name: 'app_user_subscribe')]
public function subscribe($id, VersionsRepository $versionRepo, UserRepository $userRepo, EntityManagerInterface $entityManager): Response
{
    $follower = $this->getUser();
    $following = $userRepo->find($id);

    if (!$follower) {
        return $this->redirectToRoute('app_login');
    }

    if (!$following) {
        throw $this->createNotFoundException('Utilisateur non trouvé');
    }

    if ($following->isFollowing($follower)) {
        $follower->removeFollow($following);
    } else {
        $follower->addFollow($following);
    }

    $entityManager->flush();

    $version = $versionRepo->findOneBy(['status' => 1]);

    return $this->redirectToRoute('app_other_user', [
        'id' => $following->getId(),
        'version' => $version,
    ]);
}
}