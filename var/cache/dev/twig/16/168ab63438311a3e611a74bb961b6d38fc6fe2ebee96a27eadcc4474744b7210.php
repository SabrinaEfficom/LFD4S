<?php

/* @LFD4SPlatform/Advert/grower.html.twig */
class __TwigTemplate_d395729c2ec172aab32d8096139f2c34761c5433ca2c3095be0edf4e271601f3 extends Twig_Template
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
        $__internal_24e9f0254d1826a43b16ccd45cdaf46333d93a16d4bfa204d20f6c606ed8ac44 = $this->env->getExtension("native_profiler");
        $__internal_24e9f0254d1826a43b16ccd45cdaf46333d93a16d4bfa204d20f6c606ed8ac44->enter($__internal_24e9f0254d1826a43b16ccd45cdaf46333d93a16d4bfa204d20f6c606ed8ac44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/grower.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Page PRODUCTEUR !</title>
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
        
        $__internal_24e9f0254d1826a43b16ccd45cdaf46333d93a16d4bfa204d20f6c606ed8ac44->leave($__internal_24e9f0254d1826a43b16ccd45cdaf46333d93a16d4bfa204d20f6c606ed8ac44_prof);

    }

    public function getTemplateName()
    {
        return "@LFD4SPlatform/Advert/grower.html.twig";
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
/*         <title>Page PRODUCTEUR !</title>*/
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
