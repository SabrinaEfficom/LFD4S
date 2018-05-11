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
        $__internal_a711061a8f27cf423a658beee9a5c70167ca71793ebcdd9a788600724fccdee7 = $this->env->getExtension("native_profiler");
        $__internal_a711061a8f27cf423a658beee9a5c70167ca71793ebcdd9a788600724fccdee7->enter($__internal_a711061a8f27cf423a658beee9a5c70167ca71793ebcdd9a788600724fccdee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/account.html.twig"));

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
        
        $__internal_a711061a8f27cf423a658beee9a5c70167ca71793ebcdd9a788600724fccdee7->leave($__internal_a711061a8f27cf423a658beee9a5c70167ca71793ebcdd9a788600724fccdee7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ae826a4d595044b50387c4a7dac38278e3bc5764dbcfb4ccc8ef1e5d770b06b = $this->env->getExtension("native_profiler");
        $__internal_6ae826a4d595044b50387c4a7dac38278e3bc5764dbcfb4ccc8ef1e5d770b06b->enter($__internal_6ae826a4d595044b50387c4a7dac38278e3bc5764dbcfb4ccc8ef1e5d770b06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ACCOUNT";
        
        $__internal_6ae826a4d595044b50387c4a7dac38278e3bc5764dbcfb4ccc8ef1e5d770b06b->leave($__internal_6ae826a4d595044b50387c4a7dac38278e3bc5764dbcfb4ccc8ef1e5d770b06b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94cd299931bc8f7010a1a8e85c12ef5d4474fe03a82207eb749aee76d8c0ed06 = $this->env->getExtension("native_profiler");
        $__internal_94cd299931bc8f7010a1a8e85c12ef5d4474fe03a82207eb749aee76d8c0ed06->enter($__internal_94cd299931bc8f7010a1a8e85c12ef5d4474fe03a82207eb749aee76d8c0ed06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_94cd299931bc8f7010a1a8e85c12ef5d4474fe03a82207eb749aee76d8c0ed06->leave($__internal_94cd299931bc8f7010a1a8e85c12ef5d4474fe03a82207eb749aee76d8c0ed06_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_640823e36110e40bc03f709a4dfc4e0c9c0511d947f1a4bf7968494a5493103a = $this->env->getExtension("native_profiler");
        $__internal_640823e36110e40bc03f709a4dfc4e0c9c0511d947f1a4bf7968494a5493103a->enter($__internal_640823e36110e40bc03f709a4dfc4e0c9c0511d947f1a4bf7968494a5493103a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_640823e36110e40bc03f709a4dfc4e0c9c0511d947f1a4bf7968494a5493103a->leave($__internal_640823e36110e40bc03f709a4dfc4e0c9c0511d947f1a4bf7968494a5493103a_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ac3566380e4a2092f97530c997c46d866c4ea5da385c785d07ff337e5cee7ada = $this->env->getExtension("native_profiler");
        $__internal_ac3566380e4a2092f97530c997c46d866c4ea5da385c785d07ff337e5cee7ada->enter($__internal_ac3566380e4a2092f97530c997c46d866c4ea5da385c785d07ff337e5cee7ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_ac3566380e4a2092f97530c997c46d866c4ea5da385c785d07ff337e5cee7ada->leave($__internal_ac3566380e4a2092f97530c997c46d866c4ea5da385c785d07ff337e5cee7ada_prof);

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
