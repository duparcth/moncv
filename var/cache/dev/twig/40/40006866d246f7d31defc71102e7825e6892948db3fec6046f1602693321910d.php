<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_19dfb68d851ddd05e5bd3f446c5cecc8ca30befd0bb86cee9a5c57f648f371d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdc81b326e211a90c5977546188c177182014b41fbd8b173859bf97ea0c9f211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc81b326e211a90c5977546188c177182014b41fbd8b173859bf97ea0c9f211->enter($__internal_cdc81b326e211a90c5977546188c177182014b41fbd8b173859bf97ea0c9f211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_9d61d9a860e1fb1a3d7f931f721dac1ba63bf3a0b69af977ea0684acdf5c5fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d61d9a860e1fb1a3d7f931f721dac1ba63bf3a0b69af977ea0684acdf5c5fb7->enter($__internal_9d61d9a860e1fb1a3d7f931f721dac1ba63bf3a0b69af977ea0684acdf5c5fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdc81b326e211a90c5977546188c177182014b41fbd8b173859bf97ea0c9f211->leave($__internal_cdc81b326e211a90c5977546188c177182014b41fbd8b173859bf97ea0c9f211_prof);

        
        $__internal_9d61d9a860e1fb1a3d7f931f721dac1ba63bf3a0b69af977ea0684acdf5c5fb7->leave($__internal_9d61d9a860e1fb1a3d7f931f721dac1ba63bf3a0b69af977ea0684acdf5c5fb7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3738a2bfce47aa721c9a6600c4e0db2189b5208b2a32a45494b1cfff9f660f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3738a2bfce47aa721c9a6600c4e0db2189b5208b2a32a45494b1cfff9f660f3e->enter($__internal_3738a2bfce47aa721c9a6600c4e0db2189b5208b2a32a45494b1cfff9f660f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_13ef5aa618759eaffa337220c84b8915533efda357c4b334dbb6d4a846caddba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ef5aa618759eaffa337220c84b8915533efda357c4b334dbb6d4a846caddba->enter($__internal_13ef5aa618759eaffa337220c84b8915533efda357c4b334dbb6d4a846caddba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_13ef5aa618759eaffa337220c84b8915533efda357c4b334dbb6d4a846caddba->leave($__internal_13ef5aa618759eaffa337220c84b8915533efda357c4b334dbb6d4a846caddba_prof);

        
        $__internal_3738a2bfce47aa721c9a6600c4e0db2189b5208b2a32a45494b1cfff9f660f3e->leave($__internal_3738a2bfce47aa721c9a6600c4e0db2189b5208b2a32a45494b1cfff9f660f3e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ed616bb20d3348a099af3d503af1c570c87026e6aaadcfacc0f8bd13e122cb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed616bb20d3348a099af3d503af1c570c87026e6aaadcfacc0f8bd13e122cb7->enter($__internal_0ed616bb20d3348a099af3d503af1c570c87026e6aaadcfacc0f8bd13e122cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02b63d2d076ee650b7a0893f7fccc3ce6bb3a6bd81404b4d42483de6f8561c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b63d2d076ee650b7a0893f7fccc3ce6bb3a6bd81404b4d42483de6f8561c8b->enter($__internal_02b63d2d076ee650b7a0893f7fccc3ce6bb3a6bd81404b4d42483de6f8561c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_02b63d2d076ee650b7a0893f7fccc3ce6bb3a6bd81404b4d42483de6f8561c8b->leave($__internal_02b63d2d076ee650b7a0893f7fccc3ce6bb3a6bd81404b4d42483de6f8561c8b_prof);

        
        $__internal_0ed616bb20d3348a099af3d503af1c570c87026e6aaadcfacc0f8bd13e122cb7->leave($__internal_0ed616bb20d3348a099af3d503af1c570c87026e6aaadcfacc0f8bd13e122cb7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
