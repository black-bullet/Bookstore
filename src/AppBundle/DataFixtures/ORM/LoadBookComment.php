<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\BookComment;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadBookComment extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 5; $i++) {
            $comment1 = new BookComment();
            $comment1->setName('Євгеній');
            $comment1->setComment('Відміна книга');
            $comment1->setBook($this->getReference("book-" . $i));

            $comment2 = new BookComment();
            $comment2->setName('Юлія');
            $comment2->setComment('Усім рекомендую цю кнжику. Авто чітко розкриває усі нюанси');
            $comment2->setBook($this->getReference("book-" . $i));

            $comment3 = new BookComment();
            $comment3->setName('Марія');
            $comment3->setComment('5 з 5');
            $comment3->setBook($this->getReference("book-" . $i));

            $comment4 = new BookComment();
            $comment4->setName('Ірина');
            $comment4->setComment('Краще, що я читала за останній час');
            $comment4->setBook($this->getReference("book-" . $i));

            $manager->persist($comment1);
            $manager->persist($comment2);
            $manager->persist($comment3);
            $manager->persist($comment4);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}