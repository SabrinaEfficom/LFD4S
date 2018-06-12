<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_435e5e141ef8c75a0d609b9b6d56b0d58a2ccefff2cfdcc99cdda257b6e9a09f extends Twig_Template
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
        $__internal_9ab1eb3a49181c4899b910313d51f4c4cd1074ff7846f2c53c97529a426468d5 = $this->env->getExtension("native_profiler");
        $__internal_9ab1eb3a49181c4899b910313d51f4c4cd1074ff7846f2c53c97529a426468d5->enter($__internal_9ab1eb3a49181c4899b910313d51f4c4cd1074ff7846f2c53c97529a426468d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9ab1eb3a49181c4899b910313d51f4c4cd1074ff7846f2c53c97529a426468d5->leave($__internal_9ab1eb3a49181c4899b910313d51f4c4cd1074ff7846f2c53c97529a426468d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
