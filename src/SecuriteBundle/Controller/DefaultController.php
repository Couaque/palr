<?php

namespace SecuriteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SecuriteBundle\Entity\Utilisateur;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

  /**
  * La fonction permettant d'afficher le formulaire de connexion. Elle est également override par le composant de sécurité de Symfony
  * au moment de vérifier les identifiants envoyés.
   * @Route("/login", name="login")
   * @param Request $request
   * @param AuthenticationUtils $authUtils
   * @return \Symfony\Component\HttpFoundation\Response
   */
public function loginAction(Request $request)
{
  $authUtils = $this->get('security.authentication_utils');
  // get the login error if there is one
    $error = $authUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authUtils->getLastUsername();

    return $this->render('SecuriteBundle:Default:login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
    ));
}

  /**
   * Fonction permettant de se déconnecter du site.
   * Créé par Téo Haÿs.
   * @Route("/logout", name="logout")
   * @param Request $request
   * @param AuthenticationUtils $authUtils
   * @return \Symfony\Component\HttpFoundation\RedirectResponse
   */
public function logoutAction(Request $request, AuthenticationUtils $authUtils)
{
  // get the login error if there is one
  $error = $authUtils->getLastAuthenticationError();

  // last username entered by the user
  $lastUsername = $authUtils->getLastUsername();

  return $this->redirectToRoute('login');
}

/**
 * Fonction permettant de se déconnecter du site.
 * Créé par Téo Haÿs.
 * @Route("/login_check", name="login_check")
 * @param Request $request
 * @param AuthenticationUtils $authUtils
 * @return \Symfony\Component\HttpFoundation\RedirectResponse
 */
public function loginCheckAction(Request $request, AuthenticationUtils $authUtils)
{

}
}
