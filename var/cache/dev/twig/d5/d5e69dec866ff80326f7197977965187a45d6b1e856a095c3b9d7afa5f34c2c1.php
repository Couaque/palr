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
        $__internal_0b5d4e066115736310328a5e98c1ef1b9236535f4a4db1673056d36ec85c194f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5d4e066115736310328a5e98c1ef1b9236535f4a4db1673056d36ec85c194f->enter($__internal_0b5d4e066115736310328a5e98c1ef1b9236535f4a4db1673056d36ec85c194f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:login.html.twig"));

        $__internal_bcc22e89fbc2d57ac399860ac8d26325f0831fcdba836921e436e2fcbee1769c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc22e89fbc2d57ac399860ac8d26325f0831fcdba836921e436e2fcbee1769c->enter($__internal_bcc22e89fbc2d57ac399860ac8d26325f0831fcdba836921e436e2fcbee1769c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>PALR - Accueil</title>
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

        <!-- jQuery library -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

        <!-- Latest compiled JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link href=\"css/lister.css\" rel=\"stylesheet\">
        <link href=\"css/login.css\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
      <nav>
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#\">Accueil</a></li>
        </ul>
      </nav>
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
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listerPerceptions");
        echo "\"><span class=\"glyphicon glyphicon-chevron-right\"></span> Connexion</a>

          </form>
        </div>
      </div>

    </body>
</html>
";
        
        $__internal_0b5d4e066115736310328a5e98c1ef1b9236535f4a4db1673056d36ec85c194f->leave($__internal_0b5d4e066115736310328a5e98c1ef1b9236535f4a4db1673056d36ec85c194f_prof);

        
        $__internal_bcc22e89fbc2d57ac399860ac8d26325f0831fcdba836921e436e2fcbee1769c->leave($__internal_bcc22e89fbc2d57ac399860ac8d26325f0831fcdba836921e436e2fcbee1769c_prof);

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
        return array (  68 => 39,  43 => 17,  25 => 1,);
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
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
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
          <li class=\"active\"><a href=\"#\">Accueil</a></li>
        </ul>
      </nav>
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

          <a class=\"btn btn-success\" href=\"{{ path('listerPerceptions') }}\"><span class=\"glyphicon glyphicon-chevron-right\"></span> Connexion</a>

          </form>
        </div>
      </div>

    </body>
</html>
", "FrontBundle:Default:login.html.twig", "/home/doge/PTS/PALR/src/FrontBundle/Resources/views/Default/login.html.twig");
    }
}
