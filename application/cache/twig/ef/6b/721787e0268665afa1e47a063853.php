<?php

/* news.php */
class __TwigTemplate_ef6b721787e0268665afa1e47a063853 extends Twig_Template
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


";
        // line 5
        if (($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "count") == 0)) {
            // line 6
            echo "
<div class=\"uk-flex uk-flex-center uk-margin-top uk-margin-left uk-margin-right\">
    Новостей пока не добавлено.
</div>

";
        } else {
            // line 12
            echo "
";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "count") - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 14
                echo "<div class=\"ui two column centered grid stackable\">
\t<div class=\"ten wide column\">
\t\t<div class=\"ui raised segment\">
\t\t\t<div class=\"ui comments\">
\t\t\t\t<div class=\"comment\">
\t\t\t\t\t<a class=\"avatar\" href=\"user/view/";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "admin"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "uid"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<img src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "admin"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "photo_50"), "html", null, true);
                echo "\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<a class=\"author\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "admin"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "first_name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "admin"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "last_name"), "html", null, true);
                echo " <i class=\"check square icon\"></i></a>
\t\t\t\t\t\t<div class=\"metadata\">
\t\t\t\t\t\t\t<div class=\"date\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "news"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "time"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "news"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "text"), "html", null, true);
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 35
            echo "
";
        }
        // line 37
        echo "
";
        // line 38
        $this->env->loadTemplate("templates/footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "news.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 38,  90 => 37,  86 => 35,  72 => 27,  67 => 25,  60 => 23,  54 => 20,  50 => 19,  43 => 14,  39 => 13,  36 => 12,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
