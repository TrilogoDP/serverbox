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

/* extension/module/luxshop/activation.twig */
class __TwigTemplate_90a89ea12e9ec222c3127c05955c6bddee8ae25ade76cb0b17b6655f6b9c4411 extends \Twig\Template
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
   ";
        // line 3
        if (($context["error_warning"] ?? null)) {
            // line 4
            echo "  <div class=\"alert alert-danger\">";
            echo ($context["error_warning"] ?? null);
            echo "</div>
 ";
        }
        // line 6
        echo "    <div class=\"alert alert-danger deactivation\" style=\"display:none\"></div>
\t<div class=\"alert alert-success\" style=\"display:none\"></div>
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t</div>
\t</div>
\t<div class=\"panel-body text-center\">
<div class=\"panel-callback\" style=\"width: 300px;\">
\t<form id=\"myForm\" method=\"post\">
\t\t\t<div class=\"title-activation text-center\">";
        // line 16
        echo ($context["add_activation_key"] ?? null);
        echo "</div>
\t\t\t<div class=\"panel-body-callback text-center\">
\t\t\t\t<input style=\"width:100%\" id=\"license_key\" name=\"license_key\" class=\"input form-control\" type=\"text\"/>
\t\t\t\t<div class=\"btn-cont\">
\t\t\t\t\t<button id=\"submit1\" class=\"btn btn-info\" name=\"submitButton\">";
        // line 20
        echo ($context["activated_btn"] ?? null);
        echo "</button>
\t\t\t\t</div>
\t\t\t</div>
\t</form>
</div>
<script>
\$('#submit1').bind('click',function() {
function test() {
var license_key = \$('#license_key').val();
\t\$.post('<?php echo \$action;?>', 'license_key=' + license_key);
\t}
});
</script>
<style>
.btn-cont {
\tmargin-top:10px;
\tmargin-bottom:10px;
}
.panel-callback {
\tborder:1px solid #ddd;
\tbackground:#fff;
\tborder-radius:5px;
\tdisplay:inline-block;
\tmargin:5px 25px;
}
.panel-body-callback {

\tpadding:10px;
}
.title-activation {
\tfont-size:14px;
\tcolor:#000;
\tpadding:10px;
\tbackground:#eee
}
#myForm label.error {
\tmargin-left: 10px;
\twidth: auto;
\tdisplay: inline;
\tcolor: red;
    font-style: italic;
}
#myForm input.error {
    border: 1px dotted red;
}
</style>
</div>
</div>
";
        // line 68
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/luxshop/activation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 68,  73 => 20,  66 => 16,  57 => 10,  51 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/luxshop/activation.twig", "");
    }
}
