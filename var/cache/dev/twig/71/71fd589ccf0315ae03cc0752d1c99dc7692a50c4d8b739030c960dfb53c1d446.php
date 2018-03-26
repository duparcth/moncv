<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_32e3a8b09ed4e8b9ee90d157b50a9da3e653fb7ae8b7dc69517f72419dbfecd7 extends Twig_Template
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
        $__internal_77e9f03a60b65c8241c7d592adbdbc5d3a00aad931e149d06b8b3de847a01cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e9f03a60b65c8241c7d592adbdbc5d3a00aad931e149d06b8b3de847a01cc2->enter($__internal_77e9f03a60b65c8241c7d592adbdbc5d3a00aad931e149d06b8b3de847a01cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d739938e7c1a44495bc2a172a41a856126c39601838c20312c4aa0d310930f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d739938e7c1a44495bc2a172a41a856126c39601838c20312c4aa0d310930f1a->enter($__internal_d739938e7c1a44495bc2a172a41a856126c39601838c20312c4aa0d310930f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_77e9f03a60b65c8241c7d592adbdbc5d3a00aad931e149d06b8b3de847a01cc2->leave($__internal_77e9f03a60b65c8241c7d592adbdbc5d3a00aad931e149d06b8b3de847a01cc2_prof);

        
        $__internal_d739938e7c1a44495bc2a172a41a856126c39601838c20312c4aa0d310930f1a->leave($__internal_d739938e7c1a44495bc2a172a41a856126c39601838c20312c4aa0d310930f1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
