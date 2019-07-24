<?php

namespace App\Repository;

use App\Entity\Adminsimple;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Adminsimple|null find($id, $lockMode = null, $lockVersion = null)
 * @method Adminsimple|null findOneBy(array $criteria, array $orderBy = null)
 * @method Adminsimple[]    findAll()
 * @method Adminsimple[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminsimpleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Adminsimple::class);
    }

    // /**
    //  * @return Adminsimple[] Returns an array of Adminsimple objects
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
    public function findOneBySomeField($value): ?Adminsimple
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
