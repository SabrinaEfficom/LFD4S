<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_79a2a7c105fe416da7ec3d52f30e5ce782e5a2327600ddcd8762fde6bbe1cf9d extends Twig_Template
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
        $__internal_b291fb2b614e0378e4fd9eca30edd4ff9e01c1a50e404f5f10eaf283c661cb72 = $this->env->getExtension("native_profiler");
        $__internal_b291fb2b614e0378e4fd9eca30edd4ff9e01c1a50e404f5f10eaf283c661cb72->enter($__internal_b291fb2b614e0378e4fd9eca30edd4ff9e01c1a50e404f5f10eaf283c661cb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b291fb2b614e0378e4fd9eca30edd4ff9e01c1a50e404f5f10eaf283c661cb72->leave($__internal_b291fb2b614e0378e4fd9eca30edd4ff9e01c1a50e404f5f10eaf283c661cb72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
