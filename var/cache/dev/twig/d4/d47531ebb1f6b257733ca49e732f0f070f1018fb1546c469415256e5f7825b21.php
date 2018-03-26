<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_c90bb60ee7e39ceadc9027a4f93417cf1e414564460c46b6079701f480f248d6 extends Twig_Template
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
        $__internal_15feb11c7ab603e721ec6322b8c37b2dacbb0152a1824feff7019352cc73172c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15feb11c7ab603e721ec6322b8c37b2dacbb0152a1824feff7019352cc73172c->enter($__internal_15feb11c7ab603e721ec6322b8c37b2dacbb0152a1824feff7019352cc73172c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_567e579ee92c0608a497b346b170a53c2e5f0fc2336fc6b3d6952e5629c5a4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567e579ee92c0608a497b346b170a53c2e5f0fc2336fc6b3d6952e5629c5a4aa->enter($__internal_567e579ee92c0608a497b346b170a53c2e5f0fc2336fc6b3d6952e5629c5a4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_15feb11c7ab603e721ec6322b8c37b2dacbb0152a1824feff7019352cc73172c->leave($__internal_15feb11c7ab603e721ec6322b8c37b2dacbb0152a1824feff7019352cc73172c_prof);

        
        $__internal_567e579ee92c0608a497b346b170a53c2e5f0fc2336fc6b3d6952e5629c5a4aa->leave($__internal_567e579ee92c0608a497b346b170a53c2e5f0fc2336fc6b3d6952e5629c5a4aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
