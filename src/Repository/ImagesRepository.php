<?php

namespace App\Repository;

use App\Entity\Images;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Images>
 *
 * @method Images|null find($id, $lockMode = null, $lockVersion = null)
 * @method Images|null findOneBy(array $criteria, array $orderBy = null)
 * @method Images[]    findAll()
 * @method Images[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 * @method Images|null findOneBySrc(string $src)
 * @method Images[]    findBySrc(string $src)
 */
class ImagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Images::class);
    }

    public function findByPostId(int $postId): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.post = :postId')
            ->setParameter('postId', $postId)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Images[] Returns an array of Images objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Images
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
