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
        $__internal_ebc02957009315feee57e2f3970bb6315dd7873806e589cdb7a58e429c5fe83c = $this->env->getExtension("native_profiler");
        $__internal_ebc02957009315feee57e2f3970bb6315dd7873806e589cdb7a58e429c5fe83c->enter($__internal_ebc02957009315feee57e2f3970bb6315dd7873806e589cdb7a58e429c5fe83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:sign.html.twig"));

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
        
        $__internal_ebc02957009315feee57e2f3970bb6315dd7873806e589cdb7a58e429c5fe83c->leave($__internal_ebc02957009315feee57e2f3970bb6315dd7873806e589cdb7a58e429c5fe83c_prof);

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
