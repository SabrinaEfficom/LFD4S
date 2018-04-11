<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_d0b76a7a836119e8dff2e994dc69c2603788f267e12c8e4af93f9a497d759782 extends Twig_Template
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
        $__internal_0ec5fbcfa92b720fd3f6d04df80fa3e91e9bc6a1256ea555b9ccfbfac3c16c62 = $this->env->getExtension("native_profiler");
        $__internal_0ec5fbcfa92b720fd3f6d04df80fa3e91e9bc6a1256ea555b9ccfbfac3c16c62->enter($__internal_0ec5fbcfa92b720fd3f6d04df80fa3e91e9bc6a1256ea555b9ccfbfac3c16c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0ec5fbcfa92b720fd3f6d04df80fa3e91e9bc6a1256ea555b9ccfbfac3c16c62->leave($__internal_0ec5fbcfa92b720fd3f6d04df80fa3e91e9bc6a1256ea555b9ccfbfac3c16c62_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
