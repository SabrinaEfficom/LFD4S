<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_46e01c294d367cfae10c883177b62cfd05578eab123847c7d1cdf3a86788cfdb extends Twig_Template
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
        $__internal_fe8f34d79f5f3c7c3b9d11bbf38f0622c15fb1d26685b5227a414064f4bb09e5 = $this->env->getExtension("native_profiler");
        $__internal_fe8f34d79f5f3c7c3b9d11bbf38f0622c15fb1d26685b5227a414064f4bb09e5->enter($__internal_fe8f34d79f5f3c7c3b9d11bbf38f0622c15fb1d26685b5227a414064f4bb09e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fe8f34d79f5f3c7c3b9d11bbf38f0622c15fb1d26685b5227a414064f4bb09e5->leave($__internal_fe8f34d79f5f3c7c3b9d11bbf38f0622c15fb1d26685b5227a414064f4bb09e5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
