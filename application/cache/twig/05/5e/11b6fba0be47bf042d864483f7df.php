<?php

/* feed.php */
class __TwigTemplate_055e11b6fba0be47bf042d864483f7df extends Twig_Template
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
        // line 1
        $this->env->loadTemplate("templates/header.twig")->display($context);
        // line 2
        echo "
";
        // line 3
        $this->env->loadTemplate("templates/add_post.twig")->display($context);
        // line 4
        echo "
";
        // line 5
        $this->env->loadTemplate("templates/info_user.twig")->display($context);
        // line 6
        echo "
";
        // line 7
        $this->env->loadTemplate("templates/posts.twig")->display($context);
        // line 8
        echo "
";
        // line 9
        $this->env->loadTemplate("templates/footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "feed.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  36 => 8,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
