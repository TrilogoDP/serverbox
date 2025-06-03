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

/* luxshop/template/extension/module/luxshop_editorplus.twig */
class __TwigTemplate_032b8d74f1ca34f821af47eb4664f99fd3c148beaf42b66f54398ecbf146038b extends \Twig\Template
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
        if (($context["product_id"] ?? null)) {
            // line 2
            echo "<div id=\"edit_prod\" style=\"display: none;\"></div>
";
        }
        // line 4
        echo "<link rel=\"stylesheet\" href=\"catalog/view/theme/luxshop/stylesheet/edit_product.css\" />
<link rel=\"stylesheet\" href=\"catalog/view/editproduct/css/bootstrap-select.css\" />
<script src=\"catalog/view/editproduct/js/bootstrap-select.js\"></script>
<script>
function loadEditorplus() {
var products_id = products_url_alias = '';
var product_id = '";
        // line 10
        echo ($context["product_id"] ?? null);
        echo "';

\tif(product_id) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/luxshop_editorplus/getSettingEditorplus',
\t\t\ttype: 'POST',
\t\t\tdata: '&route_mod=";
        // line 16
        echo ($context["route"] ?? null);
        echo "&product_id='+product_id,
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tif(json['edit_prod']){
\t\t\t\t\tvar ajax_edit_btn = \$('#edit_prod');
\t\t\t\t\t\$(ajax_edit_btn).replaceWith(json['edit_prod']);
\t\t\t\t}

\t\t\t}
\t\t});
\t} else {
\t\tvar edit_mod_pages = \$('div[class*=\"editorbtncat\"]');
\t\tif (edit_mod_pages.length) {
\t\t\tedit_mod_pages.remove();
\t\t}
\t\t\$('.product-layout .product-name a').each(function(index, element) {
\t\t\t\tvar a = \$(element);
\t\t\t\tvar href = a.attr('href');

\t\t\t\tif (href != null && href != 'undefined') {
\t\t\t\t\tif (/product_id=[0-9]*/.test(href)) {
\t\t\t\t\t\tvar matches = href.match(/product_id=([0-9]*)/);

\t\t\t\t\t\tif (matches != null && matches != 'undefined') {
\t\t\t\t\t\t\tproducts_id += '&prod_id_edit[' + index + ']=' + matches[1];
\t\t\t\t\t\t\tif(!\$('.editorbtncat' + index).length){
\t\t\t\t\t\t\t\t\$(element).parent().parent().parent().find('.image').before('<div class=\"editorbtncat' + index + '\"></div>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t} else if (";
        // line 46
        echo ($context["preg1"] ?? null);
        echo ".test(href)) {
\t\t\t\t\t\tvar matches = href.match(";
        // line 47
        echo ($context["preg2"] ?? null);
        echo ");

\t\t\t\t\t\tif (matches != null && matches != 'undefined') {
\t\t\t\t\t\t\tproducts_url_alias += '&url_product_edit[' + index + ']=' + encodeURIComponent (matches[1]);
\t\t\t\t\t\t\t\$(element).parent().parent().parent().find('.image').before('<div class=\"editorbtncat' + index + '\"></div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/luxshop_editorplus/getSettingEditorplus',
\t\t\ttype: 'POST',
\t\t\tdata: '&seo_category_id=";
        // line 60
        echo ($context["seo_category_id"] ?? null);
        echo "&route_mod=";
        echo ($context["route"] ?? null);
        echo "'+products_id + products_url_alias,
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t\$.each(json['btn_product'], function(numb, data) {
\t\t\t\t\tvar cont_edit_btn = \$('.editorbtncat' + numb + '');
\t\t\t\t\t\$(cont_edit_btn).append(data);
\t\t\t\t});
\t\t\t\tvar groupbtn = \$('div[id=\"group-editor\"]');
\t\t\t\tif (!groupbtn.length) {
\t\t\t\t\tif(json['group_btn']){
\t\t\t\t\t\t\$('footer').before(json['group_btn']);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t}
\t\t});
\t}

};

\$(document).ready(function(e) {
\tif (typeof doFilter != 'function') {
\t\tsetTimeout ('loadEditorplus()', 500);
\t}
});
</script>
";
    }

    public function getTemplateName()
    {
        return "luxshop/template/extension/module/luxshop_editorplus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 60,  97 => 47,  93 => 46,  60 => 16,  51 => 10,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/extension/module/luxshop_editorplus.twig", "");
    }
}
