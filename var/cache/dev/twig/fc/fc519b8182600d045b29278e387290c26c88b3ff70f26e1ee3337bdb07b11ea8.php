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
        $__internal_18e05b3bf2ca99b767c060cbae788b87889905b5ebe396d31d4c18c166e00535 = $this->env->getExtension("native_profiler");
        $__internal_18e05b3bf2ca99b767c060cbae788b87889905b5ebe396d31d4c18c166e00535->enter($__internal_18e05b3bf2ca99b767c060cbae788b87889905b5ebe396d31d4c18c166e00535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e05b3bf2ca99b767c060cbae788b87889905b5ebe396d31d4c18c166e00535->leave($__internal_18e05b3bf2ca99b767c060cbae788b87889905b5ebe396d31d4c18c166e00535_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7291fb65493afc2e329da3c4e182c5332fec586fc1d10a24cc3a0fd4482f888 = $this->env->getExtension("native_profiler");
        $__internal_a7291fb65493afc2e329da3c4e182c5332fec586fc1d10a24cc3a0fd4482f888->enter($__internal_a7291fb65493afc2e329da3c4e182c5332fec586fc1d10a24cc3a0fd4482f888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a7291fb65493afc2e329da3c4e182c5332fec586fc1d10a24cc3a0fd4482f888->leave($__internal_a7291fb65493afc2e329da3c4e182c5332fec586fc1d10a24cc3a0fd4482f888_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b74c915fbb4de99ae5abcc1789b8311453dbce5ced5e288472f2e9738f3d22dc = $this->env->getExtension("native_profiler");
        $__internal_b74c915fbb4de99ae5abcc1789b8311453dbce5ced5e288472f2e9738f3d22dc->enter($__internal_b74c915fbb4de99ae5abcc1789b8311453dbce5ced5e288472f2e9738f3d22dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b74c915fbb4de99ae5abcc1789b8311453dbce5ced5e288472f2e9738f3d22dc->leave($__internal_b74c915fbb4de99ae5abcc1789b8311453dbce5ced5e288472f2e9738f3d22dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d72106078da6d8eabfc83e922c788026c3e1fc127b8633e7e7de2c34036eca7b = $this->env->getExtension("native_profiler");
        $__internal_d72106078da6d8eabfc83e922c788026c3e1fc127b8633e7e7de2c34036eca7b->enter($__internal_d72106078da6d8eabfc83e922c788026c3e1fc127b8633e7e7de2c34036eca7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d72106078da6d8eabfc83e922c788026c3e1fc127b8633e7e7de2c34036eca7b->leave($__internal_d72106078da6d8eabfc83e922c788026c3e1fc127b8633e7e7de2c34036eca7b_prof);

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
