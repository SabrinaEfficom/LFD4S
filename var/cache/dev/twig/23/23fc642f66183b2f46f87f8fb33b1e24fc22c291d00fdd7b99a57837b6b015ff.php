<?php

/* @LFD4SUser/Security/login.html.twig */
class __TwigTemplate_3d0faa584610cbaa4b26e38ce8c240c82331ae9e8cd2e8c4e5cf585c286735cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LFD4SPlatformBundle::layout.html.twig", "@LFD4SUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LFD4SPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4eb9445d4e6bfdc6ebf9646956b080ecaf960b7e67e5a100f892a0c1073b75ca = $this->env->getExtension("native_profiler");
        $__internal_4eb9445d4e6bfdc6ebf9646956b080ecaf960b7e67e5a100f892a0c1073b75ca->enter($__internal_4eb9445d4e6bfdc6ebf9646956b080ecaf960b7e67e5a100f892a0c1073b75ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LFD4SUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eb9445d4e6bfdc6ebf9646956b080ecaf960b7e67e5a100f892a0c1073b75ca->leave($__internal_4eb9445d4e6bfdc6ebf9646956b080ecaf960b7e67e5a100f892a0c1073b75ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6243e80b962aacd83912deccb4950de52b6410a7fd2594a6b38c24b50ba097a3 = $this->env->getExtension("native_profiler");
        $__internal_6243e80b962aacd83912deccb4950de52b6410a7fd2594a6b38c24b50ba097a3->enter($__internal_6243e80b962aacd83912deccb4950de52b6410a7fd2594a6b38c24b50ba097a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    ";
        // line 11
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"submit\" value=\"Connexion\" />
    </form>

";
        
        $__internal_6243e80b962aacd83912deccb4950de52b6410a7fd2594a6b38c24b50ba097a3->leave($__internal_6243e80b962aacd83912deccb4950de52b6410a7fd2594a6b38c24b50ba097a3_prof);

    }

    public function getTemplateName()
    {
        return "@LFD4SUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  55 => 11,  52 => 9,  46 => 7,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LFD4SPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*     {% if error %}*/
/*         <div class="alert alert-danger">{{ error.message }}</div>*/
/*     {% endif %}*/
/* */
/*     {# Le formulaire, avec URL de soumission vers la route « login_check » #}*/
/*     <form action="{{ path('login_check') }}" method="post">*/
/*         <label for="username">Login :</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*         <label for="password">Mot de passe :</label>*/
/*         <input type="password" id="password" name="_password" />*/
/*         <br />*/
/*         <input type="submit" value="Connexion" />*/
/*     </form>*/
/* */
/* {% endblock %}*/
