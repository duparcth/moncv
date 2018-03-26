<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_22b1ee51354d38bbec455b13ce2f0c8f15d791a7a7830730ca0c6e67d5856847 extends Twig_Template
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
        $__internal_10bd22a1b9c6b7cda8afc46d6faa2d6803723b06e56881deca4860b18a224f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10bd22a1b9c6b7cda8afc46d6faa2d6803723b06e56881deca4860b18a224f74->enter($__internal_10bd22a1b9c6b7cda8afc46d6faa2d6803723b06e56881deca4860b18a224f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_cbf40e31ad649400a473c96bf217111a22bdedeb236ab2c7de50b0e5114224db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf40e31ad649400a473c96bf217111a22bdedeb236ab2c7de50b0e5114224db->enter($__internal_cbf40e31ad649400a473c96bf217111a22bdedeb236ab2c7de50b0e5114224db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_10bd22a1b9c6b7cda8afc46d6faa2d6803723b06e56881deca4860b18a224f74->leave($__internal_10bd22a1b9c6b7cda8afc46d6faa2d6803723b06e56881deca4860b18a224f74_prof);

        
        $__internal_cbf40e31ad649400a473c96bf217111a22bdedeb236ab2c7de50b0e5114224db->leave($__internal_cbf40e31ad649400a473c96bf217111a22bdedeb236ab2c7de50b0e5114224db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
