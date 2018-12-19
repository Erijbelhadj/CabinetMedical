<?php

/* CabinetMedicalBundle:contact:contact.html.twig */
class __TwigTemplate_cba5a88a5ccdeb182ec74ccecae0c9636478a431b13f1a949bcb24affaf92bbf extends Twig_Template
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
<title>Cabinet Médical</title>
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
\t\t\t\t\t<h3>CabinetMédical</h3>
\t\t\t\t</a>\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"top-nav\">
\t\t\t\t<span class=\"menu\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/menu-icon.png"), "html", null, true);
        echo "\" alt=\"\"/></span>\t\t
\t\t\t\t\t<ul class=\"nav\">
                                    <br>
                                   choisir votre type d'accée
                                    <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_role", array("role" => 1)), "html", null, true);
        echo "\"> <h5>admin</h5><span class=\"badge badge-important animated bounceIn\"></span></a>
                                    </li>
                                     <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_role", array("role" => 3)), "html", null, true);
        echo "\"> <h5>secretaire</h5><span class=\"badge badge-important animated bounceIn\"></span></a>
                                    </li>
                                     <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_role", array("role" => 2)), "html", null, true);
        echo "\"><h5>medecin</h5><span class=\"badge badge-important animated bounceIn\"></span></a>
                                    </li>
                                     <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_role", array("role" => 4)), "html", null, true);
        echo "\"><h5> patient</h5><span class=\"badge badge-important animated bounceIn\"></span></a>
                                    </li>
                                    </ul>
                                    <br>
                                    <ul class=\"nav1\">
\t\t\t\t\t<li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cabinet_medical_homepage"), "html", null, true);
        echo "\" >Home</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("about"), "html", null, true);
        echo "\" class=\"active\">Apropos</a></li>
\t\t\t\t\t
\t\t\t\t\t<li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio"), "html", null, true);
        echo "\">Portfolio</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_new2"), "html", null, true);
        echo "\"class=\"active\" >Contactez Nous</a></li>
                                        
\t\t\t\t\t<li>  ";
        // line 75
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 76
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
\t<!--contact-->
\t<div class=\"contact\">
\t\t<div class=\"container\">
\t\t\t<div class=\"work-title\">
\t\t\t\t<h3>CONTACTEZ<span>NOUS</span></h3>
\t\t\t</div>
\t\t\t<div class=\"contact-infom\">
\t\t\t\t";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 101
            echo "    <div class=\"flash-notice\">
        ";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "\t\t\t</div>
\t\t\t<div class=\"address\">
\t\t\t\t<div class=\"col-md-4 address-grids\">
\t\t\t\t\t<h4>ADRESSE :</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"home\"> </li>
\t\t\t\t\t\t<li><p>Eiusmod Tempor inc<br>
\t\t\t\t\t\t\t\tSt Dolore Place,<br>
\t\t\t\t\t\t\t\tKingsport 56777</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 address-grids\">
\t\t\t\t\t<h4>CONTACT NO :</h4>
\t\t\t\t\t<p><span class=\"phn\"></span>+2 800 544 6035</p>
\t\t\t\t\t<p><span class=\"fax\"></span>+2 100 889 9466</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 address-grids\">
\t\t\t\t\t<h4>EMAIL :</h4>
\t\t\t\t\t<p><span class=\"mail\"></span><a href=\"mailto:example@mail.com\">mail@example.com</a></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>\t\t
\t\t\t<div class=\"contact-form\">
\t\t\t\t<h4>CONTACT FORM</h4>
\t\t\t\t<form action=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_create2"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t\t   ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t<button  type=\"submit\" class=\"btn1\">Submit</button>
\t\t\t\t</form>
\t\t\t</div>\t
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"work-title\">
\t\t\t\t<h3>FIND<span>US</span></h3>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"map\">\t
\t\t\t<div class=\"map\">\t
\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1616.9468627388826!2d10.614336821429559!3d35.85160937553098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xdb14ae066437ecb7!2sCabinet+Dr+Jihene+Kehila+Ep+Mahjoub+M%C3%A9decin+dentiste!5e0!3m2!1sfr!2stn!4v1433882466583\"  frameborder=\"0\" style=\"border:0\"></iframe>
\t\t</div>
\t\t</div>
\t</div>
\t<!--//contact-->
\t<!--footer-->
\t<div class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-left\">
\t\t\t\t<a href=\"index.html\">CabinetMédical</a>
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
</html>\t



 ";
    }

    public function getTemplateName()
    {
        return "CabinetMedicalBundle:contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 131,  218 => 130,  191 => 105,  182 => 102,  179 => 101,  175 => 100,  145 => 76,  143 => 75,  138 => 73,  134 => 72,  129 => 70,  125 => 69,  117 => 64,  112 => 62,  107 => 60,  102 => 58,  95 => 54,  70 => 32,  66 => 31,  62 => 30,  56 => 27,  52 => 26,  35 => 12,  31 => 11,  19 => 1,);
    }
}
