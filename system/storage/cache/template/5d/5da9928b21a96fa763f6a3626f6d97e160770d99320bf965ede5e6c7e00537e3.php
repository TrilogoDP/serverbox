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

/* setting/setting.twig */
class __TwigTemplate_b58fd48069ef8e994e53a04a1ad1438549162a142071d65ae19a77e391b47fad extends \Twig\Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
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
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-seopro\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_seopro"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 45
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 47
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 48
        if (($context["error_meta_title"] ?? null)) {
            // line 49
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 50
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 53
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 55
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 59
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 61
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 65
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 70
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 70) == ($context["config_theme"] ?? null))) {
                // line 71
                echo "                    
                    <option value=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 72);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 72);
                echo "</option>
                    
                    ";
            } else {
                // line 75
                echo "                    
                    <option value=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 76);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 76);
                echo "</option>
                    
                    ";
            }
            // line 79
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 86
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 91
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 91) == ($context["config_layout_id"] ?? null))) {
                // line 92
                echo "                    
                    <option value=\"";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 93);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 93);
                echo "</option>
                    
                    ";
            } else {
                // line 96
                echo "                    
                    <option value=\"";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 97);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 97);
                echo "</option>
                    
                    ";
            }
            // line 100
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 108
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 110
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 111
        if (($context["error_name"] ?? null)) {
            // line 112
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 113
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 116
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 118
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 119
        if (($context["error_owner"] ?? null)) {
            // line 120
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 121
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 124
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 126
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 127
        if (($context["error_address"] ?? null)) {
            // line 128
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 129
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 132
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 134
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 138
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 140
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 141
        if (($context["error_email"] ?? null)) {
            // line 142
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 143
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 146
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 148
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 149
        if (($context["error_telephone"] ?? null)) {
            // line 150
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 151
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 154
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 156
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 160
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 161
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 162
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 166
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 168
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 172
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 174
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 177
        if (($context["locations"] ?? null)) {
            // line 178
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 179
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 181
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 182
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 182), ($context["config_location"] ?? null))) {
                    // line 183
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 183);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 184);
                    echo "
                      ";
                } else {
                    // line 186
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 186);
                    echo "\" />
                      ";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 187);
                    echo "
                      ";
                }
                // line 188
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo " </div>
              </div>
              ";
        }
        // line 192
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 195
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    
                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 200
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 200) == ($context["config_country_id"] ?? null))) {
                // line 201
                echo "                    
                    <option value=\"";
                // line 202
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 202);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 202);
                echo "</option>
                    
                    ";
            } else {
                // line 205
                echo "                    
                    <option value=\"";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 206);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 206);
                echo "</option>
                    
                    ";
            }
            // line 209
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 215
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 222
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 226
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 226) == ($context["config_timezone"] ?? null))) {
                // line 227
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 227);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 227);
                echo "</option>
                      ";
            } else {
                // line 229
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 229);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 229);
                echo "</option>
                      ";
            }
            // line 231
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 236
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    
                    ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 241
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 241) == ($context["config_language"] ?? null))) {
                // line 242
                echo "                    
                    <option value=\"";
                // line 243
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 243);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 243);
                echo "</option>
                    
                    ";
            } else {
                // line 246
                echo "                    
                    <option value=\"";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 247);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 247);
                echo "</option>
                    
                    ";
            }
            // line 250
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 256
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    
                    ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 261
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 261) == ($context["config_admin_language"] ?? null))) {
                // line 262
                echo "                    
                    <option value=\"";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 263);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 263);
                echo "</option>
                    
                    ";
            } else {
                // line 266
                echo "                    
                    <option value=\"";
                // line 267
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 267);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 267);
                echo "</option>
                    
                    ";
            }
            // line 270
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 276
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    
                    ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 281
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 281) == ($context["config_currency"] ?? null))) {
                // line 282
                echo "                    
                    <option value=\"";
                // line 283
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 283);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 283);
                echo "</option>
                    
                    ";
            } else {
                // line 286
                echo "                    
                    <option value=\"";
                // line 287
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 287);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 287);
                echo "</option>
                    
                    ";
            }
            // line 290
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 296
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 298
        if (($context["config_currency_auto"] ?? null)) {
            // line 299
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 300
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 302
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 303
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 304
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 305
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 306
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 307
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 309
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 310
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 311
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency-engine\">";
        // line 315
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    ";
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 319
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 319) == ($context["config_currency_engine"] ?? null))) {
                // line 320
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 320);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 320);
                echo "</option>
                    ";
            } else {
                // line 322
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 322);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 322);
                echo "</option>
                    ";
            }
            // line 324
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 329
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    
                    ";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 334
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 334) == ($context["config_length_class_id"] ?? null))) {
                // line 335
                echo "                    
                    <option value=\"";
                // line 336
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 336);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 336);
                echo "</option>
                    
                    ";
            } else {
                // line 339
                echo "                    
                    <option value=\"";
                // line 340
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 340);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 340);
                echo "</option>
                    
                    ";
            }
            // line 343
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 349
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    
                    ";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 354
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 354) == ($context["config_weight_class_id"] ?? null))) {
                // line 355
                echo "                    
                    <option value=\"";
                // line 356
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 356);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 356);
                echo "</option>
                    
                    ";
            } else {
                // line 359
                echo "                    
                    <option value=\"";
                // line 360
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 360);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 360);
                echo "</option>
                    
                    ";
            }
            // line 363
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">

\t\t\t\t<div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-callback-agree\">
\t\t\t\t  <span data-toggle=\"tooltip\" title=\"";
        // line 373
        echo ($context["help_callback_agree"] ?? null);
        echo "\">";
        echo ($context["entry_callback_agree"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_callback_id\" id=\"input-callback-agree\" class=\"form-control\">
                      <option value=\"0\">";
        // line 376
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            echo " 
                      ";
            // line 378
            if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["information"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["information_id"] ?? null) : null) == ($context["config_callback_id"] ?? null))) {
                echo " 
                      <option value=\"";
                // line 379
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["information"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["information_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["information"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["title"] ?? null) : null);
                echo "</option>
                      ";
            } else {
                // line 380
                echo " 
                      <option value=\"";
                // line 381
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["information"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["information_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["information"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["title"] ?? null) : null);
                echo "</option>
                      ";
            }
            // line 382
            echo " 
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        echo " 
                    </select>
                  </div>
                </div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-quickorder-agree\">
\t\t\t\t  <span data-toggle=\"tooltip\" title=\"";
        // line 390
        echo ($context["help_quickorder_agree"] ?? null);
        echo "\">";
        echo ($context["entry_quickorder_agree"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_quickorder_id\" id=\"input-quickorder-agree\" class=\"form-control\">
                      <option value=\"0\">";
        // line 393
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 394
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            echo " 
                      ";
            // line 395
            if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["information"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["information_id"] ?? null) : null) == ($context["config_quickorder_id"] ?? null))) {
                echo " 
                      <option value=\"";
                // line 396
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["information"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["information_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["information"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["title"] ?? null) : null);
                echo "</option>
                      ";
            } else {
                // line 397
                echo " 
                      <option value=\"";
                // line 398
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["information"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["information_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["information"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["title"] ?? null) : null);
                echo "</option>
                      ";
            }
            // line 399
            echo " 
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 400
        echo " 
                    </select>
                  </div>
                </div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-foundcheaper-agree\">
\t\t\t\t  <span data-toggle=\"tooltip\" title=\"";
        // line 407
        echo ($context["help_foundcheaper_agree"] ?? null);
        echo "\">";
        echo ($context["entry_foundcheaper_agree"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_foundcheaper_id\" id=\"input-foundcheaper-agree\" class=\"form-control\">
                      <option value=\"0\">";
        // line 410
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 411
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            echo " 
                      ";
            // line 412
            if (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["information"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["information_id"] ?? null) : null) == ($context["config_foundcheaper_id"] ?? null))) {
                echo " 
                      <option value=\"";
                // line 413
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["information"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["information_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["information"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["title"] ?? null) : null);
                echo "</option>
                      ";
            } else {
                // line 414
                echo " 
                      <option value=\"";
                // line 415
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["information"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["information_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["information"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["title"] ?? null) : null);
                echo "</option>
                      ";
            }
            // line 416
            echo " 
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 417
        echo " 
                    </select>
                  </div>
                </div>
\t\t\t
              <fieldset>
                <legend>";
        // line 423
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 425
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 427
        if (($context["config_product_count"] ?? null)) {
            // line 428
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 429
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 431
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 432
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 433
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 434
        if ( !($context["config_product_count"] ?? null)) {
            // line 435
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 436
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 438
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 439
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 440
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 444
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 446
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 447
        if (($context["error_limit_admin"] ?? null)) {
            // line 448
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 449
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-autocomplete-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 452
        echo ($context["help_limit_autocomplete"] ?? null);
        echo "\">";
        echo ($context["entry_limit_autocomplete"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_autocomplete\" value=\"";
        // line 454
        echo ($context["config_limit_autocomplete"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_autocomplete"] ?? null);
        echo "\" id=\"input-autocomplete-limit\" class=\"form-control\" />
                    ";
        // line 455
        if (($context["error_limit_autocomplete"] ?? null)) {
            // line 456
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_autocomplete"] ?? null);
            echo "</div>
                    ";
        }
        // line 457
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 461
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 463
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 465
        if (($context["config_review_status"] ?? null)) {
            // line 466
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 467
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 469
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 470
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 471
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 472
        if ( !($context["config_review_status"] ?? null)) {
            // line 473
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 474
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 476
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 477
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 478
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 482
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 484
        if (($context["config_review_guest"] ?? null)) {
            // line 485
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 486
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 488
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 489
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 490
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 491
        if ( !($context["config_review_guest"] ?? null)) {
            // line 492
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 493
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 495
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 496
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 497
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 502
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 504
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 506
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 507
        if (($context["error_voucher_min"] ?? null)) {
            // line 508
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 509
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 512
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 514
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 515
        if (($context["error_voucher_max"] ?? null)) {
            // line 516
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 517
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 521
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 523
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 525
        if (($context["config_tax"] ?? null)) {
            // line 526
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 527
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 529
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 530
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 531
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 532
        if ( !($context["config_tax"] ?? null)) {
            // line 533
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 534
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 536
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 537
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 538
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 542
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 545
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 547
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            // line 548
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 549
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 552
            echo "                      
                      <option value=\"shipping\">";
            // line 553
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 556
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            // line 557
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 558
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 561
            echo "                      
                      <option value=\"payment\">";
            // line 562
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 565
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 570
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 573
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 575
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            // line 576
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 577
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 580
            echo "                      
                      <option value=\"shipping\">";
            // line 581
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 584
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            // line 585
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 586
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 589
            echo "                      
                      <option value=\"payment\">";
            // line 590
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 593
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 599
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 601
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 603
        if (($context["config_customer_online"] ?? null)) {
            // line 604
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 605
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 607
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 608
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 609
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 610
        if ( !($context["config_customer_online"] ?? null)) {
            // line 611
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 612
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 614
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 615
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 616
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 620
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 622
        if (($context["config_customer_activity"] ?? null)) {
            // line 623
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 624
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 626
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 627
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 628
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 629
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 630
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 631
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 633
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 634
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 635
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 639
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 641
        if (($context["config_customer_search"] ?? null)) {
            // line 642
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 643
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 645
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 646
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 647
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 648
        if ( !($context["config_customer_search"] ?? null)) {
            // line 649
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 650
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 652
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 653
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 654
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 658
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      
                      ";
        // line 662
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 663
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 663) == ($context["config_customer_group_id"] ?? null))) {
                // line 664
                echo "                      
                      <option value=\"";
                // line 665
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 665);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 665);
                echo "</option>
                      
                      ";
            } else {
                // line 668
                echo "                      
                      <option value=\"";
                // line 669
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 669);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 669);
                echo "</option>
                      
                      ";
            }
            // line 672
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 673
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 678
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 679
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 680
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 681
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 681), ($context["config_customer_group_display"] ?? null))) {
                // line 682
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 682);
                echo "\" checked=\"checked\" />
                        ";
                // line 683
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 683);
                echo "
                        ";
            } else {
                // line 685
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 685);
                echo "\" />
                        ";
                // line 686
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 686);
                echo "
                        ";
            }
            // line 687
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 690
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 691
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 692
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 695
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 697
        if (($context["config_customer_price"] ?? null)) {
            // line 698
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 699
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 701
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 702
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 703
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 704
        if ( !($context["config_customer_price"] ?? null)) {
            // line 705
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 706
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 708
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 709
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 710
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 714
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 716
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 717
        if (($context["error_login_attempts"] ?? null)) {
            // line 718
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 719
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 722
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 725
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 727
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 728
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 728) == ($context["config_account_id"] ?? null))) {
                // line 729
                echo "                      
                      <option value=\"";
                // line 730
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 730);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 730);
                echo "</option>
                      
                      ";
            } else {
                // line 733
                echo "                      
                      <option value=\"";
                // line 734
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 734);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 734);
                echo "</option>
                      
                      ";
            }
            // line 737
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 738
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 744
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 746
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 748
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 752
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 754
        if (($context["config_cart_weight"] ?? null)) {
            // line 755
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 756
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 758
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 759
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 760
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 761
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 762
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 763
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 765
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 766
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 767
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 771
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 773
        if (($context["config_checkout_guest"] ?? null)) {
            // line 774
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 775
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 777
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 778
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 779
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 780
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 781
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 782
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 784
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 785
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 786
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 790
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 793
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 795
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 796
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 796) == ($context["config_checkout_id"] ?? null))) {
                // line 797
                echo "                      
                      <option value=\"";
                // line 798
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 798);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 798);
                echo "</option>
                      
                      ";
            } else {
                // line 801
                echo "                      
                      <option value=\"";
                // line 802
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 802);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 802);
                echo "</option>
                      
                      ";
            }
            // line 805
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 806
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 811
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      ";
        // line 815
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 816
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 816) == ($context["config_order_status_id"] ?? null))) {
                // line 817
                echo "                      
                      <option value=\"";
                // line 818
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 818);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 818);
                echo "</option>
                      
                      ";
            } else {
                // line 821
                echo "                      
                      <option value=\"";
                // line 822
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 822);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 822);
                echo "</option>
                      
                      ";
            }
            // line 825
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 826
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 831
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 833
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 834
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 835
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 835), ($context["config_processing_status"] ?? null))) {
                // line 836
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 836);
                echo "\" checked=\"checked\" />
                          ";
                // line 837
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 837);
                echo "
                          ";
            } else {
                // line 839
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 839);
                echo "\" />
                          ";
                // line 840
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 840);
                echo "
                          ";
            }
            // line 841
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 843
        echo " </div>
                    ";
        // line 844
        if (($context["error_processing_status"] ?? null)) {
            // line 845
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 846
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 849
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 851
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 852
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 853
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 853), ($context["config_complete_status"] ?? null))) {
                // line 854
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 854);
                echo "\" checked=\"checked\" />
                          ";
                // line 855
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 855);
                echo "
                          ";
            } else {
                // line 857
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 857);
                echo "\" />
                          ";
                // line 858
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 858);
                echo "
                          ";
            }
            // line 859
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 861
        echo " </div>
                    ";
        // line 862
        if (($context["error_complete_status"] ?? null)) {
            // line 863
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 864
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 867
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      
                      ";
        // line 871
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 872
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 872) == ($context["config_fraud_status_id"] ?? null))) {
                // line 873
                echo "                      
                      <option value=\"";
                // line 874
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 874);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 874);
                echo "</option>
                      
                      ";
            } else {
                // line 877
                echo "                      
                      <option value=\"";
                // line 878
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 878);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 878);
                echo "</option>
                      
                      ";
            }
            // line 881
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 882
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 887
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 890
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 892
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 893
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 893) == ($context["config_api_id"] ?? null))) {
                // line 894
                echo "                      
                      <option value=\"";
                // line 895
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 895);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 895);
                echo "</option>
                      
                      ";
            } else {
                // line 898
                echo "                      
                      <option value=\"";
                // line 899
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 899);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 899);
                echo "</option>
                      
                      ";
            }
            // line 902
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 903
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 909
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 911
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 913
        if (($context["config_stock_display"] ?? null)) {
            // line 914
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 915
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 917
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 918
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 919
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 920
        if ( !($context["config_stock_display"] ?? null)) {
            // line 921
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 922
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 924
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 925
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 926
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 930
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 932
        if (($context["config_stock_warning"] ?? null)) {
            // line 933
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 934
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 936
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 937
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 938
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 939
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 940
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 941
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 943
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 944
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 945
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 949
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 951
        if (($context["config_stock_checkout"] ?? null)) {
            // line 952
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 953
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 955
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 956
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 957
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 958
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 959
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 960
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 962
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 963
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 964
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 969
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 971
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      
                      ";
        // line 975
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 976
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 976) == ($context["config_affiliate_group_id"] ?? null))) {
                // line 977
                echo "                      
                      <option value=\"";
                // line 978
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 978);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 978);
                echo "</option>
                      
                      ";
            } else {
                // line 981
                echo "                      
                      <option value=\"";
                // line 982
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 982);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 982);
                echo "</option>
                      
                      ";
            }
            // line 985
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 986
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 991
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 993
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 994
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 995
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 997
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 998
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 999
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1000
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 1001
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1002
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1004
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 1005
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1006
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1010
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1012
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 1013
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1014
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1016
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 1017
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1018
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1019
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 1020
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1021
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1023
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 1024
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1025
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 1029
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 1031
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 1035
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1038
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1040
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1041
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1041) == ($context["config_affiliate_id"] ?? null))) {
                // line 1042
                echo "                      
                      <option value=\"";
                // line 1043
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1043);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1043);
                echo "</option>
                      
                      ";
            } else {
                // line 1046
                echo "                      
                      <option value=\"";
                // line 1047
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1047);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1047);
                echo "</option>
                      
                      ";
            }
            // line 1050
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1051
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1057
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 1059
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1062
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1064
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1065
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1065) == ($context["config_return_id"] ?? null))) {
                // line 1066
                echo "                      
                      <option value=\"";
                // line 1067
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1067);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1067);
                echo "</option>
                      
                      ";
            } else {
                // line 1070
                echo "                      
                      <option value=\"";
                // line 1071
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1071);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1071);
                echo "</option>
                      
                      ";
            }
            // line 1074
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1075
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 1080
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      
                      ";
        // line 1084
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1085
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1085) == ($context["config_return_status_id"] ?? null))) {
                // line 1086
                echo "                      
                      <option value=\"";
                // line 1087
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1087);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1087);
                echo "</option>
                      
                      ";
            } else {
                // line 1090
                echo "                      
                      <option value=\"";
                // line 1091
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1091);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1091);
                echo "</option>
                      
                      ";
            }
            // line 1094
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1095
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1101
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1103
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1106
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1109
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1109) == ($context["config_captcha"] ?? null))) {
                // line 1110
                echo "                      
                      <option value=\"";
                // line 1111
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1111);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1111);
                echo "</option>
                      
                      ";
            } else {
                // line 1114
                echo "                      
                      <option value=\"";
                // line 1115
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1115);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1115);
                echo "</option>
                      
                      ";
            }
            // line 1118
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1119
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1124
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1127
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1128
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1128), ($context["config_captcha_page"] ?? null))) {
                // line 1129
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1129);
                echo "\" checked=\"checked\" />
                          ";
                // line 1130
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1130);
                echo "
                          ";
            } else {
                // line 1132
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1132);
                echo "\" />
                          ";
                // line 1133
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1133);
                echo "
                          ";
            }
            // line 1134
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1136
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1143
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1144
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1145
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1149
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1150
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1151
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1157
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1159
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      
                      ";
        // line 1163
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            // line 1164
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1165
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1168
            echo "                      
                      <option value=\"mail\">";
            // line 1169
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1172
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            // line 1173
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1174
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1177
            echo "                      
                      <option value=\"smtp\">";
            // line 1178
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1181
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1186
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1188
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1192
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1194
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1198
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1200
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1204
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1206
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1210
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1212
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1216
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1218
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1223
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1225
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1228
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1229
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1229), ($context["config_mail_alert"] ?? null))) {
                // line 1230
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1230);
                echo "\" checked=\"checked\" />
                          ";
                // line 1231
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1231);
                echo "
                          ";
            } else {
                // line 1233
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1233);
                echo "\" />
                          ";
                // line 1234
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1234);
                echo "
                          ";
            }
            // line 1235
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1237
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1241
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1243
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1250
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1252
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1254
        if (($context["config_maintenance"] ?? null)) {
            // line 1255
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1256
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1258
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1259
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1260
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1261
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1262
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1263
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1265
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1266
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1267
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1271
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1273
        if (($context["config_seo_url"] ?? null)) {
            // line 1274
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1275
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1277
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1278
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1279
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1280
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1281
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1282
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1284
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1285
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1286
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1290
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1292
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1296
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1298
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1303
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1305
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1307
        if (($context["config_secure"] ?? null)) {
            // line 1308
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1309
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1311
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1312
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1313
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1314
        if ( !($context["config_secure"] ?? null)) {
            // line 1315
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1316
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1318
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1319
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1320
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1324
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1326
        if (($context["config_password"] ?? null)) {
            // line 1327
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1328
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1330
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1331
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1332
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1333
        if ( !($context["config_password"] ?? null)) {
            // line 1334
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1335
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1337
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1338
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1339
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1343
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1345
        if (($context["config_shared"] ?? null)) {
            // line 1346
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1347
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1349
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1350
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1351
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1352
        if ( !($context["config_shared"] ?? null)) {
            // line 1353
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1354
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1356
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1357
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1358
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1362
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1364
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1365
        if (($context["error_encryption"] ?? null)) {
            // line 1366
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1367
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1371
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1373
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1375
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1379
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1381
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1385
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1387
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1392
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1394
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1396
        if (($context["config_error_display"] ?? null)) {
            // line 1397
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1398
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1400
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1401
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1402
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1403
        if ( !($context["config_error_display"] ?? null)) {
            // line 1404
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1405
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1407
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1408
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1409
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1413
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1415
        if (($context["config_error_log"] ?? null)) {
            // line 1416
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1417
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1419
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1420
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1421
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1422
        if ( !($context["config_error_log"] ?? null)) {
            // line 1423
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1424
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1426
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1427
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1428
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1432
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1434
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1435
        if (($context["error_log"] ?? null)) {
            // line 1436
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1437
        echo " </div>
                </div>
              </fieldset>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"tab-pane\" id=\"tab-seopro\">
\t\t\t<fieldset>
\t\t\t<legend>";
        // line 1445
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1447
        echo ($context["help_seo_pro"] ?? null);
        echo "\">";
        echo ($context["entry_seo_pro"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1449
        if (($context["config_seo_pro"] ?? null)) {
            // line 1450
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1451
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1453
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"1\" />
\t\t\t\t  ";
            // line 1454
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1455
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1456
        if ( !($context["config_seo_pro"] ?? null)) {
            // line 1457
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1458
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1460
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"0\" />
\t\t\t\t  ";
            // line 1461
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1462
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1466
        echo ($context["help_config_seo_url_include_path"] ?? null);
        echo "\">";
        echo ($context["entry_config_seo_url_include_path"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1468
        if (($context["config_seo_url_include_path"] ?? null)) {
            // line 1469
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1470
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1472
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" />
\t\t\t\t  ";
            // line 1473
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1474
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1475
        if ( !($context["config_seo_url_include_path"] ?? null)) {
            // line 1476
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1477
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1479
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" />
\t\t\t\t  ";
            // line 1480
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1481
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1485
        echo ($context["entry_config_seo_url_cache"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1487
        if (($context["config_seo_url_cache"] ?? null)) {
            // line 1488
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1489
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1491
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"1\" />
\t\t\t\t  ";
            // line 1492
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1493
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1494
        if ( !($context["config_seo_url_cache"] ?? null)) {
            // line 1495
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1496
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1498
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"0\" />
\t\t\t\t  ";
            // line 1499
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1500
        echo " </label>
\t\t\t  </div>
\t\t\t</div>\t\t
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1504
        echo ($context["entry_seopro_addslash"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1506
        if (($context["config_seopro_addslash"] ?? null)) {
            // line 1507
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1508
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1510
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"1\" />
\t\t\t\t  ";
            // line 1511
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1512
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1513
        if ( !($context["config_seopro_addslash"] ?? null)) {
            // line 1514
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1515
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1517
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"0\" />
\t\t\t\t  ";
            // line 1518
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1519
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1523
        echo ($context["entry_seopro_lowercase"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1525
        if (($context["config_seopro_lowercase"] ?? null)) {
            // line 1526
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1527
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1529
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"1\" />
\t\t\t\t  ";
            // line 1530
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1531
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1532
        if ( !($context["config_seopro_lowercase"] ?? null)) {
            // line 1533
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1534
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1536
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"0\" />
\t\t\t\t  ";
            // line 1537
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1538
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-page-postfix\">";
        // line 1542
        echo ($context["entry_page_postfix"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"config_page_postfix\" value=\"";
        // line 1544
        echo ($context["config_page_postfix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_page_postfix"] ?? null);
        echo "\" id=\"input-page-postfix\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1548
        echo ($context["help_config_valide_param_flag"] ?? null);
        echo "\">";
        echo ($context["entry_config_valide_param_flag"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1550
        if (($context["config_valide_param_flag"] ?? null)) {
            // line 1551
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1552
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1554
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"1\" />
\t\t\t\t  ";
            // line 1555
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1556
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1557
        if ( !($context["config_valide_param_flag"] ?? null)) {
            // line 1558
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1559
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1561
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"0\" />
\t\t\t\t  ";
            // line 1562
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1563
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-valide-params\"><span data-toggle=\"tooltip\" title=\"";
        // line 1567
        echo ($context["help_valide_params"] ?? null);
        echo "\">";
        echo ($context["entry_valide_params"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<textarea name=\"config_valide_params\" rows=10\" placeholder=\"";
        // line 1569
        echo ($context["entry_valide_params"] ?? null);
        echo "\" id=\"input-valide-params\" class=\"form-control\">";
        echo ($context["config_valide_params"] ?? null);
        echo "</textarea>
\t\t\t  </div>
\t\t\t</div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1573
        echo ($context["entry_canonical_method_help"] ?? null);
        echo "\">";
        echo ($context["entry_canonical_method"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1575
        if (($context["config_canonical_method"] ?? null)) {
            // line 1576
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1578
            echo ($context["text_canonical_ocstore"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"0\"/>
                  ";
            // line 1582
            echo ($context["text_canonical_opencart"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1585
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"1\"/>
                  ";
            // line 1587
            echo ($context["text_canonical_ocstore"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1591
            echo ($context["text_canonical_opencart"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1594
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1597
        echo ($context["entry_canonical_self_help"] ?? null);
        echo "\">";
        echo ($context["entry_canonical_self"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1599
        if (($context["config_canonical_self"] ?? null)) {
            // line 1600
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1602
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"0\"/>
                  ";
            // line 1606
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1609
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"1\"/>
                  ";
            // line 1611
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1615
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1618
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1621
        echo ($context["entry_add_prevnext_help"] ?? null);
        echo "\">";
        echo ($context["entry_add_prevnext"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1623
        if (($context["config_add_prevnext"] ?? null)) {
            // line 1624
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1626
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"0\"/>
                  ";
            // line 1630
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1633
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"1\"/>
                  ";
            // line 1635
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1639
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1642
        echo "              </div>
            </div>
            <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 1645
        echo ($context["entry_noindex_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 1647
        if (($context["config_noindex_status"] ?? null)) {
            // line 1648
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"1\" checked=\"checked\"/>
                ";
            // line 1650
            echo ($context["text_yes"] ?? null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"0\"/>
                ";
            // line 1654
            echo ($context["text_no"] ?? null);
            echo "
              </label>
              ";
        } else {
            // line 1657
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"1\"/>
                ";
            // line 1659
            echo ($context["text_yes"] ?? null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"0\" checked=\"checked\"/>
                ";
            // line 1663
            echo ($context["text_no"] ?? null);
            echo "
              </label>
              ";
        }
        // line 1666
        echo "            </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-valide-params\"><span data-toggle=\"tooltip\" title=\"";
        // line 1669
        echo ($context["help_valide_params"] ?? null);
        echo "\">";
        echo ($context["entry_noindex_disallow_params"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <textarea name=\"config_noindex_disallow_params\" rows=10\" placeholder=\"";
        // line 1671
        echo ($context["entry_noindex_disallow_params"] ?? null);
        echo "\" id=\"input-valide-params\" class=\"form-control\">";
        echo ($context["config_noindex_disallow_params"] ?? null);
        echo "</textarea>
              </div>
            </div>
\t\t  </fieldset>
\t\t</div>
\t\t\t
\t\t\t
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1686
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1708
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1717
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1723
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1730
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1745
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4515 => 1745,  4497 => 1730,  4487 => 1723,  4478 => 1717,  4466 => 1708,  4441 => 1686,  4421 => 1671,  4414 => 1669,  4409 => 1666,  4403 => 1663,  4396 => 1659,  4392 => 1657,  4386 => 1654,  4379 => 1650,  4375 => 1648,  4373 => 1647,  4368 => 1645,  4363 => 1642,  4357 => 1639,  4350 => 1635,  4346 => 1633,  4340 => 1630,  4333 => 1626,  4329 => 1624,  4327 => 1623,  4320 => 1621,  4315 => 1618,  4309 => 1615,  4302 => 1611,  4298 => 1609,  4292 => 1606,  4285 => 1602,  4281 => 1600,  4279 => 1599,  4272 => 1597,  4267 => 1594,  4261 => 1591,  4254 => 1587,  4250 => 1585,  4244 => 1582,  4237 => 1578,  4233 => 1576,  4231 => 1575,  4224 => 1573,  4215 => 1569,  4208 => 1567,  4202 => 1563,  4197 => 1562,  4194 => 1561,  4189 => 1559,  4186 => 1558,  4184 => 1557,  4181 => 1556,  4176 => 1555,  4173 => 1554,  4168 => 1552,  4165 => 1551,  4163 => 1550,  4156 => 1548,  4147 => 1544,  4142 => 1542,  4136 => 1538,  4131 => 1537,  4128 => 1536,  4123 => 1534,  4120 => 1533,  4118 => 1532,  4115 => 1531,  4110 => 1530,  4107 => 1529,  4102 => 1527,  4099 => 1526,  4097 => 1525,  4092 => 1523,  4086 => 1519,  4081 => 1518,  4078 => 1517,  4073 => 1515,  4070 => 1514,  4068 => 1513,  4065 => 1512,  4060 => 1511,  4057 => 1510,  4052 => 1508,  4049 => 1507,  4047 => 1506,  4042 => 1504,  4036 => 1500,  4031 => 1499,  4028 => 1498,  4023 => 1496,  4020 => 1495,  4018 => 1494,  4015 => 1493,  4010 => 1492,  4007 => 1491,  4002 => 1489,  3999 => 1488,  3997 => 1487,  3992 => 1485,  3986 => 1481,  3981 => 1480,  3978 => 1479,  3973 => 1477,  3970 => 1476,  3968 => 1475,  3965 => 1474,  3960 => 1473,  3957 => 1472,  3952 => 1470,  3949 => 1469,  3947 => 1468,  3940 => 1466,  3934 => 1462,  3929 => 1461,  3926 => 1460,  3921 => 1458,  3918 => 1457,  3916 => 1456,  3913 => 1455,  3908 => 1454,  3905 => 1453,  3900 => 1451,  3897 => 1450,  3895 => 1449,  3888 => 1447,  3883 => 1445,  3873 => 1437,  3867 => 1436,  3865 => 1435,  3859 => 1434,  3854 => 1432,  3848 => 1428,  3843 => 1427,  3840 => 1426,  3835 => 1424,  3832 => 1423,  3830 => 1422,  3827 => 1421,  3822 => 1420,  3819 => 1419,  3814 => 1417,  3811 => 1416,  3809 => 1415,  3804 => 1413,  3798 => 1409,  3793 => 1408,  3790 => 1407,  3785 => 1405,  3782 => 1404,  3780 => 1403,  3777 => 1402,  3772 => 1401,  3769 => 1400,  3764 => 1398,  3761 => 1397,  3759 => 1396,  3754 => 1394,  3749 => 1392,  3739 => 1387,  3732 => 1385,  3723 => 1381,  3716 => 1379,  3707 => 1375,  3700 => 1373,  3695 => 1371,  3689 => 1367,  3683 => 1366,  3681 => 1365,  3675 => 1364,  3668 => 1362,  3662 => 1358,  3657 => 1357,  3654 => 1356,  3649 => 1354,  3646 => 1353,  3644 => 1352,  3641 => 1351,  3636 => 1350,  3633 => 1349,  3628 => 1347,  3625 => 1346,  3623 => 1345,  3616 => 1343,  3610 => 1339,  3605 => 1338,  3602 => 1337,  3597 => 1335,  3594 => 1334,  3592 => 1333,  3589 => 1332,  3584 => 1331,  3581 => 1330,  3576 => 1328,  3573 => 1327,  3571 => 1326,  3564 => 1324,  3558 => 1320,  3553 => 1319,  3550 => 1318,  3545 => 1316,  3542 => 1315,  3540 => 1314,  3537 => 1313,  3532 => 1312,  3529 => 1311,  3524 => 1309,  3521 => 1308,  3519 => 1307,  3512 => 1305,  3507 => 1303,  3497 => 1298,  3490 => 1296,  3481 => 1292,  3474 => 1290,  3468 => 1286,  3463 => 1285,  3460 => 1284,  3455 => 1282,  3452 => 1281,  3450 => 1280,  3447 => 1279,  3442 => 1278,  3439 => 1277,  3434 => 1275,  3431 => 1274,  3429 => 1273,  3422 => 1271,  3416 => 1267,  3411 => 1266,  3408 => 1265,  3403 => 1263,  3400 => 1262,  3398 => 1261,  3395 => 1260,  3390 => 1259,  3387 => 1258,  3382 => 1256,  3379 => 1255,  3377 => 1254,  3370 => 1252,  3365 => 1250,  3353 => 1243,  3346 => 1241,  3340 => 1237,  3332 => 1235,  3327 => 1234,  3322 => 1233,  3317 => 1231,  3312 => 1230,  3310 => 1229,  3307 => 1228,  3303 => 1227,  3296 => 1225,  3291 => 1223,  3281 => 1218,  3276 => 1216,  3267 => 1212,  3262 => 1210,  3253 => 1206,  3246 => 1204,  3237 => 1200,  3232 => 1198,  3223 => 1194,  3216 => 1192,  3207 => 1188,  3200 => 1186,  3193 => 1181,  3187 => 1178,  3184 => 1177,  3178 => 1174,  3175 => 1173,  3172 => 1172,  3166 => 1169,  3163 => 1168,  3157 => 1165,  3154 => 1164,  3152 => 1163,  3143 => 1159,  3138 => 1157,  3129 => 1151,  3123 => 1150,  3117 => 1149,  3110 => 1145,  3104 => 1144,  3100 => 1143,  3091 => 1136,  3083 => 1134,  3078 => 1133,  3073 => 1132,  3068 => 1130,  3063 => 1129,  3061 => 1128,  3058 => 1127,  3054 => 1126,  3049 => 1124,  3042 => 1119,  3036 => 1118,  3028 => 1115,  3025 => 1114,  3017 => 1111,  3014 => 1110,  3011 => 1109,  3007 => 1108,  3002 => 1106,  2994 => 1103,  2989 => 1101,  2981 => 1095,  2975 => 1094,  2967 => 1091,  2964 => 1090,  2956 => 1087,  2953 => 1086,  2950 => 1085,  2946 => 1084,  2937 => 1080,  2930 => 1075,  2924 => 1074,  2916 => 1071,  2913 => 1070,  2905 => 1067,  2902 => 1066,  2899 => 1065,  2895 => 1064,  2890 => 1062,  2882 => 1059,  2877 => 1057,  2869 => 1051,  2863 => 1050,  2855 => 1047,  2852 => 1046,  2844 => 1043,  2841 => 1042,  2838 => 1041,  2834 => 1040,  2829 => 1038,  2821 => 1035,  2812 => 1031,  2805 => 1029,  2799 => 1025,  2794 => 1024,  2791 => 1023,  2786 => 1021,  2783 => 1020,  2781 => 1019,  2778 => 1018,  2773 => 1017,  2770 => 1016,  2765 => 1014,  2762 => 1013,  2760 => 1012,  2753 => 1010,  2747 => 1006,  2742 => 1005,  2739 => 1004,  2734 => 1002,  2731 => 1001,  2729 => 1000,  2726 => 999,  2721 => 998,  2718 => 997,  2713 => 995,  2710 => 994,  2708 => 993,  2701 => 991,  2694 => 986,  2688 => 985,  2680 => 982,  2677 => 981,  2669 => 978,  2666 => 977,  2663 => 976,  2659 => 975,  2652 => 971,  2647 => 969,  2640 => 964,  2635 => 963,  2632 => 962,  2627 => 960,  2624 => 959,  2622 => 958,  2619 => 957,  2614 => 956,  2611 => 955,  2606 => 953,  2603 => 952,  2601 => 951,  2594 => 949,  2588 => 945,  2583 => 944,  2580 => 943,  2575 => 941,  2572 => 940,  2570 => 939,  2567 => 938,  2562 => 937,  2559 => 936,  2554 => 934,  2551 => 933,  2549 => 932,  2542 => 930,  2536 => 926,  2531 => 925,  2528 => 924,  2523 => 922,  2520 => 921,  2518 => 920,  2515 => 919,  2510 => 918,  2507 => 917,  2502 => 915,  2499 => 914,  2497 => 913,  2490 => 911,  2485 => 909,  2477 => 903,  2471 => 902,  2463 => 899,  2460 => 898,  2452 => 895,  2449 => 894,  2446 => 893,  2442 => 892,  2437 => 890,  2429 => 887,  2422 => 882,  2416 => 881,  2408 => 878,  2405 => 877,  2397 => 874,  2394 => 873,  2391 => 872,  2387 => 871,  2378 => 867,  2373 => 864,  2367 => 863,  2365 => 862,  2362 => 861,  2354 => 859,  2349 => 858,  2344 => 857,  2339 => 855,  2334 => 854,  2332 => 853,  2329 => 852,  2325 => 851,  2318 => 849,  2313 => 846,  2307 => 845,  2305 => 844,  2302 => 843,  2294 => 841,  2289 => 840,  2284 => 839,  2279 => 837,  2274 => 836,  2272 => 835,  2269 => 834,  2265 => 833,  2258 => 831,  2251 => 826,  2245 => 825,  2237 => 822,  2234 => 821,  2226 => 818,  2223 => 817,  2220 => 816,  2216 => 815,  2207 => 811,  2200 => 806,  2194 => 805,  2186 => 802,  2183 => 801,  2175 => 798,  2172 => 797,  2169 => 796,  2165 => 795,  2160 => 793,  2152 => 790,  2146 => 786,  2141 => 785,  2138 => 784,  2133 => 782,  2130 => 781,  2128 => 780,  2125 => 779,  2120 => 778,  2117 => 777,  2112 => 775,  2109 => 774,  2107 => 773,  2100 => 771,  2094 => 767,  2089 => 766,  2086 => 765,  2081 => 763,  2078 => 762,  2076 => 761,  2073 => 760,  2068 => 759,  2065 => 758,  2060 => 756,  2057 => 755,  2055 => 754,  2048 => 752,  2039 => 748,  2032 => 746,  2027 => 744,  2019 => 738,  2013 => 737,  2005 => 734,  2002 => 733,  1994 => 730,  1991 => 729,  1988 => 728,  1984 => 727,  1979 => 725,  1971 => 722,  1966 => 719,  1960 => 718,  1958 => 717,  1952 => 716,  1945 => 714,  1939 => 710,  1934 => 709,  1931 => 708,  1926 => 706,  1923 => 705,  1921 => 704,  1918 => 703,  1913 => 702,  1910 => 701,  1905 => 699,  1902 => 698,  1900 => 697,  1893 => 695,  1888 => 692,  1882 => 691,  1879 => 690,  1871 => 687,  1866 => 686,  1861 => 685,  1856 => 683,  1851 => 682,  1849 => 681,  1846 => 680,  1842 => 679,  1836 => 678,  1829 => 673,  1823 => 672,  1815 => 669,  1812 => 668,  1804 => 665,  1801 => 664,  1798 => 663,  1794 => 662,  1785 => 658,  1779 => 654,  1774 => 653,  1771 => 652,  1766 => 650,  1763 => 649,  1761 => 648,  1758 => 647,  1753 => 646,  1750 => 645,  1745 => 643,  1742 => 642,  1740 => 641,  1735 => 639,  1729 => 635,  1724 => 634,  1721 => 633,  1716 => 631,  1713 => 630,  1711 => 629,  1708 => 628,  1703 => 627,  1700 => 626,  1695 => 624,  1692 => 623,  1690 => 622,  1683 => 620,  1677 => 616,  1672 => 615,  1669 => 614,  1664 => 612,  1661 => 611,  1659 => 610,  1656 => 609,  1651 => 608,  1648 => 607,  1643 => 605,  1640 => 604,  1638 => 603,  1631 => 601,  1626 => 599,  1618 => 593,  1612 => 590,  1609 => 589,  1603 => 586,  1600 => 585,  1597 => 584,  1591 => 581,  1588 => 580,  1582 => 577,  1579 => 576,  1577 => 575,  1572 => 573,  1564 => 570,  1557 => 565,  1551 => 562,  1548 => 561,  1542 => 558,  1539 => 557,  1536 => 556,  1530 => 553,  1527 => 552,  1521 => 549,  1518 => 548,  1516 => 547,  1511 => 545,  1503 => 542,  1497 => 538,  1492 => 537,  1489 => 536,  1484 => 534,  1481 => 533,  1479 => 532,  1476 => 531,  1471 => 530,  1468 => 529,  1463 => 527,  1460 => 526,  1458 => 525,  1453 => 523,  1448 => 521,  1442 => 517,  1436 => 516,  1434 => 515,  1428 => 514,  1421 => 512,  1416 => 509,  1410 => 508,  1408 => 507,  1402 => 506,  1395 => 504,  1390 => 502,  1383 => 497,  1378 => 496,  1375 => 495,  1370 => 493,  1367 => 492,  1365 => 491,  1362 => 490,  1357 => 489,  1354 => 488,  1349 => 486,  1346 => 485,  1344 => 484,  1337 => 482,  1331 => 478,  1326 => 477,  1323 => 476,  1318 => 474,  1315 => 473,  1313 => 472,  1310 => 471,  1305 => 470,  1302 => 469,  1297 => 467,  1294 => 466,  1292 => 465,  1285 => 463,  1280 => 461,  1274 => 457,  1268 => 456,  1266 => 455,  1260 => 454,  1253 => 452,  1248 => 449,  1242 => 448,  1240 => 447,  1234 => 446,  1227 => 444,  1221 => 440,  1216 => 439,  1213 => 438,  1208 => 436,  1205 => 435,  1203 => 434,  1200 => 433,  1195 => 432,  1192 => 431,  1187 => 429,  1184 => 428,  1182 => 427,  1175 => 425,  1170 => 423,  1162 => 417,  1155 => 416,  1148 => 415,  1145 => 414,  1138 => 413,  1134 => 412,  1128 => 411,  1124 => 410,  1116 => 407,  1107 => 400,  1100 => 399,  1093 => 398,  1090 => 397,  1083 => 396,  1079 => 395,  1073 => 394,  1069 => 393,  1061 => 390,  1052 => 383,  1045 => 382,  1038 => 381,  1035 => 380,  1028 => 379,  1024 => 378,  1018 => 377,  1014 => 376,  1006 => 373,  995 => 364,  989 => 363,  981 => 360,  978 => 359,  970 => 356,  967 => 355,  964 => 354,  960 => 353,  953 => 349,  946 => 344,  940 => 343,  932 => 340,  929 => 339,  921 => 336,  918 => 335,  915 => 334,  911 => 333,  904 => 329,  898 => 325,  892 => 324,  884 => 322,  876 => 320,  873 => 319,  869 => 318,  863 => 315,  857 => 311,  852 => 310,  849 => 309,  844 => 307,  841 => 306,  839 => 305,  836 => 304,  831 => 303,  828 => 302,  823 => 300,  820 => 299,  818 => 298,  811 => 296,  804 => 291,  798 => 290,  790 => 287,  787 => 286,  779 => 283,  776 => 282,  773 => 281,  769 => 280,  760 => 276,  753 => 271,  747 => 270,  739 => 267,  736 => 266,  728 => 263,  725 => 262,  722 => 261,  718 => 260,  711 => 256,  704 => 251,  698 => 250,  690 => 247,  687 => 246,  679 => 243,  676 => 242,  673 => 241,  669 => 240,  662 => 236,  656 => 232,  650 => 231,  642 => 229,  634 => 227,  631 => 226,  627 => 225,  621 => 222,  611 => 215,  604 => 210,  598 => 209,  590 => 206,  587 => 205,  579 => 202,  576 => 201,  573 => 200,  569 => 199,  562 => 195,  557 => 192,  552 => 190,  544 => 188,  539 => 187,  534 => 186,  529 => 184,  524 => 183,  522 => 182,  519 => 181,  515 => 180,  509 => 179,  506 => 178,  504 => 177,  496 => 174,  489 => 172,  480 => 168,  473 => 166,  466 => 162,  460 => 161,  456 => 160,  447 => 156,  442 => 154,  437 => 151,  431 => 150,  429 => 149,  423 => 148,  418 => 146,  413 => 143,  407 => 142,  405 => 141,  399 => 140,  394 => 138,  385 => 134,  378 => 132,  373 => 129,  367 => 128,  365 => 127,  359 => 126,  354 => 124,  349 => 121,  343 => 120,  341 => 119,  335 => 118,  330 => 116,  325 => 113,  319 => 112,  317 => 111,  311 => 110,  306 => 108,  297 => 101,  291 => 100,  283 => 97,  280 => 96,  272 => 93,  269 => 92,  266 => 91,  262 => 90,  255 => 86,  247 => 80,  241 => 79,  233 => 76,  230 => 75,  222 => 72,  219 => 71,  216 => 70,  212 => 69,  205 => 65,  196 => 61,  191 => 59,  182 => 55,  177 => 53,  172 => 50,  166 => 49,  164 => 48,  158 => 47,  153 => 45,  145 => 40,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  106 => 28,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "");
    }
}
