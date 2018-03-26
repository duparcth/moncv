<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_47253a0760319c2c9cf444bba706c07dc8eabaf3256444a8438258b724cc385c extends Twig_Template
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
        $__internal_97b904eee17b521a8426078e450ebf9c89ab5d066f7fa2dc21dc9eb9210c9d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b904eee17b521a8426078e450ebf9c89ab5d066f7fa2dc21dc9eb9210c9d1d->enter($__internal_97b904eee17b521a8426078e450ebf9c89ab5d066f7fa2dc21dc9eb9210c9d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_34bbc45822e4a304533b50c1380ac93c52689719200e24cdcee76591dcd3b89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34bbc45822e4a304533b50c1380ac93c52689719200e24cdcee76591dcd3b89d->enter($__internal_34bbc45822e4a304533b50c1380ac93c52689719200e24cdcee76591dcd3b89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_97b904eee17b521a8426078e450ebf9c89ab5d066f7fa2dc21dc9eb9210c9d1d->leave($__internal_97b904eee17b521a8426078e450ebf9c89ab5d066f7fa2dc21dc9eb9210c9d1d_prof);

        
        $__internal_34bbc45822e4a304533b50c1380ac93c52689719200e24cdcee76591dcd3b89d->leave($__internal_34bbc45822e4a304533b50c1380ac93c52689719200e24cdcee76591dcd3b89d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
