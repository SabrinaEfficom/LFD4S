<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_a2cb0f32ea867658e7f9009c59b35ba33e9418765d1e11bd2d6460f506c040f7 extends Twig_Template
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
        $__internal_befd8df8be42571257de0c82cf086ed6b615b2997ee8bcec5a7f23ee46495a4b = $this->env->getExtension("native_profiler");
        $__internal_befd8df8be42571257de0c82cf086ed6b615b2997ee8bcec5a7f23ee46495a4b->enter($__internal_befd8df8be42571257de0c82cf086ed6b615b2997ee8bcec5a7f23ee46495a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_befd8df8be42571257de0c82cf086ed6b615b2997ee8bcec5a7f23ee46495a4b->leave($__internal_befd8df8be42571257de0c82cf086ed6b615b2997ee8bcec5a7f23ee46495a4b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe83896836d1096dd56fc47b3913df9330e49667b8a55092c8986673de885a20 = $this->env->getExtension("native_profiler");
        $__internal_fe83896836d1096dd56fc47b3913df9330e49667b8a55092c8986673de885a20->enter($__internal_fe83896836d1096dd56fc47b3913df9330e49667b8a55092c8986673de885a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fe83896836d1096dd56fc47b3913df9330e49667b8a55092c8986673de885a20->leave($__internal_fe83896836d1096dd56fc47b3913df9330e49667b8a55092c8986673de885a20_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
