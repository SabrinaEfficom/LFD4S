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
        $__internal_d756937584f0cb5e149251191ed60f6a3f644c1e5dcf67b74f9fe592400f68df = $this->env->getExtension("native_profiler");
        $__internal_d756937584f0cb5e149251191ed60f6a3f644c1e5dcf67b74f9fe592400f68df->enter($__internal_d756937584f0cb5e149251191ed60f6a3f644c1e5dcf67b74f9fe592400f68df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d756937584f0cb5e149251191ed60f6a3f644c1e5dcf67b74f9fe592400f68df->leave($__internal_d756937584f0cb5e149251191ed60f6a3f644c1e5dcf67b74f9fe592400f68df_prof);

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
