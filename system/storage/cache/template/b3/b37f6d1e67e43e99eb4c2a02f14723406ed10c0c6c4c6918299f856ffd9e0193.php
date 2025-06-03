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

/* extension/module/luxshop_banner_blocks.twig */
class __TwigTemplate_0c5e8453cd8d4a01c0bfe68996d599063181e28691010d4f60bec40a08a283ec extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-banner-blocks\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-banner-blocks\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 39
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 42
        if (($context["status"] ?? null)) {
            // line 43
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 44
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 46
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 47
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 49
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-banner-column\">";
        // line 53
        echo ($context["entry_banner_column"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"banner_column\" id=\"input-banner-column\" class=\"form-control\">
                ";
        // line 56
        if ((($context["banner_column"] ?? null) == 4)) {
            // line 57
            echo "                <option value=\"4\" selected=\"selected\">3</option>
                <option value=\"3\">4</option>
                ";
        } else {
            // line 60
            echo "                <option value=\"4\">3</option>
                <option value=\"3\" selected=\"selected\">4</option>
                ";
        }
        // line 63
        echo "              </select>
            </div>
          </div>

\t\t\t\t\t<table id=\"items\" class=\"table table-bordered table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
        // line 70
        echo ($context["entry_image"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 71
        echo ($context["entry_title"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 72
        echo ($context["entry_description"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 73
        echo ($context["entry_link"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 74
        echo ($context["text_open_banner_popup"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 75
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 80
        $context["item_row"] = 0;
        // line 81
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banner_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner_item"]) {
            // line 82
            echo "\t\t\t\t\t\t\t<tr id=\"item-row";
            echo ($context["item_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image";
            // line 84
            echo ($context["item_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["banner_item"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["thumb"] ?? null) : null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"  /></a><input type=\"hidden\" name=\"banner_item[";
            echo ($context["item_row"] ?? null);
            echo "][image]\" value=\"";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["banner_item"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["image"] ?? null) : null);
            echo "\" id=\"input-image";
            echo ($context["item_row"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 88
                echo "\t\t\t\t\t\t\t\t\t<div class=\"input-group pull-left\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 89
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["language"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["code"] ?? null) : null);
                echo "/";
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["language"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["language"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
                echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"banner_item[";
                // line 90
                echo ($context["item_row"] ?? null);
                echo "][title][";
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["language"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["language_id"] ?? null) : null);
                echo "]\" value=\"";
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["banner_item"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["title"] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[(($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["language"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["language_id"] ?? null) : null)] ?? null) : null);
                echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 96
                echo "\t\t\t\t\t\t\t\t\t<div class=\"input-group pull-left\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 97
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["language"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["code"] ?? null) : null);
                echo "/";
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["language"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["language"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["name"] ?? null) : null);
                echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"banner_item[";
                // line 98
                echo ($context["item_row"] ?? null);
                echo "][description][";
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["language"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["language_id"] ?? null) : null);
                echo "]\" value=\"";
                echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["banner_item"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["description"] ?? null) : null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[(($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["language"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["language_id"] ?? null) : null)] ?? null) : null);
                echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 104
                echo "\t\t\t\t\t\t\t\t\t<div class=\"input-group pull-left\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 105
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["language"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["code"] ?? null) : null);
                echo "/";
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["language"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["language"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["name"] ?? null) : null);
                echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"banner_item[";
                // line 106
                echo ($context["item_row"] ?? null);
                echo "][link][";
                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["language"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["language_id"] ?? null) : null);
                echo "]\" value=\"";
                echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["banner_item"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["link"] ?? null) : null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[(($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["language"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["language_id"] ?? null) : null)] ?? null) : null);
                echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-group-infinity\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 114
            if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["banner_item"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["popup"] ?? null) : null)) {
                // line 115
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"config_banner_item_popup_yes_";
                echo ($context["item_row"] ?? null);
                echo "\" class=\"hide-radio\" type=\"radio\" name=\"banner_item[";
                echo ($context["item_row"] ?? null);
                echo "][popup]\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"config_banner_item_popup_yes_";
                // line 116
                echo ($context["item_row"] ?? null);
                echo "\">";
                echo ($context["text_yes"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"config_banner_item_popup_yes_";
                echo ($context["item_row"] ?? null);
                echo "\" class=\"hide-radio\" type=\"radio\" name=\"banner_item[";
                echo ($context["item_row"] ?? null);
                echo "][popup]\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"config_banner_item_popup_yes_";
                // line 119
                echo ($context["item_row"] ?? null);
                echo "\">";
                echo ($context["text_yes"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 121
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            if ( !(($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["banner_item"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["popup"] ?? null) : null)) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"config_banner_item_popup_no_";
                echo ($context["item_row"] ?? null);
                echo "\" class=\"hide-radio\" type=\"radio\" name=\"banner_item[";
                echo ($context["item_row"] ?? null);
                echo "][popup]\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"config_banner_item_popup_no_";
                // line 123
                echo ($context["item_row"] ?? null);
                echo "\">";
                echo ($context["text_no"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 125
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"config_banner_item_popup_no_";
                echo ($context["item_row"] ?? null);
                echo "\" class=\"hide-radio\" type=\"radio\" name=\"banner_item[";
                echo ($context["item_row"] ?? null);
                echo "][popup]\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"config_banner_item_popup_no_";
                // line 126
                echo ($context["item_row"] ?? null);
                echo "\">";
                echo ($context["text_no"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 128
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<input  class=\"form-control\" type=\"text\" name=\"banner_item[";
            // line 133
            echo ($context["item_row"] ?? null);
            echo "][sort]\" value=\"";
            echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["banner_item"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["sort"] ?? null) : null);
            echo "\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" onclick=\"\$('#item-row";
            // line 136
            echo ($context["item_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_delete"] ?? null);
            echo "\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 139
            $context["item_row"] = (($context["item_row"] ?? null) + 1);
            // line 140
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"5\"></td>
\t\t\t\t\t\t\t\t<td class=\"text-right\"><a class=\"btn btn-primary\" onclick=\"addItem();\" data-toggle=\"tooltip\" title=\"";
        // line 145
        echo ($context["button_add"] ?? null);
        echo "\"><i class=\"fa fa-plus-circle\"></i></a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
var item_row = ";
        // line 156
        echo ($context["item_row"] ?? null);
        echo ";

function addItem() {
  html  = '<tr id=\"item-row' + item_row + '\">';
\thtml += '<td class=\"text-left\"><a href=\"\" id=\"thumb-image' + item_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 160
        echo ($context["placeholder"] ?? null);
        echo "\"  /></a><input type=\"hidden\" name=\"banner_item[' + item_row + '][image]\" value=\"\" id=\"input-image' + item_row + '\" /></td>';
  html += '<td class=\"text-left\">';
\t";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 163
            echo "\thtml += '<div class=\"input-group pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["language"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["code"] ?? null) : null);
            echo "/";
            echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["language"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["language"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["name"] ?? null) : null);
            echo "\" /></span>';
\thtml += '<input class=\"form-control\" type=\"text\" name=\"banner_item[' + item_row + '][title][";
            // line 164
            echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["language"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["language_id"] ?? null) : null);
            echo "]\" value=\"\" />';
\thtml += '</div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "\thtml += '</td>';
\thtml += '<td class=\"text-left\">';
\t";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 170
            echo "\thtml += '<div class=\"input-group pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["language"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["code"] ?? null) : null);
            echo "/";
            echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["language"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["language"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["name"] ?? null) : null);
            echo "\" /></span>';
\thtml += '<input class=\"form-control\" type=\"text\" name=\"banner_item[' + item_row + '][description][";
            // line 171
            echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["language"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["language_id"] ?? null) : null);
            echo "]\" value=\"\" />';
\thtml += '</div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "\thtml += '</td>';
\thtml += '<td class=\"text-left\">';
\t";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 177
            echo "\thtml += '<div class=\"input-group pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["language"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["code"] ?? null) : null);
            echo "/";
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["language"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["language"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["name"] ?? null) : null);
            echo "\" /></span>';
\thtml += '<input class=\"form-control\"  type=\"text\" name=\"banner_item[' + item_row + '][link][";
            // line 178
            echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["language"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["language_id"] ?? null) : null);
            echo "]\" value=\"\" />';
\thtml += '</div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "\thtml += '</td>';
\thtml += '<td>';
\thtml += '<div class=\"form-group\">';
\thtml += '\t<div class=\"col-sm-12 text-center\">';
\thtml += '\t<div class=\"radio-group-infinity\">';
\thtml += '\t\t<input id=\"config_banner_item_popup_yes_' + item_row + '\" class=\"hide-radio\" type=\"radio\" name=\"banner_item[' + item_row + '][popup]\" value=\"1\"/>';
\thtml += '\t\t<label for=\"config_banner_item_popup_yes_' + item_row + '\">";
        // line 187
        echo ($context["text_yes"] ?? null);
        echo "</label>';
\thtml += '\t\t<input id=\"config_banner_item_popup_no_' + item_row + '\" class=\"hide-radio\" type=\"radio\" name=\"banner_item[' + item_row + '][popup]\" value=\"0\" checked=\"checked\" />';
\thtml += '\t\t<label for=\"config_banner_item_popup_no_' + item_row + '\">";
        // line 189
        echo ($context["text_no"] ?? null);
        echo "</label>';
\thtml += '\t</div>';
\thtml += '\t</div>';
\thtml += '</div>';
\thtml += '</td>';
\thtml += '<td class=\"text-left\"><input class=\"form-control\" type=\"text\" name=\"banner_item[' + item_row + '][sort]\" size=\"1\" value=\"\" /></td>';
\thtml += '<td class=\"text-right\"><a class=\"btn btn-danger\" onclick=\"\$(\\'#item-row' + item_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 195
        echo ($context["button_delete"] ?? null);
        echo "\"><i class=\"fa fa-trash-o\"></i></a></td>';
\thtml += '</tr>';

\t\$('#items tbody').append(html);;

\titem_row++;
}
</script>
<style>
.hide-radio {
\tdisplay:none;
}
.radio-group-infinity {
\tdisplay: inline-block;
\tmargin-top: 9px;
\tborder-radius:15px;
\tbackground-color: white;
\tbackground-image: linear-gradient(to bottom, #eeeeee, white 25px);
\tpadding:3px;
\tbox-shadow: 0 -1px white inset, 0 1px 1px rgba(0, 0, 0, 0.05) inset;
}
.hide-radio + label {
\tbackground: #eceeef none repeat scroll 0 0;
\tcolor: #fff;
\tdisplay: block;
\tfloat: left;
\tfont-family: \"Oswald\",sans-serif;
\tpadding: 5px 0;
\ttext-align: center;
\t-webkit-transition: background-image 0.15s ease-in-out;
\t-moz-transition: background-image 0.15s ease-in-out;
\t-o-transition: background-color 0.15s ease-in-out;
\ttransition: background-image 0.15s ease-in-out;
\twidth: 45px;
\tmargin-bottom:0px;
\tposition:relative;
\tcolor:#969696;
\tbox-shadow: 0 1px 2px rgba(0, 0, 0, 0.15) inset, 0 0 3px rgba(0, 0, 0, 0.2) inset;
\ttext-shadow:0 1px rgba(255, 255, 255, 0.8);
}
.hide-radio + label:hover {
\tbox-shadow:2px 3px 3px rgba(0, 0, 0, 0.25) inset;
}
.hide-radio:first-child + label{
\tborder-radius:15px 0px 0px 15px;
}
.radio-group-infinity > label:last-child{
\tborder-radius:0px 15px 15px 0px;
\tmargin-left:-1px;
}

.hide-radio:checked + label {
\tbackground-image: linear-gradient(#47a8d8, #47a8d8);
\tdisplay: inline-block;
\tmargin-bottom:0px;
\tbox-shadow: 0 1px 2px rgba(0, 0, 0, 0.15) inset, 0 0 3px rgba(0, 0, 0, 0.2) inset;
\tcolor:#fff;
\ttext-shadow:0 1px rgba(0, 0, 0, 0.2);
}

</style>
";
        // line 256
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop_banner_blocks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 256,  569 => 195,  560 => 189,  555 => 187,  547 => 181,  538 => 178,  529 => 177,  525 => 176,  521 => 174,  512 => 171,  503 => 170,  499 => 169,  495 => 167,  486 => 164,  477 => 163,  473 => 162,  468 => 160,  461 => 156,  447 => 145,  441 => 141,  435 => 140,  433 => 139,  425 => 136,  417 => 133,  410 => 128,  403 => 126,  396 => 125,  389 => 123,  382 => 122,  379 => 121,  372 => 119,  365 => 118,  358 => 116,  351 => 115,  349 => 114,  342 => 109,  329 => 106,  321 => 105,  318 => 104,  314 => 103,  310 => 101,  297 => 98,  289 => 97,  286 => 96,  282 => 95,  278 => 93,  265 => 90,  257 => 89,  254 => 88,  250 => 87,  234 => 84,  228 => 82,  223 => 81,  221 => 80,  213 => 75,  209 => 74,  205 => 73,  201 => 72,  197 => 71,  193 => 70,  184 => 63,  179 => 60,  174 => 57,  172 => 56,  166 => 53,  160 => 49,  155 => 47,  150 => 46,  145 => 44,  140 => 43,  138 => 42,  132 => 39,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop_banner_blocks.twig", "");
    }
}
