<?php

/* LFD4SPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_a7b7423537f066b67c42cf8ce46c1a3d48f72c3b2e376e2340eb4a8c80f1e34b extends Twig_Template
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
        $__internal_4b359537f197fc37b28fb3042b7d004f4e43ac3efca15b7502e2a93fbdfd9c1a = $this->env->getExtension("native_profiler");
        $__internal_4b359537f197fc37b28fb3042b7d004f4e43ac3efca15b7502e2a93fbdfd9c1a->enter($__internal_4b359537f197fc37b28fb3042b7d004f4e43ac3efca15b7502e2a93fbdfd9c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:index.html.twig"));

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
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_4b359537f197fc37b28fb3042b7d004f4e43ac3efca15b7502e2a93fbdfd9c1a->leave($__internal_4b359537f197fc37b28fb3042b7d004f4e43ac3efca15b7502e2a93fbdfd9c1a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e946068a8104d1c5c7bbcf9d7cd2a5512cbc001d29e68814bd842ca41784cd7d = $this->env->getExtension("native_profiler");
        $__internal_e946068a8104d1c5c7bbcf9d7cd2a5512cbc001d29e68814bd842ca41784cd7d->enter($__internal_e946068a8104d1c5c7bbcf9d7cd2a5512cbc001d29e68814bd842ca41784cd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LFD4S:Accueil";
        
        $__internal_e946068a8104d1c5c7bbcf9d7cd2a5512cbc001d29e68814bd842ca41784cd7d->leave($__internal_e946068a8104d1c5c7bbcf9d7cd2a5512cbc001d29e68814bd842ca41784cd7d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43681feedf328cc531d94ead0d194c372084f120cb85f1b31764c682365817cb = $this->env->getExtension("native_profiler");
        $__internal_43681feedf328cc531d94ead0d194c372084f120cb85f1b31764c682365817cb->enter($__internal_43681feedf328cc531d94ead0d194c372084f120cb85f1b31764c682365817cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_43681feedf328cc531d94ead0d194c372084f120cb85f1b31764c682365817cb->leave($__internal_43681feedf328cc531d94ead0d194c372084f120cb85f1b31764c682365817cb_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5534f9494a84cbffb0d7e7029779042dfc2e5b38c168f3dd3a976b21252b8ad = $this->env->getExtension("native_profiler");
        $__internal_d5534f9494a84cbffb0d7e7029779042dfc2e5b38c168f3dd3a976b21252b8ad->enter($__internal_d5534f9494a84cbffb0d7e7029779042dfc2e5b38c168f3dd3a976b21252b8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d5534f9494a84cbffb0d7e7029779042dfc2e5b38c168f3dd3a976b21252b8ad->leave($__internal_d5534f9494a84cbffb0d7e7029779042dfc2e5b38c168f3dd3a976b21252b8ad_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a299afa016badcf2fdf5668b078770124085ed5a4f788d82767b011cbbe5affd = $this->env->getExtension("native_profiler");
        $__internal_a299afa016badcf2fdf5668b078770124085ed5a4f788d82767b011cbbe5affd->enter($__internal_a299afa016badcf2fdf5668b078770124085ed5a4f788d82767b011cbbe5affd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_a299afa016badcf2fdf5668b078770124085ed5a4f788d82767b011cbbe5affd->leave($__internal_a299afa016badcf2fdf5668b078770124085ed5a4f788d82767b011cbbe5affd_prof);

    }

    public function getTemplateName()
    {
        return "LFD4SPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  94 => 15,  83 => 6,  71 => 5,  62 => 17,  59 => 16,  57 => 15,  52 => 13,  48 => 12,  44 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8"/>*/
/*         <title>{% block title %}LFD4S:Accueil{% endblock %} </title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="/images/ico/LFD4Sicon.ico"/>*/
/*     </head>*/
/*     <body>*/
/*         <ul>*/
/*             <li> <a href="{{ path('lfd4s_platform_home')}}">home</a> </li>*/
/*             <li> <a href="{{ path('lfd4s_platform_first')}}">first</a> </li>*/
/*             <li> <a href="{{ path('lfd4s_platform_second')}}">second</a> </li>*/
/*         </ul>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascript %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
