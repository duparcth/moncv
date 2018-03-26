<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_5fc722d62ca28f285b606fe786535b6a2c11de849e5659f523da67b1533eb6bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb2b5284500f30935848960377b348117cbb1bc5ffb103f0c01a8e4482c74412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2b5284500f30935848960377b348117cbb1bc5ffb103f0c01a8e4482c74412->enter($__internal_fb2b5284500f30935848960377b348117cbb1bc5ffb103f0c01a8e4482c74412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_07bd0284f9afb58f2f3e86acd9a284f05215d21e6fcde00a96b62cd172e8ad65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bd0284f9afb58f2f3e86acd9a284f05215d21e6fcde00a96b62cd172e8ad65->enter($__internal_07bd0284f9afb58f2f3e86acd9a284f05215d21e6fcde00a96b62cd172e8ad65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb2b5284500f30935848960377b348117cbb1bc5ffb103f0c01a8e4482c74412->leave($__internal_fb2b5284500f30935848960377b348117cbb1bc5ffb103f0c01a8e4482c74412_prof);

        
        $__internal_07bd0284f9afb58f2f3e86acd9a284f05215d21e6fcde00a96b62cd172e8ad65->leave($__internal_07bd0284f9afb58f2f3e86acd9a284f05215d21e6fcde00a96b62cd172e8ad65_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_23a7cd75aff8e84bb04682b7d26826787d2703b9e8b8cf2617832916dba95b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a7cd75aff8e84bb04682b7d26826787d2703b9e8b8cf2617832916dba95b1a->enter($__internal_23a7cd75aff8e84bb04682b7d26826787d2703b9e8b8cf2617832916dba95b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_94732f964a2684a870cbf0d6e416fb7d97913110253f93395d7fd73c05042019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94732f964a2684a870cbf0d6e416fb7d97913110253f93395d7fd73c05042019->enter($__internal_94732f964a2684a870cbf0d6e416fb7d97913110253f93395d7fd73c05042019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_94732f964a2684a870cbf0d6e416fb7d97913110253f93395d7fd73c05042019->leave($__internal_94732f964a2684a870cbf0d6e416fb7d97913110253f93395d7fd73c05042019_prof);

        
        $__internal_23a7cd75aff8e84bb04682b7d26826787d2703b9e8b8cf2617832916dba95b1a->leave($__internal_23a7cd75aff8e84bb04682b7d26826787d2703b9e8b8cf2617832916dba95b1a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed5eaed8ca5e4b5f3565b962d10dd9c86a6d98540e00735a4ea3978f61db0f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5eaed8ca5e4b5f3565b962d10dd9c86a6d98540e00735a4ea3978f61db0f36->enter($__internal_ed5eaed8ca5e4b5f3565b962d10dd9c86a6d98540e00735a4ea3978f61db0f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90325acb3d26d61967b1b5f8e74854d523eaac1c6ee8fd5d8dffcfbfcbee5731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90325acb3d26d61967b1b5f8e74854d523eaac1c6ee8fd5d8dffcfbfcbee5731->enter($__internal_90325acb3d26d61967b1b5f8e74854d523eaac1c6ee8fd5d8dffcfbfcbee5731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_90325acb3d26d61967b1b5f8e74854d523eaac1c6ee8fd5d8dffcfbfcbee5731->leave($__internal_90325acb3d26d61967b1b5f8e74854d523eaac1c6ee8fd5d8dffcfbfcbee5731_prof);

        
        $__internal_ed5eaed8ca5e4b5f3565b962d10dd9c86a6d98540e00735a4ea3978f61db0f36->leave($__internal_ed5eaed8ca5e4b5f3565b962d10dd9c86a6d98540e00735a4ea3978f61db0f36_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
