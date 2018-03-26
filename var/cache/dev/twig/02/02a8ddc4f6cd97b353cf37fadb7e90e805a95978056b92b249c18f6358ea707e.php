<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8ef342efd341b9db32993075d5f34bd1be00e59b5df52a881af64cf6a9c6b9dd extends Twig_Template
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
        $__internal_c6559fa9a650ca03604d0f67ef2c41de7c812accfe681520cb19a2cb83a86c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6559fa9a650ca03604d0f67ef2c41de7c812accfe681520cb19a2cb83a86c44->enter($__internal_c6559fa9a650ca03604d0f67ef2c41de7c812accfe681520cb19a2cb83a86c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_052b0662719bee6a79b53724b22a584898dcae750f6098dd667b446cf1fbeef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052b0662719bee6a79b53724b22a584898dcae750f6098dd667b446cf1fbeef1->enter($__internal_052b0662719bee6a79b53724b22a584898dcae750f6098dd667b446cf1fbeef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c6559fa9a650ca03604d0f67ef2c41de7c812accfe681520cb19a2cb83a86c44->leave($__internal_c6559fa9a650ca03604d0f67ef2c41de7c812accfe681520cb19a2cb83a86c44_prof);

        
        $__internal_052b0662719bee6a79b53724b22a584898dcae750f6098dd667b446cf1fbeef1->leave($__internal_052b0662719bee6a79b53724b22a584898dcae750f6098dd667b446cf1fbeef1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
