<?php

/* layout.html.twig */
class __TwigTemplate_412f2a81801410e67dde95ae6d06a2a79eee93410e7cd30d08bd06dddbd5ec8e extends Twig_Template
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
        $__internal_dc54f5ad37b7956715239ff8b863eb725c6a40b0fd31c539c2220ef57867947a = $this->env->getExtension("native_profiler");
        $__internal_dc54f5ad37b7956715239ff8b863eb725c6a40b0fd31c539c2220ef57867947a->enter($__internal_dc54f5ad37b7956715239ff8b863eb725c6a40b0fd31c539c2220ef57867947a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_dc54f5ad37b7956715239ff8b863eb725c6a40b0fd31c539c2220ef57867947a->leave($__internal_dc54f5ad37b7956715239ff8b863eb725c6a40b0fd31c539c2220ef57867947a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d5c909a14c4578ba0eea44b024b0132b6fa169fa7ad40a31cff57c05207fabf = $this->env->getExtension("native_profiler");
        $__internal_6d5c909a14c4578ba0eea44b024b0132b6fa169fa7ad40a31cff57c05207fabf->enter($__internal_6d5c909a14c4578ba0eea44b024b0132b6fa169fa7ad40a31cff57c05207fabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LF4DS Plateforme";
        
        $__internal_6d5c909a14c4578ba0eea44b024b0132b6fa169fa7ad40a31cff57c05207fabf->leave($__internal_6d5c909a14c4578ba0eea44b024b0132b6fa169fa7ad40a31cff57c05207fabf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7118dccc1d5ec3fc3d9013326b9e7bb9edd93c69e4caa98ec077621831554b5 = $this->env->getExtension("native_profiler");
        $__internal_e7118dccc1d5ec3fc3d9013326b9e7bb9edd93c69e4caa98ec077621831554b5->enter($__internal_e7118dccc1d5ec3fc3d9013326b9e7bb9edd93c69e4caa98ec077621831554b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e7118dccc1d5ec3fc3d9013326b9e7bb9edd93c69e4caa98ec077621831554b5->leave($__internal_e7118dccc1d5ec3fc3d9013326b9e7bb9edd93c69e4caa98ec077621831554b5_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
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
