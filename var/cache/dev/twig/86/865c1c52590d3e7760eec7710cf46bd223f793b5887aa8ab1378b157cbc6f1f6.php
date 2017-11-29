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
        $__internal_79f23da01ff82c573623e78f6ddb49ac2811b76d7e61eee5c02deb2d84803aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f23da01ff82c573623e78f6ddb49ac2811b76d7e61eee5c02deb2d84803aee->enter($__internal_79f23da01ff82c573623e78f6ddb49ac2811b76d7e61eee5c02deb2d84803aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b4ab4a4a95c9e8d53efdfba81aef3d8838c2a385b866625220c6170e15ae4118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ab4a4a95c9e8d53efdfba81aef3d8838c2a385b866625220c6170e15ae4118->enter($__internal_b4ab4a4a95c9e8d53efdfba81aef3d8838c2a385b866625220c6170e15ae4118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79f23da01ff82c573623e78f6ddb49ac2811b76d7e61eee5c02deb2d84803aee->leave($__internal_79f23da01ff82c573623e78f6ddb49ac2811b76d7e61eee5c02deb2d84803aee_prof);

        
        $__internal_b4ab4a4a95c9e8d53efdfba81aef3d8838c2a385b866625220c6170e15ae4118->leave($__internal_b4ab4a4a95c9e8d53efdfba81aef3d8838c2a385b866625220c6170e15ae4118_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f2d9900b7a75925b8d7166f246e8ca0408616466c009f76addf3cbab55efe8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d9900b7a75925b8d7166f246e8ca0408616466c009f76addf3cbab55efe8fb->enter($__internal_f2d9900b7a75925b8d7166f246e8ca0408616466c009f76addf3cbab55efe8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d5cd91b8345bee1582d5649af4e4e77b23d2c3360a445cd5cf845b6f7cd2d058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5cd91b8345bee1582d5649af4e4e77b23d2c3360a445cd5cf845b6f7cd2d058->enter($__internal_d5cd91b8345bee1582d5649af4e4e77b23d2c3360a445cd5cf845b6f7cd2d058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d5cd91b8345bee1582d5649af4e4e77b23d2c3360a445cd5cf845b6f7cd2d058->leave($__internal_d5cd91b8345bee1582d5649af4e4e77b23d2c3360a445cd5cf845b6f7cd2d058_prof);

        
        $__internal_f2d9900b7a75925b8d7166f246e8ca0408616466c009f76addf3cbab55efe8fb->leave($__internal_f2d9900b7a75925b8d7166f246e8ca0408616466c009f76addf3cbab55efe8fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_092163ed71884feed8b66e0224ae2473592d5f5f3e3314f075c28ee5c87e8fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092163ed71884feed8b66e0224ae2473592d5f5f3e3314f075c28ee5c87e8fbc->enter($__internal_092163ed71884feed8b66e0224ae2473592d5f5f3e3314f075c28ee5c87e8fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3b46d251bbec3209d3ca86051127e92af0a1abd74843c205af33328914ae1803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b46d251bbec3209d3ca86051127e92af0a1abd74843c205af33328914ae1803->enter($__internal_3b46d251bbec3209d3ca86051127e92af0a1abd74843c205af33328914ae1803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3b46d251bbec3209d3ca86051127e92af0a1abd74843c205af33328914ae1803->leave($__internal_3b46d251bbec3209d3ca86051127e92af0a1abd74843c205af33328914ae1803_prof);

        
        $__internal_092163ed71884feed8b66e0224ae2473592d5f5f3e3314f075c28ee5c87e8fbc->leave($__internal_092163ed71884feed8b66e0224ae2473592d5f5f3e3314f075c28ee5c87e8fbc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0507a0915d7c7f7c08b43b2fbb4a8a5fb7d28671587d220b934b635ccc5efd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0507a0915d7c7f7c08b43b2fbb4a8a5fb7d28671587d220b934b635ccc5efd3->enter($__internal_e0507a0915d7c7f7c08b43b2fbb4a8a5fb7d28671587d220b934b635ccc5efd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_939feeaf2a6aebb414a544828a2ee5dfe1be057f832edbc4dbba6d06f52e2e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939feeaf2a6aebb414a544828a2ee5dfe1be057f832edbc4dbba6d06f52e2e74->enter($__internal_939feeaf2a6aebb414a544828a2ee5dfe1be057f832edbc4dbba6d06f52e2e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_939feeaf2a6aebb414a544828a2ee5dfe1be057f832edbc4dbba6d06f52e2e74->leave($__internal_939feeaf2a6aebb414a544828a2ee5dfe1be057f832edbc4dbba6d06f52e2e74_prof);

        
        $__internal_e0507a0915d7c7f7c08b43b2fbb4a8a5fb7d28671587d220b934b635ccc5efd3->leave($__internal_e0507a0915d7c7f7c08b43b2fbb4a8a5fb7d28671587d220b934b635ccc5efd3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/ironweb/PTS/palr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
