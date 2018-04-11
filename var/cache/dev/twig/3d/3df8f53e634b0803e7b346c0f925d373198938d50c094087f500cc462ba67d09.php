<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c0b2c8b58dfa9b25ec32507b1a0842155d62845fd07e9e411d9965cf6148eba7 extends Twig_Template
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
        $__internal_e0ce5a8ab6ddd8f8a3c00622e8c489a174561f81ae885658b63f9b7bea89f9df = $this->env->getExtension("native_profiler");
        $__internal_e0ce5a8ab6ddd8f8a3c00622e8c489a174561f81ae885658b63f9b7bea89f9df->enter($__internal_e0ce5a8ab6ddd8f8a3c00622e8c489a174561f81ae885658b63f9b7bea89f9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e0ce5a8ab6ddd8f8a3c00622e8c489a174561f81ae885658b63f9b7bea89f9df->leave($__internal_e0ce5a8ab6ddd8f8a3c00622e8c489a174561f81ae885658b63f9b7bea89f9df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
