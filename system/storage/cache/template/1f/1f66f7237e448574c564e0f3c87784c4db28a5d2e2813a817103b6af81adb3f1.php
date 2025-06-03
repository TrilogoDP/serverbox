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

/* luxshop/template/extension/module/luxshop_wallcategory.twig */
class __TwigTemplate_4cb4fd199d81679713d7172638728ec7736a3ea14b3152c6d3af5f9955290e43 extends \Twig\Template
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
        echo "<div class=\"container-module categorywall-";
        echo ($context["module"] ?? null);
        echo "\">
";
        // line 2
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["heading_title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["lang_id"] ?? null)] ?? null) : null), "title_name", [], "any", false, false, false, 2))) {
            // line 3
            echo "<div class=\"title-module\"><span>";
            echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["heading_title"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["lang_id"] ?? null)] ?? null) : null), "title_name", [], "any", false, false, false, 3);
            echo "</span></div>
";
        }
        // line 5
        echo "\t<div class=\"wall-category-box clearfix";
        if ((($context["type_view_mob"] ?? null) == 0)) {
            echo " d-xs-flex flex-xs-nowrap";
        }
        echo "\">
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "\t\t\t<div class=\"box-item ";
            if ((($context["type_view_mob"] ?? null) == 0)) {
                echo "wc-col-xs ";
            } else {
                echo "col-xs-12 ";
            }
            echo "col-sm-6 col-md-3 col-lg-3\">
\t\t\t\t<div class=\"item-category ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, $context["category"], "subcategories", [], "any", false, false, false, 8)) {
                echo " parent_category ";
            }
            echo "\">
\t\t\t\t\t<div class=\"wall-cat-image show-sub-cat-";
            // line 9
            echo ($context["module"] ?? null);
            echo "\">
\t\t\t\t\t<a href=\"";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 10);
            echo "\"><img decoding=\"async\" width=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "width", [], "any", false, false, false, 10);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "height", [], "any", false, false, false, 10);
            echo "\" loading=\"lazy\" src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 10);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 10);
            echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wall-cat-name dflex align-items-center justify-content-center\">
\t\t\t\t\t\t<a href=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 13);
            echo "\" >";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13);
            echo "</a>
\t\t\t\t\t\t";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["category"], "subcategories", [], "any", false, false, false, 14)) {
                // line 15
                echo "\t\t\t\t\t\t\t<span class=\"open-sub-cat\">
\t\t\t\t\t\t\t\t<svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M12 1.5H9C8.72386 1.5 8.5 1.72386 8.5 2V5.5H12C12.2761 5.5 12.5 5.27614 12.5 5V2C12.5 1.72386 12.2761 1.5 12 1.5ZM9 0.5C8.17157 0.5 7.5 1.17157 7.5 2V6.5H12C12.8284 6.5 13.5 5.82843 13.5 5V2C13.5 1.17157 12.8284 0.5 12 0.5H9Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5 1.5H2C1.72386 1.5 1.5 1.72386 1.5 2V5C1.5 5.27614 1.72386 5.5 2 5.5H5.5V2C5.5 1.72386 5.27614 1.5 5 1.5ZM2 0.5C1.17157 0.5 0.5 1.17157 0.5 2V5C0.5 5.82843 1.17157 6.5 2 6.5H6.5V2C6.5 1.17157 5.82843 0.5 5 0.5H2Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.5 8.5H2C1.72386 8.5 1.5 8.72386 1.5 9V12C1.5 12.2761 1.72386 12.5 2 12.5H5C5.27614 12.5 5.5 12.2761 5.5 12V8.5ZM2 7.5C1.17157 7.5 0.5 8.17157 0.5 9V12C0.5 12.8284 1.17157 13.5 2 13.5H5C5.82843 13.5 6.5 12.8284 6.5 12V7.5H2Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.5 7.5C10.7761 7.5 11 7.72386 11 8V10H13C13.2761 10 13.5 10.2239 13.5 10.5C13.5 10.7761 13.2761 11 13 11H11V13C11 13.2761 10.7761 13.5 10.5 13.5C10.2239 13.5 10 13.2761 10 13V11H8C7.72386 11 7.5 10.7761 7.5 10.5C7.5 10.2239 7.72386 10 8 10H10V8C10 7.72386 10.2239 7.5 10.5 7.5Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["category"], "subcategories", [], "any", false, false, false, 25)) {
                // line 26
                echo "\t\t\t\t\t<div class=\"item-sub-category\">
\t\t\t\t\t\t";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "subcategories", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
                    // line 28
                    echo "\t\t\t\t\t\t\t<div class=\"subcategory-name\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subcategory"], "href", [], "any", false, false, false, 28);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["subcategory"], "name", [], "any", false, false, false, 28);
                    echo "</a></div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t</div>
\t\t\t</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 36
            echo "\t\t\t<div class=\"box-item col-xs-12 col-sm-6 col-md-3 col-lg-3\">
\t\t\t\t<div class=\"item-category\">
\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 38);
            echo "\" >
\t\t\t\t\t\t<div class=\"wall-cat-image\"><img decoding=\"async\" width=\"";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "width", [], "any", false, false, false, 39);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "height", [], "any", false, false, false, 39);
            echo "\" loading=\"lazy\" src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb", [], "any", false, false, false, 39);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 39);
            echo "\" class=\"img-responsive\" /></div>
\t\t\t\t\t\t<div class=\"wall-cat-name\"><div class=\"display-table\"><div class=\"display-table-cell\">";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 40);
            echo "</div></div></div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </div>
<script>
\$(document).ready(function() {
    if (\$(\".categorywall-";
        // line 48
        echo ($context["module"] ?? null);
        echo "\").parents(\"#column-left, #column-right\").length) {
        \$('.categorywall-";
        // line 49
        echo ($context["module"] ?? null);
        echo " .box-item').removeClass(\"col-sm-6 col-md-4 col-lg-3\");
        \$('.categorywall-";
        // line 50
        echo ($context["module"] ?? null);
        echo " .box-item').addClass(\"col-sm-12 col-md-12 col-lg-12\");
    }
});
\$(document).on('click', '.open-sub-cat', function () {
    \$(this).closest('.wall-cat-name').prev('.wall-cat-image').toggleClass('active-opacity');
    \$(this).closest('.wall-cat-name').next().toggleClass('active');
    \$(this).closest('.wall-cat-name').next().mCustomScrollbar({theme:\"dark-3\",scrollInertia:300});
});
</script>
</div>";
    }

    public function getTemplateName()
    {
        return "luxshop/template/extension/module/luxshop_wallcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 50,  191 => 49,  187 => 48,  182 => 45,  171 => 40,  161 => 39,  157 => 38,  153 => 36,  148 => 35,  140 => 32,  136 => 30,  125 => 28,  121 => 27,  118 => 26,  116 => 25,  113 => 24,  102 => 15,  100 => 14,  94 => 13,  80 => 10,  76 => 9,  70 => 8,  61 => 7,  57 => 6,  50 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/extension/module/luxshop_wallcategory.twig", "");
    }
}
