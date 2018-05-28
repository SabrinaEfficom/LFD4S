<?php

/* ::layout.html.twig */
class __TwigTemplate_70a8af120637bf66538231690098e2ec0120315a7b4e84f3adfab0dad83e4e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_485938121ee1d151c610fb5c748d90c79fd095683b1946fc621cda8f47f104a4 = $this->env->getExtension("native_profiler");
        $__internal_485938121ee1d151c610fb5c748d90c79fd095683b1946fc621cda8f47f104a4->enter($__internal_485938121ee1d151c610fb5c748d90c79fd095683b1946fc621cda8f47f104a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_485938121ee1d151c610fb5c748d90c79fd095683b1946fc621cda8f47f104a4->leave($__internal_485938121ee1d151c610fb5c748d90c79fd095683b1946fc621cda8f47f104a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_651050ca2d51cb2690a39e58fac7ffb993f841772d67ec589cd42e3480d1f599 = $this->env->getExtension("native_profiler");
        $__internal_651050ca2d51cb2690a39e58fac7ffb993f841772d67ec589cd42e3480d1f599->enter($__internal_651050ca2d51cb2690a39e58fac7ffb993f841772d67ec589cd42e3480d1f599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"site EII\">
        <meta name=\"author\" content=\"Arif Sabrina\">
        <link rel=\"shortcut icon\" href=\"themes/assets/ico/LFD4Sicon.ico\">


        <!-- Bootstrap core CSS -->
        <link href=\"themes/dist/css/bootstrap.min.css\" rel=\"stylesheet\">


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

        <!-- Custom styles for this template -->
        <link href=\"themes/assets/css/carousel.css\" rel=\"stylesheet\">
";
        
        $__internal_651050ca2d51cb2690a39e58fac7ffb993f841772d67ec589cd42e3480d1f599->leave($__internal_651050ca2d51cb2690a39e58fac7ffb993f841772d67ec589cd42e3480d1f599_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="site EII">*/
/*         <meta name="author" content="Arif Sabrina">*/
/*         <link rel="shortcut icon" href="themes/assets/ico/LFD4Sicon.ico">*/
/* */
/* */
/*         <!-- Bootstrap core CSS -->*/
/*         <link href="themes/dist/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/* */
/*         <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* */
/*         <!-- Custom styles for this template -->*/
/*         <link href="themes/assets/css/carousel.css" rel="stylesheet">*/
/* {% endblock head %}*/
/* */
