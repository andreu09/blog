<?php

/* templates/add_post.twig */
class __TwigTemplate_861a19f3e221c85c3332788bb7f734ee extends Twig_Template
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
        echo "<style>
    textarea { resize: none }
</style>

<div id=\"publicate\" uk-modal>

    <div class=\"uk-modal-dialog uk-modal-body\" uk-overflow-auto>

        <button class=\"uk-modal-close-default\" type=\"button\" uk-close>
            ";
        // line 11
        echo "        </button>

        <h2 class=\"uk-modal-title uk-text-center uk-text-bold\" id=\"stage_1\">Загрузите изображение</h2>

        <div class=\"test-upload uk-placeholder uk-text-center\" id=\"publicate_upload\">

            <span uk-icon=\"icon: cloud-upload\">
                ";
        // line 19
        echo "            </span>

            <span class=\"uk-text-middle\">
                Перетащите сюда фотографию или
            </span>

            <div uk-form-custom>

                <input accept=\"image/*\" id=\"pub_image_input\" type=\"file\" multiple>

                <span class=\"uk-link\">
                    нажмите сюда
                </span>

        </div>

    </div>

    <div class=\"uk-text-center\" style=\"display: none;\" id=\"publicate_div_image\">

        <img id=\"publicate_image\" class=\"uk-border-rounded\" src=\"\" width=\"200\" height=\"200\">

    </div>

    <h2 class=\"uk-text-center uk-text-bold\" id=\"stage_2\">Введите описание</h2>

    <form enctype=\"multipart/form-data\" class=\"feedback-form-1\">

        <div class=\"uk-margin-top uk-text-center\">

            <textarea id=\"pub_text\" class=\"uk-textarea\" placeholder=\"Введите описание фотографии (до 45 символов)\"></textarea>

        </div>

    </form>

    <div class=\"uk-text-center uk-margin\">
        <button id=\"pub_submit\" class=\"uk-button uk-button-danger\">Опубликовать</button>
    </div>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "templates/add_post.twig";
    }

    public function getDebugInfo()
    {
        return array (  102 => 59,  96 => 58,  93 => 57,  89 => 55,  79 => 47,  77 => 46,  74 => 45,  66 => 39,  61 => 36,  59 => 35,  56 => 34,  30 => 11,  39 => 19,  36 => 8,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
