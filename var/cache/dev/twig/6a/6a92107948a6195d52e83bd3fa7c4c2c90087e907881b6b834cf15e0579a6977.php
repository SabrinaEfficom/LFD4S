<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_aef5b4ecfa2c5dd114cf175fed11e9a1763240c3e8f80e5d2a39ac6bb54a851e extends Twig_Template
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
        $__internal_dbf4011d9969891a4705b272e411dcdc933db1c9ead1ad3850a097187d1194df = $this->env->getExtension("native_profiler");
        $__internal_dbf4011d9969891a4705b272e411dcdc933db1c9ead1ad3850a097187d1194df->enter($__internal_dbf4011d9969891a4705b272e411dcdc933db1c9ead1ad3850a097187d1194df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_dbf4011d9969891a4705b272e411dcdc933db1c9ead1ad3850a097187d1194df->leave($__internal_dbf4011d9969891a4705b272e411dcdc933db1c9ead1ad3850a097187d1194df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
