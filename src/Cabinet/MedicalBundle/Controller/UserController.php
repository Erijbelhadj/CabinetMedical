<?php

namespace Cabinet\MedicalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Cabinet\MedicalBundle\Entity\User;
use Cabinet\MedicalBundle\Form\UserType;

/**
 * User controller.
 *
 */
class UserController extends Controller {

    /**
     * Lists all User entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetMedicalBundle:User')->findAll();

        return $this->render('CabinetMedicalBundle:User:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    public function roleAction($role) {

        $session = $this->getRequest()->getSession();
        $session->set('role', $role);

        return $this->redirect($this->generateUrl('fos_user_registration_register'));
    }

    public function checkroleAction() {

        $session = $this->getRequest()->getSession();
        $user = $this->getUser();
        if ($session->get('role') == 1) {
            $user->setRoles(array('ROLE_ADMIN', 'ROLE_SECRETAIRE', 'ROLE_MEDECIN', 'ROLE_PATIENT'));
            $user->setEnabled(1);
$user->setProfilePicture("383d7f851f4f0b307a88f27d737ea0e5faa01440.png");
            $em = $this->getDoctrine()->getManager();

            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('admin'));
        }
        if ($session->get('role') == 2) {


            $user->setRoles(array('ROLE_MEDECIN'));
            $user->setEnabled(0);
$user->setProfilePicture("383d7f851f4f0b307a88f27d737ea0e5faa01440.png");


            $em = $this->getDoctrine()->getManager();

            $em->persist($user);
            $em->flush();
           
            return $this->redirect($this->generateUrl('medecin_new'));

//$this->get('session')->remove('user');
        }
        if ($session->get('role') == 3) {

            $user->setRoles(array('ROLE_SECRETAIRE'));
            $user->setEnabled(0);
            $user->setProfilePicture("383d7f851f4f0b307a88f27d737ea0e5faa01440.png");

            $em = $this->getDoctrine()->getManager();

            $em->persist($user);
            $em->flush();
             $this->get('session')->clear();
            $this->get('security.context')->setToken(null);
            $this->get('request')->getSession()->invalidate();
            return $this->redirect($this->generateUrl('cabinet_medical_homepage'));
        }
        if ($session->get('role') == 4) {

            $user->setRoles(array('ROLE_PATIENT'));
            $user->setEnabled(0);
            $user->setProfilePicture("383d7f851f4f0b307a88f27d737ea0e5faa01440.png");

            $em = $this->getDoctrine()->getManager();

            $em->persist($user);
            $em->flush();
          
            return $this->redirect($this->generateUrl('patient_new'));
        }
    }

    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:User:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new User entity.
     *
     */
    public function newAction() {
        $entity = new User();
        $form = $this->createForm(new UserType(), $entity);

        return $this->render('CabinetMedicalBundle:User:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new User entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new User();
        $form = $this->createForm(new UserType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user_show', array('id' => $entity->getId())));
        }

        return $this->render('CabinetMedicalBundle:User:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createForm(new UserType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetMedicalBundle:User:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing User entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetMedicalBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new UserType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user'));
        }

        return $this->render('CabinetMedicalBundle:User:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CabinetMedicalBundle:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('user'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

    public function deleteeAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetMedicalBundle:User')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('No entity found for id ' . $id);
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('user'));
    }
  public function roleeditAction($id , $r)
     {
       $userManager = $this->get('fos_user.user_manager');
        
       $users = $userManager->findUsers();

       $user = $userManager->findUserBy(array('id' => $id));
     if ($r==1 )$user->setRoles(array('ROLE_ADMIN', 'ROLE_SECRETAIRE', 'ROLE_MEDECIN', 'ROLE_PATIENT'));
     if ($r==2 )$user->setRoles(array("ROLE_MEDECIN"));
     if ($r==3 )$user->setRoles(array("ROLE_SECRETAIRE"));
       if ($r==4 )$user->setRoles(array("ROLE_PATIENT"));


       
       
        return $this->render('CabinetMedicalBundle:user:index.html.twig',  array(
            'entities'      => $users,
                  ));
        
    } 
}
