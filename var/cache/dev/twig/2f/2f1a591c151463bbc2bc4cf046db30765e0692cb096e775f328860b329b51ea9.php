<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bd261761b9df5032b9aa3cb8b0af94d0d155b6dd5a02f66fcea2fc15316666b1 extends Twig_Template
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
        $__internal_3ee62a8ff13a91733a8f9c9225a6a20e00e84ec1ff3efda87ed1e5ff66f8176e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee62a8ff13a91733a8f9c9225a6a20e00e84ec1ff3efda87ed1e5ff66f8176e->enter($__internal_3ee62a8ff13a91733a8f9c9225a6a20e00e84ec1ff3efda87ed1e5ff66f8176e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a715488d4d4ab32015d0834321dc9da1776c32d7c4f202d64dd6e1fd00abc794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a715488d4d4ab32015d0834321dc9da1776c32d7c4f202d64dd6e1fd00abc794->enter($__internal_a715488d4d4ab32015d0834321dc9da1776c32d7c4f202d64dd6e1fd00abc794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3ee62a8ff13a91733a8f9c9225a6a20e00e84ec1ff3efda87ed1e5ff66f8176e->leave($__internal_3ee62a8ff13a91733a8f9c9225a6a20e00e84ec1ff3efda87ed1e5ff66f8176e_prof);

        
        $__internal_a715488d4d4ab32015d0834321dc9da1776c32d7c4f202d64dd6e1fd00abc794->leave($__internal_a715488d4d4ab32015d0834321dc9da1776c32d7c4f202d64dd6e1fd00abc794_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
