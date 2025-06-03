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

/* luxshop/template/product/luxshop_nextprev.twig */
class __TwigTemplate_d50efa1cea0cfe8ef35160b1815caf09f808414a174b7cb527e3924cdbb4c769 extends \Twig\Template
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
        echo "<div class=\"nextprevprod dflex\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "prev", [], "any", true, true, false, 2)) {
            // line 3
            echo "\t\t<button id=\"prev-prod-btn\" type=\"button\" onclick=\"location.href='";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "prev", [], "any", false, false, false, 3), "href", [], "any", false, false, false, 3);
            echo "'\" class=\"prev-product ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "next", [], "any", true, true, false, 3)) {
                echo "no-next";
            }
            echo "\">
\t\t<span class=\"icon-prev\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5\" height=\"9\" fill=\"none\" viewBox=\"0 0 5 9\"><path fill=\"#000\" fill-rule=\"evenodd\" d=\"M1.935 4.209a.5.5 0 00.004.65l2.439 2.814a.5.5 0 01-.756.655L1.183 5.514a1.5 1.5 0 01-.01-1.952L3.618.677a.5.5 0 11.763.646L1.935 4.21z\" clip-rule=\"evenodd\"/></svg>
\t\t</span>
\t\t<span>";
            // line 7
            echo ($context["text_prev"] ?? null);
            echo "</span></button>
\t";
        }
        // line 9
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "next", [], "any", true, true, false, 9)) {
            // line 10
            echo "\t\t<button id=\"next-prod-btn\" type=\"button\" onclick=\"location.href='";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "next", [], "any", false, false, false, 10), "href", [], "any", false, false, false, 10);
            echo "'\" class=\"next-product ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "prev", [], "any", true, true, false, 10)) {
                echo "no-prev";
            }
            echo "\">
\t\t<span>";
            // line 11
            echo ($context["text_next"] ?? null);
            echo "</span>
\t\t<span class=\"icon-next\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5\" height=\"9\" fill=\"none\" viewBox=\"0 0 5 9\"><path fill=\"#000\" fill-rule=\"evenodd\" d=\"M3.065 4.791a.5.5 0 00-.004-.65L.622 1.327a.5.5 0 01.756-.655l2.439 2.814a1.5 1.5 0 01.01 1.952L1.382 8.323a.5.5 0 11-.763-.646L3.065 4.79z\" clip-rule=\"evenodd\"/></svg>
\t\t</span>
\t</button>
    ";
        }
        // line 17
        echo "\t<script>
\t";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "prev", [], "any", true, true, false, 18)) {
            // line 19
            echo "\t\$('#prev-prod-btn').popover({
\t\thtml: true,
\t\tplacement: 'bottom',
\t\ttrigger: 'hover',
\t\tcontent: function() {
\t\t\thtml  = '<div class=\"popover-pr-image\"><img class=\"img-responsive\" src=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "prev", [], "any", false, false, false, 24), "image", [], "any", false, false, false, 24);
            echo "\" title=\"\" alt=\"\" /></div>';
\t\t\thtml += '<div class=\"popover-pr-name\">";
            // line 25
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "prev", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25);
            echo "</div>';
\t\t\thtml += '<div class=\"price\">';
\t\t\thtml += '\t";
            // line 27
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "prev", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27)) {
                echo "';
\t\t\thtml += '\t  ";
                // line 28
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "prev", [], "any", false, false, false, 28), "special", [], "any", false, false, false, 28)) {
                    echo "';
\t\t\thtml += '\t\t<span>";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "prev", [], "any", false, false, false, 29), "price", [], "any", false, false, false, 29);
                    echo "</span>';
\t\t\thtml += '\t  ";
                } else {
                    // line 30
                    echo "';
\t\t\thtml += '\t\t<span class=\"price-old\"><span>";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "prev", [], "any", false, false, false, 31), "price", [], "any", false, false, false, 31);
                    echo "</span></span> <span class=\"price-new\"><span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "prev", [], "any", false, false, false, 31), "special", [], "any", false, false, false, 31);
                    echo "</span></span>';
\t\t\thtml += '\t  ";
                }
                // line 32
                echo "';
\t\t\thtml += '\t";
            }
            // line 33
            echo "';
\t\t\thtml += '</div>';
\t\t\treturn html;
\t\t}
\t}).data('bs.popover').tip().addClass('popover-prev-prod');
\t ";
        }
        // line 39
        echo "\t ";
        if (twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "next", [], "any", true, true, false, 39)) {
            // line 40
            echo "\t\$('#next-prod-btn').popover({
\t\thtml: true,
\t\tplacement: 'bottom',
\t\ttrigger: 'hover',
\t\tcontent: function() {
\t\t\thtml  = '<div class=\"popover-pr-image\"><img class=\"img-responsive\" src=\"";
            // line 45
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "next", [], "any", false, false, false, 45), "image", [], "any", false, false, false, 45);
            echo "\" title=\"\" alt=\"\" /></div>';
\t\t\thtml += '<div class=\"popover-pr-name\">";
            // line 46
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "next", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46);
            echo "</div>';
\t\t\thtml += '<div class=\"price\">';
\t\t\thtml += '\t";
            // line 48
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "next", [], "any", false, false, false, 48), "price", [], "any", false, false, false, 48)) {
                echo "';
\t\t\thtml += '\t  ";
                // line 49
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "next", [], "any", false, false, false, 49), "special", [], "any", false, false, false, 49)) {
                    echo "';
\t\t\thtml += '\t\t<span>";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "next", [], "any", false, false, false, 50), "price", [], "any", false, false, false, 50);
                    echo "</span>';
\t\t\thtml += '\t  ";
                } else {
                    // line 51
                    echo "';
\t\t\thtml += '\t\t<span class=\"price-old\"><span>";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "next", [], "any", false, false, false, 52), "price", [], "any", false, false, false, 52);
                    echo "</span></span> <span class=\"price-new\"><span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "next", [], "any", false, false, false, 52), "special", [], "any", false, false, false, 52);
                    echo "</span></span>';
\t\t\thtml += '\t  ";
                }
                // line 53
                echo "';
\t\t\thtml += '\t";
            }
            // line 54
            echo "';
\t\t\thtml += '</div>';
\t\t\treturn html;
\t\t}
\t}).data('bs.popover').tip().addClass('popover-next-prod');
\t";
        }
        // line 60
        echo "\t</script>
</div>
";
    }

    public function getTemplateName()
    {
        return "luxshop/template/product/luxshop_nextprev.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 60,  182 => 54,  178 => 53,  171 => 52,  168 => 51,  163 => 50,  159 => 49,  155 => 48,  150 => 46,  146 => 45,  139 => 40,  136 => 39,  128 => 33,  124 => 32,  117 => 31,  114 => 30,  109 => 29,  105 => 28,  101 => 27,  96 => 25,  92 => 24,  85 => 19,  83 => 18,  80 => 17,  71 => 11,  62 => 10,  59 => 9,  54 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/product/luxshop_nextprev.twig", "");
    }
}
