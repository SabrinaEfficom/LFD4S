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
        $__internal_d30d22143821d9c489edbc315650dca80760dacf7c3e99e147be302ff9e1aac7 = $this->env->getExtension("native_profiler");
        $__internal_d30d22143821d9c489edbc315650dca80760dacf7c3e99e147be302ff9e1aac7->enter($__internal_d30d22143821d9c489edbc315650dca80760dacf7c3e99e147be302ff9e1aac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_d30d22143821d9c489edbc315650dca80760dacf7c3e99e147be302ff9e1aac7->leave($__internal_d30d22143821d9c489edbc315650dca80760dacf7c3e99e147be302ff9e1aac7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f7dc0a68807b376b6dc48058c82300db56ea0a0e9c1c1e3acd1200c414d4163 = $this->env->getExtension("native_profiler");
        $__internal_5f7dc0a68807b376b6dc48058c82300db56ea0a0e9c1c1e3acd1200c414d4163->enter($__internal_5f7dc0a68807b376b6dc48058c82300db56ea0a0e9c1c1e3acd1200c414d4163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LF4DS Plateforme";
        
        $__internal_5f7dc0a68807b376b6dc48058c82300db56ea0a0e9c1c1e3acd1200c414d4163->leave($__internal_5f7dc0a68807b376b6dc48058c82300db56ea0a0e9c1c1e3acd1200c414d4163_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c089a87115db4628b35bb3f32652a4955ad13f04efcc0bb84bb9e16c8e368940 = $this->env->getExtension("native_profiler");
        $__internal_c089a87115db4628b35bb3f32652a4955ad13f04efcc0bb84bb9e16c8e368940->enter($__internal_c089a87115db4628b35bb3f32652a4955ad13f04efcc0bb84bb9e16c8e368940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c089a87115db4628b35bb3f32652a4955ad13f04efcc0bb84bb9e16c8e368940->leave($__internal_c089a87115db4628b35bb3f32652a4955ad13f04efcc0bb84bb9e16c8e368940_prof);

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
