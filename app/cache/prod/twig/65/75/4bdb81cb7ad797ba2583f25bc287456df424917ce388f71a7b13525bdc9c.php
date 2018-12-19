<?php

/* CabinetMedicalBundle:Default:portfolio.html.twig */
class __TwigTemplate_65754bdb81cb7ad797ba2583f25bc287456df424917ce388f71a7b13525bdc9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CabinetMedicalBundle::portfolio.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CabinetMedicalBundle::portfolio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "CabinetMedicalBundle:Default:portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
