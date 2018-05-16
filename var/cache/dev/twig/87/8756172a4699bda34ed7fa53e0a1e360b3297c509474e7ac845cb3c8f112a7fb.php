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
        $__internal_bb788b6c70aa6f96bddfaf7d880ad2c5f4a6c5926b2921bda8db3cb205d9133c = $this->env->getExtension("native_profiler");
        $__internal_bb788b6c70aa6f96bddfaf7d880ad2c5f4a6c5926b2921bda8db3cb205d9133c->enter($__internal_bb788b6c70aa6f96bddfaf7d880ad2c5f4a6c5926b2921bda8db3cb205d9133c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_bb788b6c70aa6f96bddfaf7d880ad2c5f4a6c5926b2921bda8db3cb205d9133c->leave($__internal_bb788b6c70aa6f96bddfaf7d880ad2c5f4a6c5926b2921bda8db3cb205d9133c_prof);

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
