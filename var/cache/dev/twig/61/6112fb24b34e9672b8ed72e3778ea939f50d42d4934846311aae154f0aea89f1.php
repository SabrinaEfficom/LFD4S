<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_ee47bfa55fa38dbd779aae1c342705da2d7c92736fbccf83fed722c2024c57cd extends Twig_Template
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
        $__internal_f714634f604ac7674e402c8933ed19988fb02a5226f0aaa66aace8f656225416 = $this->env->getExtension("native_profiler");
        $__internal_f714634f604ac7674e402c8933ed19988fb02a5226f0aaa66aace8f656225416->enter($__internal_f714634f604ac7674e402c8933ed19988fb02a5226f0aaa66aace8f656225416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f714634f604ac7674e402c8933ed19988fb02a5226f0aaa66aace8f656225416->leave($__internal_f714634f604ac7674e402c8933ed19988fb02a5226f0aaa66aace8f656225416_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'reset')) ?>*/
/* */
