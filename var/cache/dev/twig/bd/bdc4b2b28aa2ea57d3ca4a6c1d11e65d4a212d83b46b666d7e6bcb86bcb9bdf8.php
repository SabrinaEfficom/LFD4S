<?php

/* @LFD4SPlatform/Advert/index.html.twig */
class __TwigTemplate_af2aa206aab3b28004741f6708786e57830e3fc5895fd115c264a0d27400e359 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ed985f6ab889eb685d903b8ac85a59fe28970e5d5fd6fbf32ddbfb4716e1df3 = $this->env->getExtension("native_profiler");
        $__internal_5ed985f6ab889eb685d903b8ac85a59fe28970e5d5fd6fbf32ddbfb4716e1df3->enter($__internal_5ed985f6ab889eb685d903b8ac85a59fe28970e5d5fd6fbf32ddbfb4716e1df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\"/>
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"/images/ico/LFD4Sicon.ico\"/>
    </head>
    <body>
        <ul>
            <li> <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("lfd4s_platform_home");
        echo "\">home</a> </li>
            <li> <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("lfd4s_platform_first");
        echo "\">first</a> </li>
            <li> <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("lfd4s_platform_second");
        echo "\">second</a> </li>
        </ul>

        ";
        // line 16
        $this->displayBlock('javascript', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_5ed985f6ab889eb685d903b8ac85a59fe28970e5d5fd6fbf32ddbfb4716e1df3->leave($__internal_5ed985f6ab889eb685d903b8ac85a59fe28970e5d5fd6fbf32ddbfb4716e1df3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8924b864cf7ae09fde2ac357c141cb2870d9309b521b63739d7f887c286e72d7 = $this->env->getExtension("native_profiler");
        $__internal_8924b864cf7ae09fde2ac357c141cb2870d9309b521b63739d7f887c286e72d7->enter($__internal_8924b864cf7ae09fde2ac357c141cb2870d9309b521b63739d7f887c286e72d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LFD4S:Accueil";
        
        $__internal_8924b864cf7ae09fde2ac357c141cb2870d9309b521b63739d7f887c286e72d7->leave($__internal_8924b864cf7ae09fde2ac357c141cb2870d9309b521b63739d7f887c286e72d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b483b26cd58c4e2e8e9108520dbce27e0618a449949f94839ee17eef408ef69c = $this->env->getExtension("native_profiler");
        $__internal_b483b26cd58c4e2e8e9108520dbce27e0618a449949f94839ee17eef408ef69c->enter($__internal_b483b26cd58c4e2e8e9108520dbce27e0618a449949f94839ee17eef408ef69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b483b26cd58c4e2e8e9108520dbce27e0618a449949f94839ee17eef408ef69c->leave($__internal_b483b26cd58c4e2e8e9108520dbce27e0618a449949f94839ee17eef408ef69c_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_20a8c70546b0610dfff40b0c37b3b25348aef0ab1919d9e9168b0490e091951f = $this->env->getExtension("native_profiler");
        $__internal_20a8c70546b0610dfff40b0c37b3b25348aef0ab1919d9e9168b0490e091951f->enter($__internal_20a8c70546b0610dfff40b0c37b3b25348aef0ab1919d9e9168b0490e091951f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_20a8c70546b0610dfff40b0c37b3b25348aef0ab1919d9e9168b0490e091951f->leave($__internal_20a8c70546b0610dfff40b0c37b3b25348aef0ab1919d9e9168b0490e091951f_prof);

    }

    public function getTemplateName()
    {
        return "@LFD4SPlatform/Advert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  79 => 6,  67 => 5,  58 => 17,  56 => 16,  50 => 13,  46 => 12,  42 => 11,  36 => 7,  33 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8"/>*/
/*         {% block title %}LFD4S:Accueil{% endblock %}*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="/images/ico/LFD4Sicon.ico"/>*/
/*     </head>*/
/*     <body>*/
/*         <ul>*/
/*             <li> <a href="{{ path('lfd4s_platform_home')}}">home</a> </li>*/
/*             <li> <a href="{{ path('lfd4s_platform_first')}}">first</a> </li>*/
/*             <li> <a href="{{ path('lfd4s_platform_second')}}">second</a> </li>*/
/*         </ul>*/
/* */
/*         {% block javascript %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
