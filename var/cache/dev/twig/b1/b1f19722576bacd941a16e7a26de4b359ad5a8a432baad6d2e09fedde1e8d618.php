<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56d1f87a5c6f9909aeaaa1cf373971e056f226ef3a72f14d2a0b09676fc271af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d1f87a5c6f9909aeaaa1cf373971e056f226ef3a72f14d2a0b09676fc271af->enter($__internal_56d1f87a5c6f9909aeaaa1cf373971e056f226ef3a72f14d2a0b09676fc271af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_64346cac4ee2dc8cb0c27b160f9f4c94d7e34873f50faacf5f7bd8e07c31dd5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64346cac4ee2dc8cb0c27b160f9f4c94d7e34873f50faacf5f7bd8e07c31dd5f->enter($__internal_64346cac4ee2dc8cb0c27b160f9f4c94d7e34873f50faacf5f7bd8e07c31dd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
      <body id=\"page-top\">

        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_56d1f87a5c6f9909aeaaa1cf373971e056f226ef3a72f14d2a0b09676fc271af->leave($__internal_56d1f87a5c6f9909aeaaa1cf373971e056f226ef3a72f14d2a0b09676fc271af_prof);

        
        $__internal_64346cac4ee2dc8cb0c27b160f9f4c94d7e34873f50faacf5f7bd8e07c31dd5f->leave($__internal_64346cac4ee2dc8cb0c27b160f9f4c94d7e34873f50faacf5f7bd8e07c31dd5f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_da7e98583193d479862504d0221df39ab7cdbcef1fa3026b7eb9baf8eff4f44f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7e98583193d479862504d0221df39ab7cdbcef1fa3026b7eb9baf8eff4f44f->enter($__internal_da7e98583193d479862504d0221df39ab7cdbcef1fa3026b7eb9baf8eff4f44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11bba1479b0a806353d84c42e3c7e679e6b32886a65ac8f1f1bb1b081c993228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bba1479b0a806353d84c42e3c7e679e6b32886a65ac8f1f1bb1b081c993228->enter($__internal_11bba1479b0a806353d84c42e3c7e679e6b32886a65ac8f1f1bb1b081c993228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_11bba1479b0a806353d84c42e3c7e679e6b32886a65ac8f1f1bb1b081c993228->leave($__internal_11bba1479b0a806353d84c42e3c7e679e6b32886a65ac8f1f1bb1b081c993228_prof);

        
        $__internal_da7e98583193d479862504d0221df39ab7cdbcef1fa3026b7eb9baf8eff4f44f->leave($__internal_da7e98583193d479862504d0221df39ab7cdbcef1fa3026b7eb9baf8eff4f44f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87eee5f94ca996d92e846e3fe93b3d9019ca6e97d63666d980ffe7230b732174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87eee5f94ca996d92e846e3fe93b3d9019ca6e97d63666d980ffe7230b732174->enter($__internal_87eee5f94ca996d92e846e3fe93b3d9019ca6e97d63666d980ffe7230b732174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2ec4dfdd0bd94474d30d0d68a5ab1117c05a00c0b99bfb83125ba0f611e93483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec4dfdd0bd94474d30d0d68a5ab1117c05a00c0b99bfb83125ba0f611e93483->enter($__internal_2ec4dfdd0bd94474d30d0d68a5ab1117c05a00c0b99bfb83125ba0f611e93483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendor/devicons/css/devicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendor/simple-line-icons/css/simple-line-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/resume.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_2ec4dfdd0bd94474d30d0d68a5ab1117c05a00c0b99bfb83125ba0f611e93483->leave($__internal_2ec4dfdd0bd94474d30d0d68a5ab1117c05a00c0b99bfb83125ba0f611e93483_prof);

        
        $__internal_87eee5f94ca996d92e846e3fe93b3d9019ca6e97d63666d980ffe7230b732174->leave($__internal_87eee5f94ca996d92e846e3fe93b3d9019ca6e97d63666d980ffe7230b732174_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_efa0b1f7fcbfc521438721720d0e297b4e57bcf713bb207c1ffb7585164ef4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa0b1f7fcbfc521438721720d0e297b4e57bcf713bb207c1ffb7585164ef4c1->enter($__internal_efa0b1f7fcbfc521438721720d0e297b4e57bcf713bb207c1ffb7585164ef4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08d8dcf848d20db37e29517e444ea61746e6e9249664d560b98d3b5d450ba53b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d8dcf848d20db37e29517e444ea61746e6e9249664d560b98d3b5d450ba53b->enter($__internal_08d8dcf848d20db37e29517e444ea61746e6e9249664d560b98d3b5d450ba53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_08d8dcf848d20db37e29517e444ea61746e6e9249664d560b98d3b5d450ba53b->leave($__internal_08d8dcf848d20db37e29517e444ea61746e6e9249664d560b98d3b5d450ba53b_prof);

        
        $__internal_efa0b1f7fcbfc521438721720d0e297b4e57bcf713bb207c1ffb7585164ef4c1->leave($__internal_efa0b1f7fcbfc521438721720d0e297b4e57bcf713bb207c1ffb7585164ef4c1_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d3af011b3f715023e7a29339252a2402e7141933027db3e65380a33d97e5faf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3af011b3f715023e7a29339252a2402e7141933027db3e65380a33d97e5faf->enter($__internal_3d3af011b3f715023e7a29339252a2402e7141933027db3e65380a33d97e5faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_15789ceb95cb1c9022b0f91e4466a611ca312bd2953aadb9ce702f332168df06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15789ceb95cb1c9022b0f91e4466a611ca312bd2953aadb9ce702f332168df06->enter($__internal_15789ceb95cb1c9022b0f91e4466a611ca312bd2953aadb9ce702f332168df06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "    
        <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/resume.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_15789ceb95cb1c9022b0f91e4466a611ca312bd2953aadb9ce702f332168df06->leave($__internal_15789ceb95cb1c9022b0f91e4466a611ca312bd2953aadb9ce702f332168df06_prof);

        
        $__internal_3d3af011b3f715023e7a29339252a2402e7141933027db3e65380a33d97e5faf->leave($__internal_3d3af011b3f715023e7a29339252a2402e7141933027db3e65380a33d97e5faf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 34,  169 => 31,  163 => 28,  159 => 27,  147 => 25,  130 => 24,  118 => 18,  112 => 15,  108 => 14,  104 => 13,  96 => 8,  93 => 7,  84 => 6,  66 => 5,  54 => 36,  51 => 25,  49 => 24,  41 => 20,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('template/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\" rel=\"stylesheet\">
    <link href=\"{{ asset('template/vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('template/vendor/devicons/css/devicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('template/vendor/simple-line-icons/css/simple-line-icons.css') }}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset ('template/css/resume.min.css') }}\" rel=\"stylesheet\">
    {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
      <body id=\"page-top\">

        {% block body %}{% endblock %}
        {% block javascripts %}    
        <!-- Bootstrap core JavaScript -->
    <script src=\"{{ asset ('template/vendor/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset ('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"{{ asset ('template/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"{{ asset ('template/js/resume.min.js') }}\"></script>
    {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}
