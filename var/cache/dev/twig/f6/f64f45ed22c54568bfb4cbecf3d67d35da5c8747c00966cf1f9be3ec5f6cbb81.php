<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_54b6547e40b9ce73ef24dcf5c8031c850416d5d0645041032368b1bc5f84ea31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_887ac52a04b99209ff7acbc86376c76841bec6b1aef46825137d7f25e010b07f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887ac52a04b99209ff7acbc86376c76841bec6b1aef46825137d7f25e010b07f->enter($__internal_887ac52a04b99209ff7acbc86376c76841bec6b1aef46825137d7f25e010b07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_a18b6c57018a68eff7005fbc1d49b900c35368eb24f3ca1c32dda5ce65146c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18b6c57018a68eff7005fbc1d49b900c35368eb24f3ca1c32dda5ce65146c13->enter($__internal_a18b6c57018a68eff7005fbc1d49b900c35368eb24f3ca1c32dda5ce65146c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_887ac52a04b99209ff7acbc86376c76841bec6b1aef46825137d7f25e010b07f->leave($__internal_887ac52a04b99209ff7acbc86376c76841bec6b1aef46825137d7f25e010b07f_prof);

        
        $__internal_a18b6c57018a68eff7005fbc1d49b900c35368eb24f3ca1c32dda5ce65146c13->leave($__internal_a18b6c57018a68eff7005fbc1d49b900c35368eb24f3ca1c32dda5ce65146c13_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_b0e8c890224b63ed9b5d4720146df50426a46e5d90f7189880c5eed45304a407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e8c890224b63ed9b5d4720146df50426a46e5d90f7189880c5eed45304a407->enter($__internal_b0e8c890224b63ed9b5d4720146df50426a46e5d90f7189880c5eed45304a407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_7590d654e6bc65337dce96c9c248a487e9aa1b905db423eb6100e141e4e24cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7590d654e6bc65337dce96c9c248a487e9aa1b905db423eb6100e141e4e24cc9->enter($__internal_7590d654e6bc65337dce96c9c248a487e9aa1b905db423eb6100e141e4e24cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_7590d654e6bc65337dce96c9c248a487e9aa1b905db423eb6100e141e4e24cc9->leave($__internal_7590d654e6bc65337dce96c9c248a487e9aa1b905db423eb6100e141e4e24cc9_prof);

        
        $__internal_b0e8c890224b63ed9b5d4720146df50426a46e5d90f7189880c5eed45304a407->leave($__internal_b0e8c890224b63ed9b5d4720146df50426a46e5d90f7189880c5eed45304a407_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_de85a88a39e51ad1a38c5139bbb31496ff9056fa87536f842335e3a818719b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de85a88a39e51ad1a38c5139bbb31496ff9056fa87536f842335e3a818719b96->enter($__internal_de85a88a39e51ad1a38c5139bbb31496ff9056fa87536f842335e3a818719b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_84a446c37a3c0c13ce55e4a555488e715f4db7d24fbc0eb6ac6e4bfd42a5d714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a446c37a3c0c13ce55e4a555488e715f4db7d24fbc0eb6ac6e4bfd42a5d714->enter($__internal_84a446c37a3c0c13ce55e4a555488e715f4db7d24fbc0eb6ac6e4bfd42a5d714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_84a446c37a3c0c13ce55e4a555488e715f4db7d24fbc0eb6ac6e4bfd42a5d714->leave($__internal_84a446c37a3c0c13ce55e4a555488e715f4db7d24fbc0eb6ac6e4bfd42a5d714_prof);

        
        $__internal_de85a88a39e51ad1a38c5139bbb31496ff9056fa87536f842335e3a818719b96->leave($__internal_de85a88a39e51ad1a38c5139bbb31496ff9056fa87536f842335e3a818719b96_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_471cbb478e213dcf2a6c749c7528817beab03b9518a1d26d8727b76347bbb4ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471cbb478e213dcf2a6c749c7528817beab03b9518a1d26d8727b76347bbb4ea->enter($__internal_471cbb478e213dcf2a6c749c7528817beab03b9518a1d26d8727b76347bbb4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_3d9bc1a61557c75805f406f4431f0e03dacefdf8a2c7c54eae5bcf8d3c8f15e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9bc1a61557c75805f406f4431f0e03dacefdf8a2c7c54eae5bcf8d3c8f15e5->enter($__internal_3d9bc1a61557c75805f406f4431f0e03dacefdf8a2c7c54eae5bcf8d3c8f15e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_3d9bc1a61557c75805f406f4431f0e03dacefdf8a2c7c54eae5bcf8d3c8f15e5->leave($__internal_3d9bc1a61557c75805f406f4431f0e03dacefdf8a2c7c54eae5bcf8d3c8f15e5_prof);

        
        $__internal_471cbb478e213dcf2a6c749c7528817beab03b9518a1d26d8727b76347bbb4ea->leave($__internal_471cbb478e213dcf2a6c749c7528817beab03b9518a1d26d8727b76347bbb4ea_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_edac4bbc66e4609f690ff97397e6ea6431d221e3325625d0efd04af002e58360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edac4bbc66e4609f690ff97397e6ea6431d221e3325625d0efd04af002e58360->enter($__internal_edac4bbc66e4609f690ff97397e6ea6431d221e3325625d0efd04af002e58360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_03c3dee5b3dca10dae102cb11cfeb4102745cd961384f4a92f14aa0aba3be2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c3dee5b3dca10dae102cb11cfeb4102745cd961384f4a92f14aa0aba3be2bd->enter($__internal_03c3dee5b3dca10dae102cb11cfeb4102745cd961384f4a92f14aa0aba3be2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_03c3dee5b3dca10dae102cb11cfeb4102745cd961384f4a92f14aa0aba3be2bd->leave($__internal_03c3dee5b3dca10dae102cb11cfeb4102745cd961384f4a92f14aa0aba3be2bd_prof);

        
        $__internal_edac4bbc66e4609f690ff97397e6ea6431d221e3325625d0efd04af002e58360->leave($__internal_edac4bbc66e4609f690ff97397e6ea6431d221e3325625d0efd04af002e58360_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_5c36ee043d619dfbb1dd91fcb0a7919db953802180dbaae471b6de666f832673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c36ee043d619dfbb1dd91fcb0a7919db953802180dbaae471b6de666f832673->enter($__internal_5c36ee043d619dfbb1dd91fcb0a7919db953802180dbaae471b6de666f832673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_a21df0e35f496c4eaabab711816746acc676d8b5d9b9dbaf5949ddd78ad3e6cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21df0e35f496c4eaabab711816746acc676d8b5d9b9dbaf5949ddd78ad3e6cc->enter($__internal_a21df0e35f496c4eaabab711816746acc676d8b5d9b9dbaf5949ddd78ad3e6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_a21df0e35f496c4eaabab711816746acc676d8b5d9b9dbaf5949ddd78ad3e6cc->leave($__internal_a21df0e35f496c4eaabab711816746acc676d8b5d9b9dbaf5949ddd78ad3e6cc_prof);

        
        $__internal_5c36ee043d619dfbb1dd91fcb0a7919db953802180dbaae471b6de666f832673->leave($__internal_5c36ee043d619dfbb1dd91fcb0a7919db953802180dbaae471b6de666f832673_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_a2b8ca720910f8455bb3bf1b46de911c7ebea92c4907838652bf92da8cdcf210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b8ca720910f8455bb3bf1b46de911c7ebea92c4907838652bf92da8cdcf210->enter($__internal_a2b8ca720910f8455bb3bf1b46de911c7ebea92c4907838652bf92da8cdcf210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_f6fbbb8fed6a61e5d3a36579491c8c06b313d205d301471ff4ff2eeb0289ad8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fbbb8fed6a61e5d3a36579491c8c06b313d205d301471ff4ff2eeb0289ad8a->enter($__internal_f6fbbb8fed6a61e5d3a36579491c8c06b313d205d301471ff4ff2eeb0289ad8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_f6fbbb8fed6a61e5d3a36579491c8c06b313d205d301471ff4ff2eeb0289ad8a->leave($__internal_f6fbbb8fed6a61e5d3a36579491c8c06b313d205d301471ff4ff2eeb0289ad8a_prof);

        
        $__internal_a2b8ca720910f8455bb3bf1b46de911c7ebea92c4907838652bf92da8cdcf210->leave($__internal_a2b8ca720910f8455bb3bf1b46de911c7ebea92c4907838652bf92da8cdcf210_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_66c3dd9b35d14a4f5930c1bb188195a8320e2bb0681d0192128097cc2073d0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c3dd9b35d14a4f5930c1bb188195a8320e2bb0681d0192128097cc2073d0f0->enter($__internal_66c3dd9b35d14a4f5930c1bb188195a8320e2bb0681d0192128097cc2073d0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_76fc71db266d1193def9484641a04c0ddc871ade8513e9c08660c6563973f220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fc71db266d1193def9484641a04c0ddc871ade8513e9c08660c6563973f220->enter($__internal_76fc71db266d1193def9484641a04c0ddc871ade8513e9c08660c6563973f220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_76fc71db266d1193def9484641a04c0ddc871ade8513e9c08660c6563973f220->leave($__internal_76fc71db266d1193def9484641a04c0ddc871ade8513e9c08660c6563973f220_prof);

        
        $__internal_66c3dd9b35d14a4f5930c1bb188195a8320e2bb0681d0192128097cc2073d0f0->leave($__internal_66c3dd9b35d14a4f5930c1bb188195a8320e2bb0681d0192128097cc2073d0f0_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d50f40087d518c75efa6be13c32ffa3c9c2ad7e3aa910e5c2f06f0d6fba341dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50f40087d518c75efa6be13c32ffa3c9c2ad7e3aa910e5c2f06f0d6fba341dd->enter($__internal_d50f40087d518c75efa6be13c32ffa3c9c2ad7e3aa910e5c2f06f0d6fba341dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_becdbc968e7b5eb4a83257ea0cabcdce96a14615d6c054fd0751b98e0d60c617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_becdbc968e7b5eb4a83257ea0cabcdce96a14615d6c054fd0751b98e0d60c617->enter($__internal_becdbc968e7b5eb4a83257ea0cabcdce96a14615d6c054fd0751b98e0d60c617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_becdbc968e7b5eb4a83257ea0cabcdce96a14615d6c054fd0751b98e0d60c617->leave($__internal_becdbc968e7b5eb4a83257ea0cabcdce96a14615d6c054fd0751b98e0d60c617_prof);

        
        $__internal_d50f40087d518c75efa6be13c32ffa3c9c2ad7e3aa910e5c2f06f0d6fba341dd->leave($__internal_d50f40087d518c75efa6be13c32ffa3c9c2ad7e3aa910e5c2f06f0d6fba341dd_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
