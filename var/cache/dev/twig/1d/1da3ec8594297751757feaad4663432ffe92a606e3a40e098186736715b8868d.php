<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b41a225df3c9caa9bfc6fbce9ca054e3bcc8529d9e8a3481781096d1b768ccdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_2ad637e43525020cf48b43bbd8a014e34654a95af088345d30db5932892c9b75 = $this->env->getExtension("native_profiler");
        $__internal_2ad637e43525020cf48b43bbd8a014e34654a95af088345d30db5932892c9b75->enter($__internal_2ad637e43525020cf48b43bbd8a014e34654a95af088345d30db5932892c9b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ad637e43525020cf48b43bbd8a014e34654a95af088345d30db5932892c9b75->leave($__internal_2ad637e43525020cf48b43bbd8a014e34654a95af088345d30db5932892c9b75_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bb6235f905d0cc4edf573e4a83a9e116ebedcc49e7eac23ce6891b07275f80c = $this->env->getExtension("native_profiler");
        $__internal_3bb6235f905d0cc4edf573e4a83a9e116ebedcc49e7eac23ce6891b07275f80c->enter($__internal_3bb6235f905d0cc4edf573e4a83a9e116ebedcc49e7eac23ce6891b07275f80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3bb6235f905d0cc4edf573e4a83a9e116ebedcc49e7eac23ce6891b07275f80c->leave($__internal_3bb6235f905d0cc4edf573e4a83a9e116ebedcc49e7eac23ce6891b07275f80c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16a21821abb7d3ee7900f45aec2753ef3137a14b21c67707a2833433e35ba23e = $this->env->getExtension("native_profiler");
        $__internal_16a21821abb7d3ee7900f45aec2753ef3137a14b21c67707a2833433e35ba23e->enter($__internal_16a21821abb7d3ee7900f45aec2753ef3137a14b21c67707a2833433e35ba23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_16a21821abb7d3ee7900f45aec2753ef3137a14b21c67707a2833433e35ba23e->leave($__internal_16a21821abb7d3ee7900f45aec2753ef3137a14b21c67707a2833433e35ba23e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7f8c6312bd57c0917baa3a947c60f0f5c834b6d1336056d3a1ab7493b098461 = $this->env->getExtension("native_profiler");
        $__internal_a7f8c6312bd57c0917baa3a947c60f0f5c834b6d1336056d3a1ab7493b098461->enter($__internal_a7f8c6312bd57c0917baa3a947c60f0f5c834b6d1336056d3a1ab7493b098461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a7f8c6312bd57c0917baa3a947c60f0f5c834b6d1336056d3a1ab7493b098461->leave($__internal_a7f8c6312bd57c0917baa3a947c60f0f5c834b6d1336056d3a1ab7493b098461_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
