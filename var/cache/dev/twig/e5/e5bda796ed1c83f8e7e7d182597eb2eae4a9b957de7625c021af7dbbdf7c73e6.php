<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_aa784c835421b32ffb6b1c83c60ed881ee3759b8abab729493547f9bf457bc00 extends Twig_Template
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
        $__internal_a2bd4729196c8a5a395a5ca0ff3982340d3c44e83bfc01daaabeaeda69eddbf4 = $this->env->getExtension("native_profiler");
        $__internal_a2bd4729196c8a5a395a5ca0ff3982340d3c44e83bfc01daaabeaeda69eddbf4->enter($__internal_a2bd4729196c8a5a395a5ca0ff3982340d3c44e83bfc01daaabeaeda69eddbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a2bd4729196c8a5a395a5ca0ff3982340d3c44e83bfc01daaabeaeda69eddbf4->leave($__internal_a2bd4729196c8a5a395a5ca0ff3982340d3c44e83bfc01daaabeaeda69eddbf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
