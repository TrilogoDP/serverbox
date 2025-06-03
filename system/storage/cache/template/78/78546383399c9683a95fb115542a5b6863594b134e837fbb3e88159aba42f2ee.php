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

/* luxshop/template/extension/module/luxshop_latest_grid.twig */
class __TwigTemplate_3874071fa043b7ca545067dac4099e168c7eb2edcf47ddf9ba1def5fecbc17bb extends \Twig\Template
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
        echo "<div class=\"container-module\">
<div class=\"title-module\"><span>";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</span></div>
<div class=\"row-flex container-modules latest_gv latest_grid";
        // line 3
        echo ($context["module"] ?? null);
        echo "\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "   <div class=\"item no-slider f-col-xs-6 f-col-sm-6 f-col-md-4 f-col-lg-3 item-col-5\">
    <div class=\"product-thumb dflex flex-column h-100\">
      <div class=\"image\">
\t\t<div class=\"stickers-ns\">
\t\t\t";
            // line 9
            if (((($context["on_off_sticker_special"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 9))) {
                // line 10
                echo "\t\t\t\t<div class=\"sticker-ns special\">
\t\t\t\t\t";
                // line 11
                if ( !twig_test_empty(($context["config_change_icon_sticker_special"] ?? null))) {
                    echo "<i class=\"fa ";
                    echo ($context["config_change_icon_sticker_special"] ?? null);
                    echo " \"></i>";
                }
                // line 12
                echo "\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["text_sticker_special"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_special", [], "any", false, false, false, 12);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 15
            echo "\t\t\t";
            if (((($context["on_off_sticker_topbestseller"] ?? null) == "1") && (twig_get_attribute($this->env, $this->source, $context["product"], "top_bestsellers", [], "any", false, false, false, 15) >= ($context["config_limit_order_product_topbestseller"] ?? null)))) {
                // line 16
                echo "\t\t\t\t<div class=\"sticker-ns bestseller\">
\t\t\t\t\t";
                // line 17
                if ( !twig_test_empty(($context["config_change_icon_sticker_topbestseller"] ?? null))) {
                    echo "<i class=\"fa ";
                    echo ($context["config_change_icon_sticker_topbestseller"] ?? null);
                    echo " \"></i>";
                }
                // line 18
                echo "\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["text_sticker_topbestseller"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_topbestseller", [], "any", false, false, false, 18);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 21
            echo "\t\t\t";
            if (((($context["on_off_sticker_popular"] ?? null) == "1") && (twig_get_attribute($this->env, $this->source, $context["product"], "viewed", [], "any", false, false, false, 21) >= ($context["config_min_quantity_popular"] ?? null)))) {
                // line 22
                echo "\t\t\t\t<div class=\"sticker-ns popular\">
\t\t\t\t\t";
                // line 23
                if ( !twig_test_empty(($context["config_change_icon_sticker_popular"] ?? null))) {
                    echo "<i class=\"fa ";
                    echo ($context["config_change_icon_sticker_popular"] ?? null);
                    echo " \"></i>";
                }
                // line 24
                echo "\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["text_sticker_popular"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_popular", [], "any", false, false, false, 24);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 27
            echo "\t\t\t";
            if (((($context["on_off_sticker_newproduct"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "sticker_new_prod", [], "any", false, false, false, 27))) {
                // line 28
                echo "\t\t\t\t<div class=\"sticker-ns newproduct\">
\t\t\t\t\t";
                // line 29
                if ( !twig_test_empty(($context["config_change_icon_sticker_newproduct"] ?? null))) {
                    echo "<i class=\"fa ";
                    echo ($context["config_change_icon_sticker_newproduct"] ?? null);
                    echo "\"></i>";
                }
                // line 30
                echo "\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["text_sticker_newproduct"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_newproduct", [], "any", false, false, false, 30);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 33
            echo "\t\t</div>
\t\t<a href=\"";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 34);
            echo "\"><img decoding=\"async\" width=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 34);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 34);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "additional_image_hover", [], "any", false, false, false, 34)) {
                echo "data-additional-hover=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "additional_image_hover", [], "any", false, false, false, 34);
                echo "\"";
            }
            echo " loading=\"lazy\" src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 34);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34);
            echo "\" class=\"img-responsive\" /></a>
\t\t";
            // line 35
            if (((($context["show_special_timer_module"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 35))) {
                // line 36
                echo "\t\t<div class=\"action-timer\" data-date-end=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 36);
                echo "\"></div>
\t\t";
            }
            // line 38
            echo "\t  </div>
\t  <div class=\"caption dflex flex-column flex-grow-1\">
        <div class=\"product-name\"><a href=\"";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 40);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40);
            echo "</a></div>
        ";
            // line 41
            if (($context["show_stock_status"] ?? null)) {
                // line 42
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 42) <= 0)) {
                    // line 43
                    echo "\t\t\t\t<div class=\"stock-status outofstock\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 43);
                    echo "</div>
\t\t\t";
                } else {
                    // line 45
                    echo "\t\t\t\t<div class=\"stock-status instock\">
\t\t\t\t\t<svg width=\"11\" height=\"11\" viewBox=\"0 0 11 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7.68141 3.6147C7.89421 3.43872 8.20938 3.46857 8.38537 3.68137C8.54179 3.87052 8.53559 4.14057 8.38283 4.32184L8.3187 4.38532L4.40526 7.62168L2.72378 6.50696C2.49362 6.35438 2.43073 6.04411 2.58331 5.81395C2.71894 5.60936 2.97916 5.53694 3.19697 5.63054L3.27633 5.67348L4.33905 6.37801L7.68141 3.6147Z\" fill=\"#00BC52\"/><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11 5.5C11 2.46243 8.53757 0 5.5 0C2.46243 0 0 2.46243 0 5.5C0 8.53757 2.46243 11 5.5 11C8.53757 11 11 8.53757 11 5.5ZM1 5.5C1 3.01472 3.01472 1 5.5 1C7.98528 1 10 3.01472 10 5.5C10 7.98528 7.98528 10 5.5 10C3.01472 10 1 7.98528 1 5.5Z\" fill=\"#00BC52\"/></svg>
\t\t\t\t\t";
                    // line 47
                    echo ($context["text_instock"] ?? null);
                    echo "
\t\t\t\t</div>
\t\t\t";
                }
                // line 50
                echo "\t\t";
            }
            // line 51
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_model", [], "any", true, true, false, 51) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_model", [], "any", false, false, false, 51) == "1"))) {
                // line 52
                echo "\t\t\t<div class=\"product-model\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 52);
                echo "</div>
\t\t";
            }
            // line 54
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_description", [], "any", true, true, false, 54) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_description", [], "any", false, false, false, 54) == "1"))) {
                // line 55
                echo "        <div class=\"product-description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 55);
                echo "</div>
\t\t";
            }
            // line 57
            echo "\t\t";
            if (($context["show_options"] ?? null)) {
                // line 58
                echo "\t\t\t<div class=\"option featured-opt\">
\t\t\t\t";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 59));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 60
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 60) == "select")) {
                        // line 61
                        echo "\t\t\t\t\t\t<div class=\"form-group";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 61)) ? (" required") : (""));
                        echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 62
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 62);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 62);
                        echo "</label>
\t\t\t\t\t\t\t<select name=\"option[";
                        // line 63
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 63);
                        echo "]\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 63);
                        echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 64
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                        // line 65
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 65));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 66
                            echo "\t\t\t\t\t\t\t\t<option data-option-prefix=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 66);
                            echo "\" data-option-price=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 66);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 66);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 66);
                            echo "
\t\t\t\t\t\t\t\t";
                            // line 67
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 67)) {
                                // line 68
                                echo "\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 68);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 68);
                                echo ")
\t\t\t\t\t\t\t\t";
                            }
                            // line 70
                            echo "\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 72
                        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 75
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 75) == "radio")) {
                        // line 76
                        echo "\t\t\t\t\t<div class=\"form-group";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 76)) ? (" required") : (""));
                        echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 77
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 77);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 77);
                        echo "</label>
\t\t\t\t\t  <div id=\"input-option";
                        // line 78
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 78);
                        echo "\">
\t\t\t\t\t\t";
                        // line 79
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 79));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 80
                            echo "\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 80) || twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 80))) {
                                // line 81
                                echo "\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["option"], "status_color_type", [], "any", false, false, false, 81) == "1")) {
                                    // line 82
                                    echo "\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                    // line 84
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 84);
                                    echo "\" data-option-price=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 84);
                                    echo "\" type=\"radio\" name=\"option[";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 84);
                                    echo "]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 84);
                                    echo "\" id=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 84);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 84);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t<span for=\"";
                                    // line 85
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 85);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 85);
                                    echo "\" class=\"color-option\" data-toggle=\"tooltip\" title=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 85) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 85))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 85)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 85))) : (""));
                                    echo "\" style=\"background-color:";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 85);
                                    echo "\"></span>
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                                } else {
                                    // line 89
                                    echo "\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                    // line 91
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 91);
                                    echo "\" data-option-price=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 91);
                                    echo "\" type=\"radio\" name=\"option[";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 91);
                                    echo "]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 91);
                                    echo "\" id=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 91);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 91);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t<img for=\"input-value-";
                                    // line 92
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 92);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 92);
                                    echo "\" src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 92);
                                    echo "\" alt=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 92) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 92))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 92)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 92))) : (""));
                                    echo "\" class=\"img-thumbnail\" data-toggle=\"tooltip\" title=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 92) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 92))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 92)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 92))) : (""));
                                    echo "\" />
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                                }
                                // line 96
                                echo "\t\t\t\t\t\t";
                            } else {
                                // line 97
                                echo "\t\t\t\t\t\t\t<div class=\"radio-checbox-options\">
\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                // line 98
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 98);
                                echo "\" data-option-price=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 98);
                                echo "\" type=\"radio\" name=\"option[";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 98);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 98);
                                echo "\" id=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 98);
                                echo "_";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 98);
                                echo "\" />
\t\t\t\t\t\t\t\t<label data-toggle=\"tooltip\" title=\"";
                                // line 99
                                echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 99) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 99))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 99)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 99))) : (""));
                                echo "\" for=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 99);
                                echo "_";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 99);
                                echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"option-name\">";
                                // line 100
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 100);
                                echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                            }
                            // line 104
                            echo "
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 106
                        echo "\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 109
                    echo "
\t\t\t\t\t";
                    // line 110
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 110) == "checkbox")) {
                        // line 111
                        echo "\t\t\t\t\t<div class=\"form-group";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 111)) ? (" required") : (""));
                        echo "\">
\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                        // line 112
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 112);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 112);
                        echo "</label>
\t\t\t\t\t  <div id=\"input-option";
                        // line 113
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 113);
                        echo "\">
\t\t\t\t\t\t";
                        // line 114
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 114));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 115
                            echo "\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 115) || twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 115))) {
                                // line 116
                                echo "\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["option"], "status_color_type", [], "any", false, false, false, 116) == "1")) {
                                    // line 117
                                    echo "\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                    // line 119
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 119);
                                    echo "\" data-option-price=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 119);
                                    echo "\" type=\"checkbox\" name=\"option[";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 119);
                                    echo "][]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 119);
                                    echo "\" id=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 119);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 119);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t<span for=\"";
                                    // line 120
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 120);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 120);
                                    echo "\" class=\"color-option\" data-toggle=\"tooltip\" title=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 120) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 120))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 120)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 120))) : (""));
                                    echo "\" style=\"background-color:";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 120);
                                    echo "\"></span>
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                                } else {
                                    // line 124
                                    echo "\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                    // line 126
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 126);
                                    echo "\" data-option-price=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 126);
                                    echo "\" type=\"checkbox\" name=\"option[";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 126);
                                    echo "][]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 126);
                                    echo "\" id=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 126);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 126);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t<img for=\"";
                                    // line 127
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 127);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 127);
                                    echo "\" src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 127);
                                    echo "\" alt=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 127) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 127))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 127)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 127))) : (""));
                                    echo "\" class=\"img-thumbnail\" data-toggle=\"tooltip\" title=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 127) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 127))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 127)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 127))) : (""));
                                    echo "\" />
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                                }
                                // line 131
                                echo "\t\t\t\t\t\t\t";
                            } else {
                                // line 132
                                echo "\t\t\t\t\t\t\t\t<div class=\"radio-checbox-options\">
\t\t\t\t\t\t\t\t  <input data-option-prefix=\"";
                                // line 133
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 133);
                                echo "\" data-option-price=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 133);
                                echo "\" type=\"checkbox\" name=\"option[";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 133);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 133);
                                echo "\" id=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 133);
                                echo "_";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 133);
                                echo "\" />
\t\t\t\t\t\t\t\t\t<label data-toggle=\"tooltip\" title=\"";
                                // line 134
                                echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 134) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 134))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 134)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 134))) : (""));
                                echo "\" for=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 134);
                                echo "_";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 134);
                                echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"option-name\">";
                                // line 135
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 135);
                                echo "</span>
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                            }
                            // line 139
                            echo "\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 140
                        echo "\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 143
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "\t\t\t</div>
\t\t";
            }
            // line 146
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_rating", [], "any", true, true, false, 146) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_rating", [], "any", false, false, false, 146) == "1"))) {
                // line 147
                echo "\t\t<div class=\"rating\">
\t\t\t<span class=\"rating-box\">
\t\t\t\t";
                // line 149
                $context["i"] = 1;
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 150
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 150) < $context["i"])) {
                        // line 151
                        echo "\t\t\t\t\t\t<span class=\"product-rating-star\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"none\" viewBox=\"0 0 12 12\">
\t\t\t\t\t\t\t\t<path fill=\"#E9ECEF\" fill-rule=\"evenodd\" d=\"M6 10.283l-2.972 1.634c-.498.274-1.08-.168-.985-.748l.567-3.46-2.404-2.45c-.403-.41-.18-1.126.376-1.21l3.323-.506L5.391.396a.666.666 0 011.218 0l1.486 3.147 3.323.505c.557.085.78.8.376 1.21L9.39 7.709l.567 3.46c.095.58-.487 1.023-.985.749L6 10.283z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t";
                    } else {
                        // line 157
                        echo "\t\t\t\t\t\t<span class=\"product-rating-star\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"none\" viewBox=\"0 0 12 12\">
\t\t\t\t\t\t\t\t<path fill=\"#E5DB77\" fill-rule=\"evenodd\" d=\"M6 10.283l-2.972 1.634c-.498.274-1.08-.168-.985-.748l.567-3.46-2.404-2.45c-.403-.41-.18-1.126.376-1.21l3.323-.506L5.391.396a.666.666 0 011.218 0l1.486 3.147 3.323.505c.557.085.78.8.376 1.21L9.39 7.709l.567 3.46c.095.58-.487 1.023-.985.749L6 10.283z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t";
                    }
                    // line 163
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_quantity_reviews", [], "any", true, true, false, 164) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_quantity_reviews", [], "any", false, false, false, 164) == "1"))) {
                    // line 165
                    echo "\t\t\t\t<span class=\"quantity-reviews\"><a data-placement=\"right\"  data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_reviews_title"] ?? null);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 165);
                    echo "#tab-review\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 165);
                    echo "</a></span>
\t\t\t";
                }
                // line 167
                echo "\t\t\t</span>
\t\t</div>
\t\t";
            }
            // line 170
            echo "\t\t<div class=\"price-actions-box dflex flex-wrap mt-auto\">
\t\t\t";
            // line 171
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 171)) {
                // line 172
                echo "\t\t\t<div class=\"price";
                if (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_actions", [], "any", true, true, false, 172)) {
                    echo " mb-0";
                }
                echo "\" data-price-no-format=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price_no_format", [], "any", false, false, false, 172);
                echo "\" data-special-no-format=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special_no_format", [], "any", false, false, false, 172);
                echo "\">
\t\t\t\t  ";
                // line 173
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 173)) {
                    // line 174
                    echo "\t\t\t\t  <span class=\"price_no_format\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 174);
                    echo "</span>
\t\t\t\t  ";
                } else {
                    // line 176
                    echo "\t\t\t\t  <span class=\"price-old\"><span class=\"price_no_format\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 176);
                    echo "</span>
\t\t\t\t  ";
                    // line 177
                    if (((($context["on_off_percent_discount"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 177))) {
                        echo "<span class=\"sticker-ls-pd procent-skidka\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "skidka", [], "any", false, false, false, 177);
                        echo " %</span>";
                    }
                    echo "</span>
\t\t\t\t  <span class=\"price-new\"><span class=\"special_no_format\">";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 178);
                    echo "</span></span>
\t\t\t\t  ";
                }
                // line 180
                echo "\t\t\t\t  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 180)) {
                    // line 181
                    echo "\t\t\t\t  <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 181);
                    echo "</span>
\t\t\t\t  ";
                }
                // line 183
                echo "\t\t\t</div>
\t\t\t";
                // line 184
                if ( !twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_actions", [], "any", true, true, false, 184)) {
                    // line 185
                    echo "\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_btn_module", [], "any", true, true, false, 185) && (twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_btn_module", [], "any", false, false, false, 185) == "1"))) {
                        // line 186
                        echo "\t\t\t\t<div class=\"quantity_plus_minus\">
\t\t\t\t\t<span class=\"add-up add-action\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"5\" fill=\"none\" viewBox=\"0 0 7 5\">
\t\t\t\t\t\t\t<path fill=\"#000\" fill-rule=\"evenodd\" d=\"M3.826 2.144a.5.5 0 00-.707.004L.856 4.438a.5.5 0 01-.712-.704l2.264-2.289a1.5 1.5 0 012.121-.012L6.852 3.73a.5.5 0 11-.704.711L3.826 2.144z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<input type=\"text\" class=\"quantity-num form-control\" name=\"quantity\" value=\"";
                        // line 192
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 192);
                        echo "\" data-minimum=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 192);
                        echo "\"  ";
                        if (((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "any", true, true, false, 192) && (twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "any", false, false, false, 192) == "1")) && (twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 192) > 1))) {
                            echo "disabled";
                        }
                        echo ">
\t\t\t\t\t<span class=\"add-down add-action\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"5\" fill=\"none\" viewBox=\"0 0 7 5\">
\t\t\t\t\t\t\t<path fill=\"#000\" fill-rule=\"evenodd\" d=\"M3.174 2.856a.5.5 0 00.707-.004L6.144.562a.5.5 0 01.712.704L4.592 3.555a1.5 1.5 0 01-2.121.012L.148 1.27A.5.5 0 11.852.559l2.322 2.297z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t";
                    }
                    // line 200
                    echo "\t\t\t";
                }
                // line 201
                echo "\t\t\t";
            }
            // line 202
            echo "\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_actions", [], "any", true, true, false, 202)) {
                // line 203
                echo "\t\t\t<div class=\"actions w-100\">
\t\t\t\t<div class=\"cart\"><button class=\"btn btn-general\" type=\"button\" ";
                // line 204
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 204) <= 0) && ($context["disable_cart_button"] ?? null))) {
                    echo "disabled";
                } else {
                    echo "onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 204);
                    echo "',this)\"";
                }
                echo "><span class=\"icon-cart-add\"></span><span class=\"text-cart-add\">";
                if (((($context["change_text_cart_button_out_of_stock"] ?? null) == 1) && (twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 204) <= 0))) {
                    echo ($context["disable_cart_button_text"] ?? null);
                } else {
                    echo ($context["button_cart"] ?? null);
                }
                echo "</span></button></div>
\t\t\t\t<div class=\"addit-action\">
\t\t\t\t\t";
                // line 206
                if ((($context["config_on_off_latest_quickview"] ?? null) == "1")) {
                    // line 207
                    echo "\t\t\t\t\t\t<div class=\"quickview\"><button class=\"btn btn-quickview\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["config_quickview_btn_name"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["lang_id"] ?? null)] ?? null) : null), "config_quickview_btn_name", [], "any", false, false, false, 207);
                    echo "\" onclick=\"quickview_open(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 207);
                    echo ");\"><span class=\"btn-icon-quickview\"></span></button></div>
\t\t\t\t\t";
                }
                // line 209
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_fastorder", [], "any", true, true, false, 209) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_fastorder", [], "any", false, false, false, 209) == "1"))) {
                    // line 210
                    echo "\t\t\t\t\t";
                    if ((( !($context["disable_fastorder_button"] ?? null) && ((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 210) <= 0) || (twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 210) > 0))) || (($context["disable_fastorder_button"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 210) > 0)))) {
                        // line 211
                        echo "\t\t\t\t\t\t<div class=\"quick-order\">
\t\t\t\t\t\t<button class=\"btn btn-fastorder\" title=\"";
                        // line 212
                        echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["config_text_open_form_send_order"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["lang_id"] ?? null)] ?? null) : null), "config_text_open_form_send_order", [], "any", false, false, false, 212);
                        echo "\" type=\"button\" onclick=\"fastorder_open(";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 212);
                        echo ");\" ";
                        if (((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 212) <= 0) && ($context["disable_fastorder_button"] ?? null))) {
                            echo "disabled";
                        }
                        echo ">
\t\t\t\t\t\t\t<span class=\"btn-icon-fastorder\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                    }
                    // line 217
                    echo "\t\t\t\t\t";
                }
                // line 218
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_compare", [], "any", true, true, false, 218) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_compare", [], "any", false, false, false, 218) == "1"))) {
                    // line 219
                    echo "\t\t\t\t\t\t<div class=\"compare\"><button class=\"btn btn-compare\" type=\"button\" title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 219);
                    echo "');\"><span class=\"btn-icon-compare\"></span></button></div>
\t\t\t\t\t";
                }
                // line 221
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_wishlist", [], "any", true, true, false, 221) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_wishlist", [], "any", false, false, false, 221) == "1"))) {
                    // line 222
                    echo "\t\t\t\t\t\t<div class=\"wishlist\"><button class=\"btn btn-wishlist\" type=\"button\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 222);
                    echo "');\"><span class=\"btn-icon-wishlist\"></span></button></div>
\t\t\t\t\t";
                }
                // line 224
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 227
            echo "\t\t</div>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "  </div>
  ";
        // line 233
        if ((array_key_exists("status_showmore", $context) && (($context["status_showmore"] ?? null) != 0))) {
            // line 234
            echo "\t";
            if (($context["nextPage"] ?? null)) {
                // line 235
                echo "\t\t<div class=\"showmore-latest";
                echo ($context["module"] ?? null);
                echo " box-showmore\"><span data-nextpage=\"";
                echo ($context["nextPage"] ?? null);
                echo "\" class=\"latest-ajax-load";
                echo ($context["module"] ?? null);
                echo "\"><img src=\"catalog/view/theme/luxshop/image/showmore-icon.svg\" width=\"19\" height=\"18\" alt=\"\">";
                echo ($context["text_showmore"] ?? null);
                echo "</span></div>
\t";
            }
            // line 237
            echo "\t";
        }
        // line 238
        if ((array_key_exists("status_showmore", $context) && (($context["status_showmore"] ?? null) != 0))) {
            // line 239
            echo "<script>
\$(document).on('click', '.latest-ajax-load";
            // line 240
            echo ($context["module"] ?? null);
            echo "', function () {
\t\$.ajax({
\t\turl: 'index.php?route=extension/module/luxshop_latest_grid/getNextPage',
\t\ttype: 'post',
\t\tdata: 'page=' + \$(this).attr('data-nextpage') + '&module=";
            // line 244
            echo ($context["module"] ?? null);
            echo "&module_id=";
            echo ($context["module_id"] ?? null);
            echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('.showmore-latest";
            // line 247
            echo ($context["module"] ?? null);
            echo " span img').addClass('active-load');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('.showmore-latest";
            // line 250
            echo ($context["module"] ?? null);
            echo " span img').removeClass('active-load');
\t\t},
\t\tsuccess:function(data){
\t\t\t\$data = \$(data);
\t\t\tvar \$products = \$data.find('.latest_grid";
            // line 254
            echo ($context["module"] ?? null);
            echo " > div.item');
\t\t\tvar \$product_img = \$products.find('a > img');

\t\t\t\$product_img.each(function () {
\t\t\t\tif (\$(this).attr('data-additional-hover')) {
\t\t\t\t\tvar img_src = \$(this).attr('data-additional-hover');
\t\t\t\t\t\$(this).addClass('main-img');
\t\t\t\t\t\$(this).after('<img src=\"'+img_src+'\" class=\"additional-img-hover img-responsive\" title=\"'+\$(this).attr('alt')+'\" />');
\t\t\t\t}
\t\t\t});
\t\t\t\$('.latest_grid";
            // line 264
            echo ($context["module"] ?? null);
            echo "').append(\$products);
\t\t\t\$('.showmore-latest";
            // line 265
            echo ($context["module"] ?? null);
            echo "').replaceWith(\$data.find('.showmore-latest";
            echo ($context["module"] ?? null);
            echo "'));
\t\t\taddLsTimer();
\t\t}
\t});
});
</script>
";
        }
        // line 272
        echo "<script>
\$('.latest_grid";
        // line 273
        echo ($context["module"] ?? null);
        echo "').each(function() {
\tif (\$(\".latest_grid";
        // line 274
        echo ($context["module"] ?? null);
        echo "\").parents(\"#column-left, #column-right, .position-no-owl\").length) {
\t\tvar items = \$(this).children('div.item');
\t\titems.removeClass('col-xs-12 col-sm-6 col-md-4 col-lg-3');
\t\titems.addClass('col-xs-12 col-sm-12 col-md-12 col-lg-12');
\t}
});
</script>
</div>";
    }

    public function getTemplateName()
    {
        return "luxshop/template/extension/module/luxshop_latest_grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  908 => 274,  904 => 273,  901 => 272,  889 => 265,  885 => 264,  872 => 254,  865 => 250,  859 => 247,  851 => 244,  844 => 240,  841 => 239,  839 => 238,  836 => 237,  824 => 235,  821 => 234,  819 => 233,  816 => 232,  806 => 227,  801 => 224,  793 => 222,  790 => 221,  782 => 219,  779 => 218,  776 => 217,  762 => 212,  759 => 211,  756 => 210,  753 => 209,  745 => 207,  743 => 206,  726 => 204,  723 => 203,  720 => 202,  717 => 201,  714 => 200,  697 => 192,  689 => 186,  686 => 185,  684 => 184,  681 => 183,  673 => 181,  670 => 180,  665 => 178,  657 => 177,  652 => 176,  646 => 174,  644 => 173,  633 => 172,  631 => 171,  628 => 170,  623 => 167,  613 => 165,  610 => 164,  604 => 163,  596 => 157,  588 => 151,  585 => 150,  580 => 149,  576 => 147,  573 => 146,  569 => 144,  563 => 143,  558 => 140,  552 => 139,  545 => 135,  537 => 134,  523 => 133,  520 => 132,  517 => 131,  502 => 127,  488 => 126,  484 => 124,  471 => 120,  457 => 119,  453 => 117,  450 => 116,  447 => 115,  443 => 114,  439 => 113,  433 => 112,  428 => 111,  426 => 110,  423 => 109,  418 => 106,  411 => 104,  404 => 100,  396 => 99,  382 => 98,  379 => 97,  376 => 96,  361 => 92,  347 => 91,  343 => 89,  330 => 85,  316 => 84,  312 => 82,  309 => 81,  306 => 80,  302 => 79,  298 => 78,  292 => 77,  287 => 76,  284 => 75,  279 => 72,  272 => 70,  265 => 68,  263 => 67,  252 => 66,  248 => 65,  244 => 64,  238 => 63,  232 => 62,  227 => 61,  224 => 60,  220 => 59,  217 => 58,  214 => 57,  208 => 55,  205 => 54,  199 => 52,  196 => 51,  193 => 50,  187 => 47,  183 => 45,  177 => 43,  174 => 42,  172 => 41,  166 => 40,  162 => 38,  156 => 36,  154 => 35,  136 => 34,  133 => 33,  126 => 30,  120 => 29,  117 => 28,  114 => 27,  107 => 24,  101 => 23,  98 => 22,  95 => 21,  88 => 18,  82 => 17,  79 => 16,  76 => 15,  69 => 12,  63 => 11,  60 => 10,  58 => 9,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/extension/module/luxshop_latest_grid.twig", "");
    }
}
