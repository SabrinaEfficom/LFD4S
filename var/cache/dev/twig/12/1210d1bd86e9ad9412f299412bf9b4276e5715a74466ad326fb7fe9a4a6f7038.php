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
        $__internal_fa00ab1f7b9ba9dcaf27d272d64306714347bfa42d19bb4ab54082ca3249210e = $this->env->getExtension("native_profiler");
        $__internal_fa00ab1f7b9ba9dcaf27d272d64306714347bfa42d19bb4ab54082ca3249210e->enter($__internal_fa00ab1f7b9ba9dcaf27d272d64306714347bfa42d19bb4ab54082ca3249210e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/first.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa00ab1f7b9ba9dcaf27d272d64306714347bfa42d19bb4ab54082ca3249210e->leave($__internal_fa00ab1f7b9ba9dcaf27d272d64306714347bfa42d19bb4ab54082ca3249210e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8304d21fdcbb23487dac90288628c5784c827b34b582fd1a5a0ba8c6319b797c = $this->env->getExtension("native_profiler");
        $__internal_8304d21fdcbb23487dac90288628c5784c827b34b582fd1a5a0ba8c6319b797c->enter($__internal_8304d21fdcbb23487dac90288628c5784c827b34b582fd1a5a0ba8c6319b797c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    First
";
        
        $__internal_8304d21fdcbb23487dac90288628c5784c827b34b582fd1a5a0ba8c6319b797c->leave($__internal_8304d21fdcbb23487dac90288628c5784c827b34b582fd1a5a0ba8c6319b797c_prof);

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
