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
        $__internal_5c78f3ed84fb72a93ec63f435ecaea5df5b1ad06ff43f365f0c72232a88364e5 = $this->env->getExtension("native_profiler");
        $__internal_5c78f3ed84fb72a93ec63f435ecaea5df5b1ad06ff43f365f0c72232a88364e5->enter($__internal_5c78f3ed84fb72a93ec63f435ecaea5df5b1ad06ff43f365f0c72232a88364e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/account.html.twig"));

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
        
        $__internal_5c78f3ed84fb72a93ec63f435ecaea5df5b1ad06ff43f365f0c72232a88364e5->leave($__internal_5c78f3ed84fb72a93ec63f435ecaea5df5b1ad06ff43f365f0c72232a88364e5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d08c6d4f164fbac924f151e82c076f29759a432dfcad1e7382fa39f9829ca891 = $this->env->getExtension("native_profiler");
        $__internal_d08c6d4f164fbac924f151e82c076f29759a432dfcad1e7382fa39f9829ca891->enter($__internal_d08c6d4f164fbac924f151e82c076f29759a432dfcad1e7382fa39f9829ca891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ACCOUNT";
        
        $__internal_d08c6d4f164fbac924f151e82c076f29759a432dfcad1e7382fa39f9829ca891->leave($__internal_d08c6d4f164fbac924f151e82c076f29759a432dfcad1e7382fa39f9829ca891_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c05ad042b4e504b1412badd7d4709a2aec72e9da26ac03dc5b2600bdd9d1090c = $this->env->getExtension("native_profiler");
        $__internal_c05ad042b4e504b1412badd7d4709a2aec72e9da26ac03dc5b2600bdd9d1090c->enter($__internal_c05ad042b4e504b1412badd7d4709a2aec72e9da26ac03dc5b2600bdd9d1090c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c05ad042b4e504b1412badd7d4709a2aec72e9da26ac03dc5b2600bdd9d1090c->leave($__internal_c05ad042b4e504b1412badd7d4709a2aec72e9da26ac03dc5b2600bdd9d1090c_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_544cd941ca85c46f8a0baa4a44ed9bb574a584a3925448ec7fe50d38b278e3b6 = $this->env->getExtension("native_profiler");
        $__internal_544cd941ca85c46f8a0baa4a44ed9bb574a584a3925448ec7fe50d38b278e3b6->enter($__internal_544cd941ca85c46f8a0baa4a44ed9bb574a584a3925448ec7fe50d38b278e3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_544cd941ca85c46f8a0baa4a44ed9bb574a584a3925448ec7fe50d38b278e3b6->leave($__internal_544cd941ca85c46f8a0baa4a44ed9bb574a584a3925448ec7fe50d38b278e3b6_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_22b50bf777bc85cf0cc897474caec50be8e107894cf6cf6ceb4a8c305f4a0e00 = $this->env->getExtension("native_profiler");
        $__internal_22b50bf777bc85cf0cc897474caec50be8e107894cf6cf6ceb4a8c305f4a0e00->enter($__internal_22b50bf777bc85cf0cc897474caec50be8e107894cf6cf6ceb4a8c305f4a0e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_22b50bf777bc85cf0cc897474caec50be8e107894cf6cf6ceb4a8c305f4a0e00->leave($__internal_22b50bf777bc85cf0cc897474caec50be8e107894cf6cf6ceb4a8c305f4a0e00_prof);

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
