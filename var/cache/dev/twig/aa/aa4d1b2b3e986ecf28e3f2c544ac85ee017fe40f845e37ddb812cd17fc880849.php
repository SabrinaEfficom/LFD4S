<?php

/* LFD4SPlatformBundle:Advert:first.html.twig */
class __TwigTemplate_4e1ba6178a54a97ed9fae7dc0066863a3315c7309b90736137c0b96b36801efa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "LFD4SPlatformBundle:Advert:first.html.twig", 2);
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
        $__internal_e3298507eeacafa2f645f907d7f7f63787036a104f30667f9c3ac513d3c6b66e = $this->env->getExtension("native_profiler");
        $__internal_e3298507eeacafa2f645f907d7f7f63787036a104f30667f9c3ac513d3c6b66e->enter($__internal_e3298507eeacafa2f645f907d7f7f63787036a104f30667f9c3ac513d3c6b66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:first.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3298507eeacafa2f645f907d7f7f63787036a104f30667f9c3ac513d3c6b66e->leave($__internal_e3298507eeacafa2f645f907d7f7f63787036a104f30667f9c3ac513d3c6b66e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f50f13fe80cc8956910271574eebc707e50d2df25ad13e7a1697a932990e890 = $this->env->getExtension("native_profiler");
        $__internal_7f50f13fe80cc8956910271574eebc707e50d2df25ad13e7a1697a932990e890->enter($__internal_7f50f13fe80cc8956910271574eebc707e50d2df25ad13e7a1697a932990e890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    First
";
        
        $__internal_7f50f13fe80cc8956910271574eebc707e50d2df25ad13e7a1697a932990e890->leave($__internal_7f50f13fe80cc8956910271574eebc707e50d2df25ad13e7a1697a932990e890_prof);

    }

    public function getTemplateName()
    {
        return "LFD4SPlatformBundle:Advert:first.html.twig";
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
/*     First*/
/* {% endblock %}*/
