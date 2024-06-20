<?php

namespace App\Repository;

use App\Entity\Modifications;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Modifications>
 *
 * @method Modifications|null find($id, $lockMode = null, $lockVersion = null)
 * @method Modifications|null findOneBy(array $criteria, array $orderBy = null)
 * @method Modifications[]    findAll()
 * @method Modifications[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModificationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Modifications::class);
    }

//    /**
//     * @return Modifications[] Returns an array of Modifications objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Modifications
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
