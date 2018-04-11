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
        $__internal_36b10af898589424a873303a4e27fe747cc732872a562732de85df733cb0fdc8 = $this->env->getExtension("native_profiler");
        $__internal_36b10af898589424a873303a4e27fe747cc732872a562732de85df733cb0fdc8->enter($__internal_36b10af898589424a873303a4e27fe747cc732872a562732de85df733cb0fdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:second.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36b10af898589424a873303a4e27fe747cc732872a562732de85df733cb0fdc8->leave($__internal_36b10af898589424a873303a4e27fe747cc732872a562732de85df733cb0fdc8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ed01ab37e00bab0b387075df665596cf104b286e8e7eb6191b5465908b32e4a = $this->env->getExtension("native_profiler");
        $__internal_1ed01ab37e00bab0b387075df665596cf104b286e8e7eb6191b5465908b32e4a->enter($__internal_1ed01ab37e00bab0b387075df665596cf104b286e8e7eb6191b5465908b32e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    second
";
        
        $__internal_1ed01ab37e00bab0b387075df665596cf104b286e8e7eb6191b5465908b32e4a->leave($__internal_1ed01ab37e00bab0b387075df665596cf104b286e8e7eb6191b5465908b32e4a_prof);

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
