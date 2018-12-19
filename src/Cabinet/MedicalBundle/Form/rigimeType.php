<?php

namespace Cabinet\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class rigimeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                 ->add('libelle', 'text', array('attr' => array('class' => 'form-control')))
          
            ->add('pat', null, array( 'label' => 'Patient','attr' => array('class' => 'form-control')))
            ->add('sec', null, array( 'label' => 'Sécurité','attr' => array('class' => 'form-control')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\MedicalBundle\Entity\rigime'
        ));
    }

    public function getName()
    {
        return 'cabinet_medicalbundle_rigimetype';
    }
}
