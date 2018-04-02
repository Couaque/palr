<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
class CreerUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('email', EmailType::class, array('label_attr' => array('class' => 'active-custom')))
        ->add('username', TextType::class, array('label' => 'Nom D\'Utilisateur :'))
        ->add('password', PasswordType::class, array('label' => 'Mot de passe :'))
        ->add('roles', ChoiceType::class, array(
            'choices'  => array(
            'Administrateur' => 'ROLE_SUPER_ADMIN',
            'Utilisateur' => 'ROLE_USER'), 'multiple' => true, 'expanded' => true))
        ->add('save', SubmitType::class, array('label' => 'Créer un utilisateur', 'attr' => array('class' => 'btn btn-primary')));
        $builder->remove('plainPassword');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}