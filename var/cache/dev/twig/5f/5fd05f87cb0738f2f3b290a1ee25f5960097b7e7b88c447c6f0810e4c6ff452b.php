<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_9c85e1c6dc6cd7fd4d29b0657daf3d563e349ecb6f696cf03a9b48e4804332a5 extends Twig_Template
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
        $__internal_ec8ee8b64954ac9f4de835a448abe87207bdbc4d2ff812cb79427096baa1a091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8ee8b64954ac9f4de835a448abe87207bdbc4d2ff812cb79427096baa1a091->enter($__internal_ec8ee8b64954ac9f4de835a448abe87207bdbc4d2ff812cb79427096baa1a091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_d0bfa5b0a39e8d507d0b1f1b1d487d5acaf3f17e7826156ec5b0d50342b9244b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bfa5b0a39e8d507d0b1f1b1d487d5acaf3f17e7826156ec5b0d50342b9244b->enter($__internal_d0bfa5b0a39e8d507d0b1f1b1d487d5acaf3f17e7826156ec5b0d50342b9244b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ec8ee8b64954ac9f4de835a448abe87207bdbc4d2ff812cb79427096baa1a091->leave($__internal_ec8ee8b64954ac9f4de835a448abe87207bdbc4d2ff812cb79427096baa1a091_prof);

        
        $__internal_d0bfa5b0a39e8d507d0b1f1b1d487d5acaf3f17e7826156ec5b0d50342b9244b->leave($__internal_d0bfa5b0a39e8d507d0b1f1b1d487d5acaf3f17e7826156ec5b0d50342b9244b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
