<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_3243709f6ad939971e22e4763a972773cb798c7cb54cbae893bb7b0ef5201b9a extends Twig_Template
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
        $__internal_69dc451b0efe78c2ed8a70a5fb04e0e9b16ea29c60516dcbfb413cb61d3b5edc = $this->env->getExtension("native_profiler");
        $__internal_69dc451b0efe78c2ed8a70a5fb04e0e9b16ea29c60516dcbfb413cb61d3b5edc->enter($__internal_69dc451b0efe78c2ed8a70a5fb04e0e9b16ea29c60516dcbfb413cb61d3b5edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_69dc451b0efe78c2ed8a70a5fb04e0e9b16ea29c60516dcbfb413cb61d3b5edc->leave($__internal_69dc451b0efe78c2ed8a70a5fb04e0e9b16ea29c60516dcbfb413cb61d3b5edc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
