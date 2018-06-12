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
        $__internal_653f31a148b97e6812db8d51c1e045751ac88d224519675c3a35d2da86837fde = $this->env->getExtension("native_profiler");
        $__internal_653f31a148b97e6812db8d51c1e045751ac88d224519675c3a35d2da86837fde->enter($__internal_653f31a148b97e6812db8d51c1e045751ac88d224519675c3a35d2da86837fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:account.html.twig"));

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
        
        $__internal_653f31a148b97e6812db8d51c1e045751ac88d224519675c3a35d2da86837fde->leave($__internal_653f31a148b97e6812db8d51c1e045751ac88d224519675c3a35d2da86837fde_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9e3367316b7a04d5ef7ebfa357bcbefb6b5397f04ce69dcdf7c178fab1ef76d = $this->env->getExtension("native_profiler");
        $__internal_f9e3367316b7a04d5ef7ebfa357bcbefb6b5397f04ce69dcdf7c178fab1ef76d->enter($__internal_f9e3367316b7a04d5ef7ebfa357bcbefb6b5397f04ce69dcdf7c178fab1ef76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ACCOUNT";
        
        $__internal_f9e3367316b7a04d5ef7ebfa357bcbefb6b5397f04ce69dcdf7c178fab1ef76d->leave($__internal_f9e3367316b7a04d5ef7ebfa357bcbefb6b5397f04ce69dcdf7c178fab1ef76d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a2f001f2b35058b7a738224024fdacecab4c1818c5faae5ffa0c3221092846f = $this->env->getExtension("native_profiler");
        $__internal_3a2f001f2b35058b7a738224024fdacecab4c1818c5faae5ffa0c3221092846f->enter($__internal_3a2f001f2b35058b7a738224024fdacecab4c1818c5faae5ffa0c3221092846f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3a2f001f2b35058b7a738224024fdacecab4c1818c5faae5ffa0c3221092846f->leave($__internal_3a2f001f2b35058b7a738224024fdacecab4c1818c5faae5ffa0c3221092846f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9e38a3adec166e8ebb7360d4553a066c91a9875df169e83c33a56d46a1d9e61 = $this->env->getExtension("native_profiler");
        $__internal_f9e38a3adec166e8ebb7360d4553a066c91a9875df169e83c33a56d46a1d9e61->enter($__internal_f9e38a3adec166e8ebb7360d4553a066c91a9875df169e83c33a56d46a1d9e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9e38a3adec166e8ebb7360d4553a066c91a9875df169e83c33a56d46a1d9e61->leave($__internal_f9e38a3adec166e8ebb7360d4553a066c91a9875df169e83c33a56d46a1d9e61_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8c768363aab8e40b0b37e7a90dd9f1fddf55c9d1a637f91d5e89a1dad560ff55 = $this->env->getExtension("native_profiler");
        $__internal_8c768363aab8e40b0b37e7a90dd9f1fddf55c9d1a637f91d5e89a1dad560ff55->enter($__internal_8c768363aab8e40b0b37e7a90dd9f1fddf55c9d1a637f91d5e89a1dad560ff55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_8c768363aab8e40b0b37e7a90dd9f1fddf55c9d1a637f91d5e89a1dad560ff55->leave($__internal_8c768363aab8e40b0b37e7a90dd9f1fddf55c9d1a637f91d5e89a1dad560ff55_prof);

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
