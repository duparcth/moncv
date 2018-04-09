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
        $__internal_7dc5098e38ea0a6648f625441200ad9b56fc8f99be5f6f4fd0577198cd85cdb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc5098e38ea0a6648f625441200ad9b56fc8f99be5f6f4fd0577198cd85cdb2->enter($__internal_7dc5098e38ea0a6648f625441200ad9b56fc8f99be5f6f4fd0577198cd85cdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_21257ded839b57364e9f1cddbdefa9fd1ccd05592244b1699b185a06cecd4376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21257ded839b57364e9f1cddbdefa9fd1ccd05592244b1699b185a06cecd4376->enter($__internal_21257ded839b57364e9f1cddbdefa9fd1ccd05592244b1699b185a06cecd4376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7dc5098e38ea0a6648f625441200ad9b56fc8f99be5f6f4fd0577198cd85cdb2->leave($__internal_7dc5098e38ea0a6648f625441200ad9b56fc8f99be5f6f4fd0577198cd85cdb2_prof);

        
        $__internal_21257ded839b57364e9f1cddbdefa9fd1ccd05592244b1699b185a06cecd4376->leave($__internal_21257ded839b57364e9f1cddbdefa9fd1ccd05592244b1699b185a06cecd4376_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8614dd01df3d78b93f67924c3aad34e641b2fedb3154f6cd6516711d6280ab35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8614dd01df3d78b93f67924c3aad34e641b2fedb3154f6cd6516711d6280ab35->enter($__internal_8614dd01df3d78b93f67924c3aad34e641b2fedb3154f6cd6516711d6280ab35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_04a544a59a0dda370e98b06bcefe4d9478064474c40c27135b8e3e71e31fdf02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a544a59a0dda370e98b06bcefe4d9478064474c40c27135b8e3e71e31fdf02->enter($__internal_04a544a59a0dda370e98b06bcefe4d9478064474c40c27135b8e3e71e31fdf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_04a544a59a0dda370e98b06bcefe4d9478064474c40c27135b8e3e71e31fdf02->leave($__internal_04a544a59a0dda370e98b06bcefe4d9478064474c40c27135b8e3e71e31fdf02_prof);

        
        $__internal_8614dd01df3d78b93f67924c3aad34e641b2fedb3154f6cd6516711d6280ab35->leave($__internal_8614dd01df3d78b93f67924c3aad34e641b2fedb3154f6cd6516711d6280ab35_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_241caf778e11541563245d6081aa44337c969015a0731af6fc497d659fe68b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241caf778e11541563245d6081aa44337c969015a0731af6fc497d659fe68b1a->enter($__internal_241caf778e11541563245d6081aa44337c969015a0731af6fc497d659fe68b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7cd11e65dad4e0e23c09196a1bf44f676d781ebfe12befa10d46776ab085fd1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd11e65dad4e0e23c09196a1bf44f676d781ebfe12befa10d46776ab085fd1c->enter($__internal_7cd11e65dad4e0e23c09196a1bf44f676d781ebfe12befa10d46776ab085fd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7cd11e65dad4e0e23c09196a1bf44f676d781ebfe12befa10d46776ab085fd1c->leave($__internal_7cd11e65dad4e0e23c09196a1bf44f676d781ebfe12befa10d46776ab085fd1c_prof);

        
        $__internal_241caf778e11541563245d6081aa44337c969015a0731af6fc497d659fe68b1a->leave($__internal_241caf778e11541563245d6081aa44337c969015a0731af6fc497d659fe68b1a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f492ca8a492765121b8417a1371872006b7f4fffbd7aca92ca2b4b378b8ea1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f492ca8a492765121b8417a1371872006b7f4fffbd7aca92ca2b4b378b8ea1c7->enter($__internal_f492ca8a492765121b8417a1371872006b7f4fffbd7aca92ca2b4b378b8ea1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_843a2b00cbcef33f7b7d37199f95f3fbfbbd3396c9048453f18531b97d747da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843a2b00cbcef33f7b7d37199f95f3fbfbbd3396c9048453f18531b97d747da3->enter($__internal_843a2b00cbcef33f7b7d37199f95f3fbfbbd3396c9048453f18531b97d747da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_843a2b00cbcef33f7b7d37199f95f3fbfbbd3396c9048453f18531b97d747da3->leave($__internal_843a2b00cbcef33f7b7d37199f95f3fbfbbd3396c9048453f18531b97d747da3_prof);

        
        $__internal_f492ca8a492765121b8417a1371872006b7f4fffbd7aca92ca2b4b378b8ea1c7->leave($__internal_f492ca8a492765121b8417a1371872006b7f4fffbd7aca92ca2b4b378b8ea1c7_prof);

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
