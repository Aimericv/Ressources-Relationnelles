<?php

namespace App\Repository;

use App\Entity\Repost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;

/**
 * @extends ServiceEntityRepository<Repost>
 *
 * @method Repost|null find($id, $lockMode = null, $lockVersion = null)
 * @method Repost|null findOneBy(array $criteria, array $orderBy = null)
 * @method Repost[]    findAll()
 * @method Repost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RepostRepository extends ServiceEntityRepository
{ 
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Repost::class);
    }

    public function findRepostPostsByUser(User $user): array
    {
        
    
        $followingRepostPosts = $this->createQueryBuilder('r')
            ->join('r.post', 'p')
            ->join('r.user', 'u')
            ->join('u.following', 'f')
            ->andWhere('f.follower = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    
        $allRepostPosts = array_merge( $followingRepostPosts);
    
        return $allRepostPosts;
    }

}
