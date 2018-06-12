<?php

/* LFD4SPlatformBundle::layout.html.twig */
class __TwigTemplate_649cf27984adb1fc7e07a5d33dc307e73688a29b7cb116bdd93e89fe5e097bbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LFD4SPlatformBundle::layout.html.twig", 1);
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
        $__internal_351db15860b558c392ebd58b5efd36f4186dfc9db0637ea2ffd001b8bb8a5d93 = $this->env->getExtension("native_profiler");
        $__internal_351db15860b558c392ebd58b5efd36f4186dfc9db0637ea2ffd001b8bb8a5d93->enter($__internal_351db15860b558c392ebd58b5efd36f4186dfc9db0637ea2ffd001b8bb8a5d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_351db15860b558c392ebd58b5efd36f4186dfc9db0637ea2ffd001b8bb8a5d93->leave($__internal_351db15860b558c392ebd58b5efd36f4186dfc9db0637ea2ffd001b8bb8a5d93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a35456d58e56b9d01312c6fb57318b20521a59ea475392fff63b8687444c6fe6 = $this->env->getExtension("native_profiler");
        $__internal_a35456d58e56b9d01312c6fb57318b20521a59ea475392fff63b8687444c6fe6->enter($__internal_a35456d58e56b9d01312c6fb57318b20521a59ea475392fff63b8687444c6fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a35456d58e56b9d01312c6fb57318b20521a59ea475392fff63b8687444c6fe6->leave($__internal_a35456d58e56b9d01312c6fb57318b20521a59ea475392fff63b8687444c6fe6_prof);

    }

    public function getTemplateName()
    {
        return "LFD4SPlatformBundle::layout.html.twig";
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
