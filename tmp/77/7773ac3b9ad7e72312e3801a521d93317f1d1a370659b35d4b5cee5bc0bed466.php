<?php

/* head.html */
class __TwigTemplate_90c86cedcebb68dfd35e07bad939095353b7967fe998d56201f6fd63226a1ba4 extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
<meta name=\"theme-color\" content=\"#333\">
<base href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/\" />
<link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/img/favicon.png?v=3\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/css/preload.min.css\" />
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/css/plugins.min.css\" />
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/css/style.grey-800.min.css\" />
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/css/base.css\" />
<!--[if lt IE 9]>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/js/html5shiv.min.js\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/js/respond.min.js\"></script>
<![endif]-->
";
    }

    public function getTemplateName()
    {
        return "head.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  52 => 14,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
<meta name=\"theme-color\" content=\"#333\">
<base href=\"[[base]]/\" />
<link rel=\"shortcut icon\" href=\"[[base]]/ui/assets/img/favicon.png?v=3\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link rel=\"stylesheet\" href=\"[[base]]/ui/assets/css/preload.min.css\" />
<link rel=\"stylesheet\" href=\"[[base]]/ui/assets/css/plugins.min.css\" />
<link rel=\"stylesheet\" href=\"[[base]]/ui/assets/css/style.grey-800.min.css\" />
<link rel=\"stylesheet\" href=\"[[base]]/ui/css/base.css\" />
<!--[if lt IE 9]>
<script src=\"[[base]]/ui/assets/js/html5shiv.min.js\"></script>
<script src=\"[[base]]/ui/assets/js/respond.min.js\"></script>
<![endif]-->
", "head.html", "C:\\wamp64\\www\\starsoccer\\ui\\modulos\\comun\\html\\template\\head.html");
    }
}
