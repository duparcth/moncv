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
        $__internal_c1c5007bd46d19576a2b45ecc1924f60f00bfc9de60636f4035e2cc2aee9b454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c5007bd46d19576a2b45ecc1924f60f00bfc9de60636f4035e2cc2aee9b454->enter($__internal_c1c5007bd46d19576a2b45ecc1924f60f00bfc9de60636f4035e2cc2aee9b454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6010bcad91e41b1b4495efa510d3e8459e2571b029f5bbee444eb784e0edecbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6010bcad91e41b1b4495efa510d3e8459e2571b029f5bbee444eb784e0edecbf->enter($__internal_6010bcad91e41b1b4495efa510d3e8459e2571b029f5bbee444eb784e0edecbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1c5007bd46d19576a2b45ecc1924f60f00bfc9de60636f4035e2cc2aee9b454->leave($__internal_c1c5007bd46d19576a2b45ecc1924f60f00bfc9de60636f4035e2cc2aee9b454_prof);

        
        $__internal_6010bcad91e41b1b4495efa510d3e8459e2571b029f5bbee444eb784e0edecbf->leave($__internal_6010bcad91e41b1b4495efa510d3e8459e2571b029f5bbee444eb784e0edecbf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d6a2f4de84972249c7e10c43a6353518a4708403ca66660194ba3cf1870a58b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a2f4de84972249c7e10c43a6353518a4708403ca66660194ba3cf1870a58b9->enter($__internal_d6a2f4de84972249c7e10c43a6353518a4708403ca66660194ba3cf1870a58b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b03026943b0c128b1a32fdb9a7525968f4caf4f4aa8124dc10d5799bd22c43e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b03026943b0c128b1a32fdb9a7525968f4caf4f4aa8124dc10d5799bd22c43e0->enter($__internal_b03026943b0c128b1a32fdb9a7525968f4caf4f4aa8124dc10d5799bd22c43e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b03026943b0c128b1a32fdb9a7525968f4caf4f4aa8124dc10d5799bd22c43e0->leave($__internal_b03026943b0c128b1a32fdb9a7525968f4caf4f4aa8124dc10d5799bd22c43e0_prof);

        
        $__internal_d6a2f4de84972249c7e10c43a6353518a4708403ca66660194ba3cf1870a58b9->leave($__internal_d6a2f4de84972249c7e10c43a6353518a4708403ca66660194ba3cf1870a58b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce605e305e8d7ac53f97a92e8d6ed6b2d5ead00913fa4758f4ca3bb423680b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce605e305e8d7ac53f97a92e8d6ed6b2d5ead00913fa4758f4ca3bb423680b1e->enter($__internal_ce605e305e8d7ac53f97a92e8d6ed6b2d5ead00913fa4758f4ca3bb423680b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0e3cdaa9b7355a823b6ff3c346595c3506e1a3cbd00066787a3f8f863e27710a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3cdaa9b7355a823b6ff3c346595c3506e1a3cbd00066787a3f8f863e27710a->enter($__internal_0e3cdaa9b7355a823b6ff3c346595c3506e1a3cbd00066787a3f8f863e27710a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e3cdaa9b7355a823b6ff3c346595c3506e1a3cbd00066787a3f8f863e27710a->leave($__internal_0e3cdaa9b7355a823b6ff3c346595c3506e1a3cbd00066787a3f8f863e27710a_prof);

        
        $__internal_ce605e305e8d7ac53f97a92e8d6ed6b2d5ead00913fa4758f4ca3bb423680b1e->leave($__internal_ce605e305e8d7ac53f97a92e8d6ed6b2d5ead00913fa4758f4ca3bb423680b1e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1bfc47cabe386694bfcd83179dcd2074c62e7b0ed4f5e313955ae3bcdba5255e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bfc47cabe386694bfcd83179dcd2074c62e7b0ed4f5e313955ae3bcdba5255e->enter($__internal_1bfc47cabe386694bfcd83179dcd2074c62e7b0ed4f5e313955ae3bcdba5255e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_245111dc8020d5ee80f956370bd8102f3d4abfcd97431c099301b58946cf83c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245111dc8020d5ee80f956370bd8102f3d4abfcd97431c099301b58946cf83c2->enter($__internal_245111dc8020d5ee80f956370bd8102f3d4abfcd97431c099301b58946cf83c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_245111dc8020d5ee80f956370bd8102f3d4abfcd97431c099301b58946cf83c2->leave($__internal_245111dc8020d5ee80f956370bd8102f3d4abfcd97431c099301b58946cf83c2_prof);

        
        $__internal_1bfc47cabe386694bfcd83179dcd2074c62e7b0ed4f5e313955ae3bcdba5255e->leave($__internal_1bfc47cabe386694bfcd83179dcd2074c62e7b0ed4f5e313955ae3bcdba5255e_prof);

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
