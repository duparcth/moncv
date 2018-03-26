<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_295cf4d1232de5526216ca5e347ec33fadab247a9776f06a354337f61068f495 extends Twig_Template
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
        $__internal_8b6da723283f3ada69a31a7f7552f2c7379d414283e6450a3b85f10bf895913e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6da723283f3ada69a31a7f7552f2c7379d414283e6450a3b85f10bf895913e->enter($__internal_8b6da723283f3ada69a31a7f7552f2c7379d414283e6450a3b85f10bf895913e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_f6440c6a3bfee737b0139831fc66d20a5cfdd2c8de70cc597413e2bef7e495c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6440c6a3bfee737b0139831fc66d20a5cfdd2c8de70cc597413e2bef7e495c4->enter($__internal_f6440c6a3bfee737b0139831fc66d20a5cfdd2c8de70cc597413e2bef7e495c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8b6da723283f3ada69a31a7f7552f2c7379d414283e6450a3b85f10bf895913e->leave($__internal_8b6da723283f3ada69a31a7f7552f2c7379d414283e6450a3b85f10bf895913e_prof);

        
        $__internal_f6440c6a3bfee737b0139831fc66d20a5cfdd2c8de70cc597413e2bef7e495c4->leave($__internal_f6440c6a3bfee737b0139831fc66d20a5cfdd2c8de70cc597413e2bef7e495c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
