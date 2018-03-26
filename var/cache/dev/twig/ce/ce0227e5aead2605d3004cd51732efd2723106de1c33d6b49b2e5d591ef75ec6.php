<?php

/* @App/Loisirs/create.html.twig */
class __TwigTemplate_ccdd92b21d8240b7f5a7759323352b33a4c3b60ea212946c0bb36ff25650bb97 extends Twig_Template
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
        $__internal_90577e02e40a9cb77e8c2a0b22e29925f020db91fda1195e99ce8371764b3dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90577e02e40a9cb77e8c2a0b22e29925f020db91fda1195e99ce8371764b3dd9->enter($__internal_90577e02e40a9cb77e8c2a0b22e29925f020db91fda1195e99ce8371764b3dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Loisirs/create.html.twig"));

        $__internal_f62ab8324bc4da66d28b125df27d533e3492c73d0f7489fc3a43a653b12b866d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62ab8324bc4da66d28b125df27d533e3492c73d0f7489fc3a43a653b12b866d->enter($__internal_f62ab8324bc4da66d28b125df27d533e3492c73d0f7489fc3a43a653b12b866d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Loisirs/create.html.twig"));

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
        
        $__internal_90577e02e40a9cb77e8c2a0b22e29925f020db91fda1195e99ce8371764b3dd9->leave($__internal_90577e02e40a9cb77e8c2a0b22e29925f020db91fda1195e99ce8371764b3dd9_prof);

        
        $__internal_f62ab8324bc4da66d28b125df27d533e3492c73d0f7489fc3a43a653b12b866d->leave($__internal_f62ab8324bc4da66d28b125df27d533e3492c73d0f7489fc3a43a653b12b866d_prof);

    }

    public function getTemplateName()
    {
        return "@App/Loisirs/create.html.twig";
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
</html>", "@App/Loisirs/create.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/Loisirs/create.html.twig");
    }
}
