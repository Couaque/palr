<?php

/* FrontBundle:Default:login.html.twig */
class __TwigTemplate_a73293a53a5e0bc527bc6b2ee02c0c06dd15339ac9859ca2766f530b880f89b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfa75cb0ee6dd33165464d1e303bde5003a8be734affedba41aa96849e3a95b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa75cb0ee6dd33165464d1e303bde5003a8be734affedba41aa96849e3a95b5->enter($__internal_dfa75cb0ee6dd33165464d1e303bde5003a8be734affedba41aa96849e3a95b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:login.html.twig"));

        $__internal_5910cd684d96dd8abf7eb675a7ef1ad501c7087e79c810a90f1449e4c16a4f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5910cd684d96dd8abf7eb675a7ef1ad501c7087e79c810a90f1449e4c16a4f00->enter($__internal_5910cd684d96dd8abf7eb675a7ef1ad501c7087e79c810a90f1449e4c16a4f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <title>PALR - Accueil</title>

  <link href=\"css/montserrat_police\" rel=\"stylesheet\">
  <!-- Latest compiled and minified CSS -->
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

  <!-- jQuery library -->
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

  <!-- Latest compiled JavaScript -->
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  <link href=\"css/lister.css\" rel=\"stylesheet\">
  <link href=\"css/login.css\" rel=\"stylesheet\">
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body>
  <nav>
    <ul class=\"nav nav-tabs\">
      <li class=\"active\"><a href=\"#\">Connexion</a></li>
    </ul>
  </nav>
  <img src=\"img/icone_bleu.png\" alt=\"Logo\" height=\"128\" width=\"128\">
  <p class=\"login\">Bienvenue ! Veuillez vous connecter.</p>
  <div class=\"panel panel-default panel-login\">
    <div class=\"panel-body\">
      <form>
        <div class=\"form-group\">
          <label for=\"login\">Identifiant :</label>
          <input type=\"text\" class=\"form-control\" id=\"login\">
        </div>

        <div class=\"form-group\">
          <label for=\"mdp\">Mot de passe :</label>
          <input type=\"password\" class=\"form-control\" id=\"mdp\">
        </div>

        <a class=\"btn btn-success\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><span class=\"glyphicon glyphicon-chevron-right\"></span> Connexion</a>

      </form>
    </div>
  </div>
</body>
</html>
";
        
        $__internal_dfa75cb0ee6dd33165464d1e303bde5003a8be734affedba41aa96849e3a95b5->leave($__internal_dfa75cb0ee6dd33165464d1e303bde5003a8be734affedba41aa96849e3a95b5_prof);

        
        $__internal_5910cd684d96dd8abf7eb675a7ef1ad501c7087e79c810a90f1449e4c16a4f00->leave($__internal_5910cd684d96dd8abf7eb675a7ef1ad501c7087e79c810a90f1449e4c16a4f00_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 42,  44 => 18,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <title>PALR - Accueil</title>

  <link href=\"css/montserrat_police\" rel=\"stylesheet\">
  <!-- Latest compiled and minified CSS -->
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

  <!-- jQuery library -->
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

  <!-- Latest compiled JavaScript -->
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  <link href=\"css/lister.css\" rel=\"stylesheet\">
  <link href=\"css/login.css\" rel=\"stylesheet\">
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>

<body>
  <nav>
    <ul class=\"nav nav-tabs\">
      <li class=\"active\"><a href=\"#\">Connexion</a></li>
    </ul>
  </nav>
  <img src=\"img/icone_bleu.png\" alt=\"Logo\" height=\"128\" width=\"128\">
  <p class=\"login\">Bienvenue ! Veuillez vous connecter.</p>
  <div class=\"panel panel-default panel-login\">
    <div class=\"panel-body\">
      <form>
        <div class=\"form-group\">
          <label for=\"login\">Identifiant :</label>
          <input type=\"text\" class=\"form-control\" id=\"login\">
        </div>

        <div class=\"form-group\">
          <label for=\"mdp\">Mot de passe :</label>
          <input type=\"password\" class=\"form-control\" id=\"mdp\">
        </div>

        <a class=\"btn btn-success\" href=\"{{ path('accueil') }}\"><span class=\"glyphicon glyphicon-chevron-right\"></span> Connexion</a>

      </form>
    </div>
  </div>
</body>
</html>
", "FrontBundle:Default:login.html.twig", "/home/ironweb/PTS/palr/src/FrontBundle/Resources/views/Default/login.html.twig");
    }
}
