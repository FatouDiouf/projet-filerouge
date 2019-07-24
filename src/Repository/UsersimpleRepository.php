<?php

namespace App\Repository;

use App\Entity\Usersimple;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Usersimple|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usersimple|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usersimple[]    findAll()
 * @method Usersimple[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersimpleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Usersimple::class);
    }

    // /**
    //  * @return Usersimple[] Returns an array of Usersimple objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Usersimple
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
