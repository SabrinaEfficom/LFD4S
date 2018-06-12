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
        $__internal_0d835f8416b3cb8ff5ea6dd4a569d4728c4879b93fab90d2ccc9bbf815ddcfde = $this->env->getExtension("native_profiler");
        $__internal_0d835f8416b3cb8ff5ea6dd4a569d4728c4879b93fab90d2ccc9bbf815ddcfde->enter($__internal_0d835f8416b3cb8ff5ea6dd4a569d4728c4879b93fab90d2ccc9bbf815ddcfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/index.html.twig"));

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
        
        $__internal_0d835f8416b3cb8ff5ea6dd4a569d4728c4879b93fab90d2ccc9bbf815ddcfde->leave($__internal_0d835f8416b3cb8ff5ea6dd4a569d4728c4879b93fab90d2ccc9bbf815ddcfde_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e70bcc0f7fc288b011baedf5969cb51bc978fe8a4885eede9d08425de3b79142 = $this->env->getExtension("native_profiler");
        $__internal_e70bcc0f7fc288b011baedf5969cb51bc978fe8a4885eede9d08425de3b79142->enter($__internal_e70bcc0f7fc288b011baedf5969cb51bc978fe8a4885eede9d08425de3b79142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LFD4S:Accueil";
        
        $__internal_e70bcc0f7fc288b011baedf5969cb51bc978fe8a4885eede9d08425de3b79142->leave($__internal_e70bcc0f7fc288b011baedf5969cb51bc978fe8a4885eede9d08425de3b79142_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_227ba22af1d2bb2125275cc34c31920febbe566ff6f4d751de2c718d56a14494 = $this->env->getExtension("native_profiler");
        $__internal_227ba22af1d2bb2125275cc34c31920febbe566ff6f4d751de2c718d56a14494->enter($__internal_227ba22af1d2bb2125275cc34c31920febbe566ff6f4d751de2c718d56a14494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_227ba22af1d2bb2125275cc34c31920febbe566ff6f4d751de2c718d56a14494->leave($__internal_227ba22af1d2bb2125275cc34c31920febbe566ff6f4d751de2c718d56a14494_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e2fc281f7cf982004576c103c09675a097ad2d301ac56f767cd221ad3c57bf42 = $this->env->getExtension("native_profiler");
        $__internal_e2fc281f7cf982004576c103c09675a097ad2d301ac56f767cd221ad3c57bf42->enter($__internal_e2fc281f7cf982004576c103c09675a097ad2d301ac56f767cd221ad3c57bf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_e2fc281f7cf982004576c103c09675a097ad2d301ac56f767cd221ad3c57bf42->leave($__internal_e2fc281f7cf982004576c103c09675a097ad2d301ac56f767cd221ad3c57bf42_prof);

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
