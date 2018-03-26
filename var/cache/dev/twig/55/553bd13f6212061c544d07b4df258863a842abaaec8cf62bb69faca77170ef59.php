<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_102b9f0600ae7dffa1e6cfef2661902e0f33827312a7b37369632ebb95f503d5 extends Twig_Template
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
        $__internal_55815b6c3b4984e984e2e598dd701fc8112c1a81353e9207b5d008df9d863249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55815b6c3b4984e984e2e598dd701fc8112c1a81353e9207b5d008df9d863249->enter($__internal_55815b6c3b4984e984e2e598dd701fc8112c1a81353e9207b5d008df9d863249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_07634e993c80770df1b4c184465c05fb1d88a03080db2b7d909edaaf98f076bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07634e993c80770df1b4c184465c05fb1d88a03080db2b7d909edaaf98f076bd->enter($__internal_07634e993c80770df1b4c184465c05fb1d88a03080db2b7d909edaaf98f076bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_55815b6c3b4984e984e2e598dd701fc8112c1a81353e9207b5d008df9d863249->leave($__internal_55815b6c3b4984e984e2e598dd701fc8112c1a81353e9207b5d008df9d863249_prof);

        
        $__internal_07634e993c80770df1b4c184465c05fb1d88a03080db2b7d909edaaf98f076bd->leave($__internal_07634e993c80770df1b4c184465c05fb1d88a03080db2b7d909edaaf98f076bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
