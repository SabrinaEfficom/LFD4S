<?php

/* @LFD4SPlatform/layout.html.twig */
class __TwigTemplate_0572d04c3a79ba74a2c2563bf8a5d25c49abf43b93c07dd3e764e42dbd5b47ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LFD4SPlatform/layout.html.twig", 1);
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
        $__internal_26b3e9780021b17ec568ae08806dafe23a805dc49874f4d103da82ccb4660d96 = $this->env->getExtension("native_profiler");
        $__internal_26b3e9780021b17ec568ae08806dafe23a805dc49874f4d103da82ccb4660d96->enter($__internal_26b3e9780021b17ec568ae08806dafe23a805dc49874f4d103da82ccb4660d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26b3e9780021b17ec568ae08806dafe23a805dc49874f4d103da82ccb4660d96->leave($__internal_26b3e9780021b17ec568ae08806dafe23a805dc49874f4d103da82ccb4660d96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00b02b2cd65fa3417440c3947d8e7a6d67ecf82130a54337edbf4bbd79f0f074 = $this->env->getExtension("native_profiler");
        $__internal_00b02b2cd65fa3417440c3947d8e7a6d67ecf82130a54337edbf4bbd79f0f074->enter($__internal_00b02b2cd65fa3417440c3947d8e7a6d67ecf82130a54337edbf4bbd79f0f074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <meta charset=\"UTF-8\" />
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
        
        $__internal_00b02b2cd65fa3417440c3947d8e7a6d67ecf82130a54337edbf4bbd79f0f074->leave($__internal_00b02b2cd65fa3417440c3947d8e7a6d67ecf82130a54337edbf4bbd79f0f074_prof);

    }

    public function getTemplateName()
    {
        return "@LFD4SPlatform/layout.html.twig";
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
/*     <meta charset="UTF-8" />*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="site EII">*/
/*     <meta name="author" content="Arif Sabrina">*/
/*     <link rel="shortcut icon" href="themes/assets/ico/LFD4Sicon.ico">*/
/* */
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="themes/dist/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link href="themes/assets/css/carousel.css" rel="stylesheet">*/
/* {% endblock head %}*/
/* */
