<?php

/* CabinetMedicalBundle:cabinet:index.html.twig */
class __TwigTemplate_5b3515701a20f90eef9038e9154e6aaa263919d4e65a146e6d46fbd66a1aac24 extends Twig_Template
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
<div class=\"row\">
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cabinet_new"), "html", null, true);
        echo "\" data-color=\"rgb(255, 255, 255)\" data-color-format=\"hex\" id=\"cp4\" class=\"btn btn-primary my-colorpicker-control\" href=\"#\" data-colorpicker-guid=\"1\"><i class=\"fa fa-plus\"> Ajouter un Cabinet</i></a>
        <div class=\"col-md-10 col-vlg-7\">
          <ul class=\"cbp_tmtimeline\">
              
              ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 12
            echo "            <li>
                
              <time class=\"cbp_tmtime\" datetime=\"2013-04-10 18:30\">
                <span class=\"date\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "Nom"), "html", null, true);
            echo "</span>
                <span class=\"time\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone"), "html", null, true);
            echo " <span class=\"semi-bold\"></span></span> 
              </time>
              <div class=\"cbp_tmicon primary animated bounceIn\"> <i class=\"fa fa-comments\"></i> </div>
              <div class=\"cbp_tmlabel\">
                  
                <div class=\"p-t-10 p-l-30 p-r-20 p-b-20 xs-p-r-10 xs-p-l-10 xs-p-t-5\">
                    
                  <h4 class=\"inline m-b-5\" ><span class=\"text-success semi-bold\">Situer à ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse"), "html", null, true);
            echo "</span> </h4>
                 
                  <div class=\"muted\">Email: ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</div>
                  <div class=\"muted\">Télephone: ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phonem"), "html", null, true);
            echo "</div>
                   <div class=\"muted\">Fax: ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fax"), "html", null, true);
            echo "</div>
                    ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "medecin"));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo " 
                        
                        
                        <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\" data-color=\"rgb(255, 255, 255)\"  href=\"#\" data-colorpicker-guid=\"1\"><i>
                        <div class=\"star\">
                                    <input id=\"checkbox9\" type=\"checkbox\" value=\"1\" checked=\"\">
                                    <label for=\"checkbox9\"></label>
                                </div>
 ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usm"), "nom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usm"), "prenom"), "html", null, true);
                echo " qui a comme Spécialité ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "specialite"), "html", null, true);
                echo " et le numéro de télephone ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usm"), "phone"), "html", null, true);
                echo ",</i></a><br>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                 <br>
                                              <div class=\"visible-md visible-lg hidden-sm hidden-xs\">
   ";
            // line 40
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                echo "  
      ";
                // line 41
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 42
                    echo "      ";
                    if ((((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN") || ((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_MEDECIN"))) {
                        // line 43
                        echo "                   <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cabinet_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                        echo "\" class=\"btn btn-xs  btn-warning\"><i class=\"fa fa-edit\"></i></a>
                   ";
                    }
                    // line 45
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "          ";
            }
            // line 47
            echo "                                              <div class=\"visible-md visible-lg hidden-sm hidden-xs\">
   ";
            // line 48
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                echo "  
      ";
                // line 49
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 50
                    echo "      ";
                    if ((((((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN") || ((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_MEDECIN")) || ((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_PATIENT")) || ((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_SECRETAIRE"))) {
                        // line 51
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cabinet_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                        echo "\"class=\"btn btn-xs  btn-primary\"><i class=\"fa fa-share\"></i></a>
                     ";
                    }
                    // line 53
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "          ";
            }
            // line 55
            echo "                </div>
                <div class=\"clearfix\"></div>
                
              </div>
              
            </li>
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "          </ul>
        </div>
      </div>
 ";
    }

    public function getTemplateName()
    {
        return "CabinetMedicalBundle:cabinet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 63,  171 => 55,  168 => 54,  162 => 53,  156 => 51,  153 => 50,  149 => 49,  145 => 48,  142 => 47,  139 => 46,  133 => 45,  127 => 43,  124 => 42,  120 => 41,  116 => 40,  112 => 38,  98 => 36,  90 => 31,  82 => 28,  78 => 27,  74 => 26,  70 => 25,  65 => 23,  55 => 16,  51 => 15,  46 => 12,  42 => 11,  35 => 7,  31 => 5,  28 => 4,);
    }
}
