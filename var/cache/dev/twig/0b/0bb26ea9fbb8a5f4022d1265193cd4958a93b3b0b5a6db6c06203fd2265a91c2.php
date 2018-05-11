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
        $__internal_2dcb93a40e6807766ff4b59e385570e2d97874e56367287c969e6ce676c7fc75 = $this->env->getExtension("native_profiler");
        $__internal_2dcb93a40e6807766ff4b59e385570e2d97874e56367287c969e6ce676c7fc75->enter($__internal_2dcb93a40e6807766ff4b59e385570e2d97874e56367287c969e6ce676c7fc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dcb93a40e6807766ff4b59e385570e2d97874e56367287c969e6ce676c7fc75->leave($__internal_2dcb93a40e6807766ff4b59e385570e2d97874e56367287c969e6ce676c7fc75_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_adef48f91b010a25a53fc1928e05fdc56be3878754268e1b190fe4d8dba3ae5c = $this->env->getExtension("native_profiler");
        $__internal_adef48f91b010a25a53fc1928e05fdc56be3878754268e1b190fe4d8dba3ae5c->enter($__internal_adef48f91b010a25a53fc1928e05fdc56be3878754268e1b190fe4d8dba3ae5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_adef48f91b010a25a53fc1928e05fdc56be3878754268e1b190fe4d8dba3ae5c->leave($__internal_adef48f91b010a25a53fc1928e05fdc56be3878754268e1b190fe4d8dba3ae5c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_59d8043de66d2c014317e0578ba485903f1db648e482db8327b3d9305d3f6ae8 = $this->env->getExtension("native_profiler");
        $__internal_59d8043de66d2c014317e0578ba485903f1db648e482db8327b3d9305d3f6ae8->enter($__internal_59d8043de66d2c014317e0578ba485903f1db648e482db8327b3d9305d3f6ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_59d8043de66d2c014317e0578ba485903f1db648e482db8327b3d9305d3f6ae8->leave($__internal_59d8043de66d2c014317e0578ba485903f1db648e482db8327b3d9305d3f6ae8_prof);

    }

    // line 15
    public function block_LFD4Splatform_body($context, array $blocks = array())
    {
        $__internal_4ef8f8518d74d6ac2664f61e62447351e8fffcaadd6311dd58327c8c2676698d = $this->env->getExtension("native_profiler");
        $__internal_4ef8f8518d74d6ac2664f61e62447351e8fffcaadd6311dd58327c8c2676698d->enter($__internal_4ef8f8518d74d6ac2664f61e62447351e8fffcaadd6311dd58327c8c2676698d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LFD4Splatform_body"));

        // line 16
        echo "    ";
        
        $__internal_4ef8f8518d74d6ac2664f61e62447351e8fffcaadd6311dd58327c8c2676698d->leave($__internal_4ef8f8518d74d6ac2664f61e62447351e8fffcaadd6311dd58327c8c2676698d_prof);

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
