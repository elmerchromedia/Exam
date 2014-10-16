<?php

/**
* coded by elmer malinao
*
**/

namespace First\Bundle\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use First\Bundle\UserBundle\Message;

/**
 * Registration controller.
 * @Route("/registration")
 */
class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="user_registration_register")
     * @Template()
     */
    public function registerAction(Request $request)
    {
        $userManager = $this->get('elmer_user.user_manager');
        $entity = $userManager->createUser();
                
        $form = $this->createForm('elmer_user_registration', $entity, array(
            'action' => $this->generateUrl('user_registration_register'),
            'method' => 'POST',
            'validation_groups' => 'registration'
        ));

        $form->handleRequest($request);

        if ($form->isValid()) {
            $userManager->updatePassword($entity);
            $entity->setActive(false);
            $entity->setConfirmationToken(base_convert(sha1(uniqid(mt_rand(), true)), 16, 36));
            
            $userManager->updateUser($entity);
            
            $template = $this->container->get('twig')->loadTemplate('FirstUserBundle:Email:Registration/register.html.twig');

            $parameters = array(
                //'user' => $entity,
                'url' => $this->generateUrl('user_registration_confirm', array('confirmationToken' => $entity->getConfirmationToken()), true),
                'globals' => $this->container->get('twig')->getGlobals()
            );
            
         
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
            'form'   => $form->createView(),
        );
    }
    
    /**
     * @Route("/success", name="user_registration_success")
     * @Template()
     */
    public function successAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/confirm/{confirmationToken}", name="user_registration_confirm")
     * @Template()
     */
    public function confirmAction(Request $request, $confirmationToken)
    {
        $userManager = $this->get('elmer_user.user_manager');
        $entity = $userManager->getRepository()->findOneByConfirmationToken($confirmationToken);
        
        if (!$entity) {
            return array(
                'message' => 'registration.confirm.token_not_found'
            );
        }

        //Make sure the user is logged out to prevent strange behavior
        $this->get('security.context')->setToken(null);
        $request->getSession()->invalidate();
        
        if ($entity->getUpdatePasswordOnConfirmation()) {
        
            $form = $this->createForm('elmer_user_change_password', $entity, array(
                'action' => $this->generateUrl('user_registration_confirm', array('confirmationToken' => $confirmationToken)),
                'method' => 'POST',
            ));
            $form->handleRequest($request);
            
            if ($form->isValid()) {
                $entity->setActive(true);
                $entity->setConfirmed(true);
                $entity->setConfirmationToken(null);
                $entity->getUpdatePasswordOnConfirmation(null);

                $userManager->updatePassword($entity);
                $userManager->updateUser($entity);
                
                return array(
                    'message' => 'registration.confirm.success',
                    'success' => true
                );
            }
            
            return array(
                'message' => 'registration.confirm.update_password',
                'form' => $form->createView()
            );
            
        } else {
        
            $entity->setActive(true);
            $entity->setConfirmed(true);
            $entity->setConfirmationToken(null);
            
            $userManager->updateUser($entity);
                    
            $token = new UsernamePasswordToken($entity, null, $this->container->getParameter('elmer_user.firewall_name'), $entity->getRoles());
            $this->get('security.context')->setToken($token);
    
            $event = new InteractiveLoginEvent($request, $token);
            $this->get('event_dispatcher')->dispatch('security.interactive_login', $event);
            
            return array(
                'message' => 'registration.confirm.success',
                'success' => true
            );
        }
    }

}
