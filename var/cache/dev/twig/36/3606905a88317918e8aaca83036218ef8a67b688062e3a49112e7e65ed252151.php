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
        $__internal_5c9dc3cc8df0634840d361751896e82201ff2078b6f6d6c09d4522bb100cc8bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9dc3cc8df0634840d361751896e82201ff2078b6f6d6c09d4522bb100cc8bd->enter($__internal_5c9dc3cc8df0634840d361751896e82201ff2078b6f6d6c09d4522bb100cc8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_903d898dbbf2ff2222d6fab68c2315b70dfaf97e07be8aefb0bd0f20b77621f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903d898dbbf2ff2222d6fab68c2315b70dfaf97e07be8aefb0bd0f20b77621f1->enter($__internal_903d898dbbf2ff2222d6fab68c2315b70dfaf97e07be8aefb0bd0f20b77621f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c9dc3cc8df0634840d361751896e82201ff2078b6f6d6c09d4522bb100cc8bd->leave($__internal_5c9dc3cc8df0634840d361751896e82201ff2078b6f6d6c09d4522bb100cc8bd_prof);

        
        $__internal_903d898dbbf2ff2222d6fab68c2315b70dfaf97e07be8aefb0bd0f20b77621f1->leave($__internal_903d898dbbf2ff2222d6fab68c2315b70dfaf97e07be8aefb0bd0f20b77621f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cec78f626013ec08ae270c348b2f6041a23f66e8e665a1a8cb9d32054f10b0e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec78f626013ec08ae270c348b2f6041a23f66e8e665a1a8cb9d32054f10b0e8->enter($__internal_cec78f626013ec08ae270c348b2f6041a23f66e8e665a1a8cb9d32054f10b0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d84b61486b3e0de294f19c7d566fe431902c860bd385179d719bd66a9053a2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84b61486b3e0de294f19c7d566fe431902c860bd385179d719bd66a9053a2bd->enter($__internal_d84b61486b3e0de294f19c7d566fe431902c860bd385179d719bd66a9053a2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d84b61486b3e0de294f19c7d566fe431902c860bd385179d719bd66a9053a2bd->leave($__internal_d84b61486b3e0de294f19c7d566fe431902c860bd385179d719bd66a9053a2bd_prof);

        
        $__internal_cec78f626013ec08ae270c348b2f6041a23f66e8e665a1a8cb9d32054f10b0e8->leave($__internal_cec78f626013ec08ae270c348b2f6041a23f66e8e665a1a8cb9d32054f10b0e8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c3c73297ba6070cb3444f2cfa641f2ce8e27c219e91b9288b4b051fd3f0a6b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3c73297ba6070cb3444f2cfa641f2ce8e27c219e91b9288b4b051fd3f0a6b4->enter($__internal_7c3c73297ba6070cb3444f2cfa641f2ce8e27c219e91b9288b4b051fd3f0a6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d3fc505fe2db6625c6f612e5ba4fa270f0bf30b85a8b4d4744134c49e3796408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fc505fe2db6625c6f612e5ba4fa270f0bf30b85a8b4d4744134c49e3796408->enter($__internal_d3fc505fe2db6625c6f612e5ba4fa270f0bf30b85a8b4d4744134c49e3796408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d3fc505fe2db6625c6f612e5ba4fa270f0bf30b85a8b4d4744134c49e3796408->leave($__internal_d3fc505fe2db6625c6f612e5ba4fa270f0bf30b85a8b4d4744134c49e3796408_prof);

        
        $__internal_7c3c73297ba6070cb3444f2cfa641f2ce8e27c219e91b9288b4b051fd3f0a6b4->leave($__internal_7c3c73297ba6070cb3444f2cfa641f2ce8e27c219e91b9288b4b051fd3f0a6b4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b78a8fae7acc6d8a2d4fa98a4e144b728dea3f06f19273213984a30f54a9ddd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b78a8fae7acc6d8a2d4fa98a4e144b728dea3f06f19273213984a30f54a9ddd3->enter($__internal_b78a8fae7acc6d8a2d4fa98a4e144b728dea3f06f19273213984a30f54a9ddd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_289af625d5c9eaa85830667bbc501b50c7ae258471ce397f3b7d93ff502d338d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289af625d5c9eaa85830667bbc501b50c7ae258471ce397f3b7d93ff502d338d->enter($__internal_289af625d5c9eaa85830667bbc501b50c7ae258471ce397f3b7d93ff502d338d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_289af625d5c9eaa85830667bbc501b50c7ae258471ce397f3b7d93ff502d338d->leave($__internal_289af625d5c9eaa85830667bbc501b50c7ae258471ce397f3b7d93ff502d338d_prof);

        
        $__internal_b78a8fae7acc6d8a2d4fa98a4e144b728dea3f06f19273213984a30f54a9ddd3->leave($__internal_b78a8fae7acc6d8a2d4fa98a4e144b728dea3f06f19273213984a30f54a9ddd3_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/ironweb/PTS/palr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
