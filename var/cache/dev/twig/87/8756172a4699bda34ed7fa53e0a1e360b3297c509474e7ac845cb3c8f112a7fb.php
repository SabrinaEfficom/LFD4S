<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_29c85a1a5bc3187efaf161b12385881911e965a95ce0a8081e7630f345e77ede extends Twig_Template
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
        $__internal_7488edc8db98e4a895b637a61fb78da3e4b1385e6f893c133ed3adafe0da5fb6 = $this->env->getExtension("native_profiler");
        $__internal_7488edc8db98e4a895b637a61fb78da3e4b1385e6f893c133ed3adafe0da5fb6->enter($__internal_7488edc8db98e4a895b637a61fb78da3e4b1385e6f893c133ed3adafe0da5fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_7488edc8db98e4a895b637a61fb78da3e4b1385e6f893c133ed3adafe0da5fb6->leave($__internal_7488edc8db98e4a895b637a61fb78da3e4b1385e6f893c133ed3adafe0da5fb6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
