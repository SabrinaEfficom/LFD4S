<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0a4e1cf3d281c042bf28f848b40e1a3951692acb401704ab0a6d0e75dff54fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_01912d8a04c735961ad89605a2ecea9757572177a7fc7d67789b2d2435fede0b = $this->env->getExtension("native_profiler");
        $__internal_01912d8a04c735961ad89605a2ecea9757572177a7fc7d67789b2d2435fede0b->enter($__internal_01912d8a04c735961ad89605a2ecea9757572177a7fc7d67789b2d2435fede0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01912d8a04c735961ad89605a2ecea9757572177a7fc7d67789b2d2435fede0b->leave($__internal_01912d8a04c735961ad89605a2ecea9757572177a7fc7d67789b2d2435fede0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f05a2c396729e2e3b6109dc4126e1c6ff9c26291767b3927dc28f96705c15b4c = $this->env->getExtension("native_profiler");
        $__internal_f05a2c396729e2e3b6109dc4126e1c6ff9c26291767b3927dc28f96705c15b4c->enter($__internal_f05a2c396729e2e3b6109dc4126e1c6ff9c26291767b3927dc28f96705c15b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f05a2c396729e2e3b6109dc4126e1c6ff9c26291767b3927dc28f96705c15b4c->leave($__internal_f05a2c396729e2e3b6109dc4126e1c6ff9c26291767b3927dc28f96705c15b4c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4357210f7fb4f390f2e71ae4e9f414a5a3a4acd35c70a00997bde11fbc0f27c = $this->env->getExtension("native_profiler");
        $__internal_e4357210f7fb4f390f2e71ae4e9f414a5a3a4acd35c70a00997bde11fbc0f27c->enter($__internal_e4357210f7fb4f390f2e71ae4e9f414a5a3a4acd35c70a00997bde11fbc0f27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e4357210f7fb4f390f2e71ae4e9f414a5a3a4acd35c70a00997bde11fbc0f27c->leave($__internal_e4357210f7fb4f390f2e71ae4e9f414a5a3a4acd35c70a00997bde11fbc0f27c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
