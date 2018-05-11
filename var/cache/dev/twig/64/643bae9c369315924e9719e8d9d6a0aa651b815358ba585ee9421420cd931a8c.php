<?php

/* LFD4SPlatformBundle::layout.html.twig */
class __TwigTemplate_649cf27984adb1fc7e07a5d33dc307e73688a29b7cb116bdd93e89fe5e097bbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LFD4SPlatformBundle::layout.html.twig", 1);
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
        $__internal_3419155c87b5d5027b21fdc4dd403ddf6852d8ab41d5e8e4c9a136f4e2f1576f = $this->env->getExtension("native_profiler");
        $__internal_3419155c87b5d5027b21fdc4dd403ddf6852d8ab41d5e8e4c9a136f4e2f1576f->enter($__internal_3419155c87b5d5027b21fdc4dd403ddf6852d8ab41d5e8e4c9a136f4e2f1576f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3419155c87b5d5027b21fdc4dd403ddf6852d8ab41d5e8e4c9a136f4e2f1576f->leave($__internal_3419155c87b5d5027b21fdc4dd403ddf6852d8ab41d5e8e4c9a136f4e2f1576f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a140c6ebf4825a69d318859be063d33f2057a0df893ee513fbf9442391845544 = $this->env->getExtension("native_profiler");
        $__internal_a140c6ebf4825a69d318859be063d33f2057a0df893ee513fbf9442391845544->enter($__internal_a140c6ebf4825a69d318859be063d33f2057a0df893ee513fbf9442391845544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a140c6ebf4825a69d318859be063d33f2057a0df893ee513fbf9442391845544->leave($__internal_a140c6ebf4825a69d318859be063d33f2057a0df893ee513fbf9442391845544_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dfd69d3bfb3f119794780544aeeb75d280ff6c68dd8b8b93e769ff14bd24cc2 = $this->env->getExtension("native_profiler");
        $__internal_0dfd69d3bfb3f119794780544aeeb75d280ff6c68dd8b8b93e769ff14bd24cc2->enter($__internal_0dfd69d3bfb3f119794780544aeeb75d280ff6c68dd8b8b93e769ff14bd24cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0dfd69d3bfb3f119794780544aeeb75d280ff6c68dd8b8b93e769ff14bd24cc2->leave($__internal_0dfd69d3bfb3f119794780544aeeb75d280ff6c68dd8b8b93e769ff14bd24cc2_prof);

    }

    // line 15
    public function block_LFD4Splatform_body($context, array $blocks = array())
    {
        $__internal_7e4c05156f4cf4534a9c1f92586bd2a05b68d8d79ebd2089a4d994c72f4f49e4 = $this->env->getExtension("native_profiler");
        $__internal_7e4c05156f4cf4534a9c1f92586bd2a05b68d8d79ebd2089a4d994c72f4f49e4->enter($__internal_7e4c05156f4cf4534a9c1f92586bd2a05b68d8d79ebd2089a4d994c72f4f49e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LFD4Splatform_body"));

        // line 16
        echo "    ";
        
        $__internal_7e4c05156f4cf4534a9c1f92586bd2a05b68d8d79ebd2089a4d994c72f4f49e4->leave($__internal_7e4c05156f4cf4534a9c1f92586bd2a05b68d8d79ebd2089a4d994c72f4f49e4_prof);

    }

    public function getTemplateName()
    {
        return "LFD4SPlatformBundle::layout.html.twig";
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
