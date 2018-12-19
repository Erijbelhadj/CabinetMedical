<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_27d928c81674a12aff43aa12713ff099b27e76013de8ca7259e5ca90767c8d5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear_fix\">
                <div class=\"header_logo\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/logo_symfony.png"), "html", null, true);
        echo "\" alt=\"Symfony\" />
                </div>

                <div class=\"search\">
                  <form method=\"get\" action=\"http://symfony.com/search\">
                    <div class=\"form_row\">

                      <label for=\"search_id\">
                          <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/grey_magnifier.png"), "html", null, true);
        echo "\" alt=\"Search on Symfony website\" />
                      </label>

                      <input name=\"q\" id=\"search_id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                      <button type=\"submit\">
                        <span class=\"border_l\">
                          <span class=\"border_r\">
                            <span class=\"btn_bg\">OK</span>
                          </span>
                        </span>
                      </button>
                    </div>
                   </form>
                </div>
            </div>

            ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  81 => 40,  35 => 7,  26 => 4,  21 => 1,  46 => 8,  32 => 4,  29 => 3,  1506 => 901,  1487 => 889,  1468 => 877,  1443 => 854,  1440 => 853,  1414 => 654,  1375 => 622,  1357 => 608,  1316 => 816,  1170 => 672,  1168 => 608,  938 => 380,  935 => 379,  926 => 967,  922 => 966,  918 => 965,  913 => 963,  907 => 960,  903 => 959,  899 => 958,  895 => 957,  891 => 956,  887 => 955,  883 => 954,  879 => 953,  875 => 952,  871 => 951,  867 => 950,  863 => 949,  859 => 948,  855 => 947,  851 => 946,  847 => 945,  843 => 944,  839 => 943,  835 => 942,  828 => 938,  824 => 937,  820 => 936,  816 => 935,  809 => 930,  807 => 853,  801 => 849,  799 => 379,  762 => 344,  759 => 343,  753 => 342,  745 => 338,  742 => 337,  738 => 336,  733 => 335,  730 => 334,  724 => 333,  718 => 330,  715 => 329,  712 => 328,  708 => 327,  704 => 326,  701 => 325,  695 => 324,  690 => 322,  687 => 321,  684 => 320,  680 => 319,  675 => 318,  672 => 317,  666 => 316,  661 => 314,  658 => 313,  655 => 312,  651 => 311,  646 => 310,  643 => 309,  637 => 308,  631 => 306,  628 => 305,  624 => 304,  619 => 303,  616 => 302,  610 => 301,  604 => 299,  601 => 298,  597 => 297,  592 => 296,  589 => 295,  583 => 294,  577 => 292,  574 => 291,  570 => 290,  566 => 289,  563 => 288,  560 => 287,  554 => 286,  549 => 284,  544 => 283,  540 => 282,  536 => 281,  533 => 280,  530 => 279,  524 => 278,  516 => 273,  509 => 270,  505 => 269,  500 => 268,  497 => 267,  491 => 266,  485 => 263,  482 => 262,  479 => 261,  475 => 260,  470 => 259,  467 => 258,  461 => 257,  453 => 253,  450 => 252,  446 => 251,  442 => 250,  439 => 249,  433 => 248,  428 => 246,  425 => 245,  422 => 244,  418 => 243,  414 => 242,  411 => 241,  408 => 240,  402 => 239,  397 => 237,  392 => 234,  389 => 233,  385 => 232,  381 => 231,  376 => 229,  372 => 228,  368 => 227,  364 => 226,  360 => 225,  355 => 223,  349 => 220,  339 => 213,  328 => 209,  290 => 174,  283 => 170,  278 => 168,  273 => 166,  261 => 157,  236 => 139,  195 => 105,  183 => 96,  145 => 61,  141 => 60,  131 => 57,  112 => 41,  106 => 38,  102 => 37,  98 => 36,  91 => 32,  87 => 31,  83 => 30,  79 => 39,  63 => 22,  59 => 22,  55 => 20,  51 => 19,  47 => 18,  43 => 7,  39 => 8,  22 => 1,  117 => 56,  105 => 47,  94 => 39,  84 => 32,  71 => 24,  67 => 23,  58 => 17,  48 => 14,  44 => 9,  40 => 8,  36 => 7,  31 => 6,  28 => 5,);
    }
}
