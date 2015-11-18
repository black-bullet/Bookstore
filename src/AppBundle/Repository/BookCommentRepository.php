<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class BookCommentRepository extends EntityRepository
{
    public function getCommentsForBook($bookId)
    {
        return $this->createQueryBuilder('c')
            ->select('c')
            ->where('c.book = :bookId')
            ->addOrderBy('c.createdAt')
            ->setParameter('bookId', $bookId)
            ->getQuery()
            ->getResult();
    }

    public function getLastComments($limit = 10)
    {
        return $this->createQueryBuilder('c')
            ->select('c')
            ->addOrderBy('c.id', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}