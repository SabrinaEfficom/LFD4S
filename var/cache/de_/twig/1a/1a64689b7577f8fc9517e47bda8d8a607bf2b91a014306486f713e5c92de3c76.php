<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c3ed4447d3ba564d5d484a3d4789417cc4f7cfac06de6eeaddc0ee8d8872782f extends Twig_Template
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
        $__internal_1dc970c89c9f8dad493c96e0b33929a36485ae22da511db13b36d6314df2b880 = $this->env->getExtension("native_profiler");
        $__internal_1dc970c89c9f8dad493c96e0b33929a36485ae22da511db13b36d6314df2b880->enter($__internal_1dc970c89c9f8dad493c96e0b33929a36485ae22da511db13b36d6314df2b880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1dc970c89c9f8dad493c96e0b33929a36485ae22da511db13b36d6314df2b880->leave($__internal_1dc970c89c9f8dad493c96e0b33929a36485ae22da511db13b36d6314df2b880_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */