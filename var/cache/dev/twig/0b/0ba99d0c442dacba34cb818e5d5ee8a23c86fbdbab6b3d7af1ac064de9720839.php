<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_435e5e141ef8c75a0d609b9b6d56b0d58a2ccefff2cfdcc99cdda257b6e9a09f extends Twig_Template
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
        $__internal_197aeca3b90c0a1538e94c5e37d76403ceb7f730db26285a072b92cfd723edf0 = $this->env->getExtension("native_profiler");
        $__internal_197aeca3b90c0a1538e94c5e37d76403ceb7f730db26285a072b92cfd723edf0->enter($__internal_197aeca3b90c0a1538e94c5e37d76403ceb7f730db26285a072b92cfd723edf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_197aeca3b90c0a1538e94c5e37d76403ceb7f730db26285a072b92cfd723edf0->leave($__internal_197aeca3b90c0a1538e94c5e37d76403ceb7f730db26285a072b92cfd723edf0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
