<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/module/luxshop/general_menu.twig */
class __TwigTemplate_68ebaddcc7aca5c2411867982ce5b7b0be8c3cd044a21f9129d1b97f843a76ac extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["ns_bg_attachments"] = [0 => "scroll", 1 => "fixed"];
        // line 4
        $context["ns_bg_positions"] = [0 => "top left", 1 => "top center", 2 => "top right", 3 => "center left", 4 => "center center", 5 => "center right", 6 => "bottom left", 7 => "bottom center", 8 => "bottom right"];
        // line 7
        $context["ns_bg_repeats"] = [0 => "repeat", 1 => "no-repeat", 2 => "repeat-x", 3 => "repeat-y"];
        // line 10
        echo "

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 13
        echo ($context["text_minify_css"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t\t";
        // line 16
        if (($context["config_minify_css"] ?? null)) {
            // line 17
            echo "\t\t\t\t\t\t\t\t<input id=\"config_minify_css_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_minify_css\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t<label for=\"config_minify_css_yes\">";
            // line 18
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t\t\t\t<input id=\"config_minify_css_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_minify_css\" value=\"1\" />
\t\t\t\t\t\t\t\t<label for=\"config_minify_css_yes\">";
            // line 21
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t\t\t\t";
        if ( !($context["config_minify_css"] ?? null)) {
            // line 24
            echo "\t\t\t\t\t\t\t\t<input id=\"config_minify_css_no\" class=\"hide-radio\" type=\"radio\" name=\"config_minify_css\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t<label for=\"config_minify_css_no\">";
            // line 25
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t\t\t\t<input id=\"config_minify_css_no\" class=\"hide-radio\" type=\"radio\" name=\"config_minify_css\" value=\"0\" />
\t\t\t\t\t\t\t\t<label for=\"config_minify_css_no\">";
            // line 28
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 34
        echo ($context["text_minify_js"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t\t";
        // line 37
        if (($context["config_minify_js"] ?? null)) {
            // line 38
            echo "\t\t\t\t\t\t\t\t<input id=\"config_minify_js_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_minify_js\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t<label for=\"config_minify_js_yes\">";
            // line 39
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t\t\t\t\t<input id=\"config_minify_js_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_minify_js\" value=\"1\" />
\t\t\t\t\t\t\t\t<label for=\"config_minify_js_yes\">";
            // line 42
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t\t\t\t\t";
        if ( !($context["config_minify_js"] ?? null)) {
            // line 45
            echo "\t\t\t\t\t\t\t\t<input id=\"config_minify_js_no\" class=\"hide-radio\" type=\"radio\" name=\"config_minify_js\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t<label for=\"config_minify_js_no\">";
            // line 46
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t\t\t<input id=\"config_minify_js_no\" class=\"hide-radio\" type=\"radio\" name=\"config_minify_js\" value=\"0\" />
\t\t\t\t\t\t\t\t<label for=\"config_minify_js_no\">";
            // line 49
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-12 title-setting\">";
        // line 55
        echo ($context["title_disable_button_cart_quickorder"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 58
        echo ($context["text_disable_cart_button"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t\t";
        // line 61
        if (($context["config_disable_cart_button"] ?? null)) {
            // line 62
            echo "\t\t\t\t\t\t\t\t<input id=\"config_disable_cart_button_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_disable_cart_button\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t<label for=\"config_disable_cart_button_yes\">";
            // line 63
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 65
            echo "\t\t\t\t\t\t\t\t<input id=\"config_disable_cart_button_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_disable_cart_button\" value=\"1\" />
\t\t\t\t\t\t\t\t<label for=\"config_disable_cart_button_yes\">";
            // line 66
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t\t\t";
        if ( !($context["config_disable_cart_button"] ?? null)) {
            // line 69
            echo "\t\t\t\t\t\t\t\t<input id=\"config_disable_cart_button_no\" class=\"hide-radio\" type=\"radio\" name=\"config_disable_cart_button\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t<label for=\"config_disable_cart_button_no\">";
            // line 70
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 72
            echo "\t\t\t\t\t\t\t\t<input id=\"config_disable_cart_button_no\" class=\"hide-radio\" type=\"radio\" name=\"config_disable_cart_button\" value=\"0\" />
\t\t\t\t\t\t\t\t<label for=\"config_disable_cart_button_no\">";
            // line 73
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        }
        // line 75
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 79
        echo ($context["text_change_text_cart_button_out_of_stock"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t\t";
        // line 82
        if (($context["config_change_text_cart_button_out_of_stock"] ?? null)) {
            // line 83
            echo "\t\t\t\t\t\t\t\t<input id=\"config_change_text_cart_button_out_of_stock_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_change_text_cart_button_out_of_stock\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t<label for=\"config_change_text_cart_button_out_of_stock_yes\">";
            // line 84
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 86
            echo "\t\t\t\t\t\t\t\t<input id=\"config_change_text_cart_button_out_of_stock_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_change_text_cart_button_out_of_stock\" value=\"1\" />
\t\t\t\t\t\t\t\t<label for=\"config_change_text_cart_button_out_of_stock_yes\">";
            // line 87
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t\t\t";
        if ( !($context["config_change_text_cart_button_out_of_stock"] ?? null)) {
            // line 90
            echo "\t\t\t\t\t\t\t\t<input id=\"config_change_text_cart_button_out_of_stock_no\" class=\"hide-radio\" type=\"radio\" name=\"config_change_text_cart_button_out_of_stock\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t<label for=\"config_change_text_cart_button_out_of_stock_no\">";
            // line 91
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 93
            echo "\t\t\t\t\t\t\t\t<input id=\"config_change_text_cart_button_out_of_stock_no\" class=\"hide-radio\" type=\"radio\" name=\"config_change_text_cart_button_out_of_stock\" value=\"0\" />
\t\t\t\t\t\t\t\t<label for=\"config_change_text_cart_button_out_of_stock_no\">";
            // line 94
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 100
        echo ($context["text_disable_cart_button_out_of_stock"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 103
            echo "\t\t\t\t\t\t\t\t\t<div class=\"input-group pull-left\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 104
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["language"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["code"] ?? null) : null);
            echo "/";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["language"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["language"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null);
            echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"config_disable_cart_button_text[";
            // line 105
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["language"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["language_id"] ?? null) : null);
            echo "][disable_cart_button_text]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["config_disable_cart_button_text"] ?? null), (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["language"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["language_id"] ?? null) : null), [], "array", true, true, false, 105)) ? ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["config_disable_cart_button_text"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[(($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["language"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["disable_cart_button_text"] ?? null) : null)) : (""));
            echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 111
        echo ($context["text_show_stock_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 114
        if (($context["config_show_stock_status"] ?? null)) {
            // line 115
            echo "\t\t\t\t\t\t\t<input id=\"config_show_stock_status_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_stock_status\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_stock_status_yes\">";
            // line 116
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 118
            echo "\t\t\t\t\t\t\t<input id=\"config_show_stock_status_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_stock_status\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_show_stock_status_yes\">";
            // line 119
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 121
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_show_stock_status"] ?? null)) {
            // line 122
            echo "\t\t\t\t\t\t\t<input id=\"config_show_stock_status_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_stock_status\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_stock_status_no\">";
            // line 123
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 125
            echo "\t\t\t\t\t\t\t<input id=\"config_show_stock_status_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_stock_status\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_show_stock_status_no\">";
            // line 126
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 128
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 132
        echo ($context["text_disable_fastorder_button"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 135
        if (($context["config_disable_fastorder_button"] ?? null)) {
            // line 136
            echo "\t\t\t\t\t\t\t<input id=\"config_disable_fastorder_button_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_disable_fastorder_button\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_disable_fastorder_button_yes\">";
            // line 137
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 139
            echo "\t\t\t\t\t\t\t<input id=\"config_disable_fastorder_button_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_disable_fastorder_button\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_disable_fastorder_button_yes\">";
            // line 140
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 142
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_disable_fastorder_button"] ?? null)) {
            // line 143
            echo "\t\t\t\t\t\t\t<input id=\"config_disable_fastorder_button_no\" class=\"hide-radio\" type=\"radio\" name=\"config_disable_fastorder_button\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_disable_fastorder_button_no\">";
            // line 144
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 146
            echo "\t\t\t\t\t\t\t<input id=\"config_disable_fastorder_button_no\" class=\"hide-radio\" type=\"radio\" name=\"config_disable_fastorder_button\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_disable_fastorder_button_no\">";
            // line 147
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 149
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 153
        echo ($context["text_quantity_btn_module"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 156
        if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["config_additional_settings_luxshop"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["quantity_btn_module"] ?? null) : null)) {
            // line 157
            echo "\t\t\t\t\t\t\t<input id=\"config_asn_quantity_btn_module_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[quantity_btn_module]\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_asn_quantity_btn_module_yes\">";
            // line 158
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 160
            echo "\t\t\t\t\t\t\t<input id=\"config_asn_quantity_btn_module_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[quantity_btn_module]\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_asn_quantity_btn_module_yes\">";
            // line 161
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 163
        echo "\t\t\t\t\t\t\t";
        if ( !(($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["config_additional_settings_luxshop"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["quantity_btn_module"] ?? null) : null)) {
            // line 164
            echo "\t\t\t\t\t\t\t<input id=\"config_asn_quantity_btn_module_no\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[quantity_btn_module]\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_asn_quantity_btn_module_no\">";
            // line 165
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 167
            echo "\t\t\t\t\t\t\t<input id=\"config_asn_quantity_btn_module_no\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[quantity_btn_module]\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_asn_quantity_btn_module_no\">";
            // line 168
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 170
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 174
        echo ($context["text_quantity_btn_page"] ?? null);
        echo "
\t\t\t\t\t<div class=\"label-description\">";
        // line 175
        echo ($context["text_options_product_page_description"] ?? null);
        echo "</div>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 179
        if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["config_additional_settings_luxshop"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["quantity_btn_page"] ?? null) : null)) {
            // line 180
            echo "\t\t\t\t\t\t\t<input id=\"config_asn_quantity_btn_page_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[quantity_btn_page]\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_asn_quantity_btn_page_yes\">";
            // line 181
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 183
            echo "\t\t\t\t\t\t\t<input id=\"config_asn_quantity_btn_page_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[quantity_btn_page]\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_asn_quantity_btn_page_yes\">";
            // line 184
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 186
        echo "\t\t\t\t\t\t\t";
        if ( !(($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["config_additional_settings_luxshop"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["quantity_btn_page"] ?? null) : null)) {
            // line 187
            echo "\t\t\t\t\t\t\t<input id=\"config_asn_quantity_btn_page_no\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[quantity_btn_page]\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_asn_quantity_btn_page_no\">";
            // line 188
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 190
            echo "\t\t\t\t\t\t\t<input id=\"config_asn_quantity_btn_page_no\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[quantity_btn_page]\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_asn_quantity_btn_page_no\">";
            // line 191
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 193
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 197
        echo ($context["text_quantity_multiple"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 200
        if ((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "array", true, true, false, 200) && ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["config_additional_settings_luxshop"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["quantity_multiple"] ?? null) : null) == "1"))) {
            // line 201
            echo "\t\t\t\t\t\t\t<input id=\"quantity_multiple_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[quantity_multiple]\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"quantity_multiple_yes\">";
            // line 202
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 204
            echo "\t\t\t\t\t\t\t<input id=\"quantity_multiple_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[quantity_multiple]\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"quantity_multiple_yes\">";
            // line 205
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 207
        echo "
\t\t\t\t\t\t\t";
        // line 208
        if (( !twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "array", true, true, false, 208) || ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["config_additional_settings_luxshop"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["quantity_multiple"] ?? null) : null) == "0"))) {
            // line 209
            echo "\t\t\t\t\t\t\t<input id=\"quantity_multiple_no\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[quantity_multiple]\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"quantity_multiple_no\">";
            // line 210
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 212
            echo "\t\t\t\t\t\t\t<input id=\"quantity_multiple_no\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[quantity_multiple]\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"quantity_multiple_no\">";
            // line 213
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 215
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 219
        echo ($context["text_price_recalc"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 222
        if ((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "price_recalc", [], "array", true, true, false, 222) && ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["config_additional_settings_luxshop"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["price_recalc"] ?? null) : null) == "1"))) {
            // line 223
            echo "\t\t\t\t\t\t\t<input id=\"price_recalc_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[price_recalc]\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"price_recalc_yes\">";
            // line 224
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 226
            echo "\t\t\t\t\t\t\t<input id=\"price_recalc_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[price_recalc]\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"price_recalc_yes\">";
            // line 227
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 229
        echo "
\t\t\t\t\t\t\t";
        // line 230
        if (( !twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "price_recalc", [], "array", true, true, false, 230) || ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["config_additional_settings_luxshop"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["price_recalc"] ?? null) : null) == "0"))) {
            // line 231
            echo "\t\t\t\t\t\t\t<input id=\"price_recalc_no\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[price_recalc]\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"price_recalc_no\">";
            // line 232
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 234
            echo "\t\t\t\t\t\t\t<input id=\"price_recalc_no\" class=\"hide-radio\" type=\"radio\" name=\"config_additional_settings_luxshop[price_recalc]\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"price_recalc_no\">";
            // line 235
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 237
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 242
        echo ($context["text_defaut_display_view"] ?? null);
        echo "
\t\t\t\t\t<div class=\"label-description\">";
        // line 243
        echo ($context["text_options_product_page_description"] ?? null);
        echo "</div></label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<select name=\"nst_data[defaut_display_view]\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 246
        if (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["nst_data"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["defaut_display_view"] ?? null) : null) == "grid")) {
            // line 247
            echo "\t\t\t\t\t\t\t\t<option value=\"grid\" selected=\"selected\">";
            echo ($context["text_grid"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"list\">";
            // line 248
            echo ($context["text_list"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"price\">";
            // line 249
            echo ($context["text_price"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } elseif (((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b =         // line 250
($context["nst_data"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["defaut_display_view"] ?? null) : null) == "list")) {
            // line 251
            echo "\t\t\t\t\t\t\t\t<option value=\"grid\">";
            echo ($context["text_grid"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"list\" selected=\"selected\">";
            // line 252
            echo ($context["text_list"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"price\">";
            // line 253
            echo ($context["text_price"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } elseif (((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c =         // line 254
($context["nst_data"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["defaut_display_view"] ?? null) : null) == "price")) {
            // line 255
            echo "\t\t\t\t\t\t\t\t<option value=\"grid\">";
            echo ($context["text_grid"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"list\">";
            // line 256
            echo ($context["text_list"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"price\" selected=\"selected\">";
            // line 257
            echo ($context["text_price"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 259
            echo "\t\t\t\t\t\t\t\t<option value=\"grid\" selected=\"selected\">";
            echo ($context["text_grid"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"list\">";
            // line 260
            echo ($context["text_list"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"price\">";
            // line 261
            echo ($context["text_price"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 263
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group hidden\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 267
        echo ($context["text_lazyload"] ?? null);
        echo "
\t\t\t\t\t<div class=\"label-description\">";
        // line 268
        echo ($context["text_options_product_page_description"] ?? null);
        echo "</div></label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 271
        if ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "lazyload_page", [], "array", true, true, false, 271) && ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["nst_data"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["lazyload_page"] ?? null) : null) == "1"))) {
            // line 272
            echo "\t\t\t\t\t\t\t<input id=\"lazyload_page_yes\" class=\"hide-radio\" type=\"radio\" name=\"nst_data[lazyload_page]\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"lazyload_page_yes\">";
            // line 273
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 275
            echo "\t\t\t\t\t\t\t<input id=\"lazyload_page_yes\" class=\"hide-radio\" type=\"radio\" name=\"nst_data[lazyload_page]\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"lazyload_page_yes\">";
            // line 276
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 278
        echo "
\t\t\t\t\t\t\t";
        // line 279
        if (( !twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "lazyload_page", [], "array", true, true, false, 279) || ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["nst_data"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["lazyload_page"] ?? null) : null) == "0"))) {
            // line 280
            echo "\t\t\t\t\t\t\t<input id=\"lazyload_page_no\" class=\"hide-radio\" type=\"radio\" name=\"nst_data[lazyload_page]\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"lazyload_page_no\">";
            // line 281
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 283
            echo "\t\t\t\t\t\t\t<input id=\"lazyload_page_no\" class=\"hide-radio\" type=\"radio\" name=\"nst_data[lazyload_page]\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"lazyload_page_no\">";
            // line 284
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 286
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group hidden\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 290
        echo ($context["text_lazyload"] ?? null);
        echo "
\t\t\t\t\t<div class=\"label-description\">";
        // line 291
        echo ($context["text_options_product_module_description"] ?? null);
        echo "</div></label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 294
        if ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "lazyload_module", [], "array", true, true, false, 294) && ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["nst_data"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["lazyload_module"] ?? null) : null) == "1"))) {
            // line 295
            echo "\t\t\t\t\t\t\t<input id=\"lazyload_module_yes\" class=\"hide-radio\" type=\"radio\" name=\"nst_data[lazyload_module]\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"lazyload_module_yes\">";
            // line 296
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 298
            echo "\t\t\t\t\t\t\t<input id=\"lazyload_module_yes\" class=\"hide-radio\" type=\"radio\" name=\"nst_data[lazyload_module]\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"lazyload_module_yes\">";
            // line 299
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 301
        echo "
\t\t\t\t\t\t\t";
        // line 302
        if (( !twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "lazyload_module", [], "array", true, true, false, 302) || ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["nst_data"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["lazyload_module"] ?? null) : null) == "0"))) {
            // line 303
            echo "\t\t\t\t\t\t\t<input id=\"lazyload_module_no\" class=\"hide-radio\" type=\"radio\" name=\"nst_data[lazyload_module]\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"lazyload_module_no\">";
            // line 304
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 306
            echo "\t\t\t\t\t\t\t<input id=\"lazyload_module_no\" class=\"hide-radio\" type=\"radio\" name=\"nst_data[lazyload_module]\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"lazyload_module_no\">";
            // line 307
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 309
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group hidden\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-lazyload-image\">";
        // line 313
        echo ($context["text_lazyload_image"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\"><a href=\"\" id=\"thumb-lazyload-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 314
        echo ($context["lazyload_image"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"nst_data[lazyload_image]\" value=\"";
        // line 315
        echo ($context["config_lazyload_image"] ?? null);
        echo "\" id=\"input-lazyload-image\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-12 title-setting\">";
        // line 319
        echo ($context["title_setting_options"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 322
        echo ($context["text_on_off_options_product_module"] ?? null);
        echo "<br>
\t\t\t\t\t<div class=\"label-description\">";
        // line 323
        echo ($context["text_options_product_module_description"] ?? null);
        echo "</div>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 327
        if (($context["config_show_options_module"] ?? null)) {
            // line 328
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_module_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_module\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_module_yes\">";
            // line 329
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 331
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_module_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_module\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_module_yes\">";
            // line 332
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 334
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_show_options_module"] ?? null)) {
            // line 335
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_module_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_module\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_module_no\">";
            // line 336
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 338
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_module_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_module\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_module_no\">";
            // line 339
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 341
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 345
        echo ($context["text_on_off_options_required_module"] ?? null);
        echo "
\t\t\t\t\t<div class=\"label-description\">";
        // line 346
        echo ($context["text_options_product_module_description"] ?? null);
        echo "</div>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 350
        if (($context["config_show_options_required_module"] ?? null)) {
            // line 351
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_required_module_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_required_module\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_required_module_yes\">";
            // line 352
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 354
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_required_module_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_required_module\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_required_module_yes\">";
            // line 355
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 357
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_show_options_required_module"] ?? null)) {
            // line 358
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_required_module_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_required_module\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_required_module_no\">";
            // line 359
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 361
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_required_module_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_required_module\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_required_module_no\">";
            // line 362
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 364
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 368
        echo ($context["text_on_off_options_product_page"] ?? null);
        echo "<br>
\t\t\t\t\t<div class=\"label-description\">";
        // line 369
        echo ($context["text_options_product_page_description"] ?? null);
        echo "</div>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 373
        if (($context["config_show_options_page"] ?? null)) {
            // line 374
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_page_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_page\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_page_yes\">";
            // line 375
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 377
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_page_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_page\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_page_yes\">";
            // line 378
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 380
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_show_options_page"] ?? null)) {
            // line 381
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_page_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_page\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_page_no\">";
            // line 382
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 384
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_page_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_page\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_page_no\">";
            // line 385
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 387
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 391
        echo ($context["text_on_off_options_required_page"] ?? null);
        echo "<br>
\t\t\t\t\t<div class=\"label-description\">";
        // line 392
        echo ($context["text_options_product_page_description"] ?? null);
        echo "</div>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 396
        if (($context["config_show_options_required_page"] ?? null)) {
            // line 397
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_required_page_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_required_page\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_required_page_yes\">";
            // line 398
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 400
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_required_page_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_required_page\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_required_page_yes\">";
            // line 401
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 403
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_show_options_required_page"] ?? null)) {
            // line 404
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_required_page_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_required_page\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_required_page_no\">";
            // line 405
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 407
            echo "\t\t\t\t\t\t\t<input id=\"config_show_options_required_page_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_options_required_page\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_show_options_required_page_no\">";
            // line 408
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 410
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-12 title-setting\">";
        // line 414
        echo ($context["text_special_timer"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 417
        echo ($context["text_special_timer_position"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-text\">
\t\t\t\t\t\t\t";
        // line 420
        if (((array_key_exists("config_special_timer_position", $context) && (($context["config_special_timer_position"] ?? null) == "1")) ||  !($context["config_special_timer_position"] ?? null))) {
            // line 421
            echo "\t\t\t\t\t\t\t<input id=\"st_pos1\" class=\"hide-radio-text\" type=\"radio\" name=\"config_special_timer_position\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"st_pos1\">";
            // line 422
            echo ($context["text_timer_left"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 424
            echo "\t\t\t\t\t\t\t<input id=\"st_pos1\" class=\"hide-radio-text\" type=\"radio\" name=\"config_special_timer_position\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"st_pos1\">";
            // line 425
            echo ($context["text_timer_left"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 427
        echo "\t\t\t\t\t\t\t";
        if ((array_key_exists("config_special_timer_position", $context) && (($context["config_special_timer_position"] ?? null) == "2"))) {
            // line 428
            echo "\t\t\t\t\t\t\t<input id=\"st_pos2\" class=\"hide-radio-text\" type=\"radio\" name=\"config_special_timer_position\" value=\"2\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"st_pos2\">";
            // line 429
            echo ($context["text_timer_bottom"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 431
            echo "\t\t\t\t\t\t\t<input id=\"st_pos2\" class=\"hide-radio-text\" type=\"radio\" name=\"config_special_timer_position\" value=\"2\" />
\t\t\t\t\t\t\t<label for=\"st_pos2\">";
            // line 432
            echo ($context["text_timer_bottom"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 434
        echo "\t\t\t\t\t\t\t";
        if ((array_key_exists("config_special_timer_position", $context) && (($context["config_special_timer_position"] ?? null) == "3"))) {
            // line 435
            echo "\t\t\t\t\t\t\t<input id=\"st_pos3\" class=\"hide-radio-text\" type=\"radio\" name=\"config_special_timer_position\" value=\"3\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"st_pos3\">";
            // line 436
            echo ($context["text_timer_right"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 438
            echo "\t\t\t\t\t\t\t<input id=\"st_pos3\" class=\"hide-radio-text\" type=\"radio\" name=\"config_special_timer_position\" value=\"3\" />
\t\t\t\t\t\t\t<label for=\"st_pos3\">";
            // line 439
            echo ($context["text_timer_right"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 441
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 445
        echo ($context["text_entry_special_timer_module"] ?? null);
        echo "
\t\t\t\t\t<div class=\"label-description\">";
        // line 446
        echo ($context["text_entry_special_timer_module_description"] ?? null);
        echo "</div>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 450
        if (($context["config_show_special_timer_module"] ?? null)) {
            // line 451
            echo "\t\t\t\t\t\t\t<input id=\"config_show_special_timer_module_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_special_timer_module\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_special_timer_module_yes\">";
            // line 452
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 454
            echo "\t\t\t\t\t\t\t<input id=\"config_show_special_timer_module_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_special_timer_module\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_show_special_timer_module_yes\">";
            // line 455
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 457
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_show_special_timer_module"] ?? null)) {
            // line 458
            echo "\t\t\t\t\t\t\t<input id=\"config_show_special_timer_module_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_special_timer_module\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_special_timer_module_no\">";
            // line 459
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 461
            echo "\t\t\t\t\t\t\t<input id=\"config_show_special_timer_module_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_special_timer_module\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_show_special_timer_module_no\">";
            // line 462
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 464
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 468
        echo ($context["text_entry_special_timer_page"] ?? null);
        echo "
\t\t\t\t\t<div class=\"label-description\">";
        // line 469
        echo ($context["text_entry_special_timer_page_description"] ?? null);
        echo "</div>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 473
        if (($context["config_show_special_timer_page"] ?? null)) {
            // line 474
            echo "\t\t\t\t\t\t\t<input id=\"config_show_special_timer_page_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_special_timer_page\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_special_timer_page_yes\">";
            // line 475
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 477
            echo "\t\t\t\t\t\t\t<input id=\"config_show_special_timer_page_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_special_timer_page\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_show_special_timer_page_yes\">";
            // line 478
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 480
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_show_special_timer_page"] ?? null)) {
            // line 481
            echo "\t\t\t\t\t\t\t<input id=\"config_show_special_timer_page_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_special_timer_page\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_special_timer_page_no\">";
            // line 482
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 484
            echo "\t\t\t\t\t\t\t<input id=\"config_show_special_timer_page_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_special_timer_page\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_show_special_timer_page_no\">";
            // line 485
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 487
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-12 title-setting\">";
        // line 491
        echo ($context["text_review"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 494
        echo ($context["entry_fields_dignity"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 497
        if (($context["config_show_review_plus"] ?? null)) {
            // line 498
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_plus_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_plus\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_plus_yes\">";
            // line 499
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 501
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_plus_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_plus\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_plus_yes\">";
            // line 502
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 504
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_show_review_plus"] ?? null)) {
            // line 505
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_plus_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_plus\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_plus_no\">";
            // line 506
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 508
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_plus_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_plus\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_plus_no\">";
            // line 509
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 511
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 515
        echo ($context["entry_fields_required"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 518
        if (($context["config_show_review_plus_requared"] ?? null)) {
            // line 519
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_plus_requared_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_plus_requared\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_plus_requared_yes\">";
            // line 520
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 522
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_plus_requared_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_plus_requared\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_plus_requared_yes\">";
            // line 523
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 525
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_show_review_plus_requared"] ?? null)) {
            // line 526
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_plus_requared_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_plus_requared\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_plus_requared_no\">";
            // line 527
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 529
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_plus_requared_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_plus_requared\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_plus_requared_no\">";
            // line 530
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 532
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 536
        echo ($context["entry_fields_disadvantages"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 539
        if (($context["config_show_review_minus"] ?? null)) {
            // line 540
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_minus_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_minus\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_minus_yes\">";
            // line 541
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 543
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_minus_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_minus\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_minus_yes\">";
            // line 544
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 546
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_show_review_minus"] ?? null)) {
            // line 547
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_minus_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_minus\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_minus_no\">";
            // line 548
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 550
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_minus_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_minus\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_minus_no\">";
            // line 551
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 553
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 557
        echo ($context["entry_fields_required"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 560
        if (($context["config_show_review_minus_requared"] ?? null)) {
            // line 561
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_minus_requared_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_minus_requared\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_minus_requared_yes\">";
            // line 562
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 564
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_minus_requared_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_minus_requared\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_minus_requared_yes\">";
            // line 565
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 567
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_show_review_minus_requared"] ?? null)) {
            // line 568
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_minus_requared_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_minus_requared\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_minus_requared_no\">";
            // line 569
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 571
            echo "\t\t\t\t\t\t\t<input id=\"config_show_review_minus_requared_no\" class=\"hide-radio\" type=\"radio\" name=\"config_show_review_minus_requared\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_show_review_minus_requared_no\">";
            // line 572
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 574
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>



\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 581
        echo ($context["entry_ns_themes_custom_bg_mode"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<select name=\"config_ns_themes_custom_bg_mode\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 584
        if ((($context["config_ns_themes_custom_bg_mode"] ?? null) == "1")) {
            // line 585
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 586
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 588
            echo "\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 589
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 591
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-bg-img-preview\">";
        // line 596
        echo ($context["entry_bg_img_preview"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\"><a href=\"\" id=\"thumb-bg-img-preview\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 597
        echo ($context["bg_img_preview"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"config_themes_custom_bg_img_preview\" value=\"";
        // line 598
        echo ($context["bg_img_val"] ?? null);
        echo "\" id=\"input-bg-img-preview\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 602
        echo ($context["entry_themes_custom_bg_attachment"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<select class=\"form-control\" name=\"config_themes_custom_bg_attachment\">
\t\t\t\t\t\t\t";
        // line 605
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ns_bg_attachments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ns_bg_attachment"]) {
            // line 606
            echo "\t\t\t\t\t\t\t";
            if (($context["ns_bg_attachment"] == ($context["config_themes_custom_bg_attachment"] ?? null))) {
                // line 607
                echo "\t\t\t\t\t\t\t";
                $context["active"] = "selected";
                // line 608
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 609
                echo "\t\t\t\t\t\t\t";
                $context["active"] = "";
                // line 610
                echo "\t\t\t\t\t\t\t";
            }
            // line 611
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["ns_bg_attachment"];
            echo "\" ";
            echo ($context["active"] ?? null);
            echo ">";
            echo $context["ns_bg_attachment"];
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ns_bg_attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 613
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 617
        echo ($context["entry_themes_custom_bg_position"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<select class=\"form-control\" name=\"config_themes_custom_bg_position\">
\t\t\t\t\t\t\t";
        // line 620
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ns_bg_positions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ns_bg_position"]) {
            // line 621
            echo "\t\t\t\t\t\t\t";
            if (($context["ns_bg_position"] == ($context["config_themes_custom_bg_position"] ?? null))) {
                // line 622
                echo "\t\t\t\t\t\t\t";
                $context["active"] = "selected";
                // line 623
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 624
                echo "\t\t\t\t\t\t\t";
                $context["active"] = "";
                // line 625
                echo "\t\t\t\t\t\t\t";
            }
            // line 626
            echo "\t\t\t\t\t\t\t<option ";
            echo ($context["active"] ?? null);
            echo " value=\"";
            echo $context["ns_bg_position"];
            echo "\">";
            echo $context["ns_bg_position"];
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ns_bg_position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 628
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 632
        echo ($context["entry_themes_custom_bg_repeat"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<select class=\"form-control\" name=\"config_themes_custom_bg_repeat\">
\t\t\t\t\t\t\t";
        // line 635
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ns_bg_repeats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ns_bg_repeat"]) {
            // line 636
            echo "\t\t\t\t\t\t\t";
            if (($context["ns_bg_repeat"] == ($context["config_themes_custom_bg_repeat"] ?? null))) {
                // line 637
                echo "\t\t\t\t\t\t\t";
                $context["active"] = "selected";
                // line 638
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 639
                echo "\t\t\t\t\t\t\t";
                $context["active"] = "";
                // line 640
                echo "\t\t\t\t\t\t\t";
            }
            // line 641
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo $context["ns_bg_repeat"];
            echo "\" ";
            echo ($context["active"] ?? null);
            echo ">";
            echo $context["ns_bg_repeat"];
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ns_bg_repeat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 643
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 647
        echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"config_ns_themes_custom_bg_mode_color\" value=\"";
        // line 649
        echo ($context["config_ns_themes_custom_bg_mode_color"] ?? null);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-12 title-setting\">";
        // line 654
        echo ($context["text_header_bg"] ?? null);
        echo "</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 658
        echo ($context["entry_ns_themes_custom_bg_mode"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<select name=\"nst_data[header_bg_mode]\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 661
        if (((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["nst_data"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["header_bg_mode"] ?? null) : null) == "1")) {
            // line 662
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 663
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 665
            echo "\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 666
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 668
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-header-bg-img-preview\">";
        // line 673
        echo ($context["entry_bg_img_preview"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\"><a href=\"\" id=\"thumb-header-bg-img-preview\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 674
        echo ($context["header_bg_img_preview"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"nst_data[header_bg_img]\" value=\"";
        // line 675
        echo ($context["header_bg_img_val"] ?? null);
        echo "\" id=\"input-header-bg-img-preview\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 679
        echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"nst_data[header_bg_mode_color]\" value=\"";
        // line 681
        echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["nst_data"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["header_bg_mode_color"] ?? null) : null);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 685
        echo ($context["entry_themes_custom_bg_position"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<select class=\"form-control\" name=\"nst_data[header_bg_position]\">
\t\t\t\t\t\t\t";
        // line 688
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ns_bg_positions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ns_bg_position"]) {
            // line 689
            echo "\t\t\t\t\t\t\t";
            if (($context["ns_bg_position"] == (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["nst_data"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["header_bg_position"] ?? null) : null))) {
                // line 690
                echo "\t\t\t\t\t\t\t";
                $context["active"] = "selected";
                // line 691
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 692
                echo "\t\t\t\t\t\t\t";
                $context["active"] = "";
                // line 693
                echo "\t\t\t\t\t\t\t";
            }
            // line 694
            echo "\t\t\t\t\t\t\t<option ";
            echo ($context["active"] ?? null);
            echo " value=\"";
            echo $context["ns_bg_position"];
            echo "\">";
            echo $context["ns_bg_position"];
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ns_bg_position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 696
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 700
        echo ($context["entry_themes_custom_bg_repeat"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<select class=\"form-control\" name=\"nst_data[header_bg_repeat]\">
\t\t\t\t\t\t\t";
        // line 703
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ns_bg_repeats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ns_bg_repeat"]) {
            // line 704
            echo "\t\t\t\t\t\t\t";
            if (($context["ns_bg_repeat"] == (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["nst_data"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["header_bg_repeat"] ?? null) : null))) {
                // line 705
                echo "\t\t\t\t\t\t\t";
                $context["active"] = "selected";
                // line 706
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 707
                echo "\t\t\t\t\t\t\t";
                $context["active"] = "";
                // line 708
                echo "\t\t\t\t\t\t\t";
            }
            // line 709
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo $context["ns_bg_repeat"];
            echo "\" ";
            echo ($context["active"] ?? null);
            echo ">";
            echo $context["ns_bg_repeat"];
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ns_bg_repeat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 711
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-12 title-setting\">";
        // line 715
        echo ($context["text_spn"] ?? null);
        echo "2 - 3</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 718
        echo ($context["entry_ns_themes_custom_bg_mode"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<select name=\"nst_data[bg_mode_pos_2]\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 721
        if ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "bg_mode_pos_2", [], "array", true, true, false, 721) && ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["nst_data"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["bg_mode_pos_2"] ?? null) : null) == "1"))) {
            // line 722
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 723
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 724
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 725
($context["nst_data"] ?? null), "bg_mode_pos_2", [], "array", true, true, false, 725) && ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["nst_data"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["bg_mode_pos_2"] ?? null) : null) == "2"))) {
            // line 726
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">";
            // line 727
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 728
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 730
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 731
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 732
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 734
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-bg-img-pos-2\">";
        // line 738
        echo ($context["entry_bg_img_preview"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\"><a href=\"\" id=\"thumb-bg-img-pos-2\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 739
        echo ($context["thumb_img_pos_2"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"nst_data[img_pos_2]\" value=\"";
        // line 740
        echo ($context["img_pos_2"] ?? null);
        echo "\" id=\"input-bg-img-pos-2\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 744
        echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"nst_data[bg_mode_color_pos_2]\" value=\"";
        // line 746
        echo ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "bg_mode_color_pos_2", [], "array", true, true, false, 746)) ? ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["nst_data"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["bg_mode_color_pos_2"] ?? null) : null)) : (""));
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 750
        echo ($context["text_title_color_pos"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"nst_data[title_color_pos_2]\" value=\"";
        // line 752
        echo ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "title_color_pos_2", [], "array", true, true, false, 752)) ? ((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["nst_data"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["title_color_pos_2"] ?? null) : null)) : (""));
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-12 title-setting\">";
        // line 756
        echo ($context["text_spn"] ?? null);
        echo "11 - 14</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 759
        echo ($context["entry_ns_themes_custom_bg_mode"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<select name=\"nst_data[bg_mode_pos_11]\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 762
        if ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "bg_mode_pos_11", [], "array", true, true, false, 762) && ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["nst_data"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["bg_mode_pos_11"] ?? null) : null) == "1"))) {
            // line 763
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 764
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 765
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 766
($context["nst_data"] ?? null), "bg_mode_pos_11", [], "array", true, true, false, 766) && ((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["nst_data"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["bg_mode_pos_11"] ?? null) : null) == "2"))) {
            // line 767
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">";
            // line 768
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 769
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 771
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 772
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 773
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 775
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-bg-img-pos-11\">";
        // line 779
        echo ($context["entry_bg_img_preview"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\"><a href=\"\" id=\"thumb-bg-img-pos-11\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 780
        echo ($context["thumb_img_pos_11"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"nst_data[img_pos_11]\" value=\"";
        // line 781
        echo ($context["img_pos_11"] ?? null);
        echo "\" id=\"input-bg-img-pos-11\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 785
        echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"nst_data[bg_mode_color_pos_11]\" value=\"";
        // line 787
        echo ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "bg_mode_color_pos_11", [], "array", true, true, false, 787)) ? ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["nst_data"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["bg_mode_color_pos_11"] ?? null) : null)) : (""));
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 791
        echo ($context["text_title_color_pos"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"nst_data[title_color_pos_11]\" value=\"";
        // line 793
        echo ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "title_color_pos_11", [], "array", true, true, false, 793)) ? ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["nst_data"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["title_color_pos_11"] ?? null) : null)) : (""));
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-12 title-setting\">";
        // line 797
        echo ($context["text_spn"] ?? null);
        echo "15</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 800
        echo ($context["entry_ns_themes_custom_bg_mode"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<select name=\"nst_data[bg_mode_pos_15]\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 803
        if ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "bg_mode_pos_15", [], "array", true, true, false, 803) && ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["nst_data"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["bg_mode_pos_15"] ?? null) : null) == "1"))) {
            // line 804
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 805
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 806
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 807
($context["nst_data"] ?? null), "bg_mode_pos_15", [], "array", true, true, false, 807) && ((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["nst_data"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["bg_mode_pos_15"] ?? null) : null) == "2"))) {
            // line 808
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">";
            // line 809
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 810
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 812
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 813
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 814
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 816
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-bg-img-pos-15\">";
        // line 820
        echo ($context["entry_bg_img_preview"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\"><a href=\"\" id=\"thumb-bg-img-pos-15\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 821
        echo ($context["thumb_img_pos_15"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"nst_data[img_pos_15]\" value=\"";
        // line 822
        echo ($context["img_pos_15"] ?? null);
        echo "\" id=\"input-bg-img-pos-15\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 826
        echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"nst_data[bg_mode_color_pos_15]\" value=\"";
        // line 828
        echo ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "bg_mode_color_pos_15", [], "array", true, true, false, 828)) ? ((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["nst_data"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["bg_mode_color_pos_15"] ?? null) : null)) : (""));
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 832
        echo ($context["text_title_color_pos"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"nst_data[title_color_pos_15]\" value=\"";
        // line 834
        echo ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "title_color_pos_15", [], "array", true, true, false, 834)) ? ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["nst_data"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["title_color_pos_15"] ?? null) : null)) : (""));
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-12 title-setting\">";
        // line 838
        echo ($context["text_spn"] ?? null);
        echo "22</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 841
        echo ($context["entry_ns_themes_custom_bg_mode"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<select name=\"nst_data[bg_mode_pos_22]\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 844
        if ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "bg_mode_pos_22", [], "array", true, true, false, 844) && ((($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["nst_data"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["bg_mode_pos_22"] ?? null) : null) == "1"))) {
            // line 845
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 846
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 847
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 848
($context["nst_data"] ?? null), "bg_mode_pos_22", [], "array", true, true, false, 848) && ((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["nst_data"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["bg_mode_pos_22"] ?? null) : null) == "2"))) {
            // line 849
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">";
            // line 850
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 851
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 853
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_ns_themes_custom_bg_mode_image"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 854
            echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 855
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 857
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-bg-img-pos-22\">";
        // line 861
        echo ($context["entry_bg_img_preview"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\"><a href=\"\" id=\"thumb-bg-img-pos-22\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 862
        echo ($context["thumb_img_pos_22"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"nst_data[img_pos_22]\" value=\"";
        // line 863
        echo ($context["img_pos_22"] ?? null);
        echo "\" id=\"input-bg-img-pos-22\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 867
        echo ($context["text_ns_themes_custom_bg_mode_color"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"nst_data[bg_mode_color_pos_22]\" value=\"";
        // line 869
        echo ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "bg_mode_color_pos_22", [], "array", true, true, false, 869)) ? ((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["nst_data"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["bg_mode_color_pos_22"] ?? null) : null)) : (""));
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 873
        echo ($context["text_title_color_pos"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"nst_data[title_color_pos_22]\" value=\"";
        // line 875
        echo ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "title_color_pos_22", [], "array", true, true, false, 875)) ? ((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["nst_data"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["title_color_pos_22"] ?? null) : null)) : (""));
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-12 title-setting\">";
        // line 880
        echo ($context["entry_hbanner"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-6 ns-input-group\">
\t\t\t\t\t\t<label class=\"control-label\">";
        // line 884
        echo ($context["entry_hbannerpc"] ?? null);
        echo "</label>
\t\t\t\t\t\t";
        // line 885
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 886
            echo "\t\t\t\t\t\t<div class=\"input-group cs-flex\">
\t\t\t\t\t\t\t<span class=\"input-group-addon flex-50px\">
\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 888
            echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["language"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["code"] ?? null) : null);
            echo "/";
            echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["language"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["language"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["name"] ?? null) : null);
            echo "\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"input-group-addon image_phone flex-50px\"><a href=\"\" id=\"thumb-hbannerpc-";
            // line 890
            echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["language"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["language_id"] ?? null) : null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 891
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thumb_hbannerpc"] ?? null), (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["language"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["language_id"] ?? null) : null), [], "array", false, true, false, 891), "image", [], "array", true, true, false, 891)) ? ((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["thumb_hbannerpc"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[(($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["language"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["image"] ?? null) : null)) : (""));
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"nst_data[hbannerpc][";
            // line 892
            echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["language"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["language_id"] ?? null) : null);
            echo "][image]\" value=\"";
            echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["hbannerpc"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[(($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["language"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["image"] ?? null) : null);
            echo "\" id=\"input-hbannerpc-";
            echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["language"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["language_id"] ?? null) : null);
            echo "\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"input-group-btn flex-100px\"><input placeholder=\"";
            // line 894
            echo ($context["entry_bg"] ?? null);
            echo "\" class=\"form-control color\" type=\"text\" name=\"nst_data[hbannerpc][";
            echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["language"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["language_id"] ?? null) : null);
            echo "][bg]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "hbannerpc", [], "array", false, true, false, 894), (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["language"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["language_id"] ?? null) : null), [], "array", false, true, false, 894), "bg", [], "array", true, true, false, 894)) ? ((($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["nst_data"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["hbannerpc"] ?? null) : null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[(($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["language"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["bg"] ?? null) : null)) : (""));
            echo "\"></span>
\t\t\t\t\t\t\t<span class=\"input-group-btn flex-100per\"><input placeholder=\"";
            // line 895
            echo ($context["text_link_fs"] ?? null);
            echo "\" class=\"form-control\" type=\"text\" name=\"nst_data[hbannerpc][";
            echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["language"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["language_id"] ?? null) : null);
            echo "][link]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "hbannerpc", [], "array", false, true, false, 895), (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["language"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["language_id"] ?? null) : null), [], "array", false, true, false, 895), "link", [], "array", true, true, false, 895)) ? ((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = ($context["nst_data"] ?? null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["hbannerpc"] ?? null) : null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[(($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["language"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["link"] ?? null) : null)) : (""));
            echo "\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 898
        echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">W х H</label>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"ls_hbannerpc_width\" value=\"";
        // line 901
        echo ($context["ls_hbannerpc_width"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"ls_hbannerpc_height\" value=\"";
        // line 904
        echo ($context["ls_hbannerpc_height"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-6 ns-input-group\">
\t\t\t\t\t\t<label class=\"control-label\">";
        // line 910
        echo ($context["entry_hbannermob"] ?? null);
        echo "</label>
\t\t\t\t\t\t";
        // line 911
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 912
            echo "\t\t\t\t\t\t<div class=\"input-group cs-flex\">
\t\t\t\t\t\t\t<span class=\"input-group-addon flex-50px\"><img src=\"language/";
            // line 913
            echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["language"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["code"] ?? null) : null);
            echo "/";
            echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["language"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = $context["language"]) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["name"] ?? null) : null);
            echo "\" /></span>
\t\t\t\t\t\t\t<span class=\"input-group-addon image_phone flex-50px\">
\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-hbannermob-";
            // line 915
            echo (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["language"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["language_id"] ?? null) : null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 916
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thumb_hbannermob"] ?? null), (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["language"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["language_id"] ?? null) : null), [], "array", false, true, false, 916), "image", [], "array", true, true, false, 916)) ? ((($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = ($context["thumb_hbannermob"] ?? null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51[(($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["language"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["image"] ?? null) : null)) : (""));
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"nst_data[hbannermob][";
            // line 917
            echo (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["language"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["language_id"] ?? null) : null);
            echo "][image]\" value=\"";
            echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = ($context["hbannermob"] ?? null)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[(($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = $context["language"]) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["image"] ?? null) : null);
            echo "\" id=\"input-hbannermob-";
            echo (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["language"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["language_id"] ?? null) : null);
            echo "\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"input-group-btn flex-100px\"><input placeholder=\"";
            // line 919
            echo ($context["entry_bg"] ?? null);
            echo "\" class=\"form-control color\" type=\"text\" name=\"nst_data[hbannermob][";
            echo (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = $context["language"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["language_id"] ?? null) : null);
            echo "][bg]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "hbannermob", [], "array", false, true, false, 919), (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["language"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["language_id"] ?? null) : null), [], "array", false, true, false, 919), "bg", [], "array", true, true, false, 919)) ? ((($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = ($context["nst_data"] ?? null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["hbannermob"] ?? null) : null)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac[(($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = $context["language"]) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["bg"] ?? null) : null)) : (""));
            echo "\"></span>
\t\t\t\t\t\t\t<span class=\"input-group-btn flex-100per\"><input placeholder=\"";
            // line 920
            echo ($context["text_link_fs"] ?? null);
            echo "\" class=\"form-control\" type=\"text\" name=\"nst_data[hbannermob][";
            echo (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = $context["language"]) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["language_id"] ?? null) : null);
            echo "][link]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "hbannermob", [], "array", false, true, false, 920), (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = $context["language"]) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["language_id"] ?? null) : null), [], "array", false, true, false, 920), "link", [], "array", true, true, false, 920)) ? ((($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = ($context["nst_data"] ?? null)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["hbannermob"] ?? null) : null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3[(($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = $context["language"]) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["link"] ?? null) : null)) : (""));
            echo "\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 923
        echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">W х H</label>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"ls_hbannermob_width\" value=\"";
        // line 926
        echo ($context["ls_hbannermob_width"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"ls_hbannermob_height\" value=\"";
        // line 929
        echo ($context["ls_hbannermob_height"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop/general_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2334 => 929,  2328 => 926,  2323 => 923,  2310 => 920,  2302 => 919,  2293 => 917,  2287 => 916,  2283 => 915,  2274 => 913,  2271 => 912,  2267 => 911,  2263 => 910,  2254 => 904,  2248 => 901,  2243 => 898,  2230 => 895,  2222 => 894,  2213 => 892,  2207 => 891,  2203 => 890,  2194 => 888,  2190 => 886,  2186 => 885,  2182 => 884,  2175 => 880,  2167 => 875,  2162 => 873,  2155 => 869,  2150 => 867,  2143 => 863,  2137 => 862,  2133 => 861,  2127 => 857,  2122 => 855,  2118 => 854,  2113 => 853,  2108 => 851,  2104 => 850,  2099 => 849,  2097 => 848,  2093 => 847,  2089 => 846,  2084 => 845,  2082 => 844,  2076 => 841,  2070 => 838,  2063 => 834,  2058 => 832,  2051 => 828,  2046 => 826,  2039 => 822,  2033 => 821,  2029 => 820,  2023 => 816,  2018 => 814,  2014 => 813,  2009 => 812,  2004 => 810,  2000 => 809,  1995 => 808,  1993 => 807,  1989 => 806,  1985 => 805,  1980 => 804,  1978 => 803,  1972 => 800,  1966 => 797,  1959 => 793,  1954 => 791,  1947 => 787,  1942 => 785,  1935 => 781,  1929 => 780,  1925 => 779,  1919 => 775,  1914 => 773,  1910 => 772,  1905 => 771,  1900 => 769,  1896 => 768,  1891 => 767,  1889 => 766,  1885 => 765,  1881 => 764,  1876 => 763,  1874 => 762,  1868 => 759,  1862 => 756,  1855 => 752,  1850 => 750,  1843 => 746,  1838 => 744,  1831 => 740,  1825 => 739,  1821 => 738,  1815 => 734,  1810 => 732,  1806 => 731,  1801 => 730,  1796 => 728,  1792 => 727,  1787 => 726,  1785 => 725,  1781 => 724,  1777 => 723,  1772 => 722,  1770 => 721,  1764 => 718,  1758 => 715,  1752 => 711,  1739 => 709,  1736 => 708,  1733 => 707,  1730 => 706,  1727 => 705,  1724 => 704,  1720 => 703,  1714 => 700,  1708 => 696,  1695 => 694,  1692 => 693,  1689 => 692,  1686 => 691,  1683 => 690,  1680 => 689,  1676 => 688,  1670 => 685,  1663 => 681,  1658 => 679,  1651 => 675,  1645 => 674,  1641 => 673,  1634 => 668,  1629 => 666,  1624 => 665,  1619 => 663,  1614 => 662,  1612 => 661,  1606 => 658,  1599 => 654,  1591 => 649,  1586 => 647,  1580 => 643,  1567 => 641,  1564 => 640,  1561 => 639,  1558 => 638,  1555 => 637,  1552 => 636,  1548 => 635,  1542 => 632,  1536 => 628,  1523 => 626,  1520 => 625,  1517 => 624,  1514 => 623,  1511 => 622,  1508 => 621,  1504 => 620,  1498 => 617,  1492 => 613,  1479 => 611,  1476 => 610,  1473 => 609,  1470 => 608,  1467 => 607,  1464 => 606,  1460 => 605,  1454 => 602,  1447 => 598,  1441 => 597,  1437 => 596,  1430 => 591,  1425 => 589,  1420 => 588,  1415 => 586,  1410 => 585,  1408 => 584,  1402 => 581,  1393 => 574,  1388 => 572,  1385 => 571,  1380 => 569,  1377 => 568,  1374 => 567,  1369 => 565,  1366 => 564,  1361 => 562,  1358 => 561,  1356 => 560,  1350 => 557,  1344 => 553,  1339 => 551,  1336 => 550,  1331 => 548,  1328 => 547,  1325 => 546,  1320 => 544,  1317 => 543,  1312 => 541,  1309 => 540,  1307 => 539,  1301 => 536,  1295 => 532,  1290 => 530,  1287 => 529,  1282 => 527,  1279 => 526,  1276 => 525,  1271 => 523,  1268 => 522,  1263 => 520,  1260 => 519,  1258 => 518,  1252 => 515,  1246 => 511,  1241 => 509,  1238 => 508,  1233 => 506,  1230 => 505,  1227 => 504,  1222 => 502,  1219 => 501,  1214 => 499,  1211 => 498,  1209 => 497,  1203 => 494,  1197 => 491,  1191 => 487,  1186 => 485,  1183 => 484,  1178 => 482,  1175 => 481,  1172 => 480,  1167 => 478,  1164 => 477,  1159 => 475,  1156 => 474,  1154 => 473,  1147 => 469,  1143 => 468,  1137 => 464,  1132 => 462,  1129 => 461,  1124 => 459,  1121 => 458,  1118 => 457,  1113 => 455,  1110 => 454,  1105 => 452,  1102 => 451,  1100 => 450,  1093 => 446,  1089 => 445,  1083 => 441,  1078 => 439,  1075 => 438,  1070 => 436,  1067 => 435,  1064 => 434,  1059 => 432,  1056 => 431,  1051 => 429,  1048 => 428,  1045 => 427,  1040 => 425,  1037 => 424,  1032 => 422,  1029 => 421,  1027 => 420,  1021 => 417,  1015 => 414,  1009 => 410,  1004 => 408,  1001 => 407,  996 => 405,  993 => 404,  990 => 403,  985 => 401,  982 => 400,  977 => 398,  974 => 397,  972 => 396,  965 => 392,  961 => 391,  955 => 387,  950 => 385,  947 => 384,  942 => 382,  939 => 381,  936 => 380,  931 => 378,  928 => 377,  923 => 375,  920 => 374,  918 => 373,  911 => 369,  907 => 368,  901 => 364,  896 => 362,  893 => 361,  888 => 359,  885 => 358,  882 => 357,  877 => 355,  874 => 354,  869 => 352,  866 => 351,  864 => 350,  857 => 346,  853 => 345,  847 => 341,  842 => 339,  839 => 338,  834 => 336,  831 => 335,  828 => 334,  823 => 332,  820 => 331,  815 => 329,  812 => 328,  810 => 327,  803 => 323,  799 => 322,  793 => 319,  786 => 315,  780 => 314,  776 => 313,  770 => 309,  765 => 307,  762 => 306,  757 => 304,  754 => 303,  752 => 302,  749 => 301,  744 => 299,  741 => 298,  736 => 296,  733 => 295,  731 => 294,  725 => 291,  721 => 290,  715 => 286,  710 => 284,  707 => 283,  702 => 281,  699 => 280,  697 => 279,  694 => 278,  689 => 276,  686 => 275,  681 => 273,  678 => 272,  676 => 271,  670 => 268,  666 => 267,  660 => 263,  655 => 261,  651 => 260,  646 => 259,  641 => 257,  637 => 256,  632 => 255,  630 => 254,  626 => 253,  622 => 252,  617 => 251,  615 => 250,  611 => 249,  607 => 248,  602 => 247,  600 => 246,  594 => 243,  590 => 242,  583 => 237,  578 => 235,  575 => 234,  570 => 232,  567 => 231,  565 => 230,  562 => 229,  557 => 227,  554 => 226,  549 => 224,  546 => 223,  544 => 222,  538 => 219,  532 => 215,  527 => 213,  524 => 212,  519 => 210,  516 => 209,  514 => 208,  511 => 207,  506 => 205,  503 => 204,  498 => 202,  495 => 201,  493 => 200,  487 => 197,  481 => 193,  476 => 191,  473 => 190,  468 => 188,  465 => 187,  462 => 186,  457 => 184,  454 => 183,  449 => 181,  446 => 180,  444 => 179,  437 => 175,  433 => 174,  427 => 170,  422 => 168,  419 => 167,  414 => 165,  411 => 164,  408 => 163,  403 => 161,  400 => 160,  395 => 158,  392 => 157,  390 => 156,  384 => 153,  378 => 149,  373 => 147,  370 => 146,  365 => 144,  362 => 143,  359 => 142,  354 => 140,  351 => 139,  346 => 137,  343 => 136,  341 => 135,  335 => 132,  329 => 128,  324 => 126,  321 => 125,  316 => 123,  313 => 122,  310 => 121,  305 => 119,  302 => 118,  297 => 116,  294 => 115,  292 => 114,  286 => 111,  281 => 108,  270 => 105,  262 => 104,  259 => 103,  255 => 102,  250 => 100,  244 => 96,  239 => 94,  236 => 93,  231 => 91,  228 => 90,  225 => 89,  220 => 87,  217 => 86,  212 => 84,  209 => 83,  207 => 82,  201 => 79,  195 => 75,  190 => 73,  187 => 72,  182 => 70,  179 => 69,  176 => 68,  171 => 66,  168 => 65,  163 => 63,  160 => 62,  158 => 61,  152 => 58,  146 => 55,  140 => 51,  135 => 49,  132 => 48,  127 => 46,  124 => 45,  121 => 44,  116 => 42,  113 => 41,  108 => 39,  105 => 38,  103 => 37,  97 => 34,  91 => 30,  86 => 28,  83 => 27,  78 => 25,  75 => 24,  72 => 23,  67 => 21,  64 => 20,  59 => 18,  56 => 17,  54 => 16,  48 => 13,  43 => 10,  41 => 7,  39 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop/general_menu.twig", "");
    }
}
