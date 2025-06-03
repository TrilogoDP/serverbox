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

/* luxshop/template/extension/module/luxshop_productany.twig */
class __TwigTemplate_5de6eaf70b8e317dfad813e039cc9cf60112d2adfbcb4c1aa72ef8857153d294 extends \Twig\Template
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
        $context["gen_carousel_productany"] = twig_random($this->env, 10, 150);
        // line 2
        echo "<div class=\"container-module\">
<div class=\"title-module\"><span style=\"color:";
        // line 3
        echo ($context["config_title_color_text_productany"] ?? null);
        echo ";\">";
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["config_productany_title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["lang_id"] ?? null)] ?? null) : null), "config_productany_title", [], "any", false, false, false, 3);
        echo "</span></div>
<div class=\"product-slider\">
<div class=\"container-modules productany carousel_numb_productany";
        // line 5
        echo ($context["gen_carousel_productany"] ?? null);
        echo "\">
 ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "   <div class=\"item h-auto\">
    <div class=\"product-thumb dflex flex-column h-100\">
\t\t<div class=\"image\">
\t\t\t<div class=\"stickers-ns\">
\t\t\t\t";
            // line 11
            if (((($context["on_off_sticker_special"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 11))) {
                // line 12
                echo "\t\t\t\t\t<div class=\"sticker-ns special\">
\t\t\t\t\t\t";
                // line 13
                if ( !twig_test_empty(($context["config_change_icon_sticker_special"] ?? null))) {
                    echo "<i class=\"fa ";
                    echo ($context["config_change_icon_sticker_special"] ?? null);
                    echo " \"></i>";
                }
                // line 14
                echo "\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["text_sticker_special"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_special", [], "any", false, false, false, 14);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t";
            if (((($context["on_off_sticker_topbestseller"] ?? null) == "1") && (twig_get_attribute($this->env, $this->source, $context["product"], "top_bestsellers", [], "any", false, false, false, 17) >= ($context["config_limit_order_product_topbestseller"] ?? null)))) {
                // line 18
                echo "\t\t\t\t\t<div class=\"sticker-ns bestseller\">
\t\t\t\t\t\t";
                // line 19
                if ( !twig_test_empty(($context["config_change_icon_sticker_topbestseller"] ?? null))) {
                    echo "<i class=\"fa ";
                    echo ($context["config_change_icon_sticker_topbestseller"] ?? null);
                    echo " \"></i>";
                }
                // line 20
                echo "\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["text_sticker_topbestseller"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_topbestseller", [], "any", false, false, false, 20);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t";
            if (((($context["on_off_sticker_popular"] ?? null) == "1") && (twig_get_attribute($this->env, $this->source, $context["product"], "viewed", [], "any", false, false, false, 23) >= ($context["config_min_quantity_popular"] ?? null)))) {
                // line 24
                echo "\t\t\t\t\t<div class=\"sticker-ns popular\">
\t\t\t\t\t\t";
                // line 25
                if ( !twig_test_empty(($context["config_change_icon_sticker_popular"] ?? null))) {
                    echo "<i class=\"fa ";
                    echo ($context["config_change_icon_sticker_popular"] ?? null);
                    echo " \"></i>";
                }
                // line 26
                echo "\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["text_sticker_popular"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_popular", [], "any", false, false, false, 26);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t";
            if (((($context["on_off_sticker_newproduct"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "sticker_new_prod", [], "any", false, false, false, 29))) {
                // line 30
                echo "\t\t\t\t\t<div class=\"sticker-ns newproduct\">
\t\t\t\t\t\t";
                // line 31
                if ( !twig_test_empty(($context["config_change_icon_sticker_newproduct"] ?? null))) {
                    echo "<i class=\"fa ";
                    echo ($context["config_change_icon_sticker_newproduct"] ?? null);
                    echo "\"></i>";
                }
                // line 32
                echo "\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["text_sticker_newproduct"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_newproduct", [], "any", false, false, false, 32);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 35
            echo "\t\t\t</div>
\t\t\t<a href=\"";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 36);
            echo "\"><img decoding=\"async\" width=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 36);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 36);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "additional_image_hover", [], "any", false, false, false, 36)) {
                echo "data-additional-hover=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "additional_image_hover", [], "any", false, false, false, 36);
                echo "\"";
            }
            echo " loading=\"lazy\" src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 36);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
            echo "\" class=\"img-responsive\" /></a>
\t\t\t";
            // line 37
            if (((($context["status_timer_special"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 37))) {
                // line 38
                echo "\t\t\t\t<div class=\"action-timer\" data-date-end=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 38);
                echo "\"></div>
\t\t\t";
            }
            // line 40
            echo "\t  </div>
\t  <div class=\"caption dflex flex-column flex-grow-1\">
        <div class=\"product-name\"><a href=\"";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 42);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
            echo "</a></div>
        ";
            // line 43
            if (($context["show_stock_status"] ?? null)) {
                // line 44
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 44) <= 0)) {
                    // line 45
                    echo "\t\t\t\t<div class=\"stock-status outofstock\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 45);
                    echo "</div>
\t\t\t";
                } else {
                    // line 47
                    echo "\t\t\t\t<div class=\"stock-status instock\">
\t\t\t\t\t<svg width=\"11\" height=\"11\" viewBox=\"0 0 11 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7.68141 3.6147C7.89421 3.43872 8.20938 3.46857 8.38537 3.68137C8.54179 3.87052 8.53559 4.14057 8.38283 4.32184L8.3187 4.38532L4.40526 7.62168L2.72378 6.50696C2.49362 6.35438 2.43073 6.04411 2.58331 5.81395C2.71894 5.60936 2.97916 5.53694 3.19697 5.63054L3.27633 5.67348L4.33905 6.37801L7.68141 3.6147Z\" fill=\"#00BC52\"/><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11 5.5C11 2.46243 8.53757 0 5.5 0C2.46243 0 0 2.46243 0 5.5C0 8.53757 2.46243 11 5.5 11C8.53757 11 11 8.53757 11 5.5ZM1 5.5C1 3.01472 3.01472 1 5.5 1C7.98528 1 10 3.01472 10 5.5C10 7.98528 7.98528 10 5.5 10C3.01472 10 1 7.98528 1 5.5Z\" fill=\"#00BC52\"/></svg>
\t\t\t\t\t";
                    // line 49
                    echo ($context["text_instock"] ?? null);
                    echo "
\t\t\t\t</div>
\t\t\t";
                }
                // line 52
                echo "\t\t";
            }
            // line 53
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_model", [], "any", true, true, false, 53) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_model", [], "any", false, false, false, 53) == "1"))) {
                // line 54
                echo "\t\t\t<div class=\"product-model\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 54);
                echo "</div>
\t\t";
            }
            // line 56
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_description", [], "any", true, true, false, 56) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_description", [], "any", false, false, false, 56) == "1"))) {
                // line 57
                echo "        <div class=\"product-description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 57);
                echo "</div>
\t\t";
            }
            // line 59
            echo "\t\t";
            if (($context["show_options"] ?? null)) {
                // line 60
                echo "\t\t\t<div class=\"option featured-opt\">
\t\t\t\t";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 61));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 62
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 62) == "select")) {
                        // line 63
                        echo "\t\t\t\t\t\t<div class=\"form-group";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 63)) ? (" required") : (""));
                        echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 64
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 64);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 64);
                        echo "</label>
\t\t\t\t\t\t\t<select name=\"option[";
                        // line 65
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 65);
                        echo "]\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 65);
                        echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 66
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                        // line 67
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 67));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 68
                            echo "\t\t\t\t\t\t\t\t<option data-option-prefix=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 68);
                            echo "\" data-option-price=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 68);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 68);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 68);
                            echo "
\t\t\t\t\t\t\t\t";
                            // line 69
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 69)) {
                                // line 70
                                echo "\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 70);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 70);
                                echo ")
\t\t\t\t\t\t\t\t";
                            }
                            // line 72
                            echo "\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 74
                        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 77
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 77) == "radio")) {
                        // line 78
                        echo "\t\t\t\t\t<div class=\"form-group";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 78)) ? (" required") : (""));
                        echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 79
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 79);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 79);
                        echo "</label>
\t\t\t\t\t  <div id=\"input-option";
                        // line 80
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 80);
                        echo "\">
\t\t\t\t\t\t";
                        // line 81
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 81));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 82
                            echo "\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 82) || twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 82))) {
                                // line 83
                                echo "\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["option"], "status_color_type", [], "any", false, false, false, 83) == "1")) {
                                    // line 84
                                    echo "\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                    // line 86
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 86);
                                    echo "\" data-option-price=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 86);
                                    echo "\" type=\"radio\" name=\"option[";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 86);
                                    echo "]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 86);
                                    echo "\" id=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 86);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 86);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t<span for=\"";
                                    // line 87
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 87);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 87);
                                    echo "\" class=\"color-option\" data-toggle=\"tooltip\" title=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 87) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 87))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 87)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 87))) : (""));
                                    echo "\" style=\"background-color:";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 87);
                                    echo "\"></span>
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                                } else {
                                    // line 91
                                    echo "\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                    // line 93
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 93);
                                    echo "\" data-option-price=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 93);
                                    echo "\" type=\"radio\" name=\"option[";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 93);
                                    echo "]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 93);
                                    echo "\" id=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 93);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 93);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t<img for=\"input-value-";
                                    // line 94
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 94);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 94);
                                    echo "\" src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 94);
                                    echo "\" alt=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 94) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 94))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 94)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 94))) : (""));
                                    echo "\" class=\"img-thumbnail\" data-toggle=\"tooltip\" title=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 94) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 94))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 94)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 94))) : (""));
                                    echo "\" />
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                                }
                                // line 98
                                echo "\t\t\t\t\t\t";
                            } else {
                                // line 99
                                echo "\t\t\t\t\t\t\t<div class=\"radio-checbox-options\">
\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                // line 100
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 100);
                                echo "\" data-option-price=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 100);
                                echo "\" type=\"radio\" name=\"option[";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 100);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 100);
                                echo "\" id=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 100);
                                echo "_";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 100);
                                echo "\" />
\t\t\t\t\t\t\t\t<label data-toggle=\"tooltip\" title=\"";
                                // line 101
                                echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 101) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 101))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 101)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 101))) : (""));
                                echo "\" for=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 101);
                                echo "_";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 101);
                                echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"option-name\">";
                                // line 102
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 102);
                                echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                            }
                            // line 106
                            echo "
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 108
                        echo "\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 111
                    echo "
\t\t\t\t\t";
                    // line 112
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 112) == "checkbox")) {
                        // line 113
                        echo "\t\t\t\t\t<div class=\"form-group";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 113)) ? (" required") : (""));
                        echo "\">
\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                        // line 114
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 114);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 114);
                        echo "</label>
\t\t\t\t\t  <div id=\"input-option";
                        // line 115
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 115);
                        echo "\">
\t\t\t\t\t\t";
                        // line 116
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 116));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 117
                            echo "\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 117) || twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 117))) {
                                // line 118
                                echo "\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["option"], "status_color_type", [], "any", false, false, false, 118) == "1")) {
                                    // line 119
                                    echo "\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                    // line 121
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 121);
                                    echo "\" data-option-price=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 121);
                                    echo "\" type=\"checkbox\" name=\"option[";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 121);
                                    echo "][]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 121);
                                    echo "\" id=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 121);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 121);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t<span for=\"";
                                    // line 122
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 122);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 122);
                                    echo "\" class=\"color-option\" data-toggle=\"tooltip\" title=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 122) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 122))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 122)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 122))) : (""));
                                    echo "\" style=\"background-color:";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 122);
                                    echo "\"></span>
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                                } else {
                                    // line 126
                                    echo "\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input data-option-prefix=\"";
                                    // line 128
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 128);
                                    echo "\" data-option-price=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 128);
                                    echo "\" type=\"checkbox\" name=\"option[";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 128);
                                    echo "][]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 128);
                                    echo "\" id=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 128);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 128);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t<img for=\"";
                                    // line 129
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 129);
                                    echo "_";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 129);
                                    echo "\" src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 129);
                                    echo "\" alt=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 129) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 129)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129))) : (""));
                                    echo "\" class=\"img-thumbnail\" data-toggle=\"tooltip\" title=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 129) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 129)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129))) : (""));
                                    echo "\" />
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                                }
                                // line 133
                                echo "\t\t\t\t\t\t\t";
                            } else {
                                // line 134
                                echo "\t\t\t\t\t\t\t\t<div class=\"radio-checbox-options\">
\t\t\t\t\t\t\t\t  <input data-option-prefix=\"";
                                // line 135
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 135);
                                echo "\" data-option-price=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 135);
                                echo "\" type=\"checkbox\" name=\"option[";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 135);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 135);
                                echo "\" id=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 135);
                                echo "_";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 135);
                                echo "\" />
\t\t\t\t\t\t\t\t\t<label data-toggle=\"tooltip\" title=\"";
                                // line 136
                                echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 136) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 136))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 136)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 136))) : (""));
                                echo "\" for=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 136);
                                echo "_";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 136);
                                echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"option-name\">";
                                // line 137
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 137);
                                echo "</span>
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                            }
                            // line 141
                            echo "\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 142
                        echo "\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 145
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "\t\t\t</div>
\t\t";
            }
            // line 148
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_rating", [], "any", true, true, false, 148) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_rating", [], "any", false, false, false, 148) == "1"))) {
                // line 149
                echo "\t\t<div class=\"rating\">
\t\t\t<span class=\"rating-box\">
\t\t\t\t";
                // line 151
                $context["i"] = 1;
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 152
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 152) < $context["i"])) {
                        // line 153
                        echo "\t\t\t\t\t\t<span class=\"product-rating-star\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"none\" viewBox=\"0 0 12 12\">
\t\t\t\t\t\t\t\t<path fill=\"#E9ECEF\" fill-rule=\"evenodd\" d=\"M6 10.283l-2.972 1.634c-.498.274-1.08-.168-.985-.748l.567-3.46-2.404-2.45c-.403-.41-.18-1.126.376-1.21l3.323-.506L5.391.396a.666.666 0 011.218 0l1.486 3.147 3.323.505c.557.085.78.8.376 1.21L9.39 7.709l.567 3.46c.095.58-.487 1.023-.985.749L6 10.283z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t";
                    } else {
                        // line 159
                        echo "\t\t\t\t\t\t<span class=\"product-rating-star\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"none\" viewBox=\"0 0 12 12\">
\t\t\t\t\t\t\t\t<path fill=\"#E5DB77\" fill-rule=\"evenodd\" d=\"M6 10.283l-2.972 1.634c-.498.274-1.08-.168-.985-.748l.567-3.46-2.404-2.45c-.403-.41-.18-1.126.376-1.21l3.323-.506L5.391.396a.666.666 0 011.218 0l1.486 3.147 3.323.505c.557.085.78.8.376 1.21L9.39 7.709l.567 3.46c.095.58-.487 1.023-.985.749L6 10.283z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t";
                    }
                    // line 165
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_quantity_reviews", [], "any", true, true, false, 166) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_quantity_reviews", [], "any", false, false, false, 166) == "1"))) {
                    // line 167
                    echo "\t\t\t\t<span class=\"quantity-reviews\"><a data-placement=\"right\"  data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_reviews_title"] ?? null);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 167);
                    echo "#tab-review\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 167);
                    echo "</a></span>
\t\t\t";
                }
                // line 169
                echo "\t\t\t</span>
\t\t</div>
\t\t";
            }
            // line 172
            echo "\t\t<div class=\"price-actions-box dflex flex-wrap mt-auto\">
\t\t\t";
            // line 173
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 173)) {
                // line 174
                echo "\t\t\t<div class=\"price";
                if (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_actions", [], "any", true, true, false, 174)) {
                    echo " mb-0";
                }
                echo "\" data-price-no-format=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price_no_format", [], "any", false, false, false, 174);
                echo "\" data-special-no-format=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special_no_format", [], "any", false, false, false, 174);
                echo "\">
\t\t\t\t  ";
                // line 175
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 175)) {
                    // line 176
                    echo "\t\t\t\t  <span class=\"price_no_format\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 176);
                    echo "</span>
\t\t\t\t  ";
                } else {
                    // line 178
                    echo "\t\t\t\t  <span class=\"price-old\"><span class=\"price_no_format\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 178);
                    echo "</span>
\t\t\t\t  ";
                    // line 179
                    if (((($context["on_off_percent_discount"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 179))) {
                        echo "<span class=\"sticker-ls-pd procent-skidka\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "skidka", [], "any", false, false, false, 179);
                        echo " %</span>";
                    }
                    echo "</span>
\t\t\t\t  <span class=\"price-new\"><span class=\"special_no_format\">";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 180);
                    echo "</span></span>
\t\t\t\t  ";
                }
                // line 182
                echo "\t\t\t\t  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 182)) {
                    // line 183
                    echo "\t\t\t\t  <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 183);
                    echo "</span>
\t\t\t\t  ";
                }
                // line 185
                echo "\t\t\t</div>
\t\t\t";
                // line 186
                if ( !twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_actions", [], "any", true, true, false, 186)) {
                    // line 187
                    echo "\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_btn_module", [], "any", true, true, false, 187) && (twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_btn_module", [], "any", false, false, false, 187) == "1"))) {
                        // line 188
                        echo "\t\t\t\t<div class=\"quantity_plus_minus\">
\t\t\t\t\t<span class=\"add-up add-action\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"5\" fill=\"none\" viewBox=\"0 0 7 5\">
\t\t\t\t\t\t\t<path fill=\"#000\" fill-rule=\"evenodd\" d=\"M3.826 2.144a.5.5 0 00-.707.004L.856 4.438a.5.5 0 01-.712-.704l2.264-2.289a1.5 1.5 0 012.121-.012L6.852 3.73a.5.5 0 11-.704.711L3.826 2.144z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<input type=\"text\" class=\"quantity-num form-control\" name=\"quantity\" value=\"";
                        // line 194
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 194);
                        echo "\" data-minimum=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 194);
                        echo "\"  ";
                        if (((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "any", true, true, false, 194) && (twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "any", false, false, false, 194) == "1")) && (twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 194) > 1))) {
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
                    // line 202
                    echo "\t\t\t";
                }
                // line 203
                echo "\t\t\t";
            }
            // line 204
            echo "\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_actions", [], "any", true, true, false, 204)) {
                // line 205
                echo "\t\t\t<div class=\"actions w-100\">
\t\t\t\t<div class=\"cart\"><button class=\"btn btn-general\" type=\"button\" ";
                // line 206
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 206) <= 0) && ($context["disable_cart_button"] ?? null))) {
                    echo "disabled";
                } else {
                    echo "onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 206);
                    echo "',this)\"";
                }
                echo "><span class=\"icon-cart-add\"></span><span class=\"text-cart-add\">";
                if (((($context["change_text_cart_button_out_of_stock"] ?? null) == 1) && (twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 206) <= 0))) {
                    echo ($context["disable_cart_button_text"] ?? null);
                } else {
                    echo ($context["button_cart"] ?? null);
                }
                echo "</span></button></div>
\t\t\t\t<div class=\"addit-action\">
\t\t\t\t\t";
                // line 208
                if ((($context["config_on_off_special_quickview"] ?? null) == "1")) {
                    // line 209
                    echo "\t\t\t\t\t\t<div class=\"quickview\"><button class=\"btn btn-quickview\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["config_quickview_btn_name"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["lang_id"] ?? null)] ?? null) : null), "config_quickview_btn_name", [], "any", false, false, false, 209);
                    echo "\" onclick=\"quickview_open(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 209);
                    echo ");\"><span class=\"btn-icon-quickview\"></span></button></div>
\t\t\t\t\t";
                }
                // line 211
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_fastorder", [], "any", true, true, false, 211) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_fastorder", [], "any", false, false, false, 211) == "1"))) {
                    // line 212
                    echo "\t\t\t\t\t";
                    if ((( !($context["disable_fastorder_button"] ?? null) && ((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 212) <= 0) || (twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 212) > 0))) || (($context["disable_fastorder_button"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 212) > 0)))) {
                        // line 213
                        echo "\t\t\t\t\t\t<div class=\"quick-order\">
\t\t\t\t\t\t<button class=\"btn btn-fastorder\" title=\"";
                        // line 214
                        echo twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["config_text_open_form_send_order"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["lang_id"] ?? null)] ?? null) : null), "config_text_open_form_send_order", [], "any", false, false, false, 214);
                        echo "\" type=\"button\" onclick=\"fastorder_open(";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 214);
                        echo ");\" ";
                        if (((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 214) <= 0) && ($context["disable_fastorder_button"] ?? null))) {
                            echo "disabled";
                        }
                        echo ">
\t\t\t\t\t\t\t<span class=\"btn-icon-fastorder\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t  </div>
\t\t\t\t\t";
                    }
                    // line 219
                    echo "\t\t\t\t\t";
                }
                // line 220
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_compare", [], "any", true, true, false, 220) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_compare", [], "any", false, false, false, 220) == "1"))) {
                    // line 221
                    echo "\t\t\t\t\t\t<div class=\"compare\"><button class=\"btn btn-compare\" type=\"button\" title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 221);
                    echo "');\"><span class=\"btn-icon-compare\"></span></button></div>
\t\t\t\t\t";
                }
                // line 223
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_wishlist", [], "any", true, true, false, 223) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_wishlist", [], "any", false, false, false, 223) == "1"))) {
                    // line 224
                    echo "\t\t\t\t\t\t<div class=\"wishlist\"><button class=\"btn btn-wishlist\" type=\"button\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 224);
                    echo "');\"><span class=\"btn-icon-wishlist\"></span></button></div>
\t\t\t\t\t";
                }
                // line 226
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 229
            echo "\t\t</div>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "  </div>
  </div>
<script>
slickSliderModule(\".carousel_numb_productany";
        // line 237
        echo ($context["gen_carousel_productany"] ?? null);
        echo "\");
</script>
</div>";
    }

    public function getTemplateName()
    {
        return "luxshop/template/extension/module/luxshop_productany.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  826 => 237,  821 => 234,  811 => 229,  806 => 226,  798 => 224,  795 => 223,  787 => 221,  784 => 220,  781 => 219,  767 => 214,  764 => 213,  761 => 212,  758 => 211,  750 => 209,  748 => 208,  731 => 206,  728 => 205,  725 => 204,  722 => 203,  719 => 202,  702 => 194,  694 => 188,  691 => 187,  689 => 186,  686 => 185,  678 => 183,  675 => 182,  670 => 180,  662 => 179,  657 => 178,  651 => 176,  649 => 175,  638 => 174,  636 => 173,  633 => 172,  628 => 169,  618 => 167,  615 => 166,  609 => 165,  601 => 159,  593 => 153,  590 => 152,  585 => 151,  581 => 149,  578 => 148,  574 => 146,  568 => 145,  563 => 142,  557 => 141,  550 => 137,  542 => 136,  528 => 135,  525 => 134,  522 => 133,  507 => 129,  493 => 128,  489 => 126,  476 => 122,  462 => 121,  458 => 119,  455 => 118,  452 => 117,  448 => 116,  444 => 115,  438 => 114,  433 => 113,  431 => 112,  428 => 111,  423 => 108,  416 => 106,  409 => 102,  401 => 101,  387 => 100,  384 => 99,  381 => 98,  366 => 94,  352 => 93,  348 => 91,  335 => 87,  321 => 86,  317 => 84,  314 => 83,  311 => 82,  307 => 81,  303 => 80,  297 => 79,  292 => 78,  289 => 77,  284 => 74,  277 => 72,  270 => 70,  268 => 69,  257 => 68,  253 => 67,  249 => 66,  243 => 65,  237 => 64,  232 => 63,  229 => 62,  225 => 61,  222 => 60,  219 => 59,  213 => 57,  210 => 56,  204 => 54,  201 => 53,  198 => 52,  192 => 49,  188 => 47,  182 => 45,  179 => 44,  177 => 43,  171 => 42,  167 => 40,  161 => 38,  159 => 37,  141 => 36,  138 => 35,  131 => 32,  125 => 31,  122 => 30,  119 => 29,  112 => 26,  106 => 25,  103 => 24,  100 => 23,  93 => 20,  87 => 19,  84 => 18,  81 => 17,  74 => 14,  68 => 13,  65 => 12,  63 => 11,  57 => 7,  53 => 6,  49 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/extension/module/luxshop_productany.twig", "");
    }
}
