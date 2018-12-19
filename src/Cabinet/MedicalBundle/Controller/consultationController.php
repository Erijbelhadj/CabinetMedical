<?php

namespace Cabinet\MedicalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cabinet\MedicalBundle\Entity\consultation;
use Cabinet\MedicalBundle\Form\consultationType;

/**
 * consultation controller.
 *
 */
class consultationController extends Controller {

    /**
     * Lists all consultation entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:consultation')->findAll();

        return $this->render('CabinetMedicalBundle:consultation:index.html.twig', array(
                    'entities' => $entities,
        ));
    }
    public function listeAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:consultation')->findAll();

        return $this->render('CabinetMedicalBundle:consultation:liste.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a consultation entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:consultation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find consultation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:consultation:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new consultation entity.
     *
     */
    public function newAction() {
        $entity = new consultation();
        $form = $this->createForm(new consultationType(), $entity);

        return $this->render('CabinetMedicalBundle:consultation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new consultation entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new consultation();
        $form = $this->createForm(new consultationType(), $entity);
        $form->bind($request);
        $user = $this->getUser();
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setUser($user);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('consultation_show', array('id' => $entity->getId())));
        }

        return $this->render('CabinetMedicalBundle:consultation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing consultation entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:consultation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find consultation entity.');
        }

        $editForm = $this->createForm(new consultationType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:consultation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing consultation entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:consultation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find consultation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new consultationType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('consultation'));
        }

        return $this->render('CabinetMedicalBundle:consultation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a consultation entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CabinetMedicalBundle:consultation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find consultation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('consultation'));
    }

    public function deleteeAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetMedicalBundle:consultation')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('No entity found for id ' . $id);
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('consultation'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
