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

/* extension/module/luxshop/microdata_page.twig */
class __TwigTemplate_54bc161f49b7e0bd31546dabc6f88a7b28339a8a1ea72ac6a0a03ac7e47991d4 extends \Twig\Template
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
        echo ($context["ns_text_status"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t\t<div class=\"radio-group-infinity\">
\t\t\t";
        // line 5
        if ((array_key_exists("ls_microdata_status", $context) && (($context["ls_microdata_status"] ?? null) == 1))) {
            // line 6
            echo "\t\t\t<input id=\"smicrodata_status_yes\" class=\"hide-radio\" type=\"radio\" name=\"ls_microdata_status\" value=\"1\" checked=\"checked\" />
\t\t\t<label for=\"smicrodata_status_yes\">";
            // line 7
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 9
            echo "\t\t\t<input id=\"smicrodata_status_yes\" class=\"hide-radio\" type=\"radio\" name=\"ls_microdata_status\" value=\"1\" />
\t\t\t<label for=\"smicrodata_status_yes\">";
            // line 10
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 12
        echo "\t\t\t";
        if (( !array_key_exists("ls_microdata_status", $context) || (($context["ls_microdata_status"] ?? null) == 0))) {
            // line 13
            echo "\t\t\t<input id=\"smicrodata_status_no\" class=\"hide-radio\" type=\"radio\" name=\"ls_microdata_status\" value=\"0\" checked=\"checked\" />
\t\t\t<label for=\"smicrodata_status_no\">";
            // line 14
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 16
            echo "\t\t\t<input id=\"smicrodata_status_no\" class=\"hide-radio\" type=\"radio\" name=\"ls_microdata_status\" value=\"0\" />
\t\t\t<label for=\"smicrodata_status_no\">";
            // line 17
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t";
        }
        // line 19
        echo "\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\" for=\"input-microdata-city\">";
        // line 23
        echo ($context["text_microdata_city"] ?? null);
        echo "</label>
\t<div class=\"col-sm-6\">
\t\t<textarea class=\"form-control\" name=\"ls_micsrodata[city]\" id=\"input-microdata-city\">";
        // line 25
        echo ((twig_get_attribute($this->env, $this->source, ($context["ls_micsrodata"] ?? null), "city", [], "array", true, true, false, 25)) ? ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["ls_micsrodata"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["city"] ?? null) : null)) : (""));
        echo "</textarea>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\" for=\"input-microdata-address\">";
        // line 29
        echo ($context["text_contact_address"] ?? null);
        echo "</label>
\t<div class=\"col-sm-6\">
\t\t<textarea class=\"form-control\" name=\"ls_micsrodata[address]\" id=\"input-microdata-address\">";
        // line 31
        echo ((twig_get_attribute($this->env, $this->source, ($context["ls_micsrodata"] ?? null), "address", [], "array", true, true, false, 31)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["ls_micsrodata"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["address"] ?? null) : null)) : (""));
        echo "</textarea>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\" for=\"input-microdata-postcode\">";
        // line 35
        echo ($context["text_microdata_postcode"] ?? null);
        echo "</label>
\t<div class=\"col-sm-6\">
\t\t<input class=\"form-control\" value=\"";
        // line 37
        echo ((twig_get_attribute($this->env, $this->source, ($context["ls_micsrodata"] ?? null), "postcode", [], "array", true, true, false, 37)) ? ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["ls_micsrodata"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["postcode"] ?? null) : null)) : (""));
        echo "\" name=\"ls_micsrodata[postcode]\" id=\"input-microdata-postcode\"/>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\" for=\"input-microdata-phones\">";
        // line 41
        echo ($context["text_contact_phone"] ?? null);
        echo "</label>
\t<div class=\"col-sm-6\">
\t\t<textarea class=\"form-control\" name=\"ls_micsrodata[phones]\" id=\"input-microdata-phones\">";
        // line 43
        echo ((twig_get_attribute($this->env, $this->source, ($context["ls_micsrodata"] ?? null), "phones", [], "array", true, true, false, 43)) ? ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["ls_micsrodata"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["phones"] ?? null) : null)) : (""));
        echo "</textarea>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\" for=\"input-microdata-email\">";
        // line 47
        echo ($context["text_contact_email"] ?? null);
        echo "</label>
\t<div class=\"col-sm-6\">
\t\t<input class=\"form-control\" value=\"";
        // line 49
        echo ((twig_get_attribute($this->env, $this->source, ($context["ls_micsrodata"] ?? null), "email", [], "array", true, true, false, 49)) ? ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["ls_micsrodata"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["email"] ?? null) : null)) : (""));
        echo "\" name=\"ls_micsrodata[email]\" id=\"input-microdata-postcode\"/>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-3 control-label\" for=\"input-microdata-social\">";
        // line 53
        echo ($context["text_microdata_social"] ?? null);
        echo "</label>
\t<div class=\"col-sm-6\">
\t\t<textarea class=\"form-control\" placeholder=\"https://youtube.com, https://vk.com\" name=\"ls_micsrodata[social]\" id=\"input-microdata-social\">";
        // line 55
        echo ((twig_get_attribute($this->env, $this->source, ($context["ls_micsrodata"] ?? null), "social", [], "array", true, true, false, 55)) ? ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["ls_micsrodata"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["social"] ?? null) : null)) : (""));
        echo "</textarea>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop/microdata_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 55,  149 => 53,  142 => 49,  137 => 47,  130 => 43,  125 => 41,  118 => 37,  113 => 35,  106 => 31,  101 => 29,  94 => 25,  89 => 23,  83 => 19,  78 => 17,  75 => 16,  70 => 14,  67 => 13,  64 => 12,  59 => 10,  56 => 9,  51 => 7,  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop/microdata_page.twig", "");
    }
}
