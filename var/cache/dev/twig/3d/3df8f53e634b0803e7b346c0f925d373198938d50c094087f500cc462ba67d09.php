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
        $__internal_8e801fd485d6c6ac0b59c52724c4da55ab6525b05f008ea40713617edbd5917e = $this->env->getExtension("native_profiler");
        $__internal_8e801fd485d6c6ac0b59c52724c4da55ab6525b05f008ea40713617edbd5917e->enter($__internal_8e801fd485d6c6ac0b59c52724c4da55ab6525b05f008ea40713617edbd5917e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8e801fd485d6c6ac0b59c52724c4da55ab6525b05f008ea40713617edbd5917e->leave($__internal_8e801fd485d6c6ac0b59c52724c4da55ab6525b05f008ea40713617edbd5917e_prof);

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
