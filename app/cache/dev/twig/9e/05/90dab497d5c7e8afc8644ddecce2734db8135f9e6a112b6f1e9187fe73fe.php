<?php

/* CabinetMedicalBundle:rdv:calendar.html.twig */
class __TwigTemplate_9e0590dab497d5c7e8afc8644ddecce2734db8135f9e6a112b6f1e9187fe73fe extends Twig_Template
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
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/admin/plugins/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/js/fullcalender/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/js/fullcalender/fullcalendar.print.css"), "html", null, true);
        echo "\"  media='print'  rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/js/fullcalender/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/js/fullcalender/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
      <div class=\"row\" style=\"max-height:600px;\">
    <div id='calendar'></div>
      </div>
      <br>
      
<div  id=\"addevent\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\"><p>Date : <span id=\"date\"> </span></p></h4>
      </div>
      <div class=\"modal-body\">
<form>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">titre</label>
    <input type=\"email\" class=\"form-control\" id=\"titre\" placeholder=\"titre\">
  </div>
        
      <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">cabinet</label>
    <select id=\"cabinet\" class=\"form-control\">
     ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cabinets"]) ? $context["cabinets"] : $this->getContext($context, "cabinets")));
        foreach ($context['_seq'] as $context["_key"] => $context["cabinet"]) {
            // line 36
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cabinet"]) ? $context["cabinet"] : $this->getContext($context, "cabinet")), "id"), "html", null, true);
            echo "\" >  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cabinet"]) ? $context["cabinet"] : $this->getContext($context, "cabinet")), "nom"), "html", null, true);
            echo "         </option>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cabinet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</select>
  </div>   
        <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">medecin</label>
    <select id=\"medecin\" class=\"form-control\">
     ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medecins"]) ? $context["medecins"] : $this->getContext($context, "medecins")));
        foreach ($context['_seq'] as $context["_key"] => $context["medecin"]) {
            // line 44
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "id"), "html", null, true);
            echo "\" >  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "specialite"), "html", null, true);
            echo "         </option>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medecin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</select>
  </div>    
        
  </div>
      <div class=\"modal-footer\">
   <button type=\"button\" onClick=\"addevent()\" class=\"btn btn-default\" >Ajouter</button>

        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <div  id=\"voirevent\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\"><p>titre : <span id=\"titre\"> </span></p></h4>
      </div>
      <div class=\"modal-body\">
Date : <span id=\"dateevent\"> </span>
descritption : <span id=\"description\"> </span>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
      
      
      
      
      
      <script>
          var daterdv;
\t\$(document).ready(function() {
\t\t
\t\t\$('#calendar').fullCalendar({
\t\t\theader: {
\t\t\t\tleft: 'prev,next today',
\t\t\t\tcenter: 'title',
\t\t\t\tright: 'month,agendaWeek,agendaDay'
\t\t\t},
\t\t\tdefaultDate: new Date(),
\t\t\teditable: true,
\t\t\teventLimit: true, // allow \"more\" link when too many events
                            eventClick: function(calEvent, jsEvent, view) {
                           window.location.href = \"http://localhost/Cabinet/web/app_dev.php/rdv/\"+calEvent.id+\"/show\"; 
                            
                                },
                      
    dayClick: function(date, jsEvent, view) {

    daterdv = date.format() ;
    
    
    
    var dt = new Date();
    // alert(dt)
\t\tvar date= new Date( daterdv.substring(0,4),(daterdv.substring(5,7)-1),daterdv.substring(8,10) ,0 ,0 );\t
\t\t//console.log (dt) ;
\t\tconsole.log (date) ;
\t\tif(date - dt < 0) return ;
    
    
    
    \$(\"#date\").html(daterdv);
    \$(\"#addevent\").modal(\"show\") ;
   
      
    },
\t\t\tevents:  [";
        // line 118
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 119
            echo "                    {
                        id: '";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rdv"]) ? $context["rdv"] : $this->getContext($context, "rdv")), "id"), "html", null, true);
            echo "',
                        title: '";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rdv"]) ? $context["rdv"] : $this->getContext($context, "rdv")), "titre"), "html", null, true);
            echo "',
                        start: '";
            // line 122
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["rdv"]) ? $context["rdv"] : $this->getContext($context, "rdv")), "date"), "Y-m-d\\TH:i:s"), "html", null, true);
            echo "',                       
                        description: '";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rdv"]) ? $context["rdv"] : $this->getContext($context, "rdv")), "titre"), "html", null, true);
            echo "'
                    }
    ";
            // line 125
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) {
            } else {
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                    , ]
\t\t});
\t\t
\t});
        
        
    function addevent() {
     jQuery.ajax({
                url: \"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addrdv"), "html", null, true);
        echo "\",
                data: {date: daterdv,titre:\$(\"#titre\").val() , medecin:\$(\"#medecin\").val() ,cabinet:\$(\"#cabinet\").val() },
                dataType: \"json\",
                type: \"POST\",
                success: function(data) {
            
            
                                     window.location.href = \"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aganda"), "html", null, true);
        echo "\";
  
            
                }
            })


        }
    
    
    
        
        
        
        
        
        
        
</script>
    
";
    }

    public function getTemplateName()
    {
        return "CabinetMedicalBundle:rdv:calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 141,  253 => 134,  243 => 126,  226 => 125,  221 => 123,  217 => 122,  213 => 121,  209 => 120,  206 => 119,  189 => 118,  115 => 46,  104 => 44,  100 => 43,  93 => 38,  82 => 36,  78 => 35,  52 => 12,  48 => 11,  43 => 9,  39 => 8,  34 => 6,  31 => 5,  28 => 4,);
    }
}
