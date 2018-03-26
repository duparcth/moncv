<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_103e10cc104c0b40daf4b4fe99961f77bd9645f170ff7cb7bad7d4b8e86ad26c extends Twig_Template
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
        $__internal_bac0ae9b6d464feb0f9c98adf6bf811c80be802c4acddbcdda39fc46c7de6125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac0ae9b6d464feb0f9c98adf6bf811c80be802c4acddbcdda39fc46c7de6125->enter($__internal_bac0ae9b6d464feb0f9c98adf6bf811c80be802c4acddbcdda39fc46c7de6125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_02ed053eca7dce916ab1ea0a07c7c48e284431681de71faa21e76a5cef5cf549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ed053eca7dce916ab1ea0a07c7c48e284431681de71faa21e76a5cef5cf549->enter($__internal_02ed053eca7dce916ab1ea0a07c7c48e284431681de71faa21e76a5cef5cf549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bac0ae9b6d464feb0f9c98adf6bf811c80be802c4acddbcdda39fc46c7de6125->leave($__internal_bac0ae9b6d464feb0f9c98adf6bf811c80be802c4acddbcdda39fc46c7de6125_prof);

        
        $__internal_02ed053eca7dce916ab1ea0a07c7c48e284431681de71faa21e76a5cef5cf549->leave($__internal_02ed053eca7dce916ab1ea0a07c7c48e284431681de71faa21e76a5cef5cf549_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
