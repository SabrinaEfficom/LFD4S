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
        $__internal_ab253c359742caee595b45f086f4026408f25c6dd972f7646386d85549ddc384 = $this->env->getExtension("native_profiler");
        $__internal_ab253c359742caee595b45f086f4026408f25c6dd972f7646386d85549ddc384->enter($__internal_ab253c359742caee595b45f086f4026408f25c6dd972f7646386d85549ddc384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ab253c359742caee595b45f086f4026408f25c6dd972f7646386d85549ddc384->leave($__internal_ab253c359742caee595b45f086f4026408f25c6dd972f7646386d85549ddc384_prof);

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
