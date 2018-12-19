<?php

namespace Cabinet\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class operationmedType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
                 ->add('montant', 'text', array('attr' => array('class' => 'form-control')))
            ->add('date', 'date')
            ->add('pat', null, array( 'label' => 'Patient','attr' => array('class' => 'form-control')))
            ->add('med', null, array( 'label' => 'Medecin','attr' => array('class' => 'form-control')))
                 ->add('cabinet', null, array( 'label' => 'Cabinet','attr' => array('class' => 'form-control')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\MedicalBundle\Entity\operationmed'
        ));
    }

    public function getName()
    {
        return 'cabinet_medicalbundle_operationmedtype';
    }
}
