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

/* extension/module/luxshop/page_latest.twig */
class __TwigTemplate_7d050fddc24419d9b0a986909ea51637e8944b3bcbcdd11104ddb68adbadae65 extends \Twig\Template
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
  <label for=\"input-status_latest_page\" class=\"col-sm-3 control-label\">";
        // line 2
        echo ($context["ns_text_status"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
\t<div class=\"checkbox-group-pixelshop\">
\t\t<label><input type=\"checkbox\" name=\"setting_lp[status_latest_page]\" value=\"1\" ";
        // line 5
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_lp"] ?? null), "status_latest_page", [], "array", true, true, false, 5) && ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["setting_lp"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["status_latest_page"] ?? null) : null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t</div>
  </div>
</div>
<div class=\"form-group\">
  <label for=\"input-status_receipt_date\" class=\"col-sm-3 control-label\">";
        // line 10
        echo ($context["text_status_receipt_date"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
\t<div class=\"checkbox-group-pixelshop\">
\t\t<label><input type=\"checkbox\" name=\"setting_lp[status_receipt_date]\" value=\"1\" ";
        // line 13
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_lp"] ?? null), "status_receipt_date", [], "array", true, true, false, 13) && ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["setting_lp"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["status_receipt_date"] ?? null) : null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t</div>
  </div>
</div>
<div class=\"form-group\">
  <label for=\"input-status_active_last_date\" class=\"col-sm-3 control-label\">";
        // line 18
        echo ($context["text_status_active_last_date"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
\t<div class=\"checkbox-group-pixelshop\">
\t\t<label><input type=\"checkbox\" name=\"setting_lp[status_active_last_date]\" value=\"1\" ";
        // line 21
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_lp"] ?? null), "status_active_last_date", [], "array", true, true, false, 21) && ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["setting_lp"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["status_active_last_date"] ?? null) : null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t</div>
  </div>
</div>
<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" for=\"input-count_day_latest_product\">";
        // line 26
        echo ($context["text_day_show_latest"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
\t<input type=\"text\" name=\"config_day_latest_product\" value=\"";
        // line 28
        echo ($context["config_day_latest_product"] ?? null);
        echo "\"  id=\"input-count_day_latest_product\" class=\"form-control\" />
  </div>
</div>
<div class=\"form-group\">
  <label for=\"input-status_lp_price_list\" class=\"col-sm-3 control-label\">";
        // line 32
        echo ($context["text_localstorege_pricelist"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
\t<div class=\"checkbox-group-pixelshop\">
\t\t<label><input type=\"checkbox\" name=\"setting_lp[status_lp_price_list]\" value=\"1\" ";
        // line 35
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_lp"] ?? null), "status_lp_price_list", [], "array", true, true, false, 35) && ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["setting_lp"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["status_lp_price_list"] ?? null) : null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t</div>
  </div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 40
        echo ($context["text_status_model"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t<label><input type=\"checkbox\" name=\"setting_lp[status_lp_model]\" value=\"1\" ";
        // line 43
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_lp"] ?? null), "status_lp_model", [], "array", true, true, false, 43) && ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["setting_lp"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["status_lp_model"] ?? null) : null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 48
        echo ($context["text_status_description"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t<label><input type=\"checkbox\" name=\"setting_lp[status_lp_description]\" value=\"1\" ";
        // line 51
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_lp"] ?? null), "status_lp_description", [], "array", true, true, false, 51) && ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["setting_lp"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["status_lp_description"] ?? null) : null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 56
        echo ($context["text_additional_image_hover"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t<label><input type=\"checkbox\" name=\"setting_lp[status_lp_dop_image_hover_cp]\" value=\"1\" ";
        // line 59
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_lp"] ?? null), "status_lp_dop_image_hover_cp", [], "array", true, true, false, 59) && ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["setting_lp"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["status_lp_dop_image_hover_cp"] ?? null) : null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 64
        echo ($context["text_status_rating"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t<label><input type=\"checkbox\" name=\"setting_lp[status_lp_rating]\" value=\"1\" ";
        // line 67
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_lp"] ?? null), "status_lp_rating", [], "array", true, true, false, 67) && ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["setting_lp"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["status_lp_rating"] ?? null) : null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 72
        echo ($context["text_status_quantity_reviews"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t<label><input type=\"checkbox\" name=\"setting_lp[status_lp_quantity_reviews]\" value=\"1\" ";
        // line 75
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_lp"] ?? null), "status_lp_quantity_reviews", [], "array", true, true, false, 75) && ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["setting_lp"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["status_lp_quantity_reviews"] ?? null) : null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 80
        echo ($context["text_status_fastorder"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t<label><input type=\"checkbox\" name=\"setting_lp[status_lp_fastorder]\" value=\"1\" ";
        // line 83
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_lp"] ?? null), "status_lp_fastorder", [], "array", true, true, false, 83) && ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["setting_lp"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["status_lp_fastorder"] ?? null) : null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 88
        echo ($context["text_status_wishlist"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t<label><input type=\"checkbox\" name=\"setting_lp[status_lp_wishlis]\" value=\"1\" ";
        // line 91
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_lp"] ?? null), "status_lp_wishlis", [], "array", true, true, false, 91) && ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["setting_lp"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["status_lp_wishlis"] ?? null) : null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 96
        echo ($context["text_status_compare"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"checkbox-group-pixelshop\">
\t\t\t<label><input type=\"checkbox\" name=\"setting_lp[status_lp_compare]\" value=\"1\" ";
        // line 99
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_lp"] ?? null), "status_lp_compare", [], "array", true, true, false, 99) && ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["setting_lp"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["status_lp_compare"] ?? null) : null) == "1"))) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop/page_latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 99,  206 => 96,  198 => 91,  192 => 88,  184 => 83,  178 => 80,  170 => 75,  164 => 72,  156 => 67,  150 => 64,  142 => 59,  136 => 56,  128 => 51,  122 => 48,  114 => 43,  108 => 40,  100 => 35,  94 => 32,  87 => 28,  82 => 26,  74 => 21,  68 => 18,  60 => 13,  54 => 10,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop/page_latest.twig", "");
    }
}
