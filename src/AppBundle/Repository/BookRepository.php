<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Book;

class BookRepository extends EntityRepository
{
    public function getSort($field)
    {
        return $this->createQueryBuilder('b')
            ->addOrderBy($field)
            ->getQuery()
            ->getResult();
    }
}