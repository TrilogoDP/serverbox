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

/* luxshop/template/extension/module/luxshop_product_list.twig */
class __TwigTemplate_4f1a201faff293f31948e6753b61626f5ed01c8974e84452c7054c64089d5cb4 extends \Twig\Template
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
        echo "<div>
<div class=\"row-flex pct_gv pct_grid";
        // line 2
        echo ($context["module"] ?? null);
        echo "_";
        echo ($context["idCategory"] ?? null);
        echo "\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "   \t<div class=\"item no-slider f-col-xs-6 f-col-sm-6 f-col-md-4 f-col-lg-3 item-col-5\">
    <div class=\"product-thumb dflex flex-column h-100\">
    \t<div class=\"image\">
\t\t\t<div class=\"stickers-ns\">
\t\t\t\t";
            // line 8
            if (((($context["on_off_sticker_special"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 8))) {
                // line 9
                echo "\t\t\t\t\t<div class=\"sticker-ns special\">
\t\t\t\t\t\t";
                // line 10
                if ( !twig_test_empty(($context["config_change_icon_sticker_special"] ?? null))) {
                    echo "<i class=\"fa ";
                    echo ($context["config_change_icon_sticker_special"] ?? null);
                    echo " \"></i>";
                }
                // line 11
                echo "\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["text_sticker_special"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_special", [], "any", false, false, false, 11);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 14
            echo "\t\t\t\t";
            if (((($context["on_off_sticker_topbestseller"] ?? null) == "1") && (twig_get_attribute($this->env, $this->source, $context["product"], "top_bestsellers", [], "any", false, false, false, 14) >= ($context["config_limit_order_product_topbestseller"] ?? null)))) {
                // line 15
                echo "\t\t\t\t\t<div class=\"sticker-ns bestseller\">
\t\t\t\t\t\t";
                // line 16
                if ( !twig_test_empty(($context["config_change_icon_sticker_topbestseller"] ?? null))) {
                    echo "<i class=\"fa ";
                    echo ($context["config_change_icon_sticker_topbestseller"] ?? null);
                    echo " \"></i>";
                }
                // line 17
                echo "\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["text_sticker_topbestseller"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_topbestseller", [], "any", false, false, false, 17);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t";
            if (((($context["on_off_sticker_popular"] ?? null) == "1") && (twig_get_attribute($this->env, $this->source, $context["product"], "viewed", [], "any", false, false, false, 20) >= ($context["config_min_quantity_popular"] ?? null)))) {
                // line 21
                echo "\t\t\t\t\t<div class=\"sticker-ns popular\">
\t\t\t\t\t\t";
                // line 22
                if ( !twig_test_empty(($context["config_change_icon_sticker_popular"] ?? null))) {
                    echo "<i class=\"fa ";
                    echo ($context["config_change_icon_sticker_popular"] ?? null);
                    echo " \"></i>";
                }
                // line 23
                echo "\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["text_sticker_popular"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_popular", [], "any", false, false, false, 23);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t";
            if (((($context["on_off_sticker_newproduct"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "sticker_new_prod", [], "any", false, false, false, 26))) {
                // line 27
                echo "\t\t\t\t\t<div class=\"sticker-ns newproduct\">
\t\t\t\t\t\t";
                // line 28
                if ( !twig_test_empty(($context["config_change_icon_sticker_newproduct"] ?? null))) {
                    echo "<i class=\"fa ";
                    echo ($context["config_change_icon_sticker_newproduct"] ?? null);
                    echo "\"></i>";
                }
                // line 29
                echo "\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["text_sticker_newproduct"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_newproduct", [], "any", false, false, false, 29);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 32
            echo "\t\t\t</div>
\t\t\t<a href=\"";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 33);
            echo "\"><img decoding=\"async\" width=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 33);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 33);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "additional_image_hover", [], "any", false, false, false, 33)) {
                echo "data-additional-hover=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "additional_image_hover", [], "any", false, false, false, 33);
                echo "\"";
            }
            echo " loading=\"lazy\" src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 33);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
            echo "\" class=\"img-responsive\" /></a>
\t\t\t";
            // line 34
            if (((($context["show_special_timer_module"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 34))) {
                // line 35
                echo "\t\t\t\t<div class=\"action-timer\" data-date-end=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 35);
                echo "\"></div>
\t\t\t";
            }
            // line 37
            echo "\t  \t</div>
\t  \t<div class=\"caption dflex flex-column flex-grow-1\">
\t\t\t<div class=\"product-name\"><a href=\"";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 39);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 39);
            echo "</a></div>
\t\t\t";
            // line 40
            if (($context["show_stock_status"] ?? null)) {
                // line 41
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 41) <= 0)) {
                    // line 42
                    echo "\t\t\t\t\t<div class=\"stock-status outofstock\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 42);
                    echo "</div>
\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t<div class=\"stock-status instock\">
\t\t\t\t\t\t<svg width=\"11\" height=\"11\" viewBox=\"0 0 11 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7.68141 3.6147C7.89421 3.43872 8.20938 3.46857 8.38537 3.68137C8.54179 3.87052 8.53559 4.14057 8.38283 4.32184L8.3187 4.38532L4.40526 7.62168L2.72378 6.50696C2.49362 6.35438 2.43073 6.04411 2.58331 5.81395C2.71894 5.60936 2.97916 5.53694 3.19697 5.63054L3.27633 5.67348L4.33905 6.37801L7.68141 3.6147Z\" fill=\"#00BC52\"/><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11 5.5C11 2.46243 8.53757 0 5.5 0C2.46243 0 0 2.46243 0 5.5C0 8.53757 2.46243 11 5.5 11C8.53757 11 11 8.53757 11 5.5ZM1 5.5C1 3.01472 3.01472 1 5.5 1C7.98528 1 10 3.01472 10 5.5C10 7.98528 7.98528 10 5.5 10C3.01472 10 1 7.98528 1 5.5Z\" fill=\"#00BC52\"/></svg>
\t\t\t\t\t\t";
                    // line 46
                    echo ($context["text_instock"] ?? null);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 49
                echo "\t\t\t";
            }
            // line 50
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_model", [], "any", true, true, false, 50) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_model", [], "any", false, false, false, 50) == "1"))) {
                // line 51
                echo "\t\t\t\t<div class=\"product-model\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 51);
                echo "</div>
\t\t\t";
            }
            // line 53
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_description", [], "any", true, true, false, 53) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_description", [], "any", false, false, false, 53) == "1"))) {
                // line 54
                echo "\t\t\t\t<div class=\"product-description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 54);
                echo "</div>
\t\t\t";
            }
            // line 56
            echo "\t\t\t";
            if (($context["show_options"] ?? null)) {
                // line 57
                echo "\t\t\t\t<div class=\"option featured-opt\">
\t\t\t\t\t";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 58));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 59
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 59) == "select")) {
                        // line 60
                        echo "\t\t\t\t\t\t\t<div class=\"form-group";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 60)) ? (" required") : (""));
                        echo "\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 61
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 61);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 61);
                        echo "</label>
\t\t\t\t\t\t\t\t<select name=\"option[";
                        // line 62
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 62);
                        echo "]\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 62);
                        echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 63
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                        // line 64
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 64));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 65
                            echo "\t\t\t\t\t\t\t\t\t<option data-option-prefix=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 65);
                            echo "\" data-option-price=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 65);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 65);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 65);
                            echo "
\t\t\t\t\t\t\t\t\t";
                            // line 66
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 66)) {
                                // line 67
                                echo "\t\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 67);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 67);
                                echo ")
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 69
                            echo "\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 71
                        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 74
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 74) == "radio")) {
                        // line 75
                        echo "\t\t\t\t\t\t<div class=\"form-group";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 75)) ? (" required") : (""));
                        echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 76
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 76);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 76);
                        echo "</label>
\t\t\t\t\t\t  <div id=\"input-option";
                        // line 77
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 77);
                        echo "\">
\t\t\t\t\t\t\t";
                        // line 78
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 78));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 79
                            echo "\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 79) || twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 79))) {
                                // line 80
                                echo "\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["option"], "status_color_type", [], "any", false, false, false, 80) == "1")) {
                                    // line 81
                                    echo "\t\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                    // line 83
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 83);
                                    echo "\" data-option-price=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 83);
                                    echo "\" type=\"radio\" name=\"option[";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 83);
                                    echo "]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 83);
                                    echo "\" id=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 83);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 83);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t\t<span for=\"";
                                    // line 84
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 84);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 84);
                                    echo "\" class=\"color-option\" data-toggle=\"tooltip\" title=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 84) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 84))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 84)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 84))) : (""));
                                    echo "\" style=\"background-color:";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 84);
                                    echo "\"></span>
\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 88
                                    echo "\t\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                    // line 90
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 90);
                                    echo "\" data-option-price=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 90);
                                    echo "\" type=\"radio\" name=\"option[";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 90);
                                    echo "]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 90);
                                    echo "\" id=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 90);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 90);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t\t<img for=\"input-value-";
                                    // line 91
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 91);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 91);
                                    echo "\" src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 91);
                                    echo "\" alt=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 91) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 91))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 91)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 91))) : (""));
                                    echo "\" class=\"img-thumbnail\" data-toggle=\"tooltip\" title=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 91) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 91))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 91)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 91))) : (""));
                                    echo "\" />
\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                                }
                                // line 95
                                echo "\t\t\t\t\t\t\t";
                            } else {
                                // line 96
                                echo "\t\t\t\t\t\t\t\t<div class=\"radio-checbox-options\">
\t\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                // line 97
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 97);
                                echo "\" data-option-price=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 97);
                                echo "\" type=\"radio\" name=\"option[";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 97);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 97);
                                echo "\" id=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 97);
                                echo "_";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 97);
                                echo "\" />
\t\t\t\t\t\t\t\t\t<label data-toggle=\"tooltip\" title=\"";
                                // line 98
                                echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 98) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 98))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 98)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 98))) : (""));
                                echo "\" for=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 98);
                                echo "_";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 98);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"option-name\">";
                                // line 99
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 99);
                                echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                            }
                            // line 103
                            echo "
\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 105
                        echo "\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "
\t\t\t\t\t\t";
                    // line 109
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 109) == "checkbox")) {
                        // line 110
                        echo "\t\t\t\t\t\t<div class=\"form-group";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 110)) ? (" required") : (""));
                        echo "\">
\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                        // line 111
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 111);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 111);
                        echo "</label>
\t\t\t\t\t\t  <div id=\"input-option";
                        // line 112
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 112);
                        echo "\">
\t\t\t\t\t\t\t";
                        // line 113
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 113));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 114
                            echo "\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 114) || twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 114))) {
                                // line 115
                                echo "\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["option"], "status_color_type", [], "any", false, false, false, 115) == "1")) {
                                    // line 116
                                    echo "\t\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                    // line 118
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 118);
                                    echo "\" data-option-price=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 118);
                                    echo "\" type=\"checkbox\" name=\"option[";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 118);
                                    echo "][]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 118);
                                    echo "\" id=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 118);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 118);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t\t<span for=\"";
                                    // line 119
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 119);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 119);
                                    echo "\" class=\"color-option\" data-toggle=\"tooltip\" title=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 119) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 119))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 119)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 119))) : (""));
                                    echo "\" style=\"background-color:";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 119);
                                    echo "\"></span>
\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 123
                                    echo "\t\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                    // line 125
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 125);
                                    echo "\" data-option-price=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 125);
                                    echo "\" type=\"checkbox\" name=\"option[";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 125);
                                    echo "][]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 125);
                                    echo "\" id=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 125);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 125);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t\t<img for=\"";
                                    // line 126
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 126);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 126);
                                    echo "\" src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 126);
                                    echo "\" alt=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 126) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 126))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 126)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 126))) : (""));
                                    echo "\" class=\"img-thumbnail\" data-toggle=\"tooltip\" title=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 126) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 126))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 126)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 126))) : (""));
                                    echo "\" />
\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                                }
                                // line 130
                                echo "\t\t\t\t\t\t\t\t";
                            } else {
                                // line 131
                                echo "\t\t\t\t\t\t\t\t\t<div class=\"radio-checbox-options\">
\t\t\t\t\t\t\t\t\t  <input data-option-prefix=\"";
                                // line 132
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 132);
                                echo "\" data-option-price=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 132);
                                echo "\" type=\"checkbox\" name=\"option[";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 132);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 132);
                                echo "\" id=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 132);
                                echo "_";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 132);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t<label data-toggle=\"tooltip\" title=\"";
                                // line 133
                                echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 133) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 133))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 133)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 133))) : (""));
                                echo "\" for=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 133);
                                echo "_";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 133);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"option-name\">";
                                // line 134
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 134);
                                echo "</span>
\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 138
                            echo "\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 139
                        echo "\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 142
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "\t\t\t\t</div>
\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_rating", [], "any", true, true, false, 145) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_rating", [], "any", false, false, false, 145) == "1"))) {
                // line 146
                echo "\t\t\t\t<div class=\"rating\">
\t\t\t\t\t<span class=\"rating-box\">
\t\t\t\t\t\t";
                // line 148
                $context["i"] = 1;
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 149
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 149) < $context["i"])) {
                        // line 150
                        echo "\t\t\t\t\t\t\t\t<span class=\"product-rating-star\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"none\" viewBox=\"0 0 12 12\">
\t\t\t\t\t\t\t\t\t\t<path fill=\"#E9ECEF\" fill-rule=\"evenodd\" d=\"M6 10.283l-2.972 1.634c-.498.274-1.08-.168-.985-.748l.567-3.46-2.404-2.45c-.403-.41-.18-1.126.376-1.21l3.323-.506L5.391.396a.666.666 0 011.218 0l1.486 3.147 3.323.505c.557.085.78.8.376 1.21L9.39 7.709l.567 3.46c.095.58-.487 1.023-.985.749L6 10.283z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                    } else {
                        // line 156
                        echo "\t\t\t\t\t\t\t\t<span class=\"product-rating-star\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"none\" viewBox=\"0 0 12 12\">
\t\t\t\t\t\t\t\t\t\t<path fill=\"#E5DB77\" fill-rule=\"evenodd\" d=\"M6 10.283l-2.972 1.634c-.498.274-1.08-.168-.985-.748l.567-3.46-2.404-2.45c-.403-.41-.18-1.126.376-1.21l3.323-.506L5.391.396a.666.666 0 011.218 0l1.486 3.147 3.323.505c.557.085.78.8.376 1.21L9.39 7.709l.567 3.46c.095.58-.487 1.023-.985.749L6 10.283z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                    }
                    // line 162
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_quantity_reviews", [], "any", true, true, false, 163) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_quantity_reviews", [], "any", false, false, false, 163) == "1"))) {
                    // line 164
                    echo "\t\t\t\t\t\t<span class=\"quantity-reviews\"><a data-placement=\"right\"  data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_reviews_title"] ?? null);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 164);
                    echo "#tab-review\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 164);
                    echo "</a></span>
\t\t\t\t\t";
                }
                // line 166
                echo "\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 169
            echo "\t\t\t\t<div class=\"price-actions-box dflex flex-wrap mt-auto\">
\t\t\t\t\t";
            // line 170
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 170)) {
                // line 171
                echo "\t\t\t\t\t<div class=\"price";
                if (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_actions", [], "any", true, true, false, 171)) {
                    echo " mb-0";
                }
                echo "\" data-price-no-format=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price_no_format", [], "any", false, false, false, 171);
                echo "\" data-special-no-format=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special_no_format", [], "any", false, false, false, 171);
                echo "\">
\t\t\t\t\t\t  ";
                // line 172
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 172)) {
                    // line 173
                    echo "\t\t\t\t\t\t  <span class=\"price_no_format\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 173);
                    echo "</span>
\t\t\t\t\t\t  ";
                } else {
                    // line 175
                    echo "\t\t\t\t\t\t  <span class=\"price-old\"><span class=\"price_no_format\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 175);
                    echo "</span>
\t\t\t\t\t\t  ";
                    // line 176
                    if (((($context["on_off_percent_discount"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 176))) {
                        echo "<span class=\"sticker-ls-pd procent-skidka\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "skidka", [], "any", false, false, false, 176);
                        echo " %</span>";
                    }
                    echo "</span>
\t\t\t\t\t\t  <span class=\"price-new\"><span class=\"special_no_format\">";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 177);
                    echo "</span></span>
\t\t\t\t\t\t  ";
                }
                // line 179
                echo "\t\t\t\t\t\t  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 179)) {
                    // line 180
                    echo "\t\t\t\t\t\t  <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 180);
                    echo "</span>
\t\t\t\t\t\t  ";
                }
                // line 182
                echo "\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 183
                if ( !twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_actions", [], "any", true, true, false, 183)) {
                    // line 184
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_btn_module", [], "any", true, true, false, 184) && (twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_btn_module", [], "any", false, false, false, 184) == "1"))) {
                        // line 185
                        echo "\t\t\t\t\t\t<div class=\"quantity_plus_minus\">
\t\t\t\t\t\t\t<span class=\"add-up add-action\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"5\" fill=\"none\" viewBox=\"0 0 7 5\">
\t\t\t\t\t\t\t\t\t<path fill=\"#000\" fill-rule=\"evenodd\" d=\"M3.826 2.144a.5.5 0 00-.707.004L.856 4.438a.5.5 0 01-.712-.704l2.264-2.289a1.5 1.5 0 012.121-.012L6.852 3.73a.5.5 0 11-.704.711L3.826 2.144z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"quantity-num form-control\" name=\"quantity\" value=\"";
                        // line 191
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 191);
                        echo "\" data-minimum=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 191);
                        echo "\"  ";
                        if (((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "any", true, true, false, 191) && (twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "any", false, false, false, 191) == "1")) && (twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 191) > 1))) {
                            echo "disabled";
                        }
                        echo ">
\t\t\t\t\t\t\t<span class=\"add-down add-action\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"5\" fill=\"none\" viewBox=\"0 0 7 5\">
\t\t\t\t\t\t\t\t\t<path fill=\"#000\" fill-rule=\"evenodd\" d=\"M3.174 2.856a.5.5 0 00.707-.004L6.144.562a.5.5 0 01.712.704L4.592 3.555a1.5 1.5 0 01-2.121.012L.148 1.27A.5.5 0 11.852.559l2.322 2.297z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 199
                    echo "\t\t\t\t\t";
                }
                // line 200
                echo "\t\t\t\t\t";
            }
            // line 201
            echo "\t\t\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_actions", [], "any", true, true, false, 201)) {
                // line 202
                echo "\t\t\t\t\t<div class=\"actions w-100\">
\t\t\t\t\t\t<div class=\"cart\"><button class=\"btn btn-general\" type=\"button\" ";
                // line 203
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 203) <= 0) && ($context["disable_cart_button"] ?? null))) {
                    echo "disabled";
                } else {
                    echo "onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 203);
                    echo "',this)\"";
                }
                echo "><span class=\"icon-cart-add\"></span><span class=\"text-cart-add\">";
                if (((($context["change_text_cart_button_out_of_stock"] ?? null) == 1) && (twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 203) <= 0))) {
                    echo ($context["disable_cart_button_text"] ?? null);
                } else {
                    echo ($context["button_cart"] ?? null);
                }
                echo "</span></button></div>
\t\t\t\t\t\t<div class=\"addit-action\">
\t\t\t\t\t\t\t";
                // line 205
                if ((($context["config_on_off_latest_quickview"] ?? null) == "1")) {
                    // line 206
                    echo "\t\t\t\t\t\t\t\t<div class=\"quickview\"><button class=\"btn btn-quickview\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["config_quickview_btn_name"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["lang_id"] ?? null)] ?? null) : null), "config_quickview_btn_name", [], "any", false, false, false, 206);
                    echo "\" onclick=\"quickview_open(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 206);
                    echo ");\"><span class=\"btn-icon-quickview\"></span></button></div>
\t\t\t\t\t\t\t";
                }
                // line 208
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_fastorder", [], "any", true, true, false, 208) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_fastorder", [], "any", false, false, false, 208) == "1"))) {
                    // line 209
                    echo "\t\t\t\t\t\t\t";
                    if ((( !($context["disable_fastorder_button"] ?? null) && ((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 209) <= 0) || (twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 209) > 0))) || (($context["disable_fastorder_button"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 209) > 0)))) {
                        // line 210
                        echo "\t\t\t\t\t\t\t\t<div class=\"quick-order\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-fastorder\" title=\"";
                        // line 211
                        echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["config_text_open_form_send_order"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["lang_id"] ?? null)] ?? null) : null), "config_text_open_form_send_order", [], "any", false, false, false, 211);
                        echo "\" type=\"button\" onclick=\"fastorder_open(";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 211);
                        echo ");\" ";
                        if (((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 211) <= 0) && ($context["disable_fastorder_button"] ?? null))) {
                            echo "disabled";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"btn-icon-fastorder\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t";
                    }
                    // line 216
                    echo "\t\t\t\t\t\t\t";
                }
                // line 217
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_compare", [], "any", true, true, false, 217) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_compare", [], "any", false, false, false, 217) == "1"))) {
                    // line 218
                    echo "\t\t\t\t\t\t\t\t<div class=\"compare\"><button class=\"btn btn-compare\" type=\"button\" title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 218);
                    echo "');\"><span class=\"btn-icon-compare\"></span></button></div>
\t\t\t\t\t\t\t";
                }
                // line 220
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_wishlist", [], "any", true, true, false, 220) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_wishlist", [], "any", false, false, false, 220) == "1"))) {
                    // line 221
                    echo "\t\t\t\t\t\t\t\t<div class=\"wishlist\"><button class=\"btn btn-wishlist\" type=\"button\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 221);
                    echo "');\"><span class=\"btn-icon-wishlist\"></span></button></div>
\t\t\t\t\t\t\t";
                }
                // line 223
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 226
            echo "\t\t\t\t</div>
      \t</div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "  </div>
  ";
        // line 232
        if ((array_key_exists("status_showmore", $context) && (($context["status_showmore"] ?? null) != 0))) {
            // line 233
            echo "\t";
            if (($context["nextPage"] ?? null)) {
                // line 234
                echo "\t\t<div class=\"showmore-pct";
                echo ($context["module"] ?? null);
                echo "-";
                echo ($context["idCategory"] ?? null);
                echo " box-showmore\"><span data-nextpage=\"";
                echo ($context["nextPage"] ?? null);
                echo "\" class=\"box-ajax-load pct-ajax-load";
                echo ($context["module"] ?? null);
                echo "-";
                echo ($context["idCategory"] ?? null);
                echo "\"><img src=\"catalog/view/theme/luxshop/image/showmore-icon.svg\" alt=\"showmore-icon\">";
                echo ($context["text_showmore"] ?? null);
                echo "</span></div>
\t";
            }
            // line 236
            echo "\t";
        }
        // line 237
        if ((array_key_exists("status_showmore", $context) && (($context["status_showmore"] ?? null) != 0))) {
            // line 238
            echo "<script>
\$(document).on('click', '.pct-ajax-load";
            // line 239
            echo ($context["module"] ?? null);
            echo "-";
            echo ($context["idCategory"] ?? null);
            echo "', function () {
\t\$.ajax({
\t\turl: 'index.php?route=extension/module/luxshop_product_categorytabs/ajaxLoadProduct',
\t\ttype: 'post',
\t\tdata: 'page=' + \$(this).attr('data-nextpage') + '&module=";
            // line 243
            echo ($context["module"] ?? null);
            echo "&module_id=";
            echo ($context["module_id"] ?? null);
            echo "&category_id=";
            echo ($context["idCategory"] ?? null);
            echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('.showmore-pct";
            // line 246
            echo ($context["module"] ?? null);
            echo "-";
            echo ($context["idCategory"] ?? null);
            echo " img').addClass('active-load');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('.showmore-pct";
            // line 249
            echo ($context["module"] ?? null);
            echo "-";
            echo ($context["idCategory"] ?? null);
            echo " img').removeClass('active-load');

\t\t},
\t\tsuccess:function(data){
\t\t\t\$data = \$(data);
\t\t\tvar \$products = \$data.find('.pct_grid";
            // line 254
            echo ($context["module"] ?? null);
            echo "_";
            echo ($context["idCategory"] ?? null);
            echo " > div.no-slider');
\t\t\tvar \$product_img = \$products.find('a > img');
\t\t\t\$product_img.each(function () {
\t\t\t\tif (\$(this).attr('data-additional-hover')) {
\t\t\t\t\tvar img_src = \$(this).attr('data-additional-hover');
\t\t\t\t\t\$(this).addClass('main-img');
\t\t\t\t\t\$(this).after('<img src=\"'+img_src+'\" class=\"additional-img-hover img-responsive\" title=\"'+\$(this).attr('alt')+'\" />');
\t\t\t\t}
\t\t\t});
\t\t\t\$('.pct_grid";
            // line 263
            echo ($context["module"] ?? null);
            echo "_";
            echo ($context["idCategory"] ?? null);
            echo "').append(\$products);
\t\t\t\$('.showmore-pct";
            // line 264
            echo ($context["module"] ?? null);
            echo "-";
            echo ($context["idCategory"] ?? null);
            echo "').replaceWith(\$data.find('.showmore-pct";
            echo ($context["module"] ?? null);
            echo "-";
            echo ($context["idCategory"] ?? null);
            echo "'));
\t\t\tsetTimeout(function () {
\t\t\t\$('a > img').each(function () {
\t\t\t\tif (\$( document ).width()>767) {
\t\t\t\t\tif (\$(this).attr('data-additional-hover')) {
\t\t\t\t\t\tvar img_src = \$(this).attr('data-additional-hover');
\t\t\t\t\t\t\$(this).addClass('main-img');
\t\t\t\t\t\t\$(this).after('<img src=\"'+img_src+'\" class=\"additional-img-hover img-responsive\" title=\"'+\$(this).attr('alt')+'\" />');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t\taddLsTimer();
\t\t\t},2000);
\t\t}
\t});
});
</script>
";
        }
        // line 282
        echo "<script>
\$('.pct_grid";
        // line 283
        echo ($context["module"] ?? null);
        echo "_";
        echo ($context["idCategory"] ?? null);
        echo "').each(function() {
\tif (\$(\".pct_grid";
        // line 284
        echo ($context["module"] ?? null);
        echo "_";
        echo ($context["idCategory"] ?? null);
        echo "\").parents(\"#column-left, #column-right, .position-no-owl\").length) {
\t\tvar items = \$(this).children('div.no-slider');
\t\titems.removeClass('col-xs-12 col-sm-6 col-md-4 col-lg-3');
\t\titems.addClass('col-xs-12 col-sm-12 col-md-12 col-lg-12');
\t}
});
</script>
</div>";
    }

    public function getTemplateName()
    {
        return "luxshop/template/extension/module/luxshop_product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  939 => 284,  933 => 283,  930 => 282,  903 => 264,  897 => 263,  883 => 254,  873 => 249,  865 => 246,  855 => 243,  846 => 239,  843 => 238,  841 => 237,  838 => 236,  822 => 234,  819 => 233,  817 => 232,  814 => 231,  804 => 226,  799 => 223,  791 => 221,  788 => 220,  780 => 218,  777 => 217,  774 => 216,  760 => 211,  757 => 210,  754 => 209,  751 => 208,  743 => 206,  741 => 205,  724 => 203,  721 => 202,  718 => 201,  715 => 200,  712 => 199,  695 => 191,  687 => 185,  684 => 184,  682 => 183,  679 => 182,  671 => 180,  668 => 179,  663 => 177,  655 => 176,  650 => 175,  644 => 173,  642 => 172,  631 => 171,  629 => 170,  626 => 169,  621 => 166,  611 => 164,  608 => 163,  602 => 162,  594 => 156,  586 => 150,  583 => 149,  578 => 148,  574 => 146,  571 => 145,  567 => 143,  561 => 142,  556 => 139,  550 => 138,  543 => 134,  535 => 133,  521 => 132,  518 => 131,  515 => 130,  500 => 126,  486 => 125,  482 => 123,  469 => 119,  455 => 118,  451 => 116,  448 => 115,  445 => 114,  441 => 113,  437 => 112,  431 => 111,  426 => 110,  424 => 109,  421 => 108,  416 => 105,  409 => 103,  402 => 99,  394 => 98,  380 => 97,  377 => 96,  374 => 95,  359 => 91,  345 => 90,  341 => 88,  328 => 84,  314 => 83,  310 => 81,  307 => 80,  304 => 79,  300 => 78,  296 => 77,  290 => 76,  285 => 75,  282 => 74,  277 => 71,  270 => 69,  263 => 67,  261 => 66,  250 => 65,  246 => 64,  242 => 63,  236 => 62,  230 => 61,  225 => 60,  222 => 59,  218 => 58,  215 => 57,  212 => 56,  206 => 54,  203 => 53,  197 => 51,  194 => 50,  191 => 49,  185 => 46,  181 => 44,  175 => 42,  172 => 41,  170 => 40,  164 => 39,  160 => 37,  154 => 35,  152 => 34,  134 => 33,  131 => 32,  124 => 29,  118 => 28,  115 => 27,  112 => 26,  105 => 23,  99 => 22,  96 => 21,  93 => 20,  86 => 17,  80 => 16,  77 => 15,  74 => 14,  67 => 11,  61 => 10,  58 => 9,  56 => 8,  50 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/extension/module/luxshop_product_list.twig", "");
    }
}
