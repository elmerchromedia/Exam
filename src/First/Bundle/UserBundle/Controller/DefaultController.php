<?php

namespace First\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use First\Bundle\UserBundle\Entity\Users;
use First\Bundle\UserBundle\Modals\Login;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('FirstUserBundle:Users');
        if ($request->getMethod() == 'POST') {
            $session->clear();
            $username = $request->get('email');
            $password = sha1($request->get('password'));
            $remember = $request->get('remember');
            $user = $repository->findOneBy(array('email' => $username, 'password' => $password));
            if ($user) {
                if ($remember == 'remember-me') {
                    $login = new Login();
                    $login->setUsername($username);
                    $login->setPassword($password);
                    $session->set('login', $login);
                }
                return $this->render('FirstUserBundle:Default:welcome.html.twig', array('name' => $user->getFirstName()));
            } else {
                return $this->render('FirstUserBundle:Default:login.html.twig', array('name' => 'Login Error'));
            }
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $repository->findOneBy(array('email' => $username, 'password' => $password));
                if ($user) {
                    $page = $request->get('page');
                    $count_per_page = 50;
                    $total_count = $this->getTotalCountries();
                    $total_pages=ceil($total_count/$count_per_page);

                    if(!is_numeric($page)){
                        $page=1;
                    }
                    else{
                        $page=floor($page);
                    }
                    if($total_count<=$count_per_page){
                        $page=1;
                    }
                    if(($page*$count_per_page)>$total_count){
                        $page=$total_pages;
                    }
                    $offset=0;
                    if($page>1){
                        $offset = $count_per_page * ($page-1);
                    }
                     $em = $this->getDoctrine()->getManager();
                    $ctryQuery = $em->createQueryBuilder()
                            ->select('c')
                            ->from('FirstUserBundle:Country', 'c')
                            ->setFirstResult($offset)
                            ->setMaxResults($count_per_page);
                    $ctryFinalQuery = $ctryQuery->getQuery();

                    $countries = $ctryFinalQuery->getArrayResult();
                    return $this->render('FirstUserBundle:Default:welcome.html.twig', array('name' => $user->getFirstName(),'countries'=>$countries,'total_pages'=>$total_pages,'current_page'=> $page));
                }
            }
            return $this->render('FirstUserBundle:Default:login.html.twig');
        }
    }

    public function getTotalCountries() {
        $em = $this->getDoctrine()->getManager();
        $countQuery = $em->createQueryBuilder()
                ->select('Count(c)')
                ->from('FirstUserBundle:Country', 'c');
        $finalQuery = $countQuery->getQuery();
        $total = $finalQuery->getSingleScalarResult();
        return $total;
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
        }
        return $this->render('FirstUserBundle:Default:signup.html.twig');
    }

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('FirstUserBundle:Default:login.html.twig');
    }

}
