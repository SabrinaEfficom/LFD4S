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
        $__internal_7b648a4a5cd827ac7d45d464c46d04404f576323db490dd51441535ec467c233 = $this->env->getExtension("native_profiler");
        $__internal_7b648a4a5cd827ac7d45d464c46d04404f576323db490dd51441535ec467c233->enter($__internal_7b648a4a5cd827ac7d45d464c46d04404f576323db490dd51441535ec467c233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:first.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b648a4a5cd827ac7d45d464c46d04404f576323db490dd51441535ec467c233->leave($__internal_7b648a4a5cd827ac7d45d464c46d04404f576323db490dd51441535ec467c233_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf7d6634bae2067431f7ede99c9fb73b361f6f51e5f67638f8c889b7b7ae4c34 = $this->env->getExtension("native_profiler");
        $__internal_cf7d6634bae2067431f7ede99c9fb73b361f6f51e5f67638f8c889b7b7ae4c34->enter($__internal_cf7d6634bae2067431f7ede99c9fb73b361f6f51e5f67638f8c889b7b7ae4c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    First
";
        
        $__internal_cf7d6634bae2067431f7ede99c9fb73b361f6f51e5f67638f8c889b7b7ae4c34->leave($__internal_cf7d6634bae2067431f7ede99c9fb73b361f6f51e5f67638f8c889b7b7ae4c34_prof);

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
