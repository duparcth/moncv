<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a943ef25c9b4357de311f82e3c707c6cd23ca4e15648b09be3f22e11b2c37042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a943ef25c9b4357de311f82e3c707c6cd23ca4e15648b09be3f22e11b2c37042->enter($__internal_a943ef25c9b4357de311f82e3c707c6cd23ca4e15648b09be3f22e11b2c37042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_58285d986e9828cbdd430523ef9d64e980c91b30917a8d1d6bb0ed80d2693798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58285d986e9828cbdd430523ef9d64e980c91b30917a8d1d6bb0ed80d2693798->enter($__internal_58285d986e9828cbdd430523ef9d64e980c91b30917a8d1d6bb0ed80d2693798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a943ef25c9b4357de311f82e3c707c6cd23ca4e15648b09be3f22e11b2c37042->leave($__internal_a943ef25c9b4357de311f82e3c707c6cd23ca4e15648b09be3f22e11b2c37042_prof);

        
        $__internal_58285d986e9828cbdd430523ef9d64e980c91b30917a8d1d6bb0ed80d2693798->leave($__internal_58285d986e9828cbdd430523ef9d64e980c91b30917a8d1d6bb0ed80d2693798_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_41cd7ca022f2ae04e5a49d54c48de2b677fa1cf991f6ad4d9ed1d0d567aec15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41cd7ca022f2ae04e5a49d54c48de2b677fa1cf991f6ad4d9ed1d0d567aec15d->enter($__internal_41cd7ca022f2ae04e5a49d54c48de2b677fa1cf991f6ad4d9ed1d0d567aec15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d532cb44e4639ce15c9fe44b40e10318d0b66ad01d0b8503025e8ad20a5b30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d532cb44e4639ce15c9fe44b40e10318d0b66ad01d0b8503025e8ad20a5b30d->enter($__internal_2d532cb44e4639ce15c9fe44b40e10318d0b66ad01d0b8503025e8ad20a5b30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2d532cb44e4639ce15c9fe44b40e10318d0b66ad01d0b8503025e8ad20a5b30d->leave($__internal_2d532cb44e4639ce15c9fe44b40e10318d0b66ad01d0b8503025e8ad20a5b30d_prof);

        
        $__internal_41cd7ca022f2ae04e5a49d54c48de2b677fa1cf991f6ad4d9ed1d0d567aec15d->leave($__internal_41cd7ca022f2ae04e5a49d54c48de2b677fa1cf991f6ad4d9ed1d0d567aec15d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_50bd19f657070fb006b70dfc17441760dcfc8563266e8cd704dd9eaa0e14f105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50bd19f657070fb006b70dfc17441760dcfc8563266e8cd704dd9eaa0e14f105->enter($__internal_50bd19f657070fb006b70dfc17441760dcfc8563266e8cd704dd9eaa0e14f105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b0611444dc61eb461914293304441178412cf9eca7db8ad277f62d51066fb0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0611444dc61eb461914293304441178412cf9eca7db8ad277f62d51066fb0b9->enter($__internal_b0611444dc61eb461914293304441178412cf9eca7db8ad277f62d51066fb0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b0611444dc61eb461914293304441178412cf9eca7db8ad277f62d51066fb0b9->leave($__internal_b0611444dc61eb461914293304441178412cf9eca7db8ad277f62d51066fb0b9_prof);

        
        $__internal_50bd19f657070fb006b70dfc17441760dcfc8563266e8cd704dd9eaa0e14f105->leave($__internal_50bd19f657070fb006b70dfc17441760dcfc8563266e8cd704dd9eaa0e14f105_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c625ca5d97a3c9a2bffa27c1ac793da53b327e982dc3f605237713a31f1b2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c625ca5d97a3c9a2bffa27c1ac793da53b327e982dc3f605237713a31f1b2db->enter($__internal_0c625ca5d97a3c9a2bffa27c1ac793da53b327e982dc3f605237713a31f1b2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef668bc79fcf29ec0f772f7c3b2cc67054fa7affcb1207e0dc8a0e4805e5d0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef668bc79fcf29ec0f772f7c3b2cc67054fa7affcb1207e0dc8a0e4805e5d0ab->enter($__internal_ef668bc79fcf29ec0f772f7c3b2cc67054fa7affcb1207e0dc8a0e4805e5d0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef668bc79fcf29ec0f772f7c3b2cc67054fa7affcb1207e0dc8a0e4805e5d0ab->leave($__internal_ef668bc79fcf29ec0f772f7c3b2cc67054fa7affcb1207e0dc8a0e4805e5d0ab_prof);

        
        $__internal_0c625ca5d97a3c9a2bffa27c1ac793da53b327e982dc3f605237713a31f1b2db->leave($__internal_0c625ca5d97a3c9a2bffa27c1ac793da53b327e982dc3f605237713a31f1b2db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
