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

/* extension/module/luxshop/page_manufacturer_menu.twig */
class __TwigTemplate_426cd33fd96db1b1b1e4bf44ac378e4ba1c5e418f65097332a379f6231d74957 extends \Twig\Template
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
        echo ($context["text_setting_manufacturer_page"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 5
        echo ($context["text_show_image_brand"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"show_image_brand\" value=\"1\" ";
        // line 8
        echo (((array_key_exists("show_image_brand", $context) && (($context["show_image_brand"] ?? null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
                  <label for=\"input-config_price_list_view_on_off_manufacturer_page\" class=\"col-sm-3 control-label\">";
        // line 13
        echo ($context["text_localstorege_pricelist"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <select class=\"form-control\" id=\"input-config_price_list_view_on_off_manufacturer_page\" name=\"config_price_list_view_on_off_manufacturer_page\">
                        ";
        // line 16
        if (($context["config_price_list_view_on_off_manufacturer_page"] ?? null)) {
            // line 17
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 18
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 21
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        }
        // line 23
        echo "                    </select>
                  </div>
                </div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 27
        echo ($context["text_on_off_manufacturer_page_model_product"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 30
        if (($context["config_on_off_manufacturer_page_model_product"] ?? null)) {
            // line 31
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_model_product_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_model_product\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_model_product_yes\">";
            // line 32
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_model_product_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_model_product\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_model_product_yes\">";
            // line 35
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_manufacturer_page_model_product"] ?? null)) {
            // line 38
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_model_product_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_model_product\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_model_product_no\">";
            // line 39
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_model_product_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_model_product\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_model_product_no\">";
            // line 42
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 48
        echo ($context["text_on_off_manufacturer_page_description"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 51
        if (($context["config_on_off_manufacturer_page_description"] ?? null)) {
            // line 52
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_description_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_description\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_description_yes\">";
            // line 53
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 55
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_description_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_description\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_description_yes\">";
            // line 56
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_manufacturer_page_description"] ?? null)) {
            // line 59
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_description_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_description\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_description_no\">";
            // line 60
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 62
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_description_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_description\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_description_no\">";
            // line 63
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
                  <label for=\"input-config_on_off_manufacturer_page_slider_additional_image\" class=\"col-sm-3 control-label\">";
        // line 69
        echo ($context["text_additional_image"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <select class=\"form-control\" id=\"input-config_on_off_manufacturer_page_slider_additional_image\" name=\"config_on_off_manufacturer_page_slider_additional_image\">
\t\t\t\t\t\t";
        // line 72
        if ((($context["config_on_off_manufacturer_page_slider_additional_image"] ?? null) == "1")) {
            // line 73
            echo "\t\t\t\t\t\t<option selected=\"selected\" value=\"1\">";
            echo ($context["text_additional_image_hover"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        } else {
            // line 75
            echo "\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_additional_image_hover"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        }
        // line 77
        echo "                        ";
        if ((($context["config_on_off_manufacturer_page_slider_additional_image"] ?? null) == "0")) {
            // line 78
            echo "\t\t\t\t\t\t <option selected=\"selected\" value=\"0\">";
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t\t\t <option value=\"0\">";
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        }
        // line 82
        echo "                    </select>
                  </div>
                </div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 86
        echo ($context["text_on_off_manufacturer_page_rating"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 89
        if (($context["config_on_off_manufacturer_page_rating"] ?? null)) {
            // line 90
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_rating_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_rating\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_rating_yes\">";
            // line 91
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 93
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_rating_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_rating\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_rating_yes\">";
            // line 94
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_manufacturer_page_rating"] ?? null)) {
            // line 97
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_rating_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_rating\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_rating_no\">";
            // line 98
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 100
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_rating_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_rating\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_rating_no\">";
            // line 101
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 103
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 107
        echo ($context["text_on_off_manufacturer_page_quantity_reviews"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 110
        if (($context["config_on_off_manufacturer_page_quantity_reviews"] ?? null)) {
            // line 111
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_quantity_reviews_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_quantity_reviews\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_quantity_reviews_yes\">";
            // line 112
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 114
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_quantity_reviews_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_quantity_reviews\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_quantity_reviews_yes\">";
            // line 115
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 117
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_manufacturer_page_quantity_reviews"] ?? null)) {
            // line 118
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_quantity_reviews_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_quantity_reviews\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_quantity_reviews_no\">";
            // line 119
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 121
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_quantity_reviews_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_quantity_reviews\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_quantity_reviews_no\">";
            // line 122
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 124
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 128
        echo ($context["text_on_off_manufacturer_page_fastorder"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 131
        if (($context["config_on_off_manufacturer_page_fastorder"] ?? null)) {
            // line 132
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_fastorder_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_fastorder\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_fastorder_yes\">";
            // line 133
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 135
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_fastorder_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_fastorder\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_fastorder_yes\">";
            // line 136
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 138
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_manufacturer_page_fastorder"] ?? null)) {
            // line 139
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_fastorder_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_fastorder\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_fastorder_no\">";
            // line 140
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 142
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_fastorder_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_fastorder\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_fastorder_no\">";
            // line 143
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 145
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 149
        echo ($context["text_on_off_manufacturer_page_wishlist"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 152
        if (($context["config_on_off_manufacturer_page_wishlist"] ?? null)) {
            // line 153
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_wishlist_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_wishlist\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_wishlist_yes\">";
            // line 154
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 156
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_wishlist_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_wishlist\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_wishlist_yes\">";
            // line 157
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 159
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_manufacturer_page_wishlist"] ?? null)) {
            // line 160
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_wishlist_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_wishlist\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_wishlist_no\">";
            // line 161
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 163
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_wishlist_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_wishlist\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_wishlist_no\">";
            // line 164
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 166
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 170
        echo ($context["text_on_off_manufacturer_page_compare"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 173
        if (($context["config_on_off_manufacturer_page_compare"] ?? null)) {
            // line 174
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_compare_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_compare\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_compare_yes\">";
            // line 175
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 177
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_compare_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_compare\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_compare_yes\">";
            // line 178
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 180
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_manufacturer_page_compare"] ?? null)) {
            // line 181
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_compare_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_compare\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_compare_no\">";
            // line 182
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 184
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_manufacturer_page_compare_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_manufacturer_page_compare\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_manufacturer_page_compare_no\">";
            // line 185
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 187
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop/page_manufacturer_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 187,  467 => 185,  464 => 184,  459 => 182,  456 => 181,  453 => 180,  448 => 178,  445 => 177,  440 => 175,  437 => 174,  435 => 173,  429 => 170,  423 => 166,  418 => 164,  415 => 163,  410 => 161,  407 => 160,  404 => 159,  399 => 157,  396 => 156,  391 => 154,  388 => 153,  386 => 152,  380 => 149,  374 => 145,  369 => 143,  366 => 142,  361 => 140,  358 => 139,  355 => 138,  350 => 136,  347 => 135,  342 => 133,  339 => 132,  337 => 131,  331 => 128,  325 => 124,  320 => 122,  317 => 121,  312 => 119,  309 => 118,  306 => 117,  301 => 115,  298 => 114,  293 => 112,  290 => 111,  288 => 110,  282 => 107,  276 => 103,  271 => 101,  268 => 100,  263 => 98,  260 => 97,  257 => 96,  252 => 94,  249 => 93,  244 => 91,  241 => 90,  239 => 89,  233 => 86,  227 => 82,  221 => 80,  215 => 78,  212 => 77,  206 => 75,  200 => 73,  198 => 72,  192 => 69,  186 => 65,  181 => 63,  178 => 62,  173 => 60,  170 => 59,  167 => 58,  162 => 56,  159 => 55,  154 => 53,  151 => 52,  149 => 51,  143 => 48,  137 => 44,  132 => 42,  129 => 41,  124 => 39,  121 => 38,  118 => 37,  113 => 35,  110 => 34,  105 => 32,  102 => 31,  100 => 30,  94 => 27,  88 => 23,  83 => 21,  78 => 20,  73 => 18,  68 => 17,  66 => 16,  60 => 13,  52 => 8,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop/page_manufacturer_menu.twig", "");
    }
}
