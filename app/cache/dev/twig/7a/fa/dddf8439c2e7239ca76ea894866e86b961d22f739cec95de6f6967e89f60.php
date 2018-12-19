<?php

/* CabinetMedicalBundle:User:index.html.twig */
class __TwigTemplate_7afadddf8439c2e7239ca76ea894866e86b961d22f739cec95de6f6967e89f60 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-datatable/css/jquery.dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/boostrap-checkbox/css/bootstrap-checkbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/datatables-responsive/css/datatables.responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-datatable/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-datatable/extra/js/TableTools.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/datatables-responsive/js/datatables.responsive.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/datatables-responsive/js/lodash.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/js/datatables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


<ul class=\"breadcrumb\">
    <li>
        <p>La liste des utilisateurs</p>
    </li>
    <li><a href=\"#\" class=\"active\">CabineMedical</a> </li>
</ul>

<div class=\"row-fluid\">
    <div class=\"span12\">
        <div class=\"grid simple \">
            <div class=\"grid-title\">
                <h4>Les <span class=\"semi-bold\">utilisateurs</span></h4>
                <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a>
                    <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> 
                </div>
                <div class=\"grid-body \">
                    <table class=\"table\" id=\"example3\" >
                        <thead>
                            <tr>
                                <th></th>
                                <th>Login</th>

                               


                                <th>Nom</th>
                                
                                <th>Cin</th>
                                <th>Télephone</th>
                              <th>Photo</th>

                                <th>Roles</th>

 <th>Choix Role</th>
                                <th>Actions</th>


                            </tr>
                        </thead>
                        <tbody> ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 57
            echo "                            <tr class=\"odd gradeX\">
                                <td><i class=\"fa fa-plus-circle\"></i></td> 
                                <td><span class=\"label label-important\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</span></td>


                             

                                <td class=\"center\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
            echo "</td>
                                
                                <td class=\"center\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cin"), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone"), "html", null, true);
            echo "</td>
                                <td class=\"center\"><img style= \"border: 3px solid; color: #0aa699;\" src=\"";
            // line 68
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/entities/") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profilePicture")), "html", null, true);
            echo " \" alt=\"\" width=\"70\" height=\"50\"></td>                         
                                <td> ";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 70
                echo "                                                ";
                if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN")) {
                    // line 71
                    echo "                                        <span class=\"label label-important\">Admin</span><br>
                                                ";
                } elseif (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_MEDECIN")) {
                    // line 73
                    echo "                                        <span class=\"label label-important\">Medecin</span>
                                         ";
                } elseif (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_PATIENT")) {
                    // line 75
                    echo "                                        <span class=\"label label-important\">Patient</span>
                                         ";
                } elseif (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_SECRETAIRE")) {
                    // line 77
                    echo "                                        <span class=\"label label-important\">Secretaire</span>
                                                ";
                }
                // line 78
                echo "  
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                                    </td>
                                    <td> <select class=\"roles\" data-id=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">
                                            <option value=\"1\" >admin</option>
                                           <option value=\"2\" >medecin</option>
                                            <option value=\"3\" >sécrtaire</option>
                                            <option value=\"4\" >patiant</option>

                                            </select></td>

                                    <td class=\"center\"> 
                                        <div class=\"visible-md visible-lg hidden-sm hidden-xs\">

                                            <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs  btn-warning\"><i class=\"fa fa-edit\"></i></a> 
                                            <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs   btn-primary \"><i class=\"fa fa-share\"></i></a> 
                                            <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_deletee", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs  btn-danger\" ><i class=\"fa fa-times fa fa-white\"></i></a> </div> 
                                        
                                            
                                           
                                            
                                            

                                     </td>

                                    </tr>                                   
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                </tbody>
                            </table>
                            <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" data-color=\"rgb(255, 255, 255)\" data-color-format=\"hex\" id=\"cp4\" class=\"btn btn-info my-colorpicker-control\" href=\"#\" data-colorpicker-guid=\"1\"><i class=\"fa fa-plus-square\">   Ajouter un utilisateur</i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script>
            \$(\"#test2\").remove();

            
            
            \$( \".roles\" ).change(function() {
value=\$(this).val();
id=\$(this).attr(\"data-id\");
           // alert(id)
           
           
           
         //  var value = jQuery(\"#my_input\").val();
                    var url = \"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updaterole", array("id" => "id", "r" => "role")), "html", null, true);
        echo "\";
                    url = url.replace(\"id\", id); 
                     url = url.replace(\"role\", value); 
window.location.href=url;

           
           
            });
            
            
            </script>

 ";
    }

    public function getTemplateName()
    {
        return "CabinetMedicalBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 127,  219 => 107,  215 => 105,  198 => 94,  194 => 93,  190 => 92,  176 => 81,  173 => 80,  166 => 78,  162 => 77,  158 => 75,  154 => 73,  150 => 71,  147 => 70,  143 => 69,  139 => 68,  135 => 67,  131 => 66,  124 => 64,  116 => 59,  112 => 57,  108 => 56,  63 => 14,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
