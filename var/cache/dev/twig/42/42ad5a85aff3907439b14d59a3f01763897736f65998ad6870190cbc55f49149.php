<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_5c477c0cb457d4641aeb9903451cd1d0d1ece1d38473f3b1f7ad9f7dd68c3ea7 extends Twig_Template
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
        $__internal_8826a22365bea7ea74f12c4d926aacea0ed7c43c084b26588abf4eaf5c8432e2 = $this->env->getExtension("native_profiler");
        $__internal_8826a22365bea7ea74f12c4d926aacea0ed7c43c084b26588abf4eaf5c8432e2->enter($__internal_8826a22365bea7ea74f12c4d926aacea0ed7c43c084b26588abf4eaf5c8432e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_8826a22365bea7ea74f12c4d926aacea0ed7c43c084b26588abf4eaf5c8432e2->leave($__internal_8826a22365bea7ea74f12c4d926aacea0ed7c43c084b26588abf4eaf5c8432e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"<?php if ($disabled): ?> disabled="disabled"<?php endif ?>*/
/* <?php if ($required): ?> required="required"<?php endif ?>*/
/* <?php foreach ($attr as $k => $v): ?>*/
/* <?php if (in_array($k, array('placeholder', 'title'), true)): ?>*/
/* <?php printf(' %s="%s"', $view->escape($k), $view->escape(false !== $translation_domain ? $view['translator']->trans($v, array(), $translation_domain) : $v)) ?>*/
/* <?php elseif ($v === true): ?>*/
/* <?php printf(' %s="%s"', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf(' %s="%s"', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
