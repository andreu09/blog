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
        $this->env->loadTemplate("templates/header.twig")->display($context);
        // line 2
        echo "
<div class=\"ui four column centered grid stackable\" style=\"margin-top:20px\">
\t<div class=\"ui ordered steps\">
\t\t<div class=\"step\">
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"title\">Удобная регистрация</div>
\t\t\t\t<div class=\"description\">С помощью Вконтакте, регистрация занимает пару секунд!</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"step\">
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"title\">Красивый дизайн</div>
\t\t\t\t<div class=\"description\">Приятное оформление постов пользователей</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"step\">
\t\t\t<div class=\"content\">
\t\t\t<div class=\"title\">Вперед!</div>
\t\t\t<div class=\"description\">Опубликуйте свою первую историю!</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
 

";
        // line 27
        $this->env->loadTemplate("templates/footer.twig")->display($context);
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
        return array (  48 => 27,  21 => 2,  19 => 1,);
    }
}
