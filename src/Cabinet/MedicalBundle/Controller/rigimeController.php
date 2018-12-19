<?php

namespace Cabinet\MedicalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cabinet\MedicalBundle\Entity\rigime;
use Cabinet\MedicalBundle\Form\rigimeType;

/**
 * rigime controller.
 *
 */
class rigimeController extends Controller
{
    /**
     * Lists all rigime entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:rigime')->findAll();

        return $this->render('CabinetMedicalBundle:rigime:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:rigime')->findAll();

        return $this->render('CabinetMedicalBundle:rigime:liste.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a rigime entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:rigime')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find rigime entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:rigime:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new rigime entity.
     *
     */
    public function newAction()
    {
        $entity = new rigime();
        $form   = $this->createForm(new rigimeType(), $entity);

        return $this->render('CabinetMedicalBundle:rigime:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new rigime entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new rigime();
        $form = $this->createForm(new rigimeType(), $entity);
        $form->bind($request);
 $user = $this->getUser();
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
             $entity->setUser($user);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rigime_show', array('id' => $entity->getId())));
        }

        return $this->render('CabinetMedicalBundle:rigime:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rigime entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:rigime')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find rigime entity.');
        }

        $editForm = $this->createForm(new rigimeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:rigime:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing rigime entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:rigime')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find rigime entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new rigimeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rigime'));
        }

        return $this->render('CabinetMedicalBundle:rigime:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rigime entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CabinetMedicalBundle:rigime')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find rigime entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rigime'));
    }
 public function deleteeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetMedicalBundle:rigime')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('No entity found for id ' . $id);
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('rigime'));
    }
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
