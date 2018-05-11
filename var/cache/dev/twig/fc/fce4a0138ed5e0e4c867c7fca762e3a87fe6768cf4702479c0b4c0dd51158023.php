<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3a6921ceb709a9755eeb9bd12a667d56ed562dcd1e84a0ba3c33c2b792922713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9135084832e0bc10f19df6e4c606680ba0be44da9d669fa2fcd30b9ef1a28bff = $this->env->getExtension("native_profiler");
        $__internal_9135084832e0bc10f19df6e4c606680ba0be44da9d669fa2fcd30b9ef1a28bff->enter($__internal_9135084832e0bc10f19df6e4c606680ba0be44da9d669fa2fcd30b9ef1a28bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9135084832e0bc10f19df6e4c606680ba0be44da9d669fa2fcd30b9ef1a28bff->leave($__internal_9135084832e0bc10f19df6e4c606680ba0be44da9d669fa2fcd30b9ef1a28bff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7cb9e8eb68d07da336a3e134e9b73dd5701f84e9ed9f618646371db737c1519e = $this->env->getExtension("native_profiler");
        $__internal_7cb9e8eb68d07da336a3e134e9b73dd5701f84e9ed9f618646371db737c1519e->enter($__internal_7cb9e8eb68d07da336a3e134e9b73dd5701f84e9ed9f618646371db737c1519e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7cb9e8eb68d07da336a3e134e9b73dd5701f84e9ed9f618646371db737c1519e->leave($__internal_7cb9e8eb68d07da336a3e134e9b73dd5701f84e9ed9f618646371db737c1519e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3414b0cdcbb91f89d13c6b5cdc638d073842e5d76ea2ba8facb9c83c57b87897 = $this->env->getExtension("native_profiler");
        $__internal_3414b0cdcbb91f89d13c6b5cdc638d073842e5d76ea2ba8facb9c83c57b87897->enter($__internal_3414b0cdcbb91f89d13c6b5cdc638d073842e5d76ea2ba8facb9c83c57b87897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3414b0cdcbb91f89d13c6b5cdc638d073842e5d76ea2ba8facb9c83c57b87897->leave($__internal_3414b0cdcbb91f89d13c6b5cdc638d073842e5d76ea2ba8facb9c83c57b87897_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c6dd1adc68fad43cedc811637eadec13e7034fdbd3fe57d2b98f332f7692c4a = $this->env->getExtension("native_profiler");
        $__internal_1c6dd1adc68fad43cedc811637eadec13e7034fdbd3fe57d2b98f332f7692c4a->enter($__internal_1c6dd1adc68fad43cedc811637eadec13e7034fdbd3fe57d2b98f332f7692c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1c6dd1adc68fad43cedc811637eadec13e7034fdbd3fe57d2b98f332f7692c4a->leave($__internal_1c6dd1adc68fad43cedc811637eadec13e7034fdbd3fe57d2b98f332f7692c4a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
