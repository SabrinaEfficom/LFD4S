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
        $__internal_cb934c0063c1b261a5d79aad65325cacfc570944b9c44a9bc7422f7600ad0b24 = $this->env->getExtension("native_profiler");
        $__internal_cb934c0063c1b261a5d79aad65325cacfc570944b9c44a9bc7422f7600ad0b24->enter($__internal_cb934c0063c1b261a5d79aad65325cacfc570944b9c44a9bc7422f7600ad0b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_cb934c0063c1b261a5d79aad65325cacfc570944b9c44a9bc7422f7600ad0b24->leave($__internal_cb934c0063c1b261a5d79aad65325cacfc570944b9c44a9bc7422f7600ad0b24_prof);

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
