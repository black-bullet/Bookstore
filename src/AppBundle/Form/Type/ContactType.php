<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label' => 'Ім\'я'))
            ->add('phone', 'text', array('label' => 'Телефон'))
            ->add('topic', 'text', array('label' => 'Тема'))
            ->add('message', 'textarea', array('label' => 'Текст'));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'contact';
    }
}