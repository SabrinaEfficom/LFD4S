<?php

/* LFD4SPlatformBundle:Advert:second.html.twig */
class __TwigTemplate_68b44dd0dcd20e1feb97db3514baac611f30a6d179b0fe30a59d9b105ff6a67d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "LFD4SPlatformBundle:Advert:second.html.twig", 2);
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
        $__internal_2a4e416cb702c98a01469f424a2ca8388c8bd769f4fdebd19fd01f4a5a80dbfe = $this->env->getExtension("native_profiler");
        $__internal_2a4e416cb702c98a01469f424a2ca8388c8bd769f4fdebd19fd01f4a5a80dbfe->enter($__internal_2a4e416cb702c98a01469f424a2ca8388c8bd769f4fdebd19fd01f4a5a80dbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:second.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a4e416cb702c98a01469f424a2ca8388c8bd769f4fdebd19fd01f4a5a80dbfe->leave($__internal_2a4e416cb702c98a01469f424a2ca8388c8bd769f4fdebd19fd01f4a5a80dbfe_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_803f14d0c03e2a68e0fd30138b958b6ec00f690f318b513e1c874c4870847eb6 = $this->env->getExtension("native_profiler");
        $__internal_803f14d0c03e2a68e0fd30138b958b6ec00f690f318b513e1c874c4870847eb6->enter($__internal_803f14d0c03e2a68e0fd30138b958b6ec00f690f318b513e1c874c4870847eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    second
";
        
        $__internal_803f14d0c03e2a68e0fd30138b958b6ec00f690f318b513e1c874c4870847eb6->leave($__internal_803f14d0c03e2a68e0fd30138b958b6ec00f690f318b513e1c874c4870847eb6_prof);

    }

    public function getTemplateName()
    {
        return "LFD4SPlatformBundle:Advert:second.html.twig";
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
