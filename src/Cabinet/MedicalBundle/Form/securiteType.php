<?php

namespace Cabinet\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class securiteType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('type', 'choice', array(
                    'choices' => array('medecin famille' => 'type1', 'type2' => 'type2'),
                    'required' => false,
                    'attr' => array('class' => 'form-control')
                ))
                ->add('datedebut', 'date', array('label' => 'Date de debut'))
                ->add('datefin', 'date', array('label' => 'Date de fin'))
                ->add('pat', null, array('label' => 'Patient', 'attr' => array('class' => 'form-control')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\MedicalBundle\Entity\securite'
        ));
    }

    public function getName() {
        return 'cabinet_medicalbundle_securitetype';
    }

}
