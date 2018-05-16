<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_531c2c3d73cdf39b89185f78077ea4e5d32c8cd5892e7e2c523b9e038872022d extends Twig_Template
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
        $__internal_13321eaf833db77908c3a79f4e6e39848f55f1aeedd48463f0a9d674fd516a28 = $this->env->getExtension("native_profiler");
        $__internal_13321eaf833db77908c3a79f4e6e39848f55f1aeedd48463f0a9d674fd516a28->enter($__internal_13321eaf833db77908c3a79f4e6e39848f55f1aeedd48463f0a9d674fd516a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_13321eaf833db77908c3a79f4e6e39848f55f1aeedd48463f0a9d674fd516a28->leave($__internal_13321eaf833db77908c3a79f4e6e39848f55f1aeedd48463f0a9d674fd516a28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
