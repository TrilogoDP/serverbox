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

/* common/header.twig */
class __TwigTemplate_708b1b6e33d226933ff2bacbc43eca67d0eccbb49fddfa4231442e6cb8d9f782 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 7
        if (($context["description"] ?? null)) {
            // line 8
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 10
        if (($context["keywords"] ?? null)) {
            // line 11
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 13
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/stylesheet/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<script src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 24
            echo "<link type=\"text/css\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 24);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 24);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 24);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 27
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 27);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 27);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            echo "<script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</head>
<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">
  <div class=\"container-fluid\">
    <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 38
        echo ($context["home"] ?? null);
        echo "\" class=\"navbar-brand\"><img src=\"view/image/logo.png\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" /></a></div>
    ";
        // line 39
        if (($context["logged"] ?? null)) {
            echo "<a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>
    <ul class=\"nav pull-left\">
      <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"  title=\"";
            // line 41
            echo ($context["text_new"] ?? null);
            echo "\"><i class=\"fa fa-plus fa-lg\"></i> <span class=\"header-item\">";
            echo ($context["text_new"] ?? null);
            echo "</span></a>
        <ul class=\"dropdown-menu dropdown-menu-left alerts-dropdown\">
          <li><a href=\"";
            // line 43
            echo ($context["new_product"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_product"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 44
            echo ($context["new_category"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_category"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 45
            echo ($context["new_manufacturer"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_manufacturer"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 46
            echo ($context["new_customer"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_customer"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 47
            echo ($context["new_download"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_download"] ?? null);
            echo "</a></li>
        </ul>
      </li>
    </ul>

    <div id=\"oc-search-div\" class=\"col-sm-3 col-md-3 pull-left\">
      ";
            // line 53
            echo ($context["search"] ?? null);
            echo "
    </div>
    <ul class=\"nav navbar-nav navbar-right\">

\t\t\t";
            // line 57
            if (array_key_exists("link_reviews", $context)) {
                echo " 
        <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-placement=\"bottom\" data-toggle=\"tooltip\" title=\"";
                // line 58
                echo ($context["text_reviews_store"] ?? null);
                echo "\" href=\"";
                echo ($context["link_reviews"] ?? null);
                echo "\"><span id=\"count-reviews-store\" class=\"label label-danger\" style=\"position: absolute;top: 12px;right: 2px;padding: 2px 4px;\">";
                echo ($context["countreviewsoff"] ?? null);
                echo "</span> <i class=\"fa fa-comment\" aria-hidden=\"true\"></i></a>
\t\t\t";
            }
            // line 60
            echo "\t\t\t

\t\t\t";
            // line 62
            if (array_key_exists("newfastorder", $context)) {
                // line 63
                echo "        <li class=\"dropdown\"><a data-placement=\"bottom\" data-toggle=\"tooltip\" title=\"";
                echo ((array_key_exists("title_fastorder", $context)) ? (($context["title_fastorder"] ?? null)) : (""));
                echo "\" class=\"dropdown-toggle\" href=\"";
                echo ((array_key_exists("newfastorder", $context)) ? (($context["newfastorder"] ?? null)) : (""));
                echo "\"><span class=\"label label-danger\" style=\"position: absolute;top: 12px;right: 2px;padding: 2px 4px;\">";
                echo ((array_key_exists("countfastorder", $context)) ? (($context["countfastorder"] ?? null)) : ("0"));
                echo "</span> <i class=\"fa fa-shopping-cart fa-lg\"></i></a><!--add-->
\t\t\t";
            }
            // line 65
            echo "\t\t\t

\t\t\t";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, ($context["question_answer"] ?? null), "status", [], "array", true, true, false, 67) && (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["question_answer"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["status"] ?? null) : null))) {
                echo " 
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t<a data-placement=\"bottom\" data-toggle=\"tooltip\" title=\"";
                // line 69
                echo ($context["title_icon_header_qa"] ?? null);
                echo "\" class=\"dropdown-toggle\" href=\"";
                echo ($context["question_answer_url"] ?? null);
                echo "\"><span class=\"label label-danger\" style=\"position: absolute;top: 12px;right: 2px;padding: 2px 4px;\">";
                echo ($context["countquestion_answer"] ?? null);
                echo "</span> <i class=\"fa fa-question-circle fa-lg\" aria-hidden=\"true\"></i></a></li>
\t\t\t";
            }
            // line 71
            echo "\t\t\t

\t\t\t ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, ($context["found_cheaper_product"] ?? null), "status", [], "array", true, true, false, 73) && (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["found_cheaper_product"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["status"] ?? null) : null))) {
                echo " 
\t\t\t\t<li class=\"dropdown\"><a data-placement=\"bottom\" data-toggle=\"tooltip\" title=\"";
                // line 74
                echo ($context["title_icon_header_fcp"] ?? null);
                echo "\" class=\"dropdown-toggle\" href=\"";
                echo ($context["found_cheaper_product_url"] ?? null);
                echo "\"><span class=\"label label-danger\" style=\"position: absolute;top: 12px;right: 2px;padding: 2px 4px;\">";
                echo ($context["countfound_cheaper"] ?? null);
                echo "</span> <i class=\"fa fa fa-bullhorn fa-lg\"></i></a></li>
\t\t\t";
            }
            // line 76
            echo "\t\t\t

\t\t\t";
            // line 78
            if (array_key_exists("callback", $context)) {
                echo " 
        <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"";
                // line 79
                echo ((array_key_exists("callback", $context)) ? (($context["callback"] ?? null)) : (""));
                echo "\"><span class=\"label label-danger\" style=\"position: absolute;top: 12px;right: 2px;padding: 2px 4px;\">";
                echo ((array_key_exists("countcallback", $context)) ? (($context["countcallback"] ?? null)) : (""));
                echo "</span> <i class=\"fa fa-phone-square fa-lg\"></i></a>
\t\t\t";
            }
            // line 81
            echo "\t\t\t
      <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            // line 82
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "\" title=\"";
            echo ($context["username"] ?? null);
            echo "\" id=\"user-profile\" class=\"img-circle\" />";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo " <i class=\"fa fa-caret-down fa-fw\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          <li><a href=\"";
            // line 84
            echo ($context["profile"] ?? null);
            echo "\"><i class=\"fa fa-user-circle-o fa-fw\"></i> ";
            echo ($context["text_profile"] ?? null);
            echo "</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 86
            echo ($context["text_store"] ?? null);
            echo "</li>
          ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 88
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 88);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 88);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 91
            echo ($context["text_help"] ?? null);
            echo "</li>
          <li><a href=\"https://ocstore.com/?utm_source=ocstore3\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 92
            echo ($context["text_homepage"] ?? null);
            echo "</a></li>
          <li><a href=\"https://docs.ocstore.com/?utm_source=ocstore3\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            // line 93
            echo ($context["text_documentation"] ?? null);
            echo "</a></li>
          <li><a href=\"https://opencartforum.com/?utm_source=ocstore3\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
            // line 94
            echo ($context["text_support"] ?? null);
            echo "</a></li>
        </ul>
      </li>
      <li><a href=\"";
            // line 97
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_logout"] ?? null);
            echo "</span></a></li>
    </ul>
    ";
        }
        // line 99
        echo "</div>
</header>";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 99,  345 => 97,  339 => 94,  335 => 93,  331 => 92,  327 => 91,  324 => 90,  313 => 88,  309 => 87,  305 => 86,  298 => 84,  283 => 82,  280 => 81,  273 => 79,  269 => 78,  265 => 76,  256 => 74,  252 => 73,  248 => 71,  239 => 69,  234 => 67,  230 => 65,  220 => 63,  218 => 62,  214 => 60,  205 => 58,  201 => 57,  194 => 53,  183 => 47,  177 => 46,  171 => 45,  165 => 44,  159 => 43,  152 => 41,  147 => 39,  139 => 38,  132 => 33,  123 => 31,  119 => 30,  116 => 29,  105 => 27,  101 => 26,  88 => 24,  84 => 23,  72 => 13,  66 => 11,  64 => 10,  58 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.twig", "");
    }
}
