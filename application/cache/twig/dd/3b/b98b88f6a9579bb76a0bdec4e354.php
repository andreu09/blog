<?php

/* welcome_message.php */
class __TwigTemplate_dd3bb98b88f6a9579bb76a0bdec4e354 extends Twig_Template
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
<div class=\"uk-flex uk-flex-center uk-margin-top\">
    <div class=\"uk-card uk-card-default uk-card-body uk-box-shadow-small uk-width-1-4\">
        <h3 class=\"uk-card-title uk-text-center\">Авторизация</h3>
        <a href=\"https://oauth.vk.com/authorize?client_id=5240196&display=popup&redirect_uri=http://blog.loc/user/authorization&scope=friends&response_type=code&v=5.63\">
            <button class=\"uk-button uk-button-primary uk-button-small\">Войти с помощью Вконтакте</button>
        </a>
    </div>
</div>

";
        // line 12
        $this->env->loadTemplate("templates/footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "welcome_message.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  21 => 2,  19 => 1,);
    }
}
