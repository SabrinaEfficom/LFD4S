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
        $__internal_b75b72e39bf26152304ac3d40ac417793f99cd3e401a4c10966ac10dfb196b07 = $this->env->getExtension("native_profiler");
        $__internal_b75b72e39bf26152304ac3d40ac417793f99cd3e401a4c10966ac10dfb196b07->enter($__internal_b75b72e39bf26152304ac3d40ac417793f99cd3e401a4c10966ac10dfb196b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b75b72e39bf26152304ac3d40ac417793f99cd3e401a4c10966ac10dfb196b07->leave($__internal_b75b72e39bf26152304ac3d40ac417793f99cd3e401a4c10966ac10dfb196b07_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c28131594fa13fa1e4ee5eda65bb5f82b79164e247600b0ce60c42adfef0551e = $this->env->getExtension("native_profiler");
        $__internal_c28131594fa13fa1e4ee5eda65bb5f82b79164e247600b0ce60c42adfef0551e->enter($__internal_c28131594fa13fa1e4ee5eda65bb5f82b79164e247600b0ce60c42adfef0551e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c28131594fa13fa1e4ee5eda65bb5f82b79164e247600b0ce60c42adfef0551e->leave($__internal_c28131594fa13fa1e4ee5eda65bb5f82b79164e247600b0ce60c42adfef0551e_prof);

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
