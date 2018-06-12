<?php

/* @LFD4SPlatform/Advert/log.html.twig */
class __TwigTemplate_c7d19a165b9611ac461e23eb1e68326d5dff7ed9fa43182d8b048e0370a87cd3 extends Twig_Template
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
        $__internal_55452107a1b7b2c60d3ed810ae0558e9be8477173f85670b3aaa0ca55ca6b044 = $this->env->getExtension("native_profiler");
        $__internal_55452107a1b7b2c60d3ed810ae0558e9be8477173f85670b3aaa0ca55ca6b044->enter($__internal_55452107a1b7b2c60d3ed810ae0558e9be8477173f85670b3aaa0ca55ca6b044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/log.html.twig"));

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
        
        $__internal_55452107a1b7b2c60d3ed810ae0558e9be8477173f85670b3aaa0ca55ca6b044->leave($__internal_55452107a1b7b2c60d3ed810ae0558e9be8477173f85670b3aaa0ca55ca6b044_prof);

    }

    public function getTemplateName()
    {
        return "@LFD4SPlatform/Advert/log.html.twig";
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
