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
        $__internal_acf8867f8bd6154f6c027be15ef6a2ffed4045a9c2cf8d08de1c0efc46fd48d2 = $this->env->getExtension("native_profiler");
        $__internal_acf8867f8bd6154f6c027be15ef6a2ffed4045a9c2cf8d08de1c0efc46fd48d2->enter($__internal_acf8867f8bd6154f6c027be15ef6a2ffed4045a9c2cf8d08de1c0efc46fd48d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_acf8867f8bd6154f6c027be15ef6a2ffed4045a9c2cf8d08de1c0efc46fd48d2->leave($__internal_acf8867f8bd6154f6c027be15ef6a2ffed4045a9c2cf8d08de1c0efc46fd48d2_prof);

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
