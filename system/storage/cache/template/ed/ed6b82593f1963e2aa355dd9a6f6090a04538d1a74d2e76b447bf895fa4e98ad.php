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

/* extension/module/luxshop_setting_theme.twig */
class __TwigTemplate_5c3e5ba61fd9b55838573d89500e045f5f09138535ca9e338b5b27c8337afc6b extends \Twig\Template
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
\t\t<div class=\"pull-right\" id=\"buttons-apply\">
\t\t\t<a onclick=\"luxshop_clear_cache()\" class=\"btn btn-warning\" data-toggle=\"tooltip\" title=\"\">";
        // line 6
        echo ($context["text_clear_cache"] ?? null);
        echo "</a>
\t\t\t<a onclick=\"apply_btn()\" id=\"btn-apply-setting\" class=\"btn btn-success\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["text_btn_apply"] ?? null);
        echo "\" data-placement=\"bottom\"><i class=\"fa fa-check\"></i></a>
\t\t\t<button type=\"submit\" form=\"form-luxshop-theme\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        // line 8
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t<a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t</div>
\t\t<h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t<ul class=\"breadcrumb\">
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t\t\t<li><a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t</ul>
    </div>
</div>
<div class=\"container-fluid\">
    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    <div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<form id=\"form-luxshop-theme\" action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t\t\t\t<div id=\"ns-left-block\" class=\"col-lg-2 col-md-3\">
\t\t\t\t\t<div class=\"logo-theme\">
\t\t\t\t\t\t<img src=\"view/image/luxshop.png\" />
\t\t\t\t\t\t<div class=\"version-theme\"><span>v.";
        // line 31
        echo ($context["luxshop_version"] ?? null);
        echo "</span></div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"nav nav-luxshop nav-stacked\">
\t\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-general-ns-setting\">";
        // line 34
        echo ($context["tab_general_ns_setting"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-module-setting\">";
        // line 35
        echo ($context["tab_settings_modules"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-home-page\">";
        // line 36
        echo ($context["tab_home_page"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-page-category\">";
        // line 37
        echo ($context["tab_page_category"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-page-special\">";
        // line 38
        echo ($context["tab_page_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-page-manufacturer\">";
        // line 39
        echo ($context["tab_page_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-page-search\">";
        // line 40
        echo ($context["tab_page_search"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-page-latest\">";
        // line 41
        echo ($context["tab_page_latest"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-product-cart\">";
        // line 42
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-design\">";
        // line 43
        echo ($context["tab_designed_general_settins"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-stickers\">";
        // line 44
        echo ($context["tab_sticker_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-contact-header\">";
        // line 45
        echo ($context["tab_contact_header"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-setting-footer\">";
        // line 46
        echo ($context["tab_settings_footer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-shopping-cart\">";
        // line 47
        echo ($context["tab_settings_shopping_cart"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-contact-page\">";
        // line 48
        echo ($context["tab_contact_page"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab-microdata\">";
        // line 49
        echo ($context["tab_microdata"] ?? null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div id=\"ns-right-block\" class=\"col-lg-10 col-md-9\">
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane  active\" id=\"tab-general-ns-setting\">
\t\t\t\t\t\t\t";
        // line 55
        echo ($context["general_setting"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-module-setting\">
\t\t\t\t\t\t\t";
        // line 58
        echo ($context["page_module_menu"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-home-page\">
\t\t\t\t\t\t\t";
        // line 61
        echo ($context["page_home_menu"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-page-category\">
\t\t\t\t\t\t\t";
        // line 64
        echo ($context["page_category_menu"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-page-special\">
\t\t\t\t\t\t\t";
        // line 67
        echo ($context["page_special_menu"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-page-manufacturer\">
\t\t\t\t\t\t\t";
        // line 70
        echo ($context["page_manufacturer_menu"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-page-search\">
\t\t\t\t\t\t\t";
        // line 73
        echo ($context["page_search_menu"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-page-latest\">
\t\t\t\t\t\t\t";
        // line 76
        echo ($context["page_latest"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product-cart\">
\t\t\t\t\t\t\t";
        // line 79
        echo ($context["product_cart_menu"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-design\">
\t\t\t\t\t\t\t";
        // line 82
        echo ($context["design_menu"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-stickers\">
\t\t\t\t\t\t\t";
        // line 85
        echo ($context["stickers_menu"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-contact-header\">
\t\t\t\t\t\t\t";
        // line 88
        echo ($context["contact_header_menu"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-setting-footer\">
\t\t\t\t\t\t\t";
        // line 91
        echo ($context["setting_footer_menu"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-shopping-cart\">
\t\t\t\t\t\t\t";
        // line 94
        echo ($context["shopping_cart"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-contact-page\">
\t\t\t\t\t\t\t";
        // line 97
        echo ($context["contact_page"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-microdata\">
\t\t\t\t\t\t\t";
        // line 100
        echo ($context["microdata_page"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</form>
\t\t</div>
    </div>
</div>
<script>
\tfunction apply_btn(){
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/luxshop_setting_theme/apply_btn/&user_token=";
        // line 112
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$(\"#form-luxshop-theme\").serialize(),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#btn-apply-setting').attr(\"disabled\", true);
\t\t\t\t\$('#btn-save-setting').attr(\"disabled\", true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#btn-apply-setting').attr(\"disabled\", false);
\t\t\t\t\$('#btn-save-setting').attr(\"disabled\", false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert.alert-danger, .alert.alert-success').remove();
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#form-luxshop-theme').before('<div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ' + json['error'] + '</div>');
\t\t\t\t\t}
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#form-luxshop-theme').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\t\t\$('.alert.alert-danger, .alert.alert-success').remove();
\t\t\t\t\t\t}, 2000)
\t\t\t\t\t}
\t\t\t}
\t\t});
\t}

\tfunction luxshop_clear_cache(){
\t\tvar success = 'false';
\t\t\$(\".alert\").remove();
\t\t\t\$.ajax({
\t\t\t\ttype:'get',
\t\t\t\tdataType:'json',
\t\t\t\turl:'index.php?route=extension/module/luxshop_setting_theme/clear_cache&user_token=";
        // line 145
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\tsuccess: function(json){
\t\t\t\t\tif (json['warning']) {
\t\t\t\t\t\thtml = '<div class=\"alert alert-warning\">'+ json['warning'] +'</div>';
\t\t\t\t\t\t\$(\".panel.panel-default\").before(html);
\t\t\t\t\t}
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\thtml = '<div class=\"alert alert-success\">'+ json['success'] +'</div>';
\t\t\t\t\t\t\$(\".panel.panel-default\").before(html);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t}

\$(window).scroll(function(){
\tif (\$(window).scrollTop() > 100){
\t\t\$(\"#buttons-apply\").addClass(\"fixed-btn-top\");
\t} else {
\t\t\$(\"#buttons-apply\").removeClass(\"fixed-btn-top\");
\t}
});
</script>
</div>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
<link href=\"view/javascript/luxshop/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"view/javascript/luxshop/popup.js\"></script>
<script>
\tfunction icon_fontawesome_popup(id) {
\t\t\$('.icon_fontawesome_popup').popup('show');
\t\t\$('.id_icon').val(id);

\t\t\$('.icon_fontawesome_popup .fa').on('click', function() {
\t\t\tvar class_this_icon = \$(this).attr('class');
\t\t\t\$('.class_icon').val(class_this_icon);
\t\t\tsave_icons_fontawesome();
\t\t\t\$('.icon_fontawesome_popup').popup('hide');
\t\t});
\t\t\$('.icon_fontawesome_popup .empty-icon').on('click', function() {
\t\t\t\$('.class_icon').val('');
\t\t\tsave_icons_fontawesome();
\t\t\t\$('.icon_fontawesome_popup').popup('hide');
\t\t});
\t}

\tfunction save_icons_fontawesome() {
\t\tvar id_icon = \$('.id_icon').val();
\t\tvar class_this_icon = \$('.class_icon').val();
\t\t\$('#'+id_icon).html('";
        // line 195
        echo ($context["text_select_icon"] ?? null);
        echo " <i class=\"' + class_this_icon + '\"></i>');
\t\t\$('#'+id_icon).next().val(class_this_icon);
\t}
</script>
<input type=\"hidden\" class=\"id_icon\" name=\"target\" value=\"\" />
<input type=\"hidden\" class=\"class_icon\" name=\"class\" value=\"\" />

<style>
.icon_fontawesome_popup {display:none;max-width:80%;background:#fff; padding:10px; border-radius:10px;}
.icon_fontawesome_popup .col-xs-1 {width:35px; padding:5px 0;text-align:center;}
.icon_fontawesome_popup i{padding:5px;font-size:18px !important;color:#555;cursor:pointer;border:solid 1px transparent;border-radius:2px;}
.icon_fontawesome_popup i:hover{color:#4FC605;border:solid 1px #ccc}
span.icon_open {display:block;float:left;text-align:center;font-weight:400 !important;color:#444 !important;cursor:pointer;text-shadow:0 1px 0 rgba(255, 255, 255, 1);min-width:85px;max-width:100px;margin:0 5px 0 0;padding:5px;line-height:28px;background:#eee;border:solid 1px #aaa;border-radius:4px;}
span.icon_open:hover {background:#ddd;}
span.icon_open i {vertical-align:middle;font-size:20px;color:#4FC605;}
span.icon_open + input + input {width:260px !important;}
</style>
<div class=\"icon_fontawesome_popup\">
<div class=\"icon_fontawesome_list\">
<div class=\"col-xs-1\"><i class=\"empty-icon\">X</i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-american-sign-language-interpreting\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-blind\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-gitlab\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-pied-piper\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-google-plus-official\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-snapchat\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-universal-access\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-wheelchair-alt\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-american-sign-language-interpreting\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-braille\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-font-awesome\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-glide\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-deaf\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-question-circle-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-snapchat-ghost\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-viadeo\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-wpbeginner\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-assistive-listening-systems\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-first-order\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-glide-g\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sign-language\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-snapchat-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-viadeo-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-wpforms\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-audio-description\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-font-awesome\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-google-plus-official\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-low-vision\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-themeisle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-volume-control-phone\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-yoast\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-adjust\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-area-chart\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-american-sign-language-interpreting\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-audio-description\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-university\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-battery-three-quarters\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-battery-half\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-beer\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bell-slash-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-blind\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bomb\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-braille\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-building-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-taxi\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-calendar-minus-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-camera\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-caret-square-o-left\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cart-plus\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-child\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-circle-thin\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cloud\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-code-fork\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-comments\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-creative-commons\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-crosshairs\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-exclamation\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-external-link-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-fax\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-archive-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-word-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-fire\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-flag-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-folder-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-futbol-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-paper-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-scissors-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hashtag\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bed\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hourglass-end\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hourglass-start\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-industry\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-key\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-leaf\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-level-up\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-life-ring\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-share\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-map\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-map-signs\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-mobile\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-paint-brush\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-pie-chart\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-print\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-random\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-retweet\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-rss-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-shield\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-signal\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-smile-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sort-alpha-desc\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sort-desc\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sort-asc\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-star-half-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sticky-note\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sun-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-tag\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-television\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-thumbs-o-down\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-caret-square-o-down\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-caret-square-o-right\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-tty\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-university\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-upload\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-user-times\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-volume-down\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-wheelchair\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-unlock\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-television\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-tree\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-caret-square-o-up\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-caret-square-o-left\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-life-ring\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sticky-note-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-space-shuttle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sort-amount-asc\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-futbol-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sign-language\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-ship\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-share-alt-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-paper-plane-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-road\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-recycle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-question-circle-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-puzzle-piece\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-plane\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-phone-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-pencil-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-newspaper-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-motorcycle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-mobile\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-meh-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-reply\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-low-vision\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-life-ring\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-gavel\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-keyboard-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-info\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-i-cursor\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hourglass-end\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hourglass\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-heartbeat\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hdd-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-spock-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-peace-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-gift\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-gamepad\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bolt\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-fire-extinguisher\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-archive-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-powerpoint-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-video-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-audio-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-envelope-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-diamond\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-database\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cube\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-credit-card\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-coffee\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-circle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-check-circle-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-caret-square-o-right\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-camera-retro\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-calculator\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-book\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bluetooth\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bicycle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bell\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-battery-quarter\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-battery-full\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-battery-empty\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-car\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-arrows\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-anchor\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-asterisk\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-balance-scale\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-battery-quarter\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-battery-empty\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-battery-three-quarters\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bell-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-binoculars\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bluetooth-b\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bookmark\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bug\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bullseye\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-calendar-plus-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-car\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-caret-square-o-up\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-certificate\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-check-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-circle-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-clone\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cloud-upload\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-commenting\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-compass\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-credit-card-alt\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cubes\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-deaf\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-dot-circle-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-eraser\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-eye-slash\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-female\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-code-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-audio-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-film\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-flag\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-flask\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-folder-open-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-gavel\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-glass\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-rock-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-pointer-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-paper-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-headphones\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-history\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hourglass-start\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hourglass-half\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-language\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-lemon-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-life-ring\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-line-chart\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-magic\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-reply-all\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-microphone\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-minus-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-mouse-pointer\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-paper-plane-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-plug\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-plus-square-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-qrcode\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-reply\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-rocket\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-search-minus\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-server\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-share-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sign-language\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sitemap\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sort\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sort-amount-desc\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sort-numeric-asc\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-spinner\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-star-half-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-street-view\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-tablet\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-tasks\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-thumb-tack\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-times-circle-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-toggle-off\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-trademark\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-umbrella\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-wifi\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-wrench\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-volume-control-phone\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-user-secret\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sort\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-universal-access\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-truck\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-toggle-on\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-tint\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-taxi\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-suitcase\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-star-half\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-spoon\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sort-numeric-desc\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sort-asc\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sliders\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-shopping-basket\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-share\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-reply-all\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-registered\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-question\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-power-off\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-percent\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-paw\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-object-ungroup\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-music\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-moon-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-minus-square-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-microphone-slash\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-map-pin\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-male\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-magnet\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-life-ring\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-level-down\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-laptop\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-university\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-inbox\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hourglass-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hourglass-half\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-rock-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-lizard-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-globe\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-frown-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-folder\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-flag-checkered\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-filter\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-video-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-excel-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-fighter-jet\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-eyedropper\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-external-link\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-exchange\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-crop\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-copyright\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-commenting-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-code\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-circle-o-notch\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cart-arrow-down\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-caret-square-o-down\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-calendar-times-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bus\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bookmark-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bolt\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-birthday-cake\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bell-slash\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bed\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-battery-full\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-barcode\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-ban\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-at\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-arrows-v\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-archive\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-rock-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-pointer-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-paper-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-lizard-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-o-up\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-rock-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-o-down\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-paper-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-scissors-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-thumbs-o-down\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-o-left\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-peace-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hand-spock-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-ambulance\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-taxi\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-plane\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-subway\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-car\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-rocket\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-taxi\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bicycle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-fighter-jet\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-ship\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-train\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bus\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-motorcycle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-space-shuttle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-truck\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-excel-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-audio-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-word-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-archive-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-text\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-archive-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-audio-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-video-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-code-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-powerpoint-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-file-video-o\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-amex\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-mastercard\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-credit-card\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-diners-club\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-paypal\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-credit-card-alt\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-discover\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-stripe\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-google-wallet\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-jcb\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-visa\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-paypal\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-usd\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-gg\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-jpy\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-rub\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-gbp\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-eur\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-eur\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-angellist\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bitbucket\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bluetooth\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-amex\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-mastercard\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-chrome\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-contao\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-deviantart\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-drupal\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-expeditedssl\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-flickr\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-forumbee\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-gg\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-github\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-gratipay\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-google-wallet\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-html5\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-joomla\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-leanpub\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-maxcdn\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-modx\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-openid\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-paypal\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-qq\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-reddit-alien\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-safari\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-share-alt-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-skype\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-snapchat-ghost\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-stack-exchange\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-stumbleupon\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-trello\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-twitch\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-vimeo-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-weibo\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-windows\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-xing\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-yahoo\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-yoast\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-y-combinator\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-xing-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-wordpress\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-weixin\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-vine\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-viadeo\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-tripadvisor\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-stumbleupon-circle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-stack-overflow\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-snapchat-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-slack\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-shirtsinbulk\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-scribd\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-reddit-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-rebel\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-pied-piper\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-opera\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-odnoklassniki\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-meanpath\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-jsfiddle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-gratipay\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-google-plus-official\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-glide\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-github-alt\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-gg-circle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-foursquare\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-font-awesome\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-font-awesome\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-edge\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-css3\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-codepen\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-paypal\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-diners-club\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bluetooth-b\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-bitbucket-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-apple\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-adn\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-amazon\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-btc\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-discover\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-stripe\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-codiepie\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-dashcube\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-empire\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-firefox\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-fonticons\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-empire\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-github-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-glide-g\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-google-plus-official\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hacker-news\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-internet-explorer\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-lastfm\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-medium\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-odnoklassniki-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-optin-monster\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-pied-piper-alt\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-pinterest-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-rebel\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-renren\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-simplybuilt\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-sellsy\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-slideshare\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-soundcloud\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-steam\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-tencent-weibo\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-tumblr\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-viadeo-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-vk\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-whatsapp\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-wpbeginner\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-y-combinator\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hacker-news\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-youtube-play\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-youtube-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-yelp\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-hacker-news\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-wpforms\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-wikipedia-w\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-weixin\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-vimeo\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-usb\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-tumblr-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-themeisle\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-steam-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-spotify\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-snapchat\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-skyatlas\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-rebel\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-product-hunt\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-product-hunt\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-pied-piper-pp\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-pagelines\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-opencart\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-linux\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-lastfm-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-ioxhost\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-houzz\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-google-plus-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-gitlab\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-get-pocket\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-git-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-fort-awesome\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-first-order\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-envira\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-dropbox\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-delicious\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-connectdevelop\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-jcb\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-buysellads\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-black-tie\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-behance-square\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-android\" aria-hidden=\"true\"></i></div>
<div class=\"col-xs-1\"><i class=\"fa fa-cc-visa\" aria-hidden=\"true\"></i></div>
</div>
</div>
";
        // line 876
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop_setting_theme.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1065 => 876,  381 => 195,  328 => 145,  292 => 112,  277 => 100,  271 => 97,  265 => 94,  259 => 91,  253 => 88,  247 => 85,  241 => 82,  235 => 79,  229 => 76,  223 => 73,  217 => 70,  211 => 67,  205 => 64,  199 => 61,  193 => 58,  187 => 55,  178 => 49,  174 => 48,  170 => 47,  166 => 46,  162 => 45,  158 => 44,  154 => 43,  150 => 42,  146 => 41,  142 => 40,  138 => 39,  134 => 38,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  112 => 31,  105 => 27,  101 => 25,  93 => 21,  91 => 20,  85 => 16,  74 => 14,  70 => 13,  65 => 11,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop_setting_theme.twig", "");
    }
}
