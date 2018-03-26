<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b790b556d58827420fdcc2bef1b5d2eca9c8fb56c50a3e391e0f0475be3dd7f4 extends Twig_Template
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
        $__internal_7a386fc93731d5422e8b55b8a60385392b5a877820e7727662d451df51d1e9ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a386fc93731d5422e8b55b8a60385392b5a877820e7727662d451df51d1e9ba->enter($__internal_7a386fc93731d5422e8b55b8a60385392b5a877820e7727662d451df51d1e9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_dc4acc0b8bae8e5716f25db99220193dbde112fbd59a14081b707bf280721a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4acc0b8bae8e5716f25db99220193dbde112fbd59a14081b707bf280721a37->enter($__internal_dc4acc0b8bae8e5716f25db99220193dbde112fbd59a14081b707bf280721a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7a386fc93731d5422e8b55b8a60385392b5a877820e7727662d451df51d1e9ba->leave($__internal_7a386fc93731d5422e8b55b8a60385392b5a877820e7727662d451df51d1e9ba_prof);

        
        $__internal_dc4acc0b8bae8e5716f25db99220193dbde112fbd59a14081b707bf280721a37->leave($__internal_dc4acc0b8bae8e5716f25db99220193dbde112fbd59a14081b707bf280721a37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
