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

/* luxshop/template/common/footer.twig */
class __TwigTemplate_fbea4934b0aa595079254f7d9a2b8a4e73daa05569a0f8f786f63815761b0faa extends \Twig\Template
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
        echo "<footer class=\"";
        if ((array_key_exists("footer_theme_mode", $context) && (($context["footer_theme_mode"] ?? null) == 1))) {
            echo "ls-dark-theme";
        } else {
            echo "ls-light-theme";
        }
        echo "\">
";
        // line 2
        if ( !twig_test_empty(($context["banner_items_footers"] ?? null))) {
            // line 3
            echo "<div class=\"box-banner-container\">
<div class=\"container\">
<div class=\"row banner-footer\">
\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banner_items_footers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner_items_footer"]) {
                // line 7
                echo "\t<div class=\"col-xs-6 col-sm-6 col-md-2\">
\t\t<div class=\"block-banner-footer ";
                // line 8
                if (((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["banner_items_footer"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["popup"] ?? null) : null) == "1") && (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["banner_items_footer"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["link"] ?? null) : null)) || (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["banner_items_footer"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["popup"] ?? null) : null) == "0") && (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["banner_items_footer"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["link"] ?? null) : null)))) {
                    echo "is_a_link";
                }
                echo "\" ";
                if ((((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["banner_items_footer"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["popup"] ?? null) : null) == "1") && (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["banner_items_footer"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["link"] ?? null) : null))) {
                    echo " onclick=\"banner_link_open('";
                    echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["banner_items_footer"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["link"] ?? null) : null);
                    echo "')\"";
                } elseif ((((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["banner_items_footer"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["popup"] ?? null) : null) == "0") && (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["banner_items_footer"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["link"] ?? null) : null))) {
                    echo "onclick=\"location='";
                    echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["banner_items_footer"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["link"] ?? null) : null);
                    echo "'\" ";
                }
                echo ">
\t\t\t";
                // line 9
                if (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["banner_items_footer"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["icon_type"] ?? null) : null) == 0)) {
                    // line 10
                    echo "\t\t\t<div class=\"icon-banner-footer\">
\t\t\t\t<span><i class=\"";
                    // line 11
                    echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["banner_items_footer"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["icon_image"] ?? null) : null);
                    echo "\"></i></span>
\t\t\t</div>
\t\t\t";
                } else {
                    // line 14
                    echo "\t\t\t<div class=\"image-banner-footer\">
\t\t\t\t<img loading=\"lazy\" width=\"50\" height=\"50\" src=\"";
                    // line 15
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["banner_items_footer"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["image"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["banner_items_footer"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["title"] ?? null) : null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["lang_id"] ?? null)] ?? null) : null);
                    echo "\">
\t\t\t</div>
\t\t\t";
                }
                // line 18
                echo "\t\t\t<div class=\"text-footer-banner\">
\t\t\t\t<div class=\"banner-title-footer\">";
                // line 19
                echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["banner_items_footer"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["title"] ?? null) : null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["lang_id"] ?? null)] ?? null) : null);
                echo "</div>
\t\t\t\t<div class=\"banner-description-footer\">";
                // line 20
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["banner_items_footer"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["description"] ?? null) : null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[($context["lang_id"] ?? null)] ?? null) : null);
                echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner_items_footer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "</div>
</div>
</div>
";
        }
        // line 29
        if ((($context["config_on_off_footer_ribbon"] ?? null) == "1")) {
            // line 30
            echo "\t<div class=\"container pos-rel\">
\t\t<div class=\"footer-ribbon-box\">
\t\t\t<div class=\"footer-ribbon\">
\t\t\t\t<span>";
            // line 33
            echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["config_footer_ribbon"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["config_footer_ribbon"] ?? null) : null);
            echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 38
        echo "<div class=\"footer-top\">

\t\t\t\t<div class=\"container\">   
\t\t\t\t\t<div class=\"row\">   
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12\">   
\t\t\t\t\t\t\t<div class=\"newsletter\">   
\t\t\t\t\t\t\t\t<div class=\"icon-newsletter\">
\t\t\t\t\t\t\t\t\t<svg width=\"76\" height=\"52\" viewBox=\"0 0 76 52\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<rect x=\"0.75\" y=\"1.02686\" width=\"74.5\" height=\"49.9462\" rx=\"5.25\" stroke=\"white\" stroke-width=\"1.5\"/>
\t\t\t\t\t\t\t\t\t<path d=\"M2 3.70605L34.4078 20.1026C36.6797 21.252 39.3631 21.2514 41.6345 20.1008L74 3.70605\" stroke=\"white\" stroke-width=\"1.5\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"title-nl\">";
        // line 50
        echo ($context["text_subcribe"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"input-newsletter\" placeholder=\"";
        // line 52
        echo ($context["text_placeholder_subcribe"] ?? null);
        echo "\" value=\"\" >
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn igb-nl\">
\t\t\t\t\t\t\t\t\t\t<button id=\"subcribe\" class=\"btn btn-newsletter\" type=\"button\"><span class=text-btn>";
        // line 54
        echo ($context["text_btn_subcribe"] ?? null);
        echo "</span></button>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span id=\"error-msg\"></span>\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"col-xs-12 col-sm-12 col-md-3 footer-contact\">
\t\t<ul class=\"list-unstyled\">
\t\t";
        // line 67
        if (($context["phones_footer"] ?? null)) {
            // line 68
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["phones_footer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["phone_footer"]) {
                // line 69
                echo "\t\t\t\t";
                if ( !twig_test_empty((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["phone_footer"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["type"] ?? null) : null))) {
                    // line 70
                    echo "\t\t\t\t\t<li><a ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["phone_footer"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["type"] ?? null) : null);
                    echo ">";
                    if ( !twig_test_empty((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["phone_footer"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["icon_footer_phone"] ?? null) : null))) {
                        echo "<i class=\"";
                        echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["phone_footer"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["icon_footer_phone"] ?? null) : null);
                        echo " fa-width\"></i> ";
                    }
                    echo " ";
                    echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["phone_footer"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["phone_footer"] ?? null) : null);
                    echo "</a></li>
\t\t\t\t";
                } else {
                    // line 72
                    echo "\t\t\t\t\t<li>";
                    if ( !twig_test_empty((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["phone_footer"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["icon_footer_phone"] ?? null) : null))) {
                        echo "<i class=\"";
                        echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["phone_footer"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["icon_footer_phone"] ?? null) : null);
                        echo " fa-width\"></i> ";
                    }
                    echo " ";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["phone_footer"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["phone_footer"] ?? null) : null);
                    echo "</li>
\t\t\t\t";
                }
                // line 74
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone_footer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t";
        }
        // line 76
        echo "\t\t</ul>

\t\t";
        // line 78
        if (($context["social_footer"] ?? null)) {
            // line 79
            echo "\t\t<div class=\"socials\">
\t\t<ul class=\"list-unstyled\">
\t\t\t<li>
\t\t\t";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["social_footer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rsf"]) {
                // line 83
                echo "\t\t\t\t<a ";
                if ( !twig_test_empty((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["rsf"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["social_icon_footer"] ?? null) : null))) {
                    echo " class=\"sficon\" onmouseout=\"this.style.background=''\" onMouseOver=\"this.style.background='";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["rsf"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["bg_hover_icon"] ?? null) : null);
                    echo "'\" ";
                }
                echo " target=\"_blank\" href=\"";
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["rsf"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["social_link_footer"] ?? null) : null)) {
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["rsf"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["social_link_footer"] ?? null) : null);
                } else {
                    echo "javascript:void(0);";
                }
                echo "\">
\t\t\t\t";
                // line 84
                if ( !twig_test_empty((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["rsf"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["social_icon_footer"] ?? null) : null))) {
                    // line 85
                    echo "\t\t\t\t\t<i class=\"";
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["rsf"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["social_icon_footer"] ?? null) : null);
                    echo "\"></i>
\t\t\t\t";
                } else {
                    // line 87
                    echo "\t\t\t\t\t<img loading=\"lazy\" width=\"25\" height=\"25\" src=\"";
                    echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["rsf"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["ifs"] ?? null) : null);
                    echo "\" alt=\"\">
\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t </a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rsf'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "\t\t\t</li>
\t\t</ul>
\t\t</div>
\t\t";
        }
        // line 95
        echo "\t\t";
        if (($context["config_payments_footer"] ?? null)) {
            // line 96
            echo "\t\t<ul class=\"list-unstyled\">
\t\t\t<li>
\t\t\t\t";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["config_payments_array_footer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["config_payments_footer"]) {
                // line 99
                echo "\t\t\t\t\t<a target=\"_blank\" href=\"";
                if ((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["config_payments_footer"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["payments_link_footer"] ?? null) : null)) {
                    echo "//";
                    echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["config_payments_footer"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["payments_link_footer"] ?? null) : null);
                } else {
                    echo "javascript:void(0);";
                }
                echo "\"><img src=\"";
                echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["config_payments_footer"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["icon_footer_payments"] ?? null) : null);
                echo "\" alt=\"\" title=\"\"></a>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config_payments_footer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t\t\t</li>
\t\t</ul>
\t\t";
        }
        // line 104
        echo "\t\t";
        if ( !twig_test_empty(($context["ns_logo_footer"] ?? null))) {
            // line 105
            echo "\t\t<div id=\"logo-footer\">
\t\t\t  <img src=\"";
            // line 106
            echo ($context["ns_logo_footer"] ?? null);
            echo "\" alt=\"\" class=\"img-responsive\">
\t\t</div>
\t\t";
        }
        // line 109
        echo "\t</div>
\t<div class=\"col-xs-12 col-sm-12 col-md-9 f-column\">
\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t<div class=\"title-f\">
\t\t\t\t";
        // line 113
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "column_3", [], "array", false, true, false, 113), ($context["lang_id"] ?? null), [], "array", false, true, false, 113), "icon_image", [], "array", true, true, false, 113) && ((($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["fcols"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["column_3"] ?? null) : null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["icon_image"] ?? null) : null) != ""))) {
            echo "<i class=\"";
            echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["fcols"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["column_3"] ?? null) : null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["icon_image"] ?? null) : null);
            echo "\"></i> ";
        }
        // line 114
        echo "\t\t\t\t";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "column_3", [], "array", false, true, false, 114), ($context["lang_id"] ?? null), [], "array", false, true, false, 114), "name_column", [], "array", true, true, false, 114)) ? ((($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["fcols"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["column_3"] ?? null) : null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["name_column"] ?? null) : null)) : (""));
        echo "
\t\t\t</div>
\t\t\t<ul class=\"list-unstyled two-c-pc\">
\t\t\t\t";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "link_account", [], "array", true, true, false, 117)) {
            echo "<li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>";
        }
        // line 118
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "link_order", [], "array", true, true, false, 118)) {
            echo "<li><a href=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>";
        }
        // line 119
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "link_wishlist", [], "array", true, true, false, 119)) {
            echo "<li><a href=\"";
            echo ($context["wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>";
        }
        // line 120
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "link_newsletter", [], "array", true, true, false, 120)) {
            echo "<li><a href=\"";
            echo ($context["newsletter"] ?? null);
            echo "\">";
            echo ($context["text_newsletter"] ?? null);
            echo "</a></li>";
        }
        // line 121
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "link_contact", [], "array", true, true, false, 121)) {
            echo "<li><a href=\"";
            echo ($context["contact"] ?? null);
            echo "\">";
            echo ($context["text_contact"] ?? null);
            echo "</a></li>";
        }
        // line 122
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "link_return", [], "array", true, true, false, 122)) {
            echo "<li><a href=\"";
            echo ($context["return"] ?? null);
            echo "\">";
            echo ($context["text_return"] ?? null);
            echo "</a></li>";
        }
        // line 123
        echo "\t\t\t\t";
        if (($context["footer_links"] ?? null)) {
            // line 124
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["footer_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 125
                echo "\t\t\t\t\t\t";
                if (((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["result"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["column_link"] ?? null) : null) == 3)) {
                    // line 126
                    echo "\t\t\t\t\t\t\t<li><a href=\"";
                    echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["result"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["link"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["result"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["title"] ?? null) : null);
                    echo "</a></li>
\t\t\t\t\t\t";
                }
                // line 128
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "\t\t\t\t";
        }
        // line 130
        echo "\t\t\t</ul>
\t\t</div>
\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t<div class=\"title-f\">
\t\t\t\t";
        // line 134
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "column_2", [], "array", false, true, false, 134), ($context["lang_id"] ?? null), [], "array", false, true, false, 134), "icon_image", [], "array", true, true, false, 134) && ((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["fcols"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["column_2"] ?? null) : null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["icon_image"] ?? null) : null) != ""))) {
            echo "<i class=\"";
            echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = ($context["fcols"] ?? null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["column_2"] ?? null) : null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["icon_image"] ?? null) : null);
            echo "\"></i> ";
        }
        // line 135
        echo "\t\t\t\t";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "column_2", [], "array", false, true, false, 135), ($context["lang_id"] ?? null), [], "array", false, true, false, 135), "name_column", [], "array", true, true, false, 135)) ? ((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["fcols"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["column_2"] ?? null) : null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["name_column"] ?? null) : null)) : (""));
        echo "
\t\t\t</div>
\t\t\t<ul class=\"list-unstyled two-c-pc\">
\t\t\t\t";
        // line 138
        if (twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "link_manufacturer", [], "array", true, true, false, 138)) {
            echo "<li><a href=\"";
            echo ($context["manufacturer"] ?? null);
            echo "\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</a></li>";
        }
        // line 139
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "link_voucher", [], "array", true, true, false, 139)) {
            echo "<li><a href=\"";
            echo ($context["voucher"] ?? null);
            echo "\">";
            echo ($context["text_voucher"] ?? null);
            echo "</a></li>";
        }
        // line 140
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "link_affiliate", [], "array", true, true, false, 140)) {
            echo "<li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate"] ?? null);
            echo "</a></li>";
        }
        // line 141
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "link_special", [], "array", true, true, false, 141)) {
            echo "<li><a href=\"";
            echo ($context["special"] ?? null);
            echo "\">";
            echo ($context["text_special"] ?? null);
            echo "</a></li>";
        }
        // line 142
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "link_sitemap", [], "array", true, true, false, 142)) {
            echo "<li><a href=\"";
            echo ($context["sitemap"] ?? null);
            echo "\">";
            echo ($context["text_sitemap"] ?? null);
            echo "</a></li>";
        }
        // line 143
        echo "\t\t\t\t";
        if (($context["footer_links"] ?? null)) {
            // line 144
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["footer_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 145
                echo "\t\t\t\t\t\t";
                if (((($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["result"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["column_link"] ?? null) : null) == 2)) {
                    // line 146
                    echo "\t\t\t\t\t\t\t<li><a href=\"";
                    echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["result"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["link"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["result"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["title"] ?? null) : null);
                    echo "</a></li>
\t\t\t\t\t\t";
                }
                // line 148
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "\t\t\t\t";
        }
        // line 150
        echo "\t\t\t</ul>
\t\t</div>
\t\t";
        // line 152
        if (($context["informations"] ?? null)) {
            // line 153
            echo "\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t<div class=\"title-f\">";
            // line 154
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "column_1", [], "array", false, true, false, 154), ($context["lang_id"] ?? null), [], "array", false, true, false, 154), "icon_image", [], "array", true, true, false, 154) && ((($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["fcols"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["column_1"] ?? null) : null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["icon_image"] ?? null) : null) != ""))) {
                echo "<i class=\"";
                echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = ($context["fcols"] ?? null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["column_1"] ?? null) : null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["icon_image"] ?? null) : null);
                echo "\"></i> ";
            }
            // line 155
            echo "\t\t\t\t";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "column_1", [], "array", false, true, false, 155), ($context["lang_id"] ?? null), [], "array", false, true, false, 155), "name_column", [], "array", true, true, false, 155)) ? ((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["fcols"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["column_1"] ?? null) : null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["name_column"] ?? null) : null)) : (""));
            echo "
\t\t\t</div>
\t\t\t<ul class=\"list-unstyled two-c-pc\">
\t\t\t\t";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 159
                echo "\t\t\t\t\t<li><a href=\"";
                echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["information"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["href"] ?? null) : null);
                echo "\">";
                echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = $context["information"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["title"] ?? null) : null);
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "\t\t\t</ul>
\t\t</div>
\t\t";
        }
        // line 164
        echo "\t\t";
        if (($context["footer_links"] ?? null)) {
            // line 165
            echo "\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t<div class=\"title-f\">
\t\t\t\t";
            // line 167
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "column_4", [], "array", false, true, false, 167), ($context["lang_id"] ?? null), [], "array", false, true, false, 167), "icon_image", [], "array", true, true, false, 167) && ((($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = ($context["fcols"] ?? null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["column_4"] ?? null) : null)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["icon_image"] ?? null) : null) != ""))) {
                echo "<i class=\"";
                echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = ($context["fcols"] ?? null)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["column_4"] ?? null) : null)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["icon_image"] ?? null) : null);
                echo "\"></i> ";
            }
            // line 168
            echo "\t\t\t\t";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fcols"] ?? null), "column_4", [], "array", false, true, false, 168), ($context["lang_id"] ?? null), [], "array", false, true, false, 168), "name_column", [], "array", true, true, false, 168)) ? ((($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = ($context["fcols"] ?? null)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["column_4"] ?? null) : null)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8[($context["lang_id"] ?? null)] ?? null) : null)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["name_column"] ?? null) : null)) : (""));
            echo "
\t\t\t</div>
\t\t\t<ul class=\"list-unstyled two-c-pc\">
\t\t\t\t";
            // line 171
            if (($context["footer_links"] ?? null)) {
                // line 172
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["footer_links"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                    // line 173
                    echo "\t\t\t\t\t\t";
                    if (((($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["result"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["column_link"] ?? null) : null) == 4)) {
                        // line 174
                        echo "\t\t\t\t\t\t\t<li><a href=\"";
                        echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["result"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["link"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = $context["result"]) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["title"] ?? null) : null);
                        echo "</a></li>
\t\t\t\t\t\t";
                    }
                    // line 176
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "\t\t\t\t";
            }
            // line 178
            echo "\t\t\t</ul>
\t\t</div>
\t\t";
        }
        // line 181
        echo "\t</div>
\t</div>
  </div>
  ";
        // line 184
        if ((($context["footer_desc_status"] ?? null) || (($context["footer_map_status"] ?? null) != "off"))) {
            // line 185
            echo "  <div class=\"container\">
\t<div class=\"row\">
\t  ";
            // line 187
            if ((($context["footer_desc_status"] ?? null) == 1)) {
                // line 188
                echo "\t\t<div class=\"col-xs-12 ";
                if ((($context["footer_map_status"] ?? null) == "off")) {
                    echo "col-md-12";
                } else {
                    echo "col-md-6";
                }
                echo "\">
\t\t <div class=\"title-f\">";
                // line 189
                echo ($context["about_us"] ?? null);
                echo "</div>
\t\t  <div class=\"description_store_footer\">";
                // line 190
                echo ($context["description_store_footer"] ?? null);
                echo "</div>
\t\t</div>
\t  ";
            }
            // line 193
            echo "\t  ";
            if ((($context["footer_map_status"] ?? null) != "off")) {
                // line 194
                echo "\t  <div class=\"";
                if (($context["footer_desc_status"] ?? null)) {
                    echo "col-md-6";
                } else {
                    echo "col-md-12";
                }
                echo "\">
\t  ";
                // line 195
                if ((($context["footer_map_status"] ?? null) == "codemap")) {
                    echo ($context["code_map"] ?? null);
                }
                // line 196
                echo "\t  ";
                if ((($context["footer_map_status"] ?? null) == "gmap")) {
                    // line 197
                    echo "\t  <div id=\"gmap_footer\"></div>
\t  <script src=\"//maps.google.com/maps/api/js?key=";
                    // line 198
                    echo ($context["google_api_map_key"] ?? null);
                    echo "\"></script>
\t  <script async src=\"catalog/view/theme/luxshop/js/markerclusterer.js\"></script>
\t  <script async src=\"catalog/view/theme/luxshop/js/FullScreenControl.js\"></script>
\t  <script>
\t  function initialize() {
\t\tvar myLatlng = new google.maps.LatLng(";
                    // line 203
                    echo ($context["center_google_map"] ?? null);
                    echo ");
\t\tvar myOptions = {
\t\t  zoom: ";
                    // line 205
                    echo ($context["zoom_google_map"] ?? null);
                    echo ",
\t\t  center: myLatlng,
\t\t  mapTypeId: google.maps.MapTypeId.ROADMAP
\t\t}
\t\tvar map = new google.maps.Map(document.getElementById(\"gmap_footer\"), myOptions);
\t\tmap.controls[google.maps.ControlPosition.TOP_RIGHT].push(FullScreenControl(map, '<span class=\"open-full-screen\">";
                    // line 210
                    echo ($context["gmap_full_screen"] ?? null);
                    echo "</span>','<span class=\"normal-screen\">";
                    echo ($context["gmap_normal_screen"] ?? null);
                    echo "</span>'));
\t\tvar markers = [];
\t\tmyPlaces = [];
\t\t";
                    // line 213
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["gmap_setting"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["gmap_new"]) {
                        // line 214
                        echo "\t\t  myPlaces.push(new Place('";
                        echo (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = twig_get_attribute($this->env, $this->source, $context["gmap_new"], "onelinetext", [], "any", false, false, false, 214)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57[($context["lang_id"] ?? null)] ?? null) : null);
                        echo "', ";
                        echo (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = $context["gmap_new"]) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["latlong"] ?? null) : null);
                        echo ", '";
                        echo (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = twig_get_attribute($this->env, $this->source, $context["gmap_new"], "maptext", [], "any", false, false, false, 214)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283[($context["lang_id"] ?? null)] ?? null) : null);
                        echo "'));'));
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gmap_new'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 216
                    echo "\t  for (var i = 0, n = myPlaces.length; i < n; i++) {
\t\tvar marker = new google.maps.Marker({
\t\t  position: new google.maps.LatLng(myPlaces[i].latitude, myPlaces[i].longitude),
\t\t  map: map,
\t\ttitle: myPlaces[i].name
\t  });
\t\t//Добавим попап, который будет появляться при клике на маркер
\t\t  var infowindow = new google.maps.InfoWindow({
\t\t\t  content: '<div class=\"title_popap_marker\">' + myPlaces[i].name + '</div><div class=\"description_popap_marker\">' + myPlaces[i].description + '</div>'
\t\t  });
\t\t  //привязываем попап к маркеру на карте
\t\t  makeInfoWindowEvent(map, infowindow, marker);

\t  markers.push(marker);

\t\t  }
\t  markerClusterer = new MarkerClusterer(map, markers, {
\t\tmaxZoom: 14,
\t\tgridSize: 50,
\t\tstyles: null
\t  });


\t  }
\t  function makeInfoWindowEvent(map, infowindow, marker) {
\t\t  google.maps.event.addListener(marker, 'click', function() {
\t\t\t  infowindow.open(map, marker);
\t\t  });
\t  }
\t  function Place(name, latitude, longitude, description){
\t\t  this.name = name;
\t\t  this.latitude = latitude;
\t\t  this.longitude = longitude;
\t\t  this.description = description;
\t  }
\t  google.maps.event.addDomListener(window, 'load', initialize);
\t  </script>
\t  ";
                }
                // line 254
                echo "\t  </div>
\t  ";
            }
            // line 256
            echo "\t</div>
  </div>
  ";
        }
        // line 259
        echo "<div class=\"container copyright\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t<p>";
        // line 262
        echo ($context["powered_new"] ?? null);
        echo "</p>
\t   </div>
\t\t";
        // line 264
        echo ($context["config_ns_footer_counters"] ?? null);
        echo "
\t</div>
</div>
</div>
</footer>

                <script>
                    
                     function validateEmail(\$email) {
                        var emailReg = /^([\\w-\\.]+@([\\w-]+\\.)+[\\w-]{2,4})?\$/;
                        return emailReg.test( \$email );
                      }

                    \$(document).ready(function(){
                        \$('#subcribe').click(function(){
                            var email = \$('#input-newsletter').val();
                            
                            if(email == ''){
                                var error = '";
        // line 282
        echo ($context["text_empty_email"] ?? null);
        echo "';
                            }
                            
                            if( !validateEmail(email)) {
                                var error = '";
        // line 286
        echo ($context["text_validate_email"] ?? null);
        echo "';
                            }
                            
                            if(error != null){
                                \$('#error-msg').html('');
                                \$('#error-msg').append('<b style=\\\"color:red\\\">' + error + '</b>');
                            } else {
                              
                                var dataString = 'email='+ email;
                                \$.ajax({
                                    url: 'index.php?route=common/footer/addToNewsletter',
                                    type: 'post',
                                    data: dataString,
\t\t\t\t\t\t\t\t\tdataType: 'json',
                                    success: function(json) {
\t\t\t\t\t\t\t\t\t\tif (json['warning']) {
\t\t\t\t\t\t\t\t\t\t\t\$('#error-msg').empty('');
\t\t\t\t\t\t\t\t\t\t\t\$('#input-newsletter').val('');\t
\t\t\t\t\t\t\t\t\t\t\t\$('#error-msg').append('<b style=\\\"color:green\\\">' + json['warning'] + '</b>');
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\t\t\t\t\$('#error-msg').empty('');
\t\t\t\t\t\t\t\t\t\t\t\$('#input-newsletter').val('');\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\$('#error-msg').append('<b style=\\\"color:green\\\">' + json['success'] + '</b>');
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
                                    }
                                    
                                });
                            }
                            
                        })
                    });
                </script>
                

";
        // line 322
        if ((twig_get_attribute($this->env, $this->source, ($context["fb_widget"] ?? null), "status", [], "array", true, true, false, 322) && ((($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = ($context["fb_widget"] ?? null)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["status"] ?? null) : null) == 1))) {
            echo " 
\t<div id=\"cs-fb-widget\" class=\"position_";
            // line 323
            echo (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = ($context["fb_widget"] ?? null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["position"] ?? null) : null);
            echo " display_type_";
            echo (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = ($context["fb_widget"] ?? null)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["display_type"] ?? null) : null);
            echo " ";
            if ((array_key_exists("fm_fix_bottom", $context) && (($context["fm_fix_bottom"] ?? null) == 1))) {
                echo "fm-b";
            } else {
                echo "fm-t";
            }
            echo "\">
\t";
            // line 324
            if ( !twig_test_empty((($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = ($context["fb_widget"] ?? null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["items"] ?? null) : null))) {
                echo " 
\t\t<div class=\"feedback_widget_button\">
\t\t\t<div class=\"widget-icon\">
\t\t\t\t<svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M0 15.3516C0 17.0312 0.478516 18.6133 1.43555 20.0977C2.39258 21.582 3.67188 22.793 5.27344 23.7305C5.19531 24.0039 5.10742 24.3555 5.00977 24.7852C4.91211 25.2148 4.77539 25.8887 4.59961 26.8066C4.42383 27.7246 4.35547 28.4863 4.39453 29.0918C4.43359 29.6973 4.62891 30 4.98047 30C6.15234 30 7.33398 29.6875 8.52539 29.0625C9.7168 28.4375 10.6641 27.8125 11.3672 27.1875C12.0703 26.5625 12.4414 26.25 12.4805 26.25C14.6289 26.25 16.7188 25.8398 18.75 25.0195C18.5156 24.9414 18.0762 24.707 17.4316 24.3164C16.7871 23.9258 16.3867 23.7305 16.2305 23.7305H12.4805C11.7773 23.7305 11.0352 24.1211 10.2539 24.9023C9.16016 25.8789 8.125 26.582 7.14844 27.0117L7.5 22.5L6.50391 21.6211C3.84766 19.9023 2.51953 17.8125 2.51953 15.3516C2.51953 14.7266 2.63672 14.0234 2.87109 13.2422C2.71484 13.0078 2.60742 12.6465 2.54883 12.1582C2.49023 11.6699 2.46094 11.2305 2.46094 10.8398V9.49219L2.51953 8.73047C0.839844 10.5273 0 12.7344 0 15.3516ZM17.5195 0C14.043 0 11.084 1.01562 8.64258 3.04688C6.20117 5.07812 4.98047 7.51953 4.98047 10.3711C4.98047 13.1836 6.19141 15.4883 8.61328 17.2852C11.0352 19.082 14.0039 19.9805 17.5195 19.9805C17.5586 19.9805 17.959 20.4004 18.7207 21.2402C19.4824 22.0801 20.4883 22.9199 21.7383 23.7598C22.9883 24.5996 24.1992 25.0195 25.3711 25.0195C25.6445 25.0195 25.8105 24.8047 25.8691 24.375C25.9277 23.9453 25.8984 23.4277 25.7812 22.8223C25.6641 22.2168 25.5273 21.6016 25.3711 20.9766C25.2148 20.3516 25.0781 19.8242 24.9609 19.3945L24.7266 18.75C26.3281 17.7734 27.6074 16.5527 28.5645 15.0879C29.5215 13.623 30 12.0508 30 10.3711C30 7.51953 28.7793 5.07812 26.3379 3.04688C23.8965 1.01562 20.957 0 17.5195 0ZM23.4961 16.6406L21.8555 17.6367L22.5 19.5117C22.5781 19.707 22.6758 20.0391 22.793 20.5078C22.9102 20.9766 23.0273 21.3477 23.1445 21.6211C22.2852 21.0352 21.2695 20.1562 20.0977 18.9844C19.1992 18.0078 18.3789 17.5195 17.6367 17.5195C14.9023 17.5195 12.5488 16.8848 10.5762 15.6152C8.60352 14.3457 7.61719 12.5977 7.61719 10.3711C7.57812 8.18359 8.52539 6.32812 10.459 4.80469C12.3926 3.28125 14.7461 2.51953 17.5195 2.51953C20.293 2.51953 22.6465 3.28125 24.5801 4.80469C26.5137 6.32812 27.4805 8.18359 27.4805 10.3711C27.4805 12.832 26.1523 14.9219 23.4961 16.6406Z\" fill=\"white\"/>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div class=\"widget-close\">
\t\t\t\t<svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M9.76248 8L15.1375 2.6375C15.3729 2.40212 15.5051 2.08288 15.5051 1.75C15.5051 1.41713 15.3729 1.09788 15.1375 0.862503C14.9021 0.627123 14.5829 0.494888 14.25 0.494888C13.9171 0.494888 13.5979 0.627123 13.3625 0.862503L7.99998 6.2375L2.63748 0.862503C2.40211 0.627123 2.08286 0.494888 1.74998 0.494888C1.41711 0.494888 1.09786 0.627123 0.862485 0.862503C0.627105 1.09788 0.49487 1.41713 0.49487 1.75C0.49487 2.08288 0.627105 2.40212 0.862485 2.6375L6.23748 8L0.862485 13.3625C0.745324 13.4787 0.652332 13.617 0.588871 13.7693C0.52541 13.9216 0.492737 14.085 0.492737 14.25C0.492737 14.415 0.52541 14.5784 0.588871 14.7307C0.652332 14.883 0.745324 15.0213 0.862485 15.1375C0.978688 15.2547 1.11694 15.3477 1.26926 15.4111C1.42159 15.4746 1.58497 15.5073 1.74998 15.5073C1.915 15.5073 2.07838 15.4746 2.23071 15.4111C2.38303 15.3477 2.52128 15.2547 2.63748 15.1375L7.99998 9.7625L13.3625 15.1375C13.4787 15.2547 13.6169 15.3477 13.7693 15.4111C13.9216 15.4746 14.085 15.5073 14.25 15.5073C14.415 15.5073 14.5784 15.4746 14.7307 15.4111C14.883 15.3477 15.0213 15.2547 15.1375 15.1375C15.2546 15.0213 15.3476 14.883 15.4111 14.7307C15.4746 14.5784 15.5072 14.415 15.5072 14.25C15.5072 14.085 15.4746 13.9216 15.4111 13.7693C15.3476 13.617 15.2546 13.4787 15.1375 13.3625L9.76248 8Z\" fill=\"white\"/>
\t\t\t\t</svg>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"messangers-block\">
\t\t\t";
                // line 338
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fb_data"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                    echo " 
\t\t\t\t<a class=\"dflex-fb-widget-item\" ";
                    // line 339
                    echo (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = $context["result"]) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["fbw_type"] ?? null) : null);
                    echo ">
\t\t\t\t\t<span class=\"fb-icon-img\" ";
                    // line 340
                    if (((($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = ($context["fb_widget"] ?? null)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["display_type"] ?? null) : null) == 2)) {
                        echo "data-placement=\"";
                        if (((($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = ($context["fb_widget"] ?? null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["position"] ?? null) : null) == "left")) {
                            echo "right";
                        } else {
                            echo "left";
                        }
                        echo "\" data-toggle=\"popover\" data-content=\"";
                        echo (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = $context["result"]) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["fbw_text"] ?? null) : null);
                        echo "\"";
                    }
                    echo ">
\t\t\t\t\t\t<img loading=\"lazy\" width=\"40\" height=\"40\" alt=\"";
                    // line 341
                    echo (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = $context["result"]) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["fbw_icon"] ?? null) : null);
                    echo "\" src=\"catalog/view/theme/luxshop/stylesheet/feedback_widget/icon/";
                    echo (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = $context["result"]) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["fbw_icon"] ?? null) : null);
                    echo ".svg\">
\t\t\t\t\t</span>
\t\t\t\t\t";
                    // line 343
                    if (((($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = ($context["fb_widget"] ?? null)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["display_type"] ?? null) : null) == 1)) {
                        echo " 
\t\t\t\t\t\t";
                        // line 344
                        echo (($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = $context["result"]) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["fbw_text"] ?? null) : null);
                        echo "
\t\t\t\t\t";
                    }
                    // line 345
                    echo " 
\t\t\t\t</a>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 347
                echo " 
\t\t</div>
\t";
            }
            // line 349
            echo " 
\t</div>
<script>
\t\$(document).on('click', '#cs-fb-widget .feedback_widget_button', function () {
\t\t\$('#cs-fb-widget .widget-icon').toggleClass('hide-chat-btn');
\t\t\$('#cs-fb-widget .widget-close').toggleClass('show-close-btn');
\t\t\$('#cs-fb-widget .messangers-block').toggleClass('show-m-block');
\t});
\$(document).on('mouseenter','.fb-icon-img', function(e){
    var \$element_popover = \$(this);
    e.preventDefault();
    \$('.fb-icon-img').not(this).popover('destroy');
    \$element_popover.popover({ container: 'body', html: true, animation:false});
    \$element_popover.popover('show');
    \$element_popover.popover().data('bs.popover').tip().addClass('popover-fb-widget');
}).on('mouseleave','.popover,.fb-icon-img', function(e){
   var \$element_popover = \$(this);
    \$element_popover.popover(\"destroy\");
});
</script>
";
        }
        // line 370
        echo "\t\t\t

\t\t\t\t";
        // line 372
        if ((array_key_exists("agreedata", $context) && ((($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = ($context["agreedata"] ?? null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["status"] ?? null) : null) != 0))) {
            echo " 
\t\t\t\t<script>
\t\t\t\t\$(function() {
\t\t\t\t";
            // line 375
            $context["delay_time"] = ((twig_get_attribute($this->env, $this->source, ($context["agreedata"] ?? null), "delay_time", [], "array", true, true, false, 375)) ? ((($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = ($context["agreedata"] ?? null)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["delay_time"] ?? null) : null)) : ("1000"));
            echo " 
\t\t\t\t";
            // line 376
            if ( !array_key_exists("PopupAgreecookie", $context)) {
                // line 377
                echo "\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\tShowAgree();
\t\t\t\t\t}, ";
                // line 379
                echo ($context["delay_time"] ?? null);
                echo ");
\t\t\t\t";
            }
            // line 380
            echo " 
\t\t\t\t});
\t\t\t\tfunction ShowAgree() {
\t\t\t\t\t\$('body').prepend('<div id=\"messageLoadPage\"></div>');
\t\t\t\t\tcreatOverlayLoadPage(true);
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=extension/module/luxshop_agree_popup',
\t\t\t\t\t\ttype: 'get',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\t\tcreatOverlayLoadPage(false);
\t\t\t\t\t\t\t\$('html body').append(data);
\t\t\t\t\t\t\t\$('#popup-agree').modal({
\t\t\t\t\t\t\t    backdrop: 'static'
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\t</script>
\t\t\t\t";
        }
        // line 401
        echo "\t\t\t
<script>
function price_format(n){
\tc = ";
        // line 404
        echo ((twig_test_empty((($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = ($context["currency"] ?? null)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["decimals"] ?? null) : null))) ? ("0") : ((($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = ($context["currency"] ?? null)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["decimals"] ?? null) : null)));
        echo ";
\td = '";
        // line 405
        echo (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = ($context["currency"] ?? null)) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["decimal_point"] ?? null) : null);
        echo "';
\tt = '";
        // line 406
        echo (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = ($context["currency"] ?? null)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["thousand_point"] ?? null) : null);
        echo "';
\ts_left = '";
        // line 407
        echo (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = ($context["currency"] ?? null)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["symbol_left"] ?? null) : null);
        echo "';
\ts_right = '";
        // line 408
        echo (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = ($context["currency"] ?? null)) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["symbol_right"] ?? null) : null);
        echo "';
\tn = n * ";
        // line 409
        echo (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = ($context["currency"] ?? null)) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["value"] ?? null) : null);
        echo ";
\ti = parseInt(n = Math.abs(n).toFixed(c)) + '';
\tj = ((j = i.length) > 3) ? j % 3 : 0;
\treturn s_left + (j ? i.substr(0, j) + t : '') + i.substr(j).replace(/(\\d{3})(?=\\d)/g, \"\$1\" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : '') + s_right;
}

\$(document).on('click', '.title-f', function () {
\tif(\$(document).width() < 768){
\t\t\$(this).toggleClass('show-info');
\t\t\$(this).next().slideToggle(100);
\t\t\$('html, body').animate({ scrollTop: \$(this).offset().top - 80}, 250);
\t}
});

function init(elem, options){
\telem.addClass('countdownHolder');
\t\$.each(['Days','Hours','Minutes','Sec'],function(i){
\tvar clas;
\tif (this=='Days') {clas=\"";
        // line 427
        echo ($context["days"] ?? null);
        echo "\";}
\tif (this=='Hours') {clas=\"";
        // line 428
        echo ($context["hours"] ?? null);
        echo "\";}
\tif (this=='Minutes') {clas=\"";
        // line 429
        echo ($context["minutes"] ?? null);
        echo "\";}
\tif (this=='Sec') {clas=\"";
        // line 430
        echo ($context["sec"] ?? null);
        echo "\";}
\tout_timer = \"\";
\tout_timer += '<span class=\"count'+this+'\">';
\tout_timer += '<span class=\"num-time\">';
\tout_timer += '<span class=\"position\"><span class=\"digit static\">0</span></span>';
\tout_timer += '<span class=\"position\"><span class=\"digit static\">0</span></span>';
\tout_timer += '</span>';
\tout_timer += '<span class=\"time_productany\">'+clas+'</span>';
\tout_timer += '</span>';
\t\$(out_timer).appendTo(elem);
\t});
}
function downloadCSSAtOnload() {
\t";
        // line 443
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["css_luxshop_footer"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value_href"]) {
            // line 444
            echo "\t\tvar element";
            echo $context["key"];
            echo " = document.createElement(\"link\");
\t\telement";
            // line 445
            echo $context["key"];
            echo ".href = \"";
            echo $context["value_href"];
            echo "\";
\t\telement";
            // line 446
            echo $context["key"];
            echo ".rel = \"stylesheet\";
\t\tdocument.body.appendChild(element";
            // line 447
            echo $context["key"];
            echo ");
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value_href'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 449
        echo "}

function downloadJSAtOnload() {
\t";
        // line 452
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["js_luxshop_footer"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value_src"]) {
            // line 453
            echo "\t\tvar element";
            echo $context["key"];
            echo " = document.createElement(\"script\");
\t\telement";
            // line 454
            echo $context["key"];
            echo ".src = \"";
            echo $context["value_src"];
            echo "\";
\t\tdocument.body.appendChild(element";
            // line 455
            echo $context["key"];
            echo ");
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value_src'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 457
        echo "\tsetTimeout(function () {
\t\taddLsTimer();
\t\t";
        // line 459
        if ((twig_get_attribute($this->env, $this->source, ($context["config_additional_settings_luxshop"] ?? null), "price_recalc", [], "array", true, true, false, 459) && ((($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = ($context["config_additional_settings_luxshop"] ?? null)) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["price_recalc"] ?? null) : null) == "1"))) {
            // line 460
            echo "\t\t\$('.quantity_plus_minus > .quantity-num').each(function () {
\t\t\trecalcQuantity(this, false);
\t\t});
\t\t";
        }
        // line 464
        echo "\t},700);
}
function addLsTimer(){
\t\$('body .action-timer').each(function () {
\t\tif(\$(this).children('.countDays').length == 0){
\t\t\tif(\$(this).attr('data-date-end')){
\t\t\t\tvar parts_date = \$(this).attr('data-date-end').split('-');
\t\t\t\tvar ts = new Date(parts_date[0], parts_date[1] - 1, parts_date[2]);
\t\t\t\tif((new Date()) > ts){
\t\t\t\t\tts = (new Date()).getTime() + 10*24*60*60*1000;
\t\t\t\t}
\t\t\t\t\$(this).countdown({
\t\t\t\t\ttimestamp\t: ts,
\t\t\t\t\tcallback\t: function(days, hours, minutes, seconds){
\t\t\t\t\tvar message = \"\";
\t\t\t\t\tmessage += days;
\t\t\t\t\tmessage += hours;
\t\t\t\t\tmessage += minutes;
\t\t\t\t\tmessage += seconds;
\t\t\t\t\t\$(this).html(message);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}
\t});
}

if (window.addEventListener){
\twindow.addEventListener('load', function() {
\t\t";
        // line 493
        if ( !twig_test_empty(($context["css_luxshop_footer"] ?? null))) {
            // line 494
            echo "\t\t\tdownloadCSSAtOnload();
\t\t";
        }
        // line 496
        echo "\t\t";
        if ( !twig_test_empty(($context["css_luxshop_footer"] ?? null))) {
            // line 497
            echo "\t\tdownloadJSAtOnload();
\t\t";
        }
        // line 499
        echo "\t});
}
</script>

";
        // line 503
        if (twig_get_attribute($this->env, $this->source, ($context["callbackpro"] ?? null), "status_animate_btn_4", [], "array", true, true, false, 503)) {
            echo " 
<div onclick=\"get_modal_callbacking();\" id=\"animate_btn_4\" class=\"animate_btn_4\">
\t<div class=\"ab4-circlephone\"></div>
\t<div class=\"ab4-circle-fill\"></div>
\t<div class=\"ab4-img-circle\"><div class=\"ab4-img-circleblock\"></div></div>
</div>
";
        }
        // line 510
        if (twig_get_attribute($this->env, $this->source, ($context["callbackpro"] ?? null), "status_animate_btn_3", [], "array", true, true, false, 510)) {
            echo " 
<div onclick=\"get_modal_callbacking();\" id=\"animate_btn_3\" class=\"animate_btn_3\">
    <div class=\"ab3-track\"></div>
    <div class=\"ab3-back-circle\"></div>
    <div class=\"ab3-circle\">
        <div class=\"ab3-handset\"></div>
    </div>
</div>
";
        }
        // line 519
        if (twig_get_attribute($this->env, $this->source, ($context["callbackpro"] ?? null), "status_animate_btn_2", [], "array", true, true, false, 519)) {
            echo " 
<div onclick=\"get_modal_callbacking();\" id=\"tcb-call\">
\t<div class=\"tcb-phone\">
\t\t<div class=\"tcb-phone-img\"></div>
\t</div>
\t<div class=\"tcb-layout1\"></div>
\t<div class=\"tcb-layout2\"></div>
\t<div class=\"tcb-layout3\"></div>
</div>
";
        }
        // line 529
        if (twig_get_attribute($this->env, $this->source, ($context["callbackpro"] ?? null), "status_animate_btn_2", [], "array", true, true, false, 529)) {
            echo " 
<div onclick=\"get_modal_callbacking();\" id=\"tcb_call_1\">
\t<div class=\"tcb_phone_1\">
\t\t<div class=\"tcb_phone_img_1\"></div>
\t</div>
\t<div class=\"tcb_layout_1\"></div>
\t<div class=\"tcb_layout_2\"></div>
</div>
";
        }
        // line 538
        echo "\t\t
</body></html>";
    }

    public function getTemplateName()
    {
        return "luxshop/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1229 => 538,  1217 => 529,  1204 => 519,  1192 => 510,  1182 => 503,  1176 => 499,  1172 => 497,  1169 => 496,  1165 => 494,  1163 => 493,  1132 => 464,  1126 => 460,  1124 => 459,  1120 => 457,  1112 => 455,  1106 => 454,  1101 => 453,  1097 => 452,  1092 => 449,  1084 => 447,  1080 => 446,  1074 => 445,  1069 => 444,  1065 => 443,  1049 => 430,  1045 => 429,  1041 => 428,  1037 => 427,  1016 => 409,  1012 => 408,  1008 => 407,  1004 => 406,  1000 => 405,  996 => 404,  991 => 401,  968 => 380,  963 => 379,  959 => 377,  957 => 376,  953 => 375,  947 => 372,  943 => 370,  920 => 349,  915 => 347,  907 => 345,  902 => 344,  898 => 343,  891 => 341,  877 => 340,  873 => 339,  867 => 338,  850 => 324,  838 => 323,  834 => 322,  795 => 286,  788 => 282,  767 => 264,  762 => 262,  757 => 259,  752 => 256,  748 => 254,  708 => 216,  695 => 214,  691 => 213,  683 => 210,  675 => 205,  670 => 203,  662 => 198,  659 => 197,  656 => 196,  652 => 195,  643 => 194,  640 => 193,  634 => 190,  630 => 189,  621 => 188,  619 => 187,  615 => 185,  613 => 184,  608 => 181,  603 => 178,  600 => 177,  594 => 176,  586 => 174,  583 => 173,  578 => 172,  576 => 171,  569 => 168,  563 => 167,  559 => 165,  556 => 164,  551 => 161,  540 => 159,  536 => 158,  529 => 155,  523 => 154,  520 => 153,  518 => 152,  514 => 150,  511 => 149,  505 => 148,  497 => 146,  494 => 145,  489 => 144,  486 => 143,  477 => 142,  468 => 141,  459 => 140,  450 => 139,  442 => 138,  435 => 135,  429 => 134,  423 => 130,  420 => 129,  414 => 128,  406 => 126,  403 => 125,  398 => 124,  395 => 123,  386 => 122,  377 => 121,  368 => 120,  359 => 119,  350 => 118,  342 => 117,  335 => 114,  329 => 113,  323 => 109,  317 => 106,  314 => 105,  311 => 104,  306 => 101,  290 => 99,  286 => 98,  282 => 96,  279 => 95,  273 => 91,  266 => 89,  260 => 87,  254 => 85,  252 => 84,  237 => 83,  233 => 82,  228 => 79,  226 => 78,  222 => 76,  219 => 75,  213 => 74,  201 => 72,  187 => 70,  184 => 69,  179 => 68,  177 => 67,  161 => 54,  156 => 52,  151 => 50,  137 => 38,  129 => 33,  124 => 30,  122 => 29,  116 => 25,  105 => 20,  101 => 19,  98 => 18,  90 => 15,  87 => 14,  81 => 11,  78 => 10,  76 => 9,  60 => 8,  57 => 7,  53 => 6,  48 => 3,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/common/footer.twig", "");
    }
}
