<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_6a0121e15293249288bc1a1561f5324411494203a031423e52ef8d581444312d extends Twig_Template
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
        $__internal_e709727a07bdd8fd33b757b0e95906a40c3ca0b4aacc52aa9bed6a3df8a83b8c = $this->env->getExtension("native_profiler");
        $__internal_e709727a07bdd8fd33b757b0e95906a40c3ca0b4aacc52aa9bed6a3df8a83b8c->enter($__internal_e709727a07bdd8fd33b757b0e95906a40c3ca0b4aacc52aa9bed6a3df8a83b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_e709727a07bdd8fd33b757b0e95906a40c3ca0b4aacc52aa9bed6a3df8a83b8c->leave($__internal_e709727a07bdd8fd33b757b0e95906a40c3ca0b4aacc52aa9bed6a3df8a83b8c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
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
