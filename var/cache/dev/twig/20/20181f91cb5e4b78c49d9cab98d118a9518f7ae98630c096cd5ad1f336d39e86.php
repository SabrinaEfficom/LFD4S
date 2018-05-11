<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d38f1a810d84d0e39ce7b2aa8eb9014e9b327a6f33a8bf574edc459e2cee35b6 extends Twig_Template
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
        $__internal_a3f7e05e707bfd5ddf1a0d4ca45ffff9a2097c566f468eceb8aa8186b0110983 = $this->env->getExtension("native_profiler");
        $__internal_a3f7e05e707bfd5ddf1a0d4ca45ffff9a2097c566f468eceb8aa8186b0110983->enter($__internal_a3f7e05e707bfd5ddf1a0d4ca45ffff9a2097c566f468eceb8aa8186b0110983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a3f7e05e707bfd5ddf1a0d4ca45ffff9a2097c566f468eceb8aa8186b0110983->leave($__internal_a3f7e05e707bfd5ddf1a0d4ca45ffff9a2097c566f468eceb8aa8186b0110983_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
