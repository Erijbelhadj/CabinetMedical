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

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/')) {
            // cabinet_medical_homepage
            if (rtrim($pathinfo, '/') === '') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cabinet_medical_homepage');
                }

                return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cabinet_medical_homepage',);
            }

            // portfolio
            if ($pathinfo === '/portfolio') {
                return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\DefaultController::portfolioAction',  '_route' => 'portfolio',);
            }

            // about
            if ($pathinfo === '/about') {
                return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'about',);
            }

            // services
            if ($pathinfo === '/services') {
                return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\DefaultController::servicesAction',  '_route' => 'services',);
            }

            // admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\DefaultController::adminAction',  '_route' => 'admin',);
            }

            if (0 === strpos($pathinfo, '/actualite')) {
                // actualite
                if (rtrim($pathinfo, '/') === '/actualite') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'actualite');
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\actualiteController::indexAction',  '_route' => 'actualite',);
                }

                // actualite_show
                if (preg_match('#^/actualite/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\actualiteController::showAction',)), array('_route' => 'actualite_show'));
                }

                // actualite_new
                if ($pathinfo === '/actualite/admin/new') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\actualiteController::newAction',  '_route' => 'actualite_new',);
                }

                // actualite_create
                if ($pathinfo === '/actualite/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_actualite_create;
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\actualiteController::createAction',  '_route' => 'actualite_create',);
                }
                not_actualite_create:

                // actualite_edit
                if (0 === strpos($pathinfo, '/actualite/admin') && preg_match('#^/actualite/admin/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\actualiteController::editAction',)), array('_route' => 'actualite_edit'));
                }

                // actualite_update
                if (preg_match('#^/actualite/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_actualite_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\actualiteController::updateAction',)), array('_route' => 'actualite_update'));
                }
                not_actualite_update:

                // actualite_delete
                if (preg_match('#^/actualite/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_actualite_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\actualiteController::deleteAction',)), array('_route' => 'actualite_delete'));
                }
                not_actualite_delete:

                // actualite_deleteee
                if (preg_match('#^/actualite/(?P<id>[^/]+)/deletee$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\actualiteController::deleteeAction',)), array('_route' => 'actualite_deleteee'));
                }

            }

            if (0 === strpos($pathinfo, '/cabinet')) {
                // cabinet
                if (rtrim($pathinfo, '/') === '/cabinet') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cabinet');
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\cabinetController::indexAction',  '_route' => 'cabinet',);
                }

                // cabinet_show
                if (preg_match('#^/cabinet/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\cabinetController::showAction',)), array('_route' => 'cabinet_show'));
                }

                // cabinet_new
                if ($pathinfo === '/cabinet/new') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\cabinetController::newAction',  '_route' => 'cabinet_new',);
                }

                // cabinet_create
                if ($pathinfo === '/cabinet/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cabinet_create;
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\cabinetController::createAction',  '_route' => 'cabinet_create',);
                }
                not_cabinet_create:

                // cabinet_edit
                if (preg_match('#^/cabinet/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\cabinetController::editAction',)), array('_route' => 'cabinet_edit'));
                }

                // cabinet_update
                if (preg_match('#^/cabinet/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cabinet_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\cabinetController::updateAction',)), array('_route' => 'cabinet_update'));
                }
                not_cabinet_update:

                // cabinet_delete
                if (preg_match('#^/cabinet/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cabinet_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\cabinetController::deleteAction',)), array('_route' => 'cabinet_delete'));
                }
                not_cabinet_delete:

                // cb_deletee
                if (preg_match('#^/cabinet/(?P<id>[^/]+)/deletee$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\cabinetController::deleteeAction',)), array('_route' => 'cb_deletee'));
                }

            }

            if (0 === strpos($pathinfo, '/contact')) {
                // contact
                if (rtrim($pathinfo, '/') === '/contact') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'contact');
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\contactController::indexAction',  '_route' => 'contact',);
                }

                // contact_show
                if (preg_match('#^/contact/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\contactController::showAction',)), array('_route' => 'contact_show'));
                }

                // contact_new
                if ($pathinfo === '/contact/new') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\contactController::newAction',  '_route' => 'contact_new',);
                }

                // contact_new2
                if ($pathinfo === '/contact/new2') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\contactController::new2Action',  '_route' => 'contact_new2',);
                }

                // contact_create
                if ($pathinfo === '/contact/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_contact_create;
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\contactController::createAction',  '_route' => 'contact_create',);
                }
                not_contact_create:

                // contact_create2
                if ($pathinfo === '/contact/create2') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_contact_create2;
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\contactController::create2Action',  '_route' => 'contact_create2',);
                }
                not_contact_create2:

                // contact_edit
                if (preg_match('#^/contact/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\contactController::editAction',)), array('_route' => 'contact_edit'));
                }

                // contact_update
                if (preg_match('#^/contact/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_contact_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\contactController::updateAction',)), array('_route' => 'contact_update'));
                }
                not_contact_update:

                // contact_delete
                if (preg_match('#^/contact/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_contact_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\contactController::deleteAction',)), array('_route' => 'contact_delete'));
                }
                not_contact_delete:

                // c_deleteee
                if (preg_match('#^/contact/(?P<id>[^/]+)/deletee$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\contactController::deleteeAction',)), array('_route' => 'c_deleteee'));
                }

            }

            if (0 === strpos($pathinfo, '/consultation')) {
                // consultation
                if (rtrim($pathinfo, '/') === '/consultation') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'consultation');
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\consultationController::indexAction',  '_route' => 'consultation',);
                }

                // listeconsultation
                if ($pathinfo === '/consultation/listeconsultation') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\consultationController::listeAction',  '_route' => 'listeconsultation',);
                }

                // consultation_show
                if (preg_match('#^/consultation/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\consultationController::showAction',)), array('_route' => 'consultation_show'));
                }

                // consultation_new
                if ($pathinfo === '/consultation/new') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\consultationController::newAction',  '_route' => 'consultation_new',);
                }

                // consultation_create
                if ($pathinfo === '/consultation/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_consultation_create;
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\consultationController::createAction',  '_route' => 'consultation_create',);
                }
                not_consultation_create:

                // consultation_edit
                if (preg_match('#^/consultation/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\consultationController::editAction',)), array('_route' => 'consultation_edit'));
                }

                // consultation_update
                if (preg_match('#^/consultation/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_consultation_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\consultationController::updateAction',)), array('_route' => 'consultation_update'));
                }
                not_consultation_update:

                // consultation_liste
                if ($pathinfo === '/consultation/liste') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\consultationController::listeAction',  '_route' => 'consultation_liste',);
                }

                // consultation_delete
                if (preg_match('#^/consultation/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_consultation_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\consultationController::deleteAction',)), array('_route' => 'consultation_delete'));
                }
                not_consultation_delete:

                // con_deletee
                if (preg_match('#^/consultation/(?P<id>[^/]+)/deletee$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\consultationController::deleteeAction',)), array('_route' => 'con_deletee'));
                }

            }

            if (0 === strpos($pathinfo, '/medecin')) {
                // medecin
                if (rtrim($pathinfo, '/') === '/medecin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'medecin');
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\medecinController::indexAction',  '_route' => 'medecin',);
                }

                // medecin_show
                if (preg_match('#^/medecin/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\medecinController::showAction',)), array('_route' => 'medecin_show'));
                }

                // medecin_new
                if ($pathinfo === '/medecin/new') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\medecinController::newAction',  '_route' => 'medecin_new',);
                }

                // medecin_create
                if ($pathinfo === '/medecin/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_medecin_create;
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\medecinController::createAction',  '_route' => 'medecin_create',);
                }
                not_medecin_create:

                // medecin_edit
                if (preg_match('#^/medecin/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\medecinController::editAction',)), array('_route' => 'medecin_edit'));
                }

                // medecin_update
                if (preg_match('#^/medecin/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_medecin_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\medecinController::updateAction',)), array('_route' => 'medecin_update'));
                }
                not_medecin_update:

                // medecin_delete
                if (preg_match('#^/medecin/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_medecin_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\medecinController::deleteAction',)), array('_route' => 'medecin_delete'));
                }
                not_medecin_delete:

                // medecin_deleteee
                if (preg_match('#^/medecin/(?P<id>[^/]+)/deletee$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\medecinController::deleteeAction',)), array('_route' => 'medecin_deleteee'));
                }

            }

            if (0 === strpos($pathinfo, '/patient')) {
                // patient
                if (rtrim($pathinfo, '/') === '/patient') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'patient');
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\patientController::indexAction',  '_route' => 'patient',);
                }

                // patient_show
                if (preg_match('#^/patient/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\patientController::showAction',)), array('_route' => 'patient_show'));
                }

                // patient_new
                if ($pathinfo === '/patient/new') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\patientController::newAction',  '_route' => 'patient_new',);
                }

                // patient_create
                if ($pathinfo === '/patient/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_patient_create;
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\patientController::createAction',  '_route' => 'patient_create',);
                }
                not_patient_create:

                // patient_edit
                if (preg_match('#^/patient/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\patientController::editAction',)), array('_route' => 'patient_edit'));
                }

                // patient_update
                if (preg_match('#^/patient/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_patient_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\patientController::updateAction',)), array('_route' => 'patient_update'));
                }
                not_patient_update:

                // patient_delete
                if (preg_match('#^/patient/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_patient_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\patientController::deleteAction',)), array('_route' => 'patient_delete'));
                }
                not_patient_delete:

                // deleteee
                if (preg_match('#^/patient/(?P<id>[^/]+)/deletee$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\patientController::deleteeAction',)), array('_route' => 'deleteee'));
                }

            }

            if (0 === strpos($pathinfo, '/rdv')) {
                // rdv
                if (rtrim($pathinfo, '/') === '/rdv') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'rdv');
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rdvController::indexAction',  '_route' => 'rdv',);
                }

                // liste
                if ($pathinfo === '/rdv/liste') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rdvController::listeAction',  '_route' => 'liste',);
                }

                // aganda
                if ($pathinfo === '/rdv/agenda') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rdvController::agendaAction',  '_route' => 'aganda',);
                }

                // rdv_show
                if (preg_match('#^/rdv/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rdvController::showAction',)), array('_route' => 'rdv_show'));
                }

                // rdv_activ
                if (preg_match('#^/rdv/(?P<id>[^/]+)/active$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rdvController::activeAction',)), array('_route' => 'rdv_activ'));
                }

                // rdv_desactiv
                if (preg_match('#^/rdv/(?P<id>[^/]+)/desactive$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rdvController::desactiveAction',)), array('_route' => 'rdv_desactiv'));
                }

                // addrdv
                if ($pathinfo === '/rdv/addrdv') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rdvController::addrdvAction',  '_route' => 'addrdv',);
                }

                // rdv_new
                if ($pathinfo === '/rdv/new') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rdvController::newAction',  '_route' => 'rdv_new',);
                }

                // rdv_patient
                if ($pathinfo === '/rdv/newrdv') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rdvController::newrdvAction',  '_route' => 'rdv_patient',);
                }

                // rdv_create
                if ($pathinfo === '/rdv/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rdv_create;
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rdvController::createAction',  '_route' => 'rdv_create',);
                }
                not_rdv_create:

                // rdv_edit
                if (preg_match('#^/rdv/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rdvController::editAction',)), array('_route' => 'rdv_edit'));
                }

                // rdv_update
                if (preg_match('#^/rdv/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rdv_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rdvController::updateAction',)), array('_route' => 'rdv_update'));
                }
                not_rdv_update:

                // rdv_delete
                if (preg_match('#^/rdv/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rdv_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rdvController::deleteAction',)), array('_route' => 'rdv_delete'));
                }
                not_rdv_delete:

                // rd_deletee
                if (preg_match('#^/rdv/(?P<id>[^/]+)/deletee$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rdvController::deleteeAction',)), array('_route' => 'rd_deletee'));
                }

            }

            if (0 === strpos($pathinfo, '/rigime')) {
                // rigime
                if (rtrim($pathinfo, '/') === '/rigime') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'rigime');
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rigimeController::indexAction',  '_route' => 'rigime',);
                }

                // listerigime
                if ($pathinfo === '/rigime/listerigime') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rigimeController::listeAction',  '_route' => 'listerigime',);
                }

                // rigime_show
                if (preg_match('#^/rigime/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rigimeController::showAction',)), array('_route' => 'rigime_show'));
                }

                // rigime_new
                if ($pathinfo === '/rigime/new') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rigimeController::newAction',  '_route' => 'rigime_new',);
                }

                // rigime_create
                if ($pathinfo === '/rigime/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rigime_create;
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rigimeController::createAction',  '_route' => 'rigime_create',);
                }
                not_rigime_create:

                // rigime_edit
                if (preg_match('#^/rigime/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rigimeController::editAction',)), array('_route' => 'rigime_edit'));
                }

                // rigime_update
                if (preg_match('#^/rigime/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rigime_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rigimeController::updateAction',)), array('_route' => 'rigime_update'));
                }
                not_rigime_update:

                // rigime_delete
                if (preg_match('#^/rigime/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rigime_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rigimeController::deleteAction',)), array('_route' => 'rigime_delete'));
                }
                not_rigime_delete:

                // r_deletee
                if (preg_match('#^/rigime/(?P<id>[^/]+)/deletee$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\rigimeController::deleteeAction',)), array('_route' => 'r_deletee'));
                }

            }

            if (0 === strpos($pathinfo, '/securite')) {
                // securite
                if (rtrim($pathinfo, '/') === '/securite') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'securite');
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\securiteController::indexAction',  '_route' => 'securite',);
                }

                // listesec
                if ($pathinfo === '/securite/listesec') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\securiteController::listeAction',  '_route' => 'listesec',);
                }

                // securite_show
                if (preg_match('#^/securite/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\securiteController::showAction',)), array('_route' => 'securite_show'));
                }

                // securite_new
                if ($pathinfo === '/securite/new') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\securiteController::newAction',  '_route' => 'securite_new',);
                }

                // securite_create
                if ($pathinfo === '/securite/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_securite_create;
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\securiteController::createAction',  '_route' => 'securite_create',);
                }
                not_securite_create:

                // securite_edit
                if (preg_match('#^/securite/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\securiteController::editAction',)), array('_route' => 'securite_edit'));
                }

                // securite_update
                if (preg_match('#^/securite/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_securite_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\securiteController::updateAction',)), array('_route' => 'securite_update'));
                }
                not_securite_update:

                // securite_delete
                if (preg_match('#^/securite/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_securite_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\securiteController::deleteAction',)), array('_route' => 'securite_delete'));
                }
                not_securite_delete:

                // s_deletee
                if (preg_match('#^/securite/(?P<id>[^/]+)/deletee$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\securiteController::deleteeAction',)), array('_route' => 's_deletee'));
                }

            }

            if (0 === strpos($pathinfo, '/prisecharge')) {
                // prisecharge
                if (rtrim($pathinfo, '/') === '/prisecharge') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'prisecharge');
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\prisechargeController::indexAction',  '_route' => 'prisecharge',);
                }

                // prisecharge_show
                if (preg_match('#^/prisecharge/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\prisechargeController::showAction',)), array('_route' => 'prisecharge_show'));
                }

                // listecharge
                if ($pathinfo === '/prisecharge/listecharge') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\prisechargeController::listeAction',  '_route' => 'listecharge',);
                }

                // prisecharge_new
                if ($pathinfo === '/prisecharge/new') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\prisechargeController::newAction',  '_route' => 'prisecharge_new',);
                }

                // prisecharge_create
                if ($pathinfo === '/prisecharge/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_prisecharge_create;
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\prisechargeController::createAction',  '_route' => 'prisecharge_create',);
                }
                not_prisecharge_create:

                // prisecharge_edit
                if (preg_match('#^/prisecharge/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\prisechargeController::editAction',)), array('_route' => 'prisecharge_edit'));
                }

                // prisecharge_update
                if (preg_match('#^/prisecharge/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_prisecharge_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\prisechargeController::updateAction',)), array('_route' => 'prisecharge_update'));
                }
                not_prisecharge_update:

                // prisecharge_delete
                if (preg_match('#^/prisecharge/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_prisecharge_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\prisechargeController::deleteAction',)), array('_route' => 'prisecharge_delete'));
                }
                not_prisecharge_delete:

                // prisecharge_deletee
                if (preg_match('#^/prisecharge/(?P<id>[^/]+)/deletee$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\prisechargeController::deleteeAction',)), array('_route' => 'prisecharge_deletee'));
                }

            }

            if (0 === strpos($pathinfo, '/operationmed')) {
                // operationmed
                if (rtrim($pathinfo, '/') === '/operationmed') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'operationmed');
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\operationmedController::indexAction',  '_route' => 'operationmed',);
                }

                // operationmed_show
                if (preg_match('#^/operationmed/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\operationmedController::showAction',)), array('_route' => 'operationmed_show'));
                }

                // operationmed_new
                if ($pathinfo === '/operationmed/new') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\operationmedController::newAction',  '_route' => 'operationmed_new',);
                }

                // operationmed_create
                if ($pathinfo === '/operationmed/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_operationmed_create;
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\operationmedController::createAction',  '_route' => 'operationmed_create',);
                }
                not_operationmed_create:

                // operationmed_edit
                if (preg_match('#^/operationmed/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\operationmedController::editAction',)), array('_route' => 'operationmed_edit'));
                }

                // operationmed_update
                if (preg_match('#^/operationmed/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_operationmed_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\operationmedController::updateAction',)), array('_route' => 'operationmed_update'));
                }
                not_operationmed_update:

                // operationmed_delete
                if (preg_match('#^/operationmed/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_operationmed_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\operationmedController::deleteAction',)), array('_route' => 'operationmed_delete'));
                }
                not_operationmed_delete:

                // operationmed_deletee
                if (preg_match('#^/operationmed/(?P<id>[^/]+)/deletee$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\operationmedController::deleteeAction',)), array('_route' => 'operationmed_deletee'));
                }

            }

            if (0 === strpos($pathinfo, '/user')) {
                // user
                if (rtrim($pathinfo, '/') === '/user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user');
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
                }

                // user_show
                if (preg_match('#^/user/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\UserController::showAction',)), array('_route' => 'user_show'));
                }

                // user_role
                if (preg_match('#^/user/(?P<role>[^/]+)/role$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\UserController::roleAction',)), array('_route' => 'user_role'));
                }

                // checkrole
                if ($pathinfo === '/user/checkrole') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\UserController::checkroleAction',  '_route' => 'checkrole',);
                }

                // updaterole
                if (preg_match('#^/user/(?P<id>[^/]+)/(?P<r>[^/]+)/updaterole$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\UserController::roleeditAction',)), array('_route' => 'updaterole'));
                }

                // user_new
                if ($pathinfo === '/user/new') {
                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }

                // user_create
                if ($pathinfo === '/user/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_create;
                    }

                    return array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
                }
                not_user_create:

                // user_edit
                if (preg_match('#^/user/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\UserController::editAction',)), array('_route' => 'user_edit'));
                }

                // user_update
                if (preg_match('#^/user/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\UserController::updateAction',)), array('_route' => 'user_update'));
                }
                not_user_update:

                // user_delete
                if (preg_match('#^/user/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\UserController::deleteAction',)), array('_route' => 'user_delete'));
                }
                not_user_delete:

                // user_deletee
                if (preg_match('#^/user/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cabinet\\MedicalBundle\\Controller\\UserController::deleteeAction',)), array('_route' => 'user_deletee'));
                }

            }

        }

        if (0 === strpos($pathinfo, '/')) {
            // fos_user_security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }

            // fos_user_security_check
            if ($pathinfo === '/login_check') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
