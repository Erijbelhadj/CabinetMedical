<?php

namespace Cabinet\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class contactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nom', 'text', array('label' => 'Nom','attr' => array('class' => 'form-control')))
           ->add('mail', 'text', array('label' => 'Email','attr' => array('class' => 'form-control')))
                ->add('tel', 'text', array('label' => 'Téléphone','attr' => array('class' => 'form-control')))
         ->add('msg', 'textarea', array('label' => 'Message','attr' => array('class' => 'ckeditor')))
              
           
            
            //->add('date','date', array('label' => 'Date'))
            //->add('user3')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\MedicalBundle\Entity\contact'
        ));
    }

    public function getName()
    {
        return 'cabinet_medicalbundle_contacttype';
    }
}
