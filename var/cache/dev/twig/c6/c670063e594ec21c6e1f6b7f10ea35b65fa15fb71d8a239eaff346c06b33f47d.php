<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6fc4785373ef34bc32213ff7f19d9c240fa2eace5c5c035a9171b8772d1826af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09602663e3882c9afdc2f69afb597f334bed8878597fa2edb67bda61aa69a8e4 = $this->env->getExtension("native_profiler");
        $__internal_09602663e3882c9afdc2f69afb597f334bed8878597fa2edb67bda61aa69a8e4->enter($__internal_09602663e3882c9afdc2f69afb597f334bed8878597fa2edb67bda61aa69a8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09602663e3882c9afdc2f69afb597f334bed8878597fa2edb67bda61aa69a8e4->leave($__internal_09602663e3882c9afdc2f69afb597f334bed8878597fa2edb67bda61aa69a8e4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d2edcb376d784247074b19bdc8ffc29dbdd5e49a38fb67fb4b4c26b9290f941 = $this->env->getExtension("native_profiler");
        $__internal_8d2edcb376d784247074b19bdc8ffc29dbdd5e49a38fb67fb4b4c26b9290f941->enter($__internal_8d2edcb376d784247074b19bdc8ffc29dbdd5e49a38fb67fb4b4c26b9290f941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8d2edcb376d784247074b19bdc8ffc29dbdd5e49a38fb67fb4b4c26b9290f941->leave($__internal_8d2edcb376d784247074b19bdc8ffc29dbdd5e49a38fb67fb4b4c26b9290f941_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62e1a1845458bae9fd9bdb5c99123e8d96faf888f933a91e41ecdad252f63d1a = $this->env->getExtension("native_profiler");
        $__internal_62e1a1845458bae9fd9bdb5c99123e8d96faf888f933a91e41ecdad252f63d1a->enter($__internal_62e1a1845458bae9fd9bdb5c99123e8d96faf888f933a91e41ecdad252f63d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_62e1a1845458bae9fd9bdb5c99123e8d96faf888f933a91e41ecdad252f63d1a->leave($__internal_62e1a1845458bae9fd9bdb5c99123e8d96faf888f933a91e41ecdad252f63d1a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6cc08e5848a31a88cedf8f2dd5bcf33991142057ef5530524e0d13e98fb63859 = $this->env->getExtension("native_profiler");
        $__internal_6cc08e5848a31a88cedf8f2dd5bcf33991142057ef5530524e0d13e98fb63859->enter($__internal_6cc08e5848a31a88cedf8f2dd5bcf33991142057ef5530524e0d13e98fb63859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6cc08e5848a31a88cedf8f2dd5bcf33991142057ef5530524e0d13e98fb63859->leave($__internal_6cc08e5848a31a88cedf8f2dd5bcf33991142057ef5530524e0d13e98fb63859_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
