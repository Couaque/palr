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
        $__internal_f467fffb018bc409f3eb21ce7f0f55e777f089eefc251a8ef2462ad7f35ab039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f467fffb018bc409f3eb21ce7f0f55e777f089eefc251a8ef2462ad7f35ab039->enter($__internal_f467fffb018bc409f3eb21ce7f0f55e777f089eefc251a8ef2462ad7f35ab039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:aide.html.twig"));

        $__internal_19db34b4bc552664d53eb886461ae85adc36e02f7b7228b3512d90d4616ef53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19db34b4bc552664d53eb886461ae85adc36e02f7b7228b3512d90d4616ef53d->enter($__internal_19db34b4bc552664d53eb886461ae85adc36e02f7b7228b3512d90d4616ef53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:aide.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <title>PALR - Aide</title>

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
      <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Accueil</a></li>
      <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listerPerceptions");
        echo "\">Perceptions</a></li>
      <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock");
        echo "\">Stock</a></li>
      <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd");
        echo "\">Base de données</a></li>
      <li class=\"active\"><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aide");
        echo "\">Aide</a></li>
    </ul>
  </nav>
  <div class=\"aide_container\">
    <p class=\"login\">Bienvenue dans la section d'aide.</p>
  </div>

  <a class=\"btn btn-success deconnexion\" href=\" ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</a>
</body>
";
        
        $__internal_f467fffb018bc409f3eb21ce7f0f55e777f089eefc251a8ef2462ad7f35ab039->leave($__internal_f467fffb018bc409f3eb21ce7f0f55e777f089eefc251a8ef2462ad7f35ab039_prof);

        
        $__internal_19db34b4bc552664d53eb886461ae85adc36e02f7b7228b3512d90d4616ef53d->leave($__internal_19db34b4bc552664d53eb886461ae85adc36e02f7b7228b3512d90d4616ef53d_prof);

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
        return array (  79 => 35,  69 => 28,  65 => 27,  61 => 26,  57 => 25,  53 => 24,  44 => 18,  25 => 1,);
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
  <title>PALR - Aide</title>

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
      <li><a href=\"{{ path('accueil')}}\">Accueil</a></li>
      <li><a href=\"{{ path('listerPerceptions') }}\">Perceptions</a></li>
      <li><a href=\"{{ path('stock') }}\">Stock</a></li>
      <li><a href=\"{{ path('bd')}}\">Base de données</a></li>
      <li class=\"active\"><a href=\"{{ path('aide') }}\">Aide</a></li>
    </ul>
  </nav>
  <div class=\"aide_container\">
    <p class=\"login\">Bienvenue dans la section d'aide.</p>
  </div>

  <a class=\"btn btn-success deconnexion\" href=\" {{ path('login') }}\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</a>
</body>
", "FrontBundle:Default:aide.html.twig", "/home/louguar/Documents/PWS3/TPSymfony/palr/src/FrontBundle/Resources/views/Default/aide.html.twig");
    }
}
