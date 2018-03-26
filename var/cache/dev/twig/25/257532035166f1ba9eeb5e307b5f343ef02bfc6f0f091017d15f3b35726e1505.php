<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_2911652c367fa8c463fb5e758f16f977e427495afe595ef7f817423d0a9174a9 extends Twig_Template
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
        $__internal_82e1c179971a364affcafac2f34aae5199855f0d3969f1579606360b77e32de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e1c179971a364affcafac2f34aae5199855f0d3969f1579606360b77e32de3->enter($__internal_82e1c179971a364affcafac2f34aae5199855f0d3969f1579606360b77e32de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a36f6159e88fb5e6a1e2b8c5632053ad0232021926aba67a3e35f7ee702daa38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36f6159e88fb5e6a1e2b8c5632053ad0232021926aba67a3e35f7ee702daa38->enter($__internal_a36f6159e88fb5e6a1e2b8c5632053ad0232021926aba67a3e35f7ee702daa38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_82e1c179971a364affcafac2f34aae5199855f0d3969f1579606360b77e32de3->leave($__internal_82e1c179971a364affcafac2f34aae5199855f0d3969f1579606360b77e32de3_prof);

        
        $__internal_a36f6159e88fb5e6a1e2b8c5632053ad0232021926aba67a3e35f7ee702daa38->leave($__internal_a36f6159e88fb5e6a1e2b8c5632053ad0232021926aba67a3e35f7ee702daa38_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
