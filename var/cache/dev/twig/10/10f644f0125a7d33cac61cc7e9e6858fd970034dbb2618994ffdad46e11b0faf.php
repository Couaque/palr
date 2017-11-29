<?php

/* FrontBundle:Default:bd.html.twig */
class __TwigTemplate_e4a6b5139a1cd8baaea55cb4f903bb8cec80c7857f15a3449495ebfa08ff8ac5 extends Twig_Template
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
        $__internal_b9fd2693b85ee40178a2ad4b13f938c2a54a7f205114c64f88b138b262cd68d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9fd2693b85ee40178a2ad4b13f938c2a54a7f205114c64f88b138b262cd68d8->enter($__internal_b9fd2693b85ee40178a2ad4b13f938c2a54a7f205114c64f88b138b262cd68d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:bd.html.twig"));

        $__internal_b8850b2a9247979b382d141f34860818ea3dd3cb0a6c297c1cb402e34fb50f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8850b2a9247979b382d141f34860818ea3dd3cb0a6c297c1cb402e34fb50f21->enter($__internal_b8850b2a9247979b382d141f34860818ea3dd3cb0a6c297c1cb402e34fb50f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:bd.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <title>PALR - Base de données</title>

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
    <ul class=\"nav1 nav nav-tabs\">
      <li><a href=\"#\">Accueil</a></li>
      <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listerPerceptions");
        echo "\">Perceptions</a></li>
      <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock");
        echo "\">Stock</a></li>
      <li class=\"active\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd");
        echo "\">Base de données</a></li>
      <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aide");
        echo "\">Aide</a></li>
    </ul>
  </nav>
  <div class=\"aide_container\">
    <p class=\"login\">Bienvenue dans la section base de données.</p>
  </div>

  <a class=\"btn btn-success deconnexion\" href=\" ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</a>
</body>
";
        
        $__internal_b9fd2693b85ee40178a2ad4b13f938c2a54a7f205114c64f88b138b262cd68d8->leave($__internal_b9fd2693b85ee40178a2ad4b13f938c2a54a7f205114c64f88b138b262cd68d8_prof);

        
        $__internal_b8850b2a9247979b382d141f34860818ea3dd3cb0a6c297c1cb402e34fb50f21->leave($__internal_b8850b2a9247979b382d141f34860818ea3dd3cb0a6c297c1cb402e34fb50f21_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:bd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 35,  66 => 28,  62 => 27,  58 => 26,  54 => 25,  44 => 18,  25 => 1,);
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
  <title>PALR - Base de données</title>

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
    <ul class=\"nav1 nav nav-tabs\">
      <li><a href=\"#\">Accueil</a></li>
      <li><a href=\"{{ path('listerPerceptions') }}\">Perceptions</a></li>
      <li><a href=\"{{ path('stock') }}\">Stock</a></li>
      <li class=\"active\"><a href=\"{{ path('bd')}}\">Base de données</a></li>
      <li><a href=\"{{ path('aide') }}\">Aide</a></li>
    </ul>
  </nav>
  <div class=\"aide_container\">
    <p class=\"login\">Bienvenue dans la section base de données.</p>
  </div>

  <a class=\"btn btn-success deconnexion\" href=\" {{ path('login') }}\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</a>
</body>
", "FrontBundle:Default:bd.html.twig", "/home/ironweb/PTS/palr/src/FrontBundle/Resources/views/Default/bd.html.twig");
    }
}
