<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ee63d81297771cba14eeb1a6623057166ad394f043e3ab44741cfad4ea1d7f5e extends Twig_Template
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
        $__internal_155c5a7af1a6473be2b431fc71e1ec57e7a09dfaf89bc940b9ce778de2bc3835 = $this->env->getExtension("native_profiler");
        $__internal_155c5a7af1a6473be2b431fc71e1ec57e7a09dfaf89bc940b9ce778de2bc3835->enter($__internal_155c5a7af1a6473be2b431fc71e1ec57e7a09dfaf89bc940b9ce778de2bc3835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_155c5a7af1a6473be2b431fc71e1ec57e7a09dfaf89bc940b9ce778de2bc3835->leave($__internal_155c5a7af1a6473be2b431fc71e1ec57e7a09dfaf89bc940b9ce778de2bc3835_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
