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
        $__internal_0d182334ac9a9d0cf4eba9cef95497477adc36a42208b05b452639df1fcf256c = $this->env->getExtension("native_profiler");
        $__internal_0d182334ac9a9d0cf4eba9cef95497477adc36a42208b05b452639df1fcf256c->enter($__internal_0d182334ac9a9d0cf4eba9cef95497477adc36a42208b05b452639df1fcf256c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d182334ac9a9d0cf4eba9cef95497477adc36a42208b05b452639df1fcf256c->leave($__internal_0d182334ac9a9d0cf4eba9cef95497477adc36a42208b05b452639df1fcf256c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d6e1fc2112480ef120db4e3453b891d028c125df29638fcbdfd2df368387e39c = $this->env->getExtension("native_profiler");
        $__internal_d6e1fc2112480ef120db4e3453b891d028c125df29638fcbdfd2df368387e39c->enter($__internal_d6e1fc2112480ef120db4e3453b891d028c125df29638fcbdfd2df368387e39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d6e1fc2112480ef120db4e3453b891d028c125df29638fcbdfd2df368387e39c->leave($__internal_d6e1fc2112480ef120db4e3453b891d028c125df29638fcbdfd2df368387e39c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b78cd70f7848062bb573c2e6d9a4ffca2e02a2488564f787089f808c995c900a = $this->env->getExtension("native_profiler");
        $__internal_b78cd70f7848062bb573c2e6d9a4ffca2e02a2488564f787089f808c995c900a->enter($__internal_b78cd70f7848062bb573c2e6d9a4ffca2e02a2488564f787089f808c995c900a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b78cd70f7848062bb573c2e6d9a4ffca2e02a2488564f787089f808c995c900a->leave($__internal_b78cd70f7848062bb573c2e6d9a4ffca2e02a2488564f787089f808c995c900a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2e8628a8f14389051f5a4824750c4870cbd0f035c1d669e5aed09eb2b0eebbb = $this->env->getExtension("native_profiler");
        $__internal_f2e8628a8f14389051f5a4824750c4870cbd0f035c1d669e5aed09eb2b0eebbb->enter($__internal_f2e8628a8f14389051f5a4824750c4870cbd0f035c1d669e5aed09eb2b0eebbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f2e8628a8f14389051f5a4824750c4870cbd0f035c1d669e5aed09eb2b0eebbb->leave($__internal_f2e8628a8f14389051f5a4824750c4870cbd0f035c1d669e5aed09eb2b0eebbb_prof);

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
