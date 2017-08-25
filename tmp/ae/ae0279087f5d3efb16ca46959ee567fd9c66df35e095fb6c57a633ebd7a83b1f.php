<?php

/* base.html */
class __TwigTemplate_f71fafe2ec087f7c0a1352b4f96a450758d82794f29c03e570cb7c5feaa30538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'estilos' => array($this, 'block_estilos'),
            'contenido' => array($this, 'block_contenido'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "    ";
        $this->displayBlock('estilos', $context, $blocks);
        // line 10
        echo "</head>
<body>
<div id=\"ms-preload\" class=\"ms-preload\">
    <div id=\"status\">
        <div class=\"spinner\">
            <div class=\"dot1\"></div>
            <div class=\"dot2\"></div>
        </div>
    </div>
</div>
<div class=\"sb-site-container\">
    ";
        // line 21
        $this->loadTemplate("menu.html", "base.html", 21)->display($context);
        // line 22
        echo "
    <div class=\"container container-full\">
    <!--             CONTENIDO                     -->
    ";
        // line 25
        $this->displayBlock('contenido', $context, $blocks);
        // line 26
        echo "    </div>
    <footer class=\"ms-footer\">
        <div class=\"container\">
            <p>Copyright &copy; Material Style 2017</p>
        </div>
    </footer>
    <div class=\"btn-back-top\">
        <a href=\"#\" data-scroll id=\"back-top\" class=\"btn-circle btn-circle-primary btn-circle-sm btn-circle-raised \">
            <i class=\"zmdi zmdi-long-arrow-up\"></i>
        </a>
    </div>
</div>

";
        // line 39
        $this->displayBlock('scripts', $context, $blocks);
        // line 42
        echo "
</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->loadTemplate("head.html", "base.html", 5)->display($context);
        // line 6
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo " - NOMBRE DEL SISTEMA </title>
    ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_estilos($context, array $blocks = array())
    {
        // line 9
        echo "    ";
    }

    // line 25
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 39
    public function block_scripts($context, array $blocks = array())
    {
        // line 40
        echo "   ";
        $this->loadTemplate("scripts.html", "base.html", 40)->display($context);
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 40,  108 => 39,  103 => 25,  99 => 9,  96 => 8,  85 => 6,  82 => 5,  79 => 4,  73 => 42,  71 => 39,  56 => 26,  54 => 25,  49 => 22,  47 => 21,  34 => 10,  31 => 8,  29 => 4,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    [% block head %]
    [% include 'head.html' %]
    <title>[% block title %][% endblock %] - NOMBRE DEL SISTEMA </title>
    [% endblock %]
    [% block estilos %]
    [% endblock %]
</head>
<body>
<div id=\"ms-preload\" class=\"ms-preload\">
    <div id=\"status\">
        <div class=\"spinner\">
            <div class=\"dot1\"></div>
            <div class=\"dot2\"></div>
        </div>
    </div>
</div>
<div class=\"sb-site-container\">
    [% include 'menu.html' %]

    <div class=\"container container-full\">
    <!--             CONTENIDO                     -->
    [% block contenido %][% endblock %]
    </div>
    <footer class=\"ms-footer\">
        <div class=\"container\">
            <p>Copyright &copy; Material Style 2017</p>
        </div>
    </footer>
    <div class=\"btn-back-top\">
        <a href=\"#\" data-scroll id=\"back-top\" class=\"btn-circle btn-circle-primary btn-circle-sm btn-circle-raised \">
            <i class=\"zmdi zmdi-long-arrow-up\"></i>
        </a>
    </div>
</div>

[% block scripts %]
   [% include 'scripts.html' %]
[% endblock %]

</body>
</html>", "base.html", "C:\\wamp\\www\\starsoccerP\\ui\\modulos\\comun\\html\\template\\base.html");
    }
}
