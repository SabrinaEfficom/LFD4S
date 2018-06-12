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
        $__internal_6d92e40d23f13a7256ffd13a41b68dd5cda823673fd9e56ca09029647417d76a = $this->env->getExtension("native_profiler");
        $__internal_6d92e40d23f13a7256ffd13a41b68dd5cda823673fd9e56ca09029647417d76a->enter($__internal_6d92e40d23f13a7256ffd13a41b68dd5cda823673fd9e56ca09029647417d76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6d92e40d23f13a7256ffd13a41b68dd5cda823673fd9e56ca09029647417d76a->leave($__internal_6d92e40d23f13a7256ffd13a41b68dd5cda823673fd9e56ca09029647417d76a_prof);

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
