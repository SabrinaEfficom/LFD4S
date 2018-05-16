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
        $__internal_a6f347f1cbc8c023be848208787ad36141d1b10353dbe4c46b4c1cc93d8ad42b = $this->env->getExtension("native_profiler");
        $__internal_a6f347f1cbc8c023be848208787ad36141d1b10353dbe4c46b4c1cc93d8ad42b->enter($__internal_a6f347f1cbc8c023be848208787ad36141d1b10353dbe4c46b4c1cc93d8ad42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SPlatform/Advert/index.html.twig"));

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
        
        $__internal_a6f347f1cbc8c023be848208787ad36141d1b10353dbe4c46b4c1cc93d8ad42b->leave($__internal_a6f347f1cbc8c023be848208787ad36141d1b10353dbe4c46b4c1cc93d8ad42b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_687add858172ad9618d1717e8c4e76e7c18a3f714d8b7503b9608f8c9ef66802 = $this->env->getExtension("native_profiler");
        $__internal_687add858172ad9618d1717e8c4e76e7c18a3f714d8b7503b9608f8c9ef66802->enter($__internal_687add858172ad9618d1717e8c4e76e7c18a3f714d8b7503b9608f8c9ef66802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LFD4S:Accueil";
        
        $__internal_687add858172ad9618d1717e8c4e76e7c18a3f714d8b7503b9608f8c9ef66802->leave($__internal_687add858172ad9618d1717e8c4e76e7c18a3f714d8b7503b9608f8c9ef66802_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67703c8dd572cdf7ca9fb55b815d310b20b1678497f050cbb605572fc8b37fbd = $this->env->getExtension("native_profiler");
        $__internal_67703c8dd572cdf7ca9fb55b815d310b20b1678497f050cbb605572fc8b37fbd->enter($__internal_67703c8dd572cdf7ca9fb55b815d310b20b1678497f050cbb605572fc8b37fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_67703c8dd572cdf7ca9fb55b815d310b20b1678497f050cbb605572fc8b37fbd->leave($__internal_67703c8dd572cdf7ca9fb55b815d310b20b1678497f050cbb605572fc8b37fbd_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_3bee43eac6a2480359b64952b37e3cd348819fbc5ff7370d791c3e6d55984410 = $this->env->getExtension("native_profiler");
        $__internal_3bee43eac6a2480359b64952b37e3cd348819fbc5ff7370d791c3e6d55984410->enter($__internal_3bee43eac6a2480359b64952b37e3cd348819fbc5ff7370d791c3e6d55984410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_3bee43eac6a2480359b64952b37e3cd348819fbc5ff7370d791c3e6d55984410->leave($__internal_3bee43eac6a2480359b64952b37e3cd348819fbc5ff7370d791c3e6d55984410_prof);

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
