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
        $__internal_b8294a6d8f9b97ac11d2a365783a2536abdeff76a4c625f59a650535583dba41 = $this->env->getExtension("native_profiler");
        $__internal_b8294a6d8f9b97ac11d2a365783a2536abdeff76a4c625f59a650535583dba41->enter($__internal_b8294a6d8f9b97ac11d2a365783a2536abdeff76a4c625f59a650535583dba41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8294a6d8f9b97ac11d2a365783a2536abdeff76a4c625f59a650535583dba41->leave($__internal_b8294a6d8f9b97ac11d2a365783a2536abdeff76a4c625f59a650535583dba41_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_05ce5e9ef916edebfcb989a8940ac36f38657dfe4e66f38f1b721ce80da21bc9 = $this->env->getExtension("native_profiler");
        $__internal_05ce5e9ef916edebfcb989a8940ac36f38657dfe4e66f38f1b721ce80da21bc9->enter($__internal_05ce5e9ef916edebfcb989a8940ac36f38657dfe4e66f38f1b721ce80da21bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_05ce5e9ef916edebfcb989a8940ac36f38657dfe4e66f38f1b721ce80da21bc9->leave($__internal_05ce5e9ef916edebfcb989a8940ac36f38657dfe4e66f38f1b721ce80da21bc9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9baf11a6a3e87f3af8a3e139af6cd78fe277004d5d1730ecd4b12a9c6fa34a00 = $this->env->getExtension("native_profiler");
        $__internal_9baf11a6a3e87f3af8a3e139af6cd78fe277004d5d1730ecd4b12a9c6fa34a00->enter($__internal_9baf11a6a3e87f3af8a3e139af6cd78fe277004d5d1730ecd4b12a9c6fa34a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9baf11a6a3e87f3af8a3e139af6cd78fe277004d5d1730ecd4b12a9c6fa34a00->leave($__internal_9baf11a6a3e87f3af8a3e139af6cd78fe277004d5d1730ecd4b12a9c6fa34a00_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90e7c50aced039738fcf999befcaae07a77f955b54a5952a79df08aa6032fb42 = $this->env->getExtension("native_profiler");
        $__internal_90e7c50aced039738fcf999befcaae07a77f955b54a5952a79df08aa6032fb42->enter($__internal_90e7c50aced039738fcf999befcaae07a77f955b54a5952a79df08aa6032fb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90e7c50aced039738fcf999befcaae07a77f955b54a5952a79df08aa6032fb42->leave($__internal_90e7c50aced039738fcf999befcaae07a77f955b54a5952a79df08aa6032fb42_prof);

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
