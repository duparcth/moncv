<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f52bdca62a5473a7fd94aa25b31fb4737d0bb6c811af47339e502ba9f8d44684 extends Twig_Template
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
        $__internal_391776f783c940f302962f1e285d51d119cc3561e988112ae818c36a6ca5d582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391776f783c940f302962f1e285d51d119cc3561e988112ae818c36a6ca5d582->enter($__internal_391776f783c940f302962f1e285d51d119cc3561e988112ae818c36a6ca5d582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_710cf04b4a4b95bb1850e36dda7ea175b819f7e397b439c8222eb483688244f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710cf04b4a4b95bb1850e36dda7ea175b819f7e397b439c8222eb483688244f8->enter($__internal_710cf04b4a4b95bb1850e36dda7ea175b819f7e397b439c8222eb483688244f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_391776f783c940f302962f1e285d51d119cc3561e988112ae818c36a6ca5d582->leave($__internal_391776f783c940f302962f1e285d51d119cc3561e988112ae818c36a6ca5d582_prof);

        
        $__internal_710cf04b4a4b95bb1850e36dda7ea175b819f7e397b439c8222eb483688244f8->leave($__internal_710cf04b4a4b95bb1850e36dda7ea175b819f7e397b439c8222eb483688244f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
