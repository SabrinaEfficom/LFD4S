<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_541ff03c78423eca3a7a8e08989bf4012190386add4d954d4120a475013d7476 extends Twig_Template
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
        $__internal_d9e4ca4987a5432b255fd7cd618f51bf65ffd29fd024ef402fdaddddc5f65e3d = $this->env->getExtension("native_profiler");
        $__internal_d9e4ca4987a5432b255fd7cd618f51bf65ffd29fd024ef402fdaddddc5f65e3d->enter($__internal_d9e4ca4987a5432b255fd7cd618f51bf65ffd29fd024ef402fdaddddc5f65e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d9e4ca4987a5432b255fd7cd618f51bf65ffd29fd024ef402fdaddddc5f65e3d->leave($__internal_d9e4ca4987a5432b255fd7cd618f51bf65ffd29fd024ef402fdaddddc5f65e3d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
