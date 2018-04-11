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
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9412f878a20ba083111fb6e75b984f84d502a04aa2c50f2d835623d9420f8132 = $this->env->getExtension("native_profiler");
        $__internal_9412f878a20ba083111fb6e75b984f84d502a04aa2c50f2d835623d9420f8132->enter($__internal_9412f878a20ba083111fb6e75b984f84d502a04aa2c50f2d835623d9420f8132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/index.html.twig"));

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
        
        $__internal_9412f878a20ba083111fb6e75b984f84d502a04aa2c50f2d835623d9420f8132->leave($__internal_9412f878a20ba083111fb6e75b984f84d502a04aa2c50f2d835623d9420f8132_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_24af02c2375d065827dcab68c3d8a3a1946a78b105eda0c3c952c7519fa36d1c = $this->env->getExtension("native_profiler");
        $__internal_24af02c2375d065827dcab68c3d8a3a1946a78b105eda0c3c952c7519fa36d1c->enter($__internal_24af02c2375d065827dcab68c3d8a3a1946a78b105eda0c3c952c7519fa36d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LFD4S:Accueil";
        
        $__internal_24af02c2375d065827dcab68c3d8a3a1946a78b105eda0c3c952c7519fa36d1c->leave($__internal_24af02c2375d065827dcab68c3d8a3a1946a78b105eda0c3c952c7519fa36d1c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f06722ae46ff129f436e931fb67db77fb033200b0de7047d0abe6f50c81f627f = $this->env->getExtension("native_profiler");
        $__internal_f06722ae46ff129f436e931fb67db77fb033200b0de7047d0abe6f50c81f627f->enter($__internal_f06722ae46ff129f436e931fb67db77fb033200b0de7047d0abe6f50c81f627f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f06722ae46ff129f436e931fb67db77fb033200b0de7047d0abe6f50c81f627f->leave($__internal_f06722ae46ff129f436e931fb67db77fb033200b0de7047d0abe6f50c81f627f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8bec0ae98bf00372d6871f661ec32b995908b9c5357f0e424b729ab7bc2d3e3 = $this->env->getExtension("native_profiler");
        $__internal_a8bec0ae98bf00372d6871f661ec32b995908b9c5357f0e424b729ab7bc2d3e3->enter($__internal_a8bec0ae98bf00372d6871f661ec32b995908b9c5357f0e424b729ab7bc2d3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8bec0ae98bf00372d6871f661ec32b995908b9c5357f0e424b729ab7bc2d3e3->leave($__internal_a8bec0ae98bf00372d6871f661ec32b995908b9c5357f0e424b729ab7bc2d3e3_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_cddd87605b373c6f6224b2bd0bb2207622932bb52dfe1efaf40d7bc933577620 = $this->env->getExtension("native_profiler");
        $__internal_cddd87605b373c6f6224b2bd0bb2207622932bb52dfe1efaf40d7bc933577620->enter($__internal_cddd87605b373c6f6224b2bd0bb2207622932bb52dfe1efaf40d7bc933577620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_cddd87605b373c6f6224b2bd0bb2207622932bb52dfe1efaf40d7bc933577620->leave($__internal_cddd87605b373c6f6224b2bd0bb2207622932bb52dfe1efaf40d7bc933577620_prof);

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
