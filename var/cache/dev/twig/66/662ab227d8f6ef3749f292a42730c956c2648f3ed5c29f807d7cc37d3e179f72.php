<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c8d5d04ad0b07aca75a204869736d4c793045cbd06d2dd8d764a4717662cc493 extends Twig_Template
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
        $__internal_00fb55ad43694cd0c277b3a752a9bf377faed1065fef3c12ae6cb1ad4e6a8c19 = $this->env->getExtension("native_profiler");
        $__internal_00fb55ad43694cd0c277b3a752a9bf377faed1065fef3c12ae6cb1ad4e6a8c19->enter($__internal_00fb55ad43694cd0c277b3a752a9bf377faed1065fef3c12ae6cb1ad4e6a8c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_00fb55ad43694cd0c277b3a752a9bf377faed1065fef3c12ae6cb1ad4e6a8c19->leave($__internal_00fb55ad43694cd0c277b3a752a9bf377faed1065fef3c12ae6cb1ad4e6a8c19_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
