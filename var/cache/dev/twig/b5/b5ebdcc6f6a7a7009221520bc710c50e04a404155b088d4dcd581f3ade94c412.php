<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_64372ec0c3594942c0d4c852b69f635b1becbc9c7e8e1115139c40e559327468 extends Twig_Template
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
        $__internal_955bb124f104aac369a76c99603848b7aeb9c19069bdb737f3be37d6288d33ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955bb124f104aac369a76c99603848b7aeb9c19069bdb737f3be37d6288d33ea->enter($__internal_955bb124f104aac369a76c99603848b7aeb9c19069bdb737f3be37d6288d33ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_0d3f7494dc27c24d4ed3c998fd197caa2ff27ae8aedf15006af4bb9c66137833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3f7494dc27c24d4ed3c998fd197caa2ff27ae8aedf15006af4bb9c66137833->enter($__internal_0d3f7494dc27c24d4ed3c998fd197caa2ff27ae8aedf15006af4bb9c66137833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_955bb124f104aac369a76c99603848b7aeb9c19069bdb737f3be37d6288d33ea->leave($__internal_955bb124f104aac369a76c99603848b7aeb9c19069bdb737f3be37d6288d33ea_prof);

        
        $__internal_0d3f7494dc27c24d4ed3c998fd197caa2ff27ae8aedf15006af4bb9c66137833->leave($__internal_0d3f7494dc27c24d4ed3c998fd197caa2ff27ae8aedf15006af4bb9c66137833_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
