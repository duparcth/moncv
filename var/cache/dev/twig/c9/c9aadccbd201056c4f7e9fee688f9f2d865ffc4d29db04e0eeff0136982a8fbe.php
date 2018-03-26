<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fd9884ea6e69926d08e06aa018a95bc85a683fa90791ffcd74a6d168addbfc0c extends Twig_Template
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
        $__internal_30870e7412056109e176df4db532935eb7c0112a960e0ec32496f73856217acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30870e7412056109e176df4db532935eb7c0112a960e0ec32496f73856217acb->enter($__internal_30870e7412056109e176df4db532935eb7c0112a960e0ec32496f73856217acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0be9f373370777b83654e0e4f7687c2211b190df6040b30b0fd6770421502c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be9f373370777b83654e0e4f7687c2211b190df6040b30b0fd6770421502c2d->enter($__internal_0be9f373370777b83654e0e4f7687c2211b190df6040b30b0fd6770421502c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_30870e7412056109e176df4db532935eb7c0112a960e0ec32496f73856217acb->leave($__internal_30870e7412056109e176df4db532935eb7c0112a960e0ec32496f73856217acb_prof);

        
        $__internal_0be9f373370777b83654e0e4f7687c2211b190df6040b30b0fd6770421502c2d->leave($__internal_0be9f373370777b83654e0e4f7687c2211b190df6040b30b0fd6770421502c2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
