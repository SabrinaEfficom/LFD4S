<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b3c8ec69759b552c7ec82e6876c8afd4213ba3a6c8de12bde3f1503e96fb196b extends Twig_Template
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
        $__internal_b88b73d0f1154178af27f8f9ef3f883dbbfd04dc826858ea12d717d6a2f145cf = $this->env->getExtension("native_profiler");
        $__internal_b88b73d0f1154178af27f8f9ef3f883dbbfd04dc826858ea12d717d6a2f145cf->enter($__internal_b88b73d0f1154178af27f8f9ef3f883dbbfd04dc826858ea12d717d6a2f145cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b88b73d0f1154178af27f8f9ef3f883dbbfd04dc826858ea12d717d6a2f145cf->leave($__internal_b88b73d0f1154178af27f8f9ef3f883dbbfd04dc826858ea12d717d6a2f145cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
