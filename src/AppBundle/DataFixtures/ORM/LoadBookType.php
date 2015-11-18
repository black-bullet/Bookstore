<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\BookType;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadBookType extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $bookType1=new BookType();
        $bookType1->setName("Комп'ютерна література");

        $bookType2=new BookType();
        $bookType2->setName("Художня література");

        $bookType3=new BookType();
        $bookType3->setName("Медецина");

        $this->addReference('bookType-1', $bookType1);
        $this->addReference('bookType-2', $bookType2);
        $this->addReference('bookType-3', $bookType3);

        $manager->persist($bookType1);
        $manager->persist($bookType2);
        $manager->persist($bookType3);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}