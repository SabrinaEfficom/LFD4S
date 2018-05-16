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
        $__internal_47e095d388208e3e3b3fde555d8cf17716d1394d5b07d2135dc459d67c5a7582 = $this->env->getExtension("native_profiler");
        $__internal_47e095d388208e3e3b3fde555d8cf17716d1394d5b07d2135dc459d67c5a7582->enter($__internal_47e095d388208e3e3b3fde555d8cf17716d1394d5b07d2135dc459d67c5a7582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_47e095d388208e3e3b3fde555d8cf17716d1394d5b07d2135dc459d67c5a7582->leave($__internal_47e095d388208e3e3b3fde555d8cf17716d1394d5b07d2135dc459d67c5a7582_prof);

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
