<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_5d31e1d6fd0991870f8cf1f5a1cf878f86c4c0bd3b203edbf0cdd9689848ea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappcabinet/js/index.js"), "html", null, true);
        echo "\"></script>
<script src='https://code.jquery.com/jquery-1.10.0.min.js'></script>

<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cabinetmedical/css/stylee.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

<div class=\"login-wrap\">
    <h2>Register</h2>
    <div class=\"form\">

        <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">





";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            <div>

                <button> Sauvgarder </button>
            </div>
        </form>
    </div></div>






 
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  45 => 13,  23 => 2,  96 => 27,  93 => 26,  86 => 28,  84 => 26,  80 => 24,  74 => 23,  65 => 20,  60 => 19,  55 => 18,  51 => 17,  47 => 15,  40 => 11,  36 => 7,  29 => 4,  20 => 1,  31 => 9,  28 => 3,);
    }
}
