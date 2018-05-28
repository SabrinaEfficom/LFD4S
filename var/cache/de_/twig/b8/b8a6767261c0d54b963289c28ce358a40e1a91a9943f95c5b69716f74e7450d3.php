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
        $__internal_d180b79d9fe3e40c66691fd22a30ca3cb2bb3adc01fa24c970768af214e84ed9 = $this->env->getExtension("native_profiler");
        $__internal_d180b79d9fe3e40c66691fd22a30ca3cb2bb3adc01fa24c970768af214e84ed9->enter($__internal_d180b79d9fe3e40c66691fd22a30ca3cb2bb3adc01fa24c970768af214e84ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle:Advert:account.html.twig"));

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
        
        $__internal_d180b79d9fe3e40c66691fd22a30ca3cb2bb3adc01fa24c970768af214e84ed9->leave($__internal_d180b79d9fe3e40c66691fd22a30ca3cb2bb3adc01fa24c970768af214e84ed9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b45fdc64b1743c3241fd9f9ead64698805c8e2c9cc6bfb6375f8d221cb7c6aa = $this->env->getExtension("native_profiler");
        $__internal_9b45fdc64b1743c3241fd9f9ead64698805c8e2c9cc6bfb6375f8d221cb7c6aa->enter($__internal_9b45fdc64b1743c3241fd9f9ead64698805c8e2c9cc6bfb6375f8d221cb7c6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ACCOUNT";
        
        $__internal_9b45fdc64b1743c3241fd9f9ead64698805c8e2c9cc6bfb6375f8d221cb7c6aa->leave($__internal_9b45fdc64b1743c3241fd9f9ead64698805c8e2c9cc6bfb6375f8d221cb7c6aa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3dbbf6cab563d43fd2a40e8162ff67c2af15eab044065435d0ccb0425e8a796a = $this->env->getExtension("native_profiler");
        $__internal_3dbbf6cab563d43fd2a40e8162ff67c2af15eab044065435d0ccb0425e8a796a->enter($__internal_3dbbf6cab563d43fd2a40e8162ff67c2af15eab044065435d0ccb0425e8a796a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3dbbf6cab563d43fd2a40e8162ff67c2af15eab044065435d0ccb0425e8a796a->leave($__internal_3dbbf6cab563d43fd2a40e8162ff67c2af15eab044065435d0ccb0425e8a796a_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2d26872ee61fdf88611db6875724ccadc492e1911abd762424130f7a4f01c15 = $this->env->getExtension("native_profiler");
        $__internal_c2d26872ee61fdf88611db6875724ccadc492e1911abd762424130f7a4f01c15->enter($__internal_c2d26872ee61fdf88611db6875724ccadc492e1911abd762424130f7a4f01c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c2d26872ee61fdf88611db6875724ccadc492e1911abd762424130f7a4f01c15->leave($__internal_c2d26872ee61fdf88611db6875724ccadc492e1911abd762424130f7a4f01c15_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6056ca7c7ceb06e115b70848b19adb45c6609c945af0ce35e2f79b478ab315be = $this->env->getExtension("native_profiler");
        $__internal_6056ca7c7ceb06e115b70848b19adb45c6609c945af0ce35e2f79b478ab315be->enter($__internal_6056ca7c7ceb06e115b70848b19adb45c6609c945af0ce35e2f79b478ab315be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_6056ca7c7ceb06e115b70848b19adb45c6609c945af0ce35e2f79b478ab315be->leave($__internal_6056ca7c7ceb06e115b70848b19adb45c6609c945af0ce35e2f79b478ab315be_prof);

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
