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

/* luxshop/template/extension/module/luxshop_reviews_store.twig */
class __TwigTemplate_a6a6a5cc9a784f3ce7092cd3b8f32ebc0567d68a6b9cf237733d1efca36e0cf2 extends \Twig\Template
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
        echo "<div class=\"container-module\">
 \t<div class=\"title-module\">
 \t\t<span>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</span>
 \t\t<a class=\"see-all-reviews\" href=\"";
        // line 4
        echo ($context["all_review_link"] ?? null);
        echo "\">
 \t\t\t<span><i class=\"fa fa-angle-right arrow\"></i></span>
 \t\t\t<div class=\"text-see-all\">";
        // line 6
        echo ($context["btn_all_review"] ?? null);
        echo "</div>
 \t\t</a>
 \t</div>
 \t<div class=\"row rating-info-box\">
 \t\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
 \t\t\t<div class=\"block-reviews f-box dflex\">
 \t\t\t\t<div class=\"average-reviews\">
\t \t\t\t\t<div id=\"graph_rating\" class=\"average-rating-number\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<svg class=\"mkc_circle-chart\" viewBox=\"0 0 50 44\" width=\"110\" height=\"110\" id=\"svgcontent\" overflow=\"hidden\" x=\"760.2499987519399\" y=\"53.29999890170711\">
\t\t\t\t\t\t\t<path class=\"mkc_circle-bg\" stroke=\"#F8F9FA\" stroke-width=\"7\" fill=\"none\" d=\"M25.000045776367188,6.084949493408203 A15.915499687194824,15.915499687194824 0 0 1 25.000045776367188,37.915950775146484 A15.915499687194824,15.915499687194824 0 0 1 25.000045776367188,6.084949493408203 \" id=\"svg_1\" stroke-dasharray=\"none\"></path>
\t\t\t\t\t\t\t<path class=\"mkc_circle\" stroke=\"#6AB956\" stroke-width=\"7\" fill=\"none\" d=\"M25.001075744628906,6.0849714279174805 A15.915499687194824,15.915499687194824 0 0 1 25.001075744628906,37.91597366333008 A15.915499687194824,15.915499687194824 0 0 1 25.001075744628906,6.0849714279174805 \" id=\"svg_2\" stroke-dasharray=\"";
        // line 17
        echo (($context["rating_store"] ?? null) * 20);
        echo ",100\"></path>
\t\t\t\t\t\t\t<text x=\"25.000000953674316\" y=\"25.643678188323975\" text-anchor=\"middle\" font-size=\"11\">";
        // line 18
        echo ($context["rating_store"] ?? null);
        echo "</text>
\t\t\t\t\t\t</svg></span>
\t \t\t\t\t</div>
\t \t\t\t\t<div class=\"total-reviews\">
\t \t\t\t\t\t<span class=\"num-total-rs\">";
        // line 22
        echo ($context["text_sum_reviews"] ?? null);
        echo ($context["total_rs"] ?? null);
        echo "</span>
\t \t\t\t\t</div>
\t \t\t\t\t<div class=\"average-rating-stars\">
\t \t\t\t\t\t<div class=\"stars-average-grey\">
\t \t\t\t\t\t\t<div class=\"stars-average-gold\" style=\"width:";
        // line 26
        echo ((($context["rating_store"] ?? null) * 100) / 5);
        echo "%;\"></div>
\t \t\t\t\t\t</div>
\t \t\t\t\t</div>

 \t\t\t\t</div>
 \t\t\t\t<div class=\"star-rating-desc\">
 \t\t\t\t\t<div class=\"line-info\">
 \t\t\t\t\t\t<span class=\"star-before-line\">
 \t\t\t\t\t\t\t<img src=\"catalog/view/theme/luxshop/image/r-store/star-y-icon.svg\" alt=\"star-y-icon.svg\">
\t \t\t\t\t\t</span>
\t \t\t\t\t\t<div class=\"percent_rating_line\">
\t                        <div class=\"percent_rating star5\" style=\"width: ";
        // line 37
        echo twig_get_attribute($this->env, $this->source, ($context["percent_rating"] ?? null), "star5", [], "any", false, false, false, 37);
        echo "%\"></div>
\t                    </div>
\t                    <span class=\"percent_rating_text\">";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["percent_rating"] ?? null), "star5", [], "any", false, false, false, 39);
        echo "%</span>
 \t\t\t\t\t</div>

 \t\t\t\t\t<div class=\"line-info\">
 \t\t\t\t\t\t<span class=\"star-before-line\">
 \t\t\t\t\t\t\t<img src=\"catalog/view/theme/luxshop/image/r-store/star-y-icon.svg\" alt=\"star-y-icon.svg\">
\t \t\t\t\t\t</span>
\t \t\t\t\t\t<div class=\"percent_rating_line\">
\t                        <div class=\"percent_rating star4\" style=\"width: ";
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["percent_rating"] ?? null), "star4", [], "any", false, false, false, 47);
        echo "%\"></div>
\t                    </div>
\t                    <span class=\"percent_rating_text\">";
        // line 49
        echo twig_get_attribute($this->env, $this->source, ($context["percent_rating"] ?? null), "star4", [], "any", false, false, false, 49);
        echo "%</span>
 \t\t\t\t\t</div>

 \t\t\t\t\t<div class=\"line-info\">
 \t\t\t\t\t\t<span class=\"star-before-line\">
 \t\t\t\t\t\t\t<img src=\"catalog/view/theme/luxshop/image/r-store/star-y-icon.svg\" alt=\"star-y-icon.svg\">
\t \t\t\t\t\t</span>
\t \t\t\t\t\t<div class=\"percent_rating_line\">
\t                        <div class=\"percent_rating star3\" style=\"width: ";
        // line 57
        echo twig_get_attribute($this->env, $this->source, ($context["percent_rating"] ?? null), "star3", [], "any", false, false, false, 57);
        echo "%\"></div>
\t                    </div>
\t                    <span class=\"percent_rating_text\">";
        // line 59
        echo twig_get_attribute($this->env, $this->source, ($context["percent_rating"] ?? null), "star3", [], "any", false, false, false, 59);
        echo "%</span>
 \t\t\t\t\t</div>

 \t\t\t\t\t<div class=\"line-info\">
 \t\t\t\t\t\t<span class=\"star-before-line\">
 \t\t\t\t\t\t\t<img src=\"catalog/view/theme/luxshop/image/r-store/star-y-icon.svg\" alt=\"star-y-icon.svg\">
\t \t\t\t\t\t</span>
\t \t\t\t\t\t<div class=\"percent_rating_line\">
\t                        <div class=\"percent_rating star2\" style=\"width: ";
        // line 67
        echo twig_get_attribute($this->env, $this->source, ($context["percent_rating"] ?? null), "star2", [], "any", false, false, false, 67);
        echo "%\"></div>
\t                    </div>
\t                    <span class=\"percent_rating_text\">";
        // line 69
        echo twig_get_attribute($this->env, $this->source, ($context["percent_rating"] ?? null), "star2", [], "any", false, false, false, 69);
        echo "%</span>
 \t\t\t\t\t</div>

 \t\t\t\t\t<div class=\"line-info\">
 \t\t\t\t\t\t<span class=\"star-before-line\">
 \t\t\t\t\t\t\t<img src=\"catalog/view/theme/luxshop/image/r-store/star-y-icon.svg\" alt=\"star-y-icon.svg\">
\t \t\t\t\t\t</span>
\t \t\t\t\t\t<div class=\"percent_rating_line\">
\t                        <div class=\"percent_rating star1\" style=\"width: ";
        // line 77
        echo twig_get_attribute($this->env, $this->source, ($context["percent_rating"] ?? null), "star1", [], "any", false, false, false, 77);
        echo "%\"></div>
\t                    </div>
\t                    <span class=\"percent_rating_text\">";
        // line 79
        echo twig_get_attribute($this->env, $this->source, ($context["percent_rating"] ?? null), "star1", [], "any", false, false, false, 79);
        echo "%</span>
 \t\t\t\t\t</div>
 \t\t\t\t</div>
 \t\t\t</div>
 \t\t</div>
 \t\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
 \t\t\t<div class=\"block-reviews s-box\">
 \t\t\t\t<div class=\"rsinfo\">
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews_theme_rating"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result_info"]) {
            // line 88
            echo "                        <div class=\"rsinfo-item\">
                        \t<span class=\"rs-theme-text\">";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["result_info"], "theme_text", [], "any", false, false, false, 89);
            echo "</span>
                        \t<div class=\"rs-theme-stars\"><div class=\"avg-rating-stars\"><div class=\"avg-realrating\" style=\"width:";
            // line 90
            echo ((twig_get_attribute($this->env, $this->source, $context["result_info"], "avg_rating", [], "any", false, false, false, 90) * 100) / 5);
            echo "%;\"></div></div></div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                </div>
                <div class=\"btn-block-rs\">
\t                ";
        // line 95
        if (($context["review_guest"] ?? null)) {
            // line 96
            echo "\t                <button type=\"button\" onclick=\"popupFormReviewStore()\" class=\"btn btn-write-rs\">";
            echo ($context["btn_write_review"] ?? null);
            echo "</button>
\t                ";
        } else {
            // line 98
            echo "\t                    ";
            echo ($context["text_review_guest"] ?? null);
            echo "
\t                ";
        }
        // line 100
        echo "\t            </div>
 \t\t\t</div>
 \t\t</div>
 \t</div>
 \t<div class=\"row\">
 \t\t<div class=\"review-store-box review-store";
        // line 105
        echo ($context["module"] ?? null);
        echo "\">
        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews_store"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review_store"]) {
            // line 107
            echo "        \t<div class=\"col-xs-12 col-sm-6 col-md-4 no-slider\">
            \t<div class=\"item-rs\">
            \t\t<div class=\"rs-review-stars\">
\t                      <div class=\"avg-rating-stars\"><div class=\"avg-realrating\" style=\"width:";
            // line 110
            echo ((twig_get_attribute($this->env, $this->source, $context["review_store"], "avg_customer_rating", [], "any", false, false, false, 110) * 100) / 5);
            echo "%;\"></div></div>
\t                </div>
\t                <div class=\"rs-desc-reviews\">";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["review_store"], "description", [], "any", false, false, false, 112);
            echo "</div>
\t                <div class=\"rs-review-info d-flex jcsb\">
\t                    <div class=\"rs-review-author\">
\t                    \t<span class=\"author-name\">";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["review_store"], "author", [], "any", false, false, false, 115);
            echo "</span>
\t                \t</div>
\t                    <div class=\"rs-review-dateadded\">";
            // line 117
            echo twig_get_attribute($this->env, $this->source, $context["review_store"], "date_added", [], "any", false, false, false, 117);
            echo "</div>
\t                </div>

            \t</div>
        \t</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review_store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "        </div>
        ";
        // line 124
        if ((array_key_exists("status_showmore", $context) && (($context["status_showmore"] ?? null) != 0))) {
            // line 125
            echo "\t    ";
            if (($context["nextPage"] ?? null)) {
                // line 126
                echo "\t        <div class=\"showmore-review-store";
                echo ($context["module"] ?? null);
                echo " box-showmore\">
\t        \t<span data-nextpage=\"";
                // line 127
                echo ($context["nextPage"] ?? null);
                echo "\" class=\"box-ajax-load review-store-ajax-load";
                echo ($context["module"] ?? null);
                echo "\"><img src=\"catalog/view/theme/luxshop/image/showmore-icon.svg\" alt=\"showmore-icon\">";
                echo ($context["text_showmore"] ?? null);
                echo "</span>
\t    \t</div>
\t    ";
            }
            // line 130
            echo "\t    ";
        }
        // line 131
        echo " \t</div>
";
        // line 132
        if ((array_key_exists("status_showmore", $context) && (($context["status_showmore"] ?? null) != 0))) {
            // line 133
            echo "<script>
\$(document).on('click', '.review-store-ajax-load";
            // line 134
            echo ($context["module"] ?? null);
            echo "', function () {
    \$.ajax({
        url: 'index.php?route=extension/module/luxshop_reviews_store/getNextPage',
        type: 'post',
        data: 'page=' + \$(this).attr('data-nextpage') + '&module=";
            // line 138
            echo ($context["module"] ?? null);
            echo "&setting=";
            echo ($context["setting"] ?? null);
            echo "',
        dataType: 'html',
        beforeSend: function() {
            \$('.showmore-review-store";
            // line 141
            echo ($context["module"] ?? null);
            echo " img').addClass('active-load');
        },
        complete: function() {
            \$('.showmore-review-store";
            // line 144
            echo ($context["module"] ?? null);
            echo " img').addClass('active-load');
        },
        success:function(data){
            \$data = \$(data);
            var \$reviews_store = \$data.find('.review-store";
            // line 148
            echo ($context["module"] ?? null);
            echo " > div.col-xs-12');
            \$('.review-store";
            // line 149
            echo ($context["module"] ?? null);
            echo "').append(\$reviews_store);
            \$('.showmore-review-store";
            // line 150
            echo ($context["module"] ?? null);
            echo "').replaceWith(\$data.find('.showmore-review-store";
            echo ($context["module"] ?? null);
            echo "'));
        }
    });
})
</script>
";
        }
        // line 156
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "luxshop/template/extension/module/luxshop_reviews_store.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 156,  333 => 150,  329 => 149,  325 => 148,  318 => 144,  312 => 141,  304 => 138,  297 => 134,  294 => 133,  292 => 132,  289 => 131,  286 => 130,  276 => 127,  271 => 126,  268 => 125,  266 => 124,  263 => 123,  251 => 117,  246 => 115,  240 => 112,  235 => 110,  230 => 107,  226 => 106,  222 => 105,  215 => 100,  209 => 98,  203 => 96,  201 => 95,  197 => 93,  188 => 90,  184 => 89,  181 => 88,  177 => 87,  166 => 79,  161 => 77,  150 => 69,  145 => 67,  134 => 59,  129 => 57,  118 => 49,  113 => 47,  102 => 39,  97 => 37,  83 => 26,  75 => 22,  68 => 18,  64 => 17,  50 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/extension/module/luxshop_reviews_store.twig", "");
    }
}
