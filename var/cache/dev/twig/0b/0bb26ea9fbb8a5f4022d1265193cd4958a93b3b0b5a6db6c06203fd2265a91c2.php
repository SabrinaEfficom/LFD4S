<?php

/* @LFD4SPlatform/layout.html.twig */
class __TwigTemplate_0572d04c3a79ba74a2c2563bf8a5d25c49abf43b93c07dd3e764e42dbd5b47ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LFD4SPlatform/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'LFD4Splatform_body' => array($this, 'block_LFD4Splatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4fe0d5a9245b1f07b704b3627703dae2c02227733b447673f9a2defaecc4d11 = $this->env->getExtension("native_profiler");
        $__internal_d4fe0d5a9245b1f07b704b3627703dae2c02227733b447673f9a2defaecc4d11->enter($__internal_d4fe0d5a9245b1f07b704b3627703dae2c02227733b447673f9a2defaecc4d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4fe0d5a9245b1f07b704b3627703dae2c02227733b447673f9a2defaecc4d11->leave($__internal_d4fe0d5a9245b1f07b704b3627703dae2c02227733b447673f9a2defaecc4d11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c7a8860f2fc489882d240de91a091fb76d03543dd438f587a2d9b2993d45206 = $this->env->getExtension("native_profiler");
        $__internal_4c7a8860f2fc489882d240de91a091fb76d03543dd438f587a2d9b2993d45206->enter($__internal_4c7a8860f2fc489882d240de91a091fb76d03543dd438f587a2d9b2993d45206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4c7a8860f2fc489882d240de91a091fb76d03543dd438f587a2d9b2993d45206->leave($__internal_4c7a8860f2fc489882d240de91a091fb76d03543dd438f587a2d9b2993d45206_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_abc2b10c05e28f12a7d2cc35699855aa4ae68a51c4d3d7560189f53db93fb0be = $this->env->getExtension("native_profiler");
        $__internal_abc2b10c05e28f12a7d2cc35699855aa4ae68a51c4d3d7560189f53db93fb0be->enter($__internal_abc2b10c05e28f12a7d2cc35699855aa4ae68a51c4d3d7560189f53db93fb0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 10
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 15
        echo "    ";
        $this->displayBlock('LFD4Splatform_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_abc2b10c05e28f12a7d2cc35699855aa4ae68a51c4d3d7560189f53db93fb0be->leave($__internal_abc2b10c05e28f12a7d2cc35699855aa4ae68a51c4d3d7560189f53db93fb0be_prof);

    }

    // line 15
    public function block_LFD4Splatform_body($context, array $blocks = array())
    {
        $__internal_6c97c446c9d2752b0d66f8785f5eaa6cf9f4d7fc8af112903d5e980f9f5bba09 = $this->env->getExtension("native_profiler");
        $__internal_6c97c446c9d2752b0d66f8785f5eaa6cf9f4d7fc8af112903d5e980f9f5bba09->enter($__internal_6c97c446c9d2752b0d66f8785f5eaa6cf9f4d7fc8af112903d5e980f9f5bba09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LFD4Splatform_body"));

        // line 16
        echo "    ";
        
        $__internal_6c97c446c9d2752b0d66f8785f5eaa6cf9f4d7fc8af112903d5e980f9f5bba09->leave($__internal_6c97c446c9d2752b0d66f8785f5eaa6cf9f4d7fc8af112903d5e980f9f5bba09_prof);

    }

    public function getTemplateName()
    {
        return "@LFD4SPlatform/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  78 => 15,  70 => 17,  67 => 15,  61 => 10,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*     <h1>Annonces</h1>*/
/* */
/*     <hr>*/
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block LFD4Splatform_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
