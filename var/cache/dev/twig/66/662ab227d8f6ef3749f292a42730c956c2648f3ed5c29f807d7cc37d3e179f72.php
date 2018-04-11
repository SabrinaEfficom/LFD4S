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
        $__internal_8535bb27c0cf862b8fe2bb1de40ad70895a0059d4d925cd7c3cca8715d65d88b = $this->env->getExtension("native_profiler");
        $__internal_8535bb27c0cf862b8fe2bb1de40ad70895a0059d4d925cd7c3cca8715d65d88b->enter($__internal_8535bb27c0cf862b8fe2bb1de40ad70895a0059d4d925cd7c3cca8715d65d88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8535bb27c0cf862b8fe2bb1de40ad70895a0059d4d925cd7c3cca8715d65d88b->leave($__internal_8535bb27c0cf862b8fe2bb1de40ad70895a0059d4d925cd7c3cca8715d65d88b_prof);

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
