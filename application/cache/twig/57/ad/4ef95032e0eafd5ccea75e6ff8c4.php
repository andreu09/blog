<?php

/* templates/header.twig */
class __TwigTemplate_57ad4ef95032e0eafd5ccea75e6ff8c4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/uikit.min.css\">
        <link rel=\"shortcut icon\" href=\"/assets/images/favicon.ico\" type=\"image/x-icon\">
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"assets/js/uikit.min.js\"></script>
        <script src=\"assets/js/upload-image.js\"></script>
        <script src=\"https://use.fontawesome.com/891ec24016.js\"></script>
        <title>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
        <style type=\"text/css\"> html { background-color: #edeef0  } </style>
        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"Добавляйте свои фото блоги!\">
        <meta name=\"Keywords\" content=\"Блог, фото, ФотоБлог, Фотографии, Истоории\">
        <meta property=\"og:locale\" content=\"ru_RU\"/>
        <meta property=\"og:type\" content=\"article\"/>
        <meta property=\"og:title\" content=\"ФотоБлог Главная\"/>
        <meta property=\"og:description\" content=\"Добавляйте свои фото блоги!\"/>
        <meta property=\"og:image\" content=\"https://www.webnode.com/blog/wp-content/uploads/2016/10/Blog-intro.jpg\"/>
        <meta property=\"og:site_name\" content=\"ФотоБлог\"/>
    </head>

    <body>

    <nav class=\"uk-navbar-container\" uk-navbar>

        <div class=\"uk-navbar-left\">

            <ul class=\"uk-navbar-nav\">

                <a class=\"uk-navbar-item uk-logo\" href=\"/\">ФотоБлог</a>

                ";
        // line 34
        echo "
                ";
        // line 35
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "uid", array(), "any", true, true)) {
            // line 36
            echo "
                    <li>
                        <a href=\"#\">
                            <img class=\"uk-border-circle\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "photo_50"), "html", null, true);
            echo "\" alt=\"Border circle\"
                                 uk-toggle=\"target: #offcanvas-push\">
                        </a>
                    </li>

                    ";
            // line 45
            echo "
                    ";
            // line 46
            if ((((isset($context["title"]) ? $context["title"] : null) != "Новости") && ((isset($context["title"]) ? $context["title"] : null) != "Админ панель"))) {
                // line 47
                echo "
                        <li uk-toggle=\"target: #publicate\">
                            <a href=\"#\">
                                <i class=\"fa fa-plus fa-2x\" aria-hidden=\"true\"></i>
                            </a>
                        </li>

                    ";
            }
            // line 55
            echo "
                ";
        }
        // line 57
        echo "
                    <li ";
        // line 58
        if (((isset($context["title"]) ? $context["title"] : null) == "Главная")) {
            echo " class=\"uk-active\" ";
        }
        echo " ><a href=\"/\">Публикации</a></li>
                    <li ";
        // line 59
        if (((isset($context["title"]) ? $context["title"] : null) == "Новости")) {
            echo " class=\"uk-active\" ";
        }
        echo " ><a href=\"/news\">Новости</a></li>

                </ul>

            </div>

        <div class=\"uk-navbar-right\">

            <a class=\"uk-link-muted\" href=\"https://vk.com/workout_62\" target=\"_blank\">Шмаков Андрей</a>

            <div class=\"uk-label uk-margin-left uk-margin-right\"> <i class=\"fa fa-heart\" aria-hidden=\"true\"></i>
                BETA
            </div>
        </div>
    </nav>";
    }

    public function getTemplateName()
    {
        return "templates/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 59,  96 => 58,  93 => 57,  89 => 55,  79 => 47,  77 => 46,  74 => 45,  66 => 39,  61 => 36,  59 => 35,  56 => 34,  30 => 10,  39 => 9,  36 => 8,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
