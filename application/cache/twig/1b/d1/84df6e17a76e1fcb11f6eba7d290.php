<?php

/* templates/info_user.twig */
class __TwigTemplate_1bd184df6e17a76e1fcb11f6eba7d290 extends Twig_Template
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
        echo "<div id=\"offcanvas-push\" uk-offcanvas=\"mode: push; overlay: false;\">

    <div class=\"uk-offcanvas-bar\">

        <button class=\"uk-offcanvas-close\" type=\"button\" uk-close></button>

        <p class=\"uk-text-center\">

            <img class=\"uk-border-circle\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "photo_200"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name"), "html", null, true);
        echo "\">

            <hr>

        <p>

            <i class=\"fa fa-user-o fa-lg\" aria-hidden=\"true\">
                ";
        // line 17
        echo "            </i>

            <text class=\"uk-text-bold uk-text-uppercase uk-margin-left\">
                ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name"), "html", null, true);
        echo "
            </text>

        <hr>

        ";
        // line 25
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "status")) {
            // line 26
            echo "
            <a href=\"/admin\">

                <button class=\"uk-button uk-button-danger uk-width-1-1 uk-margin-small-bottom\">
                   Админ панель
                </button>

            </a>

        ";
        }
        // line 36
        echo "
        <a href=\"user/out\">

            <button class=\"uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom\">
                Покинуть акканут
            </button>

        </a>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "templates/info_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 36,  60 => 26,  58 => 25,  48 => 20,  43 => 17,  102 => 59,  96 => 58,  93 => 57,  89 => 55,  79 => 47,  77 => 46,  74 => 45,  66 => 39,  61 => 36,  59 => 35,  56 => 34,  30 => 11,  39 => 19,  36 => 8,  34 => 7,  31 => 6,  29 => 9,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
