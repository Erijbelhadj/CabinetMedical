<?php

namespace Cabinet\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class patientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codecnam', 'text', array('attr' => array('class' => 'form-control')))
            ->add('handicape', 'textarea', array('attr' => array('class' => 'ckeditor')))
            ->add('antecedent', 'textarea', array('attr' => array('class' => 'ckeditor')))
            ->add('chirgui', 'textarea', array('attr' => array('class' => 'ckeditor')))
           // ->add('us')    
           ->add('allergie', 'textarea', array('attr' => array('class' => 'ckeditor')))
          
           ->add('traitementencour', 'textarea', array('attr' => array('class' => 'ckeditor')))
           
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\MedicalBundle\Entity\patient'
        ));
    }

    public function getName()
    {
        return 'cabinet_medicalbundle_patienttype';
    }
}
