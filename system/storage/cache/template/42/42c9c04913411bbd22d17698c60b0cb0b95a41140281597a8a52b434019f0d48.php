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

/* extension/module/luxshop/page_home_menu.twig */
class __TwigTemplate_68f7a7198c09138fbad99a41713e391a5e894b7b870ce018a682d07f7269f77b extends \Twig\Template
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
        echo "
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3
        echo ($context["text_scheme_home_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-info collapsed\" data-toggle=\"collapse\" href=\"#HomePageScheme\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ns_ch_visible\"><i class=\"fa fa-eye fa-fw\"></i>";
        // line 6
        echo ($context["text_show_scheme"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ns_ch_hidden\"><i class=\"fa fa-eye-slash fa-fw\"></i>";
        // line 7
        echo ($context["text_hidden_scheme"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-up arr\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t<div id=\"HomePageScheme\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 ns_block\"><div class=\"thumbnail\"><b></b><span>";
        // line 15
        echo ($context["text_scheme_position_header_site"] ?? null);
        echo "<br>(header)</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block\"><div class=\"thumbnail\"><b></b><span>";
        // line 18
        echo ($context["text_scheme_position_menu"] ?? null);
        echo "</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-9 ns_block\"><div class=\"thumbnail\"><b></b><span>";
        // line 19
        echo ($context["text_scheme_position_menu"] ?? null);
        echo "</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 22
        echo ($context["text_scheme_position_number"] ?? null);
        echo "1<br>";
        echo ($context["text_scheme_position_fluid"] ?? null);
        echo "</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 ns_block\"><div class=\"thumbnail\"><b></b><span>";
        // line 25
        echo ($context["text_scheme_position_content_top"] ?? null);
        echo "<br>(content_top)</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block position-ns\"><div style=\"height:136px\" class=\"thumbnail\"><span>";
        // line 28
        echo ($context["text_scheme_position_number"] ?? null);
        echo "0</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 29
        echo ($context["text_scheme_position_number"] ?? null);
        echo "17</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 30
        echo ($context["text_scheme_position_number"] ?? null);
        echo "18</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 31
        echo ($context["text_scheme_position_number"] ?? null);
        echo "19</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 32
        echo ($context["text_scheme_position_number"] ?? null);
        echo "20</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 33
        echo ($context["text_scheme_position_number"] ?? null);
        echo "21</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block\"><div class=\"thumbnail\"><b></b><span>";
        // line 36
        echo ($context["text_scheme_position_column_left"] ?? null);
        echo "<br>(column_left)</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 ns_block\"><div class=\"thumbnail\"><b></b><span>";
        // line 37
        echo ($context["text_scheme_position_content_bottom"] ?? null);
        echo "<br>(content_bottom)</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block\"><div class=\"thumbnail\"><b></b><span>";
        // line 38
        echo ($context["text_scheme_position_column_right"] ?? null);
        echo "<br>(column_right)</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 41
        echo ($context["text_scheme_position_number"] ?? null);
        echo "1<br>";
        echo ($context["text_scheme_position_fluid"] ?? null);
        echo "</span></div></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 45
        echo ($context["text_scheme_position_number"] ?? null);
        echo "2</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 46
        echo ($context["text_scheme_position_number"] ?? null);
        echo "3</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 49
        echo ($context["text_scheme_position_number"] ?? null);
        echo "4</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-9 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 50
        echo ($context["text_scheme_position_number"] ?? null);
        echo "5</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-9 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 53
        echo ($context["text_scheme_position_number"] ?? null);
        echo "6</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 54
        echo ($context["text_scheme_position_number"] ?? null);
        echo "7</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 57
        echo ($context["text_scheme_position_number"] ?? null);
        echo "8</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 58
        echo ($context["text_scheme_position_number"] ?? null);
        echo "9</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 59
        echo ($context["text_scheme_position_number"] ?? null);
        echo "10</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 62
        echo ($context["text_scheme_position_number"] ?? null);
        echo "22</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 65
        echo ($context["text_scheme_position_number"] ?? null);
        echo "11</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 66
        echo ($context["text_scheme_position_number"] ?? null);
        echo "12</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 67
        echo ($context["text_scheme_position_number"] ?? null);
        echo "13</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 68
        echo ($context["text_scheme_position_number"] ?? null);
        echo "14</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 71
        echo ($context["text_scheme_position_number"] ?? null);
        echo "15</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ns_block position-ns\"><div class=\"thumbnail\"><b></b><span>";
        // line 74
        echo ($context["text_scheme_position_number"] ?? null);
        echo "16<br>";
        echo ($context["text_scheme_position_fluid"] ?? null);
        echo "</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 ns_block\"><div class=\"thumbnail\" style=\"margin-bottom:0;\"><b></b><span>";
        // line 77
        echo ($context["text_scheme_position_footer_site"] ?? null);
        echo "<br>(footer)</span></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<table id=\"ns-new-home-module\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t<thead style=\"background:#eee;\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"nowrap\"><i class=\"fa fa-puzzle-piece fa-fw\"></i>";
        // line 89
        echo ($context["additional_column_modules"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"nowrap\"><i class=\"fa fa-crosshairs fa-fw\"></i>";
        // line 90
        echo ($context["additional_column_position"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"nowrap text-center\"><span data-toggle=\"tooltip\" title=\"";
        // line 91
        echo ($context["help_mob_device"] ?? null);
        echo "\">";
        echo ($context["text_mob_device"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 92
        echo ($context["help_tablet_device"] ?? null);
        echo "\">";
        echo ($context["text_tablet_device"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 93
        echo ($context["help_pc_device"] ?? null);
        echo "\">";
        echo ($context["text_pc_device"] ?? null);
        echo "</span></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody id=\"sortable_module\">
\t\t\t\t\t\t\t\t";
        // line 98
        $context["ns_new_home_module_row"] = 0;
        // line 99
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ns_new_home_layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ns_new_home_layout_module"]) {
            // line 100
            echo "\t\t\t\t\t\t\t\t<tr id=\"ns-new-home-module-row";
            echo ($context["ns_new_home_module_row"] ?? null);
            echo "\" class=\"\">
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\"><a class=\"btn btn-success sortable-module\" href=\"javascript:void(0)\"><i class=\"fa fa-hand-rock-o\" aria-hidden=\"true\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<select name=\"ns_new_home_layout_module[";
            // line 104
            echo ($context["ns_new_home_module_row"] ?? null);
            echo "][code]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ns_new_home_extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 106
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ( !(($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["extension"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["module"] ?? null) : null)) {
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["extension"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["code"] ?? null) : null) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["ns_new_home_layout_module"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["code"] ?? null) : null))) {
                        // line 108
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["extension"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["code"] ?? null) : null);
                        echo "\" selected=\"selected\">";
                        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["extension"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 110
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["extension"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["code"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["extension"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 112
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["extension"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 114
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["extension"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["module"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                        // line 115
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["module"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["code"] ?? null) : null) == (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["ns_new_home_layout_module"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["code"] ?? null) : null))) {
                            // line 116
                            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["module"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["code"] ?? null) : null);
                            echo "\" selected=\"selected\">";
                            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["module"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["name"] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 118
                            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["module"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["code"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["module"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["name"] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 120
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 123
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\"><a target=\"_blank\" href=\"";
            // line 125
            echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["ns_new_home_layout_module"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["edit"] ?? null) : null);
            echo "\" type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<select name=\"ns_new_home_layout_module[";
            // line 129
            echo ($context["ns_new_home_module_row"] ?? null);
            echo "][position]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 130
            if (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["ns_new_home_layout_module"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["position"] ?? null) : null) == "position_1")) {
                // line 131
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_0\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "0</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 133
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_0\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "0</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 135
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["ns_new_home_layout_module"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["position"] ?? null) : null) == "position_1")) {
                // line 136
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_1\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "1</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 138
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_1\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "1</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["ns_new_home_layout_module"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["position"] ?? null) : null) == "position_2")) {
                // line 141
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_2\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "2</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 143
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_2\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "2</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["ns_new_home_layout_module"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["position"] ?? null) : null) == "position_3")) {
                // line 146
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_3\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "3</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 148
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_3\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "3</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 150
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["ns_new_home_layout_module"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["position"] ?? null) : null) == "position_4")) {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_4\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "4</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 153
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_4\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "4</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 155
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["ns_new_home_layout_module"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["position"] ?? null) : null) == "position_5")) {
                // line 156
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_5\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "5</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 158
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_5\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "5</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 160
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["ns_new_home_layout_module"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["position"] ?? null) : null) == "position_6")) {
                // line 161
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_6\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "6</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 163
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_6\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "6</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 165
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["ns_new_home_layout_module"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["position"] ?? null) : null) == "position_7")) {
                // line 166
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_7\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "7</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 168
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_7\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "7</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 170
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["ns_new_home_layout_module"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["position"] ?? null) : null) == "position_8")) {
                // line 171
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_8\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "8</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 173
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_8\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "8</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 175
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["ns_new_home_layout_module"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["position"] ?? null) : null) == "position_9")) {
                // line 176
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_9\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "9</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 178
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_9\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "9</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 180
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["ns_new_home_layout_module"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["position"] ?? null) : null) == "position_10")) {
                // line 181
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_10\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "10</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 183
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_10\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "10</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 185
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["ns_new_home_layout_module"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["position"] ?? null) : null) == "position_11")) {
                // line 186
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_11\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "11</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 188
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_11\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "11</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 190
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["ns_new_home_layout_module"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["position"] ?? null) : null) == "position_12")) {
                // line 191
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_12\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "12</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 193
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_12\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "12</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 195
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["ns_new_home_layout_module"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["position"] ?? null) : null) == "position_13")) {
                // line 196
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_13\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "13</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 198
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_13\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "13</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 200
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["ns_new_home_layout_module"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["position"] ?? null) : null) == "position_14")) {
                // line 201
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_14\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "14</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 203
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_14\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "14</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 205
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["ns_new_home_layout_module"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["position"] ?? null) : null) == "position_15")) {
                // line 206
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_15\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "15</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 208
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_15\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "15</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 210
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["ns_new_home_layout_module"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["position"] ?? null) : null) == "position_16")) {
                // line 211
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_16\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "16</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 213
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_16\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "16</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 215
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["ns_new_home_layout_module"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["position"] ?? null) : null) == "position_17")) {
                // line 216
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_17\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "17</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 218
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_17\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "17</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 220
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["ns_new_home_layout_module"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["position"] ?? null) : null) == "position_18")) {
                // line 221
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_18\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "18</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 223
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_18\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "18</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 225
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["ns_new_home_layout_module"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["position"] ?? null) : null) == "position_19")) {
                // line 226
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_19\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "19</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 228
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_19\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "19</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 230
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["ns_new_home_layout_module"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["position"] ?? null) : null) == "position_20")) {
                // line 231
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_20\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "20</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 233
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_20\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "20</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 235
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["ns_new_home_layout_module"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["position"] ?? null) : null) == "position_21")) {
                // line 236
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_21\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "21</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 238
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_21\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "21</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 240
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["ns_new_home_layout_module"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["position"] ?? null) : null) == "position_22")) {
                // line 241
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_22\" selected=\"selected\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "22</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 243
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"position_22\">";
                echo ($context["text_scheme_position_number"] ?? null);
                echo "22</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 245
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ns_new_home_layout_module[";
            // line 246
            echo ($context["ns_new_home_module_row"] ?? null);
            echo "][sort_order]\" value=\"0\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><div class=\"btn-group mob-device\"><label><input type=\"checkbox\" name=\"ns_new_home_layout_module[";
            // line 248
            echo ($context["ns_new_home_module_row"] ?? null);
            echo "][mob_device]\" value=\"1\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["ns_new_home_layout_module"], "mob_device", [], "array", true, true, false, 248) && ((($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["ns_new_home_layout_module"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["mob_device"] ?? null) : null) == 1))) {
                echo " checked=\"checked\"";
            }
            echo "/><i class=\"fa fa-power-off\"></i></label><label><input type=\"checkbox\" name=\"ns_new_home_layout_module[";
            echo ($context["ns_new_home_module_row"] ?? null);
            echo "][tablet_device]\" value=\"1\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["ns_new_home_layout_module"], "tablet_device", [], "array", true, true, false, 248) && ((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["ns_new_home_layout_module"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["tablet_device"] ?? null) : null) == 1))) {
                echo " checked=\"checked\"";
            }
            echo "/><i class=\"fa fa-power-off\"></i></label><label><input type=\"checkbox\" name=\"ns_new_home_layout_module[";
            echo ($context["ns_new_home_module_row"] ?? null);
            echo "][pc_device]\" value=\"1\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["ns_new_home_layout_module"], "pc_device", [], "array", true, true, false, 248) && ((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["ns_new_home_layout_module"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["pc_device"] ?? null) : null) == 1))) {
                echo " checked=\"checked\"";
            }
            echo "/><i class=\"fa fa-power-off\"></i></label></div></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#ns-new-home-module-row";
            // line 250
            echo ($context["ns_new_home_module_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_delete"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            // line 253
            $context["ns_new_home_module_row"] = (($context["ns_new_home_module_row"] ?? null) + 1);
            // line 254
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ns_new_home_layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"3\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><button type=\"button\" onclick=\"addNewHomePageModule();\" data-toggle=\"tooltip\" title=\"добавить\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
<script>
\t\t\t\t\tvar ns_new_home_module_row = ";
        // line 266
        echo ($context["ns_new_home_module_row"] ?? null);
        echo ";

\t\t\t\t\tfunction addNewHomePageModule() {
\t\t\t\t\t\thtml  = '<tr id=\"new-home-module-row' + ns_new_home_module_row + '\">';
\t\t\t\t\t\thtml += '  <td>';
\t\t\t\t\t\thtml += '  <div class=\"input-group\">';
\t\t\t\t\t\thtml += '  <div class=\"input-group-btn\"><a class=\"btn btn-success sortable-module\" href=\"javascript:void(0)\"><i class=\"fa fa-hand-rock-o\" aria-hidden=\"true\"></i></a></div>';
\t\t\t\t\t\thtml += '  <select name=\"ns_new_home_layout_module[' + ns_new_home_module_row + '][code]\" class=\"form-control\">';
\t\t\t\t\t\t";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ns_new_home_extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 275
            echo "\t\t\t\t\t\t";
            if ( !(($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["extension"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["module"] ?? null) : null)) {
                // line 276
                echo "\t\t\t\t\t\thtml += '    <option value=\"";
                echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["extension"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["code"] ?? null) : null);
                echo "\">";
                echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["extension"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["name"] ?? null) : null);
                echo "</option>';
\t\t\t\t\t\t";
            } else {
                // line 278
                echo "\t\t\t\t\t\thtml += '    <optgroup label=\"";
                echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["extension"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["name"] ?? null) : null);
                echo "\">';
\t\t\t\t\t\t";
                // line 279
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["extension"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["module"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 280
                    echo "\t\t\t\t\t\thtml += '      <option value=\"";
                    echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["module"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["code"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["module"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["name"] ?? null) : null);
                    echo "</option>';
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 282
                echo "\t\t\t\t\t\thtml += '    </optgroup>';
\t\t\t\t\t\t";
            }
            // line 284
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "\t\t\t\t\t\thtml += '  </select>';
\t\t\t\t\t\thtml += '  <div class=\"input-group-btn\">';
\t\t\t\t\t\thtml += '\t\t<a target=\"_blank\" href=\"\" type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>';
\t\t\t\t\t\thtml += '  </div></div></td>';
\t\t\t\t\t\thtml += '  <td><select name=\"ns_new_home_layout_module[' + ns_new_home_module_row + '][position]\" class=\"form-control\">';
\t\t\t\t\t\thtml += '    <option value=\"position_0\">";
        // line 290
        echo ($context["text_scheme_position_number"] ?? null);
        echo "0</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_1\">";
        // line 291
        echo ($context["text_scheme_position_number"] ?? null);
        echo "1</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_2\">";
        // line 292
        echo ($context["text_scheme_position_number"] ?? null);
        echo "2</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_3\">";
        // line 293
        echo ($context["text_scheme_position_number"] ?? null);
        echo "3</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_4\">";
        // line 294
        echo ($context["text_scheme_position_number"] ?? null);
        echo "4</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_5\">";
        // line 295
        echo ($context["text_scheme_position_number"] ?? null);
        echo "5</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_6\">";
        // line 296
        echo ($context["text_scheme_position_number"] ?? null);
        echo "6</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_7\">";
        // line 297
        echo ($context["text_scheme_position_number"] ?? null);
        echo "7</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_8\">";
        // line 298
        echo ($context["text_scheme_position_number"] ?? null);
        echo "8</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_9\">";
        // line 299
        echo ($context["text_scheme_position_number"] ?? null);
        echo "9</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_10\">";
        // line 300
        echo ($context["text_scheme_position_number"] ?? null);
        echo "10</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_11\">";
        // line 301
        echo ($context["text_scheme_position_number"] ?? null);
        echo "11</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_12\">";
        // line 302
        echo ($context["text_scheme_position_number"] ?? null);
        echo "12</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_13\">";
        // line 303
        echo ($context["text_scheme_position_number"] ?? null);
        echo "13</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_14\">";
        // line 304
        echo ($context["text_scheme_position_number"] ?? null);
        echo "14</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_15\">";
        // line 305
        echo ($context["text_scheme_position_number"] ?? null);
        echo "15</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_16\">";
        // line 306
        echo ($context["text_scheme_position_number"] ?? null);
        echo "16</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_17\">";
        // line 307
        echo ($context["text_scheme_position_number"] ?? null);
        echo "17</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_18\">";
        // line 308
        echo ($context["text_scheme_position_number"] ?? null);
        echo "18</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_19\">";
        // line 309
        echo ($context["text_scheme_position_number"] ?? null);
        echo "19</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_20\">";
        // line 310
        echo ($context["text_scheme_position_number"] ?? null);
        echo "20</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_21\">";
        // line 311
        echo ($context["text_scheme_position_number"] ?? null);
        echo "21</option>';
\t\t\t\t\t\thtml += '    <option value=\"position_22\">";
        // line 312
        echo ($context["text_scheme_position_number"] ?? null);
        echo "22</option>';
\t\t\t\t\t\thtml += '  </select></td>';
\t\t\t\t\t\thtml += '  <input style=\"width:42px;\" type=\"hidden\" name=\"ns_new_home_layout_module[' + ns_new_home_module_row + '][sort_order]\" value=\"0\" placeholder=\"\" class=\"form-control\" />';
\t\t\t\t\t\thtml += '<td class=\"text-center\"><div class=\"btn-group mob-device\"><label><input type=\"checkbox\" name=\"ns_new_home_layout_module[' + ns_new_home_module_row + '][mob_device]\" value=\"1\"><i class=\"fa fa-power-off\"></i></label><label><input type=\"checkbox\" name=\"ns_new_home_layout_module[' + ns_new_home_module_row + '][tablet_device]\" value=\"1\"/><i class=\"fa fa-power-off\"></i></label><label><input type=\"checkbox\" name=\"ns_new_home_layout_module[' + ns_new_home_module_row + '][pc_device]\" value=\"1\"/><i class=\"fa fa-power-off\"></i></label></div></td>';
\t\t\t\t\t\thtml += '  <td class=\"text-center\"><button type=\"button\" onclick=\"\$(\\'#new-home-module-row' + ns_new_home_module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"удалить\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\t\t\t\t\thtml += '</tr>';

\t\t\t\t\t\t\$('#ns-new-home-module tbody').append(html);
\t\t\t\t\t\t\$('#new-home-module-row' + ns_new_home_module_row + ' select[name*=\\'code\\']').trigger('change');
\t\t\t\t\t\tns_new_home_module_row++;
\t\t\t\t\t}
\t\t\t\t\t\$('#ns-new-home-module').delegate('select[name*=\\'code\\']', 'change', function() {
\t\t\t\t\t\tvar part = this.value.split('.');

\t\t\t\t\t\tif (!part[1]) {
\t\t\t\t\t\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&token=";
        // line 327
        echo ($context["token"] ?? null);
        echo "');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&token=";
        // line 329
        echo ($context["token"] ?? null);
        echo "&module_id=' + part[1]);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tSortable.create(sortable_module, {
\t\t\t\t\t  handle: '.sortable-module',
\t\t\t\t\t  animation: 150
\t\t\t\t\t});
\t\t\t\t\t</script>";
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop/page_home_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  950 => 329,  945 => 327,  927 => 312,  923 => 311,  919 => 310,  915 => 309,  911 => 308,  907 => 307,  903 => 306,  899 => 305,  895 => 304,  891 => 303,  887 => 302,  883 => 301,  879 => 300,  875 => 299,  871 => 298,  867 => 297,  863 => 296,  859 => 295,  855 => 294,  851 => 293,  847 => 292,  843 => 291,  839 => 290,  832 => 285,  826 => 284,  822 => 282,  811 => 280,  807 => 279,  802 => 278,  794 => 276,  791 => 275,  787 => 274,  776 => 266,  763 => 255,  757 => 254,  755 => 253,  747 => 250,  726 => 248,  721 => 246,  718 => 245,  712 => 243,  706 => 241,  703 => 240,  697 => 238,  691 => 236,  688 => 235,  682 => 233,  676 => 231,  673 => 230,  667 => 228,  661 => 226,  658 => 225,  652 => 223,  646 => 221,  643 => 220,  637 => 218,  631 => 216,  628 => 215,  622 => 213,  616 => 211,  613 => 210,  607 => 208,  601 => 206,  598 => 205,  592 => 203,  586 => 201,  583 => 200,  577 => 198,  571 => 196,  568 => 195,  562 => 193,  556 => 191,  553 => 190,  547 => 188,  541 => 186,  538 => 185,  532 => 183,  526 => 181,  523 => 180,  517 => 178,  511 => 176,  508 => 175,  502 => 173,  496 => 171,  493 => 170,  487 => 168,  481 => 166,  478 => 165,  472 => 163,  466 => 161,  463 => 160,  457 => 158,  451 => 156,  448 => 155,  442 => 153,  436 => 151,  433 => 150,  427 => 148,  421 => 146,  418 => 145,  412 => 143,  406 => 141,  403 => 140,  397 => 138,  391 => 136,  388 => 135,  382 => 133,  376 => 131,  374 => 130,  370 => 129,  363 => 125,  360 => 124,  354 => 123,  350 => 121,  344 => 120,  336 => 118,  328 => 116,  325 => 115,  321 => 114,  316 => 113,  313 => 112,  305 => 110,  297 => 108,  294 => 107,  291 => 106,  287 => 105,  283 => 104,  275 => 100,  270 => 99,  268 => 98,  258 => 93,  252 => 92,  246 => 91,  242 => 90,  238 => 89,  223 => 77,  215 => 74,  209 => 71,  203 => 68,  199 => 67,  195 => 66,  191 => 65,  185 => 62,  179 => 59,  175 => 58,  171 => 57,  165 => 54,  161 => 53,  155 => 50,  151 => 49,  145 => 46,  141 => 45,  132 => 41,  126 => 38,  122 => 37,  118 => 36,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  86 => 25,  78 => 22,  72 => 19,  68 => 18,  62 => 15,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop/page_home_menu.twig", "");
    }
}
