<?php

/* @App/loisirs/edit.html.twig */
class __TwigTemplate_92f38526162e8b5676c4242cc8a05be13c89206c04caf836e3326b9c9870e51e extends Twig_Template
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
        $__internal_3bc81728a6bb964d5eb2ebe040fa301e3ae5ee94f329d01b6077451fced02f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc81728a6bb964d5eb2ebe040fa301e3ae5ee94f329d01b6077451fced02f64->enter($__internal_3bc81728a6bb964d5eb2ebe040fa301e3ae5ee94f329d01b6077451fced02f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisirs/edit.html.twig"));

        $__internal_8cede8f815d31fe1c820809fe56ae42ab8c52c02a88a83b34b89b33e87993036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cede8f815d31fe1c820809fe56ae42ab8c52c02a88a83b34b89b33e87993036->enter($__internal_8cede8f815d31fe1c820809fe56ae42ab8c52c02a88a83b34b89b33e87993036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisirs/edit.html.twig"));

        // line 1
        echo "<html><body><h3>Edition loisir ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "getName", array(), "method"), "html", null, true);
        echo " </h3>
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validate_edit_loisir", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "getId", array(), "method")))));
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
</body>
</html>
";
        
        $__internal_3bc81728a6bb964d5eb2ebe040fa301e3ae5ee94f329d01b6077451fced02f64->leave($__internal_3bc81728a6bb964d5eb2ebe040fa301e3ae5ee94f329d01b6077451fced02f64_prof);

        
        $__internal_8cede8f815d31fe1c820809fe56ae42ab8c52c02a88a83b34b89b33e87993036->leave($__internal_8cede8f815d31fe1c820809fe56ae42ab8c52c02a88a83b34b89b33e87993036_prof);

    }

    public function getTemplateName()
    {
        return "@App/loisirs/edit.html.twig";
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
        return new Twig_Source("<html><body><h3>Edition loisir {{ entity.getName() }} </h3>
{{ form_start(form, {'action': path('validate_edit_loisir', {'id': entity.getId() }) }) }}
{{form(form)}}
</body>
</html>
", "@App/loisirs/edit.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/loisirs/edit.html.twig");
    }
}
