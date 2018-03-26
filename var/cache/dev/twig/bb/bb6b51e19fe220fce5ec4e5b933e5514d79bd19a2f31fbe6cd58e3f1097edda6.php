<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_90c515f661ba0957029f62e7816d6064d95afb900007341e45d52ce01e9b60ac extends Twig_Template
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
        $__internal_cec180a5c9c0105b45dcb5fd9a9036f8647480341cd49afcc1e087bee5ce69e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec180a5c9c0105b45dcb5fd9a9036f8647480341cd49afcc1e087bee5ce69e5->enter($__internal_cec180a5c9c0105b45dcb5fd9a9036f8647480341cd49afcc1e087bee5ce69e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_48396f28ab98365bd02b7c3cc047933c8b029c6b71affa141085c507bafbc5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48396f28ab98365bd02b7c3cc047933c8b029c6b71affa141085c507bafbc5a1->enter($__internal_48396f28ab98365bd02b7c3cc047933c8b029c6b71affa141085c507bafbc5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_cec180a5c9c0105b45dcb5fd9a9036f8647480341cd49afcc1e087bee5ce69e5->leave($__internal_cec180a5c9c0105b45dcb5fd9a9036f8647480341cd49afcc1e087bee5ce69e5_prof);

        
        $__internal_48396f28ab98365bd02b7c3cc047933c8b029c6b71affa141085c507bafbc5a1->leave($__internal_48396f28ab98365bd02b7c3cc047933c8b029c6b71affa141085c507bafbc5a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
