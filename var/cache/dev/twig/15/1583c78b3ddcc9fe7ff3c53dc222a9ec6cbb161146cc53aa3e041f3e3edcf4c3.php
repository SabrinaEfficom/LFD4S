<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_021073099fa19258b92032333920444f2151f0cff6d91ad1dcc1cfa7d6f42ea6 extends Twig_Template
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
        $__internal_27488a74747e613551a8bae1f415ad8f65b054dac5cf07094a868b2647d6bb02 = $this->env->getExtension("native_profiler");
        $__internal_27488a74747e613551a8bae1f415ad8f65b054dac5cf07094a868b2647d6bb02->enter($__internal_27488a74747e613551a8bae1f415ad8f65b054dac5cf07094a868b2647d6bb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_27488a74747e613551a8bae1f415ad8f65b054dac5cf07094a868b2647d6bb02->leave($__internal_27488a74747e613551a8bae1f415ad8f65b054dac5cf07094a868b2647d6bb02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
