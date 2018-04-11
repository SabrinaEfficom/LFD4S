<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d9e583058a378b2c5002d5482904ce58a4a191cccd326edd34f8af490c9b2da9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55df188256153cdf4424b246e9a518769b120b91adfef462e056e66e73ad2106 = $this->env->getExtension("native_profiler");
        $__internal_55df188256153cdf4424b246e9a518769b120b91adfef462e056e66e73ad2106->enter($__internal_55df188256153cdf4424b246e9a518769b120b91adfef462e056e66e73ad2106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_55df188256153cdf4424b246e9a518769b120b91adfef462e056e66e73ad2106->leave($__internal_55df188256153cdf4424b246e9a518769b120b91adfef462e056e66e73ad2106_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8615b140e0ddd41c21b672845cc6e03f03dddc5aa91c7b94017f04f35df022f = $this->env->getExtension("native_profiler");
        $__internal_c8615b140e0ddd41c21b672845cc6e03f03dddc5aa91c7b94017f04f35df022f->enter($__internal_c8615b140e0ddd41c21b672845cc6e03f03dddc5aa91c7b94017f04f35df022f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c8615b140e0ddd41c21b672845cc6e03f03dddc5aa91c7b94017f04f35df022f->leave($__internal_c8615b140e0ddd41c21b672845cc6e03f03dddc5aa91c7b94017f04f35df022f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
