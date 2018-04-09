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
        $__internal_9811436922553cffcb7070622cc71a19f33b45e27aadd7ae92e70034bfa592a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9811436922553cffcb7070622cc71a19f33b45e27aadd7ae92e70034bfa592a4->enter($__internal_9811436922553cffcb7070622cc71a19f33b45e27aadd7ae92e70034bfa592a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisirs/create.html.twig"));

        $__internal_e6d3a74efa8db10e633590a6ce89516f4ff0a8f1d6bfe47100c70549f87dd6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d3a74efa8db10e633590a6ce89516f4ff0a8f1d6bfe47100c70549f87dd6df->enter($__internal_e6d3a74efa8db10e633590a6ce89516f4ff0a8f1d6bfe47100c70549f87dd6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisirs/create.html.twig"));

        // line 1
        echo "<html><body><h3>Creation loisir ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "getName", array(), "method"), "html", null, true);
        echo " </h3>
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validate_create_loisir")));
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
</body>
</html>
";
        
        $__internal_9811436922553cffcb7070622cc71a19f33b45e27aadd7ae92e70034bfa592a4->leave($__internal_9811436922553cffcb7070622cc71a19f33b45e27aadd7ae92e70034bfa592a4_prof);

        
        $__internal_e6d3a74efa8db10e633590a6ce89516f4ff0a8f1d6bfe47100c70549f87dd6df->leave($__internal_e6d3a74efa8db10e633590a6ce89516f4ff0a8f1d6bfe47100c70549f87dd6df_prof);

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
        return array (  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html><body><h3>Creation loisir {{ entity.getName() }} </h3>
{{ form_start(form, {'action': path('validate_create_loisir') }) }}
{{form(form)}}
</body>
</html>
", "@App/loisirs/create.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/loisirs/create.html.twig");
    }
}
