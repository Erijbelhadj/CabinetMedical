<?php

namespace Cabinet\MedicalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cabinet\MedicalBundle\Entity\actualite;
use Cabinet\MedicalBundle\Form\actualiteType;

/**
 * actualite controller.
 *
 */
class actualiteController extends Controller {

    /**
     * Lists all actualite entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:actualite')->findAll();

        return $this->render('CabinetMedicalBundle:actualite:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a actualite entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:actualite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find actualite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:actualite:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new actualite entity.
     *
     */
    public function newAction() {
        $entity = new actualite();
        $form = $this->createForm(new actualiteType(), $entity);

        return $this->render('CabinetMedicalBundle:actualite:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new actualite entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new actualite();
        $form = $this->createForm(new actualiteType(), $entity);
        $form->bind($request);
        $user = $this->getUser();
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
             $entity->setDate(new \DateTime("now"));
            $entity->setUser($user);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('actualite_show', array('id' => $entity->getId())));
        }

        return $this->render('CabinetMedicalBundle:actualite:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing actualite entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:actualite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find actualite entity.');
        }

        $editForm = $this->createForm(new actualiteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:actualite:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing actualite entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:actualite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find actualite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new actualiteType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('actualite'));
        }

        return $this->render('CabinetMedicalBundle:actualite:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a actualite entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CabinetMedicalBundle:actualite')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find actualite entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('actualite'));
    }

    public function deleteeAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetMedicalBundle:actualite')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('No entity found for id ' . $id);
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('actualite'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
