<?php

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_8652cabd8601ea3e083e732b694bf402547d1b41fc942f231ff2b57861e197a0 extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at
    <strong>
        <abbr title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "short_class"), "html", null, true);
            echo "</abbr>
        ";
            // line 5
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")), "html", null, true);
            echo "
    </strong>
    (";
            // line 7
            echo $this->env->getExtension('code')->formatArgs($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        }
        // line 9
        echo "
";
        // line 10
        if (((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file")) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true)) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line"))) {
            // line 11
            echo "    ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) ? ("<br />") : (""));
            echo "
    in ";
            // line 12
            echo $this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file"), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line"));
            echo "&nbsp;
    ";
            // line 13
            ob_start();
            // line 14
            echo "    <a href=\"#\" onclick=\"toggle('trace_";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "_") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "'); switchIcons('icon_";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "_") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "_open', 'icon_";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "_") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "_close'); return false;\">
        <img class=\"toggle\" id=\"icon_";
            // line 15
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "_") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "_close\" alt=\"-\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) ? ("visible") : ("hidden"));
            echo "\" />
        <img class=\"toggle\" id=\"icon_";
            // line 16
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "_") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "_open\" alt=\"+\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) ? ("hidden") : ("visible"));
            echo "; margin-left: -18px\" />
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 19
            echo "    <div id=\"trace_";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "_") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "\" style=\"display: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) ? ("block") : ("none"));
            echo "\" class=\"trace\">
        ";
            // line 20
            echo $this->env->getExtension('code')->fileExcerpt($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file"), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line"));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  66 => 15,  57 => 14,  25 => 4,  96 => 21,  93 => 20,  89 => 19,  76 => 16,  72 => 14,  68 => 12,  50 => 8,  33 => 5,  27 => 4,  24 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  178 => 71,  172 => 67,  163 => 63,  159 => 61,  157 => 60,  154 => 59,  147 => 55,  143 => 54,  138 => 51,  136 => 50,  132 => 48,  130 => 47,  127 => 46,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 34,  95 => 31,  78 => 28,  75 => 27,  60 => 23,  41 => 9,  34 => 11,  19 => 1,  88 => 6,  81 => 40,  35 => 7,  26 => 6,  21 => 2,  46 => 11,  32 => 4,  29 => 3,  1506 => 901,  1487 => 889,  1468 => 877,  1443 => 854,  1440 => 853,  1414 => 654,  1375 => 622,  1357 => 608,  1316 => 816,  1170 => 672,  1168 => 608,  938 => 380,  935 => 379,  926 => 967,  922 => 966,  918 => 965,  913 => 963,  907 => 960,  903 => 959,  899 => 958,  895 => 957,  891 => 956,  887 => 955,  883 => 954,  879 => 953,  875 => 952,  871 => 951,  867 => 950,  863 => 949,  859 => 948,  855 => 947,  851 => 946,  847 => 945,  843 => 944,  839 => 943,  835 => 942,  828 => 938,  824 => 937,  820 => 936,  816 => 935,  809 => 930,  807 => 853,  801 => 849,  799 => 379,  762 => 344,  759 => 343,  753 => 342,  745 => 338,  742 => 337,  738 => 336,  733 => 335,  730 => 334,  724 => 333,  718 => 330,  715 => 329,  712 => 328,  708 => 327,  704 => 326,  701 => 325,  695 => 324,  690 => 322,  687 => 321,  684 => 320,  680 => 319,  675 => 318,  672 => 317,  666 => 316,  661 => 314,  658 => 313,  655 => 312,  651 => 311,  646 => 310,  643 => 309,  637 => 308,  631 => 306,  628 => 305,  624 => 304,  619 => 303,  616 => 302,  610 => 301,  604 => 299,  601 => 298,  597 => 297,  592 => 296,  589 => 295,  583 => 294,  577 => 292,  574 => 291,  570 => 290,  566 => 289,  563 => 288,  560 => 287,  554 => 286,  549 => 284,  544 => 283,  540 => 282,  536 => 281,  533 => 280,  530 => 279,  524 => 278,  516 => 273,  509 => 270,  505 => 269,  500 => 268,  497 => 267,  491 => 266,  485 => 263,  482 => 262,  479 => 261,  475 => 260,  470 => 259,  467 => 258,  461 => 257,  453 => 253,  450 => 252,  446 => 251,  442 => 250,  439 => 249,  433 => 248,  428 => 246,  425 => 245,  422 => 244,  418 => 243,  414 => 242,  411 => 241,  408 => 240,  402 => 239,  397 => 237,  392 => 234,  389 => 233,  385 => 232,  381 => 231,  376 => 229,  372 => 228,  368 => 227,  364 => 226,  360 => 225,  355 => 223,  349 => 220,  339 => 213,  328 => 209,  290 => 174,  283 => 170,  278 => 168,  273 => 166,  261 => 157,  236 => 139,  195 => 105,  183 => 96,  145 => 61,  141 => 60,  131 => 57,  112 => 41,  106 => 38,  102 => 37,  98 => 22,  91 => 20,  87 => 31,  83 => 18,  79 => 17,  63 => 24,  59 => 22,  55 => 13,  51 => 12,  47 => 18,  43 => 7,  39 => 6,  22 => 2,  117 => 56,  105 => 24,  94 => 39,  84 => 19,  71 => 26,  67 => 23,  58 => 9,  48 => 19,  44 => 10,  40 => 8,  36 => 7,  31 => 5,  28 => 5,);
    }
}
