<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_0641ccbe16580a95d32fe75af363cb07d9b625689d6eb8b9bcddf91c70a8fbd7 extends Twig_Template
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
        $__internal_050cd41db55b8c7aa5fb6a226d14f99043bf354ba1923db55e25a04cb8b264de = $this->env->getExtension("native_profiler");
        $__internal_050cd41db55b8c7aa5fb6a226d14f99043bf354ba1923db55e25a04cb8b264de->enter($__internal_050cd41db55b8c7aa5fb6a226d14f99043bf354ba1923db55e25a04cb8b264de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_050cd41db55b8c7aa5fb6a226d14f99043bf354ba1923db55e25a04cb8b264de->leave($__internal_050cd41db55b8c7aa5fb6a226d14f99043bf354ba1923db55e25a04cb8b264de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
