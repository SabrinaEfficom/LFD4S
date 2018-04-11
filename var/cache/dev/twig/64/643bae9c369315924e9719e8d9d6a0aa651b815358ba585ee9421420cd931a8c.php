<?php

/* LFD4SPlatformBundle::layout.html.twig */
class __TwigTemplate_649cf27984adb1fc7e07a5d33dc307e73688a29b7cb116bdd93e89fe5e097bbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LFD4SPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'LFD4Splatform_body' => array($this, 'block_LFD4Splatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad0c5a443b3e019d55666a69a2327e596ae0eb37bcb202af3363d2df61dbe104 = $this->env->getExtension("native_profiler");
        $__internal_ad0c5a443b3e019d55666a69a2327e596ae0eb37bcb202af3363d2df61dbe104->enter($__internal_ad0c5a443b3e019d55666a69a2327e596ae0eb37bcb202af3363d2df61dbe104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LFD4SPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad0c5a443b3e019d55666a69a2327e596ae0eb37bcb202af3363d2df61dbe104->leave($__internal_ad0c5a443b3e019d55666a69a2327e596ae0eb37bcb202af3363d2df61dbe104_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2078dd1b3a649a480cadf59073e9478867a317fe7be342d574a6945d35b212ef = $this->env->getExtension("native_profiler");
        $__internal_2078dd1b3a649a480cadf59073e9478867a317fe7be342d574a6945d35b212ef->enter($__internal_2078dd1b3a649a480cadf59073e9478867a317fe7be342d574a6945d35b212ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2078dd1b3a649a480cadf59073e9478867a317fe7be342d574a6945d35b212ef->leave($__internal_2078dd1b3a649a480cadf59073e9478867a317fe7be342d574a6945d35b212ef_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_93aa520d2cfd989124d4c49fd31723765e47f846f4670ad44105ed223363ba85 = $this->env->getExtension("native_profiler");
        $__internal_93aa520d2cfd989124d4c49fd31723765e47f846f4670ad44105ed223363ba85->enter($__internal_93aa520d2cfd989124d4c49fd31723765e47f846f4670ad44105ed223363ba85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 10
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 15
        echo "    ";
        $this->displayBlock('LFD4Splatform_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_93aa520d2cfd989124d4c49fd31723765e47f846f4670ad44105ed223363ba85->leave($__internal_93aa520d2cfd989124d4c49fd31723765e47f846f4670ad44105ed223363ba85_prof);

    }

    // line 15
    public function block_LFD4Splatform_body($context, array $blocks = array())
    {
        $__internal_1fc46f5980accdd41f296a5ec5caa6afdef74eaba32763bfc963f630e98336d2 = $this->env->getExtension("native_profiler");
        $__internal_1fc46f5980accdd41f296a5ec5caa6afdef74eaba32763bfc963f630e98336d2->enter($__internal_1fc46f5980accdd41f296a5ec5caa6afdef74eaba32763bfc963f630e98336d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LFD4Splatform_body"));

        // line 16
        echo "    ";
        
        $__internal_1fc46f5980accdd41f296a5ec5caa6afdef74eaba32763bfc963f630e98336d2->leave($__internal_1fc46f5980accdd41f296a5ec5caa6afdef74eaba32763bfc963f630e98336d2_prof);

    }

    public function getTemplateName()
    {
        return "LFD4SPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  78 => 15,  70 => 17,  67 => 15,  61 => 10,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*     <h1>Annonces</h1>*/
/* */
/*     <hr>*/
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block LFD4Splatform_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
