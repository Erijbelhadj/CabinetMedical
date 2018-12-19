<?php

/* CabinetMedicalBundle:consultation:edit.html.twig */
class __TwigTemplate_22019f33ba538000f361592f0f6de40c711bf1ba1b83b9d7b676fe2137c782da extends Twig_Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/datatables-responsive/css/datatables.responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/jquery-datatable/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/bootstrap-tag/bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/plugins/dropzone/dropzone.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CabinetMedical/admin/js/form_elements.js"), "html", null, true);
        echo "\"></script>




<div class=\"row\">
    <div class=\"col-md-12\">
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultation_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
            <div class=\"grid simple\">
                <div class=\"grid-title no-border\">
                    <h4>Ajouter <span class=\"semi-bold\">une consultation</span></h4>
                    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultation"), "html", null, true);
        echo "\" data-color=\"rgb(255, 255, 255)\" data-color-format=\"hex\" id=\"cp4\" class=\"btn btn-primary my-colorpicker-control\" href=\"#\" data-colorpicker-guid=\"1\"><i class=\"fa fa-reply-all\">  Retourner à la liste</i></a>
                    <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a> <a href=\"#grid-config\" data-toggle=\"modal\" class=\"config\"></a> <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultation_new"), "html", null, true);
        echo "\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a> </div>
                </div>
                <div class=\"grid-body no-border\"> <br>
                    <div class=\"row\">
                        <div class=\"col-md-8 col-sm-8 col-xs-8\">                                          

                            <div class=\"form-group\">
                                <label class=\"form-label\">Motif</label>
                                <span class=\"help\"></span>
                                <div class=\"controls\">
                                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name"), 'widget');
        echo "

                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-label\">Traitements</label>
                                    <span class=\"help\"></span>
                                    <div class=\"controls\">
                                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "traitement"), 'widget');
        echo "

                                        </div>
                                  
                           
 ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "

                                    
                                </div>
                                    <script src=\"//cdn.ckeditor.com/4.4.7/standard/ckeditor.js\"></script>

                                    <div class=\"pull-right\">
                                        <button type=\"submit\" class=\"btn btn-success btn-cons\"><i class=\"icon-ok\"></i> enregistrer</button>
                                        <button type=\"button\" class=\"btn btn-white btn-cons\">Cancel</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
               
                </form>
            </div>
        </div>

 ";
    }

    public function getTemplateName()
    {
        return "CabinetMedicalBundle:consultation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 45,  95 => 40,  84 => 32,  71 => 22,  67 => 21,  58 => 17,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  31 => 6,  28 => 5,);
    }
}
