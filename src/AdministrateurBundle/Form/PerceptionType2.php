<?php

namespace AdministrateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PerceptionType2 extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('percepteur', EntityType::class, array(
            'class' => 'AdministrateurBundle:Percepteur',
        'required'=>true,
        'multiple'=>false,))
        ->add('typePerception', ChoiceType::class, 
            array('label' => 'Type de perception :' ,'choices'=> array(
            'Permanente'=>'Permanente',
            'Temporaire'=>'Temporaire'),
        'expanded'=> true))
        ->add('dateDebut', DateType::class, array('label' => 'Date de début : ', 'format'=>'dd/MM/yyyy'))
        ->add('dateFin', DateType::class, array('label' => 'Date de fin : ', 'format'=>'dd/MM/yyyy'))
         ->add('variure', EntityType::class, array(
            'class' => 'AdministrateurBundle:Variure',
            'choice_label' => 'nomVariure',
            'label' => "Veuillez entrez l'une des variures trouvée par vos filtres : ",))
        ->add('passPartiel1', EntityType::class, array(
            'class' => 'AdministrateurBundle:PassPartiel1',
            'choice_label' => 'nomPass1',
            'label' => 'Pass 1 correspondant :',))
            //'empty_data' => "Pass" 
        ->add('passPartiel2', EntityType::class, array(
            'class' => 'AdministrateurBundle:PassPartiel2',
            'choice_label' => 'nomPass2',
            'label' => 'Pass 2 correspondant :',))
        ->add('passPartiel3', EntityType::class, array(
            'class' => 'AdministrateurBundle:PassPartiel3',
            'choice_label' => 'nomPass3',
            'label' => 'Pass 3 correspondant :'))
        ->add('choixPerception', ChoiceType::class, 
            array('label' => 'La personne va percevoir :' ,'choices'=> array(
            'Une clé'=>'Clé',
            'Un Pass'=>'Pass'),
        'expanded'=> true))
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
