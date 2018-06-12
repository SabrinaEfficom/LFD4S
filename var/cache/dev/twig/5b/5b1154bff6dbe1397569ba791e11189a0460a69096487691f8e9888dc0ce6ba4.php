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
        $__internal_dac0a9fcf130b529ee84734e89e20b0814f83f33f7201977073dbcdd31029ed0 = $this->env->getExtension("native_profiler");
        $__internal_dac0a9fcf130b529ee84734e89e20b0814f83f33f7201977073dbcdd31029ed0->enter($__internal_dac0a9fcf130b529ee84734e89e20b0814f83f33f7201977073dbcdd31029ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dac0a9fcf130b529ee84734e89e20b0814f83f33f7201977073dbcdd31029ed0->leave($__internal_dac0a9fcf130b529ee84734e89e20b0814f83f33f7201977073dbcdd31029ed0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c14e724b1879c7b84ac8c5e3c02cbfe273dedf7f3b7b25efe5108ef9c2e9725 = $this->env->getExtension("native_profiler");
        $__internal_8c14e724b1879c7b84ac8c5e3c02cbfe273dedf7f3b7b25efe5108ef9c2e9725->enter($__internal_8c14e724b1879c7b84ac8c5e3c02cbfe273dedf7f3b7b25efe5108ef9c2e9725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8c14e724b1879c7b84ac8c5e3c02cbfe273dedf7f3b7b25efe5108ef9c2e9725->leave($__internal_8c14e724b1879c7b84ac8c5e3c02cbfe273dedf7f3b7b25efe5108ef9c2e9725_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf0f9914e4a1afe4f355a7fbbf4b26f86f65872aaa1e758ee13f216a532d3559 = $this->env->getExtension("native_profiler");
        $__internal_bf0f9914e4a1afe4f355a7fbbf4b26f86f65872aaa1e758ee13f216a532d3559->enter($__internal_bf0f9914e4a1afe4f355a7fbbf4b26f86f65872aaa1e758ee13f216a532d3559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bf0f9914e4a1afe4f355a7fbbf4b26f86f65872aaa1e758ee13f216a532d3559->leave($__internal_bf0f9914e4a1afe4f355a7fbbf4b26f86f65872aaa1e758ee13f216a532d3559_prof);

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
