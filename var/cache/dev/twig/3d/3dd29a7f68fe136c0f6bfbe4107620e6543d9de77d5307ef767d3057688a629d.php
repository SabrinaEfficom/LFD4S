<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_8d7e677d55ee1cfc21e30fcb0e1413fe7e9e8fd955f1b71a840c59c67373c3bc extends Twig_Template
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
        $__internal_6ee58fb98cf1618b2f71e832ce3b23773f70f5c60678e57a439343cd9bc15051 = $this->env->getExtension("native_profiler");
        $__internal_6ee58fb98cf1618b2f71e832ce3b23773f70f5c60678e57a439343cd9bc15051->enter($__internal_6ee58fb98cf1618b2f71e832ce3b23773f70f5c60678e57a439343cd9bc15051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6ee58fb98cf1618b2f71e832ce3b23773f70f5c60678e57a439343cd9bc15051->leave($__internal_6ee58fb98cf1618b2f71e832ce3b23773f70f5c60678e57a439343cd9bc15051_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
