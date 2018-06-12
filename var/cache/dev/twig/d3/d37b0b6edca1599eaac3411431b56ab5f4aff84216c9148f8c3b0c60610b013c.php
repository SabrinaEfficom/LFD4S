<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_23d4c2b0225edc783cf752712f71534f59faab3afe8d397270e3fca20e34db56 extends Twig_Template
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
        $__internal_ee7c2d67f56c15388fe8a3c584a9db454339967ebbaf876ac1194b2e3444eea2 = $this->env->getExtension("native_profiler");
        $__internal_ee7c2d67f56c15388fe8a3c584a9db454339967ebbaf876ac1194b2e3444eea2->enter($__internal_ee7c2d67f56c15388fe8a3c584a9db454339967ebbaf876ac1194b2e3444eea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ee7c2d67f56c15388fe8a3c584a9db454339967ebbaf876ac1194b2e3444eea2->leave($__internal_ee7c2d67f56c15388fe8a3c584a9db454339967ebbaf876ac1194b2e3444eea2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
