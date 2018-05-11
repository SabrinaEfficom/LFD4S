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
        $__internal_2de3c0d91c8927c2157ecd8f5f041322d2f424a424486e9eba81b08f90576333 = $this->env->getExtension("native_profiler");
        $__internal_2de3c0d91c8927c2157ecd8f5f041322d2f424a424486e9eba81b08f90576333->enter($__internal_2de3c0d91c8927c2157ecd8f5f041322d2f424a424486e9eba81b08f90576333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:index.html.twig"));

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
        
        $__internal_2de3c0d91c8927c2157ecd8f5f041322d2f424a424486e9eba81b08f90576333->leave($__internal_2de3c0d91c8927c2157ecd8f5f041322d2f424a424486e9eba81b08f90576333_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cf5b77108037dc203e217ec88a11b6f4119d4b714b0028782d736c5f7edf225 = $this->env->getExtension("native_profiler");
        $__internal_3cf5b77108037dc203e217ec88a11b6f4119d4b714b0028782d736c5f7edf225->enter($__internal_3cf5b77108037dc203e217ec88a11b6f4119d4b714b0028782d736c5f7edf225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LFD4S:Accueil";
        
        $__internal_3cf5b77108037dc203e217ec88a11b6f4119d4b714b0028782d736c5f7edf225->leave($__internal_3cf5b77108037dc203e217ec88a11b6f4119d4b714b0028782d736c5f7edf225_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_afb1dacb59f9960cfc8ae5ee02439670ad0e1f502322fbf7017e6441e36fdf6e = $this->env->getExtension("native_profiler");
        $__internal_afb1dacb59f9960cfc8ae5ee02439670ad0e1f502322fbf7017e6441e36fdf6e->enter($__internal_afb1dacb59f9960cfc8ae5ee02439670ad0e1f502322fbf7017e6441e36fdf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_afb1dacb59f9960cfc8ae5ee02439670ad0e1f502322fbf7017e6441e36fdf6e->leave($__internal_afb1dacb59f9960cfc8ae5ee02439670ad0e1f502322fbf7017e6441e36fdf6e_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_5c46ebc819015ce771781947f59c41fc96102d16b807203310b853e9806e5815 = $this->env->getExtension("native_profiler");
        $__internal_5c46ebc819015ce771781947f59c41fc96102d16b807203310b853e9806e5815->enter($__internal_5c46ebc819015ce771781947f59c41fc96102d16b807203310b853e9806e5815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_5c46ebc819015ce771781947f59c41fc96102d16b807203310b853e9806e5815->leave($__internal_5c46ebc819015ce771781947f59c41fc96102d16b807203310b853e9806e5815_prof);

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
