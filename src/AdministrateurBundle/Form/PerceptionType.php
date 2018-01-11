<?php

namespace AdministrateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PerceptionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('dateDebut')
        ->add('dateFin')
        ->add('typePerception')
        ->add('variure')
        ->add('passPartiel1')
        ->add('passPartiel2')
        ->add('passPartiel3')
        ->add('percepteur', PercepteurType::class)
        ->add('save', SubmitType::class, array('label' => 'Ajouter Perception'));
       
         
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdministrateurBundle\Entity\Perception'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'administrateurbundle_perception';
    }


}
