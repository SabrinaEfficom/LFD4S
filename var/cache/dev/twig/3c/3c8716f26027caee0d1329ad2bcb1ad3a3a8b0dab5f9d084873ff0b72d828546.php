<?php

/* ::layout.html.twig */
class __TwigTemplate_70a8af120637bf66538231690098e2ec0120315a7b4e84f3adfab0dad83e4e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e88afab09ea2928e8fc99891faa77fc14fa8b975f73fc49f3261e7ed6801772e = $this->env->getExtension("native_profiler");
        $__internal_e88afab09ea2928e8fc99891faa77fc14fa8b975f73fc49f3261e7ed6801772e->enter($__internal_e88afab09ea2928e8fc99891faa77fc14fa8b975f73fc49f3261e7ed6801772e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>

";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "
</body>
</html>
";
        
        $__internal_e88afab09ea2928e8fc99891faa77fc14fa8b975f73fc49f3261e7ed6801772e->leave($__internal_e88afab09ea2928e8fc99891faa77fc14fa8b975f73fc49f3261e7ed6801772e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f04a44a0b664588aa830edbbc8cf0d2563d2c3647aa3b62269205da28504e07d = $this->env->getExtension("native_profiler");
        $__internal_f04a44a0b664588aa830edbbc8cf0d2563d2c3647aa3b62269205da28504e07d->enter($__internal_f04a44a0b664588aa830edbbc8cf0d2563d2c3647aa3b62269205da28504e07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LF4DS Plateforme";
        
        $__internal_f04a44a0b664588aa830edbbc8cf0d2563d2c3647aa3b62269205da28504e07d->leave($__internal_f04a44a0b664588aa830edbbc8cf0d2563d2c3647aa3b62269205da28504e07d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_930ca4e0e8625a5b95290432b50cb465030dfeaf990a3a0c20b80fe936ef9088 = $this->env->getExtension("native_profiler");
        $__internal_930ca4e0e8625a5b95290432b50cb465030dfeaf990a3a0c20b80fe936ef9088->enter($__internal_930ca4e0e8625a5b95290432b50cb465030dfeaf990a3a0c20b80fe936ef9088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_930ca4e0e8625a5b95290432b50cb465030dfeaf990a3a0c20b80fe936ef9088->leave($__internal_930ca4e0e8625a5b95290432b50cb465030dfeaf990a3a0c20b80fe936ef9088_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  49 => 5,  39 => 11,  37 => 9,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}LF4DS Plateforme{% endblock %}</title>*/
/* </head>*/
/* <body>*/
/* */
/* {% block body %}*/
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
