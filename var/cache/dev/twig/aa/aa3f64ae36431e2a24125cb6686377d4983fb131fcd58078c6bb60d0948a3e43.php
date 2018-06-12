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
        $__internal_da07e04a6db9a43a15629c4d6c8881f0b517c87b5d7413ea8305fb35e38df942 = $this->env->getExtension("native_profiler");
        $__internal_da07e04a6db9a43a15629c4d6c8881f0b517c87b5d7413ea8305fb35e38df942->enter($__internal_da07e04a6db9a43a15629c4d6c8881f0b517c87b5d7413ea8305fb35e38df942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_da07e04a6db9a43a15629c4d6c8881f0b517c87b5d7413ea8305fb35e38df942->leave($__internal_da07e04a6db9a43a15629c4d6c8881f0b517c87b5d7413ea8305fb35e38df942_prof);

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
