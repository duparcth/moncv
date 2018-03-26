<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e6342a1f73361c9ac04ec31f753d13a30e7133a91be4fe72e146dc47514a08b5 extends Twig_Template
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
        $__internal_5b44300e26b35e6c643f2335cdf91b4b332db8c9377f5f25e74bd354460d471c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b44300e26b35e6c643f2335cdf91b4b332db8c9377f5f25e74bd354460d471c->enter($__internal_5b44300e26b35e6c643f2335cdf91b4b332db8c9377f5f25e74bd354460d471c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_01eda53e6905200bad6f27a6da971e2c64fd0874b54de7b0e9b8d8568b9712b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01eda53e6905200bad6f27a6da971e2c64fd0874b54de7b0e9b8d8568b9712b4->enter($__internal_01eda53e6905200bad6f27a6da971e2c64fd0874b54de7b0e9b8d8568b9712b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5b44300e26b35e6c643f2335cdf91b4b332db8c9377f5f25e74bd354460d471c->leave($__internal_5b44300e26b35e6c643f2335cdf91b4b332db8c9377f5f25e74bd354460d471c_prof);

        
        $__internal_01eda53e6905200bad6f27a6da971e2c64fd0874b54de7b0e9b8d8568b9712b4->leave($__internal_01eda53e6905200bad6f27a6da971e2c64fd0874b54de7b0e9b8d8568b9712b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
