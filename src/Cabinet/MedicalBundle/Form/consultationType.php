<?php

namespace Cabinet\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class consultationType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', 'text', array('attr' => array('class' => 'form-control')))

                //->add('image')
                ->add('traitement', 'textarea', array('label' => 'Traitements', 'attr' => array('class' => 'ckeditor')))
                ->add('type', 'choice', array('choices' => array('e' => 'Exploration', 'm' => 'Controle', 'f' => 'Visite'), 'attr' => array('class' => 'form-control')))
                ->add('date', 'date', array('label' => 'Date'))
                ->add('conclusion', 'textarea', array('label' => 'Diagnostique', 'attr' => array('class' => 'ckeditor')))
                ->add('cabinetc', null, array('label' => 'Cabinet', 'attr' => array('class' => 'form-control')))
                ->add('medecin', null, array('label' => 'Medecin', 'attr' => array('class' => 'form-control')))
                ->add('patient', null, array('label' => 'Patient', 'attr' => array('class' => 'form-control')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\MedicalBundle\Entity\consultation'
        ));
    }

    public function getName() {
        return 'cabinet_medicalbundle_consultationtype';
    }

}
