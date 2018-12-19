<?php

/* CabinetMedicalBundle:rdv:show.html.twig */
class __TwigTemplate_a089fdf30688f522fa3967255ace5e363b173c18eeac25aa3dba017675232d89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CabinetMedicalBundle::adminTemplate.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/jquery-datatable/css/jquery.dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/boostrap-checkbox/css/bootstrap-checkbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/datatables-responsive/css/datatables.responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/jquery-datatable/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/jquery-datatable/extra/js/TableTools.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/datatables-responsive/js/datatables.responsive.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/datatables-responsive/js/lodash.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/js/datatables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
              <h4>Détail <span class=\"semi-bold\">Rendez_vous</span></h4>
              <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body no-border\">    
                <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rdv"), "html", null, true);
        echo "\" data-color=\"rgb(255, 255, 255)\" data-color-format=\"hex\" id=\"cp4\" class=\"btn btn-primary my-colorpicker-control\" href=\"#\" data-colorpicker-guid=\"1\"><i class=\"fa fa-reply-all\">  Retourner à la liste</i></a>
               <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rdv_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" data-color=\"rgb(255, 255, 255)\" data-color-format=\"hex\" id=\"cp4\" class=\"btn btn-warning my-colorpicker-control\" href=\"#\" data-colorpicker-guid=\"1\"><i class=\"fa fa-edit\"> Modifier le rendez vous</i></a>
                     <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rd_deletee", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" data-color=\"rgb(255, 255, 255)\" data-color-format=\"hex\" id=\"cp4\" class=\"btn btn-danger my-colorpicker-control\" href=\"#\" data-colorpicker-guid=\"1\"><i class=\"fa fa-times fa fa-white\"> Supprimer</i></a>
                <br><br>  
                <br>
                <div class=\"form-group\">
                  <label class=\"form-label\"></label>
                  <h5  class=\"semi-bold text-black\">Titre:</h5>
                  <h4><i>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
        echo " </i></h4>
                   <label class=\"form-label\"></label>
                  <h5  class=\"semi-bold text-black\">Numéro:</h5>
                  <h4><i>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "num"), "html", null, true);
        echo " </i></h4>
                   
              ";
        // line 39
        echo "               <h5 class=\"text-right text-black\">Date de rendez_vous</h5>
            <h5 class=\"text-right semi-bold text-black\">";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
        echo " </h5>
                </div>
                
               
           
                <div class=\"grid-title no-border\">
                <h4>Détail <span class=\"semi-bold\">Médecins</span></h4>
              
            </div>
            <div class=\"grid-body no-border\">

                <p><img style= \"border: 3px solid; color: #0aa699;\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "med"), "usm"), "profilePicture")), "html", null, true);
        echo "\"   alt=\"\" width=\"400\" height=\"190\"></p>
                <br
                  
                       
                     
                                </div>
 ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "med"), "usm"), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "med"), "usm"), "prenom"), "html", null, true);
        echo " qui a comme Spécialité ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "med"), "specialite"), "html", null, true);
        echo " et le numéro de télephone ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "med"), "usm"), "phone"), "html", null, true);
        echo ",</i></a><br>

                <div class=\"clearfix\"></div>
            </div>
                
             <div class=\"clearfix\"></div><br><br>
                        <a data-color=\"rgb(255, 255, 255)\" data-color-format=\"hex\" id=\"cp4\" class=\"btn btn-primary my-colorpicker-control\" href=\"#\" data-colorpicker-guid=\"1\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
        echo " Ajouté par </a> <br>
                        <br>
                        <div class=\"clearfix\"></div>   
          </div>
        </div>
         
 
        
       <div class=\"clearfix\"></div>
            </div>
         
        
         <div class=\"col-md-6\">
        <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
                <h4>Informations <span class=\"semi-bold\">Patient</span></h4>
                <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body no-border\">

                <p><img style= \"border: 3px solid; color: #0aa699;\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "patient"), "us"), "profilePicture")), "html", null, true);
        echo "\"   alt=\"\" width=\"460\" height=\"190\"></p>
                <br
                    
                     
                        
                                </div>
 ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "patient"), "us"), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "patient"), "us"), "prenom"), "html", null, true);
        echo " qui a le code cnam ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "patient"), "codecnam"), "html", null, true);
        echo ", l'allergie ";
        echo $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "patient"), "allergie");
        echo ", l'antecedant ";
        echo $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "patient"), "antecedent");
        echo " et l'handicape ";
        echo $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "patient"), "handicape");
        echo "

               
                </div>
                <div class=\"grid-title no-border\">
                <h4>Détail <span class=\"semi-bold\">Cabinet</span></h4>
              
            </div>  
            <div class=\"grid-body no-border\">

                <p><img style= \"border: 3px solid; color: #0aa699;\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/images/cabinet.jpg"), "html", null, true);
        echo "\"   alt=\"\" width=\"400\" height=\"190\"></p>
                <br
                  
                       
                     
                                </div>
 <label class=\"form-label\"></label>
                  <h5  class=\"semi-bold text-black\">Nom:</h5>
                  <h4><i>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cabinet"), "nom"), "html", null, true);
        echo " </i></h4>
                   <label class=\"form-label\"></label>
                  <h5  class=\"semi-bold text-black\">Adresse:</h5>
                  <h4><i>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cabinet"), "adresse"), "html", null, true);
        echo " </i></h4>
                   <h5  class=\"semi-bold text-black\">Email:</h5>
                  <h4><i>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cabinet"), "email"), "html", null, true);
        echo " </i></h4>
                   <h5  class=\"semi-bold text-black\">Télephone:</h5>
                  <h4><i>";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cabinet"), "phone"), "html", null, true);
        echo " </i></h4>
                  <h5  class=\"semi-bold text-black\">Télephone Mobile:</h5>
                  <h4><i>";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cabinet"), "phonem"), "html", null, true);
        echo " </i></h4>
                  <h5  class=\"semi-bold text-black\">Fax:</h5>
                  <h4><i>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cabinet"), "fax"), "html", null, true);
        echo " </i></h4>
                
                    </div>
            </div>
            
       
          </div>


  </div>
        
        

 ";
    }

    public function getTemplateName()
    {
        return "CabinetMedicalBundle:rdv:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 118,  232 => 116,  227 => 114,  222 => 112,  217 => 110,  211 => 107,  200 => 99,  177 => 89,  168 => 83,  145 => 63,  130 => 57,  121 => 51,  107 => 40,  104 => 39,  99 => 35,  93 => 32,  84 => 26,  80 => 25,  76 => 24,  63 => 14,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
