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
        $__internal_ad7aa02efbf600c156fdae25c34b082825a370e57180e9c667fc054e675b5d5f = $this->env->getExtension("native_profiler");
        $__internal_ad7aa02efbf600c156fdae25c34b082825a370e57180e9c667fc054e675b5d5f->enter($__internal_ad7aa02efbf600c156fdae25c34b082825a370e57180e9c667fc054e675b5d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad7aa02efbf600c156fdae25c34b082825a370e57180e9c667fc054e675b5d5f->leave($__internal_ad7aa02efbf600c156fdae25c34b082825a370e57180e9c667fc054e675b5d5f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c48d9c920fc1ef11267c942e5ae5f88bb945a68d378dc9dee5747b3cdcf0d31 = $this->env->getExtension("native_profiler");
        $__internal_9c48d9c920fc1ef11267c942e5ae5f88bb945a68d378dc9dee5747b3cdcf0d31->enter($__internal_9c48d9c920fc1ef11267c942e5ae5f88bb945a68d378dc9dee5747b3cdcf0d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9c48d9c920fc1ef11267c942e5ae5f88bb945a68d378dc9dee5747b3cdcf0d31->leave($__internal_9c48d9c920fc1ef11267c942e5ae5f88bb945a68d378dc9dee5747b3cdcf0d31_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35b8f4636205d970d2210b7a8a0357ebcb0df8adca33e8c865530295381c1515 = $this->env->getExtension("native_profiler");
        $__internal_35b8f4636205d970d2210b7a8a0357ebcb0df8adca33e8c865530295381c1515->enter($__internal_35b8f4636205d970d2210b7a8a0357ebcb0df8adca33e8c865530295381c1515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_35b8f4636205d970d2210b7a8a0357ebcb0df8adca33e8c865530295381c1515->leave($__internal_35b8f4636205d970d2210b7a8a0357ebcb0df8adca33e8c865530295381c1515_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79bad6c3c4509420f9f15a3f4e1186ad8bd767644c94f712299656c00c26074c = $this->env->getExtension("native_profiler");
        $__internal_79bad6c3c4509420f9f15a3f4e1186ad8bd767644c94f712299656c00c26074c->enter($__internal_79bad6c3c4509420f9f15a3f4e1186ad8bd767644c94f712299656c00c26074c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_79bad6c3c4509420f9f15a3f4e1186ad8bd767644c94f712299656c00c26074c->leave($__internal_79bad6c3c4509420f9f15a3f4e1186ad8bd767644c94f712299656c00c26074c_prof);

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
