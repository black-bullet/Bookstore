<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class Book extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('description', 'area')
            ->add('author', 'text')
            ->add('nameEdition', 'text')
            ->add('yearEdition', 'text')
            ->add('numberPages', 'text')
            ->add('price', 'text')
            ->add('bookType', null, ['property' => 'id']);


            //->add('image')
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'book';
    }
}