<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

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
        if ($sort != null && $by != null && $sort!="notFiler") {
            $books = $this->getRepository("AppBundle:Book")->getSort($sort, $by);
        } else {
            $books = $this->getRepository("AppBundle:Book")->findAll();
        }
        return $this->render('book/index.html.twig', ['books' => $books]);
    }
}