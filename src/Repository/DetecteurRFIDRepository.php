<?php

namespace App\Repository;

use App\Entity\DetecteurRFID;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DetecteurRFID>
 *
 * @method DetecteurRFID|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetecteurRFID|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetecteurRFID[]    findAll()
 * @method DetecteurRFID[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetecteurRFIDRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetecteurRFID::class);
    }

//    /**
//     * @return DetecteurRFID[] Returns an array of DetecteurRFID objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DetecteurRFID
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
