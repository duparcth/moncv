<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0c33a369ff4379e84e79ca047a9bd0f8d25a0a2094943a9e180983137ce969ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_cadbceaab4a2c625646394affbdf00f471f09b7a96a1988b4e4b24d3fcfcbf87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cadbceaab4a2c625646394affbdf00f471f09b7a96a1988b4e4b24d3fcfcbf87->enter($__internal_cadbceaab4a2c625646394affbdf00f471f09b7a96a1988b4e4b24d3fcfcbf87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_64132897aea3b7814a0e55f1eaa65f03055421ef8230a9758134287a0c4e5c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64132897aea3b7814a0e55f1eaa65f03055421ef8230a9758134287a0c4e5c83->enter($__internal_64132897aea3b7814a0e55f1eaa65f03055421ef8230a9758134287a0c4e5c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cadbceaab4a2c625646394affbdf00f471f09b7a96a1988b4e4b24d3fcfcbf87->leave($__internal_cadbceaab4a2c625646394affbdf00f471f09b7a96a1988b4e4b24d3fcfcbf87_prof);

        
        $__internal_64132897aea3b7814a0e55f1eaa65f03055421ef8230a9758134287a0c4e5c83->leave($__internal_64132897aea3b7814a0e55f1eaa65f03055421ef8230a9758134287a0c4e5c83_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_18be0b8c427924f54740b29cc70db3959bf17a31605f1560e747678258ce030b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18be0b8c427924f54740b29cc70db3959bf17a31605f1560e747678258ce030b->enter($__internal_18be0b8c427924f54740b29cc70db3959bf17a31605f1560e747678258ce030b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b1fb3a56903201ace02d9a48eca8e99547aafafe3d95239480ef3b1d483544f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fb3a56903201ace02d9a48eca8e99547aafafe3d95239480ef3b1d483544f1->enter($__internal_b1fb3a56903201ace02d9a48eca8e99547aafafe3d95239480ef3b1d483544f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b1fb3a56903201ace02d9a48eca8e99547aafafe3d95239480ef3b1d483544f1->leave($__internal_b1fb3a56903201ace02d9a48eca8e99547aafafe3d95239480ef3b1d483544f1_prof);

        
        $__internal_18be0b8c427924f54740b29cc70db3959bf17a31605f1560e747678258ce030b->leave($__internal_18be0b8c427924f54740b29cc70db3959bf17a31605f1560e747678258ce030b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_75669db94b9aac632b9e9d2e72e5912fd41982f4995ccb79f2999a9fefe0f94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75669db94b9aac632b9e9d2e72e5912fd41982f4995ccb79f2999a9fefe0f94a->enter($__internal_75669db94b9aac632b9e9d2e72e5912fd41982f4995ccb79f2999a9fefe0f94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f9eccdf24e728a62c9ae53a67f7dcf1112e4989c26ed4a47b85d54937755adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9eccdf24e728a62c9ae53a67f7dcf1112e4989c26ed4a47b85d54937755adc->enter($__internal_1f9eccdf24e728a62c9ae53a67f7dcf1112e4989c26ed4a47b85d54937755adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1f9eccdf24e728a62c9ae53a67f7dcf1112e4989c26ed4a47b85d54937755adc->leave($__internal_1f9eccdf24e728a62c9ae53a67f7dcf1112e4989c26ed4a47b85d54937755adc_prof);

        
        $__internal_75669db94b9aac632b9e9d2e72e5912fd41982f4995ccb79f2999a9fefe0f94a->leave($__internal_75669db94b9aac632b9e9d2e72e5912fd41982f4995ccb79f2999a9fefe0f94a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
