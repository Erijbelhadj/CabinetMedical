<?php

/* CabinetMedicalBundle::adminTemplate.html.twig */
class __TwigTemplate_7c1ac9ba1cfd392b2e89188f759ea3d9c75c798216e656f7e7e76bd4f030c11f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'notif' => array($this, 'block_notif'),
            'shat' => array($this, 'block_shat'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
        <meta charset=\"utf-8\" />
        <title> Admin Dashboard</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"author\" />

        <!-- BEGIN PLUGIN CSS -->
        <!-- BEGIN PLUGIN CSS -->

        <!-- BEGIN PLUGIN CSS -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/pace/pace-theme-flash.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/bootstrap-datepicker/css/datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-ricksaw-chart/css/rickshaw.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" >
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-morris-chart/css/morris.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-slider/css/jquery.sidr.light.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/bootstrap-select2/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/boostrap-checkbox/css/bootstrap-checkbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
        <!-- END PLUGIN CSS -->

        <!-- BEGIN CORE CSS FRAMEWsORK -->

        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/boostrapv3/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/boostrapv3/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- END CORE CSS FRAMEWORK -->

        <!-- BEGIN CSS TEMPLATE -->
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/css/custom-icon-set.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- END CSS TEMPLATE -->

        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=\"\">
        <!-- BEGIN HEADER -->
        <div class=\"header navbar navbar-inverse \"> 
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class=\"navbar-inner\">
                <div class=\"header-seperation\"> 
                    <ul class=\"nav pull-left notifcation-center\" id=\"main-menu-toggle-wrapper\" style=\"display:none\">\t
                        <li class=\"dropdown\"> <a id=\"main-menu-toggle\" href=\"#main-menu\"  class=\"\" > <div class=\"iconset top-menu-toggle-white\"></div> </a> </li>\t\t 
                    </ul>
                    <!-- BEGIN LOGO -->\t
                    <a href=\"index.html\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "profilePicture")), "html", null, true);
        echo "\" class=\"logo\" alt=\"\"  data-src=\"";
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "profilePicture")), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "profilePicture")), "html", null, true);
        echo "\" width=\"106\" height=\"40\"/></a>
                    <!-- END LOGO --> 
                    <ul class=\"nav pull-right notifcation-center\">\t
                        <li class=\"dropdown\" id=\"header_task_bar\"> <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cabinet_medical_homepage"), "html", null, true);
        echo "\" class=\"dropdown-toggle active\" data-toggle=\"\"> <div class=\"iconset top-home\"></div> </a> </li>
                        <li class=\"dropdown\" id=\"header_inbox_bar\" > <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact"), "html", null, true);
        echo "\" class=\"dropdown-toggle\" > <div class=\"iconset top-messages\"></div>  <span class=\"badge\" id=\"msgs-badge\">2</span> </a></li>
                        <li class=\"dropdown\" id=\"portrait-chat-toggler\" style=\"display:none\"> <a href=\"#sidr\" class=\"chat-menu-toggle\"> <div class=\"iconset top-chat-white \"></div> </a> </li>        
                    </ul>
                </div>
                <!-- END RESPONSIVE MENU TOGGLER --> 
                <div class=\"header-quick-nav\" > 
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class=\"pull-left\"> 
                        <ul class=\"nav quick-section\">
                            <li class=\"quicklinks\"> <a href=\"#\" class=\"\" id=\"layout-condensed-toggle\" >
                                    <div class=\"iconset top-menu-toggle-dark\"></div>
                                </a> </li>
                        </ul>
                        <ul class=\"nav quick-section\">
                            <li class=\"quicklinks\"> <a href=\"#\" class=\"\" >
                                    <div class=\"iconset top-reload\"></div>
                                </a> </li>
                            <li class=\"quicklinks\"> <span class=\"h-seperate\"></span></li>
                            <li class=\"quicklinks\"> <a href=\"#\" class=\"\" >
                                    <div class=\"iconset top-tiles\"></div>
                                </a> </li>
                            <li class=\"m-r-10 input-prepend inside search-form no-boarder\">
                                <span class=\"add-on\"> <span class=\"iconset top-search\"></span></span>
                                <input name=\"\" type=\"text\"  class=\"no-boarder \" placeholder=\"Search Dashboard\" style=\"width:250px;\">
                            </li>
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                    <!-- BEGIN CHAT TOGGLER -->
                    <div class=\"pull-right\"> 
                        <div class=\"chat-toggler\">\t
                            <a href=\"#\" class=\"dropdown-toggle\" id=\"my-task-list\" data-placement=\"bottom\"  data-content='' data-toggle=\"dropdown\" data-original-title=\"Notifications\">
                                <div class=\"user-details\"> 
                                    <div class=\"username\">
                                        <span class=\"badge badge-important\"></span> 
\t\t\t\t\t\t\t";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
        echo " <span class=\"bold\"></span>\t\t\t\t\t\t\t\t\t
                                    </div>\t\t\t\t\t\t
                                </div> 
                                <div class=\"iconset top-down-arrow\"></div>
                            </a>\t
                            <div id=\"notification-list\" style=\"display:none\">
                                <div style=\"width:300px\">
                                    <div class=\"notification-messages info\">
                                        <div class=\"user-profile\">
                                            <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d.jpg"), "html", null, true);
        echo "\"  alt=\"\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d.jpg"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d2x.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\">
                                        </div>
                                        <div class=\"message-wrapper\">
                                            <div class=\"heading\">
                                                David Nester - Commented on your wall
                                            </div>
                                            <div class=\"description\">
                                                Meeting postponed to tomorrow
                                            </div>
                                            <div class=\"date pull-left\">
                                                A min ago
                                            </div>\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                        <div class=\"clearfix\"></div>\t\t\t\t\t\t\t\t\t
                                    </div>\t
                                    <div class=\"notification-messages danger\">
                                        <div class=\"iconholder\">
                                            <i class=\"icon-warning-sign\"></i>
                                        </div>
                                        <div class=\"message-wrapper\">
                                            <div class=\"heading\">
                                                Server load limited
                                            </div>
                                            <div class=\"description\">
                                                Database server has reached its daily capicity
                                            </div>
                                            <div class=\"date pull-left\">
                                                2 mins ago
                                            </div>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>\t
                                    <div class=\"notification-messages success\">
                                        <div class=\"user-profile\">
                                            <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/h.jpg"), "html", null, true);
        echo "\"  alt=\"\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/h.jpg"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/h2x.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\">
                                        </div>
                                        <div class=\"message-wrapper\">
                                            <div class=\"heading\">
                                                You haveve got 150 messages
                                            </div>
                                            <div class=\"description\">
                                                150 newly unread messages in your inbox
                                            </div>
                                            <div class=\"date pull-left\">
                                                An hour ago
                                            </div>\t\t\t\t\t\t\t\t\t
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>\t\t\t\t\t\t\t
                                </div>\t\t\t\t
                            </div>
                            <div class=\"profile-pic\"> 
                                <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "profilePicture")), "html", null, true);
        echo "\"  width=\"35\" height=\"35\" /> 
                            </div>       \t\t\t
                        </div>
                        <ul class=\"nav quick-section \">
                            <li class=\"quicklinks\"> 
                                <a data-toggle=\"dropdown\" class=\"dropdown-toggle  pull-right \" href=\"#\" id=\"user-options\">\t\t\t\t\t\t
                                    <div class=\"iconset top-settings-dark \"></div> \t
                                </a>
                                <ul class=\"dropdown-menu  pull-right\" role=\"menu\" aria-labelledby=\"user-options\">
                                    <li><a href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
        echo "\"> Mon profil</a>
                                    </li>
                                    <li><a href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
        echo "\">Mon agenda</a>
                                    </li>
                                    <li><a href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact"), "html", null, true);
        echo "\"> Mes messages reçus&nbsp;&nbsp;<span class=\"badge badge-important animated bounceIn\"></span></a>
                                    </li>
                                   
                                    <li class=\"divider\"></li>                
                                    <li><a href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\"><i class=\"fa fa-power-off\"></i>&nbsp;&nbsp;Log Out</a></li>
                                </ul>
                            </li> 
                            <li class=\"quicklinks\"> <span class=\"h-seperate\"></span></li> 
                            <li class=\"quicklinks\"> \t
                                <a id=\"chat-menu-toggle\" href=\"#sidr\" class=\"chat-menu-toggle\" ><div class=\"iconset top-chat-dark \"><span class=\"badge badge-important hide\" id=\"chat-message-count\">1</span></div>
                                </a> 
                                <div class=\"simple-chat-popup chat-menu-toggle hide\" >
                                    <div class=\"simple-chat-popup-arrow\"></div><div class=\"simple-chat-popup-inner\">
                                        <div style=\"width:100px\">
                                            <div class=\"semi-bold\">David Nester</div>
                                            <div class=\"message\">Hey you there </div>
                                        </div>
                                    </div>
                                </div>
                            </li> 
                        </ul>
                    </div>
                    <!-- END CHAT TOGGLER -->
                </div> 
                <!-- END TOP NAVIGATION MENU --> 

            </div>
            <!-- END TOP NAVIGATION BAR --> 
        </div>

        <!-- END HEADER --> 

        <!-- BEGIN CONTAINER -->
        <div class=\"page-container row\"> 
            <!-- BEGIN SIDEBAR -->
            <div class=\"page-sidebar\" id=\"main-menu\"> 
                <!-- BEGIN MINI-PROFILE -->
                <div class=\"user-info-wrapper\">\t
                    <div class=\"profile-wrapper\">
                        <img src=\"";
        // line 209
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "profilePicture")), "html", null, true);
        echo "\"  alt=\"\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/avatar.jpg"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/avatar2x.jpg"), "html", null, true);
        echo "\" width=\"69\" height=\"69\" />
                    </div>
                    <div class=\"user-info\">
                        <div class=\"greeting\">Welcome</div>
                        <div class=\"username\">";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
        echo "</div>
                        <div class=\"status\">Status<a href=\"#\"><div class=\"status-icon green\"></div>Online</a></div>
                    </div>
                </div>
                <!-- END MINI-PROFILE -->

                <!-- BEGIN SIDEBAR MENU -->\t
                <p class=\"menu-title\">CabinetMedical <span class=\"pull-right\"><a href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact"), "html", null, true);
        echo "\"><i class=\"fa fa-refresh\"></i></a></span></p>
                <ul>\t
                    <li class=\"start active \"> <a href=\"\"> <i class=\"icon-custom-home\"></i> <span class=\"title\">Dashboard</span> <span class=\"selected\"></span> <span class=\"badge badge-important pull-right\">5</span></a> </li>
                    <li class=\"\"> <a href=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
        echo "\"> <i class=\"fa fa-smile-o\"></i> <span class=\"title\">Mon profil</span> <span class=\"arrow \"></span> </a>

 <li class=\"\"> <a href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("securite"), "html", null, true);
        echo "\"><i class=\"fa fa-leaf\"></i> <span class=\"title\">Securité</span> <span class=\"arrow \"></span> </a>
                             <li class=\"\"> <a href=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listesec"), "html", null, true);
        echo "\"><i class=\"fa fa-leaf\"></i> <span class=\"title\">Ma Securité</span> <span class=\"arrow \"></span> </a>
           <li class=\"\"> <a href=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listeconsutation"), "html", null, true);
        echo "\"><i class=\"fa fa-leaf\"></i> <span class=\"title\">Mes Consultations</span> <span class=\"arrow \"></span> </a>
           <li class=\"\"> <a href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listerigime"), "html", null, true);
        echo "\"><i class=\"fa fa-leaf\"></i> <span class=\"title\">Mon rigime</span> <span class=\"arrow \"></span> </a>
           <li class=\"\"> <a href=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listecharge"), "html", null, true);
        echo "\"><i class=\"fa fa-leaf\"></i> <span class=\"title\">Mon Prise en charge</span> <span class=\"arrow \"></span> </a>
          
                    ";
        // line 231
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
      ";
            // line 232
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 233
                echo "      ";
                if ((((((isset($context["role"]) ? $context["role"] : null) == "ROLE_ADMIN") || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_MEDECIN")) || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_SECRETAIRE")) || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_PATIENT"))) {
                    // line 234
                    echo "

                   
                    <li class=\"\"> <a href=\"";
                    // line 237
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("actualite"), "html", null, true);
                    echo "\"> <i class=\"fa fa-flag\"></i> <span class=\"title\">Actualité</span></a></li>
                     ";
                }
                // line 239
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo "          ";
        }
        // line 241
        echo "
                    ";
        // line 242
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
      ";
            // line 243
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 244
                echo "      ";
                if (((isset($context["role"]) ? $context["role"] : null) == "ROLE_ADMIN")) {
                    // line 245
                    echo "                         
                        <li class=\"\"> <a href=\"";
                    // line 246
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact"), "html", null, true);
                    echo "\"> <i class=\"fa fa-envelope\"></i> <span class=\"title\">Email</span>  <span class=\" badge badge-disable pull-right \">13</span></a> </li>      
 ";
                }
                // line 248
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo "          ";
        }
        // line 250
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
      ";
            // line 251
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 252
                echo "      ";
                if ((((((isset($context["role"]) ? $context["role"] : null) == "ROLE_ADMIN") || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_Patient")) || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_SECRETAIRE")) || ((isset($context["role"]) ? $context["role"] : null) == "Role_MEDECIN"))) {
                    // line 253
                    echo "                        <li class=\"\"> <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cabinet"), "html", null, true);
                    echo "\"> <i class=\"fa fa-archive\"></i> <span class=\"title\">Cabinet</span> <span class=\"arrow \"></span> </a>
                            
                       
";
                }
                // line 257
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 258
            echo "          ";
        }
        // line 259
        echo "           ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
      ";
            // line 260
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 261
                echo "      ";
                if ((((((isset($context["role"]) ? $context["role"] : null) == "ROLE_ADMIN") || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_MEDECIN")) || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_SECRETAIRE")) || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_PATIENT"))) {
                    // line 262
                    echo "
                        <li class=\"\"> <a href=\"";
                    // line 263
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rigime"), "html", null, true);
                    echo "\"><i class=\"fa fa-flask\"></i> <span class=\"title\">Rigime</span> <span class=\"arrow \"></span> </a>
                            
  ";
                }
                // line 266
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "          ";
        }
        // line 268
        echo "           ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
      ";
            // line 269
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 270
                echo "      ";
                if ((((((isset($context["role"]) ? $context["role"] : null) == "ROLE_ADMIN") || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_MEDECIN")) || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_PATIENT")) || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_SECRETAIRE"))) {
                    echo "  

                        
                        <li class=\"\"> <a href=\"";
                    // line 273
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin"), "html", null, true);
                    echo "\"> <i class=\"fa fa-male\"></i> <span class=\"title\">Médecins</span></a></li>      


                       
       ";
                }
                // line 278
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 279
            echo "          ";
        }
        // line 280
        echo "          
             ";
        // line 281
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
      ";
            // line 282
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 283
                echo "           ";
                if (((isset($context["role"]) ? $context["role"] : null) == "ROLE_PATIENT")) {
                    echo " 
                         <li class=\"\"> <a href=\"";
                    // line 284
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liste"), "html", null, true);
                    echo "\"> <i class=\"fa fa-bars\"></i> <span class=\"title\">Mes Rendez_Vous</span></a></li>
                         ";
                }
                // line 286
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            echo "          ";
        }
        // line 288
        echo "             
             ";
        // line 289
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
      ";
            // line 290
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 291
                echo "           ";
                if (((((isset($context["role"]) ? $context["role"] : null) == "ROLE_ADMIN") || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_SECRETAIRE")) || ((isset($context["role"]) ? $context["role"] : null) == "MEDECIN"))) {
                    // line 292
                    echo "                        <li class=\"\"> <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rdv"), "html", null, true);
                    echo "\"> <i class=\"fa fa-bars\"></i> <span class=\"title\">Rendez_Vous</span></a></li>
                         ";
                }
                // line 294
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "          ";
        }
        // line 296
        echo "              ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
      ";
            // line 297
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 298
                echo "           ";
                if (((((isset($context["role"]) ? $context["role"] : null) == "ROLE_PATIENT") || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_Medecin")) || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_ADMIN"))) {
                    // line 299
                    echo "                        <li class=\"\"> <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultation"), "html", null, true);
                    echo "\"> <i class=\"fa fa-eye\"></i> <span class=\"title\">Consultation</span> <span class=\"arrow \"></span> </a>
                              ";
                }
                // line 301
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 302
            echo "          ";
        }
        // line 303
        echo "           ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
      ";
            // line 304
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 305
                echo "           ";
                if (((((isset($context["role"]) ? $context["role"] : null) == "ROLE_PATIENT") || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_Medecin")) || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_ADMIN"))) {
                    // line 306
                    echo "                        <li class=\"\"> <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prisecharge"), "html", null, true);
                    echo "\"> <i class=\"fa fa-smile-o\"></i> <span class=\"title\">Prise en charge </span></a></li>
                               ";
                }
                // line 308
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 309
            echo "          ";
        }
        // line 310
        echo "             ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
      ";
            // line 311
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 312
                echo "           ";
                if (((((isset($context["role"]) ? $context["role"] : null) == "ROLE_ADMIN") || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_Medecin")) || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_SECRETAIRE"))) {
                    // line 313
                    echo "                 
                        <li class=\"\"> <a href=\"";
                    // line 314
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operationmed"), "html", null, true);
                    echo "\"> <i class=\"fa fa-money\"></i> <span class=\"title\">Comptabilité</span></a></li>
 ";
                }
                // line 316
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 317
            echo "          ";
        }
        // line 318
        echo "               ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
      ";
            // line 319
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 320
                echo "           ";
                if ((((((isset($context["role"]) ? $context["role"] : null) == "ROLE_ADMIN") || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_Medecin")) || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_SECRETAIRE")) || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_PATIENT"))) {
                    // line 321
                    echo "                 
                            <li class=\"\"> <a href=\"";
                    // line 322
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aganda"), "html", null, true);
                    echo "\"> <i class=\"fa fa-calendar\"></i> <span class=\"title\">Agenda</span></a></li>
                            ";
                }
                // line 324
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 325
            echo "          ";
        }
        // line 326
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
      ";
            // line 327
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 328
                echo "      ";
                if ((((isset($context["role"]) ? $context["role"] : null) == "ROLE_ADMIN") || ((isset($context["role"]) ? $context["role"] : null) == "ROLE_MEDECIN"))) {
                    // line 329
                    echo "
                                <li class=\"\"> <a href=\"";
                    // line 330
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient"), "html", null, true);
                    echo "\"> <i class=\"fa fa-camera\"></i> <span class=\"title\">Patients</span></a></li>

                            ";
                }
                // line 333
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 334
            echo "          ";
        }
        // line 335
        echo "          ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
      ";
            // line 336
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 337
                echo "      ";
                if (((isset($context["role"]) ? $context["role"] : null) == "ROLE_ADMIN")) {
                    // line 338
                    echo "           <li class=\"\"> <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user"), "html", null, true);
                    echo "\"> <i class=\"fa fa-camera\"></i> <span class=\"title\">Users</span></a></li>

               </li>
                      ";
                }
                // line 342
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            echo "          ";
        }
        // line 344
        echo "
                                

                              
                                </ul>

                                <a href=\"#\" class=\"scrollup\">Scroll</a>
                                <div class=\"clearfix\"></div>
                                <!-- END SIDEBAR MENU --> 
                            </div>
                            <div class=\"footer-widget\">\t\t
                                <div class=\"progress transparent progress-small no-radius no-margin\">
                                    <div class=\"progress-bar progress-bar-success animate-progress-bar\" data-percentage=\"79%\" style=\"width: 79%;\"></div>\t\t
                                </div>
                                <div class=\"pull-right\">
                                    <div class=\"details-status\">
                                        <span class=\"animate-number\" data-value=\"86\" data-animation-duration=\"560\">86</span>%
                                    </div>\t
                                    <a href=\"lockscreen.html\"><i class=\"fa fa-power-off\"></i></a></div>
                            </div>
                            <!-- END SIDEBAR --> 
                            <!-- BEGIN PAGE CONTAINER-->

                            <div class=\"page-content\"> 
                                <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                                <div id=\"portlet-config\" class=\"modal hide\">
                                    <div class=\"modal-header\">
                                        <button data-dismiss=\"modal\" class=\"close\" type=\"button\"></button>
                                        <h3>Widget Settings</h3>
                                    </div>
                                    <div class=\"modal-body\"> Widget settings form goes here </div>
                                </div>
                                <div class=\"clearfix\"></div>

                                <div class=\"content\"> 
         ";
        // line 379
        $this->displayBlock('content', $context, $blocks);
        // line 849
        echo "
                                    </div>

                                </div>
   ";
        // line 853
        $this->displayBlock('shat', $context, $blocks);
        // line 930
        echo "                                <!-- END CHAT --> 
                                <!-- END CONTAINER --> 
                            </div>


                            <script src=\"";
        // line 935
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
                            <script src=\"";
        // line 936
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/boostrapv3/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
                            <script src=\"";
        // line 937
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/breakpoints.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
                            <script src=\"";
        // line 938
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-unveil/jquery.unveil.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
                            <!-- END CORE JS FRAMEWORK --> 

                            <!-- BEGIN PAGE LEVEL JS --> 
                            <script src=\"";
        // line 942
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
                            <script src=\"";
        // line 943
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
                            <script src=\"";
        // line 944
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-numberAnimate/jquery.animateNumbers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
                            <script src=\"";
        // line 945
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
                            <script src=\"";
        // line 946
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
                            <script src=\"";
        // line 947
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-block-ui/jqueryblockui.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
                            <script src=\"";
        // line 948
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/bootstrap-select2/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                            <script src=\"";
        // line 949
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-ricksaw-chart/js/raphael-min.js"), "html", null, true);
        echo "\"></script> 
                            <script src=\"";
        // line 950
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-ricksaw-chart/js/d3.v2.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 951
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 952
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-morris-chart/js/morris.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 953
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-easy-pie-chart/js/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 954
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-slider/jquery.sidr.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> \t
                            <script src=\"";
        // line 955
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> \t
                            <script src=\"";
        // line 956
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-jvectormap/js/jquery-jvectormap-us-lcc-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> \t
                            <script src=\"";
        // line 957
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-sparkline/jquery-sparkline.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 958
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 959
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-flot/jquery.flot.animator.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 960
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
                            <!-- END PAGE LEVEL PLUGINS   --> \t
                            <!-- PAGE JS --> \t
                            <script src=\"";
        // line 963
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/js/dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                            <!-- BEGIN CORE TEMPLATE JS --> 
                            <script src=\"";
        // line 965
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/js/core.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
                            <script src=\"";
        // line 966
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/js/chat.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
                            <script src=\"";
        // line 967
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
                            <!-- END CORE TEMPLATE JS -->
                        </body>
                    </html>
";
    }

    // line 379
    public function block_content($context, array $blocks = array())
    {
        // line 380
        echo "                                        <div class=\"page-title\">\t
                                            <h3>Dashboard </h3>\t\t
                                        </div>\t

                                        <div id=\"container\">
                                            <div class=\"row spacing-bottom 2col\">\t
                                                <div class=\"col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom\">\t
                                                    <div class=\"tiles blue added-margin\">
                                                        <div class=\"tiles-body\">
                                                            <div class=\"controller\">\t\t\t\t\t\t\t\t
                                                                <a href=\"javascript:;\" class=\"reload\"></a>
                                                                <a href=\"javascript:;\" class=\"remove\"></a>\t\t
                                                            </div>\t\t
                                                            <div class=\"tiles-title\">
                                                                TODAY’S SERVER LOAD
                                                            </div>\t
                                                            <div class=\"heading\">
                                                                <span class=\"animate-number\" data-value=\"26.8\" data-animation-duration=\"1200\">0</span>%

                                                            </div>
                                                            <div class=\"progress transparent progress-small no-radius\">
                                                                <div class=\"progress-bar progress-bar-white animate-progress-bar\" data-percentage=\"26.8%\"></div>
                                                            </div>\t\t\t\t\t
                                                            <div class=\"description\"><i class=\"icon-custom-up\"></i><span class=\"text-white mini-description \">&nbsp; 4% higher <span class=\"blend\">than last month</span></span></div>
                                                        </div>\t
                                                    </div>
                                                </div>
                                                <div class=\"col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom\">
                                                    <div class=\"tiles green added-margin\">
                                                        <div class=\"tiles-body\">
                                                            <div class=\"controller\">\t\t\t\t\t\t\t\t
                                                                <a href=\"javascript:;\" class=\"reload\"></a>
                                                                <a href=\"javascript:;\" class=\"remove\"></a>\t\t\t\t\t\t\t\t\t
                                                            </div>\t\t
                                                            <div class=\"tiles-title\">
                                                                TODAY’S VISITS
                                                            </div>\t
                                                            <div class=\"heading\">
                                                                <span class=\"animate-number\" data-value=\"2545665\" data-animation-duration=\"1000\">0</span>\t
                                                            </div>
                                                            <div class=\"progress transparent progress-small no-radius\">
                                                                <div class=\"progress-bar progress-bar-white animate-progress-bar\" data-percentage=\"79%\" ></div>
                                                            </div>\t\t\t\t
                                                            <div class=\"description\"><i class=\"icon-custom-up\"></i><span class=\"text-white mini-description \">&nbsp; 2% higher <span class=\"blend\">than last month</span></span></div>\t
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-3 col-sm-6 spacing-bottom\">
                                                    <div class=\"tiles red added-margin\">
                                                        <div class=\"tiles-body\">
                                                            <div class=\"controller\">\t\t\t\t\t\t\t\t
                                                                <a href=\"javascript:;\" class=\"reload\"></a>
                                                                <a href=\"javascript:;\" class=\"remove\"></a>\t\t\t\t\t\t\t\t\t\t
                                                            </div>\t
                                                            <div class=\"tiles-title\">
                                                                TODAY’S SALES
                                                            </div>\t
                                                            <div class=\"heading\">
                                                                \$ <span class=\"animate-number\" data-value=\"14500\" data-animation-duration=\"1200\">0</span>\t
                                                            </div>
                                                            <div class=\"progress transparent progress-white progress-small no-radius\">
                                                                <div class=\"progress-bar progress-bar-white animate-progress-bar\" data-percentage=\"45%\" ></div>
                                                            </div>
                                                            <div class=\"description\"><i class=\"icon-custom-up\"></i><span class=\"text-white mini-description \">&nbsp; 5% higher <span class=\"blend\">than last month</span></span></div>\t
                                                        </div>
                                                    </div>

                                                </div> 
                                                <div class=\"col-md-3 col-sm-6\">
                                                    <div class=\"tiles purple added-margin\">
                                                        <div class=\"tiles-body\">
                                                            <div class=\"controller\">\t\t\t\t\t\t\t\t
                                                                <a href=\"javascript:;\" class=\"reload\"></a>
                                                                <a href=\"javascript:;\" class=\"remove\"></a>\t\t\t\t\t\t\t\t\t
                                                            </div>\t\t
                                                            <div class=\"tiles-title\">
                                                                TODAY’S FEEDBACKS
                                                            </div>\t
                                                            <div class=\"row-fluid\">
                                                                <div class=\"heading\">
                                                                    <span class=\"animate-number\" data-value=\"1600\" data-animation-duration=\"700\">0</span>\t
                                                                </div>
                                                                <div class=\"progress transparent progress-white progress-small no-radius\">
                                                                    <div class=\"progress-bar progress-bar-white animate-progress-bar\" data-percentage=\"12%\"></div>
                                                                </div>
                                                            </div>
                                                            <div class=\"description\"><i class=\"icon-custom-up\"></i><span class=\"text-white mini-description \">&nbsp; 3% higher <span class=\"blend\">than last month</span></span></div>

                                                        </div>
                                                    </div>
                                                </div>\t\t\t
                                            </div>  
                                            <div class=\"row\">\t\t
                                                <div class=\"col-md-8 spacing-bottom\">
                                                    <div class=\"row tiles-container tiles white spacing-bottom\">\t
                                                        <div class=\"tile-more-content col-md-4 col-sm-4 no-padding\">
                                                            <div class=\"tiles green\">
                                                                <div class=\"tiles-body\">
                                                                    <div class=\"heading\">
                                                                        Statistical 
                                                                    </div>\t
                                                                    <p>Status : live</p>\t\t\t\t\t
                                                                </div>
                                                                <div class=\"tile-footer\">
                                                                    <div class=\"iconplaceholder\"><i class=\"fa fa-map-marker\"></i></div>258 Countries, 4835 Cities
                                                                </div>
                                                            </div>
                                                            <div class=\"tiles-body\" >
                                                                <ul class=\"progress-list\" >
                                                                    <li>
                                                                        <div class=\"details-wrapper\">
                                                                            <div class=\"name\">Foreign Visits</div>
                                                                            <div class=\"description\">Our Overseas visits</div>
                                                                        </div>
                                                                        <div class=\"details-status pull-right\">
                                                                            <span class=\"animate-number\" data-value=\"89\" data-animation-duration=\"800\">0</span>%
                                                                        </div>
                                                                        <div class=\"clearfix\"></div>
                                                                        <div class=\"progress progress-small no-radius\" >
                                                                            <div class=\"progress-bar progress-bar-success animate-progress-bar\" data-percentage=\"89%\" ></div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"details-wrapper\">
                                                                            <div class=\"name\">Local Visits</div>
                                                                            <div class=\"description\">Our Overseas visits</div>
                                                                        </div>
                                                                        <div class=\"details-status pull-right\">
                                                                            <span class=\"animate-number\" data-value=\"45\" data-animation-duration=\"600\">0</span>%
                                                                        </div>
                                                                        <div class=\"clearfix\"></div>
                                                                        <div class=\"progress progress-small no-radius \">
                                                                            <div class=\"progress-bar progress-bar-warning animate-progress-bar\" data-percentage=\"45%\" ></div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"details-wrapper\">
                                                                            <div class=\"name\">Other Visits</div>
                                                                            <div class=\"description\">Our Overseas visits</div>
                                                                        </div>
                                                                        <div class=\"details-status pull-right\">
                                                                            <span class=\"animate-number\" data-value=\"12\" data-animation-duration=\"200\">0</span>%
                                                                        </div>
                                                                        <div class=\"clearfix\"></div>
                                                                        <div class=\"progress progress-small no-radius\">
                                                                            <div class=\"progress-bar progress-bar-danger animate-progress-bar\" data-percentage=\"12%\" ></div>
                                                                        </div>
                                                                    </li>\t\t\t\t\t
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class=\"tiles white col-md-8 col-sm-8 no-padding\">
                                                            <div class=\"tiles-chart\">\t
                                                                <div class=\"controller\">\t\t\t\t\t\t\t\t
                                                                    <a href=\"javascript:;\" class=\"reload\"></a>
                                                                    <a href=\"javascript:;\" class=\"remove\"></a>\t\t\t\t\t\t\t\t\t
                                                                </div>\t\t\t\t\t\t\t\t  
                                                                <div class=\"tiles-body\">\t\t\t\t\t\t\t\t\t
                                                                    <div class=\"tiles-title\">GEO-LOCATIONS</div>
                                                                    <div class=\"heading\">
                                                                        8,545,654 <i class=\"fa fa-map-marker\"></i>
                                                                    </div>\t
                                                                </div>\t\t
                                                                <div id=\"world-map\" style=\"height:405px\"></div>\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>\t\t\t\t\t\t
                                                            <div class=\"clearfix\"></div>\t
                                                        </div>\t\t\t  
                                                    </div>

                                                    <div class=\"row tiles-container spacing-bottom tiles grey\">\t\t\t
                                                        <div class=\"tiles white col-md-8 col-sm-8 no-padding\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  
                                                            <div class=\"tiles-body\">\t\t
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-6 col-sm-6\">
                                                                        <div class=\"mini-chart-wrapper\">
                                                                            <div class=\"chart-details-wrapper\">
                                                                                <div class=\"chartname\">
                                                                                    New Orders
                                                                                </div>
                                                                                <div class=\"chart-value\">
                                                                                    17,555
                                                                                </div>\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                            </div>
                                                                            <div class=\"mini-chart\">
                                                                                <div id=\"mini-chart-orders\"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-6 col-sm-6\">
                                                                        <div class=\"mini-chart-wrapper\">
                                                                            <div class=\"chart-details-wrapper\">
                                                                                <div class=\"chartname\">
                                                                                    My Balance
                                                                                </div>
                                                                                <div class=\"chart-value\">
                                                                                    \$17,555
                                                                                </div>\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                            </div>
                                                                            <div class=\"mini-chart\">
                                                                                <div id=\"mini-chart-other\" ></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>\t
                                                            <br>
                                                            <div id=\"ricksaw\" ></div>\t\t\t\t\t\t\t\t\t

                                                            <div class=\"clearfix\"></div>\t
                                                        </div>\t
                                                        <div class=\"col-md-4 col-sm-4 no-padding\">
                                                            <div class=\"tiles grey \">
                                                                <div class=\"tiles white no-margin\">
                                                                    <div class=\"tiles-body\">
                                                                        <div class=\"tiles-title blend\">
                                                                            OVERALL VIEWS\t\t
                                                                        </div>
                                                                        <div class=\"heading\">
                                                                            <span data-animation-duration=\"1000\" data-value=\"432852\" class=\"animate-number\">0</span>\t
                                                                        </div>\t
                                                                        44% higher <span class=\"blend\">than last month</span>\t
                                                                    </div>
                                                                </div>\t\t\t\t\t\t
                                                                <div id=\"legend\"></div>\t\t\t\t\t\t
                                                            </div>\t
                                                        </div>\t
                                                    </div>
                                                    <div class=\"row\">\t";
        // line 608
        $this->displayBlock('notif', $context, $blocks);
        // line 672
        echo "                                                        <div class=\"col-md-4 col-sm-4 no-padding\">
                                                            <div class=\"tiles red weather-widget \">
                                                                <div class=\"tiles-body\">
                                                                    <div class=\"controller\">\t\t\t\t\t\t\t\t
                                                                        <a href=\"javascript:;\" class=\"reload\"></a>
                                                                        <a href=\"javascript:;\" class=\"remove\"></a>\t\t\t\t\t\t\t\t\t
                                                                    </div>\t
                                                                    <div class=\"tiles-title\">
                                                                        TODAY’S WEATHER
                                                                    </div>\t
                                                                    <div class=\"heading\">
                                                                        <div class=\"pull-left\">
                                                                            Tuesday
                                                                        </div>
                                                                        <div class=\"pull-right\">
                                                                            55
                                                                        </div>\t
                                                                        <div class=\"clearfix\"></div>\t\t\t\t\t\t\t\t\t
                                                                    </div>\t\t\t\t\t\t\t\t
                                                                    <div class=\"big-icon\">
                                                                        <canvas id=\"partly-cloudy-day\" width=\"120\"  height=\"120\" ></canvas>\t\t\t\t\t\t\t\t\t
                                                                    </div>\t\t\t\t\t\t\t
                                                                    <div class=\"clearfix\"></div>
                                                                </div>\t
                                                                <div class=\"tile-footer\">
                                                                    <div class=\"pull-left\">
                                                                        <canvas id=\"wind\" width=\"32\" height=\"32\"></canvas>
                                                                        <span class=\"text-white small-text-description\">Windy</span>
                                                                    </div>\t
                                                                    <div class=\"pull-right\">
                                                                        <canvas id=\"rain\" width=\"32\" height=\"32\"></canvas>
                                                                        <span class=\"text-white small-text-description\">Humidity</span>
                                                                    </div>\t
                                                                    <div class=\"clearfix\"></div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                </div>\t\t\t\t\t\t\t
                                                            </div>
                                                        </div>
                                                    </div>\t\t\t
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <div class=\"row spacing-bottom \">
                                                        <div class=\"col-md-12\">\t\t\t\t
                                                            <div class=\"tiles white added-margin\">
                                                                <div class=\"tiles-body\">
                                                                    <div class=\"controller\">\t\t\t\t\t\t\t\t
                                                                        <a href=\"javascript:;\" class=\"reload\"></a>
                                                                        <a href=\"javascript:;\" class=\"remove\"></a>\t\t\t\t\t\t\t\t\t
                                                                    </div>
                                                                    <div class=\"tiles-title\">
                                                                        SERVER LOAD
                                                                    </div>\t
                                                                    <div class=\"heading text-black \">
                                                                        250 GB
                                                                    </div>\t
                                                                    <div class=\"progress  progress-small no-radius\">
                                                                        <div class=\"progress-bar progress-bar-success animate-progress-bar\" data-percentage=\"25%\" ></div>
                                                                    </div>
                                                                    <div class=\"description\">
                                                                        <span class=\"mini-description\"><span class=\"text-black\">250GB</span> of <span class=\"text-black\">1,024GB</span> used</span>\t\t\t\t\t\t\t\t
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"tiles white added-margin\">
                                                                <div id=\"chart\">\t\t\t\t\t\t\t\t
                                                                </div>
                                                            </div>
                                                        </div>\t\t\t
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-md-12 col-sm-6 spacing-bottom\">\t\t\t\t
                                                            <div class=\"widget\">
                                                                <div class=\"widget-title dark\">
                                                                    <div class=\"pull-left \">\t\t\t\t\t\t\t\t\t
                                                                        <button class=\"btn  btn-dark  btn-small\" type=\"button\"><i class=\"fa fa-plus\"></i></button>
                                                                    </div>
                                                                    Todo list
                                                                    <div class=\"controller\">\t\t\t\t\t\t\t\t
                                                                        <a href=\"javascript:;\" class=\"reload\"></a>
                                                                        <a href=\"javascript:;\" class=\"remove\"></a>\t\t\t\t\t\t\t\t\t
                                                                    </div>
                                                                </div>
                                                                <div class=\"widget-body\">\t\t\t\t\t\t\t\t\t
                                                                    <div class=\"col-md-12\">
                                                                        <input type=\"text\" class=\"form-control dark\" id=\"date\">
                                                                    </div>
                                                                    <br>
                                                                    <div class=\"row-fluid\">
                                                                        <div class=\"checkbox check-success \t\">
                                                                            <input type=\"checkbox\" value=\"1\" id=\"chk_todo01\" class=\"todo-list\">
                                                                            <label for=\"chk_todo01\">Send email to David, new signups</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row-fluid\">
                                                                        <div class=\"checkbox check-success \t\">
                                                                            <input type=\"checkbox\" checked=\"checked\" value=\"1\" id=\"chk_todo02\" class=\"todo-list\">
                                                                            <label for=\"chk_todo02\" class=\"done\">Call Jane!!</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row-fluid\">
                                                                        <div class=\"checkbox check-success \t\">
                                                                            <input type=\"checkbox\"  value=\"1\" id=\"chk_todo03\" class=\"todo-list\">
                                                                            <label for=\"chk_todo03\">Server upgrades ASAP</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row-fluid\">
                                                                        <div class=\"checkbox check-success \t\">
                                                                            <input type=\"checkbox\" value=\"1\" id=\"chk_todo04\" class=\"todo-list\">
                                                                            <label for=\"chk_todo04\">Hello, new task</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>\t\t\t
                                                        <div class=\"col-md-12 white col-sm-6\">
                                                            <div class=\"tiles purple added-margin\" style=\"max-height:345px\">
                                                                <div class=\"tiles-body\">
                                                                    <div class=\"controller\">\t\t\t\t\t\t\t\t
                                                                        <a href=\"javascript:;\" class=\"reload\"></a>
                                                                        <a href=\"javascript:;\" class=\"remove\"></a>\t\t\t\t\t\t\t\t\t
                                                                    </div>\t\t\t\t\t\t\t
                                                                    <h3 class=\"text-white \">
                                                                        <br><br><br>
                                                                        <span class=\"semi-bold\">Steve Jobs</span> Time Capsule` is 
                                                                        Finally Unearthed on
                                                                        <span class=\"semi-bold\">Skyace News</span>
                                                                    </h3>
                                                                    <div class=\"blog-post-controls-wrapper\">
                                                                        <div class=\"blog-post-control\">
                                                                            <a class=\"text-white\" href=\"#\"><i class=\"icon-heart\"></i> 47k</a>
                                                                        </div>
                                                                        <div class=\"blog-post-control\">
                                                                            <a class=\"text-white\" href=\"#\"><i class=\"icon-comment\"></i> 1584</a>
                                                                        </div>
                                                                    </div>\t\t\t\t\t\t

                                                                    <br>
                                                                </div>\t

                                                            </div>\t
                                                            <div class=\"tiles white added-margin\">
                                                                <div class=\"tiles-body\">\t
                                                                    <div class=\"row\">
                                                                        <div class=\"user-comment-wrapper col-mid-12\">
                                                                            <div class=\"profile-wrapper\">
                                                                                <img src=\"";
        // line 816
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d.jpg"), "html", null, true);
        echo "\"  alt=\"\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d.jpg"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d2x.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\">
                                                                            </div>
                                                                            <div class=\"comment\">
                                                                                <div class=\"user-name\">
                                                                                    David <span class=\"semi-bold\">Cooper</span>
                                                                                </div>\t
                                                                                <div class=\"preview-wrapper\">
                                                                                    What's the progress on the new project?
                                                                                </div>
                                                                                <div class=\"more-details-wrapper\">
                                                                                    <div class=\"more-details\">
                                                                                        <i class=\"icon-time\"></i> 12 mins ago
                                                                                    </div>
                                                                                    <div class=\"more-details\">
                                                                                        <i class=\"icon-map-marker\"></i> Near Florida\t
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class=\"clearfix\"></div>
                                                                        </div>
                                                                    </div>\t\t\t\t\t\t
                                                                </div>\t\t\t\t
                                                            </div>\t\t\t\t
                                                        </div>\t\t\t\t
                                                    </div>

                                                </div>
                                            </div> 
                                        </div>  

                                        <!-- END PAGE --> 
           ";
    }

    // line 608
    public function block_notif($context, array $blocks = array())
    {
        echo "\t\t
                                                        <div class=\"col-md-8 col-sm-8\">
                                                            <div class=\"tiles white\">
                                                                <div class=\"tiles-body\">
                                                                    <div class=\"controller\">\t\t\t\t\t\t\t\t
                                                                        <a href=\"javascript:;\" class=\"reload\"></a>
                                                                        <a href=\"javascript:;\" class=\"remove\"></a>\t\t\t\t\t\t\t\t\t
                                                                    </div>
                                                                    <div class=\"tiles-title\">
                                                                        NOTIFICATIONS
                                                                    </div>\t\t\t\t\t\t\t
                                                                    <br>
                                                                    <div class=\"notification-messages info\">
                                                                        <div class=\"user-profile\">
                                                                            <img src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/c.jpg"), "html", null, true);
        echo "\"  alt=\"\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/c.jpg"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/c2x.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\">
                                                                        </div>
                                                                        <div class=\"message-wrapper\">
                                                                            <div class=\"heading\">
                                                                                David Nester - Commented on your wall
                                                                            </div>
                                                                            <div class=\"description\">
                                                                                Meeting postponed to tomorrow
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"date pull-right\">
                                                                            Just now
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"notification-messages danger\">
                                                                        <div class=\"iconholder\">
                                                                            <i class=\"icon-warning-sign\"></i>
                                                                        </div>
                                                                        <div class=\"message-wrapper\">
                                                                            <div class=\"heading\">
                                                                                Server load limited
                                                                            </div>
                                                                            <div class=\"description\">
                                                                                Database server has reached its daily capicity
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"date pull-right\">
                                                                            Yesterday
                                                                        </div>
                                                                    </div>\t
                                                                    <div class=\"notification-messages success\">
                                                                        <div class=\"user-profile\">
                                                                            <img src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/h.jpg"), "html", null, true);
        echo "\"  alt=\"\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/h.jpg"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/h2x.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\">
                                                                        </div>
                                                                        <div class=\"message-wrapper\">
                                                                            <div class=\"heading\">
                                                                                You have've got 150 messages
                                                                            </div>
                                                                            <div class=\"description\">
                                                                                150 newly unread messages in your inbox
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"date pull-right\">
                                                                            Yesterday
                                                                        </div>
                                                                    </div>\t\t\t\t\t\t\t\t
                                                                </div>
                                                            </div>\t\t\t\t\t
                                                        </div>\t
                                                ";
    }

    // line 853
    public function block_shat($context, array $blocks = array())
    {
        // line 854
        echo "                                <!-- BEGIN CHAT --> 
                                <div id=\"sidr\" class=\"chat-window-wrapper\">
                                    <div id=\"main-chat-wrapper\" >


                                        <div class=\"chat-window-wrapper fadeIn\" id=\"messages-wrapper\" style=\"display:none\">
                                            <div class=\"chat-header\">\t
                                                <div class=\"pull-left\">
                                                    <input type=\"text\" placeholder=\"search\">
                                                </div>\t\t
                                                <div class=\"pull-right\">
                                                    <a href=\"#\" class=\"\" ><div class=\"iconset top-settings-dark \"></div> </a>
                                                </div>\t\t\t\t\t
                                            </div>
                                            <div class=\"clearfix\"></div>\t
                                            <div class=\"chat-messages-header\">
                                                <div class=\"status online\"></div><span class=\"semi-bold\">Jane Smith(Typing..)</span>
                                                <a href=\"#\" class=\"chat-back\"><i class=\"icon-custom-cross\"></i></a>
                                            </div>
                                            <div class=\"chat-messages\">
                                                <div class=\"sent_time\">Yesterday 11:25pm</div>
                                                <div class=\"user-details-wrapper \" >
                                                    <div class=\"user-profile\">
                                                        <img src=\"";
        // line 877
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d.jpg"), "html", null, true);
        echo "\"  alt=\"\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d.jpg"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d2x.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\">
                                                    </div>
                                                    <div class=\"user-details\">
                                                        <div class=\"bubble\">\t
                                                            Hello, You there?
                                                        </div>
                                                    </div>\t\t\t\t\t
                                                    <div class=\"clearfix\"></div>
                                                    <div class=\"sent_time off\">Yesterday 11:25pm</div>
                                                </div>\t\t
                                                <div class=\"user-details-wrapper \">
                                                    <div class=\"user-profile\">
                                                        <img src=\"";
        // line 889
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d.jpg"), "html", null, true);
        echo "\"  alt=\"\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d.jpg"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d2x.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\">
                                                    </div>
                                                    <div class=\"user-details\">
                                                        <div class=\"bubble\">\t
                                                            How was the meeting?
                                                        </div>
                                                    </div>\t\t\t\t\t
                                                    <div class=\"clearfix\"></div>
                                                    <div class=\"sent_time off\">Yesterday 11:25pm</div>
                                                </div>
                                                <div class=\"user-details-wrapper \">
                                                    <div class=\"user-profile\">
                                                        <img src=\"";
        // line 901
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d.jpg"), "html", null, true);
        echo "\"  alt=\"\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d.jpg"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/d2x.jpg"), "html", null, true);
        echo "\" width=\"35\" height=\"35\">
                                                    </div>
                                                    <div class=\"user-details\">
                                                        <div class=\"bubble\">\t
                                                            Let me know when you free
                                                        </div>
                                                    </div>\t\t\t\t\t
                                                    <div class=\"clearfix\"></div>
                                                    <div class=\"sent_time off\">Yesterday 11:25pm</div>
                                                </div>
                                                <div class=\"sent_time \">Today 11:25pm</div>
                                                <div class=\"user-details-wrapper pull-right\">
                                                    <div class=\"user-details\">
                                                        <div class=\"bubble sender\">\t
                                                            Let me know when you free
                                                        </div>
                                                    </div>\t\t\t\t\t
                                                    <div class=\"clearfix\"></div>
                                                    <div class=\"sent_time off\">Sent On Tue, 2:45pm</div>
                                                </div>\t\t
                                            </div>
                                        </div>
                                        <div class=\"chat-input-wrapper\" style=\"display:none\">
                                            <textarea id=\"chat-message-input\" rows=\"1\" placeholder=\"Type your message\"></textarea>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </div>
 ";
    }

    public function getTemplateName()
    {
        return "CabinetMedicalBundle::adminTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1506 => 901,  1487 => 889,  1468 => 877,  1443 => 854,  1440 => 853,  1414 => 654,  1375 => 622,  1357 => 608,  1316 => 816,  1170 => 672,  1168 => 608,  938 => 380,  935 => 379,  926 => 967,  922 => 966,  918 => 965,  913 => 963,  907 => 960,  903 => 959,  899 => 958,  895 => 957,  891 => 956,  887 => 955,  883 => 954,  879 => 953,  875 => 952,  871 => 951,  867 => 950,  863 => 949,  859 => 948,  855 => 947,  851 => 946,  847 => 945,  843 => 944,  839 => 943,  835 => 942,  828 => 938,  824 => 937,  820 => 936,  816 => 935,  809 => 930,  807 => 853,  801 => 849,  799 => 379,  762 => 344,  759 => 343,  753 => 342,  745 => 338,  742 => 337,  738 => 336,  733 => 335,  730 => 334,  724 => 333,  718 => 330,  715 => 329,  712 => 328,  708 => 327,  704 => 326,  701 => 325,  695 => 324,  690 => 322,  687 => 321,  684 => 320,  680 => 319,  675 => 318,  672 => 317,  666 => 316,  661 => 314,  658 => 313,  655 => 312,  651 => 311,  646 => 310,  643 => 309,  637 => 308,  631 => 306,  628 => 305,  624 => 304,  619 => 303,  616 => 302,  610 => 301,  604 => 299,  601 => 298,  597 => 297,  592 => 296,  589 => 295,  583 => 294,  577 => 292,  574 => 291,  570 => 290,  566 => 289,  563 => 288,  560 => 287,  554 => 286,  549 => 284,  544 => 283,  540 => 282,  536 => 281,  533 => 280,  530 => 279,  524 => 278,  516 => 273,  509 => 270,  505 => 269,  500 => 268,  497 => 267,  491 => 266,  485 => 263,  482 => 262,  479 => 261,  475 => 260,  470 => 259,  467 => 258,  461 => 257,  453 => 253,  450 => 252,  446 => 251,  442 => 250,  439 => 249,  433 => 248,  428 => 246,  425 => 245,  422 => 244,  418 => 243,  414 => 242,  411 => 241,  408 => 240,  402 => 239,  397 => 237,  392 => 234,  389 => 233,  385 => 232,  381 => 231,  376 => 229,  372 => 228,  368 => 227,  364 => 226,  360 => 225,  355 => 223,  349 => 220,  339 => 213,  328 => 209,  290 => 174,  283 => 170,  278 => 168,  273 => 166,  261 => 157,  236 => 139,  195 => 105,  183 => 96,  145 => 61,  141 => 60,  131 => 57,  112 => 41,  106 => 38,  102 => 37,  98 => 36,  91 => 32,  87 => 31,  83 => 30,  79 => 29,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  43 => 17,  39 => 16,  22 => 1,  242 => 178,  203 => 146,  185 => 132,  178 => 128,  164 => 120,  158 => 117,  147 => 113,  143 => 111,  139 => 110,  32 => 5,  29 => 4,);
    }
}
