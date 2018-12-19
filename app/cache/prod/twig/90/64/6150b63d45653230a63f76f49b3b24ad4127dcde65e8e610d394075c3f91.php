<?php

/* CabinetMedicalBundle:Default:admin.html.twig */
class __TwigTemplate_90646150b63d45653230a63f76f49b3b24ad4127dcde65e8e610d394075c3f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CabinetMedicalBundle::adminTemplate.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'notif' => array($this, 'block_notif'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CabinetMedicalBundle::adminTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"page-title\">\t
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
                                                <h3 style=\"color: #ffffff\"> Espace Admin</h3>
                                            </div>\t
                                            <div class=\"heading\">
                                                <span class=\"animate-number\" data-value=\"26.8\" data-animation-duration=\"1200\"></span>

                                            </div>
                                            <div class=\"progress transparent progress-small no-radius\">
                                                <div class=\"progress-bar progress-bar-white animate-progress-bar\" data-percentage=\"26.8%\"></div>
                                            </div>\t\t\t\t\t
                                            <div class=\"description\"><i class=\"icon-custom-up\"></i><span class=\"text-white mini-description \">&nbsp;<span class=\"blend\"></span></span></div>
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
                                               <h3 style=\"color: #ffffff\"> Espace Médecin</h3>
                                            </div>\t
                                            <div class=\"heading\">
                                                <span class=\"animate-number\" data-value=\"2545665\" data-animation-duration=\"1000\"></span>\t
                                            </div>
                                            <div class=\"progress transparent progress-small no-radius\">
                                                <div class=\"progress-bar progress-bar-white animate-progress-bar\" data-percentage=\"79%\" ></div>
                                            </div>\t\t\t\t
                                            <div class=\"description\"><i class=\"icon-custom-up\"></i><span class=\"text-white mini-description \">&nbsp;<span class=\"blend\"></span></span></div>\t
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
                                                <h3 style=\"color: #ffffff\">Espace Sécretaire</h3>
                                            </div>\t
                                            <div class=\"heading\">
                                                 <span class=\"animate-number\" data-value=\"14500\" data-animation-duration=\"1200\"></span>\t
                                            </div>
                                            <div class=\"progress transparent progress-white progress-small no-radius\">
                                                <div class=\"progress-bar progress-bar-white animate-progress-bar\" data-percentage=\"45%\" ></div>
                                            </div>
                                            <div class=\"description\"><i class=\"icon-custom-up\"></i><span class=\"text-white mini-description \">&nbsp;<span class=\"blend\"></span></span></div>\t
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
                                              <h3 style=\"color: #ffffff\">  Espace Patient </h3>
                                            </div>\t
                                            <div class=\"row-fluid\">
                                                <div class=\"heading\">
                                                    <span class=\"animate-number\" data-value=\"1600\" data-animation-duration=\"700\"></span>\t
                                                </div>
                                                <div class=\"progress transparent progress-white progress-small no-radius\">
                                                    <div class=\"progress-bar progress-bar-white animate-progress-bar\" data-percentage=\"12%\"></div>
                                                </div>
                                            </div>
                                            <div class=\"description\"><i class=\"icon-custom-up\"></i><span class=\"text-white mini-description \">&nbsp;<span class=\"blend\"></span></span></div>

                                        </div>
                                    </div>
                                </div>\t\t\t
                            </div> </div> 
\t\t
                                        <div class=\"col-md-8 col-sm-8\">
                                            <div class=\"tiles white\">
                                                <div class=\"tiles-body\">
                                                    <div class=\"controller\">\t\t\t\t\t\t\t\t
                                                        <a href=\"javascript:;\" class=\"reload\"></a>
                                                        <a href=\"javascript:;\" class=\"remove\"></a>\t\t\t\t\t\t\t\t\t
                                                    </div>
                                                    <div class=\"tiles-title\">
                                                        Messages
                                                    </div>\t\t\t\t\t\t\t
                                                    <br>
                                                     ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 111
            echo "                                                    <div class=\"notification-messages info\">
                                                        <div class=\"user-profile\">
                                                            <img src=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/c.jpg"), "html", null, true);
            echo "\"  alt=\"\" data-src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/c.jpg"), "html", null, true);
            echo "\" data-src-retina=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/img/profiles/c2x.jpg"), "html", null, true);
            echo "\" width=\"35\" height=\"35\">
                                                        </div>
                                                        <div class=\"message-wrapper\">
                                                            <div class=\"heading\">
                                                                 ";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nom"), "html", null, true);
            echo " - Vous a envoyé un mesage
                                                            </div>
                                                            <div class=\"description\">
                                                                ";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "msg"), "html", null, true);
            echo "
                                                            </div>
                                                        </div>
                                                        <div class=\"date pull-right\">
                                                            Today
                                                        </div>
                                                    </div>
                                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                                                </div>
                                            </div>\t\t\t\t\t
                                        </div>\t
 ";
    }

    // line 132
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
        // line 146
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
        // line 178
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

    public function getTemplateName()
    {
        return "CabinetMedicalBundle:Default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 178,  203 => 146,  185 => 132,  178 => 128,  164 => 120,  158 => 117,  147 => 113,  143 => 111,  139 => 110,  32 => 5,  29 => 4,);
    }
}
