<?php

/* ::layout.html.twig */
class __TwigTemplate_c2fc3518667650192cc0b5bced6175fefaacf0481801e16c6fe4031d7a50a83f extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "LF4DS Plateforme";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  43 => 5,  36 => 11,  34 => 9,  27 => 5,  21 => 1,);
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
