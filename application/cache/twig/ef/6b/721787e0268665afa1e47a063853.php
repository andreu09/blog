<?php

/* news.php */
class __TwigTemplate_ef6b721787e0268665afa1e47a063853 extends Twig_Template
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
        echo "Новости
";
        // line 3
        $this->env->loadTemplate("twig/footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "news.php";
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
