<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_6ff4a2e8b3ecdf70b26c6f5021b3db6e0af915b1ecc858f1e138d6885532b840 extends Twig_Template
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
        $__internal_ea41ff64086085faf3683adf4435ed8bc85cca16d2d7502c9fae27a4fbd9c455 = $this->env->getExtension("native_profiler");
        $__internal_ea41ff64086085faf3683adf4435ed8bc85cca16d2d7502c9fae27a4fbd9c455->enter($__internal_ea41ff64086085faf3683adf4435ed8bc85cca16d2d7502c9fae27a4fbd9c455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ea41ff64086085faf3683adf4435ed8bc85cca16d2d7502c9fae27a4fbd9c455->leave($__internal_ea41ff64086085faf3683adf4435ed8bc85cca16d2d7502c9fae27a4fbd9c455_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
