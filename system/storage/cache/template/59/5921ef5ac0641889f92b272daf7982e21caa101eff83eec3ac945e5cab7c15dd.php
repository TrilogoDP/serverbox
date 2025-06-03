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

/* extension/module/luxshop/page_module_menu.twig */
class __TwigTemplate_1a03f914050fd48bfe26bb2961c0718a1793ff1d17278a94ec54169e56341c69 extends \Twig\Template
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
        echo "<div class=\"form-group hidden\">
\t<label class=\"col-sm-3 control-label\">";
        // line 2
        echo ($context["text_mobile_qrp"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t<div class=\"radio-group-text\">
\t\t";
        // line 5
        if (((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "mobile_qrp", [], "array", true, true, false, 5) && ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["setting_module"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["mobile_qrp"] ?? null) : null) == "0")) ||  !(($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["setting_module"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["mobile_qrp"] ?? null) : null))) {
            // line 6
            echo "\t\t<input id=\"mobile_qrp1\" class=\"hide-radio-text\" type=\"radio\" name=\"setting_module[mobile_qrp]\" value=\"0\" checked=\"checked\" />
\t\t<label for=\"mobile_qrp1\">1</label>
\t\t";
        } else {
            // line 9
            echo "\t\t<input id=\"mobile_qrp1\" class=\"hide-radio-text\" type=\"radio\" name=\"setting_module[mobile_qrp]\" value=\"0\" />
\t\t<label for=\"mobile_qrp1\">1</label>
\t\t";
        }
        // line 12
        echo "\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "mobile_qrp", [], "array", true, true, false, 12) && ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["setting_module"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["mobile_qrp"] ?? null) : null) == "1"))) {
            // line 13
            echo "\t\t<input id=\"mobile_qrp2\" class=\"hide-radio-text\" type=\"radio\" name=\"setting_module[mobile_qrp]\" value=\"1\" checked=\"checked\" />
\t\t<label for=\"mobile_qrp2\">2</label>
\t\t";
        } else {
            // line 16
            echo "\t\t<input id=\"mobile_qrp2\" class=\"hide-radio-text\" type=\"radio\" name=\"setting_module[mobile_qrp]\" value=\"1\" />
\t\t<label for=\"mobile_qrp2\">2</label>
\t\t";
        }
        // line 19
        echo "\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 23
        echo ($context["text_status_model"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"radio-group-infinity\">
\t\t\t";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_model", [], "array", true, true, false, 26) && ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["setting_module"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["status_model"] ?? null) : null) == 1))) {
            // line 27
            echo "\t\t\t<input id=\"status_model_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_model]\" value=\"1\" checked=\"checked\" />
\t\t\t<label for=\"status_model_yes\">";
            // line 28
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 30
            echo "\t\t\t<input id=\"status_model_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_model]\" value=\"1\" />
\t\t\t<label for=\"status_model_yes\">";
            // line 31
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 33
        echo "\t\t\t";
        if (( !twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_model", [], "array", true, true, false, 33) || ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["setting_module"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["status_model"] ?? null) : null) == 0))) {
            // line 34
            echo "\t\t\t<input id=\"status_model_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_model]\" value=\"0\" checked=\"checked\" />
\t\t\t<label for=\"status_model_no\">";
            // line 35
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 37
            echo "\t\t\t<input id=\"status_model_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_model]\" value=\"0\" />
\t\t\t<label for=\"status_model_no\">";
            // line 38
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 40
        echo "\t\t</div>
\t</div>
</div>


<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 46
        echo ($context["text_status_description"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"radio-group-infinity\">
\t\t\t";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_description", [], "array", true, true, false, 49) && ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["setting_module"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["status_description"] ?? null) : null) == 1))) {
            // line 50
            echo "\t\t\t<input id=\"status_description_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_description]\" value=\"1\" checked=\"checked\" />
\t\t\t<label for=\"status_description_yes\">";
            // line 51
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 53
            echo "\t\t\t<input id=\"status_description_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_description]\" value=\"1\" />
\t\t\t<label for=\"status_description_yes\">";
            // line 54
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 56
        echo "\t\t\t";
        if (( !twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_description", [], "array", true, true, false, 56) || ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["setting_module"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["status_description"] ?? null) : null) == 0))) {
            // line 57
            echo "\t\t\t<input id=\"status_description_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_description]\" value=\"0\" checked=\"checked\" />
\t\t\t<label for=\"status_description_no\">";
            // line 58
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 60
            echo "\t\t\t<input id=\"status_description_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_description]\" value=\"0\" />
\t\t\t<label for=\"status_description_no\">";
            // line 61
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 63
        echo "\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 67
        echo ($context["text_additional_image_hover"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"radio-group-infinity\">
\t\t\t";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_additional_image_hover", [], "array", true, true, false, 70) && ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["setting_module"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["status_additional_image_hover"] ?? null) : null) == 1))) {
            // line 71
            echo "\t\t\t<input id=\"status_additional_image_hover_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_additional_image_hover]\" value=\"1\" checked=\"checked\" />
\t\t\t<label for=\"status_additional_image_hover_yes\">";
            // line 72
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 74
            echo "\t\t\t<input id=\"status_additional_image_hover_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_additional_image_hover]\" value=\"1\" />
\t\t\t<label for=\"status_additional_image_hover_yes\">";
            // line 75
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 77
        echo "\t\t\t";
        if (( !twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_additional_image_hover", [], "array", true, true, false, 77) || ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["setting_module"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["status_additional_image_hover"] ?? null) : null) == 0))) {
            // line 78
            echo "\t\t\t<input id=\"status_additional_image_hover_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_additional_image_hover]\" value=\"0\" checked=\"checked\" />
\t\t\t<label for=\"status_additional_image_hover_no\">";
            // line 79
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 81
            echo "\t\t\t<input id=\"status_additional_image_hover_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_additional_image_hover]\" value=\"0\" />
\t\t\t<label for=\"status_additional_image_hover_no\">";
            // line 82
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 84
        echo "\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 88
        echo ($context["text_status_rating"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"radio-group-infinity\">
\t\t\t";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_rating", [], "array", true, true, false, 91) && ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["setting_module"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["status_rating"] ?? null) : null) == 1))) {
            // line 92
            echo "\t\t\t<input id=\"status_rating_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_rating]\" value=\"1\" checked=\"checked\" />
\t\t\t<label for=\"status_rating_yes\">";
            // line 93
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 95
            echo "\t\t\t<input id=\"status_rating_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_rating]\" value=\"1\" />
\t\t\t<label for=\"status_rating_yes\">";
            // line 96
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 98
        echo "\t\t\t";
        if (( !twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_rating", [], "array", true, true, false, 98) || ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["setting_module"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["status_rating"] ?? null) : null) == 0))) {
            // line 99
            echo "\t\t\t<input id=\"status_rating_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_rating]\" value=\"0\" checked=\"checked\" />
\t\t\t<label for=\"status_rating_no\">";
            // line 100
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 102
            echo "\t\t\t<input id=\"status_rating_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_rating]\" value=\"0\" />
\t\t\t<label for=\"status_rating_no\">";
            // line 103
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 105
        echo "\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 109
        echo ($context["text_status_quantity_reviews"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"radio-group-infinity\">
\t\t\t";
        // line 112
        if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_quantity_reviews", [], "array", true, true, false, 112) && ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["setting_module"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["status_quantity_reviews"] ?? null) : null) == 1))) {
            // line 113
            echo "\t\t\t<input id=\"status_quantity_reviews_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_quantity_reviews]\" value=\"1\" checked=\"checked\" />
\t\t\t<label for=\"status_quantity_reviews_yes\">";
            // line 114
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 116
            echo "\t\t\t<input id=\"status_quantity_reviews_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_quantity_reviews]\" value=\"1\" />
\t\t\t<label for=\"status_quantity_reviews_yes\">";
            // line 117
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 119
        echo "\t\t\t";
        if (( !twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_quantity_reviews", [], "array", true, true, false, 119) || ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["setting_module"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["status_quantity_reviews"] ?? null) : null) == 0))) {
            // line 120
            echo "\t\t\t<input id=\"status_quantity_reviews_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_quantity_reviews]\" value=\"0\" checked=\"checked\" />
\t\t\t<label for=\"status_quantity_reviews_no\">";
            // line 121
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 123
            echo "\t\t\t<input id=\"status_quantity_reviews_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_quantity_reviews]\" value=\"0\" />
\t\t\t<label for=\"status_quantity_reviews_no\">";
            // line 124
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 126
        echo "\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 130
        echo ($context["text_status_fastorder"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"radio-group-infinity\">
\t\t\t";
        // line 133
        if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_fastorder", [], "array", true, true, false, 133) && ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["setting_module"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["status_fastorder"] ?? null) : null) == 1))) {
            // line 134
            echo "\t\t\t<input id=\"status_fastorder_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_fastorder]\" value=\"1\" checked=\"checked\" />
\t\t\t<label for=\"status_fastorder_yes\">";
            // line 135
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 137
            echo "\t\t\t<input id=\"status_fastorder_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_fastorder]\" value=\"1\" />
\t\t\t<label for=\"status_fastorder_yes\">";
            // line 138
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 140
        echo "\t\t\t";
        if (( !twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_fastorder", [], "array", true, true, false, 140) || ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["setting_module"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["status_fastorder"] ?? null) : null) == 0))) {
            // line 141
            echo "\t\t\t<input id=\"status_fastorder_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_fastorder]\" value=\"0\" checked=\"checked\" />
\t\t\t<label for=\"status_fastorder_no\">";
            // line 142
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 144
            echo "\t\t\t<input id=\"status_fastorder_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_fastorder]\" value=\"0\" />
\t\t\t<label for=\"status_fastorder_no\">";
            // line 145
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 147
        echo "\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 151
        echo ($context["text_status_wishlist"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"radio-group-infinity\">
\t\t\t";
        // line 154
        if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_wishlist", [], "array", true, true, false, 154) && ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["setting_module"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["status_wishlist"] ?? null) : null) == 1))) {
            // line 155
            echo "\t\t\t<input id=\"status_wishlist_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_wishlist]\" value=\"1\" checked=\"checked\" />
\t\t\t<label for=\"status_wishlist_yes\">";
            // line 156
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 158
            echo "\t\t\t<input id=\"status_wishlist_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_wishlist]\" value=\"1\" />
\t\t\t<label for=\"status_wishlist_yes\">";
            // line 159
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 161
        echo "\t\t\t";
        if (( !twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_wishlist", [], "array", true, true, false, 161) || ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["setting_module"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["status_wishlist"] ?? null) : null) == 0))) {
            // line 162
            echo "\t\t\t<input id=\"status_wishlist_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_wishlist]\" value=\"0\" checked=\"checked\" />
\t\t\t<label for=\"status_wishlist_no\">";
            // line 163
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 165
            echo "\t\t\t<input id=\"status_wishlist_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_wishlist]\" value=\"0\" />
\t\t\t<label for=\"status_wishlist_no\">";
            // line 166
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 168
        echo "\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\">";
        // line 172
        echo ($context["text_status_compare"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"radio-group-infinity\">
\t\t\t";
        // line 175
        if ((twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_compare", [], "array", true, true, false, 175) && ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["setting_module"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["status_compare"] ?? null) : null) == 1))) {
            // line 176
            echo "\t\t\t<input id=\"status_compare_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_compare]\" value=\"1\" checked=\"checked\" />
\t\t\t<label for=\"status_compare_yes\">";
            // line 177
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 179
            echo "\t\t\t<input id=\"status_compare_yes\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_compare]\" value=\"1\" />
\t\t\t<label for=\"status_compare_yes\">";
            // line 180
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 182
        echo "\t\t\t";
        if (( !twig_get_attribute($this->env, $this->source, ($context["setting_module"] ?? null), "status_compare", [], "array", true, true, false, 182) || ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["setting_module"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["status_compare"] ?? null) : null) == 0))) {
            // line 183
            echo "\t\t\t<input id=\"status_compare_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_compare]\" value=\"0\" checked=\"checked\" />
\t\t\t<label for=\"status_compare_no\">";
            // line 184
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 186
            echo "\t\t\t<input id=\"status_compare_no\" class=\"hide-radio\" type=\"radio\" name=\"setting_module[status_compare]\" value=\"0\" />
\t\t\t<label for=\"status_compare_no\">";
            // line 187
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 189
        echo "\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop/page_module_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 189,  460 => 187,  457 => 186,  452 => 184,  449 => 183,  446 => 182,  441 => 180,  438 => 179,  433 => 177,  430 => 176,  428 => 175,  422 => 172,  416 => 168,  411 => 166,  408 => 165,  403 => 163,  400 => 162,  397 => 161,  392 => 159,  389 => 158,  384 => 156,  381 => 155,  379 => 154,  373 => 151,  367 => 147,  362 => 145,  359 => 144,  354 => 142,  351 => 141,  348 => 140,  343 => 138,  340 => 137,  335 => 135,  332 => 134,  330 => 133,  324 => 130,  318 => 126,  313 => 124,  310 => 123,  305 => 121,  302 => 120,  299 => 119,  294 => 117,  291 => 116,  286 => 114,  283 => 113,  281 => 112,  275 => 109,  269 => 105,  264 => 103,  261 => 102,  256 => 100,  253 => 99,  250 => 98,  245 => 96,  242 => 95,  237 => 93,  234 => 92,  232 => 91,  226 => 88,  220 => 84,  215 => 82,  212 => 81,  207 => 79,  204 => 78,  201 => 77,  196 => 75,  193 => 74,  188 => 72,  185 => 71,  183 => 70,  177 => 67,  171 => 63,  166 => 61,  163 => 60,  158 => 58,  155 => 57,  152 => 56,  147 => 54,  144 => 53,  139 => 51,  136 => 50,  134 => 49,  128 => 46,  120 => 40,  115 => 38,  112 => 37,  107 => 35,  104 => 34,  101 => 33,  96 => 31,  93 => 30,  88 => 28,  85 => 27,  83 => 26,  77 => 23,  71 => 19,  66 => 16,  61 => 13,  58 => 12,  53 => 9,  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop/page_module_menu.twig", "");
    }
}
