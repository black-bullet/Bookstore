<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Book;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BooksController extends BaseController
{
    /**
     * @Method("GET")
     * @Route("/books", name="book_index")
     */
    public function indexAction()
    {
        $sort = $this->getRequest()->get("sort");
        $by = $this->getRequest()->get("by");
        $books = null;
        if ($sort != null && $by != null && $sort != "notFiler") {
            $books = $this->getRepository("AppBundle:Book")->getSort($sort, $by);
        } else {
            $books = $this->getRepository("AppBundle:Book")->findAll();
        }

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $books,
            $this->getRequest()->query->get('page', 1),
            5
        );

        return $this->render('book/index.html.twig', ['books' => $books, 'pagination' => $pagination]);
    }

    /**
     * @Method("GET")
     * @Route("books/{id}", name="book_detail")
     */
    public function getAction(Book $book)
    {
        $comments = $this->getRepository("AppBundle:BookComment")->getCommentsForBook($book->getId());
        return $this->render('book/detail.html.twig', [
            'book' => $book,
            'comments' => $comments
        ]);
    }
}