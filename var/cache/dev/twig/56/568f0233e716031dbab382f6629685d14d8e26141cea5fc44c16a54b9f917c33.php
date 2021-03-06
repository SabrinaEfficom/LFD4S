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
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d098aaadc38762f305828f87a8ff5259849fd42ae2f053e17ef74359fff75e94 = $this->env->getExtension("native_profiler");
        $__internal_d098aaadc38762f305828f87a8ff5259849fd42ae2f053e17ef74359fff75e94->enter($__internal_d098aaadc38762f305828f87a8ff5259849fd42ae2f053e17ef74359fff75e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:index.html.twig"));

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
        
        $__internal_d098aaadc38762f305828f87a8ff5259849fd42ae2f053e17ef74359fff75e94->leave($__internal_d098aaadc38762f305828f87a8ff5259849fd42ae2f053e17ef74359fff75e94_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_651e57fad0c2ed40b4040b11be9c496b4dae0d25e3b5192a7eaf3513dec2ab7e = $this->env->getExtension("native_profiler");
        $__internal_651e57fad0c2ed40b4040b11be9c496b4dae0d25e3b5192a7eaf3513dec2ab7e->enter($__internal_651e57fad0c2ed40b4040b11be9c496b4dae0d25e3b5192a7eaf3513dec2ab7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LFD4S:Accueil";
        
        $__internal_651e57fad0c2ed40b4040b11be9c496b4dae0d25e3b5192a7eaf3513dec2ab7e->leave($__internal_651e57fad0c2ed40b4040b11be9c496b4dae0d25e3b5192a7eaf3513dec2ab7e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f7fc6ec375370b9489543b7f5d47415dbfe79504d12a0a9401cb0488819a041 = $this->env->getExtension("native_profiler");
        $__internal_1f7fc6ec375370b9489543b7f5d47415dbfe79504d12a0a9401cb0488819a041->enter($__internal_1f7fc6ec375370b9489543b7f5d47415dbfe79504d12a0a9401cb0488819a041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1f7fc6ec375370b9489543b7f5d47415dbfe79504d12a0a9401cb0488819a041->leave($__internal_1f7fc6ec375370b9489543b7f5d47415dbfe79504d12a0a9401cb0488819a041_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1bd12e4a9c04ba32d1532e0c1cb86cfeb0d05673712aca0ef86056344ab577d4 = $this->env->getExtension("native_profiler");
        $__internal_1bd12e4a9c04ba32d1532e0c1cb86cfeb0d05673712aca0ef86056344ab577d4->enter($__internal_1bd12e4a9c04ba32d1532e0c1cb86cfeb0d05673712aca0ef86056344ab577d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_1bd12e4a9c04ba32d1532e0c1cb86cfeb0d05673712aca0ef86056344ab577d4->leave($__internal_1bd12e4a9c04ba32d1532e0c1cb86cfeb0d05673712aca0ef86056344ab577d4_prof);

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
