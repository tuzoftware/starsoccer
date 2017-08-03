<?php

/* error.html */
class __TwigTemplate_3d7213c9edaaea90ead3cef4f8ba54376d16d0ee677df1f4cd818df96b2be3d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "error.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "  ERROR INESPERADO ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : null), "html", null, true);
        echo "
<div >
   ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["traza"]) ? $context["traza"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "error.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("[% extends \"base.html\" %]
[% block title %]  ERROR INESPERADO [% endblock %]
[% block contenido %]
[[texto]]
<div >
   [[traza]]
</div>
[% endblock %]", "error.html", "C:\\wamp64\\www\\starsoccer\\ui\\modulos\\comun\\html\\template\\error.html");
    }
}
