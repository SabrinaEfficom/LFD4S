<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2339831031e5396df746ad8105cafae154878e7790c47e28b6957301289544bf extends Twig_Template
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
        $__internal_cdd89c44621cb49117e6dc36851fa5f282873a0092ada899246ee9c824f2fc43 = $this->env->getExtension("native_profiler");
        $__internal_cdd89c44621cb49117e6dc36851fa5f282873a0092ada899246ee9c824f2fc43->enter($__internal_cdd89c44621cb49117e6dc36851fa5f282873a0092ada899246ee9c824f2fc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_cdd89c44621cb49117e6dc36851fa5f282873a0092ada899246ee9c824f2fc43->leave($__internal_cdd89c44621cb49117e6dc36851fa5f282873a0092ada899246ee9c824f2fc43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
