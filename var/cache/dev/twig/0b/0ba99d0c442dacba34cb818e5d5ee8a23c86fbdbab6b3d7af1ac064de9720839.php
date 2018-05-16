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
        $__internal_3e18d22e925543e8b9ca8a4acbfd0fbe345d14b51a66f97fe5cb26f4e70b0b92 = $this->env->getExtension("native_profiler");
        $__internal_3e18d22e925543e8b9ca8a4acbfd0fbe345d14b51a66f97fe5cb26f4e70b0b92->enter($__internal_3e18d22e925543e8b9ca8a4acbfd0fbe345d14b51a66f97fe5cb26f4e70b0b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3e18d22e925543e8b9ca8a4acbfd0fbe345d14b51a66f97fe5cb26f4e70b0b92->leave($__internal_3e18d22e925543e8b9ca8a4acbfd0fbe345d14b51a66f97fe5cb26f4e70b0b92_prof);

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
