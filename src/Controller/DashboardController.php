<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(Request $request, UserRepository $userRepository, PostRepository $postRepository, SessionInterface $session): Response
    {
        $filter = "";
        $visits = $this->calculateVisits($session, $filter);

        $userStats = $userRepository->findByStatsForLatestMonth();
        $postStats = $postRepository->findByStatsForLatestMonth();

        return $this->render('dashboard/index.html.twig', [
            'userStats' => $userStats,
            'postStats' => $postStats,
            'visits' => $visits,
        ]);
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
}
