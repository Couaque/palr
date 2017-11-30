<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69a0c1c84436dd19131a086798fa5c076be36fc45f503cf1c097a00fad2d6eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a0c1c84436dd19131a086798fa5c076be36fc45f503cf1c097a00fad2d6eb1->enter($__internal_69a0c1c84436dd19131a086798fa5c076be36fc45f503cf1c097a00fad2d6eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_de2fd026e2dbacf320739beb48bd5a691531b4122174ba3077b3babd56134509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2fd026e2dbacf320739beb48bd5a691531b4122174ba3077b3babd56134509->enter($__internal_de2fd026e2dbacf320739beb48bd5a691531b4122174ba3077b3babd56134509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69a0c1c84436dd19131a086798fa5c076be36fc45f503cf1c097a00fad2d6eb1->leave($__internal_69a0c1c84436dd19131a086798fa5c076be36fc45f503cf1c097a00fad2d6eb1_prof);

        
        $__internal_de2fd026e2dbacf320739beb48bd5a691531b4122174ba3077b3babd56134509->leave($__internal_de2fd026e2dbacf320739beb48bd5a691531b4122174ba3077b3babd56134509_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b2844144dbdb210810cb4659b6cf282c9342e96989ec96fe40dda1510851de4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2844144dbdb210810cb4659b6cf282c9342e96989ec96fe40dda1510851de4a->enter($__internal_b2844144dbdb210810cb4659b6cf282c9342e96989ec96fe40dda1510851de4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_48dfb9ef98d8fac2b8128d47afd40590da038eee2598486331be40d39621d734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dfb9ef98d8fac2b8128d47afd40590da038eee2598486331be40d39621d734->enter($__internal_48dfb9ef98d8fac2b8128d47afd40590da038eee2598486331be40d39621d734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_48dfb9ef98d8fac2b8128d47afd40590da038eee2598486331be40d39621d734->leave($__internal_48dfb9ef98d8fac2b8128d47afd40590da038eee2598486331be40d39621d734_prof);

        
        $__internal_b2844144dbdb210810cb4659b6cf282c9342e96989ec96fe40dda1510851de4a->leave($__internal_b2844144dbdb210810cb4659b6cf282c9342e96989ec96fe40dda1510851de4a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5ebfad4c9f1160bc2d2b31031a5c671e6c8d72bfd081be59188204212389c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ebfad4c9f1160bc2d2b31031a5c671e6c8d72bfd081be59188204212389c1c->enter($__internal_c5ebfad4c9f1160bc2d2b31031a5c671e6c8d72bfd081be59188204212389c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2736c0edb386095470d294d7fdc9a703eac0beab8cdc1ccde2b563caec1f1295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2736c0edb386095470d294d7fdc9a703eac0beab8cdc1ccde2b563caec1f1295->enter($__internal_2736c0edb386095470d294d7fdc9a703eac0beab8cdc1ccde2b563caec1f1295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2736c0edb386095470d294d7fdc9a703eac0beab8cdc1ccde2b563caec1f1295->leave($__internal_2736c0edb386095470d294d7fdc9a703eac0beab8cdc1ccde2b563caec1f1295_prof);

        
        $__internal_c5ebfad4c9f1160bc2d2b31031a5c671e6c8d72bfd081be59188204212389c1c->leave($__internal_c5ebfad4c9f1160bc2d2b31031a5c671e6c8d72bfd081be59188204212389c1c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cd6a5fc7591072e7f919e21ee0c9b92947592cc4c4c6142a975185b0bbf1b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd6a5fc7591072e7f919e21ee0c9b92947592cc4c4c6142a975185b0bbf1b99->enter($__internal_1cd6a5fc7591072e7f919e21ee0c9b92947592cc4c4c6142a975185b0bbf1b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2c06e1360ae46bb525bd6b1bb07f76694b0077586cc3175686a4859dc632f74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c06e1360ae46bb525bd6b1bb07f76694b0077586cc3175686a4859dc632f74a->enter($__internal_2c06e1360ae46bb525bd6b1bb07f76694b0077586cc3175686a4859dc632f74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2c06e1360ae46bb525bd6b1bb07f76694b0077586cc3175686a4859dc632f74a->leave($__internal_2c06e1360ae46bb525bd6b1bb07f76694b0077586cc3175686a4859dc632f74a_prof);

        
        $__internal_1cd6a5fc7591072e7f919e21ee0c9b92947592cc4c4c6142a975185b0bbf1b99->leave($__internal_1cd6a5fc7591072e7f919e21ee0c9b92947592cc4c4c6142a975185b0bbf1b99_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/doge/PTS/palr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
