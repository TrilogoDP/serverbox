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

/* extension/module/luxshop/page_search_menu.twig */
class __TwigTemplate_a76b4f62d0aec9fc0282d1d60ad687c4b97b85a965be7330fef98c18405c462b extends \Twig\Template
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
        echo ($context["text_setting_search_page"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
                  <label for=\"input-config_price_list_view_on_off_search_page\" class=\"col-sm-3 control-label\">";
        // line 5
        echo ($context["text_localstorege_pricelist"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <select class=\"form-control\" id=\"input-config_price_list_view_on_off_search_page\" name=\"config_price_list_view_on_off_search_page\">
                        ";
        // line 8
        if (($context["config_price_list_view_on_off_search_page"] ?? null)) {
            // line 9
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 10
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        } else {
            // line 12
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 13
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        }
        // line 15
        echo "                    </select>
                  </div>
                </div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 19
        echo ($context["text_on_off_search_page_model_product"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 22
        if (($context["config_on_off_search_page_model_product"] ?? null)) {
            // line 23
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_model_product_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_model_product\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_model_product_yes\">";
            // line 24
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_model_product_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_model_product\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_model_product_yes\">";
            // line 27
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_search_page_model_product"] ?? null)) {
            // line 30
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_model_product_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_model_product\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_model_product_no\">";
            // line 31
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_model_product_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_model_product\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_model_product_no\">";
            // line 34
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 40
        echo ($context["text_on_off_search_page_description"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 43
        if (($context["config_on_off_search_page_description"] ?? null)) {
            // line 44
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_description_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_description\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_description_yes\">";
            // line 45
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_description_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_description\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_description_yes\">";
            // line 48
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_search_page_description"] ?? null)) {
            // line 51
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_description_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_description\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_description_no\">";
            // line 52
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_description_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_description\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_description_no\">";
            // line 55
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
                  <label for=\"input-config_on_off_search_page_slider_additional_image\" class=\"col-sm-3 control-label\">";
        // line 61
        echo ($context["text_additional_image"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <select class=\"form-control\" id=\"input-config_on_off_search_page_slider_additional_image\" name=\"config_on_off_search_page_slider_additional_image\">
\t\t\t\t\t\t";
        // line 64
        if ((($context["config_on_off_search_page_slider_additional_image"] ?? null) == "1")) {
            // line 65
            echo "\t\t\t\t\t\t<option selected=\"selected\" value=\"1\">";
            echo ($context["text_additional_image_hover"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_additional_image_hover"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        }
        // line 69
        echo "                        ";
        if ((($context["config_on_off_search_page_slider_additional_image"] ?? null) == "0")) {
            // line 70
            echo "\t\t\t\t\t\t <option selected=\"selected\" value=\"0\">";
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        } else {
            // line 72
            echo "\t\t\t\t\t\t <option value=\"0\">";
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        }
        // line 74
        echo "                    </select>
                  </div>
                </div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 78
        echo ($context["text_on_off_search_page_rating"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 81
        if (($context["config_on_off_search_page_rating"] ?? null)) {
            // line 82
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_rating_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_rating\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_rating_yes\">";
            // line 83
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 85
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_rating_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_rating\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_rating_yes\">";
            // line 86
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_search_page_rating"] ?? null)) {
            // line 89
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_rating_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_rating\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_rating_no\">";
            // line 90
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 92
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_rating_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_rating\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_rating_no\">";
            // line 93
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 99
        echo ($context["text_on_off_search_page_quantity_reviews"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 102
        if (($context["config_on_off_search_page_quantity_reviews"] ?? null)) {
            // line 103
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_quantity_reviews_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_quantity_reviews\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_quantity_reviews_yes\">";
            // line 104
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 106
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_quantity_reviews_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_quantity_reviews\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_quantity_reviews_yes\">";
            // line 107
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 109
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_search_page_quantity_reviews"] ?? null)) {
            // line 110
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_quantity_reviews_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_quantity_reviews\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_quantity_reviews_no\">";
            // line 111
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 113
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_quantity_reviews_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_quantity_reviews\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_quantity_reviews_no\">";
            // line 114
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 120
        echo ($context["text_on_off_search_page_fastorder"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 123
        if (($context["config_on_off_search_page_fastorder"] ?? null)) {
            // line 124
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_fastorder_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_fastorder\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_fastorder_yes\">";
            // line 125
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 127
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_fastorder_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_fastorder\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_fastorder_yes\">";
            // line 128
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 130
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_search_page_fastorder"] ?? null)) {
            // line 131
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_fastorder_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_fastorder\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_fastorder_no\">";
            // line 132
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 134
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_fastorder_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_fastorder\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_fastorder_no\">";
            // line 135
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 137
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 141
        echo ($context["text_on_off_search_page_wishlist"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 144
        if (($context["config_on_off_search_page_wishlist"] ?? null)) {
            // line 145
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_wishlist_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_wishlist\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_wishlist_yes\">";
            // line 146
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 148
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_wishlist_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_wishlist\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_wishlist_yes\">";
            // line 149
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 151
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_search_page_wishlist"] ?? null)) {
            // line 152
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_wishlist_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_wishlist\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_wishlist_no\">";
            // line 153
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 155
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_wishlist_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_wishlist\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_wishlist_no\">";
            // line 156
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 158
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 162
        echo ($context["text_on_off_search_page_compare"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 165
        if (($context["config_on_off_search_page_compare"] ?? null)) {
            // line 166
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_compare_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_compare\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_compare_yes\">";
            // line 167
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 169
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_compare_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_compare\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_compare_yes\">";
            // line 170
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 172
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_search_page_compare"] ?? null)) {
            // line 173
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_compare_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_compare\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_compare_no\">";
            // line 174
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 176
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_search_page_compare_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_search_page_compare\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_search_page_compare_no\">";
            // line 177
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 179
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop/page_search_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 179,  453 => 177,  450 => 176,  445 => 174,  442 => 173,  439 => 172,  434 => 170,  431 => 169,  426 => 167,  423 => 166,  421 => 165,  415 => 162,  409 => 158,  404 => 156,  401 => 155,  396 => 153,  393 => 152,  390 => 151,  385 => 149,  382 => 148,  377 => 146,  374 => 145,  372 => 144,  366 => 141,  360 => 137,  355 => 135,  352 => 134,  347 => 132,  344 => 131,  341 => 130,  336 => 128,  333 => 127,  328 => 125,  325 => 124,  323 => 123,  317 => 120,  311 => 116,  306 => 114,  303 => 113,  298 => 111,  295 => 110,  292 => 109,  287 => 107,  284 => 106,  279 => 104,  276 => 103,  274 => 102,  268 => 99,  262 => 95,  257 => 93,  254 => 92,  249 => 90,  246 => 89,  243 => 88,  238 => 86,  235 => 85,  230 => 83,  227 => 82,  225 => 81,  219 => 78,  213 => 74,  207 => 72,  201 => 70,  198 => 69,  192 => 67,  186 => 65,  184 => 64,  178 => 61,  172 => 57,  167 => 55,  164 => 54,  159 => 52,  156 => 51,  153 => 50,  148 => 48,  145 => 47,  140 => 45,  137 => 44,  135 => 43,  129 => 40,  123 => 36,  118 => 34,  115 => 33,  110 => 31,  107 => 30,  104 => 29,  99 => 27,  96 => 26,  91 => 24,  88 => 23,  86 => 22,  80 => 19,  74 => 15,  69 => 13,  64 => 12,  59 => 10,  54 => 9,  52 => 8,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop/page_search_menu.twig", "");
    }
}
