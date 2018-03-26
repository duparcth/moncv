<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5a3f6cf6086d484b923836b0a12f513cb56c7628150a5bb964f028a5858c76b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f495d8317c3f40a97e7ebc68c3e2dd4d3b844aacc17ef71d5619f422cf0b7bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f495d8317c3f40a97e7ebc68c3e2dd4d3b844aacc17ef71d5619f422cf0b7bf->enter($__internal_5f495d8317c3f40a97e7ebc68c3e2dd4d3b844aacc17ef71d5619f422cf0b7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_aba40438056dbfa6d59e4bb65a8a5ed5bf3c10c14e521050e906811f46346b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba40438056dbfa6d59e4bb65a8a5ed5bf3c10c14e521050e906811f46346b36->enter($__internal_aba40438056dbfa6d59e4bb65a8a5ed5bf3c10c14e521050e906811f46346b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5f495d8317c3f40a97e7ebc68c3e2dd4d3b844aacc17ef71d5619f422cf0b7bf->leave($__internal_5f495d8317c3f40a97e7ebc68c3e2dd4d3b844aacc17ef71d5619f422cf0b7bf_prof);

        
        $__internal_aba40438056dbfa6d59e4bb65a8a5ed5bf3c10c14e521050e906811f46346b36->leave($__internal_aba40438056dbfa6d59e4bb65a8a5ed5bf3c10c14e521050e906811f46346b36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
