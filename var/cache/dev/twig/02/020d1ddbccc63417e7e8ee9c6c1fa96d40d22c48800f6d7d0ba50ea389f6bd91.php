<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_682a6f2685a1f9a57c3913a162d4f951d6bb029b0554f223078fa00bc8307222 extends Twig_Template
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
        $__internal_06ddb362180eb5a295e9741b052752a37526a7e8ffc58d93de6c3134d5fc41c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ddb362180eb5a295e9741b052752a37526a7e8ffc58d93de6c3134d5fc41c9->enter($__internal_06ddb362180eb5a295e9741b052752a37526a7e8ffc58d93de6c3134d5fc41c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a1dba5c8f3dafb6d83cb9ac7ef7484cccbfcca18e99d2253ae534af9835854ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1dba5c8f3dafb6d83cb9ac7ef7484cccbfcca18e99d2253ae534af9835854ce->enter($__internal_a1dba5c8f3dafb6d83cb9ac7ef7484cccbfcca18e99d2253ae534af9835854ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_06ddb362180eb5a295e9741b052752a37526a7e8ffc58d93de6c3134d5fc41c9->leave($__internal_06ddb362180eb5a295e9741b052752a37526a7e8ffc58d93de6c3134d5fc41c9_prof);

        
        $__internal_a1dba5c8f3dafb6d83cb9ac7ef7484cccbfcca18e99d2253ae534af9835854ce->leave($__internal_a1dba5c8f3dafb6d83cb9ac7ef7484cccbfcca18e99d2253ae534af9835854ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
