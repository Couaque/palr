<?php

namespace AdministrateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PercepteurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('nomPercepteur', TextType::class, array('label' => 'Nom du percepteur :' ,'label_attr'=> array('class' => 'active-custom')))
            ->add('prenomPercepteur', TextType::class, array('label' => 'Prénom du percepteur :' ))
            ->add('email', TextType::class, array(
                'label' => 'Email (Non obligatoire) :',
                'required' => false))
            ->add('telephone', TextType::class, array(
                'label' => 'Téléphone (Non obligatoire) :',
                'required' => false))
            ->add('typePercepteur', ChoiceType::class,
            array('label' => 'Type de percepteur :' ,'choices'=> array(
            'Employé du port '=>'EmployePort',
            'Collaborateur extérieur'=>'CollabExt',),
        'expanded'=> true,
        'data'=> true))
        ->add('organisation', TextType::class, array('label' => 'Organisation : '))
        ->add('service', EntityType::class, array(
            'class' => 'AdministrateurBundle:ServicePALR',
            'choice_label' => 'nomServicePALR',
            'label' => 'Service du port :'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdministrateurBundle\Entity\Percepteur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'administrateurbundle_percepteur';
    }


}
