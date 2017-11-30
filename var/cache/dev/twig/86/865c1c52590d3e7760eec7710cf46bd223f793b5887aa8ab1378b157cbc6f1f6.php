<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2d84f9e23e0e4b7e31cd7bc68a9f16cb631d9726be8ec48b97c8ca01cfe9c96d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d84f9e23e0e4b7e31cd7bc68a9f16cb631d9726be8ec48b97c8ca01cfe9c96d->enter($__internal_2d84f9e23e0e4b7e31cd7bc68a9f16cb631d9726be8ec48b97c8ca01cfe9c96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7c8c7e3e1253bafb634455440526c010de67eab0de8bcc3b481bcf1acb09883a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8c7e3e1253bafb634455440526c010de67eab0de8bcc3b481bcf1acb09883a->enter($__internal_7c8c7e3e1253bafb634455440526c010de67eab0de8bcc3b481bcf1acb09883a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d84f9e23e0e4b7e31cd7bc68a9f16cb631d9726be8ec48b97c8ca01cfe9c96d->leave($__internal_2d84f9e23e0e4b7e31cd7bc68a9f16cb631d9726be8ec48b97c8ca01cfe9c96d_prof);

        
        $__internal_7c8c7e3e1253bafb634455440526c010de67eab0de8bcc3b481bcf1acb09883a->leave($__internal_7c8c7e3e1253bafb634455440526c010de67eab0de8bcc3b481bcf1acb09883a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e78d49a75b179a8c5ed3b805a9f47962aab3b25815dcb7892c707a1a43a2aa4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78d49a75b179a8c5ed3b805a9f47962aab3b25815dcb7892c707a1a43a2aa4e->enter($__internal_e78d49a75b179a8c5ed3b805a9f47962aab3b25815dcb7892c707a1a43a2aa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7450581ab7372ffbe28959395cc04827489bfc18351ef656c8f7174906d8fc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7450581ab7372ffbe28959395cc04827489bfc18351ef656c8f7174906d8fc55->enter($__internal_7450581ab7372ffbe28959395cc04827489bfc18351ef656c8f7174906d8fc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7450581ab7372ffbe28959395cc04827489bfc18351ef656c8f7174906d8fc55->leave($__internal_7450581ab7372ffbe28959395cc04827489bfc18351ef656c8f7174906d8fc55_prof);

        
        $__internal_e78d49a75b179a8c5ed3b805a9f47962aab3b25815dcb7892c707a1a43a2aa4e->leave($__internal_e78d49a75b179a8c5ed3b805a9f47962aab3b25815dcb7892c707a1a43a2aa4e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66276f3b6788f255328c609a78c19d01dc011730aa55a27f5be4cd091629389a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66276f3b6788f255328c609a78c19d01dc011730aa55a27f5be4cd091629389a->enter($__internal_66276f3b6788f255328c609a78c19d01dc011730aa55a27f5be4cd091629389a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_202164afa13bca32c0bca9cbe700d3e1e8d763274bbd3cbc21d5591c4e119bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202164afa13bca32c0bca9cbe700d3e1e8d763274bbd3cbc21d5591c4e119bf5->enter($__internal_202164afa13bca32c0bca9cbe700d3e1e8d763274bbd3cbc21d5591c4e119bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_202164afa13bca32c0bca9cbe700d3e1e8d763274bbd3cbc21d5591c4e119bf5->leave($__internal_202164afa13bca32c0bca9cbe700d3e1e8d763274bbd3cbc21d5591c4e119bf5_prof);

        
        $__internal_66276f3b6788f255328c609a78c19d01dc011730aa55a27f5be4cd091629389a->leave($__internal_66276f3b6788f255328c609a78c19d01dc011730aa55a27f5be4cd091629389a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f1371e038e6821055fe0f9eb87db2919ad7672483bd982cb0e36bf350dc6e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1371e038e6821055fe0f9eb87db2919ad7672483bd982cb0e36bf350dc6e10->enter($__internal_1f1371e038e6821055fe0f9eb87db2919ad7672483bd982cb0e36bf350dc6e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f469db9ac6f4e881237a81ba9a35f0a1409f0423a56d04ca830b1d01f1813597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f469db9ac6f4e881237a81ba9a35f0a1409f0423a56d04ca830b1d01f1813597->enter($__internal_f469db9ac6f4e881237a81ba9a35f0a1409f0423a56d04ca830b1d01f1813597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f469db9ac6f4e881237a81ba9a35f0a1409f0423a56d04ca830b1d01f1813597->leave($__internal_f469db9ac6f4e881237a81ba9a35f0a1409f0423a56d04ca830b1d01f1813597_prof);

        
        $__internal_1f1371e038e6821055fe0f9eb87db2919ad7672483bd982cb0e36bf350dc6e10->leave($__internal_1f1371e038e6821055fe0f9eb87db2919ad7672483bd982cb0e36bf350dc6e10_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/doge/PTS/palr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
