<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_387d60fd974bc33c1b75454996b5601e0c5624472b7142f1dcfe1206a309311c extends Twig_Template
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
        $__internal_b13165a43345107c5fcf0d69fedee0e9ef756e8b2a35b368870f786e062da3d8 = $this->env->getExtension("native_profiler");
        $__internal_b13165a43345107c5fcf0d69fedee0e9ef756e8b2a35b368870f786e062da3d8->enter($__internal_b13165a43345107c5fcf0d69fedee0e9ef756e8b2a35b368870f786e062da3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b13165a43345107c5fcf0d69fedee0e9ef756e8b2a35b368870f786e062da3d8->leave($__internal_b13165a43345107c5fcf0d69fedee0e9ef756e8b2a35b368870f786e062da3d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
