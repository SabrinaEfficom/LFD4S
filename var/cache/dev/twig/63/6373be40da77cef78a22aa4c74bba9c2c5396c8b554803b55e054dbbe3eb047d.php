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
        $__internal_d6161ddc87a6eb6da70bc9c71251299de6c2805c2eea41ff6999c8502484b7f8 = $this->env->getExtension("native_profiler");
        $__internal_d6161ddc87a6eb6da70bc9c71251299de6c2805c2eea41ff6999c8502484b7f8->enter($__internal_d6161ddc87a6eb6da70bc9c71251299de6c2805c2eea41ff6999c8502484b7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/second.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6161ddc87a6eb6da70bc9c71251299de6c2805c2eea41ff6999c8502484b7f8->leave($__internal_d6161ddc87a6eb6da70bc9c71251299de6c2805c2eea41ff6999c8502484b7f8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5071bc8e0e26499a432b32175c707bde6272092594a3fb0e1cee90e06426a92 = $this->env->getExtension("native_profiler");
        $__internal_f5071bc8e0e26499a432b32175c707bde6272092594a3fb0e1cee90e06426a92->enter($__internal_f5071bc8e0e26499a432b32175c707bde6272092594a3fb0e1cee90e06426a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    second
";
        
        $__internal_f5071bc8e0e26499a432b32175c707bde6272092594a3fb0e1cee90e06426a92->leave($__internal_f5071bc8e0e26499a432b32175c707bde6272092594a3fb0e1cee90e06426a92_prof);

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
