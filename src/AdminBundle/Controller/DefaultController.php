<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SecuriteBundle\Form\UtilisateurType;
use SecuriteBundle\Entity\Utilisateur;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="panel")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:panel.html.twig');
    }

    /**
     * @Route("/creerUtilisateur", name="creerUtilisateur")
     */
    public function creerUtilisateurAction(Request $request)
    {
      $form = $this->createFormBuilder(null)
      ->add('username', TextType::class, array('label_attr' => array('class' => 'active-custom')))
      ->add('password', TextType::class, array('label_attr' => array('class' => 'active-custom')))
      ->add('email', EmailType::class, array('label_attr' => array('class' => 'active-custom')))
      ->add('save', SubmitType::class, array('label' => 'Créer le compte', 'attr' => array('class' => 'btn')))
      ->add('admin', SubmitType::class, array('label' => 'L\'utilisateur sera admin', 'attr' => array('class' => 'btn')))
      ->getForm();

      $form->handleRequest($request);
      //Traitement du formulaire si il est valide
      if($form->isSubmitted() && $form->isValid()){
        $userManager = $container->get('fos_user.user_manager');
        $user = $userManager->createUser();
        $user->setUsername($form->getData()['username']);
        $user->setEmail($form->getData()['email']);
        $user->setPassword($form->getData()['password']);
        $userManager->updateUser($user);

      }else{
        //Si le formulaire n'est pas valide, on affiche les erreurs et on recommence la saisie.
        if ($form->isSubmitted() && !($form->isValid())) {
          $validator = $this->get('validator');
          $errors = $validator->validate($membre);
          //Récupération des erreurs, et conversion en chaînes de caractères
          $errorsString = (string) $errors;
          return $this->render('AdminBundle:Default:creerUtilisateur.html.twig', array(
            'form' => $form->createView(),
            'errors' => $errors
          ));
        }
    }
    return $this->render('AdminBundle:Default:creerUtilisateur.html.twig', array(
      'form' => $form->createView()
    ));
  }

    /**
     * @Route("/desactiverUtilisateur", name="desactiverUtilisateur")
     */
    public function desactiverUtilisateurAction()
    {
        return $this->render('AdminBundle:Default:desactiverUtilisateur.html.twig');
    }
}
