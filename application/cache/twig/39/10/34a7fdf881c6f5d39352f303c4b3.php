<?php

/* admin.php */
class __TwigTemplate_391034a7fdf881c6f5d39352f303c4b3 extends Twig_Template
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
<div class=\"ui grid container stackable\">
    <div class=\"sixteen wide column\">
        <div class=\"ui bottom attached tab active segment\" data-tab=\"add-news\">
            <div class=\"ui form\">
                <div class=\"field\">
                    <label>Заголовок</label>
                    <input type=\"text\" id=\"news-title\">
                </div>
                <div class=\"field\" id=\"news-field-text\">
                    <label>Описание новости</label>
                    <textarea rows=\"2\" id=\"news-text\"></textarea>
                </div>
                <div class=\"field\">
                    <label>Тип</label>
                    <select id=\"news-type\">
                        <option value=\"Важно\">Важно</option>
                        <option value=\"Обновление\">Обновление</option>
                        <option value=\"Сообщение от администрации\">Сообщение от администрации</option>
                    </select>
                </div>
                <div class=\"field\">
                    <button class=\"ui button\" id=\"news-submit\">
                        Опубликовать
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    \$(document).ready(function () {

        \$(\"#news-submit\").click(function () {
            var title = \$(\"#news-title\").val();
            var text = \$(\"#news-text\").val();
            var type = \$(\"#news-type\").val();

            if(text === \"\" || title === \"\") {

                alert(\"Не все заполнено!\");

            } else {

                
                \$.ajax({
                    url : \"/news/add\",
                    type: \"POST\",
                    dataType: \"text\",
                    data: { text: text, type: type, title: title },
                    success: function (data) {

                        if(data) {

                            window.location.href = \"/news\";

                        } else {

                            alert(\"Ошибка добавления\");
                        }
                    },
                    error: function () {

                        alert(\"Не удалось отправить\" + title);
                    }
                })
            }
        })
    })
</script>

";
        // line 75
        $this->env->loadTemplate("twig/footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "admin.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 75,  21 => 2,  19 => 1,);
    }
}
