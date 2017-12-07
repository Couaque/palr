<?php

/* FrontBundle:Default:listerPerceptions.html.twig */
class __TwigTemplate_75ad46a74cf9ed7a90dc84da63d142f41959264a02550cdb3c683c63713aa341 extends Twig_Template
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
        $__internal_2d5cec161269ada400418598501e77bfb8dc09eb580a154d62f515a8decae15a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5cec161269ada400418598501e77bfb8dc09eb580a154d62f515a8decae15a->enter($__internal_2d5cec161269ada400418598501e77bfb8dc09eb580a154d62f515a8decae15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:listerPerceptions.html.twig"));

        $__internal_b5a214529eeec0ad1d68623bb0ebe8a174a02f0a9d742bc4fcff268a7968ad9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a214529eeec0ad1d68623bb0ebe8a174a02f0a9d742bc4fcff268a7968ad9e->enter($__internal_b5a214529eeec0ad1d68623bb0ebe8a174a02f0a9d742bc4fcff268a7968ad9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:listerPerceptions.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>PALR - Perceptions</title>
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
      <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Accueil</a></li>
      <li class=\"active\"><a href=\"";
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
      <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aide");
        echo "\">Aide</a></li>
    </ul>
  </nav>

  <a class=\"btn btn-success deconnexion\" href=\" ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> <strong>Déconnexion</strong></a>

  <div class\"row\">
    <form class=\"alert alert-info col-md-4 col-centered\">
      <span class=\"glyphicon glyphicon-search\"> </span> Filtrer
      <div class=\"form-group\">
        <label for=\"nom\">Personne :</label>
        <input type=\"text\" class=\"form-control\" id=\"nom\">
        <label for=\"organisation\">Organisation :</label>
        <input type=\"text\" class=\"form-control\" id=\"organisation\">
      </div>
      <div class=\"form-group\">
        <label for=\"Pass\">Pass :</label>
        <select class=\"form-control\" id=\"Pass\">
          <option>PASS A</option>
          <option>PASS B</option>
          <option>PASS C</option>
          <option>PASS D</option>
        </select>
      </div>
      <div class=\"form-group\">
        <label for=\"variure\">Variure :</label>
        <select class=\"form-control\" id=\"variure\">
          <option>VAR A</option>
          <option>VAR B</option>
          <option>VAR C</option>
          <option>VAR D</option>
        </select>
      </div>
    </form>

    <button class=\"btn btn-success\" ><span class=\"glyphicon glyphicon-plus\"></span> Ajouter une perception</button>
  </div>
</body>
</html>

<!-- <div id=\"ajout\" class=\"collapse\">
<div class=\"alert alert-success\">
<div class=\"form-group\">
<label for=\"nomprenom\">Nom & Prénom :</label>
<input type=\"text\" class=\"form-control\" id=\"nomprenom\">
</div>
<div class=\"form-group\">
<label for=\"email\">Email :</label>
<input type=\"email\" class=\"form-control\" id=\"email\">
</div>
<div class=\"radio\">
<label><input type=\"radio\" name=\"collegue\">Collègue interne</label>
</div>
<div class=\"radio\">
<label><input type=\"radio\" name=\"collegue\">Collaborateur externe</label>
</div>
<div class=\"form-group\">
<label for=\"organisation\">Organisation :</label>
<input type=\"text\" class=\"form-control\" id=\"organisation\">
</div>
<div class=\"form-group\">
<label for=\"datedebut\">Date de début :</label>
<input type=\"date\" class=\"form-control\" id=\"datedebut\">
</div>
<div class=\"form-group\">
<label for=\"datefin\">Date de fin (laisser vide si inconnue) :</label>
<input type=\"date\" class=\"form-control\" id=\"datefin\">
</div>
</div>
</div> -->
";
        
        $__internal_2d5cec161269ada400418598501e77bfb8dc09eb580a154d62f515a8decae15a->leave($__internal_2d5cec161269ada400418598501e77bfb8dc09eb580a154d62f515a8decae15a_prof);

        
        $__internal_b5a214529eeec0ad1d68623bb0ebe8a174a02f0a9d742bc4fcff268a7968ad9e->leave($__internal_b5a214529eeec0ad1d68623bb0ebe8a174a02f0a9d742bc4fcff268a7968ad9e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:listerPerceptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  66 => 28,  62 => 27,  58 => 26,  54 => 25,  50 => 24,  25 => 1,);
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
  <title>PALR - Perceptions</title>
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
      <li><a href=\"{{ path('accueil')}}\">Accueil</a></li>
      <li class=\"active\"><a href=\"{{ path('listerPerceptions') }}\">Perceptions</a></li>
      <li><a href=\"{{ path('stock') }}\">Stock</a></li>
      <li><a href=\"{{ path('bd')}}\">Base de données</a></li>
      <li><a href=\"{{ path('aide') }}\">Aide</a></li>
    </ul>
  </nav>

  <a class=\"btn btn-success deconnexion\" href=\" {{ path('login') }}\"><span class=\"glyphicon glyphicon-log-out\"></span> <strong>Déconnexion</strong></a>

  <div class\"row\">
    <form class=\"alert alert-info col-md-4 col-centered\">
      <span class=\"glyphicon glyphicon-search\"> </span> Filtrer
      <div class=\"form-group\">
        <label for=\"nom\">Personne :</label>
        <input type=\"text\" class=\"form-control\" id=\"nom\">
        <label for=\"organisation\">Organisation :</label>
        <input type=\"text\" class=\"form-control\" id=\"organisation\">
      </div>
      <div class=\"form-group\">
        <label for=\"Pass\">Pass :</label>
        <select class=\"form-control\" id=\"Pass\">
          <option>PASS A</option>
          <option>PASS B</option>
          <option>PASS C</option>
          <option>PASS D</option>
        </select>
      </div>
      <div class=\"form-group\">
        <label for=\"variure\">Variure :</label>
        <select class=\"form-control\" id=\"variure\">
          <option>VAR A</option>
          <option>VAR B</option>
          <option>VAR C</option>
          <option>VAR D</option>
        </select>
      </div>
    </form>

    <button class=\"btn btn-success\" ><span class=\"glyphicon glyphicon-plus\"></span> Ajouter une perception</button>
  </div>
</body>
</html>

<!-- <div id=\"ajout\" class=\"collapse\">
<div class=\"alert alert-success\">
<div class=\"form-group\">
<label for=\"nomprenom\">Nom & Prénom :</label>
<input type=\"text\" class=\"form-control\" id=\"nomprenom\">
</div>
<div class=\"form-group\">
<label for=\"email\">Email :</label>
<input type=\"email\" class=\"form-control\" id=\"email\">
</div>
<div class=\"radio\">
<label><input type=\"radio\" name=\"collegue\">Collègue interne</label>
</div>
<div class=\"radio\">
<label><input type=\"radio\" name=\"collegue\">Collaborateur externe</label>
</div>
<div class=\"form-group\">
<label for=\"organisation\">Organisation :</label>
<input type=\"text\" class=\"form-control\" id=\"organisation\">
</div>
<div class=\"form-group\">
<label for=\"datedebut\">Date de début :</label>
<input type=\"date\" class=\"form-control\" id=\"datedebut\">
</div>
<div class=\"form-group\">
<label for=\"datefin\">Date de fin (laisser vide si inconnue) :</label>
<input type=\"date\" class=\"form-control\" id=\"datefin\">
</div>
</div>
</div> -->
", "FrontBundle:Default:listerPerceptions.html.twig", "/home/louguar/Documents/PWS3/TPSymfony/palr/src/FrontBundle/Resources/views/Default/listerPerceptions.html.twig");
    }
}
