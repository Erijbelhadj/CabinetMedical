<?php

/* CabinetMedicalBundle::base.html.twig */
class __TwigTemplate_4f8f34f83f2d08cf5327da4a95b00124472ed6b3d35102a20ab328442b03ec97 extends Twig_Template
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
<title>Cabinet Medical</title>
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\">
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/css/style.css"), "html", null, true);
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
\t\t\t\t\t<h3>Cabinet Médical</h3>
\t\t\t\t</a>\t
\t\t\t</div>
\t\t\t<div class=\"top-nav\">
\t\t\t\t<span class=\"menu\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/menu-icon.png"), "html", null, true);
        echo "\"alt=\"\"/></span>\t\t
\t\t\t\t<ul class=\"nav\">
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
                                                                       ";
        // line 65
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "<li> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin"), "html", null, true);
            echo "\">Espace Privé</a></li> ";
        }
        // line 66
        echo "                                    </ul>
                                    <br>
                                    <ul class=\"nav1\">
\t\t\t\t\t<li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cabinet_medical_homepage"), "html", null, true);
        echo "\" class=\"active\">Acceuil</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("about"), "html", null, true);
        echo "\">Apropos</a></li>
\t\t\t\t\t
\t\t\t\t\t<li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio"), "html", null, true);
        echo "\">Profil</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_new2"), "html", null, true);
        echo "\" >Contactez Nous</a></li>
                                        
\t\t\t\t\t<li>  ";
        // line 75
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 76
            echo "   <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\"> Deconnexion</a>
   ";
        } else {
            // line 77
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Connexion</a>
";
        }
        // line 78
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
\t<!--banner-->
\t<div class=\"banner\">
\t\t<!--//End-slider-script -->
\t\t\t<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t <script>
\t\t\t\t// You can also use \"\$(window).load(function() {\"
\t\t\t\t\$(function () {
\t\t\t\t  // Slideshow1
\t\t\t\t  \$(\"#slider3\").responsiveSlides({
\t\t\t\t\tauto: true,
\t\t\t\t\tpager: false,
\t\t\t\t\tnav: true,
\t\t\t\t\tspeed: 500,
\t\t\t\t\tnamespace: \"callbacks\",
\t\t\t\t\tbefore: function () {
\t\t\t\t\t  \$('.events').append(\"<li>before event fired.</li>\");
\t\t\t\t\t},
\t\t\t\t\tafter: function () {
\t\t\t\t\t  \$('.events').append(\"<li>after event fired.</li>\");
\t\t\t\t\t}
\t\t\t\t  });
\t\t\t
\t\t\t\t});
\t\t\t  </script>
\t\t\t<div  id=\"top\" class=\"callbacks_container\">
\t\t\t\t<ul class=\"rslides\" id=\"slider3\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/banner1.jpg"), "html", null, true);
        echo "\"alt=\"\" title=\"\"/>\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/banner2.jpg"), "html", null, true);
        echo " alt=\"\" title=\"\"/>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t</div>
\t<div class=\"clearfix\"> </div>
\t<!--//banner-->
\t<!--work-->
\t<div class=\"work\">
\t\t<div class=\"container\">
\t\t\t<div class=\"work-title\">
\t\t\t\t<h3>Nos<span>Services</span></h3>
\t\t\t</div>
\t\t\t<!--//End-slider-script -->
\t\t\t\t<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/responsiveslides.min.js"), "html", null, true);
        echo "\"> </script>
\t\t\t\t <script>
\t\t\t\t\t// You can also use \"\$(window).load(function() {\"
\t\t\t\t\t\$(function () {
\t\t\t\t\t  // Slideshow 4
\t\t\t\t\t  \$(\"#slider4\").responsiveSlides({
\t\t\t\t\t\tauto:true,
\t\t\t\t\t\tpager: false,
\t\t\t\t\t\tnav: true,
\t\t\t\t\t\tspeed: 500,
\t\t\t\t\t\tnamespace: \"callbacks\",
\t\t\t\t\t\tbefore: function () {
\t\t\t\t\t\t  \$('.events').append(\"<li>before event fired.</li>\");
\t\t\t\t\t\t},
\t\t\t\t\t\tafter: function () {
\t\t\t\t\t\t  \$('.events').append(\"<li>after event fired.</li>\");
\t\t\t\t\t\t}
\t\t\t\t\t  });
\t\t\t\t
\t\t\t\t\t});
\t\t\t\t  </script>
\t\t\t\t<div id=\"top\" class=\"callbacks_container\">
\t\t\t\t\t<ul class=\"rslides\" id=\"slider4\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"work-grids\">
\t\t\t\t\t\t\t\t<div class=\"work-grids-info\">
\t\t\t\t\t\t\t\t\t<div class=\"work-grids-text\">
\t\t\t\t\t\t\t\t\t\t<h4>Prise des rendez_vous</h4>
\t\t\t\t\t\t\t\t\t\t<h3>EN LIGNE</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"work-image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"work-gallery\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img2.jpg"), "html", null, true);
        echo "\"alt=\"\" title=\"img\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"figcaption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"singlepage.html\" class=\"cptn-top\"> </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"singlepage.html\" class=\"cptn-midle\"> </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"singlepage.html\" class=\"cpnt-btm\"> </a>\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"work-like\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"eye\"> </span>327</li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"chat\">49</a></li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"work-captn\"> </span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"work-grids-info\">
\t\t\t\t\t\t\t\t\t<div class=\"work-grids-text\">
\t\t\t\t\t\t\t\t\t\t<h4>Consulter Profil</h4>
\t\t\t\t\t\t\t\t\t\t<h3>Patient</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"work-gallery\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img3.jpg"), "html", null, true);
        echo "\"alt=\"\" title=\"image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"figcaption\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"singlepage.html\" class=\"cptn-top\"> </a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"singlepage.html\" class=\"cptn-midle\"> </a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"singlepage.html\" class=\"cpnt-btm\"> </a>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"work-like\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"eye\"> </span>327 </li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"chat\">49</a> </li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"work-captn\"> </span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"work-grids-info\">
\t\t\t\t\t\t\t\t\t<div class=\"work-grids-text\">
\t\t\t\t\t\t\t\t\t\t<h4>Contactez Médecin</h4>
\t\t\t\t\t\t\t\t\t\t<h3>Patient</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"work-gallery\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img4.jpg"), "html", null, true);
        echo "\"alt=\"\" title=\"image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"figcaption\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"singlepage.html\" class=\"cptn-top\"> </a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"singlepage.html\" class=\"cptn-midle\"> </a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"singlepage.html\" class=\"cpnt-btm\"> </a>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"work-like\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"eye\"> </span>327 </li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"chat\">49</a> </li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"work-captn\"> </span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"work-grids-info\">
\t\t\t\t\t\t\t\t\t<div class=\"work-grids-text\">
\t\t\t\t\t\t\t\t\t\t<h4>Prise en charge</h4>
\t\t\t\t\t\t\t\t\t\t<h3>Patient</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"work-gallery\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img5.jpg"), "html", null, true);
        echo "\"alt=\"\" title=\"image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"figcaption\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"singlepage.html\" class=\"cptn-top\"> </a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"singlepage.html\" class=\"cptn-midle\"> </a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"singlepage.html\" class=\"cpnt-btm\"> </a>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"work-like\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"eye\"> </span>327 </li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"chat\">49</a> </li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"work-captn\"> </span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>\t
\t\t</div>
\t</div>
\t<!--//work-->
\t<!--counting-->
\t<div class=\"video\">
\t\t<div class=\"container\">
\t\t\t<h3>Qui somme <span>Nous?</span></h3>
\t\t\t<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/f9CVzpMqIIs\" frameborder=\"0\" allowfullscreen> </iframe>\t\t
\t\t</div>\t
\t</div>
\t<!--//counting-->
\t<!--content-->
\t<div class=\"content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"content-grids\">
\t\t\t\t<div class=\"col-md-8 humble\">
\t\t\t\t\t<div class=\"work-title humble-title\">
\t\t\t\t\t\t<h3>NOS<span>PLUS</span></h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 humble-grids\">
\t\t\t\t\t\t<div class=\"content-left\">
\t\t\t\t\t\t\t<a href=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img1.jpg"), "html", null, true);
        echo "\" class=\"b-link-stripe b-animate-go   swipebox\"  title=\"\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t<div class=\"b-wrapper\">
\t\t\t\t\t\t\t\t\t<h2 class=\"b-animate1 b-from-left    b-delay03 \">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/icon10.png"), "html", null, true);
        echo "\" class=\"zoom\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</h2>\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h4>Notres Equipe</h4>
\t\t\t\t\t\t\t<p>Nous somme une équipe professionnelle . </p>
\t\t\t\t\t\t\t<a class=\"rd-more\" href=\"singlepage.html\">Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 humble-grids\">
\t\t\t\t\t\t<div class=\"content-left\">
\t\t\t\t\t\t\t<a href=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img37.jpg"), "html", null, true);
        echo "\" class=\"b-link-stripe b-animate-go   swipebox\"  title=\"\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img37.jpg"), "html", null, true);
        echo "\"alt=\"\" />
\t\t\t\t\t\t\t\t<div class=\"b-wrapper\">
\t\t\t\t\t\t\t\t\t<h2 class=\"b-animate1 b-from-left    b-delay03 \">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/icon10.png"), "html", null, true);
        echo "\" class=\"zoom\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</h2>\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h4>Nos médecins</h4>
\t\t\t\t\t\t\t<p>Des médecins professionnelles. </p>
\t\t\t\t\t\t\t<a class=\"rd-more\" href=\"singlepage.html\">Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/css/swipebox.css"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/jquery.swipebox.min.js"), "html", null, true);
        echo "\"></script> 
\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\tjQuery(function(\$) {
\t\t\t\t\t\t\t\t\$(\".swipebox\").swipebox();
\t\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 testi\">
\t\t\t\t\t<div class=\"work-title testi-title\">
\t\t\t\t\t\t<h3>Nos<span>Actualités</span> </h3>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t<!--//End-slider-script -->
\t\t\t\t\t<script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t <script>
\t\t\t\t\t\t// You can also use \"\$(window).load(function() {\"
\t\t\t\t\t\t\$(function () {
\t\t\t\t\t\t  // Slideshow 5
\t\t\t\t\t\t  \$(\"#slider5\").responsiveSlides({
\t\t\t\t\t\t\tauto: true,
\t\t\t\t\t\t\tpager: false,
\t\t\t\t\t\t\tnav: true,
\t\t\t\t\t\t\tspeed: 500,
\t\t\t\t\t\t\tnamespace: \"callbacks\",
\t\t\t\t\t\t\tbefore: function () {
\t\t\t\t\t\t\t  \$('.events').append(\"<li>before event fired.</li>\");
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tafter: function () {
\t\t\t\t\t\t\t  \$('.events').append(\"<li>after event fired.</li>\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t  });
\t\t\t\t\t
\t\t\t\t\t\t});
\t\t\t\t\t  </script>
\t\t\t\t\t<div  id=\"top\" class=\"callbacks_container\">
\t\t\t\t\t\t<ul class=\"rslides\" id=\"slider5\">
\t\t\t\t\t\t\t<li> ";
        // line 351
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 352
            echo "\t\t\t\t\t\t\t\t<div class=\"testi-slider\">
\t\t\t\t\t\t\t\t\t<div class=\"testi-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 354
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image")), "html", null, true);
            echo "\" width =\"350px\" height=\"50px\" alt=\"\" title=\"image\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h4>";
            // line 356
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo " </h4> <br>se déroulera le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
            echo ".
\t\t\t\t\t\t\t\t\t<p>";
            // line 357
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "text");
            echo ".</p>
\t\t\t\t\t\t\t\t\t<div class=\"testi-subscript\">
\t\t\t\t\t\t\t\t\t\t<p><a href=\"singlepage.html\">Ajouté par ";
            // line 359
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "html", null, true);
            echo ",</a></p>
\t\t\t\t\t\t\t\t\t\t<span class=\"sbscrpt\"> </span>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t</div>
                                                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>\t
\t</div>
\t<!--//content-->
\t<div class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-left\">
\t\t\t\t<a href=\"index.html\">Cabinet Médical </a>
\t\t\t</div>
\t\t\t<div class=\"footer-right\">
\t\t\t\t<p>© 2015 All rights reserved <a href=\"http://w3layouts.com/\"> </a></p>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t</div>
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
\t<!--//smooth-scrolling-of-move-up-->\t
</body>
</html>\t";
    }

    public function getTemplateName()
    {
        return "CabinetMedicalBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 364,  514 => 359,  509 => 357,  503 => 356,  498 => 354,  494 => 352,  490 => 351,  464 => 328,  448 => 315,  444 => 314,  432 => 305,  426 => 302,  422 => 301,  408 => 290,  402 => 287,  398 => 286,  350 => 241,  324 => 218,  298 => 195,  271 => 171,  237 => 140,  220 => 126,  214 => 123,  187 => 99,  164 => 78,  158 => 77,  152 => 76,  150 => 75,  145 => 73,  141 => 72,  136 => 70,  132 => 69,  127 => 66,  121 => 65,  116 => 63,  111 => 61,  106 => 59,  101 => 57,  94 => 53,  70 => 32,  66 => 31,  62 => 30,  56 => 27,  52 => 26,  35 => 12,  31 => 11,  19 => 1,);
    }
}
