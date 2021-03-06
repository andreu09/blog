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
        <meta charset=\"UTF-8\">
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
        // line 21
        if ((((isset($context["title"]) ? $context["title"] : null) == "Главная") || ((isset($context["title"]) ? $context["title"] : null) == "Подтверждение входа"))) {
            echo " active ";
        }
        echo " item\">
                <i class=\"big camera retro icon\"></i>
            </a>

            <a href=\"/news\" class=\" ";
        // line 25
        if (((isset($context["title"]) ? $context["title"] : null) == "Новости")) {
            echo " active ";
        }
        echo " item\">
                Новости
            </a>

            <div class=\"right menu\">

                ";
        // line 31
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "uid", array(), "any", true, true)) {
            // line 32
            echo "
                <div class=\"ui dropdown item\">
                    <img class=\"ui avatar image\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "photo_50"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name"), "html", null, true);
            echo " <i class=\"dropdown icon\"></i>
                    <div class=\"menu\">
                        ";
            // line 36
            if (((isset($context["title"]) ? $context["title"] : null) != "Мой профиль")) {
                // line 37
                echo "                            <a href=\"user/profile\" class=\"item\">Мой профиль</a>
                        ";
            }
            // line 39
            echo "
                        ";
            // line 40
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "status")) {
                // line 41
                echo "                            <a href=\"/admin\" class=\"item\">Админ панель</a>
                        ";
            }
            // line 43
            echo "                        <a href=\"user/out\" class=\"item\">Выйти</a>
                    </div>
                </div>

                ";
        }
        // line 48
        echo "
            </div>
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
        return array (  101 => 48,  94 => 43,  90 => 41,  88 => 40,  85 => 39,  81 => 37,  70 => 34,  66 => 32,  64 => 31,  53 => 25,  44 => 21,  25 => 5,  79 => 36,  77 => 48,  34 => 10,  28 => 7,  21 => 2,  19 => 1,);
    }
}
