<?php

/* CabinetMedicalBundle:prisecharge:index.html.twig */
class __TwigTemplate_48640b8613331e5d3c235688ae0a9fdbeb722fc11ec3a97bdc31a13ea0e748a8 extends Twig_Template
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
        <p>La liste des prises en charges</p>
    </li>
    <li><a href=\"#\" class=\"active\">CabinetMédical</a> </li>
</ul>

<div class=\"row-fluid\">
    <div class=\"span12\">
        <div class=\"grid simple \">
            <div class=\"grid-title\">
                <h4>Les <span class=\"semi-bold\">Actualité</span></h4>
                <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a>
                    <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> 
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prisecharge"), "html", null, true);
        echo "\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body \">
                <table class=\"table\" id=\"example3\" >
                    <thead>
                        <tr>
                           <th>Id</th>
            <th>Titre</th>
            <th>Dateprise</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Datenaiss</th>
            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody> ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 48
            echo "                          ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pat"), "us"), "id") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))) {
                // line 49
                echo "                        <tr class=\"odd gradeX\">
                            <td><i class=\"fa fa-plus-circle\"></i></td> 
                            <td><span class=\"label label-important\">";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
                echo "</span></td>
                           
                            <td><span class=\"label label-success\">";
                // line 53
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateprise"), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"label label-important\">";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
                echo "</span></td>
                           
                            <td><span class=\"label label-important\">";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
                echo "</span></td>
                             <td><span class=\"label label-success\">";
                // line 57
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datenaiss"), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></td>
                          
                            <td class=\"center\"> 
                                <div class=\"visible-md visible-lg hidden-sm hidden-xs\">

                                    <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prisecharge_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-xs  btn-warning\"><i class=\"fa fa-edit\"></i></a> 
                                    <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prisecharge_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-xs   btn-primary \"><i class=\"fa fa-share\"></i></a> 
                                    <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteee", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-xs  btn-danger\" ><i class=\"fa fa-times fa fa-white\"></i></a> </div> </td>

                        </tr>  
                          ";
            }
            // line 68
            echo "                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                    </tbody>
                </table>
                <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prisecharge_new"), "html", null, true);
        echo "\" data-color=\"rgb(255, 255, 255)\" data-color-format=\"hex\" id=\"cp4\" class=\"btn btn-info my-colorpicker-control\" href=\"#\" data-colorpicker-guid=\"1\"><i class=\"fa fa-plus-square\">   Ajouter une prise en charge</i></a>
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
        return "CabinetMedicalBundle:prisecharge:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 71,  160 => 69,  154 => 68,  147 => 64,  143 => 63,  139 => 62,  131 => 57,  127 => 56,  122 => 54,  118 => 53,  113 => 51,  109 => 49,  106 => 48,  102 => 47,  83 => 31,  63 => 14,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
