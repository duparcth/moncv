<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_d74e587f42409b48045745c886b5d25596f9c5a22994c2df23d0db95d163727f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9abe16a04d02516e3a279324f365e45454182ca3c83e4ac17dc9fc5bb3fd90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9abe16a04d02516e3a279324f365e45454182ca3c83e4ac17dc9fc5bb3fd90b->enter($__internal_e9abe16a04d02516e3a279324f365e45454182ca3c83e4ac17dc9fc5bb3fd90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_d061af82991ec14ef2c00d146b0e4a96779379ee9ac045a58d078bca714f2de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d061af82991ec14ef2c00d146b0e4a96779379ee9ac045a58d078bca714f2de5->enter($__internal_d061af82991ec14ef2c00d146b0e4a96779379ee9ac045a58d078bca714f2de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9abe16a04d02516e3a279324f365e45454182ca3c83e4ac17dc9fc5bb3fd90b->leave($__internal_e9abe16a04d02516e3a279324f365e45454182ca3c83e4ac17dc9fc5bb3fd90b_prof);

        
        $__internal_d061af82991ec14ef2c00d146b0e4a96779379ee9ac045a58d078bca714f2de5->leave($__internal_d061af82991ec14ef2c00d146b0e4a96779379ee9ac045a58d078bca714f2de5_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_477596e7ad3ed961005cf4dbcdf8a45fd98dc96f984f3127ddfcf0659f445012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477596e7ad3ed961005cf4dbcdf8a45fd98dc96f984f3127ddfcf0659f445012->enter($__internal_477596e7ad3ed961005cf4dbcdf8a45fd98dc96f984f3127ddfcf0659f445012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b9870281924f24942f574cfadbe95810ea4ebe3556cb79357d7895c03a1f4a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9870281924f24942f574cfadbe95810ea4ebe3556cb79357d7895c03a1f4a97->enter($__internal_b9870281924f24942f574cfadbe95810ea4ebe3556cb79357d7895c03a1f4a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b9870281924f24942f574cfadbe95810ea4ebe3556cb79357d7895c03a1f4a97->leave($__internal_b9870281924f24942f574cfadbe95810ea4ebe3556cb79357d7895c03a1f4a97_prof);

        
        $__internal_477596e7ad3ed961005cf4dbcdf8a45fd98dc96f984f3127ddfcf0659f445012->leave($__internal_477596e7ad3ed961005cf4dbcdf8a45fd98dc96f984f3127ddfcf0659f445012_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_be78e87e849d269805962fc1b833d764259baa3cb49fccebc8475b7a37de05ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be78e87e849d269805962fc1b833d764259baa3cb49fccebc8475b7a37de05ce->enter($__internal_be78e87e849d269805962fc1b833d764259baa3cb49fccebc8475b7a37de05ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_9680915844b563687b817de8243771bb5d026682cb2b2d6e158c6c7d3a40a4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9680915844b563687b817de8243771bb5d026682cb2b2d6e158c6c7d3a40a4b0->enter($__internal_9680915844b563687b817de8243771bb5d026682cb2b2d6e158c6c7d3a40a4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_9680915844b563687b817de8243771bb5d026682cb2b2d6e158c6c7d3a40a4b0->leave($__internal_9680915844b563687b817de8243771bb5d026682cb2b2d6e158c6c7d3a40a4b0_prof);

        
        $__internal_be78e87e849d269805962fc1b833d764259baa3cb49fccebc8475b7a37de05ce->leave($__internal_be78e87e849d269805962fc1b833d764259baa3cb49fccebc8475b7a37de05ce_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8e567a2f5b591be144030743d4de66c6e52c7442013336d944d8ffbc82eac299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e567a2f5b591be144030743d4de66c6e52c7442013336d944d8ffbc82eac299->enter($__internal_8e567a2f5b591be144030743d4de66c6e52c7442013336d944d8ffbc82eac299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_0a9f746dcff7deb56b3b7057516f58e4f6e76220dae6004af3e2923bda97fc82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9f746dcff7deb56b3b7057516f58e4f6e76220dae6004af3e2923bda97fc82->enter($__internal_0a9f746dcff7deb56b3b7057516f58e4f6e76220dae6004af3e2923bda97fc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_0a9f746dcff7deb56b3b7057516f58e4f6e76220dae6004af3e2923bda97fc82->leave($__internal_0a9f746dcff7deb56b3b7057516f58e4f6e76220dae6004af3e2923bda97fc82_prof);

        
        $__internal_8e567a2f5b591be144030743d4de66c6e52c7442013336d944d8ffbc82eac299->leave($__internal_8e567a2f5b591be144030743d4de66c6e52c7442013336d944d8ffbc82eac299_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9f720d5a1d35368f822062f43ca6f294654bcff642337715838b8aafd71e9ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f720d5a1d35368f822062f43ca6f294654bcff642337715838b8aafd71e9ebc->enter($__internal_9f720d5a1d35368f822062f43ca6f294654bcff642337715838b8aafd71e9ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_7116558cee1a2cfb81c816808ae6d3c51fe9675e90adefa47c42287854b7c91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7116558cee1a2cfb81c816808ae6d3c51fe9675e90adefa47c42287854b7c91b->enter($__internal_7116558cee1a2cfb81c816808ae6d3c51fe9675e90adefa47c42287854b7c91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_7116558cee1a2cfb81c816808ae6d3c51fe9675e90adefa47c42287854b7c91b->leave($__internal_7116558cee1a2cfb81c816808ae6d3c51fe9675e90adefa47c42287854b7c91b_prof);

        
        $__internal_9f720d5a1d35368f822062f43ca6f294654bcff642337715838b8aafd71e9ebc->leave($__internal_9f720d5a1d35368f822062f43ca6f294654bcff642337715838b8aafd71e9ebc_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_2cc81f7e1082bbc4631e1bb3f4acacbe3f1f437b349fce074b0b2c71ee59a30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc81f7e1082bbc4631e1bb3f4acacbe3f1f437b349fce074b0b2c71ee59a30c->enter($__internal_2cc81f7e1082bbc4631e1bb3f4acacbe3f1f437b349fce074b0b2c71ee59a30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_7e91d57b06942eccab13e3ee342217741f678dfd10a0163eb5632d45f77c3c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e91d57b06942eccab13e3ee342217741f678dfd10a0163eb5632d45f77c3c9d->enter($__internal_7e91d57b06942eccab13e3ee342217741f678dfd10a0163eb5632d45f77c3c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_7e91d57b06942eccab13e3ee342217741f678dfd10a0163eb5632d45f77c3c9d->leave($__internal_7e91d57b06942eccab13e3ee342217741f678dfd10a0163eb5632d45f77c3c9d_prof);

        
        $__internal_2cc81f7e1082bbc4631e1bb3f4acacbe3f1f437b349fce074b0b2c71ee59a30c->leave($__internal_2cc81f7e1082bbc4631e1bb3f4acacbe3f1f437b349fce074b0b2c71ee59a30c_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_0ab93b03c0062227769e7923055eb15aa40003077a465c9d7f23961c9c10f8c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab93b03c0062227769e7923055eb15aa40003077a465c9d7f23961c9c10f8c9->enter($__internal_0ab93b03c0062227769e7923055eb15aa40003077a465c9d7f23961c9c10f8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_79d038d20042c8117d808e7aa61a704c9d4bcb1932f6da92c55a49b1e867bcb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d038d20042c8117d808e7aa61a704c9d4bcb1932f6da92c55a49b1e867bcb6->enter($__internal_79d038d20042c8117d808e7aa61a704c9d4bcb1932f6da92c55a49b1e867bcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_79d038d20042c8117d808e7aa61a704c9d4bcb1932f6da92c55a49b1e867bcb6->leave($__internal_79d038d20042c8117d808e7aa61a704c9d4bcb1932f6da92c55a49b1e867bcb6_prof);

        
        $__internal_0ab93b03c0062227769e7923055eb15aa40003077a465c9d7f23961c9c10f8c9->leave($__internal_0ab93b03c0062227769e7923055eb15aa40003077a465c9d7f23961c9c10f8c9_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5df73419462894255f0228f58264ebf424bc7571e7b0441c10ea8ca8273b40ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df73419462894255f0228f58264ebf424bc7571e7b0441c10ea8ca8273b40ce->enter($__internal_5df73419462894255f0228f58264ebf424bc7571e7b0441c10ea8ca8273b40ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_9538b20f480bf5769e69454231d680ed1cfd3921dfe9a8114010d457acc10439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9538b20f480bf5769e69454231d680ed1cfd3921dfe9a8114010d457acc10439->enter($__internal_9538b20f480bf5769e69454231d680ed1cfd3921dfe9a8114010d457acc10439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_9538b20f480bf5769e69454231d680ed1cfd3921dfe9a8114010d457acc10439->leave($__internal_9538b20f480bf5769e69454231d680ed1cfd3921dfe9a8114010d457acc10439_prof);

        
        $__internal_5df73419462894255f0228f58264ebf424bc7571e7b0441c10ea8ca8273b40ce->leave($__internal_5df73419462894255f0228f58264ebf424bc7571e7b0441c10ea8ca8273b40ce_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_0668fa8e5ac2f6e3cc95e2f90118ff8fe4434dcf1441b17ceaa82d94f1b02f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0668fa8e5ac2f6e3cc95e2f90118ff8fe4434dcf1441b17ceaa82d94f1b02f1c->enter($__internal_0668fa8e5ac2f6e3cc95e2f90118ff8fe4434dcf1441b17ceaa82d94f1b02f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6b321301ff1e2dd46e01f90a2cec537751ec5ee9cc2ca70fd22e65f66d0500e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b321301ff1e2dd46e01f90a2cec537751ec5ee9cc2ca70fd22e65f66d0500e2->enter($__internal_6b321301ff1e2dd46e01f90a2cec537751ec5ee9cc2ca70fd22e65f66d0500e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_6b321301ff1e2dd46e01f90a2cec537751ec5ee9cc2ca70fd22e65f66d0500e2->leave($__internal_6b321301ff1e2dd46e01f90a2cec537751ec5ee9cc2ca70fd22e65f66d0500e2_prof);

        
        $__internal_0668fa8e5ac2f6e3cc95e2f90118ff8fe4434dcf1441b17ceaa82d94f1b02f1c->leave($__internal_0668fa8e5ac2f6e3cc95e2f90118ff8fe4434dcf1441b17ceaa82d94f1b02f1c_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_344ed9b7ece53485608a2f257234cc2bc5d0b2edd3a6e4722ee0364634f39137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344ed9b7ece53485608a2f257234cc2bc5d0b2edd3a6e4722ee0364634f39137->enter($__internal_344ed9b7ece53485608a2f257234cc2bc5d0b2edd3a6e4722ee0364634f39137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_91f8c6234f612f7da5d272ea6e665ed45607bf2fe24f036b145c1e6fa10f31aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f8c6234f612f7da5d272ea6e665ed45607bf2fe24f036b145c1e6fa10f31aa->enter($__internal_91f8c6234f612f7da5d272ea6e665ed45607bf2fe24f036b145c1e6fa10f31aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_91f8c6234f612f7da5d272ea6e665ed45607bf2fe24f036b145c1e6fa10f31aa->leave($__internal_91f8c6234f612f7da5d272ea6e665ed45607bf2fe24f036b145c1e6fa10f31aa_prof);

        
        $__internal_344ed9b7ece53485608a2f257234cc2bc5d0b2edd3a6e4722ee0364634f39137->leave($__internal_344ed9b7ece53485608a2f257234cc2bc5d0b2edd3a6e4722ee0364634f39137_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_9bea7fe71c9ed04e2891d1f9f45bea6c2dc058fd5f7925974c2d05fee8334987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bea7fe71c9ed04e2891d1f9f45bea6c2dc058fd5f7925974c2d05fee8334987->enter($__internal_9bea7fe71c9ed04e2891d1f9f45bea6c2dc058fd5f7925974c2d05fee8334987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_fb7c07e77c22b87b2f041be41e437908c78b4be4da4dcc26f98cf89fb5437dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7c07e77c22b87b2f041be41e437908c78b4be4da4dcc26f98cf89fb5437dd2->enter($__internal_fb7c07e77c22b87b2f041be41e437908c78b4be4da4dcc26f98cf89fb5437dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_fb7c07e77c22b87b2f041be41e437908c78b4be4da4dcc26f98cf89fb5437dd2->leave($__internal_fb7c07e77c22b87b2f041be41e437908c78b4be4da4dcc26f98cf89fb5437dd2_prof);

        
        $__internal_9bea7fe71c9ed04e2891d1f9f45bea6c2dc058fd5f7925974c2d05fee8334987->leave($__internal_9bea7fe71c9ed04e2891d1f9f45bea6c2dc058fd5f7925974c2d05fee8334987_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0671660fa13429d294c87c08ff4418c88a7adba542e2a97d9f0b5fb7e6dbaab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0671660fa13429d294c87c08ff4418c88a7adba542e2a97d9f0b5fb7e6dbaab6->enter($__internal_0671660fa13429d294c87c08ff4418c88a7adba542e2a97d9f0b5fb7e6dbaab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9f3843a4c354cb2a7c546ad7872d6b8bd713adfe49f82a55c2a966c29f69b780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3843a4c354cb2a7c546ad7872d6b8bd713adfe49f82a55c2a966c29f69b780->enter($__internal_9f3843a4c354cb2a7c546ad7872d6b8bd713adfe49f82a55c2a966c29f69b780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_9f3843a4c354cb2a7c546ad7872d6b8bd713adfe49f82a55c2a966c29f69b780->leave($__internal_9f3843a4c354cb2a7c546ad7872d6b8bd713adfe49f82a55c2a966c29f69b780_prof);

        
        $__internal_0671660fa13429d294c87c08ff4418c88a7adba542e2a97d9f0b5fb7e6dbaab6->leave($__internal_0671660fa13429d294c87c08ff4418c88a7adba542e2a97d9f0b5fb7e6dbaab6_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_250229cc095069be63e27ede5f013e5a75a47bc88b13e78502ee91f3656fb241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_250229cc095069be63e27ede5f013e5a75a47bc88b13e78502ee91f3656fb241->enter($__internal_250229cc095069be63e27ede5f013e5a75a47bc88b13e78502ee91f3656fb241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_d16b4460bde3716bbcf787a3021c9b180c76390d529d032b235e6d271963004a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16b4460bde3716bbcf787a3021c9b180c76390d529d032b235e6d271963004a->enter($__internal_d16b4460bde3716bbcf787a3021c9b180c76390d529d032b235e6d271963004a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_d16b4460bde3716bbcf787a3021c9b180c76390d529d032b235e6d271963004a->leave($__internal_d16b4460bde3716bbcf787a3021c9b180c76390d529d032b235e6d271963004a_prof);

        
        $__internal_250229cc095069be63e27ede5f013e5a75a47bc88b13e78502ee91f3656fb241->leave($__internal_250229cc095069be63e27ede5f013e5a75a47bc88b13e78502ee91f3656fb241_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_43a433b6e0e90208bc2dec8f3d4e4ec221c3c5f6d93020d32dd2bb7a089848e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a433b6e0e90208bc2dec8f3d4e4ec221c3c5f6d93020d32dd2bb7a089848e8->enter($__internal_43a433b6e0e90208bc2dec8f3d4e4ec221c3c5f6d93020d32dd2bb7a089848e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ecf52c832e9256de43b2612153df4103e5ed9394cf51f6fb6781a9180e38d5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf52c832e9256de43b2612153df4103e5ed9394cf51f6fb6781a9180e38d5ad->enter($__internal_ecf52c832e9256de43b2612153df4103e5ed9394cf51f6fb6781a9180e38d5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ecf52c832e9256de43b2612153df4103e5ed9394cf51f6fb6781a9180e38d5ad->leave($__internal_ecf52c832e9256de43b2612153df4103e5ed9394cf51f6fb6781a9180e38d5ad_prof);

        
        $__internal_43a433b6e0e90208bc2dec8f3d4e4ec221c3c5f6d93020d32dd2bb7a089848e8->leave($__internal_43a433b6e0e90208bc2dec8f3d4e4ec221c3c5f6d93020d32dd2bb7a089848e8_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_36c49fd107aca9643baa638d17977fa9e86810eb120dca8846a35c189b9ccd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c49fd107aca9643baa638d17977fa9e86810eb120dca8846a35c189b9ccd2c->enter($__internal_36c49fd107aca9643baa638d17977fa9e86810eb120dca8846a35c189b9ccd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_aa7b618303b3257b59d783faf533394d2e7543985b5f3f28b968b20dcb33503c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7b618303b3257b59d783faf533394d2e7543985b5f3f28b968b20dcb33503c->enter($__internal_aa7b618303b3257b59d783faf533394d2e7543985b5f3f28b968b20dcb33503c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_aa7b618303b3257b59d783faf533394d2e7543985b5f3f28b968b20dcb33503c->leave($__internal_aa7b618303b3257b59d783faf533394d2e7543985b5f3f28b968b20dcb33503c_prof);

        
        $__internal_36c49fd107aca9643baa638d17977fa9e86810eb120dca8846a35c189b9ccd2c->leave($__internal_36c49fd107aca9643baa638d17977fa9e86810eb120dca8846a35c189b9ccd2c_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_9bfd4eec08a286481ac0f07a8c731583a73dbb471976cf18ac95d0ecf87af9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bfd4eec08a286481ac0f07a8c731583a73dbb471976cf18ac95d0ecf87af9c5->enter($__internal_9bfd4eec08a286481ac0f07a8c731583a73dbb471976cf18ac95d0ecf87af9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_159f9d9060cccc19caf31cd37e29cb4397086b995aedc1b5f75024b9de87f3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159f9d9060cccc19caf31cd37e29cb4397086b995aedc1b5f75024b9de87f3e8->enter($__internal_159f9d9060cccc19caf31cd37e29cb4397086b995aedc1b5f75024b9de87f3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_159f9d9060cccc19caf31cd37e29cb4397086b995aedc1b5f75024b9de87f3e8->leave($__internal_159f9d9060cccc19caf31cd37e29cb4397086b995aedc1b5f75024b9de87f3e8_prof);

        
        $__internal_9bfd4eec08a286481ac0f07a8c731583a73dbb471976cf18ac95d0ecf87af9c5->leave($__internal_9bfd4eec08a286481ac0f07a8c731583a73dbb471976cf18ac95d0ecf87af9c5_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_07d162da95ee3bd1108e37e574ea52dd0b0ed491180050a42cdc550137f21728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d162da95ee3bd1108e37e574ea52dd0b0ed491180050a42cdc550137f21728->enter($__internal_07d162da95ee3bd1108e37e574ea52dd0b0ed491180050a42cdc550137f21728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_4272ca7c9579f9f7ee3674e6e4d17b73434ec99e83f30a2fd4a7304bf154ced9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4272ca7c9579f9f7ee3674e6e4d17b73434ec99e83f30a2fd4a7304bf154ced9->enter($__internal_4272ca7c9579f9f7ee3674e6e4d17b73434ec99e83f30a2fd4a7304bf154ced9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4272ca7c9579f9f7ee3674e6e4d17b73434ec99e83f30a2fd4a7304bf154ced9->leave($__internal_4272ca7c9579f9f7ee3674e6e4d17b73434ec99e83f30a2fd4a7304bf154ced9_prof);

        
        $__internal_07d162da95ee3bd1108e37e574ea52dd0b0ed491180050a42cdc550137f21728->leave($__internal_07d162da95ee3bd1108e37e574ea52dd0b0ed491180050a42cdc550137f21728_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_242f29cb0b7dbf42092e4f282750240b058ef812e551c35c7027f3ae9a65f85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242f29cb0b7dbf42092e4f282750240b058ef812e551c35c7027f3ae9a65f85c->enter($__internal_242f29cb0b7dbf42092e4f282750240b058ef812e551c35c7027f3ae9a65f85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_128084feae9b1318b7514a6dc130b7b16f1dd4725654178def14515cb0819e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128084feae9b1318b7514a6dc130b7b16f1dd4725654178def14515cb0819e00->enter($__internal_128084feae9b1318b7514a6dc130b7b16f1dd4725654178def14515cb0819e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_128084feae9b1318b7514a6dc130b7b16f1dd4725654178def14515cb0819e00->leave($__internal_128084feae9b1318b7514a6dc130b7b16f1dd4725654178def14515cb0819e00_prof);

        
        $__internal_242f29cb0b7dbf42092e4f282750240b058ef812e551c35c7027f3ae9a65f85c->leave($__internal_242f29cb0b7dbf42092e4f282750240b058ef812e551c35c7027f3ae9a65f85c_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_81bba313751641029f2b8bb36026529faabc469121ab8bdcb3d63029a9ca6605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81bba313751641029f2b8bb36026529faabc469121ab8bdcb3d63029a9ca6605->enter($__internal_81bba313751641029f2b8bb36026529faabc469121ab8bdcb3d63029a9ca6605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e3d88992b08386814e4b317f943c93a12ca3274c94d425620cba9d5369657df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d88992b08386814e4b317f943c93a12ca3274c94d425620cba9d5369657df3->enter($__internal_e3d88992b08386814e4b317f943c93a12ca3274c94d425620cba9d5369657df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_e3d88992b08386814e4b317f943c93a12ca3274c94d425620cba9d5369657df3->leave($__internal_e3d88992b08386814e4b317f943c93a12ca3274c94d425620cba9d5369657df3_prof);

        
        $__internal_81bba313751641029f2b8bb36026529faabc469121ab8bdcb3d63029a9ca6605->leave($__internal_81bba313751641029f2b8bb36026529faabc469121ab8bdcb3d63029a9ca6605_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a42f2b045d13ed96817a12a0c2e103c07c89e6c95a77ae62370949ff854d6d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42f2b045d13ed96817a12a0c2e103c07c89e6c95a77ae62370949ff854d6d7b->enter($__internal_a42f2b045d13ed96817a12a0c2e103c07c89e6c95a77ae62370949ff854d6d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8bb87601acfe91b2c1838745a503778f960c7052261549c3ddbe99aabc586a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb87601acfe91b2c1838745a503778f960c7052261549c3ddbe99aabc586a37->enter($__internal_8bb87601acfe91b2c1838745a503778f960c7052261549c3ddbe99aabc586a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8bb87601acfe91b2c1838745a503778f960c7052261549c3ddbe99aabc586a37->leave($__internal_8bb87601acfe91b2c1838745a503778f960c7052261549c3ddbe99aabc586a37_prof);

        
        $__internal_a42f2b045d13ed96817a12a0c2e103c07c89e6c95a77ae62370949ff854d6d7b->leave($__internal_a42f2b045d13ed96817a12a0c2e103c07c89e6c95a77ae62370949ff854d6d7b_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_859a2c5a5548de9235ab528366d14e540669bf66be214238d730059a73f7369b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859a2c5a5548de9235ab528366d14e540669bf66be214238d730059a73f7369b->enter($__internal_859a2c5a5548de9235ab528366d14e540669bf66be214238d730059a73f7369b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_bc9a6a4e7e34579a8038010503ff665846249af7b04f79f77988d6afe644ee1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9a6a4e7e34579a8038010503ff665846249af7b04f79f77988d6afe644ee1f->enter($__internal_bc9a6a4e7e34579a8038010503ff665846249af7b04f79f77988d6afe644ee1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bc9a6a4e7e34579a8038010503ff665846249af7b04f79f77988d6afe644ee1f->leave($__internal_bc9a6a4e7e34579a8038010503ff665846249af7b04f79f77988d6afe644ee1f_prof);

        
        $__internal_859a2c5a5548de9235ab528366d14e540669bf66be214238d730059a73f7369b->leave($__internal_859a2c5a5548de9235ab528366d14e540669bf66be214238d730059a73f7369b_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_1a139ff37ba739be69a4020a82b1881a8c9922183b95d668421ecd101b378978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a139ff37ba739be69a4020a82b1881a8c9922183b95d668421ecd101b378978->enter($__internal_1a139ff37ba739be69a4020a82b1881a8c9922183b95d668421ecd101b378978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_062fb35fe936c80ada59d8ba4696f19a4679fb09f9f3de055f7847ed495525e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062fb35fe936c80ada59d8ba4696f19a4679fb09f9f3de055f7847ed495525e8->enter($__internal_062fb35fe936c80ada59d8ba4696f19a4679fb09f9f3de055f7847ed495525e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_062fb35fe936c80ada59d8ba4696f19a4679fb09f9f3de055f7847ed495525e8->leave($__internal_062fb35fe936c80ada59d8ba4696f19a4679fb09f9f3de055f7847ed495525e8_prof);

        
        $__internal_1a139ff37ba739be69a4020a82b1881a8c9922183b95d668421ecd101b378978->leave($__internal_1a139ff37ba739be69a4020a82b1881a8c9922183b95d668421ecd101b378978_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_a30fe75728a6b8c6825a687d3351031467aaa2ba36e28d8095f29fda2b8a84ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a30fe75728a6b8c6825a687d3351031467aaa2ba36e28d8095f29fda2b8a84ee->enter($__internal_a30fe75728a6b8c6825a687d3351031467aaa2ba36e28d8095f29fda2b8a84ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_3ed3d0922a6be500f2cdb8467e95d1cd1ba92dc936195b6d24ee35f7bb6350ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed3d0922a6be500f2cdb8467e95d1cd1ba92dc936195b6d24ee35f7bb6350ec->enter($__internal_3ed3d0922a6be500f2cdb8467e95d1cd1ba92dc936195b6d24ee35f7bb6350ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3ed3d0922a6be500f2cdb8467e95d1cd1ba92dc936195b6d24ee35f7bb6350ec->leave($__internal_3ed3d0922a6be500f2cdb8467e95d1cd1ba92dc936195b6d24ee35f7bb6350ec_prof);

        
        $__internal_a30fe75728a6b8c6825a687d3351031467aaa2ba36e28d8095f29fda2b8a84ee->leave($__internal_a30fe75728a6b8c6825a687d3351031467aaa2ba36e28d8095f29fda2b8a84ee_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7fe1b7dc83ee2b7ecffa38bd1dea98bdc603f38a27dd7fa1f36b925d9e51fb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe1b7dc83ee2b7ecffa38bd1dea98bdc603f38a27dd7fa1f36b925d9e51fb63->enter($__internal_7fe1b7dc83ee2b7ecffa38bd1dea98bdc603f38a27dd7fa1f36b925d9e51fb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0c0bba0955c2c3f19fb196be57a21911424e9fa012a1352ed0d7994688d34c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0bba0955c2c3f19fb196be57a21911424e9fa012a1352ed0d7994688d34c7e->enter($__internal_0c0bba0955c2c3f19fb196be57a21911424e9fa012a1352ed0d7994688d34c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_0c0bba0955c2c3f19fb196be57a21911424e9fa012a1352ed0d7994688d34c7e->leave($__internal_0c0bba0955c2c3f19fb196be57a21911424e9fa012a1352ed0d7994688d34c7e_prof);

        
        $__internal_7fe1b7dc83ee2b7ecffa38bd1dea98bdc603f38a27dd7fa1f36b925d9e51fb63->leave($__internal_7fe1b7dc83ee2b7ecffa38bd1dea98bdc603f38a27dd7fa1f36b925d9e51fb63_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_282199f02731b8c216c2d636a26c8589fbf1cc13e528b8f814e4c84e5b3e1953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_282199f02731b8c216c2d636a26c8589fbf1cc13e528b8f814e4c84e5b3e1953->enter($__internal_282199f02731b8c216c2d636a26c8589fbf1cc13e528b8f814e4c84e5b3e1953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7fa7e3239fbc1a2dbd60f15b620941453e051ec8d27d06c7e5876fa43997e970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa7e3239fbc1a2dbd60f15b620941453e051ec8d27d06c7e5876fa43997e970->enter($__internal_7fa7e3239fbc1a2dbd60f15b620941453e051ec8d27d06c7e5876fa43997e970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_7fa7e3239fbc1a2dbd60f15b620941453e051ec8d27d06c7e5876fa43997e970->leave($__internal_7fa7e3239fbc1a2dbd60f15b620941453e051ec8d27d06c7e5876fa43997e970_prof);

        
        $__internal_282199f02731b8c216c2d636a26c8589fbf1cc13e528b8f814e4c84e5b3e1953->leave($__internal_282199f02731b8c216c2d636a26c8589fbf1cc13e528b8f814e4c84e5b3e1953_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_39663ee7a28f3a8ea40355d422ac3e9791a7576d075c9ad17d22eff12cfe90c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39663ee7a28f3a8ea40355d422ac3e9791a7576d075c9ad17d22eff12cfe90c8->enter($__internal_39663ee7a28f3a8ea40355d422ac3e9791a7576d075c9ad17d22eff12cfe90c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_0c0dd2bd11a35a2ca8882af96a1977b5f6c1516b9f57f10c7fac9eb8b0c67bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0dd2bd11a35a2ca8882af96a1977b5f6c1516b9f57f10c7fac9eb8b0c67bd3->enter($__internal_0c0dd2bd11a35a2ca8882af96a1977b5f6c1516b9f57f10c7fac9eb8b0c67bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_0c0dd2bd11a35a2ca8882af96a1977b5f6c1516b9f57f10c7fac9eb8b0c67bd3->leave($__internal_0c0dd2bd11a35a2ca8882af96a1977b5f6c1516b9f57f10c7fac9eb8b0c67bd3_prof);

        
        $__internal_39663ee7a28f3a8ea40355d422ac3e9791a7576d075c9ad17d22eff12cfe90c8->leave($__internal_39663ee7a28f3a8ea40355d422ac3e9791a7576d075c9ad17d22eff12cfe90c8_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock button_widget %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
