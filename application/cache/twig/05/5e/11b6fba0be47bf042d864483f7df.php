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
        $this->env->loadTemplate("twig/header.twig")->display($context);
        // line 2
        echo "
";
        // line 3
        $this->env->loadTemplate("twig/footer.twig")->display($context);
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
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
