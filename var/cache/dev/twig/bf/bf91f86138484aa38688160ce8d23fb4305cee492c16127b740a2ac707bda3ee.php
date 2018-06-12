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
        $__internal_1afb55f75a90038b29d4665f6506e25f971d502d636d3f65b901dfbe8e6d19dc = $this->env->getExtension("native_profiler");
        $__internal_1afb55f75a90038b29d4665f6506e25f971d502d636d3f65b901dfbe8e6d19dc->enter($__internal_1afb55f75a90038b29d4665f6506e25f971d502d636d3f65b901dfbe8e6d19dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_1afb55f75a90038b29d4665f6506e25f971d502d636d3f65b901dfbe8e6d19dc->leave($__internal_1afb55f75a90038b29d4665f6506e25f971d502d636d3f65b901dfbe8e6d19dc_prof);

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
