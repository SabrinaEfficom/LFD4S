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
        $__internal_c6f54a1646aa833c9db49f11a863c749e7d0bdf66e60b4848e8c85391dc15d85 = $this->env->getExtension("native_profiler");
        $__internal_c6f54a1646aa833c9db49f11a863c749e7d0bdf66e60b4848e8c85391dc15d85->enter($__internal_c6f54a1646aa833c9db49f11a863c749e7d0bdf66e60b4848e8c85391dc15d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:index.html.twig"));

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
        
        $__internal_c6f54a1646aa833c9db49f11a863c749e7d0bdf66e60b4848e8c85391dc15d85->leave($__internal_c6f54a1646aa833c9db49f11a863c749e7d0bdf66e60b4848e8c85391dc15d85_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_970823e0b7da829e9d4d796266737a10ee7b7e64a92a507e6bb477d77b4db989 = $this->env->getExtension("native_profiler");
        $__internal_970823e0b7da829e9d4d796266737a10ee7b7e64a92a507e6bb477d77b4db989->enter($__internal_970823e0b7da829e9d4d796266737a10ee7b7e64a92a507e6bb477d77b4db989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LFD4S:Accueil";
        
        $__internal_970823e0b7da829e9d4d796266737a10ee7b7e64a92a507e6bb477d77b4db989->leave($__internal_970823e0b7da829e9d4d796266737a10ee7b7e64a92a507e6bb477d77b4db989_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9077f7854dea7aba6694c15ddb95dcbace7291f95adebc654b9f18b6141e29d4 = $this->env->getExtension("native_profiler");
        $__internal_9077f7854dea7aba6694c15ddb95dcbace7291f95adebc654b9f18b6141e29d4->enter($__internal_9077f7854dea7aba6694c15ddb95dcbace7291f95adebc654b9f18b6141e29d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9077f7854dea7aba6694c15ddb95dcbace7291f95adebc654b9f18b6141e29d4->leave($__internal_9077f7854dea7aba6694c15ddb95dcbace7291f95adebc654b9f18b6141e29d4_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_3e22159a24a42b0276979c6bdf1d0efee4fa679118bff9d46e1c7ca3e172e134 = $this->env->getExtension("native_profiler");
        $__internal_3e22159a24a42b0276979c6bdf1d0efee4fa679118bff9d46e1c7ca3e172e134->enter($__internal_3e22159a24a42b0276979c6bdf1d0efee4fa679118bff9d46e1c7ca3e172e134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_3e22159a24a42b0276979c6bdf1d0efee4fa679118bff9d46e1c7ca3e172e134->leave($__internal_3e22159a24a42b0276979c6bdf1d0efee4fa679118bff9d46e1c7ca3e172e134_prof);

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
