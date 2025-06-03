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

/* luxshop/template/extension/module/luxshop_question_answer.twig */
class __TwigTemplate_0939ea68be1d5946288da59a14b9d8a3d3587a7b5c6b8a038a03b70295f61758 extends \Twig\Template
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
        echo "<link href=\"catalog/view/theme/luxshop/stylesheet/popup-question-answer/stylefcp.css\" rel=\"stylesheet\" media=\"screen\" />
<div class=\"box-question-answer\">
";
        // line 3
        if (($context["question_answer"] ?? null)) {
            // line 4
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["question_answer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 5
                echo "\t\t<div class=\"qa-item\">
\t\t<div class=\"info-client\">
\t\t\t<div class=\"client-name\">";
                // line 7
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["result"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name_field"] ?? null) : null);
                echo "</div>
\t\t\t<div class=\"client-date-added\">";
                // line 8
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["result"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["date_added"] ?? null) : null);
                echo "</div>
\t\t</div>
\t\t<div class=\"question-answer\">
\t\t<div class=\"question-client\">";
                // line 11
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["result"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["comment_field"] ?? null) : null);
                echo "</div>
\t\t";
                // line 12
                if (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["result"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["comment_manager"] ?? null) : null) != "")) {
                    echo "<div class=\"answer-admin\"><span>";
                    echo ($context["text_answer_admin"] ?? null);
                    echo "</span>";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["result"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["comment_manager"] ?? null) : null);
                    echo "</div>";
                }
                // line 13
                echo "\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t<div class=\"pagination_question\">
\t\t<div class=\"text-center\">";
            // line 17
            echo ($context["pagination"] ?? null);
            echo "</div>
\t<div class=\"text-center\">";
            // line 18
            echo ($context["results"] ?? null);
            echo "</div>
</div>
";
        } else {
            // line 21
            echo "<div class=\"text-left mb-20\">";
            echo ($context["text_no_question"] ?? null);
            echo "</div>
";
        }
        // line 23
        echo "</div>
<form class=\"form-horizontal mt-15\" id=\"form-question-answer\">
\t";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "name_field", [], "array", true, true, false, 25)) {
            // line 26
            echo "\t\t<div class=\"form-group ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "name_field_required", [], "array", true, true, false, 26)) ? ("required") : (""));
            echo "\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<label class=\"control-label\" for=\"contact-name\">";
            // line 28
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "name_field_placeholder", [], "array", false, true, false, 28), ($context["lang_id"] ?? null), [], "array", true, true, false, 28)) ? ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["qadata"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name_field_placeholder"] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["text"] ?? null) : null)) : (""));
            echo "</label>
\t\t\t\t<input id=\"contact-name\" class=\"form-control contact-name\" type=\"text\" placeholder=\"";
            // line 29
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "name_field_placeholder", [], "array", false, true, false, 29), ($context["lang_id"] ?? null), [], "array", true, true, false, 29)) ? ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["qadata"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["name_field_placeholder"] ?? null) : null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["text"] ?? null) : null)) : (""));
            echo "\" value=\"";
            echo ($context["name_field"] ?? null);
            echo "\" name=\"name_field\">
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 33
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "telephone_field", [], "array", true, true, false, 33)) {
            // line 34
            echo "\t\t<div class=\"form-group ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "telephone_field_required", [], "array", true, true, false, 34)) ? ("required") : (""));
            echo "\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<label class=\"control-label\" for=\"contact-name\">";
            // line 36
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "telephone_field_placeholder", [], "array", false, true, false, 36), ($context["lang_id"] ?? null), [], "array", true, true, false, 36)) ? ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["qadata"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["telephone_field_placeholder"] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["text"] ?? null) : null)) : (""));
            echo "</label>
\t\t\t\t<input id=\"contact-telephone\" class=\"form-control contact-telephone\" type=\"text\" placeholder=\"";
            // line 37
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "telephone_field_placeholder", [], "array", false, true, false, 37), ($context["lang_id"] ?? null), [], "array", true, true, false, 37)) ? ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["qadata"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["telephone_field_placeholder"] ?? null) : null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["text"] ?? null) : null)) : (""));
            echo "\" value=\"";
            echo ($context["telephone_field"] ?? null);
            echo "\" name=\"telephone_field\">
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 41
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "email_field", [], "array", true, true, false, 41)) {
            // line 42
            echo "\t\t<div class=\"form-group ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "email_field_required", [], "array", true, true, false, 42)) ? ("required") : (""));
            echo "\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<label class=\"control-label\" for=\"contact-name\">";
            // line 44
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "email_field_placeholder", [], "array", false, true, false, 44), ($context["lang_id"] ?? null), [], "array", true, true, false, 44)) ? ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["qadata"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["email_field_placeholder"] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["text"] ?? null) : null)) : (""));
            echo "</label>
\t\t\t\t\t<input id=\"contact-email\" class=\"form-control contact-email\" type=\"text\" placeholder=\"";
            // line 45
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "email_field_placeholder", [], "array", false, true, false, 45), ($context["lang_id"] ?? null), [], "array", true, true, false, 45)) ? ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["qadata"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["email_field_placeholder"] ?? null) : null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["text"] ?? null) : null)) : (""));
            echo "\" value=\"";
            echo ($context["email_field"] ?? null);
            echo "\" name=\"email_field\">
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 49
        echo "\t\t<div class=\"form-group required\">
\t\t<div class=\"col-xs-12\">
\t\t\t<label class=\"control-label\" for=\"input-comment-field\">";
        // line 51
        echo ($context["entry_question"] ?? null);
        echo "</label>
            <textarea name=\"comment_field\" rows=\"5\" id=\"input-comment-field\" class=\"form-control\"></textarea>
        </div>
        </div>
\t\t";
        // line 55
        if (($context["text_agree"] ?? null)) {
            // line 56
            echo "        <div class=\"col-xs-12 text-center\">
\t\t  ";
            // line 57
            echo ($context["text_agree"] ?? null);
            echo "
            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
\t\t\t\t\t\t<div class=\"error_agree\"></div>
        </div>
\t\t";
        }
        // line 62
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "captcha_field", [], "array", true, true, false, 62)) {
            // line 63
            echo "\t<div class=\"form-group\">
\t\t<div class=\"col-xs-12\">";
            // line 64
            echo ($context["captcha_qa"] ?? null);
            echo "</div>
\t</div>
\t";
        }
        // line 67
        echo "\t <div class=\"help-block\">";
        echo ($context["text_note_html"] ?? null);
        echo "</div>
\t<div class=\"buttons clearfix\">
      <div class=\"pull-left\">
      <button type=\"button\" id=\"button-question-answer\" data-loading-text=\"";
        // line 70
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["add_question"] ?? null);
        echo "</button>
\t</div>
  </div>
\t<input type=\"hidden\" name=\"qa_product_id\" value=\"";
        // line 73
        echo ($context["product_id"] ?? null);
        echo "\"/>
</form>

";
        // line 76
        if (((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["qadata"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["telephone_field_mask"] ?? null) : null) != "")) {
            // line 77
            echo "<script src=\"catalog/view/theme/luxshop/js/maskedinput.js\" type=\"text/javascript\"></script>
 <script>
\$(document).ready(function() {
\t\$(\"#contact-telephone\").mask(\"";
            // line 80
            echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["qadata"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["telephone_field_mask"] ?? null) : null);
            echo "\");
});
</script>
";
        }
        // line 84
        echo "<script>
\$('#button-question-answer').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/module/luxshop_question_answer/validateForm',
\t\ttype: 'post',
\t\tdata: \$('#form-question-answer input, #form-question-answer textarea').serialize(),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-question-answer').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-question-answer').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\$('.alert').remove();
\t\t\$('.loading_masked').remove();
\t\t\$('#contact-name').removeClass('error_input');
\t\t\$('#contact-name').attr('placeholder','";
        // line 101
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "name_field_placeholder", [], "array", false, true, false, 101), ($context["lang_id"] ?? null), [], "array", true, true, false, 101)) ? ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["qadata"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["name_field_placeholder"] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["text"] ?? null) : null)) : (""));
        echo "');
\t\t\$('#contact-telephone').removeClass('error_input');
\t\t\$('#contact-telephone').attr('placeholder','";
        // line 103
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "telephone_field_placeholder", [], "array", false, true, false, 103), ($context["lang_id"] ?? null), [], "array", true, true, false, 103)) ? ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["qadata"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["telephone_field_placeholder"] ?? null) : null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["text"] ?? null) : null)) : (""));
        echo "');
\t\t\$('#contact-comment').removeClass('error_input');
\t\t\$('#contact-email').removeClass('error_input');
\t\t\$('#contact-email').attr('placeholder','";
        // line 106
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["qadata"] ?? null), "email_field_placeholder", [], "array", false, true, false, 106), ($context["lang_id"] ?? null), [], "array", true, true, false, 106)) ? ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["qadata"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["email_field_placeholder"] ?? null) : null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["text"] ?? null) : null)) : (""));
        echo "');
\t\t\$('.text-danger').empty();
\t\tif (json['error']) {
\t\t\tif (json['error']['name_field']) {
\t\t\t\t\$('#contact-name').attr('placeholder',json['error']['name_field']);
\t\t\t\t\$('#contact-name').addClass('error_input');
\t\t\t}
\t\t\tif (json['error']['telephone_field']) {
\t\t\t\t\$('#contact-telephone').attr('placeholder',json['error']['telephone_field']);
\t\t\t\t\$('#contact-telephone').addClass('error_input');
\t\t\t}
\t\t\tif (json['error']['comment_field']) {
\t\t\t\t\$('#form-question-answer').before('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['comment_field'] + '</div>');
\t\t\t}
\t\t\tif (json['error']['captcha']) {
\t\t\t\t\$('#form-question-answer').before('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['captcha'] + '</div>');
\t\t\t}
\t\t\tif (json['error']['email_field']) {
\t\t\t\t\$('#contact-email').attr('placeholder',json['error']['email_field']);
\t\t\t\t\$('#contact-email').addClass('error_input');
\t\t\t}
\t\t\tif (json['error']['error_agree']) {
\t\t\t\t\$('.error_agree').append('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['error_agree'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t}
\t\t\tif (json['success']) {
\t\t\t\t\$('#form-question-answer').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#form-question-answer input[name=\\'name_field\\']').val('');
\t\t\t\t\$('#form-question-answer input[name=\\'telephone_field\\']').val('');
\t\t\t\t\$('#form-question-answer input[name=\\'email_field\\']').val('');
\t\t\t\t\$('#form-question-answer textarea[name=\\'comment_field\\']').val('');
\t\t\t}
\t\t}
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "luxshop/template/extension/module/luxshop_question_answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 106,  265 => 103,  260 => 101,  241 => 84,  234 => 80,  229 => 77,  227 => 76,  221 => 73,  213 => 70,  206 => 67,  200 => 64,  197 => 63,  194 => 62,  186 => 57,  183 => 56,  181 => 55,  174 => 51,  170 => 49,  161 => 45,  157 => 44,  151 => 42,  148 => 41,  139 => 37,  135 => 36,  129 => 34,  126 => 33,  117 => 29,  113 => 28,  107 => 26,  105 => 25,  101 => 23,  95 => 21,  89 => 18,  85 => 17,  82 => 16,  74 => 13,  66 => 12,  62 => 11,  56 => 8,  52 => 7,  48 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/extension/module/luxshop_question_answer.twig", "");
    }
}
