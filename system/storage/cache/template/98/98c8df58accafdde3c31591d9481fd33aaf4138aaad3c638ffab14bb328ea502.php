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

/* luxshop/template/common/home.twig */
class __TwigTemplate_6a71368c96c8adafcb7defc618ecfd3d5f44b4639be95ac94c52c1dc34d5ae3d extends \Twig\Template
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
        echo "

";
        // line 3
        if ((array_key_exists("ls_microdata_status", $context) && (($context["ls_microdata_status"] ?? null) == 1))) {
            // line 4
            echo "<script type=\"application/ld+json\">
{
\"@context\": \"https://schema.org\",
\"@type\": \"Organization\",
\"url\": \"";
            // line 8
            echo ($context["url"] ?? null);
            echo "\",
\"name\": \"";
            // line 9
            echo ($context["name"] ?? null);
            echo "\",
\"logo\": \"";
            // line 10
            echo ($context["logo"] ?? null);
            echo "\",
";
            // line 11
            if (($context["ls_microdata_email"] ?? null)) {
                // line 12
                echo "\"email\": \"";
                echo ($context["ls_microdata_email"] ?? null);
                echo "\",
";
            }
            // line 14
            if (($context["description"] ?? null)) {
                // line 15
                echo "\"description\": \"";
                echo ($context["description"] ?? null);
                echo "\",
";
            }
            // line 17
            if (((($context["ls_microdata_city"] ?? null) && ($context["ls_microdata_postcode"] ?? null)) && ($context["ls_microdata_address"] ?? null))) {
                // line 18
                echo "\"address\": {
\"@type\": \"PostalAddress\",
\"addressLocality\": \"";
                // line 20
                echo ($context["ls_microdata_city"] ?? null);
                echo "\",
\"postalCode\": \"";
                // line 21
                echo ($context["ls_microdata_postcode"] ?? null);
                echo "\",
\"streetAddress\": \"";
                // line 22
                echo ($context["ls_microdata_address"] ?? null);
                echo "\"},
";
            }
            // line 24
            if (($context["ls_micsrodata_phones"] ?? null)) {
                // line 25
                echo "\"contactPoint\" : [
";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["ls_micsrodata_phones"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["result_phone"]) {
                    // line 27
                    echo "{
\"@type\" : \"ContactPoint\",
\"telephone\" : \"";
                    // line 29
                    echo $context["result_phone"];
                    echo "\",
\"contactType\" : \"customer service\"
}";
                    // line 31
                    if ((($context["key"] + 1) < twig_length_filter($this->env, ($context["ls_micsrodata_phones"] ?? null)))) {
                        echo ",";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['result_phone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "]
";
            }
            // line 35
            if (($context["ls_microdata_social"] ?? null)) {
                // line 36
                echo ",\"sameAs\" : [";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["ls_microdata_social"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["result_social"]) {
                    echo "\"";
                    echo $context["result_social"];
                    echo "\"";
                    if ((($context["key"] + 1) < twig_length_filter($this->env, ($context["ls_microdata_social"] ?? null)))) {
                        echo ",";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['result_social'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "]
";
            }
            // line 38
            echo "}
</script>
";
        }
        // line 41
        echo "
";
        // line 42
        if (array_key_exists("position_1", $context)) {
            // line 43
            echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t<div class=\"col-sm-12 pos1\">
\t\t\t";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["position_1"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pos1"]) {
                // line 47
                echo "\t\t\t\t";
                echo $context["pos1"];
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 53
        echo "<div class=\"container\">
\t<div class=\"row\">
\t";
        // line 55
        if (((($context["menu_open_hpage"] ?? null) == "1") && ((($context["type_header"] ?? null) == 1) || (($context["type_header"] ?? null) == 2)))) {
            // line 56
            echo "\t\t<div class=\"sw-20 col-sm-4 col-md-3 position-no-owl hidden-xs hidden-sm\">
\t\t\t<div id=\"menu-header-open\"></div>
\t\t\t";
            // line 58
            if (array_key_exists("position_0", $context)) {
                // line 59
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_0"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos0"]) {
                    // line 60
                    echo "\t\t\t\t\t";
                    echo $context["pos0"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos0'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "\t\t\t";
            }
            // line 63
            echo "\t\t</div>
\t\t<script>
\t\tif(window.matchMedia(\"(min-width: 992px)\").matches){
\t\t\t\$('#menu-vertical-list').addClass(\"nsmenu-block\");
\t\t}
\t\t\$(window).resize(function() {
\t\t\tif (\$(window).width() > 992) {
\t\t\t\t\$('#menu-vertical-list').addClass(\"nsmenu-block\");
\t\t\t} else {
\t\t\t\t\$('#menu-vertical-list').removeClass(\"nsmenu-block\");
\t\t\t}
\t\t});
\t\t</script>
\t\t<div class=\"sw-80 col-md-9\">";
            // line 76
            echo ($context["content_top"] ?? null);
            echo "</div>
\t\t";
            // line 77
            if (array_key_exists("position_17", $context)) {
                // line 78
                echo "\t\t\t<div class=\"col-md-3 pos17\">
\t\t\t\t";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_17"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos17"]) {
                    // line 80
                    echo "\t\t\t\t\t";
                    echo $context["pos17"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos17'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "\t\t\t</div>
\t\t";
            }
            // line 84
            echo "\t\t";
            if (array_key_exists("position_18", $context)) {
                // line 85
                echo "\t\t\t<div class=\"col-md-3 pos18\">
\t\t\t\t";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_18"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos18"]) {
                    // line 87
                    echo "\t\t\t\t\t";
                    echo $context["pos18"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos18'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "\t\t\t</div>
\t\t";
            }
            // line 91
            echo "\t\t";
            if (array_key_exists("position_19", $context)) {
                // line 92
                echo "\t\t\t<div class=\"col-md-3 pos19\">
\t\t\t\t";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_19"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos19"]) {
                    // line 94
                    echo "\t\t\t\t\t";
                    echo $context["pos19"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos19'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "\t\t\t</div>
\t\t";
            }
            // line 98
            echo "\t\t";
            if (array_key_exists("position_20", $context)) {
                // line 99
                echo "\t\t\t<div class=\"col-md-6 pos20\">
\t\t\t\t";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_20"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos20"]) {
                    // line 101
                    echo "\t\t\t\t\t";
                    echo $context["pos20"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos20'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "\t\t\t</div>
\t\t";
            }
            // line 105
            echo "\t\t";
            if (array_key_exists("position_21", $context)) {
                // line 106
                echo "\t\t\t<div class=\"col-md-3 pos21\">
\t\t\t\t";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_21"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos21"]) {
                    // line 108
                    echo "\t\t\t\t\t";
                    echo $context["pos21"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos21'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                echo "\t\t\t</div>
\t\t";
            }
            // line 112
            echo "\t";
        } else {
            // line 113
            echo "\t\t";
            if (($context["content_top"] ?? null)) {
                // line 114
                echo "\t\t<div class=\"col-md-12\">";
                echo ($context["content_top"] ?? null);
                echo "</div>
\t\t";
            }
            // line 116
            echo "\t\t";
            if (array_key_exists("position_17", $context)) {
                // line 117
                echo "\t\t\t<div class=\"col-md-4 pos17\">
\t\t\t\t";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_17"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos17"]) {
                    // line 119
                    echo "\t\t\t\t\t";
                    echo $context["pos17"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos17'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "\t\t\t</div>
\t\t";
            }
            // line 123
            echo "\t\t";
            if (array_key_exists("position_18", $context)) {
                // line 124
                echo "\t\t\t<div class=\"col-md-4 pos18\">
\t\t\t\t";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_18"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos18"]) {
                    // line 126
                    echo "\t\t\t\t\t";
                    echo $context["pos18"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos18'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "\t\t\t</div>
\t\t";
            }
            // line 130
            echo "\t\t";
            if (array_key_exists("position_19", $context)) {
                // line 131
                echo "\t\t\t<div class=\"col-md-4 pos19\">
\t\t\t\t";
                // line 132
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_19"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos19"]) {
                    // line 133
                    echo "\t\t\t\t\t";
                    echo $context["pos19"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos19'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "\t\t\t</div>
\t\t";
            }
            // line 137
            echo "\t\t";
            if (array_key_exists("position_20", $context)) {
                // line 138
                echo "\t\t\t<div class=\"col-md-8 pos20\">
\t\t\t\t";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_20"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos20"]) {
                    // line 140
                    echo "\t\t\t\t\t";
                    echo $context["pos20"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos20'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "\t\t\t</div>
\t\t";
            }
            // line 144
            echo "\t\t";
            if (array_key_exists("position_21", $context)) {
                // line 145
                echo "\t\t\t<div class=\"col-md-4 pos21\">
\t\t\t\t";
                // line 146
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_21"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos21"]) {
                    // line 147
                    echo "\t\t\t\t\t";
                    echo $context["pos21"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos21'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "\t\t\t</div>
\t\t";
            }
            // line 151
            echo "\t";
        }
        // line 152
        echo "\t</div>
\t<div class=\"row\">
\t";
        // line 154
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 155
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 156
            echo "    ";
            $context["class"] = "col-sm-4 col-md-6";
            // line 157
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 158
            echo "    ";
            $context["class"] = "col-sm-8 col-md-9";
            // line 159
            echo "    ";
        } else {
            // line 160
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 161
            echo "    ";
        }
        // line 162
        echo "    ";
        if (($context["content_bottom"] ?? null)) {
            // line 163
            echo "    <div class=\"";
            echo ($context["class"] ?? null);
            echo "\">
\t\t";
            // line 164
            echo ($context["content_bottom"] ?? null);
            echo "
\t</div>
\t";
        }
        // line 167
        echo "    ";
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
";
        // line 170
        if ((array_key_exists("position_2", $context) || array_key_exists("position_3", $context))) {
            // line 171
            echo "\t<div class=\"box-bg-full bg_mode_pos_2\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
            // line 174
            if (array_key_exists("position_2", $context)) {
                // line 175
                echo "\t\t\t<div class=\"col-sm-6 col-md-6 pos2\">
\t\t\t";
                // line 176
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_2"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos2"]) {
                    // line 177
                    echo "\t\t\t\t";
                    echo $context["pos2"];
                    echo "
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 181
            echo "\t\t\t";
            if (array_key_exists("position_3", $context)) {
                // line 182
                echo "\t\t\t<div class=\"col-sm-6 col-md-6 pos3\">
\t\t\t\t";
                // line 183
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_3"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos3"]) {
                    // line 184
                    echo "\t\t\t\t\t";
                    echo $context["pos3"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 188
            echo "\t\t</div>
\t</div>
\t</div>
";
        }
        // line 192
        if ((array_key_exists("position_4", $context) || array_key_exists("position_5", $context))) {
            // line 193
            echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
            // line 195
            if (array_key_exists("position_4", $context)) {
                // line 196
                echo "\t\t\t<div class=\"col-sm-4 col-md-3 pos4\">
\t\t\t\t";
                // line 197
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_4"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos4"]) {
                    // line 198
                    echo "\t\t\t\t\t";
                    echo $context["pos4"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos4'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 202
            echo "\t\t\t";
            if (array_key_exists("position_5", $context)) {
                // line 203
                echo "\t\t\t<div class=\"col-sm-8 col-md-9 pos5\">
\t\t\t\t";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_5"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos5"]) {
                    // line 205
                    echo "\t\t\t\t\t";
                    echo $context["pos5"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos5'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 207
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 209
            echo "\t\t</div>
\t</div>
";
        }
        // line 212
        if ((array_key_exists("position_6", $context) || array_key_exists("position_7", $context))) {
            // line 213
            echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
            // line 215
            if (array_key_exists("position_6", $context)) {
                // line 216
                echo "\t\t\t<div class=\"col-sm-8 col-md-9 pos6\">
\t\t\t\t";
                // line 217
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_6"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos6"]) {
                    // line 218
                    echo "\t\t\t\t\t";
                    echo $context["pos6"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos6'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 222
            echo "\t\t\t";
            if (array_key_exists("position_7", $context)) {
                // line 223
                echo "\t\t\t<div class=\"col-sm-4 col-md-3 pos7\">
\t\t\t\t";
                // line 224
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_7"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos7"]) {
                    // line 225
                    echo "\t\t\t\t\t";
                    echo $context["pos7"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos7'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 229
            echo "\t\t</div>
\t</div>
";
        }
        // line 232
        if (((array_key_exists("position_8", $context) || array_key_exists("position_9", $context)) || array_key_exists("position_10", $context))) {
            // line 233
            echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t";
            // line 235
            if ((array_key_exists("position_8", $context) && array_key_exists("position_9", $context))) {
                // line 236
                echo "\t\t";
                $context["class10"] = "col-sm-4 col-md-6";
                // line 237
                echo "\t\t";
            } elseif ((array_key_exists("position_8", $context) || array_key_exists("position_9", $context))) {
                // line 238
                echo "\t\t";
                $context["class10"] = "col-sm-8 col-md-9";
                // line 239
                echo "\t\t";
            } else {
                // line 240
                echo "\t\t";
                $context["class10"] = "col-sm-12";
                // line 241
                echo "\t\t";
            }
            // line 242
            echo "\t\t\t";
            if (array_key_exists("position_8", $context)) {
                // line 243
                echo "\t\t\t\t<div class=\"col-sm-4 col-md-3 position-no-owl pos8\">
\t\t\t\t\t";
                // line 244
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_8"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos8"]) {
                    // line 245
                    echo "\t\t\t\t\t\t";
                    echo $context["pos8"];
                    echo "
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos8'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 247
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 249
            echo "\t\t\t";
            if (array_key_exists("position_9", $context)) {
                // line 250
                echo "\t\t\t\t<div class=\"col-sm-4 col-md-3 position-no-owl pos9\">
\t\t\t\t\t";
                // line 251
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_9"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos9"]) {
                    // line 252
                    echo "\t\t\t\t\t\t";
                    echo $context["pos9"];
                    echo "
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos9'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 254
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 256
            echo "\t\t\t";
            if (array_key_exists("position_10", $context)) {
                // line 257
                echo "\t\t\t\t<div class=\"";
                echo ($context["class10"] ?? null);
                echo " position-no-owl pos10\">
\t\t\t\t\t";
                // line 258
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_10"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos10"]) {
                    // line 259
                    echo "\t\t\t\t\t\t";
                    echo $context["pos10"];
                    echo "
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos10'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 261
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 263
            echo "\t\t</div>
\t</div>
";
        }
        // line 266
        if (array_key_exists("position_22", $context)) {
            // line 267
            echo "\t<div class=\"box-bg-full bg_mode_pos_22\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 pos22\">
\t\t\t";
            // line 271
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["position_22"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pos22"]) {
                // line 272
                echo "\t\t\t\t";
                echo $context["pos22"];
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos22'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            echo "\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
";
        }
        // line 279
        if ((((array_key_exists("position_11", $context) || array_key_exists("position_12", $context)) || array_key_exists("position_13", $context)) || array_key_exists("position_14", $context))) {
            // line 280
            echo "\t<div class=\"box-bg-full bg_mode_pos_11\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
            // line 283
            if (array_key_exists("position_11", $context)) {
                // line 284
                echo "\t\t\t<div class=\"col-sm-6 col-md-3 position-no-owl pos11\">
\t\t\t\t";
                // line 285
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_11"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos11"]) {
                    // line 286
                    echo "\t\t\t\t\t";
                    echo $context["pos11"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos11'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 288
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 290
            echo "\t\t\t";
            if (array_key_exists("position_12", $context)) {
                // line 291
                echo "\t\t\t<div class=\"col-sm-6 col-md-3 position-no-owl pos12\">
\t\t\t\t";
                // line 292
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_12"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos12"]) {
                    // line 293
                    echo "\t\t\t\t\t";
                    echo $context["pos12"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos12'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 295
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 297
            echo "\t\t\t";
            if (array_key_exists("position_13", $context)) {
                // line 298
                echo "\t\t\t<div class=\"col-sm-6 col-md-3 position-no-owl pos13\">
\t\t\t\t";
                // line 299
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_13"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos13"]) {
                    // line 300
                    echo "\t\t\t\t\t";
                    echo $context["pos13"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos13'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 302
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 304
            echo "\t\t\t";
            if (array_key_exists("position_14", $context)) {
                // line 305
                echo "\t\t\t<div class=\"col-sm-6 col-md-3 position-no-owl pos14\">
\t\t\t\t";
                // line 306
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["position_14"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pos14"]) {
                    // line 307
                    echo "\t\t\t\t\t";
                    echo $context["pos14"];
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos14'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 309
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 311
            echo "\t\t</div>
\t</div>
</div>
";
        }
        // line 315
        if (array_key_exists("position_15", $context)) {
            // line 316
            echo "\t<div class=\"box-bg-full bg_mode_pos_15\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t<div class=\"col-sm-12 pos15\">
\t\t\t";
            // line 320
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["position_15"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pos15"]) {
                // line 321
                echo "\t\t\t\t";
                echo $context["pos15"];
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos15'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 323
            echo "\t\t</div>
\t\t</div>
\t</div>
\t</div>
";
        }
        // line 328
        if (array_key_exists("position_16", $context)) {
            // line 329
            echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 pos16\">
\t\t\t";
            // line 332
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["position_16"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pos16"]) {
                // line 333
                echo "\t\t\t\t";
                echo $context["pos16"];
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos16'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 339
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "luxshop/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  980 => 339,  974 => 335,  965 => 333,  961 => 332,  956 => 329,  954 => 328,  947 => 323,  938 => 321,  934 => 320,  928 => 316,  926 => 315,  920 => 311,  916 => 309,  907 => 307,  903 => 306,  900 => 305,  897 => 304,  893 => 302,  884 => 300,  880 => 299,  877 => 298,  874 => 297,  870 => 295,  861 => 293,  857 => 292,  854 => 291,  851 => 290,  847 => 288,  838 => 286,  834 => 285,  831 => 284,  829 => 283,  824 => 280,  822 => 279,  815 => 274,  806 => 272,  802 => 271,  796 => 267,  794 => 266,  789 => 263,  785 => 261,  776 => 259,  772 => 258,  767 => 257,  764 => 256,  760 => 254,  751 => 252,  747 => 251,  744 => 250,  741 => 249,  737 => 247,  728 => 245,  724 => 244,  721 => 243,  718 => 242,  715 => 241,  712 => 240,  709 => 239,  706 => 238,  703 => 237,  700 => 236,  698 => 235,  694 => 233,  692 => 232,  687 => 229,  683 => 227,  674 => 225,  670 => 224,  667 => 223,  664 => 222,  660 => 220,  651 => 218,  647 => 217,  644 => 216,  642 => 215,  638 => 213,  636 => 212,  631 => 209,  627 => 207,  618 => 205,  614 => 204,  611 => 203,  608 => 202,  604 => 200,  595 => 198,  591 => 197,  588 => 196,  586 => 195,  582 => 193,  580 => 192,  574 => 188,  570 => 186,  561 => 184,  557 => 183,  554 => 182,  551 => 181,  547 => 179,  538 => 177,  534 => 176,  531 => 175,  529 => 174,  524 => 171,  522 => 170,  515 => 167,  509 => 164,  504 => 163,  501 => 162,  498 => 161,  495 => 160,  492 => 159,  489 => 158,  486 => 157,  483 => 156,  481 => 155,  477 => 154,  473 => 152,  470 => 151,  466 => 149,  457 => 147,  453 => 146,  450 => 145,  447 => 144,  443 => 142,  434 => 140,  430 => 139,  427 => 138,  424 => 137,  420 => 135,  411 => 133,  407 => 132,  404 => 131,  401 => 130,  397 => 128,  388 => 126,  384 => 125,  381 => 124,  378 => 123,  374 => 121,  365 => 119,  361 => 118,  358 => 117,  355 => 116,  349 => 114,  346 => 113,  343 => 112,  339 => 110,  330 => 108,  326 => 107,  323 => 106,  320 => 105,  316 => 103,  307 => 101,  303 => 100,  300 => 99,  297 => 98,  293 => 96,  284 => 94,  280 => 93,  277 => 92,  274 => 91,  270 => 89,  261 => 87,  257 => 86,  254 => 85,  251 => 84,  247 => 82,  238 => 80,  234 => 79,  231 => 78,  229 => 77,  225 => 76,  210 => 63,  207 => 62,  198 => 60,  193 => 59,  191 => 58,  187 => 56,  185 => 55,  181 => 53,  175 => 49,  166 => 47,  162 => 46,  157 => 43,  155 => 42,  152 => 41,  147 => 38,  129 => 36,  127 => 35,  123 => 33,  115 => 31,  110 => 29,  106 => 27,  102 => 26,  99 => 25,  97 => 24,  92 => 22,  88 => 21,  84 => 20,  80 => 18,  78 => 17,  72 => 15,  70 => 14,  64 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/common/home.twig", "");
    }
}
