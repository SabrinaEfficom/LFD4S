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
        $__internal_530d9c2ede25f03d0cc1d3813333b5726d6513888f51caba738aa30ce73b73d4 = $this->env->getExtension("native_profiler");
        $__internal_530d9c2ede25f03d0cc1d3813333b5726d6513888f51caba738aa30ce73b73d4->enter($__internal_530d9c2ede25f03d0cc1d3813333b5726d6513888f51caba738aa30ce73b73d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_530d9c2ede25f03d0cc1d3813333b5726d6513888f51caba738aa30ce73b73d4->leave($__internal_530d9c2ede25f03d0cc1d3813333b5726d6513888f51caba738aa30ce73b73d4_prof);

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
