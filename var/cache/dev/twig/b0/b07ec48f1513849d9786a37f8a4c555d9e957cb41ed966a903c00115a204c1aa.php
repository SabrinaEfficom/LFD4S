<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c3ded41fca1d6b8f90bb67fcb627dbe4f77756022ae066e2d6dc6725738194e4 extends Twig_Template
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
        $__internal_936045ab374fc660f6253f8883e0d2bda201e7c93b11cf6157636af6c72b29b4 = $this->env->getExtension("native_profiler");
        $__internal_936045ab374fc660f6253f8883e0d2bda201e7c93b11cf6157636af6c72b29b4->enter($__internal_936045ab374fc660f6253f8883e0d2bda201e7c93b11cf6157636af6c72b29b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_936045ab374fc660f6253f8883e0d2bda201e7c93b11cf6157636af6c72b29b4->leave($__internal_936045ab374fc660f6253f8883e0d2bda201e7c93b11cf6157636af6c72b29b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
