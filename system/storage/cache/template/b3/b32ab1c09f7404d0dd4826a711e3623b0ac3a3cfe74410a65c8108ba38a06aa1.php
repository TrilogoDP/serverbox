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

/* luxshop/template/product/review.twig */
class __TwigTemplate_830ebcb095406d72d7c5ac6b16a850e4542c82ab01660f2d6bedb8a36e45dcc3 extends \Twig\Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "<div class=\"review-item\">
  <div class=\"review-heading dflex align-items-center\">
    <div class=\"block-author\">
    ";
                // line 6
                if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["review"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["purchased"] ?? null) : null)) {
                    // line 7
                    echo "      <span title=\"";
                    echo ($context["text_purchased"] ?? null);
                    echo "\" data-toggle=\"tooltip\" class=\"purchased\">
      <svg width=\"17\" height=\"15\" viewBox=\"0 0 17 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
      <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.25 1C0.25 0.585786 0.585786 0.25 1 0.25H1.94451C2.69101 0.25 3.35532 0.723533 3.59881 1.42921L5.89411 8.08154C5.92889 8.18235 6.02379 8.25 6.13044 8.25H13.9076C14.0266 8.25 14.1292 8.16606 14.1527 8.04936L15.0125 3.7807C15.0436 3.62591 14.9253 3.48133 14.7674 3.48133H6.66022C6.24601 3.48133 5.91022 3.14555 5.91022 2.73133C5.91022 2.31712 6.24601 1.98133 6.66022 1.98133H14.7674C15.8727 1.98133 16.7012 2.99333 16.4829 4.07687L15.6232 8.34554C15.4586 9.16243 14.7409 9.75 13.9076 9.75H6.13044C5.38394 9.75 4.71962 9.27647 4.47614 8.57079L2.18084 1.91846C2.14606 1.81765 2.05115 1.75 1.94451 1.75H1C0.585786 1.75 0.25 1.41421 0.25 1Z\" fill=\"#00BC52\"/>
      <path d=\"M7.67578 13.3831C7.67578 14.2115 7.00421 14.8831 6.17578 14.8831C5.34735 14.8831 4.67578 14.2115 4.67578 13.3831C4.67578 12.5546 5.34735 11.8831 6.17578 11.8831C7.00421 11.8831 7.67578 12.5546 7.67578 13.3831Z\" fill=\"#00BC52\"/>
      <path d=\"M15.6758 13.3831C15.6758 14.2115 15.0042 14.8831 14.1758 14.8831C13.3474 14.8831 12.6758 14.2115 12.6758 13.3831C12.6758 12.5546 13.3474 11.8831 14.1758 11.8831C15.0042 11.8831 15.6758 12.5546 15.6758 13.3831Z\" fill=\"#00BC52\"/>
    </svg>
      </span>";
                }
                // line 14
                echo "    ";
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["review"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["author"] ?? null) : null);
                echo "
  </div>
    <div class=\"block-date\">
      ";
                // line 17
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["review"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["date_added"] ?? null) : null);
                echo "
    </div>
  </div>
  <div class=\"review-info\">
    <div class=\"rating\">
        ";
                // line 22
                $context["i"] = 1;
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 23
                    echo "        ";
                    if (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["review"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["rating"] ?? null) : null) < $context["i"])) {
                        // line 24
                        echo "        <svg width=\"19\" height=\"18\" viewBox=\"0 0 19 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9.50033 14.7502L5.12206 17.052C4.38843 17.4377 3.531 16.8147 3.67111 15.9978L4.50729 11.1226L0.96519 7.66986C0.371673 7.09133 0.699183 6.08335 1.5194 5.96417L6.41446 5.25287L8.6036 0.8172C8.97041 0.0739543 10.0303 0.0739541 10.3971 0.8172L12.5862 5.25287L17.4813 5.96417C18.3015 6.08335 18.629 7.09133 18.0355 7.66986L14.4934 11.1226L15.3296 15.9978C15.4697 16.8147 14.6122 17.4377 13.8786 17.052L9.50033 14.7502Z\" fill=\"#EFEFEF\"/>
        </svg>
        ";
                    } else {
                        // line 28
                        echo "        <svg width=\"19\" height=\"18\" viewBox=\"0 0 19 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9.96568 14.9949C9.67435 14.8417 9.32632 14.8417 9.03499 14.9949L5.12206 17.052C4.38843 17.4377 3.531 16.8147 3.67111 15.9978L4.50729 11.1226L0.96519 7.66986C0.371673 7.09133 0.699183 6.08335 1.5194 5.96417L6.41446 5.25287L8.6036 0.8172C8.97041 0.0739543 10.0303 0.0739541 10.3971 0.8172L12.5862 5.25287L17.4813 5.96417C18.3015 6.08335 18.629 7.09133 18.0355 7.66986L14.4934 11.1226L15.3296 15.9978C15.4697 16.8147 14.6122 17.4377 13.8786 17.052L9.96568 14.9949Z\" fill=\"#E5DB77\"/>
        </svg>
        ";
                    }
                    // line 32
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "      </div>
      <div class=\"comment\">
        ";
                // line 35
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["review"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["text"] ?? null) : null);
                echo "
      </div>
      ";
                // line 37
                if ((($context["show_review_plus"] ?? null) && (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["review"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["plus"] ?? null) : null))) {
                    // line 38
                    echo "        <div class=\"review_plus\">
          <div><span>";
                    // line 39
                    echo ($context["text_plus"] ?? null);
                    echo "</span>
          ";
                    // line 40
                    echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["review"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["plus"] ?? null) : null);
                    echo "
          </div>
        </div>
      ";
                }
                // line 44
                echo "      ";
                if ((($context["show_review_minus"] ?? null) && (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["review"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["minus"] ?? null) : null))) {
                    // line 45
                    echo "      <div class=\"review_minus\">
        <div><span>";
                    // line 46
                    echo ($context["text_minus"] ?? null);
                    echo "</span>
        ";
                    // line 47
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["review"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["minus"] ?? null) : null);
                    echo "
      </div>
      </div>
      ";
                }
                // line 51
                echo "
      ";
                // line 52
                if ((twig_get_attribute($this->env, $this->source, $context["review"], "admin_reply", [], "array", true, true, false, 52) && ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["review"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["admin_reply"] ?? null) : null) != ""))) {
                    // line 53
                    echo "        <div class=\"admin_reply\">
          <div>";
                    // line 54
                    echo ($context["text_admin_reply"] ?? null);
                    echo "</div>
          ";
                    // line 55
                    echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["review"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["admin_reply"] ?? null) : null);
                    echo "
        </div>
      ";
                }
                // line 58
                echo "  </div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "<div class=\"text-center\">";
            echo ($context["pagination"] ?? null);
            echo "</div>
";
        } else {
            // line 63
            echo "<p>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "luxshop/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 63,  170 => 61,  162 => 58,  156 => 55,  152 => 54,  149 => 53,  147 => 52,  144 => 51,  137 => 47,  133 => 46,  130 => 45,  127 => 44,  120 => 40,  116 => 39,  113 => 38,  111 => 37,  106 => 35,  102 => 33,  96 => 32,  90 => 28,  84 => 24,  81 => 23,  76 => 22,  68 => 17,  61 => 14,  50 => 7,  48 => 6,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/product/review.twig", "");
    }
}
