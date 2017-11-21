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
        $__internal_1f4a386696e7ee3b020e95f22de2968c32dcab599387765635c893c8a7a1898f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4a386696e7ee3b020e95f22de2968c32dcab599387765635c893c8a7a1898f->enter($__internal_1f4a386696e7ee3b020e95f22de2968c32dcab599387765635c893c8a7a1898f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a60a61be54b0609f8e9aac1cd2b74341b10d7d71ae451f79e8e474e90b4f1846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60a61be54b0609f8e9aac1cd2b74341b10d7d71ae451f79e8e474e90b4f1846->enter($__internal_a60a61be54b0609f8e9aac1cd2b74341b10d7d71ae451f79e8e474e90b4f1846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1f4a386696e7ee3b020e95f22de2968c32dcab599387765635c893c8a7a1898f->leave($__internal_1f4a386696e7ee3b020e95f22de2968c32dcab599387765635c893c8a7a1898f_prof);

        
        $__internal_a60a61be54b0609f8e9aac1cd2b74341b10d7d71ae451f79e8e474e90b4f1846->leave($__internal_a60a61be54b0609f8e9aac1cd2b74341b10d7d71ae451f79e8e474e90b4f1846_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f69c856d2244ff774e1fba876381ba6b35992c9e8c0a9da34d8ff8d357399fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69c856d2244ff774e1fba876381ba6b35992c9e8c0a9da34d8ff8d357399fc7->enter($__internal_f69c856d2244ff774e1fba876381ba6b35992c9e8c0a9da34d8ff8d357399fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f371c6df137cea6929226bb63118d2d6a57bf8f36c19bf9d63b95d86704b0610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f371c6df137cea6929226bb63118d2d6a57bf8f36c19bf9d63b95d86704b0610->enter($__internal_f371c6df137cea6929226bb63118d2d6a57bf8f36c19bf9d63b95d86704b0610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f371c6df137cea6929226bb63118d2d6a57bf8f36c19bf9d63b95d86704b0610->leave($__internal_f371c6df137cea6929226bb63118d2d6a57bf8f36c19bf9d63b95d86704b0610_prof);

        
        $__internal_f69c856d2244ff774e1fba876381ba6b35992c9e8c0a9da34d8ff8d357399fc7->leave($__internal_f69c856d2244ff774e1fba876381ba6b35992c9e8c0a9da34d8ff8d357399fc7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_deca49c31e16f15955267a0e73a84048c971abc492412785b19aebec39df16b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deca49c31e16f15955267a0e73a84048c971abc492412785b19aebec39df16b4->enter($__internal_deca49c31e16f15955267a0e73a84048c971abc492412785b19aebec39df16b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0bf88e89b35cc45ae668dd87a156d7c3e868d4cc4754d6cc56cb26f08a27f42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf88e89b35cc45ae668dd87a156d7c3e868d4cc4754d6cc56cb26f08a27f42c->enter($__internal_0bf88e89b35cc45ae668dd87a156d7c3e868d4cc4754d6cc56cb26f08a27f42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0bf88e89b35cc45ae668dd87a156d7c3e868d4cc4754d6cc56cb26f08a27f42c->leave($__internal_0bf88e89b35cc45ae668dd87a156d7c3e868d4cc4754d6cc56cb26f08a27f42c_prof);

        
        $__internal_deca49c31e16f15955267a0e73a84048c971abc492412785b19aebec39df16b4->leave($__internal_deca49c31e16f15955267a0e73a84048c971abc492412785b19aebec39df16b4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_98af88c64cac27a634083a7c548062dcf349921d3c6fcbc594c97997410a6d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98af88c64cac27a634083a7c548062dcf349921d3c6fcbc594c97997410a6d7b->enter($__internal_98af88c64cac27a634083a7c548062dcf349921d3c6fcbc594c97997410a6d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88d28b4516c2c78d24e44986fdebe55242377edfa0c25a6792fe4e5b68ba3b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d28b4516c2c78d24e44986fdebe55242377edfa0c25a6792fe4e5b68ba3b2b->enter($__internal_88d28b4516c2c78d24e44986fdebe55242377edfa0c25a6792fe4e5b68ba3b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_88d28b4516c2c78d24e44986fdebe55242377edfa0c25a6792fe4e5b68ba3b2b->leave($__internal_88d28b4516c2c78d24e44986fdebe55242377edfa0c25a6792fe4e5b68ba3b2b_prof);

        
        $__internal_98af88c64cac27a634083a7c548062dcf349921d3c6fcbc594c97997410a6d7b->leave($__internal_98af88c64cac27a634083a7c548062dcf349921d3c6fcbc594c97997410a6d7b_prof);

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
", "@Twig/layout.html.twig", "/home/doge/PTS/PALR/palr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
