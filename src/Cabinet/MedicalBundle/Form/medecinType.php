<?php

namespace Cabinet\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Cabinet\MedicalBundle\Form\UserType;
use FOS\UserBundle\Form\Type\RegistrationFormType;
class medecinType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('specialite', 'text', array('attr' => array('class' => 'form-control')))
                ->add('about', 'textarea', array('attr' => array('class' => 'ckeditor')))
                ->add('code', 'text', array('attr' => array('class' => 'form-control')))
                   //->add('usm')
               
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\MedicalBundle\Entity\medecin'
        ));
    }

    public function getName() {
        return 'cabinet_medicalbundle_medecintype';
    }

}
