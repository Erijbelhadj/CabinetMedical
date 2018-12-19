<?php

/* CabinetMedicalBundle:contact:index.html.twig */
class __TwigTemplate_3970b966527c5bdd170303ccde33cce69bd7799a751063e0e203abc6380646e6 extends Twig_Template
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PFAEpiClubs/admin/plugins/jquery-datatable/css/jquery.dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PFAEpiClubs/admin/plugins/boostrap-checkbox/css/bootstrap-checkbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PFAEpiClubs/admin/plugins/datatables-responsive/css/datatables.responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PFAEpiClubs/admin/plugins/jquery-datatable/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PFAEpiClubs/admin/plugins/jquery-datatable/extra/js/TableTools.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PFAEpiClubs/admin/plugins/datatables-responsive/js/datatables.responsive.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PFAEpiClubs/admin/plugins/datatables-responsive/js/lodash.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PFAEpiClubs/admin/js/datatables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


<ul class=\"breadcrumb\">
    <li>
        <p>La liste de Contacts</p>
    </li>
    <li><a href=\"#\" class=\"active\">Cabinet Medical</a> </li>
</ul>

<div class=\"row-fluid\">
    <div class=\"span12\">
        <div class=\"grid simple \">
            <div class=\"grid-title\">
                <h4>Les <span class=\"semi-bold\">Messages</span></h4>
                <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a>
                    <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> 
                    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact"), "html", null, true);
        echo "\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
            </div>
            <div class=\"grid-body \">
                <table class=\"table\" id=\"example3\" >
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Mail</th>
                             <th>Message</th>
                            <th>Phone</th>
                            
                            <th>Date</th>
                            <th>Opérations</th>

                        </tr>
                    </thead>
                    <tbody> ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 51
            echo "                        <tr class=\"odd gradeX\">
                            <td><div class=\"star\">
                                    <input id=\"checkbox9\" type=\"checkbox\" value=\"1\" checked=\"\">
                                    <label for=\"checkbox9\"></label>
                                </div></td> 
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</td>
                            <td><span class=\"label label-important\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mail"), "html", null, true);
            echo "</span></td>
                            <td>";
            // line 58
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "msg");
            echo "</td>
                            <td class=\"center\"><span class=\"label label-success\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tel"), "html", null, true);
            echo "</span></td>
                            <td class=\"center\">";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
            echo " </td>
                            <td class=\"center\"> 
                                <div class=\"visible-md visible-lg hidden-sm hidden-xs\">

                                   
                                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs   btn-primary \"><i class=\"fa fa-share\"></i></a> 
                                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("c_deleteee", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs  btn-danger\" ><i class=\"fa fa-times fa fa-white\"></i></a> </div> </td>

                        </tr>                                   
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </tbody>
                </table>
                <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_new"), "html", null, true);
        echo "\" data-color=\"rgb(255, 255, 255)\" data-color-format=\"hex\" id=\"cp4\" class=\"btn btn-info my-colorpicker-control\" href=\"#\" data-colorpicker-guid=\"1\"><i class=\"fa fa-plus-square\">   Ajouter un Contact</i></a>
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
        return "CabinetMedicalBundle:contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 72,  152 => 70,  142 => 66,  138 => 65,  130 => 60,  126 => 59,  122 => 58,  118 => 57,  114 => 56,  107 => 51,  103 => 50,  83 => 33,  63 => 16,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  31 => 7,  28 => 6,);
    }
}
