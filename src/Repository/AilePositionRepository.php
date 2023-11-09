<?php

namespace App\Repository;

use App\Entity\AilePosition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AilePosition>
 *
 * @method AilePosition|null find($id, $lockMode = null, $lockVersion = null)
 * @method AilePosition|null findOneBy(array $criteria, array $orderBy = null)
 * @method AilePosition[]    findAll()
 * @method AilePosition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AilePositionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AilePosition::class);
    }

//    /**
//     * @return AilePosition[] Returns an array of AilePosition objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AilePosition
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
