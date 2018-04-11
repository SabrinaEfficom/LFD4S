<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_cac8b3e50825afdaa73cf5e23221c91aa3740e0f2b6d820169e334064d3b375c extends Twig_Template
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
        $__internal_0ba50ac314a16645a23ac9fec4ee6da414ca9528e01470b6b3763573822cd8c6 = $this->env->getExtension("native_profiler");
        $__internal_0ba50ac314a16645a23ac9fec4ee6da414ca9528e01470b6b3763573822cd8c6->enter($__internal_0ba50ac314a16645a23ac9fec4ee6da414ca9528e01470b6b3763573822cd8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0ba50ac314a16645a23ac9fec4ee6da414ca9528e01470b6b3763573822cd8c6->leave($__internal_0ba50ac314a16645a23ac9fec4ee6da414ca9528e01470b6b3763573822cd8c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
