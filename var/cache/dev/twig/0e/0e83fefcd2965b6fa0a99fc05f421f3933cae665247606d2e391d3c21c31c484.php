<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_175b6ce867f5a90d57d065b2e25b22389265e3d6d895c4b5f249ac7ce76d5f66 extends Twig_Template
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
        $__internal_fa997c25e8d284f58023a72099704f9cd216b9e6886cdb40de77ab3bce6d7c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa997c25e8d284f58023a72099704f9cd216b9e6886cdb40de77ab3bce6d7c03->enter($__internal_fa997c25e8d284f58023a72099704f9cd216b9e6886cdb40de77ab3bce6d7c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_2ca98c0834601208439d838a0a58e90dd9083a269989c863f14f573e9f9e7916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca98c0834601208439d838a0a58e90dd9083a269989c863f14f573e9f9e7916->enter($__internal_2ca98c0834601208439d838a0a58e90dd9083a269989c863f14f573e9f9e7916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_fa997c25e8d284f58023a72099704f9cd216b9e6886cdb40de77ab3bce6d7c03->leave($__internal_fa997c25e8d284f58023a72099704f9cd216b9e6886cdb40de77ab3bce6d7c03_prof);

        
        $__internal_2ca98c0834601208439d838a0a58e90dd9083a269989c863f14f573e9f9e7916->leave($__internal_2ca98c0834601208439d838a0a58e90dd9083a269989c863f14f573e9f9e7916_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
