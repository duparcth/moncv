<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8a862fb6d30ff5910b1b3bef696c4f28b770c900dd3f91037dd793d5bcc44567 extends Twig_Template
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
        $__internal_a760e0e64a5a1374f4ff7ed1688e7f1adf76b17bd77957bc152ac4b94461ff30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a760e0e64a5a1374f4ff7ed1688e7f1adf76b17bd77957bc152ac4b94461ff30->enter($__internal_a760e0e64a5a1374f4ff7ed1688e7f1adf76b17bd77957bc152ac4b94461ff30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e78600e873f44ba676ce594bc5a81bfd576e31695d38ead15aa556b4dcea86d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78600e873f44ba676ce594bc5a81bfd576e31695d38ead15aa556b4dcea86d3->enter($__internal_e78600e873f44ba676ce594bc5a81bfd576e31695d38ead15aa556b4dcea86d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a760e0e64a5a1374f4ff7ed1688e7f1adf76b17bd77957bc152ac4b94461ff30->leave($__internal_a760e0e64a5a1374f4ff7ed1688e7f1adf76b17bd77957bc152ac4b94461ff30_prof);

        
        $__internal_e78600e873f44ba676ce594bc5a81bfd576e31695d38ead15aa556b4dcea86d3->leave($__internal_e78600e873f44ba676ce594bc5a81bfd576e31695d38ead15aa556b4dcea86d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
