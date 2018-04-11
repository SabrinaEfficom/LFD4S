<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c28383b67a6ee17d1ca48b2bdaf28e15676b36fd62fca152205a2c206fae0bbb extends Twig_Template
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
        $__internal_5c653d4135e97b72b588136354c36978dafa1df9539bda34f3b0a547449ac8f1 = $this->env->getExtension("native_profiler");
        $__internal_5c653d4135e97b72b588136354c36978dafa1df9539bda34f3b0a547449ac8f1->enter($__internal_5c653d4135e97b72b588136354c36978dafa1df9539bda34f3b0a547449ac8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5c653d4135e97b72b588136354c36978dafa1df9539bda34f3b0a547449ac8f1->leave($__internal_5c653d4135e97b72b588136354c36978dafa1df9539bda34f3b0a547449ac8f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
