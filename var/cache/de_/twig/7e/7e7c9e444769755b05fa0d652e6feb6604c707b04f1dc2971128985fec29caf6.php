<?php

/* LFD4SPlatformBundle:Advert:cart.html.twig */
class __TwigTemplate_a1a1ffa286578f81a1a21020bbe8d3736fdd16a1f7eb7c55fac778d5a618b524 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LFD4SPlatformBundle:Advert:cart.html.twig", 1);
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
        $__internal_390d8b7c6e8769cdbc1cb020b88bc0bed28fecb137b5d48b8b4ab12a4a6426bb = $this->env->getExtension("native_profiler");
        $__internal_390d8b7c6e8769cdbc1cb020b88bc0bed28fecb137b5d48b8b4ab12a4a6426bb->enter($__internal_390d8b7c6e8769cdbc1cb020b88bc0bed28fecb137b5d48b8b4ab12a4a6426bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_390d8b7c6e8769cdbc1cb020b88bc0bed28fecb137b5d48b8b4ab12a4a6426bb->leave($__internal_390d8b7c6e8769cdbc1cb020b88bc0bed28fecb137b5d48b8b4ab12a4a6426bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9382048c7f2546468f3a8e36b7cdf8032794f82729d78288faeaeaad250a7d68 = $this->env->getExtension("native_profiler");
        $__internal_9382048c7f2546468f3a8e36b7cdf8032794f82729d78288faeaeaad250a7d68->enter($__internal_9382048c7f2546468f3a8e36b7cdf8032794f82729d78288faeaeaad250a7d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9382048c7f2546468f3a8e36b7cdf8032794f82729d78288faeaeaad250a7d68->leave($__internal_9382048c7f2546468f3a8e36b7cdf8032794f82729d78288faeaeaad250a7d68_prof);

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
