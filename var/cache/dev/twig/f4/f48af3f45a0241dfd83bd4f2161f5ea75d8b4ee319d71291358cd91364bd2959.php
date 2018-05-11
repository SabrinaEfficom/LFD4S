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
        $__internal_dc70cbf53dbcc9841ee623d48a391cb87184e2ad52d5931813d7572911ef38e5 = $this->env->getExtension("native_profiler");
        $__internal_dc70cbf53dbcc9841ee623d48a391cb87184e2ad52d5931813d7572911ef38e5->enter($__internal_dc70cbf53dbcc9841ee623d48a391cb87184e2ad52d5931813d7572911ef38e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dc70cbf53dbcc9841ee623d48a391cb87184e2ad52d5931813d7572911ef38e5->leave($__internal_dc70cbf53dbcc9841ee623d48a391cb87184e2ad52d5931813d7572911ef38e5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_24fec85f04cdf8441a2043256da8f2c185725e58b7fffa117a976a2fa66fd002 = $this->env->getExtension("native_profiler");
        $__internal_24fec85f04cdf8441a2043256da8f2c185725e58b7fffa117a976a2fa66fd002->enter($__internal_24fec85f04cdf8441a2043256da8f2c185725e58b7fffa117a976a2fa66fd002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_24fec85f04cdf8441a2043256da8f2c185725e58b7fffa117a976a2fa66fd002->leave($__internal_24fec85f04cdf8441a2043256da8f2c185725e58b7fffa117a976a2fa66fd002_prof);

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
