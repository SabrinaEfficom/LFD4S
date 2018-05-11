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
        $__internal_96d128a35a82f0b5e117d411dc202696eeb82e99b537b40e90da39f627026f85 = $this->env->getExtension("native_profiler");
        $__internal_96d128a35a82f0b5e117d411dc202696eeb82e99b537b40e90da39f627026f85->enter($__internal_96d128a35a82f0b5e117d411dc202696eeb82e99b537b40e90da39f627026f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:account.html.twig"));

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
        
        $__internal_96d128a35a82f0b5e117d411dc202696eeb82e99b537b40e90da39f627026f85->leave($__internal_96d128a35a82f0b5e117d411dc202696eeb82e99b537b40e90da39f627026f85_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a26d1438e795c8c0282b839182a9c1422ab279292c8cfaf3ce569bdbe86f5bb = $this->env->getExtension("native_profiler");
        $__internal_1a26d1438e795c8c0282b839182a9c1422ab279292c8cfaf3ce569bdbe86f5bb->enter($__internal_1a26d1438e795c8c0282b839182a9c1422ab279292c8cfaf3ce569bdbe86f5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ACCOUNT";
        
        $__internal_1a26d1438e795c8c0282b839182a9c1422ab279292c8cfaf3ce569bdbe86f5bb->leave($__internal_1a26d1438e795c8c0282b839182a9c1422ab279292c8cfaf3ce569bdbe86f5bb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b7244774cf1e46fabb41100d710d84e79566e75ef8ec5f665597e27af1bd16fd = $this->env->getExtension("native_profiler");
        $__internal_b7244774cf1e46fabb41100d710d84e79566e75ef8ec5f665597e27af1bd16fd->enter($__internal_b7244774cf1e46fabb41100d710d84e79566e75ef8ec5f665597e27af1bd16fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b7244774cf1e46fabb41100d710d84e79566e75ef8ec5f665597e27af1bd16fd->leave($__internal_b7244774cf1e46fabb41100d710d84e79566e75ef8ec5f665597e27af1bd16fd_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a447abe0256b8ea553bc122aa31b1bdaae97780df8175f5a95064194d1f0302 = $this->env->getExtension("native_profiler");
        $__internal_4a447abe0256b8ea553bc122aa31b1bdaae97780df8175f5a95064194d1f0302->enter($__internal_4a447abe0256b8ea553bc122aa31b1bdaae97780df8175f5a95064194d1f0302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4a447abe0256b8ea553bc122aa31b1bdaae97780df8175f5a95064194d1f0302->leave($__internal_4a447abe0256b8ea553bc122aa31b1bdaae97780df8175f5a95064194d1f0302_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a09ef5fc3062572979c884908fc45de4379ca357fdb1398d67ec5681ba609db2 = $this->env->getExtension("native_profiler");
        $__internal_a09ef5fc3062572979c884908fc45de4379ca357fdb1398d67ec5681ba609db2->enter($__internal_a09ef5fc3062572979c884908fc45de4379ca357fdb1398d67ec5681ba609db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_a09ef5fc3062572979c884908fc45de4379ca357fdb1398d67ec5681ba609db2->leave($__internal_a09ef5fc3062572979c884908fc45de4379ca357fdb1398d67ec5681ba609db2_prof);

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
