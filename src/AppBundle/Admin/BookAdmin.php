<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;

class BookAdmin extends Admin
{
    protected $baseRoutePattern = 'book';

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, ['label' => 'Ид книги'])
            ->add('name', null, ['label' => 'Название'])
            ->add('description', null, ['label' => 'Описание'])
            ->add('author', null, ['label' => 'Автор'])
            ->add('nameEdition', null, ['label' => 'Назва видання'])
            ->add('yearEdition', null, ['label' => 'Рік видання'])
            ->add('numberPages', null, ['label' => 'Кількість сторінок'])
            ->add('price', null, ['label' => 'Ціна']);
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Книга')
            ->add('name', null, ['label' => 'Назва'])
            ->add('description', 'textarea', ['label' => 'Опис', 'attr' => ['rows' => '8']])
            ->add('author', null, ['label' => 'Автор'])
            ->add('nameEdition', null, ['label' => 'Назва видання'])
            ->add('yearEdition', null, ['label' => 'Рік видання'])
            ->add('numberPages', null, ['label' => 'Кількість сторінок'])
            ->add('price', null, ['label' => 'Ціна'])
            ->add('bookType', 'entity', ['class' => 'AppBundle\Entity\BookType', 'label' => 'Категорія книги'])
            ->add('image', 'file', [
                'required' => false,
                'label' => 'Зображення'
            ])
            ->end();
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('name', null, ['label' => 'Название'])
            ->add('author', null, ['label' => 'Автор'])
            ->add('nameEdition', null, ['label' => 'Назва видання'])
            ->add('yearEdition', null, ['label' => 'Рік видання'])
            ->add('numberPages', null, ['label' => 'Кількість сторінок'])
            ->add('price', null, ['label' => 'Ціна']);

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        //TODO filter range

        $datagridMapper
            ->add('name', null, ['label' => 'Назва'])
            ->add('author', null, ['label' => 'Автор'])
            ->add('price', null, ['label' => 'Ціна'], 'sonata_type_filter_number')
            ->add('yearEdition', null, ['label' => 'Рік видання']);
    }

    public function getParentAssociationMapping()
    {
        return 'book';
    }
}