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
        $__internal_1183cd0db6bcd74b01a370c87d406a8e501a1cd3193cc38f9391169ccd92c60e = $this->env->getExtension("native_profiler");
        $__internal_1183cd0db6bcd74b01a370c87d406a8e501a1cd3193cc38f9391169ccd92c60e->enter($__internal_1183cd0db6bcd74b01a370c87d406a8e501a1cd3193cc38f9391169ccd92c60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1183cd0db6bcd74b01a370c87d406a8e501a1cd3193cc38f9391169ccd92c60e->leave($__internal_1183cd0db6bcd74b01a370c87d406a8e501a1cd3193cc38f9391169ccd92c60e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_201a6e716071fa873ca01bf97ca7e17d449c2f817309d4f6ff0cd64660a60a63 = $this->env->getExtension("native_profiler");
        $__internal_201a6e716071fa873ca01bf97ca7e17d449c2f817309d4f6ff0cd64660a60a63->enter($__internal_201a6e716071fa873ca01bf97ca7e17d449c2f817309d4f6ff0cd64660a60a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_201a6e716071fa873ca01bf97ca7e17d449c2f817309d4f6ff0cd64660a60a63->leave($__internal_201a6e716071fa873ca01bf97ca7e17d449c2f817309d4f6ff0cd64660a60a63_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_160809cd49a1bb18039ab3f69bf58031f37a82f3de09186c5a9d3917c49f7acc = $this->env->getExtension("native_profiler");
        $__internal_160809cd49a1bb18039ab3f69bf58031f37a82f3de09186c5a9d3917c49f7acc->enter($__internal_160809cd49a1bb18039ab3f69bf58031f37a82f3de09186c5a9d3917c49f7acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_160809cd49a1bb18039ab3f69bf58031f37a82f3de09186c5a9d3917c49f7acc->leave($__internal_160809cd49a1bb18039ab3f69bf58031f37a82f3de09186c5a9d3917c49f7acc_prof);

    }

    // line 15
    public function block_LFD4Splatform_body($context, array $blocks = array())
    {
        $__internal_3b0fb1a939bb66310aa86a26a31c54c2bdb8646bd50b1e15772b60b6b98a5160 = $this->env->getExtension("native_profiler");
        $__internal_3b0fb1a939bb66310aa86a26a31c54c2bdb8646bd50b1e15772b60b6b98a5160->enter($__internal_3b0fb1a939bb66310aa86a26a31c54c2bdb8646bd50b1e15772b60b6b98a5160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LFD4Splatform_body"));

        // line 16
        echo "    ";
        
        $__internal_3b0fb1a939bb66310aa86a26a31c54c2bdb8646bd50b1e15772b60b6b98a5160->leave($__internal_3b0fb1a939bb66310aa86a26a31c54c2bdb8646bd50b1e15772b60b6b98a5160_prof);

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
