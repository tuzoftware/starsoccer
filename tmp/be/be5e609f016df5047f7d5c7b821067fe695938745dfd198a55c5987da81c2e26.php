<?php

/* scripts.html */
class __TwigTemplate_5adc175a455c903649b14cbd497994edd71999de921bbfa6c0b3d707b39b608d extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/js/plugins.min.js\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/js/app.min.js\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/baseComponente.js\"></script>
<script>
    \$(function(){
        baseComponente.inicializarAjax(\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "\");
        var url=window.location.href;
        url=url.replace(\"#basecontenido\", \"\");
        \$(\"#back-top\").attr(\"href\",url+\"#basecontenido\");
    });
</script>";
    }

    public function getTemplateName()
    {
        return "scripts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"[[base]]/ui/assets/js/plugins.min.js\"></script>
<script src=\"[[base]]/ui/assets/js/app.min.js\"></script>
<script src=\"[[base]]/ui/js/base/componentes/baseComponente.js\"></script>
<script>
    \$(function(){
        baseComponente.inicializarAjax(\"[[base]]\");
        var url=window.location.href;
        url=url.replace(\"#basecontenido\", \"\");
        \$(\"#back-top\").attr(\"href\",url+\"#basecontenido\");
    });
</script>", "scripts.html", "C:\\wamp\\www\\starsoccer\\ui\\modulos\\comun\\html\\template\\scripts.html");
    }
}
