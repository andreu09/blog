<?php

/* feed.php */
class __TwigTemplate_055e11b6fba0be47bf042d864483f7df extends Twig_Template
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
";
        // line 3
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "count") == 0)) {
            // line 4
            echo "<div class=\"ui two column centered grid stackable\">
    <div class=\"eight wide column\">
        <div class=\"ui icon message\">
            <i class=\"photo icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    Станьте первым, кто опубликует первую запись!
                </div>
                <p>
                    <button class=\"teal ui button\" onclick=\"\$('#modal-post').modal('show')\";>
                        <i class=\"add circle icon\"></i>
                        Создать запись
                    </button>
                </p>
            </div>
        </div>
    </div>
</div>

";
        } else {
            // line 24
            echo "<div class=\"ui two column centered grid stackable\">
    <div class=\"eight wide column\">
        ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "current_count") - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 27
                echo "        <div class=\"ui card fluid\">
            <div class=\"content\">
                <div class=\"right floated meta\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "time"), "html", null, true);
                echo "</div>
                <img class=\"ui avatar image\" src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "photo_50"), "html", null, true);
                echo "\">
                ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "first_name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "last_name"), "html", null, true);
                echo "
            </div>
            <div class=\"image\">
                <img src=\"";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "assets/images/posts/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "image"), "html", null, true);
                echo "\" style=\"max-height: 450px; background-size: cover;\">
                    <div class=\"ui dimmer\">
                        <div class=\"content\">
                            <div class=\"center\">
                                ";
                // line 38
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "uid") == $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "uid"))) {
                    // line 39
                    echo "                                <div onclick=\"delete_post( ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                    echo " )\" class=\"ui red small button\"><i class=\"remove icon\"></i>Удалить запись</div>
                                ";
                } else {
                    // line 41
                    echo "                                <div class=\"ui warning small button\"><i class=\"warning sign icon\"></i>Пожаловаться</div>
                                ";
                }
                // line 43
                echo "                            </div>
                        </div>
                    </div>
            </div>
            <div class=\"content\">
                <span class=\"left floated\">
                    <img src=\"";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "assets/images/smiles/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "smile"), "html", null, true);
                echo ".png\">
                </span>
                ";
                // line 51
                $context["uid_likes"] = twig_split_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "uid_likes"), ",");
                // line 52
                echo "                <span class=\"right floated\" onclick=\"like( ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                echo " )\">
                   <i id=\"icon_";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                echo "\" class=\"heart ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "likes")));
                foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                    echo " ";
                    if (($this->getAttribute((isset($context["uid_likes"]) ? $context["uid_likes"] : null), (isset($context["g"]) ? $context["g"] : null), array(), "array") == $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "uid"))) {
                        echo " red ";
                    }
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo " like icon\"></i>
                    <span id=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "likes"), "html", null, true);
                echo "</span>
                </span>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 59
            echo "    </div>
</div>
";
        }
        // line 62
        echo "
<script>

    \$('.image').dimmer({on: 'hover'});

    function delete_post(post_id) {

        \$.ajax({

            url: \"/post/delete\",
            data: { post_id : post_id },
            dataType: \"json\",
            type: \"POST\",
            success: function (data) {

                if(data.status === true) {
                    location.reload();

                } else {

                    alert(\"Произошла ошибка...\");
                }
            },
            beforeSend: function () {

            }
        })
    }

    function like(post_id) {

        \$.ajax({

            url: \"/post/like\",
            data: { post_id : post_id },
            dataType: \"json\",
            type: \"POST\",
            success: function (post) {

                \$(\"#\" + post_id).html(post.likes);
                // В зависимости от действия добавляем или убираем закрашивание иконки лайка
                post.action == \"delete\" ?  \$(\"#icon_\" + post_id).removeClass(\"red\") :  \$(\"#icon_\" + post_id).addClass(\"red\");
            },
            beforeSend: function () {

                // Пока грузиться анимируем
                \$(\"#icon_\" + post_id)
                    .transition('jiggle')
                ;
            }
        })
    }
</script>

";
        // line 116
        $this->env->loadTemplate("twig/footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "feed.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 116,  154 => 62,  149 => 59,  136 => 54,  119 => 53,  114 => 52,  112 => 51,  105 => 49,  97 => 43,  93 => 41,  87 => 39,  85 => 38,  76 => 34,  68 => 31,  64 => 30,  60 => 29,  56 => 27,  52 => 26,  48 => 24,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
