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
        $__internal_17b9105cb7e6f150fd617ca589bc0cd33b3a77a6a0153542ebde7f11d1cc719c = $this->env->getExtension("native_profiler");
        $__internal_17b9105cb7e6f150fd617ca589bc0cd33b3a77a6a0153542ebde7f11d1cc719c->enter($__internal_17b9105cb7e6f150fd617ca589bc0cd33b3a77a6a0153542ebde7f11d1cc719c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/second.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17b9105cb7e6f150fd617ca589bc0cd33b3a77a6a0153542ebde7f11d1cc719c->leave($__internal_17b9105cb7e6f150fd617ca589bc0cd33b3a77a6a0153542ebde7f11d1cc719c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_35dc77ed877fc4a47bdeb016b885d1bc2d9d1e3c2608a504a3e5720a7e0ee3cd = $this->env->getExtension("native_profiler");
        $__internal_35dc77ed877fc4a47bdeb016b885d1bc2d9d1e3c2608a504a3e5720a7e0ee3cd->enter($__internal_35dc77ed877fc4a47bdeb016b885d1bc2d9d1e3c2608a504a3e5720a7e0ee3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    second
";
        
        $__internal_35dc77ed877fc4a47bdeb016b885d1bc2d9d1e3c2608a504a3e5720a7e0ee3cd->leave($__internal_35dc77ed877fc4a47bdeb016b885d1bc2d9d1e3c2608a504a3e5720a7e0ee3cd_prof);

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
