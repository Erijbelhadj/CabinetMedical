<?php

namespace Cabinet\MedicalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cabinet\MedicalBundle\Entity\securite;
use Cabinet\MedicalBundle\Form\securiteType;

/**
 * securite controller.
 *
 */
class securiteController extends Controller
{
    /**
     * Lists all securite entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:securite')->findAll();

        return $this->render('CabinetMedicalBundle:securite:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:securite')->findAll();

        return $this->render('CabinetMedicalBundle:securite:liste.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a securite entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:securite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find securite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:securite:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new securite entity.
     *
     */
    public function newAction()
    {
        $entity = new securite();
        $form   = $this->createForm(new securiteType(), $entity);

        return $this->render('CabinetMedicalBundle:securite:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new securite entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new securite();
        $form = $this->createForm(new securiteType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('securite'));
        }

        return $this->render('CabinetMedicalBundle:securite:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing securite entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:securite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find securite entity.');
        }

        $editForm = $this->createForm(new securiteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:securite:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing securite entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:securite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find securite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new securiteType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('securite'));
        }

        return $this->render('CabinetMedicalBundle:securite:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a securite entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CabinetMedicalBundle:securite')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find securite entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('securite'));
    }
     public function deleteeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetMedicalBundle:securite')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('No entity found for id ' . $id);
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('securite'));
    }


    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
