<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_152be14bf245dde0993fee44ab57b03b6f71fae4ee64224036a160eba6407aa6 extends Twig_Template
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
        $__internal_94c821347e3eca9f6563fe910bdb7a0c4b6ea476337a8d74da2d98e24ba8b9e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c821347e3eca9f6563fe910bdb7a0c4b6ea476337a8d74da2d98e24ba8b9e1->enter($__internal_94c821347e3eca9f6563fe910bdb7a0c4b6ea476337a8d74da2d98e24ba8b9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ad779d0b7b5f58f520474603c66e24a6b7ac47aec261e508305a7e799e285250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad779d0b7b5f58f520474603c66e24a6b7ac47aec261e508305a7e799e285250->enter($__internal_ad779d0b7b5f58f520474603c66e24a6b7ac47aec261e508305a7e799e285250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_94c821347e3eca9f6563fe910bdb7a0c4b6ea476337a8d74da2d98e24ba8b9e1->leave($__internal_94c821347e3eca9f6563fe910bdb7a0c4b6ea476337a8d74da2d98e24ba8b9e1_prof);

        
        $__internal_ad779d0b7b5f58f520474603c66e24a6b7ac47aec261e508305a7e799e285250->leave($__internal_ad779d0b7b5f58f520474603c66e24a6b7ac47aec261e508305a7e799e285250_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
