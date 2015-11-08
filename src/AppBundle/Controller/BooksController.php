<?php

namespace AppBundle\Controller;

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
        $books = $this->getRepository("AppBundle:Book")->findAll();
        return $this->render('book/index.html.twig', ['books' => $books]);
    }
}