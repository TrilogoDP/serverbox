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

/* luxshop/template/extension/module/luxshop_product_categorytabs.twig */
class __TwigTemplate_2b82984ff686cedc61a45342544b27ea40fa77bd3bb5816b82e64dfa110e72df extends \Twig\Template
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
        echo "<div class=\"container-module\">
\t<div class=\"tabs__header\">
\t\t<div class=\"tabs__header__scroll dragscroll hs-";
        // line 3
        echo ($context["module"] ?? null);
        echo "\">
\t\t\t<ul class=\"nav nav-tabs my-tabs\" id=\"prodCatTab";
        // line 4
        echo ($context["module"] ?? null);
        echo "\">
\t\t\t\t<li class=\"tabs__active_line mod_";
        // line 5
        echo ($context["module"] ?? null);
        echo "\"></li>
\t\t\t\t";
        // line 6
        $context["tn"] = 0;
        // line 7
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "\t\t\t\t<li ";
            if ((($context["tn"] ?? null) == 0)) {
                echo "class=\"active\"";
            }
            echo "><a data-toggle=\"tab\" data-catid=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["category"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["category_id"] ?? null) : null);
            echo "\" href=\"#cat-tab-";
            echo ($context["module"] ?? null);
            echo "-";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["category"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["category_id"] ?? null) : null);
            echo "\">";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["category"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null);
            echo "</a></li>
\t\t\t\t";
            // line 9
            $context["tn"] = (($context["tn"] ?? null) + 1);
            // line 10
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"tab-content prod_cat_tab_content\">
\t\t";
        // line 15
        $context["tn"] = 0;
        // line 16
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            echo "\t\t<div class=\"tab-pane fade ";
            if ((($context["tc"] ?? null) == 0)) {
                echo "active in";
            }
            echo "\" id=\"cat-tab-";
            echo ($context["module"] ?? null);
            echo "-";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["category"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["category_id"] ?? null) : null);
            echo "\">
\t\t\t<div class=\"content-items\">
\t\t\t</div>
\t\t</div>
\t\t";
            // line 21
            $context["tc"] = (($context["tc"] ?? null) + 1);
            // line 22
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t</div>
<script>
\$('.container-module .tabs__active_line.mod_";
        // line 25
        echo ($context["module"] ?? null);
        echo "').css({
\t'width':\$('.container-module .tabs__header__scroll .my-tabs#prodCatTab";
        // line 26
        echo ($context["module"] ?? null);
        echo " li.active').outerWidth() + 9,
\t'left':\$('.container-module .tabs__header__scroll .my-tabs#prodCatTab";
        // line 27
        echo ($context["module"] ?? null);
        echo " li.active').offset().left - \$('.container-module .tabs__header__scroll > .my-tabs#prodCatTab";
        echo ($context["module"] ?? null);
        echo "').offset().left
});
\$('.container-module .tabs__header__scroll .my-tabs#prodCatTab";
        // line 29
        echo ($context["module"] ?? null);
        echo " li a').click(function(){
\t\$('.container-module .tabs__active_line.mod_";
        // line 30
        echo ($context["module"] ?? null);
        echo "').css({
\t\t'width':\$(this).outerWidth(),
\t\t'left':\$(this).parent().offset().left - \$('.container-module .tabs__header__scroll > .my-tabs#prodCatTab";
        // line 32
        echo ($context["module"] ?? null);
        echo "').offset().left
\t});
\tlet width_block = \$('.container-module .tabs__header__scroll.hs-";
        // line 34
        echo ($context["module"] ?? null);
        echo "').width();
\tlet li_width = \$(this).outerWidth();
\tlet li_left = \$(this).parent().offset().left - \$('.container-module .tabs__header__scroll.hs-";
        // line 36
        echo ($context["module"] ?? null);
        echo " > .my-tabs#prodCatTab";
        echo ($context["module"] ?? null);
        echo "').offset().left;
\tlet goLeft = li_left - (width_block / 2) + (li_width / 2);
\tif(goLeft > 0){
\t\t\$('.container-module .tabs__header__scroll.hs-";
        // line 39
        echo ($context["module"] ?? null);
        echo "').animate({scrollLeft:goLeft})
\t} else {
\t\t\$('.container-module .tabs__header__scroll.hs-";
        // line 41
        echo ($context["module"] ?? null);
        echo "').animate({scrollLeft:0})
\t}
});
var idCategory = \$('#prodCatTab";
        // line 44
        echo ($context["module"] ?? null);
        echo " > li.active a').attr(\"data-catid\");
var checkExistHtml = \$(\"#cat-tab-";
        // line 45
        echo ($context["module"] ?? null);
        echo "-\"+idCategory+\" .content-items\").html();

if(\$.trim(checkExistHtml).length==0||checkExistHtml==undefined){
\t\$.ajax({
\t\turl: '";
        // line 49
        echo ($context["ajaxurl"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdata: 'category_id='+ idCategory+'&module=";
        // line 51
        echo ($context["module"] ?? null);
        echo "&module_id=";
        echo ($context["module_id"] ?? null);
        echo "',
\t\tdataType: 'html',
\t\tsuccess: function(data) {
\t\t\t\$(\"#cat-tab-";
        // line 54
        echo ($context["module"] ?? null);
        echo "-\"+\$('#prodCatTab";
        echo ($context["module"] ?? null);
        echo " > li.active a').attr(\"data-catid\")+\" .content-items\").html(data);
\t\t}
\t});
}
\$(\"#prodCatTab";
        // line 58
        echo ($context["module"] ?? null);
        echo " > li a\").click(function(){
\tvar Categoryid = \$(this).attr(\"data-catid\");
\tvar checkExistHtml = \$(\"#cat-tab-";
        // line 60
        echo ($context["module"] ?? null);
        echo "-\"+Categoryid+\" .content-items\").html();
\tif(\$.trim(checkExistHtml).length==0||checkExistHtml==undefined){
\t\t\$.ajax({
\t\t\turl: '";
        // line 63
        echo ($context["ajaxurl"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdata: 'category_id='+ Categoryid+'&module=";
        // line 65
        echo ($context["module"] ?? null);
        echo "&module_id=";
        echo ($context["module_id"] ?? null);
        echo "',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(data) {
\t\t\t\t\$(\"#cat-tab-";
        // line 68
        echo ($context["module"] ?? null);
        echo "-\"+Categoryid+\" .content-items\").html(data);
\t\t\t\tsetTimeout(function () {
\t\t\t\t\$('a > img').each(function () {
\t\t\t\t\tif (\$( document ).width()>767) {
\t\t\t\t\t\tif (\$(this).attr('data-additional-hover')) {
\t\t\t\t\t\t\tvar img_src = \$(this).attr('data-additional-hover');
\t\t\t\t\t\t\t\$(this).addClass('main-img');
\t\t\t\t\t\t\t\$(this).after('<img src=\"'+img_src+'\" class=\"additional-img-hover img-responsive\" title=\"'+\$(this).attr('alt')+'\" />');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\taddLsTimer();
\t\t\t\t},1000);
\t\t\t}
\t\t});
\t}
});
</script>
</div>";
    }

    public function getTemplateName()
    {
        return "luxshop/template/extension/module/luxshop_product_categorytabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 68,  224 => 65,  219 => 63,  213 => 60,  208 => 58,  199 => 54,  191 => 51,  186 => 49,  179 => 45,  175 => 44,  169 => 41,  164 => 39,  156 => 36,  151 => 34,  146 => 32,  141 => 30,  137 => 29,  130 => 27,  126 => 26,  122 => 25,  118 => 23,  112 => 22,  110 => 21,  96 => 17,  91 => 16,  89 => 15,  83 => 11,  77 => 10,  75 => 9,  60 => 8,  55 => 7,  53 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/extension/module/luxshop_product_categorytabs.twig", "");
    }
}
