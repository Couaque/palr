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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ModifierPerceptionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('percepteur', TextType::class,array(
            'disabled' => true)
        )
        ->add('typePerception', ChoiceType::class,
            array('label' => 'Type de perception :' ,'choices'=> array(
            'Permanente'=>'Permanente',
            'Temporaire'=>'Temporaire'),
        'expanded'=> true))
            ->add('dateFin', DateType::class, array('label' => 'Date de fin : ', 'widget' => 'single_text', 'years'=>range(date('Y'),date('Y')+10)))
        ->add('choixPerception', ChoiceType::class, array(
                'label' => 'La personne perçoit :' ,'choices'=> array(
                'Une clé'=>'Clé',
                'Un Pass'=>'Pass'),
            'expanded'=> true))
        ->add('motivationDemande', TextareaType::class, array(
              'label' => "Motivation de la demande :"))
        ->add('variure', EntityType::class, array(
            'class' => 'AdministrateurBundle:Variure',
            'choice_label' => 'nomVariure',
            'attr' => array('class' => 'js-example-basic-single-variure'),
            'label' => 'Nom de la clé :',))
        ->add('passPartiel1', EntityType::class, array(
            'class' => 'AdministrateurBundle:PassPartiel1',
            'choice_label' => 'nomPass1',
            'label' => 'Pass 1 correspondant :',
            'attr' => array('class' => 'js-example-basic-single-pp1'),
            'choice_attr' => function($passPartiel1, $index, $value){
            return array(
                'data-id' => $passPartiel1->getId(),
                );
            }))
        ->add('passPartiel2', EntityType::class, array(
                    'class' => 'AdministrateurBundle:PassPartiel2',
                    'choice_label' => 'nomPass2',
                    'label' => 'Pass 2 correspondant :',
                    'attr' => array('class' => 'js-example-basic-single-pp2'),
                    'choice_attr' => function($passPartiel2, $index, $value){
                    return array(
                        'class' => "pass2cacher" . $passPartiel2->getId(),
                        'data-id' => $passPartiel2->getId(),
                        'data-idpartiel' => $passPartiel2->getPassPartiel1()->getId());
            }))
        ->add('passPartiel3', EntityType::class, array(
            'class' => 'AdministrateurBundle:PassPartiel3',
            'choice_label' => 'nomPass3',
            'label' => 'Pass 3 correspondant :',
            'attr' => array('class' => 'js-example-basic-single-pp3'),
            'choice_attr' => function($passPartiel3, $index, $value){
                return array(
                'class' => "pass3cacher" . $passPartiel3->getId(),
                'data-id' => $passPartiel3->getId(),
                'data-idpartiel' => $passPartiel3->getPassPartiel2()->getId());
            }))
        ->add('etatPerception', TextType::class)
        ->add('save', SubmitType::class, array('label' => 'Modifier Perception'
      ));


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
