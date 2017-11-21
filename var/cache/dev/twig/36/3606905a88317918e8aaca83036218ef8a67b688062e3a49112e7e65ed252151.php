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
        $__internal_e65ff4e00c6e22d02774b7b060612857171e68df2ed53f4ac2c43f7947358d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e65ff4e00c6e22d02774b7b060612857171e68df2ed53f4ac2c43f7947358d4f->enter($__internal_e65ff4e00c6e22d02774b7b060612857171e68df2ed53f4ac2c43f7947358d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_14faa83972fa8fd6c63ca62160320f7ce6940eeba6fd8a359709b67a1c3720b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14faa83972fa8fd6c63ca62160320f7ce6940eeba6fd8a359709b67a1c3720b9->enter($__internal_14faa83972fa8fd6c63ca62160320f7ce6940eeba6fd8a359709b67a1c3720b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e65ff4e00c6e22d02774b7b060612857171e68df2ed53f4ac2c43f7947358d4f->leave($__internal_e65ff4e00c6e22d02774b7b060612857171e68df2ed53f4ac2c43f7947358d4f_prof);

        
        $__internal_14faa83972fa8fd6c63ca62160320f7ce6940eeba6fd8a359709b67a1c3720b9->leave($__internal_14faa83972fa8fd6c63ca62160320f7ce6940eeba6fd8a359709b67a1c3720b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_901e0bc9e9641ea28e3381f5ad78941d590b20c95267898e857ff386abb2c7fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901e0bc9e9641ea28e3381f5ad78941d590b20c95267898e857ff386abb2c7fc->enter($__internal_901e0bc9e9641ea28e3381f5ad78941d590b20c95267898e857ff386abb2c7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_74e097345ab2636bbc7236b16e1fd7ff7bc44f9b3b0b231419db30632bf7c64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e097345ab2636bbc7236b16e1fd7ff7bc44f9b3b0b231419db30632bf7c64a->enter($__internal_74e097345ab2636bbc7236b16e1fd7ff7bc44f9b3b0b231419db30632bf7c64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_74e097345ab2636bbc7236b16e1fd7ff7bc44f9b3b0b231419db30632bf7c64a->leave($__internal_74e097345ab2636bbc7236b16e1fd7ff7bc44f9b3b0b231419db30632bf7c64a_prof);

        
        $__internal_901e0bc9e9641ea28e3381f5ad78941d590b20c95267898e857ff386abb2c7fc->leave($__internal_901e0bc9e9641ea28e3381f5ad78941d590b20c95267898e857ff386abb2c7fc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1341722859177c68634a397cd0eb471d124eb17ca07f7dcab20de3c84de2535c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1341722859177c68634a397cd0eb471d124eb17ca07f7dcab20de3c84de2535c->enter($__internal_1341722859177c68634a397cd0eb471d124eb17ca07f7dcab20de3c84de2535c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f71e247472bdaf75f199020b2480afbae799dcfdf16de9127b64b371bd37f6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71e247472bdaf75f199020b2480afbae799dcfdf16de9127b64b371bd37f6ce->enter($__internal_f71e247472bdaf75f199020b2480afbae799dcfdf16de9127b64b371bd37f6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f71e247472bdaf75f199020b2480afbae799dcfdf16de9127b64b371bd37f6ce->leave($__internal_f71e247472bdaf75f199020b2480afbae799dcfdf16de9127b64b371bd37f6ce_prof);

        
        $__internal_1341722859177c68634a397cd0eb471d124eb17ca07f7dcab20de3c84de2535c->leave($__internal_1341722859177c68634a397cd0eb471d124eb17ca07f7dcab20de3c84de2535c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fae9ede693520e8a82c995b66b8c923e306b8a587f9db1f2e3e7e3fa06a60324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae9ede693520e8a82c995b66b8c923e306b8a587f9db1f2e3e7e3fa06a60324->enter($__internal_fae9ede693520e8a82c995b66b8c923e306b8a587f9db1f2e3e7e3fa06a60324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c5c4314de7809e4543f228ee2018c811b3ddd227a1d6f45cd683359b9c33a2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c4314de7809e4543f228ee2018c811b3ddd227a1d6f45cd683359b9c33a2eb->enter($__internal_c5c4314de7809e4543f228ee2018c811b3ddd227a1d6f45cd683359b9c33a2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c5c4314de7809e4543f228ee2018c811b3ddd227a1d6f45cd683359b9c33a2eb->leave($__internal_c5c4314de7809e4543f228ee2018c811b3ddd227a1d6f45cd683359b9c33a2eb_prof);

        
        $__internal_fae9ede693520e8a82c995b66b8c923e306b8a587f9db1f2e3e7e3fa06a60324->leave($__internal_fae9ede693520e8a82c995b66b8c923e306b8a587f9db1f2e3e7e3fa06a60324_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/doge/PTS/PALR/palr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
