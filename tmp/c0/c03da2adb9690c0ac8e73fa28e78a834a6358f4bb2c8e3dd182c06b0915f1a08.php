<?php

/* test.html */
class __TwigTemplate_5ce3b2b9a362cb9a115aae8815220f28c9e1b2b88ad3e8ff3007be69495df5f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "test.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'contenido' => array($this, 'block_contenido'),
            'scripts' => array($this, 'block_scripts'),
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
        echo "  Contenido ";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
   <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/datatables-1.10.12/css/dataTables-custom.css\" rel=\"stylesheet\" type=\"text/css\">
   <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/selectize/css/selectize.bootstrap3.css\" rel=\"stylesheet\" type=\"text/css\">
   ";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "<div>
    ";
        // line 9
        if (call_user_func_array($this->env->getFunction('tieneAlgunPermiso')->getCallable(), array(array(0 => "ADMINISTRADOR")))) {
            // line 10
            echo "    <p>
        Este mensaje solo lo puede ver el administrador
    </p>
    ";
        }
        // line 14
        echo "    ";
        if (call_user_func_array($this->env->getFunction('tieneAlgunPermiso')->getCallable(), array(array(0 => "Usuario")))) {
            // line 15
            echo "    <p>
        Este mensaje solo lo puede ver el usuario
    </p>
    ";
        }
        // line 19
        echo "    ";
        if (call_user_func_array($this->env->getFunction('tieneAlgunPermiso')->getCallable(), array(array(0 => "ADMINISTRADOR", 1 => "USUARIO")))) {
            // line 20
            echo "    <p>
        Este mensaje lo pueden ver los roles de usuario y administrador
    </p>
    ";
        }
        // line 24
        echo "    <h1>Lista de Usuarios</h1>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 26
            echo "          <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id_usuario", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "activo", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>
<table id=\"tablaContinente\">
    <tr>
        <td>Id</td>
        <td>Pais</td>
    </tr>
</table>
";
    }

    // line 36
    public function block_scripts($context, array $blocks = array())
    {
        // line 37
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/selectize/js/selectize.min.js\"></script>
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/datatables-1.10.12/js/datatables.min.js\"></script>
<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/dataTableComponente.js\"></script>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/selectizeComponente.js\"></script>
<script type=\"text/javascript\">
    \$(function(){
        //Se definen las columnas del GRID

        var columnas= [{
            \"data\":\"id_test_continente\",
            \"defaultContent\" : \"\"
        },{
            \"data\":\"pais\",
            \"defaultContent\" : \"\"
        }];

        var dt= dataTableComponente(\"#tablaContinente\",\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/test/buscar\",columnas);

    });
</script>
";
    }

    public function getTemplateName()
    {
        return "test.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 54,  134 => 41,  130 => 40,  126 => 39,  122 => 38,  118 => 37,  115 => 36,  104 => 28,  93 => 26,  89 => 25,  86 => 24,  80 => 20,  77 => 19,  71 => 15,  68 => 14,  62 => 10,  60 => 9,  57 => 8,  54 => 7,  48 => 5,  44 => 4,  37 => 3,  31 => 2,  11 => 1,);
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
[% block title %]  Contenido [% endblock %]
   [% block head %] [[ parent() ]]
   <link href=\"[[base]]/ui/js/base/datatables-1.10.12/css/dataTables-custom.css\" rel=\"stylesheet\" type=\"text/css\">
   <link href=\"[[base]]/ui/js/base/selectize/css/selectize.bootstrap3.css\" rel=\"stylesheet\" type=\"text/css\">
   [% endblock %]
[% block contenido %]
<div>
    [% if tieneAlgunPermiso(['ADMINISTRADOR']) %]
    <p>
        Este mensaje solo lo puede ver el administrador
    </p>
    [% endif %]
    [% if tieneAlgunPermiso(['Usuario']) %]
    <p>
        Este mensaje solo lo puede ver el usuario
    </p>
    [% endif %]
    [% if tieneAlgunPermiso(['ADMINISTRADOR','USUARIO']) %]
    <p>
        Este mensaje lo pueden ver los roles de usuario y administrador
    </p>
    [% endif %]
    <h1>Lista de Usuarios</h1>
    [% for usuario in usuarios %]
          <li>[[ usuario.id_usuario ]]  [[ usuario.activo ]]</li>
    [% endfor %]
</div>
<table id=\"tablaContinente\">
    <tr>
        <td>Id</td>
        <td>Pais</td>
    </tr>
</table>
[% endblock %]
[% block scripts %]
[[ parent() ]]
<script src=\"[[base]]/ui/js/base/selectize/js/selectize.min.js\"></script>
<script src=\"[[base]]/ui/js/base/datatables-1.10.12/js/datatables.min.js\"></script>
<script src=\"[[base]]/ui/js/base/componentes/dataTableComponente.js\"></script>
<script src=\"[[base]]/ui/js/base/componentes/selectizeComponente.js\"></script>
<script type=\"text/javascript\">
    \$(function(){
        //Se definen las columnas del GRID

        var columnas= [{
            \"data\":\"id_test_continente\",
            \"defaultContent\" : \"\"
        },{
            \"data\":\"pais\",
            \"defaultContent\" : \"\"
        }];

        var dt= dataTableComponente(\"#tablaContinente\",\"[[base]]/test/buscar\",columnas);

    });
</script>
[% endblock %]", "test.html", "C:\\wamp\\www\\starsoccerP\\ui\\modulos\\test\\html\\test.html");
    }
}
