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
        $__internal_60f8ee37916f761316e99f283ad1d3d7acecf9f6d92fb07a4b06c4fc0d9c4df4 = $this->env->getExtension("native_profiler");
        $__internal_60f8ee37916f761316e99f283ad1d3d7acecf9f6d92fb07a4b06c4fc0d9c4df4->enter($__internal_60f8ee37916f761316e99f283ad1d3d7acecf9f6d92fb07a4b06c4fc0d9c4df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/first.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60f8ee37916f761316e99f283ad1d3d7acecf9f6d92fb07a4b06c4fc0d9c4df4->leave($__internal_60f8ee37916f761316e99f283ad1d3d7acecf9f6d92fb07a4b06c4fc0d9c4df4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0175340e3c9116250a0021b97a12898c22c107b07c15ac082c526312cfb3772 = $this->env->getExtension("native_profiler");
        $__internal_f0175340e3c9116250a0021b97a12898c22c107b07c15ac082c526312cfb3772->enter($__internal_f0175340e3c9116250a0021b97a12898c22c107b07c15ac082c526312cfb3772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    First
";
        
        $__internal_f0175340e3c9116250a0021b97a12898c22c107b07c15ac082c526312cfb3772->leave($__internal_f0175340e3c9116250a0021b97a12898c22c107b07c15ac082c526312cfb3772_prof);

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
