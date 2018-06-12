<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ced1ca2a9dc079713d5d3d1a6449a4a72c1bfe99a3679d2fb63d908884cd3434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54e2bd39cb5dae1f09929a8abe8f40bd3bca4d39884699c4768bd37a9e4c69d5 = $this->env->getExtension("native_profiler");
        $__internal_54e2bd39cb5dae1f09929a8abe8f40bd3bca4d39884699c4768bd37a9e4c69d5->enter($__internal_54e2bd39cb5dae1f09929a8abe8f40bd3bca4d39884699c4768bd37a9e4c69d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54e2bd39cb5dae1f09929a8abe8f40bd3bca4d39884699c4768bd37a9e4c69d5->leave($__internal_54e2bd39cb5dae1f09929a8abe8f40bd3bca4d39884699c4768bd37a9e4c69d5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c1ec4549eba9fa13e239d0ed5a812f741e841f8ad5ac455419937b752cf2589 = $this->env->getExtension("native_profiler");
        $__internal_4c1ec4549eba9fa13e239d0ed5a812f741e841f8ad5ac455419937b752cf2589->enter($__internal_4c1ec4549eba9fa13e239d0ed5a812f741e841f8ad5ac455419937b752cf2589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4c1ec4549eba9fa13e239d0ed5a812f741e841f8ad5ac455419937b752cf2589->leave($__internal_4c1ec4549eba9fa13e239d0ed5a812f741e841f8ad5ac455419937b752cf2589_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6815a9162cd5b4cfe7afc25071e65a73aaea32317fdd36c2cb84b4cb8f3286ef = $this->env->getExtension("native_profiler");
        $__internal_6815a9162cd5b4cfe7afc25071e65a73aaea32317fdd36c2cb84b4cb8f3286ef->enter($__internal_6815a9162cd5b4cfe7afc25071e65a73aaea32317fdd36c2cb84b4cb8f3286ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6815a9162cd5b4cfe7afc25071e65a73aaea32317fdd36c2cb84b4cb8f3286ef->leave($__internal_6815a9162cd5b4cfe7afc25071e65a73aaea32317fdd36c2cb84b4cb8f3286ef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
