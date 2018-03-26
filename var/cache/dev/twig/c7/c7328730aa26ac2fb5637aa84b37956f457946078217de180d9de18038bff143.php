<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_440052636673501027f2ccee8006eb2f949d3bfff4de277fc05e94b3b877842d extends Twig_Template
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
        $__internal_7f98f240644584d86ae515640aa05140e2c40a491f060776ac5243d3cb0ffdc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f98f240644584d86ae515640aa05140e2c40a491f060776ac5243d3cb0ffdc7->enter($__internal_7f98f240644584d86ae515640aa05140e2c40a491f060776ac5243d3cb0ffdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_02a4ab8212cd462cfb76d2f7972f252618513e35bb46da5547f38bfdcddb171f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a4ab8212cd462cfb76d2f7972f252618513e35bb46da5547f38bfdcddb171f->enter($__internal_02a4ab8212cd462cfb76d2f7972f252618513e35bb46da5547f38bfdcddb171f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7f98f240644584d86ae515640aa05140e2c40a491f060776ac5243d3cb0ffdc7->leave($__internal_7f98f240644584d86ae515640aa05140e2c40a491f060776ac5243d3cb0ffdc7_prof);

        
        $__internal_02a4ab8212cd462cfb76d2f7972f252618513e35bb46da5547f38bfdcddb171f->leave($__internal_02a4ab8212cd462cfb76d2f7972f252618513e35bb46da5547f38bfdcddb171f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
