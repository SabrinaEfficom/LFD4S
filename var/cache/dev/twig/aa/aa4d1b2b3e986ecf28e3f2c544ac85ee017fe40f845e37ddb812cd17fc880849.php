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
        $__internal_17ffdb00c158f12cbe405578e2df75fa54aec0d421fb4b86f81dc2498937b3fa = $this->env->getExtension("native_profiler");
        $__internal_17ffdb00c158f12cbe405578e2df75fa54aec0d421fb4b86f81dc2498937b3fa->enter($__internal_17ffdb00c158f12cbe405578e2df75fa54aec0d421fb4b86f81dc2498937b3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:first.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17ffdb00c158f12cbe405578e2df75fa54aec0d421fb4b86f81dc2498937b3fa->leave($__internal_17ffdb00c158f12cbe405578e2df75fa54aec0d421fb4b86f81dc2498937b3fa_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_69a1e4256b5ecb8d4a0433d5cbf9a3f6f3cfb65b6bd848323a1b570dbff7e5c4 = $this->env->getExtension("native_profiler");
        $__internal_69a1e4256b5ecb8d4a0433d5cbf9a3f6f3cfb65b6bd848323a1b570dbff7e5c4->enter($__internal_69a1e4256b5ecb8d4a0433d5cbf9a3f6f3cfb65b6bd848323a1b570dbff7e5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    First
";
        
        $__internal_69a1e4256b5ecb8d4a0433d5cbf9a3f6f3cfb65b6bd848323a1b570dbff7e5c4->leave($__internal_69a1e4256b5ecb8d4a0433d5cbf9a3f6f3cfb65b6bd848323a1b570dbff7e5c4_prof);

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
