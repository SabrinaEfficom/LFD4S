<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a743fe1c7f97d861964680405f81d09a6b429119f651aa8ee909b45b0dcb87c9 extends Twig_Template
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
        $__internal_9159817814feba43cb331562676bcaeb882c60aeae411362b128acd4c604eaa2 = $this->env->getExtension("native_profiler");
        $__internal_9159817814feba43cb331562676bcaeb882c60aeae411362b128acd4c604eaa2->enter($__internal_9159817814feba43cb331562676bcaeb882c60aeae411362b128acd4c604eaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9159817814feba43cb331562676bcaeb882c60aeae411362b128acd4c604eaa2->leave($__internal_9159817814feba43cb331562676bcaeb882c60aeae411362b128acd4c604eaa2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
