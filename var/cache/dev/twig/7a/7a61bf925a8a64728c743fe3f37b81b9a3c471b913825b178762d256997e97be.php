<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d65f1434a09c42603d1fee499d9697bb8f06a89674b6083544a84b4deb7ac8d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_335e84ce68aaa2e43c0b8a4d945d9ffd54060288f3410a057d64b73ea40a30bf = $this->env->getExtension("native_profiler");
        $__internal_335e84ce68aaa2e43c0b8a4d945d9ffd54060288f3410a057d64b73ea40a30bf->enter($__internal_335e84ce68aaa2e43c0b8a4d945d9ffd54060288f3410a057d64b73ea40a30bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_335e84ce68aaa2e43c0b8a4d945d9ffd54060288f3410a057d64b73ea40a30bf->leave($__internal_335e84ce68aaa2e43c0b8a4d945d9ffd54060288f3410a057d64b73ea40a30bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33807d180866dee1bd24e3982ad013b06a6cbb3e1d564e0e92338eeb79ce4a11 = $this->env->getExtension("native_profiler");
        $__internal_33807d180866dee1bd24e3982ad013b06a6cbb3e1d564e0e92338eeb79ce4a11->enter($__internal_33807d180866dee1bd24e3982ad013b06a6cbb3e1d564e0e92338eeb79ce4a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_33807d180866dee1bd24e3982ad013b06a6cbb3e1d564e0e92338eeb79ce4a11->leave($__internal_33807d180866dee1bd24e3982ad013b06a6cbb3e1d564e0e92338eeb79ce4a11_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_500ce9153fe028c0c6aba8e47be3097930274e482c444bc7ebed4f99ed79102d = $this->env->getExtension("native_profiler");
        $__internal_500ce9153fe028c0c6aba8e47be3097930274e482c444bc7ebed4f99ed79102d->enter($__internal_500ce9153fe028c0c6aba8e47be3097930274e482c444bc7ebed4f99ed79102d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_500ce9153fe028c0c6aba8e47be3097930274e482c444bc7ebed4f99ed79102d->leave($__internal_500ce9153fe028c0c6aba8e47be3097930274e482c444bc7ebed4f99ed79102d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8af4f2b52d4cb98ced4585f27a8a771d1d76049e988e27c07f91c4d31221f9a2 = $this->env->getExtension("native_profiler");
        $__internal_8af4f2b52d4cb98ced4585f27a8a771d1d76049e988e27c07f91c4d31221f9a2->enter($__internal_8af4f2b52d4cb98ced4585f27a8a771d1d76049e988e27c07f91c4d31221f9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8af4f2b52d4cb98ced4585f27a8a771d1d76049e988e27c07f91c4d31221f9a2->leave($__internal_8af4f2b52d4cb98ced4585f27a8a771d1d76049e988e27c07f91c4d31221f9a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
