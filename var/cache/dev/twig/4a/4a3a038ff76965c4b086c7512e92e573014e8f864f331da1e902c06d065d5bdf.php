<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b02dfd81140eb2a24a8fb18cd6332cff44805b1d92cb2302754604add0b319f9 extends Twig_Template
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
        $__internal_68fb1868f5c1090be71610f3af351543ee26188b1e9c0453df9b068a96c5fe18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68fb1868f5c1090be71610f3af351543ee26188b1e9c0453df9b068a96c5fe18->enter($__internal_68fb1868f5c1090be71610f3af351543ee26188b1e9c0453df9b068a96c5fe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_18264e9cf202de43eaa09fc64f88ab9eb1edcb87e43a2a738f5f7af5f2b15668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18264e9cf202de43eaa09fc64f88ab9eb1edcb87e43a2a738f5f7af5f2b15668->enter($__internal_18264e9cf202de43eaa09fc64f88ab9eb1edcb87e43a2a738f5f7af5f2b15668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_68fb1868f5c1090be71610f3af351543ee26188b1e9c0453df9b068a96c5fe18->leave($__internal_68fb1868f5c1090be71610f3af351543ee26188b1e9c0453df9b068a96c5fe18_prof);

        
        $__internal_18264e9cf202de43eaa09fc64f88ab9eb1edcb87e43a2a738f5f7af5f2b15668->leave($__internal_18264e9cf202de43eaa09fc64f88ab9eb1edcb87e43a2a738f5f7af5f2b15668_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
