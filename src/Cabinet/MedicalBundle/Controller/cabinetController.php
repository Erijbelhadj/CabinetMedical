<?php

namespace Cabinet\MedicalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cabinet\MedicalBundle\Entity\cabinet;
use Cabinet\MedicalBundle\Form\cabinetType;

/**
 * cabinet controller.
 *
 */
class cabinetController extends Controller {

    /**
     * Lists all cabinet entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:cabinet')->findAll();

        return $this->render('CabinetMedicalBundle:cabinet:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a cabinet entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:cabinet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cabinet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:cabinet:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new cabinet entity.
     *
     */
    public function newAction() {
        $entity = new cabinet();
        $form = $this->createForm(new cabinetType(), $entity);

        return $this->render('CabinetMedicalBundle:cabinet:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new cabinet entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new cabinet();
        $form = $this->createForm(new cabinetType(), $entity);
        $form->bind($request);
        $user = $this->getUser();
        if ($form->isValid()) {
            $entity->setUser2($user);
             $entity->setSecurite(null);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cabinet_show', array('id' => $entity->getId())));
        }

        return $this->render('CabinetMedicalBundle:cabinet:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cabinet entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:cabinet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cabinet entity.');
        }

        $editForm = $this->createForm(new cabinetType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:cabinet:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing cabinet entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:cabinet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cabinet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new cabinetType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cabinet'));
        }

        return $this->render('CabinetMedicalBundle:cabinet:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a cabinet entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CabinetMedicalBundle:cabinet')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find cabinet entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cabinet'));
    }

    public function deleteeAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetMedicalBundle:cabinet')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('No entity found for id ' . $id);
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('cabinet'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
