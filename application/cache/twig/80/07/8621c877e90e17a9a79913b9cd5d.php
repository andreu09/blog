<?php

/* templates/posts.twig */
class __TwigTemplate_80078621c877e90e17a9a79913b9cd5d extends Twig_Template
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
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "count") == 0)) {
            // line 2
            echo "
    <div class=\"uk-flex uk-flex-center uk-margin-top\">

    Будьте первым, кто опубликует запись

    <span style=\"cursor: pointer\" class=\"uk-label uk-margin-left \" uk-toggle=\"target: #publicate\">

        <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Добавить

    </span>


    </div>

";
        } else {
            // line 17
            echo "
    ";
            // line 19
            echo "
    ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "count") - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 21
                echo "
        <div class=\"uk-flex uk-flex-center uk-margin-top\">

            <div class=\"uk-card uk-card-default uk-box-shadow-small uk-margin-bottom uk-width-1-3\" uk-scrollspy=\"cls: uk-animation-slide-left; repeat: false; delay: 400;\">

                <div class=\"uk-card-media-top\">

                    <div class=\"uk-inline\">

                        <img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "image"), "html", null, true);
                echo "\" alt=\"#\" height=\"200px\" width=\"500px\" style=\"max-height: 450px\">

                        <div class=\"uk-overlay uk-light uk-position-bottom\">

                            <p class=\"uk-text-center\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "text"), "html", null, true);
                echo "</p>

                        </div>

                    </div>
\t\t\t\t\t
                    <div class=\"uk-card-footer uk-text-center\">

                        Автор:

                        <img class=\"uk-border-circle uk-margin-right uk-margin-left\" width=\"40\" height=\"40\" src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "photo_50"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "first_name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "last_name"), "html", null, true);
                echo " ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "status")) {
                    echo "  <i class='fa fa-check-circle' aria-hidden='true'></i> ";
                }
                echo " \" uk-tooltip>

                        Дата:

                        <text class=\"uk-text-small\">
                            ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "post"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "time"), "html", null, true);
                echo "
                        </text>

                    </div>

                </div>

            </div>

        </div>

        ";
                // line 61
                echo "
        <div class=\"uk-position-bottom-right uk-position-fixed uk-margin uk-margin-right\">
            <a href=\"#target\" uk-totop uk-scroll></a>
        </div>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 67
            echo "
";
        }
        // line 69
        echo "
";
    }

    public function getTemplateName()
    {
        return "templates/posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 69,  120 => 67,  109 => 61,  95 => 49,  44 => 20,  41 => 19,  38 => 17,  72 => 36,  60 => 26,  58 => 25,  48 => 21,  43 => 17,  102 => 59,  96 => 58,  93 => 57,  89 => 55,  79 => 44,  77 => 46,  74 => 45,  66 => 34,  61 => 36,  59 => 30,  56 => 34,  30 => 11,  39 => 19,  36 => 8,  34 => 7,  31 => 6,  29 => 9,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
