<?php

/* @LFD4SPlatform/Advert/cart.html.twig */
class __TwigTemplate_aa6a726dc39af576765f0e836f0ae02e8da57e16103bda79a091af8c1142edc7 extends Twig_Template
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
        $__internal_b3c11f4766c9bdb56ab0ec6369c03b87f20db1ff133dacaeac9a0dee2fa47afe = $this->env->getExtension("native_profiler");
        $__internal_b3c11f4766c9bdb56ab0ec6369c03b87f20db1ff133dacaeac9a0dee2fa47afe->enter($__internal_b3c11f4766c9bdb56ab0ec6369c03b87f20db1ff133dacaeac9a0dee2fa47afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/cart.html.twig"));

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
        
        $__internal_b3c11f4766c9bdb56ab0ec6369c03b87f20db1ff133dacaeac9a0dee2fa47afe->leave($__internal_b3c11f4766c9bdb56ab0ec6369c03b87f20db1ff133dacaeac9a0dee2fa47afe_prof);

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
