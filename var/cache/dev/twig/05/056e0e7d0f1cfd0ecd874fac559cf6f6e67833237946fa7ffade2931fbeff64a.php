<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_41beac728198993731c562523c12cd3b20e7bb3d2627b8faff2ebf8f3db45573 extends Twig_Template
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
        $__internal_50cc8c237a0ef59dc3190affcb383ba93c112fd66281b4ad492c93e5f4f7772f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50cc8c237a0ef59dc3190affcb383ba93c112fd66281b4ad492c93e5f4f7772f->enter($__internal_50cc8c237a0ef59dc3190affcb383ba93c112fd66281b4ad492c93e5f4f7772f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4b153d98d3ee644301964c9152c3cf23d2d09288fb5dad006e616bcc472df3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b153d98d3ee644301964c9152c3cf23d2d09288fb5dad006e616bcc472df3e9->enter($__internal_4b153d98d3ee644301964c9152c3cf23d2d09288fb5dad006e616bcc472df3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_50cc8c237a0ef59dc3190affcb383ba93c112fd66281b4ad492c93e5f4f7772f->leave($__internal_50cc8c237a0ef59dc3190affcb383ba93c112fd66281b4ad492c93e5f4f7772f_prof);

        
        $__internal_4b153d98d3ee644301964c9152c3cf23d2d09288fb5dad006e616bcc472df3e9->leave($__internal_4b153d98d3ee644301964c9152c3cf23d2d09288fb5dad006e616bcc472df3e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
