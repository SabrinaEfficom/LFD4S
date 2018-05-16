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
        $__internal_ee928816ee6a87dd80456ac9b45b7e87d062a768542de50c51cf1d5194cb5a7d = $this->env->getExtension("native_profiler");
        $__internal_ee928816ee6a87dd80456ac9b45b7e87d062a768542de50c51cf1d5194cb5a7d->enter($__internal_ee928816ee6a87dd80456ac9b45b7e87d062a768542de50c51cf1d5194cb5a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ee928816ee6a87dd80456ac9b45b7e87d062a768542de50c51cf1d5194cb5a7d->leave($__internal_ee928816ee6a87dd80456ac9b45b7e87d062a768542de50c51cf1d5194cb5a7d_prof);

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
