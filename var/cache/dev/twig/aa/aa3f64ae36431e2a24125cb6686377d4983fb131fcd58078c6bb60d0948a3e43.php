<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ae4d5bc35c1a8d91395bcd384396fe12a291c5c7f1ab12362f5628bdad97a286 extends Twig_Template
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
        $__internal_c485bc7c73496309496f1b92e978c439a28f6b7fc6c72ea7f7c7d46d258ca38b = $this->env->getExtension("native_profiler");
        $__internal_c485bc7c73496309496f1b92e978c439a28f6b7fc6c72ea7f7c7d46d258ca38b->enter($__internal_c485bc7c73496309496f1b92e978c439a28f6b7fc6c72ea7f7c7d46d258ca38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c485bc7c73496309496f1b92e978c439a28f6b7fc6c72ea7f7c7d46d258ca38b->leave($__internal_c485bc7c73496309496f1b92e978c439a28f6b7fc6c72ea7f7c7d46d258ca38b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
