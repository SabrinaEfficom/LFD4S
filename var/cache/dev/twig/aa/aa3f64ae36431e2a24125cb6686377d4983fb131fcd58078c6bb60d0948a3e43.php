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
        $__internal_24dba4db3775aae6dacc34a825930b753bf3bafe0e161e1b84b9d7c7a90c913f = $this->env->getExtension("native_profiler");
        $__internal_24dba4db3775aae6dacc34a825930b753bf3bafe0e161e1b84b9d7c7a90c913f->enter($__internal_24dba4db3775aae6dacc34a825930b753bf3bafe0e161e1b84b9d7c7a90c913f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_24dba4db3775aae6dacc34a825930b753bf3bafe0e161e1b84b9d7c7a90c913f->leave($__internal_24dba4db3775aae6dacc34a825930b753bf3bafe0e161e1b84b9d7c7a90c913f_prof);

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
