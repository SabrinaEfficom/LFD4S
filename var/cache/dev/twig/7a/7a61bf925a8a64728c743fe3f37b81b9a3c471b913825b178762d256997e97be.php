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
        $__internal_1075311596fa9628ca5729ff82178590e902e914281a79e93dfe24a1d6adc804 = $this->env->getExtension("native_profiler");
        $__internal_1075311596fa9628ca5729ff82178590e902e914281a79e93dfe24a1d6adc804->enter($__internal_1075311596fa9628ca5729ff82178590e902e914281a79e93dfe24a1d6adc804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1075311596fa9628ca5729ff82178590e902e914281a79e93dfe24a1d6adc804->leave($__internal_1075311596fa9628ca5729ff82178590e902e914281a79e93dfe24a1d6adc804_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e91a17b3cca5cadba47250bef0097df3638a8c8b38ff0f5052484fa93a5fa2c = $this->env->getExtension("native_profiler");
        $__internal_3e91a17b3cca5cadba47250bef0097df3638a8c8b38ff0f5052484fa93a5fa2c->enter($__internal_3e91a17b3cca5cadba47250bef0097df3638a8c8b38ff0f5052484fa93a5fa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3e91a17b3cca5cadba47250bef0097df3638a8c8b38ff0f5052484fa93a5fa2c->leave($__internal_3e91a17b3cca5cadba47250bef0097df3638a8c8b38ff0f5052484fa93a5fa2c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_59ee63611e7cc527e4499efc8520eef9cb0da1e9c54d1f3c9551eef2f5504276 = $this->env->getExtension("native_profiler");
        $__internal_59ee63611e7cc527e4499efc8520eef9cb0da1e9c54d1f3c9551eef2f5504276->enter($__internal_59ee63611e7cc527e4499efc8520eef9cb0da1e9c54d1f3c9551eef2f5504276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_59ee63611e7cc527e4499efc8520eef9cb0da1e9c54d1f3c9551eef2f5504276->leave($__internal_59ee63611e7cc527e4499efc8520eef9cb0da1e9c54d1f3c9551eef2f5504276_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_75e647edd724cbb6d62552fefbdd6df5482353aea6898e513c9158c3a3b091e2 = $this->env->getExtension("native_profiler");
        $__internal_75e647edd724cbb6d62552fefbdd6df5482353aea6898e513c9158c3a3b091e2->enter($__internal_75e647edd724cbb6d62552fefbdd6df5482353aea6898e513c9158c3a3b091e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_75e647edd724cbb6d62552fefbdd6df5482353aea6898e513c9158c3a3b091e2->leave($__internal_75e647edd724cbb6d62552fefbdd6df5482353aea6898e513c9158c3a3b091e2_prof);

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
