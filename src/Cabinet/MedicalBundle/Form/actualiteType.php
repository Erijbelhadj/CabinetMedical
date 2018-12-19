<?php

namespace Cabinet\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class actualiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', 'text', array( 'label' => 'Titre','attr' => array('class' => 'form-control')))
            ->add('text', 'textarea', array( 'label' => 'Email','attr' => array('class' => 'ckeditor')))
           //->add('date','date', array('label' => 'Date'))
            ->add('file','file')
            //->add('user')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\MedicalBundle\Entity\actualite'
        ));
    }

    public function getName()
    {
        return 'cabinet_medicalbundle_actualitetype';
    }
}
