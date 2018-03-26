<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2c98d7dda513a28e40954cf0fe4f994038abd57bf1c7e44dd11bb7e023e5e1e0 extends Twig_Template
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
        $__internal_dba3b84b93b4e13ac9faee35d94b5784e764fc60301b6ca988bb03b163b06374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba3b84b93b4e13ac9faee35d94b5784e764fc60301b6ca988bb03b163b06374->enter($__internal_dba3b84b93b4e13ac9faee35d94b5784e764fc60301b6ca988bb03b163b06374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_9d9728d1dd278569dac14dfcedcc9f723a8d137478e356cf954e2a28113883bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9728d1dd278569dac14dfcedcc9f723a8d137478e356cf954e2a28113883bf->enter($__internal_9d9728d1dd278569dac14dfcedcc9f723a8d137478e356cf954e2a28113883bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_dba3b84b93b4e13ac9faee35d94b5784e764fc60301b6ca988bb03b163b06374->leave($__internal_dba3b84b93b4e13ac9faee35d94b5784e764fc60301b6ca988bb03b163b06374_prof);

        
        $__internal_9d9728d1dd278569dac14dfcedcc9f723a8d137478e356cf954e2a28113883bf->leave($__internal_9d9728d1dd278569dac14dfcedcc9f723a8d137478e356cf954e2a28113883bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
