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

/* luxshop/template/common/search.twig */
class __TwigTemplate_cbca3f4521ce842c94109ccce3c9ce459b384ac0dcffc01c090bbf61c4274c50 extends \Twig\Template
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
        echo "<div id=\"search\" class=\"";
        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["ns_autosearch_data"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["status"] ?? null) : null) == "1")) {
            echo "livesearch ";
        }
        echo " input-group ";
        if ((array_key_exists("search_word", $context) &&  !twig_test_empty(($context["search_word"] ?? null)))) {
            echo "pt20";
        }
        echo "\">
\t<input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg search-autocomplete\" />
\t";
        // line 3
        if ((($context["show_hc_search"] ?? null) == "1")) {
            // line 4
            echo "\t<div class=\"input-group-btn categories\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["search_category"]) {
                echo " ";
                if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["search_category"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["category_id"] ?? null) : null) == ($context["filter_category_id"] ?? null))) {
                    $context["text_search_everywhere"] = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["search_category"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "\t\t<button id=\"change_category\" type=\"button\" data-toggle=\"dropdown\" data-placement=\"left\" title=\"";
            echo ($context["text_search_everywhere"] ?? null);
            echo "\" class=\"btn-search-select dropdown-toggle\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" fill=\"none\" viewBox=\"0 0 18 18\">
\t\t\t<path fill=\"#B2BBC5\" fill-rule=\"evenodd\" d=\"M3 1.25a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0V2A.75.75 0 013 1.25zm6 0a.75.75 0 01.75.75v6.5a.75.75 0 01-1.5 0V2A.75.75 0 019 1.25zm6 0a.75.75 0 01.75.75v.5a.75.75 0 01-1.5 0V2a.75.75 0 01.75-.75zm0 7.5a.75.75 0 01.75.75V16a.75.75 0 01-1.5 0V9.5a.75.75 0 01.75-.75zm-12 3a.75.75 0 01.75.75V16a.75.75 0 01-1.5 0v-3.5a.75.75 0 01.75-.75zm6 3a.75.75 0 01.75.75v.5a.75.75 0 01-1.5 0v-.5a.75.75 0 01.75-.75zM3 9.75a.75.75 0 100-1.5.75.75 0 000 1.5zM3 11a2 2 0 100-4 2 2 0 000 4zM9 12.75a.75.75 0 100-1.5.75.75 0 000 1.5zM9 14a2 2 0 100-4 2 2 0 000 4zM15 6.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 8a2 2 0 100-4 2 2 0 000 4z\" clip-rule=\"evenodd\"/>
\t\t\t</svg>
\t\t</button>
\t\t<ul class=\"dropdown-menu dropdown-menu-right ls-dropdown\">
\t\t\t<li class=\"sel-cat-search\"><a href=\"#\" onclick=\"return false;\" data-idsearch=\"0\">";
            // line 12
            echo ($context["text_search_everywhere"] ?? null);
            echo "</a></li>
\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["search_category"]) {
                // line 14
                echo "\t\t\t<li><a href=\"#\" onclick=\"return false;\" data-idsearch=\"";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["search_category"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["category_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["search_category"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null);
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</ul>
\t\t<input id=\"selected_category\" type=\"hidden\" name=\"category_id\" value=\"0\" />
  </div>
  ";
        }
        // line 20
        echo "  <span class=\"input-group-btn button_search\">
\t<button type=\"button\" class=\"btn btn-search\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"none\" viewBox=\"0 0 16 16\">
\t\t<path fill=\"#fff\" fill-rule=\"evenodd\" d=\"M14.177 7.176A6.588 6.588 0 101 7.176a6.588 6.588 0 0013.177 0zm-11.942 0a5.353 5.353 0 1110.706 0 5.353 5.353 0 01-10.706 0z\" clip-rule=\"evenodd\"/>
\t\t<path fill=\"#fff\" d=\"M11.156 11.517a.618.618 0 01.805-.053l.069.06 2.587 2.631a.618.618 0 01-.812.927l-.07-.06-2.586-2.632a.618.618 0 01.007-.873z\"/>
\t\t</svg>
\t</button>
  </span>
</div>
";
        // line 29
        if ((array_key_exists("search_word", $context) &&  !twig_test_empty(($context["search_word"] ?? null)))) {
            // line 30
            echo "<div id=\"search_word\" class=\"hidden-xs hidden-sm\">";
            echo ($context["text_search_word"] ?? null);
            echo "<a>";
            echo ($context["search_word"] ?? null);
            echo "</a></div>
";
        }
        // line 32
        if ((($context["show_hc_search"] ?? null) == "1")) {
            // line 33
            echo "<script>
\$(document).ready(function() {
  var category_id_page = \$('#content select[name=\\'category_id\\']').find(\"option:selected\").attr(\"value\");
  var category_id_html = \$('#content select[name=\\'category_id\\']').find(\"option:selected\").html();

  \$(\"#selected_category\").val(category_id_page);
  \$(\"#category_now\").val(category_id_page);
  \$('.btn-search-select').prop('title', category_id_html);
  \$('.select-category').find('.filter-option').html(category_id_html)
  });
\$('#search a').click(function(){
\t\$(\"#selected_category\").val(\$(this).attr('data-idsearch'));
\t\$('.btn-search-select').prop('title', \$(this).html());
\t\$('#search .categories .dropdown-menu li').removeClass('sel-cat-search');
\t\$(this).parent().addClass('sel-cat-search');
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "luxshop/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  127 => 32,  119 => 30,  117 => 29,  106 => 20,  100 => 16,  89 => 14,  85 => 13,  81 => 12,  71 => 6,  59 => 5,  56 => 4,  54 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/common/search.twig", "");
    }
}
