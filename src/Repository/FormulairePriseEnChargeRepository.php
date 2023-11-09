<?php

namespace App\Repository;

use App\Entity\FormulairePriseEnCharge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FormulairePriseEnCharge>
 *
 * @method FormulairePriseEnCharge|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormulairePriseEnCharge|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormulairePriseEnCharge[]    findAll()
 * @method FormulairePriseEnCharge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormulairePriseEnChargeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormulairePriseEnCharge::class);
    }

//    /**
//     * @return FormulairePriseEnCharge[] Returns an array of FormulairePriseEnCharge objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FormulairePriseEnCharge
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
