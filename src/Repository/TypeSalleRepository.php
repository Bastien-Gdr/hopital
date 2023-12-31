<?php

namespace App\Repository;

use App\Entity\TypeSalle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeSalle>
 *
 * @method TypeSalle|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeSalle|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeSalle[]    findAll()
 * @method TypeSalle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeSalleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeSalle::class);
    }

//    /**
//     * @return TypeSalle[] Returns an array of TypeSalle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TypeSalle
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
