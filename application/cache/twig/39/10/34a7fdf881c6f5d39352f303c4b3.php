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
    <div class=\"five wide column \">
        <div class=\"ui vertical menu fluid\">
            <a class=\"item\" data-tab=\"add-news\">
                <i class=\"large browser icon\"></i> Создать новость
            </a>
            <div class=\"ui dropdown item\">
                Пользователи
                <i class=\"dropdown icon\"></i>
                <div class=\"menu\">
                    <a class=\"item\" data-tab=\"users-ban\">  <i class=\"large ban icon\"></i> Заблокированные</a>
                    <a class=\"item\" onclick=\"\$('#admin-users').modal('show');\">  <i class=\"large check circle icon\"></i> Администраторы</a>

                </div>
            </div>
        </div>
    </div>
    <div class=\"eleven wide column\">
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
        <div class=\"ui top attached tab segment\" data-tab=\"users-ban\">
            баны
        </div>

        <div class=\"ui fullscreen modal\" id=\"admin-users\">
            <i class=\"close icon\"></i>
            <div class=\"header\">
                Администраторы:
            </div>
            <div class=\"content\">
                <div class=\"ui four column grid\">
                    <div class=\"row\">
                        ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "count") - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 59
            echo "                        <div class=\"column\">
                            <div class=\"ui fluid  card\">
                                <div class=\"image\">
                                    <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "photo_200"), "html", null, true);
            echo "\">
                                </div>
                                <div class=\"content\">
                                    <a class=\"header\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "last_name"), "html", null, true);
            echo "</a>
                                </div>
                                <div class=\"extra content\">
                                    <div class=\"ui two buttons\">
                                        <a target=\"_blank\" href=\"/admin/action/delete/";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "uid"), "html", null, true);
            echo "\">
                                            <div class=\"ui basic yellow button\">
                                                Снять с должности
                                            </div>
                                        </a>>
                                        <div class=\"ui basic red button\">Заблокировать доступ</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 80
        echo "                    </div>
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
        // line 129
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
        return array (  171 => 129,  120 => 80,  103 => 69,  94 => 65,  88 => 62,  83 => 59,  79 => 58,  21 => 2,  19 => 1,);
    }
}
