<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_562f611d19616af99a3a2995355605aa7096b82e25879aefe6ce426303f926f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_2b912d55bf6cf25d099ac0fcfd55a83bb647b767e6b342a4137ff68d0a522402 = $this->env->getExtension("native_profiler");
        $__internal_2b912d55bf6cf25d099ac0fcfd55a83bb647b767e6b342a4137ff68d0a522402->enter($__internal_2b912d55bf6cf25d099ac0fcfd55a83bb647b767e6b342a4137ff68d0a522402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b912d55bf6cf25d099ac0fcfd55a83bb647b767e6b342a4137ff68d0a522402->leave($__internal_2b912d55bf6cf25d099ac0fcfd55a83bb647b767e6b342a4137ff68d0a522402_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb9a3f171a3d7bd633086fb9ce467cdb15f9c34987bcba800e0daacc109cb61c = $this->env->getExtension("native_profiler");
        $__internal_bb9a3f171a3d7bd633086fb9ce467cdb15f9c34987bcba800e0daacc109cb61c->enter($__internal_bb9a3f171a3d7bd633086fb9ce467cdb15f9c34987bcba800e0daacc109cb61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bb9a3f171a3d7bd633086fb9ce467cdb15f9c34987bcba800e0daacc109cb61c->leave($__internal_bb9a3f171a3d7bd633086fb9ce467cdb15f9c34987bcba800e0daacc109cb61c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2045fb82baa14e275718be558bf26314c267bfd272ce03da65a4d86491398905 = $this->env->getExtension("native_profiler");
        $__internal_2045fb82baa14e275718be558bf26314c267bfd272ce03da65a4d86491398905->enter($__internal_2045fb82baa14e275718be558bf26314c267bfd272ce03da65a4d86491398905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2045fb82baa14e275718be558bf26314c267bfd272ce03da65a4d86491398905->leave($__internal_2045fb82baa14e275718be558bf26314c267bfd272ce03da65a4d86491398905_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c29d71eed800ff2890a05c01d4500d14bfb836f3488034d9386b8930d144ec2 = $this->env->getExtension("native_profiler");
        $__internal_1c29d71eed800ff2890a05c01d4500d14bfb836f3488034d9386b8930d144ec2->enter($__internal_1c29d71eed800ff2890a05c01d4500d14bfb836f3488034d9386b8930d144ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1c29d71eed800ff2890a05c01d4500d14bfb836f3488034d9386b8930d144ec2->leave($__internal_1c29d71eed800ff2890a05c01d4500d14bfb836f3488034d9386b8930d144ec2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
