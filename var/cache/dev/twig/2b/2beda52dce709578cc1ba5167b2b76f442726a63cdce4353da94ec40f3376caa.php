<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3f707daf226de27812c6b1120a93cae80a92d522b76196941abaff91df11720d extends Twig_Template
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
        $__internal_9e7ee42a57b5746ec4bfc5fb02d0d8b10a9f17b8b9e6b405318ff1c4635ccd4c = $this->env->getExtension("native_profiler");
        $__internal_9e7ee42a57b5746ec4bfc5fb02d0d8b10a9f17b8b9e6b405318ff1c4635ccd4c->enter($__internal_9e7ee42a57b5746ec4bfc5fb02d0d8b10a9f17b8b9e6b405318ff1c4635ccd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9e7ee42a57b5746ec4bfc5fb02d0d8b10a9f17b8b9e6b405318ff1c4635ccd4c->leave($__internal_9e7ee42a57b5746ec4bfc5fb02d0d8b10a9f17b8b9e6b405318ff1c4635ccd4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
