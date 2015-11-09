<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{

    /**
     * @Method("GET")
     * @Route("/")
     * @Route("/index", name="page_index")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
}
