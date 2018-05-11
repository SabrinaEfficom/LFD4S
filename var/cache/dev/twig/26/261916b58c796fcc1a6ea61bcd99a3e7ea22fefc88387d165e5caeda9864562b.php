<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5112906b87a7120ace25e5f2b2a118217c413e89b1909f9a284d546a01c15a3a extends Twig_Template
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
        $__internal_36d8d59c9d4acf141ca7149df7b9a362a08d8db13ae9c027e178baefed110cb4 = $this->env->getExtension("native_profiler");
        $__internal_36d8d59c9d4acf141ca7149df7b9a362a08d8db13ae9c027e178baefed110cb4->enter($__internal_36d8d59c9d4acf141ca7149df7b9a362a08d8db13ae9c027e178baefed110cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_36d8d59c9d4acf141ca7149df7b9a362a08d8db13ae9c027e178baefed110cb4->leave($__internal_36d8d59c9d4acf141ca7149df7b9a362a08d8db13ae9c027e178baefed110cb4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
