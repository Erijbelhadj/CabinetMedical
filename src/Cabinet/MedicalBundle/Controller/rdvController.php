<?php

namespace Cabinet\MedicalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse ;

use Cabinet\MedicalBundle\Entity\rdv;
use Cabinet\MedicalBundle\Form\rdvType;
use Cabinet\MedicalBundle\Form\rdvpatientType;

/**
 * rdv controller.
 *
 */
class rdvController extends Controller
{
    /**
     * Lists all rdv entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:rdv')->findAll();

        return $this->render('CabinetMedicalBundle:rdv:index.html.twig', array(
            'entities' => $entities,
        ));
    }
     public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:rdv')->findAll();

        return $this->render('CabinetMedicalBundle:rdv:liste.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a rdv entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:rdv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find rdv entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:rdv:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new rdv entity.
     *
     */
    public function newAction()
    {
        $entity = new rdv();
        $form   = $this->createForm(new rdvType(), $entity);

        return $this->render('CabinetMedicalBundle:rdv:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new rdv entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new rdv();
        $form = $this->createForm(new rdvType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
             $entity->setActive(0);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rdv_show', array('id' => $entity->getId())));
        }

        return $this->render('CabinetMedicalBundle:rdv:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rdv entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:rdv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find rdv entity.');
        }

        $editForm = $this->createForm(new rdvType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:rdv:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing rdv entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:rdv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find rdv entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new rdvType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rdv'));
        }

        return $this->render('CabinetMedicalBundle:rdv:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rdv entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CabinetMedicalBundle:rdv')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find rdv entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rdv'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
     public function deleteeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetMedicalBundle:rdv')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('No entity found for id ' . $id);
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('rdv'));
    }

    public function agendaAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:rdv')->findBy(array("active"=>0));

        

        $medecins = $em->getRepository('CabinetMedicalBundle:medecin')->findAll();
        

        $cabinets = $em->getRepository('CabinetMedicalBundle:cabinet')->findAll();
        
        return $this->render('CabinetMedicalBundle:rdv:calendar.html.twig', array(
            'entities' => $entities,'medecins'=>$medecins , 'cabinets'=>$cabinets,
        ));
    }
    public function addrdvAction(){
        $data =  new rdv() ;
                           $request = $this->get('request');

                $em = $this->getDoctrine()->getManager();

        $cabinet = $em->getRepository('CabinetMedicalBundle:cabinet')->find($request->request->get('cabinet'));
        $medecin = $em->getRepository('CabinetMedicalBundle:medecin')->find($request->request->get('medecin'));

       $user = $this->getUser();
          //  $patient = new patient();
            $patient = $em->getRepository('CabinetMedicalBundle:patient')->findBy(array("us"=>$user));            
           // return var_dump($patient);
            $data->setUser4($user);
            $data->setPatient($patient['0']);
            $data->setCabinet($cabinet);
            $data->setMed($medecin);
            $data->setActive(2); 
            $data->setTitre($request->request->get('titre'));
            $data->setDate( new \DateTime($request->request->get('date')));
        $data->setNum(0);
            $em->persist($data);
            $em->flush();
                      return new JsonResponse(array("result"=>1)) ;

    }
      public function newrdvAction(Request $request) {
       
//return var_dump($user);
$data =  new rdv() ;
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new rdvpatientType(), $data);
       $form->bind($request);
     
     
        if ($form->isValid()) {
//return var_dump($patient);
            $user = $this->getUser();
            $data = $form->getData();
          //  $patient = new patient();
            $patient = $em->getRepository('CabinetMedicalBundle:patient')->findBy(array("us"=>$user));            
           // return var_dump($patient);
            $data->setUser4($user);
            $data->setPatient($patient['0']);
            $data->setActive(1);
             $data->setNum(0);
            $em->persist($data);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
            'notice',
            'Votre demande de prise  a etait envoyer avec succée vous pouvez consulter votre profil dans les prochaines heures pour vérifier la validation de rdv!'
        );

         //return $this->redirect($this->generateUrl('rdv'));
    }
        return $this->render('CabinetMedicalBundle:rdv:newrdvpatient.html.twig', array(
                    'form' => $form->createView()
        ));
    }
    
    public function activeAction( $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:rdv')->find($id);
 
            $entity->setActive(0);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rdv'));
       
    }public function desactiveAction( $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:rdv')->find($id);
 
            $entity->setActive(1);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rdv'));
       
    }
    
    
}
