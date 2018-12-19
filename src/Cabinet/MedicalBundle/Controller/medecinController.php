<?php

namespace Cabinet\MedicalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cabinet\MedicalBundle\Entity\medecin;
use Cabinet\MedicalBundle\Entity\User;
use Cabinet\MedicalBundle\Form\medecinType;

/**
 * medecin controller.
 *
 */
class medecinController extends Controller
{
    /**
     * Lists all medecin entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:medecin')->findAll();

        return $this->render('CabinetMedicalBundle:medecin:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a medecin entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:medecin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find medecin entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:medecin:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new medecin entity.
     *
     */
    public function newAction()
    {

        $entity = new medecin();
        $form   = $this->createForm(new medecinType(), $entity);

        return $this->render('CabinetMedicalBundle:medecin:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new medecin entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new medecin();
         $entity->setUsm(new User());
        $form = $this->createForm(new medecinType(), $entity);
        $form->bind($request);
 $user = $this->getUser();
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
             $entity = $form->getData();
            // $em->persist($entity->getUsm());    
             $entity->setUsm($user);
            $em->persist($entity);
            $em->flush();
 $this->get('session')->clear();
            $this->get('security.context')->setToken(null);
            $this->get('request')->getSession()->invalidate();
            return $this->redirect($this->generateUrl('cabinet_medical_homepage'));
        }

        return $this->render('CabinetMedicalBundle:medecin:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing medecin entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:medecin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find medecin entity.');
        }

        $editForm = $this->createForm(new medecinType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:medecin:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing medecin entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:medecin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find medecin entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new medecinType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('medecin_edit', array('id' => $id)));
        }

        return $this->render('CabinetMedicalBundle:medecin:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a medecin entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CabinetMedicalBundle:medecin')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find medecin entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('medecin'));
    }
    public function deleteeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetMedicalBundle:medecin')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('No entity found for id ' . $id);
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('medecin'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
