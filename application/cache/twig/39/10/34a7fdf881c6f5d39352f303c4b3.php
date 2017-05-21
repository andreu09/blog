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
                    <a class=\"item\" onclick=\"\$('#block-users').modal('show');\">  <i class=\"large ban icon\"></i> Заблокированные</a>
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

        <!-- Администраторы -->
        <div class=\"ui fullscreen modal\" id=\"admin-users\">
            <i class=\"close icon\"></i>
            <div class=\"header\">
                Администраторы:
            </div>
            <div class=\"content\">

                        ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "count") - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 56
            echo "                        <div class=\"column\">
                            <a class=\"ui yellow image label\">
                                <img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "photo_200"), "html", null, true);
            echo "\">
                                ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "last_name"), "html", null, true);
            echo "
                                <div class=\"detail\">
                                    <a target=\"_blank\" href=\"/admin/action/delete/";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "uid"), "html", null, true);
            echo "\">
                                        Снять с должности
                                    </a>
                                </div>
                                <div class=\"detail\">Co-worker</div>
                            </a>
                            <div class=\"ui fluid  card\">
                                <div class=\"image\">
                                    <img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "photo_200"), "html", null, true);
            echo "\">
                                </div>
                                <div class=\"content\">
                                    <a class=\"header\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "last_name"), "html", null, true);
            echo "</a>
                                </div>
                                <div class=\"extra content\">
                                    <div class=\"ui two buttons\">
                                        <a target=\"_blank\" href=\"/admin/action/delete/";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "uid"), "html", null, true);
            echo "\">
                                            <div class=\"ui basic yellow button\">
                                                Снять с должности
                                            </div>
                                        </a>
                                        <a target=\"_blank\" href=\"/admin/action/block[action=add]/";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admins"]) ? $context["admins"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "uid"), "html", null, true);
            echo "\">
                                            <div class=\"ui basic red button\">
                                                Заблокировать доступ
                                            </div>
                                        </a>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 89
        echo "                    </div>
                </div>
            </div>
        </div>

        <!-- Заблокированные -->
        <div class=\"ui fullscreen modal\" id=\"block-users\">
            <i class=\"close icon\"></i>
            <div class=\"header\">
                Заблокированные:
            </div>
            <div class=\"content\">
                <div class=\"ui four column grid\">
                    <div class=\"row\">
                        ";
        // line 103
        if (($this->getAttribute((isset($context["block_users"]) ? $context["block_users"] : null), "count") == 0)) {
            // line 104
            echo "
                        Заблокированных пользователей не найдно.

                        ";
        } else {
            // line 108
            echo "
                        ";
            // line 109
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute((isset($context["block_users"]) ? $context["block_users"] : null), "count") - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 110
                echo "                        <div class=\"column\">
                            <div class=\"ui fluid  card\">
                                <div class=\"image\">

                                    <img src=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block_users"]) ? $context["block_users"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "photo_200"), "html", null, true);
                echo "\">
                                </div>
                                <div class=\"content\">
                                    <a class=\"header\">";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block_users"]) ? $context["block_users"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "first_name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block_users"]) ? $context["block_users"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "last_name"), "html", null, true);
                echo "</a>
                                </div>
                                <div class=\"extra content\">
                                    <a target=\"_blank\" href=\"/admin/action/block[action=delete]/";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block_users"]) ? $context["block_users"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "uid"), "html", null, true);
                echo "\">
                                        <div class=\"fluid ui button basic green button\">
                                            Снять блокировку
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 129
            echo "
                        ";
        }
        // line 131
        echo "
                    </div>
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
        // line 182
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
        return array (  266 => 182,  213 => 131,  209 => 129,  194 => 120,  186 => 117,  180 => 114,  174 => 110,  170 => 109,  167 => 108,  161 => 104,  159 => 103,  143 => 89,  129 => 81,  121 => 76,  112 => 72,  106 => 69,  95 => 61,  88 => 59,  84 => 58,  80 => 56,  76 => 55,  21 => 2,  19 => 1,);
    }
}
