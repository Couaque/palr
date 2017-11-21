<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_a85383320bb08d80f4fc62208e09cc16e67e6ac9f16c052e59e194e227b77f2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02a4743f66b4873de540fcf5ff69ada54aa98ac090759c0dbf31f28b6c98d9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a4743f66b4873de540fcf5ff69ada54aa98ac090759c0dbf31f28b6c98d9bf->enter($__internal_02a4743f66b4873de540fcf5ff69ada54aa98ac090759c0dbf31f28b6c98d9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        $__internal_f4d731c646a178a2073baa7e6fe17a9cb1a27ea757f5cdaee76b868a458c92c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d731c646a178a2073baa7e6fe17a9cb1a27ea757f5cdaee76b868a458c92c3->enter($__internal_f4d731c646a178a2073baa7e6fe17a9cb1a27ea757f5cdaee76b868a458c92c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_02a4743f66b4873de540fcf5ff69ada54aa98ac090759c0dbf31f28b6c98d9bf->leave($__internal_02a4743f66b4873de540fcf5ff69ada54aa98ac090759c0dbf31f28b6c98d9bf_prof);

        
        $__internal_f4d731c646a178a2073baa7e6fe17a9cb1a27ea757f5cdaee76b868a458c92c3->leave($__internal_f4d731c646a178a2073baa7e6fe17a9cb1a27ea757f5cdaee76b868a458c92c3_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "FrontBundle:Default:index.html.twig", "/home/doge/PTS/PALR/palr/src/FrontBundle/Resources/views/Default/index.html.twig");
    }
}
