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
        $__internal_11a6506e0b736bbced1351ce42a7847d6c0ab6bd41eef35d8e56f5ff7ffd4100 = $this->env->getExtension("native_profiler");
        $__internal_11a6506e0b736bbced1351ce42a7847d6c0ab6bd41eef35d8e56f5ff7ffd4100->enter($__internal_11a6506e0b736bbced1351ce42a7847d6c0ab6bd41eef35d8e56f5ff7ffd4100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_11a6506e0b736bbced1351ce42a7847d6c0ab6bd41eef35d8e56f5ff7ffd4100->leave($__internal_11a6506e0b736bbced1351ce42a7847d6c0ab6bd41eef35d8e56f5ff7ffd4100_prof);

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
