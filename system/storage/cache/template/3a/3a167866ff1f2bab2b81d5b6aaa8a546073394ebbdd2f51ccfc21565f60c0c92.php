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

/* extension/module/luxshop/design_menu.twig */
class __TwigTemplate_921a25c97e0d3f4c816958732096a8b9c4aa38235438b91c8da19fc74f58901a extends \Twig\Template
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
        echo "<ul class=\"nav nav-tabs\">
\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-general-designed\">";
        // line 2
        echo ($context["tab_general_designed"] ?? null);
        echo "</a></li>
</ul>
<div class=\"tab-pane active\" id=\"tab-general-designed\">
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 6
        echo ($context["selecting_color_scheme"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<select class=\"form-control\" name=\"config_design_template_color_theme\">
\t\t\t";
        // line 9
        $context["i"] = 1;
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range($context["i"], 16));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "\t\t\t";
            if ((($context["config_design_template_color_theme"] ?? null) == $context["i"])) {
                // line 11
                echo "\t\t\t";
                $context["active"] = "selected";
                // line 12
                echo "\t\t\t";
            } else {
                // line 13
                echo "\t\t\t";
                $context["active"] = "";
                // line 14
                echo "\t\t\t";
            }
            // line 15
            echo "\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            echo ($context["active"] ?? null);
            echo "></span>";
            echo $context["i"];
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t</select>
\t\t\t<span class=\"theme-color\">
\t\t\t\t<span class=\"color-scheme\" style=\"background:#00bc52\">1</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background: linear-gradient(129.1deg, #00B0E6 -17.84%, #08E68D 83.84%);\">2</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background: linear-gradient(129.1deg, #0093E6 -17.84%, #08E6D9 83.84%);\">3</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background:#77B6EA\">4</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background:#8093F1\">5</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background:#00A8E8\">6</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background:#A2D2FF\">7</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background:#F28482\">8</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background:#EE6C4D\">9</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background:#E76F51\">10</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background: #F06262\">11</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background: linear-gradient(129.1deg, #C75099 -17.84%, #FF5668 83.84%);\">12</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background: linear-gradient(129.1deg, #F6851D -17.84%, #F59741 83.84%);\">13</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background: linear-gradient(129.1deg, #73AAF8 -17.84%, #8672D2 83.84%);\">14</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background: #7A70E2\">15</span>
\t\t\t\t<span class=\"color-scheme\" style=\"background: #5A7D7C\">16</span>

\t\t\t</span>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 40
        echo ($context["text_custom_style"] ?? null);
        echo "</br>
\t\t<div class=\"label-description\">";
        // line 41
        echo ($context["text_custom_style_description"] ?? null);
        echo "</div>
\t\t</label>
\t\t<div class=\"col-sm-3\">
\t\t\t<input class=\"form-control\" placeholder=\"";
        // line 44
        echo ($context["text_custom_style_placeholder"] ?? null);
        echo "\" type=\"text\" name=\"config_custom_style_luxshop\" value=\"";
        echo ($context["config_custom_style_luxshop"] ?? null);
        echo "\" />
\t\t</div>
\t</div>

\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\" for=\"input-theme-fonts\">";
        // line 49
        echo ($context["entry_theme_fonts"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<select name=\"theme_fonts\" id=\"input-theme-fonts\" class=\"form-control\">
\t\t\t\t<option ";
        // line 52
        if (((($context["theme_fonts"] ?? null) == "open-sans") ||  !($context["theme_fonts"] ?? null))) {
            echo "selected=\"selected\"";
        }
        echo " value=\"open-sans\">Open Sans</option>
\t\t\t\t<option ";
        // line 53
        if ((($context["theme_fonts"] ?? null) == "rubik")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"rubik\">Rubik</option>
\t\t\t\t<option ";
        // line 54
        if ((($context["theme_fonts"] ?? null) == "nunito-sans")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"nunito-sans\">Nunito Sans</option>
\t\t\t\t<option ";
        // line 55
        if ((($context["theme_fonts"] ?? null) == "montserrat")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"montserrat\">Montserrat</option>
\t\t\t</select>
\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 60
        echo ($context["text_design_icon_menu"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"radio-luxshop\">
\t\t\t\t";
        // line 63
        if (((array_key_exists("design_icon_menu", $context) && (($context["design_icon_menu"] ?? null) == "1")) ||  !($context["design_icon_menu"] ?? null))) {
            // line 64
            echo "\t\t\t\t<input id=\"design-icon-menu1\" class=\"hide-radio-text\" type=\"radio\" name=\"design_icon_menu\" value=\"1\" checked=\"checked\" />
\t\t\t\t<label for=\"design-icon-menu1\"><span class=\"design-icon-menu\"><svg class=\"menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"18\" fill=\"none\" viewBox=\"0 0 22 18\"><path stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M2 2h18M2 9h18M2 16h18\"/></svg></span></label>
\t\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t<input id=\"design-icon-menu1\" class=\"hide-radio-text\" type=\"radio\" name=\"design_icon_menu\" value=\"1\" />
\t\t\t\t<label for=\"design-icon-menu1\"><span class=\"design-icon-menu\"><svg class=\"menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"18\" fill=\"none\" viewBox=\"0 0 22 18\"><path stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M2 2h18M2 9h18M2 16h18\"/></svg></span></label>
\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t";
        if ((array_key_exists("design_icon_menu", $context) && (($context["design_icon_menu"] ?? null) == "2"))) {
            // line 71
            echo "\t\t\t\t<input id=\"design-icon-menu2\" class=\"hide-radio-text\" type=\"radio\" name=\"design_icon_menu\" value=\"2\" checked=\"checked\" />
\t\t\t\t<label for=\"design-icon-menu2\"><span class=\"design-icon-menu\"><svg class=\"menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"none\" viewBox=\"0 0 22 22\"><path stroke=\"#000\" stroke-linecap=\"round\" stroke-width=\"1.5\" d=\"M12.8 13.25H20m-7.2 3.15H20m-7.2 3.15H20M3 20h5.2a1 1 0 001-1v-5.2a1 1 0 00-1-1H3a1 1 0 00-1 1V19a1 1 0 001 1zM13.8 9.65H19a1 1 0 001-1V3a1 1 0 00-1-1h-5.2a1 1 0 00-1 1v5.65a1 1 0 001 1zM3 9.65h5.2a1 1 0 001-1V3a1 1 0 00-1-1H3a1 1 0 00-1 1v5.65a1 1 0 001 1z\"/></svg></span></label>
\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t<input id=\"design-icon-menu2\" class=\"hide-radio-text\" type=\"radio\" name=\"design_icon_menu\" value=\"2\" />
\t\t\t\t<label for=\"design-icon-menu2\"><span class=\"design-icon-menu\"><svg class=\"menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"none\" viewBox=\"0 0 22 22\"><path stroke=\"#000\" stroke-linecap=\"round\" stroke-width=\"1.5\" d=\"M12.8 13.25H20m-7.2 3.15H20m-7.2 3.15H20M3 20h5.2a1 1 0 001-1v-5.2a1 1 0 00-1-1H3a1 1 0 00-1 1V19a1 1 0 001 1zM13.8 9.65H19a1 1 0 001-1V3a1 1 0 00-1-1h-5.2a1 1 0 00-1 1v5.65a1 1 0 001 1zM3 9.65h5.2a1 1 0 001-1V3a1 1 0 00-1-1H3a1 1 0 00-1 1v5.65a1 1 0 001 1z\"/></svg></span></label>
\t\t\t\t";
        }
        // line 77
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<style>
\t\t.radio-luxshop input[type=\"radio\"] {
\t\t\tdisplay: none;
\t\t}
\t\t.radio-luxshop input[type=\"radio\"] + label {
\t\t\tdisplay: inline-block;
\t\t\tmargin: -2px;
\t\t\tpadding: 0px 8px;
\t\t\tmargin-bottom: 0;
\t\t\tline-height: 20px;
\t\t\tvertical-align: middle;
\t\t\tcursor: pointer;
\t\t}
\t\t.design-icon-menu {
\t\t\tbackground: #CED4DA;
\t\t\ttext-align: left;
\t\t\tborder-radius: 8px;
\t\t\tfont-size: 14px;
\t\t\tmargin-top: 0px;
\t\t\tmargin-left: 0px;
\t\t\tborder: 0px;
\t\t\tfont-weight: 400;
\t\t\theight: 40px;
\t\t\twidth: 40px;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t}
\t\t.radio-luxshop input[type=\"radio\"]:checked + label .design-icon-menu{
\t\t\tbackground: #00BC52;
\t\t}
\t\t.radio-luxshop input[type=\"radio\"]:checked + label svg path {
\t\t\tstroke: #fff;
\t\t}
\t</style>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 116
        echo ($context["text_type_header"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"radio-group-text\">
\t\t\t\t";
        // line 119
        if (((array_key_exists("type_header", $context) && (($context["type_header"] ?? null) == "1")) ||  !($context["type_header"] ?? null))) {
            // line 120
            echo "\t\t\t\t<input onchange=\"change_swapsdm(this.value);\" id=\"type_header1\" class=\"hide-radio-text\" type=\"radio\" name=\"type_header\" value=\"1\" checked=\"checked\" />
\t\t\t\t<label for=\"type_header1\">";
            // line 121
            echo ($context["ls_text_type"] ?? null);
            echo "1</label>
\t\t\t\t";
        } else {
            // line 123
            echo "\t\t\t\t<input onchange=\"change_swapsdm(this.value);\" id=\"type_header1\" class=\"hide-radio-text\" type=\"radio\" name=\"type_header\" value=\"1\" />
\t\t\t\t<label for=\"type_header1\">";
            // line 124
            echo ($context["ls_text_type"] ?? null);
            echo "1</label>
\t\t\t\t";
        }
        // line 126
        echo "\t\t\t\t";
        if ((array_key_exists("type_header", $context) && (($context["type_header"] ?? null) == "2"))) {
            // line 127
            echo "\t\t\t\t<input onchange=\"change_swapsdm(this.value);\" id=\"type_header2\" class=\"hide-radio-text\" type=\"radio\" name=\"type_header\" value=\"2\" checked=\"checked\" />
\t\t\t\t<label for=\"type_header2\">";
            // line 128
            echo ($context["ls_text_type"] ?? null);
            echo "2</label>
\t\t\t\t";
        } else {
            // line 130
            echo "\t\t\t\t<input onchange=\"change_swapsdm(this.value);\" id=\"type_header2\" class=\"hide-radio-text\" type=\"radio\" name=\"type_header\" value=\"2\" />
\t\t\t\t<label for=\"type_header2\">";
            // line 131
            echo ($context["ls_text_type"] ?? null);
            echo "2</label>
\t\t\t\t";
        }
        // line 133
        echo "\t\t\t\t";
        if ((array_key_exists("type_header", $context) && (($context["type_header"] ?? null) == "3"))) {
            // line 134
            echo "\t\t\t\t<input onchange=\"change_swapsdm(this.value);\" id=\"type_header3\" class=\"hide-radio-text\" type=\"radio\" name=\"type_header\" value=\"3\" checked=\"checked\" />
\t\t\t\t<label for=\"type_header3\">";
            // line 135
            echo ($context["ls_text_type"] ?? null);
            echo "3</label>
\t\t\t\t";
        } else {
            // line 137
            echo "\t\t\t\t<input onchange=\"change_swapsdm(this.value);\" id=\"type_header3\" class=\"hide-radio-text\" type=\"radio\" name=\"type_header\" value=\"3\" />
\t\t\t\t<label for=\"type_header3\">";
            // line 138
            echo ($context["ls_text_type"] ?? null);
            echo "3</label>
\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t";
        if ((array_key_exists("type_header", $context) && (($context["type_header"] ?? null) == "4"))) {
            // line 141
            echo "\t\t\t\t<input onchange=\"change_swapsdm(this.value);\" id=\"type_header4\" class=\"hide-radio-text\" type=\"radio\" name=\"type_header\" value=\"4\" checked=\"checked\" />
\t\t\t\t<label for=\"type_header4\">";
            // line 142
            echo ($context["ls_text_type"] ?? null);
            echo "4</label>
\t\t\t\t";
        } else {
            // line 144
            echo "\t\t\t\t<input onchange=\"change_swapsdm(this.value);\" id=\"type_header4\" class=\"hide-radio-text\" type=\"radio\" name=\"type_header\" value=\"4\" />
\t\t\t\t<label for=\"type_header4\">";
            // line 145
            echo ($context["ls_text_type"] ?? null);
            echo "4</label>
\t\t\t\t";
        }
        // line 147
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group type_h3bl ";
        // line 150
        if ((array_key_exists("type_header", $context) && (($context["type_header"] ?? null) != "3"))) {
            echo "hidden";
        }
        echo "\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 151
        echo ($context["text_catalog_before_logo"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"catalog_before_logo\" value=\"1\" ";
        // line 154
        echo (((array_key_exists("catalog_before_logo", $context) && (($context["catalog_before_logo"] ?? null) == 1))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group swapsdm ";
        // line 158
        if ((array_key_exists("type_header", $context) && (($context["type_header"] ?? null) != "2"))) {
            echo "hidden";
        }
        echo "\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 159
        echo ($context["text_swap_search_dopmenu"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"swap_search_dmenu\" value=\"1\" ";
        // line 162
        echo (((array_key_exists("swap_search_dmenu", $context) && (($context["swap_search_dmenu"] ?? null) == 1))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>
\t\$(window).load(function(){
\t\tvar type_header = \$('input[name=type_header]:checked').val();
\t\tif (type_header =='2') {
\t\t\t\$('.swapsdm').removeClass('hidden');
\t\t} else {
\t\t\t\$('.swapsdm').addClass('hidden');
\t\t\t\$('input[name=swap_search_dmenu]').prop('checked', false);
\t\t}
\t\tif (type_header =='3') {
\t\t\t\$('.type_h3bl').removeClass('hidden');
\t\t} else {
\t\t\t\$('.type_h3bl').addClass('hidden');
\t\t\t\$('input[name=catalog_before_logo]').prop('checked', false);
\t\t}
\t})
\tfunction change_swapsdm(type_header){
\t\tif (type_header =='2') {
\t\t\t\$('.swapsdm').removeClass('hidden');
\t\t} else {
\t\t\t\$('.swapsdm').addClass('hidden');
\t\t\t\$('input[name=swap_search_dmenu]').prop('checked', false);
\t\t}
\t\tif (type_header =='3') {
\t\t\t\$('.type_h3bl').removeClass('hidden');
\t\t} else {
\t\t\t\$('.type_h3bl').addClass('hidden');
\t\t\t\$('input[name=catalog_before_logo]').prop('checked', false);
\t\t}
\t}
\t</script>

\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 200
        echo ($context["text_bg_product_image"] ?? null);
        echo "
\t\t<div class=\"label-description\">";
        // line 201
        echo ($context["text_options_product_page_description"] ?? null);
        echo "</div>
\t\t</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"bg_product_image\" value=\"1\" ";
        // line 205
        echo (((array_key_exists("bg_product_image", $context) && (($context["bg_product_image"] ?? null) == 1))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 210
        echo ($context["text_type_btn"] ?? null);
        echo "
\t\t</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"radio-group-text\">
\t\t\t\t";
        // line 214
        if (((array_key_exists("ls_type_btn", $context) && (($context["ls_type_btn"] ?? null) == "1")) ||  !($context["ls_type_btn"] ?? null))) {
            // line 215
            echo "\t\t\t\t<input id=\"ls_type_btn1\" class=\"hide-radio-text\" type=\"radio\" name=\"ls_type_btn\" value=\"1\" checked=\"checked\" />
\t\t\t\t<label for=\"ls_type_btn1\">";
            // line 216
            echo ($context["ls_text_type"] ?? null);
            echo "1</label>
\t\t\t\t";
        } else {
            // line 218
            echo "\t\t\t\t<input id=\"ls_type_btn1\" class=\"hide-radio-text\" type=\"radio\" name=\"ls_type_btn\" value=\"1\" />
\t\t\t\t<label for=\"ls_type_btn1\">";
            // line 219
            echo ($context["ls_text_type"] ?? null);
            echo "1</label>
\t\t\t\t";
        }
        // line 221
        echo "\t\t\t\t";
        if ((array_key_exists("ls_type_btn", $context) && (($context["ls_type_btn"] ?? null) == "2"))) {
            // line 222
            echo "\t\t\t\t<input id=\"ls_type_btn2\" class=\"hide-radio-text\" type=\"radio\" name=\"ls_type_btn\" value=\"2\" checked=\"checked\" />
\t\t\t\t<label for=\"ls_type_btn2\">";
            // line 223
            echo ($context["ls_text_type"] ?? null);
            echo "2</label>
\t\t\t\t";
        } else {
            // line 225
            echo "\t\t\t\t<input id=\"ls_type_btn2\" class=\"hide-radio-text\" type=\"radio\" name=\"ls_type_btn\" value=\"2\" />
\t\t\t\t<label for=\"ls_type_btn2\">";
            // line 226
            echo ($context["ls_text_type"] ?? null);
            echo "2</label>
\t\t\t\t";
        }
        // line 228
        echo "\t\t\t\t";
        if ((array_key_exists("ls_type_btn", $context) && (($context["ls_type_btn"] ?? null) == "3"))) {
            // line 229
            echo "\t\t\t\t<input id=\"ls_type_btn3\" class=\"hide-radio-text\" type=\"radio\" name=\"ls_type_btn\" value=\"3\" checked=\"checked\" />
\t\t\t\t<label for=\"ls_type_btn3\">";
            // line 230
            echo ($context["ls_text_type"] ?? null);
            echo "3</label>
\t\t\t\t";
        } else {
            // line 232
            echo "\t\t\t\t<input id=\"ls_type_btn3\" class=\"hide-radio-text\" type=\"radio\" name=\"ls_type_btn\" value=\"3\" />
\t\t\t\t<label for=\"ls_type_btn3\">";
            // line 233
            echo ($context["ls_text_type"] ?? null);
            echo "3</label>
\t\t\t\t";
        }
        // line 235
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 239
        echo ($context["text_hide_text_addtocart"] ?? null);
        echo "
\t\t<div class=\"label-description\">";
        // line 240
        echo ($context["text_options_product_page_description"] ?? null);
        echo "</div>
\t\t</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"hide_text_addtocart\" value=\"1\" ";
        // line 244
        echo (((array_key_exists("hide_text_addtocart", $context) && (($context["hide_text_addtocart"] ?? null) == 1))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 249
        echo ($context["text_site_screen_width"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"radio-group-text\">
\t\t\t\t";
        // line 252
        if (((array_key_exists("site_screen_width", $context) && (($context["site_screen_width"] ?? null) == "1")) ||  !($context["site_screen_width"] ?? null))) {
            // line 253
            echo "\t\t\t\t<input id=\"site_screen_width1\" class=\"hide-radio-text\" type=\"radio\" name=\"site_screen_width\" value=\"1\" checked=\"checked\" />
\t\t\t\t<label for=\"site_screen_width1\">";
            // line 254
            echo ($context["text_screen_width_standart"] ?? null);
            echo "</label>
\t\t\t\t";
        } else {
            // line 256
            echo "\t\t\t\t<input id=\"site_screen_width1\" class=\"hide-radio-text\" type=\"radio\" name=\"site_screen_width\" value=\"1\" />
\t\t\t\t<label for=\"site_screen_width1\">";
            // line 257
            echo ($context["text_screen_width_standart"] ?? null);
            echo "</label>
\t\t\t\t";
        }
        // line 259
        echo "\t\t\t\t";
        if ((array_key_exists("site_screen_width", $context) && (($context["site_screen_width"] ?? null) == "2"))) {
            // line 260
            echo "\t\t\t\t<input id=\"site_screen_width2\" class=\"hide-radio-text\" type=\"radio\" name=\"site_screen_width\" value=\"2\" checked=\"checked\" />
\t\t\t\t<label for=\"site_screen_width2\">";
            // line 261
            echo ($context["text_screen_width_middle"] ?? null);
            echo "</label>
\t\t\t\t";
        } else {
            // line 263
            echo "\t\t\t\t<input id=\"site_screen_width2\" class=\"hide-radio-text\" type=\"radio\" name=\"site_screen_width\" value=\"2\" />
\t\t\t\t<label for=\"site_screen_width2\">";
            // line 264
            echo ($context["text_screen_width_middle"] ?? null);
            echo "</label>
\t\t\t\t";
        }
        // line 266
        echo "\t\t\t\t";
        if ((array_key_exists("site_screen_width", $context) && (($context["site_screen_width"] ?? null) == "3"))) {
            // line 267
            echo "\t\t\t\t<input id=\"site_screen_width3\" class=\"hide-radio-text\" type=\"radio\" name=\"site_screen_width\" value=\"3\" checked=\"checked\" />
\t\t\t\t<label for=\"site_screen_width3\">";
            // line 268
            echo ($context["text_screen_width_full"] ?? null);
            echo "</label>
\t\t\t\t";
        } else {
            // line 270
            echo "\t\t\t\t<input id=\"site_screen_width3\" class=\"hide-radio-text\" type=\"radio\" name=\"site_screen_width\" value=\"3\" />
\t\t\t\t<label for=\"site_screen_width3\">";
            // line 271
            echo ($context["text_screen_width_full"] ?? null);
            echo "</label>
\t\t\t\t";
        }
        // line 273
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-12 title-setting\">Mobile</div>
\t</div>

\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 281
        echo ($context["text_hide_logo_phone_mob"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"hide_logo_phone_mob\" value=\"1\" ";
        // line 284
        echo (((array_key_exists("hide_logo_phone_mob", $context) && (($context["hide_logo_phone_mob"] ?? null) == 1))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\" for=\"input-fm-logo\">";
        // line 289
        echo ($context["text_logo_fix_menu"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\"><a href=\"\" id=\"thumb-fm-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 290
        echo ($context["fm_logo_image"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
\t\t\t<input type=\"hidden\" name=\"fm_logo\" value=\"";
        // line 291
        echo ($context["config_fm_logo"] ?? null);
        echo "\" id=\"input-fm-logo\" />
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 295
        echo ($context["text_hide_btn_go_home"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"fm_show_btn_go_home\" value=\"1\" ";
        // line 298
        echo (((array_key_exists("fm_show_btn_go_home", $context) && (($context["fm_show_btn_go_home"] ?? null) == 1))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 303
        echo ($context["text_show_text_after_icon"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"show_text_after_icon\" value=\"1\" ";
        // line 306
        echo (((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 311
        echo ($context["text_fm_fix_bottom"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"fm_fix_bottom\" value=\"1\" ";
        // line 314
        echo (((array_key_exists("fm_fix_bottom", $context) && (($context["fm_fix_bottom"] ?? null) == 1))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 319
        echo ($context["text_fm_show_logo_hide_search"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"fm_show_logo_hide_search\" value=\"1\" ";
        // line 322
        echo (((array_key_exists("fm_show_logo_hide_search", $context) && (($context["fm_show_logo_hide_search"] ?? null) == 1))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 327
        echo ($context["text_fm_logo_w_h"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-2\">
\t\t\t<input type=\"text\" class=\"form-control\" name=\"fm_logo_width\" value=\"";
        // line 329
        echo ($context["fm_logo_width"] ?? null);
        echo "\" />
\t\t</div>
\t\t<div class=\"col-sm-2\">
\t\t\t<input type=\"text\" class=\"form-control\" name=\"fm_logo_height\" value=\"";
        // line 332
        echo ($context["fm_logo_height"] ?? null);
        echo "\" />
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 336
        echo ($context["text_fm_type_design"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"radio-group-text\">
\t\t\t\t";
        // line 339
        if (((array_key_exists("fm_type_design", $context) && (($context["fm_type_design"] ?? null) == "1")) ||  !($context["fm_type_design"] ?? null))) {
            // line 340
            echo "\t\t\t\t<input id=\"fm_type_design1\" class=\"hide-radio-text\" type=\"radio\" name=\"fm_type_design\" value=\"1\" checked=\"checked\" />
\t\t\t\t<label for=\"fm_type_design1\">";
            // line 341
            echo ($context["ls_text_type"] ?? null);
            echo "1</label>
\t\t\t\t";
        } else {
            // line 343
            echo "\t\t\t\t<input id=\"fm_type_design1\" class=\"hide-radio-text\" type=\"radio\" name=\"fm_type_design\" value=\"1\" />
\t\t\t\t<label for=\"fm_type_design1\">";
            // line 344
            echo ($context["ls_text_type"] ?? null);
            echo "1</label>
\t\t\t\t";
        }
        // line 346
        echo "\t\t\t\t";
        if ((array_key_exists("fm_type_design", $context) && (($context["fm_type_design"] ?? null) == "2"))) {
            // line 347
            echo "\t\t\t\t<input id=\"fm_type_design2\" class=\"hide-radio-text\" type=\"radio\" name=\"fm_type_design\" value=\"2\" checked=\"checked\" />
\t\t\t\t<label for=\"fm_type_design2\">";
            // line 348
            echo ($context["ls_text_type"] ?? null);
            echo "2</label>
\t\t\t\t";
        } else {
            // line 350
            echo "\t\t\t\t<input id=\"fm_type_design2\" class=\"hide-radio-text\" type=\"radio\" name=\"fm_type_design\" value=\"2\" />
\t\t\t\t<label for=\"fm_type_design2\">";
            // line 351
            echo ($context["ls_text_type"] ?? null);
            echo "2</label>
\t\t\t\t";
        }
        // line 353
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 357
        echo ($context["text_hidden_box_description"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"setting_module[hidden_desc]\" value=\"1\" ";
        // line 360
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "hidden_desc", [], "array", true, true, false, 360) && ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["setting_module"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["hidden_desc"] ?? null) : null) == 1))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 365
        echo ($context["text_hidden_box_model"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"setting_module[hidden_model]\" value=\"1\" ";
        // line 368
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "hidden_model", [], "array", true, true, false, 368) && ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["setting_module"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["hidden_model"] ?? null) : null) == 1))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 373
        echo ($context["text_hidden_box_rating"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"setting_module[hidden_rating]\" value=\"1\" ";
        // line 376
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "hidden_rating", [], "array", true, true, false, 376) && ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["setting_module"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["hidden_rating"] ?? null) : null) == 1))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 381
        echo ($context["text_hidden_box_action"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"setting_module[hidden_actions]\" value=\"1\" ";
        // line 384
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "hidden_actions", [], "array", true, true, false, 384) && ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["setting_module"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["hidden_actions"] ?? null) : null) == 1))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop/design_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  776 => 384,  770 => 381,  762 => 376,  756 => 373,  748 => 368,  742 => 365,  734 => 360,  728 => 357,  722 => 353,  717 => 351,  714 => 350,  709 => 348,  706 => 347,  703 => 346,  698 => 344,  695 => 343,  690 => 341,  687 => 340,  685 => 339,  679 => 336,  672 => 332,  666 => 329,  661 => 327,  653 => 322,  647 => 319,  639 => 314,  633 => 311,  625 => 306,  619 => 303,  611 => 298,  605 => 295,  598 => 291,  592 => 290,  588 => 289,  580 => 284,  574 => 281,  564 => 273,  559 => 271,  556 => 270,  551 => 268,  548 => 267,  545 => 266,  540 => 264,  537 => 263,  532 => 261,  529 => 260,  526 => 259,  521 => 257,  518 => 256,  513 => 254,  510 => 253,  508 => 252,  502 => 249,  494 => 244,  487 => 240,  483 => 239,  477 => 235,  472 => 233,  469 => 232,  464 => 230,  461 => 229,  458 => 228,  453 => 226,  450 => 225,  445 => 223,  442 => 222,  439 => 221,  434 => 219,  431 => 218,  426 => 216,  423 => 215,  421 => 214,  414 => 210,  406 => 205,  399 => 201,  395 => 200,  354 => 162,  348 => 159,  342 => 158,  335 => 154,  329 => 151,  323 => 150,  318 => 147,  313 => 145,  310 => 144,  305 => 142,  302 => 141,  299 => 140,  294 => 138,  291 => 137,  286 => 135,  283 => 134,  280 => 133,  275 => 131,  272 => 130,  267 => 128,  264 => 127,  261 => 126,  256 => 124,  253 => 123,  248 => 121,  245 => 120,  243 => 119,  237 => 116,  196 => 77,  191 => 74,  186 => 71,  183 => 70,  178 => 67,  173 => 64,  171 => 63,  165 => 60,  155 => 55,  149 => 54,  143 => 53,  137 => 52,  131 => 49,  121 => 44,  115 => 41,  111 => 40,  86 => 17,  73 => 15,  70 => 14,  67 => 13,  64 => 12,  61 => 11,  58 => 10,  53 => 9,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop/design_menu.twig", "");
    }
}
