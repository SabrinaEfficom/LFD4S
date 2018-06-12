<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_9637cd3e4692beb1e766c8625a6b4e14c7ef4b5b9a51f70e28fcb869c351a633 extends Twig_Template
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
        $__internal_1f5f14ed4e2f1cdae6e3130711b6ad8841b843f7f0d3b16c80cdb148072ba544 = $this->env->getExtension("native_profiler");
        $__internal_1f5f14ed4e2f1cdae6e3130711b6ad8841b843f7f0d3b16c80cdb148072ba544->enter($__internal_1f5f14ed4e2f1cdae6e3130711b6ad8841b843f7f0d3b16c80cdb148072ba544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_1f5f14ed4e2f1cdae6e3130711b6ad8841b843f7f0d3b16c80cdb148072ba544->leave($__internal_1f5f14ed4e2f1cdae6e3130711b6ad8841b843f7f0d3b16c80cdb148072ba544_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
