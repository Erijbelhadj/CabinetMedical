<?php

/* CabinetMedicalBundle:consultation:show.html.twig */
class __TwigTemplate_710eba442b9bc161395774b4db839645d02005bade6f72a38ea1db816debad35 extends Twig_Template
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/jquery-datatable/css/jquery.dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/boostrap-checkbox/css/bootstrap-checkbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/datatables-responsive/css/datatables.responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/jquery-datatable/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/jquery-datatable/extra/js/TableTools.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/datatables-responsive/js/datatables.responsive.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/datatables-responsive/js/lodash.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/js/datatables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
              <h4>Détail <span class=\"semi-bold\">Consultation</span></h4>
              <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body no-border\">    
                <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultation"), "html", null, true);
        echo "\" data-color=\"rgb(255, 255, 255)\" data-color-format=\"hex\" id=\"cp4\" class=\"btn btn-primary my-colorpicker-control\" href=\"#\" data-colorpicker-guid=\"1\"><i class=\"fa fa-reply-all\">  Retourner à la liste</i></a>
               
                     <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("con_deletee", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" data-color=\"rgb(255, 255, 255)\" data-color-format=\"hex\" id=\"cp4\" class=\"btn btn-danger my-colorpicker-control\" href=\"#\" data-colorpicker-guid=\"1\"><i class=\"fa fa-times fa fa-white\"> Supprimer</i></a>
                <br><br>  
                <br>
                <div class=\"form-group\">
                  <label class=\"form-label\"></label>
                  <h5  class=\"semi-bold text-black\">Motif:</h5>
                  <h4><i>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</i></h4>
                   <h5 class=\"semi-bold text-black\">Type:</h5>
              <strong>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
        echo "</strong>
               <h5 class=\"semi-bold text-black\">Cabinet:</h5>
               <strong><span class=\"label label-important\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cabinetc"), "html", null, true);
        echo "</span></strong>
              <h5 class=\"semi-bold text-black\">Traitements:</h5>
              <strong>";
        // line 39
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "traitement");
        echo "</strong>
              <h5 class=\"semi-bold text-black\">Diagnostique:</h5>
              <strong>";
        // line 41
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "conclusion");
        echo "</strong>
              <h5 class=\"semi-bold text-black\">Ajouter par:</h5>
              <strong>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "html", null, true);
        echo "</strong><br>
               <h5 class=\"text-right text-black\">Date de consultation</h5>
            <h5 class=\"text-right semi-bold text-black\">";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
        echo " </h5>
                </div>
                
                
                <div class=\"clearfix\"></div>
            </div>
          </div>
        </div>
         <div class=\"col-md-6\">
        <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
                <h4>Informations <span class=\"semi-bold\">Patient</span></h4>
                <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body no-border\">

                <p><img style= \"border: 3px solid; color: #0aa699;\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "patient"), "us"), "profilePicture")), "html", null, true);
        echo "\"   alt=\"\" width=\"460\" height=\"190\"></p>
                <br
                    
                     
                        
                                </div>
 ";
        // line 67
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
        echo "</a><br>

               
                </div>
            </div>
        </div>


 <div class=\"col-md-6\">
        <div class=\"grid simple\">
            <div class=\"grid-title no-border\">
                <h4>Détail <span class=\"semi-bold\">Médecins</span></h4>
                <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"javascript:;\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body no-border\">

                <p><img style= \"border: 3px solid; color: #0aa699;\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "medecin"), "usm"), "profilePicture")), "html", null, true);
        echo "\"   alt=\"\" width=\"460\" height=\"190\"></p>
                <br
                  
                       
                     
                                </div>
 ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "medecin"), "usm"), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "medecin"), "usm"), "prenom"), "html", null, true);
        echo " qui a comme Spécialité ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "medecin"), "specialite"), "html", null, true);
        echo " et le numéro de télephone ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "medecin"), "usm"), "phone"), "html", null, true);
        echo ",</i></a><br>

                <div class=\"clearfix\"></div><br><br>
                        <a data-color=\"rgb(255, 255, 255)\" data-color-format=\"hex\" id=\"cp4\" class=\"btn btn-primary my-colorpicker-control\" href=\"#\" data-colorpicker-guid=\"1\">";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo " Ajouté par ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "html", null, true);
        echo "</a> <br>
                        <br>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
        </div>

 ";
    }

    public function getTemplateName()
    {
        return "CabinetMedicalBundle:consultation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 92,  186 => 89,  177 => 83,  148 => 67,  139 => 61,  120 => 45,  115 => 43,  110 => 41,  105 => 39,  100 => 37,  95 => 35,  90 => 33,  81 => 27,  76 => 25,  63 => 15,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  31 => 6,  28 => 5,);
    }
}
