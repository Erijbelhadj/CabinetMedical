<?php

namespace Cabinet\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class cabinetType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom', 'text', array('label' => 'Nom','attr' => array('class' => 'form-control')))
                ->add('adresse', 'text', array('label' => 'Adresse','attr' => array('class' => 'form-control')))
                ->add('email', 'text', array('label' => 'Email','attr' => array('class' => 'form-control')))
                ->add('phone', 'text', array('label' => 'Téléphone','attr' => array('class' => 'form-control')))
                ->add('phonem', 'text', array('label' => 'Mobile','attr' => array('class' => 'form-control')))
                ->add('fax', 'text', array('label' => 'Fax','attr' => array('class' => 'form-control')))
                //->add('user2')select2-choices
               // ->add('securite',null, array('label' => 'Code Sécurité','attr' => array('class' => 'form-control')))
                ->add('medecin',null, array('label' => 'Liste de Médecins','attr' => array('class' => 'form-group')))
                ->add('file','file')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\MedicalBundle\Entity\cabinet'
        ));
    }

    public function getName() {
        return 'cabinet_medicalbundle_cabinettype';
    }

}
