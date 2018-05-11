<?php

/* @LFD4SPlatform/Advert/second.html.twig */
class __TwigTemplate_367e8f0fd6d485842b3c3743d080338a154bb3e738090856637815c8d44d714f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@LFD4SPlatform/Advert/second.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0ad16b204f3fa4d4870bc5c9d2dd388e6e5ab0ea3ef4494e89de7345067830b = $this->env->getExtension("native_profiler");
        $__internal_b0ad16b204f3fa4d4870bc5c9d2dd388e6e5ab0ea3ef4494e89de7345067830b->enter($__internal_b0ad16b204f3fa4d4870bc5c9d2dd388e6e5ab0ea3ef4494e89de7345067830b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/second.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0ad16b204f3fa4d4870bc5c9d2dd388e6e5ab0ea3ef4494e89de7345067830b->leave($__internal_b0ad16b204f3fa4d4870bc5c9d2dd388e6e5ab0ea3ef4494e89de7345067830b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_558f9468c6596a1e3fb252f0fc43244ce3c508d8c3c2e28ad3da1931d43aeb98 = $this->env->getExtension("native_profiler");
        $__internal_558f9468c6596a1e3fb252f0fc43244ce3c508d8c3c2e28ad3da1931d43aeb98->enter($__internal_558f9468c6596a1e3fb252f0fc43244ce3c508d8c3c2e28ad3da1931d43aeb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    second
";
        
        $__internal_558f9468c6596a1e3fb252f0fc43244ce3c508d8c3c2e28ad3da1931d43aeb98->leave($__internal_558f9468c6596a1e3fb252f0fc43244ce3c508d8c3c2e28ad3da1931d43aeb98_prof);

    }

    public function getTemplateName()
    {
        return "@LFD4SPlatform/Advert/second.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     second*/
/* {% endblock %}*/
