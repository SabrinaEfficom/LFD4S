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
        $__internal_63ad76a594c6f96843ee937405bf4119c385c208c6fa89ca3fc78fb0e02597e6 = $this->env->getExtension("native_profiler");
        $__internal_63ad76a594c6f96843ee937405bf4119c385c208c6fa89ca3fc78fb0e02597e6->enter($__internal_63ad76a594c6f96843ee937405bf4119c385c208c6fa89ca3fc78fb0e02597e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63ad76a594c6f96843ee937405bf4119c385c208c6fa89ca3fc78fb0e02597e6->leave($__internal_63ad76a594c6f96843ee937405bf4119c385c208c6fa89ca3fc78fb0e02597e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_780bee836886e4aac12e05b32324b69c343718a382a75b7ec741120dcb2ef599 = $this->env->getExtension("native_profiler");
        $__internal_780bee836886e4aac12e05b32324b69c343718a382a75b7ec741120dcb2ef599->enter($__internal_780bee836886e4aac12e05b32324b69c343718a382a75b7ec741120dcb2ef599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_780bee836886e4aac12e05b32324b69c343718a382a75b7ec741120dcb2ef599->leave($__internal_780bee836886e4aac12e05b32324b69c343718a382a75b7ec741120dcb2ef599_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef4b15fd6f5d8356025de43ad0e9f244c9f955587002774208ad9ad377159cfb = $this->env->getExtension("native_profiler");
        $__internal_ef4b15fd6f5d8356025de43ad0e9f244c9f955587002774208ad9ad377159cfb->enter($__internal_ef4b15fd6f5d8356025de43ad0e9f244c9f955587002774208ad9ad377159cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ef4b15fd6f5d8356025de43ad0e9f244c9f955587002774208ad9ad377159cfb->leave($__internal_ef4b15fd6f5d8356025de43ad0e9f244c9f955587002774208ad9ad377159cfb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d95e21099a731c6b5c5224a796a459932c0cef6885778b29b3c726c8f3b73d49 = $this->env->getExtension("native_profiler");
        $__internal_d95e21099a731c6b5c5224a796a459932c0cef6885778b29b3c726c8f3b73d49->enter($__internal_d95e21099a731c6b5c5224a796a459932c0cef6885778b29b3c726c8f3b73d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d95e21099a731c6b5c5224a796a459932c0cef6885778b29b3c726c8f3b73d49->leave($__internal_d95e21099a731c6b5c5224a796a459932c0cef6885778b29b3c726c8f3b73d49_prof);

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
