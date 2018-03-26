<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ac4d899aa45c8e04f11a0a37f3a572a06d5eda37db28656b55197b0a03d66249 extends Twig_Template
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
        $__internal_c3b43b2da4b4b1780db4fac58ddfd9bf3421b370950e1b8f257b8f5f2a9effc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b43b2da4b4b1780db4fac58ddfd9bf3421b370950e1b8f257b8f5f2a9effc9->enter($__internal_c3b43b2da4b4b1780db4fac58ddfd9bf3421b370950e1b8f257b8f5f2a9effc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f1f788e0dcbf7033d7a579dabfdefc417e54fc7ef7dbe497b4b353a7bc6502a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f788e0dcbf7033d7a579dabfdefc417e54fc7ef7dbe497b4b353a7bc6502a6->enter($__internal_f1f788e0dcbf7033d7a579dabfdefc417e54fc7ef7dbe497b4b353a7bc6502a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c3b43b2da4b4b1780db4fac58ddfd9bf3421b370950e1b8f257b8f5f2a9effc9->leave($__internal_c3b43b2da4b4b1780db4fac58ddfd9bf3421b370950e1b8f257b8f5f2a9effc9_prof);

        
        $__internal_f1f788e0dcbf7033d7a579dabfdefc417e54fc7ef7dbe497b4b353a7bc6502a6->leave($__internal_f1f788e0dcbf7033d7a579dabfdefc417e54fc7ef7dbe497b4b353a7bc6502a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
