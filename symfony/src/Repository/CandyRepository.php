<?php

namespace App\Repository;

use App\Entity\Candy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Candy>
 *
 * @method Candy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Candy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Candy[]    findAll()
 * @method Candy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CandyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Candy::class);
    }

    //    /**
    //     * @return Candy[] Returns an array of Candy objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Candy
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
