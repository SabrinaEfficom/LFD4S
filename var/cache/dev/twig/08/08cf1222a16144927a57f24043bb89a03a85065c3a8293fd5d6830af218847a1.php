<?php

/* LFD4SPlatformBundle:Advert:log.html.twig */
class __TwigTemplate_907f5ff9e63dae918bdbb92a1d58023397bd37a29991ef716859077d0e6d86dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff3b912f3adf435288273e424671566843ea698171104fcbc375dbcfce00bd95 = $this->env->getExtension("native_profiler");
        $__internal_ff3b912f3adf435288273e424671566843ea698171104fcbc375dbcfce00bd95->enter($__internal_ff3b912f3adf435288273e424671566843ea698171104fcbc375dbcfce00bd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:log.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Page LOG !</title>
    </head>
    <body>
    <h1>Hello ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

        <p>
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple :
            afficher ce hello world !
        </p>
    </body>
</html>
";
        
        $__internal_ff3b912f3adf435288273e424671566843ea698171104fcbc375dbcfce00bd95->leave($__internal_ff3b912f3adf435288273e424671566843ea698171104fcbc375dbcfce00bd95_prof);

    }

    public function getTemplateName()
    {
        return "LFD4SPlatformBundle:Advert:log.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>Page LOG !</title>*/
/*     </head>*/
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
/* </html>*/
/* */
