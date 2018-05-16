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
        $__internal_dbe6bfdf4807efdc0d86d0b791830f84ceb4f2786967c4eec5996d68b13ba855 = $this->env->getExtension("native_profiler");
        $__internal_dbe6bfdf4807efdc0d86d0b791830f84ceb4f2786967c4eec5996d68b13ba855->enter($__internal_dbe6bfdf4807efdc0d86d0b791830f84ceb4f2786967c4eec5996d68b13ba855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:account.html.twig"));

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
        
        $__internal_dbe6bfdf4807efdc0d86d0b791830f84ceb4f2786967c4eec5996d68b13ba855->leave($__internal_dbe6bfdf4807efdc0d86d0b791830f84ceb4f2786967c4eec5996d68b13ba855_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7de038b9ae367b458b314034efa1ecdc61d20f4bbf6300dc9174eab1700931df = $this->env->getExtension("native_profiler");
        $__internal_7de038b9ae367b458b314034efa1ecdc61d20f4bbf6300dc9174eab1700931df->enter($__internal_7de038b9ae367b458b314034efa1ecdc61d20f4bbf6300dc9174eab1700931df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ACCOUNT";
        
        $__internal_7de038b9ae367b458b314034efa1ecdc61d20f4bbf6300dc9174eab1700931df->leave($__internal_7de038b9ae367b458b314034efa1ecdc61d20f4bbf6300dc9174eab1700931df_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97af183d4a286257d10d5c09757b7c5bd4d3e52f4651d84eeba448b3f072c00a = $this->env->getExtension("native_profiler");
        $__internal_97af183d4a286257d10d5c09757b7c5bd4d3e52f4651d84eeba448b3f072c00a->enter($__internal_97af183d4a286257d10d5c09757b7c5bd4d3e52f4651d84eeba448b3f072c00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_97af183d4a286257d10d5c09757b7c5bd4d3e52f4651d84eeba448b3f072c00a->leave($__internal_97af183d4a286257d10d5c09757b7c5bd4d3e52f4651d84eeba448b3f072c00a_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8bc418ad739d44cca53d6ed333795e65eb4156044170f940132a32697f9a1fd = $this->env->getExtension("native_profiler");
        $__internal_d8bc418ad739d44cca53d6ed333795e65eb4156044170f940132a32697f9a1fd->enter($__internal_d8bc418ad739d44cca53d6ed333795e65eb4156044170f940132a32697f9a1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d8bc418ad739d44cca53d6ed333795e65eb4156044170f940132a32697f9a1fd->leave($__internal_d8bc418ad739d44cca53d6ed333795e65eb4156044170f940132a32697f9a1fd_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6863a4d47e4bd05ec5226c1e523df4fad002f11ad950076a2ae42c305c891e58 = $this->env->getExtension("native_profiler");
        $__internal_6863a4d47e4bd05ec5226c1e523df4fad002f11ad950076a2ae42c305c891e58->enter($__internal_6863a4d47e4bd05ec5226c1e523df4fad002f11ad950076a2ae42c305c891e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_6863a4d47e4bd05ec5226c1e523df4fad002f11ad950076a2ae42c305c891e58->leave($__internal_6863a4d47e4bd05ec5226c1e523df4fad002f11ad950076a2ae42c305c891e58_prof);

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
