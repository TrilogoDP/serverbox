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

/* luxshop/template/common/currency.twig */
class __TwigTemplate_e7e153e6344dfdd84ebe0d41e16f3e6f102d403bf81e524b9099da25cbc2a5cb extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "<div class=\"pull-left\">
<form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"currency\">
  <div class=\"btn-group\">
    <button class=\"btn-currency-top dropdown-toggle\" data-toggle=\"dropdown\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 7
                echo "    ";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 7) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 7) == ($context["code"] ?? null)))) {
                    // line 8
                    echo "    <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 8);
                    echo "</strong>
    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 9
$context["currency"], "symbol_right", [], "any", false, false, false, 9) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 9) == ($context["code"] ?? null)))) {
                    // line 10
                    echo "    <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 10);
                    echo "</strong>
    ";
                }
                // line 12
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    <span class=\"text-currency hidden\">";
            echo ($context["text_currency"] ?? null);
            echo "</span></button>
    <ul class=\"dropdown-menu dropdown-menu-right ls-dropdown\">
     ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 16
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 17) == ($context["code"] ?? null))) {
                        // line 18
                        echo "          <li class=\"active\"><button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 18);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 18);
                        echo " <span class=\"currency__title\">";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 18);
                        echo "</span></button></li>
        ";
                    } else {
                        // line 20
                        echo "          <li><button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 20);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 20);
                        echo " <span class=\"currency__title\">";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 20);
                        echo "</span></button></li>
        ";
                    }
                    // line 22
                    echo "      ";
                } else {
                    // line 23
                    echo "        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 23) == ($context["code"] ?? null))) {
                        // line 24
                        echo "           <li class=\"active\"><button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 24);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 24);
                        echo " <span class=\"currency__title\">";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 24);
                        echo "</span></button></li>
        ";
                    } else {
                        // line 26
                        echo "           <li><button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 26);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 26);
                        echo " <span class=\"currency__title\">";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 26);
                        echo "</span></button></li>
        ";
                    }
                    // line 28
                    echo "      ";
                }
                // line 29
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </ul>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 33
            echo ($context["redirect"] ?? null);
            echo "\" />
</form>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "luxshop/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 33,  145 => 30,  139 => 29,  136 => 28,  126 => 26,  116 => 24,  113 => 23,  110 => 22,  100 => 20,  90 => 18,  87 => 17,  84 => 16,  80 => 15,  74 => 13,  68 => 12,  62 => 10,  60 => 9,  55 => 8,  52 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/common/currency.twig", "");
    }
}
