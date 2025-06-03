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

/* luxshop/template/extension/module/luxshop_banner_pro.twig */
class __TwigTemplate_4489d938c103c2ac620c1371723c5a96c1de64997a76754c77e5b4ff0d2a0903 extends \Twig\Template
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
        echo "<div class=\"banner-pro-box\">
<div class=\"row-flex\">
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners_pro"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["result"]) {
            // line 4
            echo "\t\t<div class=\"mb-10 mt-10 col-";
            echo ($context["col"] ?? null);
            echo "\">
\t\t<div class=\"banner-pro-";
            // line 5
            echo (($context["module"] ?? null) . $context["key"]);
            echo " item-bpro dflex flex-column flex-grow-1\"  ";
            if ( !twig_test_empty((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["result"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["bg_block"] ?? null) : null))) {
                echo "style=\"background-color: ";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "bg_block", [], "any", false, false, false, 5);
                echo "\"";
            }
            echo ">
\t\t\t<div class=\"bpro-image\">
\t\t\t\t<img class=\"img-responsive\" loading=\"lazy\" width=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["result"], "image_width", [], "any", false, false, false, 7);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, $context["result"], "image_height", [], "any", false, false, false, 7);
            echo "\" src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["result"], "image", [], "any", false, false, false, 7);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["result"], "title", [], "any", false, false, false, 7);
            echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"bpro-title\" ";
            // line 9
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "color_title", [], "any", false, false, false, 9))) {
                echo "style=\"color:";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "color_title", [], "any", false, false, false, 9);
                echo "\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["result"], "title", [], "any", false, false, false, 9);
            echo "</div>
\t\t\t<div class=\"bpro-description\" ";
            // line 10
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "color_desc", [], "any", false, false, false, 10))) {
                echo "style=\"color:";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "color_desc", [], "any", false, false, false, 10);
                echo "\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["result"], "description", [], "any", false, false, false, 10);
            echo "</div>
\t\t\t";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["result"], "price", [], "any", false, false, false, 11)) {
                // line 12
                echo "\t\t\t<div class=\"bpro-price-box dflex align-items-center justify-content-between\">
\t\t\t\t<span class=\"bpro-price\" ";
                // line 13
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "price_color", [], "any", false, false, false, 13))) {
                    echo "style=\"color:";
                    echo twig_get_attribute($this->env, $this->source, $context["result"], "price_color", [], "any", false, false, false, 13);
                    echo "\"";
                }
                echo ">
\t\t\t\t\t";
                // line 14
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "price_from", [], "any", false, false, false, 14))) {
                    // line 15
                    echo "\t\t\t\t\t<span class=\"bpro-price-from\">";
                    echo twig_get_attribute($this->env, $this->source, $context["result"], "price_from", [], "any", false, false, false, 15);
                    echo "</span>
\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "price", [], "any", false, false, false, 17);
                echo "
\t\t\t\t</span>
\t\t\t\t<a href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["result"], "link", [], "any", false, false, false, 19);
                echo "\">
\t\t\t\t\t<span class=\"bpro-link dflex align-items-center justify-content-center\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5\" height=\"9\" fill=\"none\" viewBox=\"0 0 5 9\"><path fill=\"#000\" fill-rule=\"evenodd\" d=\"M3.065 4.791a.5.5 0 00-.004-.65L.622 1.327a.5.5 0 01.756-.655l2.439 2.814a1.5 1.5 0 01.01 1.952L1.382 8.323a.5.5 0 11-.763-.646L3.065 4.79z\" clip-rule=\"evenodd\"/></svg>
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t";
            }
            // line 26
            echo "\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "luxshop/template/extension/module/luxshop_banner_pro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 29,  129 => 26,  119 => 19,  113 => 17,  107 => 15,  105 => 14,  97 => 13,  94 => 12,  92 => 11,  82 => 10,  72 => 9,  61 => 7,  50 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/extension/module/luxshop_banner_pro.twig", "");
    }
}
