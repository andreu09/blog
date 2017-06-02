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
                    Еще нет опубликованных записей.
                </div>
            </div>
        </div>
    </div>
</div>

";
        } else {
            // line 19
            echo "
<div class=\"ui two column centered grid stackable\">
    <div class=\"eight wide column\">

        ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "current_count") - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 24
                echo "
        <div class=\"ui card fluid\">
            <div class=\"content\">
                <div class=\"right floated meta\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "time"), "html", null, true);
                echo "</div>
                <img class=\"ui avatar image\" src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "photo_50"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "first_name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "last_name"), "html", null, true);
                echo "
            </div>
            <div class=\"image event\">
                <img src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "image"), "html", null, true);
                echo "\" style=\"max-height: 450px; background-size: cover;\">
                <div class=\"ui inverted  dimmer\">
                    <div class=\"content\">
                        <div class=\"center\">

                            ";
                // line 36
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "uid") == $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "uid"))) {
                    // line 37
                    echo "
                            <div onclick=\"del( ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                    echo " )\" class=\"ui red small button\">
                                <i class=\"remove icon\"></i> Удалить запись
                            </div>

                            ";
                } else {
                    // line 43
                    echo "
                            <div class=\"ui orange small button\"><i class=\"warning sign icon\"></i>Пожаловаться</div>

                            ";
                }
                // line 47
                echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"content\">
                <span class=\"left floated\">
                    <img src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "smile"), "html", null, true);
                echo "\">
                </span>

                ";
                // line 57
                $context["uid_likes"] = twig_split_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "uid_likes"), ",");
                // line 58
                echo "
                <span class=\"right floated\" onclick=\"like( ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                echo " )\">
                   <i id=\"icon_";
                // line 60
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
                // line 61
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
            // line 67
            echo "
    </div>
</div>

";
        }
        // line 72
        echo "
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/posts.js\"></script>

";
        // line 75
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
        return array (  169 => 75,  164 => 73,  161 => 72,  154 => 67,  140 => 61,  123 => 60,  119 => 59,  116 => 58,  114 => 57,  108 => 54,  99 => 47,  93 => 43,  85 => 38,  82 => 37,  80 => 36,  72 => 31,  62 => 28,  58 => 27,  53 => 24,  49 => 23,  43 => 19,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
