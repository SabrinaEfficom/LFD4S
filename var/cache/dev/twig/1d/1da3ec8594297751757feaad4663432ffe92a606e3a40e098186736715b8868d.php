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
        $__internal_71711bbf4f7eda1efecaed179341e74c959e140fea727525b949d07dead6f9dc = $this->env->getExtension("native_profiler");
        $__internal_71711bbf4f7eda1efecaed179341e74c959e140fea727525b949d07dead6f9dc->enter($__internal_71711bbf4f7eda1efecaed179341e74c959e140fea727525b949d07dead6f9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71711bbf4f7eda1efecaed179341e74c959e140fea727525b949d07dead6f9dc->leave($__internal_71711bbf4f7eda1efecaed179341e74c959e140fea727525b949d07dead6f9dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa9162fc41e8ca8779ab785aeaf9d83f447e384f6c1588ab0a20550aad49d12e = $this->env->getExtension("native_profiler");
        $__internal_fa9162fc41e8ca8779ab785aeaf9d83f447e384f6c1588ab0a20550aad49d12e->enter($__internal_fa9162fc41e8ca8779ab785aeaf9d83f447e384f6c1588ab0a20550aad49d12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fa9162fc41e8ca8779ab785aeaf9d83f447e384f6c1588ab0a20550aad49d12e->leave($__internal_fa9162fc41e8ca8779ab785aeaf9d83f447e384f6c1588ab0a20550aad49d12e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d45561e9f08ea55e8020bf286fe6626f512a13e09c8349d61374fb056ecc2bec = $this->env->getExtension("native_profiler");
        $__internal_d45561e9f08ea55e8020bf286fe6626f512a13e09c8349d61374fb056ecc2bec->enter($__internal_d45561e9f08ea55e8020bf286fe6626f512a13e09c8349d61374fb056ecc2bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d45561e9f08ea55e8020bf286fe6626f512a13e09c8349d61374fb056ecc2bec->leave($__internal_d45561e9f08ea55e8020bf286fe6626f512a13e09c8349d61374fb056ecc2bec_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_242e3f1c6a0f4ebb37e26e915bcd5683636de25d97ca986cca504ec48e36833b = $this->env->getExtension("native_profiler");
        $__internal_242e3f1c6a0f4ebb37e26e915bcd5683636de25d97ca986cca504ec48e36833b->enter($__internal_242e3f1c6a0f4ebb37e26e915bcd5683636de25d97ca986cca504ec48e36833b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_242e3f1c6a0f4ebb37e26e915bcd5683636de25d97ca986cca504ec48e36833b->leave($__internal_242e3f1c6a0f4ebb37e26e915bcd5683636de25d97ca986cca504ec48e36833b_prof);

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
