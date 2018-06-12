<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_59b98494439539ed570025f4841698d5bcc21c09e3b1940cacc7298e9de17a1d extends Twig_Template
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
        $__internal_dc503052d85c57af5c6d1ca58d60478bbda4ef7314a37d678a888a4c8c2226d9 = $this->env->getExtension("native_profiler");
        $__internal_dc503052d85c57af5c6d1ca58d60478bbda4ef7314a37d678a888a4c8c2226d9->enter($__internal_dc503052d85c57af5c6d1ca58d60478bbda4ef7314a37d678a888a4c8c2226d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_dc503052d85c57af5c6d1ca58d60478bbda4ef7314a37d678a888a4c8c2226d9->leave($__internal_dc503052d85c57af5c6d1ca58d60478bbda4ef7314a37d678a888a4c8c2226d9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
