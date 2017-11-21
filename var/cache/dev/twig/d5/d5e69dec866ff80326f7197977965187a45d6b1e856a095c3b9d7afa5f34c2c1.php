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
        $__internal_52f125550a0fc5128c5c1dcfdd43a0f711f8ec949039713ea1a9bb42cb977cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f125550a0fc5128c5c1dcfdd43a0f711f8ec949039713ea1a9bb42cb977cb1->enter($__internal_52f125550a0fc5128c5c1dcfdd43a0f711f8ec949039713ea1a9bb42cb977cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:login.html.twig"));

        $__internal_9f1b96635378df5a75d997d10f685747e041afeb6e3083a81d809fa9772077b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1b96635378df5a75d997d10f685747e041afeb6e3083a81d809fa9772077b6->enter($__internal_9f1b96635378df5a75d997d10f685747e041afeb6e3083a81d809fa9772077b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:login.html.twig"));

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

          <a class=\"btn btn-success\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listerPerceptions");
        echo "\">Connexion</a>

          </form>
        </div>
      </div>

    </body>
</html>
";
        
        $__internal_52f125550a0fc5128c5c1dcfdd43a0f711f8ec949039713ea1a9bb42cb977cb1->leave($__internal_52f125550a0fc5128c5c1dcfdd43a0f711f8ec949039713ea1a9bb42cb977cb1_prof);

        
        $__internal_9f1b96635378df5a75d997d10f685747e041afeb6e3083a81d809fa9772077b6->leave($__internal_9f1b96635378df5a75d997d10f685747e041afeb6e3083a81d809fa9772077b6_prof);

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
        return array (  57 => 28,  34 => 8,  25 => 1,);
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

          <a class=\"btn btn-success\" href=\"{{ path('listerPerceptions') }}\">Connexion</a>

          </form>
        </div>
      </div>

    </body>
</html>
", "FrontBundle:Default:login.html.twig", "/home/doge/PTS/PALR/src/FrontBundle/Resources/views/Default/login.html.twig");
    }
}
