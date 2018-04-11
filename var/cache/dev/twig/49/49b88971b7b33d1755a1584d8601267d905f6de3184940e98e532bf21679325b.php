<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_6a0007b40dbb62b22717277ba5b8269f68213b31d508c7be0b417295057cc366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3f998758f544903e5509836230ba877509f0d3cdc05e034064c9881068cba11 = $this->env->getExtension("native_profiler");
        $__internal_b3f998758f544903e5509836230ba877509f0d3cdc05e034064c9881068cba11->enter($__internal_b3f998758f544903e5509836230ba877509f0d3cdc05e034064c9881068cba11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_b3f998758f544903e5509836230ba877509f0d3cdc05e034064c9881068cba11->leave($__internal_b3f998758f544903e5509836230ba877509f0d3cdc05e034064c9881068cba11_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
