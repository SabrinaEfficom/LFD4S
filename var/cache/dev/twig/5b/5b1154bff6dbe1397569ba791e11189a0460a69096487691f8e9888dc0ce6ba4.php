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
        $__internal_c5098885c12bb11aef1f47c178ba3d27666300f07ef0939787369bb07910b5ec = $this->env->getExtension("native_profiler");
        $__internal_c5098885c12bb11aef1f47c178ba3d27666300f07ef0939787369bb07910b5ec->enter($__internal_c5098885c12bb11aef1f47c178ba3d27666300f07ef0939787369bb07910b5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5098885c12bb11aef1f47c178ba3d27666300f07ef0939787369bb07910b5ec->leave($__internal_c5098885c12bb11aef1f47c178ba3d27666300f07ef0939787369bb07910b5ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99f2c25e2e3cc5cb07282dfa46afeac9324467117d1735792c460ccde753b2b1 = $this->env->getExtension("native_profiler");
        $__internal_99f2c25e2e3cc5cb07282dfa46afeac9324467117d1735792c460ccde753b2b1->enter($__internal_99f2c25e2e3cc5cb07282dfa46afeac9324467117d1735792c460ccde753b2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_99f2c25e2e3cc5cb07282dfa46afeac9324467117d1735792c460ccde753b2b1->leave($__internal_99f2c25e2e3cc5cb07282dfa46afeac9324467117d1735792c460ccde753b2b1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4acb9732eb6d926c6aeb11c73fa5c8df634e3a0d9cac4893d1889a30e270fd77 = $this->env->getExtension("native_profiler");
        $__internal_4acb9732eb6d926c6aeb11c73fa5c8df634e3a0d9cac4893d1889a30e270fd77->enter($__internal_4acb9732eb6d926c6aeb11c73fa5c8df634e3a0d9cac4893d1889a30e270fd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4acb9732eb6d926c6aeb11c73fa5c8df634e3a0d9cac4893d1889a30e270fd77->leave($__internal_4acb9732eb6d926c6aeb11c73fa5c8df634e3a0d9cac4893d1889a30e270fd77_prof);

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
