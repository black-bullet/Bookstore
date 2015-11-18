<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BookCommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text',['label'=>'Ім\'я'])
            ->add('comment', 'textarea', ['label'=>'Коментар']);
//            ->add('enabled', 'checkbox')
//            ->add('book', null, ['property' => 'id']);


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