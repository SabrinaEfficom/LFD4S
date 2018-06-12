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
        $__internal_53fe1299c4c9cc21d598cd90312fe8e3077d84306592f50b426c9b5a55e02abf = $this->env->getExtension("native_profiler");
        $__internal_53fe1299c4c9cc21d598cd90312fe8e3077d84306592f50b426c9b5a55e02abf->enter($__internal_53fe1299c4c9cc21d598cd90312fe8e3077d84306592f50b426c9b5a55e02abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53fe1299c4c9cc21d598cd90312fe8e3077d84306592f50b426c9b5a55e02abf->leave($__internal_53fe1299c4c9cc21d598cd90312fe8e3077d84306592f50b426c9b5a55e02abf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfe6f02c57f8c78cf5c58ca5b80ddf492d1f3b98908b72a031f5abb9586dbe45 = $this->env->getExtension("native_profiler");
        $__internal_dfe6f02c57f8c78cf5c58ca5b80ddf492d1f3b98908b72a031f5abb9586dbe45->enter($__internal_dfe6f02c57f8c78cf5c58ca5b80ddf492d1f3b98908b72a031f5abb9586dbe45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dfe6f02c57f8c78cf5c58ca5b80ddf492d1f3b98908b72a031f5abb9586dbe45->leave($__internal_dfe6f02c57f8c78cf5c58ca5b80ddf492d1f3b98908b72a031f5abb9586dbe45_prof);

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
