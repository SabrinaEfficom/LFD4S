<?php

/* LFD4SPlatformBundle:Advert:sign.html.twig */
class __TwigTemplate_2d4cf139a0391175c2f4c9cc1360a97bd40816d473b2e4a788597913514d89f9 extends Twig_Template
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
        $__internal_5bdbb58dca37987800e31a15a922b087e7e10493cab80ff3befe8ac7ed45f105 = $this->env->getExtension("native_profiler");
        $__internal_5bdbb58dca37987800e31a15a922b087e7e10493cab80ff3befe8ac7ed45f105->enter($__internal_5bdbb58dca37987800e31a15a922b087e7e10493cab80ff3befe8ac7ed45f105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:sign.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma première page !</title>
    </head>
    <body>
    <h1>Hello sign!";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " </h1>

        <p>
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple :
            afficher ce hello world !
        </p>
    </body>
</html>
";
        
        $__internal_5bdbb58dca37987800e31a15a922b087e7e10493cab80ff3befe8ac7ed45f105->leave($__internal_5bdbb58dca37987800e31a15a922b087e7e10493cab80ff3befe8ac7ed45f105_prof);

    }

    public function getTemplateName()
    {
        return "LFD4SPlatformBundle:Advert:sign.html.twig";
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
/*         <title>Bienvenue sur ma première page !</title>*/
/*     </head>*/
/*     <body>*/
/*     <h1>Hello sign!{{ nom }} </h1>*/
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
