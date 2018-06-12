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
        $__internal_bab882ebe4a74770597b50d4709c69b9cb4682c760bfa9df7c53c06e41bd311c = $this->env->getExtension("native_profiler");
        $__internal_bab882ebe4a74770597b50d4709c69b9cb4682c760bfa9df7c53c06e41bd311c->enter($__internal_bab882ebe4a74770597b50d4709c69b9cb4682c760bfa9df7c53c06e41bd311c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_bab882ebe4a74770597b50d4709c69b9cb4682c760bfa9df7c53c06e41bd311c->leave($__internal_bab882ebe4a74770597b50d4709c69b9cb4682c760bfa9df7c53c06e41bd311c_prof);

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
