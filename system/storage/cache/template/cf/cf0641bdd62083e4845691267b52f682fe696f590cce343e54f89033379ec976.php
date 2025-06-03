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

/* luxshop/template/common/hmob_menu.twig */
class __TwigTemplate_ecd4161a7c253c6b1b601aa9bed95c0e2103d769114e73f89686b23d93f7d849 extends \Twig\Template
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
        echo "<div id=\"fm-fixed-mobile\" class=\"mob-fix-panel ";
        if ((array_key_exists("fm_fix_bottom", $context) && (($context["fm_fix_bottom"] ?? null) == 1))) {
            echo "bottom-fix";
        } else {
            echo "topmm-fix";
        }
        echo " visible-xs visible-sm\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
        // line 3
        if ((array_key_exists("fm_type_design", $context) && (($context["fm_type_design"] ?? null) == 1))) {
            // line 4
            echo "\t\t\t\t\t<div class=\"box-flex-fix ";
            if ((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) {
                echo "show-title";
            }
            echo "\">
\t\t\t\t\t\t<div class=\"fm-left-block dflex align-items-center\">
\t\t\t\t\t\t\t";
            // line 6
            if ((array_key_exists("fm_show_btn_go_home", $context) && (($context["fm_show_btn_go_home"] ?? null) == 1))) {
                // line 7
                echo "\t\t\t\t\t\t\t";
                if ((($context["home"] ?? null) != ($context["home_page"] ?? null))) {
                    // line 8
                    echo "\t\t\t\t\t\t\t<div class=\"mob-m-i\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-go-home dflex align-items-center justify-content-center active-bg\" href=\"";
                    // line 9
                    echo ($context["home"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"22\" fill=\"none\" viewBox=\"0 0 18 22\">
\t\t\t\t\t\t\t\t\t\t<path stroke=\"#000\" stroke-linecap=\"round\" stroke-width=\"1.5\" d=\"M1 21V8.3a2 2 0 01.779-1.585l6.758-5.21a1 1 0 011.275.046l5.811 5.168a2 2 0 01.671 1.495V20a1 1 0 01-1 1H6.118a1 1 0 01-1-1v-8.412\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t";
                    // line 13
                    if ((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) {
                        // line 14
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"text-a-icon\">";
                        echo ($context["text_ai_home"] ?? null);
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 16
                    echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t\t\t<div class=\"mob-m-i menu_fix_mob\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-menu-mobile\" onclick=\"open_mob_menu_left()\">
\t\t\t\t\t\t\t\t\t";
            // line 22
            if ((array_key_exists("design_icon_menu", $context) && (($context["design_icon_menu"] ?? null) == 1))) {
                // line 23
                echo "\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"18\" fill=\"none\" viewBox=\"0 0 22 18\"><path stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M2 2h18M2 9h18M2 16h18\"/></svg>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"none\" viewBox=\"0 0 22 22\"><path stroke=\"#000\" stroke-linecap=\"round\" stroke-width=\"1.5\" d=\"M12.8 13.25H20m-7.2 3.15H20m-7.2 3.15H20M3 20h5.2a1 1 0 001-1v-5.2a1 1 0 00-1-1H3a1 1 0 00-1 1V19a1 1 0 001 1zM13.8 9.65H19a1 1 0 001-1V3a1 1 0 00-1-1h-5.2a1 1 0 00-1 1v5.65a1 1 0 001 1zM3 9.65h5.2a1 1 0 001-1V3a1 1 0 00-1-1H3a1 1 0 00-1 1v5.65a1 1 0 001 1z\"/></svg>
\t\t\t\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t\t\t\t\t";
            if ((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t<span class=\"text-a-icon\">";
                echo ($context["text_ai_catalog"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"search_fix_mob ";
            // line 33
            if ((array_key_exists("fm_show_logo_hide_search", $context) && (($context["fm_show_logo_hide_search"] ?? null) == 1))) {
                echo "hidden ";
                if ((array_key_exists("fm_fix_bottom", $context) && (($context["fm_fix_bottom"] ?? null) == 1))) {
                    echo "shbottom";
                } else {
                    echo "shtop";
                }
            }
            echo "\">
\t\t\t\t\t\t\t";
            // line 34
            if ((array_key_exists("fm_show_logo_hide_search", $context) && (($context["fm_show_logo_hide_search"] ?? null) == 1))) {
                echo "<span class=\"fm-close-search\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"17\" fill=\"none\" viewBox=\"0 0 18 17\"><path stroke=\"#000\" stroke-linecap=\"round\" stroke-width=\"1.5\" d=\"M13.184 4.184l-8.485 8.485M13.242 12.729L4.757 4.243\"/></svg></span>";
            }
            // line 35
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 36
            if (($context["fm_logo"] ?? null)) {
                // line 37
                echo "\t\t\t\t\t\t";
                if ((array_key_exists("fm_show_logo_hide_search", $context) && (($context["fm_show_logo_hide_search"] ?? null) == 1))) {
                    // line 38
                    echo "\t\t\t\t\t\t<div class=\"fm-logo\">
\t\t\t\t\t\t\t<img alt=\"\" src=\"";
                    // line 39
                    echo ($context["fm_logo"] ?? null);
                    echo "\" class=\"img-responsive\" width=\"";
                    echo ($context["fm_logo_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["fm_logo_height"] ?? null);
                    echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t\t<div class=\"fm-right-block dflex align-items-center\">
\t\t\t\t\t\t\t";
            // line 44
            if ((array_key_exists("fm_show_logo_hide_search", $context) && (($context["fm_show_logo_hide_search"] ?? null) == 1))) {
                // line 45
                echo "\t\t\t\t\t\t\t<div class=\"mob-m-i\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-open-search dflex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"21\" fill=\"none\" viewBox=\"0 0 21 21\">
\t\t\t\t\t\t\t\t\t\t<path fill=\"#000\" fill-rule=\"evenodd\" d=\"M18.607 9.419a8.647 8.647 0 10-17.295 0 8.647 8.647 0 0017.295 0zm-15.673 0a7.026 7.026 0 1114.051 0 7.026 7.026 0 01-14.051 0z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t\t\t<path fill=\"#000\" d=\"M14.643 15.116a.81.81 0 011.056-.07l.09.08 3.395 3.453a.81.81 0 01-1.066 1.216l-.09-.08-3.395-3.453a.81.81 0 01.01-1.146z\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t";
                // line 51
                if ((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"text-a-icon\">";
                    echo ($context["text_ai_search"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t\t\t\t<div class=\"mob-m-i cart_fix_mob\">
\t\t\t\t\t\t\t\t<span class=\"mob-icon-box cart-i dflex\">
\t\t\t\t\t\t\t\t\t<svg class=\"shop-bag-svg\" width=\"21\" height=\"19\" viewBox=\"0 0 21 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.25 1C0.25 0.585786 0.585786 0.25 1 0.25H2.38802C3.13452 0.25 3.79883 0.723534 4.04232 1.42921L7.07629 10.2224C7.11107 10.3232 7.20598 10.3908 7.31262 10.3908H17.5808C17.6999 10.3908 17.8024 10.3069 17.8259 10.1902L19.0236 4.24401C19.0548 4.08922 18.9364 3.94465 18.7785 3.94465H8.17493C7.76071 3.94465 7.42493 3.60886 7.42493 3.19465C7.42493 2.78044 7.76071 2.44465 8.17493 2.44465H18.7785C19.8838 2.44465 20.7123 3.45665 20.494 4.54019L19.2964 10.4864C19.1319 11.3033 18.4141 11.8908 17.5808 11.8908H7.31262C6.56612 11.8908 5.9018 11.4173 5.65832 10.7116L2.62435 1.91846C2.58957 1.81765 2.49466 1.75 2.38802 1.75H1C0.585786 1.75 0.25 1.41421 0.25 1Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t\t<path d=\"M9.462 16.6963C9.462 17.7464 8.61071 18.5977 7.56059 18.5977C6.51047 18.5977 5.65918 17.7464 5.65918 16.6963C5.65918 15.6462 6.51047 14.7949 7.56059 14.7949C8.61071 14.7949 9.462 15.6462 9.462 16.6963Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t\t<path d=\"M19.6026 16.6963C19.6026 17.7464 18.7513 18.5977 17.7012 18.5977C16.6511 18.5977 15.7998 17.7464 15.7998 16.6963C15.7998 15.6462 16.6511 14.7949 17.7012 14.7949C18.7513 14.7949 19.6026 15.6462 19.6026 16.6963Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t";
            // line 64
            if ((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t<span class=\"text-a-icon-cart\">";
                echo ($context["text_ai_cart"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t";
        if ((array_key_exists("fm_type_design", $context) && (($context["fm_type_design"] ?? null) == 2))) {
            // line 73
            echo "\t\t\t\t<div class=\"dflex pos-r h-100 justify-content-between align-items-center ";
            if ((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) {
                echo "show-title";
            }
            echo "\">
\t\t\t\t\t";
            // line 74
            if ((array_key_exists("fm_show_btn_go_home", $context) && (($context["fm_show_btn_go_home"] ?? null) == 1))) {
                // line 75
                echo "\t\t\t\t\t\t";
                if ((($context["home"] ?? null) != ($context["home_page"] ?? null))) {
                    // line 76
                    echo "\t\t\t\t\t\t<div class=\"fm-icon-b\">
\t\t\t\t\t\t\t<a class=\"btn btn-go-home dflex align-items-center justify-content-center active-bg\" href=\"";
                    // line 77
                    echo ($context["home"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"22\" fill=\"none\" viewBox=\"0 0 18 22\">
\t\t\t\t\t\t\t\t\t<path stroke=\"#000\" stroke-linecap=\"round\" stroke-width=\"1.5\" d=\"M1 21V8.3a2 2 0 01.779-1.585l6.758-5.21a1 1 0 011.275.046l5.811 5.168a2 2 0 01.671 1.495V20a1 1 0 01-1 1H6.118a1 1 0 01-1-1v-8.412\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t";
                    // line 81
                    if ((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) {
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"text-a-icon\">";
                        echo ($context["text_ai_home"] ?? null);
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 84
                    echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t";
            }
            // line 88
            echo "\t\t\t\t\t<div class=\"fm-icon-b\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-open-menu-mobile dflex align-items-center justify-content-center\" onclick=\"open_mob_menu_left()\">
\t\t\t\t\t\t\t";
            // line 90
            if ((array_key_exists("design_icon_menu", $context) && (($context["design_icon_menu"] ?? null) == 1))) {
                // line 91
                echo "\t\t\t\t\t\t\t<svg class=\"menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"18\" fill=\"none\" viewBox=\"0 0 22 18\"><path stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M2 2h18M2 9h18M2 16h18\"/></svg>
\t\t\t\t\t\t\t";
            } else {
                // line 93
                echo "\t\t\t\t\t\t\t<svg class=\"menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"none\" viewBox=\"0 0 22 22\"><path stroke=\"#000\" stroke-linecap=\"round\" stroke-width=\"1.5\" d=\"M12.8 13.25H20m-7.2 3.15H20m-7.2 3.15H20M3 20h5.2a1 1 0 001-1v-5.2a1 1 0 00-1-1H3a1 1 0 00-1 1V19a1 1 0 001 1zM13.8 9.65H19a1 1 0 001-1V3a1 1 0 00-1-1h-5.2a1 1 0 00-1 1v5.65a1 1 0 001 1zM3 9.65h5.2a1 1 0 001-1V3a1 1 0 00-1-1H3a1 1 0 00-1 1v5.65a1 1 0 001 1z\"/></svg>
\t\t\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\t\t\t";
            if ((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) {
                // line 96
                echo "\t\t\t\t\t\t\t\t<span class=\"text-a-icon\">";
                echo ($context["text_ai_catalog"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            // line 98
            echo "\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fm-icon-b\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn-open-info-setting dflex align-items-center justify-content-center\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"22\" fill=\"none\" viewBox=\"0 0 21 22\">
\t\t\t\t\t\t\t\t<path stroke=\"#000\" stroke-linejoin=\"bevel\" stroke-width=\"1.5\" d=\"M10.5 13.349a2.349 2.349 0 100-4.697 2.349 2.349 0 000 4.697z\"/>
\t\t\t\t\t\t\t\t<path stroke=\"#000\" stroke-linejoin=\"bevel\" stroke-width=\"1.5\" d=\"M16.293 13.349a1.291 1.291 0 00.259 1.425l.047.047a1.566 1.566 0 11-2.216 2.215l-.047-.047a1.291 1.291 0 00-1.425-.258 1.292 1.292 0 00-.783 1.182v.133a1.566 1.566 0 11-3.131 0v-.07a1.292 1.292 0 00-.846-1.183 1.291 1.291 0 00-1.425.259l-.046.047a1.565 1.565 0 01-2.556-1.708c.079-.19.194-.362.34-.508l.047-.047a1.292 1.292 0 00.258-1.425 1.292 1.292 0 00-1.182-.783h-.133a1.566 1.566 0 110-3.131h.07a1.292 1.292 0 001.183-.846 1.292 1.292 0 00-.259-1.425l-.047-.046a1.566 1.566 0 112.216-2.216l.047.047a1.292 1.292 0 001.425.258h.062a1.292 1.292 0 00.783-1.182v-.133a1.566 1.566 0 113.132 0v.07a1.292 1.292 0 00.783 1.183 1.292 1.292 0 001.425-.259l.047-.047a1.566 1.566 0 112.215 2.216l-.047.047a1.291 1.291 0 00-.258 1.425v.062a1.292 1.292 0 001.182.783h.133a1.566 1.566 0 010 3.132h-.07a1.292 1.292 0 00-1.183.783v0z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t";
            // line 106
            if ((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) {
                // line 107
                echo "\t\t\t\t\t\t\t\t<span class=\"text-a-icon\">";
                echo ($context["text_ai_info"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fm-icon-b\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn-open-contact dflex align-items-center justify-content-center\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"23\" height=\"23\" fill=\"none\" viewBox=\"0 0 23 23\">
\t\t\t\t\t\t\t\t<path stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M20.335 15.76v2.692a1.796 1.796 0 01-1.957 1.796 17.766 17.766 0 01-7.746-2.756 17.506 17.506 0 01-5.386-5.386A17.765 17.765 0 012.49 4.323a1.795 1.795 0 011.786-1.957H6.97A1.795 1.795 0 018.764 3.91c.114.862.325 1.708.629 2.523a1.795 1.795 0 01-.404 1.894l-1.14 1.14a14.362 14.362 0 005.386 5.386l1.14-1.14a1.795 1.795 0 011.894-.404c.814.304 1.66.514 2.522.628a1.795 1.795 0 011.544 1.822z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t";
            // line 116
            if ((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) {
                // line 117
                echo "\t\t\t\t\t\t\t\t<span class=\"text-a-icon\">";
                echo ($context["text_ai_contact"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            // line 119
            echo "\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fm-icon-b\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn-open-viewed dflex align-items-center justify-content-center\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"19\" fill=\"none\" viewBox=\"0 0 25 19\">
\t\t\t\t\t\t\t\t<path stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M2 9.5S5.75 2 12.313 2c6.562 0 10.312 7.5 10.312 7.5S18.875 17 12.312 17C5.75 17 2 9.5 2 9.5z\"/>
\t\t\t\t\t\t\t\t<path stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M12.313 12.313a2.813 2.813 0 100-5.626 2.813 2.813 0 000 5.625z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t";
            // line 127
            if ((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) {
                // line 128
                echo "\t\t\t\t\t\t\t\t<span class=\"text-a-icon\">";
                echo ($context["text_ai_viewed"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            // line 130
            echo "\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fm-icon-b\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn-open-search dflex align-items-center justify-content-center\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"21\" fill=\"none\" viewBox=\"0 0 21 21\">
\t\t\t\t\t\t\t\t<path fill=\"#000\" fill-rule=\"evenodd\" d=\"M18.607 9.419a8.647 8.647 0 10-17.295 0 8.647 8.647 0 0017.295 0zm-15.673 0a7.026 7.026 0 1114.051 0 7.026 7.026 0 01-14.051 0z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t\t\t\t<path fill=\"#000\" d=\"M14.643 15.116a.81.81 0 011.056-.07l.09.08 3.395 3.453a.81.81 0 01-1.066 1.216l-.09-.08-3.395-3.453a.81.81 0 01.01-1.146z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t";
            // line 138
            if ((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) {
                // line 139
                echo "\t\t\t\t\t\t\t\t<span class=\"text-a-icon\">";
                echo ($context["text_ai_search"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            // line 141
            echo "\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mob-m-i cart_fix_mob\">
\t\t\t\t\t\t<span class=\"mob-icon-box cart-i dflex\">
\t\t\t\t\t\t\t<svg class=\"shop-bag-svg\" width=\"21\" height=\"19\" viewBox=\"0 0 21 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.25 1C0.25 0.585786 0.585786 0.25 1 0.25H2.38802C3.13452 0.25 3.79883 0.723534 4.04232 1.42921L7.07629 10.2224C7.11107 10.3232 7.20598 10.3908 7.31262 10.3908H17.5808C17.6999 10.3908 17.8024 10.3069 17.8259 10.1902L19.0236 4.24401C19.0548 4.08922 18.9364 3.94465 18.7785 3.94465H8.17493C7.76071 3.94465 7.42493 3.60886 7.42493 3.19465C7.42493 2.78044 7.76071 2.44465 8.17493 2.44465H18.7785C19.8838 2.44465 20.7123 3.45665 20.494 4.54019L19.2964 10.4864C19.1319 11.3033 18.4141 11.8908 17.5808 11.8908H7.31262C6.56612 11.8908 5.9018 11.4173 5.65832 10.7116L2.62435 1.91846C2.58957 1.81765 2.49466 1.75 2.38802 1.75H1C0.585786 1.75 0.25 1.41421 0.25 1Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t<path d=\"M9.462 16.6963C9.462 17.7464 8.61071 18.5977 7.56059 18.5977C6.51047 18.5977 5.65918 17.7464 5.65918 16.6963C5.65918 15.6462 6.51047 14.7949 7.56059 14.7949C8.61071 14.7949 9.462 15.6462 9.462 16.6963Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t<path d=\"M19.6026 16.6963C19.6026 17.7464 18.7513 18.5977 17.7012 18.5977C16.6511 18.5977 15.7998 17.7464 15.7998 16.6963C15.7998 15.6462 16.6511 14.7949 17.7012 14.7949C18.7513 14.7949 19.6026 15.6462 19.6026 16.6963Z\" fill=\"black\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t";
            // line 150
            if ((array_key_exists("show_text_after_icon", $context) && (($context["show_text_after_icon"] ?? null) == 1))) {
                // line 151
                echo "\t\t\t\t\t\t\t\t<span class=\"text-a-icon-cart\">";
                echo ($context["text_ai_cart"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"search_fix_mob hidden ";
            // line 155
            if ((array_key_exists("fm_fix_bottom", $context) && (($context["fm_fix_bottom"] ?? null) == 1))) {
                echo "shbottom";
            } else {
                echo "shtop";
            }
            echo "\">
\t\t\t\t\t\t<span class=\"fm-close-search\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"17\" fill=\"none\" viewBox=\"0 0 18 17\"><path stroke=\"#000\" stroke-linecap=\"round\" stroke-width=\"1.5\" d=\"M13.184 4.184l-8.485 8.485M13.242 12.729L4.757 4.243\"/></svg></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 160
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"mob-menu-info-fixed-left hidden\">
\t\t\t\t\t<div class=\"mobm-top\">
\t\t\t\t\t\t<div class=\"catalog-inform-box\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-catalog-mobile active\">
\t\t\t\t\t\t\t\t";
        // line 165
        if ((array_key_exists("design_icon_menu", $context) && (($context["design_icon_menu"] ?? null) == 1))) {
            // line 166
            echo "\t\t\t\t\t\t\t\t<svg class=\"menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"18\" fill=\"none\" viewBox=\"0 0 22 18\"><path stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M2 2h18M2 9h18M2 16h18\"/></svg>
\t\t\t\t\t\t\t\t";
        } else {
            // line 168
            echo "\t\t\t\t\t\t\t\t<svg class=\"menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"none\" viewBox=\"0 0 22 22\"><path stroke=\"#000\" stroke-linecap=\"round\" stroke-width=\"1.5\" d=\"M12.8 13.25H20m-7.2 3.15H20m-7.2 3.15H20M3 20h5.2a1 1 0 001-1v-5.2a1 1 0 00-1-1H3a1 1 0 00-1 1V19a1 1 0 001 1zM13.8 9.65H19a1 1 0 001-1V3a1 1 0 00-1-1h-5.2a1 1 0 00-1 1v5.65a1 1 0 001 1zM3 9.65h5.2a1 1 0 001-1V3a1 1 0 00-1-1H3a1 1 0 00-1 1v5.65a1 1 0 001 1z\"/></svg>
\t\t\t\t\t\t\t\t";
        }
        // line 170
        echo "\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"btn btn-menu-info\" type=\"button\" id=\"info-btn-mob\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"22\" fill=\"none\" viewBox=\"0 0 21 22\">
\t\t\t\t\t\t\t\t\t<path stroke=\"#000\" stroke-linejoin=\"bevel\" stroke-width=\"1.5\" d=\"M10.5 13.349a2.349 2.349 0 100-4.697 2.349 2.349 0 000 4.697z\"/>
\t\t\t\t\t\t\t\t\t<path stroke=\"#000\" stroke-linejoin=\"bevel\" stroke-width=\"1.5\" d=\"M16.293 13.349a1.291 1.291 0 00.259 1.425l.047.047a1.566 1.566 0 11-2.216 2.215l-.047-.047a1.291 1.291 0 00-1.425-.258 1.292 1.292 0 00-.783 1.182v.133a1.566 1.566 0 11-3.131 0v-.07a1.292 1.292 0 00-.846-1.183 1.291 1.291 0 00-1.425.259l-.046.047a1.565 1.565 0 01-2.556-1.708c.079-.19.194-.362.34-.508l.047-.047a1.292 1.292 0 00.258-1.425 1.292 1.292 0 00-1.182-.783h-.133a1.566 1.566 0 110-3.131h.07a1.292 1.292 0 001.183-.846 1.292 1.292 0 00-.259-1.425l-.047-.046a1.566 1.566 0 112.216-2.216l.047.047a1.292 1.292 0 001.425.258h.062a1.292 1.292 0 00.783-1.182v-.133a1.566 1.566 0 113.132 0v.07a1.292 1.292 0 00.783 1.183 1.292 1.292 0 001.425-.259l.047-.047a1.566 1.566 0 112.215 2.216l-.047.047a1.291 1.291 0 00-.258 1.425v.062a1.292 1.292 0 001.182.783h.133a1.566 1.566 0 010 3.132h-.07a1.292 1.292 0 00-1.183.783v0z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"btn btn-menu-contact\" type=\"button\" id=\"contact-btn-mob\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"23\" height=\"23\" fill=\"none\" viewBox=\"0 0 23 23\">
\t\t\t\t\t\t\t\t\t<path stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M20.335 15.76v2.692a1.796 1.796 0 01-1.957 1.796 17.766 17.766 0 01-7.746-2.756 17.506 17.506 0 01-5.386-5.386A17.765 17.765 0 012.49 4.323a1.795 1.795 0 011.786-1.957H6.97A1.795 1.795 0 018.764 3.91c.114.862.325 1.708.629 2.523a1.795 1.795 0 01-.404 1.894l-1.14 1.14a14.362 14.362 0 005.386 5.386l1.14-1.14a1.795 1.795 0 011.894-.404c.814.304 1.66.514 2.522.628a1.795 1.795 0 011.544 1.822z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"btn btn-menu-viewed\" type=\"button\" id=\"viewed-btn-mob\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"19\" fill=\"none\" viewBox=\"0 0 25 19\">
\t\t\t\t\t\t\t\t\t<path stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M2 9.5S5.75 2 12.313 2c6.562 0 10.312 7.5 10.312 7.5S18.875 17 12.312 17C5.75 17 2 9.5 2 9.5z\"/>
\t\t\t\t\t\t\t\t\t<path stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M12.313 12.313a2.813 2.813 0 100-5.626 2.813 2.813 0 000 5.625z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"bg-active-menu\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"mobm-close-menu\" href=\"javascript:void(0)\" onclick=\"close_mob_menu();\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"17\" fill=\"none\" viewBox=\"0 0 18 17\"><path stroke=\"#000\" stroke-linecap=\"round\" stroke-width=\"1.5\" d=\"M13.184 4.184l-8.485 8.485M13.242 12.729L4.757 4.243\"/></svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mob-menu active\" id=\"mob-catalog-left\"></div>
\t\t\t\t\t<div class=\"mob-info\" id=\"mob-info-left\">
\t\t\t\t\t\t<div class=\"box-account-mob\">
\t\t\t\t\t\t\t<div class=\"title-account-mob\">";
        // line 197
        echo ($context["text_account"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mm-wishlist\"></div>
\t\t\t\t\t\t<div class=\"mm-compare\"></div>
\t\t\t\t\t\t<div class=\"box-other-mob\"></div>
\t\t\t\t\t\t<div class=\"links-mob\"></div>
\t\t\t\t\t\t<div class=\"desc_info_mob\">";
        // line 203
        echo ($context["desc_info_mob"] ?? null);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mob-info\" id=\"mob-info-contact\">

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mob-info\" id=\"mob-info-viewed\"></div>
\t\t\t\t</div>
\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "luxshop/template/common/hmob_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 203,  421 => 197,  392 => 170,  388 => 168,  384 => 166,  382 => 165,  375 => 160,  363 => 155,  359 => 153,  353 => 151,  351 => 150,  340 => 141,  334 => 139,  332 => 138,  322 => 130,  316 => 128,  314 => 127,  304 => 119,  298 => 117,  296 => 116,  287 => 109,  281 => 107,  279 => 106,  269 => 98,  263 => 96,  260 => 95,  256 => 93,  252 => 91,  250 => 90,  246 => 88,  243 => 87,  238 => 84,  232 => 82,  230 => 81,  223 => 77,  220 => 76,  217 => 75,  215 => 74,  208 => 73,  205 => 72,  198 => 67,  192 => 65,  190 => 64,  181 => 57,  176 => 54,  170 => 52,  168 => 51,  160 => 45,  158 => 44,  155 => 43,  152 => 42,  142 => 39,  139 => 38,  136 => 37,  134 => 36,  131 => 35,  127 => 34,  116 => 33,  111 => 30,  105 => 28,  102 => 27,  98 => 25,  94 => 23,  92 => 22,  88 => 20,  85 => 19,  80 => 16,  74 => 14,  72 => 13,  65 => 9,  62 => 8,  59 => 7,  57 => 6,  49 => 4,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "luxshop/template/common/hmob_menu.twig", "C:\\laragon\\www\\serverbox.com.ua\\catalog\\view\\theme\\luxshop\\template\\common\\hmob_menu.twig");
    }
}
