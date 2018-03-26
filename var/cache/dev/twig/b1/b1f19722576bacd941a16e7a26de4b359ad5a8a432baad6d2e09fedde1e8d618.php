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
        $__internal_ab71ce196f83794c8f2646b9a7620eb0a67a1c90259922d8de4376da6116d0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab71ce196f83794c8f2646b9a7620eb0a67a1c90259922d8de4376da6116d0da->enter($__internal_ab71ce196f83794c8f2646b9a7620eb0a67a1c90259922d8de4376da6116d0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_68d07757e180be37366fe87c94c3fc4256ee809bf421bfdd35f9d625527fe186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d07757e180be37366fe87c94c3fc4256ee809bf421bfdd35f9d625527fe186->enter($__internal_68d07757e180be37366fe87c94c3fc4256ee809bf421bfdd35f9d625527fe186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ab71ce196f83794c8f2646b9a7620eb0a67a1c90259922d8de4376da6116d0da->leave($__internal_ab71ce196f83794c8f2646b9a7620eb0a67a1c90259922d8de4376da6116d0da_prof);

        
        $__internal_68d07757e180be37366fe87c94c3fc4256ee809bf421bfdd35f9d625527fe186->leave($__internal_68d07757e180be37366fe87c94c3fc4256ee809bf421bfdd35f9d625527fe186_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d209f1671875e34bd9e6075b94834f91e97dcc8fccc0bd01ac7663b6c3f41e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d209f1671875e34bd9e6075b94834f91e97dcc8fccc0bd01ac7663b6c3f41e8->enter($__internal_7d209f1671875e34bd9e6075b94834f91e97dcc8fccc0bd01ac7663b6c3f41e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc6362641e773da4ab896d3e977428ff0ff96836b21526b763b792d41d4f335c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6362641e773da4ab896d3e977428ff0ff96836b21526b763b792d41d4f335c->enter($__internal_bc6362641e773da4ab896d3e977428ff0ff96836b21526b763b792d41d4f335c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bc6362641e773da4ab896d3e977428ff0ff96836b21526b763b792d41d4f335c->leave($__internal_bc6362641e773da4ab896d3e977428ff0ff96836b21526b763b792d41d4f335c_prof);

        
        $__internal_7d209f1671875e34bd9e6075b94834f91e97dcc8fccc0bd01ac7663b6c3f41e8->leave($__internal_7d209f1671875e34bd9e6075b94834f91e97dcc8fccc0bd01ac7663b6c3f41e8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b48afc0c3eade34883fe1f8231af382062cea65ddd41921b17a7f1e18a9b6cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48afc0c3eade34883fe1f8231af382062cea65ddd41921b17a7f1e18a9b6cd9->enter($__internal_b48afc0c3eade34883fe1f8231af382062cea65ddd41921b17a7f1e18a9b6cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e72b1ed47353b671cb0d162ce388f724236090001b6b1239f42af9ae7200f57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72b1ed47353b671cb0d162ce388f724236090001b6b1239f42af9ae7200f57d->enter($__internal_e72b1ed47353b671cb0d162ce388f724236090001b6b1239f42af9ae7200f57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e72b1ed47353b671cb0d162ce388f724236090001b6b1239f42af9ae7200f57d->leave($__internal_e72b1ed47353b671cb0d162ce388f724236090001b6b1239f42af9ae7200f57d_prof);

        
        $__internal_b48afc0c3eade34883fe1f8231af382062cea65ddd41921b17a7f1e18a9b6cd9->leave($__internal_b48afc0c3eade34883fe1f8231af382062cea65ddd41921b17a7f1e18a9b6cd9_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_021916f4a755689b7845d72245a998116863bb400fdbc413ce6805a70ca7597d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021916f4a755689b7845d72245a998116863bb400fdbc413ce6805a70ca7597d->enter($__internal_021916f4a755689b7845d72245a998116863bb400fdbc413ce6805a70ca7597d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3517d8c1cce26888f06cee0844d59701ec71b5c46dade74871b2073a9ed1600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3517d8c1cce26888f06cee0844d59701ec71b5c46dade74871b2073a9ed1600->enter($__internal_f3517d8c1cce26888f06cee0844d59701ec71b5c46dade74871b2073a9ed1600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f3517d8c1cce26888f06cee0844d59701ec71b5c46dade74871b2073a9ed1600->leave($__internal_f3517d8c1cce26888f06cee0844d59701ec71b5c46dade74871b2073a9ed1600_prof);

        
        $__internal_021916f4a755689b7845d72245a998116863bb400fdbc413ce6805a70ca7597d->leave($__internal_021916f4a755689b7845d72245a998116863bb400fdbc413ce6805a70ca7597d_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aea83e8fd2ba22b7f9e090b1da3a7d59664da236394fb67f2140a4e03bc82a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aea83e8fd2ba22b7f9e090b1da3a7d59664da236394fb67f2140a4e03bc82a3c->enter($__internal_aea83e8fd2ba22b7f9e090b1da3a7d59664da236394fb67f2140a4e03bc82a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f7e6c75af859753d9981109a1e41238cd787a6828e5a08ddd7087da5e599c9ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e6c75af859753d9981109a1e41238cd787a6828e5a08ddd7087da5e599c9ca->enter($__internal_f7e6c75af859753d9981109a1e41238cd787a6828e5a08ddd7087da5e599c9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f7e6c75af859753d9981109a1e41238cd787a6828e5a08ddd7087da5e599c9ca->leave($__internal_f7e6c75af859753d9981109a1e41238cd787a6828e5a08ddd7087da5e599c9ca_prof);

        
        $__internal_aea83e8fd2ba22b7f9e090b1da3a7d59664da236394fb67f2140a4e03bc82a3c->leave($__internal_aea83e8fd2ba22b7f9e090b1da3a7d59664da236394fb67f2140a4e03bc82a3c_prof);

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
