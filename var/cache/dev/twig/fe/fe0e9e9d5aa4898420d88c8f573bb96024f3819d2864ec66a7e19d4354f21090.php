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
        $__internal_d8ce366231cb4160aa23ba136cf5118fb47a77c0536290557e33b5441c4cc6a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ce366231cb4160aa23ba136cf5118fb47a77c0536290557e33b5441c4cc6a2->enter($__internal_d8ce366231cb4160aa23ba136cf5118fb47a77c0536290557e33b5441c4cc6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:listerPerceptions.html.twig"));

        $__internal_6738ebd28c9c093604dc6a00bf605e521812f2b18c7aafe3208ffba26be16628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6738ebd28c9c093604dc6a00bf605e521812f2b18c7aafe3208ffba26be16628->enter($__internal_6738ebd28c9c093604dc6a00bf605e521812f2b18c7aafe3208ffba26be16628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:listerPerceptions.html.twig"));

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
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Haÿs</td>
                <td>Téo</td>
                <td>Achats & Patrimoine</td>
                <td>DHF35G89</td>
                <td>13/09/2012</td>
                <td><a class=\"btn btn-info btn-xs btn-suppr\"><span class=\"glyphicon glyphicon-edit\"></span></a> <a class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span></a></td>
              </tr>
              <tr>
                <td>Souffleux</td>
                <td>Thomas</td>
                <td>Capitainerie</td>
                <td>FJKL89G</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Charbonneau</td>
                <td>Teddy</td>
                <td>Entreprise X</td>
                <td>YNEN53J</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Clémenceau</td>
                <td>Simon</td>
                <td>Service Y</td>
                <td>FJLK532LK</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Haÿs</td>
                <td>Téo</td>
                <td>Achats & Patrimoine</td>
                <td>DHF35G89</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Souffleux</td>
                <td>Thomas</td>
                <td>Capitainerie</td>
                <td>FJKL89G</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Charbonneau</td>
                <td>Teddy</td>
                <td>Entreprise X</td>
                <td>YNEN53J</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Clémenceau</td>
                <td>Simon</td>
                <td>Service Y</td>
                <td>FJLK532LK</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Haÿs</td>
                <td>Téo</td>
                <td>Achats & Patrimoine</td>
                <td>DHF35G89</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Charbonneau</td>
                <td>Teddy</td>
                <td>Entreprise X</td>
                <td>YNEN53J</td>
                <td>13/09/2012</td>
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

            <label for=\"pwd\">Date début:</label>
            <input type=\"date\" class=\"form-control\" id=\"filtre_prenom\">
          </form>
          <p><button type=\"button\" class=\"btn btn-primary btn-filtre\">Filtrer</button></p>
          <button type=\"button\" class=\"btn btn-danger btn-filtre\"><span class=\"glyphicon glyphicon-remove\"></span> Supprimer filtres</button>
        </div>
      </div>
      <a class=\"btn btn-success deconnexion\" href=\" ";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</a>
    </body>
    </html>
";
        
        $__internal_d8ce366231cb4160aa23ba136cf5118fb47a77c0536290557e33b5441c4cc6a2->leave($__internal_d8ce366231cb4160aa23ba136cf5118fb47a77c0536290557e33b5441c4cc6a2_prof);

        
        $__internal_6738ebd28c9c093604dc6a00bf605e521812f2b18c7aafe3208ffba26be16628->leave($__internal_6738ebd28c9c093604dc6a00bf605e521812f2b18c7aafe3208ffba26be16628_prof);

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
        return array (  177 => 136,  65 => 27,  61 => 26,  57 => 25,  53 => 24,  49 => 23,  25 => 1,);
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
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Haÿs</td>
                <td>Téo</td>
                <td>Achats & Patrimoine</td>
                <td>DHF35G89</td>
                <td>13/09/2012</td>
                <td><a class=\"btn btn-info btn-xs btn-suppr\"><span class=\"glyphicon glyphicon-edit\"></span></a> <a class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span></a></td>
              </tr>
              <tr>
                <td>Souffleux</td>
                <td>Thomas</td>
                <td>Capitainerie</td>
                <td>FJKL89G</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Charbonneau</td>
                <td>Teddy</td>
                <td>Entreprise X</td>
                <td>YNEN53J</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Clémenceau</td>
                <td>Simon</td>
                <td>Service Y</td>
                <td>FJLK532LK</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Haÿs</td>
                <td>Téo</td>
                <td>Achats & Patrimoine</td>
                <td>DHF35G89</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Souffleux</td>
                <td>Thomas</td>
                <td>Capitainerie</td>
                <td>FJKL89G</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Charbonneau</td>
                <td>Teddy</td>
                <td>Entreprise X</td>
                <td>YNEN53J</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Clémenceau</td>
                <td>Simon</td>
                <td>Service Y</td>
                <td>FJLK532LK</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Haÿs</td>
                <td>Téo</td>
                <td>Achats & Patrimoine</td>
                <td>DHF35G89</td>
                <td>13/09/2012</td>
              </tr>
              <tr>
                <td>Charbonneau</td>
                <td>Teddy</td>
                <td>Entreprise X</td>
                <td>YNEN53J</td>
                <td>13/09/2012</td>
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

            <label for=\"pwd\">Date début:</label>
            <input type=\"date\" class=\"form-control\" id=\"filtre_prenom\">
          </form>
          <p><button type=\"button\" class=\"btn btn-primary btn-filtre\">Filtrer</button></p>
          <button type=\"button\" class=\"btn btn-danger btn-filtre\"><span class=\"glyphicon glyphicon-remove\"></span> Supprimer filtres</button>
        </div>
      </div>
      <a class=\"btn btn-success deconnexion\" href=\" {{ path('login') }}\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</a>
    </body>
    </html>
", "FrontBundle:Default:listerPerceptions.html.twig", "/home/doge/PTS/PALR/src/FrontBundle/Resources/views/Default/listerPerceptions.html.twig");
    }
}
