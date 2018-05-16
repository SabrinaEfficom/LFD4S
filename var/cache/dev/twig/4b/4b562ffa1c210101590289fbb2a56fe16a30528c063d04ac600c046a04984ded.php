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
        $__internal_fd6dcaccf72e3fa21c9027289c1c6897e44c80ec58c805cb380677e3b70c0d9b = $this->env->getExtension("native_profiler");
        $__internal_fd6dcaccf72e3fa21c9027289c1c6897e44c80ec58c805cb380677e3b70c0d9b->enter($__internal_fd6dcaccf72e3fa21c9027289c1c6897e44c80ec58c805cb380677e3b70c0d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fd6dcaccf72e3fa21c9027289c1c6897e44c80ec58c805cb380677e3b70c0d9b->leave($__internal_fd6dcaccf72e3fa21c9027289c1c6897e44c80ec58c805cb380677e3b70c0d9b_prof);

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
