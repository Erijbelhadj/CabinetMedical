<?php

/* CabinetMedicalBundle:medecin:index.html.twig */
class __TwigTemplate_8df718986ade18231edf1745d1eb082b3fbd73f338cb9f16e08c12aadbb459e4 extends Twig_Template
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


<ul class=\"breadcrumb\">
    <li>
        <p>La liste des medecins</p>
    </li>
    <li><a href=\"#\" class=\"active\">CabinetMédical</a> </li>
</ul>

<div class=\"row-fluid\">
    <div class=\"span12\">
        <div class=\"grid simple \">
            <div class=\"grid-title\">
                <h4>Les <span class=\"semi-bold\">MEDECINS</span></h4>
                <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a>
                    <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> 
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin"), "html", null, true);
        echo "\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body \">
                <table class=\"table\" id=\"example3\" >
                    <thead>
                         <tr>
            <th>Id</th>
            <th>Specialite</th>
            <th>About</th>
            <th>Code</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
                          
                    </thead>
                    <tbody> ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 47
            echo "                        <tr class=\"odd gradeX\">
                            <td><i class=\"fa fa-plus-circle\"></i></td> 
                            <td><span class=\"label label-important\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "Specialite"), "html", null, true);
            echo "</span></td>
                         
                            <td><span >";
            // line 51
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "About");
            echo "</span></td>
                          
                            <td><span class=\"label label-important\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "Code"), "html", null, true);
            echo "</span></td>
                            <td><span class=\"label label-important\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usm"), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usm"), "prenom"), "html", null, true);
            echo "</span></td>
                            
                            <td class=\"center\"> 
                                <div class=\"visible-md visible-lg hidden-sm hidden-xs\">
   ";
            // line 58
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                echo "  
      ";
                // line 59
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 60
                    echo "      ";
                    if ((((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN") || ((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_MEDECIN"))) {
                        // line 61
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                        echo "\" class=\"btn btn-xs  btn-warning\"><i class=\"fa fa-edit\"></i></a> 
                                     ";
                    }
                    // line 63
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "          ";
            }
            // line 65
            echo "                                      ";
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                echo "  
      ";
                // line 66
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 67
                    echo "      ";
                    if ((((((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN") || ((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_PATIENT")) || ((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_SECRETAIRE")) || ((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_MEDECIN"))) {
                        // line 68
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                        echo "\" class=\"btn btn-xs   btn-primary \"><i class=\"fa fa-share\"></i></a> 
                                      ";
                    }
                    // line 70
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "          ";
            }
            // line 72
            echo "                                    ";
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                echo "  
      ";
                // line 73
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 74
                    echo "      ";
                    if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN")) {
                        // line 75
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_deleteee", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                        echo "\" class=\"btn btn-xs  btn-danger\" ><i class=\"fa fa-times fa fa-white\"></i></a> </div> </td>
            
                                     ";
                    }
                    // line 78
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "          ";
            }
            // line 80
            echo "                        </tr>                                   
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                       
                                      ";
        // line 83
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
      ";
            // line 84
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 85
                echo "      ";
                if ((((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN") || ((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_MEDECIN"))) {
                    // line 86
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_new", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-xs   btn-primary \"><i class=\"fa fa-share\"></i></a> 
                                      ";
                }
                // line 88
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "          ";
        }
        // line 90
        echo "                       
                       
                    </tbody>
                </table>
              
            </div>
        </div>
    </div>

</div>
<script>
    \$(\"#test2\").remove();

    </script>

 ";
    }

    public function getTemplateName()
    {
        return "CabinetMedicalBundle:medecin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 90,  246 => 89,  240 => 88,  234 => 86,  231 => 85,  227 => 84,  223 => 83,  220 => 82,  213 => 80,  210 => 79,  204 => 78,  197 => 75,  194 => 74,  190 => 73,  185 => 72,  182 => 71,  176 => 70,  170 => 68,  167 => 67,  163 => 66,  158 => 65,  155 => 64,  149 => 63,  143 => 61,  140 => 60,  136 => 59,  132 => 58,  123 => 54,  119 => 53,  114 => 51,  109 => 49,  105 => 47,  101 => 46,  83 => 31,  63 => 14,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
