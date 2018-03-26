<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e929bec2e6a149b6930b05325c178490343a7a918507da619e91abbae1879c4e extends Twig_Template
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
        $__internal_9059bc4bd1bbea323a49ab57f2e7cbdecb6ea02593fdb567ada29298a5684df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9059bc4bd1bbea323a49ab57f2e7cbdecb6ea02593fdb567ada29298a5684df9->enter($__internal_9059bc4bd1bbea323a49ab57f2e7cbdecb6ea02593fdb567ada29298a5684df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6bd28d4c11a7f02113db4a6af5a7ff3184da3b72efbcd60a606d14f2b12830b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd28d4c11a7f02113db4a6af5a7ff3184da3b72efbcd60a606d14f2b12830b7->enter($__internal_6bd28d4c11a7f02113db4a6af5a7ff3184da3b72efbcd60a606d14f2b12830b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9059bc4bd1bbea323a49ab57f2e7cbdecb6ea02593fdb567ada29298a5684df9->leave($__internal_9059bc4bd1bbea323a49ab57f2e7cbdecb6ea02593fdb567ada29298a5684df9_prof);

        
        $__internal_6bd28d4c11a7f02113db4a6af5a7ff3184da3b72efbcd60a606d14f2b12830b7->leave($__internal_6bd28d4c11a7f02113db4a6af5a7ff3184da3b72efbcd60a606d14f2b12830b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
