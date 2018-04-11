<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_562f611d19616af99a3a2995355605aa7096b82e25879aefe6ce426303f926f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4aa9b3e7dbfc0fc47e63c9b1d6c6447ddf8dd61013195fa13db3e9f3e2f4bd0 = $this->env->getExtension("native_profiler");
        $__internal_c4aa9b3e7dbfc0fc47e63c9b1d6c6447ddf8dd61013195fa13db3e9f3e2f4bd0->enter($__internal_c4aa9b3e7dbfc0fc47e63c9b1d6c6447ddf8dd61013195fa13db3e9f3e2f4bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4aa9b3e7dbfc0fc47e63c9b1d6c6447ddf8dd61013195fa13db3e9f3e2f4bd0->leave($__internal_c4aa9b3e7dbfc0fc47e63c9b1d6c6447ddf8dd61013195fa13db3e9f3e2f4bd0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_81e549caee73f886f76a92813aabaade3db346d14760717f85dcc15017951106 = $this->env->getExtension("native_profiler");
        $__internal_81e549caee73f886f76a92813aabaade3db346d14760717f85dcc15017951106->enter($__internal_81e549caee73f886f76a92813aabaade3db346d14760717f85dcc15017951106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_81e549caee73f886f76a92813aabaade3db346d14760717f85dcc15017951106->leave($__internal_81e549caee73f886f76a92813aabaade3db346d14760717f85dcc15017951106_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_181da99178e2c739b85943daaa1b7eec212361f1f83951a441563dfc95251adf = $this->env->getExtension("native_profiler");
        $__internal_181da99178e2c739b85943daaa1b7eec212361f1f83951a441563dfc95251adf->enter($__internal_181da99178e2c739b85943daaa1b7eec212361f1f83951a441563dfc95251adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_181da99178e2c739b85943daaa1b7eec212361f1f83951a441563dfc95251adf->leave($__internal_181da99178e2c739b85943daaa1b7eec212361f1f83951a441563dfc95251adf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_61f24fef4bbba96ce05b67d0b24a1a7b8f34d2417083eed8a7e2e5d94733ba1f = $this->env->getExtension("native_profiler");
        $__internal_61f24fef4bbba96ce05b67d0b24a1a7b8f34d2417083eed8a7e2e5d94733ba1f->enter($__internal_61f24fef4bbba96ce05b67d0b24a1a7b8f34d2417083eed8a7e2e5d94733ba1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_61f24fef4bbba96ce05b67d0b24a1a7b8f34d2417083eed8a7e2e5d94733ba1f->leave($__internal_61f24fef4bbba96ce05b67d0b24a1a7b8f34d2417083eed8a7e2e5d94733ba1f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
