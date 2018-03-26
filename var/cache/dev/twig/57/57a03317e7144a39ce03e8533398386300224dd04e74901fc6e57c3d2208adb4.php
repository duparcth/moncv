<?php

/* form_table_layout.html.twig */
class __TwigTemplate_c5def86c74746c0ec34e153f54b6ccdddc0f4cf9b9c2adf4fef6d8954bca903a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbbbea612c6e803075bd82494c849ced50a652cf419ba822a7283822e6e49526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbbea612c6e803075bd82494c849ced50a652cf419ba822a7283822e6e49526->enter($__internal_cbbbea612c6e803075bd82494c849ced50a652cf419ba822a7283822e6e49526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_6359d19f311b6993c6da7348696144bafe3b494fa2c765eb676ac51956528d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6359d19f311b6993c6da7348696144bafe3b494fa2c765eb676ac51956528d8c->enter($__internal_6359d19f311b6993c6da7348696144bafe3b494fa2c765eb676ac51956528d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_cbbbea612c6e803075bd82494c849ced50a652cf419ba822a7283822e6e49526->leave($__internal_cbbbea612c6e803075bd82494c849ced50a652cf419ba822a7283822e6e49526_prof);

        
        $__internal_6359d19f311b6993c6da7348696144bafe3b494fa2c765eb676ac51956528d8c->leave($__internal_6359d19f311b6993c6da7348696144bafe3b494fa2c765eb676ac51956528d8c_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d77b3461275053f1a4126b1c5b2ab820792d8fa8893f7f20270b8efe4570b1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77b3461275053f1a4126b1c5b2ab820792d8fa8893f7f20270b8efe4570b1e4->enter($__internal_d77b3461275053f1a4126b1c5b2ab820792d8fa8893f7f20270b8efe4570b1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_19ab59ec97312b3967499d0fe8746cd79677f8e7b0845aa4f5a24f75d8a25780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ab59ec97312b3967499d0fe8746cd79677f8e7b0845aa4f5a24f75d8a25780->enter($__internal_19ab59ec97312b3967499d0fe8746cd79677f8e7b0845aa4f5a24f75d8a25780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_19ab59ec97312b3967499d0fe8746cd79677f8e7b0845aa4f5a24f75d8a25780->leave($__internal_19ab59ec97312b3967499d0fe8746cd79677f8e7b0845aa4f5a24f75d8a25780_prof);

        
        $__internal_d77b3461275053f1a4126b1c5b2ab820792d8fa8893f7f20270b8efe4570b1e4->leave($__internal_d77b3461275053f1a4126b1c5b2ab820792d8fa8893f7f20270b8efe4570b1e4_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9299f54dabf5b5208c72eca6c6ad95eff4747a0b9151a08ec9d4db71efdce849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9299f54dabf5b5208c72eca6c6ad95eff4747a0b9151a08ec9d4db71efdce849->enter($__internal_9299f54dabf5b5208c72eca6c6ad95eff4747a0b9151a08ec9d4db71efdce849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_98e6bfe36effb6cef3e21410c4cf587780f2d1193423b2ce5afc8d93cd1e0860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e6bfe36effb6cef3e21410c4cf587780f2d1193423b2ce5afc8d93cd1e0860->enter($__internal_98e6bfe36effb6cef3e21410c4cf587780f2d1193423b2ce5afc8d93cd1e0860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_98e6bfe36effb6cef3e21410c4cf587780f2d1193423b2ce5afc8d93cd1e0860->leave($__internal_98e6bfe36effb6cef3e21410c4cf587780f2d1193423b2ce5afc8d93cd1e0860_prof);

        
        $__internal_9299f54dabf5b5208c72eca6c6ad95eff4747a0b9151a08ec9d4db71efdce849->leave($__internal_9299f54dabf5b5208c72eca6c6ad95eff4747a0b9151a08ec9d4db71efdce849_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_06d5e7d60507ef8c1c7d427ab557a15db8619df716002a1009d40ab7c59998d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d5e7d60507ef8c1c7d427ab557a15db8619df716002a1009d40ab7c59998d7->enter($__internal_06d5e7d60507ef8c1c7d427ab557a15db8619df716002a1009d40ab7c59998d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_19e473c5d878673408ef37da33607336c6c0c90f22601ee9b36eb94159c8f169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e473c5d878673408ef37da33607336c6c0c90f22601ee9b36eb94159c8f169->enter($__internal_19e473c5d878673408ef37da33607336c6c0c90f22601ee9b36eb94159c8f169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_19e473c5d878673408ef37da33607336c6c0c90f22601ee9b36eb94159c8f169->leave($__internal_19e473c5d878673408ef37da33607336c6c0c90f22601ee9b36eb94159c8f169_prof);

        
        $__internal_06d5e7d60507ef8c1c7d427ab557a15db8619df716002a1009d40ab7c59998d7->leave($__internal_06d5e7d60507ef8c1c7d427ab557a15db8619df716002a1009d40ab7c59998d7_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_b93e168eb1d09da20e4ecc47bf94dffec3a079ad67beb1edf57caac038173782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93e168eb1d09da20e4ecc47bf94dffec3a079ad67beb1edf57caac038173782->enter($__internal_b93e168eb1d09da20e4ecc47bf94dffec3a079ad67beb1edf57caac038173782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_26f1f4335ab909115ce7115211758fa939f935d56f9d6f793eb0091e79e045fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f1f4335ab909115ce7115211758fa939f935d56f9d6f793eb0091e79e045fb->enter($__internal_26f1f4335ab909115ce7115211758fa939f935d56f9d6f793eb0091e79e045fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_26f1f4335ab909115ce7115211758fa939f935d56f9d6f793eb0091e79e045fb->leave($__internal_26f1f4335ab909115ce7115211758fa939f935d56f9d6f793eb0091e79e045fb_prof);

        
        $__internal_b93e168eb1d09da20e4ecc47bf94dffec3a079ad67beb1edf57caac038173782->leave($__internal_b93e168eb1d09da20e4ecc47bf94dffec3a079ad67beb1edf57caac038173782_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
