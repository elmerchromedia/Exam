<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js/29278d2')) {
            // _assetic_29278d2
            if ($pathinfo === '/js/29278d2.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '29278d2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_29278d2',);
            }

            if (0 === strpos($pathinfo, '/js/29278d2_')) {
                // _assetic_29278d2_0
                if ($pathinfo === '/js/29278d2_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '29278d2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_29278d2_0',);
                }

                // _assetic_29278d2_1
                if ($pathinfo === '/js/29278d2_bootstrap_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '29278d2',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_29278d2_1',);
                }

                if (0 === strpos($pathinfo, '/js/29278d2_parsley')) {
                    // _assetic_29278d2_2
                    if ($pathinfo === '/js/29278d2_parsley.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '29278d2',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_29278d2_2',);
                    }

                    // _assetic_29278d2_3
                    if ($pathinfo === '/js/29278d2_parsley-standalone.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '29278d2',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_29278d2_3',);
                    }

                    // _assetic_29278d2_4
                    if ($pathinfo === '/js/29278d2_parsley.extend.min_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '29278d2',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_29278d2_4',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Management\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'login',);
        }

        // signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'Management\\UserBundle\\Controller\\DefaultController::signupAction',  '_route' => 'signup',);
        }

        // dashboard
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'Management\\UserBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'dashboard',);
        }

        // checkuser
        if ($pathinfo === '/checkuser') {
            return array (  '_controller' => 'Management\\UserBundle\\Controller\\UserController::checkUserAction',  '_route' => 'checkuser',);
        }

        // saveuser
        if ($pathinfo === '/saveuser') {
            return array (  '_controller' => 'Management\\UserBundle\\Controller\\UserController::saveUserAction',  '_route' => 'saveuser',);
        }

        // logout2
        if ($pathinfo === '/logout2') {
            return array (  '_controller' => 'Management\\UserBundle\\Controller\\UserController::logoutUserAction',  '_route' => 'logout2',);
        }

        // updateuser
        if ($pathinfo === '/updateuser') {
            return array (  '_controller' => 'Management\\UserBundle\\Controller\\UserController::updateUserAction',  '_route' => 'updateuser',);
        }

        // changepass
        if ($pathinfo === '/changepass') {
            return array (  '_controller' => 'Management\\UserBundle\\Controller\\DefaultController::changePassAction',  '_route' => 'changepass',);
        }

        // updatepass
        if ($pathinfo === '/updatepass') {
            return array (  '_controller' => 'Management\\UserBundle\\Controller\\UserController::updatePassAction',  '_route' => 'updatepass',);
        }

        // activate
        if ($pathinfo === '/activate') {
            return array (  '_controller' => 'Management\\UserBundle\\Controller\\DefaultController::activateAccountAction',  '_route' => 'activate',);
        }

        // forgotpass
        if ($pathinfo === '/forgotpass') {
            return array (  '_controller' => 'Management\\UserBundle\\Controller\\DefaultController::forgotPassAction',  '_route' => 'forgotpass',);
        }

        // saveforgotpass
        if ($pathinfo === '/saveforgotpass') {
            return array (  '_controller' => 'Management\\UserBundle\\Controller\\UserController::saveUserConfirmationAction',  '_route' => 'saveforgotpass',);
        }

        // test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'Management\\UserBundle\\Controller\\DefaultController::testAction',  '_route' => 'test',);
        }

        // resetpassword
        if ($pathinfo === '/resetpassword') {
            return array (  '_controller' => 'Management\\UserBundle\\Controller\\DefaultController::resetPassAction',  '_route' => 'resetpassword',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
