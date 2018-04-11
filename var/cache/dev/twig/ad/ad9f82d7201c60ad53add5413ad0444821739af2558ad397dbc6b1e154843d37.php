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
        $__internal_2f4a5ad4de24b249ca94cdf92628ba5c291a2b4cb4b07dc7124a049c1ae06854 = $this->env->getExtension("native_profiler");
        $__internal_2f4a5ad4de24b249ca94cdf92628ba5c291a2b4cb4b07dc7124a049c1ae06854->enter($__internal_2f4a5ad4de24b249ca94cdf92628ba5c291a2b4cb4b07dc7124a049c1ae06854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2f4a5ad4de24b249ca94cdf92628ba5c291a2b4cb4b07dc7124a049c1ae06854->leave($__internal_2f4a5ad4de24b249ca94cdf92628ba5c291a2b4cb4b07dc7124a049c1ae06854_prof);

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
