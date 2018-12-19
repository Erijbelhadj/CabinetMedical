<?php

namespace Cabinet\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class rdvType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titre', 'text', array('label'=>'Titre','attr' => array('class' => 'form-control')))
                ->add('date','date',array('label'=>'Date'))
                ->add('num', 'integer', array('label'=>'Num','attr' => array('class' => 'form-control')))
                //->add('user4')
                ->add('med',null, array('label'=>'Médecin','attr' => array('class' => 'form-control')))
                ->add('patient',null, array('label'=>'Patient','attr' => array('class' => 'form-control')))
                ->add('cabinet',null, array('label'=>'Cabinet','attr' => array('class' => 'form-control')))
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
