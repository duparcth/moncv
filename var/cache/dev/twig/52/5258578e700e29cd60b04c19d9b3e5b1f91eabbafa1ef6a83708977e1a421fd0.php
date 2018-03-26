<?php

/* @App/loisirs/create.html.twig */
class __TwigTemplate_74975345b4ffc9604eb0426b55c7b707657ab45bceebccbd72b03699af97faf1 extends Twig_Template
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
        $__internal_9954c51d98f1083248e08129b1efb5b46dbb07a169dfc71352195a374a22771e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9954c51d98f1083248e08129b1efb5b46dbb07a169dfc71352195a374a22771e->enter($__internal_9954c51d98f1083248e08129b1efb5b46dbb07a169dfc71352195a374a22771e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisirs/create.html.twig"));

        $__internal_61fe588f1602fb17363fce98c1d627c8df24088eecb17ee73ff5117a8a21e983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61fe588f1602fb17363fce98c1d627c8df24088eecb17ee73ff5117a8a21e983->enter($__internal_61fe588f1602fb17363fce98c1d627c8df24088eecb17ee73ff5117a8a21e983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisirs/create.html.twig"));

        // line 1
        echo "<html>
    <body>
        <h3>Création d'un nouveau loisir</h3>
        ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validate_create_loisir")));
        echo "
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </body>
</html>";
        
        $__internal_9954c51d98f1083248e08129b1efb5b46dbb07a169dfc71352195a374a22771e->leave($__internal_9954c51d98f1083248e08129b1efb5b46dbb07a169dfc71352195a374a22771e_prof);

        
        $__internal_61fe588f1602fb17363fce98c1d627c8df24088eecb17ee73ff5117a8a21e983->leave($__internal_61fe588f1602fb17363fce98c1d627c8df24088eecb17ee73ff5117a8a21e983_prof);

    }

    public function getTemplateName()
    {
        return "@App/loisirs/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <body>
        <h3>Création d'un nouveau loisir</h3>
        {{ form_start(form, {'action': path('validate_create_loisir') }) }}
        {{ form(form) }}
    </body>
</html>", "@App/loisirs/create.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/loisirs/create.html.twig");
    }
}
