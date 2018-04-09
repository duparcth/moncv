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
        $__internal_e46651bf542e5a389c42478b91e3f13eb9ce0cb8b1657e135a05d57de78e6348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46651bf542e5a389c42478b91e3f13eb9ce0cb8b1657e135a05d57de78e6348->enter($__internal_e46651bf542e5a389c42478b91e3f13eb9ce0cb8b1657e135a05d57de78e6348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d9b96be040cc37d9436108854687a94092b13c4acb668b05826ccd230ded3657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b96be040cc37d9436108854687a94092b13c4acb668b05826ccd230ded3657->enter($__internal_d9b96be040cc37d9436108854687a94092b13c4acb668b05826ccd230ded3657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e46651bf542e5a389c42478b91e3f13eb9ce0cb8b1657e135a05d57de78e6348->leave($__internal_e46651bf542e5a389c42478b91e3f13eb9ce0cb8b1657e135a05d57de78e6348_prof);

        
        $__internal_d9b96be040cc37d9436108854687a94092b13c4acb668b05826ccd230ded3657->leave($__internal_d9b96be040cc37d9436108854687a94092b13c4acb668b05826ccd230ded3657_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c0b5bbac43d72c25a535ad3e0913eb012e53a38e1555837343f2b3486f9b85cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b5bbac43d72c25a535ad3e0913eb012e53a38e1555837343f2b3486f9b85cb->enter($__internal_c0b5bbac43d72c25a535ad3e0913eb012e53a38e1555837343f2b3486f9b85cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_55befc49c3644396fa2a0bf37b1283475ad78cfa1fa8c3cf9423b982892bf8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55befc49c3644396fa2a0bf37b1283475ad78cfa1fa8c3cf9423b982892bf8d3->enter($__internal_55befc49c3644396fa2a0bf37b1283475ad78cfa1fa8c3cf9423b982892bf8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_55befc49c3644396fa2a0bf37b1283475ad78cfa1fa8c3cf9423b982892bf8d3->leave($__internal_55befc49c3644396fa2a0bf37b1283475ad78cfa1fa8c3cf9423b982892bf8d3_prof);

        
        $__internal_c0b5bbac43d72c25a535ad3e0913eb012e53a38e1555837343f2b3486f9b85cb->leave($__internal_c0b5bbac43d72c25a535ad3e0913eb012e53a38e1555837343f2b3486f9b85cb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b874eabf80fc511d73bab9fb66119ec0715162e41a658892d44737ec8d5c2e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b874eabf80fc511d73bab9fb66119ec0715162e41a658892d44737ec8d5c2e99->enter($__internal_b874eabf80fc511d73bab9fb66119ec0715162e41a658892d44737ec8d5c2e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d9addafe0807479331363f581e29231f45d642a77c94fc6418c77ed590a21ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9addafe0807479331363f581e29231f45d642a77c94fc6418c77ed590a21ad8->enter($__internal_d9addafe0807479331363f581e29231f45d642a77c94fc6418c77ed590a21ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d9addafe0807479331363f581e29231f45d642a77c94fc6418c77ed590a21ad8->leave($__internal_d9addafe0807479331363f581e29231f45d642a77c94fc6418c77ed590a21ad8_prof);

        
        $__internal_b874eabf80fc511d73bab9fb66119ec0715162e41a658892d44737ec8d5c2e99->leave($__internal_b874eabf80fc511d73bab9fb66119ec0715162e41a658892d44737ec8d5c2e99_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e82c307dd3479ddfbc2176c8301ee461005a45dd4c813c9cbde172522ba7afb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82c307dd3479ddfbc2176c8301ee461005a45dd4c813c9cbde172522ba7afb3->enter($__internal_e82c307dd3479ddfbc2176c8301ee461005a45dd4c813c9cbde172522ba7afb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8440a94b1d05553075a03fb69ca7e754fcef6ecf5cbece584f164a8aa117506a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8440a94b1d05553075a03fb69ca7e754fcef6ecf5cbece584f164a8aa117506a->enter($__internal_8440a94b1d05553075a03fb69ca7e754fcef6ecf5cbece584f164a8aa117506a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8440a94b1d05553075a03fb69ca7e754fcef6ecf5cbece584f164a8aa117506a->leave($__internal_8440a94b1d05553075a03fb69ca7e754fcef6ecf5cbece584f164a8aa117506a_prof);

        
        $__internal_e82c307dd3479ddfbc2176c8301ee461005a45dd4c813c9cbde172522ba7afb3->leave($__internal_e82c307dd3479ddfbc2176c8301ee461005a45dd4c813c9cbde172522ba7afb3_prof);

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
