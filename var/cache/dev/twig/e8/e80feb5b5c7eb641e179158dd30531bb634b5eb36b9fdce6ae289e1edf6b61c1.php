<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_aa83498be161242a9f91d6a22df145b34e65dacd1633e3e28a2baeb8081b4468 extends Twig_Template
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
        $__internal_a8058dde86b30539740c24162369aacc377b34f93fca61932118b80dc2f7dab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8058dde86b30539740c24162369aacc377b34f93fca61932118b80dc2f7dab9->enter($__internal_a8058dde86b30539740c24162369aacc377b34f93fca61932118b80dc2f7dab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_91cbb9b9c9ec01226ab21289e314e61d7bd108cce1ccedeb338f91502cee49cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91cbb9b9c9ec01226ab21289e314e61d7bd108cce1ccedeb338f91502cee49cc->enter($__internal_91cbb9b9c9ec01226ab21289e314e61d7bd108cce1ccedeb338f91502cee49cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a8058dde86b30539740c24162369aacc377b34f93fca61932118b80dc2f7dab9->leave($__internal_a8058dde86b30539740c24162369aacc377b34f93fca61932118b80dc2f7dab9_prof);

        
        $__internal_91cbb9b9c9ec01226ab21289e314e61d7bd108cce1ccedeb338f91502cee49cc->leave($__internal_91cbb9b9c9ec01226ab21289e314e61d7bd108cce1ccedeb338f91502cee49cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
