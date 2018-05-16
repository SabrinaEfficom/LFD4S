<?php

/* @LFD4SPlatform/Advert/account.html.twig */
class __TwigTemplate_83821f7a3d34645a2073a2fdd481c38d52048c1af010cbda7f6a4e466caeb2b3 extends Twig_Template
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
        $__internal_b0210fdef2e233b0e985568d519ce39fb4eb093dc22d124f2509e8f022d2502b = $this->env->getExtension("native_profiler");
        $__internal_b0210fdef2e233b0e985568d519ce39fb4eb093dc22d124f2509e8f022d2502b->enter($__internal_b0210fdef2e233b0e985568d519ce39fb4eb093dc22d124f2509e8f022d2502b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/account.html.twig"));

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
        
        $__internal_b0210fdef2e233b0e985568d519ce39fb4eb093dc22d124f2509e8f022d2502b->leave($__internal_b0210fdef2e233b0e985568d519ce39fb4eb093dc22d124f2509e8f022d2502b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_62dcb90a85b0b8e9628fb756aa70c608e9ae3509df7578da941ab1bc0d95dbec = $this->env->getExtension("native_profiler");
        $__internal_62dcb90a85b0b8e9628fb756aa70c608e9ae3509df7578da941ab1bc0d95dbec->enter($__internal_62dcb90a85b0b8e9628fb756aa70c608e9ae3509df7578da941ab1bc0d95dbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ACCOUNT";
        
        $__internal_62dcb90a85b0b8e9628fb756aa70c608e9ae3509df7578da941ab1bc0d95dbec->leave($__internal_62dcb90a85b0b8e9628fb756aa70c608e9ae3509df7578da941ab1bc0d95dbec_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4432548552175a396ff22157718311f407b1f38c39d58b247e402b84622153b5 = $this->env->getExtension("native_profiler");
        $__internal_4432548552175a396ff22157718311f407b1f38c39d58b247e402b84622153b5->enter($__internal_4432548552175a396ff22157718311f407b1f38c39d58b247e402b84622153b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4432548552175a396ff22157718311f407b1f38c39d58b247e402b84622153b5->leave($__internal_4432548552175a396ff22157718311f407b1f38c39d58b247e402b84622153b5_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f8944c82ddd91bcc4d2f73239117c7c9deeb74b5a4a1fb05e5182dd24067aa7 = $this->env->getExtension("native_profiler");
        $__internal_6f8944c82ddd91bcc4d2f73239117c7c9deeb74b5a4a1fb05e5182dd24067aa7->enter($__internal_6f8944c82ddd91bcc4d2f73239117c7c9deeb74b5a4a1fb05e5182dd24067aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f8944c82ddd91bcc4d2f73239117c7c9deeb74b5a4a1fb05e5182dd24067aa7->leave($__internal_6f8944c82ddd91bcc4d2f73239117c7c9deeb74b5a4a1fb05e5182dd24067aa7_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_4b5c88216db9a776cecfcbdfaa3128f31b4317cdf915ba81d7f1336ac624264d = $this->env->getExtension("native_profiler");
        $__internal_4b5c88216db9a776cecfcbdfaa3128f31b4317cdf915ba81d7f1336ac624264d->enter($__internal_4b5c88216db9a776cecfcbdfaa3128f31b4317cdf915ba81d7f1336ac624264d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_4b5c88216db9a776cecfcbdfaa3128f31b4317cdf915ba81d7f1336ac624264d->leave($__internal_4b5c88216db9a776cecfcbdfaa3128f31b4317cdf915ba81d7f1336ac624264d_prof);

    }

    public function getTemplateName()
    {
        return "@LFD4SPlatform/Advert/account.html.twig";
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
