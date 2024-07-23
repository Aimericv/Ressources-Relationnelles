<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Entity\Category;
use App\Entity\Versions;
use App\Entity\Modifications;
use App\Repository\UserRepository;
use App\Repository\RoleRepository;
use App\Repository\PostRepository;
use App\Repository\CommentRepository;
use App\Repository\CommentResponseRepository;
use App\Repository\PostStatusRepository;
use App\Repository\VersionsRepository;
use App\Repository\ModificationsRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\HelpEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;


class DashboardController extends AbstractController
{
    
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(Request $request, VersionsRepository $versionRepo, CommentRepository $commentRepo, UserRepository $userRepository, PostRepository $postRepository, SessionInterface $session, HelpEntityRepository $helpRepository, CategoryRepository $catRepo): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $utilisateur = $this->getUser();
        $rolesUser = $utilisateur->getRoles();
        $roleUser = $rolesUser[0];

        if ($roleUser == "ROLE_USER"){
            return $this->redirectToRoute('app_homepage');
        } 

        $stats_filter = "";
        $visits = $this->calculateVisits($session, $stats_filter);
        $userStats = $userRepository->findByStatsForLatestMonth();
        $postStats = $postRepository->findByStatsForLatestMonth();
        $commentStats = $commentRepo->findByStatsForLatestMonth();
        $statistiques = [
            'userStats' => $userStats,
            'postStats' => $postStats,
            'visits' => $visits,
            'comment' => $commentStats
        ];

        $posts = $postRepository->findAll();
        $users = [];
        foreach ($posts as $post) {
            $user = $post->getUser();
            $users[$post->getId()] = $user;
        }
        $ressources = [
            'users' => $users,
            'posts' => $posts,
        ];

        $comment = $commentRepo->findAll();

        $comptes = $userRepository->findAll();

        $questions = $helpRepository->findAll();

        $category = $catRepo->findAll();

        $versions = $versionRepo->findAll();

        $selectedVersion = $versionRepo->findOneBy(['status' => 1]);

        return $this->render('dashboard/index.html.twig', [
            'utilisateur' => $utilisateur,
            'roleUser' => $roleUser,
            'statistiques' => $statistiques,
            'ressources' => $ressources,
            'comptes' => $comptes,
            'questions' => $questions,
            'categories' => $category,
            'comments' => $comment,
            'versions' => $versions,
            'version' => $selectedVersion,
        ]);
    }

    #[Route('/dashboard/select/version', name: 'app_dashboard_select_version')]
    public function selectVersion(Request $request, VersionsRepository $versionRepo): JsonResponse
    {
        $selectedVersionId = $request->request->get('selectedVersionId');
        $selectedVersionData = $versionRepo->find($selectedVersionId);
        $modifications = $selectedVersionData->getModifications();
        $modificationsData = [];

        foreach ($modifications as $modification) {
            $modificationsData[] = [
                'id' => $modification->getId(),
                'titre' => $modification->getTitre(),
                'description' => $modification->getDescription(),
            ];
        }
        $versionJSON = [
            'name' => $selectedVersionData->getName(),
            'id' => $selectedVersionData->getId(),
            'status' => $selectedVersionData->getStatus(),
            'modifications' => $modificationsData,
        ];
    
        return new JsonResponse($versionJSON);
    }

    #[Route('/dashboard/add/version/{action}', name: 'app_dashboard_add_version')]
    public function addVersion($action, VersionsRepository $versionRepo): Response
    {
        $versions = $versionRepo->findAll();
        $version = $versionRepo->findOneBy(['status' => 1]);

        return $this->render('dashboard/versionForm.html.twig', [
            'action' => $action,
            'versions' => $versions,
            'version' => $version,
        ]);
    }

    #[Route('/dashboard/publier/version/{id}', name: 'app_dashboard_publier_version')]
    public function publierVersion($id, VersionsRepository $versionRepo, EntityManagerInterface $entityManager): Response
    {
        $oldVersion = $versionRepo->findOneBy(['status'=>1]);
        $oldVersion->setStatus(0);
        $entityManager->persist($oldVersion);

        $newVersion = $versionRepo->find($id);
        $newVersion->setStatus(1);
        $entityManager->persist($newVersion);
        $entityManager->flush();


        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/dashboard/add/version/{action}/add', name: 'app_dashboard_add_version_add')]
    public function addVersionAdd($action, Request $request, VersionsRepository $versionRepo, ModificationsRepository $modifRepo, EntityManagerInterface $entityManager): Response
    {
        if ($action == "modification") {
            $titre = $request->request->get('title');
            $description = $request->request->get('description');
            $versionId = $request->request->get('version');
            $version = $versionRepo->find($versionId);

            $modification = new Modifications;
            $modification->setTitre($titre);
            $modification->setDescription($description);
            $modification->setVersions($version);
            $entityManager->persist($modification);
            $entityManager->flush();
        } elseif ($action == "version") {
            $name = $request->request->get('name');

            $version = new Versions;
            $version->setStatus(0);
            $version->setName($name);
            $entityManager->persist($version);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/dashboard/ajax', name: 'app_dashboard_ajax')]
    public function statistiques(Request $request, UserRepository $userRepository, PostRepository $postRepository, SessionInterface $session): JsonResponse
    {
        // Statistiques utilisateurs
        $userStats = [];
        $filter = $request->request->get('filter');
        switch ($filter) {
            case 'latest-month':
                $userStats = $userRepository->findByStatsForLatestMonth();
                break;
            case 'three-latest-month':
                $userStats = $userRepository->findByStatsForLastThreeMonths();
                break;
            case 'six-latest-month':
                $userStats = $userRepository->findByStatsForLastSixMonths();
                break;
            case 'latest-year':
                $userStats = $userRepository->findByStatsForLatestYear();
                break;
            case 'all':
                $userStats = $userRepository->findByAllStats();
                break;
            default:
                $userStats = $userRepository->findByStatsForLatestMonth();
                break;
        }

        // Statistiques publications
        $postStats = [];
        switch ($filter) {
            case 'latest-month':
                $postStats = $postRepository->findByStatsForLatestMonth();
                break;
            case 'three-latest-month':
                $postStats = $postRepository->findByStatsForLastThreeMonths();
                break;
            case 'six-latest-month':
                $postStats = $postRepository->findByStatsForLastSixMonths();
                break;
            case 'latest-year':
                $postStats = $postRepository->findByStatsForLatestYear();
                break;
            case 'all':
                $postStats = $postRepository->findByAllStats();
                break;
            default:
                $postStats = $postRepository->findByStatsForLatestMonth();
                break;
        }

        $visits = $this->calculateVisits($session, $filter);
        $stats = ['userStats' => $userStats, 'postStats' => $postStats, 'visits' => $visits];
        return new JsonResponse($stats);
    }

    public function calculateVisits(SessionInterface $session, string $filter): int
    {
        $visitDates = $session->get('visitDates', []);
        switch ($filter) {
            case 'latest-month':
                $interval = '-1 month';
                break;
            case 'three-latest-month':
                $interval = '-3 months';
                break;
            case 'six-latest-month':
                $interval = '-6 months';
                break;
            case 'latest-year':
                $interval = '-1 year';
                break;
            default:
                $interval = '-1 month';
                break;
        }

        $lastMonthDate = new \DateTime($interval);
        $visits = 0;
        foreach ($visitDates as $visitDate) {
            if (new \DateTime($visitDate) >= $lastMonthDate) {
                $visits++;
            }
        }
        return $visits;
    }

    #[Route('/dashboard/valid-post/{id}/{status}', name: 'app_dashboard_valid_ressource')]
    public function validRessource($id, $status, Request $request, PostRepository $postRepo, PostStatusRepository $postStatusRepo, EntityManagerInterface $entityManager): Response
    {
        $post = $postRepo->find($id);

        if (!$post) {
            throw $this->createNotFoundException('No post found for id '.$id);
        }
    
        $newStatusId = $status;
        $status = $postStatusRepo->find($newStatusId);
        $post->setStatus($status);

        $entityManager->persist($post);
        $entityManager->flush();
        
        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/dashboard/role-user/{id}/{role}', name: 'app_dashboard_role_user')]
    public function roleUser($id, $role, UserRepository $userRepo, RoleRepository $roleRepo, EntityManagerInterface $entityManager): Response
    {
        $user = $userRepo->find($id);
        $user->setRoles($role, $roleRepo);

        $entityManager->persist($user);
        $entityManager->flush();
        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/dashboard/category/edit/{id}', name: 'app_dashboard_edit_category')]
    public function editCategory($id, CategoryRepository $catRepo, Request $request, EntityManagerInterface $entityManager): Response
    {
        $formData = $request->request->get('name-cat');
        $category = $catRepo->find($id);
        $category->setName($formData);

        $entityManager->persist($category);
        $entityManager->flush();

        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/dashboard/category/add', name: 'app_dashboard_add_category')]
    public function addCategory(Request $request, EntityManagerInterface $entityManager): Response
    {
        $formData = $request->request->get('name-cat');
        $category = new Category();
        $category->setName($formData);


        $entityManager->persist($category);
        $entityManager->flush();

        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/dashboard/category/delete/{id}', name: 'app_dashboard_delete_category')]
    public function deleteCategory($id, CategoryRepository $catRepo, EntityManagerInterface $entityManager): Response
    {
        $category = $catRepo->find($id);

        $entityManager->remove($category);
        $entityManager->flush();

        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/dashboard/help/answer/{id}', name: 'app_dashboard_answer_help')]
    public function answerHelp($id, HelpEntityRepository $helpRepo, Request $request, EntityManagerInterface $entityManager): Response
    {
        $formData = $request->request->get('answer');
        $question = $helpRepo->find($id);
        $question->setAnswer($formData);
        $question->setStatus(1);

        $entityManager->persist($question);
        $entityManager->flush();

        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/dashboard/help/private/{id}', name: 'app_dashboard_private_help')]
    public function privateHelp($id, HelpEntityRepository $helpRepo, EntityManagerInterface $entityManager): Response
    {
        $question = $helpRepo->find($id);
        $question->setStatus(1);

        $entityManager->persist($question);
        $entityManager->flush();

        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/dashboard/help/public/{id}', name: 'app_dashboard_public_help')]
    public function publicHelp($id, HelpEntityRepository $helpRepo, EntityManagerInterface $entityManager): Response
    {
        $question = $helpRepo->find($id);
        $question->setStatus(2);

        $entityManager->persist($question);
        $entityManager->flush();

        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/dashboard/comment/delete/{id}', name: 'app_dashboard_delete_comment')]
    public function deleteComment($id, CommentRepository $commentRepo, EntityManagerInterface $entityManager, CommentResponseRepository $commentRespRepo): Response
    {
        $comment = $commentRepo->find($id);
        
        if ($comment->getIsResponse() == 1) {
            $commentResp = $commentRespRepo->findBy(['comment' => $id]);
        } elseif ($comment->getIsResponse() == 0) {
            $commentResp = $commentRespRepo->findBy(['commentToComment' => $id]);
        }

        if (isset($commentResp)) {
            foreach ($commentResp as $response) {
                $entityManager->remove($response);
            }
        }

        $entityManager->remove($comment);
        $entityManager->flush();

        return $this->redirectToRoute('app_dashboard');
    }

}
