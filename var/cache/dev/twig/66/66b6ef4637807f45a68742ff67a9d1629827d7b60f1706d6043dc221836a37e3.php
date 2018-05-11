<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_548283e6f71e96ea1a30c3db56c7fec46e747fd7fe29f607d69091d76048470e extends Twig_Template
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
        $__internal_d8b7f9ba959b93f1ce37f576bbdb1d3923bcae8a33c195d0308b1bb3234bdd77 = $this->env->getExtension("native_profiler");
        $__internal_d8b7f9ba959b93f1ce37f576bbdb1d3923bcae8a33c195d0308b1bb3234bdd77->enter($__internal_d8b7f9ba959b93f1ce37f576bbdb1d3923bcae8a33c195d0308b1bb3234bdd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d8b7f9ba959b93f1ce37f576bbdb1d3923bcae8a33c195d0308b1bb3234bdd77->leave($__internal_d8b7f9ba959b93f1ce37f576bbdb1d3923bcae8a33c195d0308b1bb3234bdd77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
