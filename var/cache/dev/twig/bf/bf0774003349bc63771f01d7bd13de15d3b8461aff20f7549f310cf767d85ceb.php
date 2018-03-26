<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1ba13413b4ed4f06f8ac2c03afa72d1213546ef5b2ae1d318b812ffacc9119d1 extends Twig_Template
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
        $__internal_3687e62b83d33e3e343800f7a66421791eab2a5d205512ad4d173aa278acc59c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3687e62b83d33e3e343800f7a66421791eab2a5d205512ad4d173aa278acc59c->enter($__internal_3687e62b83d33e3e343800f7a66421791eab2a5d205512ad4d173aa278acc59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_d0538d0b8cc3509dc57838ae2a9839b6d6e2a09c4b8c5c6e390b14f2e5846389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0538d0b8cc3509dc57838ae2a9839b6d6e2a09c4b8c5c6e390b14f2e5846389->enter($__internal_d0538d0b8cc3509dc57838ae2a9839b6d6e2a09c4b8c5c6e390b14f2e5846389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_3687e62b83d33e3e343800f7a66421791eab2a5d205512ad4d173aa278acc59c->leave($__internal_3687e62b83d33e3e343800f7a66421791eab2a5d205512ad4d173aa278acc59c_prof);

        
        $__internal_d0538d0b8cc3509dc57838ae2a9839b6d6e2a09c4b8c5c6e390b14f2e5846389->leave($__internal_d0538d0b8cc3509dc57838ae2a9839b6d6e2a09c4b8c5c6e390b14f2e5846389_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
