<?php

/* LFD4SPlatformBundle:Advert:grower.html.twig */
class __TwigTemplate_869b463138293b536d22b3d58246f8ef05998c141ca9e8260b72b1a0c79c7c52 extends Twig_Template
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
        $__internal_44f6ddf189e42a1fc133cde8bcf0670230699ffc4832bd486e0f4c69dcb65f3c = $this->env->getExtension("native_profiler");
        $__internal_44f6ddf189e42a1fc133cde8bcf0670230699ffc4832bd486e0f4c69dcb65f3c->enter($__internal_44f6ddf189e42a1fc133cde8bcf0670230699ffc4832bd486e0f4c69dcb65f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:grower.html.twig"));

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
        
        $__internal_44f6ddf189e42a1fc133cde8bcf0670230699ffc4832bd486e0f4c69dcb65f3c->leave($__internal_44f6ddf189e42a1fc133cde8bcf0670230699ffc4832bd486e0f4c69dcb65f3c_prof);

    }

    public function getTemplateName()
    {
        return "LFD4SPlatformBundle:Advert:grower.html.twig";
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
