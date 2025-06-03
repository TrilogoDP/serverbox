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

/* sale/callback_list.twig */
class __TwigTemplate_bf8d119eb8aacd4351fba7c4a8bdb1e013ce6a3425c88f10055be09e53d7f420 extends \Twig\Template
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
      <div class=\"buttons\">
\t  <a class=\"btn btn-primary\" onclick=\"\$('#form').attr('action', '";
        // line 7
        echo ($context["update"] ?? null);
        echo "'); \$('#form').submit();\" class=\"button\"><span  data-toggle=\"tooltip\" title=\"";
        echo ($context["status_done"] ?? null);
        echo "\" ><i class=\"fa fa-refresh\"></i></span></a>
\t  <a class=\"btn btn-danger\" onclick=\"\$('form').submit();\" class=\"button\"><span><i class=\"fa fa-trash-o fa-fw\"></i>";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "</span></a>
\t  <a class=\"btn btn-primary\" href=\"";
        // line 9
        echo ($context["callback_setting"] ?? null);
        echo "\"><span><i class=\"fa fa-wrench fa-fw\"></i>";
        echo ($context["button_callback_setting"] ?? null);
        echo "</span></a></div>
\t</div>
      <h1>";
        // line 11
        echo ($context["heading_title_callback"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
         <ul class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
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
        // line 17
        echo "        </ul>
      </ul>
    </div>
  </div>
\t<div class=\"container-fluid\">
\t   ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "\t  <div class=\"alert alert-danger\">";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t  ";
        }
        // line 25
        echo "\t  ";
        if (($context["success"] ?? null)) {
            // line 26
            echo "\t  <div class=\"alert alert-success\">";
            echo ($context["success"] ?? null);
            echo "</div>
\t  ";
        }
        // line 28
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        echo ($context["text_list"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"well\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-callback-id\">";
        // line 37
        echo ($context["text_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_callback_id\" value=\"";
        // line 38
        echo ($context["filter_callback_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_id"] ?? null);
        echo "\" id=\"input-callback-id\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-fio\">";
        // line 41
        echo ($context["text_fio"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_fio\" value=\"";
        // line 42
        echo ($context["filter_fio"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_fio"] ?? null);
        echo "\" id=\"input-fio\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-date-added\">";
        // line 47
        echo ($context["text_added"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 49
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-phone\">";
        // line 56
        echo ($context["text_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_phone\" value=\"";
        // line 57
        echo ($context["filter_phone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_telephone"] ?? null);
        echo "\" id=\"input-phone\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-status\">";
        // line 62
        echo ($context["text_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t  <option value=\"*\">---*---</option>
\t\t\t\t\t\t\t\t\t";
        // line 65
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 66
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["status_done"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 68
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["status_done"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t\t\t\t  ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 71
            echo "\t\t\t\t\t\t\t\t  <option value=\"0\" selected=\"selected\">";
            echo ($context["status_wait"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t ";
        } else {
            // line 73
            echo "\t\t\t\t\t\t\t\t  <option value=\"0\">";
            echo ($context["status_wait"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t  ";
        }
        // line 75
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-email\">";
        // line 78
        echo ($context["text_email_buyer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_email\" value=\"";
        // line 79
        echo ($context["filter_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_email_buyer"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 81
        echo ($context["button_filter"] ?? null);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t<form action=\"";
        // line 86
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"1\" style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').attr('checked', this.checked);\" /></td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t";
        // line 92
        if ((($context["sort"] ?? null) == "call_id")) {
            // line 93
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_call_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["text_id"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_call_id"] ?? null);
            echo "\">";
            echo ($context["text_id"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t";
        // line 99
        if ((($context["sort"] ?? null) == "name")) {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 102
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\"><span data-toggle=\"tooltip\" title=\"";
        // line 105
        echo ($context["text_callback_url_info"] ?? null);
        echo "\">";
        echo ($context["text_callback_url"] ?? null);
        echo "</span></td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 106
        echo ($context["text_time_callback"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 107
        echo ($context["text_topic_callback"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 108
        echo ($context["text_comment"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t";
        // line 110
        if ((($context["sort"] ?? null) == "username")) {
            // line 111
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_username"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["text_manager"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_username"] ?? null);
            echo "\">";
            echo ($context["text_manager"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 115
        echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 116
        echo ($context["text_status"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 117
        echo ($context["text_added"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 118
        echo ($context["text_modified"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 119
        echo ($context["text_action"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 123
        if (($context["callbacks"] ?? null)) {
            // line 124
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["callbacks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["callback"]) {
                // line 125
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t";
                // line 127
                if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["callback"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["selected"] ?? null) : null)) {
                    // line 128
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["callback"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["callback_id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["callback"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["callback_id"] ?? null) : null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                }
                // line 132
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 133
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["callback"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["callback_id"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t";
                // line 135
                if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["callback"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null)) {
                    echo "<div class=\"firstname\"><i class=\"fa fa-user fa-fw\"></i> ";
                    echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["callback"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
                    echo "</div>";
                }
                // line 136
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["callback"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["telephone"] ?? null) : null)) {
                    echo "<div class=\"telephone\"><i class=\"fa fa-phone fa-fw\"></i>";
                    echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["callback"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["telephone"] ?? null) : null);
                    echo "</div>";
                }
                // line 137
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["callback"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["email_buyer"] ?? null) : null)) {
                    echo "<div class=\"email\"><i class=\"fa fa-envelope-o fa-fw\"></i> ";
                    echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["callback"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["email_buyer"] ?? null) : null);
                    echo "</div>";
                }
                // line 138
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["callback"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["comment_buyer"] ?? null) : null)) {
                    echo "<div class=\"email\"><i class=\"fa fa fa-comment fa-fw\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["callback"], "comment_buyer", [], "any", false, false, false, 138);
                    echo "</div>";
                }
                // line 139
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\"><a class=\"btn btn-info\" href=\"";
                // line 140
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["callback"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["url_site"] ?? null) : null);
                echo "\" target=\"_blank\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i> ";
                echo ($context["text_link"] ?? null);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
                // line 141
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["callback"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["time_callback_on"] ?? null) : null);
                echo "</br>";
                echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["callback"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["time_callback_off"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 142
                echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["callback"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["topic_callback_send"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 143
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["callback"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["comment"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
                // line 144
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["callback"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["username"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t";
                // line 145
                if (((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["callback"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["status"] ?? null) : null) == ($context["status_done"] ?? null))) {
                    // line 146
                    echo "\t\t\t\t\t\t\t\t\t<td class=\"text-center\" style=\"background:#0BED0B;\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["callback"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["status"] ?? null) : null);
                    echo "</td>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 148
                    echo "\t\t\t\t\t\t\t\t\t<td class=\"text-center\" style=\"background:#EDB40B;\">";
                    echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["callback"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["status"] ?? null) : null);
                    echo "</td>
\t\t\t\t\t\t\t\t";
                }
                // line 150
                echo "\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["callback"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["date_added"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 151
                echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["callback"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["date_modified"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
                // line 153
                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["callback"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["action"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_edit"] ?? null);
                echo "\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['callback'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 158
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"center\" colspan=\"9\">";
            // line 159
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 162
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</form>

\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 168
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 169
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=sale/callback&user_token=";
        // line 177
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_callback_id = \$('input[name=\\'filter_callback_id\\']').val();

\tif (filter_callback_id) {
\t\turl += '&filter_callback_id=' + encodeURIComponent(filter_callback_id);
\t}

\tvar filter_fio = \$('input[name=\\'filter_fio\\']').val();

\tif (filter_fio) {
\t\turl += '&filter_fio=' + encodeURIComponent(filter_fio);
\t}
\tvar filter_phone = \$('input[name=\\'filter_phone\\']').val();

\tif (filter_phone) {
\t\turl += '&filter_phone=' + encodeURIComponent(filter_phone);
\t}
\tvar filter_email = \$('input[name=\\'filter_email\\']').val();

\tif (filter_email) {
\t\turl += '&filter_email=' + encodeURIComponent(filter_email);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status != '*') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = url;
});
</script>
  <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\"></script>
  <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" rel=\"stylesheet\" media=\"screen\" />
  <script>
\$('.date').datetimepicker({
\tpickTime: false
});
</script>
";
        // line 223
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "sale/callback_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 223,  514 => 177,  503 => 169,  499 => 168,  491 => 162,  485 => 159,  482 => 158,  479 => 157,  467 => 153,  462 => 151,  457 => 150,  451 => 148,  445 => 146,  443 => 145,  439 => 144,  435 => 143,  431 => 142,  425 => 141,  419 => 140,  416 => 139,  409 => 138,  402 => 137,  395 => 136,  389 => 135,  384 => 133,  381 => 132,  375 => 130,  369 => 128,  367 => 127,  363 => 125,  358 => 124,  356 => 123,  349 => 119,  345 => 118,  341 => 117,  337 => 116,  334 => 115,  326 => 113,  316 => 111,  314 => 110,  309 => 108,  305 => 107,  301 => 106,  295 => 105,  292 => 104,  284 => 102,  274 => 100,  272 => 99,  268 => 97,  260 => 95,  250 => 93,  248 => 92,  239 => 86,  231 => 81,  224 => 79,  220 => 78,  215 => 75,  209 => 73,  203 => 71,  200 => 70,  194 => 68,  188 => 66,  186 => 65,  180 => 62,  170 => 57,  166 => 56,  154 => 49,  149 => 47,  139 => 42,  135 => 41,  127 => 38,  123 => 37,  113 => 30,  109 => 28,  103 => 26,  100 => 25,  94 => 23,  92 => 22,  85 => 17,  74 => 15,  70 => 14,  64 => 11,  57 => 9,  53 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/callback_list.twig", "");
    }
}
