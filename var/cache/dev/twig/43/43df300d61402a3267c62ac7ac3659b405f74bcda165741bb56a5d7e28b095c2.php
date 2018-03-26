<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5f485990e19975f2fc49879b76b3dbef14e71bbc44366a68a96b2e5ff040571b extends Twig_Template
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
        $__internal_ecf0b5d19b1c12dc77b6d0232870d4e0b347d7696efb80f4c859638f4c6cb77c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf0b5d19b1c12dc77b6d0232870d4e0b347d7696efb80f4c859638f4c6cb77c->enter($__internal_ecf0b5d19b1c12dc77b6d0232870d4e0b347d7696efb80f4c859638f4c6cb77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_dffe5e363a4bd63d73b5e82ada908a13b2557cfcc8e53c92db5bb270904a508f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dffe5e363a4bd63d73b5e82ada908a13b2557cfcc8e53c92db5bb270904a508f->enter($__internal_dffe5e363a4bd63d73b5e82ada908a13b2557cfcc8e53c92db5bb270904a508f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ecf0b5d19b1c12dc77b6d0232870d4e0b347d7696efb80f4c859638f4c6cb77c->leave($__internal_ecf0b5d19b1c12dc77b6d0232870d4e0b347d7696efb80f4c859638f4c6cb77c_prof);

        
        $__internal_dffe5e363a4bd63d73b5e82ada908a13b2557cfcc8e53c92db5bb270904a508f->leave($__internal_dffe5e363a4bd63d73b5e82ada908a13b2557cfcc8e53c92db5bb270904a508f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
