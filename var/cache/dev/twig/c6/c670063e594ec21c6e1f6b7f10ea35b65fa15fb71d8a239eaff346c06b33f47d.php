<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6fc4785373ef34bc32213ff7f19d9c240fa2eace5c5c035a9171b8772d1826af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_419fd875bfba93639581450bb2eaeebbffafcf6367074e514b2b64e9a9a1911f = $this->env->getExtension("native_profiler");
        $__internal_419fd875bfba93639581450bb2eaeebbffafcf6367074e514b2b64e9a9a1911f->enter($__internal_419fd875bfba93639581450bb2eaeebbffafcf6367074e514b2b64e9a9a1911f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_419fd875bfba93639581450bb2eaeebbffafcf6367074e514b2b64e9a9a1911f->leave($__internal_419fd875bfba93639581450bb2eaeebbffafcf6367074e514b2b64e9a9a1911f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_316d18eb58218749ee781bcb361ee7f5e39aa62b673ec4cf8ef236c34c5a4767 = $this->env->getExtension("native_profiler");
        $__internal_316d18eb58218749ee781bcb361ee7f5e39aa62b673ec4cf8ef236c34c5a4767->enter($__internal_316d18eb58218749ee781bcb361ee7f5e39aa62b673ec4cf8ef236c34c5a4767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_316d18eb58218749ee781bcb361ee7f5e39aa62b673ec4cf8ef236c34c5a4767->leave($__internal_316d18eb58218749ee781bcb361ee7f5e39aa62b673ec4cf8ef236c34c5a4767_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f055246407f3521bebf01b0fff9e4ac003975db1ae633587cb94c35361239d9 = $this->env->getExtension("native_profiler");
        $__internal_6f055246407f3521bebf01b0fff9e4ac003975db1ae633587cb94c35361239d9->enter($__internal_6f055246407f3521bebf01b0fff9e4ac003975db1ae633587cb94c35361239d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6f055246407f3521bebf01b0fff9e4ac003975db1ae633587cb94c35361239d9->leave($__internal_6f055246407f3521bebf01b0fff9e4ac003975db1ae633587cb94c35361239d9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1c351bee8544bbf91dcacfe3bcde505a6e0cf00df4acc117d8e2982e7145eb7 = $this->env->getExtension("native_profiler");
        $__internal_a1c351bee8544bbf91dcacfe3bcde505a6e0cf00df4acc117d8e2982e7145eb7->enter($__internal_a1c351bee8544bbf91dcacfe3bcde505a6e0cf00df4acc117d8e2982e7145eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a1c351bee8544bbf91dcacfe3bcde505a6e0cf00df4acc117d8e2982e7145eb7->leave($__internal_a1c351bee8544bbf91dcacfe3bcde505a6e0cf00df4acc117d8e2982e7145eb7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
