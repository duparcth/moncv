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
        $__internal_17163374c027c4e213fbc332f7624e13c4b9f7f6d02cf730f63447ebab2b7f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17163374c027c4e213fbc332f7624e13c4b9f7f6d02cf730f63447ebab2b7f88->enter($__internal_17163374c027c4e213fbc332f7624e13c4b9f7f6d02cf730f63447ebab2b7f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisirs/edit.html.twig"));

        $__internal_e1089e17e52adcf5847a6d3baa51023c02c2a02ce9a0b272e9a50ad5c4d4a4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1089e17e52adcf5847a6d3baa51023c02c2a02ce9a0b272e9a50ad5c4d4a4a4->enter($__internal_e1089e17e52adcf5847a6d3baa51023c02c2a02ce9a0b272e9a50ad5c4d4a4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisirs/edit.html.twig"));

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
        
        $__internal_17163374c027c4e213fbc332f7624e13c4b9f7f6d02cf730f63447ebab2b7f88->leave($__internal_17163374c027c4e213fbc332f7624e13c4b9f7f6d02cf730f63447ebab2b7f88_prof);

        
        $__internal_e1089e17e52adcf5847a6d3baa51023c02c2a02ce9a0b272e9a50ad5c4d4a4a4->leave($__internal_e1089e17e52adcf5847a6d3baa51023c02c2a02ce9a0b272e9a50ad5c4d4a4a4_prof);

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
