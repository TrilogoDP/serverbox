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

/* luxshop/template/common/menu_v.twig */
class __TwigTemplate_a260473f358582c2315015057c424bb244aff6bf7d648b85c5b581720d407d10 extends \Twig\Template
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
        echo "\t\t<div class=\"menu-box ";
        if (((($context["type_header"] ?? null) == 3) || (($context["type_header"] ?? null) == 4))) {
            echo "dflex m_type_header_";
            echo ($context["type_header"] ?? null);
        } else {
            echo "col-sm-12 col-md-3 ";
        }
        echo "\">
\t\t\t";
        // line 2
        if (($context["items"] ?? null)) {
            // line 3
            echo "\t\t\t<nav id=\"menu-vertical\" class=\"btn-group ";
            if (((($context["type_header"] ?? null) == 3) || (($context["type_header"] ?? null) == 4))) {
                echo "col-md-3";
            } else {
                echo "btn-block";
            }
            echo "\">
\t\t\t\t";
            // line 4
            if (((($context["type_header"] ?? null) == 1) || (($context["type_header"] ?? null) == 2))) {
                // line 5
                echo "\t\t\t\t<button type=\"button\" class=\"btn btn-menu btn-block dropdown-toggle hidden-xs hidden-sm\" data-toggle=\"dropdown\">
\t\t\t\t\t";
                // line 6
                if ((array_key_exists("design_icon_menu", $context) && (($context["design_icon_menu"] ?? null) == 1))) {
                    // line 7
                    echo "\t\t\t\t\t<svg class=\"menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"18\" fill=\"none\" viewBox=\"0 0 22 18\"><path stroke=\"#fff\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M2 2h18M2 9h18M2 16h18\"/></svg>
\t\t\t\t\t";
                } else {
                    // line 9
                    echo "\t\t\t\t\t<svg class=\"menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"none\" viewBox=\"0 0 22 22\"><path stroke=\"#fff\" stroke-linecap=\"round\" stroke-width=\"1.5\" d=\"M12.8 13.25H20m-7.2 3.15H20m-7.2 3.15H20M3 20h5.2a1 1 0 001-1v-5.2a1 1 0 00-1-1H3a1 1 0 00-1 1V19a1 1 0 001 1zM13.8 9.65H19a1 1 0 001-1V3a1 1 0 00-1-1h-5.2a1 1 0 00-1 1v5.65a1 1 0 001 1zM3 9.65h5.2a1 1 0 001-1V3a1 1 0 00-1-1H3a1 1 0 00-1 1v5.65a1 1 0 001 1z\"/></svg>
\t\t\t\t\t";
                }
                // line 11
                echo "\t\t\t\t\t<span class=\"text-category\">";
                echo ($context["text_category"] ?? null);
                echo "</span>
\t\t\t\t\t<svg class=\"icon-arrow\" xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"5\" fill=\"none\" viewBox=\"0 0 7 5\">
\t\t\t\t\t\t<path fill=\"#FFF\" fill-rule=\"evenodd\" d=\"M3.174 2.856a.5.5 0 00.707-.004L6.144.562a.5.5 0 01.712.704L4.592 3.555a1.5 1.5 0 01-2.121.012L.148 1.27A.5.5 0 11.852.559l2.322 2.297z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t</svg>
\t\t\t\t</button>
\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t<ul id=\"menu-vertical-list\" class=\"dropdown-menu hidden-xs hidden-sm\">
\t\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "additional_menu", [], "any", false, false, false, 19) == "left")) {
                    // line 20
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 20)) {
                        // line 21
                        echo "\t\t\t\t\t\t\t<li class=\"dropdown";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 21)) {
                            echo " have-icon";
                        }
                        echo "\">
\t\t\t\t\t\t\t<a href=\"";
                        // line 22
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 22);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "new_blank", [], "any", false, false, false, 22) == 1)) {
                            echo " target=\"_blank\" data-target=\"link\" class=\"parent-link\" ";
                        } else {
                            echo "class=\"parent-link\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t";
                        // line 23
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 23)) {
                            // line 24
                            echo "\t\t\t\t\t\t\t\t\t<img alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 24);
                            echo "\" class=\"nsmenu-thumb ";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb_hover", [], "any", false, false, false, 24)) {
                                echo "pitem-icon";
                            }
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 24);
                            echo "\"/>
\t\t\t\t\t\t\t\t";
                        }
                        // line 26
                        echo "\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb_hover", [], "any", false, false, false, 26)) {
                            // line 27
                            echo "\t\t\t\t\t\t\t\t\t<img alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 27);
                            echo "\" class=\"nsmenu-thumb hitem-icon\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb_hover", [], "any", false, false, false, 27);
                            echo "\"/>
\t\t\t\t\t\t\t\t";
                        }
                        // line 29
                        echo "\t\t\t\t\t\t\t\t<div class=\"item-name";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 29)) {
                            echo " himg";
                        }
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 29);
                        echo "</div>
\t\t\t\t\t\t\t\t";
                        // line 30
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "dop_info_vm", [], "any", false, false, false, 30))) {
                            echo "<div class=\"item-dop-info";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 30)) {
                                echo " himg";
                            }
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "dop_info_vm", [], "any", false, false, false, 30);
                            echo "</div>";
                        }
                        // line 31
                        echo "\t\t\t\t\t\t\t\t";
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "sticker_parent", [], "any", false, false, false, 31))) {
                            // line 32
                            echo "\t\t\t\t\t\t\t\t\t<span style=\"color:#";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "spctext", [], "any", false, false, false, 32);
                            echo "; background-color:#";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "spbg", [], "any", false, false, false, 32);
                            echo "\" class=\"cat-label cat-label-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "sticker_parent", [], "any", false, false, false, 32);
                            echo "</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 34
                        echo "\t\t\t\t\t\t\t\t<svg class=\"arrow\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5\" height=\"7\" fill=\"none\" viewBox=\"0 0 5 7\"><path fill=\"#000\" fill-rule=\"evenodd\" d=\"M2.856 3.826a.5.5 0 00-.004-.707L.562.856a.5.5 0 01.704-.712l2.289 2.264a1.5 1.5 0 01.012 2.121L1.27 6.852a.5.5 0 11-.711-.704l2.297-2.322z\" clip-rule=\"evenodd\"/></svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                        // line 36
                        if (((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 36) == "freelink") || (twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 36) == "category"))) {
                            // line 37
                            echo "\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 37) == "simple")) {
                                // line 38
                                echo "\t\t\t\t\t\t  <div class=\"ns-dd dropdown-menu-simple nsmenu-type-category-simple\">
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t";
                                // line 40
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 40));
                                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                    // line 41
                                    echo "\t\t\t\t\t\t\t\t\t<li ";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 41))) {
                                        echo " class=\"nsmenu-issubchild\"";
                                    }
                                    echo ">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 42
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 42);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 42);
                                    echo "
\t\t\t\t\t\t\t\t\t\t";
                                    // line 43
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 43))) {
                                        // line 44
                                        echo "\t\t\t\t\t\t\t\t\t\t\t<svg class=\"arrow\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5\" height=\"7\" fill=\"none\" viewBox=\"0 0 5 7\"><path fill=\"#000\" fill-rule=\"evenodd\" d=\"M2.856 3.826a.5.5 0 00-.004-.707L.562.856a.5.5 0 01.704-.712l2.289 2.264a1.5 1.5 0 01.012 2.121L1.27 6.852a.5.5 0 11-.711-.704l2.297-2.322z\" clip-rule=\"evenodd\"/></svg>
\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 46
                                    echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                                    // line 47
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 47))) {
                                        // line 48
                                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"nsmenu-ischild nsmenu-ischild-simple\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 50
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 50));
                                        foreach ($context['_seq'] as $context["_key"] => $context["subchild"]) {
                                            // line 51
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 51) == "freelink")) {
                                                // line 52
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "link", [], "any", false, false, false, 52);
                                                echo "\">";
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "title", [], "any", false, false, false, 52);
                                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 54
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li ";
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["subchild"], "child_4level_data", [], "any", false, false, false, 54))) {
                                                    echo "class=\"ischild_4level_simple\"";
                                                }
                                                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                                // line 55
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "href", [], "any", false, false, false, 55);
                                                echo "\">";
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "name", [], "any", false, false, false, 55);
                                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                // line 56
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["subchild"], "child_4level_data", [], "any", false, false, false, 56))) {
                                                    // line 57
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"arrow\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5\" height=\"7\" fill=\"none\" viewBox=\"0 0 5 7\"><path fill=\"#000\" fill-rule=\"evenodd\" d=\"M2.856 3.826a.5.5 0 00-.004-.707L.562.856a.5.5 0 01.704-.712l2.289 2.264a1.5 1.5 0 01.012 2.121L1.27 6.852a.5.5 0 11-.711-.704l2.297-2.322z\" clip-rule=\"evenodd\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                // line 59
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                // line 60
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["subchild"], "child_4level_data", [], "any", false, false, false, 60))) {
                                                    // line 61
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"child_4level_simple\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    // line 63
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["subchild"], "child_4level_data", [], "any", false, false, false, 63));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["child_4level_data"]) {
                                                        // line 64
                                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["child_4level_data"], "href", [], "any", false, false, false, 64);
                                                        echo "\">";
                                                        echo twig_get_attribute($this->env, $this->source, $context["child_4level_data"], "name", [], "any", false, false, false, 64);
                                                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_4level_data'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 66
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                // line 69
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 71
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subchild'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 72
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 75
                                    echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 77
                                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                            }
                            // line 80
                            echo "
\t\t\t\t\t\t\t";
                            // line 81
                            if (((twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 81) == "full_3_level") || (twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 81) == "full_3_level_image"))) {
                                // line 82
                                echo "\t\t\t\t\t\t\t  <div class=\"ns-dd dropdown-menu-simple nsmenu-type-category-simple\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t\t";
                                // line 84
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 84));
                                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                    // line 85
                                    echo "\t\t\t\t\t\t\t\t\t\t<li ";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 85))) {
                                        echo " class=\"nsmenu-issubchild massonry-item\"";
                                    }
                                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 86
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 86);
                                    echo "\">";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 86))) {
                                        echo "<svg class=\"arrow\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5\" height=\"7\" fill=\"none\" viewBox=\"0 0 5 7\"><path fill=\"#000\" fill-rule=\"evenodd\" d=\"M2.856 3.826a.5.5 0 00-.004-.707L.562.856a.5.5 0 01.704-.712l2.289 2.264a1.5 1.5 0 01.012 2.121L1.27 6.852a.5.5 0 11-.711-.704l2.297-2.322z\" clip-rule=\"evenodd\"/></svg>";
                                    }
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 86);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled nsmenu-ischild nsmenu-full3level\">
\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 88
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 88))) {
                                        // line 89
                                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-masonry\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 90
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 90));
                                        foreach ($context['_seq'] as $context["_key"] => $context["subchild"]) {
                                            // line 91
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nsmenu-parent-block";
                                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["subchild"], "child_4level_data", [], "any", false, false, false, 91))) {
                                                echo " nsmenu-issubchild";
                                            }
                                            echo " col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 92
                                            if (((twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 92) == "full_3_level_image") && (twig_get_attribute($this->env, $this->source, $context["subchild"], "thumb_3lv", [], "any", false, false, false, 92) != ""))) {
                                                // line 93
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-img\" href=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "href", [], "any", false, false, false, 93);
                                                echo "\"><img src=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "thumb_3lv", [], "any", false, false, false, 93);
                                                echo "\" alt=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "name", [], "any", false, false, false, 93);
                                                echo "\"/></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 95
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 95) == "freelink")) {
                                                // line 96
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-title\" href=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "link", [], "any", false, false, false, 96);
                                                echo "\">";
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "title", [], "any", false, false, false, 96);
                                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 98
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-title\" href=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "href", [], "any", false, false, false, 98);
                                                echo "\">";
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "name", [], "any", false, false, false, 98);
                                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled level4_full\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                // line 100
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["subchild"], "child_4level_data", [], "any", false, false, false, 100));
                                                foreach ($context['_seq'] as $context["_key"] => $context["child_4level_data"]) {
                                                    // line 101
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                    echo twig_get_attribute($this->env, $this->source, $context["child_4level_data"], "href", [], "any", false, false, false, 101);
                                                    echo "\">";
                                                    echo twig_get_attribute($this->env, $this->source, $context["child_4level_data"], "name", [], "any", false, false, false, 101);
                                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_4level_data'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 103
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 105
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subchild'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 107
                                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 109
                                    echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 112
                                echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                            }
                            // line 115
                            echo "
\t\t\t\t\t\t\t\t";
                            // line 116
                            if (((twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 116) == "full_image") || (twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 116) == "full"))) {
                                // line 117
                                echo "\t\t\t\t\t\t\t\t<div class=\"ns-dd dropdown-menu-full-image nsmenu-type-category-full-image box-col-3\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                // line 118
                                if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 118)) {
                                    echo "8";
                                } else {
                                    echo "12";
                                }
                                echo " nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 119
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 119), twig_get_attribute($this->env, $this->source, $context["item"], "ac_number", [], "any", false, false, false, 119)));
                                foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                                    // line 120
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 121
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($context["children"]);
                                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                        // line 122
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nsmenu-parent-block";
                                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 122))) {
                                            echo " nsmenu-issubchild";
                                        }
                                        echo " col-md-";
                                        echo twig_get_attribute($this->env, $this->source, $context["item"], "number_column_sc", [], "any", false, false, false, 122);
                                        echo " col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 123
                                        if (((twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 123) == "full_image") && (twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 123) != ""))) {
                                            // line 124
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-img\" href=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 124);
                                            echo "\"><img src=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 124);
                                            echo "\" alt=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 124);
                                            echo "\"/></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 126
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-title\" href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 126);
                                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 127
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 127);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 129
                                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 129))) {
                                            // line 130
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled nsmenu-ischild\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 131
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 131));
                                            foreach ($context['_seq'] as $context["_key"] => $context["subchild"]) {
                                                // line 132
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 132) == "freelink")) {
                                                    // line 133
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                    echo twig_get_attribute($this->env, $this->source, $context["subchild"], "link", [], "any", false, false, false, 133);
                                                    echo "\">";
                                                    echo twig_get_attribute($this->env, $this->source, $context["subchild"], "title", [], "any", false, false, false, 133);
                                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                } else {
                                                    // line 135
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                    echo twig_get_attribute($this->env, $this->source, $context["subchild"], "href", [], "any", false, false, false, 135);
                                                    echo "\">";
                                                    echo twig_get_attribute($this->env, $this->source, $context["subchild"], "name", [], "any", false, false, false, 135);
                                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                // line 137
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subchild'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 138
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 140
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 142
                                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 144
                                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                                // line 145
                                if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 145)) {
                                    // line 146
                                    echo "\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 menu-add-html\">
\t\t\t\t\t\t\t\t\t\t";
                                    // line 147
                                    echo twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 147);
                                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 150
                                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 152
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        // line 153
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 154
                        if (((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 154) == "freelink") || (twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 154) == "category"))) {
                            // line 155
                            echo "\t\t\t\t\t\t\t\t";
                            if (((twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 155) == "full_masonry") || (twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 155) == "full_image_masonry"))) {
                                // line 156
                                echo "\t\t\t\t\t\t\t\t<div class=\"ns-dd dropdown-menu-full-image nsmenu-type-category-full-image box-col-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                // line 157
                                if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 157)) {
                                    echo "8";
                                } else {
                                    echo "12";
                                }
                                echo " nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row-flex-masonry\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 159
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 159));
                                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                    // line 160
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nsmenu-parent-block";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 160))) {
                                        echo " nsmenu-issubchild";
                                    }
                                    echo " col-sm-12 col-md-";
                                    echo twig_get_attribute($this->env, $this->source, $context["item"], "number_column_sc", [], "any", false, false, false, 160);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 161
                                    if (((twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 161) == "full_image_masonry") && (twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 161) != ""))) {
                                        // line 162
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-img\" href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 162);
                                        echo "\"><img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 162);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 162);
                                        echo "\"/></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 164
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-title\" href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 164);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 165
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 165);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 167
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 167))) {
                                        // line 168
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled nsmenu-ischild\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 169
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 169));
                                        foreach ($context['_seq'] as $context["_key"] => $context["subchild"]) {
                                            // line 170
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 170) == "freelink")) {
                                                // line 171
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "link", [], "any", false, false, false, 171);
                                                echo "\">";
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "title", [], "any", false, false, false, 171);
                                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 173
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "href", [], "any", false, false, false, 173);
                                                echo "\">";
                                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "name", [], "any", false, false, false, 173);
                                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 175
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subchild'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 176
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 178
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 181
                                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                                // line 183
                                if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 183)) {
                                    // line 184
                                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 menu-add-html\">
\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 185
                                    echo twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 185);
                                    echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 188
                                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 190
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        // line 191
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 192
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 192) == "html")) {
                            // line 193
                            echo "\t\t\t\t\t\t\t\t\t  <div class=\"ns-dd dropdown-menu-html-block nsmenu-type-html box-col-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"nsmenu-html-block\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 195
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "html", [], "any", false, false, false, 195);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 199
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 200
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 200) == "manufacturer")) {
                            // line 201
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ns-dd dropdown-menu-manufacturer nsmenu-type-manufacturer box-col-3\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 202
                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type_manuf", [], "any", false, false, false, 202) == "type_alphabet")) {
                                // line 203
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 203)) {
                                    echo "8";
                                } else {
                                    echo "12";
                                }
                                echo " nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 204
                                $context["num_columns"] = ((twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 204)) ? (4) : (6));
                                // line 205
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["item"], "result_manufacturer_a", [], "any", false, false, false, 205)) {
                                    // line 206
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["item"], "result_manufacturer_a", [], "any", false, false, false, 206), ($context["num_columns"] ?? null)));
                                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturer_a"]) {
                                        // line 207
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 208
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable($context["manufacturer_a"]);
                                        foreach ($context['_seq'] as $context["_key"] => $context["man_alphabet"]) {
                                            // line 209
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if (twig_get_attribute($this->env, $this->source, $context["man_alphabet"], "manufacturer", [], "any", false, false, false, 209)) {
                                                // line 210
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["man_alphabet"], "manufacturer", [], "any", false, false, false, 210), ($context["num_columns"] ?? null)));
                                                foreach ($context['_seq'] as $context["_key"] => $context["manufacturers"]) {
                                                    // line 211
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nsmenu-parent-block col-md-";
                                                    if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 211)) {
                                                        echo "3";
                                                    } else {
                                                        echo "2";
                                                    }
                                                    echo " col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"name-manuf-a\">";
                                                    // line 212
                                                    echo twig_get_attribute($this->env, $this->source, $context["man_alphabet"], "name", [], "any", false, false, false, 212);
                                                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    // line 213
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable($context["manufacturers"]);
                                                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                                        // line 214
                                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"manuf-res\"><a data-toggle=\"tooltip\" title=\"<img src='";
                                                        echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb", [], "any", false, false, false, 214);
                                                        echo "' alt='";
                                                        echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 214);
                                                        echo "' title='";
                                                        echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 214);
                                                        echo "' />\" href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 214);
                                                        echo "\">";
                                                        echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 214);
                                                        echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 216
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturers'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 218
                                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 220
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['man_alphabet'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 221
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer_a'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 223
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 224
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 225
                                if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 225)) {
                                    // line 226
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 menu-add-html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 227
                                    echo twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 227);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 230
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 231
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type_manuf", [], "any", false, false, false, 231) == "type_image")) {
                                // line 232
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 232)) {
                                    echo "8";
                                } else {
                                    echo "12";
                                }
                                echo " nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                                // line 233
                                $context["num_columns"] = ((twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 233)) ? (4) : (6));
                                // line 234
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 234), ($context["num_columns"] ?? null)));
                                foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                                    // line 235
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 236
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($context["children"]);
                                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                        // line 237
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nsmenu-parent-block col-md-";
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 237)) {
                                            echo "3";
                                        } else {
                                            echo "2";
                                        }
                                        echo " col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-img\" href=\"";
                                        // line 238
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 238);
                                        echo "\"><img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 238);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 238);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 238);
                                        echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-title\" href=\"";
                                        // line 239
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 239);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 239);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 242
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 244
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 245
                                if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 245)) {
                                    // line 246
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 menu-add-html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 247
                                    echo twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 247);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 250
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 251
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 253
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 254
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 254) == "information")) {
                            // line 255
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ns-dd dropdown-menu-information nsmenu-type-information\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 258
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 258));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 259
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 259);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 259);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 261
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 265
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 266
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 266) == "product")) {
                            // line 267
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ns-dd dropdown-menu-product nsmenu-type-product box-col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                            // line 268
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 268)) {
                                echo "8";
                            } else {
                                echo "12";
                            }
                            echo " nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t\t\t\t ";
                            // line 269
                            $context["num_columns"] = ((twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 269)) ? (4) : (6));
                            // line 270
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 270), ($context["num_columns"] ?? null)));
                            foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                                // line 271
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dflex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 272
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["children"]);
                                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                    // line 273
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dflex flex-column nsmenu-parent-block col-md-";
                                    if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 273)) {
                                        echo "3";
                                    } else {
                                        echo "2";
                                    }
                                    echo " col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-img\" href=\"";
                                    // line 274
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 274);
                                    echo "\"><img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 274);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 274);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 274);
                                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-title\" href=\"";
                                    // line 275
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 275);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 275);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 277
                                    if ( !twig_get_attribute($this->env, $this->source, $context["child"], "special", [], "any", false, false, false, 277)) {
                                        // line 278
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "price", [], "any", false, false, false, 278);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    } else {
                                        // line 280
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "price", [], "any", false, false, false, 280);
                                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                                        // line 281
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "special", [], "any", false, false, false, 281);
                                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 283
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 286
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 288
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 289
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 289)) {
                                // line 290
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 menu-add-html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 291
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 291);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 294
                            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 296
                        echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    } else {
                        // line 298
                        echo "\t\t\t\t\t\t\t\t<li ";
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 298) || (twig_get_attribute($this->env, $this->source, $context["item"], "additional_menu", [], "any", false, false, false, 298) == "additional"))) {
                            echo "class=\"";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 298)) {
                                echo "have-icon";
                            }
                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "additional_menu", [], "any", false, false, false, 298) == "additional")) {
                                echo " hidden-md hidden-lg";
                            }
                            echo "\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t<a ";
                        // line 299
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "new_blank", [], "any", false, false, false, 299) == 1)) {
                            echo " target=\"_blank\" data-target=\"link\" ";
                        } else {
                            echo " class=\"dropdown-img\" ";
                        }
                        echo " href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 299);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 300
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 300)) {
                            // line 301
                            echo "\t\t\t\t\t\t\t\t\t\t\t<img alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 301);
                            echo "\" class=\"nsmenu-thumb ";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb_hover", [], "any", false, false, false, 301)) {
                                echo "pitem-icon";
                            }
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 301);
                            echo "\"/>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 303
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb_hover", [], "any", false, false, false, 303)) {
                            // line 304
                            echo "\t\t\t\t\t\t\t\t\t\t\t<img alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 304);
                            echo "\" class=\"nsmenu-thumb hitem-icon\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb_hover", [], "any", false, false, false, 304);
                            echo "\"/>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 306
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"item-name";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 306)) {
                            echo " himg";
                        }
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 306);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        // line 307
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "dop_info_vm", [], "any", false, false, false, 307))) {
                            echo "<div class=\"item-dop-info";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 307)) {
                                echo " himg";
                            }
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "dop_info_vm", [], "any", false, false, false, 307);
                            echo "</div>";
                        }
                        // line 308
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "sticker_parent", [], "any", false, false, false, 308))) {
                            // line 309
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "spctext", [], "any", false, false, false, 309);
                            echo "; background-color:#";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "spbg", [], "any", false, false, false, 309);
                            echo "\" class=\"cat-label cat-label-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "sticker_parent", [], "any", false, false, false, 309);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 311
                        echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 314
                    echo "\t\t\t\t\t\t";
                }
                // line 315
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t\t";
            // line 318
            if (((($context["type_header"] ?? null) == 1) || (($context["type_header"] ?? null) == 2))) {
                // line 319
                echo "\t\t\t\t";
                if ((array_key_exists("main_menu_mask", $context) && (($context["main_menu_mask"] ?? null) == 1))) {
                    // line 320
                    echo "\t\t\t\t<div id=\"maskMenuHC\"></div>
\t\t\t\t";
                }
                // line 322
                echo "\t\t\t\t";
            }
            // line 323
            echo "\t\t\t";
        }
        // line 324
        echo "\t\t</div>
\t";
        // line 325
        if (((($context["type_header"] ?? null) == 1) || ((($context["type_header"] ?? null) == 2) && (($context["swap_search_dmenu"] ?? null) == 0)))) {
            // line 326
            echo "\t\t";
            if (($context["additional"] ?? null)) {
                // line 327
                echo "\t\t<div class=\"";
                if ((($context["type_header"] ?? null) == 1)) {
                    echo "col-md-9";
                } else {
                    echo "col-md-8";
                }
                echo " hidden-xs hidden-sm clearfix dop-right-menu\">
\t\t<nav id=\"additional-menu\" class=\"navbar hmenu_type\">
\t\t<div>
\t\t  <ul class=\"nav navbar-nav\" style=\"visibility: hidden;overflow:hidden;\">
\t\t\t";
                // line 331
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 332
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 332)) {
                        // line 333
                        echo "\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "additional_menu", [], "any", false, false, false, 333) == "additional")) {
                            // line 334
                            echo "\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t<a href=\"";
                            // line 335
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 335);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "new_blank", [], "any", false, false, false, 335) == 1)) {
                                echo "target=\"_blank\" data-target=\"link\"";
                            } else {
                                echo "class=\"dropdown-toggle dropdown-img\" data-toggle=\"dropdown\"";
                            }
                            echo ">
\t\t\t\t\t\t";
                            // line 336
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 336)) {
                                echo "<img alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 336);
                                echo "\" class=\"nsmenu-thumb ";
                                if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb_hover", [], "any", false, false, false, 336)) {
                                    echo "pitem-icon";
                                }
                                echo "\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 336);
                                echo "\"/>";
                            }
                            // line 337
                            echo "\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb_hover", [], "any", false, false, false, 337)) {
                                echo "<img alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 337);
                                echo "\" class=\"nsmenu-thumb hitem-icon\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb_hover", [], "any", false, false, false, 337);
                                echo "\"/>";
                            }
                            // line 338
                            echo "\t\t\t\t\t\t";
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "sticker_parent", [], "any", false, false, false, 338))) {
                                echo "<span style=\"color:#";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "spctext", [], "any", false, false, false, 338);
                                echo "; background-color:#";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "spbg", [], "any", false, false, false, 338);
                                echo "\" class=\"cat-label cat-label-label\">";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "sticker_parent", [], "any", false, false, false, 338);
                                echo "</span>";
                            }
                            // line 339
                            echo "\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 339);
                            echo "
\t\t\t\t\t\t<svg class=\"arrow-t\" width=\"7\" height=\"4\" viewBox=\"0 0 7 4\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.17409 2.44145C3.37044 2.63563 3.68704 2.63386 3.88121 2.4375L6.14446 0.148615C6.33862 -0.0477431 6.6552 -0.049525 6.85156 0.144635C7.04792 0.338795 7.0497 0.655372 6.85554 0.851731L4.59228 3.14061C4.00977 3.72971 3.05999 3.73503 2.47093 3.15248L0.14842 0.855689C-0.0479259 0.661516 -0.0496879 0.344939 0.144485 0.148593C0.338657 -0.0477531 0.655234 -0.0495152 0.85158 0.144657L3.17409 2.44145Z\" fill=\"black\"/>
\t\t\t\t\t\t</svg></a>
\t\t\t\t\t\t\t";
                            // line 343
                            if (((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 343) == "freelink") || (twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 343) == "category"))) {
                                // line 344
                                echo "\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 344) == "simple")) {
                                    // line 345
                                    echo "\t\t\t\t\t\t\t";
                                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "additional_menu", [], "any", false, false, false, 345) == "additional")) {
                                        // line 346
                                        echo "\t\t\t\t\t\t\t <div class=\"dropdown-menu nsmenu-type-category-simple\">
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t";
                                        // line 348
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 348));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 349
                                            echo "\t\t\t\t\t\t\t\t\t<li ";
                                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 349))) {
                                                echo "class=\"nsmenu-issubchild\"";
                                            }
                                            echo ">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                            // line 350
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 350);
                                            echo "\">";
                                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 350))) {
                                                echo "<svg class=\"arrow\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5\" height=\"7\" fill=\"none\" viewBox=\"0 0 5 7\"><path fill=\"#000\" fill-rule=\"evenodd\" d=\"M2.856 3.826a.5.5 0 00-.004-.707L.562.856a.5.5 0 01.704-.712l2.289 2.264a1.5 1.5 0 01.012 2.121L1.27 6.852a.5.5 0 11-.711-.704l2.297-2.322z\" clip-rule=\"evenodd\"/></svg>";
                                            }
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 350);
                                            echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                                            // line 351
                                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 351))) {
                                                // line 352
                                                echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled nsmenu-ischild nsmenu-ischild-simple\">
\t\t\t\t\t\t\t\t\t\t ";
                                                // line 353
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 353));
                                                foreach ($context['_seq'] as $context["_key"] => $context["subchild"]) {
                                                    // line 354
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                                                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 354) == "freelink")) {
                                                        // line 355
                                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["subchild"], "link", [], "any", false, false, false, 355);
                                                        echo "\">";
                                                        echo twig_get_attribute($this->env, $this->source, $context["subchild"], "title", [], "any", false, false, false, 355);
                                                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                                                    } else {
                                                        // line 357
                                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["subchild"], "href", [], "any", false, false, false, 357);
                                                        echo "\">";
                                                        echo twig_get_attribute($this->env, $this->source, $context["subchild"], "name", [], "any", false, false, false, 357);
                                                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                                                    }
                                                    // line 359
                                                    echo "
\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subchild'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 361
                                                echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 363
                                            echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 365
                                        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                                    }
                                    // line 368
                                    echo "\t\t\t\t\t\t\t";
                                }
                                // line 369
                                echo "\t\t\t\t\t\t\t";
                            }
                            // line 370
                            echo "\t\t\t\t\t\t\t";
                            if (((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 370) == "freelink") || (twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 370) == "category"))) {
                                // line 371
                                echo "\t\t\t\t\t\t\t";
                                if (((twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 371) == "full_image") || (twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 371) == "full"))) {
                                    // line 372
                                    echo "\t\t\t\t\t\t\t";
                                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "additional_menu", [], "any", false, false, false, 372) == "additional")) {
                                        // line 373
                                        echo "\t\t\t\t\t\t\t\t<div class=\"dropdown-menu nsmenu-type-category-full-image nsmenu-bigblock-additional\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                        // line 374
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 374)) {
                                            echo "8";
                                        } else {
                                            echo "12";
                                        }
                                        echo " nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 375
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 375), twig_get_attribute($this->env, $this->source, $context["item"], "ac_number", [], "any", false, false, false, 375)));
                                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                                            // line 376
                                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 377
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                                // line 378
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nsmenu-parent-block";
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 378))) {
                                                    echo " nsmenu-issubchild";
                                                }
                                                echo " col-md-";
                                                echo twig_get_attribute($this->env, $this->source, $context["item"], "number_column_sc", [], "any", false, false, false, 378);
                                                echo " col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                // line 379
                                                if (((twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 379) == "full_image") && (twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 379) != ""))) {
                                                    // line 380
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-img\" href=\"";
                                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 380);
                                                    echo "\"><img src=\"";
                                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 380);
                                                    echo "\" alt=\"";
                                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 380);
                                                    echo "\"/></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                // line 382
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-title\" href=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 382);
                                                echo "\">";
                                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 382);
                                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                // line 383
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 383))) {
                                                    // line 384
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled nsmenu-ischild\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    // line 385
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 385));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["subchild"]) {
                                                        // line 386
                                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 386) == "freelink")) {
                                                            // line 387
                                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["subchild"], "link", [], "any", false, false, false, 387);
                                                            echo "\">";
                                                            echo twig_get_attribute($this->env, $this->source, $context["subchild"], "title", [], "any", false, false, false, 387);
                                                            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                        } else {
                                                            // line 389
                                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["subchild"], "href", [], "any", false, false, false, 389);
                                                            echo "\">";
                                                            echo twig_get_attribute($this->env, $this->source, $context["subchild"], "name", [], "any", false, false, false, 389);
                                                            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                        }
                                                        // line 391
                                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subchild'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 392
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                // line 394
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 396
                                            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 398
                                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                                        // line 399
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 399)) {
                                            // line 400
                                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 menu-add-html\">
\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 401
                                            echo twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 401);
                                            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 404
                                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                                    }
                                    // line 406
                                    echo "\t\t\t\t\t\t\t\t";
                                }
                                // line 407
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            // line 408
                            echo "\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "additional_menu", [], "any", false, false, false, 408) == "additional")) {
                                // line 409
                                echo "\t\t\t\t\t\t\t\t";
                                if (((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 409) == "freelink") || (twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 409) == "category"))) {
                                    // line 410
                                    echo "\t\t\t\t\t\t\t\t";
                                    if (((((twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 410) == "full_masonry") || (twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 410) == "full_image_masonry")) || (twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 410) == "full_3_level")) || (twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 410) == "full_3_level_image"))) {
                                        // line 411
                                        echo "\t\t\t\t\t\t\t\t<div class=\"dropdown-menu nsmenu-type-category-full-image nsmenu-bigblock-additional\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                        // line 412
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 412)) {
                                            echo "8";
                                        } else {
                                            echo "12";
                                        }
                                        echo " nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row-flex-masonry\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 414
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 414));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 415
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nsmenu-parent-block";
                                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 415))) {
                                                echo " nsmenu-issubchild";
                                            }
                                            echo " col-sm-12 col-md-";
                                            echo twig_get_attribute($this->env, $this->source, $context["item"], "number_column_sc", [], "any", false, false, false, 415);
                                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 416
                                            if (((twig_get_attribute($this->env, $this->source, $context["item"], "subtype", [], "any", false, false, false, 416) == "full_image_masonry") && (twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 416) != ""))) {
                                                // line 417
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-img\" href=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 417);
                                                echo "\"><img src=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 417);
                                                echo "\" alt=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 417);
                                                echo "\"/></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 419
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-title\" href=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 419);
                                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 420
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 420);
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 422
                                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 422))) {
                                                // line 423
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled nsmenu-ischild\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                // line 424
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 424));
                                                foreach ($context['_seq'] as $context["_key"] => $context["subchild"]) {
                                                    // line 425
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 425) == "freelink")) {
                                                        // line 426
                                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["subchild"], "link", [], "any", false, false, false, 426);
                                                        echo "\">";
                                                        echo twig_get_attribute($this->env, $this->source, $context["subchild"], "title", [], "any", false, false, false, 426);
                                                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    } else {
                                                        // line 428
                                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["subchild"], "href", [], "any", false, false, false, 428);
                                                        echo "\">";
                                                        echo twig_get_attribute($this->env, $this->source, $context["subchild"], "name", [], "any", false, false, false, 428);
                                                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    }
                                                    // line 430
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subchild'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 431
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 433
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 436
                                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                                        // line 438
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 438)) {
                                            // line 439
                                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 menu-add-html\">
\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 440
                                            echo twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 440);
                                            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 443
                                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                                    }
                                    // line 445
                                    echo "\t\t\t\t\t\t\t\t";
                                }
                                // line 446
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            // line 447
                            echo "\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 447) == "html")) {
                                // line 448
                                echo "\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["item"], "additional_menu", [], "any", false, false, false, 448) == "additional")) {
                                    // line 449
                                    echo "\t\t\t\t\t\t\t\t  <div class=\"dropdown-menu nsmenu-type-html nsmenu-bigblock-additional\">
\t\t\t\t\t\t\t\t\t\t<div class=\"nsmenu-html-block\">
\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 451
                                    echo twig_get_attribute($this->env, $this->source, $context["item"], "html", [], "any", false, false, false, 451);
                                    echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t";
                                }
                                // line 455
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            // line 456
                            echo "\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 456) == "manufacturer")) {
                                // line 457
                                echo "\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["item"], "additional_menu", [], "any", false, false, false, 457) == "additional")) {
                                    // line 458
                                    echo "\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu nsmenu-type-manufacturer nsmenu-bigblock-additional\">
\t\t\t\t\t\t\t\t\t\t";
                                    // line 459
                                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "type_manuf", [], "any", false, false, false, 459) == "type_alphabet")) {
                                        // line 460
                                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 460)) {
                                            echo "8";
                                        } else {
                                            echo "12";
                                        }
                                        echo " nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 461
                                        $context["num_columns"] = ((twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 461)) ? (4) : (6));
                                        // line 462
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "result_manufacturer_a", [], "any", false, false, false, 462)) {
                                            // line 463
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["item"], "result_manufacturer_a", [], "any", false, false, false, 463), ($context["num_columns"] ?? null)));
                                            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer_a"]) {
                                                // line 464
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                // line 465
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable($context["manufacturer_a"]);
                                                foreach ($context['_seq'] as $context["_key"] => $context["man_alphabet"]) {
                                                    // line 466
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    if (twig_get_attribute($this->env, $this->source, $context["man_alphabet"], "manufacturer", [], "any", false, false, false, 466)) {
                                                        // line 467
                                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["man_alphabet"], "manufacturer", [], "any", false, false, false, 467), ($context["num_columns"] ?? null)));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["manufacturers"]) {
                                                            // line 468
                                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nsmenu-parent-block col-md-";
                                                            if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 468)) {
                                                                echo "3";
                                                            } else {
                                                                echo "2";
                                                            }
                                                            echo " col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"name-manuf-a\">";
                                                            // line 469
                                                            echo twig_get_attribute($this->env, $this->source, $context["man_alphabet"], "name", [], "any", false, false, false, 469);
                                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                            // line 470
                                                            $context['_parent'] = $context;
                                                            $context['_seq'] = twig_ensure_traversable($context["manufacturers"]);
                                                            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                                                // line 471
                                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"manuf-res\"><a data-toggle=\"tooltip\" title=\"<img src='";
                                                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb", [], "any", false, false, false, 471);
                                                                echo "' alt='";
                                                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 471);
                                                                echo "' title='";
                                                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 471);
                                                                echo "' />\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 471);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 471);
                                                                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                            }
                                                            $_parent = $context['_parent'];
                                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                                            // line 473
                                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturers'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 475
                                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    }
                                                    // line 477
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['man_alphabet'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 478
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer_a'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 480
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 481
                                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 482
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 482)) {
                                            // line 483
                                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 menu-add-html\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 484
                                            echo twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 484);
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 487
                                        echo "\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 488
                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "type_manuf", [], "any", false, false, false, 488) == "type_image")) {
                                        // line 489
                                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 489)) {
                                            echo "8";
                                        } else {
                                            echo "12";
                                        }
                                        echo " nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t\t\t ";
                                        // line 490
                                        $context["num_columns"] = ((twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 490)) ? (4) : (6));
                                        // line 491
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 491), ($context["num_columns"] ?? null)));
                                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                                            // line 492
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 493
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                                // line 494
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nsmenu-parent-block col-md-";
                                                if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 494)) {
                                                    echo "3";
                                                } else {
                                                    echo "2";
                                                }
                                                echo " col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-img\" href=\"";
                                                // line 495
                                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 495);
                                                echo "\"><img src=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 495);
                                                echo "\" alt=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 495);
                                                echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-title\" href=\"";
                                                // line 496
                                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 496);
                                                echo "\">";
                                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 496);
                                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 499
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 501
                                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 502
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 502)) {
                                            // line 503
                                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 menu-add-html\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 504
                                            echo twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 504);
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 507
                                        echo "\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 508
                                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                                }
                                // line 510
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            // line 511
                            echo "
\t\t\t\t\t\t\t\t";
                            // line 512
                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 512) == "information")) {
                                // line 513
                                echo "\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["item"], "additional_menu", [], "any", false, false, false, 513) == "additional")) {
                                    // line 514
                                    echo "\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu nsmenu-type-information\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 516
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 516));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                        // line 517
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 517);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 517);
                                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 519
                                    echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                                }
                                // line 522
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            // line 523
                            echo "
\t\t\t\t\t\t\t\t";
                            // line 524
                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 524) == "product")) {
                                // line 525
                                echo "\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["item"], "additional_menu", [], "any", false, false, false, 525) == "additional")) {
                                    // line 526
                                    echo "\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu nsmenu-type-product nsmenu-bigblock-additional\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                    // line 527
                                    if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 527)) {
                                        echo "8";
                                    } else {
                                        echo "12";
                                    }
                                    echo " nsmenu-haschild\">
\t\t\t\t\t\t\t\t\t\t ";
                                    // line 528
                                    $context["num_columns"] = ((twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 528)) ? (4) : (6));
                                    // line 529
                                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 529), ($context["num_columns"] ?? null)));
                                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                                        // line 530
                                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"dflex\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 531
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 532
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dflex flex-column nsmenu-parent-block col-md-";
                                            if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 532)) {
                                                echo "3";
                                            } else {
                                                echo "2";
                                            }
                                            echo " col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-img\" href=\"";
                                            // line 533
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 533);
                                            echo "\"><img src=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 533);
                                            echo "\" alt=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 533);
                                            echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nsmenu-parent-title\" href=\"";
                                            // line 534
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 534);
                                            echo "\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 534);
                                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 536
                                            if ( !twig_get_attribute($this->env, $this->source, $context["child"], "special", [], "any", false, false, false, 536)) {
                                                // line 537
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                echo twig_get_attribute($this->env, $this->source, $context["child"], "price", [], "any", false, false, false, 537);
                                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 539
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                                echo twig_get_attribute($this->env, $this->source, $context["child"], "price", [], "any", false, false, false, 539);
                                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                                                // line 540
                                                echo twig_get_attribute($this->env, $this->source, $context["child"], "special", [], "any", false, false, false, 540);
                                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 542
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 545
                                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 547
                                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                                    // line 548
                                    if (twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 548)) {
                                        // line 549
                                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 menu-add-html\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 550
                                        echo twig_get_attribute($this->env, $this->source, $context["item"], "add_html", [], "any", false, false, false, 550);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 553
                                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                                }
                                // line 555
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            // line 556
                            echo "\t\t\t\t\t</li>
\t\t\t\t\t";
                        }
                        // line 558
                        echo "\t\t\t\t";
                    } else {
                        // line 559
                        echo "\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "additional_menu", [], "any", false, false, false, 559) == "additional")) {
                            // line 560
                            echo "\t\t\t\t\t\t<li><a ";
                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "new_blank", [], "any", false, false, false, 560) == 1)) {
                                echo "target=\"_blank\" data-target=\"link\"";
                            }
                            echo " class=\"";
                            if ( !twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 560)) {
                                echo "no-img-parent-link";
                            }
                            echo "\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 560);
                            echo "\">
\t\t\t\t\t\t";
                            // line 561
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 561)) {
                                // line 562
                                echo "\t\t\t\t\t\t\t<img alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 562);
                                echo "\" class=\"nsmenu-thumb ";
                                if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb_hover", [], "any", false, false, false, 562)) {
                                    echo "pitem-icon";
                                }
                                echo "\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 562);
                                echo "\"/>
\t\t\t\t\t\t";
                            }
                            // line 564
                            echo "\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb_hover", [], "any", false, false, false, 564)) {
                                // line 565
                                echo "\t\t\t\t\t\t\t<img alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 565);
                                echo "\" class=\"nsmenu-thumb hitem-icon\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb_hover", [], "any", false, false, false, 565);
                                echo "\"/>
\t\t\t\t\t\t";
                            }
                            // line 567
                            echo "\t\t\t\t\t\t";
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "sticker_parent", [], "any", false, false, false, 567))) {
                                // line 568
                                echo "\t\t\t\t\t\t\t<span style=\"color:#";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "spctext", [], "any", false, false, false, 568);
                                echo "; background-color:#";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "spbg", [], "any", false, false, false, 568);
                                echo "\" class=\"cat-label cat-label-label\">";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "sticker_parent", [], "any", false, false, false, 568);
                                echo "</span>
\t\t\t\t\t\t";
                            }
                            // line 570
                            echo "\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 570);
                            echo "</a></li>
\t\t\t\t\t";
                        }
                        // line 572
                        echo "\t\t\t\t";
                    }
                    // line 573
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 574
                echo "\t\t  </ul>
\t\t  </div>
\t\t<div class=\"dop-menu-show_more type1\">
\t\t\t<span class=\"prev-m\"><i class=\"fa fa-angle-left\"></i></span>
\t\t\t<span class=\"total-sections\"></span>
\t\t\t<span class=\"next-m\"><i class=\"fa fa-angle-right\"></i></span>
\t\t</div>
\t   </nav>
\t    ";
                // line 582
                if ((array_key_exists("main_menu_mask", $context) && (($context["main_menu_mask"] ?? null) == 1))) {
                    // line 583
                    echo "\t\t  <div id=\"maskMenuDop\"></div>
\t\t";
                }
                // line 585
                echo "\t  </div>
\t  ";
            }
            // line 587
            echo "\t  ";
        }
    }

    public function getTemplateName()
    {
        return "luxshop/template/common/menu_v.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2061 => 587,  2057 => 585,  2053 => 583,  2051 => 582,  2041 => 574,  2035 => 573,  2032 => 572,  2026 => 570,  2016 => 568,  2013 => 567,  2005 => 565,  2002 => 564,  1990 => 562,  1988 => 561,  1975 => 560,  1972 => 559,  1969 => 558,  1965 => 556,  1962 => 555,  1958 => 553,  1952 => 550,  1949 => 549,  1947 => 548,  1944 => 547,  1937 => 545,  1929 => 542,  1924 => 540,  1919 => 539,  1913 => 537,  1911 => 536,  1904 => 534,  1896 => 533,  1887 => 532,  1883 => 531,  1880 => 530,  1875 => 529,  1873 => 528,  1865 => 527,  1862 => 526,  1859 => 525,  1857 => 524,  1854 => 523,  1851 => 522,  1846 => 519,  1835 => 517,  1831 => 516,  1827 => 514,  1824 => 513,  1822 => 512,  1819 => 511,  1816 => 510,  1812 => 508,  1809 => 507,  1803 => 504,  1800 => 503,  1798 => 502,  1795 => 501,  1788 => 499,  1777 => 496,  1769 => 495,  1760 => 494,  1756 => 493,  1753 => 492,  1748 => 491,  1746 => 490,  1737 => 489,  1734 => 488,  1731 => 487,  1725 => 484,  1722 => 483,  1720 => 482,  1717 => 481,  1714 => 480,  1707 => 478,  1701 => 477,  1697 => 475,  1690 => 473,  1673 => 471,  1669 => 470,  1665 => 469,  1656 => 468,  1651 => 467,  1648 => 466,  1644 => 465,  1641 => 464,  1636 => 463,  1633 => 462,  1631 => 461,  1622 => 460,  1620 => 459,  1617 => 458,  1614 => 457,  1611 => 456,  1608 => 455,  1601 => 451,  1597 => 449,  1594 => 448,  1591 => 447,  1588 => 446,  1585 => 445,  1581 => 443,  1575 => 440,  1572 => 439,  1570 => 438,  1566 => 436,  1558 => 433,  1554 => 431,  1548 => 430,  1540 => 428,  1532 => 426,  1529 => 425,  1525 => 424,  1522 => 423,  1520 => 422,  1515 => 420,  1510 => 419,  1500 => 417,  1498 => 416,  1489 => 415,  1485 => 414,  1476 => 412,  1473 => 411,  1470 => 410,  1467 => 409,  1464 => 408,  1461 => 407,  1458 => 406,  1454 => 404,  1448 => 401,  1445 => 400,  1443 => 399,  1440 => 398,  1433 => 396,  1426 => 394,  1422 => 392,  1416 => 391,  1408 => 389,  1400 => 387,  1397 => 386,  1393 => 385,  1390 => 384,  1388 => 383,  1381 => 382,  1371 => 380,  1369 => 379,  1360 => 378,  1356 => 377,  1353 => 376,  1349 => 375,  1341 => 374,  1338 => 373,  1335 => 372,  1332 => 371,  1329 => 370,  1326 => 369,  1323 => 368,  1318 => 365,  1311 => 363,  1307 => 361,  1300 => 359,  1292 => 357,  1284 => 355,  1281 => 354,  1277 => 353,  1274 => 352,  1272 => 351,  1263 => 350,  1256 => 349,  1252 => 348,  1248 => 346,  1245 => 345,  1242 => 344,  1240 => 343,  1232 => 339,  1221 => 338,  1212 => 337,  1200 => 336,  1190 => 335,  1187 => 334,  1184 => 333,  1181 => 332,  1177 => 331,  1165 => 327,  1162 => 326,  1160 => 325,  1157 => 324,  1154 => 323,  1151 => 322,  1147 => 320,  1144 => 319,  1142 => 318,  1138 => 316,  1132 => 315,  1129 => 314,  1124 => 311,  1114 => 309,  1111 => 308,  1101 => 307,  1092 => 306,  1084 => 304,  1081 => 303,  1069 => 301,  1067 => 300,  1057 => 299,  1043 => 298,  1039 => 296,  1035 => 294,  1029 => 291,  1026 => 290,  1024 => 289,  1021 => 288,  1014 => 286,  1006 => 283,  1001 => 281,  996 => 280,  990 => 278,  988 => 277,  981 => 275,  971 => 274,  962 => 273,  958 => 272,  955 => 271,  950 => 270,  948 => 269,  940 => 268,  937 => 267,  935 => 266,  932 => 265,  926 => 261,  915 => 259,  911 => 258,  906 => 255,  904 => 254,  901 => 253,  897 => 251,  894 => 250,  888 => 247,  885 => 246,  883 => 245,  880 => 244,  873 => 242,  862 => 239,  852 => 238,  843 => 237,  839 => 236,  836 => 235,  831 => 234,  829 => 233,  820 => 232,  817 => 231,  814 => 230,  808 => 227,  805 => 226,  803 => 225,  800 => 224,  797 => 223,  790 => 221,  784 => 220,  780 => 218,  773 => 216,  756 => 214,  752 => 213,  748 => 212,  739 => 211,  734 => 210,  731 => 209,  727 => 208,  724 => 207,  719 => 206,  716 => 205,  714 => 204,  705 => 203,  703 => 202,  700 => 201,  698 => 200,  695 => 199,  688 => 195,  684 => 193,  682 => 192,  679 => 191,  676 => 190,  672 => 188,  666 => 185,  663 => 184,  661 => 183,  657 => 181,  649 => 178,  645 => 176,  639 => 175,  631 => 173,  623 => 171,  620 => 170,  616 => 169,  613 => 168,  611 => 167,  606 => 165,  601 => 164,  591 => 162,  589 => 161,  580 => 160,  576 => 159,  567 => 157,  564 => 156,  561 => 155,  559 => 154,  556 => 153,  553 => 152,  549 => 150,  543 => 147,  540 => 146,  538 => 145,  535 => 144,  528 => 142,  521 => 140,  517 => 138,  511 => 137,  503 => 135,  495 => 133,  492 => 132,  488 => 131,  485 => 130,  483 => 129,  478 => 127,  473 => 126,  463 => 124,  461 => 123,  452 => 122,  448 => 121,  445 => 120,  441 => 119,  433 => 118,  430 => 117,  428 => 116,  425 => 115,  420 => 112,  412 => 109,  408 => 107,  401 => 105,  397 => 103,  386 => 101,  382 => 100,  374 => 98,  366 => 96,  363 => 95,  353 => 93,  351 => 92,  344 => 91,  340 => 90,  337 => 89,  335 => 88,  325 => 86,  318 => 85,  314 => 84,  310 => 82,  308 => 81,  305 => 80,  300 => 77,  293 => 75,  288 => 72,  282 => 71,  278 => 69,  273 => 66,  262 => 64,  258 => 63,  254 => 61,  252 => 60,  249 => 59,  245 => 57,  243 => 56,  237 => 55,  230 => 54,  222 => 52,  219 => 51,  215 => 50,  211 => 48,  209 => 47,  206 => 46,  202 => 44,  200 => 43,  194 => 42,  187 => 41,  183 => 40,  179 => 38,  176 => 37,  174 => 36,  170 => 34,  160 => 32,  157 => 31,  147 => 30,  138 => 29,  130 => 27,  127 => 26,  115 => 24,  113 => 23,  103 => 22,  96 => 21,  93 => 20,  90 => 19,  86 => 18,  83 => 17,  73 => 11,  69 => 9,  65 => 7,  63 => 6,  60 => 5,  58 => 4,  49 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/common/menu_v.twig", "");
    }
}
