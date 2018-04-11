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
        $__internal_59f7c20f795f1fce6c478f0d44d509008a8201291b8148e100c3a079de1e335f = $this->env->getExtension("native_profiler");
        $__internal_59f7c20f795f1fce6c478f0d44d509008a8201291b8148e100c3a079de1e335f->enter($__internal_59f7c20f795f1fce6c478f0d44d509008a8201291b8148e100c3a079de1e335f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_59f7c20f795f1fce6c478f0d44d509008a8201291b8148e100c3a079de1e335f->leave($__internal_59f7c20f795f1fce6c478f0d44d509008a8201291b8148e100c3a079de1e335f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8169c0b1948050dd7ff5eb3fc369fbeb9422f7b25aead6f4171c7e34cee54636 = $this->env->getExtension("native_profiler");
        $__internal_8169c0b1948050dd7ff5eb3fc369fbeb9422f7b25aead6f4171c7e34cee54636->enter($__internal_8169c0b1948050dd7ff5eb3fc369fbeb9422f7b25aead6f4171c7e34cee54636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LF4DS Plateforme";
        
        $__internal_8169c0b1948050dd7ff5eb3fc369fbeb9422f7b25aead6f4171c7e34cee54636->leave($__internal_8169c0b1948050dd7ff5eb3fc369fbeb9422f7b25aead6f4171c7e34cee54636_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc2e6cc445f931005a0596d6673b0f07fb255f361e84ae90ed20b264baec363d = $this->env->getExtension("native_profiler");
        $__internal_fc2e6cc445f931005a0596d6673b0f07fb255f361e84ae90ed20b264baec363d->enter($__internal_fc2e6cc445f931005a0596d6673b0f07fb255f361e84ae90ed20b264baec363d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fc2e6cc445f931005a0596d6673b0f07fb255f361e84ae90ed20b264baec363d->leave($__internal_fc2e6cc445f931005a0596d6673b0f07fb255f361e84ae90ed20b264baec363d_prof);

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
