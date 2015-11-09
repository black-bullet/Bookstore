<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Book;

class BookRepository extends EntityRepository
{
    /**
     * @param $field
     * @param $by
     * @return array
     */
    public function getSort($field, $by)
    {
        return $this->createQueryBuilder('b')
            ->addOrderBy('b.'.$field, $by)
            ->getQuery()
            ->getResult();
    }
}