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
        $__internal_71e38f0885b779893e9ecefd8ae56b9b6f4a22155efd6aa55328434cb56929d5 = $this->env->getExtension("native_profiler");
        $__internal_71e38f0885b779893e9ecefd8ae56b9b6f4a22155efd6aa55328434cb56929d5->enter($__internal_71e38f0885b779893e9ecefd8ae56b9b6f4a22155efd6aa55328434cb56929d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_71e38f0885b779893e9ecefd8ae56b9b6f4a22155efd6aa55328434cb56929d5->leave($__internal_71e38f0885b779893e9ecefd8ae56b9b6f4a22155efd6aa55328434cb56929d5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d372fde1e58bf706725353ec007335e4f10dc7e5be2dd2e9a3b2324b0e2d0b9a = $this->env->getExtension("native_profiler");
        $__internal_d372fde1e58bf706725353ec007335e4f10dc7e5be2dd2e9a3b2324b0e2d0b9a->enter($__internal_d372fde1e58bf706725353ec007335e4f10dc7e5be2dd2e9a3b2324b0e2d0b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d372fde1e58bf706725353ec007335e4f10dc7e5be2dd2e9a3b2324b0e2d0b9a->leave($__internal_d372fde1e58bf706725353ec007335e4f10dc7e5be2dd2e9a3b2324b0e2d0b9a_prof);

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
