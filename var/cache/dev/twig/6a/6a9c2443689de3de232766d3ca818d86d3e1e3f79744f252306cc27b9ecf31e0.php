<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_541ff03c78423eca3a7a8e08989bf4012190386add4d954d4120a475013d7476 extends Twig_Template
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
        $__internal_a15e4c0368732d1a40ccd09d50452c95fb239c13c5735c0c1731b29b12d45e68 = $this->env->getExtension("native_profiler");
        $__internal_a15e4c0368732d1a40ccd09d50452c95fb239c13c5735c0c1731b29b12d45e68->enter($__internal_a15e4c0368732d1a40ccd09d50452c95fb239c13c5735c0c1731b29b12d45e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a15e4c0368732d1a40ccd09d50452c95fb239c13c5735c0c1731b29b12d45e68->leave($__internal_a15e4c0368732d1a40ccd09d50452c95fb239c13c5735c0c1731b29b12d45e68_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
