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
        $__internal_30221e31f4f2b64ee918eac959920afa22c8e7ceabb86ad0a9743071182a6045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30221e31f4f2b64ee918eac959920afa22c8e7ceabb86ad0a9743071182a6045->enter($__internal_30221e31f4f2b64ee918eac959920afa22c8e7ceabb86ad0a9743071182a6045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8540be8edee5bb1dab020f751f9be5d37ef88d89831e23e52e89b036adf42ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8540be8edee5bb1dab020f751f9be5d37ef88d89831e23e52e89b036adf42ae2->enter($__internal_8540be8edee5bb1dab020f751f9be5d37ef88d89831e23e52e89b036adf42ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_30221e31f4f2b64ee918eac959920afa22c8e7ceabb86ad0a9743071182a6045->leave($__internal_30221e31f4f2b64ee918eac959920afa22c8e7ceabb86ad0a9743071182a6045_prof);

        
        $__internal_8540be8edee5bb1dab020f751f9be5d37ef88d89831e23e52e89b036adf42ae2->leave($__internal_8540be8edee5bb1dab020f751f9be5d37ef88d89831e23e52e89b036adf42ae2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_606a27b4b27f69bac48b3dedfb2b857bfe59a62f7cabf765b114ed9a31b18cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606a27b4b27f69bac48b3dedfb2b857bfe59a62f7cabf765b114ed9a31b18cb0->enter($__internal_606a27b4b27f69bac48b3dedfb2b857bfe59a62f7cabf765b114ed9a31b18cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6141cf239cf5c218ffd5698c906a472e1a759ef92b747656d1d3cfb5147a0c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6141cf239cf5c218ffd5698c906a472e1a759ef92b747656d1d3cfb5147a0c87->enter($__internal_6141cf239cf5c218ffd5698c906a472e1a759ef92b747656d1d3cfb5147a0c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6141cf239cf5c218ffd5698c906a472e1a759ef92b747656d1d3cfb5147a0c87->leave($__internal_6141cf239cf5c218ffd5698c906a472e1a759ef92b747656d1d3cfb5147a0c87_prof);

        
        $__internal_606a27b4b27f69bac48b3dedfb2b857bfe59a62f7cabf765b114ed9a31b18cb0->leave($__internal_606a27b4b27f69bac48b3dedfb2b857bfe59a62f7cabf765b114ed9a31b18cb0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6774d3508d672eb125812967b3cce3cf216e1d7fbbc18009551870bd2e5dd0f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6774d3508d672eb125812967b3cce3cf216e1d7fbbc18009551870bd2e5dd0f1->enter($__internal_6774d3508d672eb125812967b3cce3cf216e1d7fbbc18009551870bd2e5dd0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_864eb427c8e4c196f036a84818ee0e76f7ba3f30a5dfe4e38ea5fd0c0b2b87e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864eb427c8e4c196f036a84818ee0e76f7ba3f30a5dfe4e38ea5fd0c0b2b87e5->enter($__internal_864eb427c8e4c196f036a84818ee0e76f7ba3f30a5dfe4e38ea5fd0c0b2b87e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_864eb427c8e4c196f036a84818ee0e76f7ba3f30a5dfe4e38ea5fd0c0b2b87e5->leave($__internal_864eb427c8e4c196f036a84818ee0e76f7ba3f30a5dfe4e38ea5fd0c0b2b87e5_prof);

        
        $__internal_6774d3508d672eb125812967b3cce3cf216e1d7fbbc18009551870bd2e5dd0f1->leave($__internal_6774d3508d672eb125812967b3cce3cf216e1d7fbbc18009551870bd2e5dd0f1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbcd7934deb7064249ff4fd73ee5cd7556c8e88d53b58de249174ec0843b0f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbcd7934deb7064249ff4fd73ee5cd7556c8e88d53b58de249174ec0843b0f8b->enter($__internal_fbcd7934deb7064249ff4fd73ee5cd7556c8e88d53b58de249174ec0843b0f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_483632e4c8f12febd192087403b393a74270281390a534438fd59cd3b9ab4a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483632e4c8f12febd192087403b393a74270281390a534438fd59cd3b9ab4a23->enter($__internal_483632e4c8f12febd192087403b393a74270281390a534438fd59cd3b9ab4a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_483632e4c8f12febd192087403b393a74270281390a534438fd59cd3b9ab4a23->leave($__internal_483632e4c8f12febd192087403b393a74270281390a534438fd59cd3b9ab4a23_prof);

        
        $__internal_fbcd7934deb7064249ff4fd73ee5cd7556c8e88d53b58de249174ec0843b0f8b->leave($__internal_fbcd7934deb7064249ff4fd73ee5cd7556c8e88d53b58de249174ec0843b0f8b_prof);

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
", "@Twig/layout.html.twig", "/home/doge/PTS/palr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
