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

            $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom('elmer.malinao@chromedia.com')
                ->setTo($username)
                ->setContentType("text/html")
                ->setBody(
                    $this->renderView(
                        'FirstUserBundle:Default:email.txt.twig',
                        array('name' => $name)
                    )
                )
            ;
            $this->get('mailer')->send($message);

            return $this->redirect('login');
        }
        return $this->render('FirstUserBundle:Default:signup.html.twig');
    }

    public function editaccountAction(Request $request) {
       $session = new Session();
       $session->start();

       $id = $session->get('userid');

       $em = $this->getDoctrine()->getManager();

       $user = $em->getRepository('FirstUserBundle:Users')->findOneByUserid($id);
       // var_dump($user); exit;

       $parameters = array();
        if (!$user) {
           throw $this->createNotFoundException(
               'No user found for id '.$id
           );
        }else{

          $parameters = array('user' => $user);
        
        }
        return $this->render('FirstUserBundle:Default:editaccount.html.twig', $parameters);
    }

     public function saveaccountAction(Request $request) {
       $session = new Session();
       $session->start();

       $id = $session->get('userid');

//return $this->render($id);


       $em = $this->getDoctrine()->getManager();

       $user = $em->getRepository('FirstUserBundle:Users')->findOneByUserid($id);
       //var_dump($user); exit;
       
         $parameters = array();
          if (!$user) {
             throw $this->createNotFoundException(
                 'No user found for id '.$id
             );
          }else{
            //$form = $request->request->get('lastname');
            //print_r($form); exit;
            
            $user->setFirstName($request->request->get('firstname')); 
            $user->setLastName($request->request->get('lastname')); 
            $em->flush();
          }
        return $this->redirect($this->generateUrl('login_login_homepage'));
        //return $this->render('FirstUserBundle:Default:welcome.html.twig');
    }

    public function editpasswordAction(Request $request) {
       $session = new Session();
       $session->start();

       $id = $session->get('userid');

       $em = $this->getDoctrine()->getManager();

       $user = $em->getRepository('FirstUserBundle:Users')->findOneByUserid($id);
       // var_dump($user); exit;

       $parameters = array();
        if (!$user) {
           throw $this->createNotFoundException(
               'No user found for id '.$id
           );
        }else{

          $parameters = array('user' => $user);
        
        }
        return $this->render('FirstUserBundle:Default:editpassword.html.twig', $parameters);
    }

     public function savepasswordAction(Request $request) {
       $session = new Session();
       $session->start();

       $id = $session->get('userid');

//return $this->render($id); exit;


       $em = $this->getDoctrine()->getManager();

       $user = $em->getRepository('FirstUserBundle:Users')->findOneByUserid($id);
       //var_dump($user); exit;
       
         $parameters = array();
          if (!$user) {
             throw $this->createNotFoundException(
                 'No user found for id '.$id
             );
          }else{
            //$form = $request->request->get('lastname');
            //print_r($form); exit;
            
            $user->setPassword(sha1($request->request->get('password'))); 
            //$user->setLastName($request->request->get('lastname')); 
            $em->flush();
          }
        return $this->redirect($this->generateUrl('login_login_homepage'));
        //return $this->render('FirstUserBundle:Default:welcome.html.twig');
    }

    public function resetpasswordAction(Request $request) {
        return $this->render('FirstUserBundle:Default:resetpassword.html.twig');
    }

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->redirect('login');
        //return $this->render('FirstUserBundle:Default:login.html.twig');
    }

}
