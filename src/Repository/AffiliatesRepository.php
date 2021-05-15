<?php

namespace App\Repository;

use App\Entity\Affiliates;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Affiliates|null find($id, $lockMode = null, $lockVersion = null)
 * @method Affiliates|null findOneBy(array $criteria, array $orderBy = null)
 * @method Affiliates[]    findAll()
 * @method Affiliates[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffiliatesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Affiliates::class);
    }

    // /**
    //  * @return Affiliates[] Returns an array of Affiliates objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Affiliates
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
