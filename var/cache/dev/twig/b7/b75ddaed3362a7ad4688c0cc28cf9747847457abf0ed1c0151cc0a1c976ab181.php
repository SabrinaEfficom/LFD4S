<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_46a948d53beb2de674ff8c4cfd97c711336ecef46c7d95d75a9db27f2ea3894c extends Twig_Template
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
        $__internal_203ee5f49d9fc810a799bf2cf998a22ddcee486ba086b96f9e369311a6c8eb2e = $this->env->getExtension("native_profiler");
        $__internal_203ee5f49d9fc810a799bf2cf998a22ddcee486ba086b96f9e369311a6c8eb2e->enter($__internal_203ee5f49d9fc810a799bf2cf998a22ddcee486ba086b96f9e369311a6c8eb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_203ee5f49d9fc810a799bf2cf998a22ddcee486ba086b96f9e369311a6c8eb2e->leave($__internal_203ee5f49d9fc810a799bf2cf998a22ddcee486ba086b96f9e369311a6c8eb2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
