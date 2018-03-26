<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_693ce7bb96d9146ba67ab268f7a81cdf4f1608e56b661641748f705c7b7a2e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec80f3dc57194b3d7d9355a20b65db82d96555c8d64f5ca88c25c35c3ab1d1be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec80f3dc57194b3d7d9355a20b65db82d96555c8d64f5ca88c25c35c3ab1d1be->enter($__internal_ec80f3dc57194b3d7d9355a20b65db82d96555c8d64f5ca88c25c35c3ab1d1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_df5bec1a9e6dd0c5a80da800189ffc9e42e7e9bfd1aa0d58b47da739d998e781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5bec1a9e6dd0c5a80da800189ffc9e42e7e9bfd1aa0d58b47da739d998e781->enter($__internal_df5bec1a9e6dd0c5a80da800189ffc9e42e7e9bfd1aa0d58b47da739d998e781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ec80f3dc57194b3d7d9355a20b65db82d96555c8d64f5ca88c25c35c3ab1d1be->leave($__internal_ec80f3dc57194b3d7d9355a20b65db82d96555c8d64f5ca88c25c35c3ab1d1be_prof);

        
        $__internal_df5bec1a9e6dd0c5a80da800189ffc9e42e7e9bfd1aa0d58b47da739d998e781->leave($__internal_df5bec1a9e6dd0c5a80da800189ffc9e42e7e9bfd1aa0d58b47da739d998e781_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_501f618f415ccef9821c760e05fe1a56ef3043f5313c6c557e412b069d27d645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501f618f415ccef9821c760e05fe1a56ef3043f5313c6c557e412b069d27d645->enter($__internal_501f618f415ccef9821c760e05fe1a56ef3043f5313c6c557e412b069d27d645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_742e803593796fa8bcdf93e89178284a41cc6099241ff2c022ecd5a51de3db03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742e803593796fa8bcdf93e89178284a41cc6099241ff2c022ecd5a51de3db03->enter($__internal_742e803593796fa8bcdf93e89178284a41cc6099241ff2c022ecd5a51de3db03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_742e803593796fa8bcdf93e89178284a41cc6099241ff2c022ecd5a51de3db03->leave($__internal_742e803593796fa8bcdf93e89178284a41cc6099241ff2c022ecd5a51de3db03_prof);

        
        $__internal_501f618f415ccef9821c760e05fe1a56ef3043f5313c6c557e412b069d27d645->leave($__internal_501f618f415ccef9821c760e05fe1a56ef3043f5313c6c557e412b069d27d645_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
