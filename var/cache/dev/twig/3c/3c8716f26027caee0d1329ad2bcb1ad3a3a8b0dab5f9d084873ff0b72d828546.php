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
        $__internal_af85e09b6c1cfd8ae598857bfd888d193555f284f3844c44c6f9b45b1936cb53 = $this->env->getExtension("native_profiler");
        $__internal_af85e09b6c1cfd8ae598857bfd888d193555f284f3844c44c6f9b45b1936cb53->enter($__internal_af85e09b6c1cfd8ae598857bfd888d193555f284f3844c44c6f9b45b1936cb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_af85e09b6c1cfd8ae598857bfd888d193555f284f3844c44c6f9b45b1936cb53->leave($__internal_af85e09b6c1cfd8ae598857bfd888d193555f284f3844c44c6f9b45b1936cb53_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_79394d0feb04e901ac5b223c88d7b326dfd390d4e889a4655f2c61a2ff47889a = $this->env->getExtension("native_profiler");
        $__internal_79394d0feb04e901ac5b223c88d7b326dfd390d4e889a4655f2c61a2ff47889a->enter($__internal_79394d0feb04e901ac5b223c88d7b326dfd390d4e889a4655f2c61a2ff47889a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LF4DS Plateforme";
        
        $__internal_79394d0feb04e901ac5b223c88d7b326dfd390d4e889a4655f2c61a2ff47889a->leave($__internal_79394d0feb04e901ac5b223c88d7b326dfd390d4e889a4655f2c61a2ff47889a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_88f2b54b15db33439502bf61720259110f3d3688a299c18c52960b297e00ebd5 = $this->env->getExtension("native_profiler");
        $__internal_88f2b54b15db33439502bf61720259110f3d3688a299c18c52960b297e00ebd5->enter($__internal_88f2b54b15db33439502bf61720259110f3d3688a299c18c52960b297e00ebd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_88f2b54b15db33439502bf61720259110f3d3688a299c18c52960b297e00ebd5->leave($__internal_88f2b54b15db33439502bf61720259110f3d3688a299c18c52960b297e00ebd5_prof);

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
