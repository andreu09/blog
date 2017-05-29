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
            echo "
<div class=\"ui two column centered grid stackable\">
    <div class=\"eight wide column\">
        <div class=\"ui icon message\">
            <i class=\"photo icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    Станьте первым, кто опубликует первую запись!
                </div>
                <p>
                    <button class=\"teal ui button\" onclick=\"\$('#modal-post').modal('show')\">
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
            // line 25
            echo "
<div class=\"ui two column centered grid stackable\">
    <div class=\"eight wide column\">

        ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "current_count") - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                echo "
        <div class=\"ui card fluid\">
            <div class=\"content\">
                <div class=\"right floated meta\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "time"), "html", null, true);
                echo "</div>
                <img class=\"ui avatar image\" src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "photo_50"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "first_name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "last_name"), "html", null, true);
                echo "
            </div>
            <div class=\"image event\">
                <img src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "image"), "html", null, true);
                echo "\" style=\"max-height: 450px; background-size: cover;\">
                <div class=\"ui inverted  dimmer\">
                    <div class=\"content\">
                        <div class=\"center\">

                            ";
                // line 42
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "uid") == $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "uid"))) {
                    // line 43
                    echo "
                            <div onclick=\"del( ";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                    echo " )\" class=\"ui red small button\">
                                <i class=\"remove icon\"></i> Удалить запись
                            </div>

                            ";
                } else {
                    // line 49
                    echo "
                            <div class=\"ui orange small button\"><i class=\"warning sign icon\"></i>Пожаловаться</div>

                            ";
                }
                // line 53
                echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"content\">
                <span class=\"left floated\">
                    <img src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "smile"), "html", null, true);
                echo "\">
                </span>

                ";
                // line 63
                $context["uid_likes"] = twig_split_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "uid_likes"), ",");
                // line 64
                echo "
                <span class=\"right floated\" onclick=\"like( ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                echo " )\">
                   <i id=\"icon_";
                // line 66
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
                // line 67
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
            // line 73
            echo "
    </div>
</div>

";
        }
        // line 78
        echo "
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/posts.js\"></script>

";
        // line 81
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
        return array (  175 => 81,  170 => 79,  167 => 78,  160 => 73,  146 => 67,  129 => 66,  125 => 65,  122 => 64,  120 => 63,  114 => 60,  105 => 53,  99 => 49,  91 => 44,  88 => 43,  86 => 42,  78 => 37,  68 => 34,  64 => 33,  59 => 30,  55 => 29,  49 => 25,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
