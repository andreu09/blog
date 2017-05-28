<?php

/* twig/header.twig */
class __TwigTemplate_4a1bd5613b5d53ac39a382b54c85d229 extends Twig_Template
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
        echo "<html lang=\"ru\">
    <head>

        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
        <link rel=\"stylesheet\" href=\"http://shmakov-andrey.ru/assets/semantic.min.css\">
        <script src=\"http://shmakov-andrey.ru/assets/js/jquery-3.2.1.min.js\"></script>
        <script src=\"http://shmakov-andrey.ru/assets/js/semantic.min.js\"></script>
        <script src=\"http://shmakov-andrey.ru/assets/components/dropdown.min.js\"></script>
<style>
    body {
        background-color: #edeef0;
    }
</style>
    </head>

    <body>
        <div class=\"ui small menu\">
            <a href=\"/\" class=\"  ";
        // line 19
        if ((((isset($context["title"]) ? $context["title"] : null) == "Главная") || ((isset($context["title"]) ? $context["title"] : null) == "Подтверждение входа"))) {
            echo " active ";
        }
        echo " item\">
                <i class=\"big camera retro icon\"></i>
            </a>
            <a href=\"/news\" class=\" ";
        // line 22
        if (((isset($context["title"]) ? $context["title"] : null) == "Новости")) {
            echo " active ";
        }
        echo " item\">
                Новости
            </a>
            <div class=\"right menu\">
                ";
        // line 26
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "uid", array(), "any", true, true)) {
            // line 27
            echo "                <div class=\"ui dropdown item\">
                    <img class=\"ui avatar image\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "photo_50"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name"), "html", null, true);
            echo " <i class=\"dropdown icon\"></i>
                    <div class=\"menu\">
                        ";
            // line 30
            if (((isset($context["title"]) ? $context["title"] : null) == "Главная")) {
                // line 31
                echo "                            <a class=\"item\" onclick=\"\$('#modal-post').modal('show');\">Создать запись</a>
                        ";
            }
            // line 33
            echo "
                        ";
            // line 34
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "status")) {
                // line 35
                echo "                            <a href=\"/admin\" class=\"item\">Админ панель</a>
                        ";
            }
            // line 37
            echo "                        <a href=\"user/out\" class=\"item\">Выйти</a>
                    </div>
                </div>
                ";
        } else {
            // line 41
            echo "                <div class=\"item\">
                    <a onclick=\"\$(this).addClass('loading')\" class=\"ui vk button\" style=\"color:white\" href=\"https://oauth.vk.com/authorize?client_id=5240196&display=page&redirect_uri=http://shmakov-andrey.ru/user/vk_auth&response_type=code&v=5.64\">
                        <i class=\"vk icon\"></i>
                        Войти
                    </a>
                </div>
                ";
        }
        // line 48
        echo "            </div>
        </div>

    ";
        // line 51
        if (((isset($context["title"]) ? $context["title"] : null) == "Главная")) {
            // line 52
            echo "        ";
            $this->env->loadTemplate("twig/modal_post.twig")->display($context);
            // line 53
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "twig/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 53,  110 => 52,  108 => 51,  103 => 48,  94 => 41,  88 => 37,  84 => 35,  82 => 34,  79 => 33,  75 => 31,  73 => 30,  61 => 27,  59 => 26,  50 => 22,  42 => 19,  25 => 5,  213 => 119,  154 => 62,  149 => 59,  136 => 54,  119 => 53,  114 => 52,  112 => 51,  105 => 49,  97 => 43,  93 => 41,  87 => 39,  85 => 38,  76 => 34,  68 => 31,  64 => 28,  60 => 29,  56 => 27,  52 => 26,  48 => 24,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
