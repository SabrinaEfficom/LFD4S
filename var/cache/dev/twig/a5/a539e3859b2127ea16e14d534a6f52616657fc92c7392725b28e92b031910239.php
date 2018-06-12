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
        $__internal_037d6c96967e272fbb56bc0b6edf7867e03828ffda8f57a371400f044d48fa36 = $this->env->getExtension("native_profiler");
        $__internal_037d6c96967e272fbb56bc0b6edf7867e03828ffda8f57a371400f044d48fa36->enter($__internal_037d6c96967e272fbb56bc0b6edf7867e03828ffda8f57a371400f044d48fa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:second.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_037d6c96967e272fbb56bc0b6edf7867e03828ffda8f57a371400f044d48fa36->leave($__internal_037d6c96967e272fbb56bc0b6edf7867e03828ffda8f57a371400f044d48fa36_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d1386c88b0ee42a71fc52e5633f194ad902266eae2a672f67fc3f2a0aa987e0 = $this->env->getExtension("native_profiler");
        $__internal_3d1386c88b0ee42a71fc52e5633f194ad902266eae2a672f67fc3f2a0aa987e0->enter($__internal_3d1386c88b0ee42a71fc52e5633f194ad902266eae2a672f67fc3f2a0aa987e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    second
";
        
        $__internal_3d1386c88b0ee42a71fc52e5633f194ad902266eae2a672f67fc3f2a0aa987e0->leave($__internal_3d1386c88b0ee42a71fc52e5633f194ad902266eae2a672f67fc3f2a0aa987e0_prof);

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
