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
        $this->env->loadTemplate("templates/header.twig")->display($context);
        // line 2
        echo "

<div class=\"ui four column centered grid stackable\">
\t<div class=\"eight wide column\">
\t\t<div class=\"ui form\">
\t\t\t<div class=\"field\">
\t\t\t\t<label>Добавление новости</label>
\t\t\t\t<textarea id=\"news_text\" placeholder=\"Введите текст записи\"></textarea>
\t\t\t</div>
\t\t</div>
\t\t<button id=\"news_submit\" style=\"margin-top:20px\" class=\"ui primary button\">Отправить </button>\t
\t</div>
</div>

<script>
    \$(document).ready(function () {

        \$(\"#news_submit\").click(function () {

            var news_text = \$(\"#news_text\").val();

            if(news_text === \"\") {

               alert(\"Введите текст новости!\");

            } else {

                \$.ajax({

                    dataType : \"text\",
                    type : \"POST\",
                    url : \"/news/add/\",
                    data : { text: news_text },
                    success: function(news){

                      if(news) {

                           window.location.href = \"/news\"

                      } else {

                          alert(\"Ошибка публикации...\");
                      }
                    }

                });
            }
        });
    })
</script>

";
        // line 53
        $this->env->loadTemplate("templates/footer.twig")->display($context);
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
        return array (  74 => 53,  21 => 2,  19 => 1,);
    }
}
