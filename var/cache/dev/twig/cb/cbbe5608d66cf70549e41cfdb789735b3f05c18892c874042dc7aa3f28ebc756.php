<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a47736223c78304f343f6db089eac90e9882dbf79fb7d8aadb8b09ca1e3fee95 extends Twig_Template
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
        $__internal_9d9faa58f2d313889c4831e85c9ddc0a51e652cc78a4d0664619f552e8509bdf = $this->env->getExtension("native_profiler");
        $__internal_9d9faa58f2d313889c4831e85c9ddc0a51e652cc78a4d0664619f552e8509bdf->enter($__internal_9d9faa58f2d313889c4831e85c9ddc0a51e652cc78a4d0664619f552e8509bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9d9faa58f2d313889c4831e85c9ddc0a51e652cc78a4d0664619f552e8509bdf->leave($__internal_9d9faa58f2d313889c4831e85c9ddc0a51e652cc78a4d0664619f552e8509bdf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
