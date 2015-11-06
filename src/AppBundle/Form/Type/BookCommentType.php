<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BookCommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('description', 'area')
            ->add('enabled', 'checkbox')
            ->add('book', null, ['property' => 'id']);


        //->add('image')
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bookComment';
    }
}