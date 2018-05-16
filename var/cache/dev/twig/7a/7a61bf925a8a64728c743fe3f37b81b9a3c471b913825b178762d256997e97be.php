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
        $__internal_3955b7eff4d27fdbe72728510793917b9e5bce0b11a30a25152a9d7d88f542cc = $this->env->getExtension("native_profiler");
        $__internal_3955b7eff4d27fdbe72728510793917b9e5bce0b11a30a25152a9d7d88f542cc->enter($__internal_3955b7eff4d27fdbe72728510793917b9e5bce0b11a30a25152a9d7d88f542cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3955b7eff4d27fdbe72728510793917b9e5bce0b11a30a25152a9d7d88f542cc->leave($__internal_3955b7eff4d27fdbe72728510793917b9e5bce0b11a30a25152a9d7d88f542cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_32a6d618a6d67ff36abf818012ccbd4123ad1c127fa9073f3351249409b6fd9c = $this->env->getExtension("native_profiler");
        $__internal_32a6d618a6d67ff36abf818012ccbd4123ad1c127fa9073f3351249409b6fd9c->enter($__internal_32a6d618a6d67ff36abf818012ccbd4123ad1c127fa9073f3351249409b6fd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_32a6d618a6d67ff36abf818012ccbd4123ad1c127fa9073f3351249409b6fd9c->leave($__internal_32a6d618a6d67ff36abf818012ccbd4123ad1c127fa9073f3351249409b6fd9c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_727ceea110c9845f850e0c7c1a379f741e88db32035c5296ec3ccf043a5adff8 = $this->env->getExtension("native_profiler");
        $__internal_727ceea110c9845f850e0c7c1a379f741e88db32035c5296ec3ccf043a5adff8->enter($__internal_727ceea110c9845f850e0c7c1a379f741e88db32035c5296ec3ccf043a5adff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_727ceea110c9845f850e0c7c1a379f741e88db32035c5296ec3ccf043a5adff8->leave($__internal_727ceea110c9845f850e0c7c1a379f741e88db32035c5296ec3ccf043a5adff8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b218769cd4bde24ae1376d74ca90469f13c685d30c23e4349600a2cebb22e5ff = $this->env->getExtension("native_profiler");
        $__internal_b218769cd4bde24ae1376d74ca90469f13c685d30c23e4349600a2cebb22e5ff->enter($__internal_b218769cd4bde24ae1376d74ca90469f13c685d30c23e4349600a2cebb22e5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b218769cd4bde24ae1376d74ca90469f13c685d30c23e4349600a2cebb22e5ff->leave($__internal_b218769cd4bde24ae1376d74ca90469f13c685d30c23e4349600a2cebb22e5ff_prof);

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
