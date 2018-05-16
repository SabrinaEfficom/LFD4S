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
        $__internal_27841bfb53479f585fbf2f219be70a994d9a9bf0358caf75dcc3ee08e90b88c2 = $this->env->getExtension("native_profiler");
        $__internal_27841bfb53479f585fbf2f219be70a994d9a9bf0358caf75dcc3ee08e90b88c2->enter($__internal_27841bfb53479f585fbf2f219be70a994d9a9bf0358caf75dcc3ee08e90b88c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27841bfb53479f585fbf2f219be70a994d9a9bf0358caf75dcc3ee08e90b88c2->leave($__internal_27841bfb53479f585fbf2f219be70a994d9a9bf0358caf75dcc3ee08e90b88c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39a8d761db3bb864623e63a22570c117e9b644908ad5da0205f6118b592106e6 = $this->env->getExtension("native_profiler");
        $__internal_39a8d761db3bb864623e63a22570c117e9b644908ad5da0205f6118b592106e6->enter($__internal_39a8d761db3bb864623e63a22570c117e9b644908ad5da0205f6118b592106e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_39a8d761db3bb864623e63a22570c117e9b644908ad5da0205f6118b592106e6->leave($__internal_39a8d761db3bb864623e63a22570c117e9b644908ad5da0205f6118b592106e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c5053338dea999efc848210408a5987523ab6d64af6a600f083435912193241 = $this->env->getExtension("native_profiler");
        $__internal_4c5053338dea999efc848210408a5987523ab6d64af6a600f083435912193241->enter($__internal_4c5053338dea999efc848210408a5987523ab6d64af6a600f083435912193241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4c5053338dea999efc848210408a5987523ab6d64af6a600f083435912193241->leave($__internal_4c5053338dea999efc848210408a5987523ab6d64af6a600f083435912193241_prof);

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
