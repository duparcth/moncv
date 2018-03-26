<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_23d2a24170420de7d4c3e5aed4a2f763687bcaa704969614733b72bfc477a56d extends Twig_Template
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
        $__internal_2b1693b9dd2184ef4f45061c7618e72ab73fe70c6aabffed1316b8f56a8d8855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1693b9dd2184ef4f45061c7618e72ab73fe70c6aabffed1316b8f56a8d8855->enter($__internal_2b1693b9dd2184ef4f45061c7618e72ab73fe70c6aabffed1316b8f56a8d8855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_33693d9f180104e79fbe89446319ac7045716496499be3dff91e0fb4a8c02114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33693d9f180104e79fbe89446319ac7045716496499be3dff91e0fb4a8c02114->enter($__internal_33693d9f180104e79fbe89446319ac7045716496499be3dff91e0fb4a8c02114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2b1693b9dd2184ef4f45061c7618e72ab73fe70c6aabffed1316b8f56a8d8855->leave($__internal_2b1693b9dd2184ef4f45061c7618e72ab73fe70c6aabffed1316b8f56a8d8855_prof);

        
        $__internal_33693d9f180104e79fbe89446319ac7045716496499be3dff91e0fb4a8c02114->leave($__internal_33693d9f180104e79fbe89446319ac7045716496499be3dff91e0fb4a8c02114_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
