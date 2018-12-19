<?php

namespace Cabinet\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class rdvpatientType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titre', 'text', array('attr' => array('class' => 'form-control')))
                ->add('date')
                //->add('num', 'integer', array('attr' => array('class' => 'form-control')))
                ->add('med')
                //->add('patient')
                ->add('cabinet')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\MedicalBundle\Entity\rdv'
        ));
    }

    public function getName() {
        return 'cabinet_medicalbundle_rdvtype';
    }

}
