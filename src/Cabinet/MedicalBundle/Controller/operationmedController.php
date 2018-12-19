<?php

namespace Cabinet\MedicalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cabinet\MedicalBundle\Entity\operationmed;
use Cabinet\MedicalBundle\Form\operationmedType;

/**
 * operationmed controller.
 *
 */
class operationmedController extends Controller {

    /**
     * Lists all operationmed entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:operationmed')->findAll();

        return $this->render('CabinetMedicalBundle:operationmed:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a operationmed entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:operationmed')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find operationmed entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:operationmed:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new operationmed entity.
     *
     */
    public function newAction() {
        $entity = new operationmed();
        $form = $this->createForm(new operationmedType(), $entity);

        return $this->render('CabinetMedicalBundle:operationmed:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new operationmed entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new operationmed();
        $form = $this->createForm(new operationmedType(), $entity);
        $form->bind($request);
        $user = $this->getUser();
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setUser($user);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('operationmed_show', array('id' => $entity->getId())));
        }

        return $this->render('CabinetMedicalBundle:operationmed:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing operationmed entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:operationmed')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find operationmed entity.');
        }

        $editForm = $this->createForm(new operationmedType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:operationmed:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing operationmed entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:operationmed')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find operationmed entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new operationmedType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('operationmed'));
        }

        return $this->render('CabinetMedicalBundle:operationmed:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a operationmed entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CabinetMedicalBundle:operationmed')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find operationmed entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('operationmed'));
    }

    public function deleteeAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetMedicalBundle:operationmed')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('No entity found for id ' . $id);
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('operationmed'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
