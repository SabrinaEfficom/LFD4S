<?php

/* LFD4SPlatformBundle:Advert:first.html.twig */
class __TwigTemplate_4e1ba6178a54a97ed9fae7dc0066863a3315c7309b90736137c0b96b36801efa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "LFD4SPlatformBundle:Advert:first.html.twig", 2);
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
        $__internal_87fb9572bc40d8bd1b7076ccbb80927e3df9bcd568cd3a9d03408757a3c61409 = $this->env->getExtension("native_profiler");
        $__internal_87fb9572bc40d8bd1b7076ccbb80927e3df9bcd568cd3a9d03408757a3c61409->enter($__internal_87fb9572bc40d8bd1b7076ccbb80927e3df9bcd568cd3a9d03408757a3c61409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:first.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87fb9572bc40d8bd1b7076ccbb80927e3df9bcd568cd3a9d03408757a3c61409->leave($__internal_87fb9572bc40d8bd1b7076ccbb80927e3df9bcd568cd3a9d03408757a3c61409_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fff946b1e28e79fe377780876fc26eec129a742a0cb23baf0bfda8ce079dfd49 = $this->env->getExtension("native_profiler");
        $__internal_fff946b1e28e79fe377780876fc26eec129a742a0cb23baf0bfda8ce079dfd49->enter($__internal_fff946b1e28e79fe377780876fc26eec129a742a0cb23baf0bfda8ce079dfd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    First
";
        
        $__internal_fff946b1e28e79fe377780876fc26eec129a742a0cb23baf0bfda8ce079dfd49->leave($__internal_fff946b1e28e79fe377780876fc26eec129a742a0cb23baf0bfda8ce079dfd49_prof);

    }

    public function getTemplateName()
    {
        return "LFD4SPlatformBundle:Advert:first.html.twig";
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
