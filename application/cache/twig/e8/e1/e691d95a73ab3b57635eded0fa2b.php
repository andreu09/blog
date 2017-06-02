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
    <div class=\"five wide column\">
        <div class=\"ui attached segment\">
            <h4 class=\"ui centered dividing header\">Подтверждение входа</h4>
            <a  onclick=\"\$(this).addClass('loading')\" class=\"ui vk button fluid\" style=\"color:white\" href=\"https://oauth.vk.com/authorize?client_id=5240196&display=page&redirect_uri=http://shmakov-andrey.ru/user/vk_auth&response_type=code&v=5.64\">
                <i class=\"vk icon\"></i>
                Авторизация с помощью VK
            </a>
        </div>
    </div>
</div>

";
        // line 15
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
        return array (  36 => 15,  21 => 2,  19 => 1,);
    }
}
