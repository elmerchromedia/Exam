<?php

namespace First\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use First\Bundle\UserBundle\Entity\Users;
use First\Bundle\UserBundle\Modals\Login;
use Symfony\Component\HttpFoundation\Session\Session; 
use Symfony\Component\HttpFoundation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



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
            $password = $request->get('password');


            #$username->getSalt(uniqid(mt_rand())); // Unique salt for user

            // Set encrypted password
            $user = $repository->findOneBy(array('email' => $username));

            /*$encoder = $this->get('security.encoder_factory')->getEncoder($user);
            $hashedPassword = $encoder->encodePassword($password, $user->getSalt());*/
            //var_dump($user->getPassword());
            //var_dump($hashedPassword); exit;

            #$password = $request->$encoder('password', $username->getSalt());
            //var_dump($encoder); exit;
            //$loginpass->($request->get($password));

            

            
            
                if (!$user) {
                  $this->get('session')->getFlashBag()->add('error', 'Unknown username or password!..');
                  return $this->redirect('login');
                  
                }else{

                    $session->set('userid' , $user->getUserId());
                    $parameters = array();

                    $parameters = array('user' => $user);
                    return $this->render('FirstUserBundle:Default:welcome.html.twig', array('user'=>$user));
                }
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $parameters = array();

                $parameters = array('user' => $user);
                $user = $repository->findOneBy(array('email' => $username, 'password' => $password, 'user'=>$user));
            }
            return $this->render('FirstUserBundle:Default:login.html.twig');
        }
    }

    public function signupAction(Request $request) {
        
        /*$user = new Users();
        $form = $this->createFormBuilder($user)
            ->add('email', 'email')
            ->add('firstname', 'text')
            ->add('lastname', 'text')
            ->add('password', 'password')
            ->add('repassword', 'repassword')
            ->add('save', 'submit', array('label' => 'Signup'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
          $user->setFirstName('firstname');
          $user->setLastName('lastname');
          $user->setPassword('password');
          $user->setUsername('email');

          $em = $this->getDoctrine()->getManager();
          $em->persist($user);
          $em->flush();
          $parameters = array();

          $parameters = array('user' => $user);
         
          $message = \Swift_Message::newInstance()
                    ->setSubject('Registration Confirmation Message')
                    ->setFrom('elmer.malinao@chromedia.com')
                    ->setTo($username = $request->get('email'))
                    ->setContentType("text/html")
                    ->setBody(
                        $this->renderView(
                            'FirstUserBundle:Registration:email.txt.twig', $parameters)
                    )
                ;
                  $this->get('mailer')->send($message);
                
                return $this->redirect($this->generateUrl('user_registration_success'));
            }

        return array(
            'signup'   => $form->createView(),
        );*/

        if ($request->getMethod() == 'POST') {

            $username = $request->get('email');
            $firstname = $request->get('firstname');
            $lastname = $request->get('lastname');
            $password = $request->get('password');

            $user = new Users();
            $user->setFirstName($firstname);
            $user->setSalt(uniqid(mt_rand())); // Unique salt for user
            $user->setLastName($lastname);

            // Set encrypted password
            /*$encoder = $this->container->get('security.encoder_factory')
              ->getEncoder($user);
            $password = $encoder->encodePassword($password, $user->getSalt());
            $user->setPassword($password);*/
            $user->setPassword(sha1($password));
            $user->setUsername($username);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $parameters = array();

            $parameters = array('user' => $user);
            $message = \Swift_Message::newInstance()
                ->setSubject('Registration Email Notification')
                ->setFrom('elmer.malinao@chromedia.com')
                ->setTo($username)
                ->setContentType("text/html")
                ->setBody(
                    $this->renderView(
                        'FirstUserBundle:Default:email.txt.twig', $parameters)
                );
              $this->get('mailer')->send($message);
              $this->get('session')->getFlashBag()->add('success', 'Registered Successfully, Please check on your email address about the mail notification');
              return $this->redirect('signup');
        }
        return $this->render('FirstUserBundle:Default:signup.html.twig');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => array('signup'),
        ));
    }

    public function profileAction(Request $request) {

      $id = $request->get('id'); 
      $em = $this->getDoctrine()->getManager();
      
      $user = $em->getRepository('FirstUserBundle:Users')->findOneByUserid($id);
      $parameters = array();
       

      $parameters = array('user' => $user);
        
      return $this->render('FirstUserBundle:Default:login.html.twig', array('user'=>$user));
    }

    public function editaccountAction(Request $request) {
       $session = new Session();
       $session->start();

       $id = $session->get('userid');

       $em = $this->getDoctrine()->getManager();

       $user = $em->getRepository('FirstUserBundle:Users')->findOneByUserid($id);

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




       $em = $this->getDoctrine()->getManager();

       $user = $em->getRepository('FirstUserBundle:Users')->findOneByUserid($id);
       
         $parameters = array();
          if (!$user) {
             throw $this->createNotFoundException(
                 'No user found for id '.$id
             );
          }else{
            $user->setFirstName($request->request->get('firstname')); 
            $user->setLastName($request->request->get('lastname')); 
            $em->flush();
          }
        return $this->redirect($this->generateUrl('login_login_homepage'));
    }

    public function editpasswordAction(Request $request) {
       $session = new Session();
       $session->start();

       $id = $session->get('userid');

       $em = $this->getDoctrine()->getManager();

       $user = $em->getRepository('FirstUserBundle:Users')->findOneByUserid($id);

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

       $em = $this->getDoctrine()->getManager();

       $user = $em->getRepository('FirstUserBundle:Users')->findOneByUserid($id);
       
         $parameters = array();
          if (!$user) {
             throw $this->createNotFoundException(
                 'No user found for id ' .$id
             );
          }else{
      
            $user->setPassword(sha1($request->request->get('password'))); 
            
            $em->flush();
          }
        return $this->redirect($this->generateUrl('login_login_homepage'));
    }

    public function resetpasswordAction(Request $request) {
        return $this->render('FirstUserBundle:Default:resetpassword.html.twig');
    }

    public function updatepasswordAction(Request $request) {
       $email = $request->get('email');
       $em = $this->getDoctrine()->getManager();
       $user = $em->getRepository('FirstUserBundle:Users')->findOneByEmail($email);

       $parameters = array();

        if (!$user) {
           $this->get('session')->getFlashBag()->add('error', 'Username not found in database');
          return $this->redirect('resetpassword');
          
        }else{

          $parameters = array('user' => $user);
        
        }

        $message = \Swift_Message::newInstance()
                ->setSubject('Password Reset Notification')
                ->setFrom('elmer.malinao@chromedia.com')
                ->setTo($username = $request->get('email'))
                ->setContentType("text/html")
                ->setBody(
                    $this->renderView('FirstUserBundle:Default:passwordresetemail.txt.twig',$parameters)
                )
            ;
            $this->get('mailer')->send($message);
            return $this->redirect($this->generateUrl('login_login_login'));
    }

    public function emaillinkAction(Request $request) {

      $id = $request->get('id');
      $em = $this->getDoctrine()->getManager();

      $user = $em->getRepository('FirstUserBundle:Users')->findOneByUserid($id);
      $parameters = array();
       

      $parameters = array('user' => $user);
        
      return $this->render('FirstUserBundle:Default:updatepassword.html.twig', array('user'=>$user));
      
    }

    public function newpasswordAction(Request $request) {
  
       $id = $request->get('userid');
       
       $em = $this->getDoctrine()->getManager();
       $user = $em->getRepository('FirstUserBundle:Users')->findOneByUserid($id);
       //var_dump($user); exit;
       $parameters = array();
          if (!$user) {
             throw $this->createNotFoundException(
                 'No user found for id ' .$id
             );
          }else{
          
            $user->setPassword(sha1($request->request->get('password'))); 
            $em->flush();
          }
        return $this->redirect($this->generateUrl('login_login_homepage'));
    }

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->redirect('login');
    }

}


