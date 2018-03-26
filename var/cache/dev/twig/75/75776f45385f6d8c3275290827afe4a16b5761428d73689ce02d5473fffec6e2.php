<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c23ca9f22ed00e48e7dc54bb4272e9abad87680fc001638199a83a6562b06463 extends Twig_Template
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
        $__internal_f2cf74b57dbf87cbae3d4d83469935dcb173f03fa0413b016a0e094d7bf5fca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2cf74b57dbf87cbae3d4d83469935dcb173f03fa0413b016a0e094d7bf5fca3->enter($__internal_f2cf74b57dbf87cbae3d4d83469935dcb173f03fa0413b016a0e094d7bf5fca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_66180272a4d9fd94895475d1b48e9b24bd8f3adcd5310a3b600d628b530fd0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66180272a4d9fd94895475d1b48e9b24bd8f3adcd5310a3b600d628b530fd0cb->enter($__internal_66180272a4d9fd94895475d1b48e9b24bd8f3adcd5310a3b600d628b530fd0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f2cf74b57dbf87cbae3d4d83469935dcb173f03fa0413b016a0e094d7bf5fca3->leave($__internal_f2cf74b57dbf87cbae3d4d83469935dcb173f03fa0413b016a0e094d7bf5fca3_prof);

        
        $__internal_66180272a4d9fd94895475d1b48e9b24bd8f3adcd5310a3b600d628b530fd0cb->leave($__internal_66180272a4d9fd94895475d1b48e9b24bd8f3adcd5310a3b600d628b530fd0cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
