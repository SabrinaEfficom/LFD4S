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
        $__internal_2061fe56c766f033ff53df1711bffb5ae0b4e7804da7fe376ea8866eb67128a9 = $this->env->getExtension("native_profiler");
        $__internal_2061fe56c766f033ff53df1711bffb5ae0b4e7804da7fe376ea8866eb67128a9->enter($__internal_2061fe56c766f033ff53df1711bffb5ae0b4e7804da7fe376ea8866eb67128a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2061fe56c766f033ff53df1711bffb5ae0b4e7804da7fe376ea8866eb67128a9->leave($__internal_2061fe56c766f033ff53df1711bffb5ae0b4e7804da7fe376ea8866eb67128a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c14361bdb4cc36778025258892d99a24ca616c9291641d06a055deba7f85bd47 = $this->env->getExtension("native_profiler");
        $__internal_c14361bdb4cc36778025258892d99a24ca616c9291641d06a055deba7f85bd47->enter($__internal_c14361bdb4cc36778025258892d99a24ca616c9291641d06a055deba7f85bd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c14361bdb4cc36778025258892d99a24ca616c9291641d06a055deba7f85bd47->leave($__internal_c14361bdb4cc36778025258892d99a24ca616c9291641d06a055deba7f85bd47_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33ba0e69f4e9c3284417c8564bc4b28cde8baf2e49f7ebb68d199b8b43856e91 = $this->env->getExtension("native_profiler");
        $__internal_33ba0e69f4e9c3284417c8564bc4b28cde8baf2e49f7ebb68d199b8b43856e91->enter($__internal_33ba0e69f4e9c3284417c8564bc4b28cde8baf2e49f7ebb68d199b8b43856e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33ba0e69f4e9c3284417c8564bc4b28cde8baf2e49f7ebb68d199b8b43856e91->leave($__internal_33ba0e69f4e9c3284417c8564bc4b28cde8baf2e49f7ebb68d199b8b43856e91_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_23282899586cffc9908cf2d4170f4e24fa894ed751cf4577305d2eb2b60a6896 = $this->env->getExtension("native_profiler");
        $__internal_23282899586cffc9908cf2d4170f4e24fa894ed751cf4577305d2eb2b60a6896->enter($__internal_23282899586cffc9908cf2d4170f4e24fa894ed751cf4577305d2eb2b60a6896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_23282899586cffc9908cf2d4170f4e24fa894ed751cf4577305d2eb2b60a6896->leave($__internal_23282899586cffc9908cf2d4170f4e24fa894ed751cf4577305d2eb2b60a6896_prof);

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
