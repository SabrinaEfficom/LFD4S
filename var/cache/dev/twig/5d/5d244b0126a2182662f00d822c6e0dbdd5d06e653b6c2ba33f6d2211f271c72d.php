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
        $__internal_e2403cfdc9593e52ced4e31108c09b360c113ef2d78c14008ce3e1f457e316a0 = $this->env->getExtension("native_profiler");
        $__internal_e2403cfdc9593e52ced4e31108c09b360c113ef2d78c14008ce3e1f457e316a0->enter($__internal_e2403cfdc9593e52ced4e31108c09b360c113ef2d78c14008ce3e1f457e316a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_e2403cfdc9593e52ced4e31108c09b360c113ef2d78c14008ce3e1f457e316a0->leave($__internal_e2403cfdc9593e52ced4e31108c09b360c113ef2d78c14008ce3e1f457e316a0_prof);

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
