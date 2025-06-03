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

/* luxshop/template/extension/module/luxshop_megasliderpro.twig */
class __TwigTemplate_5b6142ac8522161295436244cf993ece7bf4d0623165f1206c23a69e429e2053 extends \Twig\Template
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
        echo "<div class=\"container-module row megasliderpro\">
\t<div id=\"mslider";
        // line 2
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel-container\">
\t\t";
        // line 3
        $context["i"] = 1;
        // line 4
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["megasliders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 5
            echo "\t\t\t";
            $context["class"] = "";
            // line 6
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["result"], "type", [], "any", false, false, false, 6) == 1)) {
                echo " ";
                $context["class"] = "slide-type1";
                echo " ";
            }
            // line 7
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["result"], "type", [], "any", false, false, false, 7) == 2)) {
                echo " ";
                $context["class"] = "slide-type2";
                echo " ";
            }
            // line 8
            echo "
\t\t\t<div class=\"item-ms";
            // line 9
            if ((($context["i"] ?? null) > 1)) {
                echo " hidden";
            }
            echo "\">
\t\t\t";
            // line 10
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "link", [], "any", false, false, false, 10))) {
                // line 11
                echo "\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "link", [], "any", false, false, false, 11);
                echo "\"><img width=\"";
                echo ($context["width"] ?? null);
                echo "\" height=\"";
                echo ($context["height"] ?? null);
                echo "\" ";
                if ((($context["key"] ?? null) > 0)) {
                    echo "loading=\"lazy\"";
                }
                echo " class=\"bg-image-slider img-responsive\" src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "image", [], "any", false, false, false, 11);
                echo "\" alt=\"\"/></a>
\t\t\t";
            } else {
                // line 13
                echo "\t\t\t\t<img width=\"";
                echo ($context["width"] ?? null);
                echo "\" height=\"";
                echo ($context["height"] ?? null);
                echo "\" ";
                if ((($context["key"] ?? null) > 0)) {
                    echo "loading=\"lazy\"";
                }
                echo " class=\"bg-image-slider img-responsive\" src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "image", [], "any", false, false, false, 13);
                echo "\" alt=\"\"/>
\t\t\t";
            }
            // line 15
            echo "\t\t\t\t<div class=\"slick-caption\">
\t\t\t\t\t";
            // line 16
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "link", [], "any", false, false, false, 16))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "link", [], "any", false, false, false, 16);
                echo "\">";
            }
            // line 17
            echo "\t\t\t\t\t<div class=\"";
            echo ($context["class"] ?? null);
            echo " container dflex\">
\t\t\t\t\t\t";
            // line 18
            if (twig_get_attribute($this->env, $this->source, $context["result"], "small_image", [], "any", false, false, false, 18)) {
                // line 19
                echo "\t\t\t\t\t\t\t<div class=\"row-slider-small-img\">
\t\t\t\t\t\t\t<div class=\"msp-small_image\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["result"], "small_image", [], "any", false, false, false, 21);
                echo "\" alt=\"\" title=\"small\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t\t<div class=\"row-slider-info\">
\t\t\t\t\t\t\t";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["result"], "title", [], "any", false, false, false, 26)) {
                // line 27
                echo "\t\t\t\t\t\t\t<div class=\"msp-title effect_title";
                echo ($context["i"] ?? null);
                echo ($context["module"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"text-title\" ";
                // line 28
                if (((twig_get_attribute($this->env, $this->source, $context["result"], "bg_title", [], "any", false, false, false, 28) != "") || twig_get_attribute($this->env, $this->source, $context["result"], "color_title", [], "any", false, false, false, 28))) {
                    echo "style=\"";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "bg_title", [], "any", false, false, false, 28))) {
                        echo "background:";
                        echo twig_get_attribute($this->env, $this->source, $context["result"], "bg_title", [], "any", false, false, false, 28);
                        echo ";";
                    }
                    echo " ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "color_title", [], "any", false, false, false, 28))) {
                        echo "color:";
                        echo twig_get_attribute($this->env, $this->source, $context["result"], "color_title", [], "any", false, false, false, 28);
                        echo "\"";
                    }
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "title", [], "any", false, false, false, 28);
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["result"], "sub_title", [], "any", false, false, false, 31)) {
                // line 32
                echo "\t\t\t\t\t\t\t<div class=\"sub-title effect_sub_title";
                echo ($context["i"] ?? null);
                echo ($context["module"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"text-sub-title\" ";
                // line 33
                if (((twig_get_attribute($this->env, $this->source, $context["result"], "bg_sub_title", [], "any", false, false, false, 33) != "") || twig_get_attribute($this->env, $this->source, $context["result"], "color_sub_title", [], "any", false, false, false, 33))) {
                    echo "style=\"";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "bg_title", [], "any", false, false, false, 33))) {
                        echo "background:";
                        echo twig_get_attribute($this->env, $this->source, $context["result"], "bg_sub_title", [], "any", false, false, false, 33);
                        echo ";";
                    }
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "color_sub_title", [], "any", false, false, false, 33))) {
                        echo "color:";
                        echo twig_get_attribute($this->env, $this->source, $context["result"], "color_sub_title", [], "any", false, false, false, 33);
                        echo "\"";
                    }
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "sub_title", [], "any", false, false, false, 33);
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t\t";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "description", [], "any", false, false, false, 36))) {
                // line 37
                echo "\t\t\t\t\t\t\t<div class=\"msp-des effect_description_title";
                echo ($context["i"] ?? null);
                echo ($context["module"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["result"], "description", [], "any", false, false, false, 38);
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "price", [], "any", false, false, false, 41))) {
                // line 42
                echo "\t\t\t\t\t\t\t<div class=\"ms-price\">
\t\t\t\t\t\t\t\t<span class=\"ms-price-cont\" ";
                // line 43
                if ((twig_get_attribute($this->env, $this->source, $context["result"], "price_bg", [], "any", false, false, false, 43) != "")) {
                    echo "style=\"background:";
                    echo twig_get_attribute($this->env, $this->source, $context["result"], "price_bg", [], "any", false, false, false, 43);
                    echo "\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t<span class=\"ms-price-text\"><span class=\"ms-price-from\">";
                // line 44
                echo ($context["text_price_from"] ?? null);
                echo "</span>";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "price", [], "any", false, false, false, 44);
                echo "</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 50
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "link", [], "any", false, false, false, 50))) {
                echo "</a>";
            }
            // line 51
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 53
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 54
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t</div>
";
        // line 56
        $context["config"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["slide_setting"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 57
        echo "<script>
addStyleHeader('";
        // line 58
        echo ($context["html_css"] ?? null);
        echo "');
\$('#mslider";
        // line 59
        echo ($context["module"] ?? null);
        echo "').on('init', function (event, slick, currentSlide, nextSlide) {
\t\$('#mslider";
        // line 60
        echo ($context["module"] ?? null);
        echo " .item-ms').removeClass('hidden');
});
\$('#mslider";
        // line 62
        echo ($context["module"] ?? null);
        echo "').slick({
\tnextArrow: '<div class=\"slick-mod-arrow next-prod\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5\" height=\"9\" fill=\"none\" viewBox=\"0 0 5 9\"><path fill=\"#000\" fill-rule=\"evenodd\" d=\"M3.065 4.791a.5.5 0 00-.004-.65L.622 1.327a.5.5 0 01.756-.655l2.439 2.814a1.5 1.5 0 01.01 1.952L1.382 8.323a.5.5 0 11-.763-.646L3.065 4.79z\" clip-rule=\"evenodd\"/></svg></div>',
\tprevArrow: '<div class=\"slick-mod-arrow prev-prod\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5\" height=\"9\" fill=\"none\" viewBox=\"0 0 5 9\"><path fill=\"#000\" fill-rule=\"evenodd\" d=\"M1.935 4.209a.5.5 0 00.004.65l2.439 2.814a.5.5 0 01-.756.655L1.183 5.514a1.5 1.5 0 01-.01-1.952L3.618.677a.5.5 0 11.763.646L1.935 4.21z\" clip-rule=\"evenodd\"/></svg></div>',
\tinfinite: true,
\tadaptiveHeight: false,
\tslidesToShow: 1,
\tdotsClass: 'slick-dots slideshow',
\tautoplay: true,
\tautoplaySpeed: ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "delay", [], "any", false, false, false, 70)) {
            echo "'";
            echo twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "delay", [], "any", false, false, false, 70);
            echo "'";
        } else {
            echo "5000";
        }
        echo ",
\tpauseOnHover:  ";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "hover", [], "any", true, true, false, 71) && (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "hover", [], "any", false, false, false, 71) == 1))) {
            echo " true ";
        } else {
            echo " false";
        }
        echo ",
\tarrows: ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "nextback", [], "any", true, true, false, 72) && (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "nextback", [], "any", false, false, false, 72) == 1))) {
            echo " true ";
        } else {
            echo " false";
        }
        echo ",
\tdots:  ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "contrl", [], "any", true, true, false, 73) && (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "contrl", [], "any", false, false, false, 73) == 1))) {
            echo " true ";
        } else {
            echo " false";
        }
        echo ",
\tfade: ";
        // line 74
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "effect", [], "any", false, false, false, 74) == "fade")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
});
</script>
</div>";
    }

    public function getTemplateName()
    {
        return "luxshop/template/extension/module/luxshop_megasliderpro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 74,  313 => 73,  305 => 72,  297 => 71,  287 => 70,  276 => 62,  271 => 60,  267 => 59,  263 => 58,  260 => 57,  258 => 56,  255 => 55,  249 => 54,  247 => 53,  243 => 51,  239 => 50,  235 => 48,  226 => 44,  218 => 43,  215 => 42,  212 => 41,  206 => 38,  200 => 37,  197 => 36,  177 => 33,  171 => 32,  168 => 31,  147 => 28,  141 => 27,  139 => 26,  136 => 25,  129 => 21,  125 => 19,  123 => 18,  118 => 17,  112 => 16,  109 => 15,  95 => 13,  79 => 11,  77 => 10,  71 => 9,  68 => 8,  61 => 7,  54 => 6,  51 => 5,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/extension/module/luxshop_megasliderpro.twig", "");
    }
}
