<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_62d0350d6feef1db350d0221a0f0bc1463576a82de4754cfea757361b597164c extends Twig_Template
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
        $__internal_1f67ff60a635cc41c96cf034d758168c6a3e5fdfe27002aeb2911448bebb6be6 = $this->env->getExtension("native_profiler");
        $__internal_1f67ff60a635cc41c96cf034d758168c6a3e5fdfe27002aeb2911448bebb6be6->enter($__internal_1f67ff60a635cc41c96cf034d758168c6a3e5fdfe27002aeb2911448bebb6be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1f67ff60a635cc41c96cf034d758168c6a3e5fdfe27002aeb2911448bebb6be6->leave($__internal_1f67ff60a635cc41c96cf034d758168c6a3e5fdfe27002aeb2911448bebb6be6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
