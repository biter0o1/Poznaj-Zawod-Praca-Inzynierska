<?php

namespace App\Repository;

use App\Entity\QuizHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<QuizHistory>
 *
 * @method QuizHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuizHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuizHistory[]    findAll()
 * @method QuizHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuizHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QuizHistory::class);
    }

    public function save(QuizHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(QuizHistory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return QuizHistory[] Returns an array of QuizResult objects
     */
    public function findByExampleField($value): array
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.type = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

//    public function findOneBySomeField($value): ?QuizResult
//    {
//        return $this->createQueryBuilder('q')
//            ->andWhere('q.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
