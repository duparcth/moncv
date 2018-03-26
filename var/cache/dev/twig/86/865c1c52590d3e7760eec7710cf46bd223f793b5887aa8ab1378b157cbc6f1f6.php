<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_936b7c141108aaf3723891fe6749f62351d514d21eefa4b681d593c887aa953a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936b7c141108aaf3723891fe6749f62351d514d21eefa4b681d593c887aa953a->enter($__internal_936b7c141108aaf3723891fe6749f62351d514d21eefa4b681d593c887aa953a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8d799e8fabe6a71772d2ab8fcbc19704c9ecaf465fea67d5f1077696f9e7f9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d799e8fabe6a71772d2ab8fcbc19704c9ecaf465fea67d5f1077696f9e7f9f5->enter($__internal_8d799e8fabe6a71772d2ab8fcbc19704c9ecaf465fea67d5f1077696f9e7f9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_936b7c141108aaf3723891fe6749f62351d514d21eefa4b681d593c887aa953a->leave($__internal_936b7c141108aaf3723891fe6749f62351d514d21eefa4b681d593c887aa953a_prof);

        
        $__internal_8d799e8fabe6a71772d2ab8fcbc19704c9ecaf465fea67d5f1077696f9e7f9f5->leave($__internal_8d799e8fabe6a71772d2ab8fcbc19704c9ecaf465fea67d5f1077696f9e7f9f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d6d171cb7016208929f1e02b8b572cb20965a2b8c066190cf41f20d10552a4bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d171cb7016208929f1e02b8b572cb20965a2b8c066190cf41f20d10552a4bc->enter($__internal_d6d171cb7016208929f1e02b8b572cb20965a2b8c066190cf41f20d10552a4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e564e459bb81a6a13b53baa76c860d0e154456d842ff63d3fde6fbd41f943bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e564e459bb81a6a13b53baa76c860d0e154456d842ff63d3fde6fbd41f943bbd->enter($__internal_e564e459bb81a6a13b53baa76c860d0e154456d842ff63d3fde6fbd41f943bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e564e459bb81a6a13b53baa76c860d0e154456d842ff63d3fde6fbd41f943bbd->leave($__internal_e564e459bb81a6a13b53baa76c860d0e154456d842ff63d3fde6fbd41f943bbd_prof);

        
        $__internal_d6d171cb7016208929f1e02b8b572cb20965a2b8c066190cf41f20d10552a4bc->leave($__internal_d6d171cb7016208929f1e02b8b572cb20965a2b8c066190cf41f20d10552a4bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6580ac4fac45fb161f2175e5b5f446801d44eecf44a764b0190679cd53f17162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6580ac4fac45fb161f2175e5b5f446801d44eecf44a764b0190679cd53f17162->enter($__internal_6580ac4fac45fb161f2175e5b5f446801d44eecf44a764b0190679cd53f17162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b751bfe29df2ebfb3bd51f9a4b96b8ced03dc18619a0e1adb11ad03db8737d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b751bfe29df2ebfb3bd51f9a4b96b8ced03dc18619a0e1adb11ad03db8737d65->enter($__internal_b751bfe29df2ebfb3bd51f9a4b96b8ced03dc18619a0e1adb11ad03db8737d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b751bfe29df2ebfb3bd51f9a4b96b8ced03dc18619a0e1adb11ad03db8737d65->leave($__internal_b751bfe29df2ebfb3bd51f9a4b96b8ced03dc18619a0e1adb11ad03db8737d65_prof);

        
        $__internal_6580ac4fac45fb161f2175e5b5f446801d44eecf44a764b0190679cd53f17162->leave($__internal_6580ac4fac45fb161f2175e5b5f446801d44eecf44a764b0190679cd53f17162_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0c2907b14da6abd9c24aec6990a7bae42f5e42de0e86b1406e243085ce8943a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c2907b14da6abd9c24aec6990a7bae42f5e42de0e86b1406e243085ce8943a->enter($__internal_c0c2907b14da6abd9c24aec6990a7bae42f5e42de0e86b1406e243085ce8943a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_40b3a1bb92760a743021c83ce81c9783605dac1db09e65f857f414db3d392801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b3a1bb92760a743021c83ce81c9783605dac1db09e65f857f414db3d392801->enter($__internal_40b3a1bb92760a743021c83ce81c9783605dac1db09e65f857f414db3d392801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_40b3a1bb92760a743021c83ce81c9783605dac1db09e65f857f414db3d392801->leave($__internal_40b3a1bb92760a743021c83ce81c9783605dac1db09e65f857f414db3d392801_prof);

        
        $__internal_c0c2907b14da6abd9c24aec6990a7bae42f5e42de0e86b1406e243085ce8943a->leave($__internal_c0c2907b14da6abd9c24aec6990a7bae42f5e42de0e86b1406e243085ce8943a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
