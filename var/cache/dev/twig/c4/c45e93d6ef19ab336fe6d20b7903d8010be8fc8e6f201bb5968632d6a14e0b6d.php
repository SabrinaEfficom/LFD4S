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
        $__internal_c992bb9194eaf7795886ff586d3b9db852d59bc3bacecd72beba970d2e6dded8 = $this->env->getExtension("native_profiler");
        $__internal_c992bb9194eaf7795886ff586d3b9db852d59bc3bacecd72beba970d2e6dded8->enter($__internal_c992bb9194eaf7795886ff586d3b9db852d59bc3bacecd72beba970d2e6dded8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/account.html.twig"));

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
        
        $__internal_c992bb9194eaf7795886ff586d3b9db852d59bc3bacecd72beba970d2e6dded8->leave($__internal_c992bb9194eaf7795886ff586d3b9db852d59bc3bacecd72beba970d2e6dded8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5ee1eded841e9afaefc15fd43f0c76592478657340c7853ee03116f5f13f1dc = $this->env->getExtension("native_profiler");
        $__internal_c5ee1eded841e9afaefc15fd43f0c76592478657340c7853ee03116f5f13f1dc->enter($__internal_c5ee1eded841e9afaefc15fd43f0c76592478657340c7853ee03116f5f13f1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ACCOUNT";
        
        $__internal_c5ee1eded841e9afaefc15fd43f0c76592478657340c7853ee03116f5f13f1dc->leave($__internal_c5ee1eded841e9afaefc15fd43f0c76592478657340c7853ee03116f5f13f1dc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ab07f683cf599f68c7cc2c2617dfa8194bad8b5883030ad2beb7ae8c6a2f63e = $this->env->getExtension("native_profiler");
        $__internal_6ab07f683cf599f68c7cc2c2617dfa8194bad8b5883030ad2beb7ae8c6a2f63e->enter($__internal_6ab07f683cf599f68c7cc2c2617dfa8194bad8b5883030ad2beb7ae8c6a2f63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6ab07f683cf599f68c7cc2c2617dfa8194bad8b5883030ad2beb7ae8c6a2f63e->leave($__internal_6ab07f683cf599f68c7cc2c2617dfa8194bad8b5883030ad2beb7ae8c6a2f63e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_17d827729b3a8267fbf61605820171bf18116870d64ce2f8107ee11491cd6b6a = $this->env->getExtension("native_profiler");
        $__internal_17d827729b3a8267fbf61605820171bf18116870d64ce2f8107ee11491cd6b6a->enter($__internal_17d827729b3a8267fbf61605820171bf18116870d64ce2f8107ee11491cd6b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_17d827729b3a8267fbf61605820171bf18116870d64ce2f8107ee11491cd6b6a->leave($__internal_17d827729b3a8267fbf61605820171bf18116870d64ce2f8107ee11491cd6b6a_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_45649ecb45a2c88eca9311c2ef35146f0498a630cd1bedd39c35edc02066eda7 = $this->env->getExtension("native_profiler");
        $__internal_45649ecb45a2c88eca9311c2ef35146f0498a630cd1bedd39c35edc02066eda7->enter($__internal_45649ecb45a2c88eca9311c2ef35146f0498a630cd1bedd39c35edc02066eda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_45649ecb45a2c88eca9311c2ef35146f0498a630cd1bedd39c35edc02066eda7->leave($__internal_45649ecb45a2c88eca9311c2ef35146f0498a630cd1bedd39c35edc02066eda7_prof);

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
