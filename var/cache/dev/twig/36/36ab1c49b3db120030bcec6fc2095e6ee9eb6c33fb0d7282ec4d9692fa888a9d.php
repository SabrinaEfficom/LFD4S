<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_38c38c669e482633bb528cce97be5300fdb207c42208cb6a23fb9af2fd224649 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f52c3a44fa9c0d0d2a405e0ef978e38900b48bf44109a36c17db1b5e2803b8a3 = $this->env->getExtension("native_profiler");
        $__internal_f52c3a44fa9c0d0d2a405e0ef978e38900b48bf44109a36c17db1b5e2803b8a3->enter($__internal_f52c3a44fa9c0d0d2a405e0ef978e38900b48bf44109a36c17db1b5e2803b8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f52c3a44fa9c0d0d2a405e0ef978e38900b48bf44109a36c17db1b5e2803b8a3->leave($__internal_f52c3a44fa9c0d0d2a405e0ef978e38900b48bf44109a36c17db1b5e2803b8a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
