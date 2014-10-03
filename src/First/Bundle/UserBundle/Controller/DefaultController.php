<?php

namespace First\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {	
 
        return $this->render('FirstUserBundle:Default:index.html.twig');
    }
}

