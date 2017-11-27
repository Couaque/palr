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
        $__internal_156e726a05cc68c11f30784f18bfb33c5f610455e759a01f306a72c9fd5268c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156e726a05cc68c11f30784f18bfb33c5f610455e759a01f306a72c9fd5268c6->enter($__internal_156e726a05cc68c11f30784f18bfb33c5f610455e759a01f306a72c9fd5268c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:listerPerceptions.html.twig"));

        $__internal_dcaeb6381d71a87427990da8fadb297d703c0979e50fb0adc614a37cd5ca5c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcaeb6381d71a87427990da8fadb297d703c0979e50fb0adc614a37cd5ca5c4d->enter($__internal_dcaeb6381d71a87427990da8fadb297d703c0979e50fb0adc614a37cd5ca5c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:listerPerceptions.html.twig"));

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
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Accueil</a></li>
      <li class=\"active\"><a href=\"";
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
  <div class=\"content-container\">
    <div class=\"table-container\"></div>
    <div class=\"filtre-container\">
      <div class=\"alert alert-info\">
        <span class=\"glyphicon glyphicon-search\"></span> Filtrer
        <form>
          <form>
            <div class=\"form-group\">
              <label for=\"nomprenom\">Personne :</label>
              <input type=\"text\" class=\"form-control\" id=\"nomprenom\">

              <label for=\"organisation\">Organisation :</label>
              <input type=\"text\" class=\"form-control\" id=\"organisation\">
            </div>
            <label for=\"sel1\">Pass :</label>
            <select class=\"form-control\" id=\"PASS\">
              <option>PASS A</option>
              <option>PASS B</option>
              <option>PASS C</option>
              <option>PASS D</option>
            </select>
            <label for=\"sel1\">Variure :</label>
            <select class=\"form-control inputlg\" id=\"variure\">
              <option>VAR A</option>
              <option>VAR B</option>
              <option>VAR C</option>
              <option>VAR D</option>
            </select>
          </div>
        </div>

        <div class=\"ajout-container\">
          <button class=\"btn btn-success\" data-toggle=\"collapse\" data-target=\"#ajout\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</button>
          <div id=\"ajout\" class=\"collapse\">
            <div class=\"alert alert-success\">
              <form>
                <form>
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
              </div>
            </div>

            <a class=\"btn btn-success deconnexion\" href=\" ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> <strong>Déconnexion</strong></a>
          </body>
          </html>
";
        
        $__internal_156e726a05cc68c11f30784f18bfb33c5f610455e759a01f306a72c9fd5268c6->leave($__internal_156e726a05cc68c11f30784f18bfb33c5f610455e759a01f306a72c9fd5268c6_prof);

        
        $__internal_dcaeb6381d71a87427990da8fadb297d703c0979e50fb0adc614a37cd5ca5c4d->leave($__internal_dcaeb6381d71a87427990da8fadb297d703c0979e50fb0adc614a37cd5ca5c4d_prof);

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
        return array (  138 => 97,  65 => 27,  61 => 26,  57 => 25,  53 => 24,  49 => 23,  25 => 1,);
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
  <div class=\"content-container\">
    <div class=\"table-container\"></div>
    <div class=\"filtre-container\">
      <div class=\"alert alert-info\">
        <span class=\"glyphicon glyphicon-search\"></span> Filtrer
        <form>
          <form>
            <div class=\"form-group\">
              <label for=\"nomprenom\">Personne :</label>
              <input type=\"text\" class=\"form-control\" id=\"nomprenom\">

              <label for=\"organisation\">Organisation :</label>
              <input type=\"text\" class=\"form-control\" id=\"organisation\">
            </div>
            <label for=\"sel1\">Pass :</label>
            <select class=\"form-control\" id=\"PASS\">
              <option>PASS A</option>
              <option>PASS B</option>
              <option>PASS C</option>
              <option>PASS D</option>
            </select>
            <label for=\"sel1\">Variure :</label>
            <select class=\"form-control inputlg\" id=\"variure\">
              <option>VAR A</option>
              <option>VAR B</option>
              <option>VAR C</option>
              <option>VAR D</option>
            </select>
          </div>
        </div>

        <div class=\"ajout-container\">
          <button class=\"btn btn-success\" data-toggle=\"collapse\" data-target=\"#ajout\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</button>
          <div id=\"ajout\" class=\"collapse\">
            <div class=\"alert alert-success\">
              <form>
                <form>
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
              </div>
            </div>

            <a class=\"btn btn-success deconnexion\" href=\" {{ path('login') }}\"><span class=\"glyphicon glyphicon-log-out\"></span> <strong>Déconnexion</strong></a>
          </body>
          </html>
", "FrontBundle:Default:listerPerceptions.html.twig", "/home/doge/PTS/PALR/src/FrontBundle/Resources/views/Default/listerPerceptions.html.twig");
    }
}
