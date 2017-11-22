<?php

/* FrontBundle:Default:aide.html.twig */
class __TwigTemplate_75968d479c5e1c3712e097a2cef2f065895dc56ea036959ecae9a53fcf55270f extends Twig_Template
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
        $__internal_e347b9bbc9bf557818f858e2671065738cafbe8cf778a92f6f13a652eb87f11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e347b9bbc9bf557818f858e2671065738cafbe8cf778a92f6f13a652eb87f11e->enter($__internal_e347b9bbc9bf557818f858e2671065738cafbe8cf778a92f6f13a652eb87f11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:aide.html.twig"));

        $__internal_18e7a325b874b3ec96a75a83cfad33f865fb5e532a83891e9a41e4e5744c24b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e7a325b874b3ec96a75a83cfad33f865fb5e532a83891e9a41e4e5744c24b8->enter($__internal_18e7a325b874b3ec96a75a83cfad33f865fb5e532a83891e9a41e4e5744c24b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:aide.html.twig"));

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
      <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Déconnexion</a></li>
      <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listerPerceptions");
        echo "\">Perceptions</a></li>
      <li><a href=\"#\">Clés</a></li>
      <li><a href=\"#\">Cylindres</a></li>
      <li><a href=\"#\">Base de données</a></li>
      <li class=\"active\"><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aide");
        echo "\">Aide</a></li>
    </ul>
  </nav>
  <div class=\"aide_container\">
    <p class=\"login\">Bienvenue ! Veuillez vous connecter.</p>
  </div>
</body>
";
        
        $__internal_e347b9bbc9bf557818f858e2671065738cafbe8cf778a92f6f13a652eb87f11e->leave($__internal_e347b9bbc9bf557818f858e2671065738cafbe8cf778a92f6f13a652eb87f11e_prof);

        
        $__internal_18e7a325b874b3ec96a75a83cfad33f865fb5e532a83891e9a41e4e5744c24b8->leave($__internal_18e7a325b874b3ec96a75a83cfad33f865fb5e532a83891e9a41e4e5744c24b8_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:aide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 29,  57 => 25,  53 => 24,  44 => 18,  25 => 1,);
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
      <li><a href=\"{{ path('login') }}\">Déconnexion</a></li>
      <li><a href=\"{{ path('listerPerceptions') }}\">Perceptions</a></li>
      <li><a href=\"#\">Clés</a></li>
      <li><a href=\"#\">Cylindres</a></li>
      <li><a href=\"#\">Base de données</a></li>
      <li class=\"active\"><a href=\"{{ path('aide') }}\">Aide</a></li>
    </ul>
  </nav>
  <div class=\"aide_container\">
    <p class=\"login\">Bienvenue ! Veuillez vous connecter.</p>
  </div>
</body>
", "FrontBundle:Default:aide.html.twig", "/home/doge/PTS/PALR/src/FrontBundle/Resources/views/Default/aide.html.twig");
    }
}
