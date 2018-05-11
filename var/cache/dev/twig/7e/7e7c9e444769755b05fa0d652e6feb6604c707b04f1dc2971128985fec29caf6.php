<?php

/* LFD4SPlatformBundle:Advert:cart.html.twig */
class __TwigTemplate_a1a1ffa286578f81a1a21020bbe8d3736fdd16a1f7eb7c55fac778d5a618b524 extends Twig_Template
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
        $__internal_d819ca957a83b599bc636b94a4ba7c94ce39b453ae9a5321f1667d63f506eb45 = $this->env->getExtension("native_profiler");
        $__internal_d819ca957a83b599bc636b94a4ba7c94ce39b453ae9a5321f1667d63f506eb45->enter($__internal_d819ca957a83b599bc636b94a4ba7c94ce39b453ae9a5321f1667d63f506eb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:cart.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma première page !</title>
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
        
        $__internal_d819ca957a83b599bc636b94a4ba7c94ce39b453ae9a5321f1667d63f506eb45->leave($__internal_d819ca957a83b599bc636b94a4ba7c94ce39b453ae9a5321f1667d63f506eb45_prof);

    }

    public function getTemplateName()
    {
        return "LFD4SPlatformBundle:Advert:cart.html.twig";
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
