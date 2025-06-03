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

/* luxshop/template/common/header.twig */
class __TwigTemplate_a6fe4f2fb047a2760d94cbb20e33ddcc73df32f44da64c884b9f805c743baa85 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content= \"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<meta property=\"og:title\" content=\"";
        echo ($context["title"] ?? null);
        echo "\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"";
        // line 22
        echo ($context["home_page"] ?? null);
        echo "\" />
<meta property=\"og:image\" content=\"";
        // line 23
        echo (( !twig_test_empty(($context["og_image"] ?? null))) ? (($context["og_image"] ?? null)) : (($context["logo"] ?? null)));
        echo "\" />
<meta property=\"og:site_name\" content=\"";
        // line 24
        echo ($context["name"] ?? null);
        echo "\" />
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 26
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 26);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 26);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "<style>
";
        // line 29
        if ((array_key_exists("hide_text_addtocart", $context) && (($context["hide_text_addtocart"] ?? null) == "1"))) {
            // line 30
            echo "@media (min-width: 600px) {
\t.product-grid .product-thumb .actions div.cart .btn-general,
\t.container-module .product-thumb .actions div.cart .btn-general {padding: 5px 7px;}
\t.product-grid .product-thumb .actions div.cart .btn-general span.text-cart-add,
\t.container-module .product-thumb .actions div.cart .btn-general span.text-cart-add {display: none;}
}
";
        }
        // line 37
        if ((array_key_exists("bg_product_image", $context) && (($context["bg_product_image"] ?? null) == "1"))) {
            // line 38
            echo ".product-thumb .image a:after {
\tcontent: '';
\tposition: absolute;
\ttop: 0px;
\tleft: 0px;
\theight: 100%;
\twidth: 100%;
\tbackground-color: rgba(0,26,52,.015);
\tborder-radius: 7px 7px 0px 0px;
}
.position-no-owl .container-module .product-thumb .image a:after {
\tbackground-color: transparent;
}
";
            // line 51
            if ((array_key_exists("ls_type_btn", $context) && (($context["ls_type_btn"] ?? null) == 1))) {
                // line 52
                echo ".product-thumb .btn-quickview,
.product-thumb .btn-fastorder {
\tbox-shadow:1px 1px 16px -3px rgba(0, 0, 0, 0.16);
\tbackground: #fff;
}
@media (max-width: 992px) {
\t.product-grid .product-thumb .actions .addit-action > div > .btn, .container-module .product-thumb .actions .addit-action > div > .btn {
\t\tbackground: #fff;
\t\tbox-shadow:1px 1px 16px -3px rgba(0, 0, 0, 0.16);
\t}
}
";
            }
        }
        // line 65
        echo "@media (min-width: 992px) {
";
        // line 66
        if ((array_key_exists("ls_type_btn", $context) && (($context["ls_type_btn"] ?? null) == 1))) {
            // line 67
            echo ".quickview + div.quick-order {
\tmargin-bottom: 75px;
}
";
        }
        // line 71
        if (((array_key_exists("ls_type_btn", $context) && (($context["ls_type_btn"] ?? null) == 2)) || (($context["ls_type_btn"] ?? null) == 3))) {
            // line 72
            echo "\t.product-grid .product-thumb .actions div.addit-action,
\t.container-module .product-thumb .actions div.addit-action {
\t\tposition: absolute;
\t\tdisplay: flex;
\t\tmargin-bottom: 30px;
\t\ttransition: all .15s ease 0s;
\t\topacity: 0;
\t}
";
            // line 80
            if ((($context["ls_type_btn"] ?? null) == 2)) {
                // line 81
                echo "\t.product-grid .product-thumb .actions div.addit-action,
\t.container-module .product-thumb .actions div.addit-action {
\t\tbottom:100%;
\t\tright:-65px;
\t\tflex-direction: column;
\t}
\t.product-grid .product-thumb .actions div.addit-action .quick-order,
\t.product-grid .product-thumb .actions div.addit-action .compare,
\t.container-module .product-thumb .actions div.addit-action .quick-order,
\t.container-module .product-thumb .actions div.addit-action .compare{
\t\tmargin-top: 10px;
\t}
\t.product-grid .product-thumb .actions div.addit-action .wishlist,
\t.container-module .product-thumb .actions div.addit-action .wishlist{
\t\tmargin-left: 0px;
\t\tmargin-top: 10px;
\t}
\t.product-grid .product-thumb:hover .actions div.addit-action,
\t.container-module .product-thumb:hover .actions div.addit-action {
\t\tright:15px;
\t\topacity: 1;
\t}
";
            }
            // line 104
            if ((($context["ls_type_btn"] ?? null) == 3)) {
                // line 105
                echo "\t.product-grid .product-thumb .actions div.addit-action,
\t.container-module .product-thumb .actions div.addit-action {
\t\tbottom:88%;
\t\tleft: 0;
\t\tflex-direction: row;
\t\twidth: 100%;
\t\tjustify-content: center;
\t}
\t.product-grid .product-thumb .actions div.addit-action > div,
\t.container-module .product-thumb .actions div.addit-action > div{
\t\tmargin-left: 5px;
\t\tmargin-right: 5px;
\t}
\t.product-grid .product-thumb:hover .actions div.addit-action,
\t.container-module .product-thumb:hover .actions div.addit-action {
\t\tbottom:100%;
\t\topacity: 1;
\t}
";
            }
            // line 124
            echo ".product-grid .product-thumb .actions div.addit-action .quickview,
.product-grid .product-thumb .actions div.addit-action .quick-order,
.container-module .product-thumb .actions div.addit-action .quickview,
.container-module .product-thumb .actions div.addit-action .quick-order {
\tposition: relative;
\tbottom: 0px;
\tright: 0px;
\topacity: 1;
\tvisibility: visible;
\ttext-align: center;
\tmargin-bottom: 0px;
}
.product-grid .product-thumb .price,
.container-module .product-thumb .price {
\tmargin-bottom: \t0px;
}
.product-grid  .product-thumb .actions,
.container-module .product-thumb .actions {
\twidth: auto;
\tmargin-left: auto;
}
.product-grid  .product-thumb .quantity_plus_minus,
.container-module .product-thumb .quantity_plus_minus {
\tright: 15px;
\tbottom:48px;
\tposition: absolute;
}
.product-grid .product-description,
.container-module .product-description {
\tmargin-bottom: 25px !important;
}
";
            // line 155
            if ((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_btn_module", [], "any", true, true, false, 155) && (twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "quantity_btn_module", [], "any", false, false, false, 155) == "1"))) {
                // line 156
                echo ".product-thumb .product-model,
.product-thumb .rating {
\tmargin-right: 34px;
}
";
            }
            // line 161
            echo "}
";
            // line 162
            if ((array_key_exists("bg_product_image", $context) && (($context["bg_product_image"] ?? null) == "1"))) {
                // line 163
                echo ".product-thumb .btn-quickview,
.product-thumb .btn-fastorder,
.product-thumb .btn-compare,
.product-thumb .btn-wishlist {
\tbox-shadow:1px 1px 16px -3px rgba(0, 0, 0, 0.16);
\tbackground: #ffffff;
}
";
            }
        }
        // line 172
        echo "</style>
";
        // line 173
        echo ($context["css_luxshop"] ?? null);
        echo "
";
        // line 174
        if (($context["minifycss"] ?? null)) {
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                // line 176
                echo "<link href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 176);
                echo "\" rel=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 176);
                echo "\" media=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 176);
                echo "\" />
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 179
        if (($context["config_ns_themes_custom_bg_mode"] ?? null)) {
            // line 180
            if (($context["config_themes_custom_bg_img_preview"] ?? null)) {
                // line 181
                echo "<style>body {background:url('image/";
                echo ($context["config_themes_custom_bg_img_preview"] ?? null);
                echo "')";
                if (($context["config_themes_custom_bg_repeat"] ?? null)) {
                    echo " ";
                    echo ($context["config_themes_custom_bg_repeat"] ?? null);
                    echo " ";
                }
                echo " ";
                if (($context["config_themes_custom_bg_attachment"] ?? null)) {
                    echo " ";
                    echo ($context["config_themes_custom_bg_attachment"] ?? null);
                    echo " ";
                }
                echo " ";
                if (($context["config_themes_custom_bg_position"] ?? null)) {
                    echo " ";
                    echo ($context["config_themes_custom_bg_position"] ?? null);
                    echo " ";
                }
                echo ";}</style>
";
            }
        } elseif ((        // line 183
($context["config_ns_themes_custom_bg_mode_color"] ?? null) != "")) {
            // line 184
            echo "<style>body {background-color: ";
            echo ($context["config_ns_themes_custom_bg_mode_color"] ?? null);
            echo ";}</style>
";
        }
        // line 186
        if ((($context["config_on_off_shopping_cart_hover"] ?? null) == "1")) {
            // line 187
            echo "<style>
@media (min-width: 992px){
#cart:hover .dropdown-menu{
\tdisplay:block;
}
#cart:hover  .dropdown-menu:before{
\tcontent: \"\";
\tposition: absolute;
\ttop: -7px;
\twidth: 100%;
\theight: 9px;
\tbackground: transparent;
}
#cart:hover .car-down{
\t-webkit-transform: rotate(-180deg);
\ttransform: rotate(-180deg);
}
}
</style>
";
        }
        // line 207
        if ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "header_bg_mode", [], "any", true, true, false, 207) && (twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "header_bg_mode", [], "any", false, false, false, 207) == "1"))) {
            // line 208
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "header_bg_img", [], "any", false, false, false, 208)) {
                // line 209
                echo "\t\t<style>header {background:url('image/";
                echo twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "header_bg_img", [], "any", false, false, false, 209);
                echo "')";
                if (twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "header_bg_repeat", [], "any", false, false, false, 209)) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "header_bg_repeat", [], "any", false, false, false, 209);
                    echo " ";
                }
                echo " ";
                if (twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "header_bg_position", [], "any", false, false, false, 209)) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "header_bg_position", [], "any", false, false, false, 209);
                    echo " ";
                }
                echo ";}</style>
\t";
            }
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 211
($context["nst_data"] ?? null), "header_bg_mode", [], "any", true, true, false, 211) && (twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "header_bg_mode", [], "any", false, false, false, 211) == "0"))) {
            // line 212
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "header_bg_mode_color", [], "any", false, false, false, 212) != "")) {
                // line 213
                echo "\t\t<style>header {background-color: ";
                echo twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "header_bg_mode_color", [], "any", false, false, false, 213);
                echo ";}</style>
\t";
            }
        }
        // line 216
        if (twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "defaut_display_view", [], "any", true, true, false, 216)) {
            // line 217
            echo "<script>
if (localStorage.getItem('display') === null) {
localStorage.setItem('display', '";
            // line 219
            echo twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "defaut_display_view", [], "any", false, false, false, 219);
            echo "');
}
</script>
";
        }
        // line 223
        if ((array_key_exists("site_screen_width", $context) && (($context["site_screen_width"] ?? null) == 1))) {
            // line 224
            echo "<style>.header_v_3 .header_dopmenu_doptext {display: none;}</style>
";
        }
        // line 226
        if ((array_key_exists("site_screen_width", $context) && (($context["site_screen_width"] ?? null) == 2))) {
            // line 227
            echo "<style>
@media (min-width: 1330px){
\t.container{width:1300px;}
\t.breadcrumb.col-lg-offset-3, .breadcrumb.col-md-offset-3 {margin-left: 20.4%;}
\t.col-md-3.menu-box,
\t.menu_fix.col-md-3,
\t.container .sw-20,
\t#column-left.col-md-3,#column-right.col-md-3{ width:22%;}
\t.container .sw-80,
\t.dop-right-menu,
\t#content.col-md-9 {width: 78%;}
\t#menu-vertical #menu-vertical-list .box-col-3 {
\t\twidth: calc(1280px - 100%);
\t}
\theader .type-h-3.logo-top {
\t\twidth:16.66666667%;
\t}
}
</style>
";
        }
        // line 247
        if ((array_key_exists("site_screen_width", $context) && (($context["site_screen_width"] ?? null) == 3))) {
            // line 248
            echo "<style>
@media (min-width: 1500px){
\t.container{width:1470px;}
\t.col-md-3.menu-box,
\t.menu_fix.col-md-3,
\t.container .sw-20,
\t#column-left.col-md-3,#column-right.col-md-3{ width:20%;}
\t.container .sw-80,
\t.dop-right-menu,
\t#content.col-md-9 {width: 80%;}
\t.col-lg-offset-3,.col-md-offset-3 {margin-left: 20.4%;}
}
</style>
";
        }
        // line 262
        if ((twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "nsfullwidth", [], "any", true, true, false, 262) && (twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "nsfullwidth", [], "any", false, false, false, 262) == 1))) {
            // line 263
            echo "<style>
@media (max-width: 520px) {
.product-slider .owl-item .item {margin:0px 5px;}
.product-slider {margin:0px -5px;}
}
@media (min-width: 1360px){
.container { width: calc(100% - 20px);}
header .col-md-3.logo-top {width:20%;}
header .col-md-3.menu-box {width:20%;}
header .col-md-9.hidden-xs.hidden-sm.clearfix {width:80%;}
header .phone-box.col-md-3.col-md-push-4 {left: 42%;}
header .phone-box.col-md-3.col-md-push-5 {left: 48%;}
header .box-search.col-md-4.col-md-pull-2 {width:42%;right:13";
            // line 275
            echo "%}";
            echo "
header .box-search.col-md-4.col-md-pull-5 {width:42%;right:38";
            // line 276
            echo "%}";
            echo "
header .box-search.col-md-5.col-md-pull-4 {width:48%;right:32";
            // line 277
            echo "%}";
            echo "
header .box-search.col-md-5.col-md-pull-1 {width:48%;right:7";
            // line 278
            echo "%}";
            echo "
header .col-md-9.col-md-push-3 {width:80%;left:20";
            // line 279
            echo "%}";
            echo "
header .box-cart.col-md-2.col-md-push-4 {width:13%;left:42";
            // line 280
            echo "%}";
            echo "
header .box-cart.col-md-1.col-md-push-5{width:7%;left:48";
            // line 281
            echo "%}";
            echo "
.breadcrumb.col-lg-offset-3, .breadcrumb.col-md-offset-3 {margin-left: 20.4%;}
.container .sw-80 {width: 80%;}
.container .sw-20 {width: 20%;}
#content.col-md-9 {width: 80%;}
#column-left.col-md-3,#column-right.col-md-3{ width:20%;}

}
</style>
";
        }
        // line 291
        echo "<style>
";
        // line 292
        if ( !twig_test_empty(($context["config_change_color_icon_sticker_popular"] ?? null))) {
            // line 293
            echo ".sticker-ns.popular .fa{ color:";
            echo ($context["config_change_color_icon_sticker_popular"] ?? null);
            echo " }
";
        }
        // line 295
        echo ".sticker-ns.popular{ background: ";
        echo ($context["config_change_background_sticker_popular"] ?? null);
        echo " none repeat scroll 0 0; color:";
        echo ($context["config_change_color_text_sticker_popular"] ?? null);
        echo "; }
";
        // line 296
        if ( !twig_test_empty(($context["config_change_color_icon_sticker_special"] ?? null))) {
            // line 297
            echo ".sticker-ns.special .fa{ color:";
            echo ($context["config_change_color_icon_sticker_special"] ?? null);
            echo " }
";
        }
        // line 299
        echo ".sticker-ns.special { background: ";
        echo ($context["config_change_background_sticker_special"] ?? null);
        echo " none repeat scroll 0 0; color:";
        echo ($context["config_change_color_text_sticker_special"] ?? null);
        echo "; }
";
        // line 300
        if ( !twig_test_empty(($context["config_change_color_icon_sticker_topbestseller"] ?? null))) {
            // line 301
            echo ".sticker-ns.bestseller .fa{ color:";
            echo ($context["config_change_color_icon_sticker_topbestseller"] ?? null);
            echo " }
";
        }
        // line 303
        echo ".sticker-ns.bestseller { background: ";
        echo ($context["config_change_background_sticker_topbestseller"] ?? null);
        echo " none repeat scroll 0 0; color:";
        echo ($context["config_change_color_text_sticker_topbestseller"] ?? null);
        echo "; }
";
        // line 304
        if ( !twig_test_empty(($context["config_change_color_icon_sticker_topbestseller"] ?? null))) {
            // line 305
            echo ".sticker-ns.newproduct .fa{ color:";
            echo ($context["config_change_color_icon_sticker_topbestseller"] ?? null);
            echo " }
";
        }
        // line 307
        echo ".sticker-ns.newproduct{ background: ";
        echo ($context["config_change_background_sticker_newproduct"] ?? null);
        echo " none repeat scroll 0 0; color:";
        echo ($context["config_change_color_text_sticker_newproduct"] ?? null);
        echo "; }
";
        // line 308
        if ((array_key_exists("ns_type_sticker", $context) && (($context["ns_type_sticker"] ?? null) == 1))) {
            echo ".sticker-ns {float:left;}";
        }
        // line 309
        if (((array_key_exists("special_timer_position", $context) && (($context["special_timer_position"] ?? null) == 1)) || (($context["special_timer_position"] ?? null) == 3))) {
            // line 310
            echo ".product-thumb .action-timer {
\theight: auto;
\tflex-direction: column;
\tjustify-content: flex-end;
\tbottom: 15px;
}
.product-thumb .countDays,
.product-thumb .countHours,
.product-thumb .countMinutes,
.product-thumb .countSec {
\tmargin:2px 0px !important;
\tfont-size: 11px !important;
\tline-height: 12px !important;
\twidth: 36px !important;
\tpadding: 4px !important;
\theight: auto;
}
.product-thumb .time_productany{
\tfont-size: 7.5px;
}
";
            // line 330
            if ((array_key_exists("special_timer_position", $context) && (($context["special_timer_position"] ?? null) == 3))) {
                // line 331
                echo "\t.product-thumb .action-timer {
\t\tleft:auto !important;
\t}
";
            }
        }
        // line 336
        echo "</style>
<script>
var loading_masked_img = '<img src=\"catalog/view/theme/luxshop/image/ring-alt-1.svg\" />';
var button_shopping = \"";
        // line 339
        echo ($context["button_shopping"] ?? null);
        echo "\";
var button_checkout = \"";
        // line 340
        echo ($context["button_checkout"] ?? null);
        echo "\";
var link_checkout = \"";
        // line 341
        echo ($context["checkout"] ?? null);
        echo "\";
var link_onepcheckout = \"";
        // line 342
        echo ($context["onepcheckout"] ?? null);
        echo "\";
var text_showmore = '";
        // line 343
        echo ($context["text_showmore"] ?? null);
        echo "';
</script>
";
        // line 345
        echo ($context["js_luxshop"] ?? null);
        echo "
";
        // line 346
        if (($context["minifyjs"] ?? null)) {
            // line 347
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                // line 348
                echo "<script src=\"";
                echo $context["script"];
                echo "\"></script>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 352
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hbannerpc"] ?? null), ($context["lang_id"] ?? null), [], "array", false, true, false, 354), "image", [], "array", true, true, false, 354)) {
            echo "<style>.htop-b-pc img {margin:0 auto;}</style>";
        }
        // line 355
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hbannermob"] ?? null), ($context["lang_id"] ?? null), [], "array", false, true, false, 355), "image", [], "array", true, true, false, 355) && ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["hbannermob"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["image"] ?? null) : null) != ""))) {
            // line 356
            echo "<style>
.htop-b-mob img {margin:0 auto;}
.htop-b-mob.b-mob-pt{padding-top:54px;}
.htop-b-mob.b-mob-pt ~ header.pt {padding-top: 0px;}
.ft_tabs_mob .htop-b-mob.b-mob-pt {padding-top: 98px;}
</style>
";
        }
        // line 363
        if ((array_key_exists("menu_width", $context) && (($context["menu_width"] ?? null) == 1))) {
            // line 364
            echo "<style>@media (min-width: 992px) {.pos1 .megasliderpro {margin-top: -15px;";
            echo "}}";
            echo "</style>
";
        }
        // line 366
        echo "</head>
<body class=\"";
        // line 367
        echo ($context["class"] ?? null);
        if (($context["class_pp_tabs_fix"] ?? null)) {
            echo " ft_tabs_mob ";
            if ((array_key_exists("fm_fix_bottom", $context) && (($context["fm_fix_bottom"] ?? null) == 1))) {
                echo "tabs-bottom";
            } else {
                echo "tabs-top";
            }
        }
        echo "\">
";
        // line 368
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hbannerpc"] ?? null), ($context["lang_id"] ?? null), [], "array", false, true, false, 368), "image", [], "array", true, true, false, 368) && ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["hbannerpc"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["image"] ?? null) : null) != ""))) {
            // line 369
            if ((($context["deviceType"] ?? null) == "computer")) {
                // line 370
                echo "<div class=\"htop-b-pc hidden-xs hidden-sm\" ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "hbannerpc", [], "array", false, true, false, 370), ($context["lang_id"] ?? null), [], "array", false, true, false, 370), "bg", [], "array", true, true, false, 370) && ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["nst_data"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["hbannerpc"] ?? null) : null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["bg"] ?? null) : null) != ""))) {
                    echo "style=\"background:";
                    echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["nst_data"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["hbannerpc"] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["bg"] ?? null) : null);
                    echo "\"";
                }
                echo ">
<a href=\"";
                // line 371
                echo (( !twig_test_empty((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["nst_data"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["hbannerpc"] ?? null) : null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["link"] ?? null) : null))) ? ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["nst_data"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["hbannerpc"] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["link"] ?? null) : null)) : ("javascript:void(0)"));
                echo "\">
\t<img ";
                // line 372
                if (($context["ls_hbannerpc_width"] ?? null)) {
                    echo "width=\"";
                    echo ($context["ls_hbannerpc_width"] ?? null);
                    echo "\"";
                }
                if (($context["ls_hbannerpc_height"] ?? null)) {
                    echo " height=\"";
                    echo ($context["ls_hbannerpc_height"] ?? null);
                    echo "\"";
                }
                echo " src=\"";
                echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["hbannerpc"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["image"] ?? null) : null);
                echo "\" alt=\"\" class=\"img-responsive\" />
</a>
</div>
";
            }
        }
        // line 377
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["hbannermob"] ?? null), ($context["lang_id"] ?? null), [], "array", false, true, false, 377), "image", [], "array", true, true, false, 377) && ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["hbannermob"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["image"] ?? null) : null) != ""))) {
            // line 378
            if ((($context["deviceType"] ?? null) == "phone")) {
                // line 379
                echo "<div class=\"htop-b-mob ";
                if ((array_key_exists("fm_fix_bottom", $context) && (($context["fm_fix_bottom"] ?? null) != 1))) {
                    echo "b-mob-pt";
                }
                echo " visible-xs visible-sm\" ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["nst_data"] ?? null), "hbannermob", [], "array", false, true, false, 379), ($context["lang_id"] ?? null), [], "array", false, true, false, 379), "bg", [], "array", true, true, false, 379) && ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["nst_data"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["hbannermob"] ?? null) : null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["bg"] ?? null) : null) != ""))) {
                    echo "style=\"background:";
                    echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["nst_data"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["hbannermob"] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["bg"] ?? null) : null);
                    echo "\"";
                }
                echo ">
<a href=\"";
                // line 380
                echo (( !twig_test_empty((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["nst_data"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["hbannermob"] ?? null) : null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["link"] ?? null) : null))) ? ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["nst_data"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["hbannermob"] ?? null) : null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["link"] ?? null) : null)) : ("javascript:void(0)"));
                echo "\">
\t<img ";
                // line 381
                if (($context["ls_hbannermob_width"] ?? null)) {
                    echo "width=\"";
                    echo ($context["ls_hbannermob_width"] ?? null);
                    echo "\"";
                }
                if (($context["ls_hbannermob_height"] ?? null)) {
                    echo " height=\"";
                    echo ($context["ls_hbannermob_height"] ?? null);
                    echo "\"";
                }
                echo " src=\"";
                echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["hbannermob"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["image"] ?? null) : null);
                echo "\" class=\"img-responsive\" />
</a>
</div>
";
            }
        }
        // line 386
        echo "<div id=\"back-top\" ";
        if ((array_key_exists("fm_fix_bottom", $context) && (($context["fm_fix_bottom"] ?? null) == 1))) {
            echo "class=\"fm-b ";
            if (($context["fb_widget_pos"] ?? null)) {
                echo ($context["fb_widget_pos"] ?? null);
            }
            echo "\"";
        } else {
            echo "class=\"fm-t ";
            if (($context["fb_widget_pos"] ?? null)) {
                echo ($context["fb_widget_pos"] ?? null);
            }
            echo "\"";
        }
        echo "><a rel=\"nofollow\" class=\"btn btn-back-top\" href=\"javascript:void(0)\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"10\" fill=\"none\" viewBox=\"0 0 17 10\"><path fill=\"#000\" fill-rule=\"evenodd\" d=\"M9.016 3.553a1.003 1.003 0 00-1.481.01L2.793 8.668a1.003 1.003 0 01-1.482.009A1.167 1.167 0 011.303 7.1l4.742-5.106c1.22-1.315 3.21-1.327 4.444-.027l4.867 5.124c.411.434.415 1.14.008 1.578a1.003 1.003 0 01-1.482.009L9.016 3.553z\" clip-rule=\"evenodd\"/></svg></a></div>
";
        // line 387
        if ((array_key_exists("fixed_bar_footer", $context) && (($context["fixed_bar_footer"] ?? null) == 1))) {
            // line 388
            echo "<div class=\"fixed-goods-menu\">
\t<div class=\"fixed-goods-bar\">
\t";
            // line 390
            if ((array_key_exists("show_h_wishlist", $context) && (($context["show_h_wishlist"] ?? null) == 1))) {
                // line 391
                echo "\t<div class=\"box-wishlist\">
\t\t<a rel=\"nofollow\" class=\"btn-wishlist-top\" href=\"";
                // line 392
                echo ($context["wishlist"] ?? null);
                echo "\" id=\"wishlist-total\">
\t\t\t<span class=\"wl-icon\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" height=\"13\" fill=\"none\" viewBox=\"0 0 10 13\">
\t\t\t<path fill=\"#000\" fill-rule=\"evenodd\" d=\"M1.5 1.5v8.974L3.613 8.44a2 2 0 012.774 0L8.5 10.474V1.5h-7zM1.4 0A1.4 1.4 0 000 1.4v10.25c0 .881 1.058 1.332 1.693.72l2.96-2.849a.5.5 0 01.694 0l2.96 2.849c.635.612 1.693.161 1.693-.72V1.4A1.4 1.4 0 008.6 0H1.4z\" clip-rule=\"evenodd\"/>
\t\t\t</svg>
\t\t\t</span>
\t\t\t";
                // line 397
                echo ($context["text_wishlist"] ?? null);
                echo "
\t\t</a>
\t</div>
\t";
            }
            // line 401
            echo "\t";
            if ((array_key_exists("show_h_compare", $context) && (($context["show_h_compare"] ?? null) == 1))) {
                // line 402
                echo "\t<div class=\"box-compare\">
\t\t<a rel=\"nofollow\" class=\"btn-compare-top\" href=\"";
                // line 403
                echo ($context["compare"] ?? null);
                echo "\"  id=\"compare-total\">
\t\t\t<span class=\"co-icon\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" fill=\"none\" viewBox=\"0 0 15 14\">
\t\t\t\t<path fill=\"#000\" fill-rule=\"evenodd\" d=\"M10.728 1.439a.75.75 0 011.059.063l1.774 2a.75.75 0 010 .996l-1.774 2a.75.75 0 01-1.122-.996l.667-.752H2a.75.75 0 010-1.5h9.332l-.667-.752a.75.75 0 01.063-1.06zM4.272 12.561a.75.75 0 01-1.059-.063l-1.774-2a.75.75 0 010-.996l1.774-2a.75.75 0 011.122.996l-.667.752H13a.75.75 0 010 1.5H3.668l.667.752a.75.75 0 01-.063 1.059z\" clip-rule=\"evenodd\"/>
\t\t\t</svg></span>
\t\t\t";
                // line 407
                echo ($context["text_compare"] ?? null);
                echo "
\t\t</a>
\t</div>
\t";
            }
            // line 411
            echo "\t\t<div class=\"box-viewed-pc\">
\t\t<a class=\"btn-viewed-pc\" ";
            // line 412
            if ((($context["quantity_viewed"] ?? null) > 0)) {
                echo "onclick=\"loadViewedProduct()\"";
            }
            echo " href=\"javascript:void(0)\">
\t\t\t<span class=\"v-icon\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"17\" fill=\"none\" viewBox=\"0 0 17 17\">
\t\t\t<path fill=\"#B2BBC5\" fill-rule=\"evenodd\" d=\"M1.565 8.5a13.185 13.185 0 001.727 2.32c1.265 1.35 3.028 2.597 5.208 2.597s3.943-1.247 5.208-2.597a13.172 13.172 0 001.727-2.32 13.174 13.174 0 00-1.727-2.32C12.443 4.83 10.68 3.583 8.5 3.583S4.557 4.83 3.292 6.18A13.186 13.186 0 001.565 8.5zm14.727 0l.67-.336-.001-.002-.002-.005-.009-.016a5.022 5.022 0 00-.136-.252 14.685 14.685 0 00-2.011-2.735C13.41 3.67 11.278 2.084 8.5 2.084S3.589 3.67 2.198 5.153A14.687 14.687 0 00.186 7.889a8.816 8.816 0 00-.136.252l-.009.016-.002.005v.001l-.001.001.67.336-.67-.335v.67l.67-.335-.67.336.001.002.002.005.009.016a5.374 5.374 0 00.136.252 14.685 14.685 0 002.012 2.735c1.39 1.484 3.523 3.07 6.302 3.07 2.779 0 4.911-1.586 6.302-3.07a14.684 14.684 0 002.012-2.735 8.794 8.794 0 00.136-.252l.009-.016.002-.005v-.001l.001-.001-.67-.336zm0 0l.67.335v-.67l-.67.335z\" clip-rule=\"evenodd\"/>
\t\t\t<path fill=\"#B2BBC5\" fill-rule=\"evenodd\" d=\"M8.5 7.125a1.375 1.375 0 100 2.75 1.375 1.375 0 000-2.75zM5.625 8.5a2.875 2.875 0 115.75 0 2.875 2.875 0 01-5.75 0z\" clip-rule=\"evenodd\"/>
\t\t\t</svg>
\t\t\t</span>
\t\t\t<span class=\"text-viewed\">";
            // line 419
            echo ($context["text_viewed"] ?? null);
            echo "</span>
\t\t\t<span class=\"viewed-quantity\">";
            // line 420
            echo ($context["quantity_viewed"] ?? null);
            echo "</span>
\t\t</a>
\t\t<div class=\"close-viewed-pc\"><a rel=\"nofollow\" class=\"btn btn-close-viewed\" href=\"javascript:void(0)\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"none\" viewBox=\"0 0 16 16\"><path stroke=\"#000\" stroke-linecap=\"round\" stroke-width=\"2\" d=\"M2 2l12 12M2 14L14 2\"/></svg></a></div>
\t\t</div>
\t</div>
\t";
            // line 425
            if ((($context["quantity_viewed"] ?? null) > 0)) {
                // line 426
                echo "\t<div class=\"content_viewed\"></div>
\t";
            }
            // line 428
            echo "</div>
";
        }
        // line 430
        echo "<nav id=\"top\" class=\"visible-md visible-lg\">
  <div class=\"container\">
  ";
        // line 432
        if ( !twig_test_empty(($context["header_nav_menu_links"] ?? null))) {
            // line 433
            echo "\t<div class=\"pull-left\">
\t\t<div class=\"btn-group box-question\">
\t\t\t<ul class=\"dropdown-menu dropdown-menu-left header-nav-links ls-dropdown\">
\t\t\t\t";
            // line 436
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header_nav_menu_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["header_nav_menu_link"]) {
                // line 437
                echo "\t\t\t\t\t<li><button ";
                if ((((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["header_nav_menu_link"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["popup"] ?? null) : null) == "1") && ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["header_nav_menu_link"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["link"] ?? null) : null) != ""))) {
                    echo " onclick=\"\$('.side-collapse').toggleClass('in'); banner_link_open('";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["header_nav_menu_link"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["link"] ?? null) : null);
                    echo "')\" ";
                } elseif ((((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["header_nav_menu_link"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["popup"] ?? null) : null) == "0") && ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["header_nav_menu_link"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["link"] ?? null) : null) != ""))) {
                    echo "onclick=\"location='";
                    echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["header_nav_menu_link"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["link"] ?? null) : null);
                    echo "'\" ";
                }
                echo " type=\"button\" class=\"btn btn-link\">";
                if ( !twig_test_empty((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["header_nav_menu_link"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["icon_image"] ?? null) : null))) {
                    echo "<i class=\"";
                    echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["header_nav_menu_link"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["icon_image"] ?? null) : null);
                    echo "\"></i> ";
                }
                echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["header_nav_menu_link"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["title"] ?? null) : null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[($context["lang_id"] ?? null)] ?? null) : null);
                echo "</button></li>
\t\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_nav_menu_link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 439
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t";
        }
        // line 443
        echo "\t<div class=\"pull-right\">
\t<div class=\"pull-right hidden-xs hidden-sm\">
\t\t<div class=\"btn-group box-account\">
\t\t\t<button data-toggle=\"dropdown\" type=\"button\" class=\"dropdown-toggle btn-account\">";
        // line 446
        echo ($context["text_account"] ?? null);
        echo "</button>
\t\t\t<ul class=\"dropdown-menu dropdown-menu-right ls-dropdown\">
\t\t\t\t";
        // line 448
        if (($context["logged"] ?? null)) {
            // line 449
            echo "\t\t\t\t<li><a rel=\"nofollow\" href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t<li><a rel=\"nofollow\" href=\"";
            // line 450
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t<li><a rel=\"nofollow\" href=\"";
            // line 451
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t";
        } else {
            // line 453
            echo "\t\t\t\t<li class=\"listitem\"><a class=\"btn-register\" rel=\"nofollow\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t<li class=\"listitem\"><a class=\"btn-login\" rel=\"nofollow\" href=\"javascript:void(0)\" id=\"login-popup\" data-load-url=\"index.php?route=common/login_modal\">";
            // line 454
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t";
        }
        // line 456
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t";
        // line 459
        if ((array_key_exists("fixed_bar_footer", $context) && (($context["fixed_bar_footer"] ?? null) == 0))) {
            // line 460
            echo "\t";
            if ((array_key_exists("show_h_wishlist", $context) && (($context["show_h_wishlist"] ?? null) == 1))) {
                // line 461
                echo "\t<div class=\"pull-right box-wishlist\">
\t\t<a rel=\"nofollow\" class=\"btn-wishlist-top\" href=\"";
                // line 462
                echo ($context["wishlist"] ?? null);
                echo "\" id=\"wishlist-total\">
\t\t\t<span class=\"wl-icon\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" height=\"13\" fill=\"none\" viewBox=\"0 0 10 13\">
\t\t\t<path fill=\"#000\" fill-rule=\"evenodd\" d=\"M1.5 1.5v8.974L3.613 8.44a2 2 0 012.774 0L8.5 10.474V1.5h-7zM1.4 0A1.4 1.4 0 000 1.4v10.25c0 .881 1.058 1.332 1.693.72l2.96-2.849a.5.5 0 01.694 0l2.96 2.849c.635.612 1.693.161 1.693-.72V1.4A1.4 1.4 0 008.6 0H1.4z\" clip-rule=\"evenodd\"/>
\t\t\t</svg>
\t\t\t</span>
\t\t\t";
                // line 467
                echo ($context["text_wishlist"] ?? null);
                echo "
\t\t</a>
\t</div>
\t";
            }
            // line 471
            echo "\t";
            if ((array_key_exists("show_h_compare", $context) && (($context["show_h_compare"] ?? null) == 1))) {
                // line 472
                echo "\t<div class=\"pull-right box-compare\">
\t\t<a rel=\"nofollow\" class=\"btn-compare-top\" href=\"";
                // line 473
                echo ($context["compare"] ?? null);
                echo "\"  id=\"compare-total\">
\t\t\t<span class=\"co-icon\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"14\" fill=\"none\" viewBox=\"0 0 15 14\">
\t\t\t\t<path fill=\"#000\" fill-rule=\"evenodd\" d=\"M10.728 1.439a.75.75 0 011.059.063l1.774 2a.75.75 0 010 .996l-1.774 2a.75.75 0 01-1.122-.996l.667-.752H2a.75.75 0 010-1.5h9.332l-.667-.752a.75.75 0 01.063-1.06zM4.272 12.561a.75.75 0 01-1.059-.063l-1.774-2a.75.75 0 010-.996l1.774-2a.75.75 0 011.122.996l-.667.752H13a.75.75 0 010 1.5H3.668l.667.752a.75.75 0 01-.063 1.059z\" clip-rule=\"evenodd\"/>
\t\t\t</svg></span>
\t\t\t";
                // line 477
                echo ($context["text_compare"] ?? null);
                echo "
\t\t</a>
\t</div>
\t";
            }
            // line 481
            echo "\t";
        }
        // line 482
        echo "\t<div class=\"pull-right box-currency hidden-xs hidden-sm\">
\t\t";
        // line 483
        echo ($context["currency"] ?? null);
        echo "
\t</div>
\t<div class=\"pull-right box-language hidden-xs hidden-sm\">
\t\t";
        // line 486
        echo ($context["language"] ?? null);
        echo "
\t</div>
\t</div>
  </div>
</nav>
<header class=\"header_v_";
        // line 491
        echo ($context["type_header"] ?? null);
        echo " ";
        if ((array_key_exists("fm_fix_bottom", $context) && (($context["fm_fix_bottom"] ?? null) == 0))) {
            echo "pt";
        }
        echo " ";
        if (((($context["type_header"] ?? null) == 3) || (($context["type_header"] ?? null) == 4))) {
            echo "h-shadow";
        }
        echo " ";
        if (($context["config_fixed_panel_top"] ?? null)) {
            echo "fix-header-";
            if (((($context["type_header"] ?? null) == 3) || (($context["type_header"] ?? null) == 4))) {
                echo "2";
            } else {
                echo "1";
            }
        }
        echo "\">
  <div class=\"container";
        // line 492
        if ((($context["hide_logo_phone_mob"] ?? null) == 1)) {
            echo " hidden-xs";
        }
        echo "\">
    <div class=\"row dflex flex-wrap align-items-center pt-10 pb-10\">
    \t";
        // line 494
        if (((($context["type_header"] ?? null) == 4) || ((($context["type_header"] ?? null) == 3) && (($context["catalog_before_logo"] ?? null) == 1)))) {
            // line 495
            echo "\t\t\t<div class=\"box-menu-top pl-10 pr-10 visible-md visible-lg col-auto\">
\t\t\t\t<button type=\"button\" class=\"btn-menu-top ";
            // line 496
            if (((($context["type_header"] ?? null) == 3) && (($context["catalog_before_logo"] ?? null) == 1))) {
                echo "vh3-bl";
            } else {
                echo "vh4";
            }
            echo " dflex align-items-center\">
\t\t\t\t\t";
            // line 497
            if ((array_key_exists("design_icon_menu", $context) && (($context["design_icon_menu"] ?? null) == 1))) {
                // line 498
                echo "\t\t\t\t\t<svg class=\"menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"18\" fill=\"none\" viewBox=\"0 0 22 18\"><path stroke=\"#fff\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M2 2h18M2 9h18M2 16h18\"/></svg>
\t\t\t\t\t";
            } else {
                // line 500
                echo "\t\t\t\t\t<svg class=\"menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"none\" viewBox=\"0 0 22 22\"><path stroke=\"#fff\" stroke-linecap=\"round\" stroke-width=\"1.5\" d=\"M12.8 13.25H20m-7.2 3.15H20m-7.2 3.15H20M3 20h5.2a1 1 0 001-1v-5.2a1 1 0 00-1-1H3a1 1 0 00-1 1V19a1 1 0 001 1zM13.8 9.65H19a1 1 0 001-1V3a1 1 0 00-1-1h-5.2a1 1 0 00-1 1v5.65a1 1 0 001 1zM3 9.65h5.2a1 1 0 001-1V3a1 1 0 00-1-1H3a1 1 0 00-1 1v5.65a1 1 0 001 1z\"/></svg>
\t\t\t\t\t";
            }
            // line 502
            echo "\t\t\t\t</button>
\t\t\t</div>
\t\t";
        }
        // line 505
        echo "\t\t<div class=\"col-xs-5 ";
        if (($context["header_doptext_status"] ?? null)) {
            echo "col-sm-4";
        } else {
            echo "col-sm-6";
        }
        echo " col-md-3 col-lg-2 logo-top type-h-";
        echo ($context["type_header"] ?? null);
        echo "\">
\t\t\t<div id=\"logo\">
\t\t\t";
        // line 507
        if (($context["logo"] ?? null)) {
            // line 508
            echo "\t\t\t\t";
            if ((($context["home"] ?? null) == ($context["home_page"] ?? null))) {
                // line 509
                echo "\t\t\t\t  <img ";
                if (($context["logo_iwh_status"] ?? null)) {
                    echo "width=\"";
                    echo ($context["logo_w"] ?? null);
                    echo "\" height=\"";
                    echo ($context["logo_h"] ?? null);
                    echo "\"";
                }
                echo " src=\"";
                echo ($context["logo"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t";
            } else {
                // line 511
                echo "\t\t\t\t  <a href=\"";
                echo ($context["home"] ?? null);
                echo "\"><img ";
                if (($context["logo_iwh_status"] ?? null)) {
                    echo "width=\"";
                    echo ($context["logo_w"] ?? null);
                    echo "\" height=\"";
                    echo ($context["logo_h"] ?? null);
                    echo "\"";
                }
                echo " src=\"";
                echo ($context["logo"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t\t";
            }
            // line 513
            echo "\t\t\t  ";
        } else {
            // line 514
            echo "\t\t\t\t<h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
\t\t\t  ";
        }
        // line 516
        echo "\t\t\t</div>
\t\t</div>
\t\t";
        // line 518
        if (((($context["type_header"] ?? null) == 3) && (($context["catalog_before_logo"] ?? null) == 0))) {
            // line 519
            echo "\t\t\t<div class=\"box-menu-top visible-md visible-lg col-lg-2 col-auto\">
\t\t\t\t<button type=\"button\" class=\"btn-menu-top vh3 dflex align-items-center\">
\t\t\t\t\t";
            // line 521
            if ((array_key_exists("design_icon_menu", $context) && (($context["design_icon_menu"] ?? null) == 1))) {
                // line 522
                echo "\t\t\t\t\t<svg class=\"menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"18\" fill=\"none\" viewBox=\"0 0 22 18\"><path stroke=\"#fff\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M2 2h18M2 9h18M2 16h18\"/></svg>
\t\t\t\t\t";
            } else {
                // line 524
                echo "\t\t\t\t\t<svg class=\"menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"none\" viewBox=\"0 0 22 22\"><path stroke=\"#fff\" stroke-linecap=\"round\" stroke-width=\"1.5\" d=\"M12.8 13.25H20m-7.2 3.15H20m-7.2 3.15H20M3 20h5.2a1 1 0 001-1v-5.2a1 1 0 00-1-1H3a1 1 0 00-1 1V19a1 1 0 001 1zM13.8 9.65H19a1 1 0 001-1V3a1 1 0 00-1-1h-5.2a1 1 0 00-1 1v5.65a1 1 0 001 1zM3 9.65h5.2a1 1 0 001-1V3a1 1 0 00-1-1H3a1 1 0 00-1 1v5.65a1 1 0 001 1z\"/></svg>
\t\t\t\t\t";
            }
            // line 526
            echo "\t\t\t\t\t<span class=\"text-category hidden-md\">";
            echo ($context["text_catalog"] ?? null);
            echo "</span>
\t\t\t\t\t<svg class=\"icon-arrow hidden-md\" width=\"8\" height=\"5\" viewBox=\"0 0 8 5\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.2112 2.94389C3.40755 3.13808 3.72415 3.1363 3.91831 2.93994L6.18157 0.651057C6.37573 0.454698 6.69231 0.452916 6.88867 0.647076C7.08503 0.841236 7.08681 1.15781 6.89265 1.35417L4.62939 3.64305C4.04688 4.23215 3.0971 4.23747 2.50804 3.65493L0.18553 1.35813C-0.0108166 1.16396 -0.0125785 0.84738 0.181594 0.651034C0.375766 0.454688 0.692344 0.452926 0.88869 0.647099L3.2112 2.94389Z\" fill=\"white\"/>
\t\t\t\t\t</svg>
\t\t\t\t</button>
\t\t\t</div>
\t\t";
        }
        // line 533
        echo "\t\t";
        if (($context["header_doptext_status"] ?? null)) {
            // line 534
            echo "\t\t\t<div class=\"header_dopmenu_doptext hidden-xs ";
            if (($context["status_search_word"] ?? null)) {
                echo "hsw ";
            } else {
                echo "nsw ";
            }
            if ((array_key_exists("swap_header_blocks", $context) && (($context["swap_header_blocks"] ?? null) == "1"))) {
                echo "f-order-3";
            } else {
                echo "f-order-0";
            }
            echo "\">";
            echo ($context["header_doptext"] ?? null);
            echo "</div>
\t\t";
        }
        // line 536
        echo "\t\t<div class=\"phone-box col-xs-7 ";
        if (($context["header_doptext_status"] ?? null)) {
            echo "col-sm-auto";
        } else {
            echo "col-sm-6";
        }
        echo " col-md-3 col-auto ";
        if ((array_key_exists("swap_header_blocks", $context) && (($context["swap_header_blocks"] ?? null) == "1"))) {
            echo "f-order-3";
        }
        echo "\">
\t\t\t<div id=\"phone\" class=\"dflex justify-content-xs-end justify-content-sm-end ";
        // line 537
        if ((($context["type_header"] ?? null) == 1)) {
            echo "justify-content-md-center";
        }
        echo " ";
        if (( !twig_test_empty(($context["header_phones_dropdown"] ?? null)) || (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["arbitrary_text"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["text"] ?? null) : null))) {
            echo "pr-20";
        }
        echo "\">
\t\t\t\t<div class=\"contact-header\">
\t\t\t\t\t<div class=\"dropdown-toggle\">
\t\t\t\t\t\t";
        // line 540
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["config_phones_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result_hp"]) {
            // line 541
            echo "\t\t\t\t\t\t\t<div class=\"additional-tel dth\">
\t\t\t\t\t\t\t";
            // line 542
            if ( !twig_test_empty((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["result_hp"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["type"] ?? null) : null))) {
                // line 543
                echo "\t\t\t\t\t\t\t\t<a ";
                echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["result_hp"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["type"] ?? null) : null);
                echo ">
\t\t\t\t\t\t\t\t";
                // line 544
                if (((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["result_hp"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["icon_phone"] ?? null) : null) != "")) {
                    // line 545
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"icon-image\"><img loading=\"lazy\" width=\"25\" height=\"25\" src=\"";
                    echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["result_hp"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["icon_phone"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["result_hp"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["phone"] ?? null) : null);
                    echo "\" /></div>
\t\t\t\t\t\t\t\t\t";
                } elseif (((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 =                 // line 546
$context["result_hp"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["icon"] ?? null) : null) != "")) {
                    // line 547
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"icon-image\"><i class=\"";
                    echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["result_hp"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["icon"] ?? null) : null);
                    echo "\"></i></div>
\t\t\t\t\t\t\t\t";
                }
                // line 549
                echo "\t\t\t\t\t\t\t\t";
                echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["result_hp"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["phone"] ?? null) : null);
                echo "</a>
\t\t\t\t\t\t\t";
            } else {
                // line 551
                echo "\t\t\t\t\t\t\t\t";
                if (((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["result_hp"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["icon_phone"] ?? null) : null) != "")) {
                    // line 552
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"icon-image\"><img loading=\"lazy\" width=\"25\" height=\"25\" src=\"";
                    echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["result_hp"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["icon_phone"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["result_hp"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["phone"] ?? null) : null);
                    echo "\" /></div>
\t\t\t\t\t\t\t\t\t";
                } elseif (((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec =                 // line 553
$context["result_hp"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["icon"] ?? null) : null) != "")) {
                    // line 554
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"icon-image\"><i class=\"";
                    echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["result_hp"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["icon"] ?? null) : null);
                    echo "\"></i></div>
\t\t\t\t\t\t\t\t";
                }
                // line 556
                echo "\t\t\t\t\t\t\t\t";
                echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["result_hp"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["phone"] ?? null) : null);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 558
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result_hp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 560
        echo "\t\t\t\t\t\t";
        if (( !twig_test_empty(($context["header_phones_dropdown"] ?? null)) || (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["arbitrary_text"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["text"] ?? null) : null))) {
            // line 561
            echo "\t\t\t\t\t\t\t<span class=\"drop-icon-info\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"5\" fill=\"none\" viewBox=\"0 0 7 5\"><path fill=\"#000\" fill-rule=\"evenodd\" d=\"M3.174 2.856a.5.5 0 00.707-.004L6.144.562a.5.5 0 01.712.704L4.592 3.555a1.5 1.5 0 01-2.121.012L.148 1.27A.5.5 0 11.852.559l2.322 2.297z\" clip-rule=\"evenodd\"/></svg></span>
\t\t\t\t\t\t";
        }
        // line 563
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 564
        if (( !twig_test_empty(($context["header_phones_dropdown"] ?? null)) || ($context["arbitrary_text"] ?? null))) {
            // line 565
            echo "\t\t\t\t\t<ul class=\"dropdown-menu drop-contacts ls-dropdown\">
\t\t\t\t\t\t";
            // line 566
            if ((array_key_exists("arbitrary_text", $context) &&  !twig_test_empty(($context["arbitrary_text"] ?? null)))) {
                // line 567
                echo "\t\t\t\t\t\t<li>";
                echo ($context["arbitrary_text"] ?? null);
                echo "</li>
\t\t\t\t\t\t";
            }
            // line 569
            echo "\t\t\t\t\t\t";
            if ( !twig_test_empty(($context["header_phones_dropdown"] ?? null))) {
                // line 570
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["header_phones_dropdown"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["result_ddh"]) {
                    // line 571
                    echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
                    // line 572
                    if ( !twig_test_empty((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["result_ddh"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["type"] ?? null) : null))) {
                        // line 573
                        echo "\t\t\t\t\t\t\t\t\t<a ";
                        echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["result_ddh"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["type"] ?? null) : null);
                        echo ">
\t\t\t\t\t\t\t\t\t\t";
                        // line 574
                        if (((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["result_ddh"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["icon_phone"] ?? null) : null) != "")) {
                            // line 575
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"icon-image\"><img loading=\"lazy\" width=\"25\" height=\"25\" src=\"";
                            echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = $context["result_ddh"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["icon_phone"] ?? null) : null);
                            echo "\" alt=\"";
                            echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["result_ddh"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["phone"] ?? null) : null);
                            echo "\" /></div>
\t\t\t\t\t\t\t\t\t\t";
                        } elseif (((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 =                         // line 576
$context["result_ddh"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["icon"] ?? null) : null) != "")) {
                            // line 577
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"icon-image\"><i class=\"";
                            echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["result_ddh"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["icon"] ?? null) : null);
                            echo "\"></i></div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 579
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["result_ddh"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["phone"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 582
                        echo "\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                        // line 583
                        if (((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = $context["result_ddh"]) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["icon_phone"] ?? null) : null) != "")) {
                            // line 584
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-image\"><img loading=\"lazy\" width=\"25\" height=\"25\" src=\"";
                            echo (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["result_ddh"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["icon_phone"] ?? null) : null);
                            echo "\" alt=\"";
                            echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["result_ddh"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["phone"] ?? null) : null);
                            echo "\" /></div>
\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (((($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 =                         // line 585
$context["result_ddh"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["icon"] ?? null) : null) != "")) {
                            // line 586
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-image\"><i class=\"";
                            echo (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["result_ddh"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["icon"] ?? null) : null);
                            echo "\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 588
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["result_ddh"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["phone"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 591
                    echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result_ddh'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 593
                echo "\t\t\t\t\t\t";
            }
            // line 594
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 596
        echo "\t\t\t\t\t<div class=\"text_after_phone\">";
        echo ($context["text_after_phone"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 600
        if (((($context["type_header"] ?? null) == 2) && (($context["swap_search_dmenu"] ?? null) == 1))) {
            // line 601
            echo "\t\t<div class=\"dop-menu-header visible-md visible-lg col-md-4 col-lg-5 ";
            if ((array_key_exists("swap_header_blocks", $context) && (($context["swap_header_blocks"] ?? null) == "1"))) {
                echo "flex-1 mr-auto f-order-2 dopmenu-center";
            } else {
                echo "flex-1 ml-auto f-order-3";
            }
            echo "\">
\t\t\t";
            // line 602
            echo ($context["ls_dop_menu"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 605
        echo "\t\t";
        if ((((($context["type_header"] ?? null) == 1) || ((($context["type_header"] ?? null) == 2) && (($context["swap_search_dmenu"] ?? null) == 0))) || ((($context["type_header"] ?? null) == 3) || (($context["type_header"] ?? null) == 4)))) {
            // line 606
            echo "\t\t<div class=\"box-search search-top swdm-";
            echo ($context["swap_search_dmenu"] ?? null);
            echo " col-xs-9 col-sm-9 flex-1 hidden-xs ";
            if ((array_key_exists("type_shop_cart", $context) && (($context["type_shop_cart"] ?? null) == "1"))) {
                echo " col-md-5 ";
            } else {
                echo " col-md-4";
            }
            echo "\">";
            echo ($context["search"] ?? null);
            echo "</div>
\t\t";
        }
        // line 608
        echo "\t\t";
        if (((($context["type_header"] ?? null) == 1) || ((($context["type_header"] ?? null) == 3) || (($context["type_header"] ?? null) == 4)))) {
            // line 609
            echo "\t\t<div class=\"box-cart col-xs-3 col-sm-3 hidden-xs";
            if ((array_key_exists("type_shop_cart", $context) && (($context["type_shop_cart"] ?? null) == "1"))) {
                echo " col-md-1 ";
            } else {
                echo " col-md-2";
            }
            echo "\">";
            echo ($context["cart"] ?? null);
            echo "</div>
\t\t";
        }
        // line 611
        echo "\t</div>
  </div>
";
        // line 613
        if (($context["megamenu_status"] ?? null)) {
            // line 614
            echo "\t";
            $this->loadTemplate("luxshop/template/common/hmob_menu.twig", "luxshop/template/common/header.twig", 614)->display($context);
        }
        // line 616
        echo "</header>
";
        // line 617
        if (($context["megamenu_status"] ?? null)) {
            // line 618
            echo "<div class=\"menu-header-box hidden-xs hidden-sm ";
            if (((($context["type_header"] ?? null) == 3) || (($context["type_header"] ?? null) == 4))) {
                echo "type-h-";
                echo ($context["type_header"] ?? null);
                echo " ";
            }
            if (((($context["type_header"] ?? null) == 1) || (($context["type_header"] ?? null) == 2))) {
                if ((array_key_exists("menu_width", $context) && (($context["menu_width"] ?? null) == 1))) {
                    echo "menu_width_full ";
                }
            }
            echo "\">
\t<div class=\"container ";
            // line 619
            if (((($context["type_header"] ?? null) == 3) || (($context["type_header"] ?? null) == 4))) {
                echo "pos-r";
            }
            echo "\">
\t\t<div class=\"row dflex\">
\t\t\t";
            // line 621
            echo ($context["menuvh"] ?? null);
            echo "
\t\t\t";
            // line 622
            if (((($context["type_header"] ?? null) == 2) && (($context["swap_search_dmenu"] ?? null) == 1))) {
                // line 623
                echo "\t\t\t\t<div class=\"box-search search-top swdm-";
                echo ($context["swap_search_dmenu"] ?? null);
                echo " col-xs-9 col-sm-9 flex-1 ";
                if ((array_key_exists("main_menu_fix_mobile", $context) && (($context["main_menu_fix_mobile"] ?? null) == 1))) {
                    echo "hidden-xs ";
                }
                if ((array_key_exists("type_shop_cart", $context) && (($context["type_shop_cart"] ?? null) == "1"))) {
                    echo " col-md-5 ";
                } else {
                    echo " col-md-4";
                }
                echo "\">";
                echo ($context["search"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 625
            echo "\t\t\t";
            if ((($context["type_header"] ?? null) == 2)) {
                // line 626
                echo "\t\t\t\t<div class=\"box-cart cart-in-menu col-xs-3 col-sm-3 ";
                if ((array_key_exists("main_menu_fix_mobile", $context) && (($context["main_menu_fix_mobile"] ?? null) == 1))) {
                    echo "hidden-xs";
                }
                if ((array_key_exists("type_shop_cart", $context) && (($context["type_shop_cart"] ?? null) == "1"))) {
                    echo " col-md-1 ";
                } else {
                    echo " col-md-2";
                }
                echo "\">";
                echo ($context["cart"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 628
            echo "\t\t</div>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "luxshop/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1568 => 628,  1553 => 626,  1550 => 625,  1533 => 623,  1531 => 622,  1527 => 621,  1520 => 619,  1506 => 618,  1504 => 617,  1501 => 616,  1497 => 614,  1495 => 613,  1491 => 611,  1479 => 609,  1476 => 608,  1462 => 606,  1459 => 605,  1453 => 602,  1444 => 601,  1442 => 600,  1434 => 596,  1430 => 594,  1427 => 593,  1420 => 591,  1413 => 588,  1407 => 586,  1405 => 585,  1398 => 584,  1396 => 583,  1393 => 582,  1386 => 579,  1380 => 577,  1378 => 576,  1371 => 575,  1369 => 574,  1364 => 573,  1362 => 572,  1359 => 571,  1354 => 570,  1351 => 569,  1345 => 567,  1343 => 566,  1340 => 565,  1338 => 564,  1335 => 563,  1331 => 561,  1328 => 560,  1321 => 558,  1315 => 556,  1309 => 554,  1307 => 553,  1300 => 552,  1297 => 551,  1291 => 549,  1285 => 547,  1283 => 546,  1276 => 545,  1274 => 544,  1269 => 543,  1267 => 542,  1264 => 541,  1260 => 540,  1248 => 537,  1235 => 536,  1218 => 534,  1215 => 533,  1204 => 526,  1200 => 524,  1196 => 522,  1194 => 521,  1190 => 519,  1188 => 518,  1184 => 516,  1176 => 514,  1173 => 513,  1155 => 511,  1139 => 509,  1136 => 508,  1134 => 507,  1122 => 505,  1117 => 502,  1113 => 500,  1109 => 498,  1107 => 497,  1099 => 496,  1096 => 495,  1094 => 494,  1087 => 492,  1066 => 491,  1058 => 486,  1052 => 483,  1049 => 482,  1046 => 481,  1039 => 477,  1032 => 473,  1029 => 472,  1026 => 471,  1019 => 467,  1011 => 462,  1008 => 461,  1005 => 460,  1003 => 459,  998 => 456,  993 => 454,  986 => 453,  979 => 451,  973 => 450,  966 => 449,  964 => 448,  959 => 446,  954 => 443,  948 => 439,  924 => 437,  920 => 436,  915 => 433,  913 => 432,  909 => 430,  905 => 428,  901 => 426,  899 => 425,  891 => 420,  887 => 419,  875 => 412,  872 => 411,  865 => 407,  858 => 403,  855 => 402,  852 => 401,  845 => 397,  837 => 392,  834 => 391,  832 => 390,  828 => 388,  826 => 387,  809 => 386,  790 => 381,  786 => 380,  773 => 379,  771 => 378,  769 => 377,  750 => 372,  746 => 371,  737 => 370,  735 => 369,  733 => 368,  721 => 367,  718 => 366,  712 => 364,  710 => 363,  701 => 356,  699 => 355,  695 => 354,  687 => 352,  683 => 351,  673 => 348,  669 => 347,  667 => 346,  663 => 345,  658 => 343,  654 => 342,  650 => 341,  646 => 340,  642 => 339,  637 => 336,  630 => 331,  628 => 330,  606 => 310,  604 => 309,  600 => 308,  593 => 307,  587 => 305,  585 => 304,  578 => 303,  572 => 301,  570 => 300,  563 => 299,  557 => 297,  555 => 296,  548 => 295,  542 => 293,  540 => 292,  537 => 291,  524 => 281,  520 => 280,  516 => 279,  512 => 278,  508 => 277,  504 => 276,  500 => 275,  486 => 263,  484 => 262,  468 => 248,  466 => 247,  444 => 227,  442 => 226,  438 => 224,  436 => 223,  429 => 219,  425 => 217,  423 => 216,  416 => 213,  413 => 212,  411 => 211,  393 => 209,  390 => 208,  388 => 207,  366 => 187,  364 => 186,  358 => 184,  356 => 183,  332 => 181,  330 => 180,  328 => 179,  314 => 176,  310 => 175,  308 => 174,  304 => 173,  301 => 172,  290 => 163,  288 => 162,  285 => 161,  278 => 156,  276 => 155,  243 => 124,  222 => 105,  220 => 104,  195 => 81,  193 => 80,  183 => 72,  181 => 71,  175 => 67,  173 => 66,  170 => 65,  155 => 52,  153 => 51,  138 => 38,  136 => 37,  127 => 30,  125 => 29,  122 => 28,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/common/header.twig", "");
    }
}
