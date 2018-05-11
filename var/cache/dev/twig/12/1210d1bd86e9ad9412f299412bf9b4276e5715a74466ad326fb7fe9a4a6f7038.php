<?php

/* @LFD4SPlatform/Advert/first.html.twig */
class __TwigTemplate_e74eb6a89d3eaf7937cd099d7c117238a864b665783c3e82a85776c0cd1c7b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@LFD4SPlatform/Advert/first.html.twig", 2);
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
        $__internal_738a1400cef0929f1c629443c5fad12ba0e8f1abeadbf42bc7cfd28c95df917c = $this->env->getExtension("native_profiler");
        $__internal_738a1400cef0929f1c629443c5fad12ba0e8f1abeadbf42bc7cfd28c95df917c->enter($__internal_738a1400cef0929f1c629443c5fad12ba0e8f1abeadbf42bc7cfd28c95df917c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/first.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_738a1400cef0929f1c629443c5fad12ba0e8f1abeadbf42bc7cfd28c95df917c->leave($__internal_738a1400cef0929f1c629443c5fad12ba0e8f1abeadbf42bc7cfd28c95df917c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_64ede6bc7fbab1d39e1a5a49b2c7aaf88246bec39252156553a0efb0fda4569d = $this->env->getExtension("native_profiler");
        $__internal_64ede6bc7fbab1d39e1a5a49b2c7aaf88246bec39252156553a0efb0fda4569d->enter($__internal_64ede6bc7fbab1d39e1a5a49b2c7aaf88246bec39252156553a0efb0fda4569d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    First
";
        
        $__internal_64ede6bc7fbab1d39e1a5a49b2c7aaf88246bec39252156553a0efb0fda4569d->leave($__internal_64ede6bc7fbab1d39e1a5a49b2c7aaf88246bec39252156553a0efb0fda4569d_prof);

    }

    public function getTemplateName()
    {
        return "@LFD4SPlatform/Advert/first.html.twig";
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
