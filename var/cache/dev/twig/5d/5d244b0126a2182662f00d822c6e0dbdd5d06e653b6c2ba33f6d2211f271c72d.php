<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d56be984f0d9cd84c38e21039dde49d0f8acc80aa044d829920a553f3698f775 extends Twig_Template
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
        $__internal_cd962a79bb2067844fdaddc4d84a82d93c38bd7d385a8a12dcb0de94911e6150 = $this->env->getExtension("native_profiler");
        $__internal_cd962a79bb2067844fdaddc4d84a82d93c38bd7d385a8a12dcb0de94911e6150->enter($__internal_cd962a79bb2067844fdaddc4d84a82d93c38bd7d385a8a12dcb0de94911e6150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_cd962a79bb2067844fdaddc4d84a82d93c38bd7d385a8a12dcb0de94911e6150->leave($__internal_cd962a79bb2067844fdaddc4d84a82d93c38bd7d385a8a12dcb0de94911e6150_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
