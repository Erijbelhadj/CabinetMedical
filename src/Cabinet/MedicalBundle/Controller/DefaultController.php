<?php

namespace Cabinet\MedicalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cabinet\MedicalBundle\Entity\actualite;
class DefaultController extends Controller {

    public function indexAction() {
          $em = $this->getDoctrine()->getManager();
          $entities = $em->getRepository('CabinetMedicalBundle:actualite')->findAll();
        return $this->render('CabinetMedicalBundle:Default:index.html.twig', array(
                    'entities' => $entities,
        ));
    }
     public function aboutAction() {
        return $this->render('CabinetMedicalBundle:Default:about.html.twig');
    }
     public function servicesAction() {
        return $this->render('CabinetMedicalBundle:Default:services.html.twig');
    }
     public function portfolioAction() {
        return $this->render('CabinetMedicalBundle:Default:portfolio.html.twig');
    }

    public function adminAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $query = $em->createQuery(
                        'SELECT j FROM CabinetMedicalBundle:contact j WHERE j.date > :date'
                )->setParameter('date', date('Y-m-d H:i:s', time() - 86400 * 2));
        $entities = $query->getResult();
        return $this->render('CabinetMedicalBundle:Default:admin.html.twig', array(
            'entities' => $entities,
        ));
    }

}
