<?php

/* welcome.php */
class __TwigTemplate_e8e1e691d95a73ab3b57635eded0fa2b extends Twig_Template
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
<div class=\"ui two column centered grid stackable\">
    <div class=\"eight wide column\">
        <div class=\"ui icon message\">
            <i class=\"add user icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    Требуется авторизация
                </div>
                <p>
                    Справа вверху нажмите \"Войти\"
                </p>
            </div>
        </div>
    </div>
</div>

";
        // line 19
        $this->env->loadTemplate("twig/footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "welcome.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 19,  21 => 2,  19 => 1,);
    }
}
