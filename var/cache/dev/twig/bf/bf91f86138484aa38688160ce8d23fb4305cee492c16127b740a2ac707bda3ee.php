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
        $__internal_0113b2d3ec5217bf090d5c1fe2a14284527d2e191ed6c3ca1b07870acf4ce947 = $this->env->getExtension("native_profiler");
        $__internal_0113b2d3ec5217bf090d5c1fe2a14284527d2e191ed6c3ca1b07870acf4ce947->enter($__internal_0113b2d3ec5217bf090d5c1fe2a14284527d2e191ed6c3ca1b07870acf4ce947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_0113b2d3ec5217bf090d5c1fe2a14284527d2e191ed6c3ca1b07870acf4ce947->leave($__internal_0113b2d3ec5217bf090d5c1fe2a14284527d2e191ed6c3ca1b07870acf4ce947_prof);

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
