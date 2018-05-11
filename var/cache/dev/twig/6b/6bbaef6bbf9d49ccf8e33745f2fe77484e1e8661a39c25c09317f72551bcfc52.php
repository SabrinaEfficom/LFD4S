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
        $__internal_394639e0ac96d1a0213e4cab8e8f4a9bea66722d3ce4950ba5cc22b053266228 = $this->env->getExtension("native_profiler");
        $__internal_394639e0ac96d1a0213e4cab8e8f4a9bea66722d3ce4950ba5cc22b053266228->enter($__internal_394639e0ac96d1a0213e4cab8e8f4a9bea66722d3ce4950ba5cc22b053266228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_394639e0ac96d1a0213e4cab8e8f4a9bea66722d3ce4950ba5cc22b053266228->leave($__internal_394639e0ac96d1a0213e4cab8e8f4a9bea66722d3ce4950ba5cc22b053266228_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d94c7127dd01de2385f6b31a492d57306053124015811807ef3c63299c6f58e = $this->env->getExtension("native_profiler");
        $__internal_1d94c7127dd01de2385f6b31a492d57306053124015811807ef3c63299c6f58e->enter($__internal_1d94c7127dd01de2385f6b31a492d57306053124015811807ef3c63299c6f58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LF4DS Plateforme";
        
        $__internal_1d94c7127dd01de2385f6b31a492d57306053124015811807ef3c63299c6f58e->leave($__internal_1d94c7127dd01de2385f6b31a492d57306053124015811807ef3c63299c6f58e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dec2b4fd679e0f53bb880aa0e597d76328e147e50490dc5a5e1fdfc4282968b7 = $this->env->getExtension("native_profiler");
        $__internal_dec2b4fd679e0f53bb880aa0e597d76328e147e50490dc5a5e1fdfc4282968b7->enter($__internal_dec2b4fd679e0f53bb880aa0e597d76328e147e50490dc5a5e1fdfc4282968b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dec2b4fd679e0f53bb880aa0e597d76328e147e50490dc5a5e1fdfc4282968b7->leave($__internal_dec2b4fd679e0f53bb880aa0e597d76328e147e50490dc5a5e1fdfc4282968b7_prof);

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
