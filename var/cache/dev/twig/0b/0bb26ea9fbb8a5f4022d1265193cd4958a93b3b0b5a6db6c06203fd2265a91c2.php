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
        $__internal_66d452dd51687545c8d0289d6349463f51b4ff625ff73753199f4e5fac8d6b36 = $this->env->getExtension("native_profiler");
        $__internal_66d452dd51687545c8d0289d6349463f51b4ff625ff73753199f4e5fac8d6b36->enter($__internal_66d452dd51687545c8d0289d6349463f51b4ff625ff73753199f4e5fac8d6b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66d452dd51687545c8d0289d6349463f51b4ff625ff73753199f4e5fac8d6b36->leave($__internal_66d452dd51687545c8d0289d6349463f51b4ff625ff73753199f4e5fac8d6b36_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba627c7f3d687c30e0788db02592975340b7405dc58747bdf5b028fac316c9e4 = $this->env->getExtension("native_profiler");
        $__internal_ba627c7f3d687c30e0788db02592975340b7405dc58747bdf5b028fac316c9e4->enter($__internal_ba627c7f3d687c30e0788db02592975340b7405dc58747bdf5b028fac316c9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ba627c7f3d687c30e0788db02592975340b7405dc58747bdf5b028fac316c9e4->leave($__internal_ba627c7f3d687c30e0788db02592975340b7405dc58747bdf5b028fac316c9e4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_61af181a256458985b8284ff0d356aeeedfc541cdf0dfa1ec6a27ef08da17cb1 = $this->env->getExtension("native_profiler");
        $__internal_61af181a256458985b8284ff0d356aeeedfc541cdf0dfa1ec6a27ef08da17cb1->enter($__internal_61af181a256458985b8284ff0d356aeeedfc541cdf0dfa1ec6a27ef08da17cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_61af181a256458985b8284ff0d356aeeedfc541cdf0dfa1ec6a27ef08da17cb1->leave($__internal_61af181a256458985b8284ff0d356aeeedfc541cdf0dfa1ec6a27ef08da17cb1_prof);

    }

    // line 15
    public function block_LFD4Splatform_body($context, array $blocks = array())
    {
        $__internal_5eaacfebcecc7d991a080b3ce485e3480073fade973116cb07839787f14ac7e6 = $this->env->getExtension("native_profiler");
        $__internal_5eaacfebcecc7d991a080b3ce485e3480073fade973116cb07839787f14ac7e6->enter($__internal_5eaacfebcecc7d991a080b3ce485e3480073fade973116cb07839787f14ac7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LFD4Splatform_body"));

        // line 16
        echo "    ";
        
        $__internal_5eaacfebcecc7d991a080b3ce485e3480073fade973116cb07839787f14ac7e6->leave($__internal_5eaacfebcecc7d991a080b3ce485e3480073fade973116cb07839787f14ac7e6_prof);

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
