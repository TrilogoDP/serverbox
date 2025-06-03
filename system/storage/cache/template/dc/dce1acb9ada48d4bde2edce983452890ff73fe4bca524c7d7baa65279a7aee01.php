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

/* extension/module/luxshop/page_category_menu.twig */
class __TwigTemplate_4652deb5019ad5c39d54a7df802898d704fc916abb5ea0027f85b057540d63b2 extends \Twig\Template
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
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-12 title-setting\">";
        // line 2
        echo ($context["text_setting_category_page"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 5
        echo ($context["text_on_off_subcategory"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"show_subcategories\" value=\"1\" ";
        // line 8
        echo (((array_key_exists("show_subcategories", $context) && (($context["show_subcategories"] ?? null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
                  <label for=\"input-subcategories_row_limit\" class=\"col-sm-3 control-label\">";
        // line 13
        echo ($context["text_subcategories_row_limit"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <select class=\"form-control\" id=\"input-subcategories_row_limit\" name=\"subcategories_row_limit\">
                        ";
        // line 16
        if ((array_key_exists("subcategories_row_limit", $context) && (($context["subcategories_row_limit"] ?? null) == 2))) {
            // line 17
            echo "\t\t\t\t\t\t\t<option value=\"3\">4</option>
\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">6</option>
\t\t\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">4</option>
\t\t\t\t\t\t\t<option value=\"2\">6</option>
\t\t\t\t\t\t";
        }
        // line 23
        echo "                    </select>
                  </div>
                </div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 27
        echo ($context["text_on_off_subcategory_image"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"show_subcategories_image\" value=\"1\" ";
        // line 30
        echo (((array_key_exists("show_subcategories_image", $context) && (($context["show_subcategories_image"] ?? null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 35
        echo ($context["ns_text_subcat_width"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"ns_subcat_width\" value=\"";
        // line 37
        echo ($context["ns_subcat_width"] ?? null);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 41
        echo ($context["ns_text_subcat_height"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"ns_subcat_height\" value=\"";
        // line 43
        echo ($context["ns_subcat_height"] ?? null);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 47
        echo ($context["text_short_attribute_status"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"show_attr_cpage\" value=\"1\" ";
        // line 50
        echo (((array_key_exists("show_attr_cpage", $context) && (($context["show_attr_cpage"] ?? null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 55
        echo ($context["text_short_attribute_group_product"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"cpage_attr_group_count\" value=\"";
        // line 57
        echo ($context["cpage_attr_group_count"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 61
        echo ($context["text_short_attribute_group_product_item"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"cpage_attr_group_item_count\" value=\"";
        // line 63
        echo ($context["cpage_attr_group_item_count"] ?? null);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
                  <label for=\"input-config_price_list_view_on_off\" class=\"col-sm-3 control-label\">";
        // line 67
        echo ($context["text_localstorege_pricelist"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <select class=\"form-control\" id=\"input-config_price_list_view_on_off\" name=\"config_price_list_view_on_off\">
                        ";
        // line 70
        if (($context["config_price_list_view_on_off"] ?? null)) {
            // line 71
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 72
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 75
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        }
        // line 77
        echo "                    </select>
                  </div>
                </div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 81
        echo ($context["text_catalog_category_description_dropped"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 84
        if (($context["config_catalog_category_description_dropped"] ?? null)) {
            // line 85
            echo "\t\t\t\t\t\t\t<input id=\"config_catalog_category_description_dropped_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_catalog_category_description_dropped\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_catalog_category_description_dropped_yes\">";
            // line 86
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 88
            echo "\t\t\t\t\t\t\t<input id=\"config_catalog_category_description_dropped_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_catalog_category_description_dropped\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_catalog_category_description_dropped_yes\">";
            // line 89
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_catalog_category_description_dropped"] ?? null)) {
            // line 92
            echo "\t\t\t\t\t\t\t<input id=\"config_catalog_category_description_dropped_no\" class=\"hide-radio\" type=\"radio\" name=\"config_catalog_category_description_dropped\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_catalog_category_description_dropped_no\">";
            // line 93
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 95
            echo "\t\t\t\t\t\t\t<input id=\"config_catalog_category_description_dropped_no\" class=\"hide-radio\" type=\"radio\" name=\"config_catalog_category_description_dropped\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_catalog_category_description_dropped_no\">";
            // line 96
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 102
        echo ($context["text_on_off_category_page_model_product"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 105
        if (($context["config_on_off_category_page_model_product"] ?? null)) {
            // line 106
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_model_product_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_model_product\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_model_product_yes\">";
            // line 107
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 109
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_model_product_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_model_product\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_model_product_yes\">";
            // line 110
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 112
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_category_page_model_product"] ?? null)) {
            // line 113
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_model_product_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_model_product\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_model_product_no\">";
            // line 114
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 116
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_model_product_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_model_product\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_model_product_no\">";
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
        echo ($context["text_on_off_category_page_description"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 126
        if (($context["config_on_off_category_page_description"] ?? null)) {
            // line 127
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_description_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_description\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_description_yes\">";
            // line 128
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 130
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_description_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_description\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_description_yes\">";
            // line 131
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 133
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_category_page_description"] ?? null)) {
            // line 134
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_description_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_description\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_description_no\">";
            // line 135
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 137
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_description_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_description\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_description_no\">";
            // line 138
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 144
        echo ($context["text_additional_image_hover"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"config_on_off_category_page_slider_additional_image\" value=\"1\" ";
        // line 147
        echo (((array_key_exists("config_on_off_category_page_slider_additional_image", $context) && (($context["config_on_off_category_page_slider_additional_image"] ?? null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 152
        echo ($context["text_on_off_category_page_rating"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 155
        if (($context["config_on_off_category_page_rating"] ?? null)) {
            // line 156
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_rating_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_rating\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_rating_yes\">";
            // line 157
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 159
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_rating_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_rating\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_rating_yes\">";
            // line 160
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 162
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_category_page_rating"] ?? null)) {
            // line 163
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_rating_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_rating\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_rating_no\">";
            // line 164
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 166
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_rating_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_rating\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_rating_no\">";
            // line 167
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 169
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 173
        echo ($context["text_on_off_category_page_quantity_reviews"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 176
        if (($context["config_on_off_category_page_quantity_reviews"] ?? null)) {
            // line 177
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_quantity_reviews_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_quantity_reviews\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_quantity_reviews_yes\">";
            // line 178
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 180
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_quantity_reviews_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_quantity_reviews\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_quantity_reviews_yes\">";
            // line 181
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 183
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_category_page_quantity_reviews"] ?? null)) {
            // line 184
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_quantity_reviews_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_quantity_reviews\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_quantity_reviews_no\">";
            // line 185
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 187
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_quantity_reviews_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_quantity_reviews\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_quantity_reviews_no\">";
            // line 188
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 190
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 194
        echo ($context["text_on_off_category_page_fastorder"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 197
        if (($context["config_on_off_category_page_fastorder"] ?? null)) {
            // line 198
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_fastorder_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_fastorder\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_fastorder_yes\">";
            // line 199
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 201
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_fastorder_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_fastorder\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_fastorder_yes\">";
            // line 202
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 204
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_category_page_fastorder"] ?? null)) {
            // line 205
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_fastorder_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_fastorder\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_fastorder_no\">";
            // line 206
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 208
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_fastorder_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_fastorder\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_fastorder_no\">";
            // line 209
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 211
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 215
        echo ($context["text_on_off_category_page_wishlist"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 218
        if (($context["config_on_off_category_page_wishlist"] ?? null)) {
            // line 219
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_wishlist_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_wishlist\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_wishlist_yes\">";
            // line 220
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 222
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_wishlist_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_wishlist\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_wishlist_yes\">";
            // line 223
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 225
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_category_page_wishlist"] ?? null)) {
            // line 226
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_wishlist_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_wishlist\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_wishlist_no\">";
            // line 227
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 229
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_wishlist_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_wishlist\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_wishlist_no\">";
            // line 230
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 232
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 236
        echo ($context["text_on_off_category_page_compare"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 239
        if (($context["config_on_off_category_page_compare"] ?? null)) {
            // line 240
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_compare_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_compare\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_compare_yes\">";
            // line 241
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 243
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_compare_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_compare\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_compare_yes\">";
            // line 244
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 246
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_category_page_compare"] ?? null)) {
            // line 247
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_compare_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_compare\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_compare_no\">";
            // line 248
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 250
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_category_page_compare_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_category_page_compare\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_category_page_compare_no\">";
            // line 251
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 253
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop/page_category_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 253,  589 => 251,  586 => 250,  581 => 248,  578 => 247,  575 => 246,  570 => 244,  567 => 243,  562 => 241,  559 => 240,  557 => 239,  551 => 236,  545 => 232,  540 => 230,  537 => 229,  532 => 227,  529 => 226,  526 => 225,  521 => 223,  518 => 222,  513 => 220,  510 => 219,  508 => 218,  502 => 215,  496 => 211,  491 => 209,  488 => 208,  483 => 206,  480 => 205,  477 => 204,  472 => 202,  469 => 201,  464 => 199,  461 => 198,  459 => 197,  453 => 194,  447 => 190,  442 => 188,  439 => 187,  434 => 185,  431 => 184,  428 => 183,  423 => 181,  420 => 180,  415 => 178,  412 => 177,  410 => 176,  404 => 173,  398 => 169,  393 => 167,  390 => 166,  385 => 164,  382 => 163,  379 => 162,  374 => 160,  371 => 159,  366 => 157,  363 => 156,  361 => 155,  355 => 152,  347 => 147,  341 => 144,  335 => 140,  330 => 138,  327 => 137,  322 => 135,  319 => 134,  316 => 133,  311 => 131,  308 => 130,  303 => 128,  300 => 127,  298 => 126,  292 => 123,  286 => 119,  281 => 117,  278 => 116,  273 => 114,  270 => 113,  267 => 112,  262 => 110,  259 => 109,  254 => 107,  251 => 106,  249 => 105,  243 => 102,  237 => 98,  232 => 96,  229 => 95,  224 => 93,  221 => 92,  218 => 91,  213 => 89,  210 => 88,  205 => 86,  202 => 85,  200 => 84,  194 => 81,  188 => 77,  183 => 75,  178 => 74,  173 => 72,  168 => 71,  166 => 70,  160 => 67,  153 => 63,  148 => 61,  141 => 57,  136 => 55,  128 => 50,  122 => 47,  115 => 43,  110 => 41,  103 => 37,  98 => 35,  90 => 30,  84 => 27,  78 => 23,  73 => 20,  68 => 17,  66 => 16,  60 => 13,  52 => 8,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop/page_category_menu.twig", "");
    }
}
