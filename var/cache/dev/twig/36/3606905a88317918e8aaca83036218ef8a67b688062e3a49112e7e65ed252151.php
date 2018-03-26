<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55a8c4ddea2963984cecfecf5de1dad704287671d5151def095486d4831cdfaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a8c4ddea2963984cecfecf5de1dad704287671d5151def095486d4831cdfaf->enter($__internal_55a8c4ddea2963984cecfecf5de1dad704287671d5151def095486d4831cdfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_91b2d06d23dcedb906d6147a5dd5919a947ea5c4b6f67365b828cd488a1a5127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b2d06d23dcedb906d6147a5dd5919a947ea5c4b6f67365b828cd488a1a5127->enter($__internal_91b2d06d23dcedb906d6147a5dd5919a947ea5c4b6f67365b828cd488a1a5127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55a8c4ddea2963984cecfecf5de1dad704287671d5151def095486d4831cdfaf->leave($__internal_55a8c4ddea2963984cecfecf5de1dad704287671d5151def095486d4831cdfaf_prof);

        
        $__internal_91b2d06d23dcedb906d6147a5dd5919a947ea5c4b6f67365b828cd488a1a5127->leave($__internal_91b2d06d23dcedb906d6147a5dd5919a947ea5c4b6f67365b828cd488a1a5127_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82c6111c8a389f2dea06a20a430bc4f68656ccf7b10a7e733e4cbb37ff7cbc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c6111c8a389f2dea06a20a430bc4f68656ccf7b10a7e733e4cbb37ff7cbc6f->enter($__internal_82c6111c8a389f2dea06a20a430bc4f68656ccf7b10a7e733e4cbb37ff7cbc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91155527df6ec17cbe20f0ad40c0e9bfb5f65a18379f5ecec952b4191fc93a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91155527df6ec17cbe20f0ad40c0e9bfb5f65a18379f5ecec952b4191fc93a8c->enter($__internal_91155527df6ec17cbe20f0ad40c0e9bfb5f65a18379f5ecec952b4191fc93a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_91155527df6ec17cbe20f0ad40c0e9bfb5f65a18379f5ecec952b4191fc93a8c->leave($__internal_91155527df6ec17cbe20f0ad40c0e9bfb5f65a18379f5ecec952b4191fc93a8c_prof);

        
        $__internal_82c6111c8a389f2dea06a20a430bc4f68656ccf7b10a7e733e4cbb37ff7cbc6f->leave($__internal_82c6111c8a389f2dea06a20a430bc4f68656ccf7b10a7e733e4cbb37ff7cbc6f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_078efc833fdf804578a00e2daa6e10f5ecc892c14cef88a2414605bd5f4e456e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078efc833fdf804578a00e2daa6e10f5ecc892c14cef88a2414605bd5f4e456e->enter($__internal_078efc833fdf804578a00e2daa6e10f5ecc892c14cef88a2414605bd5f4e456e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_19a07c9b229b1eec230eca4c0ee9376dd572e828a57ac4a9a0918d7a7db74204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a07c9b229b1eec230eca4c0ee9376dd572e828a57ac4a9a0918d7a7db74204->enter($__internal_19a07c9b229b1eec230eca4c0ee9376dd572e828a57ac4a9a0918d7a7db74204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_19a07c9b229b1eec230eca4c0ee9376dd572e828a57ac4a9a0918d7a7db74204->leave($__internal_19a07c9b229b1eec230eca4c0ee9376dd572e828a57ac4a9a0918d7a7db74204_prof);

        
        $__internal_078efc833fdf804578a00e2daa6e10f5ecc892c14cef88a2414605bd5f4e456e->leave($__internal_078efc833fdf804578a00e2daa6e10f5ecc892c14cef88a2414605bd5f4e456e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76e06692521c5dec3d6979c685be61314c963a1b61f33853004ffe5547a9f348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e06692521c5dec3d6979c685be61314c963a1b61f33853004ffe5547a9f348->enter($__internal_76e06692521c5dec3d6979c685be61314c963a1b61f33853004ffe5547a9f348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_44cd1fc4148d78d48cbe4fb9293c11d95762faf6d3f28f2c2ff620188527c7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cd1fc4148d78d48cbe4fb9293c11d95762faf6d3f28f2c2ff620188527c7c8->enter($__internal_44cd1fc4148d78d48cbe4fb9293c11d95762faf6d3f28f2c2ff620188527c7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_44cd1fc4148d78d48cbe4fb9293c11d95762faf6d3f28f2c2ff620188527c7c8->leave($__internal_44cd1fc4148d78d48cbe4fb9293c11d95762faf6d3f28f2c2ff620188527c7c8_prof);

        
        $__internal_76e06692521c5dec3d6979c685be61314c963a1b61f33853004ffe5547a9f348->leave($__internal_76e06692521c5dec3d6979c685be61314c963a1b61f33853004ffe5547a9f348_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
