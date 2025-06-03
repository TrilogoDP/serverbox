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

/* luxshop/luxshop_demo.twig */
class __TwigTemplate_5da71c214287cfc07ecf2e23d0f366078c4b830527f28c2045119611f9ea67cc extends \Twig\Template
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
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
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
        // line 10
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"col-sm-12\"><div class=\"alert alert-danger\">";
        // line 16
        echo ($context["description"] ?? null);
        echo "</div></div>
\t\t\t\t<div class=\"col-sm-12\" id=\"demo_bd\">
\t\t\t\t\t<button type=\"button\" onclick=\"addDemoBd('luxshop_1');\" class=\"btn btn-info\" >";
        // line 18
        echo ($context["text_btn_1"] ?? null);
        echo "</button>
\t\t\t   </div>
\t\t\t</div>
\t\t</div>
    <script>
\t\tfunction addDemoBd(bdname) {
\t\t\t\$.ajax({
\t\t\t\ttype:'get',
\t\t\t\tdataType:'json',
\t\t\t\tdata:'bdname=' + bdname,
\t\t\t\turl:'index.php?route=luxshop/luxshop_demo/addDemoBd&user_token=";
        // line 28
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\tsuccess: function(json){
\t\t\t\t\t\$('.alert.alert-danger, .alert.alert-success').remove();
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#demo_bd').before('<div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ' + json['error'] + '</div>');
\t\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\t\t\$('.alert-success').remove();
\t\t\t\t\t\t}, 2000)

\t\t\t\t\t}
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#demo_bd').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\t\t\$('.alert-success').remove();
\t\t\t\t\t\t}, 2000)

\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t};
</script>
  </div>
</div>
";
        // line 52
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "luxshop/luxshop_demo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 52,  91 => 28,  78 => 18,  73 => 16,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/luxshop_demo.twig", "");
    }
}
