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
        $__internal_fbe04a435c5f8b51c58d7d7b300adeb1ffd164fd45a27ee61c1d0a70d4201e4c = $this->env->getExtension("native_profiler");
        $__internal_fbe04a435c5f8b51c58d7d7b300adeb1ffd164fd45a27ee61c1d0a70d4201e4c->enter($__internal_fbe04a435c5f8b51c58d7d7b300adeb1ffd164fd45a27ee61c1d0a70d4201e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe04a435c5f8b51c58d7d7b300adeb1ffd164fd45a27ee61c1d0a70d4201e4c->leave($__internal_fbe04a435c5f8b51c58d7d7b300adeb1ffd164fd45a27ee61c1d0a70d4201e4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec21b8a12e86869a920916fc257fbe96659ff0d8e9930e9b26dc9864a9e5af11 = $this->env->getExtension("native_profiler");
        $__internal_ec21b8a12e86869a920916fc257fbe96659ff0d8e9930e9b26dc9864a9e5af11->enter($__internal_ec21b8a12e86869a920916fc257fbe96659ff0d8e9930e9b26dc9864a9e5af11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ec21b8a12e86869a920916fc257fbe96659ff0d8e9930e9b26dc9864a9e5af11->leave($__internal_ec21b8a12e86869a920916fc257fbe96659ff0d8e9930e9b26dc9864a9e5af11_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2e00c8b9db7578c4d6a8e24db8accf1dd4e472897c0c0d5b22f4479adc29387 = $this->env->getExtension("native_profiler");
        $__internal_f2e00c8b9db7578c4d6a8e24db8accf1dd4e472897c0c0d5b22f4479adc29387->enter($__internal_f2e00c8b9db7578c4d6a8e24db8accf1dd4e472897c0c0d5b22f4479adc29387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f2e00c8b9db7578c4d6a8e24db8accf1dd4e472897c0c0d5b22f4479adc29387->leave($__internal_f2e00c8b9db7578c4d6a8e24db8accf1dd4e472897c0c0d5b22f4479adc29387_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fda01d1be5cdeee84029c5d8460afbce091e3b418520aa1c129616e9f258e546 = $this->env->getExtension("native_profiler");
        $__internal_fda01d1be5cdeee84029c5d8460afbce091e3b418520aa1c129616e9f258e546->enter($__internal_fda01d1be5cdeee84029c5d8460afbce091e3b418520aa1c129616e9f258e546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fda01d1be5cdeee84029c5d8460afbce091e3b418520aa1c129616e9f258e546->leave($__internal_fda01d1be5cdeee84029c5d8460afbce091e3b418520aa1c129616e9f258e546_prof);

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
