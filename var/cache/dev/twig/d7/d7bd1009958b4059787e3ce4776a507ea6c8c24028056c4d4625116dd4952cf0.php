<?php

/* FrontBundle:Default:stock.html.twig */
class __TwigTemplate_be71d4f6ca8bc04b8da4a16b88b4923ce340b62cd5661a3190ea8fa1aa6cad4e extends Twig_Template
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
        $__internal_5f84fb1d28d87488ee804bc4903cb59d90fc6c3cdfbcde54767d61e092b1d1a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f84fb1d28d87488ee804bc4903cb59d90fc6c3cdfbcde54767d61e092b1d1a4->enter($__internal_5f84fb1d28d87488ee804bc4903cb59d90fc6c3cdfbcde54767d61e092b1d1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:stock.html.twig"));

        $__internal_811456ffab2fdcdc510394432ed98ceb33c24686ccd57c2738c2399d744d5f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811456ffab2fdcdc510394432ed98ceb33c24686ccd57c2738c2399d744d5f3c->enter($__internal_811456ffab2fdcdc510394432ed98ceb33c24686ccd57c2738c2399d744d5f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:stock.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <title>PALR - Stock</title>

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
      <li class=\"active\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock");
        echo "\">Stock</a></li>
      <li><a href=\"";
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
    <p class=\"login\">Bienvenue dans la section gestion de stock.</p>
  </div>
  <div class=\"filtre-container\">
    <form class=\"alert alert-info\">

  </form>
  </div>

  <a class=\"btn btn-success deconnexion\" href=\" ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</a>
</body>
";
        
        $__internal_5f84fb1d28d87488ee804bc4903cb59d90fc6c3cdfbcde54767d61e092b1d1a4->leave($__internal_5f84fb1d28d87488ee804bc4903cb59d90fc6c3cdfbcde54767d61e092b1d1a4_prof);

        
        $__internal_811456ffab2fdcdc510394432ed98ceb33c24686ccd57c2738c2399d744d5f3c->leave($__internal_811456ffab2fdcdc510394432ed98ceb33c24686ccd57c2738c2399d744d5f3c_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 40,  66 => 28,  62 => 27,  58 => 26,  54 => 25,  44 => 18,  25 => 1,);
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
  <title>PALR - Stock</title>

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
      <li class=\"active\"><a href=\"{{ path('stock') }}\">Stock</a></li>
      <li><a href=\"{{ path('bd')}}\">Base de données</a></li>
      <li><a href=\"{{ path('aide') }}\">Aide</a></li>
    </ul>
  </nav>
  <div class=\"aide_container\">
    <p class=\"login\">Bienvenue dans la section gestion de stock.</p>
  </div>
  <div class=\"filtre-container\">
    <form class=\"alert alert-info\">

  </form>
  </div>

  <a class=\"btn btn-success deconnexion\" href=\" {{ path('login') }}\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</a>
</body>
", "FrontBundle:Default:stock.html.twig", "/home/ironweb/PTS/palr/src/FrontBundle/Resources/views/Default/stock.html.twig");
    }
}
