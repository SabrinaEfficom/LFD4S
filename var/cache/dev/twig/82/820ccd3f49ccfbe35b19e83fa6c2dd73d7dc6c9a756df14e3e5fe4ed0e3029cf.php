<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_2d8a0ae08947e9db5ba1a84c84f6fbd63cce381a689f83ef0dcf30d984d6e8a7 extends Twig_Template
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
        $__internal_9632e2adda896092ad09c7e0c4ad9c7224fa6592d60acfe1f789611c3258c9d0 = $this->env->getExtension("native_profiler");
        $__internal_9632e2adda896092ad09c7e0c4ad9c7224fa6592d60acfe1f789611c3258c9d0->enter($__internal_9632e2adda896092ad09c7e0c4ad9c7224fa6592d60acfe1f789611c3258c9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9632e2adda896092ad09c7e0c4ad9c7224fa6592d60acfe1f789611c3258c9d0->leave($__internal_9632e2adda896092ad09c7e0c4ad9c7224fa6592d60acfe1f789611c3258c9d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
