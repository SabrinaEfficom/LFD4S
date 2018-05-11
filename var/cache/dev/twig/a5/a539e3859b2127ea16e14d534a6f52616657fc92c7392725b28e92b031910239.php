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
        $__internal_a05e274f213bfe98ba19541d0cad5997779d152b825ea43a44ed99f7ca82a68a = $this->env->getExtension("native_profiler");
        $__internal_a05e274f213bfe98ba19541d0cad5997779d152b825ea43a44ed99f7ca82a68a->enter($__internal_a05e274f213bfe98ba19541d0cad5997779d152b825ea43a44ed99f7ca82a68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:second.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a05e274f213bfe98ba19541d0cad5997779d152b825ea43a44ed99f7ca82a68a->leave($__internal_a05e274f213bfe98ba19541d0cad5997779d152b825ea43a44ed99f7ca82a68a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d61e83e4147fa2e490bcdd3d8322e37ff8046346d30b8f5eaa2eebcf9a0d160 = $this->env->getExtension("native_profiler");
        $__internal_3d61e83e4147fa2e490bcdd3d8322e37ff8046346d30b8f5eaa2eebcf9a0d160->enter($__internal_3d61e83e4147fa2e490bcdd3d8322e37ff8046346d30b8f5eaa2eebcf9a0d160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    second
";
        
        $__internal_3d61e83e4147fa2e490bcdd3d8322e37ff8046346d30b8f5eaa2eebcf9a0d160->leave($__internal_3d61e83e4147fa2e490bcdd3d8322e37ff8046346d30b8f5eaa2eebcf9a0d160_prof);

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
