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
        $__internal_f64d9d6cbab2c2941dcce4b4180ad9392b61a32cdefa5f5c5337fd34187921ee = $this->env->getExtension("native_profiler");
        $__internal_f64d9d6cbab2c2941dcce4b4180ad9392b61a32cdefa5f5c5337fd34187921ee->enter($__internal_f64d9d6cbab2c2941dcce4b4180ad9392b61a32cdefa5f5c5337fd34187921ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f64d9d6cbab2c2941dcce4b4180ad9392b61a32cdefa5f5c5337fd34187921ee->leave($__internal_f64d9d6cbab2c2941dcce4b4180ad9392b61a32cdefa5f5c5337fd34187921ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_16e20c1f3a881b2a69a6c2e3c89880b7d6147ec07b4dea2c0ed53effeefc3a31 = $this->env->getExtension("native_profiler");
        $__internal_16e20c1f3a881b2a69a6c2e3c89880b7d6147ec07b4dea2c0ed53effeefc3a31->enter($__internal_16e20c1f3a881b2a69a6c2e3c89880b7d6147ec07b4dea2c0ed53effeefc3a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_16e20c1f3a881b2a69a6c2e3c89880b7d6147ec07b4dea2c0ed53effeefc3a31->leave($__internal_16e20c1f3a881b2a69a6c2e3c89880b7d6147ec07b4dea2c0ed53effeefc3a31_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_659963f7d50f2ac7d4b504dc5902d5354a92ee36f61ab8f096a1415b7ed37fa0 = $this->env->getExtension("native_profiler");
        $__internal_659963f7d50f2ac7d4b504dc5902d5354a92ee36f61ab8f096a1415b7ed37fa0->enter($__internal_659963f7d50f2ac7d4b504dc5902d5354a92ee36f61ab8f096a1415b7ed37fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_659963f7d50f2ac7d4b504dc5902d5354a92ee36f61ab8f096a1415b7ed37fa0->leave($__internal_659963f7d50f2ac7d4b504dc5902d5354a92ee36f61ab8f096a1415b7ed37fa0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9675d04d902e380816f5346e68fc26a7c6c7a9f60d671d1d3fb1cf0d22dc966c = $this->env->getExtension("native_profiler");
        $__internal_9675d04d902e380816f5346e68fc26a7c6c7a9f60d671d1d3fb1cf0d22dc966c->enter($__internal_9675d04d902e380816f5346e68fc26a7c6c7a9f60d671d1d3fb1cf0d22dc966c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9675d04d902e380816f5346e68fc26a7c6c7a9f60d671d1d3fb1cf0d22dc966c->leave($__internal_9675d04d902e380816f5346e68fc26a7c6c7a9f60d671d1d3fb1cf0d22dc966c_prof);

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
