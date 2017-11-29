<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc4674fec9a89e2caaa31559c641c339296c9acc3340763dfdfa780cedb7ba88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4674fec9a89e2caaa31559c641c339296c9acc3340763dfdfa780cedb7ba88->enter($__internal_dc4674fec9a89e2caaa31559c641c339296c9acc3340763dfdfa780cedb7ba88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c546d629f45b313fe7f5025fb2ce1613f16116acc596a860532c6e40274896ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c546d629f45b313fe7f5025fb2ce1613f16116acc596a860532c6e40274896ee->enter($__internal_c546d629f45b313fe7f5025fb2ce1613f16116acc596a860532c6e40274896ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_dc4674fec9a89e2caaa31559c641c339296c9acc3340763dfdfa780cedb7ba88->leave($__internal_dc4674fec9a89e2caaa31559c641c339296c9acc3340763dfdfa780cedb7ba88_prof);

        
        $__internal_c546d629f45b313fe7f5025fb2ce1613f16116acc596a860532c6e40274896ee->leave($__internal_c546d629f45b313fe7f5025fb2ce1613f16116acc596a860532c6e40274896ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a54b94900ea16ad1a21a166d16830a523d21044b8cf6fd549a53dffd15745cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54b94900ea16ad1a21a166d16830a523d21044b8cf6fd549a53dffd15745cc8->enter($__internal_a54b94900ea16ad1a21a166d16830a523d21044b8cf6fd549a53dffd15745cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6636ba0b33296a216dda3c76cdd83c37fbb01daad5aefb5e8fcdfe2a19153368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6636ba0b33296a216dda3c76cdd83c37fbb01daad5aefb5e8fcdfe2a19153368->enter($__internal_6636ba0b33296a216dda3c76cdd83c37fbb01daad5aefb5e8fcdfe2a19153368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6636ba0b33296a216dda3c76cdd83c37fbb01daad5aefb5e8fcdfe2a19153368->leave($__internal_6636ba0b33296a216dda3c76cdd83c37fbb01daad5aefb5e8fcdfe2a19153368_prof);

        
        $__internal_a54b94900ea16ad1a21a166d16830a523d21044b8cf6fd549a53dffd15745cc8->leave($__internal_a54b94900ea16ad1a21a166d16830a523d21044b8cf6fd549a53dffd15745cc8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6a18a6f451b111084cf58345fe940708c39b02c72c077f6283386a8070d3d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a18a6f451b111084cf58345fe940708c39b02c72c077f6283386a8070d3d06->enter($__internal_a6a18a6f451b111084cf58345fe940708c39b02c72c077f6283386a8070d3d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fda50f617e0c32986b5fe012fe5cf297bd101e23748acb855fc36059b561e874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda50f617e0c32986b5fe012fe5cf297bd101e23748acb855fc36059b561e874->enter($__internal_fda50f617e0c32986b5fe012fe5cf297bd101e23748acb855fc36059b561e874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fda50f617e0c32986b5fe012fe5cf297bd101e23748acb855fc36059b561e874->leave($__internal_fda50f617e0c32986b5fe012fe5cf297bd101e23748acb855fc36059b561e874_prof);

        
        $__internal_a6a18a6f451b111084cf58345fe940708c39b02c72c077f6283386a8070d3d06->leave($__internal_a6a18a6f451b111084cf58345fe940708c39b02c72c077f6283386a8070d3d06_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_187bad5b6b8d3f1f370c38715a883943675f2d5226a17d5650bed9da90627dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187bad5b6b8d3f1f370c38715a883943675f2d5226a17d5650bed9da90627dc8->enter($__internal_187bad5b6b8d3f1f370c38715a883943675f2d5226a17d5650bed9da90627dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1f7984c08b08b4a06b80666fd1529422313a798aa411f4b8db8434113751691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f7984c08b08b4a06b80666fd1529422313a798aa411f4b8db8434113751691->enter($__internal_c1f7984c08b08b4a06b80666fd1529422313a798aa411f4b8db8434113751691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1f7984c08b08b4a06b80666fd1529422313a798aa411f4b8db8434113751691->leave($__internal_c1f7984c08b08b4a06b80666fd1529422313a798aa411f4b8db8434113751691_prof);

        
        $__internal_187bad5b6b8d3f1f370c38715a883943675f2d5226a17d5650bed9da90627dc8->leave($__internal_187bad5b6b8d3f1f370c38715a883943675f2d5226a17d5650bed9da90627dc8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ironweb/PTS/palr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
