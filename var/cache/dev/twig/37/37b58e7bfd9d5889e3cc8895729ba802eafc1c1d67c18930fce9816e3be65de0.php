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
        $__internal_9e905abb6d2fd952b0652e1f3aacb2f43713b0abfe82131463a539f5f50438ae = $this->env->getExtension("native_profiler");
        $__internal_9e905abb6d2fd952b0652e1f3aacb2f43713b0abfe82131463a539f5f50438ae->enter($__internal_9e905abb6d2fd952b0652e1f3aacb2f43713b0abfe82131463a539f5f50438ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9e905abb6d2fd952b0652e1f3aacb2f43713b0abfe82131463a539f5f50438ae->leave($__internal_9e905abb6d2fd952b0652e1f3aacb2f43713b0abfe82131463a539f5f50438ae_prof);

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
