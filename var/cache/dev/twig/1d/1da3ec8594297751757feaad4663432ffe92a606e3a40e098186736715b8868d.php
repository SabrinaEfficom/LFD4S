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
        $__internal_dbe5217dce68929cc0811d801ebcf08ccf95fe92b20a4a9a074a6d979909b8f9 = $this->env->getExtension("native_profiler");
        $__internal_dbe5217dce68929cc0811d801ebcf08ccf95fe92b20a4a9a074a6d979909b8f9->enter($__internal_dbe5217dce68929cc0811d801ebcf08ccf95fe92b20a4a9a074a6d979909b8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbe5217dce68929cc0811d801ebcf08ccf95fe92b20a4a9a074a6d979909b8f9->leave($__internal_dbe5217dce68929cc0811d801ebcf08ccf95fe92b20a4a9a074a6d979909b8f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_449a1570e631c7a34cea61e3be88b54fd7df6a49eab9453d2d42b1f05a3e47d2 = $this->env->getExtension("native_profiler");
        $__internal_449a1570e631c7a34cea61e3be88b54fd7df6a49eab9453d2d42b1f05a3e47d2->enter($__internal_449a1570e631c7a34cea61e3be88b54fd7df6a49eab9453d2d42b1f05a3e47d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_449a1570e631c7a34cea61e3be88b54fd7df6a49eab9453d2d42b1f05a3e47d2->leave($__internal_449a1570e631c7a34cea61e3be88b54fd7df6a49eab9453d2d42b1f05a3e47d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_081de632462105e7986b48082e2a1bb49773f029369f7574b12503d4b6942d5b = $this->env->getExtension("native_profiler");
        $__internal_081de632462105e7986b48082e2a1bb49773f029369f7574b12503d4b6942d5b->enter($__internal_081de632462105e7986b48082e2a1bb49773f029369f7574b12503d4b6942d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_081de632462105e7986b48082e2a1bb49773f029369f7574b12503d4b6942d5b->leave($__internal_081de632462105e7986b48082e2a1bb49773f029369f7574b12503d4b6942d5b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7be36e41d62e3255fcf2074c0da962968cb1334f2ee862db27b796bca35939a = $this->env->getExtension("native_profiler");
        $__internal_c7be36e41d62e3255fcf2074c0da962968cb1334f2ee862db27b796bca35939a->enter($__internal_c7be36e41d62e3255fcf2074c0da962968cb1334f2ee862db27b796bca35939a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c7be36e41d62e3255fcf2074c0da962968cb1334f2ee862db27b796bca35939a->leave($__internal_c7be36e41d62e3255fcf2074c0da962968cb1334f2ee862db27b796bca35939a_prof);

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
