<?php

/* FrontBundle:Default:accueil.html.twig */
class __TwigTemplate_6a58fe3bd2cefec4e0981659a23f8933b118591bcebbf56778393b396ad31396 extends Twig_Template
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
        $__internal_e8dc5cc6155328d05978fa94ebdbf0cdf7f212efd137d3c6e852b7b57c038f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8dc5cc6155328d05978fa94ebdbf0cdf7f212efd137d3c6e852b7b57c038f98->enter($__internal_e8dc5cc6155328d05978fa94ebdbf0cdf7f212efd137d3c6e852b7b57c038f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        $__internal_82fcb0ccf8823b3b00a44af09edeea8c730a8f5149f04367b3bcebb3b918283f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82fcb0ccf8823b3b00a44af09edeea8c730a8f5149f04367b3bcebb3b918283f->enter($__internal_82fcb0ccf8823b3b00a44af09edeea8c730a8f5149f04367b3bcebb3b918283f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:accueil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>PALR - Accueil</title>
  <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"css/bootstrap.css\" rel=\"stylesheet\">
  <!-- Latest compiled and minified CSS -->
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

  <!-- jQuery library -->
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

  <!-- Latest compiled JavaScript -->
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  <link href=\"css/lister.css\" rel=\"stylesheet\">
</head>


<body>
  <nav>
    <ul class=\"nav1 nav nav-tabs\">
      <li class=\"active\"><a href=\"#\">Accueil</a></li>
      <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listerPerceptions");
        echo "\">Perceptions</a></li>
      <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock");
        echo "\">Stock</a></li>
      <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd");
        echo "\">Base de données</a></li>
      <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aide");
        echo "\">Aide</a></li>
    </ul>
  </nav>
  <div class=\"form_array_container\">
    <div class=\"alert-container\">
      <div class=\"alert alert-warning\">
        <strong>Michel Dupont</strong> doit rendre la clé <strong>PG302GP56</strong> le <strong>20/12/2017</strong>.
      </div>
      <div class=\"alert alert-warning\">
        <strong>Camille Durand</strong> doit rendre la clé <strong>PG389B23</strong> le <strong>21/12/2017</strong>.
      </div>
      <div class=\"alert alert-danger\">
        <strong>Jean Delion</strong> n'a pas rendu la clé <strong>PG389B23</strong> qu'il devait rendre le <strong>10/12/2017</strong>.
      </div>
    </div>
  </div>
</div>
<a class=\"btn btn-success deconnexion\" href=\" ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</a>
</body>
</html>
";
        
        $__internal_e8dc5cc6155328d05978fa94ebdbf0cdf7f212efd137d3c6e852b7b57c038f98->leave($__internal_e8dc5cc6155328d05978fa94ebdbf0cdf7f212efd137d3c6e852b7b57c038f98_prof);

        
        $__internal_82fcb0ccf8823b3b00a44af09edeea8c730a8f5149f04367b3bcebb3b918283f->leave($__internal_82fcb0ccf8823b3b00a44af09edeea8c730a8f5149f04367b3bcebb3b918283f_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 44,  62 => 27,  58 => 26,  54 => 25,  50 => 24,  25 => 1,);
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
  <meta charset=\"utf-8\">
  <title>PALR - Accueil</title>
  <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"css/bootstrap.css\" rel=\"stylesheet\">
  <!-- Latest compiled and minified CSS -->
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

  <!-- jQuery library -->
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

  <!-- Latest compiled JavaScript -->
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  <link href=\"css/lister.css\" rel=\"stylesheet\">
</head>


<body>
  <nav>
    <ul class=\"nav1 nav nav-tabs\">
      <li class=\"active\"><a href=\"#\">Accueil</a></li>
      <li><a href=\"{{ path('listerPerceptions') }}\">Perceptions</a></li>
      <li><a href=\"{{ path('stock') }}\">Stock</a></li>
      <li><a href=\"{{ path('bd')}}\">Base de données</a></li>
      <li><a href=\"{{ path('aide') }}\">Aide</a></li>
    </ul>
  </nav>
  <div class=\"form_array_container\">
    <div class=\"alert-container\">
      <div class=\"alert alert-warning\">
        <strong>Michel Dupont</strong> doit rendre la clé <strong>PG302GP56</strong> le <strong>20/12/2017</strong>.
      </div>
      <div class=\"alert alert-warning\">
        <strong>Camille Durand</strong> doit rendre la clé <strong>PG389B23</strong> le <strong>21/12/2017</strong>.
      </div>
      <div class=\"alert alert-danger\">
        <strong>Jean Delion</strong> n'a pas rendu la clé <strong>PG389B23</strong> qu'il devait rendre le <strong>10/12/2017</strong>.
      </div>
    </div>
  </div>
</div>
<a class=\"btn btn-success deconnexion\" href=\" {{ path('login') }}\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</a>
</body>
</html>
", "FrontBundle:Default:accueil.html.twig", "/home/doge/PTS/PALR/src/FrontBundle/Resources/views/Default/accueil.html.twig");
    }
}
