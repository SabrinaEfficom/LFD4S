<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_edce64bcb7064b356b911dd8e0b843c4ad9c5192207cab4ad57c5b76c9cff79f extends Twig_Template
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
        $__internal_9182630dc5cc87b524e5361f6133e436411a9f155977d123fab02d3fd52d0d84 = $this->env->getExtension("native_profiler");
        $__internal_9182630dc5cc87b524e5361f6133e436411a9f155977d123fab02d3fd52d0d84->enter($__internal_9182630dc5cc87b524e5361f6133e436411a9f155977d123fab02d3fd52d0d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9182630dc5cc87b524e5361f6133e436411a9f155977d123fab02d3fd52d0d84->leave($__internal_9182630dc5cc87b524e5361f6133e436411a9f155977d123fab02d3fd52d0d84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
