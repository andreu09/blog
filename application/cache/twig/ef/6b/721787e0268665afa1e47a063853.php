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
        $this->env->loadTemplate("twig/header.twig")->display($context);
        // line 2
        echo "
<div class=\"ui two column centered grid stackable\">
    <div class=\"eight wide column\">
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "current_count") - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "        <div class=\"ui card fluid\">
            <div class=\"content\">
                <div class=\"header\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "item"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "title"), "html", null, true);
            echo "</div>
                <div class=\"meta\">
                    <span class=\"right floated time\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "item"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "time"), "html", null, true);
            echo "</span>
                    <span class=\"category\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "item"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "type"), "html", null, true);
            echo "</span>
                </div>
                <div class=\"description\">
                    <p>
                       ";
            // line 15
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "item"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "text"), "html", null, true));
            echo "
                    </p>
                </div>
            </div>
            <div class=\"extra content\">
                <div class=\"right floated author\">
                    <img class=\"ui avatar image\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "photo_50"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "user"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "last_name"), "html", null, true);
            echo "
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "    </div>
</div>


";
        // line 30
        $this->env->loadTemplate("twig/footer.twig")->display($context);
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
        return array (  80 => 30,  74 => 26,  59 => 21,  50 => 15,  43 => 11,  39 => 10,  34 => 8,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
