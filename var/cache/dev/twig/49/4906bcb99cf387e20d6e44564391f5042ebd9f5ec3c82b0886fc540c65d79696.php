<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_cf81ec3092be0f0084facd9830a10688cc18b459082fade1c92fda720aeace07 extends Twig_Template
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
        $__internal_4fe93d939fa1a6c6366d5d7744593536325887a4f56c104066d34fa37fa2c3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe93d939fa1a6c6366d5d7744593536325887a4f56c104066d34fa37fa2c3a7->enter($__internal_4fe93d939fa1a6c6366d5d7744593536325887a4f56c104066d34fa37fa2c3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9b037fd9a0c2e7dc3a9019ae1226c302ec053827475585f6c0e405b0c82462b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b037fd9a0c2e7dc3a9019ae1226c302ec053827475585f6c0e405b0c82462b4->enter($__internal_9b037fd9a0c2e7dc3a9019ae1226c302ec053827475585f6c0e405b0c82462b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_4fe93d939fa1a6c6366d5d7744593536325887a4f56c104066d34fa37fa2c3a7->leave($__internal_4fe93d939fa1a6c6366d5d7744593536325887a4f56c104066d34fa37fa2c3a7_prof);

        
        $__internal_9b037fd9a0c2e7dc3a9019ae1226c302ec053827475585f6c0e405b0c82462b4->leave($__internal_9b037fd9a0c2e7dc3a9019ae1226c302ec053827475585f6c0e405b0c82462b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
