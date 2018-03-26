<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_39452b50f6ce2f90ce7e24558ebe75bdd1004890a919d234276f6f358c845606 extends Twig_Template
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
        $__internal_aa5bbc8429d57b1bc6a9541729ebd9220958356471044e8a0a7be0955c0ba9c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5bbc8429d57b1bc6a9541729ebd9220958356471044e8a0a7be0955c0ba9c7->enter($__internal_aa5bbc8429d57b1bc6a9541729ebd9220958356471044e8a0a7be0955c0ba9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_4da2a3eaf5a47c9431ac94dbddb2742981a0ae35b584a049b0e5d9309ac9709f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da2a3eaf5a47c9431ac94dbddb2742981a0ae35b584a049b0e5d9309ac9709f->enter($__internal_4da2a3eaf5a47c9431ac94dbddb2742981a0ae35b584a049b0e5d9309ac9709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_aa5bbc8429d57b1bc6a9541729ebd9220958356471044e8a0a7be0955c0ba9c7->leave($__internal_aa5bbc8429d57b1bc6a9541729ebd9220958356471044e8a0a7be0955c0ba9c7_prof);

        
        $__internal_4da2a3eaf5a47c9431ac94dbddb2742981a0ae35b584a049b0e5d9309ac9709f->leave($__internal_4da2a3eaf5a47c9431ac94dbddb2742981a0ae35b584a049b0e5d9309ac9709f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
