<?php

/* LFD4SPlatformBundle:Advert:account.html.twig */
class __TwigTemplate_0723180d643734c26fbb8d12ab54dbb78dd6842ced9e90d1c5f25e4dba507d05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_198004af4c2b81f1033ea979441233a1197f67d064d97495b44d31d4754c9f3d = $this->env->getExtension("native_profiler");
        $__internal_198004af4c2b81f1033ea979441233a1197f67d064d97495b44d31d4754c9f3d->enter($__internal_198004af4c2b81f1033ea979441233a1197f67d064d97495b44d31d4754c9f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:account.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\"/>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["LFD4Sicon"]) ? $context["LFD4Sicon"] : $this->getContext($context, "LFD4Sicon")), "ico", array())), "html", null, true);
        echo "\">
    </head>
    <body>
        <UL>Hello ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !
             <li> <a href=\"#\">xx</a> </li>
             <li> <a href=\"#\">xx</a> </li>
             <li> <a href=\"#\">xx</a> </li>
        </UL>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_198004af4c2b81f1033ea979441233a1197f67d064d97495b44d31d4754c9f3d->leave($__internal_198004af4c2b81f1033ea979441233a1197f67d064d97495b44d31d4754c9f3d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8488c25960069a832e10b0d53a2a9d85f35e53a38acf19f9907b4cd8dde75ae4 = $this->env->getExtension("native_profiler");
        $__internal_8488c25960069a832e10b0d53a2a9d85f35e53a38acf19f9907b4cd8dde75ae4->enter($__internal_8488c25960069a832e10b0d53a2a9d85f35e53a38acf19f9907b4cd8dde75ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ACCOUNT";
        
        $__internal_8488c25960069a832e10b0d53a2a9d85f35e53a38acf19f9907b4cd8dde75ae4->leave($__internal_8488c25960069a832e10b0d53a2a9d85f35e53a38acf19f9907b4cd8dde75ae4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d48b85fad1edc45d73b521dfdac53ea70e56a7f9a701ea8a5dbb544e5f6dff20 = $this->env->getExtension("native_profiler");
        $__internal_d48b85fad1edc45d73b521dfdac53ea70e56a7f9a701ea8a5dbb544e5f6dff20->enter($__internal_d48b85fad1edc45d73b521dfdac53ea70e56a7f9a701ea8a5dbb544e5f6dff20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d48b85fad1edc45d73b521dfdac53ea70e56a7f9a701ea8a5dbb544e5f6dff20->leave($__internal_d48b85fad1edc45d73b521dfdac53ea70e56a7f9a701ea8a5dbb544e5f6dff20_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_a472bb0d04158f1eb0a063c9c242910d9c7045f6432825917d471cc396de7aa1 = $this->env->getExtension("native_profiler");
        $__internal_a472bb0d04158f1eb0a063c9c242910d9c7045f6432825917d471cc396de7aa1->enter($__internal_a472bb0d04158f1eb0a063c9c242910d9c7045f6432825917d471cc396de7aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a472bb0d04158f1eb0a063c9c242910d9c7045f6432825917d471cc396de7aa1->leave($__internal_a472bb0d04158f1eb0a063c9c242910d9c7045f6432825917d471cc396de7aa1_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d4411b67c3710f2e7540d48a4063d40cf9d5986d8fb38f7ee4cfa71b298df314 = $this->env->getExtension("native_profiler");
        $__internal_d4411b67c3710f2e7540d48a4063d40cf9d5986d8fb38f7ee4cfa71b298df314->enter($__internal_d4411b67c3710f2e7540d48a4063d40cf9d5986d8fb38f7ee4cfa71b298df314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_d4411b67c3710f2e7540d48a4063d40cf9d5986d8fb38f7ee4cfa71b298df314->leave($__internal_d4411b67c3710f2e7540d48a4063d40cf9d5986d8fb38f7ee4cfa71b298df314_prof);

    }

    public function getTemplateName()
    {
        return "LFD4SPlatformBundle:Advert:account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 16,  90 => 15,  79 => 6,  67 => 5,  58 => 17,  55 => 16,  53 => 15,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8"/>*/
/*         <title>{% block title %}ACCOUNT{% endblock %} </title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset(LFD4Sicon.ico) }}">*/
/*     </head>*/
/*     <body>*/
/*         <UL>Hello {{ nom }} !*/
/*              <li> <a href="#">xx</a> </li>*/
/*              <li> <a href="#">xx</a> </li>*/
/*              <li> <a href="#">xx</a> </li>*/
/*         </UL>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascript %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
