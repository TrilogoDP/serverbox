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

/* luxshop/template/extension/module/luxshop_easybanner.twig */
class __TwigTemplate_ef3a14a15775d871841012ab90a7ba91d579a38c66e501252c8cf27709242e9f extends \Twig\Template
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
        echo "<div class=\"easybanner-box\">
\t<div class=\"row ";
        // line 2
        if ((($context["type_easy_banner"] ?? null) != 1)) {
            echo "dflex";
        }
        echo " mod_";
        echo ($context["module"] ?? null);
        echo " type_banner_";
        echo ($context["type_easy_banner"] ?? null);
        echo "\">
";
        // line 3
        if ((($context["type_easy_banner"] ?? null) == 1)) {
            // line 4
            echo "\t";
            $context["class"] = "col-xs-12 col-sm-12 col-md-12";
        } elseif ((        // line 5
($context["type_easy_banner"] ?? null) == 2)) {
            // line 6
            echo "\t";
            $context["class"] = "col-xs-12 col-sm-6 col-md-6";
        } elseif ((        // line 7
($context["type_easy_banner"] ?? null) == 3)) {
            // line 8
            echo "\t";
            $context["class"] = "col-xs-12 col-sm-12 col-md-4";
        } elseif ((        // line 9
($context["type_easy_banner"] ?? null) == 4)) {
            // line 10
            echo "\t";
            $context["class"] = "col-xs-12 col-sm-6";
        } elseif ((        // line 11
($context["type_easy_banner"] ?? null) == 5)) {
            // line 12
            echo "\t";
            $context["class"] = "col-xs-12 col-sm-6";
        } elseif ((        // line 13
($context["type_easy_banner"] ?? null) == 6)) {
            // line 14
            echo "\t";
            $context["class"] = "col-xs-12 col-sm-12 col-md-8";
        } else {
            // line 16
            echo "\t";
            $context["class"] = "col-xs-12 col-sm-12 col-md-8";
        }
        // line 18
        $context["class"] = ((($context["class"] ?? null) . " type-easy-b-") . ($context["type_easy_banner"] ?? null));
        // line 19
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["easy_banners"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["result"]) {
            // line 20
            echo "\t\t<div class=\"";
            echo ($context["class"] ?? null);
            echo "\">
\t\t\t<div class=\"easy-banner-";
            // line 21
            echo (($context["module"] ?? null) . $context["key"]);
            echo " item-easy-b\" style=\"background-color: ";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["result"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["bg_block"] ?? null) : null);
            echo "\">
\t\t\t\t<a ";
            // line 22
            if ( !twig_test_empty((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["result"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["link"] ?? null) : null))) {
                echo "href=\"";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["result"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["link"] ?? null) : null);
                echo "\" class=\"eb-link\"";
            } else {
                echo "href=\"javascript:void(0)\" class=\"eb-no-link\"";
            }
            echo ">
\t\t\t\t";
            // line 23
            if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["result"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["logo_image"] ?? null) : null)) {
                // line 24
                echo "\t\t\t\t<div class=\"easy-b-logo-brand\"><img loading=\"lazy\" width=\"";
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["result"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["logo_image_width"] ?? null) : null);
                echo "\" height=\"";
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["result"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["logo_image_height"] ?? null) : null);
                echo "\" class=\"img-responsive\" src=\"";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["result"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["logo_image"] ?? null) : null);
                echo "\" alt=\"\"/></div>
\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t";
            if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["result"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["price"] ?? null) : null)) {
                // line 27
                echo "\t\t\t\t<div class=\"easy-b-price-box top-right\">
\t\t\t\t\t<div class=\"easy-b-price-inner\">
\t\t\t\t\t\t<span class=\"easy-b-price-from\">";
                // line 29
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["result"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["price_from"] ?? null) : null);
                echo "</span>
\t\t\t\t\t\t<span class=\"easy-b-price\">";
                // line 30
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["result"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["price"] ?? null) : null);
                echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t<div class=\"item-img-and-text dflex jcsb\">
\t\t\t\t\t<div class=\"easy-b-image\">
\t\t\t\t\t\t<img class=\"img-responsive\" decoding=\"async\" loading=\"lazy\" width=\"";
            // line 36
            echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["result"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["image_width"] ?? null) : null);
            echo "\" height=\"";
            echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["result"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["image_height"] ?? null) : null);
            echo "\" src=\"";
            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["result"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["image"] ?? null) : null);
            echo "\" alt=\"";
            echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["result"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["title"] ?? null) : null);
            echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item-text\">
\t\t\t\t\t\t<div class=\"easy-b-title\" ";
            // line 39
            if ( !twig_test_empty((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["result"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["color_title"] ?? null) : null))) {
                echo "style=\"color:";
                echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["result"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["color_title"] ?? null) : null);
                echo "\"";
            }
            echo ">";
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["result"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["title"] ?? null) : null);
            echo "</div>
\t\t\t\t\t\t<div class=\"easy-b-description\" ";
            // line 40
            if ( !twig_test_empty((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["result"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["color_desc"] ?? null) : null))) {
                echo "style=\"color:";
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["result"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["color_desc"] ?? null) : null);
                echo "\"";
            }
            echo ">";
            echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["result"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["description"] ?? null) : null);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "<script>
addStyleHeader('";
        // line 48
        echo ($context["html_css"] ?? null);
        echo "');
</script>
";
        // line 50
        if ((($context["type_easy_banner"] ?? null) == 6)) {
            // line 51
            echo "<script>
\$('.mod_";
            // line 52
            echo ($context["module"] ?? null);
            echo ".type_banner_";
            echo ($context["type_easy_banner"] ?? null);
            echo "').each(function() {
    var items = \$(this).children('div.col-xs-12');
\tfor (var i = 0; i < items.length; i+=2) {
      items.slice(i, i=2).removeClass('col-sm-12 col-md-8').wrapAll('<div class=\"col-xs-12 col-sm-12 col-md-4 dflex type_one_two_column_right\"></div>');
    }
});
</script>
";
        }
        // line 60
        if ((($context["type_easy_banner"] ?? null) == 7)) {
            // line 61
            echo "<script>
\$('.mod_";
            // line 62
            echo ($context["module"] ?? null);
            echo ".type_banner_";
            echo ($context["type_easy_banner"] ?? null);
            echo "').each(function() {
    var items = \$(this).children('div.col-xs-12');
\tfor (var i = 1; i < items.length; i+=2) {
      items.slice(i, i=3).removeClass('col-sm-12 col-md-8').wrapAll('<div class=\"col-xs-12 col-sm-12 col-md-4 dflex type_one_two_column_right\"></div>');
    }
});
</script>
";
        }
        // line 70
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "luxshop/template/extension/module/luxshop_easybanner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 70,  219 => 62,  216 => 61,  214 => 60,  201 => 52,  198 => 51,  196 => 50,  191 => 48,  188 => 47,  169 => 40,  159 => 39,  147 => 36,  143 => 34,  136 => 30,  132 => 29,  128 => 27,  125 => 26,  115 => 24,  113 => 23,  103 => 22,  97 => 21,  92 => 20,  87 => 19,  85 => 18,  81 => 16,  77 => 14,  75 => 13,  72 => 12,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  55 => 5,  52 => 4,  50 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/extension/module/luxshop_easybanner.twig", "");
    }
}
