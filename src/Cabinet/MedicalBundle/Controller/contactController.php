<?php

namespace Cabinet\MedicalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cabinet\MedicalBundle\Entity\contact;
use Cabinet\MedicalBundle\Form\contactType;

/**
 * contact controller.
 *
 */
class contactController extends Controller {

    /**
     * Lists all contact entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:contact')->findAll();

        return $this->render('CabinetMedicalBundle:contact:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a contact entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:contact')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find contact entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:contact:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new contact entity.
     *
     */
    public function newAction() {
        $entity = new contact();
        $form = $this->createForm(new contactType(), $entity);

        return $this->render('CabinetMedicalBundle:contact:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }
 public function new2Action() {
        $entity = new contact();
        $form = $this->createForm(new contactType(), $entity);

        return $this->render('CabinetMedicalBundle:contact:contact.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new contact entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new contact();
        $form = $this->createForm(new contactType(), $entity);
        $form->bind($request);
        $user = $this->getUser();
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
             $entity->setDate(new \DateTime("now"));
            $entity->setUser3($user);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contact_show', array('id' => $entity->getId())));
        }

        return $this->render('CabinetMedicalBundle:contact:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }
     public function create2Action(Request $request) {
        $entity = new contact();
        $form = $this->createForm(new contactType(), $entity);
        $form->bind($request);
        $user = $this->getUser();
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
             $entity->setDate(new \DateTime("now"));
            $entity->setUser3($user);
            $em->persist($entity);
            $em->flush();

           $this->get('session')->getFlashBag()->add(
            'notice',
            'Votre message à etais envoyer avec succée!'
        );

        return $this->redirect($this->generateUrl('contact_new2'));
        }

        return $this->render('CabinetMedicalBundle:contact:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing contact entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:contact')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find contact entity.');
        }

        $editForm = $this->createForm(new contactType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:contact:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing contact entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:contact')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find contact entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new contactType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contact_edit', array('id' => $id)));
        }

        return $this->render('CabinetMedicalBundle:contact:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a contact entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CabinetMedicalBundle:contact')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find contact entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contact'));
    }

    public function deleteeAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetMedicalBundle:contact')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('No entity found for id ' . $id);
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('contact'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
