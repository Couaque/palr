<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SecuriteBundle\Form\UtilisateurType;
use SecuriteBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Form\UserType;
use AdminBundle\Form\CreerUserType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

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
      /*$em=$this->getDoctrine()->getManager();
      $user = new Utilisateur();
      $form = $this->createForm(CreerUserType::class, $user); */
      $userManager = $this->get('fos_user.user_manager');
      $user = $userManager->createUser();
      $form = $this->createForm(CreerUserType::class, $user);
      $form->handleRequest($request);
 
      
      if ($form->isSubmitted() && $form->isValid()) {
        $user->setUsername($form->get('username')->getData());
        $user->setPassword($form->get('password')->getData());
        $user->setRoles($form->get('roles')->getData());
        $user->setEmail($form->get('email')->getData());
        $userManager->updateUser($user);
        /*$UtilisateurInsert = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($UtilisateurInsert);
        $em->flush();*/
        $this->addFlash("success", "Utilisateur créé avec succès"); 
      }
        //Si le formulaire n'est pas valide, on affiche les erreurs et on recommence la saisie.
    
    return $this->render('AdminBundle:Default:creerUtilisateur.html.twig', array(
      'form' => $form->createView()
    ));
  }

    /**
     * @Route("/desactiverUtilisateur", name="desactiverUtilisateur")
     */
    public function desactiverUtilisateurAction()
    {
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        return $this->render('AdminBundle:Default:desactiverUtilisateur.html.twig', array('users' => $users));
    }
   /**
     * @Route("desactiver/{id}", name="desactiver")
     * @Route("/desactiver", defaults={"id"=-1})
     * @param Request $request
     * @param $id
     *
     */
  public function deleteUtilisateurAction(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();
    $utilisateur = $em->getRepository('SecuriteBundle:User')->find($id);
    $this->addFlash("success", "Vous avez bien désactivé l'Utilisateur");
    $em->remove($utilisateur);
    $em->flush();
    $users = $this->getDoctrine()->getManager()->getRepository('SecuriteBundle:User')->findAll();
    return $this->render('AdminBundle:Default:desactiverUtilisateur.html.twig', array('users' => $users));
  }
   /**
     * @Route("editer/{id}", name="editer")
     * @Route("/editer", defaults={"id"=-1})
     * @param Request $request
     * @param $id
     *
     */
  public function editAction(Request $request, $id)
  {
        $em=$this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('SecuriteBundle:User')->find($id);
        $editForm = $this->createForm(UserType::class, $utilisateur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush();
            return $this->redirectToRoute('desactiverUtilisateur');
        }

        return $this->render('AdminBundle:Default:edit.html.twig', array(
            'article' => $id,
            'edit_form' => $editForm->createView(),

        ));
  }
}
