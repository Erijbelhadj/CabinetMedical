<?php

namespace Cabinet\MedicalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cabinet\MedicalBundle\Entity\prisecharge;
use Cabinet\MedicalBundle\Form\prisechargeType;

/**
 * prisecharge controller.
 *
 */
class prisechargeController extends Controller
{
    /**
     * Lists all prisecharge entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:prisecharge')->findAll();

        return $this->render('CabinetMedicalBundle:prisecharge:index.html.twig', array(
            'entities' => $entities,
        ));
    }
     public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:prisecharge')->findAll();

        return $this->render('CabinetMedicalBundle:prisecharge:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a prisecharge entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:prisecharge')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find prisecharge entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:prisecharge:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new prisecharge entity.
     *
     */
    public function newAction()
    {
        $entity = new prisecharge();
        $form   = $this->createForm(new prisechargeType(), $entity);

        return $this->render('CabinetMedicalBundle:prisecharge:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new prisecharge entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new prisecharge();
        $form = $this->createForm(new prisechargeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('prisecharge_show', array('id' => $entity->getId())));
        }

        return $this->render('CabinetMedicalBundle:prisecharge:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing prisecharge entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:prisecharge')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find prisecharge entity.');
        }

        $editForm = $this->createForm(new prisechargeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:prisecharge:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing prisecharge entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:prisecharge')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find prisecharge entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new prisechargeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('prisecharge_edit', array('id' => $id)));
        }

        return $this->render('CabinetMedicalBundle:prisecharge:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a prisecharge entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CabinetMedicalBundle:prisecharge')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find prisecharge entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('prisecharge'));
    }
     public function deleteeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetMedicalBundle:prisecharge')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('No entity found for id ' . $id);
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('prisecharge'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
