<?php

namespace SecuriteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UtilisateurType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
    //->add('user')
    ->add('username', TextType::class, array(
        'label' => 'Nom d\'utilisateur : '
    ))
    ->add('roles', ChoiceType::class, array(
      'choices'  => array(
        'Administrateur' => 'ROLE_ADMIN',
        'Utilisateur' => 'ROLE_USER'), 'multiple' => true, 'expanded' => true))
      ->add('password', PasswordType::class, array(
        'label' => 'Mot de passe'
      ))
      ->add('save', SubmitType::class, array(
        'label' => 'Créer l\'utilisateur',
        'attr' => array('class' => 'btn btn-success')
      ))
      ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SecuriteBundle\Entity\Utilisateur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'securitebundle_utilisateur';
    }


}
