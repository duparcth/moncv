<?php

/* @App/Loisirs/edit.html.twig */
class __TwigTemplate_e265960b58bda3fd4436534062616bf67923d9f0c1df0380654b23acdfbf3d35 extends Twig_Template
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
        $__internal_8ba2bd22f01a739127714f513edde237b0d0013089701ec095886acd69c3f413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba2bd22f01a739127714f513edde237b0d0013089701ec095886acd69c3f413->enter($__internal_8ba2bd22f01a739127714f513edde237b0d0013089701ec095886acd69c3f413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Loisirs/edit.html.twig"));

        $__internal_65f7a77a42f8f6b83ccfe85298000696670e8962ce3e79da43523eac2f0548bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f7a77a42f8f6b83ccfe85298000696670e8962ce3e79da43523eac2f0548bd->enter($__internal_65f7a77a42f8f6b83ccfe85298000696670e8962ce3e79da43523eac2f0548bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Loisirs/edit.html.twig"));

        // line 1
        echo "<html>
    <body>
        <h3>Edition d'un loisir</h3>
        ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validate_edit_loisir", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "getId", array(), "method")))));
        echo "
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </body>
</html>";
        
        $__internal_8ba2bd22f01a739127714f513edde237b0d0013089701ec095886acd69c3f413->leave($__internal_8ba2bd22f01a739127714f513edde237b0d0013089701ec095886acd69c3f413_prof);

        
        $__internal_65f7a77a42f8f6b83ccfe85298000696670e8962ce3e79da43523eac2f0548bd->leave($__internal_65f7a77a42f8f6b83ccfe85298000696670e8962ce3e79da43523eac2f0548bd_prof);

    }

    public function getTemplateName()
    {
        return "@App/Loisirs/edit.html.twig";
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
        <h3>Edition d'un loisir</h3>
        {{ form_start(form, {'action': path('validate_edit_loisir', {'id': entity.getId()}) }) }}
        {{ form(form) }}
    </body>
</html>", "@App/Loisirs/edit.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/Loisirs/edit.html.twig");
    }
}
