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
        $__internal_180a202960020815846fdcf2f9ba1286eb9caa40c526960840c910d62a85c6b6 = $this->env->getExtension("native_profiler");
        $__internal_180a202960020815846fdcf2f9ba1286eb9caa40c526960840c910d62a85c6b6->enter($__internal_180a202960020815846fdcf2f9ba1286eb9caa40c526960840c910d62a85c6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_180a202960020815846fdcf2f9ba1286eb9caa40c526960840c910d62a85c6b6->leave($__internal_180a202960020815846fdcf2f9ba1286eb9caa40c526960840c910d62a85c6b6_prof);

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
