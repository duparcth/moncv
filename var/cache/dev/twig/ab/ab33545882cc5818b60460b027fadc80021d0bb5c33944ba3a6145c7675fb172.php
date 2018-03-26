<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_589da9bf4712d58ce229ce2f01c52a7859f00baa0fb140d7796a05f5af2b0683 extends Twig_Template
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
        $__internal_950ff97a53a86fe7cb2f58db8347a4405559b4046e6740858c071102b51aee07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950ff97a53a86fe7cb2f58db8347a4405559b4046e6740858c071102b51aee07->enter($__internal_950ff97a53a86fe7cb2f58db8347a4405559b4046e6740858c071102b51aee07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e19a90c854e46e53d89f40e5bbbb481e2cf7d108df1c4300b6ff50bd630537da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19a90c854e46e53d89f40e5bbbb481e2cf7d108df1c4300b6ff50bd630537da->enter($__internal_e19a90c854e46e53d89f40e5bbbb481e2cf7d108df1c4300b6ff50bd630537da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_950ff97a53a86fe7cb2f58db8347a4405559b4046e6740858c071102b51aee07->leave($__internal_950ff97a53a86fe7cb2f58db8347a4405559b4046e6740858c071102b51aee07_prof);

        
        $__internal_e19a90c854e46e53d89f40e5bbbb481e2cf7d108df1c4300b6ff50bd630537da->leave($__internal_e19a90c854e46e53d89f40e5bbbb481e2cf7d108df1c4300b6ff50bd630537da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
