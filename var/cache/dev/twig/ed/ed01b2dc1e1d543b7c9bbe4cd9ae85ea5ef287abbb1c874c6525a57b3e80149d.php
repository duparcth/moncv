<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d9f0a8f7487f9d67c4017661dc9ac6bdf13d8bca12e387ec8356865926ebac4c extends Twig_Template
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
        $__internal_5e4d712cc50413ac91ad937bfd94d7b0c13c7cdaa0626a48d2a2c50b0c300277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e4d712cc50413ac91ad937bfd94d7b0c13c7cdaa0626a48d2a2c50b0c300277->enter($__internal_5e4d712cc50413ac91ad937bfd94d7b0c13c7cdaa0626a48d2a2c50b0c300277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_44bc2c87f4271c721ccdf70e957de0fb7d07015fd40d8c31d72de91a5241c6e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44bc2c87f4271c721ccdf70e957de0fb7d07015fd40d8c31d72de91a5241c6e0->enter($__internal_44bc2c87f4271c721ccdf70e957de0fb7d07015fd40d8c31d72de91a5241c6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5e4d712cc50413ac91ad937bfd94d7b0c13c7cdaa0626a48d2a2c50b0c300277->leave($__internal_5e4d712cc50413ac91ad937bfd94d7b0c13c7cdaa0626a48d2a2c50b0c300277_prof);

        
        $__internal_44bc2c87f4271c721ccdf70e957de0fb7d07015fd40d8c31d72de91a5241c6e0->leave($__internal_44bc2c87f4271c721ccdf70e957de0fb7d07015fd40d8c31d72de91a5241c6e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
