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

/* extension/module/luxshop/stickers_menu.twig */
class __TwigTemplate_e4ed83885597f6020adc76f95d5969bf2b64576b218ec13e504339a8664362c9 extends \Twig\Template
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
        echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 2
        echo ($context["entry_type_sticker"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"radio-group-text\">
\t\t\t\t\t\t";
        // line 5
        if (((array_key_exists("ns_type_sticker", $context) && (($context["ns_type_sticker"] ?? null) == "1")) ||  !($context["ns_type_sticker"] ?? null))) {
            // line 6
            echo "\t\t\t\t\t\t<input id=\"ns_type_sticker1\" class=\"hide-radio-text\" type=\"radio\" name=\"ns_type_sticker\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t<label for=\"ns_type_sticker1\">";
            // line 7
            echo ($context["text_type_sticker_row"] ?? null);
            echo "</label>
\t\t\t\t\t\t";
        } else {
            // line 9
            echo "\t\t\t\t\t\t<input id=\"ns_type_sticker1\" class=\"hide-radio-text\" type=\"radio\" name=\"ns_type_sticker\" value=\"1\" />
\t\t\t\t\t\t<label for=\"ns_type_sticker1\">";
            // line 10
            echo ($context["text_type_sticker_row"] ?? null);
            echo "</label>
\t\t\t\t\t\t";
        }
        // line 12
        echo "\t\t\t\t\t\t";
        if ((array_key_exists("ns_type_sticker", $context) && (($context["ns_type_sticker"] ?? null) == "2"))) {
            // line 13
            echo "\t\t\t\t\t\t<input id=\"ns_type_sticker2\" class=\"hide-radio-text\" type=\"radio\" name=\"ns_type_sticker\" value=\"2\" checked=\"checked\" />
\t\t\t\t\t\t<label for=\"ns_type_sticker2\">";
            // line 14
            echo ($context["text_type_sticker_column"] ?? null);
            echo "</label>
\t\t\t\t\t\t";
        } else {
            // line 16
            echo "\t\t\t\t\t\t<input id=\"ns_type_sticker2\" class=\"hide-radio-text\" type=\"radio\" name=\"ns_type_sticker\" value=\"2\" />
\t\t\t\t\t\t<label for=\"ns_type_sticker2\">";
            // line 17
            echo ($context["text_type_sticker_column"] ?? null);
            echo "</label>
\t\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-spicial-sticker\">";
        // line 23
        echo ($context["tab_special_sticker"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-newproduct-sticker\">";
        // line 24
        echo ($context["tab_newproduct_sticker"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-popular-sticker\">";
        // line 25
        echo ($context["tab_popular_sticker"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-bestseller-sticker\">";
        // line 26
        echo ($context["tab_bestseller_sticker"] ?? null);
        echo "</a></li>
\t\t\t</ul>
\t\t\t<div class=\"tab-pane active\" id=\"tab-spicial-sticker\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 30
        echo ($context["text_on_off_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t <div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 33
        if (($context["on_off_sticker_special"] ?? null)) {
            // line 34
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_special_yes\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_special\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_special_yes\">";
            // line 35
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_special_yes\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_special\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_special_yes\">";
            // line 38
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t\t\t";
        if ( !($context["on_off_sticker_special"] ?? null)) {
            // line 41
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_special_no\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_special\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_special_no\">";
            // line 42
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_special_no\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_special\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_special_no\">";
            // line 45
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 51
        echo ($context["text_percent_discount"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"on_off_percent_discount\" value=\"1\" ";
        // line 54
        echo (((array_key_exists("on_off_percent_discount", $context) && (($context["on_off_percent_discount"] ?? null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 59
        echo ($context["entry_background_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\"  name=\"config_change_background_sticker_special\" value=\"";
        // line 61
        echo ($context["config_change_background_sticker_special"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 65
        echo ($context["entry_color_text_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\"  name=\"config_change_color_text_sticker_special\" value=\"";
        // line 67
        echo ($context["config_change_color_text_sticker_special"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 71
        echo ($context["entry_text_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-left\">";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 75
            echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["language"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["code"] ?? null) : null);
            echo "/";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["language"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["language"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null);
            echo "\" /></span>
                          <input type=\"text\" name=\"config_change_text_sticker_special[";
            // line 76
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["language"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["language_id"] ?? null) : null);
            echo "][config_change_text_sticker_special]\" rows=\"5\" placeholder=\"\" class=\"form-control\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["config_change_text_sticker_special"] ?? null), (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["language"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["language_id"] ?? null) : null), [], "array", true, true, false, 76)) ? ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["config_change_text_sticker_special"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[(($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["language"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["config_change_text_sticker_special"] ?? null) : null)) : (""));
            echo "\"></input>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 83
        echo ($context["entry_icon_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<span class=\"icon_open\" id=\"config_change_icon_sticker_special\" onclick=\"icon_fontawesome_popup(\$(this).attr('id'))\">
\t\t\t\t\t\t";
        // line 86
        echo ($context["text_select_icon"] ?? null);
        echo "
\t\t\t\t\t\t";
        // line 87
        if (array_key_exists("config_change_icon_sticker_special", $context)) {
            echo "<i class=\"";
            echo ($context["config_change_icon_sticker_special"] ?? null);
            echo "\"></i>";
        }
        echo "</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"hidden\"  name=\"config_change_icon_sticker_special\" value=\"";
        // line 88
        echo ($context["config_change_icon_sticker_special"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 92
        echo ($context["entry_color_icon"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\"  name=\"config_change_color_icon_sticker_special\" value=\"";
        // line 94
        echo ($context["config_change_color_icon_sticker_special"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!--STICKER NEW PRODUCT-->
\t\t\t<div class=\"tab-pane\" id=\"tab-newproduct-sticker\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 102
        echo ($context["text_on_off_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 105
        if (($context["on_off_sticker_newproduct"] ?? null)) {
            // line 106
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_newproduct_yes\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_newproduct\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_newproduct_yes\">";
            // line 107
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 109
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_newproduct_yes\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_newproduct\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_newproduct_yes\">";
            // line 110
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 112
        echo "\t\t\t\t\t\t\t";
        if ( !($context["on_off_sticker_newproduct"] ?? null)) {
            // line 113
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_newproduct_no\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_newproduct\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_newproduct_no\">";
            // line 114
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 116
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_newproduct_no\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_newproduct\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_newproduct_no\">";
            // line 117
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 123
        echo ($context["entry_text_limit_day"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  name=\"config_limit_day_newproduct\" value=\"";
        // line 125
        echo ($context["config_limit_day_newproduct"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<label class=\"col-sm-5\">";
        // line 127
        echo ($context["text_day"] ?? null);
        echo "</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 130
        echo ($context["entry_background_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\"  name=\"config_change_background_sticker_newproduct\" value=\"";
        // line 132
        echo ($context["config_change_background_sticker_newproduct"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 137
        echo ($context["entry_text_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-left\">";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 141
            echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["language"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["code"] ?? null) : null);
            echo "/";
            echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["language"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["language"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["name"] ?? null) : null);
            echo "\" /></span>
                          <input name=\"config_change_text_sticker_newproduct[";
            // line 142
            echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["language"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["language_id"] ?? null) : null);
            echo "][config_change_text_sticker_newproduct]\" rows=\"5\" placeholder=\"\" class=\"form-control\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["config_change_text_sticker_newproduct"] ?? null), (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["language"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["language_id"] ?? null) : null), [], "array", true, true, false, 142)) ? ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["config_change_text_sticker_newproduct"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[(($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["language"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["config_change_text_sticker_newproduct"] ?? null) : null)) : (""));
            echo "\"></input>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 149
        echo ($context["entry_color_text_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\"  name=\"config_change_color_text_sticker_newproduct\" value=\"";
        // line 151
        echo ($context["config_change_color_text_sticker_newproduct"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 155
        echo ($context["entry_icon_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<span class=\"icon_open\" id=\"config_change_icon_sticker_newproduct\" onclick=\"icon_fontawesome_popup(\$(this).attr('id'))\">
\t\t\t\t\t\t";
        // line 158
        echo ($context["text_select_icon"] ?? null);
        echo "
\t\t\t\t\t\t";
        // line 159
        if (array_key_exists("config_change_icon_sticker_newproduct", $context)) {
            echo "<i class=\"";
            echo ($context["config_change_icon_sticker_newproduct"] ?? null);
            echo "\"></i>";
        }
        echo "</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"hidden\"  name=\"config_change_icon_sticker_newproduct\" value=\"";
        // line 160
        echo ($context["config_change_icon_sticker_newproduct"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 164
        echo ($context["entry_color_icon"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\"  name=\"config_change_color_icon_sticker_newproduct\" value=\"";
        // line 166
        echo ($context["config_change_color_icon_sticker_newproduct"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-popular-sticker\">
\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 172
        echo ($context["text_on_off_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 175
        if (($context["on_off_sticker_popular"] ?? null)) {
            // line 176
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_popular_yes\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_popular\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_popular_yes\">";
            // line 177
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 179
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_popular_yes\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_popular\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_popular_yes\">";
            // line 180
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 182
        echo "\t\t\t\t\t\t\t";
        if ( !($context["on_off_sticker_popular"] ?? null)) {
            // line 183
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_popular_no\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_popular\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_popular_no\">";
            // line 184
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 186
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_popular_no\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_popular\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_popular_no\">";
            // line 187
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 189
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 193
        echo ($context["entry_text_min_quantity_popular"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  name=\"config_min_quantity_popular\" value=\"";
        // line 195
        echo ($context["config_min_quantity_popular"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 199
        echo ($context["entry_background_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\"  name=\"config_change_background_sticker_popular\" value=\"";
        // line 201
        echo ($context["config_change_background_sticker_popular"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 205
        echo ($context["entry_text_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-left\">";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 209
            echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["language"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["code"] ?? null) : null);
            echo "/";
            echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["language"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["language"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["name"] ?? null) : null);
            echo "\" /></span>
                          <input type=\"text\" name=\"config_change_text_sticker_popular[";
            // line 210
            echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["language"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["language_id"] ?? null) : null);
            echo "][config_change_text_sticker_popular]\" rows=\"5\" placeholder=\"\" class=\"form-control\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["config_change_text_sticker_popular"] ?? null), (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["language"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["language_id"] ?? null) : null), [], "array", true, true, false, 210)) ? ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["config_change_text_sticker_popular"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[(($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["language"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["config_change_text_sticker_popular"] ?? null) : null)) : (""));
            echo "\"></input>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 217
        echo ($context["entry_color_text_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"config_change_color_text_sticker_popular\" value=\"";
        // line 219
        echo ($context["config_change_color_text_sticker_popular"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 223
        echo ($context["entry_icon_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<span class=\"icon_open\" id=\"config_change_icon_sticker_popular\" onclick=\"icon_fontawesome_popup(\$(this).attr('id'))\">
\t\t\t\t\t\t";
        // line 226
        echo ($context["text_select_icon"] ?? null);
        echo "
\t\t\t\t\t\t";
        // line 227
        if (array_key_exists("config_change_icon_sticker_popular", $context)) {
            echo "<i class=\"";
            echo ($context["config_change_icon_sticker_popular"] ?? null);
            echo "\"></i>";
        }
        echo "</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"hidden\"  name=\"config_change_icon_sticker_popular\" value=\"";
        // line 228
        echo ($context["config_change_icon_sticker_popular"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 232
        echo ($context["entry_color_icon"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"config_change_color_icon_sticker_popular\" value=\"";
        // line 234
        echo ($context["config_change_color_icon_sticker_popular"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"tab-pane\" id=\"tab-bestseller-sticker\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 241
        echo ($context["text_on_off_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 244
        if (($context["on_off_sticker_topbestseller"] ?? null)) {
            // line 245
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_topbestseller_yes\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_topbestseller\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_topbestseller_yes\">";
            // line 246
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 248
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_topbestseller_yes\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_topbestseller\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_topbestseller_yes\">";
            // line 249
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 251
        echo "\t\t\t\t\t\t\t";
        if ( !($context["on_off_sticker_topbestseller"] ?? null)) {
            // line 252
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_topbestseller_no\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_topbestseller\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_topbestseller_no\">";
            // line 253
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 255
            echo "\t\t\t\t\t\t\t<input id=\"on_off_sticker_topbestseller_no\" class=\"hide-radio\" type=\"radio\" name=\"on_off_sticker_topbestseller\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"on_off_sticker_topbestseller_no\">";
            // line 256
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 258
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 262
        echo ($context["entry_text_limit_order_product_topbestseller"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  name=\"config_limit_order_product_topbestseller\" value=\"";
        // line 264
        echo ($context["config_limit_order_product_topbestseller"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 268
        echo ($context["entry_background_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"config_change_background_sticker_topbestseller\" value=\"";
        // line 270
        echo ($context["config_change_background_sticker_topbestseller"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 274
        echo ($context["entry_text_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-left\">";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 278
            echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["language"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["code"] ?? null) : null);
            echo "/";
            echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["language"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["language"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["name"] ?? null) : null);
            echo "\" /></span>
                          <input type=\"text\" name=\"config_change_text_sticker_topbestseller[";
            // line 279
            echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["language"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["language_id"] ?? null) : null);
            echo "][config_change_text_sticker_topbestseller]\" rows=\"5\" placeholder=\"\" class=\"form-control\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["config_change_text_sticker_topbestseller"] ?? null), (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["language"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["language_id"] ?? null) : null), [], "array", true, true, false, 279)) ? ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["config_change_text_sticker_topbestseller"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[(($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["language"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["config_change_text_sticker_topbestseller"] ?? null) : null)) : (""));
            echo "\"></input>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 286
        echo ($context["entry_color_text_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"config_change_color_text_sticker_topbestseller\" value=\"";
        // line 288
        echo ($context["config_change_color_text_sticker_topbestseller"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 292
        echo ($context["entry_icon_sticker"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<span class=\"icon_open\" id=\"config_change_icon_sticker_topbestseller\" onclick=\"icon_fontawesome_popup(\$(this).attr('id'))\">
\t\t\t\t\t\t";
        // line 295
        echo ($context["text_select_icon"] ?? null);
        echo "
\t\t\t\t\t\t";
        // line 296
        if (array_key_exists("config_change_icon_sticker_topbestseller", $context)) {
            echo "<i class=\"";
            echo ($context["config_change_icon_sticker_topbestseller"] ?? null);
            echo "\"></i>";
        }
        echo "</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"hidden\"  name=\"config_change_icon_sticker_topbestseller\" value=\"";
        // line 297
        echo ($context["config_change_icon_sticker_topbestseller"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 301
        echo ($context["entry_color_icon"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"form-control color\" type=\"text\" name=\"config_change_color_icon_sticker_topbestseller\" value=\"";
        // line 303
        echo ($context["config_change_color_icon_sticker_topbestseller"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop/stickers_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  753 => 303,  748 => 301,  741 => 297,  733 => 296,  729 => 295,  723 => 292,  716 => 288,  711 => 286,  704 => 281,  693 => 279,  684 => 278,  680 => 277,  674 => 274,  667 => 270,  662 => 268,  655 => 264,  650 => 262,  644 => 258,  639 => 256,  636 => 255,  631 => 253,  628 => 252,  625 => 251,  620 => 249,  617 => 248,  612 => 246,  609 => 245,  607 => 244,  601 => 241,  591 => 234,  586 => 232,  579 => 228,  571 => 227,  567 => 226,  561 => 223,  554 => 219,  549 => 217,  542 => 212,  531 => 210,  522 => 209,  518 => 208,  512 => 205,  505 => 201,  500 => 199,  493 => 195,  488 => 193,  482 => 189,  477 => 187,  474 => 186,  469 => 184,  466 => 183,  463 => 182,  458 => 180,  455 => 179,  450 => 177,  447 => 176,  445 => 175,  439 => 172,  430 => 166,  425 => 164,  418 => 160,  410 => 159,  406 => 158,  400 => 155,  393 => 151,  388 => 149,  381 => 144,  370 => 142,  361 => 141,  357 => 140,  351 => 137,  343 => 132,  338 => 130,  332 => 127,  327 => 125,  322 => 123,  316 => 119,  311 => 117,  308 => 116,  303 => 114,  300 => 113,  297 => 112,  292 => 110,  289 => 109,  284 => 107,  281 => 106,  279 => 105,  273 => 102,  262 => 94,  257 => 92,  250 => 88,  242 => 87,  238 => 86,  232 => 83,  225 => 78,  214 => 76,  205 => 75,  201 => 74,  195 => 71,  188 => 67,  183 => 65,  176 => 61,  171 => 59,  163 => 54,  157 => 51,  151 => 47,  146 => 45,  143 => 44,  138 => 42,  135 => 41,  132 => 40,  127 => 38,  124 => 37,  119 => 35,  116 => 34,  114 => 33,  108 => 30,  101 => 26,  97 => 25,  93 => 24,  89 => 23,  83 => 19,  78 => 17,  75 => 16,  70 => 14,  67 => 13,  64 => 12,  59 => 10,  56 => 9,  51 => 7,  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop/stickers_menu.twig", "");
    }
}
