<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c28383b67a6ee17d1ca48b2bdaf28e15676b36fd62fca152205a2c206fae0bbb extends Twig_Template
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
        $__internal_a0009fca27c4b540e98cabb5afd3e4dc1ebf06ec7dfa0fedab7ac74d14638c6d = $this->env->getExtension("native_profiler");
        $__internal_a0009fca27c4b540e98cabb5afd3e4dc1ebf06ec7dfa0fedab7ac74d14638c6d->enter($__internal_a0009fca27c4b540e98cabb5afd3e4dc1ebf06ec7dfa0fedab7ac74d14638c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a0009fca27c4b540e98cabb5afd3e4dc1ebf06ec7dfa0fedab7ac74d14638c6d->leave($__internal_a0009fca27c4b540e98cabb5afd3e4dc1ebf06ec7dfa0fedab7ac74d14638c6d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
