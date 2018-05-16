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
        $__internal_4dc92dee17f41a9b7cdd0109f0c97d6b4ccf28df25444a03f392bc720607e3c1 = $this->env->getExtension("native_profiler");
        $__internal_4dc92dee17f41a9b7cdd0109f0c97d6b4ccf28df25444a03f392bc720607e3c1->enter($__internal_4dc92dee17f41a9b7cdd0109f0c97d6b4ccf28df25444a03f392bc720607e3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4dc92dee17f41a9b7cdd0109f0c97d6b4ccf28df25444a03f392bc720607e3c1->leave($__internal_4dc92dee17f41a9b7cdd0109f0c97d6b4ccf28df25444a03f392bc720607e3c1_prof);

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
