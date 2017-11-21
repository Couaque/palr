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
        $__internal_004ff9494e4de7a5c825eaddb5d759445c29b8a4ee66edfea40318aa00d550cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004ff9494e4de7a5c825eaddb5d759445c29b8a4ee66edfea40318aa00d550cd->enter($__internal_004ff9494e4de7a5c825eaddb5d759445c29b8a4ee66edfea40318aa00d550cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:listerPerceptions.html.twig"));

        $__internal_486acfa23c160641f7a82cf728c60f5a6a050425b117616ac345957a6f54b946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486acfa23c160641f7a82cf728c60f5a6a050425b117616ac345957a6f54b946->enter($__internal_486acfa23c160641f7a82cf728c60f5a6a050425b117616ac345957a6f54b946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:listerPerceptions.html.twig"));

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
    <ul class=\"nav nav-tabs\">
      <li><a href=\"#\">Accueil</a></li>
      <li class=\"active\"><a href=\"#\">Perceptions</a></li>
      <li><a href=\"#\">Stock</a></li>
      <li><a href=\"#\">Base de données</a></li>
    </ul>
  </nav>
  <div class=\"form_array_container\">
    <div class=\"table-container\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Organisation</th>
            <th>Numéro de la clé</th>
            <th>Date de perception</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Haÿs</td>
            <td>Téo</td>
            <td>Achats & Patrimoine</td>
            <td>DHF35G89</td>
            <td>30 Octobre 2017</td
            </tr>
            <tr>
              <td>Souffleux</td>
              <td>Thomas</td>
              <td>Capitainerie</td>
              <td>FJKL89G</td>
              <td>12/08/17</td>
            </tr>
            <tr>
              <td>Charbonneau</td>
              <td>Teddy</td>
              <td>Entreprise X</td>
              <td>YNEN53J</td>
              <td>Il y a 15 jours</td>
            </tr>
            <tr>
              <td>Clémenceau</td>
              <td>Simon</td>
              <td>Service Y</td>
              <td>FJLK532LK</td>
              <td>13/09/2012 3:50:30</td>
            </tr>
            <tr>
              <td>Haÿs</td>
              <td>Téo</td>
              <td>Achats & Patrimoine</td>
              <td>DHF35G89</td>
              <td>30 Octobre 2017</td>
            </tr>
            <tr>
              <td>Souffleux</td>
              <td>Thomas</td>
              <td>Capitainerie</td>
              <td>FJKL89G</td>
              <td>13 Nov. 2017</td>
            </tr>
            <tr>
              <td>Charbonneau</td>
              <td>Teddy</td>
              <td>Entreprise X</td>
              <td>YNEN53J</td>
              <td>12/08/2017</td>
            </tr>
            <tr>
              <td>Clémenceau</td>
              <td>Simon</td>
              <td>Service Y</td>
              <td>FJLK532LK</td>
              <td>13/09/2012 3:50:30</td>
            </tr>
            <tr>
              <td>Haÿs</td>
              <td>Téo</td>
              <td>Achats & Patrimoine</td>
              <td>DHF35G89</td>
              <td>N/A</td>
            </tr>
            <tr>
              <td>Charbonneau</td>
              <td>Teddy</td>
              <td>Entreprise X</td>
              <td>YNEN53J</td>
              <td>12/08/2017</td>
            </tr>
            <tr>
              <td>Clémenceau</td>
              <td>Simon</td>
              <td>Service Y</td>
              <td>FJLK532LK</td>
              <td>13/09/2012 3:50:30</td>
            </tr>
            <tr>
              <td>Haÿs</td>
              <td>Téo</td>
              <td>Achats & Patrimoine</td>
              <td>DHF35G89</td>
              <td>N/A</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class=\"form-container\">
        <form>
          <label for=\"filtre_nom\">Nom:</label>
          <input type=\"text\" class=\"form-control\" id=\"filtre_nom\">

          <label for=\"pwd\">Prénom:</label>
          <input type=\"text\" class=\"form-control\" id=\"filtre_prenom\">

          <label for=\"pwd\">Numéro de clé:</label>
          <input type=\"text\" class=\"form-control\" id=\"filtre_numcle\">

          <label for=\"pwd\">Variure:</label>
          <input type=\"text\" class=\"form-control\" id=\"filtre_variure\">

          <label for=\"pwd\">Date début:</label>
          <input type=\"date\" class=\"form-control\" id=\"filtre_prenom\">
        </form>
        <button type=\"button\" class=\"btn btn-primary\">Filtrer</button> <br /> <br />
        <button class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#demo\">Plus de filtres</button>
        <div id=\"demo\" class=\"collapse\">
          <label for=\"pwd\">Date début:</label>
          <input type=\"date\" class=\"form-control\" id=\"filtre_prenom\">
        </div>
        <br /><br /><button type=\"button\" class=\"btn btn-danger\">Supprimer les filtres</button>

      </div>
    </div>
  </body>
  </html>
";
        
        $__internal_004ff9494e4de7a5c825eaddb5d759445c29b8a4ee66edfea40318aa00d550cd->leave($__internal_004ff9494e4de7a5c825eaddb5d759445c29b8a4ee66edfea40318aa00d550cd_prof);

        
        $__internal_486acfa23c160641f7a82cf728c60f5a6a050425b117616ac345957a6f54b946->leave($__internal_486acfa23c160641f7a82cf728c60f5a6a050425b117616ac345957a6f54b946_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:listerPerceptions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
    <ul class=\"nav nav-tabs\">
      <li><a href=\"#\">Accueil</a></li>
      <li class=\"active\"><a href=\"#\">Perceptions</a></li>
      <li><a href=\"#\">Stock</a></li>
      <li><a href=\"#\">Base de données</a></li>
    </ul>
  </nav>
  <div class=\"form_array_container\">
    <div class=\"table-container\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Organisation</th>
            <th>Numéro de la clé</th>
            <th>Date de perception</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Haÿs</td>
            <td>Téo</td>
            <td>Achats & Patrimoine</td>
            <td>DHF35G89</td>
            <td>30 Octobre 2017</td
            </tr>
            <tr>
              <td>Souffleux</td>
              <td>Thomas</td>
              <td>Capitainerie</td>
              <td>FJKL89G</td>
              <td>12/08/17</td>
            </tr>
            <tr>
              <td>Charbonneau</td>
              <td>Teddy</td>
              <td>Entreprise X</td>
              <td>YNEN53J</td>
              <td>Il y a 15 jours</td>
            </tr>
            <tr>
              <td>Clémenceau</td>
              <td>Simon</td>
              <td>Service Y</td>
              <td>FJLK532LK</td>
              <td>13/09/2012 3:50:30</td>
            </tr>
            <tr>
              <td>Haÿs</td>
              <td>Téo</td>
              <td>Achats & Patrimoine</td>
              <td>DHF35G89</td>
              <td>30 Octobre 2017</td>
            </tr>
            <tr>
              <td>Souffleux</td>
              <td>Thomas</td>
              <td>Capitainerie</td>
              <td>FJKL89G</td>
              <td>13 Nov. 2017</td>
            </tr>
            <tr>
              <td>Charbonneau</td>
              <td>Teddy</td>
              <td>Entreprise X</td>
              <td>YNEN53J</td>
              <td>12/08/2017</td>
            </tr>
            <tr>
              <td>Clémenceau</td>
              <td>Simon</td>
              <td>Service Y</td>
              <td>FJLK532LK</td>
              <td>13/09/2012 3:50:30</td>
            </tr>
            <tr>
              <td>Haÿs</td>
              <td>Téo</td>
              <td>Achats & Patrimoine</td>
              <td>DHF35G89</td>
              <td>N/A</td>
            </tr>
            <tr>
              <td>Charbonneau</td>
              <td>Teddy</td>
              <td>Entreprise X</td>
              <td>YNEN53J</td>
              <td>12/08/2017</td>
            </tr>
            <tr>
              <td>Clémenceau</td>
              <td>Simon</td>
              <td>Service Y</td>
              <td>FJLK532LK</td>
              <td>13/09/2012 3:50:30</td>
            </tr>
            <tr>
              <td>Haÿs</td>
              <td>Téo</td>
              <td>Achats & Patrimoine</td>
              <td>DHF35G89</td>
              <td>N/A</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class=\"form-container\">
        <form>
          <label for=\"filtre_nom\">Nom:</label>
          <input type=\"text\" class=\"form-control\" id=\"filtre_nom\">

          <label for=\"pwd\">Prénom:</label>
          <input type=\"text\" class=\"form-control\" id=\"filtre_prenom\">

          <label for=\"pwd\">Numéro de clé:</label>
          <input type=\"text\" class=\"form-control\" id=\"filtre_numcle\">

          <label for=\"pwd\">Variure:</label>
          <input type=\"text\" class=\"form-control\" id=\"filtre_variure\">

          <label for=\"pwd\">Date début:</label>
          <input type=\"date\" class=\"form-control\" id=\"filtre_prenom\">
        </form>
        <button type=\"button\" class=\"btn btn-primary\">Filtrer</button> <br /> <br />
        <button class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#demo\">Plus de filtres</button>
        <div id=\"demo\" class=\"collapse\">
          <label for=\"pwd\">Date début:</label>
          <input type=\"date\" class=\"form-control\" id=\"filtre_prenom\">
        </div>
        <br /><br /><button type=\"button\" class=\"btn btn-danger\">Supprimer les filtres</button>

      </div>
    </div>
  </body>
  </html>
", "FrontBundle:Default:listerPerceptions.html.twig", "/home/doge/PTS/PALR/src/FrontBundle/Resources/views/Default/listerPerceptions.html.twig");
    }
}
