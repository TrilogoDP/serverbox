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

/* luxshop/template/common/cart.twig */
class __TwigTemplate_c700d7208305ecc8161ad740fe32b2947d1a61aaea1d216551c781aa1c79de28 extends \Twig\Template
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
        echo "<div class=\"shopping-cart ";
        if ((array_key_exists("type_shop_cart", $context) && (($context["type_shop_cart"] ?? null) == "1"))) {
            echo "type_cart_2 pull-right";
        }
        echo "\">
<div id=\"cart\" class=\"btn-group btn-block\">
\t<button type=\"button\" ";
        // line 3
        if ((($context["on_off_shopping_cart_click"] ?? null) == "1")) {
            echo " onclick=\"fastorder_open_cart();\" ";
        } else {
            echo "data-toggle=\"dropdown\"";
        }
        echo " class=\"dflex align-items-center btn dropdown-toggle\">
\t<svg class=\"shop-bag-svg\" width=\"21\" height=\"19\" viewBox=\"0 0 21 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.25 1C0.25 0.585786 0.585786 0.25 1 0.25H2.38802C3.13452 0.25 3.79883 0.723534 4.04232 1.42921L7.07629 10.2224C7.11107 10.3232 7.20598 10.3908 7.31262 10.3908H17.5808C17.6999 10.3908 17.8024 10.3069 17.8259 10.1902L19.0236 4.24401C19.0548 4.08922 18.9364 3.94465 18.7785 3.94465H8.17493C7.76071 3.94465 7.42493 3.60886 7.42493 3.19465C7.42493 2.78044 7.76071 2.44465 8.17493 2.44465H18.7785C19.8838 2.44465 20.7123 3.45665 20.494 4.54019L19.2964 10.4864C19.1319 11.3033 18.4141 11.8908 17.5808 11.8908H7.31262C6.56612 11.8908 5.9018 11.4173 5.65832 10.7116L2.62435 1.91846C2.58957 1.81765 2.49466 1.75 2.38802 1.75H1C0.585786 1.75 0.25 1.41421 0.25 1Z\" fill=\"black\"/>
\t<path d=\"M9.462 16.6963C9.462 17.7464 8.61071 18.5977 7.56059 18.5977C6.51047 18.5977 5.65918 17.7464 5.65918 16.6963C5.65918 15.6462 6.51047 14.7949 7.56059 14.7949C8.61071 14.7949 9.462 15.6462 9.462 16.6963Z\" fill=\"black\"/>
\t<path d=\"M19.6026 16.6963C19.6026 17.7464 18.7513 18.5977 17.7012 18.5977C16.6511 18.5977 15.7998 17.7464 15.7998 16.6963C15.7998 15.6462 16.6511 14.7949 17.7012 14.7949C18.7513 14.7949 19.6026 15.6462 19.6026 16.6963Z\" fill=\"black\"/>
\t</svg>
\t<span class=\"cart-total\">";
        // line 9
        echo ($context["text_items"] ?? null);
        echo "</span>
\t<svg class=\"cart-icon-arrow\" xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"5\" fill=\"none\" viewBox=\"0 0 7 5\">
\t\t<path fill=\"#000\" fill-rule=\"evenodd\" d=\"M3.174 2.856a.5.5 0 00.707-.004L6.144.562a.5.5 0 01.712.704L4.592 3.555a1.5 1.5 0 01-2.121.012L.148 1.27A.5.5 0 11.852.559l2.322 2.297z\" clip-rule=\"evenodd\"/>
\t</svg>
\t";
        // line 13
        if ((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) {
            // line 14
            echo "\t\t<span class=\"text-a-icon-cart visible-xs visible-sm\">";
            echo ($context["text_ai_cart"] ?? null);
            echo "</span>
\t";
        }
        // line 16
        echo "\t</button>
\t<ul class=\"dropdown-menu pull-right\"  >
\t\t";
        // line 18
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 19
            echo "\t\t<li>
\t\t\t<table class=\"table table-striped\">
\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 22
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-left\">";
                // line 23
                if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["product"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["thumb"] ?? null) : null)) {
                    // line 24
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["product"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["href"] ?? null) : null);
                    echo "\"><img src=\"";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["product"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["thumb"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["product"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["name"] ?? null) : null);
                    echo "\" title=\"";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["product"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null);
                    echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t";
                }
                // line 25
                echo "</td>
\t\t\t\t\t<td class=\"text-left\"><a href=\"";
                // line 26
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["product"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["href"] ?? null) : null);
                echo "\">";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["product"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
                echo "</a>
\t\t\t\t\t\t";
                // line 27
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["product"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["option"] ?? null) : null)) {
                    // line 28
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["product"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["option"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 29
                        echo "\t\t\t\t\t\t<br />
\t\t\t\t\t\t- <small>";
                        // line 30
                        echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["option"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["name"] ?? null) : null);
                        echo " ";
                        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["option"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["value"] ?? null) : null);
                        echo "</small>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t\t";
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["product"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["recurring"] ?? null) : null)) {
                    // line 34
                    echo "\t\t\t\t\t\t<br />
\t\t\t\t\t\t- <small>";
                    // line 35
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["product"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["recurring"] ?? null) : null);
                    echo "</small>
\t\t\t\t\t\t";
                }
                // line 36
                echo "</td>
\t\t\t\t\t <td class=\"text-right\"><div class=\"cart-quantity-header\">x ";
                // line 37
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["product"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["quantity"] ?? null) : null);
                echo "</div></td>
\t\t\t\t\t<td class=\"text-right\">";
                // line 38
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["product"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["total"] ?? null) : null);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 39
                echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["product"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["cart_id"] ?? null) : null);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-link-delete\"><i class=\"fa fa-trash-o\"></i></button></td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 43
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t<td class=\"text-left\">";
                // line 45
                echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["voucher"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["description"] ?? null) : null);
                echo "</td>
\t\t\t\t\t<td class=\"text-right\">x&nbsp;1</td>
\t\t\t\t\t<td class=\"text-right\">";
                // line 47
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["voucher"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["amount"] ?? null) : null);
                echo "</td>
\t\t\t\t\t<td class=\"text-right text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 48
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["voucher"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["key"] ?? null) : null);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-remove\"><i class=\"fa fa-trash-o\"></i></button></td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t</table>
\t\t</li>
\t\t<li>
\t\t\t<div>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 57
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-right total-title\">";
                // line 58
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["total"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["title"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-right total-text\">";
                // line 59
                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["total"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["text"] ?? null) : null);
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t\t</table>
\t\t\t\t<p class=\"text-left\"><a class=\"btn btn-shopping\" href=\"";
            // line 63
            echo ($context["cart"] ?? null);
            echo "\">";
            echo ($context["text_cart"] ?? null);
            echo "</a><a class=\"btn btn-checkout\" href=\"";
            echo ($context["checkout"] ?? null);
            echo "\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a></p>
\t\t\t</div>
\t\t</li>
\t\t";
        } else {
            // line 67
            echo "\t\t<li>
\t\t\t<p class=\"text-center\">";
            // line 68
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t</li>
\t\t";
        }
        // line 71
        echo "\t</ul>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "luxshop/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 71,  246 => 68,  243 => 67,  230 => 63,  227 => 62,  218 => 59,  214 => 58,  211 => 57,  207 => 56,  200 => 51,  189 => 48,  185 => 47,  180 => 45,  176 => 43,  171 => 42,  160 => 39,  156 => 38,  152 => 37,  149 => 36,  142 => 35,  139 => 34,  136 => 33,  133 => 32,  123 => 30,  120 => 29,  115 => 28,  113 => 27,  107 => 26,  104 => 25,  92 => 24,  90 => 23,  87 => 22,  83 => 21,  79 => 19,  77 => 18,  73 => 16,  67 => 14,  65 => 13,  58 => 9,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/common/cart.twig", "");
    }
}
