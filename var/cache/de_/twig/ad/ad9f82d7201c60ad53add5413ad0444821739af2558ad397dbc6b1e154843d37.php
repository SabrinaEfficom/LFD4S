<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f5b8652617e6975bdab39cdf263aa8dfba5b31814206f8a3e991975735dfb789 extends Twig_Template
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
        $__internal_eeee705120f3cc393052eb157bc85835cf340f19e848d7eb2b64f7c9302f6034 = $this->env->getExtension("native_profiler");
        $__internal_eeee705120f3cc393052eb157bc85835cf340f19e848d7eb2b64f7c9302f6034->enter($__internal_eeee705120f3cc393052eb157bc85835cf340f19e848d7eb2b64f7c9302f6034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_eeee705120f3cc393052eb157bc85835cf340f19e848d7eb2b64f7c9302f6034->leave($__internal_eeee705120f3cc393052eb157bc85835cf340f19e848d7eb2b64f7c9302f6034_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
