<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_ed3b3db883f01d8d6fe5df2e879bf1fde8ffd89a675275dc3c1b18da7a4ee2df extends Twig_Template
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
        $__internal_a07c313c55336cd078fc9c9c595d30ee07390e9c80ee7abf19aab63310daa63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07c313c55336cd078fc9c9c595d30ee07390e9c80ee7abf19aab63310daa63a->enter($__internal_a07c313c55336cd078fc9c9c595d30ee07390e9c80ee7abf19aab63310daa63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_02cd91e2739062bf514138be9ccb1831493e3ce287a3725d73d4da3ee6a4758d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02cd91e2739062bf514138be9ccb1831493e3ce287a3725d73d4da3ee6a4758d->enter($__internal_02cd91e2739062bf514138be9ccb1831493e3ce287a3725d73d4da3ee6a4758d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_a07c313c55336cd078fc9c9c595d30ee07390e9c80ee7abf19aab63310daa63a->leave($__internal_a07c313c55336cd078fc9c9c595d30ee07390e9c80ee7abf19aab63310daa63a_prof);

        
        $__internal_02cd91e2739062bf514138be9ccb1831493e3ce287a3725d73d4da3ee6a4758d->leave($__internal_02cd91e2739062bf514138be9ccb1831493e3ce287a3725d73d4da3ee6a4758d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
