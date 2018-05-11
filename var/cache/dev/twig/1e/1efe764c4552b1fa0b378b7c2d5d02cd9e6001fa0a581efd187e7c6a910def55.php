<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_43463db87c5d600a97221bcb5b913a27ff9f06ca93c39d121b55b18cd3d23192 extends Twig_Template
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
        $__internal_0e3bcbb99826efae72e1f836a613c8dfb4772476f65553ca4702f9cf9df26891 = $this->env->getExtension("native_profiler");
        $__internal_0e3bcbb99826efae72e1f836a613c8dfb4772476f65553ca4702f9cf9df26891->enter($__internal_0e3bcbb99826efae72e1f836a613c8dfb4772476f65553ca4702f9cf9df26891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0e3bcbb99826efae72e1f836a613c8dfb4772476f65553ca4702f9cf9df26891->leave($__internal_0e3bcbb99826efae72e1f836a613c8dfb4772476f65553ca4702f9cf9df26891_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
