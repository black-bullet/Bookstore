<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
    /**
     * @param $className
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    public function getRepository($className)
    {
        return $this->getDoctrine()->getManager()->getRepository($className);
    }

    public function getManager()
    {
        return $this->getDoctrine()->getEntityManager();
    }
}