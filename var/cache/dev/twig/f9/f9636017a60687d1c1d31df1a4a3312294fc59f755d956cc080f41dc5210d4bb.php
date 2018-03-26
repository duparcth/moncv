<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_fd56ab7cef52c4c8575cc4e5cb66acb790adf599697eef271833c76e06bd13c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89e0885a68ead9b1ea5f86741f21d8e3fe05fa2642bac03abda46c7dca99ae54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e0885a68ead9b1ea5f86741f21d8e3fe05fa2642bac03abda46c7dca99ae54->enter($__internal_89e0885a68ead9b1ea5f86741f21d8e3fe05fa2642bac03abda46c7dca99ae54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_529c12ad4cf95e67603efa2c795cc93e392f44313be9a7b871c5f146f1b697a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529c12ad4cf95e67603efa2c795cc93e392f44313be9a7b871c5f146f1b697a4->enter($__internal_529c12ad4cf95e67603efa2c795cc93e392f44313be9a7b871c5f146f1b697a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_89e0885a68ead9b1ea5f86741f21d8e3fe05fa2642bac03abda46c7dca99ae54->leave($__internal_89e0885a68ead9b1ea5f86741f21d8e3fe05fa2642bac03abda46c7dca99ae54_prof);

        
        $__internal_529c12ad4cf95e67603efa2c795cc93e392f44313be9a7b871c5f146f1b697a4->leave($__internal_529c12ad4cf95e67603efa2c795cc93e392f44313be9a7b871c5f146f1b697a4_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_551dcc7dc4a401be8abfbaee4bc7dc4f851aa33d83d09f9e6218dcbe9bbc7c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_551dcc7dc4a401be8abfbaee4bc7dc4f851aa33d83d09f9e6218dcbe9bbc7c16->enter($__internal_551dcc7dc4a401be8abfbaee4bc7dc4f851aa33d83d09f9e6218dcbe9bbc7c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d3a697a1ea70c7d774d491d304e52017c584c956185a28d5574a3b4f5ab69523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a697a1ea70c7d774d491d304e52017c584c956185a28d5574a3b4f5ab69523->enter($__internal_d3a697a1ea70c7d774d491d304e52017c584c956185a28d5574a3b4f5ab69523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? $this->getContext($context, "expanded")))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_d3a697a1ea70c7d774d491d304e52017c584c956185a28d5574a3b4f5ab69523->leave($__internal_d3a697a1ea70c7d774d491d304e52017c584c956185a28d5574a3b4f5ab69523_prof);

        
        $__internal_551dcc7dc4a401be8abfbaee4bc7dc4f851aa33d83d09f9e6218dcbe9bbc7c16->leave($__internal_551dcc7dc4a401be8abfbaee4bc7dc4f851aa33d83d09f9e6218dcbe9bbc7c16_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_293f0482741e2aa7750c90e9ad7bfc8177ab873d18fae12cb6ba4734d0d0e3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293f0482741e2aa7750c90e9ad7bfc8177ab873d18fae12cb6ba4734d0d0e3f5->enter($__internal_293f0482741e2aa7750c90e9ad7bfc8177ab873d18fae12cb6ba4734d0d0e3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_870412b6124302c62e5f89d619af74ca5b8190c2e71ce47183d4fc319d9878cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870412b6124302c62e5f89d619af74ca5b8190c2e71ce47183d4fc319d9878cf->enter($__internal_870412b6124302c62e5f89d619af74ca5b8190c2e71ce47183d4fc319d9878cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_870412b6124302c62e5f89d619af74ca5b8190c2e71ce47183d4fc319d9878cf->leave($__internal_870412b6124302c62e5f89d619af74ca5b8190c2e71ce47183d4fc319d9878cf_prof);

        
        $__internal_293f0482741e2aa7750c90e9ad7bfc8177ab873d18fae12cb6ba4734d0d0e3f5->leave($__internal_293f0482741e2aa7750c90e9ad7bfc8177ab873d18fae12cb6ba4734d0d0e3f5_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4999b7173c1dbfab278e8862fdc5b1fc41caab532de146f1273a461495e1097d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4999b7173c1dbfab278e8862fdc5b1fc41caab532de146f1273a461495e1097d->enter($__internal_4999b7173c1dbfab278e8862fdc5b1fc41caab532de146f1273a461495e1097d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d99a083103b70be367e635af5fc6e2b4a1e3d0520ce9655d69ca6f21e60fecd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99a083103b70be367e635af5fc6e2b4a1e3d0520ce9655d69ca6f21e60fecd8->enter($__internal_d99a083103b70be367e635af5fc6e2b4a1e3d0520ce9655d69ca6f21e60fecd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? $this->getContext($context, "expanded")))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_d99a083103b70be367e635af5fc6e2b4a1e3d0520ce9655d69ca6f21e60fecd8->leave($__internal_d99a083103b70be367e635af5fc6e2b4a1e3d0520ce9655d69ca6f21e60fecd8_prof);

        
        $__internal_4999b7173c1dbfab278e8862fdc5b1fc41caab532de146f1273a461495e1097d->leave($__internal_4999b7173c1dbfab278e8862fdc5b1fc41caab532de146f1273a461495e1097d_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_25942ee78bd22de5d5c9b07442c455eb4fed3d687650ca84697e33ee3b30b96f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25942ee78bd22de5d5c9b07442c455eb4fed3d687650ca84697e33ee3b30b96f->enter($__internal_25942ee78bd22de5d5c9b07442c455eb4fed3d687650ca84697e33ee3b30b96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_385a28c8112b29fb4bb516520a3521ff3b701b84530286cb0793f6ed4c48fc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385a28c8112b29fb4bb516520a3521ff3b701b84530286cb0793f6ed4c48fc19->enter($__internal_385a28c8112b29fb4bb516520a3521ff3b701b84530286cb0793f6ed4c48fc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_385a28c8112b29fb4bb516520a3521ff3b701b84530286cb0793f6ed4c48fc19->leave($__internal_385a28c8112b29fb4bb516520a3521ff3b701b84530286cb0793f6ed4c48fc19_prof);

        
        $__internal_25942ee78bd22de5d5c9b07442c455eb4fed3d687650ca84697e33ee3b30b96f->leave($__internal_25942ee78bd22de5d5c9b07442c455eb4fed3d687650ca84697e33ee3b30b96f_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_d8bf01d1ea3dfda6f9d3f17da317246eb5abe62f075b2abc5e6860798509ab34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bf01d1ea3dfda6f9d3f17da317246eb5abe62f075b2abc5e6860798509ab34->enter($__internal_d8bf01d1ea3dfda6f9d3f17da317246eb5abe62f075b2abc5e6860798509ab34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_867a993da97f7433dfa6235c5c8d2a8835b28d92d1bf3722b677dd6630fdc8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867a993da97f7433dfa6235c5c8d2a8835b28d92d1bf3722b677dd6630fdc8ec->enter($__internal_867a993da97f7433dfa6235c5c8d2a8835b28d92d1bf3722b677dd6630fdc8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_867a993da97f7433dfa6235c5c8d2a8835b28d92d1bf3722b677dd6630fdc8ec->leave($__internal_867a993da97f7433dfa6235c5c8d2a8835b28d92d1bf3722b677dd6630fdc8ec_prof);

        
        $__internal_d8bf01d1ea3dfda6f9d3f17da317246eb5abe62f075b2abc5e6860798509ab34->leave($__internal_d8bf01d1ea3dfda6f9d3f17da317246eb5abe62f075b2abc5e6860798509ab34_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_81cf0daa7cf08d88eefc376d0f414901c7e1db2985b45b5ff92c5193423ae479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cf0daa7cf08d88eefc376d0f414901c7e1db2985b45b5ff92c5193423ae479->enter($__internal_81cf0daa7cf08d88eefc376d0f414901c7e1db2985b45b5ff92c5193423ae479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_aee20acfe077ae856344742f6cdb76b4d55826fa0bb538919c5722f67212f7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee20acfe077ae856344742f6cdb76b4d55826fa0bb538919c5722f67212f7c9->enter($__internal_aee20acfe077ae856344742f6cdb76b4d55826fa0bb538919c5722f67212f7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_aee20acfe077ae856344742f6cdb76b4d55826fa0bb538919c5722f67212f7c9->leave($__internal_aee20acfe077ae856344742f6cdb76b4d55826fa0bb538919c5722f67212f7c9_prof);

        
        $__internal_81cf0daa7cf08d88eefc376d0f414901c7e1db2985b45b5ff92c5193423ae479->leave($__internal_81cf0daa7cf08d88eefc376d0f414901c7e1db2985b45b5ff92c5193423ae479_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_3253d28d481b1cb9f740b5b830571317ad8c4dacf77e68e831279f338db40723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3253d28d481b1cb9f740b5b830571317ad8c4dacf77e68e831279f338db40723->enter($__internal_3253d28d481b1cb9f740b5b830571317ad8c4dacf77e68e831279f338db40723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_7361424e686574dc5517ffca238764deb1eee9fb31b473cac11238f3b6331677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7361424e686574dc5517ffca238764deb1eee9fb31b473cac11238f3b6331677->enter($__internal_7361424e686574dc5517ffca238764deb1eee9fb31b473cac11238f3b6331677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_7361424e686574dc5517ffca238764deb1eee9fb31b473cac11238f3b6331677->leave($__internal_7361424e686574dc5517ffca238764deb1eee9fb31b473cac11238f3b6331677_prof);

        
        $__internal_3253d28d481b1cb9f740b5b830571317ad8c4dacf77e68e831279f338db40723->leave($__internal_3253d28d481b1cb9f740b5b830571317ad8c4dacf77e68e831279f338db40723_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_41645ad33167669329d250bb30f262fb6c9923eb25df9f36caa1075d6e5e372e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41645ad33167669329d250bb30f262fb6c9923eb25df9f36caa1075d6e5e372e->enter($__internal_41645ad33167669329d250bb30f262fb6c9923eb25df9f36caa1075d6e5e372e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7ec0587b1c7edc6e0ed6b71b8b6e54d7b789b5695cdc8ed863c2727640089104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec0587b1c7edc6e0ed6b71b8b6e54d7b789b5695cdc8ed863c2727640089104->enter($__internal_7ec0587b1c7edc6e0ed6b71b8b6e54d7b789b5695cdc8ed863c2727640089104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_7ec0587b1c7edc6e0ed6b71b8b6e54d7b789b5695cdc8ed863c2727640089104->leave($__internal_7ec0587b1c7edc6e0ed6b71b8b6e54d7b789b5695cdc8ed863c2727640089104_prof);

        
        $__internal_41645ad33167669329d250bb30f262fb6c9923eb25df9f36caa1075d6e5e372e->leave($__internal_41645ad33167669329d250bb30f262fb6c9923eb25df9f36caa1075d6e5e372e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
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
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
