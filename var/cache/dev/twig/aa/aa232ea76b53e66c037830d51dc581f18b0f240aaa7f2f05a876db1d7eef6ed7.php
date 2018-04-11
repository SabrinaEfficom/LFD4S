<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_687261d8dcfba279d3724c281520f747e342a7c2f3841dc0cafe026c556fe35c extends Twig_Template
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
        $__internal_b1f809e1f19955ae898b3994efbc3789f3199a5c6a362216adf06c29176ec411 = $this->env->getExtension("native_profiler");
        $__internal_b1f809e1f19955ae898b3994efbc3789f3199a5c6a362216adf06c29176ec411->enter($__internal_b1f809e1f19955ae898b3994efbc3789f3199a5c6a362216adf06c29176ec411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b1f809e1f19955ae898b3994efbc3789f3199a5c6a362216adf06c29176ec411->leave($__internal_b1f809e1f19955ae898b3994efbc3789f3199a5c6a362216adf06c29176ec411_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
