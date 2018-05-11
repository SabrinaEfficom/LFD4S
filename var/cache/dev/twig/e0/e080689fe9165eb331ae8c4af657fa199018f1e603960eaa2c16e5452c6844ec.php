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
        $__internal_93f5e20c31199c0ade9097eb769bf3c3f8f79e420efbe9fa5b7f485330255a2f = $this->env->getExtension("native_profiler");
        $__internal_93f5e20c31199c0ade9097eb769bf3c3f8f79e420efbe9fa5b7f485330255a2f->enter($__internal_93f5e20c31199c0ade9097eb769bf3c3f8f79e420efbe9fa5b7f485330255a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93f5e20c31199c0ade9097eb769bf3c3f8f79e420efbe9fa5b7f485330255a2f->leave($__internal_93f5e20c31199c0ade9097eb769bf3c3f8f79e420efbe9fa5b7f485330255a2f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6a963d63ce6b12b78879d52d2560b52c5bcc02fb7920f9b71adcf9a461f2697 = $this->env->getExtension("native_profiler");
        $__internal_c6a963d63ce6b12b78879d52d2560b52c5bcc02fb7920f9b71adcf9a461f2697->enter($__internal_c6a963d63ce6b12b78879d52d2560b52c5bcc02fb7920f9b71adcf9a461f2697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c6a963d63ce6b12b78879d52d2560b52c5bcc02fb7920f9b71adcf9a461f2697->leave($__internal_c6a963d63ce6b12b78879d52d2560b52c5bcc02fb7920f9b71adcf9a461f2697_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd65680ee207ab003ab4564546dac53bd16ae4b634cda49bdb3974f3a32b7991 = $this->env->getExtension("native_profiler");
        $__internal_dd65680ee207ab003ab4564546dac53bd16ae4b634cda49bdb3974f3a32b7991->enter($__internal_dd65680ee207ab003ab4564546dac53bd16ae4b634cda49bdb3974f3a32b7991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dd65680ee207ab003ab4564546dac53bd16ae4b634cda49bdb3974f3a32b7991->leave($__internal_dd65680ee207ab003ab4564546dac53bd16ae4b634cda49bdb3974f3a32b7991_prof);

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
