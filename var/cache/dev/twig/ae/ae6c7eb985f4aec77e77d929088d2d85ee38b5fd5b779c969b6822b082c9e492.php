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
        $__internal_23e3a685fe8048d3269fa63947486149c985eb75cb154d0bac337db2a4517340 = $this->env->getExtension("native_profiler");
        $__internal_23e3a685fe8048d3269fa63947486149c985eb75cb154d0bac337db2a4517340->enter($__internal_23e3a685fe8048d3269fa63947486149c985eb75cb154d0bac337db2a4517340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_23e3a685fe8048d3269fa63947486149c985eb75cb154d0bac337db2a4517340->leave($__internal_23e3a685fe8048d3269fa63947486149c985eb75cb154d0bac337db2a4517340_prof);

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
