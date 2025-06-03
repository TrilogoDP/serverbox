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

/* extension/module/luxshop/setting_footer_menu.twig */
class __TwigTemplate_3aa15dfe8db4a7d1666c386c6c65714486d12eb37929945052775e7abe1aacd1 extends \Twig\Template
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
\t<label class=\"col-sm-3 control-label\">";
        // line 2
        echo ($context["ls_footer_theme_mode"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"checkbox-group-pixelshop\">
\t\t<label><input type=\"checkbox\" name=\"footer_theme_mode\" value=\"1\" ";
        // line 5
        echo (((array_key_exists("footer_theme_mode", $context) && (($context["footer_theme_mode"] ?? null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t</div>
\t</div>
</div>
<ul class=\"nav nav-tabs\">
\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-footer-info-contact\">";
        // line 10
        echo ($context["text_footer_contact"] ?? null);
        echo "</a></li>
\t<li><a data-toggle=\"tab\" href=\"#tab-footer-desc-store\">";
        // line 11
        echo ($context["text_description_store_footer"] ?? null);
        echo "</a></li>
\t<li><a data-toggle=\"tab\" href=\"#tab-footer-gmap\">";
        // line 12
        echo ($context["text_footer_map"] ?? null);
        echo "</a></li>
\t<li><a data-toggle=\"tab\" href=\"#tab-footer-banner\">";
        // line 13
        echo ($context["text_banner_footer"] ?? null);
        echo "</a></li>
\t<li><a data-toggle=\"tab\" href=\"#tab-footer-column-setting\">";
        // line 14
        echo ($context["text_title_column_footer"] ?? null);
        echo "</a></li>
\t<li><a data-toggle=\"tab\" href=\"#tab-social-column-setting\">";
        // line 15
        echo ($context["text_social_link_header"] ?? null);
        echo "</a></li>
\t<li><a data-toggle=\"tab\" href=\"#tab-payment-column-setting\">";
        // line 16
        echo ($context["text_payments_method"] ?? null);
        echo "</a></li>
\t<li><a data-toggle=\"tab\" href=\"#tab-footer-counter\">";
        // line 17
        echo ($context["tab_footer_counters"] ?? null);
        echo "</a></li>
</ul>
<div class=\"tab-pane\" id=\"tab-footer-counter\">
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 21
        echo ($context["text_counters_footer"] ?? null);
        echo "</label>
\t<div class=\"col-sm-7\">
\t\t<textarea class=\"form-control\" type=\"text\"  name=\"config_ns_footer_counters\" rows=\"10\">";
        // line 23
        echo ($context["config_ns_footer_counters"] ?? null);
        echo "</textarea>
\t</div>
</div>
</div>
<div class=\"tab-pane active\" id=\"tab-footer-info-contact\">
<div class=\"form-group\">
\t<label class=\"col-sm-2 control-label\" for=\"input-logo-footer\">";
        // line 29
        echo ($context["text_logo_footer"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\"><a href=\"\" id=\"thumb-logo-footer\" data-toggle=\"image\" class=\"img-thumbnail\"><img style=\"max-width:35px;\" src=\"";
        // line 30
        echo ($context["ns_logo_footer_image"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder_small"] ?? null);
        echo "\" /></a>
\t\t<input type=\"hidden\" name=\"ns_logo_footer\" value=\"";
        // line 31
        echo ($context["config_ns_logo_footer"] ?? null);
        echo "\" id=\"input-logo-footer\" />
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-12 text-left\">";
        // line 35
        echo ($context["text_phone_footer"] ?? null);
        echo "</label>
</div>
<div class=\"form-group\">
\t<div class=\"col-sm-12 ns-input-group\">
\t";
        // line 39
        $context["phone_row_footer"] = 0;
        // line 40
        echo "\t<div id=\"phone_footer\">
\t\t";
        // line 41
        if (($context["config_phones_footer"] ?? null)) {
            // line 42
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["config_phones_array_footer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result_phones_footer"]) {
                // line 43
                echo "\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon cs-pad-addon\" style=\"cursor:grab;\"><i class=\"fa fa-hand-grab-o\" aria-hidden=\"true\"></i></span>
\t\t\t<span class=\"input-group-addon cs-pad-addon icon_open\" id=\"phone_footer_icon_";
                // line 45
                echo ($context["phone_row_footer"] ?? null);
                echo "\" onclick=\"icon_fontawesome_popup(\$(this).attr('id'))\">
\t\t\t\t";
                // line 46
                echo ($context["text_select_icon"] ?? null);
                echo "
\t\t\t\t";
                // line 47
                if ((twig_get_attribute($this->env, $this->source, ($context["config_phone_footer"] ?? null), "icon_footer_phone", [], "array", true, true, false, 47) && ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["config_phone_footer"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["icon_footer_phone"] ?? null) : null) != ""))) {
                    echo "<i class=\"";
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["result_phones_footer"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["icon_footer_phone"] ?? null) : null);
                    echo "\"></i>";
                } else {
                    echo "<i class=\"fa fa-opencart\"></i>";
                }
                // line 48
                echo "\t\t\t</span>
\t\t\t<input class=\"form-control\" type=\"hidden\" name=\"config_phones_footer[";
                // line 49
                echo ($context["phone_row_footer"] ?? null);
                echo "][icon_footer_phone]\" value=\"";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["result_phones_footer"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["icon_footer_phone"] ?? null) : null);
                echo "\" />
\t\t\t<div class=\"group-ta\">
\t\t\t";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 52
                    echo "\t\t\t<div class=\"input-group-dflex\">
\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                    // line 53
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["language"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["code"] ?? null) : null);
                    echo "/";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["language"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["code"] ?? null) : null);
                    echo ".png\" title=\"";
                    echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["language"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["name"] ?? null) : null);
                    echo "\" /></span>
\t\t\t\t<textarea placeholder=\"";
                    // line 54
                    echo ($context["text_type_fields"] ?? null);
                    echo "\" class=\"form-control textarea-no-resize\" type=\"text\" name=\"config_phones_footer[";
                    echo ($context["phone_row_footer"] ?? null);
                    echo "][type][";
                    echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["language"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["language_id"] ?? null) : null);
                    echo "]\">";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["result_phones_footer"], "type", [], "array", false, true, false, 54), (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["language"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["language_id"] ?? null) : null), [], "array", true, true, false, 54)) ? ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["result_phones_footer"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["type"] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[(($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["language"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["language_id"] ?? null) : null)] ?? null) : null)) : (""));
                    echo "</textarea>
\t\t\t\t<textarea class=\"form-control textarea-no-resize\" type=\"text\" name=\"config_phones_footer[";
                    // line 55
                    echo ($context["phone_row_footer"] ?? null);
                    echo "][phone_footer][";
                    echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["language"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["language_id"] ?? null) : null);
                    echo "]\">";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["result_phones_footer"], "phone_footer", [], "array", false, true, false, 55), (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["language"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["language_id"] ?? null) : null), [], "array", true, true, false, 55)) ? ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["result_phones_footer"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["phone_footer"] ?? null) : null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[(($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["language"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["language_id"] ?? null) : null)] ?? null) : null)) : (""));
                    echo "</textarea>
\t\t\t</div>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "\t\t\t</div>
\t\t\t<span class=\"input-group-addon cs-pad-addon\"><a class=\"btn btn-danger\" onclick=\"\$(this).parent().parent().remove()\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
                // line 59
                echo ($context["text_delete"] ?? null);
                echo "\"><i class=\"fa fa-trash-o\"></i></a></span>
\t\t</div>

\t\t";
                // line 62
                $context["phone_row_footer"] = (($context["phone_row_footer"] ?? null) + 1);
                // line 63
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result_phones_footer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t";
        }
        // line 65
        echo "\t</div>
\t\t<div style=\"margin-top:10px;\">
\t\t\t<a onclick=\"addPhoneFooter();\" class=\"btn btn-primary\">";
        // line 67
        echo ($context["text_add"] ?? null);
        echo "</a></div>
\t</div>
</div>
<script>
\tSortable.create(phone_footer, {
\t  handle: '.fa-hand-grab-o',
\t  animation: 150
\t});
</script>
</div>
<div class=\"tab-pane\" id=\"tab-footer-desc-store\">
  <div class=\"form-group\">
      <label class=\"col-sm-3 control-label\">";
        // line 79
        echo ($context["ns_text_status"] ?? null);
        echo "</label>
      <div class=\"col-sm-9\">
        <div class=\"checkbox-group-pixelshop\">
          <label><input type=\"checkbox\" name=\"footer_desc_status\" value=\"1\" ";
        // line 82
        echo (((array_key_exists("footer_desc_status", $context) && (($context["footer_desc_status"] ?? null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
        </div>
      </div>
    </div>
    <hr>
\t<div class=\"tab-pane-footer-description\">
\t\t<ul class=\"nav nav-tabs\" id=\"language_description_store_footer\">
\t\t  ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 90
            echo "\t\t  <li><a href=\"#language_description_store_footer";
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["language"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["language_id"] ?? null) : null);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["language"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["code"] ?? null) : null);
            echo "/";
            echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["language"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["language"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["name"] ?? null) : null);
            echo "\" /> ";
            echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["language"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["name"] ?? null) : null);
            echo "</a></li>
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "\t\t</ul>
\t\t<div class=\"tab-content\">
\t\t  ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 95
            echo "\t\t  <div class=\"tab-pane\" id=\"language_description_store_footer";
            echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["language"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["language_id"] ?? null) : null);
            echo "\">
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-3 control-label\" for=\"input-description-store-footer";
            // line 97
            echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["language"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["language_id"] ?? null) : null);
            echo "\">";
            echo ($context["text_description_store_footer"] ?? null);
            echo "</label>
\t\t\t  <div class=\"col-sm-9\">
\t\t\t   <textarea class=\"form-control\" data-toggle=\"summernote\" data-lang=\"";
            // line 99
            echo ($context["summernote"] ?? null);
            echo "\" name=\"config_description_store_footer[";
            echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["language"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["language_id"] ?? null) : null);
            echo "][config_description_store_footer]\" id=\"input-description-store-footer";
            echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["language"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["language_id"] ?? null) : null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config_description_store_footer"] ?? null), (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["language"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["language_id"] ?? null) : null), [], "array", false, true, false, 99), "config_description_store_footer", [], "array", true, true, false, 99)) ? ((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["config_description_store_footer"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[(($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["language"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["config_description_store_footer"] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "\t\t</div>
\t</div>
<script><!--
\$('#language_description_store_footer a:first').tab('show');
//--></script>
</div>

<div class=\"tab-pane\" id=\"tab-footer-gmap\">
<div class=\"form-group\">
    <label class=\"col-sm-3 control-label\" >";
        // line 113
        echo ($context["ns_text_status"] ?? null);
        echo "</label>
    <div class=\"col-sm-9\">
      <div class=\"radio-group-text\">
        ";
        // line 116
        if (((array_key_exists("footer_map_status", $context) && (($context["footer_map_status"] ?? null) == "off")) ||  !($context["footer_map_status"] ?? null))) {
            // line 117
            echo "        <input id=\"footer_map_status_off\" class=\"hide-radio-text\" type=\"radio\" name=\"footer_map_status\" value=\"off\" checked=\"checked\" />
        <label for=\"footer_map_status_off\">";
            // line 118
            echo ($context["text_disabled"] ?? null);
            echo "</label>
        ";
        } else {
            // line 120
            echo "        <input id=\"footer_map_status_off\" class=\"hide-radio-text\" type=\"radio\" name=\"footer_map_status\" value=\"off\" />
        <label for=\"footer_map_status_off\">";
            // line 121
            echo ($context["text_disabled"] ?? null);
            echo "</label>
        ";
        }
        // line 123
        echo "        ";
        if ((array_key_exists("footer_map_status", $context) && (($context["footer_map_status"] ?? null) == "gmap"))) {
            // line 124
            echo "        <input id=\"footer_map_status_gmap\" class=\"hide-radio-text\" type=\"radio\" name=\"footer_map_status\" value=\"gmap\" checked=\"checked\" />
        <label for=\"footer_map_status_gmap\">";
            // line 125
            echo ($context["text_gmap"] ?? null);
            echo "</label>
        ";
        } else {
            // line 127
            echo "        <input id=\"footer_map_status_gmap\" class=\"hide-radio-text\" type=\"radio\" name=\"footer_map_status\" value=\"gmap\" />
        <label for=\"footer_map_status_gmap\">";
            // line 128
            echo ($context["text_gmap"] ?? null);
            echo "</label>
        ";
        }
        // line 130
        echo "        ";
        if ((array_key_exists("footer_map_status", $context) && (($context["footer_map_status"] ?? null) == "codemap"))) {
            // line 131
            echo "        <input id=\"footer_map_status_ymap\" class=\"hide-radio-text\" type=\"radio\" name=\"footer_map_status\" value=\"codemap\" checked=\"checked\" />
        <label for=\"footer_map_status_ymap\">";
            // line 132
            echo ($context["text_codemap"] ?? null);
            echo "</label>
        ";
        } else {
            // line 134
            echo "        <input id=\"footer_map_status_ymap\" class=\"hide-radio-text\" type=\"radio\" name=\"footer_map_status\" value=\"codemap\" />
        <label for=\"footer_map_status_ymap\">";
            // line 135
            echo ($context["text_codemap"] ?? null);
            echo "</label>
        ";
        }
        // line 137
        echo "      </div>
    </div>
  </div>
<script>
\$(document).ready(function () {
  var footer_map_status = \$('input[name=footer_map_status]:checked').val();
  if (footer_map_status =='off') {
    \$('.gmap-box').addClass('hidden');
    \$('.codemap-box').addClass('hidden');
  } else if (footer_map_status =='gmap') {
    \$('.gmap-box').removeClass('hidden');
    \$('.codemap-box').addClass('hidden');
  } else if(footer_map_status =='codemap'){
    \$('.codemap-box').removeClass('hidden');
    \$('.gmap-box').addClass('hidden');
  }
})
\$(document).on('change', 'input[name=footer_map_status]:checked', function () {
  var fms = \$(this).val();
  if (fms =='off') {
    \$('.gmap-box').addClass('hidden');
    \$('.codemap-box').addClass('hidden');
  } else if (fms =='gmap') {
    \$('.gmap-box').removeClass('hidden');
    \$('.codemap-box').addClass('hidden');
  } else if(fms =='codemap'){
    \$('.codemap-box').removeClass('hidden');
    \$('.gmap-box').addClass('hidden');
  }
});
</script>



<div class=\"gmap-box\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 173
        echo ($context["text_google_api_map_key"] ?? null);
        echo "<br>
\t\t\t\t<div class=\"label-description\">";
        // line 174
        echo ($context["text_google_api_map_key_description"] ?? null);
        echo "</div>
\t\t\t\t</label>
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t<input class=\"form-control\" type=\"text\"  name=\"config_google_api_map_key\" value=\"";
        // line 177
        echo ($context["config_google_api_map_key"] ?? null);
        echo "\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 180
        if ( !twig_test_empty(($context["config_google_api_map_key"] ?? null))) {
            // line 181
            echo "\t\t\t<script src=\"//maps.google.com/maps/api/js?key=";
            echo ($context["config_google_api_map_key"] ?? null);
            echo "&libraries=places\"></script>
\t\t\t";
        }
        // line 183
        echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-12 title-setting\">";
        // line 184
        echo ($context["text_footer_map"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 187
        echo ($context["entry_center_google_map"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t<input class=\"form-control\" name=\"config_center_google_map\" value=\"";
        // line 189
        echo ($context["config_center_google_map"] ?? null);
        echo "\"></input>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 193
        echo ($context["entry_zoom_google_map"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t<input class=\"form-control\" name=\"config_zoom_google_map\" value=\"";
        // line 195
        echo ((array_key_exists("config_zoom_google_map", $context)) ? (($context["config_zoom_google_map"] ?? null)) : ("8"));
        echo "\"></input>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-12 title-setting\">";
        // line 199
        echo ($context["add_marker_to_map"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t\t<div id=\"ns-left-block-menu\" class=\"col-lg-3 col-md-4 vtabs\">
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t";
        // line 203
        $context["map_row"] = 1;
        // line 204
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gmaps"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["gmap"]) {
            // line 205
            echo "\t\t\t\t\t\t\t<li id=\"gmap-menu-item-";
            echo ($context["map_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" class=\"btn btn-primary menu-tab-link\" href=\"#gmap-tab-menu-item-";
            // line 206
            echo ($context["map_row"] ?? null);
            echo "\" >
\t\t\t\t\t\t\t\t\t  ";
            // line 207
            echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["gmap"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["mapname"] ?? null) : null);
            echo "
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle gmap_remove_menu_item\" onclick=\"\$('#gmap-menu-item-";
            // line 208
            echo ($context["map_row"] ?? null);
            echo "').remove(); \$('#gmap-tab-menu-item-";
            echo ($context["map_row"] ?? null);
            echo "').remove(); \$('a[href=\\'#gmap-tab-menu-item-1\\']').trigger('click'); return false;\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 211
            $context["map_row"] = (($context["map_row"] ?? null) + 1);
            // line 212
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gmap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "\t\t\t\t\t\t<li id=\"module-map-add\"><a class=\"btn btn-primary\" onclick=\"addGMap();\" title=\"";
        echo ($context["text_add"] ?? null);
        echo "\">";
        echo ($context["text_add"] ?? null);
        echo " <i class=\"fa fa-plus-circle\"></i> </a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t";
        // line 216
        $context["map_row"] = 1;
        // line 217
        echo "\t\t\t<div id=\"ns-right-block-menu\" class=\"col-lg-9 col-md-8\" style=\"margin-bottom:50px;padding-bottom:10px; border-bottom:1px solid #ccc;\">
\t\t\t<div class=\"tab-content map-content\">
\t\t\t";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gmaps"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["gmap"]) {
            // line 220
            echo "\t\t\t";
            $context["glat"] = "0";
            // line 221
            echo "\t\t\t";
            $context["glong"] = "0";
            // line 222
            echo "
\t\t\t";
            // line 223
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["gmap"], "latlong", [], "any", false, false, false, 223))) {
                // line 224
                echo "\t\t\t\t";
                $context["ll"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gmap"], "latlong", [], "any", false, false, false, 224), ",");
                // line 225
                echo "\t\t\t\t";
                $context["glat"] = (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["ll"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[0] ?? null) : null);
                // line 226
                echo "\t\t\t\t";
                $context["glong"] = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["ll"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[1] ?? null) : null);
                // line 227
                echo "\t\t\t";
            }
            // line 228
            echo "\t\t\t<div class=\"tab-pane\" id=\"gmap-tab-menu-item-";
            echo ($context["map_row"] ?? null);
            echo "\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 230
            echo ($context["entry_mapid"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"gmaps_mapalias form-control\" name=\"google_maps_module_map[";
            // line 232
            echo ($context["map_row"] ?? null);
            echo "][mapalias]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["gmap"], "mapalias", [], "array", true, true, false, 232)) ? ((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["gmap"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["mapalias"] ?? null) : null)) : (""));
            echo "\" type=\"text\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 236
            echo ($context["entry_mapalias"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input class=\"gmaps_mapname form-control\" name=\"google_maps_module_map[";
            // line 238
            echo ($context["map_row"] ?? null);
            echo "][mapname]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["gmap"], "mapname", [], "array", true, true, false, 238)) ? ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["gmap"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["mapname"] ?? null) : null)) : (""));
            echo "\" type=\"text\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 242
            echo ($context["entry_address"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input size=\"120\" onclick=\"activateGMap('gmap-location-picker-";
            // line 244
            echo ($context["map_row"] ?? null);
            echo "', ";
            echo ($context["glat"] ?? null);
            echo ", ";
            echo ($context["glong"] ?? null);
            echo ", ";
            echo ($context["map_row"] ?? null);
            echo ", '";
            echo ((twig_get_attribute($this->env, $this->source, $context["gmap"], "address", [], "array", true, true, false, 244)) ? ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["gmap"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["address"] ?? null) : null)) : (""));
            echo "');\" class=\"gmaps_address form-control\" name=\"google_maps_module_map[";
            echo ($context["map_row"] ?? null);
            echo "][address]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["gmap"], "address", [], "array", true, true, false, 244)) ? ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["gmap"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["address"] ?? null) : null)) : (""));
            echo "\" type=\"text\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\"></label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div id=\"gmap-location-picker-";
            // line 250
            echo ($context["map_row"] ?? null);
            echo "\" class=\"gmap-location-picker\"><img src=\"/image/google_maps/activate_map.jpg\" style=\"cursor:pointer;\" onclick=\"activateGMap('gmap-location-picker-";
            echo ($context["map_row"] ?? null);
            echo "', ";
            echo ($context["glat"] ?? null);
            echo ", ";
            echo ($context["glong"] ?? null);
            echo ", ";
            echo ($context["map_row"] ?? null);
            echo ", '";
            echo ((twig_get_attribute($this->env, $this->source, $context["gmap"], "address", [], "array", true, true, false, 250)) ? ((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["gmap"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["address"] ?? null) : null)) : (""));
            echo "');\" /></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 254
            echo ($context["entry_latlong"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<input class=\"gmaps_latlong form-control\" name=\"google_maps_module_map[";
            // line 256
            echo ($context["map_row"] ?? null);
            echo "][latlong]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["gmap"], "latlong", [], "array", true, true, false, 256)) ? ((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["gmap"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["latlong"] ?? null) : null)) : (""));
            echo "\" type=\"text\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 260
            echo ($context["text_editor_gmap"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t";
            // line 262
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 263
                echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["language"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["code"] ?? null) : null);
                echo "/";
                echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["language"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["language"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["name"] ?? null) : null);
                echo "\" /></span>
                          <input class=\"form-control\" name=\"google_maps_module_map[";
                // line 264
                echo ($context["map_row"] ?? null);
                echo "][onelinetext][";
                echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["language"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["language_id"] ?? null) : null);
                echo "]\" value=\"";
                echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["gmap"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["onelinetext"] ?? null) : null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[(($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["language"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["language_id"] ?? null) : null)] ?? null) : null);
                echo "\" type=\"text\" />
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 270
            echo ($context["one_line_html"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 273
                echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["language"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["code"] ?? null) : null);
                echo "/";
                echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["language"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["language"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["name"] ?? null) : null);
                echo "\" /></span>
                         <textarea class=\"form-control\" id=\"gmap-jqte-";
                // line 274
                echo ($context["map_row"] ?? null);
                echo "\" class=\"jqte-textarea\" name=\"google_maps_module_map[";
                echo ($context["map_row"] ?? null);
                echo "][maptext][";
                echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["language"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["language_id"] ?? null) : null);
                echo "]\" id=\"maptext-";
                echo ($context["map_row"] ?? null);
                echo "-";
                echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["language"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["language_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["gmap"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["maptext"] ?? null) : null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a[(($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["language"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["language_id"] ?? null) : null)] ?? null) : null);
                echo "</textarea>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 280
            $context["map_row"] = (($context["map_row"] ?? null) + 1);
            // line 281
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gmap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "\t\t\t</div>
\t\t\t</div>

<script>
\$('a[href=\\'#gmap-tab-menu-item-1\\']').trigger('click');
function activateGMap(id, lat, long, mp_rw, addressVal){
\tvar map = \$('#' + id);
\t\tif ( map.html() == '' || map.html().indexOf('activate_map') > 0 ) {
\t\t\tmap.empty().width(550).height(400).locationpicker({
\t\t\tlocation: {latitude: lat, longitude: long},
\t\t\t\tradius: 0,
\t\t\t\tzoom: 8,
\t\t\t\tinputBinding: {
\t\t\t\tlocationNameInput: \$('input[name=\"google_maps_module_map[' + mp_rw + '][address]\"]'),
\t\t\t\tlatlongInput: \$('input[name=\"google_maps_module_map[' + mp_rw + '][latlong]\"]')
\t\t\t\t},
\t\t\t\tenableAutocomplete: true, enableReverseGeocode: false
\t\t\t});
\t\t\t\$('input[name=\"google_maps_module_map[' + mp_rw + '][address]\"]').val(addressVal);
\t\t}


\t}
var map_row = ";
        // line 305
        echo ($context["map_row"] ?? null);
        echo ";
function addGMap() {
\t\thtml  = '<div id=\"gmap-tab-menu-item-' + map_row + '\" class=\"tab-pane\">';
\t\thtml  += '\t<div class=\"tab-content\">';
\t\thtml  += '\t\t<div class=\"form-group\">';
\t\thtml  += '\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 310
        echo ($context["entry_mapid"] ?? null);
        echo "</label>';
\t\thtml  += '\t\t\t<div class=\"col-sm-5\">';
\t\thtml  += '\t\t\t\t<input class=\"gmaps_mapalias form-control\" name=\"google_maps_module_map[' + map_row + '][mapalias]\" value=\"\" type=\"text\" />';
\t\thtml  += '\t\t\t</div>';
\t\thtml  += '\t\t</div>';
\t\thtml  += '\t\t<div class=\"form-group\">';
\t\thtml  += '\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 316
        echo ($context["entry_mapalias"] ?? null);
        echo "</label>';
\t\thtml  += '\t\t\t<div class=\"col-sm-5\">';
\t\thtml  += '\t\t\t\t<input class=\"gmaps_mapname form-control\" name=\"google_maps_module_map[' + map_row + '][mapname]\" value=\"\" type=\"text\" />';
\t\thtml  += '\t\t\t</div>';
\t\thtml  += '\t\t</div>';
\t\thtml  += '\t\t<div class=\"form-group\">';
\t\thtml  += '\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 322
        echo ($context["entry_address"] ?? null);
        echo "</label>';
\t\thtml  += '\t\t\t<div class=\"col-sm-5\">';
\t\thtml  += '\t\t\t\t<input size=\"120\" onclick=\"activateGMap(\\'gmap-location-picker-' + map_row + '\\', 0, 0, ' + map_row + ', \\'\\');\" class=\"gmaps_address form-control\" name=\"google_maps_module_map[' + map_row + '][address]\" value=\"\" type=\"text\" />';
\t\thtml  += '\t\t\t</div>';
\t\thtml  += '\t\t</div>';
\t\thtml  += '\t\t<div class=\"form-group\">';
\t\thtml  += '\t\t\t<label class=\"col-sm-3 control-label\"></label>';
\t\thtml  += '\t\t\t<div class=\"col-sm-5\">';
\t\thtml  += '\t\t\t\t<div id=\"gmap-location-picker-' + map_row + '\" class=\"gmap-location-picker\"><img src=\"/image/google_maps/activate_map.jpg\" style=\"cursor:pointer;\" onclick=\"activateGMap(\\'gmap-location-picker-' + map_row + '\\', 0, 0, ' + map_row + ', \\'\\');\" /></div>';
\t\thtml  += '\t\t\t</div>';
\t\thtml  += '\t\t</div>';
\t\thtml  += '\t\t<div class=\"form-group\">';
\t\thtml  += '\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 334
        echo ($context["entry_latlong"] ?? null);
        echo "</label>';
\t\thtml  += '\t\t\t<div class=\"col-sm-5\">';
\t\thtml  += '\t\t\t\t<input class=\"gmaps_latlong form-control\" name=\"google_maps_module_map[' + map_row + '][latlong]\" value=\"\" type=\"text\" />';
\t\thtml  += '\t\t\t</div>';
\t\thtml  += '\t\t</div>';
\t\thtml  += '\t\t<div class=\"form-group\">';
\t\thtml  += '\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 340
        echo ($context["text_editor_gmap"] ?? null);
        echo "</label>';
\t\thtml  += '\t\t\t<div class=\"col-sm-9\">';
\t\thtml  += '\t\t\t";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo "';
        html  += '                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            // line 343
            echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["language"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["code"] ?? null) : null);
            echo "/";
            echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["language"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["language"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["name"] ?? null) : null);
            echo "\" /></span>';
        html  += '                  <input class=\"form-control\" name=\"google_maps_module_map[' + map_row + '][onelinetext][";
            // line 344
            echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["language"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["language_id"] ?? null) : null);
            echo "]\" value=\"\" type=\"text\" />';
        html  += '                </div>';
        html  += '                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
        echo "';
\t\thtml  += '\t\t\t</div>';
\t\thtml  += '\t\t</div>';
\t\thtml  += '\t\t<div class=\"form-group\">';
\t\thtml  += '\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 350
        echo ($context["one_line_html"] ?? null);
        echo "</label>';
\t\thtml  += '\t\t\t<div class=\"col-sm-9\">';
\t\thtml  += '\t\t\t";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo "';
        html  += '                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            // line 353
            echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["language"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["code"] ?? null) : null);
            echo "/";
            echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["language"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["language"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["name"] ?? null) : null);
            echo "\" /></span>';
        html  += '                 <textarea class=\"form-control\" id=\"gmap-jqte-' + map_row + '\" class=\"jqte-textarea\" name=\"google_maps_module_map[' + map_row + '][maptext][";
            // line 354
            echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["language"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["language_id"] ?? null) : null);
            echo "]\" id=\"maptext-' + map_row + '-";
            echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["language"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["language_id"] ?? null) : null);
            echo "\"></textarea>';
        html  += '                </div>';
        html  += '                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 356
        echo "';
\t\thtml  += '\t\t\t</div>';
\t\thtml  += '\t\t</div>';
\t\thtml += '</div>';
\t\thtml += '</div>';

\t\t\$('.map-content').append(html);

\t\t\$('#module-map-add').before('<li id=\"gmap-menu-item-' + map_row + '\" ><a data-toggle=\"tab\" class=\"btn btn-primary menu-tab-link\" href=\"#gmap-tab-menu-item-' + map_row + '\" > ";
        // line 364
        echo ($context["ns_text_menu_name"] ?? null);
        echo " <i onclick=\"\$(\\'#gmap-menu-item-' + map_row + '\\').remove(); \$(\\'#gmap-tab-menu-item-' + map_row + '\\').remove(); \$(\\'a[href=#gmap-tab-menu-item-1]\\').trigger(\\'click\\'); return false;\" class=\"fa fa-minus-circle remove_menu_item\"></i></a></li>');
\t\t\$('a[href=\\'#gmap-tab-menu-item-'+ map_row +'\\']').trigger('click');

\t\t\$('.gmaps_balloonwidth').iInt({disallow:'+-'});
\t\t\$('.gmaps_latlong').iNumeric({allow:'-', disallow:'+',comma:true});

\t\tmap_row++;

\t}
</script>
</div>
<div class=\"codemap-box\">
    <div class=\"form-group\">
      <div class=\"col-sm-12\">
        <textarea class=\"form-control\" rows=\"5\" type=\"checkbox\" name=\"code_map\">";
        // line 378
        echo (( !twig_test_empty(($context["code_map"] ?? null))) ? (($context["code_map"] ?? null)) : (""));
        echo "</textarea>
      </div>
    </div>
</div>
</div>

<div class=\"tab-pane\" id=\"tab-footer-banner\">

<div class=\"form-group\">
\t<div class=\"col-sm-12 title-setting\">";
        // line 387
        echo ($context["text_footer_ribbon"] ?? null);
        echo "</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 390
        echo ($context["text_footer_ribbon_on_off"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
        // line 393
        if (($context["config_on_off_footer_ribbon"] ?? null)) {
            // line 394
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_footer_ribbon_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_footer_ribbon\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_footer_ribbon_yes\">";
            // line 395
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 397
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_footer_ribbon_yes\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_footer_ribbon\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_footer_ribbon_yes\">";
            // line 398
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 400
        echo "\t\t\t\t\t\t\t";
        if ( !($context["config_on_off_footer_ribbon"] ?? null)) {
            // line 401
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_footer_ribbon_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_footer_ribbon\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_footer_ribbon_no\">";
            // line 402
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 404
            echo "\t\t\t\t\t\t\t<input id=\"config_on_off_footer_ribbon_no\" class=\"hide-radio\" type=\"radio\" name=\"config_on_off_footer_ribbon\" value=\"0\" />
\t\t\t\t\t\t\t<label for=\"config_on_off_footer_ribbon_no\">";
            // line 405
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        }
        // line 407
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 411
        echo ($context["entry_footer_ribbon_text"] ?? null);
        echo "</label>
\t<div class=\"col-sm-5\">
\t";
        // line 413
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 414
            echo "        <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["language"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["code"] ?? null) : null);
            echo "/";
            echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["language"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["language"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["name"] ?? null) : null);
            echo "\" /></span>
            <input name=\"config_footer_ribbon[";
            // line 415
            echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = $context["language"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["language_id"] ?? null) : null);
            echo "][config_footer_ribbon]\" class=\"form-control\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["config_footer_ribbon"] ?? null), (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["language"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["language_id"] ?? null) : null), [], "array", true, true, false, 415)) ? ((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = ($context["config_footer_ribbon"] ?? null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639[(($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["language"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["config_footer_ribbon"] ?? null) : null)) : (""));
            echo "\" />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 418
        echo "\t</div>
</div>
<div class=\"form-group\">
\t<div class=\"col-sm-12 title-setting\">";
        // line 421
        echo ($context["text_banner_footer"] ?? null);
        echo "</div>
</div>
<table id=\"items\" class=\"table table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td></td>
\t\t\t<td>";
        // line 427
        echo ($context["column_banner_icon"] ?? null);
        echo "</td>
\t\t\t<td>";
        // line 428
        echo ($context["column_banner_name"] ?? null);
        echo "</td>
\t\t\t<td>";
        // line 429
        echo ($context["column_banner_description"] ?? null);
        echo "</td>
\t\t\t<td>";
        // line 430
        echo ($context["column_banner_link"] ?? null);
        echo "</td>
\t\t\t<td></td>
\t\t</tr>
\t</thead>
\t<tbody id=\"banner_footer_drag\">
\t";
        // line 435
        $context["item_row"] = 0;
        // line 436
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banner_items_footers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner_items_footer"]) {
            // line 437
            echo "\t\t<tr id=\"item-row";
            echo ($context["item_row"] ?? null);
            echo "\">
\t\t\t<td class=\"text-left sortable\" style=\"cursor:move;\"><i class=\"fa fa-arrows\" aria-hidden=\"true\"></i></td>
\t\t\t<td class=\"text-center\">
\t\t\t\t<div class=\"radio-group-text\" style=\"display: flex; margin-bottom: 5px;\">
\t\t\t\t\t<input id=\"icon_type_0_";
            // line 441
            echo ($context["item_row"] ?? null);
            echo "\" onchange=\"\$(this).parent().parent().find('.show-icon').show().next().hide();\" class=\"hide-radio-text\" type=\"radio\" name=\"banner_items_footer[";
            echo ($context["item_row"] ?? null);
            echo "][icon_type]\" value=\"0\" ";
            if (((twig_get_attribute($this->env, $this->source, $context["banner_items_footer"], "icon_type", [], "array", true, true, false, 441) && ((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = $context["banner_items_footer"]) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["icon_type"] ?? null) : null) == "0")) ||  !(($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["banner_items_footer"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["icon_type"] ?? null) : null))) {
                echo "checked=\"checked\"";
            }
            echo "/>
\t\t\t\t\t<label for=\"icon_type_0_";
            // line 442
            echo ($context["item_row"] ?? null);
            echo "\">";
            echo ($context["text_select_icon"] ?? null);
            echo "</label>
\t\t\t\t\t<input id=\"icon_type_1_";
            // line 443
            echo ($context["item_row"] ?? null);
            echo "\" onchange=\"\$(this).parent().parent().find('.show-icon').hide().next().show();\" class=\"hide-radio-text\" type=\"radio\" name=\"banner_items_footer[";
            echo ($context["item_row"] ?? null);
            echo "][icon_type]\" value=\"1\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["banner_items_footer"], "icon_type", [], "array", true, true, false, 443) && ((($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["banner_items_footer"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["icon_type"] ?? null) : null) == "1"))) {
                echo "checked=\"checked\"";
            }
            echo " />
\t\t\t\t\t<label for=\"icon_type_1_";
            // line 444
            echo ($context["item_row"] ?? null);
            echo "\">";
            echo ($context["ns_text_thumb"] ?? null);
            echo "</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"show-icon\" ";
            // line 446
            if ((twig_get_attribute($this->env, $this->source, $context["banner_items_footer"], "icon_type", [], "array", true, true, false, 446) && ((($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = $context["banner_items_footer"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["icon_type"] ?? null) : null) == "1"))) {
                echo "style=\"display:none;\"";
            }
            echo ">
\t\t\t\t\t<span style=\"min-width:40px;float:none;display:inline-block;margin-right:0px;\" class=\"icon_open\" id=\"banner_items_footer_";
            // line 447
            echo ($context["item_row"] ?? null);
            echo "\" onclick=\"icon_fontawesome_popup(\$(this).attr('id'))\">
\t\t\t\t\t\t";
            // line 448
            if ((twig_get_attribute($this->env, $this->source, $context["banner_items_footer"], "icon_image", [], "array", true, true, false, 448) && ((($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["banner_items_footer"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["icon_image"] ?? null) : null) != ""))) {
                echo "<i class=\"";
                echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["banner_items_footer"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["icon_image"] ?? null) : null);
                echo "\"></i>";
            } else {
                echo "<i class=\"fa fa-opencart\"></i>";
            }
            // line 449
            echo "\t\t\t\t\t</span>
\t\t\t\t\t<input class=\"form-control\" type=\"hidden\" name=\"banner_items_footer[";
            // line 450
            echo ($context["item_row"] ?? null);
            echo "][icon_image]\" value=\"";
            echo (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["banner_items_footer"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["icon_image"] ?? null) : null);
            echo "\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"show-image\" ";
            // line 452
            if (((twig_get_attribute($this->env, $this->source, $context["banner_items_footer"], "icon_type", [], "array", true, true, false, 452) && ((($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = $context["banner_items_footer"]) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["icon_type"] ?? null) : null) == "0")) ||  !(($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = $context["banner_items_footer"]) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["icon_type"] ?? null) : null))) {
                echo "style=\"display:none;\"";
            }
            echo ">
\t\t\t\t\t<a href=\"\" id=\"thumb-image-banner-footer";
            // line 453
            echo ($context["item_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t<img style=\"max-width: 32px;\" data-placeholder=\"";
            // line 454
            echo ($context["placeholder_small"] ?? null);
            echo "\" src=\"";
            echo (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = $context["banner_items_footer"]) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["b_image"] ?? null) : null);
            echo "\" alt=\"\"/>
\t\t\t\t\t</a>
\t\t\t\t\t<input type=\"hidden\" name=\"banner_items_footer[";
            // line 456
            echo ($context["item_row"] ?? null);
            echo "][image]\" value=\"";
            echo (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["banner_items_footer"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["image"] ?? null) : null);
            echo "\" id=\"input-image-banner-footer";
            echo ($context["item_row"] ?? null);
            echo "\" />
\t\t\t\t</div>
\t\t\t</td>
\t\t\t<td class=\"text-left\">
\t\t\t\t";
            // line 460
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 461
                echo "\t\t\t\t<div class=\"input-group pull-left\">
\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 462
                echo (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = $context["language"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["code"] ?? null) : null);
                echo "/";
                echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["language"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["language"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["name"] ?? null) : null);
                echo "\" /></span>
\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"banner_items_footer[";
                // line 463
                echo ($context["item_row"] ?? null);
                echo "][title][";
                echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["language"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["language_id"] ?? null) : null);
                echo "]\" value=\"";
                echo (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = $context["banner_items_footer"]) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["title"] ?? null) : null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768[(($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = $context["language"]) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["language_id"] ?? null) : null)] ?? null) : null);
                echo "\" />
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 466
            echo "\t\t\t</td>
\t\t\t<td class=\"text-left\">
\t\t\t\t";
            // line 468
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 469
                echo "\t\t\t\t\t<div class=\"input-group pull-left\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 470
                echo (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = $context["language"]) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["code"] ?? null) : null);
                echo "/";
                echo (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = $context["language"]) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = $context["language"]) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["name"] ?? null) : null);
                echo "\" /></span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"banner_items_footer[";
                // line 471
                echo ($context["item_row"] ?? null);
                echo "][description][";
                echo (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = $context["language"]) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["language_id"] ?? null) : null);
                echo "]\" value=\"";
                echo (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = $context["banner_items_footer"]) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["description"] ?? null) : null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9[(($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = $context["language"]) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["language_id"] ?? null) : null)] ?? null) : null);
                echo "\" />
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 474
            echo "\t\t\t</td>
\t\t\t<td class=\"text-left\">
\t\t\t\t";
            // line 476
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 477
                echo "\t\t\t\t\t<div class=\"input-group pull-left\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 478
                echo (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = $context["language"]) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["code"] ?? null) : null);
                echo "/";
                echo (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = $context["language"]) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = $context["language"]) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["name"] ?? null) : null);
                echo "\" /></span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"banner_items_footer[";
                // line 479
                echo ($context["item_row"] ?? null);
                echo "][link][";
                echo (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = $context["language"]) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["language_id"] ?? null) : null);
                echo "]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner_items_footer"], "link", [], "array", false, true, false, 479), (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = $context["language"]) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["language_id"] ?? null) : null), [], "array", true, true, false, 479)) ? ((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = $context["banner_items_footer"]) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["link"] ?? null) : null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1[(($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = $context["language"]) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["language_id"] ?? null) : null)] ?? null) : null)) : (""));
                echo "\" />
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 482
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-12 text-center\">";
            // line 483
            echo ($context["text_open_banner_popup"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t";
            // line 486
            if ((($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = $context["banner_items_footer"]) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["popup"] ?? null) : null)) {
                // line 487
                echo "\t\t\t\t\t\t\t\t<input id=\"config_banner_items_footer_popup_yes_";
                echo ($context["item_row"] ?? null);
                echo "\" class=\"hide-radio\" type=\"radio\" name=\"banner_items_footer[";
                echo ($context["item_row"] ?? null);
                echo "][popup]\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t<label for=\"config_banner_items_footer_popup_yes_";
                // line 488
                echo ($context["item_row"] ?? null);
                echo "\">";
                echo ($context["text_yes"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t";
            } else {
                // line 490
                echo "\t\t\t\t\t\t\t\t<input id=\"config_banner_items_footer_popup_yes_";
                echo ($context["item_row"] ?? null);
                echo "\" class=\"hide-radio\" type=\"radio\" name=\"banner_items_footer[";
                echo ($context["item_row"] ?? null);
                echo "][popup]\" value=\"1\" />
\t\t\t\t\t\t\t\t<label for=\"config_banner_items_footer_popup_yes_";
                // line 491
                echo ($context["item_row"] ?? null);
                echo "\">";
                echo ($context["text_yes"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t";
            }
            // line 493
            echo "\t\t\t\t\t\t\t";
            if ( !(($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = $context["banner_items_footer"]) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["popup"] ?? null) : null)) {
                // line 494
                echo "\t\t\t\t\t\t\t\t<input id=\"config_banner_items_footer_popup_no_";
                echo ($context["item_row"] ?? null);
                echo "\" class=\"hide-radio\" type=\"radio\" name=\"banner_items_footer[";
                echo ($context["item_row"] ?? null);
                echo "][popup]\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t<label for=\"config_banner_items_footer_popup_no_";
                // line 495
                echo ($context["item_row"] ?? null);
                echo "\">";
                echo ($context["text_no"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t";
            } else {
                // line 497
                echo "\t\t\t\t\t\t\t\t<input id=\"config_banner_items_footer_popup_no_";
                echo ($context["item_row"] ?? null);
                echo "\" class=\"hide-radio\" type=\"radio\" name=\"banner_items_footer[";
                echo ($context["item_row"] ?? null);
                echo "][popup]\" value=\"0\" />
\t\t\t\t\t\t\t\t<label for=\"config_banner_items_footer_popup_no_";
                // line 498
                echo ($context["item_row"] ?? null);
                echo "\">";
                echo ($context["text_no"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t";
            }
            // line 500
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t\t<td class=\"text-right\">
\t\t\t\t<a class=\"btn btn-danger\" onclick=\"\$('#item-row";
            // line 505
            echo ($context["item_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_delete"] ?? null);
            echo "\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t</td>
\t\t</tr>
\t\t";
            // line 508
            $context["item_row"] = (($context["item_row"] ?? null) + 1);
            // line 509
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner_items_footer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 510
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td colspan=\"4\"></td>
\t\t\t<td class=\"text-right\"><a class=\"btn btn-primary\" onclick=\"addItem();\" data-toggle=\"tooltip\" title=\"";
        // line 514
        echo ($context["text_add"] ?? null);
        echo "\"><i class=\"fa fa-plus-circle\"></i></a></td>
\t\t</tr>
\t</tfoot>
</table>
<style>
\t#items .text-sel-icon {display: none;}
</style>
<script>
Sortable.create(banner_footer_drag, {
\thandle: '.sortable',
\tanimation: 150
});
var item_row = ";
        // line 526
        echo ($context["item_row"] ?? null);
        echo ";

function addItem() {
\thtml  = '<tr id=\"item-row' + item_row + '\">';
\thtml += '<td class=\"text-left sortable\" style=\"cursor:move;\"><i class=\"fa fa-arrows\" aria-hidden=\"true\"></i></td>';
\thtml += '<td class=\"text-center\">';

\thtml += '\t<div class=\"radio-group-text\" style=\"display: flex; margin-bottom: 5px;\">';
\thtml += '\t\t<input id=\"icon_type_0_' + item_row + '\" onchange=\"\$(this).parent().parent().find(\\'.show-icon\\').show().next().hide();\" class=\"hide-radio-text\" type=\"radio\" name=\"banner_items_footer[' + item_row + '][icon_type]\" value=\"0\" checked=\"checked\"/>';
\thtml += '\t\t<label for=\"icon_type_0_' + item_row + '\">";
        // line 535
        echo ($context["text_select_icon"] ?? null);
        echo "</label>';
\thtml += '\t\t<input id=\"icon_type_1_' + item_row + '\" onchange=\"\$(this).parent().parent().find(\\'.show-icon\\').hide().next().show();\" class=\"hide-radio-text\" type=\"radio\" name=\"banner_items_footer[' + item_row + '][icon_type]\" value=\"1\" />';
\thtml += '\t\t<label for=\"icon_type_1_' + item_row + '\">";
        // line 537
        echo ($context["ns_text_thumb"] ?? null);
        echo "</label>';
\thtml += '\t</div>';
\thtml += '\t<div class=\"show-icon\">';
\thtml += '\t\t<span style=\"min-width:40px;float:none;display:inline-block;margin-right:0px;\" class=\"icon_open\" id=\"banner_items_footer_' + item_row + '\" onclick=\"icon_fontawesome_popup(\$(this).attr(\\'id\\'))\">';
\thtml += '\t\t\t<i class=\"fa fa-opencart\"></i>';
\thtml += '\t\t</span>';
\thtml += '\t\t<input class=\"form-control\" type=\"hidden\" name=\"banner_items_footer[' + item_row + '][icon_image]\" value=\"\" />';
\thtml += '\t</div>';
\thtml += '\t<div class=\"show-image\" style=\"display:none;\">';
\thtml += '\t\t<a href=\"\" id=\"thumb-image-banner-footer' + item_row + '\" data-toggle=\"image\" class=\"img-thumbnail\">';
\thtml += '\t\t\t<img style=\"max-width: 32px;\" data-placeholder=\"";
        // line 547
        echo ($context["placeholder_small"] ?? null);
        echo "\" src=\"";
        echo ($context["placeholder_small"] ?? null);
        echo "\" alt=\"\"/>';
\thtml += '\t\t</a>';
\thtml += '\t\t<input type=\"hidden\" name=\"banner_items_footer[' + item_row + '][image]\" value=\"\" id=\"input-image-banner-footer' + item_row + '\" />';
\thtml += '\t</div>';

\thtml += '</td>';
\thtml += '<td class=\"text-left\">';
\t";
        // line 554
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 555
            echo "\thtml += '<div class=\"input-group pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = $context["language"]) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["code"] ?? null) : null);
            echo "/";
            echo (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = $context["language"]) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = $context["language"]) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["name"] ?? null) : null);
            echo "\" /></span>';
\thtml += '<input class=\"form-control\" type=\"text\" name=\"banner_items_footer[' + item_row + '][title][";
            // line 556
            echo (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = $context["language"]) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["language_id"] ?? null) : null);
            echo "]\" value=\"\" />';
\thtml += '</div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 559
        echo "\thtml += '</td>';
\thtml += '<td class=\"text-left\">';
\t";
        // line 561
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 562
            echo "\thtml += '<div class=\"input-group pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = $context["language"]) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["code"] ?? null) : null);
            echo "/";
            echo (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = $context["language"]) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = $context["language"]) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd["name"] ?? null) : null);
            echo "\" /></span>';
\thtml += '<input class=\"form-control\" type=\"text\" name=\"banner_items_footer[' + item_row + '][description][";
            // line 563
            echo (($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = $context["language"]) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e["language_id"] ?? null) : null);
            echo "]\" value=\"\" />';
\thtml += '</div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 566
        echo "\thtml += '</td>';
\thtml += '<td class=\"text-left\">';
\thtml += '\t";
        // line 568
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo "';
\thtml += '\t\t<div class=\"input-group pull-left\">';
\thtml += '\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 570
            echo (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = $context["language"]) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1["code"] ?? null) : null);
            echo "/";
            echo (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = $context["language"]) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = $context["language"]) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf["name"] ?? null) : null);
            echo "\" /></span>';
\thtml += '\t\t\t<input class=\"form-control\"  type=\"text\" name=\"banner_items_footer[' + item_row + '][link][";
            // line 571
            echo (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = $context["language"]) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b["language_id"] ?? null) : null);
            echo "]\" value=\"\" />';
\thtml += '\t\t</div>';
\thtml += '\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 573
        echo "';

\thtml += '<div class=\"form-group\">';
\thtml += '\t<label class=\"col-sm-12 text-center\">";
        // line 576
        echo ($context["text_open_banner_popup"] ?? null);
        echo "</label>';
\thtml += '\t<div class=\"col-sm-12 text-center\">';
\thtml += '\t<div class=\"radio-group-infinity\">';
\thtml += '\t\t<input id=\"config_banner_items_footer_popup_yes_' + item_row + '\" class=\"hide-radio\" type=\"radio\" name=\"banner_items_footer[' + item_row + '][popup]\" value=\"1\"/>';
\thtml += '\t\t<label for=\"config_banner_items_footer_popup_yes_' + item_row + '\">";
        // line 580
        echo ($context["text_yes"] ?? null);
        echo "</label>';
\thtml += '\t\t<input id=\"config_banner_items_footer_popup_no_' + item_row + '\" class=\"hide-radio\" type=\"radio\" name=\"banner_items_footer[' + item_row + '][popup]\" value=\"0\" checked=\"checked\" />';
\thtml += '\t\t<label for=\"config_banner_items_footer_popup_no_' + item_row + '\">";
        // line 582
        echo ($context["text_no"] ?? null);
        echo "</label>';
\thtml += '\t</div>';
\thtml += '\t</div>';
\thtml += '</div>';
\thtml += '</td>';
\thtml += '<td class=\"text-right\"><a class=\"btn btn-danger\" onclick=\"\$(\\'#item-row' + item_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 587
        echo ($context["text_delete"] ?? null);
        echo "\"><i class=\"fa fa-trash-o\"></i></a></td>';
\thtml += '</tr>';

\t\$('#items tbody').append(html);;

\titem_row++;
}
</script>
</div>
<div class=\"tab-pane\" id=\"tab-footer-column-setting\">

\t<div class=\"form-group\">
\t\t<div class=\"col-sm-12 title-setting\">";
        // line 599
        echo ($context["text_title_column_footer"] ?? null);
        echo "</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 602
        echo ($context["text_title_information"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-6 ns-input-group\">
\t\t\t";
        // line 604
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 605
            echo "\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t<img src=\"language/";
            // line 607
            echo (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = $context["language"]) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980["code"] ?? null) : null);
            echo "/";
            echo (($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = $context["language"]) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = $context["language"]) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3["name"] ?? null) : null);
            echo "\" /></span>
\t\t\t\t\t<span class=\"input-group-addon icon_open\" id=\"columnfn_1_";
            // line 608
            echo (($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = $context["language"]) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0["language_id"] ?? null) : null);
            echo "\" onclick=\"icon_fontawesome_popup(\$(this).attr('id'))\">
\t\t\t\t\t\t";
            // line 609
            echo ($context["text_select_icon"] ?? null);
            echo "
\t\t\t\t\t\t";
            // line 610
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "column_1", [], "array", false, true, false, 610), (($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = $context["language"]) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938["language_id"] ?? null) : null), [], "array", false, true, false, 610), "icon_image", [], "array", true, true, false, 610)) {
                // line 611
                echo "\t\t\t\t\t\t<i class=\"";
                echo (($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = (($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = (($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb = ($context["footer_column_setting_ns"] ?? null)) && is_array($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb) || $__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb instanceof ArrayAccess ? ($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb["column_1"] ?? null) : null)) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa[(($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c = $context["language"]) && is_array($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c) || $__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c instanceof ArrayAccess ? ($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3["icon_image"] ?? null) : null);
                echo "\"></i>
\t\t\t\t\t\t";
            }
            // line 613
            echo "\t\t\t\t\t</span>
\t\t\t\t\t<input class=\"form-control\" type=\"hidden\" name=\"footer_column_setting_ns[column_1][";
            // line 614
            echo (($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a = $context["language"]) && is_array($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a) || $__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a instanceof ArrayAccess ? ($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a["language_id"] ?? null) : null);
            echo "][icon_image]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "column_1", [], "array", false, true, false, 614), (($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 = $context["language"]) && is_array($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6) || $__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 instanceof ArrayAccess ? ($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6["language_id"] ?? null) : null), [], "array", false, true, false, 614), "icon_image", [], "array", true, true, false, 614)) ? ((($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b = (($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 = (($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f = ($context["footer_column_setting_ns"] ?? null)) && is_array($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f) || $__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f instanceof ArrayAccess ? ($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f["column_1"] ?? null) : null)) && is_array($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526) || $__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 instanceof ArrayAccess ? ($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526[(($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c = $context["language"]) && is_array($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c) || $__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c instanceof ArrayAccess ? ($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b) || $__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b instanceof ArrayAccess ? ($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b["icon_image"] ?? null) : null)) : (""));
            echo "\" />
\t\t\t\t\t<input type=\"text\" name=\"footer_column_setting_ns[column_1][";
            // line 615
            echo (($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 = $context["language"]) && is_array($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74) || $__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 instanceof ArrayAccess ? ($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74["language_id"] ?? null) : null);
            echo "][name_column]\" class=\"form-control\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "column_1", [], "array", false, true, false, 615), (($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff = $context["language"]) && is_array($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff) || $__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff instanceof ArrayAccess ? ($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff["language_id"] ?? null) : null), [], "array", false, true, false, 615), "name_column", [], "array", true, true, false, 615)) ? ((($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 = (($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 = (($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 = ($context["footer_column_setting_ns"] ?? null)) && is_array($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219) || $__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 instanceof ArrayAccess ? ($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219["column_1"] ?? null) : null)) && is_array($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5) || $__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 instanceof ArrayAccess ? ($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5[(($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 = $context["language"]) && is_array($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20) || $__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 instanceof ArrayAccess ? ($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918) || $__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 instanceof ArrayAccess ? ($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918["name_column"] ?? null) : null)) : (""));
            echo "\"></input>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 618
        echo "\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 621
        echo ($context["text_title_extra"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-6 ns-input-group\">
\t\t\t";
        // line 623
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 624
            echo "\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 625
            echo (($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 = $context["language"]) && is_array($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16) || $__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 instanceof ArrayAccess ? ($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16["code"] ?? null) : null);
            echo "/";
            echo (($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 = $context["language"]) && is_array($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0) || $__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 instanceof ArrayAccess ? ($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 = $context["language"]) && is_array($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1) || $__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 instanceof ArrayAccess ? ($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1["name"] ?? null) : null);
            echo "\" /></span>
\t\t\t\t\t<span class=\"input-group-addon icon_open\" id=\"columnfn_2_";
            // line 626
            echo (($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 = $context["language"]) && is_array($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008) || $__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 instanceof ArrayAccess ? ($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008["language_id"] ?? null) : null);
            echo "\" onclick=\"icon_fontawesome_popup(\$(this).attr('id'))\">
\t\t\t\t\t\t";
            // line 627
            echo ($context["text_select_icon"] ?? null);
            echo "
\t\t\t\t\t\t";
            // line 628
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "column_2", [], "array", false, true, false, 628), (($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 = $context["language"]) && is_array($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00) || $__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 instanceof ArrayAccess ? ($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00["language_id"] ?? null) : null), [], "array", false, true, false, 628), "icon_image", [], "array", true, true, false, 628)) {
                echo "<i class=\"";
                echo (($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 = (($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb = (($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde = ($context["footer_column_setting_ns"] ?? null)) && is_array($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde) || $__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde instanceof ArrayAccess ? ($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde["column_2"] ?? null) : null)) && is_array($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb) || $__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb instanceof ArrayAccess ? ($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb[(($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 = $context["language"]) && is_array($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5) || $__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 instanceof ArrayAccess ? ($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315) || $__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 instanceof ArrayAccess ? ($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315["icon_image"] ?? null) : null);
                echo "\"></i>";
            }
            // line 629
            echo "\t\t\t\t\t</span>
\t\t\t\t\t<input class=\"form-control\" type=\"hidden\" name=\"footer_column_setting_ns[column_2][";
            // line 630
            echo (($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f = $context["language"]) && is_array($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f) || $__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f instanceof ArrayAccess ? ($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f["language_id"] ?? null) : null);
            echo "][icon_image]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "column_2", [], "array", false, true, false, 630), (($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b = $context["language"]) && is_array($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b) || $__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b instanceof ArrayAccess ? ($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b["language_id"] ?? null) : null), [], "array", false, true, false, 630), "icon_image", [], "array", true, true, false, 630)) ? ((($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d = (($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d = (($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 = ($context["footer_column_setting_ns"] ?? null)) && is_array($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2) || $__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 instanceof ArrayAccess ? ($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2["column_2"] ?? null) : null)) && is_array($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d) || $__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d instanceof ArrayAccess ? ($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d[(($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 = $context["language"]) && is_array($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6) || $__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 instanceof ArrayAccess ? ($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d) || $__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d instanceof ArrayAccess ? ($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d["icon_image"] ?? null) : null)) : (""));
            echo "\" />
\t\t\t\t\t<input type=\"text\" name=\"footer_column_setting_ns[column_2][";
            // line 631
            echo (($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a = $context["language"]) && is_array($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a) || $__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a instanceof ArrayAccess ? ($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a["language_id"] ?? null) : null);
            echo "][name_column]\" class=\"form-control\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "column_2", [], "array", false, true, false, 631), (($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee = $context["language"]) && is_array($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee) || $__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee instanceof ArrayAccess ? ($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee["language_id"] ?? null) : null), [], "array", false, true, false, 631), "name_column", [], "array", true, true, false, 631)) ? ((($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 = (($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc = (($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a = ($context["footer_column_setting_ns"] ?? null)) && is_array($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a) || $__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a instanceof ArrayAccess ? ($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a["column_2"] ?? null) : null)) && is_array($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc) || $__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc instanceof ArrayAccess ? ($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc[(($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f = $context["language"]) && is_array($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f) || $__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f instanceof ArrayAccess ? ($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523) || $__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 instanceof ArrayAccess ? ($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523["name_column"] ?? null) : null)) : (""));
            echo "\"></input>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 634
        echo "\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 637
        echo ($context["text_title_account"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-6 ns-input-group\">
\t\t\t";
        // line 639
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 640
            echo "\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 641
            echo (($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d = $context["language"]) && is_array($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d) || $__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d instanceof ArrayAccess ? ($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d["code"] ?? null) : null);
            echo "/";
            echo (($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e = $context["language"]) && is_array($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e) || $__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e instanceof ArrayAccess ? ($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 = $context["language"]) && is_array($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81) || $__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 instanceof ArrayAccess ? ($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81["name"] ?? null) : null);
            echo "\" /></span>
\t\t\t\t\t<span class=\"input-group-addon icon_open\" id=\"columnfn_3";
            // line 642
            echo (($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d = $context["language"]) && is_array($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d) || $__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d instanceof ArrayAccess ? ($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d["language_id"] ?? null) : null);
            echo "\" onclick=\"icon_fontawesome_popup(\$(this).attr('id'))\">
\t\t\t\t\t\t";
            // line 643
            echo ($context["text_select_icon"] ?? null);
            echo "
\t\t\t\t\t\t";
            // line 644
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "column_3", [], "array", false, true, false, 644), (($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 = $context["language"]) && is_array($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786) || $__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 instanceof ArrayAccess ? ($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786["language_id"] ?? null) : null), [], "array", false, true, false, 644), "icon_image", [], "array", true, true, false, 644)) {
                echo "<i class=\"";
                echo (($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 = (($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 = (($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc = ($context["footer_column_setting_ns"] ?? null)) && is_array($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc) || $__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc instanceof ArrayAccess ? ($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc["column_3"] ?? null) : null)) && is_array($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1) || $__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 instanceof ArrayAccess ? ($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1[(($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6 = $context["language"]) && is_array($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6) || $__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6 instanceof ArrayAccess ? ($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4) || $__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 instanceof ArrayAccess ? ($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4["icon_image"] ?? null) : null);
                echo "\"></i>";
            }
            // line 645
            echo "\t\t\t\t\t</span>
\t\t\t\t\t<input class=\"form-control\" type=\"hidden\" name=\"footer_column_setting_ns[column_3][";
            // line 646
            echo (($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181 = $context["language"]) && is_array($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181) || $__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181 instanceof ArrayAccess ? ($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181["language_id"] ?? null) : null);
            echo "][icon_image]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "column_3", [], "array", false, true, false, 646), (($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9 = $context["language"]) && is_array($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9) || $__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9 instanceof ArrayAccess ? ($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9["language_id"] ?? null) : null), [], "array", false, true, false, 646), "icon_image", [], "array", true, true, false, 646)) ? ((($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af = (($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab = (($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94 = ($context["footer_column_setting_ns"] ?? null)) && is_array($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94) || $__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94 instanceof ArrayAccess ? ($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94["column_3"] ?? null) : null)) && is_array($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab) || $__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab instanceof ArrayAccess ? ($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab[(($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c = $context["language"]) && is_array($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c) || $__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c instanceof ArrayAccess ? ($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af) || $__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af instanceof ArrayAccess ? ($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af["icon_image"] ?? null) : null)) : (""));
            echo "\" />
\t\t\t\t\t<input type=\"text\" name=\"footer_column_setting_ns[column_3][";
            // line 647
            echo (($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd = $context["language"]) && is_array($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd) || $__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd instanceof ArrayAccess ? ($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd["language_id"] ?? null) : null);
            echo "][name_column]\" class=\"form-control\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "column_3", [], "array", false, true, false, 647), (($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0 = $context["language"]) && is_array($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0) || $__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0 instanceof ArrayAccess ? ($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0["language_id"] ?? null) : null), [], "array", false, true, false, 647), "name_column", [], "array", true, true, false, 647)) ? ((($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b = (($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070 = (($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf = ($context["footer_column_setting_ns"] ?? null)) && is_array($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf) || $__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf instanceof ArrayAccess ? ($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf["column_3"] ?? null) : null)) && is_array($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070) || $__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070 instanceof ArrayAccess ? ($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070[(($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e = $context["language"]) && is_array($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e) || $__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e instanceof ArrayAccess ? ($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b) || $__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b instanceof ArrayAccess ? ($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b["name_column"] ?? null) : null)) : (""));
            echo "\"></input>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 650
        echo "\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 653
        echo ($context["text_title_category"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-6 ns-input-group\">
\t\t\t";
        // line 655
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 656
            echo "\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 657
            echo (($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4 = $context["language"]) && is_array($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4) || $__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4 instanceof ArrayAccess ? ($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4["code"] ?? null) : null);
            echo "/";
            echo (($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825 = $context["language"]) && is_array($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825) || $__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825 instanceof ArrayAccess ? ($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308 = $context["language"]) && is_array($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308) || $__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308 instanceof ArrayAccess ? ($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308["name"] ?? null) : null);
            echo "\" /></span>
\t\t\t\t\t<span class=\"input-group-addon icon_open\" id=\"columnfn_4";
            // line 658
            echo (($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb = $context["language"]) && is_array($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb) || $__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb instanceof ArrayAccess ? ($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb["language_id"] ?? null) : null);
            echo "\" onclick=\"icon_fontawesome_popup(\$(this).attr('id'))\">
\t\t\t\t\t\t";
            // line 659
            echo ($context["text_select_icon"] ?? null);
            echo "
\t\t\t\t\t\t";
            // line 660
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "column_4", [], "array", false, true, false, 660), (($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7 = $context["language"]) && is_array($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7) || $__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7 instanceof ArrayAccess ? ($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7["language_id"] ?? null) : null), [], "array", false, true, false, 660), "icon_image", [], "array", true, true, false, 660)) {
                echo "<i class=\"";
                echo (($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9 = (($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446 = (($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d = ($context["footer_column_setting_ns"] ?? null)) && is_array($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d) || $__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d instanceof ArrayAccess ? ($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d["column_4"] ?? null) : null)) && is_array($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446) || $__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446 instanceof ArrayAccess ? ($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446[(($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e = $context["language"]) && is_array($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e) || $__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e instanceof ArrayAccess ? ($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9) || $__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9 instanceof ArrayAccess ? ($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9["icon_image"] ?? null) : null);
                echo "\"></i>";
            }
            // line 661
            echo "\t\t\t\t\t</span>
\t\t\t\t\t<input class=\"form-control\" type=\"hidden\" name=\"footer_column_setting_ns[column_4][";
            // line 662
            echo (($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f = $context["language"]) && is_array($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f) || $__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f instanceof ArrayAccess ? ($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f["language_id"] ?? null) : null);
            echo "][icon_image]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "column_4", [], "array", false, true, false, 662), (($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996 = $context["language"]) && is_array($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996) || $__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996 instanceof ArrayAccess ? ($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996["language_id"] ?? null) : null), [], "array", false, true, false, 662), "icon_image", [], "array", true, true, false, 662)) ? ((($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330 = (($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae = (($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409 = ($context["footer_column_setting_ns"] ?? null)) && is_array($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409) || $__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409 instanceof ArrayAccess ? ($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409["column_4"] ?? null) : null)) && is_array($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae) || $__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae instanceof ArrayAccess ? ($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae[(($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26 = $context["language"]) && is_array($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26) || $__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26 instanceof ArrayAccess ? ($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330) || $__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330 instanceof ArrayAccess ? ($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330["icon_image"] ?? null) : null)) : (""));
            echo "\" />
\t\t\t\t\t<input type=\"text\" name=\"footer_column_setting_ns[column_4][";
            // line 663
            echo (($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d = $context["language"]) && is_array($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d) || $__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d instanceof ArrayAccess ? ($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d["language_id"] ?? null) : null);
            echo "][name_column]\" class=\"form-control\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "column_4", [], "array", false, true, false, 663), (($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408 = $context["language"]) && is_array($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408) || $__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408 instanceof ArrayAccess ? ($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408["language_id"] ?? null) : null), [], "array", false, true, false, 663), "name_column", [], "array", true, true, false, 663)) ? ((($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0 = (($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b = (($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084 = ($context["footer_column_setting_ns"] ?? null)) && is_array($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084) || $__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084 instanceof ArrayAccess ? ($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084["column_4"] ?? null) : null)) && is_array($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b) || $__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b instanceof ArrayAccess ? ($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b[(($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb = $context["language"]) && is_array($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb) || $__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb instanceof ArrayAccess ? ($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0) || $__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0 instanceof ArrayAccess ? ($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0["name_column"] ?? null) : null)) : (""));
            echo "\"></input>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 666
        echo "\t\t</div>
\t</div>


\t<div class=\"form-group\">
\t\t<div class=\"col-sm-12 title-setting\">";
        // line 671
        echo ($context["text_title_extra"] ?? null);
        echo "</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 674
        echo ($context["text_link_manufacturer"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"footer_column_setting_ns[link_manufacturer]\" value=\"1\" ";
        // line 677
        echo ((twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "link_manufacturer", [], "array", true, true, false, 677)) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 682
        echo ($context["text_link_voucher"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"footer_column_setting_ns[link_voucher]\" value=\"1\" ";
        // line 685
        echo ((twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "link_voucher", [], "array", true, true, false, 685)) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 690
        echo ($context["text_link_affiliate"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"footer_column_setting_ns[link_affiliate]\" value=\"1\" ";
        // line 693
        echo ((twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "link_affiliate", [], "array", true, true, false, 693)) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 698
        echo ($context["text_link_special"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"footer_column_setting_ns[link_special]\" value=\"1\" ";
        // line 701
        echo ((twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "link_special", [], "array", true, true, false, 701)) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 706
        echo ($context["text_link_sitemap"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"footer_column_setting_ns[link_sitemap]\" value=\"1\" ";
        // line 709
        echo ((twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "link_sitemap", [], "array", true, true, false, 709)) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-12 title-setting\">";
        // line 714
        echo ($context["text_title_account"] ?? null);
        echo "</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 717
        echo ($context["text_link_account"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"footer_column_setting_ns[link_account]\" value=\"1\" ";
        // line 720
        echo ((twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "link_account", [], "array", true, true, false, 720)) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 725
        echo ($context["text_link_order"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"footer_column_setting_ns[link_order]\" value=\"1\" ";
        // line 728
        echo ((twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "link_order", [], "array", true, true, false, 728)) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 733
        echo ($context["text_link_wishlist"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"footer_column_setting_ns[link_wishlist]\" value=\"1\" ";
        // line 736
        echo ((twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "link_wishlist", [], "array", true, true, false, 736)) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 741
        echo ($context["text_link_newsletter"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"footer_column_setting_ns[link_newsletter]\" value=\"1\" ";
        // line 744
        echo ((twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "link_newsletter", [], "array", true, true, false, 744)) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 749
        echo ($context["text_link_contact"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"footer_column_setting_ns[link_contact]\" value=\"1\" ";
        // line 752
        echo ((twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "link_contact", [], "array", true, true, false, 752)) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 757
        echo ($context["text_link_return"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t\t<label><input type=\"checkbox\" name=\"footer_column_setting_ns[link_return]\" value=\"1\" ";
        // line 760
        echo ((twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), "link_return", [], "array", true, true, false, 760)) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-12 title-setting\">";
        // line 765
        echo ($context["text_random_link_fs"] ?? null);
        echo "</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 768
        echo ($context["text_links_fs"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9 ns-input-group\">
\t\t";
        // line 770
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 771
            echo "\t\t";
            $context["footer_links_row"] = 1;
            // line 772
            echo "\t\t<div class=\"footer_column_links_";
            echo (($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b = $context["language"]) && is_array($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b) || $__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b instanceof ArrayAccess ? ($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b["language_id"] ?? null) : null);
            echo "\">
\t\t";
            // line 773
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_column_setting_ns"] ?? null), (($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9 = $context["language"]) && is_array($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9) || $__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9 instanceof ArrayAccess ? ($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9["language_id"] ?? null) : null), [], "array", false, true, false, 773), "footer_links", [], "array", true, true, false, 773)) {
                // line 774
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698 = (($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f = ($context["footer_column_setting_ns"] ?? null)) && is_array($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f) || $__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f instanceof ArrayAccess ? ($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f[(($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1 = $context["language"]) && is_array($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1) || $__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1 instanceof ArrayAccess ? ($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698) || $__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698 instanceof ArrayAccess ? ($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698["footer_links"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                    // line 775
                    echo "\t\t<div class=\"input-group footer_links\">
\t\t\t<span class=\"input-group-addon\">
\t\t\t<img src=\"language/";
                    // line 777
                    echo (($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a = $context["language"]) && is_array($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a) || $__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a instanceof ArrayAccess ? ($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a["code"] ?? null) : null);
                    echo "/";
                    echo (($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c = $context["language"]) && is_array($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c) || $__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c instanceof ArrayAccess ? ($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c["code"] ?? null) : null);
                    echo ".png\" title=\"";
                    echo (($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7 = $context["language"]) && is_array($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7) || $__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7 instanceof ArrayAccess ? ($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7["name"] ?? null) : null);
                    echo "\" />
\t\t\t</span>
\t\t\t<input class=\"form-control\" type=\"text\" name=\"footer_column_setting_ns[";
                    // line 779
                    echo (($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351 = $context["language"]) && is_array($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351) || $__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351 instanceof ArrayAccess ? ($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351["language_id"] ?? null) : null);
                    echo "][footer_links][";
                    echo ($context["footer_links_row"] ?? null);
                    echo "][title]\" value=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["result"], "title", [], "array", true, true, false, 779)) {
                        echo (($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15 = $context["result"]) && is_array($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15) || $__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15 instanceof ArrayAccess ? ($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15["title"] ?? null) : null);
                    }
                    echo "\" placeholder=\"";
                    echo ($context["text_title_fs"] ?? null);
                    echo "#";
                    echo ($context["footer_links_row"] ?? null);
                    echo "\" />
\t\t\t<input class=\"form-control\" type=\"text\" name=\"footer_column_setting_ns[";
                    // line 780
                    echo (($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f = $context["language"]) && is_array($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f) || $__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f instanceof ArrayAccess ? ($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f["language_id"] ?? null) : null);
                    echo "][footer_links][";
                    echo ($context["footer_links_row"] ?? null);
                    echo "][link]\" value=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["result"], "link", [], "array", true, true, false, 780)) {
                        echo (($__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40 = $context["result"]) && is_array($__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40) || $__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40 instanceof ArrayAccess ? ($__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40["link"] ?? null) : null);
                    }
                    echo "\" placeholder=\"";
                    echo ($context["text_link_fs"] ?? null);
                    echo "#";
                    echo ($context["footer_links_row"] ?? null);
                    echo "\" />
\t\t\t<select class=\"form-control\" name=\"footer_column_setting_ns[";
                    // line 781
                    echo (($__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8 = $context["language"]) && is_array($__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8) || $__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8 instanceof ArrayAccess ? ($__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8["language_id"] ?? null) : null);
                    echo "][footer_links][";
                    echo ($context["footer_links_row"] ?? null);
                    echo "][column_link]\">';
\t\t\t\t<option value=\"4\" ";
                    // line 782
                    if (((($__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316 = $context["result"]) && is_array($__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316) || $__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316 instanceof ArrayAccess ? ($__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316["column_link"] ?? null) : null) == "4")) {
                        echo " ";
                        echo "selected=\"selected\"";
                        echo " ";
                    }
                    echo ">";
                    echo ($context["text_show_link_in"] ?? null);
                    echo " ";
                    echo ($context["text_title_category"] ?? null);
                    echo "</option>
\t\t\t\t<option value=\"2\" ";
                    // line 783
                    if (((($__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68 = $context["result"]) && is_array($__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68) || $__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68 instanceof ArrayAccess ? ($__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68["column_link"] ?? null) : null) == "2")) {
                        echo " ";
                        echo "selected=\"selected\"";
                        echo " ";
                    }
                    echo ">";
                    echo ($context["text_show_link_in"] ?? null);
                    echo " ";
                    echo ($context["text_title_extra"] ?? null);
                    echo "</option>
\t\t\t\t<option value=\"3\" ";
                    // line 784
                    if (((($__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3 = $context["result"]) && is_array($__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3) || $__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3 instanceof ArrayAccess ? ($__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3["column_link"] ?? null) : null) == "3")) {
                        echo " ";
                        echo "selected=\"selected\"";
                        echo " ";
                    }
                    echo ">";
                    echo ($context["text_show_link_in"] ?? null);
                    echo " ";
                    echo ($context["text_title_account"] ?? null);
                    echo "</option>
\t\t\t</select>
\t\t\t<span class=\"input-group-btn\"><a class=\"btn btn-danger\" onclick=\"\$(this).parent().parent().remove()\" data-toggle=\"tooltip\" title=\"";
                    // line 786
                    echo ($context["text_delete"] ?? null);
                    echo "\"><i class=\"fa fa-trash-o\"></i></a></span>

\t\t</div>
\t\t";
                    // line 789
                    $context["footer_links_row"] = (($context["footer_links_row"] ?? null) + 1);
                    // line 790
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 791
                echo "\t\t";
            }
            // line 792
            echo "\t\t<input type=\"hidden\" id=\"footer-links-all-column-row-number-";
            echo (($__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267 = $context["language"]) && is_array($__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267) || $__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267 instanceof ArrayAccess ? ($__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267["language_id"] ?? null) : null);
            echo "\" value=\"";
            echo ($context["footer_links_row"] ?? null);
            echo "\">
\t\t</div>
\t\t<div style=\"margin-top:10px;\">
\t\t<a href=\"javascript:void(0);\" onclick=\"addFooterLinksAllColumn('";
            // line 795
            echo (($__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d = $context["language"]) && is_array($__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d) || $__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d instanceof ArrayAccess ? ($__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d["language_id"] ?? null) : null);
            echo "','";
            echo (($__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f = $context["language"]) && is_array($__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f) || $__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f instanceof ArrayAccess ? ($__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f["code"] ?? null) : null);
            echo "');\" class=\"btn btn-primary\">";
            echo ($context["text_add_link_for"] ?? null);
            echo " <img src=\"language/";
            echo (($__internal_a87a332bdd9c4920fcff67e0a0fbf2338bf0fc502dc18935fe14cb0266f92768 = $context["language"]) && is_array($__internal_a87a332bdd9c4920fcff67e0a0fbf2338bf0fc502dc18935fe14cb0266f92768) || $__internal_a87a332bdd9c4920fcff67e0a0fbf2338bf0fc502dc18935fe14cb0266f92768 instanceof ArrayAccess ? ($__internal_a87a332bdd9c4920fcff67e0a0fbf2338bf0fc502dc18935fe14cb0266f92768["code"] ?? null) : null);
            echo "/";
            echo (($__internal_dc4207045c42a84741452c486f47b9a66b720393ce7199ed6472faf87641355a = $context["language"]) && is_array($__internal_dc4207045c42a84741452c486f47b9a66b720393ce7199ed6472faf87641355a) || $__internal_dc4207045c42a84741452c486f47b9a66b720393ce7199ed6472faf87641355a instanceof ArrayAccess ? ($__internal_dc4207045c42a84741452c486f47b9a66b720393ce7199ed6472faf87641355a["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_70cdb879b02cf9ec1d6611c4992631759ee2013ffb59f0362533ea6cd4a4af18 = $context["language"]) && is_array($__internal_70cdb879b02cf9ec1d6611c4992631759ee2013ffb59f0362533ea6cd4a4af18) || $__internal_70cdb879b02cf9ec1d6611c4992631759ee2013ffb59f0362533ea6cd4a4af18 instanceof ArrayAccess ? ($__internal_70cdb879b02cf9ec1d6611c4992631759ee2013ffb59f0362533ea6cd4a4af18["name"] ?? null) : null);
            echo "\" /></a></div>
\t\t<hr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 798
        echo "\t</div>
\t</div>
\t<script>
function addFooterLinksAllColumn(lang_id,code) {
\tvar footer_links_row = \$('#footer-links-all-column-row-number-'+ lang_id).val();
\t\$('#footer-links-all-column-row-number-'+ lang_id).val(parseInt(footer_links_row) + 1);
\thtml  = '';
\thtml += '<div class=\"input-group footer_links\">';
\thtml += '<span class=\"input-group-addon\"><img src=\"language/'+ code +'/'+ code +'.png\" /></span>';
\thtml += '<input class=\"form-control\" type=\"text\" name=\"footer_column_setting_ns['+lang_id+'][footer_links]['+footer_links_row+'][title]\" value=\"\" placeholder=\"";
        // line 807
        echo ($context["text_title_fs"] ?? null);
        echo " #'+footer_links_row+'\" />';
\thtml += '<input class=\"form-control\" type=\"text\" name=\"footer_column_setting_ns['+lang_id+'][footer_links]['+footer_links_row+'][link]\" value=\"\" placeholder=\"";
        // line 808
        echo ($context["text_link_fs"] ?? null);
        echo " #'+footer_links_row+'\" />';
\thtml += '<select class=\"form-control\" name=\"footer_column_setting_ns['+lang_id+'][footer_links]['+footer_links_row+'][column_link]\">';
\thtml += '<option value=\"4\" selected=\"selected\">";
        // line 810
        echo ($context["text_show_link_in"] ?? null);
        echo " ";
        echo ($context["text_title_category"] ?? null);
        echo "</option>';
\thtml += '<option value=\"2\">";
        // line 811
        echo ($context["text_show_link_in"] ?? null);
        echo " ";
        echo ($context["text_title_extra"] ?? null);
        echo "</option>';
\thtml += '<option value=\"3\">";
        // line 812
        echo ($context["text_show_link_in"] ?? null);
        echo " ";
        echo ($context["text_title_account"] ?? null);
        echo "</option>';
\thtml += '</select>';
\thtml += '<span class=\"input-group-btn\"><a class=\"btn btn-danger\" onclick=\"\$(this).parent().parent().remove()\" data-toggle=\"tooltip\" title=\"";
        // line 814
        echo ($context["text_delete"] ?? null);
        echo "\"><i class=\"fa fa-trash-o\"></i></a></span>';
\thtml += '</div>';

\t\$('.footer_column_links_'+lang_id).append(html);
}
</script>
</div>
<div class=\"tab-pane\" id=\"tab-social-column-setting\">

<div class=\"form-group\">
\t<div class=\"col-sm-12 title-setting\">";
        // line 824
        echo ($context["text_social_link_header"] ?? null);
        echo "</div>
</div>
<div class=\"form-group\">
\t<div class=\"col-sm-12 ns-input-group\">
\t<div id=\"social_footer_icon_link\">
\t\t";
        // line 829
        if (($context["config_social_footer"] ?? null)) {
            // line 830
            echo "\t\t\t";
            $context["social_row_footer"] = 0;
            // line 831
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["config_social_array_footer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["config_social_footer"]) {
                // line 832
                echo "\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon image_phone\">
\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-social-footer";
                // line 834
                echo ($context["social_row_footer"] ?? null);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t<img data-placeholder=\"";
                // line 835
                echo ($context["no_image_phone"] ?? null);
                echo "\" src=\"";
                echo (($__internal_9aadb88279782a1b4d289d7bb548995bfd16cca473494d531f0f60860c3b52ea = $context["config_social_footer"]) && is_array($__internal_9aadb88279782a1b4d289d7bb548995bfd16cca473494d531f0f60860c3b52ea) || $__internal_9aadb88279782a1b4d289d7bb548995bfd16cca473494d531f0f60860c3b52ea instanceof ArrayAccess ? ($__internal_9aadb88279782a1b4d289d7bb548995bfd16cca473494d531f0f60860c3b52ea["thumb_footer_social"] ?? null) : null);
                echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"config_social_footer[";
                // line 836
                echo ($context["social_row_footer"] ?? null);
                echo "][image_footer_social]\" value=\"";
                echo (($__internal_959b182e30208310347773cbfa5488d1029c8453da4b2f37a3e5b73d2741d052 = $context["config_social_footer"]) && is_array($__internal_959b182e30208310347773cbfa5488d1029c8453da4b2f37a3e5b73d2741d052) || $__internal_959b182e30208310347773cbfa5488d1029c8453da4b2f37a3e5b73d2741d052 instanceof ArrayAccess ? ($__internal_959b182e30208310347773cbfa5488d1029c8453da4b2f37a3e5b73d2741d052["image_footer_social"] ?? null) : null);
                echo "\" id=\"input-image-social-footer";
                echo ($context["social_row_footer"] ?? null);
                echo "\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"input-group-addon icon_open\" id=\"social_footer_icon_";
                // line 838
                echo ($context["social_row_footer"] ?? null);
                echo "\" onclick=\"icon_fontawesome_popup(\$(this).attr('id'))\">
\t\t\t\t\t\t\t";
                // line 839
                echo ($context["text_select_icon"] ?? null);
                echo "
\t\t\t\t\t\t\t";
                // line 840
                if (twig_get_attribute($this->env, $this->source, $context["config_social_footer"], "social_icon_footer", [], "array", true, true, false, 840)) {
                    echo "<i class=\"";
                    echo (($__internal_b9462c1f56277055090818f5a4daafd35ea82a3e856d1b2071bb5db5f2435766 = $context["config_social_footer"]) && is_array($__internal_b9462c1f56277055090818f5a4daafd35ea82a3e856d1b2071bb5db5f2435766) || $__internal_b9462c1f56277055090818f5a4daafd35ea82a3e856d1b2071bb5db5f2435766 instanceof ArrayAccess ? ($__internal_b9462c1f56277055090818f5a4daafd35ea82a3e856d1b2071bb5db5f2435766["social_icon_footer"] ?? null) : null);
                    echo "\"></i>";
                }
                // line 841
                echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input class=\"form-control\" type=\"hidden\" name=\"config_social_footer[";
                // line 842
                echo ($context["social_row_footer"] ?? null);
                echo "][social_icon_footer]\" value=\"";
                echo (($__internal_0bc5bd0f7070e93681192084f4740838129e7147f243e5ed200b32e12e562b16 = $context["config_social_footer"]) && is_array($__internal_0bc5bd0f7070e93681192084f4740838129e7147f243e5ed200b32e12e562b16) || $__internal_0bc5bd0f7070e93681192084f4740838129e7147f243e5ed200b32e12e562b16 instanceof ArrayAccess ? ($__internal_0bc5bd0f7070e93681192084f4740838129e7147f243e5ed200b32e12e562b16["social_icon_footer"] ?? null) : null);
                echo "\" />
\t\t\t\t\t\t<input class=\"form-control color\" placeholder=\"";
                // line 843
                echo ($context["text_bg_hover_icon"] ?? null);
                echo "\" type=\"text\"  name=\"config_social_footer[";
                echo ($context["social_row_footer"] ?? null);
                echo "][bg_hover_icon]\" value=\"";
                echo (($__internal_0618bff272785d9ca218bcde12692d8b010ba60a51d81b60287249d9ff8d7998 = $context["config_social_footer"]) && is_array($__internal_0618bff272785d9ca218bcde12692d8b010ba60a51d81b60287249d9ff8d7998) || $__internal_0618bff272785d9ca218bcde12692d8b010ba60a51d81b60287249d9ff8d7998 instanceof ArrayAccess ? ($__internal_0618bff272785d9ca218bcde12692d8b010ba60a51d81b60287249d9ff8d7998["bg_hover_icon"] ?? null) : null);
                echo "\"/>
\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"";
                // line 844
                echo ($context["text_link_social"] ?? null);
                echo "\" type=\"text\"  name=\"config_social_footer[";
                echo ($context["social_row_footer"] ?? null);
                echo "][social_link_footer]\" value=\"";
                echo (($__internal_4c854f7a9d11d0069289b2df19f3ea555711707d46b9293dd1465b5eae1edc8d = $context["config_social_footer"]) && is_array($__internal_4c854f7a9d11d0069289b2df19f3ea555711707d46b9293dd1465b5eae1edc8d) || $__internal_4c854f7a9d11d0069289b2df19f3ea555711707d46b9293dd1465b5eae1edc8d instanceof ArrayAccess ? ($__internal_4c854f7a9d11d0069289b2df19f3ea555711707d46b9293dd1465b5eae1edc8d["social_link_footer"] ?? null) : null);
                echo "\"/>
\t\t\t\t\t\t<span class=\"input-group-btn\"><a class=\"btn btn-danger\" onclick=\"\$(this).parent().parent().remove()\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
                // line 845
                echo ($context["text_delete"] ?? null);
                echo "\"><i class=\"fa fa-trash-o\"></i></a></span>
\t\t\t\t\t</div>
\t\t\t\t";
                // line 847
                $context["social_row_footer"] = (($context["social_row_footer"] ?? null) + 1);
                // line 848
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config_social_footer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 849
            echo "\t\t";
        } else {
            // line 850
            echo "\t\t\t";
            $context["social_row_footer"] = 0;
            // line 851
            echo "\t\t";
        }
        // line 852
        echo "\t\t</div>
\t\t<div style=\"margin-top:10px;\">
\t\t\t<a onclick=\"addsocialFooter();\" class=\"btn btn-primary\">";
        // line 854
        echo ($context["text_add"] ?? null);
        echo "</a>
\t\t</div>
\t</div>
</div>
</div>
<div class=\"tab-pane\" id=\"tab-payment-column-setting\">

<div class=\"form-group\">
\t<div class=\"col-sm-12 title-setting\">";
        // line 862
        echo ($context["text_payments_method"] ?? null);
        echo "</div>
</div>
<div class=\"form-group\">
\t<div class=\"col-sm-12 ns-input-group\">
\t\t\t";
        // line 866
        $context["payments_row_footer"] = 0;
        // line 867
        echo "\t\t\t<div id=\"payments_footer_icon_link\">
\t\t\t";
        // line 868
        if (($context["config_payments_footer"] ?? null)) {
            // line 869
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["config_payments_array_footer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["config_payments_footer"]) {
                // line 870
                echo "\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon image_phone\">
\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-payments-footer";
                // line 872
                echo ($context["payments_row_footer"] ?? null);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t<img data-placeholder=\"";
                // line 873
                echo ($context["no_image_phone"] ?? null);
                echo "\" src=\"";
                echo (($__internal_47295a5b064451f3b0c4eed397e0efce1d611c4efe3f296b9c01ee7f8e94b4bb = $context["config_payments_footer"]) && is_array($__internal_47295a5b064451f3b0c4eed397e0efce1d611c4efe3f296b9c01ee7f8e94b4bb) || $__internal_47295a5b064451f3b0c4eed397e0efce1d611c4efe3f296b9c01ee7f8e94b4bb instanceof ArrayAccess ? ($__internal_47295a5b064451f3b0c4eed397e0efce1d611c4efe3f296b9c01ee7f8e94b4bb["icon_footer_payments"] ?? null) : null);
                echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"config_payments_footer[";
                // line 874
                echo ($context["payments_row_footer"] ?? null);
                echo "][image_footer_payments]\" value=\"";
                echo (($__internal_76887dd057b58ee524dd12da71c28991ba8e6b511ce7ddd7c4b24e56dd53f584 = $context["config_payments_footer"]) && is_array($__internal_76887dd057b58ee524dd12da71c28991ba8e6b511ce7ddd7c4b24e56dd53f584) || $__internal_76887dd057b58ee524dd12da71c28991ba8e6b511ce7ddd7c4b24e56dd53f584 instanceof ArrayAccess ? ($__internal_76887dd057b58ee524dd12da71c28991ba8e6b511ce7ddd7c4b24e56dd53f584["image_footer_payments"] ?? null) : null);
                echo "\" id=\"input-image-payments-footer";
                echo ($context["payments_row_footer"] ?? null);
                echo "\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"";
                // line 876
                echo ($context["text_link_social"] ?? null);
                echo "\" type=\"text\"  name=\"config_payments_footer[";
                echo ($context["payments_row_footer"] ?? null);
                echo "][payments_link_footer]\" value=\"";
                echo (($__internal_66a8ad5333bed581c6de7652503f12928c838cf5f4f0a3cae03a065039303fb4 = $context["config_payments_footer"]) && is_array($__internal_66a8ad5333bed581c6de7652503f12928c838cf5f4f0a3cae03a065039303fb4) || $__internal_66a8ad5333bed581c6de7652503f12928c838cf5f4f0a3cae03a065039303fb4 instanceof ArrayAccess ? ($__internal_66a8ad5333bed581c6de7652503f12928c838cf5f4f0a3cae03a065039303fb4["payments_link_footer"] ?? null) : null);
                echo "\"/>
\t\t\t\t\t\t<span class=\"input-group-btn\"><a class=\"btn btn-danger\" onclick=\"\$(this).parent().parent().remove()\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
                // line 877
                echo ($context["text_delete"] ?? null);
                echo "\"><i class=\"fa fa-trash-o\"></i></a></span>
\t\t\t\t\t</div>
\t\t\t\t";
                // line 879
                $context["payments_row_footer"] = (($context["payments_row_footer"] ?? null) + 1);
                // line 880
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config_payments_footer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 881
            echo "\t\t";
        } else {
            // line 882
            echo "\t\t\t";
            $context["payments_row_footer"] = 0;
            // line 883
            echo "\t\t";
        }
        // line 884
        echo "\t\t</div>
\t\t<div style=\"margin-top:10px;\">
\t\t\t<a onclick=\"addPaymentsFooter();\" class=\"btn btn-primary\">";
        // line 886
        echo ($context["text_add"] ?? null);
        echo "</a>
\t\t</div>
\t</div>
</div>
</div>
<script>
var phone_row_footer = ";
        // line 892
        echo ($context["phone_row_footer"] ?? null);
        echo ";
function addPhoneFooter() {
\thtml  = '<div class=\"input-group\">';
\thtml += '\t<span class=\"input-group-addon cs-pad-addon\" style=\"cursor:move;\"><i class=\"fa fa-arrows\" aria-hidden=\"true\"></i></span>';
\thtml += '\t<span class=\"input-group-addon icon_open\" id=\"phones_footer_icon_'+ phone_row_footer +'\" onclick=\"icon_fontawesome_popup(\$(this).attr(\\'id\\'))\">';
\thtml += '\t";
        // line 897
        echo ($context["text_select_icon"] ?? null);
        echo "<i class=\"fa fa-opencart\"></i></span>';
\thtml += '\t<input class=\"form-control\" type=\"hidden\" name=\"config_phones_footer['+ phone_row_footer +'][icon_footer_phone]\" value=\"\" />';
\thtml += '\t<div class=\"group-ta\">';
\t\t\t\t";
        // line 900
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 901
            echo "\thtml += '\t\t<div class=\"input-group-dflex\">';
\thtml += '\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 902
            echo (($__internal_2628c9615b3426b7c5874694384b0df9e9f6ab7c6f879785f124f6e3a2a94777 = $context["language"]) && is_array($__internal_2628c9615b3426b7c5874694384b0df9e9f6ab7c6f879785f124f6e3a2a94777) || $__internal_2628c9615b3426b7c5874694384b0df9e9f6ab7c6f879785f124f6e3a2a94777 instanceof ArrayAccess ? ($__internal_2628c9615b3426b7c5874694384b0df9e9f6ab7c6f879785f124f6e3a2a94777["code"] ?? null) : null);
            echo "/";
            echo (($__internal_e92494c1e9346ed6fde9c084e4ea58556c55d398ce6060d0eee0fc3b6a9957d0 = $context["language"]) && is_array($__internal_e92494c1e9346ed6fde9c084e4ea58556c55d398ce6060d0eee0fc3b6a9957d0) || $__internal_e92494c1e9346ed6fde9c084e4ea58556c55d398ce6060d0eee0fc3b6a9957d0 instanceof ArrayAccess ? ($__internal_e92494c1e9346ed6fde9c084e4ea58556c55d398ce6060d0eee0fc3b6a9957d0["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_bfdb517baffa5879712c366e54201851165d2f75a825d71b872b9ee3500d3727 = $context["language"]) && is_array($__internal_bfdb517baffa5879712c366e54201851165d2f75a825d71b872b9ee3500d3727) || $__internal_bfdb517baffa5879712c366e54201851165d2f75a825d71b872b9ee3500d3727 instanceof ArrayAccess ? ($__internal_bfdb517baffa5879712c366e54201851165d2f75a825d71b872b9ee3500d3727["name"] ?? null) : null);
            echo "\" /></span>';
\thtml += '\t\t\t<textarea placeholder=\"";
            // line 903
            echo ($context["text_type_fields"] ?? null);
            echo "\" class=\"form-control textarea-no-resize\" type=\"text\" name=\"config_phones_footer['+ phone_row_footer +'][type][";
            echo (($__internal_407bb9aeafcd6398c87e06fb1089319d79808a6f218ff275a7e1ac05b4977834 = $context["language"]) && is_array($__internal_407bb9aeafcd6398c87e06fb1089319d79808a6f218ff275a7e1ac05b4977834) || $__internal_407bb9aeafcd6398c87e06fb1089319d79808a6f218ff275a7e1ac05b4977834 instanceof ArrayAccess ? ($__internal_407bb9aeafcd6398c87e06fb1089319d79808a6f218ff275a7e1ac05b4977834["language_id"] ?? null) : null);
            echo "]\"></textarea>';
\thtml += '\t\t\t<textarea class=\"form-control textarea-no-resize\" type=\"text\" name=\"config_phones_footer['+ phone_row_footer +'][phone_footer][";
            // line 904
            echo (($__internal_30f275f6b43b69c3ccb2c7888a55c741eab0a2c2a37f330377bee8710af1ecc5 = $context["language"]) && is_array($__internal_30f275f6b43b69c3ccb2c7888a55c741eab0a2c2a37f330377bee8710af1ecc5) || $__internal_30f275f6b43b69c3ccb2c7888a55c741eab0a2c2a37f330377bee8710af1ecc5 instanceof ArrayAccess ? ($__internal_30f275f6b43b69c3ccb2c7888a55c741eab0a2c2a37f330377bee8710af1ecc5["language_id"] ?? null) : null);
            echo "]\"></textarea>';
\thtml += '\t\t</div>';
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 907
        echo "\thtml += '\t</div>';
\thtml += '\t<span class=\"input-group-addon cs-pad-addon\"><a class=\"btn btn-danger\" onclick=\"\$(this).parent().parent().remove()\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 908
        echo ($context["text_delete"] ?? null);
        echo "\"><i class=\"fa fa-trash-o\"></i></a></span>';
\thtml += '\t</div>';
\t\$('#phone_footer').append(html);
\tphone_row_footer++;
}

var social_row_footer = ";
        // line 914
        echo ($context["social_row_footer"] ?? null);
        echo ";
function addsocialFooter() {
\thtml  = '<div class=\"input-group social-ginput\">';
\thtml += '\t<span class=\"input-group-addon image_phone\">';
\thtml += '  \t\t<a href=\"\" id=\"thumb-image-social-footer'+ social_row_footer +'\" data-toggle=\"image\" class=\"img-thumbnail\">';
\thtml += '  \t\t<img data-placeholder=\"";
        // line 919
        echo ($context["no_image_phone"] ?? null);
        echo "\" src=\"";
        echo ($context["no_image_phone"] ?? null);
        echo "\" alt=\"\"/></a>';
\thtml += '  \t\t<input type=\"hidden\" name=\"config_social_footer['+ social_row_footer +'][image_footer_social]\" value=\"\" id=\"input-image-social-footer-'+ social_row_footer +'\" />';
\thtml += '\t</span>';

\thtml += '\t<span class=\"input-group-addon icon_open\" id=\"social_footer_icon_'+ social_row_footer +'\" onclick=\"icon_fontawesome_popup(\$(this).attr(\\'id\\'))\">";
        // line 923
        echo ($context["text_select_icon"] ?? null);
        echo "</span>';
\thtml += '\t\t<input class=\"form-control\" type=\"hidden\" name=\"config_social_footer['+ social_row_footer +'][social_icon_footer]\" value=\"\" />';
\thtml += '\t\t<input class=\"form-control color\" placeholder=\"";
        // line 925
        echo ($context["text_bg_hover_icon"] ?? null);
        echo "\" type=\"text\"  name=\"config_social_footer['+ social_row_footer +'][bg_hover_icon]\" value=\"\"/>';


\thtml += '\t<input class=\"form-control\" placeholder=\"";
        // line 928
        echo ($context["text_link_social"] ?? null);
        echo "\" type=\"text\"  name=\"config_social_footer['+ social_row_footer +'][social_link_footer]\" value=\"\"/>';
\thtml += '\t<span class=\"input-group-btn\"><a class=\"btn btn-danger\" onclick=\"\$(this).parent().parent().remove()\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 929
        echo ($context["text_delete"] ?? null);
        echo "\"><i class=\"fa fa-trash-o\"></i></a></span>';
\thtml += '</div>';


\t\$('#social_footer_icon_link').append(html);
\tjscolor.init();
\tsocial_row_footer++;
}

var payments_row_footer = ";
        // line 938
        echo ($context["payments_row_footer"] ?? null);
        echo ";
function addPaymentsFooter() {
\thtml  = '<div class=\"input-group\">';
\thtml += '\t<span class=\"input-group-addon image_phone\">';
\thtml += '  \t\t<a href=\"\" id=\"thumb-image-payments-footer'+ payments_row_footer +'\" data-toggle=\"image\" class=\"img-thumbnail\">';
\thtml += '  \t\t<img data-placeholder=\"";
        // line 943
        echo ($context["no_image_phone"] ?? null);
        echo "\" src=\"";
        echo ($context["no_image_phone"] ?? null);
        echo "\" alt=\"\"/></a>';
\thtml += '  \t\t<input type=\"hidden\" name=\"config_payments_footer['+ payments_row_footer +'][image_footer_payments]\" value=\"\" id=\"input-image-payments-footer-'+ payments_row_footer +'\" />';
\thtml += '\t</span>';
\thtml += '\t<input class=\"form-control\" placeholder=\"";
        // line 946
        echo ($context["text_link_social"] ?? null);
        echo "\" type=\"text\"  name=\"config_payments_footer['+ payments_row_footer +'][payments_link_footer]\" value=\"\"/>';
\thtml += '\t<span class=\"input-group-btn\"><a class=\"btn btn-danger\" onclick=\"\$(this).parent().parent().remove()\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 947
        echo ($context["text_delete"] ?? null);
        echo "\"><i class=\"fa fa-trash-o\"></i></a></span>';
\thtml += '</div>';
\t\$('#payments_footer_icon_link').append(html);
\tpayments_row_footer++;
}
</script>

";
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop/setting_footer_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2461 => 947,  2457 => 946,  2449 => 943,  2441 => 938,  2429 => 929,  2425 => 928,  2419 => 925,  2414 => 923,  2405 => 919,  2397 => 914,  2388 => 908,  2385 => 907,  2376 => 904,  2370 => 903,  2362 => 902,  2359 => 901,  2355 => 900,  2349 => 897,  2341 => 892,  2332 => 886,  2328 => 884,  2325 => 883,  2322 => 882,  2319 => 881,  2313 => 880,  2311 => 879,  2306 => 877,  2298 => 876,  2289 => 874,  2283 => 873,  2279 => 872,  2275 => 870,  2270 => 869,  2268 => 868,  2265 => 867,  2263 => 866,  2256 => 862,  2245 => 854,  2241 => 852,  2238 => 851,  2235 => 850,  2232 => 849,  2226 => 848,  2224 => 847,  2219 => 845,  2211 => 844,  2203 => 843,  2197 => 842,  2194 => 841,  2188 => 840,  2184 => 839,  2180 => 838,  2171 => 836,  2165 => 835,  2161 => 834,  2157 => 832,  2152 => 831,  2149 => 830,  2147 => 829,  2139 => 824,  2126 => 814,  2119 => 812,  2113 => 811,  2107 => 810,  2102 => 808,  2098 => 807,  2087 => 798,  2068 => 795,  2059 => 792,  2056 => 791,  2050 => 790,  2048 => 789,  2042 => 786,  2029 => 784,  2017 => 783,  2005 => 782,  1999 => 781,  1985 => 780,  1971 => 779,  1962 => 777,  1958 => 775,  1953 => 774,  1951 => 773,  1946 => 772,  1943 => 771,  1939 => 770,  1934 => 768,  1928 => 765,  1920 => 760,  1914 => 757,  1906 => 752,  1900 => 749,  1892 => 744,  1886 => 741,  1878 => 736,  1872 => 733,  1864 => 728,  1858 => 725,  1850 => 720,  1844 => 717,  1838 => 714,  1830 => 709,  1824 => 706,  1816 => 701,  1810 => 698,  1802 => 693,  1796 => 690,  1788 => 685,  1782 => 682,  1774 => 677,  1768 => 674,  1762 => 671,  1755 => 666,  1744 => 663,  1738 => 662,  1735 => 661,  1729 => 660,  1725 => 659,  1721 => 658,  1713 => 657,  1710 => 656,  1706 => 655,  1701 => 653,  1696 => 650,  1685 => 647,  1679 => 646,  1676 => 645,  1670 => 644,  1666 => 643,  1662 => 642,  1654 => 641,  1651 => 640,  1647 => 639,  1642 => 637,  1637 => 634,  1626 => 631,  1620 => 630,  1617 => 629,  1611 => 628,  1607 => 627,  1603 => 626,  1595 => 625,  1592 => 624,  1588 => 623,  1583 => 621,  1578 => 618,  1567 => 615,  1561 => 614,  1558 => 613,  1552 => 611,  1550 => 610,  1546 => 609,  1542 => 608,  1534 => 607,  1530 => 605,  1526 => 604,  1521 => 602,  1515 => 599,  1500 => 587,  1492 => 582,  1487 => 580,  1480 => 576,  1475 => 573,  1466 => 571,  1458 => 570,  1451 => 568,  1447 => 566,  1438 => 563,  1429 => 562,  1425 => 561,  1421 => 559,  1412 => 556,  1403 => 555,  1399 => 554,  1387 => 547,  1374 => 537,  1369 => 535,  1357 => 526,  1342 => 514,  1336 => 510,  1330 => 509,  1328 => 508,  1320 => 505,  1313 => 500,  1306 => 498,  1299 => 497,  1292 => 495,  1285 => 494,  1282 => 493,  1275 => 491,  1268 => 490,  1261 => 488,  1254 => 487,  1252 => 486,  1246 => 483,  1243 => 482,  1230 => 479,  1222 => 478,  1219 => 477,  1215 => 476,  1211 => 474,  1198 => 471,  1190 => 470,  1187 => 469,  1183 => 468,  1179 => 466,  1166 => 463,  1158 => 462,  1155 => 461,  1151 => 460,  1140 => 456,  1133 => 454,  1129 => 453,  1123 => 452,  1116 => 450,  1113 => 449,  1105 => 448,  1101 => 447,  1095 => 446,  1088 => 444,  1078 => 443,  1072 => 442,  1062 => 441,  1054 => 437,  1049 => 436,  1047 => 435,  1039 => 430,  1035 => 429,  1031 => 428,  1027 => 427,  1018 => 421,  1013 => 418,  1002 => 415,  993 => 414,  989 => 413,  984 => 411,  978 => 407,  973 => 405,  970 => 404,  965 => 402,  962 => 401,  959 => 400,  954 => 398,  951 => 397,  946 => 395,  943 => 394,  941 => 393,  935 => 390,  929 => 387,  917 => 378,  900 => 364,  890 => 356,  879 => 354,  871 => 353,  865 => 352,  860 => 350,  854 => 346,  845 => 344,  837 => 343,  831 => 342,  826 => 340,  817 => 334,  802 => 322,  793 => 316,  784 => 310,  776 => 305,  751 => 282,  745 => 281,  743 => 280,  738 => 277,  719 => 274,  710 => 273,  706 => 272,  701 => 270,  696 => 267,  683 => 264,  674 => 263,  670 => 262,  665 => 260,  656 => 256,  651 => 254,  634 => 250,  613 => 244,  608 => 242,  599 => 238,  594 => 236,  585 => 232,  580 => 230,  574 => 228,  571 => 227,  568 => 226,  565 => 225,  562 => 224,  560 => 223,  557 => 222,  554 => 221,  551 => 220,  547 => 219,  543 => 217,  541 => 216,  532 => 213,  526 => 212,  524 => 211,  516 => 208,  512 => 207,  508 => 206,  503 => 205,  498 => 204,  496 => 203,  489 => 199,  482 => 195,  477 => 193,  470 => 189,  465 => 187,  459 => 184,  456 => 183,  450 => 181,  448 => 180,  442 => 177,  436 => 174,  432 => 173,  394 => 137,  389 => 135,  386 => 134,  381 => 132,  378 => 131,  375 => 130,  370 => 128,  367 => 127,  362 => 125,  359 => 124,  356 => 123,  351 => 121,  348 => 120,  343 => 118,  340 => 117,  338 => 116,  332 => 113,  321 => 104,  304 => 99,  297 => 97,  291 => 95,  287 => 94,  283 => 92,  266 => 90,  262 => 89,  252 => 82,  246 => 79,  231 => 67,  227 => 65,  224 => 64,  218 => 63,  216 => 62,  210 => 59,  207 => 58,  194 => 55,  184 => 54,  176 => 53,  173 => 52,  169 => 51,  162 => 49,  159 => 48,  151 => 47,  147 => 46,  143 => 45,  139 => 43,  134 => 42,  132 => 41,  129 => 40,  127 => 39,  120 => 35,  113 => 31,  107 => 30,  103 => 29,  94 => 23,  89 => 21,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop/setting_footer_menu.twig", "");
    }
}
