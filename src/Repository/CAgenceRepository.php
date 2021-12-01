<?php

namespace App\Repository;

use App\Entity\CAgence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CAgence|null find($id, $lockMode = null, $lockVersion = null)
 * @method CAgence|null findOneBy(array $criteria, array $orderBy = null)
 * @method CAgence[]    findAll()
 * @method CAgence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CAgenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CAgence::class);
    }

    // /**
    //  * @return CAgence[] Returns an array of CAgence objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CAgence
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
