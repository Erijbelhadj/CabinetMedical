<?php

namespace Cabinet\MedicalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cabinet\MedicalBundle\Entity\patient;
use Cabinet\MedicalBundle\Form\patientType;

/**
 * patient controller.
 *
 */
class patientController extends Controller
{
    /**
     * Lists all patient entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:patient')->findAll();

        return $this->render('CabinetMedicalBundle:patient:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a patient entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:patient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find patient entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:patient:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new patient entity.
     *
     */
    public function newAction()
    {
        $entity = new patient();
        $form   = $this->createForm(new patientType(), $entity);

        return $this->render('CabinetMedicalBundle:patient:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new patient entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new patient();
        $form = $this->createForm(new patientType(), $entity);
        $form->bind($request);
 $user = $this->getUser();

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setUs($user);

            $em->persist($entity);
            $em->flush();
 $this->get('session')->clear();
            $this->get('security.context')->setToken(null);
            $this->get('request')->getSession()->invalidate();
            return $this->redirect($this->generateUrl('cabinet_medical_homepage'));
        }

        return $this->render('CabinetMedicalBundle:patient:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing patient entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:patient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find patient entity.');
        }

        $editForm = $this->createForm(new patientType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:patient:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing patient entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:patient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find patient entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new patientType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('patient_edit', array('id' => $id)));
        }

        return $this->render('CabinetMedicalBundle:patient:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a patient entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CabinetMedicalBundle:patient')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find patient entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('patient'));
    }
     public function deleteeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetMedicalBundle:patient')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('No entity found for id ' . $id);
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('patient'));
    }


    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
