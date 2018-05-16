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
        $__internal_438bff48ae1818403a6d66147c67ffad8c738766d5a4d8a30e1c5cd750ba74e7 = $this->env->getExtension("native_profiler");
        $__internal_438bff48ae1818403a6d66147c67ffad8c738766d5a4d8a30e1c5cd750ba74e7->enter($__internal_438bff48ae1818403a6d66147c67ffad8c738766d5a4d8a30e1c5cd750ba74e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_438bff48ae1818403a6d66147c67ffad8c738766d5a4d8a30e1c5cd750ba74e7->leave($__internal_438bff48ae1818403a6d66147c67ffad8c738766d5a4d8a30e1c5cd750ba74e7_prof);

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
