<?php

namespace App\Repository;

use App\Entity\Comment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Comment>
 *
 * @method Comment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comment[]    findAll()
 * @method Comment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentRepository extends ServiceEntityRepository 
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Comment::class);
    }

    public function findByStatsForLatestMonth(): int
    {
        $dateOneMonthAgo = new \DateTime('-1 month');
        return $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.date >= :date_one_month_ago')
            ->setParameter('date_one_month_ago', $dateOneMonthAgo)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findByStatsForLastThreeMonths(): int
    {
        $dateThreeMonthsAgo = new \DateTime('-3 months');
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.date >= :date_three_months_ago')
            ->setParameter('date_three_months_ago', $dateThreeMonthsAgo)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findByStatsForLastSixMonths(): int
    {
        $dateSixMonthsAgo = new \DateTime('-6 months');
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.date >= :date_six_months_ago')
            ->setParameter('date_six_months_ago', $dateSixMonthsAgo)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findByStatsForLatestYear(): int
    {
        $dateOneYearAgo = new \DateTime('-1 year');
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.date >= :date_one_year_ago')
            ->setParameter('date_one_year_ago', $dateOneYearAgo)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findByAllStats(): int
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }
}
