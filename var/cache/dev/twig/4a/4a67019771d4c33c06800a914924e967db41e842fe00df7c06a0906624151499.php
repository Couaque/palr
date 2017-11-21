<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_070ddab832802f24bc9b45766318c94abf17fdc0c3fefc2684777107ba9766ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070ddab832802f24bc9b45766318c94abf17fdc0c3fefc2684777107ba9766ca->enter($__internal_070ddab832802f24bc9b45766318c94abf17fdc0c3fefc2684777107ba9766ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8b6800227f353ba62d2413e89a07febee92ab0dbba387f781a5a41db8d5cd0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6800227f353ba62d2413e89a07febee92ab0dbba387f781a5a41db8d5cd0cd->enter($__internal_8b6800227f353ba62d2413e89a07febee92ab0dbba387f781a5a41db8d5cd0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_070ddab832802f24bc9b45766318c94abf17fdc0c3fefc2684777107ba9766ca->leave($__internal_070ddab832802f24bc9b45766318c94abf17fdc0c3fefc2684777107ba9766ca_prof);

        
        $__internal_8b6800227f353ba62d2413e89a07febee92ab0dbba387f781a5a41db8d5cd0cd->leave($__internal_8b6800227f353ba62d2413e89a07febee92ab0dbba387f781a5a41db8d5cd0cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1fed2d9e76489bdf714fb36a5ef4bc4a8eb26004465e8ba79696909cf9ef928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1fed2d9e76489bdf714fb36a5ef4bc4a8eb26004465e8ba79696909cf9ef928->enter($__internal_c1fed2d9e76489bdf714fb36a5ef4bc4a8eb26004465e8ba79696909cf9ef928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6188d2f71ed37bf3c7c13032225345aab8201df95dcaf73a010b2b9372462fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6188d2f71ed37bf3c7c13032225345aab8201df95dcaf73a010b2b9372462fec->enter($__internal_6188d2f71ed37bf3c7c13032225345aab8201df95dcaf73a010b2b9372462fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6188d2f71ed37bf3c7c13032225345aab8201df95dcaf73a010b2b9372462fec->leave($__internal_6188d2f71ed37bf3c7c13032225345aab8201df95dcaf73a010b2b9372462fec_prof);

        
        $__internal_c1fed2d9e76489bdf714fb36a5ef4bc4a8eb26004465e8ba79696909cf9ef928->leave($__internal_c1fed2d9e76489bdf714fb36a5ef4bc4a8eb26004465e8ba79696909cf9ef928_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea283ec650351cae0fdd597e8378fae187d725518934fc33a95bcf69f72e7513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea283ec650351cae0fdd597e8378fae187d725518934fc33a95bcf69f72e7513->enter($__internal_ea283ec650351cae0fdd597e8378fae187d725518934fc33a95bcf69f72e7513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6623876f5e8507fa15362a4548210cb93600ed7c0d366a42d8fb21dcf2c30dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6623876f5e8507fa15362a4548210cb93600ed7c0d366a42d8fb21dcf2c30dd5->enter($__internal_6623876f5e8507fa15362a4548210cb93600ed7c0d366a42d8fb21dcf2c30dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6623876f5e8507fa15362a4548210cb93600ed7c0d366a42d8fb21dcf2c30dd5->leave($__internal_6623876f5e8507fa15362a4548210cb93600ed7c0d366a42d8fb21dcf2c30dd5_prof);

        
        $__internal_ea283ec650351cae0fdd597e8378fae187d725518934fc33a95bcf69f72e7513->leave($__internal_ea283ec650351cae0fdd597e8378fae187d725518934fc33a95bcf69f72e7513_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4008ba0b2930deea17392bf01b6662dd414cad726656406c142af2baedca48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4008ba0b2930deea17392bf01b6662dd414cad726656406c142af2baedca48c->enter($__internal_c4008ba0b2930deea17392bf01b6662dd414cad726656406c142af2baedca48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77a62527b7b4efd12d9d365b895fbe98b575d3a3a13ce4d1663788b01ca04ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a62527b7b4efd12d9d365b895fbe98b575d3a3a13ce4d1663788b01ca04ed0->enter($__internal_77a62527b7b4efd12d9d365b895fbe98b575d3a3a13ce4d1663788b01ca04ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_77a62527b7b4efd12d9d365b895fbe98b575d3a3a13ce4d1663788b01ca04ed0->leave($__internal_77a62527b7b4efd12d9d365b895fbe98b575d3a3a13ce4d1663788b01ca04ed0_prof);

        
        $__internal_c4008ba0b2930deea17392bf01b6662dd414cad726656406c142af2baedca48c->leave($__internal_c4008ba0b2930deea17392bf01b6662dd414cad726656406c142af2baedca48c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/doge/PTS/PALR/palr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
