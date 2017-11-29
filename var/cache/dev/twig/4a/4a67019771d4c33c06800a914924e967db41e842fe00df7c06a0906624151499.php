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
        $__internal_61835df741c0ae9832110c2b70ae6d239ad5437d76545dd9893254a02b9ce462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61835df741c0ae9832110c2b70ae6d239ad5437d76545dd9893254a02b9ce462->enter($__internal_61835df741c0ae9832110c2b70ae6d239ad5437d76545dd9893254a02b9ce462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7f20623d9aaec4622fb97dda1bf777a6ad4df831598d1e7aef8f243077d2be9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f20623d9aaec4622fb97dda1bf777a6ad4df831598d1e7aef8f243077d2be9c->enter($__internal_7f20623d9aaec4622fb97dda1bf777a6ad4df831598d1e7aef8f243077d2be9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61835df741c0ae9832110c2b70ae6d239ad5437d76545dd9893254a02b9ce462->leave($__internal_61835df741c0ae9832110c2b70ae6d239ad5437d76545dd9893254a02b9ce462_prof);

        
        $__internal_7f20623d9aaec4622fb97dda1bf777a6ad4df831598d1e7aef8f243077d2be9c->leave($__internal_7f20623d9aaec4622fb97dda1bf777a6ad4df831598d1e7aef8f243077d2be9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73a5a2d7f4db59d5f97455a021bc5317afe9856b6e832a0e90995ea38d6a1c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a5a2d7f4db59d5f97455a021bc5317afe9856b6e832a0e90995ea38d6a1c76->enter($__internal_73a5a2d7f4db59d5f97455a021bc5317afe9856b6e832a0e90995ea38d6a1c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ea5e5ace903f61ed96f25c0c678fba480d47f445b765b3ab25ebb39b2fe42c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea5e5ace903f61ed96f25c0c678fba480d47f445b765b3ab25ebb39b2fe42c4->enter($__internal_8ea5e5ace903f61ed96f25c0c678fba480d47f445b765b3ab25ebb39b2fe42c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8ea5e5ace903f61ed96f25c0c678fba480d47f445b765b3ab25ebb39b2fe42c4->leave($__internal_8ea5e5ace903f61ed96f25c0c678fba480d47f445b765b3ab25ebb39b2fe42c4_prof);

        
        $__internal_73a5a2d7f4db59d5f97455a021bc5317afe9856b6e832a0e90995ea38d6a1c76->leave($__internal_73a5a2d7f4db59d5f97455a021bc5317afe9856b6e832a0e90995ea38d6a1c76_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c6c7ef4e623a7ae1a8a9b397faa7a42f5c881a701bc9e1f3ca8e31e2f1564eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6c7ef4e623a7ae1a8a9b397faa7a42f5c881a701bc9e1f3ca8e31e2f1564eb->enter($__internal_6c6c7ef4e623a7ae1a8a9b397faa7a42f5c881a701bc9e1f3ca8e31e2f1564eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64879bfe2a8bcd47057c5780c3c1d7bf1648bba975e77b536573598e283baa6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64879bfe2a8bcd47057c5780c3c1d7bf1648bba975e77b536573598e283baa6b->enter($__internal_64879bfe2a8bcd47057c5780c3c1d7bf1648bba975e77b536573598e283baa6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_64879bfe2a8bcd47057c5780c3c1d7bf1648bba975e77b536573598e283baa6b->leave($__internal_64879bfe2a8bcd47057c5780c3c1d7bf1648bba975e77b536573598e283baa6b_prof);

        
        $__internal_6c6c7ef4e623a7ae1a8a9b397faa7a42f5c881a701bc9e1f3ca8e31e2f1564eb->leave($__internal_6c6c7ef4e623a7ae1a8a9b397faa7a42f5c881a701bc9e1f3ca8e31e2f1564eb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ab3f039acec5f77ca753a1e1e5b651e19ad494460fea542993a56e9b7ed97a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab3f039acec5f77ca753a1e1e5b651e19ad494460fea542993a56e9b7ed97a8->enter($__internal_4ab3f039acec5f77ca753a1e1e5b651e19ad494460fea542993a56e9b7ed97a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46ff9d76bde14ea354afafcabffe8f76e471f6ff7d2e7e31df0cbf7bf9dc6bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ff9d76bde14ea354afafcabffe8f76e471f6ff7d2e7e31df0cbf7bf9dc6bd5->enter($__internal_46ff9d76bde14ea354afafcabffe8f76e471f6ff7d2e7e31df0cbf7bf9dc6bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_46ff9d76bde14ea354afafcabffe8f76e471f6ff7d2e7e31df0cbf7bf9dc6bd5->leave($__internal_46ff9d76bde14ea354afafcabffe8f76e471f6ff7d2e7e31df0cbf7bf9dc6bd5_prof);

        
        $__internal_4ab3f039acec5f77ca753a1e1e5b651e19ad494460fea542993a56e9b7ed97a8->leave($__internal_4ab3f039acec5f77ca753a1e1e5b651e19ad494460fea542993a56e9b7ed97a8_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/ironweb/PTS/palr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
