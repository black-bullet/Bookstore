<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class BookCommentAdmin extends Admin
{
    protected $baseRoutePattern = 'book-comment';

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name', null, ['label' => 'Ім\'я'])
            ->add('comment', null, ['label' => 'Коментар'])
            ->add('enabled', null, ['label' => 'Доступний'])
            ->add('book', 'entity', ['class' => 'AppBundle\Entity\Book', 'label' => 'Книга']);
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Коменатрі до книги')
            ->add('name', null, ['label' => 'Ім\'я'])
            ->add('comment', null, ['label' => 'Коментар'])
            ->add('enabled', null, ['label' => 'Доступний'])
            ->add('book', 'entity', ['class' => 'AppBundle\Entity\Book', 'label' => 'Книга'])
            ->end();
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('name', null, ['label' => 'Ім\'я'])
            ->add('comment', null, ['label' => 'Коментар'])
            ->add('enabled', null, ['label' => 'Доступний'])
            ->add('book', 'entity', ['class' => 'AppBundle\Entity\Book', 'label' => 'Книга']);
    }
}