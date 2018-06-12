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
        $__internal_e6db59c0deb999b6aaba795547bdf35aaf0a0ef75c27c6cec6fd84ff18cee57c = $this->env->getExtension("native_profiler");
        $__internal_e6db59c0deb999b6aaba795547bdf35aaf0a0ef75c27c6cec6fd84ff18cee57c->enter($__internal_e6db59c0deb999b6aaba795547bdf35aaf0a0ef75c27c6cec6fd84ff18cee57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/first.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6db59c0deb999b6aaba795547bdf35aaf0a0ef75c27c6cec6fd84ff18cee57c->leave($__internal_e6db59c0deb999b6aaba795547bdf35aaf0a0ef75c27c6cec6fd84ff18cee57c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_753327a0451cc03707dbaa882e645c8e13e43d4a4de5c1c2d4db7fe5a59cf358 = $this->env->getExtension("native_profiler");
        $__internal_753327a0451cc03707dbaa882e645c8e13e43d4a4de5c1c2d4db7fe5a59cf358->enter($__internal_753327a0451cc03707dbaa882e645c8e13e43d4a4de5c1c2d4db7fe5a59cf358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    First
";
        
        $__internal_753327a0451cc03707dbaa882e645c8e13e43d4a4de5c1c2d4db7fe5a59cf358->leave($__internal_753327a0451cc03707dbaa882e645c8e13e43d4a4de5c1c2d4db7fe5a59cf358_prof);

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
