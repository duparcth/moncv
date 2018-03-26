<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dc877f7ddd8612200a865db254dea07957d021e8dc53252cc566674c569806b6 extends Twig_Template
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
        $__internal_8279530fc98a68b590c42135d2291bdc679c2b737758d9e2bb06aa449e49a32e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8279530fc98a68b590c42135d2291bdc679c2b737758d9e2bb06aa449e49a32e->enter($__internal_8279530fc98a68b590c42135d2291bdc679c2b737758d9e2bb06aa449e49a32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_56e1bbe0ffc991b9ca26e02201539338ba83ff47273d2d5e1a5cd37ad62c16fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e1bbe0ffc991b9ca26e02201539338ba83ff47273d2d5e1a5cd37ad62c16fd->enter($__internal_56e1bbe0ffc991b9ca26e02201539338ba83ff47273d2d5e1a5cd37ad62c16fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8279530fc98a68b590c42135d2291bdc679c2b737758d9e2bb06aa449e49a32e->leave($__internal_8279530fc98a68b590c42135d2291bdc679c2b737758d9e2bb06aa449e49a32e_prof);

        
        $__internal_56e1bbe0ffc991b9ca26e02201539338ba83ff47273d2d5e1a5cd37ad62c16fd->leave($__internal_56e1bbe0ffc991b9ca26e02201539338ba83ff47273d2d5e1a5cd37ad62c16fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
