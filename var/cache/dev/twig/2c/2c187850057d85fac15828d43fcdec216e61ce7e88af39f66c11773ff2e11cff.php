<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c8948eab21f13e8d1a5944c9aa6a68b35a475a21ebdbde87d9199569f7b41d48 extends Twig_Template
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
        $__internal_480a8307985937d0b32877df124bb95375698a7962e321761ca39ac3b6d29097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480a8307985937d0b32877df124bb95375698a7962e321761ca39ac3b6d29097->enter($__internal_480a8307985937d0b32877df124bb95375698a7962e321761ca39ac3b6d29097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_93c075c781fe7472ae20245656ec836776c14fdf0155101de0e900c2a131dc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c075c781fe7472ae20245656ec836776c14fdf0155101de0e900c2a131dc45->enter($__internal_93c075c781fe7472ae20245656ec836776c14fdf0155101de0e900c2a131dc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_480a8307985937d0b32877df124bb95375698a7962e321761ca39ac3b6d29097->leave($__internal_480a8307985937d0b32877df124bb95375698a7962e321761ca39ac3b6d29097_prof);

        
        $__internal_93c075c781fe7472ae20245656ec836776c14fdf0155101de0e900c2a131dc45->leave($__internal_93c075c781fe7472ae20245656ec836776c14fdf0155101de0e900c2a131dc45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
