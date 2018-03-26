<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_cd665b4961e8ff189fad7ba52230790b95be514d9def5f1d7c72958f14873073 extends Twig_Template
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
        $__internal_93b8cae45e6a35a30f203d9f09f9affa4ca55b4a8637642addc77f3ec9c028d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b8cae45e6a35a30f203d9f09f9affa4ca55b4a8637642addc77f3ec9c028d4->enter($__internal_93b8cae45e6a35a30f203d9f09f9affa4ca55b4a8637642addc77f3ec9c028d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_349e007f46d1a6320b846619f7d57bc9ddd0be0b4b9538d925bfcb9bb0be843c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349e007f46d1a6320b846619f7d57bc9ddd0be0b4b9538d925bfcb9bb0be843c->enter($__internal_349e007f46d1a6320b846619f7d57bc9ddd0be0b4b9538d925bfcb9bb0be843c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_93b8cae45e6a35a30f203d9f09f9affa4ca55b4a8637642addc77f3ec9c028d4->leave($__internal_93b8cae45e6a35a30f203d9f09f9affa4ca55b4a8637642addc77f3ec9c028d4_prof);

        
        $__internal_349e007f46d1a6320b846619f7d57bc9ddd0be0b4b9538d925bfcb9bb0be843c->leave($__internal_349e007f46d1a6320b846619f7d57bc9ddd0be0b4b9538d925bfcb9bb0be843c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
