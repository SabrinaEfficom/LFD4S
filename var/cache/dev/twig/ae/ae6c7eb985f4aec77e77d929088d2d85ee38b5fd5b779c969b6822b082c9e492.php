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
        $__internal_535b20865b046d3e3e59337e3d1a0db71e345e194baeff6c6dabab2f7f9be6ef = $this->env->getExtension("native_profiler");
        $__internal_535b20865b046d3e3e59337e3d1a0db71e345e194baeff6c6dabab2f7f9be6ef->enter($__internal_535b20865b046d3e3e59337e3d1a0db71e345e194baeff6c6dabab2f7f9be6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_535b20865b046d3e3e59337e3d1a0db71e345e194baeff6c6dabab2f7f9be6ef->leave($__internal_535b20865b046d3e3e59337e3d1a0db71e345e194baeff6c6dabab2f7f9be6ef_prof);

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
