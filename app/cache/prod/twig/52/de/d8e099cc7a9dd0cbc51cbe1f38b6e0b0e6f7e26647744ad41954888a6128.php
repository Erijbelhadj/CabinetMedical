<?php

/* CabinetMedicalBundle::about.html.twig */
class __TwigTemplate_52ded8e099cc7a9dd0cbc51cbe1f38b6e0b0e6f7e26647744ad41954888a6128 extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html>
<head>
<title>Hospice a Medical Category Flat bootstrap Responsive website Template | About :: w3layouts</title>
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\">
<link href=\"";
        // line 7
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
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
<!-- //js -->\t
<!-- start-smoth-scrolling-->
<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/move-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/js/easing.js"), "html", null, true);
        echo "\"></script>\t
<script type=\"text/javascript\" src=\"";
        // line 27
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
\t\t\t\t\t<h3>Hospice</h3>
\t\t\t\t</a>\t
\t\t\t</div>
\t\t\t<div class=\"top-nav\">
\t\t\t\t<span class=\"menu\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/menu-icon.png"), "html", null, true);
        echo "\" alt=\"\"/></span>\t\t
\t\t\t\t<ul class=\"nav\">
                                    <br>
                                   choisir votre type d'accée
                                    <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_role", array("role" => 1)), "html", null, true);
        echo "\"> <h5>admin</h5><span class=\"badge badge-important animated bounceIn\"></span></a>
                                    </li>
                                     <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_role", array("role" => 3)), "html", null, true);
        echo "\"> <h5>secretaire</h5><span class=\"badge badge-important animated bounceIn\"></span></a>
                                    </li>
                                     <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_role", array("role" => 2)), "html", null, true);
        echo "\"><h5>medecin</h5><span class=\"badge badge-important animated bounceIn\"></span></a>
                                    </li>
                                     <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_role", array("role" => 4)), "html", null, true);
        echo "\"><h5> patient</h5><span class=\"badge badge-important animated bounceIn\"></span></a>
                                    </li>
                                    </ul>
                                    <br>
                                    <ul class=\"nav1\">
\t\t\t\t\t<li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cabinet_medical_homepage"), "html", null, true);
        echo "\" >Home</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("about"), "html", null, true);
        echo "\" class=\"active\">Apropos</a></li>
\t\t\t\t\t
\t\t\t\t\t<li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio"), "html", null, true);
        echo "\">Portfolio</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_new2"), "html", null, true);
        echo "\" >Contactez Nous</a></li>
                                        
\t\t\t\t\t<li>  ";
        // line 69
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 70
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
\t<!--about-->
\t<div class=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"work-title\">
\t\t\t\t<h3>ABOUT<span>US</span></h3>
\t\t\t</div>
\t\t\t<div class=\"about-text\">
\t\t\t\t<div class=\"col-md-4 about-text-left\">
\t\t\t\t\t<img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img14.jpg"), "html", null, true);
        echo "\"alt=\"\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 about-text-right\">
\t\t\t\t\t<h4>Cabinets </h4>
\t\t\t\t\t<p>L’augmentation des frais de gestion, la spécialisation des pratiques et le désir de proposer
les services de santé les plus complets aux patients a favorisé le développement de cabinets
médicaux structurés, soit sous forme de très grands cabinets, soit sous forme de réseaux de
médecins de famille.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t\t<div class=\"work-title\">
\t\t\t\t<h3>Notre<span>Equipe</span></h3>
\t\t\t</div>
\t\t\t<div class=\"about-team\">
\t\t\t\t<div class=\"col-md-3 about-team-grids\">
\t\t\t\t\t<img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img15.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t<div class=\"team-text\">
\t\t\t\t\t\t<h4><a href=\"#\">Mehdi</a> Abdelaziz</h4>
\t\t\t\t\t\t<p>Professionnel central du monde de la santé le médecin examine, établit un diagnostic, ordonne des examens et prescrit le traitement pharmaceutique ou hospitalier qui s'impose. Il suit ses malades et gère leur santé dans sa globalité. Il y a des médecins généralistes et des médecins spécialistes d'une pathologie.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\" col-md-3 about-team-grids\">
\t\t\t\t\t<img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img16.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t<div class=\"team-text\">
\t\t\t\t\t\t<h4><a href=\"#\">Zouari Afif</a>pédiatre</h4>
\t\t\t\t\t\t<p>Spécialisé en pédiatrie, il est engagé pour la protection du développement du petit de l’homme. Il participe à la création du service de réanimation des nouveaux-nés à Port-Royal et introduit la réanimation à l’Institut de Puériculture de Paris. Diplômé de psychopathologie de l’enfant,.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 about-team-grids\">
\t\t\t\t\t<img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img17.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t<div class=\"team-text\">
\t\t\t\t\t\t<h4><a href=\"#\">Jlassi Riadh </a> géneraliste </h4>\t\t\t\t
\t\t\t\t\t\t<p>médecin géneral convenconé avec le CNAM ,diplomé de la faculté de médecine Tunis ,ancien proffesseur inversitaire à faculté de médecine a Lyon France</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 about-team-grids\">
\t\t\t\t\t<img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/client/images/img18.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t<div class=\"team-text\">
\t\t\t\t\t\t<h4><a href=\"#\">Faten hadj Said</a> Dentiste</h4>
\t\t\t\t\t\t<p>Spécialiste en medecine dentaire , diplomé de la faculté de médecine dentaire a Monastir.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"about-skills\">
\t\t<div class=\"container\">
\t\t\t<div class=\"work-title\">
\t\t\t\t<h3>Pour quoi<span>Vous choisiez nous</span></h3>
\t\t\t</div>
\t\t\t<div class=\"about-choose\">
\t\t\t\t<div class=\"col-md-4 about-choose-info\">
\t\t\t\t\t<h4>bientôt un accès sécurisé à votre dossier médical en ligne</h4>
\t\t\t\t\t
                                        <p class=\"about-pgh\"> Nous travaillons à la mise à disposition de votre dossier médical en ligne, via un portail sécurisé. Vous pourrez ainsi accéder à toutes les informations vous concernant.    </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 about-choose-info\">
\t\t\t\t\t
                                        <h4>des horaires de consultation étendus </h4>
6 jours sur 7</h5>
                                        <p class=\"about-pgh\">     Les médecins généralistes se relaient pour assurer une bonne continuité des soins. Nous sommes ouverts de 7h à 23h en semaine, et de 10h à 18h le samedi et les jours fériés. </p>
\t\t\t\t
\t</div>
\t<!--//about-->\t
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
</html>\t";
    }

    public function getTemplateName()
    {
        return "CabinetMedicalBundle::about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 132,  209 => 125,  199 => 118,  189 => 111,  170 => 95,  139 => 70,  137 => 69,  132 => 67,  128 => 66,  123 => 64,  119 => 63,  111 => 58,  106 => 56,  101 => 54,  96 => 52,  89 => 48,  65 => 27,  61 => 26,  57 => 25,  51 => 22,  47 => 21,  30 => 7,  26 => 6,  19 => 1,);
    }
}
