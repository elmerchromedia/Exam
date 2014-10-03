<?php

namespace First\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{


    public function LoginAction()
    {	
 
        return $this->render('FirstUserBundle:Default:login.html.twig');
    }
}