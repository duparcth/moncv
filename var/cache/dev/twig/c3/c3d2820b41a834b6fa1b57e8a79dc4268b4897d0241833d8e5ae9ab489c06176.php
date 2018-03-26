<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5c060836cae49a47269375db264f99d66a38d16e07ebf891f345d4cc2de7bff2 extends Twig_Template
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
        $__internal_c01b2b57ae5c6486922e4c3261292537da95cd5cf4efa3d7341641b63c99d7e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c01b2b57ae5c6486922e4c3261292537da95cd5cf4efa3d7341641b63c99d7e6->enter($__internal_c01b2b57ae5c6486922e4c3261292537da95cd5cf4efa3d7341641b63c99d7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_72da5b9d5542145f9f796316392d15d5a2cefcfa9405fd9fb7795bc33b178278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72da5b9d5542145f9f796316392d15d5a2cefcfa9405fd9fb7795bc33b178278->enter($__internal_72da5b9d5542145f9f796316392d15d5a2cefcfa9405fd9fb7795bc33b178278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c01b2b57ae5c6486922e4c3261292537da95cd5cf4efa3d7341641b63c99d7e6->leave($__internal_c01b2b57ae5c6486922e4c3261292537da95cd5cf4efa3d7341641b63c99d7e6_prof);

        
        $__internal_72da5b9d5542145f9f796316392d15d5a2cefcfa9405fd9fb7795bc33b178278->leave($__internal_72da5b9d5542145f9f796316392d15d5a2cefcfa9405fd9fb7795bc33b178278_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
