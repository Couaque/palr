<?php

namespace AdministrateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PercepteurType2 extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('nomPercepteur', TextType::class, array('label' => 'Nom du percepteur :' ,'label_attr'=> array('class' => 'active-custom')))
        ->add('prenomPercepteur', TextType::class, array('label' => 'Prénom du percepteur :' ))
        ->add('email', EmailType::class, array('label_attr' => array('class' => 'active-custom')))
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
