<?php

/* @LFD4SPlatform/Advert/sign.html.twig */
class __TwigTemplate_ed8bd5bf34c3140d90b18bfc4241f5fa17fc2c0696da4fd192168df8add77f52 extends Twig_Template
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
        $__internal_45c6f9ffd44f3a625c4b5688e515f23bbc95bc38b729cdf9d023e56c6ba79346 = $this->env->getExtension("native_profiler");
        $__internal_45c6f9ffd44f3a625c4b5688e515f23bbc95bc38b729cdf9d023e56c6ba79346->enter($__internal_45c6f9ffd44f3a625c4b5688e515f23bbc95bc38b729cdf9d023e56c6ba79346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/sign.html.twig"));

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
        
        $__internal_45c6f9ffd44f3a625c4b5688e515f23bbc95bc38b729cdf9d023e56c6ba79346->leave($__internal_45c6f9ffd44f3a625c4b5688e515f23bbc95bc38b729cdf9d023e56c6ba79346_prof);

    }

    public function getTemplateName()
    {
        return "@LFD4SPlatform/Advert/sign.html.twig";
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
