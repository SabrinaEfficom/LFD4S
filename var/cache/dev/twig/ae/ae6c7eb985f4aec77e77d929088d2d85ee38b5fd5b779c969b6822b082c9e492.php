<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_5ed1d08d0eddf9241b6fae469d5cfaa9f5611440687b5fbb3277de33e285f73e extends Twig_Template
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
        $__internal_06d070916aa98c058f53212ce41c6d6c30da90ae100095aa86964b3e3944b620 = $this->env->getExtension("native_profiler");
        $__internal_06d070916aa98c058f53212ce41c6d6c30da90ae100095aa86964b3e3944b620->enter($__internal_06d070916aa98c058f53212ce41c6d6c30da90ae100095aa86964b3e3944b620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_06d070916aa98c058f53212ce41c6d6c30da90ae100095aa86964b3e3944b620->leave($__internal_06d070916aa98c058f53212ce41c6d6c30da90ae100095aa86964b3e3944b620_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
