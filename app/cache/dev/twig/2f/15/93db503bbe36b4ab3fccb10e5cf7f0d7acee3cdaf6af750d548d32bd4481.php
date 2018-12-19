<?php

/* CabinetMedicalBundle::portfolio.html.twig */
class __TwigTemplate_2f1593db503bbe36b4ab3fccb10e5cf7f0d7acee3cdaf6af750d548d32bd4481 extends Twig_Template
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
        echo "<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Hospice a Medical Category Flat bootstrap Responsive website Template | Portfolio :: w3layouts</title>
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/css/style.css"), "html", null, true);
        echo "\"type=\"text/css\" rel=\"stylesheet\" media=\"all\">
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\">
<!--web-font-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!--//web-font-->
<!-- Custom Theme files -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Hospice Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
\tSmartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
<!-- //Custom Theme files -->
<!-- js -->
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
<!-- //js -->\t
<!-- start-smoth-scrolling-->
<script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/move-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/easing.js"), "html", null, true);
        echo "\"></script>\t
<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/modernizr.custom.53451.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\t\tjQuery(document).ready(function(\$) {
\t\t\t\$(\".scroll\").click(function(event){\t\t
\t\t\t\tevent.preventDefault();
\t\t\t\t\$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
\t\t\t});
\t\t});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>
\t<!--header-->
\t<div class=\"header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"top-middle\">
\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t<h3>CabinetMedical</h3>
\t\t\t\t</a>\t
\t\t\t</div>
\t\t\t<div class=\"top-nav\">
\t\t\t\t<span class=\"menu\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/menu-icon.png"), "html", null, true);
        echo "\" alt=\"\"/></span>\t\t
\t\t\t\t\t<ul class=\"nav\">
                                    <br>
                                   choisir votre type d'accée
                                    <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_role", array("role" => 1)), "html", null, true);
        echo "\"> <h5>admin</h5><span class=\"badge badge-important animated bounceIn\"></span></a>
                                    </li>
                                     <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_role", array("role" => 3)), "html", null, true);
        echo "\"> <h5>secretaire</h5><span class=\"badge badge-important animated bounceIn\"></span></a>
                                    </li>
                                     <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_role", array("role" => 2)), "html", null, true);
        echo "\"><h5>medecin</h5><span class=\"badge badge-important animated bounceIn\"></span></a>
                                    </li>
                                     <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_role", array("role" => 4)), "html", null, true);
        echo "\"><h5> patient</h5><span class=\"badge badge-important animated bounceIn\"></span></a>
                                    </li>
                                    </ul>
                                    <br>
                                    <ul class=\"nav1\">
\t\t\t\t\t<li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cabinet_medical_homepage"), "html", null, true);
        echo "\" >Acceuil</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("about"), "html", null, true);
        echo "\" >Apropos</a></li>
\t\t\t\t\t
\t\t\t\t\t<li><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio"), "html", null, true);
        echo "\" class=\"active\">Profil</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_new2"), "html", null, true);
        echo "\" >Contactez Nous</a></li>
                                        
\t\t\t\t\t<li>  ";
        // line 74
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 75
            echo "   <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\"> Deconnexion</a> ";
        }
        echo "   </li>
                                        </ul>
\t\t\t\t
\t\t\t\t<!-- script-for-menu -->
\t\t\t\t <script>
\t\t\t\t   \$( \"span.menu\" ).click(function() {
\t\t\t\t\t \$( \"ul.nav1\" ).slideToggle( 300, function() {
\t\t\t\t\t // Animation complete.
\t\t\t\t\t  });
\t\t\t\t\t });
\t\t\t\t</script>
\t\t\t\t<!-- /script-for-menu -->
\t\t\t</div>\t
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>\t
\t</div>
\t<!--//header-->
\t<!--portfolio-->
\t<div class=\"portfolios\">
\t\t<div class=\"container\">
\t\t\t<div class=\"work-title\">
\t\t\t\t<h3>Nos<span>Services</span></h3>
\t\t\t</div>
\t\t\t<ul id=\"filters\" class=\"clearfix\">
\t\t\t\t<li><span class=\"filter active\" data-filter=\"app card icon web\">ALL</span></li>
\t\t\t\t<li><span class=\"filter\" data-filter=\"app\">CATEGORY 1</span></li>
\t\t\t\t<li><span class=\"filter\" data-filter=\"card\">CATEGORY 2</span></li>
\t\t\t\t<li><span class=\"filter\" data-filter=\"icon\">CATEGORY 3</span></li>
\t\t\t\t<li><span class=\"filter\" data-filter=\"web\">CATEGORY 4</span></li>
\t\t\t</ul>
\t\t\t<div id=\"portfoliolist\">
\t\t\t\t<div class=\"portfolio app mix_all\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
\t\t\t\t\t<div class=\"portfolio-wrapper\">\t\t
\t\t\t\t\t\t<a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img19.jpg"), "html", null, true);
        echo "\" class=\"b-link-stripe b-animate-go   swipebox\"  title=\"\">
\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img19.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<div class=\"b-wrapper\">
\t\t\t\t\t\t\t\t<h2 class=\"b-animate b-from-left    b-delay03 \">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/clientimages//e.png"), "html", null, true);
        echo "\" class=\"zoom\" alt=\"\"/>
\t\t\t\t\t\t\t\t</h2>\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"portfolio card mix_all\" data-cat=\"card\" style=\"display: inline-block; opacity: 1;\">
\t\t\t\t\t<div class=\"portfolio-wrapper\">\t\t
\t\t\t\t\t\t<a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img20.jpg"), "html", null, true);
        echo "\" class=\"b-link-stripe b-animate-go   swipebox\"  title=\"\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img20.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"b-wrapper\">
\t\t\t\t\t\t<h2 class=\"b-animate b-from-left    b-delay03 \">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/e.png"), "html", null, true);
        echo "\" class=\"zoom\" alt=\"\"/></h2>
\t\t\t\t\t\t
\t\t\t\t\t\t</div></a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"portfolio icon mix_all\" data-cat=\"icon\" style=\"display: inline-block; opacity: 1;\">
\t\t\t\t\t<div class=\"portfolio-wrapper\">\t\t
\t\t\t\t\t\t<a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img21.jpg"), "html", null, true);
        echo "\" class=\"b-link-stripe b-animate-go   swipebox\"  title=\"\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img21.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"b-wrapper\">
\t\t\t\t\t\t<h2 class=\"b-animate b-from-left    b-delay03 \">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/e.png"), "html", null, true);
        echo "\" class=\"zoom\" alt=\"\"/>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t
\t\t\t\t\t\t</div></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"portfolio web mix_all\" data-cat=\"web\" style=\"display: inline-block; opacity: 1;\">
\t\t\t\t\t<div class=\"portfolio-wrapper\">\t\t
\t\t\t\t\t\t<a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img22.jpg"), "html", null, true);
        echo "\" class=\"b-link-stripe b-animate-go   swipebox\"  title=\"\">
\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img22.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<div class=\"b-wrapper\">
\t\t\t\t\t\t\t\t<h2 class=\"b-animate b-from-left    b-delay03 \">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/e.png"), "html", null, true);
        echo "\" class=\"zoom\" alt=\"\"/>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"portfolio app mix_all\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
\t\t\t\t\t<div class=\"portfolio-wrapper\">\t\t
\t\t\t\t\t\t<a href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img23.jpg"), "html", null, true);
        echo "\" class=\"b-link-stripe b-animate-go   swipebox\"  title=\"\">
\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img23.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<div class=\"b-wrapper\">
\t\t\t\t\t\t\t\t<h2 class=\"b-animate b-from-left    b-delay03 \">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/e.png"), "html", null, true);
        echo "\" class=\"zoom\" alt=\"\"/>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"portfolio card mix_all\" data-cat=\"card\" style=\"display: inline-block; opacity: 1;\">
\t\t\t\t\t<div class=\"portfolio-wrapper\">\t\t
\t\t\t\t\t\t<a href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img24.jpg"), "html", null, true);
        echo "\" class=\"b-link-stripe b-animate-go   swipebox\"  title=\"\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img24.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"b-wrapper\">
\t\t\t\t\t\t<h2 class=\"b-animate b-from-left    b-delay03 \">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/e.png"), "html", null, true);
        echo "\" class=\"zoom\" alt=\"\"/></h2>
\t\t\t\t\t\t
\t\t\t\t\t\t</div></a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"portfolio icon mix_all\" data-cat=\"icon\" style=\"display: inline-block; opacity: 1;\">
\t\t\t\t\t<div class=\"portfolio-wrapper\">\t\t
\t\t\t\t\t\t<a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img25.jpg"), "html", null, true);
        echo "\" class=\"b-link-stripe b-animate-go   swipebox\"  title=\"\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img25.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"b-wrapper\">
\t\t\t\t\t\t<h2 class=\"b-animate b-from-left    b-delay03 \">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/e.png"), "html", null, true);
        echo "\" class=\"zoom\" alt=\"\"/>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t
\t\t\t\t\t\t</div></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"portfolio web mix_all\" data-cat=\"web\" style=\"display: inline-block; opacity: 1;\">
\t\t\t\t\t<div class=\"portfolio-wrapper\">\t\t
\t\t\t\t\t\t<a href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img26.jpg"), "html", null, true);
        echo "\" class=\"b-link-stripe b-animate-go   swipebox\"  title=\"\">
\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img26.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<div class=\"b-wrapper\">
\t\t\t\t\t\t\t\t<h2 class=\"b-animate b-from-left    b-delay03 \">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/e.png"), "html", null, true);
        echo "\" class=\"zoom\" alt=\"\"/>
\t\t\t\t\t\t\t\t</h2>\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"portfolio app mix_all\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
\t\t\t\t\t<div class=\"portfolio-wrapper\">\t\t
\t\t\t\t\t\t<a href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img27.jpg"), "html", null, true);
        echo "\" class=\"b-link-stripe b-animate-go   swipebox\"  title=\"\">
\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img27.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<div class=\"b-wrapper\">
\t\t\t\t\t\t\t\t<h2 class=\"b-animate b-from-left    b-delay03 \">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/e.png"), "html", null, true);
        echo "\" class=\"zoom\" alt=\"\"/>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"portfolio card mix_all\" data-cat=\"card\" style=\"display: inline-block; opacity: 1;\">
\t\t\t\t\t<div class=\"portfolio-wrapper\">\t\t
\t\t\t\t\t\t<a href=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img28.jpg"), "html", null, true);
        echo "\" class=\"b-link-stripe b-animate-go   swipebox\"  title=\"\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img28.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"b-wrapper\">
\t\t\t\t\t\t<h2 class=\"b-animate b-from-left    b-delay03 \">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/e.png"), "html", null, true);
        echo "\" class=\"zoom\" alt=\"\"/></h2>
\t\t\t\t\t\t
\t\t\t\t\t\t</div></a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"portfolio icon mix_all\" data-cat=\"icon\" style=\"display: inline-block; opacity: 1;\">
\t\t\t\t\t<div class=\"portfolio-wrapper\">\t\t
\t\t\t\t\t\t<a href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img29.jpg"), "html", null, true);
        echo "\" class=\"b-link-stripe b-animate-go   swipebox\"  title=\"\">
\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img29.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<div class=\"b-wrapper\">
\t\t\t\t\t\t\t\t<h2 class=\"b-animate b-from-left    b-delay03 \">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/e.png"), "html", null, true);
        echo "\" class=\"zoom\" alt=\"\"/>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"portfolio web mix_all\" data-cat=\"web\" style=\"display: inline-block; opacity: 1;\">
\t\t\t\t\t<div class=\"portfolio-wrapper\">\t\t
\t\t\t\t\t\t<a href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img30.jpg"), "html", null, true);
        echo "\" class=\"b-link-stripe b-animate-go   swipebox\"  title=\"\">
\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img30.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<div class=\"b-wrapper\">
\t\t\t\t\t\t\t\t<h2 class=\"b-animate b-from-left    b-delay03 \">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/e.png"), "html", null, true);
        echo "\" class=\"zoom\" alt=\"\"/>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/css/swipebox.css"), "html", null, true);
        echo "\">
\t\t\t\t\t<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/jquery.swipebox.min.js"), "html", null, true);
        echo "\"></script> 
\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\tjQuery(function(\$) {
\t\t\t\t\t\t\t\t\$(\".swipebox\").swipebox();
\t\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t<!-- Portfolio Ends Here -->
\t\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$(function () {
\t\t\t\t\t\t\tvar filterList = {
\t\t\t\t\t\t\t\tinit: function () {
\t\t\t\t\t\t\t\t\t// MixItUp plugin
\t\t\t\t\t\t\t\t// http://mixitup.io
\t\t\t\t\t\t\t\t\$('#portfoliolist').mixitup({
\t\t\t\t\t\t\t\t\ttargetSelector: '.portfolio',
\t\t\t\t\t\t\t\t\tfilterSelector: '.filter',
\t\t\t\t\t\t\t\t\teffects: ['fade'],
\t\t\t\t\t\t\t\t\teasing: 'snap',
\t\t\t\t\t\t\t\t\t// call the hover effect
\t\t\t\t\t\t\t\t\tonMixEnd: filterList.hoverEffect()
\t\t\t\t\t\t\t\t});\t
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\thoverEffect: function () {
\t\t\t\t\t\t\t\t// Simple parallax effect
\t\t\t\t\t\t\t\t\$('#portfoliolist .portfolio').hover(
\t\t\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\t\t\t\$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
\t\t\t\t\t\t\t\t\t\t\$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');\t\t\t\t
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\t\t\t\$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
\t\t\t\t\t\t\t\t\t\t\$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t}\t\t
\t\t\t\t\t\t\t\t);\t\t\t\t
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};
\t\t\t\t\t\t// Run the show!
\t\t\t\t\t\t\tfilterList.init();
\t\t\t\t\t\t});\t
\t\t\t\t\t\t</script>
\t\t</div>\t\t\t\t
\t</div>
\t<!--//portfolio-->
\t<!--footer-->
\t<div class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-left\">
\t\t\t\t<a href=\"index.html\">Hospice</a>
\t\t\t</div>
\t\t\t<div class=\"footer-right\">
\t\t\t\t<p>© 2015 All rights reserved | Template by <a href=\"http://w3layouts.com/\"> W3layouts</a></p>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t</div>
\t<!--//footer-->
\t<!--smooth-scrolling-of-move-up-->
\t\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function() {
\t\t\t\t/*
\t\t\t\tvar defaults = {
\t\t\t\t\tcontainerID: 'toTop', // fading element id
\t\t\t\t\tcontainerHoverID: 'toTopHover', // fading element hover id
\t\t\t\t\tscrollSpeed: 1200,
\t\t\t\t\teasingType: 'linear' 
\t\t\t\t};
\t\t\t\t*/
\t\t\t\t
\t\t\t\t\$().UItoTop({ easingType: 'easeOutQuart' });
\t\t\t\t
\t\t\t});
\t\t</script>
\t\t<a href=\"#\" id=\"toTop\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\"> </span></a>
\t<!--//smooth-scrolling-of-move-up-->
</body>
</html>\t";
    }

    public function getTemplateName()
    {
        return "CabinetMedicalBundle::portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 256,  435 => 249,  431 => 248,  421 => 241,  415 => 238,  411 => 237,  400 => 229,  394 => 226,  390 => 225,  380 => 218,  374 => 215,  370 => 214,  359 => 206,  353 => 203,  349 => 202,  338 => 194,  332 => 191,  328 => 190,  317 => 182,  311 => 179,  307 => 178,  297 => 171,  291 => 168,  287 => 167,  276 => 159,  270 => 156,  266 => 155,  255 => 147,  249 => 144,  245 => 143,  234 => 135,  228 => 132,  224 => 131,  214 => 124,  208 => 121,  204 => 120,  193 => 112,  187 => 109,  183 => 108,  144 => 75,  142 => 74,  137 => 72,  133 => 71,  128 => 69,  124 => 68,  116 => 63,  111 => 61,  106 => 59,  101 => 57,  94 => 53,  70 => 32,  66 => 31,  62 => 30,  56 => 27,  52 => 26,  35 => 12,  31 => 11,  19 => 1,);
    }
}
