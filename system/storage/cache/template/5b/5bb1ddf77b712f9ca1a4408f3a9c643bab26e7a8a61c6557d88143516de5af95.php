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

/* luxshop/template/extension/module/luxshop_editorplus_product.twig */
class __TwigTemplate_6a5b30bddb545017915bc146bc21fb92389f1e9fd53988688f16a0622a39cb40 extends \Twig\Template
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
        if (($context["user_logged"] ?? null)) {
            echo " 
\t";
            // line 2
            if (($context["user_logged"] ?? null)) {
                echo " 
<div class=\"edit-product-button\">
";
                // line 4
                if ((($context["link_module_edit_admin"] ?? null) == "Y")) {
                    echo " 
\t<a target=\"_blank\" href=\"admin/index.php?route=extension/module/luxshop_editproduct&user_token=";
                    // line 5
                    echo ($context["user_token"] ?? null);
                    echo "\" class=\"btn-editprod\"  data-toggle=\"tooltip\" title=\"";
                    echo ($context["pge_text_admin_setting"] ?? null);
                    echo "\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i></a>
";
                }
                // line 6
                echo " 
";
                // line 7
                if ((($context["link_product_admin"] ?? null) == "Y")) {
                    echo " 
<a data-toggle=\"tooltip\" target=\"_blank\" href=\"";
                    // line 8
                    echo twig_constant("HTTP_SERVER");
                    echo "admin/index.php?route=catalog/product/edit&user_token=";
                    echo ($context["user_token"] ?? null);
                    echo "&product_id=";
                    echo ($context["product_id"] ?? null);
                    echo "\"class=\"btn-editprod\" title=\"";
                    echo ($context["pge_text_catalog_prod_edit"] ?? null);
                    echo "\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i></a>
";
                }
                // line 9
                echo " 
";
                // line 10
                if ((($context["view_open_description_edit"] ?? null) == "Y")) {
                    echo " 
\t<a data-toggle=\"tooltip\" onclick=\"show_editor('index.php?route=module/editproduct/editdescription&product_id=";
                    // line 11
                    echo ($context["product_id"] ?? null);
                    echo "')\" href=\"javascript:void(0);\" class=\"btn-editprod\" title=\"";
                    echo ($context["pge_text_description"] ?? null);
                    echo "\"><i class=\"fa fa-newspaper-o\" aria-hidden=\"true\"></i></a>
";
                }
                // line 12
                echo " 
 ";
                // line 13
                if ((($context["view_open_code_edit"] ?? null) == "Y")) {
                    echo " 
\t\t<a data-toggle=\"tooltip\" onclick=\"show_editor('index.php?route=module/editproduct/editcode&product_id=";
                    // line 14
                    echo ($context["product_id"] ?? null);
                    echo "')\" href=\"javascript:void(0);\" class=\"btn-editprod\" title=\"";
                    echo ($context["pge_text_code"] ?? null);
                    echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>
";
                }
                // line 15
                echo " 
";
                // line 16
                if ((($context["view_open_category_edit"] ?? null) == "Y")) {
                    echo " 
\t<a data-toggle=\"tooltip\" onclick=\"show_editor('index.php?route=module/editproduct/editcategory&product_category&product_id=";
                    // line 17
                    echo ($context["product_id"] ?? null);
                    echo "')\" href=\"javascript:void(0);\" class=\"btn-editprod \" title=\"";
                    echo ($context["pge_text_categories"] ?? null);
                    echo "\"><i class=\"fa fa-sitemap\" aria-hidden=\"true\"></i></a>
";
                }
                // line 18
                echo " 
";
                // line 19
                if ((($context["view_open_image_edit"] ?? null) == "Y")) {
                    echo " 
\t<a data-toggle=\"tooltip\" onclick=\"show_editor('index.php?route=module/editproduct/editimage&product_id=";
                    // line 20
                    echo ($context["product_id"] ?? null);
                    echo "')\" href=\"javascript:void(0);\" class=\"btn-editprod \" title=\"";
                    echo ($context["pge_text_images_product"] ?? null);
                    echo "\"><i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i></a>
";
                }
                // line 21
                echo " 
";
                // line 22
                if ((($context["view_open_image_edit"] ?? null) == "Y")) {
                    echo " 
\t<a data-toggle=\"tooltip\" onclick=\"show_editor('index.php?route=module/editproduct/editimageurl&product_id=";
                    // line 23
                    echo ($context["product_id"] ?? null);
                    echo "')\" href=\"javascript:void(0);\" class=\"btn-editprod\" title=\"";
                    echo ($context["pge_text_images_product_url"] ?? null);
                    echo "\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a>
";
                }
                // line 24
                echo " 
";
                // line 25
                if ((($context["view_open_image_google_edit"] ?? null) == "Y")) {
                    echo " 
\t<a data-toggle=\"tooltip\" onclick=\"show_editor('index.php?route=module/editproduct/editimagegoogle&product_id=";
                    // line 26
                    echo ($context["product_id"] ?? null);
                    echo "')\" href=\"javascript:void(0);\"  class=\"btn-editprod \" title=\"";
                    echo ($context["pge_text_images_product_google"] ?? null);
                    echo "\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a>
";
                }
                // line 27
                echo " 
";
                // line 28
                if ((($context["view_open_price_edit"] ?? null) == "Y")) {
                    echo " 
\t<a data-toggle=\"tooltip\" onclick=\"show_editor('index.php?route=module/editproduct/editprice&product_id=";
                    // line 29
                    echo ($context["product_id"] ?? null);
                    echo "')\" href=\"javascript:void(0);\" class=\"btn-editprod\" title=\"";
                    echo ($context["pge_text_price"] ?? null);
                    echo "\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i></a>
 ";
                }
                // line 30
                echo " 
 ";
                // line 31
                if ((($context["view_open_special_edit"] ?? null) == "Y")) {
                    echo "\t 
\t<a data-toggle=\"tooltip\" onclick=\"show_editor('index.php?route=module/editproduct/editspecial&special_price&product_id=";
                    // line 32
                    echo ($context["product_id"] ?? null);
                    echo "')\" href=\"javascript:void(0);\" class=\"btn-editprod\" title=\"";
                    echo ($context["pge_text_special"] ?? null);
                    echo "\"><i class=\"fa fa-tag\" aria-hidden=\"true\"></i></a>
";
                }
                // line 33
                echo "\t
";
                // line 34
                if ((($context["view_open_option_edit"] ?? null) == "Y")) {
                    echo " 
\t<a data-toggle=\"tooltip\" onclick=\"show_editor('index.php?route=module/editproduct/editdiscount&product_id=";
                    // line 35
                    echo ($context["product_id"] ?? null);
                    echo "')\" href=\"javascript:void(0);\" class=\"btn-editprod\" title=\"";
                    echo ($context["pge_text_discount_title"] ?? null);
                    echo "\"><i class=\"fa fa-legal fa-fw\" aria-hidden=\"true\"></i></a>
";
                }
                // line 36
                echo " 
 ";
                // line 37
                if ((($context["view_open_related_edit"] ?? null) == "Y")) {
                    echo " 
\t<a data-toggle=\"tooltip\" onclick=\"show_editor('index.php?route=module/editproduct/editrelated&product_id=";
                    // line 38
                    echo ($context["product_id"] ?? null);
                    echo "')\" href=\"javascript:void(0);\" class=\"btn-editprod\" title=\"";
                    echo ($context["pge_text_related"] ?? null);
                    echo "\"><i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i></a>\t
";
                }
                // line 39
                echo "\t
";
                // line 40
                if ((($context["view_open_attribute_edit"] ?? null) == "Y")) {
                    echo "\t
\t<a data-toggle=\"tooltip\" onclick=\"show_editor('index.php?route=module/editproduct/editattribute&product_id=";
                    // line 41
                    echo ($context["product_id"] ?? null);
                    echo "')\" href=\"javascript:void(0);\" class=\"btn-editprod\" title=\"";
                    echo ($context["pge_text_attribute"] ?? null);
                    echo "\"><i class=\"fa fa-buysellads\" aria-hidden=\"true\"></i></a>
";
                }
                // line 42
                echo "\t
";
                // line 43
                if ((($context["view_open_option_edit"] ?? null) == "Y")) {
                    echo "\t
\t<a data-toggle=\"tooltip\" onclick=\"show_editor('index.php?route=module/editproduct/editoption&product_id=";
                    // line 44
                    echo ($context["product_id"] ?? null);
                    echo "')\" href=\"javascript:void(0);\" class=\"btn-editprod\" title=\"";
                    echo ($context["pge_text_option"] ?? null);
                    echo "\"><i class=\"fa fa-cubes\" aria-hidden=\"true\"></i></a>
";
                }
                // line 45
                echo " 
</div>
";
            }
            // line 47
            echo "\t

<script type=\"text/javascript\">
var loading_masked_img = '<img src=\"catalog/view/theme/luxshop/image/ring-alt-1.svg\" />';
function loading_img_svg(action) {
\tif (action) {
\t\t\$('#loading_img_svg').html(loading_masked_img);
\t\t\$('#loading_img_svg').show();
\t} else {
\t\t\$('#loading_img_svg').html('');
\t\t\$('#loading_img_svg').hide();
\t}
}
function show_editor(link) {
\t\$('body').prepend('<div id=\"loading_img_svg\"></div>');
\tloading_img_svg(true); 
\t\$('body').append('<div class=\"popup_banner\"></div>');
\t\$('.popup_banner').popup({
\t\ttransition: 'all 0.3s',
\t\tclosetransitionend: function () {\$(this).remove();}
\t});
\t\$('.popup_banner').load(link, function() {
\t\t\$('.popup_banner').append('<i class=\"fa fa-times closepopup\" onclick=\"\$(\\'.popup_banner\\').popup(\\'hide\\');\"></i>');
\t\tloading_img_svg(false); 
\t\t\$('.popup_banner').popup('show');
\t});
}
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "luxshop/template/extension/module/luxshop_editorplus_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 47,  243 => 45,  236 => 44,  232 => 43,  229 => 42,  222 => 41,  218 => 40,  215 => 39,  208 => 38,  204 => 37,  201 => 36,  194 => 35,  190 => 34,  187 => 33,  180 => 32,  176 => 31,  173 => 30,  166 => 29,  162 => 28,  159 => 27,  152 => 26,  148 => 25,  145 => 24,  138 => 23,  134 => 22,  131 => 21,  124 => 20,  120 => 19,  117 => 18,  110 => 17,  106 => 16,  103 => 15,  96 => 14,  92 => 13,  89 => 12,  82 => 11,  78 => 10,  75 => 9,  64 => 8,  60 => 7,  57 => 6,  50 => 5,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/extension/module/luxshop_editorplus_product.twig", "");
    }
}
