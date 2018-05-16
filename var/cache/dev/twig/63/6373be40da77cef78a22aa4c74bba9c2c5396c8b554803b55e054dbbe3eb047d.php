<?php

/* @LFD4SPlatform/Advert/second.html.twig */
class __TwigTemplate_367e8f0fd6d485842b3c3743d080338a154bb3e738090856637815c8d44d714f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@LFD4SPlatform/Advert/second.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49202387ac0a33e7b1a560b689795b3040c925bb8010927b79968383bb50d8f8 = $this->env->getExtension("native_profiler");
        $__internal_49202387ac0a33e7b1a560b689795b3040c925bb8010927b79968383bb50d8f8->enter($__internal_49202387ac0a33e7b1a560b689795b3040c925bb8010927b79968383bb50d8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/second.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49202387ac0a33e7b1a560b689795b3040c925bb8010927b79968383bb50d8f8->leave($__internal_49202387ac0a33e7b1a560b689795b3040c925bb8010927b79968383bb50d8f8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a11150c07fc0a6a72d796b55c5e1c2985a5c56a80298d44ad65cd9eef58637e5 = $this->env->getExtension("native_profiler");
        $__internal_a11150c07fc0a6a72d796b55c5e1c2985a5c56a80298d44ad65cd9eef58637e5->enter($__internal_a11150c07fc0a6a72d796b55c5e1c2985a5c56a80298d44ad65cd9eef58637e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    second
";
        
        $__internal_a11150c07fc0a6a72d796b55c5e1c2985a5c56a80298d44ad65cd9eef58637e5->leave($__internal_a11150c07fc0a6a72d796b55c5e1c2985a5c56a80298d44ad65cd9eef58637e5_prof);

    }

    public function getTemplateName()
    {
        return "@LFD4SPlatform/Advert/second.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     second*/
/* {% endblock %}*/
