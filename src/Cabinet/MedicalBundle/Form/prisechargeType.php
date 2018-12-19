<?php

namespace Cabinet\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class prisechargeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('titre', 'text', array('attr' => array('class' => 'form-control')))
            ->add('dateprise','date')
                 ->add('nom', 'text', array('attr' => array('class' => 'form-control')))
            ->add('prenom', 'text', array( 'label' => 'Prénom','attr' => array('class' => 'form-control')))
            
            ->add('datenaiss', 'date',array( 'label' => 'Date de naissance'))
            ->add('pat', null, array( 'label' => 'Patient','attr' => array('class' => 'form-control')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\MedicalBundle\Entity\prisecharge'
        ));
    }

    public function getName()
    {
        return 'cabinet_medicalbundle_prisechargetype';
    }
}
