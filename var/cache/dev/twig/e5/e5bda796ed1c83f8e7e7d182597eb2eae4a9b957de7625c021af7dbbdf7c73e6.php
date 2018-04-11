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
        $__internal_209abd6227b9c3b2ff33f27672b3abe1c4b19c65f975a84ed4e85f800788188e = $this->env->getExtension("native_profiler");
        $__internal_209abd6227b9c3b2ff33f27672b3abe1c4b19c65f975a84ed4e85f800788188e->enter($__internal_209abd6227b9c3b2ff33f27672b3abe1c4b19c65f975a84ed4e85f800788188e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_209abd6227b9c3b2ff33f27672b3abe1c4b19c65f975a84ed4e85f800788188e->leave($__internal_209abd6227b9c3b2ff33f27672b3abe1c4b19c65f975a84ed4e85f800788188e_prof);

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
