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
        $__internal_45d4580f0fed07c6bd82c7a524913e77ad7105008ca77ae32d5bbd8f1bc9b644 = $this->env->getExtension("native_profiler");
        $__internal_45d4580f0fed07c6bd82c7a524913e77ad7105008ca77ae32d5bbd8f1bc9b644->enter($__internal_45d4580f0fed07c6bd82c7a524913e77ad7105008ca77ae32d5bbd8f1bc9b644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_45d4580f0fed07c6bd82c7a524913e77ad7105008ca77ae32d5bbd8f1bc9b644->leave($__internal_45d4580f0fed07c6bd82c7a524913e77ad7105008ca77ae32d5bbd8f1bc9b644_prof);

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
