<?php

namespace App\Repository;

use App\Entity\StatutTraitement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StatutTraitement>
 *
 * @method StatutTraitement|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatutTraitement|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatutTraitement[]    findAll()
 * @method StatutTraitement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatutTraitementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatutTraitement::class);
    }

//    /**
//     * @return StatutTraitement[] Returns an array of StatutTraitement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?StatutTraitement
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
