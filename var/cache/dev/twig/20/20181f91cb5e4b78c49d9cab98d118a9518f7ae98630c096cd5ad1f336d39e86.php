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
        $__internal_4499bdfd6ff397095e410db50b105cdd6cd5b8e9c599b8ca02ea24e8cc1529b9 = $this->env->getExtension("native_profiler");
        $__internal_4499bdfd6ff397095e410db50b105cdd6cd5b8e9c599b8ca02ea24e8cc1529b9->enter($__internal_4499bdfd6ff397095e410db50b105cdd6cd5b8e9c599b8ca02ea24e8cc1529b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4499bdfd6ff397095e410db50b105cdd6cd5b8e9c599b8ca02ea24e8cc1529b9->leave($__internal_4499bdfd6ff397095e410db50b105cdd6cd5b8e9c599b8ca02ea24e8cc1529b9_prof);

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
