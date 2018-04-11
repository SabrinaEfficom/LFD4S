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
        $__internal_0b67a8418808ee12ed18fe3f5f7f0080e856eb1ef03161349ce602e04ba0acba = $this->env->getExtension("native_profiler");
        $__internal_0b67a8418808ee12ed18fe3f5f7f0080e856eb1ef03161349ce602e04ba0acba->enter($__internal_0b67a8418808ee12ed18fe3f5f7f0080e856eb1ef03161349ce602e04ba0acba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b67a8418808ee12ed18fe3f5f7f0080e856eb1ef03161349ce602e04ba0acba->leave($__internal_0b67a8418808ee12ed18fe3f5f7f0080e856eb1ef03161349ce602e04ba0acba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_906b5cd0b34294c8d10a3225b23369e2c8c269ca02bcd452054f715fbc7a74f5 = $this->env->getExtension("native_profiler");
        $__internal_906b5cd0b34294c8d10a3225b23369e2c8c269ca02bcd452054f715fbc7a74f5->enter($__internal_906b5cd0b34294c8d10a3225b23369e2c8c269ca02bcd452054f715fbc7a74f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_906b5cd0b34294c8d10a3225b23369e2c8c269ca02bcd452054f715fbc7a74f5->leave($__internal_906b5cd0b34294c8d10a3225b23369e2c8c269ca02bcd452054f715fbc7a74f5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c6fae3f504c74cae81acffafd5768285bbd15f2674c12a2f5b8089d03604247 = $this->env->getExtension("native_profiler");
        $__internal_2c6fae3f504c74cae81acffafd5768285bbd15f2674c12a2f5b8089d03604247->enter($__internal_2c6fae3f504c74cae81acffafd5768285bbd15f2674c12a2f5b8089d03604247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2c6fae3f504c74cae81acffafd5768285bbd15f2674c12a2f5b8089d03604247->leave($__internal_2c6fae3f504c74cae81acffafd5768285bbd15f2674c12a2f5b8089d03604247_prof);

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
