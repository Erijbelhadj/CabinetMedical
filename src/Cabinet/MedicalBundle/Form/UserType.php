<?php

namespace Cabinet\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('username','text',array(
                    'label' => 'Login',
                    'attr' => array('class' => 'form-control')))
                //->add('usernameCanonical')
                ->add('email','text',array(
                    'label' => 'Email',
                    'attr' => array('class' => 'form-control')))
                //->add('emailCanonical')
                //->add('enabled')
                //->add('salt')
//                ->add('plainPassword', 'repeated', array(
//                'type' => 'password',
//                'options' => array('translation_domain' => 'FOSUserBundle'),
//                'first_options' => array('label' => 'password'),
//                'second_options' => array('label' => 'password_confirmation'),
//                'invalid_message' => 'user.password.mismatch',
//                 'attr' => array('class' => 'form-control')
//            ))
                //->add('lastLogin')
                //->add('locked')
//                ->add('expired')
//                ->add('expiresAt')
//                ->add('confirmationToken')
//                ->add('passwordRequestedAt')
//                ->add('roles')
//                ->add('credentialsExpired')
//                ->add('credentialsExpireAt')
                
                
                ->add('nom','text',array(
                    'label' => 'Nom',
                    'attr' => array('class' => 'form-control')))
                ->add('prenom','text',array(
                    'label' => 'Prénom',
                    'attr' => array('class' => 'form-control')))
                ->add('cin','text',array(
                    'label' => 'Cin',
                    'attr' => array('class' => 'form-control')))
                ->add('phone','text',array(
                    'label' => 'Télephone',
                    'attr' => array('class' => 'form-control')))
                ->add('poste','text',array(
                    'label' => 'Poste',
                    'attr' => array('class' => 'form-control')))
                
                ->add('file', 'file')
                  ->add('enabled', 'choice', array(
                      'label' => 'Activation',
                    'choices' => array('0' => 'desactive', '1' => 'active'),
                   
                    'attr' => array('class' => 'form-control')
                ))
               
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\MedicalBundle\Entity\User'
        ));
    }

    public function getName() {
        return 'cabinet_medicalbundle_usertype';
    }

}
