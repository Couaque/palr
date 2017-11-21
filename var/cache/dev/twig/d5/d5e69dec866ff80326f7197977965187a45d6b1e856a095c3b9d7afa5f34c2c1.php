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
        $__internal_cfd79cd0a8c68e6c12a82b050a8f18b91a1451c718a0d0fb04ff6bd9045e422f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd79cd0a8c68e6c12a82b050a8f18b91a1451c718a0d0fb04ff6bd9045e422f->enter($__internal_cfd79cd0a8c68e6c12a82b050a8f18b91a1451c718a0d0fb04ff6bd9045e422f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:login.html.twig"));

        $__internal_df6149de4856ac5b71e50643f1a5fbed4368adba852a144c87de3f93c8c37239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6149de4856ac5b71e50643f1a5fbed4368adba852a144c87de3f93c8c37239->enter($__internal_df6149de4856ac5b71e50643f1a5fbed4368adba852a144c87de3f93c8c37239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Bienvenue !</title>
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"css/login.css\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"jumbotron2\">
          <h1>Bienvenue sur le logiciel de gestion des perceptions PALR</h1>
          <h3>Dans le futur, il vous permettra de gérer les perceptions de clés au sein du port.</h3>
        </div>
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

          <a href=\"/perceptions\"><button type=\"submit\" class=\"btn btn-primary\">Connexion</button></a>
          </form>
        </div>
      </div>

    </body>
</html>
";
        
        $__internal_cfd79cd0a8c68e6c12a82b050a8f18b91a1451c718a0d0fb04ff6bd9045e422f->leave($__internal_cfd79cd0a8c68e6c12a82b050a8f18b91a1451c718a0d0fb04ff6bd9045e422f_prof);

        
        $__internal_df6149de4856ac5b71e50643f1a5fbed4368adba852a144c87de3f93c8c37239->leave($__internal_df6149de4856ac5b71e50643f1a5fbed4368adba852a144c87de3f93c8c37239_prof);

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
        return array (  34 => 8,  25 => 1,);
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
        <title>Bienvenue !</title>
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"css/login.css\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"jumbotron2\">
          <h1>Bienvenue sur le logiciel de gestion des perceptions PALR</h1>
          <h3>Dans le futur, il vous permettra de gérer les perceptions de clés au sein du port.</h3>
        </div>
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

          <a href=\"/perceptions\"><button type=\"submit\" class=\"btn btn-primary\">Connexion</button></a>
          </form>
        </div>
      </div>

    </body>
</html>
", "FrontBundle:Default:login.html.twig", "/home/doge/PTS/PALR/src/FrontBundle/Resources/views/Default/login.html.twig");
    }
}
