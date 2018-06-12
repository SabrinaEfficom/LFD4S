<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_1b7390f4dbe4336fb062d9c5d622f8a726221406b95d6bf6e6561e523c4ae445 extends Twig_Template
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
        $__internal_f9d4d0abbf4adece5958deaa2519e9e211ed9b200b2ad5e6cde2d14d99e60739 = $this->env->getExtension("native_profiler");
        $__internal_f9d4d0abbf4adece5958deaa2519e9e211ed9b200b2ad5e6cde2d14d99e60739->enter($__internal_f9d4d0abbf4adece5958deaa2519e9e211ed9b200b2ad5e6cde2d14d99e60739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f9d4d0abbf4adece5958deaa2519e9e211ed9b200b2ad5e6cde2d14d99e60739->leave($__internal_f9d4d0abbf4adece5958deaa2519e9e211ed9b200b2ad5e6cde2d14d99e60739_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
