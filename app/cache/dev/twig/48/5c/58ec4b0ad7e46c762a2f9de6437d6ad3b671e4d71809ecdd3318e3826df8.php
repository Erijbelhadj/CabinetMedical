<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_485c58ec4b0ad7e46c762a2f9de6437d6ad3b671e4d71809ecdd3318e3826df8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"sf-exceptionreset\">

    <div class=\"block_exception\">
        <div class=\"block_exception_detected clear_fix\">
            <div class=\"illustration_exception\">
                <img alt=\"Exception detected!\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/exception_detected.png"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"text_exception\">

                <div class=\"open_quote\">
                    <img alt=\"\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/open_quote.gif"), "html", null, true);
        echo "\"/>
                </div>

                <h1>
                    ";
        // line 15
        echo $this->env->getExtension('code')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true)));
        echo "
                </h1>

                <div>
                    <strong>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class"));
        echo "
                </div>

                ";
        // line 22
        $context["previous_count"] = twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "allPrevious"));
        // line 23
        echo "                ";
        if ((isset($context["previous_count"]) ? $context["previous_count"] : $this->getContext($context, "previous_count"))) {
            // line 24
            echo "                    <div class=\"linked\"><span><strong>";
            echo twig_escape_filter($this->env, (isset($context["previous_count"]) ? $context["previous_count"] : $this->getContext($context, "previous_count")), "html", null, true);
            echo "</strong> linked Exception";
            echo ((((isset($context["previous_count"]) ? $context["previous_count"] : $this->getContext($context, "previous_count")) > 1)) ? ("s") : (""));
            echo ":</span>
                        <ul>
                            ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "allPrevious"));
            foreach ($context['_seq'] as $context["i"] => $context["previous"]) {
                // line 27
                echo "                                <li>
                                    ";
                // line 28
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous")), "class"));
                echo " <a href=\"#traces_link_";
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
                echo "\" onclick=\"toggle('traces_";
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
                echo "', 'traces'); switchIcons('icon_traces_";
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
                echo "_open', 'icon_traces_";
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
                echo "_close');\">&#187;</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['previous'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                        </ul>
                    </div>
                ";
        }
        // line 34
        echo "
                <div class=\"close_quote\">
                    <img alt=\"\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/close_quote.gif"), "html", null, true);
        echo "\"/>
                </div>

            </div>
        </div>
    </div>

    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray"));
        foreach ($context['_seq'] as $context["position"] => $context["e"]) {
            // line 44
            echo "        ";
            $this->env->loadTemplate("TwigBundle:Exception:traces.html.twig")->display(array("exception" => (isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "position" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "count" => (isset($context["previous_count"]) ? $context["previous_count"] : $this->getContext($context, "previous_count"))));
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
    ";
        // line 47
        if ((isset($context["logger"]) ? $context["logger"] : $this->getContext($context, "logger"))) {
            // line 48
            echo "        <div class=\"block\">
            <div class=\"logs clear_fix\">
                ";
            // line 50
            ob_start();
            // line 51
            echo "                <h2>
                    Logs&nbsp;
                    <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon_logs_open', 'icon_logs_close'); return false;\">
                        <img class=\"toggle\" id=\"icon_logs_open\" alt=\"+\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: hidden\" />
                        <img class=\"toggle\" id=\"icon_logs_close\" alt=\"-\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: visible; margin-left: -18px\" />
                    </a>
                </h2>
                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 59
            echo "
                ";
            // line 60
            if ($this->getAttribute((isset($context["logger"]) ? $context["logger"] : $this->getContext($context, "logger")), "counterrors")) {
                // line 61
                echo "                    <div class=\"error_count\">
                        <span>
                            ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logger"]) ? $context["logger"] : $this->getContext($context, "logger")), "counterrors"), "html", null, true);
                echo " error";
                echo ((($this->getAttribute((isset($context["logger"]) ? $context["logger"] : $this->getContext($context, "logger")), "counterrors") > 1)) ? ("s") : (""));
                echo "
                        </span>
                    </div>
                ";
            }
            // line 67
            echo "
            </div>

            <div id=\"logs\">
                ";
            // line 71
            $this->env->loadTemplate("TwigBundle:Exception:logs.html.twig")->display(array("logs" => $this->getAttribute((isset($context["logger"]) ? $context["logger"] : $this->getContext($context, "logger")), "logs")));
            // line 72
            echo "            </div>

        </div>
    ";
        }
        // line 76
        echo "
    ";
        // line 77
        if ((isset($context["currentContent"]) ? $context["currentContent"] : $this->getContext($context, "currentContent"))) {
            // line 78
            echo "        <div class=\"block\">
            ";
            // line 79
            ob_start();
            // line 80
            echo "            <h2>
                Content of the Output&nbsp;
                <a href=\"#\" onclick=\"toggle('output_content'); switchIcons('icon_content_open', 'icon_content_close'); return false;\">
                    <img class=\"toggle\" id=\"icon_content_close\" alt=\"-\" src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: hidden\" />
                    <img class=\"toggle\" id=\"icon_content_open\" alt=\"+\" src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: visible; margin-left: -18px\" />
                </a>
            </h2>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 88
            echo "
            <div id=\"output_content\" style=\"display: none\">
                ";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["currentContent"]) ? $context["currentContent"] : $this->getContext($context, "currentContent")), "html", null, true);
            echo "
            </div>

            <div style=\"clear: both\"></div>
        </div>
    ";
        }
        // line 96
        echo "
</div>

<script type=\"text/javascript\">//<![CDATA[
    function toggle(id, clazz) {
        var el = document.getElementById(id),
            current = el.style.display,
            i;

        if (clazz) {
            var tags = document.getElementsByTagName('*');
            for (i = tags.length - 1; i >= 0 ; i--) {
                if (tags[i].className === clazz) {
                    tags[i].style.display = 'none';
                }
            }
        }

        el.style.display = current === 'none' ? 'block' : 'none';
    }

    function switchIcons(id1, id2) {
        var icon1, icon2, visibility1, visibility2;

        icon1 = document.getElementById(id1);
        icon2 = document.getElementById(id2);

        visibility1 = icon1.style.visibility;
        visibility2 = icon2.style.visibility;

        icon1.style.visibility = visibility2;
        icon2.style.visibility = visibility1;
    }
//]]></script>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  178 => 71,  172 => 67,  163 => 63,  159 => 61,  157 => 60,  154 => 59,  147 => 55,  143 => 54,  138 => 51,  136 => 50,  132 => 48,  130 => 47,  127 => 46,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 34,  95 => 31,  78 => 28,  75 => 27,  60 => 23,  41 => 15,  34 => 11,  19 => 1,  88 => 6,  81 => 40,  35 => 7,  26 => 6,  21 => 1,  46 => 8,  32 => 4,  29 => 3,  1506 => 901,  1487 => 889,  1468 => 877,  1443 => 854,  1440 => 853,  1414 => 654,  1375 => 622,  1357 => 608,  1316 => 816,  1170 => 672,  1168 => 608,  938 => 380,  935 => 379,  926 => 967,  922 => 966,  918 => 965,  913 => 963,  907 => 960,  903 => 959,  899 => 958,  895 => 957,  891 => 956,  887 => 955,  883 => 954,  879 => 953,  875 => 952,  871 => 951,  867 => 950,  863 => 949,  859 => 948,  855 => 947,  851 => 946,  847 => 945,  843 => 944,  839 => 943,  835 => 942,  828 => 938,  824 => 937,  820 => 936,  816 => 935,  809 => 930,  807 => 853,  801 => 849,  799 => 379,  762 => 344,  759 => 343,  753 => 342,  745 => 338,  742 => 337,  738 => 336,  733 => 335,  730 => 334,  724 => 333,  718 => 330,  715 => 329,  712 => 328,  708 => 327,  704 => 326,  701 => 325,  695 => 324,  690 => 322,  687 => 321,  684 => 320,  680 => 319,  675 => 318,  672 => 317,  666 => 316,  661 => 314,  658 => 313,  655 => 312,  651 => 311,  646 => 310,  643 => 309,  637 => 308,  631 => 306,  628 => 305,  624 => 304,  619 => 303,  616 => 302,  610 => 301,  604 => 299,  601 => 298,  597 => 297,  592 => 296,  589 => 295,  583 => 294,  577 => 292,  574 => 291,  570 => 290,  566 => 289,  563 => 288,  560 => 287,  554 => 286,  549 => 284,  544 => 283,  540 => 282,  536 => 281,  533 => 280,  530 => 279,  524 => 278,  516 => 273,  509 => 270,  505 => 269,  500 => 268,  497 => 267,  491 => 266,  485 => 263,  482 => 262,  479 => 261,  475 => 260,  470 => 259,  467 => 258,  461 => 257,  453 => 253,  450 => 252,  446 => 251,  442 => 250,  439 => 249,  433 => 248,  428 => 246,  425 => 245,  422 => 244,  418 => 243,  414 => 242,  411 => 241,  408 => 240,  402 => 239,  397 => 237,  392 => 234,  389 => 233,  385 => 232,  381 => 231,  376 => 229,  372 => 228,  368 => 227,  364 => 226,  360 => 225,  355 => 223,  349 => 220,  339 => 213,  328 => 209,  290 => 174,  283 => 170,  278 => 168,  273 => 166,  261 => 157,  236 => 139,  195 => 105,  183 => 96,  145 => 61,  141 => 60,  131 => 57,  112 => 41,  106 => 38,  102 => 37,  98 => 36,  91 => 32,  87 => 31,  83 => 30,  79 => 39,  63 => 24,  59 => 22,  55 => 20,  51 => 19,  47 => 18,  43 => 7,  39 => 8,  22 => 1,  117 => 56,  105 => 47,  94 => 39,  84 => 32,  71 => 26,  67 => 23,  58 => 22,  48 => 19,  44 => 9,  40 => 8,  36 => 7,  31 => 6,  28 => 5,);
    }
}
