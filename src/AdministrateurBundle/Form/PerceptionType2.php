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
            'multiple'=>false,
            'attr' => array('class' => 'js-example-basic-single-percep', 'required'=> 'required'),
            'choice_attr' => function($percepteur, $index, $value){
            return array(
                'data-id' => $percepteur->getId(),
            );})
        )
        ->add('typePerception', ChoiceType::class, 
            array('label' => 'Type de perception :' ,'choices'=> array(
                'Permanente'=>'Permanente',
                'Temporaire'=>'Temporaire'),
            'expanded'=> true))
        ->add('dateDebut', DateType::class, array('label' => 'Date de début : ', 'format'=>'dd/MM/yyyy', 'years'=>range(date('Y'),date('Y')+10)))
        ->add('dateFin', DateType::class, array('label' => 'Date de fin : ', 'format'=>'dd/MM/yyyy', 'years'=>range(date('Y'),date('Y')+10)))
        ->add('variure', EntityType::class, array(
            'class' => 'AdministrateurBundle:Variure',
            'choice_label' => 'nomVariure',
            'label' => "Veuillez entrez l'une des clés trouvée par vos filtres : ",
            'attr' => array('class' => 'js-example-basic-single-variure'),
            'choice_attr' => function($variure, $index, $value){
                if ($variure->getPassPartiel2() != null ){
                    return
                        array(
                            'data-idpp2' => $variure->getPassPartiel2()->getId(),
                            'data-id' => $variure->getId());

                }else if ($variure->getPassPartiel3() != null ){
                    return
                        array(

                        'data-idpp3' => $variure->getPassPartiel3()->getId(),
                        'data-id' => $variure->getId());
                } return array();
            }))
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
        ->add('choixPerception', ChoiceType::class, 
            array('label' => 'La personne va percevoir :' ,'choices'=> array(
            'Une clé'=>'Clé',
            'Un Pass'=>'Pass'),
        'expanded'=> true))
        ->add('save', SubmitType::class, array(
        'label' => 'Valider la Perception',
        'attr' => array('class' => "btn btn-info btn-lg")));


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
