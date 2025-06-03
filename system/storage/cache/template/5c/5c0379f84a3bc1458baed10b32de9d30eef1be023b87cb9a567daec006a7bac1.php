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

/* luxshop/template/product/product.twig */
class __TwigTemplate_51a216cf6f42cc9cb2eae9825a8260a4a38b5610e4b04d813b4c44bafed67869 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"container\">
\t<div class=\"breadcrumb-box\">
\t\t<ul class=\"breadcrumb\">
\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 6
            echo "\t\t\t\t";
            if ((($context["i"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
                // line 7
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
                echo "\"><span>";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
                echo "</span></a></li>
\t\t\t\t";
            } else {
                // line 9
                echo "\t\t\t\t\t<li><span>";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                echo "</span></li>
\t\t\t\t";
            }
            // line 11
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t</ul>
\t</div>
\t<h1 class=\"h1-prod-name\">";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t<div class=\"row\">";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-4 col-md-6";
            // line 19
            echo "\t";
            $context["class_center_block"] = "col-sm-12 col-md-12";
            // line 20
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-8 col-md-9";
            // line 22
            echo "\t";
            $context["class_center_block"] = "col-sm-4 col-md-4";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 25
            echo "\t";
            $context["class_center_block"] = "col-sm-4 col-md-4";
            // line 26
            echo "    ";
        }
        // line 27
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t";
        // line 28
        echo ($context["content_top"] ?? null);
        echo "

\t\t\t\t";
        // line 30
        echo ($context["editorplus"] ?? null);
        echo "
\t\t\t
\t<div class=\"row-flex no-gutters\" id=\"product\">
        ";
        // line 33
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 34
            echo "        \t";
            $context["class"] = "col-sm-12 col-md-12";
            // line 35
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 36
            echo "\t\t\t";
            $context["class"] = "col-xs-12 col-md-5 col-lg-5";
            // line 37
            echo "        ";
        } else {
            // line 38
            echo "\t\t\t";
            $context["class"] = "col-xs-12 col-md-5 col-lg-5";
            // line 39
            echo "        ";
        }
        // line 40
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          \t";
        // line 41
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 42
            echo "\t\t\t\t<div class=\"image-block h-100\">
\t\t\t\t<div class=\"thumbnails ";
            // line 43
            if ((array_key_exists("fix_left_block", $context) && (($context["fix_left_block"] ?? null) == "1"))) {
                echo "sticky-left-block";
            }
            echo "\">
\t\t\t\t\t";
            // line 44
            if (($context["thumb"] ?? null)) {
                // line 45
                echo "\t\t\t\t\t\t<div class=\"general-image";
                if (($context["images"] ?? null)) {
                    echo " have-images";
                }
                echo "\">
\t\t\t\t\t\t\t<div id=\"image-box\">
\t\t\t\t\t\t\t<div class=\"stickers-ns\">
\t\t\t\t\t\t\t\t";
                // line 48
                if (((($context["on_off_sticker_special"] ?? null) == "1") && ($context["special"] ?? null))) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"sticker-ns special\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 50
                    if ( !twig_test_empty(($context["config_change_icon_sticker_special"] ?? null))) {
                        echo "<i class=\"fa ";
                        echo ($context["config_change_icon_sticker_special"] ?? null);
                        echo " \"></i>";
                    }
                    // line 51
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["text_sticker_special"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_special", [], "any", false, false, false, 51);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t\t";
                if (((($context["on_off_sticker_topbestseller"] ?? null) == "1") && (($context["top_bestsellers"] ?? null) >= ($context["config_limit_order_product_topbestseller"] ?? null)))) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"sticker-ns bestseller\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 56
                    if ( !twig_test_empty(($context["config_change_icon_sticker_topbestseller"] ?? null))) {
                        echo "<i class=\"fa ";
                        echo ($context["config_change_icon_sticker_topbestseller"] ?? null);
                        echo " \"></i>";
                    }
                    // line 57
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["text_sticker_topbestseller"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_topbestseller", [], "any", false, false, false, 57);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t\t\t\t\t";
                if (((($context["on_off_sticker_popular"] ?? null) == "1") && (($context["viewed"] ?? null) >= ($context["config_min_quantity_popular"] ?? null)))) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"sticker-ns popular\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 62
                    if ( !twig_test_empty(($context["config_change_icon_sticker_popular"] ?? null))) {
                        echo "<i class=\"fa ";
                        echo ($context["config_change_icon_sticker_popular"] ?? null);
                        echo " \"></i>";
                    }
                    // line 63
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["text_sticker_popular"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_popular", [], "any", false, false, false, 63);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t\t\t";
                if (((($context["on_off_sticker_newproduct"] ?? null) == "1") && ($context["sticker_new_prod"] ?? null))) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"sticker-ns newproduct\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 68
                    if ( !twig_test_empty(($context["config_change_icon_sticker_newproduct"] ?? null))) {
                        echo "<i class=\"fa ";
                        echo ($context["config_change_icon_sticker_newproduct"] ?? null);
                        echo "\"></i>";
                    }
                    // line 69
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["text_sticker_newproduct"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_newproduct", [], "any", false, false, false, 69);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"slider-main-img\">
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a data-fancybox=\"gallery\" class=\"main-image thumbnail\" href=\"";
                // line 75
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img data-num=\"0\" width=\"";
                // line 76
                echo ($context["thumb_width"] ?? null);
                echo "\" height=\"";
                echo ($context["thumb_height"] ?? null);
                echo "\" class=\"img-responsive\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  \t";
                // line 79
                if (($context["images"] ?? null)) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t";
                    $context["num_image_b"] = 1;
                    // line 81
                    echo "\t\t\t\t\t\t\t\t  \t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t<a data-fancybox=\"gallery\" class=\"thumbnail dop-img\" data-magnify-src=\"";
                        // line 83
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 83);
                        echo "\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 83);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img width=\"";
                        // line 84
                        echo ($context["thumb_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["thumb_height"] ?? null);
                        echo "\" data-num=\"";
                        echo ($context["num_image_b"] ?? null);
                        echo "\" src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb_hover", [], "any", false, false, false, 84);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t \t ";
                        // line 86
                        $context["num_image_b"] = (($context["num_image_b"] ?? null) + 1);
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "\t\t\t\t\t\t\t  \t";
                }
                // line 89
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$('.slider-main-img').slick({
\t\t\t\t\t\t\t\t\tdraggable: true,
\t\t\t\t\t\t\t\t\tswipeToSlide: false,
\t\t\t\t\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\t\t\t\t\tslidesToScroll: 1,
\t\t\t\t\t\t\t\t\tinfinite: false,
\t\t\t\t\t\t\t\t\tarrows: false,
\t\t\t\t\t\t\t\t\tinitialSlide: 0,
\t\t\t\t\t\t\t\t\tfade: false,
\t\t\t\t\t\t\t\t\tadaptiveHeight: false,
\t\t\t\t\t\t\t\t\tasNavFor: '.thumbnails .image-additional'
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 107
            echo "\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 108
                echo "\t\t\t\t\t\t<div class=\"image-additional\">
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a class=\"thumbnail\" href=\"javascript:void(0)\" title=\"";
                // line 110
                echo ($context["heading_title"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t<img width=\"";
                // line 111
                echo ($context["ia_width"] ?? null);
                echo "\" height=\"";
                echo ($context["ia_height"] ?? null);
                echo "\" data-num=\"0\" src=\"";
                echo ($context["thumb_min"] ?? null);
                echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 114
                $context["num_image"] = 1;
                // line 115
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a class=\"thumbnail\" href=\"javascript:void(0)\" title=\"";
                    // line 117
                    echo ($context["heading_title"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t<img width=\"";
                    // line 118
                    echo ($context["ia_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["ia_height"] ?? null);
                    echo "\" data-num=\"";
                    echo ($context["num_image"] ?? null);
                    echo "\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 118);
                    echo "\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 120
                    $context["num_image"] = (($context["num_image"] ?? null) + 1);
                    // line 121
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t<script>
\t\t\t\t\t\t\$(\".thumbnails .image-additional\").slick({
\t\t\t\t\t\t\tvertical:false,
\t\t\t\t\t\t\tprevArrow: \"<div class='btn-slick-prev-h'><svg xmlns='http://www.w3.org/2000/svg' width='8' height='14' fill='none' viewBox='0 0 8 14'><path stroke='#000' stroke-linecap='round' d='M6 12L1.711 7.76a1 1 0 01-.008-1.415L6 2'/></svg></div>\",
\t\t\t\t\t\t\tnextArrow: \"<div class='btn-slick-next-h'><svg xmlns='http://www.w3.org/2000/svg' width='8' height='14' fill='none' viewBox='0 0 8 14'><path stroke='#000' stroke-linecap='round' d='M2 2l4.289 4.24a1 1 0 01.008 1.415L2 12'/></svg></div>\",
\t\t\t\t\t\t\tfocusOnSelect: true,
\t\t\t\t\t\t\tasNavFor: '.slider-main-img',
\t\t\t\t\t\t\tadaptiveHeight: true,
\t\t\t\t\t\t\tinfinite: false,
\t\t\t\t\t\t\tslidesToShow: 5,
\t\t\t\t\t\t});
\t\t\t\t\t  </script>
\t\t\t\t\t";
            }
            // line 136
            echo "\t\t\t\t</div>
\t\t\t\t</div>
          \t";
        }
        // line 139
        echo "        </div>
\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t<div class=\"center-inf-block h-100\">
\t\t\t<div class=\"info-model\">";
        // line 142
        echo ($context["text_model"] ?? null);
        echo " <span>";
        echo ($context["model"] ?? null);
        echo "</span></div>
\t\t\t";
        // line 143
        if (($context["manufacturer"] ?? null)) {
            // line 144
            echo "\t\t\t\t<div class=\"info-manufacturer\">";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\"><span>";
            echo ($context["manufacturer"] ?? null);
            echo "</span></a></div>
\t\t\t";
        }
        // line 146
        echo "\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 147
            echo "\t\t\t\t<div class=\"rating info-rating\">
\t\t\t\t\t<span class=\"rating-box\">
\t\t\t\t\t\t";
            // line 149
            $context["i"] = 1;
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 150
                echo "\t\t\t\t\t\t\t";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 151
                    echo "\t\t\t\t\t\t\t\t<span class=\"product-rating-star\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"none\" viewBox=\"0 0 12 12\">
\t\t\t\t\t\t\t\t\t\t<path fill=\"#E9ECEF\" fill-rule=\"evenodd\" d=\"M6 10.283l-2.972 1.634c-.498.274-1.08-.168-.985-.748l.567-3.46-2.404-2.45c-.403-.41-.18-1.126.376-1.21l3.323-.506L5.391.396a.666.666 0 011.218 0l1.486 3.147 3.323.505c.557.085.78.8.376 1.21L9.39 7.709l.567 3.46c.095.58-.487 1.023-.985.749L6 10.283z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                } else {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t<span class=\"product-rating-star\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"none\" viewBox=\"0 0 12 12\">
\t\t\t\t\t\t\t\t\t\t<path fill=\"#E5DB77\" fill-rule=\"evenodd\" d=\"M6 10.283l-2.972 1.634c-.498.274-1.08-.168-.985-.748l.567-3.46-2.404-2.45c-.403-.41-.18-1.126.376-1.21l3.323-.506L5.391.396a.666.666 0 011.218 0l1.486 3.147 3.323.505c.557.085.78.8.376 1.21L9.39 7.709l.567 3.46c.095.58-.487 1.023-.985.749L6 10.283z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                }
                // line 163
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "\t\t\t\t\t\t<span class=\"quantity-reviews\"><a href=\"javascript:void(0)\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_reviews_title"] ?? null);
            echo "\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click');\$('html, body').animate({ scrollTop: \$('a[href=\\'#tab-review\\']').offset().top - 5}, 250); return false;\">";
            echo ($context["reviewCount"] ?? null);
            echo "</a></span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t";
        }
        // line 168
        echo "\t\t\t";
        if (((array_key_exists("short_description_status", $context) && (($context["short_description_status"] ?? null) == "1")) &&  !twig_test_empty(($context["short_description"] ?? null)))) {
            // line 169
            echo "\t\t\t\t<div class=\"short-desc-b ";
            if ((array_key_exists("hide_short_desc_mob", $context) && (($context["hide_short_desc_mob"] ?? null) == "1"))) {
                echo "hidden-xs";
            }
            echo "\">
\t\t\t\t\t<div class=\"title_short_description\">";
            // line 170
            echo ($context["text_short_description"] ?? null);
            echo "</div>
\t\t\t\t\t<div class=\"text_short_description\">";
            // line 171
            echo (twig_slice($this->env, strip_tags(($context["description"] ?? null)), 0, 220) . "...");
            echo "</div>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"redmore-link\" onclick=\"goTab('#tab-description'); return false;\">";
            // line 172
            echo ($context["text_readmore_desc"] ?? null);
            echo "</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 175
        echo "\t\t\t";
        if ((array_key_exists("short_attribut_status", $context) && (($context["short_attribut_status"] ?? null) == "1"))) {
            // line 176
            echo "\t\t\t\t";
            if (($context["attribute_groups"] ?? null)) {
                // line 177
                echo "\t\t\t\t\t<div class=\"short-attr-b ";
                if ((array_key_exists("hide_short_attr_mob", $context) && (($context["hide_short_attr_mob"] ?? null) == "1"))) {
                    echo "hidden-xs";
                }
                echo "\">
\t\t\t\t\t<div class=\"title_short_attribute\">";
                // line 178
                echo ($context["text_short_attribute"] ?? null);
                echo "</div>
\t\t\t\t\t<div class=\"short-attributes-groups\">
\t\t\t\t\t\t";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["attribute_group"]) {
                    // line 181
                    echo "\t\t\t\t\t\t\t";
                    if (($context["key"] < ($context["short_attribute_group_product"] ?? null))) {
                        // line 182
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 182));
                        foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                            // line 183
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (($context["key"] < ($context["short_attribute_group_product_item"] ?? null))) {
                                // line 184
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"short-attribute\">
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 185
                                if ((array_key_exists("short_attribute_show_name", $context) && (($context["short_attribute_show_name"] ?? null) == "1"))) {
                                    // line 186
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"attr-name\"><span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 186);
                                    echo " - </span></span>
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 188
                                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"attr-text\"><span>";
                                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 188);
                                echo "</span></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 191
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 192
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 193
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"redmore-link\" onclick=\"goTab('#tab-specification'); return false;\">";
                // line 195
                echo ($context["text_see_all_attribute"] ?? null);
                echo "</a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 198
            echo "\t\t\t";
        }
        // line 199
        echo "\t\t\t";
        if (($context["options"] ?? null)) {
            // line 200
            echo "\t\t\t<div class=\"options\">
\t\t\t";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 202
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 202) == "select")) {
                    // line 203
                    echo "\t\t\t\t<div class=\"form-group";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 203)) ? (" required") : (""));
                    echo "\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 204);
                    echo "</label>
\t\t\t\t\t<select name=\"option[";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"\">";
                    // line 206
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t";
                    // line 207
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 207));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 208
                        echo "\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 208);
                        echo "\" data-points=\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "points_value", [], "any", true, true, false, 208)) ? (twig_get_attribute($this->env, $this->source, $context["option_value"], "points_value", [], "any", false, false, false, 208)) : (0));
                        echo "\" data-prefix=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 208);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 208);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 208);
                        echo "
\t\t\t\t\t\t";
                        // line 209
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 209)) {
                            // line 210
                            echo "\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 210);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 210);
                            echo ")
\t\t\t\t\t\t";
                        }
                        // line 212
                        echo "\t\t\t\t\t\t</option>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 214
                    echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 217
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 217) == "radio")) {
                    // line 218
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 218)) ? (" required") : (""));
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 219);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 220
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 221
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 221));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 222
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 222) || twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 222))) {
                            // line 223
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "status_color_type", [], "any", false, false, false, 223) == "1")) {
                                // line 224
                                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                                // line 226
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 226);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 226);
                                echo "\" data-points=\"";
                                echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "points_value", [], "any", true, true, false, 226)) ? (twig_get_attribute($this->env, $this->source, $context["option_value"], "points_value", [], "any", false, false, false, 226)) : (0));
                                echo "\" data-prefix=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 226);
                                echo "\" data-price=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 226);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"color-option\" ";
                                // line 227
                                if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["option_value"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["price"] ?? null) : null)) {
                                    echo "data-toggle=\"tooltip\" title=\"";
                                    echo (twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 227) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 227));
                                    echo "\"";
                                }
                                echo " style=\"background-color:";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 227);
                                echo "\"></span>
\t\t\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 231
                                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                                // line 233
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 233);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 233);
                                echo "\" data-points=\"";
                                echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "points_value", [], "any", true, true, false, 233)) ? (twig_get_attribute($this->env, $this->source, $context["option_value"], "points_value", [], "any", false, false, false, 233)) : (0));
                                echo "\" data-prefix=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 233);
                                echo "\" data-price=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 233);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<img onclick=\"optionimage('";
                                // line 234
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image_click", [], "any", false, false, false, 234);
                                echo "','";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image_zoom", [], "any", false, false, false, 234);
                                echo "','";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image_thumb", [], "any", false, false, false, 234);
                                echo "')\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 234);
                                echo "\" alt=\"";
                                echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 234) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 234))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 234)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 234))) : (""));
                                echo "\" class=\"img-thumbnail\" ";
                                if ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["option_value"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["price"] ?? null) : null)) {
                                    echo "data-toggle=\"tooltip\" title=\"";
                                    echo (twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 234) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 234));
                                    echo "\"";
                                }
                                echo " />
\t\t\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 238
                            echo "\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 239
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"radio-checbox-options\">
\t\t\t\t\t\t\t\t\t\t  <input type=\"radio\" name=\"option[";
                            // line 240
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 240);
                            echo "\" data-points=\"";
                            echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "points_value", [], "any", true, true, false, 240)) ? (twig_get_attribute($this->env, $this->source, $context["option_value"], "points_value", [], "any", false, false, false, 240)) : (0));
                            echo "\" data-prefix=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 240);
                            echo "\" data-price=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 240);
                            echo "\" id=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                            echo "_";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 240);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t<label ";
                            // line 241
                            if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["option_value"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["price"] ?? null) : null)) {
                                echo "data-toggle=\"tooltip\" title=\"";
                                echo (twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 241) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 241));
                                echo "\"";
                            }
                            echo " for=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 241);
                            echo "_";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 241);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"option-name\">";
                            // line 242
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 242);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 246
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 247
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 250
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 250) == "checkbox")) {
                    // line 251
                    echo "\t\t\t\t\t<div class=\"form-group";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 251)) ? (" required") : (""));
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 252
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 252);
                    echo "</label>
\t\t\t\t\t\t<div id=\"input-option";
                    // line 253
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 253);
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 254
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 254));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 255
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 255) || twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 255))) {
                            // line 256
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "status_color_type", [], "any", false, false, false, 256) == "1")) {
                                // line 257
                                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                                // line 259
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 259);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 259);
                                echo "\" data-points=\"";
                                echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "points_value", [], "any", true, true, false, 259)) ? (twig_get_attribute($this->env, $this->source, $context["option_value"], "points_value", [], "any", false, false, false, 259)) : (0));
                                echo "\" data-prefix=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 259);
                                echo "\" data-price=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 259);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"color-option\" ";
                                // line 260
                                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["option_value"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["price"] ?? null) : null)) {
                                    echo "data-toggle=\"tooltip\" title=\"";
                                    echo (twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 260) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 260));
                                    echo "\"";
                                }
                                echo " style=\"background-color:";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "color", [], "any", false, false, false, 260);
                                echo "\"></span>
\t\t\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 264
                                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-radio\">
\t\t\t\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                                // line 266
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 266);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 266);
                                echo "\" data-points=\"";
                                echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "points_value", [], "any", true, true, false, 266)) ? (twig_get_attribute($this->env, $this->source, $context["option_value"], "points_value", [], "any", false, false, false, 266)) : (0));
                                echo "\" data-prefix=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 266);
                                echo "\" data-price=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 266);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<img onclick=\"optionimage('";
                                // line 267
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image_click", [], "any", false, false, false, 267);
                                echo "','";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image_zoom", [], "any", false, false, false, 267);
                                echo "','";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image_thumb", [], "any", false, false, false, 267);
                                echo "')\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 267);
                                echo "\" alt=\"";
                                echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 267) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 267))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 267)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 267))) : (""));
                                echo "\" class=\"img-thumbnail\" ";
                                if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["option_value"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["price"] ?? null) : null)) {
                                    echo "data-toggle=\"tooltip\" title=\"";
                                    echo (twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 267) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 267));
                                    echo "\"";
                                }
                                echo " />
\t\t\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 271
                            echo "\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 272
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"radio-checbox-options\">
\t\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" name=\"option[";
                            // line 273
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 273);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 273);
                            echo "\" data-points=\"";
                            echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "points_value", [], "any", true, true, false, 273)) ? (twig_get_attribute($this->env, $this->source, $context["option_value"], "points_value", [], "any", false, false, false, 273)) : (0));
                            echo "\" data-prefix=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 273);
                            echo "\" data-price=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 273);
                            echo "\" id=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 273);
                            echo "_";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 273);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t<label ";
                            // line 274
                            if ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["option_value"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["price"] ?? null) : null)) {
                                echo "data-toggle=\"tooltip\" title=\"";
                                echo (twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 274) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 274));
                                echo "\"";
                            }
                            echo " for=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 274);
                            echo "_";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 274);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"option-name\">";
                            // line 275
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 275);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 279
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 280
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 283
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 283) == "text")) {
                    // line 284
                    echo "\t\t\t\t<div class=\"form-group";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 284)) ? (" required") : (""));
                    echo "\">
\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 285
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 285);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 285);
                    echo "</label>
\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 286
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 286);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 286);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 286);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 286);
                    echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 289
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 289) == "textarea")) {
                    // line 290
                    echo "\t\t\t\t<div class=\"form-group";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 290)) ? (" required") : (""));
                    echo "\">
\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 291
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 291);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 291);
                    echo "</label>
\t\t\t\t  <textarea name=\"option[";
                    // line 292
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 292);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 292);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 292);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 292);
                    echo "</textarea>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 295
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 295) == "file")) {
                    // line 296
                    echo "\t\t\t\t<div class=\"form-group";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 296)) ? (" required") : (""));
                    echo "\">
\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 297
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 297);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 297);
                    echo "</label>
\t\t\t\t  <button type=\"button\" id=\"button-upload";
                    // line 298
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 298);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t  <input type=\"hidden\" name=\"option[";
                    // line 299
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 299);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 299);
                    echo "\" />
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 302
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 302) == "date")) {
                    // line 303
                    echo "\t\t\t\t<div class=\"form-group";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 303)) ? (" required") : (""));
                    echo "\">
\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 304
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 304);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 304);
                    echo "</label>
\t\t\t\t  <div class=\"input-group date\">
\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 306
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 306);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 306);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 306);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t</span></div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 312
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 312) == "datetime")) {
                    // line 313
                    echo "\t\t\t\t<div class=\"form-group";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 313)) ? (" required") : (""));
                    echo "\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 314
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 314);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 314);
                    echo "</label>
\t\t\t\t  <div class=\"input-group datetime\">
\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 316
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 316);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 316);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 316);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t</span></div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 322
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 322) == "time")) {
                    // line 323
                    echo "\t\t\t\t<div class=\"form-group";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 323)) ? (" required") : (""));
                    echo "\">
\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 324
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 324);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 324);
                    echo "</label>
\t\t\t\t  <div class=\"input-group time\">
\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 326
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 326);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 326);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 326);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t</span></div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 332
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 333
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 335
        echo "
\t\t\t";
        // line 336
        if ((($context["config_status_delivery_options"] ?? null) != "0")) {
            // line 337
            echo "\t\t\t\t<div class=\"custom-block-products\">
\t\t\t\t\t";
            // line 338
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["config_delivery_options_title"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["lang_id"] ?? null)] ?? null) : null), "config_delivery_options_title", [], "any", false, false, false, 338))) {
                // line 339
                echo "\t\t\t\t\t<div class=\"title-module\"><span>";
                echo twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["config_delivery_options_title"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["lang_id"] ?? null)] ?? null) : null), "config_delivery_options_title", [], "any", false, false, false, 339);
                echo "</span></div>
\t\t\t\t\t";
            }
            // line 341
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
            // line 342
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banner_delivery_block"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["delivery_block"]) {
                // line 343
                echo "\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"custom-block-product\" ";
                // line 344
                if (((twig_get_attribute($this->env, $this->source, $context["delivery_block"], "popup", [], "any", false, false, false, 344) == "1") && ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, $context["delivery_block"], "link", [], "any", false, false, false, 344)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[($context["lang_id"] ?? null)] ?? null) : null) != ""))) {
                    echo " onclick=\"banner_link_open('";
                    echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, $context["delivery_block"], "link", [], "any", false, false, false, 344)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["lang_id"] ?? null)] ?? null) : null);
                    echo "')\" ";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["delivery_block"], "popup", [], "any", false, false, false, 344) == "0") && ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, $context["delivery_block"], "link", [], "any", false, false, false, 344)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[($context["lang_id"] ?? null)] ?? null) : null) != ""))) {
                    echo "onclick=\"location='";
                    echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = twig_get_attribute($this->env, $this->source, $context["delivery_block"], "link", [], "any", false, false, false, 344)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["lang_id"] ?? null)] ?? null) : null);
                    echo "'\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 346
                echo twig_get_attribute($this->env, $this->source, $context["delivery_block"], "image", [], "any", false, false, false, 346);
                echo "\" alt=\"";
                echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["delivery_block"], "title", [], "any", false, false, false, 346)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[($context["lang_id"] ?? null)] ?? null) : null);
                echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-block-title\">";
                // line 349
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["delivery_block"], "title", [], "any", false, false, false, 349)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[($context["lang_id"] ?? null)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-block-desc\">";
                // line 350
                echo twig_get_attribute($this->env, $this->source, $context["delivery_block"], "description", [], "any", false, false, false, 350);
                echo "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delivery_block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 355
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 358
        echo "\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 359
            echo "\t\t\t<h3>";
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t<div class=\"form-group required\">
\t\t\t  <select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t<option value=\"\">";
            // line 362
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t";
            // line 363
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 364
                echo "\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 364);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 364);
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 366
            echo "\t\t\t  </select>
\t\t\t  <div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t</div>
\t\t\t";
        }
        // line 370
        echo "\t\t</div>
\t\t</div>
\t\t<div class=\"right-block col-xs-12 col-sm-6 col-md-3 col-lg-3\">
\t\t\t<div id=\"fix_right_block\">
\t\t\t\t<div class=\"panel-rigth-block\">
\t\t\t\t";
        // line 375
        if ((array_key_exists("ns_show_nextprev_prod", $context) && (($context["ns_show_nextprev_prod"] ?? null) == 1))) {
            // line 376
            echo "\t\t\t\t<div class=\"mb-20\">
\t\t\t\t\t<div id=\"next-prev-box\">";
            // line 377
            echo ($context["nextprevproduct"] ?? null);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 380
        echo "\t\t\t\t";
        if ((($context["ns_on_off_countdown_product"] ?? null) != "0")) {
            // line 381
            echo "\t\t\t\t\t";
            if (($context["special"] ?? null)) {
                // line 382
                echo "\t\t\t\t\t\t";
                if ((($context["special_date_end"] ?? null) != "")) {
                    // line 383
                    echo "\t\t\t\t\t\t\t<div class=\"special-countdown action-timer\" data-date-end=\"";
                    echo ($context["special_date_end"] ?? null);
                    echo "\"></div>
\t\t\t\t\t\t";
                }
                // line 385
                echo "\t\t\t\t\t";
            }
            // line 386
            echo "\t\t\t\t";
        }
        // line 387
        echo "\t\t\t\t<div class=\"info-product-stock\">
\t\t\t\t";
        // line 388
        if ((($context["stock_quantity_count"] ?? null) > 0)) {
            // line 389
            echo "\t\t\t\t\t<span class=\"stock_status_success\"><svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M9.77616 4.60058C10.047 4.3766 10.4481 4.41458 10.6721 4.68542C10.8712 4.92617 10.8633 5.26986 10.6689 5.50057L10.5873 5.58137L5.60652 9.70036L3.46645 8.28164C3.17352 8.08744 3.09348 7.69255 3.28768 7.39962C3.46029 7.13923 3.79149 7.04706 4.06869 7.16618L4.16969 7.22084L5.52226 8.11752L9.77616 4.60058Z\" fill=\"#00BC52\"></path><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14C10.866 14 14 10.866 14 7ZM1.27273 7C1.27273 3.83691 3.83691 1.27273 7 1.27273C10.1631 1.27273 12.7273 3.83691 12.7273 7C12.7273 10.1631 10.1631 12.7273 7 12.7273C3.83691 12.7273 1.27273 10.1631 1.27273 7Z\" fill=\"#00BC52\"></path></svg>";
            echo ($context["stock_status"] ?? null);
            echo "</span>
\t\t\t\t\t";
            // line 390
            if ((($context["stock_quantity"] ?? null) != "not_display")) {
                echo "<span class=\"stock-quantity_success\">";
                echo ($context["stock_quantity"] ?? null);
                echo "</span>";
            }
            // line 391
            echo "\t\t\t\t";
        } else {
            // line 392
            echo "\t\t\t\t\t<span class=\"qty-not-in-stock\">";
            echo ($context["stock_status"] ?? null);
            echo "</span>
\t\t\t\t\t";
            // line 393
            if ((($context["stock_quantity"] ?? null) != "not_display")) {
                echo "<span class=\"qty-not-in-stock-count\">";
                echo ($context["stock_quantity"] ?? null);
                echo "</span>";
            }
            // line 394
            echo "\t\t\t\t";
        }
        // line 395
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 396
        if (($context["price"] ?? null)) {
            // line 397
            echo "\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t";
            // line 398
            if ( !($context["special"] ?? null)) {
                // line 399
                echo "\t\t\t\t\t\t\t";
                echo ($context["price"] ?? null);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 401
                echo "\t\t\t\t\t\t\t<span class=\"price-old\">";
                echo ($context["price"] ?? null);
                if (((($context["on_off_percent_discount"] ?? null) == "1") && ($context["special"] ?? null))) {
                    echo "<span class=\"sticker-ls-pd procent-skidka\">";
                    echo ($context["skidka"] ?? null);
                    echo " %</span>";
                }
                echo "</span>
\t\t\t\t\t\t\t<span class=\"price-new\">";
                // line 402
                echo ($context["special"] ?? null);
                echo "</span>

\t\t\t\t\t\t";
            }
            // line 405
            echo "\t\t\t\t\t\t";
            if (($context["tax"] ?? null)) {
                // line 406
                echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</span>
\t\t\t\t\t\t";
            }
            // line 408
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 410
        echo "\t\t\t\t";
        if (($context["points"] ?? null)) {
            // line 411
            echo "\t\t\t\t\t<div class=\"points\">";
            echo ($context["text_points"] ?? null);
            echo " ";
            echo ($context["points"] ?? null);
            echo "</div>
\t\t\t\t";
        }
        // line 413
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["fcpdata"] ?? null), "status", [], "any", true, true, false, 413) && twig_get_attribute($this->env, $this->source, ($context["fcpdata"] ?? null), "status", [], "any", false, false, false, 413))) {
            // line 414
            echo "\t\t\t\t\t<a class=\"btn-cheaper\" href=\"javascript: void(0);\" onclick=\"open_popup_fcp(";
            echo ($context["product_id"] ?? null);
            echo "); return false\"><i class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["fcpdata"] ?? null), "found_cheaper_botton_icon", [], "any", false, false, false, 414);
            echo "\"></i> ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fcpdata"] ?? null), "found_cheaper_botton_text", [], "any", false, true, false, 414), ($context["lang_id"] ?? null), [], "array", true, true, false, 414)) ? (twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = twig_get_attribute($this->env, $this->source, ($context["fcpdata"] ?? null), "found_cheaper_botton_text", [], "any", false, false, false, 414)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[($context["lang_id"] ?? null)] ?? null) : null), "text", [], "any", false, false, false, 414)) : (""));
            echo "   </a>
\t\t\t\t";
        }
        // line 416
        echo "
\t\t\t\t";
        // line 417
        if (($context["reward"] ?? null)) {
            // line 418
            echo "\t\t\t\t\t<div class=\"info-product-reward\">";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</div>
\t\t\t\t";
        }
        // line 420
        echo "\t\t\t\t";
        if (($context["discounts"] ?? null)) {
            // line 421
            echo "\t\t\t\t<ul class=\"list-unstyled product-discounts\">
\t\t\t\t\t";
            // line 422
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 423
                echo "\t\t\t\t\t\t<li>";
                echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 423);
                echo ($context["text_discount"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 423);
                echo "</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 425
            echo "\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 427
        echo "\t\t\t\t";
        if ((($context["minimum"] ?? null) > 1)) {
            // line 428
            echo "\t\t\t\t\t<div class=\"info-minimum\">
\t\t\t\t\t\t<svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17ZM9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18Z\" fill=\"#E5DB77\"></path><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9 4.50952C9.27614 4.50952 9.5 4.73338 9.5 5.00952V10.2151C9.5 10.4913 9.27614 10.7151 9 10.7151C8.72386 10.7151 8.5 10.4913 8.5 10.2151V5.00952C8.5 4.73338 8.72386 4.50952 9 4.50952Z\" fill=\"#E5DB77\"></path><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9 12.2985C9.27614 12.2985 9.5 12.5223 9.5 12.7985V13.6879C9.5 13.964 9.27614 14.1879 9 14.1879C8.72386 14.1879 8.5 13.964 8.5 13.6879V12.7985C8.5 12.5223 8.72386 12.2985 9 12.2985Z\" fill=\"#E5DB77\"></path></svg>
\t\t \t\t\t\t ";
            // line 430
            echo ($context["text_minimum"] ?? null);
            echo "
\t\t \t\t\t</div>
\t\t\t\t";
        }
        // line 433
        echo "\t\t\t\t<div class=\"actions-additional\">
\t\t\t\t\t<div class=\"quantity-adder pull-left clearfix\">
\t\t\t\t\t\t<div class=\"quantity-number dflex pull-left\">
\t\t\t\t\t\t\t<span onclick=\"btnminus_card_prod('";
        // line 436
        if ((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "any", true, true, false, 436) && (twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "any", false, false, false, 436) == "1"))) {
            echo ($context["minimum"] ?? null);
        } else {
            echo "1";
        }
        echo "');\" class=\"add-down add-action fa fa-angle-left\"></span>
\t\t\t\t\t\t\t<input ";
        // line 437
        if (((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "any", true, true, false, 437) && (twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "any", false, false, false, 437) == "1")) && (($context["minimum"] ?? null) > 1))) {
            echo "disabled";
        }
        echo " class=\"quantity-product form-control\" type=\"text\" name=\"quantity\" size=\"2\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t<span onclick=\"btnplus_card_prod('";
        // line 438
        if ((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "any", true, true, false, 438) && (twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "any", false, false, false, 438) == "1"))) {
            echo ($context["minimum"] ?? null);
        } else {
            echo "1";
        }
        echo "');\" class=\"add-up add-action fa fa-angle-right\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 440
        echo ($context["product_id"] ?? null);
        echo "\" />
\t\t\t\t\t </div>
\t\t\t\t\t<script>
\t\t\t\t\t\tfunction btnminus_card_prod(minimum){
\t\t\t\t\t\t\tvar \$input = \$('.actions-additional .quantity-product');
\t\t\t\t\t\t\tvar count = parseInt(\$input.val()) - parseInt(minimum);
\t\t\t\t\t\t\tcount = count < parseInt(";
        // line 446
        echo ($context["minimum"] ?? null);
        echo ") ? parseInt(";
        echo ($context["minimum"] ?? null);
        echo ") : count;
\t\t\t\t\t\t\t\$input.val(count);
\t\t\t\t\t\t\t\$input.change();
\t\t\t\t\t\t}
\t\t\t\t\t\tfunction btnplus_card_prod(minimum){
\t\t\t\t\t\t\tvar \$input = \$('.actions-additional .quantity-product');
\t\t\t\t\t\t\tvar count = parseInt(\$input.val()) + parseInt(minimum);
\t\t\t\t\t\t\t\$input.val(count);
\t\t\t\t\t\t\t\$input.change();
\t\t\t\t\t\t};
\t\t\t\t\t</script>
\t\t\t\t\t<div class=\"dflex justify-content-end\">
\t\t\t\t\t";
        // line 458
        if ((($context["show_nsproduct_btn_compare"] ?? null) == "1")) {
            // line 459
            echo "\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-compare\" title=\"";
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo ($context["product_id"] ?? null);
            echo "');\"><span class=\"btn-icon-compare\"></span></button>
\t\t\t\t\t";
        }
        // line 461
        echo "\t\t\t\t\t";
        if ((($context["show_nsproduct_btn_wishlist"] ?? null) == "1")) {
            // line 462
            echo "\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-wishlist\" title=\"";
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo ($context["product_id"] ?? null);
            echo "');\"><span class=\"btn-icon-wishlist\"></span></button>
\t\t\t\t\t";
        }
        // line 464
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"actions text-center\">
\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t";
        // line 468
        if (((($context["product_quantity"] ?? null) <= 0) && ($context["disable_cart_button"] ?? null))) {
            // line 469
            echo "\t\t\t\t\t\t\t<button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-general\" disabled>";
            if (((($context["change_text_cart_button_out_of_stock"] ?? null) == 1) && (($context["product_quantity"] ?? null) <= 0))) {
                echo "<span>";
                echo ($context["disable_cart_button_text"] ?? null);
                echo "</span>";
            } else {
                echo "<span class=\"icon-cart-add\"></span> <span class=\"text-cart-add\">";
                echo ($context["button_cart"] ?? null);
                echo "</span>";
            }
            echo "</button>
\t\t\t\t\t\t";
        } else {
            // line 471
            echo "\t\t\t\t\t\t\t<button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-general\">";
            if (((($context["change_text_cart_button_out_of_stock"] ?? null) == 1) && (($context["product_quantity"] ?? null) <= 0))) {
                echo "<span>";
                echo ($context["disable_cart_button_text"] ?? null);
                echo "</span>";
            } else {
                echo "<span class=\"icon-cart-add\"></span> <span class=\"text-cart-add\">";
                echo ($context["button_cart"] ?? null);
                echo "</span>";
            }
            echo "</button>
\t\t\t\t\t\t";
        }
        // line 473
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 474
        if ((($context["show_nsproduct_btn_fastorder"] ?? null) == "1")) {
            // line 475
            echo "\t\t\t\t\t\t<button class=\"btn btn-fastorder ";
            if (((($context["product_quantity"] ?? null) <= 0) && ($context["disable_fastorder_button"] ?? null))) {
                echo "hidden-quick-order";
            }
            echo "\" type=\"button\" onclick=\"fastorder_open(";
            echo ($context["product_id"] ?? null);
            echo ");\" ";
            if (((($context["product_quantity"] ?? null) <= 0) && ($context["disable_fastorder_button"] ?? null))) {
                echo "disabled";
            }
            echo ">
\t\t\t\t\t\t\t<span class=\"btn-icon-fastorder\"></span>
\t\t\t\t\t\t\t<span>";
            // line 477
            echo twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["config_text_open_form_send_order"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[($context["lang_id"] ?? null)] ?? null) : null), "config_text_open_form_send_order", [], "any", false, false, false, 477);
            echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t";
        }
        // line 480
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 481
        if (((((((($context["ns_on_off_product_sharing_facebock"] ?? null) == "1") || (($context["ns_on_off_product_sharing_twitter"] ?? null) == "1")) || (($context["ns_on_off_product_sharing_googleplus"] ?? null) == "1")) || (($context["ns_on_off_product_sharing_mailru"] ?? null) == "1")) || (($context["ns_on_off_product_sharing_vk"] ?? null) == "1")) || (($context["ns_on_off_product_sharing_ok"] ?? null) == "1"))) {
            // line 482
            echo "\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"social-likes\">
\t\t\t\t\t\t";
            // line 484
            if ((($context["ns_on_off_product_sharing_facebock"] ?? null) != "0")) {
                echo "<div class=\"facebook\" title=\"Share link on Facebook\">";
                echo ($context["text_facebook"] ?? null);
                echo "</div>";
            }
            // line 485
            echo "\t\t\t\t\t\t";
            if ((($context["ns_on_off_product_sharing_twitter"] ?? null) != "0")) {
                echo "<div class=\"twitter\" title=\"Share link on Twitter\">";
                echo ($context["text_twitter"] ?? null);
                echo "</div>";
            }
            // line 486
            echo "\t\t\t\t\t\t";
            if ((($context["ns_on_off_product_sharing_googleplus"] ?? null) != "0")) {
                echo "<div class=\"plusone\" title=\"Share link on Google+\">";
                echo ($context["text_googleplus"] ?? null);
                echo "</div>";
            }
            // line 487
            echo "\t\t\t\t\t\t";
            if ((($context["ns_on_off_product_sharing_mailru"] ?? null) != "0")) {
                echo "<div class=\"mailru\" title=\"Поделиться ссылкой в Моём мире\">";
                echo ($context["text_mailru"] ?? null);
                echo "</div>";
            }
            // line 488
            echo "\t\t\t\t\t\t";
            if ((($context["ns_on_off_product_sharing_vk"] ?? null) != "0")) {
                echo "<div class=\"vkontakte\" title=\"Поделиться ссылкой во Вконтакте\">";
                echo ($context["text_vk"] ?? null);
                echo "</div>";
            }
            // line 489
            echo "\t\t\t\t\t\t";
            if ((($context["ns_on_off_product_sharing_ok"] ?? null) != "0")) {
                echo "<div class=\"odnoklassniki\" title=\"Поделиться ссылкой в Одноклассниках\">";
                echo ($context["text_ok"] ?? null);
                echo "</div>";
            }
            // line 490
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 492
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 496
        $context["fixed_tabs_on_mobile"] = 1;
        // line 497
        echo "\t<div class=\"row cbp ";
        if ((array_key_exists("fixed_tabs_on_mobile", $context) && (($context["fixed_tabs_on_mobile"] ?? null) == 1))) {
            echo "xs-mt-0 xs-bt-1";
        }
        echo "\">
\t<div class=\"clearfix\"></div>
\t<div class=\"tabs-product col-sm-12\">
\t\t<div class=\"tabs__header ";
        // line 500
        if ((array_key_exists("fixed_tabs_on_mobile", $context) && (($context["fixed_tabs_on_mobile"] ?? null) == 1))) {
            echo "ft__mobile";
        }
        echo "\">
\t\t<div class=\"tabs__header__scroll dragscroll\">
 \t\t<ul class=\"nav nav-tabs my-tabs\">
 \t\t\t<li class=\"tabs__active_line\"></li>
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 504
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 505
        if (($context["attribute_groups"] ?? null)) {
            // line 506
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 508
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 509
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 511
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "status", [], "any", true, true, false, 511)) {
            // line 512
            echo "\t\t\t\t<li><a href=\"#tab-question-answer\" data-toggle=\"tab\">";
            echo ($context["tab_question_answer"] ?? null);
            echo "</a></li>
\t\t\t";
        }
        // line 514
        echo "\t\t\t";
        if (array_key_exists("product_additional_tabs", $context)) {
            // line 515
            echo "              ";
            $context["additional_tab_i"] = 0;
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_additional_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_additional_tab"]) {
                // line 516
                echo "                <li><a href=\"#product_additional_tabs";
                echo ($context["additional_tab_i"] ?? null);
                echo "\" data-toggle=\"tab\"><i class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_additional_tab"], "icon_tabs", [], "any", false, false, false, 516);
                echo "\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["product_additional_tab"], "title", [], "any", false, false, false, 516);
                echo "</a></li>
              ";
                // line 517
                $context["additional_tab_i"] = (($context["additional_tab_i"] ?? null) + 1);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_additional_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 518
            echo "            ";
        }
        // line 519
        echo "          </ul>
      \t  </div>
      \t  </div>
      \t  ";
        // line 522
        $context["show_group_attr_name"] = 1;
        // line 523
        echo "          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 524
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 525
        if (($context["attribute_groups"] ?? null)) {
            // line 526
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
\t\t\t\t";
            // line 527
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 528
                echo "\t\t\t\t\t<div class=\"short-attributes-groups\">
\t\t\t\t\t";
                // line 529
                if ((array_key_exists("show_group_attr_name", $context) && (($context["show_group_attr_name"] ?? null) == 1))) {
                    // line 530
                    echo "\t\t\t\t\t<div class=\"attr-group-name\">";
                    echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 530);
                    echo "</div>
\t\t\t\t\t";
                }
                // line 532
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 532));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 533
                    echo "\t\t\t\t\t\t\t<div class=\"short-attribute\">
\t\t\t\t\t\t\t<span class=\"attr-name\"><span>";
                    // line 534
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 534);
                    echo "</span></span>
\t\t\t\t\t\t\t<span class=\"attr-text\"><span>";
                    // line 535
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 535);
                    echo "</span></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 538
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 540
            echo "            </div>
            ";
        }
        // line 542
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "status", [], "any", true, true, false, 542)) {
            // line 543
            echo "\t\t\t<div class=\"tab-pane\" id=\"tab-question-answer\">
\t\t\t\t<div id=\"question-answer\"></div>
\t\t\t\t<script><!--
\t\t\t\t\$('#question-answer').load('index.php?route=extension/module/luxshop_question_answer/getList&product_id=";
            // line 546
            echo ($context["product_id"] ?? null);
            echo "');
\t\t\t\t\$('#question-answer').delegate('.pagination a', 'click', function(e) {
\t\t\t\t\te.preventDefault();

\t\t\t\t\t\$('#question-answer').fadeOut('slow');

\t\t\t\t\t\$('#question-answer').load(this.href);

\t\t\t\t\t\$('#question-answer').fadeIn('slow');
\t\t\t\t});
\t\t\t\t//--></script>
\t\t\t</div>
\t\t\t";
        }
        // line 559
        echo "\t\t\t";
        if (array_key_exists("product_additional_tabs", $context)) {
            // line 560
            echo "\t\t\t\t";
            $context["additional_tab_i"] = 0;
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_additional_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_additional_tab"]) {
                // line 561
                echo "\t\t\t\t  <div class=\"tab-pane\" id=\"product_additional_tabs";
                echo ($context["additional_tab_i"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product_additional_tab"], "text", [], "any", false, false, false, 561);
                echo "</div>
\t\t\t\t";
                // line 562
                $context["additional_tab_i"] = (($context["additional_tab_i"] ?? null) + 1);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_additional_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 563
            echo "\t\t\t  ";
        }
        // line 564
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 565
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
            \t <div id=\"review\"></div>
              <form class=\"form-horizontal\" id=\"form-review\">
                <div class=\"titler-r\">";
            // line 568
            echo ($context["text_write"] ?? null);
            echo "</div>
                ";
            // line 569
            if (($context["review_guest"] ?? null)) {
                // line 570
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 572
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
\t\t\t              <div class=\"col-sm-12\">
\t\t\t              <label class=\"control-label\">";
                // line 578
                echo ($context["entry_rating"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"product-rating\">
\t\t\t\t\t\t\t\t<input class=\"hidden\" id=\"rating1\" type=\"radio\" name=\"rating\" value=\"1\" /><label class=\"star-rating label-star-prod\" for=\"rating1\"></label>
\t\t\t\t\t\t\t\t<input class=\"hidden\" id=\"rating2\" type=\"radio\" name=\"rating\" value=\"2\" /><label class=\"star-rating label-star-prod\" for=\"rating2\"></label>
\t\t\t\t\t\t\t\t<input class=\"hidden\" id=\"rating3\" type=\"radio\" name=\"rating\" value=\"3\" /><label class=\"star-rating label-star-prod\" for=\"rating3\"></label>
\t\t\t\t\t\t\t\t<input class=\"hidden\" id=\"rating4\" type=\"radio\" name=\"rating\" value=\"4\" /><label class=\"star-rating label-star-prod\" for=\"rating4\"></label>
\t\t\t\t\t\t\t\t<input class=\"hidden\" id=\"rating5\" type=\"radio\" name=\"rating\" value=\"5\" /><label class=\"star-rating label-star-prod\" for=\"rating5\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t              </div>
\t\t\t                <script>
\t\t\t                  \$('.label-star-prod').hover(function () {
\t\t\t                    \$(this).prevAll('.label-star-prod').addClass('active');
\t\t\t                    \$(this).addClass('active');
\t\t\t                  },function () {
\t\t\t                    \$(this).prevAll('.label-star-prod').removeClass('active');
\t\t\t                    \$(this).removeClass('active');
\t\t\t                  });

\t\t\t                  \$('.label-star-prod').click(function(){
\t\t\t                    \$('.label-star-prod').each(function(){
\t\t\t                      \$(this).removeClass('checked');
\t\t\t                      \$(this).prevAll('.label-star-prod').removeClass('checked');
\t\t\t                    });

\t\t\t                    \$(this).addClass('checked');
\t\t\t                    \$(this).prevAll('.label-star-prod').addClass('checked');
\t\t\t                  });
\t\t\t               </script>
\t\t\t            </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 609
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                  </div>
                </div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div ";
                // line 614
                if ((($context["show_review_plus"] ?? null) == "0")) {
                    echo "style=\"display:none;\"";
                }
                echo " class=\"col-sm-12 col-lg-6 ";
                if (($context["show_review_plus_requared"] ?? null)) {
                    echo "required";
                }
                echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review-plus\">";
                // line 615
                echo ($context["entry_plus"] ?? null);
                echo "</label>
\t\t\t\t\t\t<textarea name=\"plus\" rows=\"5\" id=\"input-review-plus\" class=\"form-control\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div ";
                // line 618
                if ((($context["show_review_minus"] ?? null) == "0")) {
                    echo "style=\"display:none;\"";
                }
                echo " class=\"col-sm-12 col-lg-6 ";
                if (($context["show_review_minus_requared"] ?? null)) {
                    echo "required";
                }
                echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review-minus\">";
                // line 619
                echo ($context["entry_minus"] ?? null);
                echo "</label>
\t\t\t\t\t\t<textarea name=\"minus\" rows=\"5\" id=\"input-review-minus\" class=\"form-control\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"help-block\">";
                // line 623
                echo ($context["text_note"] ?? null);
                echo "</div>

                 ";
                // line 625
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-left\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 628
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["btn_add_new_review"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 632
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 634
            echo "              </form>
            </div>
            ";
        }
        // line 637
        echo "          </div>
\t\t</div>
\t\t";
        // line 639
        if (($context["tags"] ?? null)) {
            // line 640
            echo "\t\t<div class=\"col-sm-12 mt-20 mb-10\">
\t\t";
            // line 641
            echo ($context["text_tags"] ?? null);
            echo "
\t\t";
            // line 642
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 643
                echo "\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["tags"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 643);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["tags"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 643);
                    echo "</a>,
\t\t";
                } else {
                    // line 644
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["tags"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 644);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["tags"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 644);
                    echo "</a> ";
                }
                // line 645
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 646
            echo "\t\t</div>
\t\t";
        }
        // line 648
        echo " </div>
\t";
        // line 649
        if (($context["products"] ?? null)) {
            // line 650
            echo "\t";
            $context["related_rand"] = twig_random($this->env, 10, 100);
            // line 651
            echo "\t\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t<div class=\"container-module\">
\t\t\t<div class=\"title-module\"><span>";
            // line 654
            echo ($context["text_related"] ?? null);
            echo "</span></div>
\t\t\t<div class=\"product-slider\">
\t\t\t<div class=\"featured related_products";
            // line 656
            echo ($context["related_rand"] ?? null);
            echo "\">
\t\t\t";
            // line 657
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 658
                echo "\t\t\t\t<div class=\"item h-auto\">
\t\t\t\t\t<div class=\"product-thumb dflex flex-column h-100\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<div class=\"stickers-ns\">
\t\t\t\t\t\t\t\t";
                // line 662
                if (((($context["on_off_sticker_special"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 662))) {
                    // line 663
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"sticker-ns special\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                    // line 664
                    echo ($context["config_change_icon_sticker_special"] ?? null);
                    echo " \"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 665
                    echo twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["text_sticker_special"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_special", [], "any", false, false, false, 665);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 668
                echo "\t\t\t\t\t\t\t\t";
                if (((($context["on_off_sticker_topbestseller"] ?? null) == "1") && (twig_get_attribute($this->env, $this->source, $context["product"], "top_bestsellers", [], "any", false, false, false, 668) >= ($context["config_limit_order_product_topbestseller"] ?? null)))) {
                    // line 669
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"sticker-ns bestseller\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                    // line 670
                    echo ($context["config_change_icon_sticker_topbestseller"] ?? null);
                    echo " \"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 671
                    echo twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["text_sticker_topbestseller"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_topbestseller", [], "any", false, false, false, 671);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 674
                echo "\t\t\t\t\t\t\t\t";
                if (((($context["on_off_sticker_popular"] ?? null) == "1") && (twig_get_attribute($this->env, $this->source, $context["product"], "viewed", [], "any", false, false, false, 674) >= ($context["config_min_quantity_popular"] ?? null)))) {
                    // line 675
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"sticker-ns popular\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                    // line 676
                    echo ($context["config_change_icon_sticker_popular"] ?? null);
                    echo " \"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 677
                    echo twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["text_sticker_popular"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_popular", [], "any", false, false, false, 677);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 680
                echo "\t\t\t\t\t\t\t\t";
                if (((($context["on_off_sticker_newproduct"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "sticker_new_prod", [], "any", false, false, false, 680))) {
                    // line 681
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"sticker-ns newproduct\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                    // line 682
                    echo ($context["config_change_icon_sticker_newproduct"] ?? null);
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t\t";
                    // line 683
                    echo twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["text_sticker_newproduct"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[($context["lang_id"] ?? null)] ?? null) : null), "config_change_text_sticker_newproduct", [], "any", false, false, false, 683);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 686
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
                // line 687
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 687);
                echo "\"><img decoding=\"async\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 687);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 687);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "additional_image_hover", [], "any", false, false, false, 687)) {
                    echo "data-additional-hover=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "additional_image_hover", [], "any", false, false, false, 687);
                    echo "\"";
                }
                echo " loading=\"lazy\" src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 687);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 687);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t";
                // line 688
                if (((($context["show_special_timer_module"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 688))) {
                    // line 689
                    echo "\t\t\t\t\t\t\t\t<div class=\"action-timer\" data-date-end=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 689);
                    echo "\"></div>
\t\t\t\t\t\t\t";
                }
                // line 691
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"caption dflex flex-column flex-grow-1\">
\t\t\t\t\t\t\t<div class=\"product-name\"><a href=\"";
                // line 693
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 693);
                echo "\"><span>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 693);
                echo "</span></a></div>
\t\t\t\t\t\t\t";
                // line 694
                if (($context["show_stock_status"] ?? null)) {
                    // line 695
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 695) <= 0)) {
                        // line 696
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"stock-status outofstock\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 696);
                        echo "</div>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 698
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"stock-status instock\">
\t\t\t\t\t\t\t\t\t\t<svg width=\"11\" height=\"11\" viewBox=\"0 0 11 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7.68141 3.6147C7.89421 3.43872 8.20938 3.46857 8.38537 3.68137C8.54179 3.87052 8.53559 4.14057 8.38283 4.32184L8.3187 4.38532L4.40526 7.62168L2.72378 6.50696C2.49362 6.35438 2.43073 6.04411 2.58331 5.81395C2.71894 5.60936 2.97916 5.53694 3.19697 5.63054L3.27633 5.67348L4.33905 6.37801L7.68141 3.6147Z\" fill=\"#00BC52\"/><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11 5.5C11 2.46243 8.53757 0 5.5 0C2.46243 0 0 2.46243 0 5.5C0 8.53757 2.46243 11 5.5 11C8.53757 11 11 8.53757 11 5.5ZM1 5.5C1 3.01472 3.01472 1 5.5 1C7.98528 1 10 3.01472 10 5.5C10 7.98528 7.98528 10 5.5 10C3.01472 10 1 7.98528 1 5.5Z\" fill=\"#00BC52\"/></svg>
\t\t\t\t\t\t\t\t\t\t";
                        // line 700
                        echo ($context["text_instock"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 703
                    echo "\t\t\t\t\t\t\t";
                }
                // line 704
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_model", [], "any", true, true, false, 704) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_model", [], "any", false, false, false, 704) == "1"))) {
                    // line 705
                    echo "\t\t\t\t\t\t\t\t<div class=\"product-model\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 705);
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 707
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_description", [], "any", true, true, false, 707) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_description", [], "any", false, false, false, 707) == "1"))) {
                    // line 708
                    echo "\t\t\t\t\t\t\t\t<div class=\"product-description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 708);
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 710
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_rating", [], "any", true, true, false, 710) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_rating", [], "any", false, false, false, 710) == "1"))) {
                    // line 711
                    echo "\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t<span class=\"rating-box\">
\t\t\t\t\t\t\t\t\t";
                    // line 713
                    $context["i"] = 1;
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 714
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 714) < $context["i"])) {
                            // line 715
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-rating-star\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"none\" viewBox=\"0 0 12 12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"#E9ECEF\" fill-rule=\"evenodd\" d=\"M6 10.283l-2.972 1.634c-.498.274-1.08-.168-.985-.748l.567-3.46-2.404-2.45c-.403-.41-.18-1.126.376-1.21l3.323-.506L5.391.396a.666.666 0 011.218 0l1.486 3.147 3.323.505c.557.085.78.8.376 1.21L9.39 7.709l.567 3.46c.095.58-.487 1.023-.985.749L6 10.283z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 721
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-rating-star\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"none\" viewBox=\"0 0 12 12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"#E5DB77\" fill-rule=\"evenodd\" d=\"M6 10.283l-2.972 1.634c-.498.274-1.08-.168-.985-.748l.567-3.46-2.404-2.45c-.403-.41-.18-1.126.376-1.21l3.323-.506L5.391.396a.666.666 0 011.218 0l1.486 3.147 3.323.505c.557.085.78.8.376 1.21L9.39 7.709l.567 3.46c.095.58-.487 1.023-.985.749L6 10.283z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 727
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 728
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_quantity_reviews", [], "any", true, true, false, 728) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_quantity_reviews", [], "any", false, false, false, 728) == "1"))) {
                        // line 729
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"quantity-reviews\"><a data-placement=\"right\"  data-toggle=\"tooltip\" title=\"";
                        echo ($context["text_reviews_title"] ?? null);
                        echo "\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 729);
                        echo "#tab-review\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 729);
                        echo "</a></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 731
                    echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 734
                echo "\t\t\t\t\t\t\t<div class=\"price-actions-box dflex flex-wrap mt-auto\">
\t\t\t\t\t\t\t\t";
                // line 735
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 735)) {
                    // line 736
                    echo "\t\t\t\t\t\t\t\t<div class=\"price\" data-price-no-format=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price_no_format", [], "any", false, false, false, 736);
                    echo "\" data-special-no-format=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special_no_format", [], "any", false, false, false, 736);
                    echo "\">
\t\t\t\t\t\t\t\t\t  ";
                    // line 737
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 737)) {
                        // line 738
                        echo "\t\t\t\t\t\t\t\t\t  <span class=\"price_no_format\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 738);
                        echo "</span>
\t\t\t\t\t\t\t\t\t  ";
                    } else {
                        // line 740
                        echo "\t\t\t\t\t\t\t\t\t  <span class=\"price-old\"><span class=\"price_no_format\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 740);
                        echo "</span>
\t\t\t\t\t\t\t\t\t  ";
                        // line 741
                        if (((($context["on_off_percent_discount"] ?? null) == "1") && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 741))) {
                            echo "<span class=\"sticker-ls-pd procent-skidka\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "skidka", [], "any", false, false, false, 741);
                            echo " %</span>";
                        }
                        echo "</span>
\t\t\t\t\t\t\t\t\t  <span class=\"price-new\"><span class=\"special_no_format\">";
                        // line 742
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 742);
                        echo "</span></span>
\t\t\t\t\t\t\t\t\t  ";
                    }
                    // line 744
                    echo "\t\t\t\t\t\t\t\t\t  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 744)) {
                        // line 745
                        echo "\t\t\t\t\t\t\t\t\t  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 745);
                        echo "</span>
\t\t\t\t\t\t\t\t\t  ";
                    }
                    // line 747
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    // line 748
                    if ((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_btn_module", [], "any", true, true, false, 748) && (twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_btn_module", [], "any", false, false, false, 748) == "1"))) {
                        // line 749
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"quantity_plus_minus\">
\t\t\t\t\t\t\t\t\t\t<span class=\"add-up add-action\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"5\" fill=\"none\" viewBox=\"0 0 7 5\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"#000\" fill-rule=\"evenodd\" d=\"M3.826 2.144a.5.5 0 00-.707.004L.856 4.438a.5.5 0 01-.712-.704l2.264-2.289a1.5 1.5 0 012.121-.012L6.852 3.73a.5.5 0 11-.704.711L3.826 2.144z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"quantity-num form-control\" name=\"quantity\" value=\"";
                        // line 755
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 755);
                        echo "\" data-minimum=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 755);
                        echo "\"  ";
                        if (((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "any", true, true, false, 755) && (twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_multiple", [], "any", false, false, false, 755) == "1")) && (twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 755) > 1))) {
                            echo "disabled";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t\t<span class=\"add-down add-action\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"5\" fill=\"none\" viewBox=\"0 0 7 5\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"#000\" fill-rule=\"evenodd\" d=\"M3.174 2.856a.5.5 0 00.707-.004L6.144.562a.5.5 0 01.712.704L4.592 3.555a1.5 1.5 0 01-2.121.012L.148 1.27A.5.5 0 11.852.559l2.322 2.297z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 763
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 764
                echo "\t\t\t\t\t\t\t\t<div class=\"actions w-100\">
\t\t\t\t\t\t\t\t\t<div class=\"cart\"><button class=\"btn btn-general\" type=\"button\" ";
                // line 765
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 765) <= 0) && ($context["disable_cart_button"] ?? null))) {
                    echo "disabled";
                } else {
                    echo "onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 765);
                    echo "',this)\"";
                }
                echo "><span class=\"icon-cart-add\"></span><span class=\"text-cart-add\">";
                if (((($context["change_text_cart_button_out_of_stock"] ?? null) == 1) && (twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 765) <= 0))) {
                    echo ($context["disable_cart_button_text"] ?? null);
                } else {
                    echo ($context["button_cart"] ?? null);
                }
                echo "</span></button></div>
\t\t\t\t\t\t\t\t\t<div class=\"addit-action\">
\t\t\t\t\t\t\t\t\t\t";
                // line 767
                if ((($context["config_on_off_featured_quickview"] ?? null) == "1")) {
                    // line 768
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview\"><button class=\"btn btn-quickview\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["config_quickview_btn_name"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[($context["lang_id"] ?? null)] ?? null) : null), "config_quickview_btn_name", [], "any", false, false, false, 768);
                    echo "\" onclick=\"quickview_open(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 768);
                    echo ");\"><span class=\"btn-icon-quickview\"></span></button></div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 770
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_fastorder", [], "any", true, true, false, 770) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_fastorder", [], "any", false, false, false, 770) == "1"))) {
                    // line 771
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((( !($context["disable_fastorder_button"] ?? null) && ((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 771) <= 0) || (twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 771) > 0))) || (($context["disable_fastorder_button"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 771) > 0)))) {
                        // line 772
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"quick-order\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-fastorder\" title=\"";
                        // line 773
                        echo twig_get_attribute($this->env, $this->source, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["config_text_open_form_send_order"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[($context["lang_id"] ?? null)] ?? null) : null), "config_text_open_form_send_order", [], "any", false, false, false, 773);
                        echo "\" type=\"button\" onclick=\"fastorder_open(";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 773);
                        echo ");\" ";
                        if (((twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 773) <= 0) && ($context["disable_fastorder_button"] ?? null))) {
                            echo "disabled";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn-icon-fastorder\"></span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 778
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 779
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_compare", [], "any", true, true, false, 779) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_compare", [], "any", false, false, false, 779) == "1"))) {
                    // line 780
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"compare\"><button class=\"btn btn-compare\" type=\"button\" title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 780);
                    echo "');\"><span class=\"btn-icon-compare\"></span></button></div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 782
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_wishlist", [], "any", true, true, false, 782) && (twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_wishlist", [], "any", false, false, false, 782) == "1"))) {
                    // line 783
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist\"><button class=\"btn btn-wishlist\" type=\"button\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 783);
                    echo "');\"><span class=\"btn-icon-wishlist\"></span></button></div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 785
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 792
            echo "\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t</div>
\t\t<script>
slickSliderModule(\".related_products";
            // line 798
            echo ($context["related_rand"] ?? null);
            echo "\");
</script>
\t";
        }
        // line 801
        echo "    ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 802
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script>
\$('.thumbnails #image-box').on('click', function(e){
  e.preventDefault();
\tif (\$('.thumbnails .slider-main-img .item').length > 0) {
\t\tvar opennumimage = \$('.slider-main-img').slick('slickCurrentSlide');
\t\tvar \$links = \$('[data-fancybox=\"gallery\"]');
\t\t\$.fancybox.open( \$links, {}, opennumimage );
\t\treturn false;
\t} else {
\t\tvar \$links = \$that,
\t\topts = { caption: \$that.find('img').attr('title') };
\t\t\$.fancybox.open( \$links, opts, 0 );
\t\treturn false;
\t}
});
";
        // line 819
        if ((($context["config_status_zoom_image"] ?? null) != "0")) {
            // line 820
            echo "  \$(window).resize(function() {
\tif (\$(this).width() < 992) {
\t  \$('.main-image').removeClass('cloud-zoom');
\t  \$('.dop-img').removeClass('cloud-zoom-gallery');
\t}
  });
if (\$(window).width() > 992) {
  \$(document).on('mouseenter','.slider-main-img a.thumbnail', function(e){
\t  var \$element_zoom = \$(this);
\t  e.preventDefault();
\t  \$('#wrap a.thumbnail').not(this).unwrap();
\t  \$('.mousetrap').remove();
\t  \$element_zoom.addClass('cloud-zoom');
\t  \$element_zoom.CloudZoom({position: 'inside'});
  });
}
";
        }
        // line 837
        echo "function optionimage(image, image_zoom,image_thumb) {
\t";
        // line 838
        if (($context["images"] ?? null)) {
            // line 839
            echo "\t\tif(\$('.option-image-new').length > 0) {
\t\t\tvar slideIndex = Number(\$('.slider-main-img .slick-slide:last-child').attr('data-slick-index'));
\t\t\t\$('.slider-main-img .item.option-image-new a').replaceWith('<a data-fancybox=\"gallery\" class=\"thumbnail cloud-zoom\" data-magnify-src=\"'+ image_zoom +'\" href=\"'+ image_zoom +'\"><img data-num=\"'+ slideIndex +'\" src=\"'+ image +'\" /></a>');
\t\t\t\$('.slider-main-img').slick('slickGoTo', Number(\$('.slider-main-img .slick-slide:last-child').attr('data-slick-index')),  true);
\t\t} else {
\t\t\tvar num_im_last = Number(\$('.slider-main-img .slick-slide:last-child img').attr('data-num')) + 1;
\t\t\t\$('.slider-main-img').slick('slickAdd','<div><div class=\"item option-image-new\"><a data-fancybox=\"gallery\" class=\"thumbnail cloud-zoom\" data-magnify-src=\"'+ image_zoom +'\" href=\"'+ image_zoom +'\"><img data-num=\"'+ num_im_last +'\" src=\"'+ image +'\" /></a></div></div>');
\t\t\t\$('.slider-main-img').slick('slickGoTo', Number(\$('.slider-main-img .slick-slide:last-child').attr('data-slick-index')),  true);
\t\t}
\t";
        } else {
            // line 849
            echo "\t\t\$('.general-image').addClass('have-images');
\t\tif(\$('.option-image-new').length > 0) {
\t\t\t\$('.slider-main-img .item.option-image-new a').replaceWith('<a data-fancybox=\"gallery\" class=\"thumbnail cloud-zoom\" data-magnify-src=\"'+ image_zoom +'\" href=\"'+ image_zoom +'\"><img data-num=\"1\" src=\"'+ image +'\" /></a>');
\t\t} else {
\t\t\t\$('.slider-main-img').slick('slickAdd','<div><div class=\"item option-image-new\"><a data-fancybox=\"gallery\" class=\"thumbnail cloud-zoom\" data-magnify-src=\"'+ image_zoom +'\" href=\"'+ image_zoom +'\"><img data-num=\"1\" src=\"'+ image +'\" /></a></div></div>');
\t\t}
\t\tif(\$('.image-additional').length > 0) {
\t\t\t\$('.op-img img').replaceWith('<img data-num=\"1\" src=\"'+ image_thumb +'\" />');
\t\t}
\t\tif(\$('.thumbnails .image-additional').length == 0) {
\t\t\t\$('.thumbnails').append('<div class=\"image-additional\"><div class=\"item\"><a class=\"thumbnail\" href=\"javascript:void(0)\"><img data-num=\"0\" src=\"";
            // line 859
            echo ($context["thumb_min"] ?? null);
            echo "\" /></a></div><div class=\"item\"><a class=\"thumbnail op-img\" href=\"javascript:void(0)\"><img data-num=\"1\" src=\"'+ image_thumb +'\" /></a></div></div>');
\t\t\tsetTimeout(function () {
\t\t\t\t\$(\".thumbnails .image-additional\").slick({
\t\t\t\t\tvertical:false,
\t\t\t\t\tprevArrow: \"<div class='btn-slick-prev-h'><svg xmlns='http://www.w3.org/2000/svg' width='8' height='14' fill='none' viewBox='0 0 8 14'><path stroke='#000' stroke-linecap='round' d='M6 12L1.711 7.76a1 1 0 01-.008-1.415L6 2'/></svg></div>\",
\t\t\t\t\tnextArrow: \"<div class='btn-slick-next-h'><svg xmlns='http://www.w3.org/2000/svg' width='8' height='14' fill='none' viewBox='0 0 8 14'><path stroke='#000' stroke-linecap='round' d='M2 2l4.289 4.24a1 1 0 01.008 1.415L2 12'/></svg></div>\",
\t\t\t\t\tfocusOnSelect: true,
\t\t\t\t\tasNavFor: '.slider-main-img',
\t\t\t\t\tadaptiveHeight: true,
\t\t\t\t\tinfinite: false,
\t\t\t\t\tslidesToShow: 5,
\t\t\t\t});
\t\t\t\t\$('.image-additional').slick('initializeEvents');
\t\t\t\t\$('.slider-main-img').slick('slickGoTo', 1, true);
\t\t\t}, 200);
\t\t}
\t";
        }
        // line 876
        echo "}

if (\$(window).width() < 768) {
\t\$(document).on('click','#product .image-radio .image-option [data-toggle=\"tooltip\"]', function(){
\t\tvar toolTipId = \$(this).attr('aria-describedby');
\t\t\$('.tooltip').not('#'+ toolTipId).tooltip('hide');
\t\tvar \$element_tooltip_mob = \$(this);
\t\t\$element_tooltip_mob.tooltip({ placement: 'top', trigger: 'click' , container: 'body'});
\t\t\$element_tooltip_mob.tooltip('show');
\t});
}

\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});

\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\$('.options').removeClass('hidden-options');
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('html, body').animate({ scrollTop: \$('.options').offset().top - 10}, 250);
\t\t\t\t\t\tsetTimeout(function () {
\t\t\t  \t\t\t\t\$('.option-danger, .alert, .text-danger').remove();
\t\t\t\t\t\t}, 7000);
\t\t\t\t\t\t\$('#top').before('<div class=\"alert option-danger\"><img class=\"success-icon\" alt=\"success-icon\" src=\"catalog/view/theme/luxshop/image/warning-icon.svg\"><div class=\"text-modal-block\">' + json['error']['option'][i] + '</div><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\tif(json['popup_design']=='1'){
\t\t\t\t\t\tfastorder_open_cart();
\t\t\t\t\t} else if(json['popup_design']=='0') {
\t\t\t\t\t\thtml  = '<div id=\"modal-addcart\" class=\"modal fade\" role=\"dialog\">';
\t\t\t\t\t\thtml += '  <div class=\"modal-dialog\" style=\"overflow:hidden\">';
\t\t\t\t\t\thtml += '    <div class=\"modal-content\">';
\t\t\t\t\t\tif(json['show_onepagecheckout']=='1'){
\t\t\t\t\t\thtml += '      \t<div class=\"modal-body\"><div class=\"text-center\">' + json['success'] + '<br><img style=\"margin:10px 0px;\" src=\"'+ json['image_cart'] +'\"  /><br></div><div><a href=' + link_onepcheckout + ' class=\"btn-checkout\">'+ button_checkout +'</a><button data-dismiss=\"modal\" class=\"btn-shopping\">'+ button_shopping +'</button></div></div>';
\t\t\t\t\t\t} else {
\t\t\t\t\t\thtml += '      \t<div class=\"modal-body\"><div class=\"text-center\">' + json['success'] + '<br><img style=\"margin:10px 0px;\" src=\"'+ json['image_cart'] +'\"  /><br></div><div><a href=' + link_checkout + ' class=\"btn-checkout\">'+ button_checkout +'</a><button data-dismiss=\"modal\" class=\"btn-shopping\">'+ button_shopping +'</button></div></div>';
\t\t\t\t\t\t}
\t\t\t\t\t\thtml += '    </div>';
\t\t\t\t\t\thtml += '  </div>';
\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\t\$('body').append(html);
\t\t\t\t\t\t\$('#modal-addcart').modal('show');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#top').before('<div class=\"alert add_product_alert\"><img class=\"success-icon\" alt=\"success-icon\" src=\"catalog/view/theme/luxshop/image/success-icon.svg\"><div class=\"text-modal-block\">' + json['success'] + '</div><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t}
\t\t\t\t\t  setTimeout(function () {
\t\t\t\t\t\t\$('.option-danger, .alert, .text-danger,.add_product_alert').remove();
\t\t\t\t\t  }, 7000);
\t\t\t\t\t  setTimeout(function () {
\t\t\t\t\t\t\$('.cart-total').html(json['total']);
\t\t\t\t\t  }, 100);

\t\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t\t}
\t\t\t\t\$('#modal-addcart').on('hide.bs.modal', function (e) {
\t\t\t\t\t\$('#modal-addcart').remove();
\t\t\t\t});
\t\t}
\t});
});
";
        // line 987
        if (($context["load_datetimepicker"] ?? null)) {
            // line 988
            echo "\$('.date').datetimepicker({
  language: '";
            // line 989
            echo ($context["datepicker"] ?? null);
            echo "',
  pickTime: false
});

\$('.datetime').datetimepicker({
  language: '";
            // line 994
            echo ($context["datepicker"] ?? null);
            echo "',
  pickDate: true,
  pickTime: true
});

\$('.time').datetimepicker({
  language: '";
            // line 1000
            echo ($context["datepicker"] ?? null);
            echo "',
  pickDate: false
});
";
        }
        // line 1004
        echo "\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('#review').delegate('.pagination a', 'click', function(e) {
  e.preventDefault();

\t\$('#review').fadeOut('slow');

\t\$('#review').load(this.href);

\t\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 1066
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 1070
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-success, .alert-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('#form-review textarea[name=\\'plus\\']').val('');
\t\t\t\t\$('#form-review textarea[name=\\'minus\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

var url = document.location.toString();
if (url.match('#tab-review')) {
\$('a[href=\\'#tab-review\\']').trigger('click');
}
</script>
";
        // line 1105
        if ((array_key_exists("fix_right_block", $context) && (($context["fix_right_block"] ?? null) == "1"))) {
            // line 1106
            echo "<script>
\$( document ).ready(function() {
\tvar fix_rb = document.querySelector('#fix_right_block');
\tvar inner_fix_rb = null;
\twindow.addEventListener('scroll', RightBlockScroll);
\tdocument.body.addEventListener('scroll', RightBlockScroll);
\twindow.addEventListener('resize', RightBlockScroll);
\tdocument.body.addEventListener('resize', RightBlockScroll);
\tRightBlockScroll();

function RightBlockScroll() {
\tvar top_rb = 15;

\tif(\$('.fix-header-2.h-sticky').length == 1) {
\t\tif (\$(window).width() > 992) {
\t\t\tvar top_rb = \$('.fix-header-2.h-sticky').outerHeight() + 15;
\t\t}
\t}
\tif(\$('#top-fixed').length == 1) {
\t\tif (\$(window).width() > 992) {
\t\t\tvar top_rb = \$('#top-fixed').outerHeight() + 15;
\t\t}
\t}


\tif (\$(window).width() > 992) {
\t\tdocument.getElementById(\"fix_right_block\").className = \"fix_true\";
\t} else {
\t\tdocument.getElementById(\"fix_right_block\").className = \"fix_false\";
\t\t\$('#fix_right_block > div').removeAttr('style');
\t\t\$('#fix_right_block').removeAttr('style');
\t}

\tif (!!\$('.fix_true').offset()) {
\t\tif (inner_fix_rb == null) {
\t\t\tvar Sa = getComputedStyle(fix_rb, ''), s = '';
\t\t\tinner_fix_rb = document.createElement('div');
\t\t\tinner_fix_rb.style.cssText = s + 'width: ' + fix_rb.offsetWidth + 'px;';
\t\t\tfix_rb.insertBefore(inner_fix_rb, fix_rb.firstChild);
\t\t\tvar l = fix_rb.childNodes.length;
\t\t\tfor (var i = 1; i < l; i++) {
\t\t\t  inner_fix_rb.appendChild(fix_rb.childNodes[1]);
\t\t\t}
\t\t}
\t\tinner_fix_rb.style.width = fix_rb.offsetWidth + 'px';
\t\tvar Ra = fix_rb.getBoundingClientRect(),
\t\tRrb = Math.round(Ra.top + inner_fix_rb.getBoundingClientRect().height - document.querySelector('.cbp').getBoundingClientRect().bottom + 0);
\t\tRrb2 = Math.round(Ra.top + inner_fix_rb.getBoundingClientRect().height - document.querySelector('.cbp').getBoundingClientRect().top);
\t\tRrb3 = Math.round(Ra.top + inner_fix_rb.getBoundingClientRect().height - document.querySelector('.cbp').getBoundingClientRect().top - 220);
\t\tif ((Ra.top - top_rb) <= 0) {
\t\t\tif ((Ra.top - top_rb) <= Rrb) {
\t\t\t  inner_fix_rb.className = 'stop';
\t\t\t  inner_fix_rb.style.top = - Rrb +'px';

\t\t\t  \tif ((Ra.top - top_rb) <= Rrb2) {
\t\t\t\t\t\$('.cbp').css('margin-right',fix_rb.offsetWidth + 10);
\t\t\t\t}else{
\t\t\t\t\t\$('.cbp').removeAttr('style');
\t\t\t\t}


\t\t\t} else {

\t\t\t\tif ((Ra.top - top_rb) <= Rrb2) {
\t\t\t\t\t\$('.cbp').css('margin-right',fix_rb.offsetWidth + 10);
\t\t\t\t}else{
\t\t\t\t\t\$('.cbp').removeAttr('style');
\t\t\t\t}
\t\t\t  inner_fix_rb.className = 'sticky';
\t\t\t  inner_fix_rb.style.top = top_rb + 'px';

\t\t\t}
\t\t} else {
\t\t\tinner_fix_rb.className = '';
\t\t\tinner_fix_rb.style.top = '';
\t\t}
\t} else {
\t\t\$('.cbp').removeAttr('style');
\t}
}

});
</script>
";
        }
        // line 1190
        echo "<script>
\$('.tabs__active_line').css({
\t'width':\$('.tabs__header__scroll .my-tabs li.active').outerWidth() + 10,
\t'left':\$('.tabs__header__scroll .my-tabs li.active').offset().left - \$('.tabs__header__scroll > .my-tabs').offset().left
});
\$('.tabs__header__scroll .my-tabs li a').click(function(){
\t\$('.tabs__active_line').css({
\t\t'width':\$(this).outerWidth(),
\t\t'left':\$(this).parent().offset().left - \$('.tabs__header__scroll > .my-tabs').offset().left
\t});

\tlet width_block = \$('.tabs__header__scroll').width();
\tlet li_width = \$(this).outerWidth();
\tlet li_left = \$(this).parent().offset().left - \$('.tabs__header__scroll > .my-tabs').offset().left;
\tlet goLeft = li_left - (width_block / 2) + (li_width / 2);
\tif(goLeft > 0){
\t\t\$('.tabs__header__scroll').animate({scrollLeft:goLeft})
\t} else {
\t\t\$('.tabs__header__scroll').animate({scrollLeft:0})
\t}
\tif (viewport().width < 768) {
\t\t\$('html, body').animate({ scrollTop: \$('.tab-content').offset().top - 115}, 250);
\t}
});
function goTab(selector){
\t\$('a[href='+ selector +']').trigger('click');
\tvar top_tab = 15;
\tif (\$(window).width() > 992) {
\t\tif(\$('.fix-header-2.h-sticky').length == 1) {
\t\t\tvar top_tab = \$('.fix-header-2.h-sticky').outerHeight() + 15;
\t\t\tvar top_tab = \$('.tabs__header').outerHeight();

\t\t}
\t\tif(\$('#top-fixed').length == 1) {
\t\t\tvar top_tab = \$('#top-fixed').outerHeight() + 15;
\t\t}
\t}
\t\$('html, body').animate({ scrollTop: \$(selector).offset().top - top_tab - \$('.tabs__header').outerHeight() - 40}, 250);
}
</script>

        ";
        // line 1231
        if ((twig_get_attribute($this->env, $this->source, ($context["fcpdata"] ?? null), "status", [], "array", true, true, false, 1231) && (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["fcpdata"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["status"] ?? null) : null))) {
            echo " 
        <script>
\t\t";
            // line 1233
            if ( !twig_test_empty(($context["fcpdata_css"] ?? null))) {
                echo " 
        addStyleHeader('";
                // line 1234
                echo ($context["fcpdata_css"] ?? null);
                echo "');
        ";
            }
            // line 1236
            echo "        function open_popup_fcp(product_id) {
\t\t\t\$.ajax({
\t\t\t\ttype:'get',
\t\t\t\turl:'index.php?route=extension/module/luxshop_found_cheaper_product&product_id='+product_id,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\tcreatOverlayLoadPage(true);
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\tcreatOverlayLoadPage(false);
\t\t\t\t},
\t\t\t\tsuccess:function (data) {
\t\t\t\t\thtml  = '<div id=\"modal-found-cheaper\" class=\"modal fade\" role=\"dialog\">';
\t\t\t\t\thtml += '\t<div class=\"modal-dialog modal-4\">';
\t\t\t\t\thtml += '\t\t<div class=\"modal-content\">';
\t\t\t\t\thtml += '\t\t\t<div class=\"modal-body\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>'+ data +'</div>';
\t\t\t\t\thtml += '\t\t</div>';
\t\t\t\t\thtml += '\t</div>';
\t\t\t\t\thtml += '</div>';

\t\t\t\t\t\$('html body').append(html);
\t\t\t\t\t\$('#modal-found-cheaper').modal('show');
\t\t\t\t}
\t\t\t});
        }
        </script>
        ";
        }
        // line 1262
        echo "      


";
        // line 1265
        if ((array_key_exists("ls_microdata_status", $context) && (($context["ls_microdata_status"] ?? null) == 1))) {
            // line 1266
            echo "<script type=\"application/ld+json\">
{
\"@context\": \"http://schema.org\",
\"@type\": \"BreadcrumbList\",
\"itemListElement\":
[
";
            // line 1272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
                // line 1273
                echo "{
\t\"@type\": \"ListItem\",
\t\"position\": ";
                // line 1275
                echo ($context["key"] + 1);
                echo ",
\t\"item\":
\t\t{
\t\t\"@id\": \"";
                // line 1278
                echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["breadcrumb"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["href"] ?? null) : null);
                echo "\",
\t\t\"name\": \"";
                // line 1279
                echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["breadcrumb"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["text"] ?? null) : null);
                echo "\"
\t\t}
}";
                // line 1281
                if ((($context["key"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
                    echo ",";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1283
            echo "]
}
</script>
<script type=\"application/ld+json\">
{
\"@context\": \"https://schema.org\",
\"@type\": \"Product\",
\"url\": \"";
            // line 1290
            echo ($context["url_product"] ?? null);
            echo "\",
\"image\": \"";
            // line 1291
            echo ($context["thumb"] ?? null);
            echo "\",
";
            // line 1292
            if (($context["microdata_category_name"] ?? null)) {
                // line 1293
                echo "\"category\": \"";
                echo ($context["microdata_category_name"] ?? null);
                echo "\",
";
            }
            // line 1295
            if (($context["manufacturer"] ?? null)) {
                // line 1296
                echo "\"brand\": {\"@type\": \"Brand\",\"name\": \"";
                echo ($context["manufacturer"] ?? null);
                echo "\"},
\"manufacturer\": \"";
                // line 1297
                echo ($context["manufacturer"] ?? null);
                echo "\",
";
            }
            // line 1299
            echo "\"model\": \"";
            echo ($context["model"] ?? null);
            echo "\",
\"productID\": \"";
            // line 1300
            echo ($context["productID"] ?? null);
            echo "\",
";
            // line 1301
            if ( !twig_test_empty(($context["sku"] ?? null))) {
                // line 1302
                echo "\"sku\":\"";
                echo ($context["sku"] ?? null);
                echo "\",
";
            }
            // line 1304
            if (($context["rating"] ?? null)) {
                // line 1305
                echo "\"aggregateRating\": {
\"@type\": \"AggregateRating\",
\"ratingValue\": \"";
                // line 1307
                echo ($context["ratingValue"] ?? null);
                echo "\",
\"reviewCount\": \"";
                // line 1308
                echo ($context["reviewCount"] ?? null);
                echo "\",
\"bestRating\": \"5\",
\"worstRating\": \"1\"
},
";
            }
            // line 1313
            echo "\"description\": \"";
            echo ($context["microdata_description"] ?? null);
            echo "\",
\"name\": \"";
            // line 1314
            echo ($context["heading_title"] ?? null);
            echo "\",
\"offers\": {
\"@type\": \"Offer\",
\"url\": \"";
            // line 1317
            echo ($context["url_product"] ?? null);
            echo "\",
\"availability\": \"https://schema.org/";
            // line 1318
            echo ((($context["availability"] ?? null)) ? ("InStock") : ("OutOfStock"));
            echo "\",
\"price\": \"";
            // line 1319
            echo ($context["schema_price"] ?? null);
            echo "\",
\"priceCurrency\": \"";
            // line 1320
            echo ($context["microdata_currency"] ?? null);
            echo "\",
\"itemCondition\": \"https://schema.org/NewCondition\",
\"priceValidUntil\": \"";
            // line 1322
            echo ($context["priceValidUntil"] ?? null);
            echo "\"
}
";
            // line 1324
            if (($context["reviewsMicrodata"] ?? null)) {
                // line 1325
                echo ",\"review\": [
";
                // line 1326
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["reviewsMicrodata"] ?? null));
                foreach ($context['_seq'] as $context["key_r"] => $context["res_r"]) {
                    // line 1327
                    echo "{
\"@type\": \"Review\",
\"author\": {\"@type\": \"Person\",\"name\": \"";
                    // line 1329
                    echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["res_r"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["author"] ?? null) : null);
                    echo "\"},
\"datePublished\": \"";
                    // line 1330
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["res_r"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["date_added"] ?? null) : null);
                    echo "\",
\"description\": \"";
                    // line 1331
                    echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["res_r"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["text"] ?? null) : null);
                    echo "\",
\"reviewRating\": {
\t\"@type\": \"Rating\",
\t\"bestRating\": \"5\",
\t\"ratingValue\": \"";
                    // line 1335
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["res_r"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["rating"] ?? null) : null);
                    echo "\",
\t\"worstRating\": \"1\"
\t}
}";
                    // line 1338
                    if ((($context["key_r"] + 1) < twig_length_filter($this->env, ($context["reviewsMicrodata"] ?? null)))) {
                        echo ",";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_r'], $context['res_r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1340
                echo "]
";
            }
            // line 1342
            if (($context["attribute_groups"] ?? null)) {
                // line 1343
                echo ",\"additionalProperty\": [
";
                // line 1344
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
                foreach ($context['_seq'] as $context["key_ag"] => $context["attribute_group"]) {
                    // line 1345
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["attribute_group"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["attribute"] ?? null) : null));
                    foreach ($context['_seq'] as $context["key_a"] => $context["attribute"]) {
                        // line 1346
                        echo "{
\"@type\": \"PropertyValue\",
\t\"name\": \"";
                        // line 1348
                        echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["attribute"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["name"] ?? null) : null);
                        echo "\",
\t\"value\": \"";
                        // line 1349
                        echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["attribute"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["text"] ?? null) : null);
                        echo "\"
}";
                        // line 1350
                        if ((($context["key_a"] + 1) < twig_length_filter($this->env, (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["attribute_group"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["attribute"] ?? null) : null)))) {
                            echo ",";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key_a'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1352
                    if ((($context["key_ag"] + 1) < twig_length_filter($this->env, ($context["attribute_groups"] ?? null)))) {
                        echo ",";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_ag'], $context['attribute_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1354
                echo "]
";
            }
            // line 1356
            if (($context["products"] ?? null)) {
                // line 1357
                echo ",\"isRelatedTo\": [
";
                // line 1358
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["key_p"] => $context["product"]) {
                    // line 1359
                    echo "{
\"@type\": \"Product\",
\"image\": \"";
                    // line 1361
                    echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["product"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["thumb"] ?? null) : null);
                    echo "\",
\"url\": \"";
                    // line 1362
                    echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["product"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["href"] ?? null) : null);
                    echo "\",
\"name\": \"";
                    // line 1363
                    echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["product"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["name"] ?? null) : null);
                    echo "\",
\"description\": \"";
                    // line 1364
                    echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["product"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["microdata_description"] ?? null) : null);
                    echo "\",
\"offers\": {
\"@type\": \"Offer\",
\"price\": \"";
                    // line 1367
                    echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["product"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["microdata_price"] ?? null) : null);
                    echo "\",
\"priceCurrency\": \"";
                    // line 1368
                    echo ($context["microdata_currency"] ?? null);
                    echo "\"
}
}";
                    // line 1370
                    if ((($context["key_p"] + 1) < twig_length_filter($this->env, ($context["products"] ?? null)))) {
                        echo ",";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_p'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "]";
            }
            // line 1371
            echo "}
</script>
";
        }
        // line 1374
        echo "

<script>
function price_format_autocalc(n)
{ 
    c = ";
        // line 1379
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currency_autocalc"] ?? null), "decimals", [], "any", false, false, false, 1379))) ? (0) : (twig_get_attribute($this->env, $this->source, ($context["currency_autocalc"] ?? null), "decimals", [], "any", false, false, false, 1379)));
        echo ";
    d = '";
        // line 1380
        echo twig_get_attribute($this->env, $this->source, ($context["currency_autocalc"] ?? null), "decimal_point", [], "any", false, false, false, 1380);
        echo "'; 
    t = '";
        // line 1381
        echo twig_get_attribute($this->env, $this->source, ($context["currency_autocalc"] ?? null), "thousand_point", [], "any", false, false, false, 1381);
        echo "'; 
    s_left = '";
        // line 1382
        echo twig_get_attribute($this->env, $this->source, ($context["currency_autocalc"] ?? null), "symbol_left", [], "any", false, false, false, 1382);
        echo "';
    s_right = '";
        // line 1383
        echo twig_get_attribute($this->env, $this->source, ($context["currency_autocalc"] ?? null), "symbol_right", [], "any", false, false, false, 1383);
        echo "';
     
    n = n * ";
        // line 1385
        echo twig_get_attribute($this->env, $this->source, ($context["currency_autocalc"] ?? null), "value", [], "any", false, false, false, 1385);
        echo ";
    i = parseInt(n = Math.abs(n).toFixed(c)) + ''; 

    j = ((j = i.length) > 3) ? j % 3 : 0; 
    return s_left + (j ? i.substr(0, j) + t : '') + i.substr(j).replace(/(\\d{3})(?=\\d)/g, \"\$1\" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : '') + s_right; 
}

function calculate_tax_autocalc(price)
{
    ";
        // line 1395
        echo " ";
        if ((array_key_exists("tax_rates", $context) && ($context["tax"] ?? null))) {
            // line 1396
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tax_rates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
                echo " 
 ";
                // line 1397
                if ((twig_get_attribute($this->env, $this->source, $context["tax_rate"], "type", [], "any", false, false, false, 1397) == "F")) {
                    // line 1398
                    echo " ";
                    echo (("price += " . twig_get_attribute($this->env, $this->source, $context["tax_rate"], "rate", [], "any", false, false, false, 1398)) . ";");
                    echo "
 ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1399
$context["tax_rate"], "type", [], "any", false, false, false, 1399) == "P")) {
                    // line 1400
                    echo " ";
                    echo (("price += (price * " . twig_get_attribute($this->env, $this->source, $context["tax_rate"], "rate", [], "any", false, false, false, 1400)) . ") / 100.0;");
                    echo "
 ";
                }
                // line 1402
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1403
            echo " ";
        }
        // line 1404
        echo " 
    return price;
}

function process_discounts_autocalc(price, quantity)
{
     ";
        // line 1410
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dicounts_unf_autocalc"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
            echo " 
 ";
            // line 1411
            echo ((((((("if ((quantity >= " . twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 1411)) . ") && (") . twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 1411)) . " < price)) price = ") . twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 1411)) . ";") . "
");
            echo "
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1413
        echo " 
    return price;
}


animate_delay = 10;

main_price_autocalc_final = calculate_tax_autocalc(";
        // line 1420
        echo ($context["price_value"] ?? null);
        echo ");
main_price_autocalc_start = calculate_tax_autocalc(";
        // line 1421
        echo ($context["price_value"] ?? null);
        echo ");
main_step = 0;
main_timeout_id = 0;

function animateMainPrice_callback() {
    main_price_autocalc_start += main_step;
    
    if ((main_step > 0) && (main_price_autocalc_start > main_price_autocalc_final)){
        main_price_autocalc_start = main_price_autocalc_final;
    } else if ((main_step < 0) && (main_price_autocalc_start < main_price_autocalc_final)) {
        main_price_autocalc_start = main_price_autocalc_final;
    } else if (main_step == 0) {
        main_price_autocalc_start = main_price_autocalc_final;
    }
    
    \$('.autocalc-product-price').html( price_format_autocalc(main_price_autocalc_start) );
    
    if (main_price_autocalc_start != main_price_autocalc_final) {
        main_timeout_id = setTimeout(animateMainPrice_callback, animate_delay);
    }
}

function animateMainPriceAutocalc(price) {
    main_price_autocalc_start = main_price_autocalc_final;
    main_price_autocalc_final = price;
    main_step = (main_price_autocalc_final - main_price_autocalc_start) / 10;
    
    clearTimeout(main_timeout_id);
    main_timeout_id = setTimeout(animateMainPrice_callback, animate_delay);
}


";
        // line 1453
        if (($context["special"] ?? null)) {
            echo " 
special_autocalc_price_final = calculate_tax_autocalc(";
            // line 1454
            echo ($context["special_value"] ?? null);
            echo ");
special_autocalc_price_start = calculate_tax_autocalc(";
            // line 1455
            echo ($context["special_value"] ?? null);
            echo ");
special_autocalc_step = 0;
special_autocalc_timeout_id = 0;

function animateSpecialPrice_autocalc_callback_autocalc() {
    special_autocalc_price_start += special_autocalc_step;
    
    if ((special_autocalc_step > 0) && (special_autocalc_price_start > special_autocalc_price_final)){
        special_autocalc_price_start = special_autocalc_price_final;
    } else if ((special_autocalc_step < 0) && (special_autocalc_price_start < special_autocalc_price_final)) {
        special_autocalc_price_start = special_autocalc_price_final;
    } else if (special_autocalc_step == 0) {
        special_autocalc_price_start = special_autocalc_price_final;
    }
    
    \$('.autocalc-product-special').html( price_format_autocalc(special_autocalc_price_start) );
    
    if (special_autocalc_price_start != special_autocalc_price_final) {
        special_autocalc_timeout_id = setTimeout(animateSpecialPrice_autocalc_callback_autocalc, animate_delay);
    }
}

function animateSpecialPrice_autocalc(price) {
    special_autocalc_price_start = special_autocalc_price_final;
    special_autocalc_price_final = price;
    special_autocalc_step = (special_autocalc_price_final - special_autocalc_price_start) / 10;
    
    clearTimeout(special_autocalc_timeout_id);
    special_autocalc_timeout_id = setTimeout(animateSpecialPrice_autocalc_callback_autocalc, animate_delay);
}
";
        }
        // line 1485
        echo " 


function recalculateprice_autocalc()
{
    var main_price_autocalc = ";
        // line 1490
        echo ($context["price_value"] ?? null);
        echo ";
    var input_quantity = Number(\$('#product input[name=\"quantity\"]').val());
    ";
        // line 1492
        if (($context["special"] ?? null)) {
            echo " 
\t\tvar special_autocalc = ";
            // line 1493
            echo ($context["special_value"] ?? null);
            echo ";
\t";
        } else {
            // line 1494
            echo " 
\t\tvar special_autocalc = 0;
\t";
        }
        // line 1496
        echo " 
    var tax = 0;
    
    if (isNaN(input_quantity)) input_quantity = 0;
    
    ";
        // line 1501
        if (($context["special"] ?? null)) {
            echo " 
        special_coefficient = ";
            // line 1502
            echo (($context["price_value"] ?? null) / ($context["special_value"] ?? null));
            echo ";
    ";
        }
        // line 1503
        echo " 
    main_price_autocalc = process_discounts_autocalc(main_price_autocalc, input_quantity);
    tax = process_discounts_autocalc(tax, input_quantity);
    
    
    var option_price = 0;
    
    ";
        // line 1510
        if (($context["points"] ?? null)) {
            echo " 
      var points = ";
            // line 1511
            echo ($context["points_value"] ?? null);
            echo ";
      \$('input:checked,option:selected').each(function() {
          if (\$(this).data('points')) points += Number(\$(this).data('points'));
      });
      \$('.autocalc-product-points').html(points);
    ";
        }
        // line 1516
        echo " 
    
    \$('input:checked,option:selected').each(function() {
      if (\$(this).data('prefix') == '=') {
        option_price += Number(\$(this).data('price'));
        main_price_autocalc = 0;
        special_autocalc = 0;
      }
    });
    
    \$('input:checked,option:selected').each(function() {
      if (\$(this).data('prefix') == '+') {
        option_price += Number(\$(this).data('price'));
      }
      if (\$(this).data('prefix') == '-') {
        option_price -= Number(\$(this).data('price'));
      }
      if (\$(this).data('prefix') == 'u') {
        pcnt = 1.0 + (Number(\$(this).data('price')) / 100.0);
        option_price *= pcnt;
        main_price_autocalc *= pcnt;
        special_autocalc *= pcnt;
      }
      if (\$(this).data('prefix') == 'd') {
        pcnt = 1.0 - (Number(\$(this).data('price')) / 100.0);
        option_price *= pcnt;
        main_price_autocalc *= pcnt;
        special_autocalc *= pcnt;
      }
      if (\$(this).data('prefix') == '*') {
        option_price *= Number(\$(this).data('price'));
        main_price_autocalc *= Number(\$(this).data('price'));
        special_autocalc *= Number(\$(this).data('price'));
      }
    });
    
    special_autocalc += option_price;
    main_price_autocalc += option_price;

    ";
        // line 1555
        if (($context["special"] ?? null)) {
            echo " 
      main_price_autocalc = special_autocalc * special_coefficient;
      tax = special_autocalc;
    ";
        } else {
            // line 1558
            echo " 
      tax = main_price_autocalc;
    ";
        }
        // line 1560
        echo " 
    
    // Process TAX.
    main_price_autocalc = calculate_tax_autocalc(main_price_autocalc);
    special_autocalc = calculate_tax_autocalc(special_autocalc);
    
    // Раскомментировать, если нужен вывод цены с умножением на количество
    main_price_autocalc *= input_quantity;
    special_autocalc *= input_quantity;
    tax *= input_quantity;

    // Display Main Price
    animateMainPriceAutocalc(main_price_autocalc);
      
    ";
        // line 1574
        if (($context["special"] ?? null)) {
            echo " 
      animateSpecialPrice_autocalc(special_autocalc);
    ";
        }
        // line 1576
        echo " 
}

\$(document).ready(function() {
    \$('#product input[type=\"checkbox\"]').bind('change', function() { recalculateprice_autocalc(); });
    \$('#product input[type=\"radio\"]').bind('change', function() { recalculateprice_autocalc(); });
    \$('#product select').bind('change', function() { recalculateprice_autocalc(); });
    
    \$quantity_autocalc = \$('#product input[name=\"quantity\"]');
    \$quantity_autocalc.data('val', \$quantity_autocalc.val());
    (function() {
        if (\$quantity_autocalc.val() != \$quantity_autocalc.data('val')){
            \$quantity_autocalc.data('val',\$quantity_autocalc.val());
            recalculateprice_autocalc();
        }
        setTimeout(arguments.callee, 250);
    })();    
    
    ";
        // line 1594
        if ((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "price_recalc", [], "array", true, true, false, 1594) && ((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["config_additional_settings_luxshop"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["price_recalc"] ?? null) : null) == "1"))) {
            // line 1595
            echo "    recalculateprice_autocalc();
\t";
        }
        // line 1597
        echo "});
</script>
      
";
        // line 1600
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "luxshop/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3587 => 1600,  3582 => 1597,  3578 => 1595,  3576 => 1594,  3556 => 1576,  3550 => 1574,  3534 => 1560,  3529 => 1558,  3522 => 1555,  3481 => 1516,  3472 => 1511,  3468 => 1510,  3459 => 1503,  3454 => 1502,  3450 => 1501,  3443 => 1496,  3438 => 1494,  3433 => 1493,  3429 => 1492,  3424 => 1490,  3417 => 1485,  3383 => 1455,  3379 => 1454,  3375 => 1453,  3340 => 1421,  3336 => 1420,  3327 => 1413,  3318 => 1411,  3312 => 1410,  3304 => 1404,  3301 => 1403,  3295 => 1402,  3289 => 1400,  3287 => 1399,  3282 => 1398,  3280 => 1397,  3273 => 1396,  3270 => 1395,  3258 => 1385,  3253 => 1383,  3249 => 1382,  3245 => 1381,  3241 => 1380,  3237 => 1379,  3230 => 1374,  3225 => 1371,  3215 => 1370,  3210 => 1368,  3206 => 1367,  3200 => 1364,  3196 => 1363,  3192 => 1362,  3188 => 1361,  3184 => 1359,  3180 => 1358,  3177 => 1357,  3175 => 1356,  3171 => 1354,  3163 => 1352,  3155 => 1350,  3151 => 1349,  3147 => 1348,  3143 => 1346,  3139 => 1345,  3135 => 1344,  3132 => 1343,  3130 => 1342,  3126 => 1340,  3118 => 1338,  3112 => 1335,  3105 => 1331,  3101 => 1330,  3097 => 1329,  3093 => 1327,  3089 => 1326,  3086 => 1325,  3084 => 1324,  3079 => 1322,  3074 => 1320,  3070 => 1319,  3066 => 1318,  3062 => 1317,  3056 => 1314,  3051 => 1313,  3043 => 1308,  3039 => 1307,  3035 => 1305,  3033 => 1304,  3027 => 1302,  3025 => 1301,  3021 => 1300,  3016 => 1299,  3011 => 1297,  3006 => 1296,  3004 => 1295,  2998 => 1293,  2996 => 1292,  2992 => 1291,  2988 => 1290,  2979 => 1283,  2971 => 1281,  2966 => 1279,  2962 => 1278,  2956 => 1275,  2952 => 1273,  2948 => 1272,  2940 => 1266,  2938 => 1265,  2933 => 1262,  2905 => 1236,  2900 => 1234,  2896 => 1233,  2891 => 1231,  2848 => 1190,  2762 => 1106,  2760 => 1105,  2722 => 1070,  2715 => 1066,  2651 => 1004,  2644 => 1000,  2635 => 994,  2627 => 989,  2624 => 988,  2622 => 987,  2509 => 876,  2489 => 859,  2477 => 849,  2465 => 839,  2463 => 838,  2460 => 837,  2441 => 820,  2439 => 819,  2419 => 802,  2414 => 801,  2408 => 798,  2400 => 792,  2388 => 785,  2380 => 783,  2377 => 782,  2369 => 780,  2366 => 779,  2363 => 778,  2349 => 773,  2346 => 772,  2343 => 771,  2340 => 770,  2332 => 768,  2330 => 767,  2313 => 765,  2310 => 764,  2307 => 763,  2290 => 755,  2282 => 749,  2280 => 748,  2277 => 747,  2269 => 745,  2266 => 744,  2261 => 742,  2253 => 741,  2248 => 740,  2242 => 738,  2240 => 737,  2233 => 736,  2231 => 735,  2228 => 734,  2223 => 731,  2213 => 729,  2210 => 728,  2204 => 727,  2196 => 721,  2188 => 715,  2185 => 714,  2180 => 713,  2176 => 711,  2173 => 710,  2167 => 708,  2164 => 707,  2158 => 705,  2155 => 704,  2152 => 703,  2146 => 700,  2142 => 698,  2136 => 696,  2133 => 695,  2131 => 694,  2125 => 693,  2121 => 691,  2115 => 689,  2113 => 688,  2095 => 687,  2092 => 686,  2086 => 683,  2082 => 682,  2079 => 681,  2076 => 680,  2070 => 677,  2066 => 676,  2063 => 675,  2060 => 674,  2054 => 671,  2050 => 670,  2047 => 669,  2044 => 668,  2038 => 665,  2034 => 664,  2031 => 663,  2029 => 662,  2023 => 658,  2019 => 657,  2015 => 656,  2010 => 654,  2005 => 651,  2002 => 650,  2000 => 649,  1997 => 648,  1993 => 646,  1987 => 645,  1980 => 644,  1970 => 643,  1966 => 642,  1962 => 641,  1959 => 640,  1957 => 639,  1953 => 637,  1948 => 634,  1942 => 632,  1933 => 628,  1927 => 625,  1922 => 623,  1915 => 619,  1905 => 618,  1899 => 615,  1889 => 614,  1881 => 609,  1847 => 578,  1838 => 572,  1834 => 570,  1832 => 569,  1828 => 568,  1823 => 565,  1820 => 564,  1817 => 563,  1810 => 562,  1803 => 561,  1796 => 560,  1793 => 559,  1777 => 546,  1772 => 543,  1769 => 542,  1765 => 540,  1758 => 538,  1749 => 535,  1745 => 534,  1742 => 533,  1737 => 532,  1731 => 530,  1729 => 529,  1726 => 528,  1722 => 527,  1719 => 526,  1717 => 525,  1713 => 524,  1710 => 523,  1708 => 522,  1703 => 519,  1700 => 518,  1693 => 517,  1684 => 516,  1677 => 515,  1674 => 514,  1668 => 512,  1665 => 511,  1659 => 509,  1656 => 508,  1650 => 506,  1648 => 505,  1644 => 504,  1635 => 500,  1626 => 497,  1624 => 496,  1618 => 492,  1614 => 490,  1607 => 489,  1600 => 488,  1593 => 487,  1586 => 486,  1579 => 485,  1573 => 484,  1569 => 482,  1567 => 481,  1564 => 480,  1558 => 477,  1544 => 475,  1542 => 474,  1539 => 473,  1523 => 471,  1507 => 469,  1505 => 468,  1499 => 464,  1491 => 462,  1488 => 461,  1480 => 459,  1478 => 458,  1461 => 446,  1452 => 440,  1443 => 438,  1435 => 437,  1427 => 436,  1422 => 433,  1416 => 430,  1412 => 428,  1409 => 427,  1405 => 425,  1394 => 423,  1390 => 422,  1387 => 421,  1384 => 420,  1376 => 418,  1374 => 417,  1371 => 416,  1361 => 414,  1358 => 413,  1350 => 411,  1347 => 410,  1343 => 408,  1335 => 406,  1332 => 405,  1326 => 402,  1316 => 401,  1310 => 399,  1308 => 398,  1305 => 397,  1303 => 396,  1300 => 395,  1297 => 394,  1291 => 393,  1286 => 392,  1283 => 391,  1277 => 390,  1272 => 389,  1270 => 388,  1267 => 387,  1264 => 386,  1261 => 385,  1255 => 383,  1252 => 382,  1249 => 381,  1246 => 380,  1240 => 377,  1237 => 376,  1235 => 375,  1228 => 370,  1222 => 366,  1211 => 364,  1207 => 363,  1203 => 362,  1196 => 359,  1193 => 358,  1188 => 355,  1177 => 350,  1173 => 349,  1165 => 346,  1152 => 344,  1149 => 343,  1145 => 342,  1142 => 341,  1136 => 339,  1134 => 338,  1131 => 337,  1129 => 336,  1126 => 335,  1122 => 333,  1116 => 332,  1103 => 326,  1096 => 324,  1091 => 323,  1088 => 322,  1075 => 316,  1068 => 314,  1063 => 313,  1060 => 312,  1047 => 306,  1040 => 304,  1035 => 303,  1032 => 302,  1024 => 299,  1016 => 298,  1010 => 297,  1005 => 296,  1002 => 295,  990 => 292,  984 => 291,  979 => 290,  976 => 289,  964 => 286,  958 => 285,  953 => 284,  950 => 283,  945 => 280,  939 => 279,  932 => 275,  920 => 274,  904 => 273,  901 => 272,  898 => 271,  877 => 267,  865 => 266,  861 => 264,  848 => 260,  836 => 259,  832 => 257,  829 => 256,  826 => 255,  822 => 254,  818 => 253,  814 => 252,  809 => 251,  806 => 250,  801 => 247,  795 => 246,  788 => 242,  776 => 241,  760 => 240,  757 => 239,  754 => 238,  733 => 234,  721 => 233,  717 => 231,  704 => 227,  692 => 226,  688 => 224,  685 => 223,  682 => 222,  678 => 221,  674 => 220,  670 => 219,  665 => 218,  662 => 217,  657 => 214,  650 => 212,  643 => 210,  641 => 209,  628 => 208,  624 => 207,  620 => 206,  614 => 205,  608 => 204,  603 => 203,  600 => 202,  596 => 201,  593 => 200,  590 => 199,  587 => 198,  581 => 195,  578 => 194,  572 => 193,  569 => 192,  563 => 191,  556 => 188,  550 => 186,  548 => 185,  545 => 184,  542 => 183,  537 => 182,  534 => 181,  530 => 180,  525 => 178,  518 => 177,  515 => 176,  512 => 175,  506 => 172,  502 => 171,  498 => 170,  491 => 169,  488 => 168,  478 => 164,  472 => 163,  464 => 157,  456 => 151,  453 => 150,  448 => 149,  444 => 147,  441 => 146,  431 => 144,  429 => 143,  423 => 142,  418 => 139,  413 => 136,  397 => 122,  391 => 121,  389 => 120,  378 => 118,  374 => 117,  371 => 116,  366 => 115,  364 => 114,  354 => 111,  350 => 110,  346 => 108,  343 => 107,  323 => 89,  320 => 88,  314 => 87,  312 => 86,  297 => 84,  289 => 83,  286 => 82,  281 => 81,  278 => 80,  276 => 79,  262 => 76,  256 => 75,  251 => 72,  244 => 69,  238 => 68,  235 => 67,  232 => 66,  225 => 63,  219 => 62,  216 => 61,  213 => 60,  206 => 57,  200 => 56,  197 => 55,  194 => 54,  187 => 51,  181 => 50,  178 => 49,  176 => 48,  167 => 45,  165 => 44,  159 => 43,  156 => 42,  154 => 41,  149 => 40,  146 => 39,  143 => 38,  140 => 37,  137 => 36,  134 => 35,  131 => 34,  129 => 33,  123 => 30,  118 => 28,  113 => 27,  110 => 26,  107 => 25,  104 => 24,  101 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  84 => 17,  80 => 16,  76 => 15,  72 => 13,  65 => 11,  59 => 9,  51 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/product/product.twig", "");
    }
}
