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

/* extension/module/luxshop/shopping_cart.twig */
class __TwigTemplate_7ca0348741a41041573276290933fa3b77eb6086cc1f25a12141740d565c5fb2 extends \Twig\Template
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
        echo "<div class=\"form-group\">
\t<div class=\"col-sm-12 title-setting\">";
        // line 2
        echo ($context["text_setting_shopping_cart"] ?? null);
        echo "</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 5
        echo ($context["text_on_off_hover_shopping_cart"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"radio-group-infinity\">
\t\t\t";
        // line 8
        if (($context["config_on_off_shopping_cart_hover"] ?? null)) {
            // line 9
            echo "\t\t\t\t<input id=\"config_on_off_shopping_cart_hover_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_shopping_cart_hover\" value=\"1\" checked=\"checked\" />
\t\t\t\t<label for=\"config_on_off_shopping_cart_hover_yes\">";
            // line 10
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 12
            echo "\t\t\t\t<input id=\"config_on_off_shopping_cart_hover_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_shopping_cart_hover\" value=\"1\" />
\t\t\t\t<label for=\"config_on_off_shopping_cart_hover_yes\">";
            // line 13
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 15
        echo "\t\t\t";
        if ( !($context["config_on_off_shopping_cart_hover"] ?? null)) {
            // line 16
            echo "\t\t\t\t<input id=\"config_on_off_shopping_cart_hover_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_shopping_cart_hover\" value=\"0\" checked=\"checked\" />
\t\t\t\t<label for=\"config_on_off_shopping_cart_hover_no\">";
            // line 17
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t<input id=\"config_on_off_shopping_cart_hover_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_shopping_cart_hover\" value=\"0\" />
\t\t\t\t<label for=\"config_on_off_shopping_cart_hover_no\">";
            // line 20
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 22
        echo "\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\" >";
        // line 26
        echo ($context["text_on_off_click_shopping_cart"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<select name=\"config_on_off_shopping_cart_click\" class=\"form-control\">
\t\t\t";
        // line 29
        if ((($context["config_on_off_shopping_cart_click"] ?? null) == "1")) {
            // line 30
            echo "\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["popup_shopping_cart"] ?? null);
            echo "</option>
\t\t\t\t<option value=\"0\">";
            // line 31
            echo ($context["popup_standart"] ?? null);
            echo "</option>
\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["popup_standart"] ?? null);
            echo "</option>
\t\t\t\t<option value=\"1\">";
            // line 34
            echo ($context["popup_shopping_cart"] ?? null);
            echo "</option>
\t\t\t";
        }
        // line 36
        echo "\t\t</select>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\" >";
        // line 40
        echo ($context["text_shopping_cart_after_add"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<select name=\"config_shopping_cart_after_add\" class=\"form-control\">
\t\t\t";
        // line 43
        if ((($context["config_shopping_cart_after_add"] ?? null) == "1")) {
            // line 44
            echo "\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["popup_shopping_cart"] ?? null);
            echo "</option>
\t\t\t\t<option value=\"0\">";
            // line 45
            echo ($context["popup_standart"] ?? null);
            echo "</option>
\t\t\t\t<option value=\"2\">";
            // line 46
            echo ($context["mini_informer"] ?? null);
            echo "</option>
\t\t\t";
        } elseif ((        // line 47
($context["config_shopping_cart_after_add"] ?? null) == "0")) {
            // line 48
            echo "\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["popup_standart"] ?? null);
            echo "</option>
\t\t\t\t<option value=\"1\">";
            // line 49
            echo ($context["popup_shopping_cart"] ?? null);
            echo "</option>
\t\t\t\t<option value=\"2\">";
            // line 50
            echo ($context["mini_informer"] ?? null);
            echo "</option>
\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t<option value=\"2\" selected=\"selected\">";
            echo ($context["mini_informer"] ?? null);
            echo "</option>
\t\t\t\t<option value=\"1\">";
            // line 53
            echo ($context["popup_shopping_cart"] ?? null);
            echo "</option>
\t\t\t\t<option value=\"0\">";
            // line 54
            echo ($context["popup_standart"] ?? null);
            echo "</option>
\t\t\t";
        }
        // line 56
        echo "\t\t</select>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\" >";
        // line 60
        echo ($context["text_type_cart"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<select name=\"type_shop_cart\" class=\"form-control\">
\t\t\t";
        // line 63
        if ((($context["type_shop_cart"] ?? null) == "1")) {
            // line 64
            echo "\t\t\t\t<option value=\"0\">";
            echo ($context["text_type_cart_standart"] ?? null);
            echo "</option>
\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 65
            echo ($context["text_type_cart_compact"] ?? null);
            echo "</option>
\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_type_cart_standart"] ?? null);
            echo "</option>
\t\t\t\t<option value=\"1\">";
            // line 68
            echo ($context["text_type_cart_compact"] ?? null);
            echo "</option>
\t\t\t";
        }
        // line 70
        echo "\t\t</select>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop/shopping_cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 70,  209 => 68,  204 => 67,  199 => 65,  194 => 64,  192 => 63,  186 => 60,  180 => 56,  175 => 54,  171 => 53,  166 => 52,  161 => 50,  157 => 49,  152 => 48,  150 => 47,  146 => 46,  142 => 45,  137 => 44,  135 => 43,  129 => 40,  123 => 36,  118 => 34,  113 => 33,  108 => 31,  103 => 30,  101 => 29,  95 => 26,  89 => 22,  84 => 20,  81 => 19,  76 => 17,  73 => 16,  70 => 15,  65 => 13,  62 => 12,  57 => 10,  54 => 9,  52 => 8,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop/shopping_cart.twig", "");
    }
}
