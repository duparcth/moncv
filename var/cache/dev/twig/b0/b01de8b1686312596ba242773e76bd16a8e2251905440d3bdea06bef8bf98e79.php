<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_600c55aaffeb716cd5b7195d94538ed35ecb4f5a7c23319bdb99be090aa0bbcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a841038ec31ff029e6f0d3f13011bff0b660101e329a953bf9a1d8c12801f383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a841038ec31ff029e6f0d3f13011bff0b660101e329a953bf9a1d8c12801f383->enter($__internal_a841038ec31ff029e6f0d3f13011bff0b660101e329a953bf9a1d8c12801f383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_9a19f61cab31546942f1cf094786e1b1d82c81b2bca315732f6afa281fae4382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a19f61cab31546942f1cf094786e1b1d82c81b2bca315732f6afa281fae4382->enter($__internal_9a19f61cab31546942f1cf094786e1b1d82c81b2bca315732f6afa281fae4382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_label', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 158
        echo "
";
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('form_row', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_a841038ec31ff029e6f0d3f13011bff0b660101e329a953bf9a1d8c12801f383->leave($__internal_a841038ec31ff029e6f0d3f13011bff0b660101e329a953bf9a1d8c12801f383_prof);

        
        $__internal_9a19f61cab31546942f1cf094786e1b1d82c81b2bca315732f6afa281fae4382->leave($__internal_9a19f61cab31546942f1cf094786e1b1d82c81b2bca315732f6afa281fae4382_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_81fc5b9b9819652e7051eda95e990a8c78443a085d2b81644c7cc671ac3a0e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81fc5b9b9819652e7051eda95e990a8c78443a085d2b81644c7cc671ac3a0e3f->enter($__internal_81fc5b9b9819652e7051eda95e990a8c78443a085d2b81644c7cc671ac3a0e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6f007dd45bbfd06cb61750e4ae25331ccd47ead07177fc21df35df600dd911e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f007dd45bbfd06cb61750e4ae25331ccd47ead07177fc21df35df600dd911e8->enter($__internal_6f007dd45bbfd06cb61750e4ae25331ccd47ead07177fc21df35df600dd911e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_6f007dd45bbfd06cb61750e4ae25331ccd47ead07177fc21df35df600dd911e8->leave($__internal_6f007dd45bbfd06cb61750e4ae25331ccd47ead07177fc21df35df600dd911e8_prof);

        
        $__internal_81fc5b9b9819652e7051eda95e990a8c78443a085d2b81644c7cc671ac3a0e3f->leave($__internal_81fc5b9b9819652e7051eda95e990a8c78443a085d2b81644c7cc671ac3a0e3f_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_7122a0ac839b598a0516bc6cc20ec254661be690ab47556427f9e385786aab07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7122a0ac839b598a0516bc6cc20ec254661be690ab47556427f9e385786aab07->enter($__internal_7122a0ac839b598a0516bc6cc20ec254661be690ab47556427f9e385786aab07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_78ed848944cd2e0505d1079892c00e91d0938f6e37dc4b017fe8241a761daeef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ed848944cd2e0505d1079892c00e91d0938f6e37dc4b017fe8241a761daeef->enter($__internal_78ed848944cd2e0505d1079892c00e91d0938f6e37dc4b017fe8241a761daeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_78ed848944cd2e0505d1079892c00e91d0938f6e37dc4b017fe8241a761daeef->leave($__internal_78ed848944cd2e0505d1079892c00e91d0938f6e37dc4b017fe8241a761daeef_prof);

        
        $__internal_7122a0ac839b598a0516bc6cc20ec254661be690ab47556427f9e385786aab07->leave($__internal_7122a0ac839b598a0516bc6cc20ec254661be690ab47556427f9e385786aab07_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3b5ae82a74b8bbf5f80e8c5e932d0c0b4b7c50ebac516fd87a7d80d2bff4ead7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5ae82a74b8bbf5f80e8c5e932d0c0b4b7c50ebac516fd87a7d80d2bff4ead7->enter($__internal_3b5ae82a74b8bbf5f80e8c5e932d0c0b4b7c50ebac516fd87a7d80d2bff4ead7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_359ef555f93d0d33bf97ae31228336d08b4af46e93c384f7280dbcb138d155f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359ef555f93d0d33bf97ae31228336d08b4af46e93c384f7280dbcb138d155f2->enter($__internal_359ef555f93d0d33bf97ae31228336d08b4af46e93c384f7280dbcb138d155f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_359ef555f93d0d33bf97ae31228336d08b4af46e93c384f7280dbcb138d155f2->leave($__internal_359ef555f93d0d33bf97ae31228336d08b4af46e93c384f7280dbcb138d155f2_prof);

        
        $__internal_3b5ae82a74b8bbf5f80e8c5e932d0c0b4b7c50ebac516fd87a7d80d2bff4ead7->leave($__internal_3b5ae82a74b8bbf5f80e8c5e932d0c0b4b7c50ebac516fd87a7d80d2bff4ead7_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_92138060f5d21ffd38bad7e178adb5613ff16eda26334777eff1375bda530142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92138060f5d21ffd38bad7e178adb5613ff16eda26334777eff1375bda530142->enter($__internal_92138060f5d21ffd38bad7e178adb5613ff16eda26334777eff1375bda530142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_85edeec7e42884c39237cf9cc39abd362277cc2b070b4201b378edfd5771a9fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85edeec7e42884c39237cf9cc39abd362277cc2b070b4201b378edfd5771a9fc->enter($__internal_85edeec7e42884c39237cf9cc39abd362277cc2b070b4201b378edfd5771a9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_85edeec7e42884c39237cf9cc39abd362277cc2b070b4201b378edfd5771a9fc->leave($__internal_85edeec7e42884c39237cf9cc39abd362277cc2b070b4201b378edfd5771a9fc_prof);

        
        $__internal_92138060f5d21ffd38bad7e178adb5613ff16eda26334777eff1375bda530142->leave($__internal_92138060f5d21ffd38bad7e178adb5613ff16eda26334777eff1375bda530142_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_6bd96a74d18bcb6b7ded8b5facae3aca658b1d7f4f5457adb9d72cf906044d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd96a74d18bcb6b7ded8b5facae3aca658b1d7f4f5457adb9d72cf906044d95->enter($__internal_6bd96a74d18bcb6b7ded8b5facae3aca658b1d7f4f5457adb9d72cf906044d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_113d0952fc257d47e491c476b4685f04035502e817833fc8cfef08ec93d63a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113d0952fc257d47e491c476b4685f04035502e817833fc8cfef08ec93d63a11->enter($__internal_113d0952fc257d47e491c476b4685f04035502e817833fc8cfef08ec93d63a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_113d0952fc257d47e491c476b4685f04035502e817833fc8cfef08ec93d63a11->leave($__internal_113d0952fc257d47e491c476b4685f04035502e817833fc8cfef08ec93d63a11_prof);

        
        $__internal_6bd96a74d18bcb6b7ded8b5facae3aca658b1d7f4f5457adb9d72cf906044d95->leave($__internal_6bd96a74d18bcb6b7ded8b5facae3aca658b1d7f4f5457adb9d72cf906044d95_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_b53e27253259ea7dde75f78e1819109507061ce606601c79017308d216445970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53e27253259ea7dde75f78e1819109507061ce606601c79017308d216445970->enter($__internal_b53e27253259ea7dde75f78e1819109507061ce606601c79017308d216445970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_8000c835a37755990e3993958bdcbbc9cd83716751a05dde68b0293f1a2973b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8000c835a37755990e3993958bdcbbc9cd83716751a05dde68b0293f1a2973b6->enter($__internal_8000c835a37755990e3993958bdcbbc9cd83716751a05dde68b0293f1a2973b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_8000c835a37755990e3993958bdcbbc9cd83716751a05dde68b0293f1a2973b6->leave($__internal_8000c835a37755990e3993958bdcbbc9cd83716751a05dde68b0293f1a2973b6_prof);

        
        $__internal_b53e27253259ea7dde75f78e1819109507061ce606601c79017308d216445970->leave($__internal_b53e27253259ea7dde75f78e1819109507061ce606601c79017308d216445970_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e4fe417ab749e6c64bc2bd24a3bcc2f0108f6f9d733000537bd785e4cde8fe72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4fe417ab749e6c64bc2bd24a3bcc2f0108f6f9d733000537bd785e4cde8fe72->enter($__internal_e4fe417ab749e6c64bc2bd24a3bcc2f0108f6f9d733000537bd785e4cde8fe72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_55bf0582f0440d199dc711ff7be84d3707513cd2c9e5459250e363293bf14269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bf0582f0440d199dc711ff7be84d3707513cd2c9e5459250e363293bf14269->enter($__internal_55bf0582f0440d199dc711ff7be84d3707513cd2c9e5459250e363293bf14269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_55bf0582f0440d199dc711ff7be84d3707513cd2c9e5459250e363293bf14269->leave($__internal_55bf0582f0440d199dc711ff7be84d3707513cd2c9e5459250e363293bf14269_prof);

        
        $__internal_e4fe417ab749e6c64bc2bd24a3bcc2f0108f6f9d733000537bd785e4cde8fe72->leave($__internal_e4fe417ab749e6c64bc2bd24a3bcc2f0108f6f9d733000537bd785e4cde8fe72_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_7bc6b67f9016536aa039c8ad5d4ab5126d2e339c7c6d6273de3a8abed4f548fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc6b67f9016536aa039c8ad5d4ab5126d2e339c7c6d6273de3a8abed4f548fb->enter($__internal_7bc6b67f9016536aa039c8ad5d4ab5126d2e339c7c6d6273de3a8abed4f548fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_f28db1b318ea6a7386460db962f0c9d1153a3fe0e7808b60193904dcce895d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28db1b318ea6a7386460db962f0c9d1153a3fe0e7808b60193904dcce895d4b->enter($__internal_f28db1b318ea6a7386460db962f0c9d1153a3fe0e7808b60193904dcce895d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_f28db1b318ea6a7386460db962f0c9d1153a3fe0e7808b60193904dcce895d4b->leave($__internal_f28db1b318ea6a7386460db962f0c9d1153a3fe0e7808b60193904dcce895d4b_prof);

        
        $__internal_7bc6b67f9016536aa039c8ad5d4ab5126d2e339c7c6d6273de3a8abed4f548fb->leave($__internal_7bc6b67f9016536aa039c8ad5d4ab5126d2e339c7c6d6273de3a8abed4f548fb_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c2876502363abbb1c571c738f18fc31d477de49af6d4001335b8168424099979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2876502363abbb1c571c738f18fc31d477de49af6d4001335b8168424099979->enter($__internal_c2876502363abbb1c571c738f18fc31d477de49af6d4001335b8168424099979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_5ac4557e9719d2ad57b66762453ed89d9fbb15f40d2d8043d73961bf2d8d9261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac4557e9719d2ad57b66762453ed89d9fbb15f40d2d8043d73961bf2d8d9261->enter($__internal_5ac4557e9719d2ad57b66762453ed89d9fbb15f40d2d8043d73961bf2d8d9261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_5ac4557e9719d2ad57b66762453ed89d9fbb15f40d2d8043d73961bf2d8d9261->leave($__internal_5ac4557e9719d2ad57b66762453ed89d9fbb15f40d2d8043d73961bf2d8d9261_prof);

        
        $__internal_c2876502363abbb1c571c738f18fc31d477de49af6d4001335b8168424099979->leave($__internal_c2876502363abbb1c571c738f18fc31d477de49af6d4001335b8168424099979_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d26ed49a6debb3ad541dcb90f14478b8a474a5bf267ec78486e8d8d82fa88e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26ed49a6debb3ad541dcb90f14478b8a474a5bf267ec78486e8d8d82fa88e57->enter($__internal_d26ed49a6debb3ad541dcb90f14478b8a474a5bf267ec78486e8d8d82fa88e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_7daeb354b35efbe94de2481b22ccfec0f7971b699f97a6d20f163c0ae15261ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7daeb354b35efbe94de2481b22ccfec0f7971b699f97a6d20f163c0ae15261ae->enter($__internal_7daeb354b35efbe94de2481b22ccfec0f7971b699f97a6d20f163c0ae15261ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 78
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>";
        }
        
        $__internal_7daeb354b35efbe94de2481b22ccfec0f7971b699f97a6d20f163c0ae15261ae->leave($__internal_7daeb354b35efbe94de2481b22ccfec0f7971b699f97a6d20f163c0ae15261ae_prof);

        
        $__internal_d26ed49a6debb3ad541dcb90f14478b8a474a5bf267ec78486e8d8d82fa88e57->leave($__internal_d26ed49a6debb3ad541dcb90f14478b8a474a5bf267ec78486e8d8d82fa88e57_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_30a1cff2e9ec5bd67b2036693990ed7a5c804d195d0e80fa55396c6e5f92a0ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a1cff2e9ec5bd67b2036693990ed7a5c804d195d0e80fa55396c6e5f92a0ae->enter($__internal_30a1cff2e9ec5bd67b2036693990ed7a5c804d195d0e80fa55396c6e5f92a0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_441355c928001fe91d8a1ac68fb3df2988b48f2771b07bf999bc25d34ad917d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441355c928001fe91d8a1ac68fb3df2988b48f2771b07bf999bc25d34ad917d2->enter($__internal_441355c928001fe91d8a1ac68fb3df2988b48f2771b07bf999bc25d34ad917d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 85
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 86
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 87
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 90
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 92
            echo "</div>";
        }
        
        $__internal_441355c928001fe91d8a1ac68fb3df2988b48f2771b07bf999bc25d34ad917d2->leave($__internal_441355c928001fe91d8a1ac68fb3df2988b48f2771b07bf999bc25d34ad917d2_prof);

        
        $__internal_30a1cff2e9ec5bd67b2036693990ed7a5c804d195d0e80fa55396c6e5f92a0ae->leave($__internal_30a1cff2e9ec5bd67b2036693990ed7a5c804d195d0e80fa55396c6e5f92a0ae_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c32da4a304f73f84d50348f99cf89354116aab4dac9530b54f7d70e57e2cf41c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32da4a304f73f84d50348f99cf89354116aab4dac9530b54f7d70e57e2cf41c->enter($__internal_c32da4a304f73f84d50348f99cf89354116aab4dac9530b54f7d70e57e2cf41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_fc5bb6dc452840536243575db502c93ecb7be48c094e7e8c1caea657d85d7db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5bb6dc452840536243575db502c93ecb7be48c094e7e8c1caea657d85d7db5->enter($__internal_fc5bb6dc452840536243575db502c93ecb7be48c094e7e8c1caea657d85d7db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 97
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 102
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 106
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 107
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 112
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>";
        }
        
        $__internal_fc5bb6dc452840536243575db502c93ecb7be48c094e7e8c1caea657d85d7db5->leave($__internal_fc5bb6dc452840536243575db502c93ecb7be48c094e7e8c1caea657d85d7db5_prof);

        
        $__internal_c32da4a304f73f84d50348f99cf89354116aab4dac9530b54f7d70e57e2cf41c->leave($__internal_c32da4a304f73f84d50348f99cf89354116aab4dac9530b54f7d70e57e2cf41c_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_088dbfa6dc9815358f862fc1d4755f47deaa6a21fcb49b999ed392bdd3e8fa39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088dbfa6dc9815358f862fc1d4755f47deaa6a21fcb49b999ed392bdd3e8fa39->enter($__internal_088dbfa6dc9815358f862fc1d4755f47deaa6a21fcb49b999ed392bdd3e8fa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f5c60300a53039f79a93444cf0fc2d7ae6b3a404b799d7cad2fc7294b1645e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c60300a53039f79a93444cf0fc2d7ae6b3a404b799d7cad2fc7294b1645e5d->enter($__internal_f5c60300a53039f79a93444cf0fc2d7ae6b3a404b799d7cad2fc7294b1645e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 124
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 125
            $context["element"] = "legend";
            // line 126
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 128
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 130
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_f5c60300a53039f79a93444cf0fc2d7ae6b3a404b799d7cad2fc7294b1645e5d->leave($__internal_f5c60300a53039f79a93444cf0fc2d7ae6b3a404b799d7cad2fc7294b1645e5d_prof);

        
        $__internal_088dbfa6dc9815358f862fc1d4755f47deaa6a21fcb49b999ed392bdd3e8fa39->leave($__internal_088dbfa6dc9815358f862fc1d4755f47deaa6a21fcb49b999ed392bdd3e8fa39_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_24b69fa273f6057152318cb7aab85d484836fdbbe82ac0882377a751f49ad657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b69fa273f6057152318cb7aab85d484836fdbbe82ac0882377a751f49ad657->enter($__internal_24b69fa273f6057152318cb7aab85d484836fdbbe82ac0882377a751f49ad657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_92db97e80f38d9a9e25f30a9c022162073fa1ec101c16a7e7099ff502b7adcae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92db97e80f38d9a9e25f30a9c022162073fa1ec101c16a7e7099ff502b7adcae->enter($__internal_92db97e80f38d9a9e25f30a9c022162073fa1ec101c16a7e7099ff502b7adcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 135
        if (array_key_exists("widget", $context)) {
            // line 136
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 137
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 138
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 140
            if (array_key_exists("parent_label_class", $context)) {
                // line 141
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 143
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 144
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 145
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 146
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 147
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 150
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 153
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 154
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 155
            echo "</label>";
        }
        
        $__internal_92db97e80f38d9a9e25f30a9c022162073fa1ec101c16a7e7099ff502b7adcae->leave($__internal_92db97e80f38d9a9e25f30a9c022162073fa1ec101c16a7e7099ff502b7adcae_prof);

        
        $__internal_24b69fa273f6057152318cb7aab85d484836fdbbe82ac0882377a751f49ad657->leave($__internal_24b69fa273f6057152318cb7aab85d484836fdbbe82ac0882377a751f49ad657_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7fec1b2b11f8ca4a1028f5b2eba6c7689f631a97a375eb1acc0532c36ffa47fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fec1b2b11f8ca4a1028f5b2eba6c7689f631a97a375eb1acc0532c36ffa47fc->enter($__internal_7fec1b2b11f8ca4a1028f5b2eba6c7689f631a97a375eb1acc0532c36ffa47fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e64309037200a4838fdf010e3a36c58f487dc90a815595c946bea81664face9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64309037200a4838fdf010e3a36c58f487dc90a815595c946bea81664face9f->enter($__internal_e64309037200a4838fdf010e3a36c58f487dc90a815595c946bea81664face9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 162
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 163
            $context["element"] = "fieldset";
        }
        // line 165
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 169
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_e64309037200a4838fdf010e3a36c58f487dc90a815595c946bea81664face9f->leave($__internal_e64309037200a4838fdf010e3a36c58f487dc90a815595c946bea81664face9f_prof);

        
        $__internal_7fec1b2b11f8ca4a1028f5b2eba6c7689f631a97a375eb1acc0532c36ffa47fc->leave($__internal_7fec1b2b11f8ca4a1028f5b2eba6c7689f631a97a375eb1acc0532c36ffa47fc_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4572d461a2f5b57334fe96c1e679343d42d2f8a76732b70217287e04a6d2da0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4572d461a2f5b57334fe96c1e679343d42d2f8a76732b70217287e04a6d2da0a->enter($__internal_4572d461a2f5b57334fe96c1e679343d42d2f8a76732b70217287e04a6d2da0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2292d82a7032748f95a4a4ba257d484113a31c373a89903ef3b384c50f08b8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2292d82a7032748f95a4a4ba257d484113a31c373a89903ef3b384c50f08b8e7->enter($__internal_2292d82a7032748f95a4a4ba257d484113a31c373a89903ef3b384c50f08b8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 175
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 176
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</ul>
    </div>";
        }
        
        $__internal_2292d82a7032748f95a4a4ba257d484113a31c373a89903ef3b384c50f08b8e7->leave($__internal_2292d82a7032748f95a4a4ba257d484113a31c373a89903ef3b384c50f08b8e7_prof);

        
        $__internal_4572d461a2f5b57334fe96c1e679343d42d2f8a76732b70217287e04a6d2da0a->leave($__internal_4572d461a2f5b57334fe96c1e679343d42d2f8a76732b70217287e04a6d2da0a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  672 => 181,  664 => 179,  660 => 178,  651 => 176,  649 => 175,  640 => 174,  628 => 169,  626 => 168,  624 => 167,  622 => 166,  618 => 165,  615 => 163,  613 => 162,  604 => 161,  593 => 155,  589 => 154,  574 => 153,  570 => 150,  567 => 147,  566 => 146,  565 => 145,  563 => 144,  561 => 143,  558 => 141,  556 => 140,  553 => 138,  551 => 137,  549 => 136,  547 => 135,  538 => 133,  528 => 130,  525 => 128,  522 => 126,  520 => 125,  518 => 124,  509 => 123,  498 => 117,  492 => 113,  491 => 112,  490 => 111,  486 => 110,  482 => 109,  479 => 107,  477 => 106,  470 => 102,  469 => 101,  468 => 100,  467 => 99,  463 => 98,  461 => 97,  452 => 96,  441 => 92,  439 => 91,  435 => 90,  432 => 88,  430 => 87,  428 => 86,  426 => 85,  417 => 84,  406 => 80,  404 => 79,  400 => 78,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 174,  134 => 173,  131 => 171,  129 => 161,  126 => 160,  123 => 158,  121 => 133,  118 => 132,  116 => 123,  113 => 122,  110 => 120,  108 => 96,  105 => 95,  103 => 84,  100 => 83,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
