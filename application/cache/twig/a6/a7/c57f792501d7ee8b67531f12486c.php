<?php

/* users.php */
class __TwigTemplate_a6a7c57f792501d7ee8b67531f12486c extends Twig_Template
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
\t<div class=\"five wide column\">
\t\t<div class=\"ui fluid card\">
\t\t\t<div class=\"image\">
\t\t\t\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "photo_200"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"content\">
\t\t\t\t<a class=\"header\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name"), "html", null, true);
        echo " ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "status")) {
            echo " <i class=\"check square icon\"></i> ";
        }
        echo "</a>
\t\t\t</div>
\t\t\t<div class=\"extra content\">
\t\t\t\t<a><i class=\"heart icon\"></i> в разработке... </a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>



";
        // line 21
        $this->env->loadTemplate("templates/footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "users.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 21,  34 => 10,  28 => 7,  21 => 2,  19 => 1,);
    }
}
