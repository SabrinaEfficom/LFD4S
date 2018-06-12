<?php

/* @LFD4SPlatform/Advert/cart.html.twig */
class __TwigTemplate_aa6a726dc39af576765f0e836f0ae02e8da57e16103bda79a091af8c1142edc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LFD4SPlatform/Advert/cart.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6d1f75f3ed94afa732e884ad81dc761f6f217055a62e323d3a76a5d8004d506 = $this->env->getExtension("native_profiler");
        $__internal_a6d1f75f3ed94afa732e884ad81dc761f6f217055a62e323d3a76a5d8004d506->enter($__internal_a6d1f75f3ed94afa732e884ad81dc761f6f217055a62e323d3a76a5d8004d506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6d1f75f3ed94afa732e884ad81dc761f6f217055a62e323d3a76a5d8004d506->leave($__internal_a6d1f75f3ed94afa732e884ad81dc761f6f217055a62e323d3a76a5d8004d506_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_881c422831d86a5e76567edb3d0bf8641bd21af9d0bc28cffc29983cc490e073 = $this->env->getExtension("native_profiler");
        $__internal_881c422831d86a5e76567edb3d0bf8641bd21af9d0bc28cffc29983cc490e073->enter($__internal_881c422831d86a5e76567edb3d0bf8641bd21af9d0bc28cffc29983cc490e073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <body>
    <h1>Hello ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

        <p>
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple :
            afficher ce hello world !
        </p>
    </body>
";
        
        $__internal_881c422831d86a5e76567edb3d0bf8641bd21af9d0bc28cffc29983cc490e073->leave($__internal_881c422831d86a5e76567edb3d0bf8641bd21af9d0bc28cffc29983cc490e073_prof);

    }

    public function getTemplateName()
    {
        return "@LFD4SPlatform/Advert/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <body>*/
/*     <h1>Hello {{ nom }} !</h1>*/
/* */
/*         <p>*/
/*             Le Hello World est un grand classique en programmation.*/
/*             Il signifie énormément, car cela veut dire que vous avez*/
/*             réussi à exécuter le programme pour accomplir une tâche simple :*/
/*             afficher ce hello world !*/
/*         </p>*/
/*     </body>*/
/* {% endblock %}*/
