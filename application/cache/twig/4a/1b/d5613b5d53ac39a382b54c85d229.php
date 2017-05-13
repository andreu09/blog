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
        <link rel=\"stylesheet\" href=\"assets/semantic.min.css\">
        <script src=\"assets/js/jquery-3.2.1.min.js\"></script>
        <script src=\"assets/js/semantic.min.js\"></script>
        <script src=\"assets/components/dropdown.min.js\"></script>

    </head>

    <body>
        <div class=\"ui small menu\">
            <a href=\"/\" class=\"  ";
        // line 15
        if ((((isset($context["title"]) ? $context["title"] : null) == "Главная") || ((isset($context["title"]) ? $context["title"] : null) == "Подтверждение входа"))) {
            echo " active ";
        }
        echo " item\">
                <i class=\"big camera retro icon\"></i>
            </a>
            <a href=\"/news\" class=\" ";
        // line 18
        if (((isset($context["title"]) ? $context["title"] : null) == "Новости")) {
            echo " active ";
        }
        echo " item\">
                Новости
            </a>
            <div class=\"right menu\">
                ";
        // line 22
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "uid", array(), "any", true, true)) {
            // line 23
            echo "                <div class=\"ui dropdown item\">
                    <img class=\"ui avatar image\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "photo_50"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name"), "html", null, true);
            echo " <i class=\"dropdown icon\"></i>
                    <div class=\"menu\">
                        ";
            // line 26
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "status")) {
                // line 27
                echo "                            <a href=\"/admin\" class=\"item\">Админ панель</a>
                        ";
            }
            // line 29
            echo "                        <a href=\"user/out\" class=\"item\">Выйти</a>
                    </div>
                </div>
                ";
        } else {
            // line 33
            echo "                <div class=\"item\">
                    <a onclick=\"\$(this).addClass('loading')\" class=\"ui vk button\" style=\"color:white\" href=\"https://oauth.vk.com/authorize?client_id=5240196&display=page&redirect_uri=http://shmakov-andrey.ru/user/vk_auth&response_type=code&v=5.64\">
                        <i class=\"vk icon\"></i>
                        Войти
                    </a>
                </div>
                ";
        }
        // line 40
        echo "            </div>
        </div>";
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
        return array (  90 => 40,  81 => 33,  75 => 29,  71 => 27,  69 => 26,  60 => 24,  57 => 23,  55 => 22,  46 => 18,  38 => 15,  25 => 5,  19 => 1,);
    }
}
