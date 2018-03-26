<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2dfd8aa918acdb0aa52d5b841fa5ef084d9174251fd0f26610a58ce9eca8d635 extends Twig_Template
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
        $__internal_8759c3f69a187462b123461fc4c38534d8d6ad99015ff54ec7def65c0bc9f4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8759c3f69a187462b123461fc4c38534d8d6ad99015ff54ec7def65c0bc9f4a0->enter($__internal_8759c3f69a187462b123461fc4c38534d8d6ad99015ff54ec7def65c0bc9f4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2f48d06ea5fbbe7833b5df5e998b92d16e08351fb821eceb15fa48cf65accf51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f48d06ea5fbbe7833b5df5e998b92d16e08351fb821eceb15fa48cf65accf51->enter($__internal_2f48d06ea5fbbe7833b5df5e998b92d16e08351fb821eceb15fa48cf65accf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8759c3f69a187462b123461fc4c38534d8d6ad99015ff54ec7def65c0bc9f4a0->leave($__internal_8759c3f69a187462b123461fc4c38534d8d6ad99015ff54ec7def65c0bc9f4a0_prof);

        
        $__internal_2f48d06ea5fbbe7833b5df5e998b92d16e08351fb821eceb15fa48cf65accf51->leave($__internal_2f48d06ea5fbbe7833b5df5e998b92d16e08351fb821eceb15fa48cf65accf51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
