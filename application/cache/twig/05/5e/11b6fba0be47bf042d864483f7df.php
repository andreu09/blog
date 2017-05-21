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
        if (($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), "current_count") == 0)) {
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
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), "current_count") - 1)));
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
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), 0, array(), "array"), "photo_50"), "html", null, true);
                echo "\">
                ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), 0, array(), "array"), "first_name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), 0, array(), "array"), "last_name"), "html", null, true);
                echo "
            </div>
            <div class=\"image\">
                <img src=\"";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "assets/images/posts/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "image"), "html", null, true);
                echo "\">
            </div>
            <div class=\"content\">
                <span class=\"left floated\">
                    <img src=\"";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "assets/images/smiles/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "smile"), "html", null, true);
                echo ".png\">
                </span>
                <span class=\"right floated\" onclick=\"like( ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "id"), "html", null, true);
                echo " )\">
                   <i class=\"heart outline like icon\"></i>
                       ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "likes"), "html", null, true);
                echo "
                </span>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 47
            echo "    </div>
</div>
";
        }
        // line 50
        echo "
<script>

    function like(post_id) {

        \$.ajax({

            url: \"/post/like\",
            data: { post_id : post_id },
            dataType: \"text\",
            type: \"POST\",
            success: function (post) {

                console.log(post);
            }
        })
    }
</script>

";
        // line 69
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
        return array (  134 => 69,  113 => 50,  108 => 47,  97 => 42,  92 => 40,  85 => 38,  76 => 34,  68 => 31,  64 => 30,  60 => 29,  56 => 27,  52 => 26,  48 => 24,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
