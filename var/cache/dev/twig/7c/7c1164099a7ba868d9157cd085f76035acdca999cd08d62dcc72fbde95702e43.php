<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_1af14639afbe7e13008bdfff0e67290dbb999e0b79c20a246a43447fa657492f extends Twig_Template
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
        $__internal_66ff0c0b5c0648010254210e4c5c78a70b9191100864752f57b8f270d5ffa39e = $this->env->getExtension("native_profiler");
        $__internal_66ff0c0b5c0648010254210e4c5c78a70b9191100864752f57b8f270d5ffa39e->enter($__internal_66ff0c0b5c0648010254210e4c5c78a70b9191100864752f57b8f270d5ffa39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_66ff0c0b5c0648010254210e4c5c78a70b9191100864752f57b8f270d5ffa39e->leave($__internal_66ff0c0b5c0648010254210e4c5c78a70b9191100864752f57b8f270d5ffa39e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
