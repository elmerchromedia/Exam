<?php

namespace First\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use First\Bundle\UserBundle\Entity\Users;
use First\Bundle\UserBundle\Modals\Login;
use Symfony\Component\HttpFoundation\Session\Session; 

class DefaultController extends Controller {

    public function indexAction(Request $request) {
            return $this->render('FirstUserBundle:Default:index.html.twig');
    }
    public function loginAction(Request $request) {
            return $this->render('FirstUserBundle:Default:login.html.twig');
    }

    public function welcomeAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('FirstUserBundle:Users');
        if ($request->getMethod() == 'POST') {
            $session->clear();
            $id = $request->get('userid');
            $username = $request->get('email');
            $password = sha1($request->get('password'));

            $user = $repository->findOneBy(array('email' => $username, 'password' => $password));

            if (!$user) {
              return $this->render('FirstUserBundle:Default:Login.html.twig');
            }else{
                $session->set('userid' , $user->getUserId());
                return $this->render('FirstUserBundle:Default:welcome.html.twig', array('userid' => $user->getUserid(), 'name' => $user->getFirstName()));
            }
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $repository->findOneBy(array('email' => $username, 'password' => $password));
            }
            return $this->render('FirstUserBundle:Default:login.html.twig');
        }
    }

    public function signupAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $username = $request->get('email');
            $firstname = $request->get('firstname');
            $lastname = $request->get('lastname');
            $password = $request->get('password');

            $user = new Users();
            $user->setFirstName($firstname);
            $user->setLastName($lastname);
            $user->setPassword(sha1($password));
            $user->setUsername($username);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirect('login');
        }
        return $this->render('FirstUserBundle:Default:signup.html.twig');
    }

    public function editaccountAction(Request $request) {
       $session = new Session();
       $session->start();

       $id = $session->get('userid');

       $user = new Users();
       $em = $this->getDoctrine()->getManager();

       $user = $em->getRepository('FirstUserBundle:Users')->findOneByUserid($id);
       // var_dump($user); exit;

       if (!$user) {
           throw $this->createNotFoundException(
               'No user found for id '.$id
           );
       }else{

           // $user->setUsername($user->getUserName());
           // $user->setFirstName($user->getFirstName());
           // $user->setLastName($user->getLastName());
           //$em->flush();
           $data = array(
            'name'  => $user->getFirstName(),
            'lastname'  => $user->getLastName(),
            'email'  => $user->getUsername()
          );
           return $this->render('FirstUserBundle:Default:editaccount.html.twig' ,$data);

           if ($request->getMethod() == 'POST') {
            $user = new Users();
            $user->setFirstName($data->getFirstName());
            $user->setLastName($data->getLastName());
            //$user->setPassword(sha1($password));
            //$user->setUsername($username);
            $em = $this->getDoctrine()->getManager();
            $em->update($user);
            $em->flush();

                return $this->redirect('login');
        }

      }
}
    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->redirect('login');
        //return $this->render('FirstUserBundle:Default:login.html.twig');
    }

}
