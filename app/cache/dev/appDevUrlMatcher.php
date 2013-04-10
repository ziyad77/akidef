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

        if (0 === strpos($pathinfo, '/images')) {
            if (0 === strpos($pathinfo, '/images/9412bef')) {
                // _assetic_9412bef
                if ($pathinfo === '/images/9412bef.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9412bef',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_9412bef',);
                }

                // _assetic_9412bef_0
                if ($pathinfo === '/images/9412bef_entete_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9412bef',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_9412bef_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/be2ad6f')) {
                // _assetic_be2ad6f
                if ($pathinfo === '/images/be2ad6f.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'be2ad6f',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_be2ad6f',);
                }

                // _assetic_be2ad6f_0
                if ($pathinfo === '/images/be2ad6f_logo_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'be2ad6f',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_be2ad6f_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/448637e')) {
            // _assetic_448637e
            if ($pathinfo === '/css/448637e.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '448637e',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_448637e',);
            }

            if (0 === strpos($pathinfo, '/css/448637e_')) {
                // _assetic_448637e_0
                if ($pathinfo === '/css/448637e_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '448637e',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_448637e_0',);
                }

                // _assetic_448637e_1
                if ($pathinfo === '/css/448637e_responsive_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '448637e',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_448637e_1',);
                }

                // _assetic_448637e_2
                if ($pathinfo === '/css/448637e_sticky-footer_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '448637e',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_448637e_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/a1366b1')) {
                // _assetic_a1366b1
                if ($pathinfo === '/js/a1366b1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a1366b1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a1366b1',);
                }

                // _assetic_a1366b1_0
                if ($pathinfo === '/js/a1366b1_jquery-1.9.1_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a1366b1',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a1366b1_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/0deedda')) {
                // _assetic_0deedda
                if ($pathinfo === '/js/0deedda.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0deedda',);
                }

                if (0 === strpos($pathinfo, '/js/0deedda_bootstrap')) {
                    // _assetic_0deedda_0
                    if ($pathinfo === '/js/0deedda_bootstrap_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0deedda_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/0deedda_bootstrap-')) {
                        // _assetic_0deedda_1
                        if ($pathinfo === '/js/0deedda_bootstrap-transition_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_0deedda_1',);
                        }

                        // _assetic_0deedda_2
                        if ($pathinfo === '/js/0deedda_bootstrap-alert_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_0deedda_2',);
                        }

                        // _assetic_0deedda_3
                        if ($pathinfo === '/js/0deedda_bootstrap-button_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_0deedda_3',);
                        }

                        if (0 === strpos($pathinfo, '/js/0deedda_bootstrap-c')) {
                            // _assetic_0deedda_4
                            if ($pathinfo === '/js/0deedda_bootstrap-carousel_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_0deedda_4',);
                            }

                            // _assetic_0deedda_5
                            if ($pathinfo === '/js/0deedda_bootstrap-collapse_6.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_0deedda_5',);
                            }

                        }

                        // _assetic_0deedda_6
                        if ($pathinfo === '/js/0deedda_bootstrap-dropdown_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_0deedda_6',);
                        }

                        // _assetic_0deedda_7
                        if ($pathinfo === '/js/0deedda_bootstrap-modal_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_0deedda_7',);
                        }

                        // _assetic_0deedda_8
                        if ($pathinfo === '/js/0deedda_bootstrap-tooltip_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_0deedda_8',);
                        }

                        // _assetic_0deedda_9
                        if ($pathinfo === '/js/0deedda_bootstrap-popover_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_0deedda_9',);
                        }

                        // _assetic_0deedda_10
                        if ($pathinfo === '/js/0deedda_bootstrap-scrollspy_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_0deedda_10',);
                        }

                        if (0 === strpos($pathinfo, '/js/0deedda_bootstrap-t')) {
                            // _assetic_0deedda_11
                            if ($pathinfo === '/js/0deedda_bootstrap-tab_12.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_0deedda_11',);
                            }

                            // _assetic_0deedda_12
                            if ($pathinfo === '/js/0deedda_bootstrap-typeahead_13.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_0deedda_12',);
                            }

                        }

                        // _assetic_0deedda_13
                        if ($pathinfo === '/js/0deedda_bootstrap-affix_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0deedda',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_0deedda_13',);
                        }

                    }

                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        // homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Aki\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // Discographie
        if ($pathinfo === '/Recherche') {
            return array (  '_controller' => 'Aki\\MainBundle\\Controller\\DefaultController::rechercheAction',  '_route' => 'Discographie',);
        }

        // Biographie
        if ($pathinfo === '/Biographie') {
            return array (  '_controller' => 'Aki\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'Biographie',);
        }

        if (0 === strpos($pathinfo, '/Compagnie')) {
            // apropos
            if ($pathinfo === '/Compagnie/A-Propos') {
                return array (  '_controller' => 'Aki\\MainBundle\\Controller\\CompagnieController::aproposAction',  '_route' => 'apropos',);
            }

            // suggestion
            if ($pathinfo === '/Compagnie/suggestion') {
                return array (  '_controller' => 'Aki\\MainBundle\\Controller\\CompagnieController::suggestionAction',  '_route' => 'suggestion',);
            }

            // contact
            if ($pathinfo === '/Compagnie/contact') {
                return array (  '_controller' => 'Aki\\MainBundle\\Controller\\CompagnieController::contactAction',  '_route' => 'contact',);
            }

        }

        if (0 === strpos($pathinfo, '/home')) {
            // Videos
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'Aki\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'Videos',);
            }

            // Photos
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'Aki\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'Photos',);
            }

        }

        // discographie_homepage
        if (0 === strpos($pathinfo, '/Biographie/hello') && preg_match('#^/Biographie/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'discographie_homepage')), array (  '_controller' => 'Aki\\DiscographieBundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
