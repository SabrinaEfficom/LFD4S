<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_200701db03086bf0e36d64333ff74c4e6c66b853b3c233d65c9c9840fcad73b2 extends Twig_Template
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
        $__internal_6c275cdcf2f0c03cdba052a42701cfd52f271de919b5fb2b417b7014e1a3ab40 = $this->env->getExtension("native_profiler");
        $__internal_6c275cdcf2f0c03cdba052a42701cfd52f271de919b5fb2b417b7014e1a3ab40->enter($__internal_6c275cdcf2f0c03cdba052a42701cfd52f271de919b5fb2b417b7014e1a3ab40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6c275cdcf2f0c03cdba052a42701cfd52f271de919b5fb2b417b7014e1a3ab40->leave($__internal_6c275cdcf2f0c03cdba052a42701cfd52f271de919b5fb2b417b7014e1a3ab40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
