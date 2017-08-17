<?php

/* regla.html */
class __TwigTemplate_b52a301866185472b25ae285e22665048043544acce38f0a507433a9c23137a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "regla.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'estilos' => array($this, 'block_estilos'),
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
        echo " Registro Reglas ";
    }

    // line 3
    public function block_estilos($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("estilos", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/datatables-1.10.12/css/dataTables-custom.css\">
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/lobibox/css/lobibox.min.css\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/selectize/css/selectize.bootstrap3.css\">
";
    }

    // line 8
    public function block_contenido($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"row\">
    <div class=\"col-lg-12\" style=\"margin:10px 0 0 0\"><p class=\"titulo\">
        <i class=\"icon2-dependencia-2 sube text-info\"></i>
        <span class=\"resalte\">Administraci&oacute;n</span>  <i style=\"font-size:0.6em\" class=\"fa fa-chevron-right text-muted\"></i> <span style=\"font-size:28px\"><span class=\"icon-info-sign sube\"></span> Reglas</span>
    </p>
        <br>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-lg-12 col-md-12\">
        <div class=\"card card-primary animated fadeInUp animation-delay-7\">
            <form id=\"frmBuscar\"> <fieldset>
                <div class=\"container\">
                    <!--Nombre Regla-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-filter\"></i>
                                        </span>
                                    <label class=\"control-label\">Nombre</label>
                                    <input type=\"text\" name=\"filtros[nombre_busqueda]\" class=\"form-control\">
                                </div>
                                <span class=\"errores\" data-error=\"nombre_busqueda\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Estatus-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-filter\"></i>
                                    </span>
                                    <label class=\"control-label\">Estatus:</label>
                                    <select id=\"estatus_busqueda\" name=\"filtros[estatus_busqueda]\" placeholder=\"Seleccionar\">
                                        <option value=\"\"></option>
                                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estados"]) ? $context["estados"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["estatus"]) {
            // line 50
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["estatus"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["estatus"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                    </select>
                                </div>
                                <span class=\"errores\" data-error=\"estatus_busqueda\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Botones-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <button type=\"submit\" class=\"btn btn-raised btn-primary pull-right\">Buscar</button>
                            <button id=\"btn_nuevo\" type=\"button\" class=\"btn btn-raised btn-success pull-right\">Agregar</button>
                        </div>
                    </div>
                </div>
            </fieldset>
            </form>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-12\">
        <table class=\"display\" id=\"tbl_tecnologia\" width=\"100%\">
            <thead>
            <tr>
                <th width=\"80%\">Reglas</th>
                <th width=\"10%\">Estatus</th>
                <th width=\"10%\">Acci&oacute;n</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
";
        // line 86
        $this->loadTemplate("modalregla.html", "regla.html", 86)->display($context);
    }

    // line 88
    public function block_scripts($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/lobibox/js/notifications.min.js\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/datatables-1.10.12/js/datatables.min.js\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/dataTableComponente.js\"></script>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/notificacionComponente.js\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/selectize/js/selectize.min.js\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/selectizeComponente.js\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/bootdialog/js/bootstrap-modal.min.js\"></script>
<script type=\"text/javascript\">
    \$(function () {
        var columnas = [
            {
                \"data\": \"regla\",
                \"defaultContent\": \"\"
            }, {
                \"data\": \"estatus\",
                \"defaultContent\": \"\"
            },
            {\"data\": null,
                \"defaultContent\": \"<button class='btn btn-raised btn-primary'>Editar</button>\"
            }
        ];

        var dt = dataTableComponente(\"#tbl_tecnologia\", \"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/reglas/buscar\", columnas, \"#frmBuscar\", 10);
        var selectEstatus = selectizeComponente('[name=\"regla[estatus]\"]');//selecciona estatus de modal
        var selectEstatusFiltro = selectizeComponente('[name=\"filtros[estatus_busqueda]\"]');//estatus de regla
        \$(\".form-group\").addClass(\"is-empty\");

        \$('#frmBuscar').submit(function (event) {
            dt.buscar();
            event.preventDefault();
        });

        \$(\"#tbl_tecnologia\").delegate('button', \"click\", function () {
            var datos = dt.obtenerSeleccionado(this);
            modalTipo('Editar Tecnología', false, datos);
        });

        \$(\"#btn_nuevo\").on(\"click\", function () {
            baseComponente.limpiarFormulario('#frmAgregar');
            modalTipo(\"Agregar Regla\", true, null);
        });

        \$(\"#frmAgregar\").submit(function (event) {
            \$.post(\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/reglas/guardar\", \$(\"#frmAgregar\").serialize(), function (data) {
                if (data.tipoRespuesta === \"MENSAJE\" && data.tipoMensaje ===\"CORRECTO\") {
                    baseComponente.limpiarFormulario('#frmAgregar');
                    dt.recargar();
                    notificacionComponente.mostrarCorrecto(data.mensaje);
                    \$('#modalRegla').modal('hide');
                } else {

                    if(data.tipoRespuesta ===\"MENSAJE\"  && data.tipoMensaje === \"ERROR\"){
                        notificacionComponente.mostrarError(data.mensaje);
                    }else{
                        \$('div.form-group').find('select').on('change',function () {
                            if (\$(this).find('option:selected').val() != '') {
                                \$(this).closest('div.form-group').removeClass(\"is-empty\");

                            }});
                        \$('div.form-group').find('select').each(function () {
                            if (\$(this).find('option:selected').val() != '') {
                                \$(this).closest('div.form-group').removeClass(\"is-empty\");

                            }});
                    }

                }
            });
            event.preventDefault();
        });

        //Modal
        function modalTipo(titulo, tipo, elemento)
        {
            baseComponente.ocultarErrores();
            baseComponente.limpiarFormulario(\"#frmAgregar\");
            if (tipo === false) {
                \$('[name=\"regla[id_regla]\"]').val(elemento['id_regla']);
                \$('[name=\"regla[regla]\"]').val(elemento['regla']);
                \$(\".modal-content .form-group\").removeClass(\"is-empty\");
                selectEstatus.setValue(elemento['estatus']);
            } else {
                //\$(\".modal-content .form-group\").addClass(\"is-empty\");
                \$(\".modal-content .form-group\").addClass(\"is-empty\");

                \$('div.form-group').find('select').on('change',function () {
                    if (\$(this).find('option:selected').val() != '') {
                        \$(this).closest('div.form-group').removeClass(\"is-empty\");

                    }});
                \$('div.form-group').find('select').each(function () {
                    if (\$(this).find('option:selected').val() != '') {
                        \$(this).closest('div.form-group').removeClass(\"is-empty\");

                    }});
            }
            \$(\"#tituloModal\").html(titulo);
            \$('#modalRegla').modal('show');
        }
        \$(\"#estatus_busqueda\").on('change',function(){
            if (\$(this).val() != '') {
                \$(this).closest('div.form-group').removeClass(\"is-empty\");
            };
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "regla.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 132,  208 => 111,  189 => 95,  185 => 94,  181 => 93,  177 => 92,  173 => 91,  169 => 90,  165 => 89,  158 => 88,  154 => 86,  118 => 52,  107 => 50,  103 => 49,  61 => 9,  58 => 8,  52 => 6,  48 => 5,  44 => 4,  37 => 3,  31 => 2,  11 => 1,);
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
[% block title %] Registro Reglas [% endblock %]
[% block estilos %] [[ parent() ]]
<link rel=\"stylesheet\" href=\"[[base]]/ui/js/base/datatables-1.10.12/css/dataTables-custom.css\">
<link rel=\"stylesheet\" href=\"[[base]]/ui/js/base/lobibox/css/lobibox.min.css\">
<link rel=\"stylesheet\" href=\"[[base]]/ui/js/base/selectize/css/selectize.bootstrap3.css\">
[% endblock %]
[% block contenido %]
<div class=\"row\">
    <div class=\"col-lg-12\" style=\"margin:10px 0 0 0\"><p class=\"titulo\">
        <i class=\"icon2-dependencia-2 sube text-info\"></i>
        <span class=\"resalte\">Administraci&oacute;n</span>  <i style=\"font-size:0.6em\" class=\"fa fa-chevron-right text-muted\"></i> <span style=\"font-size:28px\"><span class=\"icon-info-sign sube\"></span> Reglas</span>
    </p>
        <br>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-lg-12 col-md-12\">
        <div class=\"card card-primary animated fadeInUp animation-delay-7\">
            <form id=\"frmBuscar\"> <fieldset>
                <div class=\"container\">
                    <!--Nombre Regla-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-filter\"></i>
                                        </span>
                                    <label class=\"control-label\">Nombre</label>
                                    <input type=\"text\" name=\"filtros[nombre_busqueda]\" class=\"form-control\">
                                </div>
                                <span class=\"errores\" data-error=\"nombre_busqueda\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Estatus-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-filter\"></i>
                                    </span>
                                    <label class=\"control-label\">Estatus:</label>
                                    <select id=\"estatus_busqueda\" name=\"filtros[estatus_busqueda]\" placeholder=\"Seleccionar\">
                                        <option value=\"\"></option>
                                        [% for estatus in estados %]
                                        <option value=\"[[estatus]]\">[[estatus]]</option>
                                        [% endfor %]
                                    </select>
                                </div>
                                <span class=\"errores\" data-error=\"estatus_busqueda\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Botones-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <button type=\"submit\" class=\"btn btn-raised btn-primary pull-right\">Buscar</button>
                            <button id=\"btn_nuevo\" type=\"button\" class=\"btn btn-raised btn-success pull-right\">Agregar</button>
                        </div>
                    </div>
                </div>
            </fieldset>
            </form>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-12\">
        <table class=\"display\" id=\"tbl_tecnologia\" width=\"100%\">
            <thead>
            <tr>
                <th width=\"80%\">Reglas</th>
                <th width=\"10%\">Estatus</th>
                <th width=\"10%\">Acci&oacute;n</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
[% include 'modalregla.html' %]
[% endblock %]
[% block scripts %] [[ parent() ]]
<script src=\"[[base]]/ui/js/base/lobibox/js/notifications.min.js\"></script>
<script src=\"[[base]]/ui/js/base/datatables-1.10.12/js/datatables.min.js\"></script>
<script src=\"[[base]]/ui/js/base/componentes/dataTableComponente.js\"></script>
<script src=\"[[base]]/ui/js/base/componentes/notificacionComponente.js\"></script>
<script src=\"[[base]]/ui/js/base/selectize/js/selectize.min.js\"></script>
<script src=\"[[base]]/ui/js/base/componentes/selectizeComponente.js\"></script>
<script src=\"[[base]]/ui/js/base/bootdialog/js/bootstrap-modal.min.js\"></script>
<script type=\"text/javascript\">
    \$(function () {
        var columnas = [
            {
                \"data\": \"regla\",
                \"defaultContent\": \"\"
            }, {
                \"data\": \"estatus\",
                \"defaultContent\": \"\"
            },
            {\"data\": null,
                \"defaultContent\": \"<button class='btn btn-raised btn-primary'>Editar</button>\"
            }
        ];

        var dt = dataTableComponente(\"#tbl_tecnologia\", \"[[base]]/reglas/buscar\", columnas, \"#frmBuscar\", 10);
        var selectEstatus = selectizeComponente('[name=\"regla[estatus]\"]');//selecciona estatus de modal
        var selectEstatusFiltro = selectizeComponente('[name=\"filtros[estatus_busqueda]\"]');//estatus de regla
        \$(\".form-group\").addClass(\"is-empty\");

        \$('#frmBuscar').submit(function (event) {
            dt.buscar();
            event.preventDefault();
        });

        \$(\"#tbl_tecnologia\").delegate('button', \"click\", function () {
            var datos = dt.obtenerSeleccionado(this);
            modalTipo('Editar Tecnología', false, datos);
        });

        \$(\"#btn_nuevo\").on(\"click\", function () {
            baseComponente.limpiarFormulario('#frmAgregar');
            modalTipo(\"Agregar Regla\", true, null);
        });

        \$(\"#frmAgregar\").submit(function (event) {
            \$.post(\"[[base]]/reglas/guardar\", \$(\"#frmAgregar\").serialize(), function (data) {
                if (data.tipoRespuesta === \"MENSAJE\" && data.tipoMensaje ===\"CORRECTO\") {
                    baseComponente.limpiarFormulario('#frmAgregar');
                    dt.recargar();
                    notificacionComponente.mostrarCorrecto(data.mensaje);
                    \$('#modalRegla').modal('hide');
                } else {

                    if(data.tipoRespuesta ===\"MENSAJE\"  && data.tipoMensaje === \"ERROR\"){
                        notificacionComponente.mostrarError(data.mensaje);
                    }else{
                        \$('div.form-group').find('select').on('change',function () {
                            if (\$(this).find('option:selected').val() != '') {
                                \$(this).closest('div.form-group').removeClass(\"is-empty\");

                            }});
                        \$('div.form-group').find('select').each(function () {
                            if (\$(this).find('option:selected').val() != '') {
                                \$(this).closest('div.form-group').removeClass(\"is-empty\");

                            }});
                    }

                }
            });
            event.preventDefault();
        });

        //Modal
        function modalTipo(titulo, tipo, elemento)
        {
            baseComponente.ocultarErrores();
            baseComponente.limpiarFormulario(\"#frmAgregar\");
            if (tipo === false) {
                \$('[name=\"regla[id_regla]\"]').val(elemento['id_regla']);
                \$('[name=\"regla[regla]\"]').val(elemento['regla']);
                \$(\".modal-content .form-group\").removeClass(\"is-empty\");
                selectEstatus.setValue(elemento['estatus']);
            } else {
                //\$(\".modal-content .form-group\").addClass(\"is-empty\");
                \$(\".modal-content .form-group\").addClass(\"is-empty\");

                \$('div.form-group').find('select').on('change',function () {
                    if (\$(this).find('option:selected').val() != '') {
                        \$(this).closest('div.form-group').removeClass(\"is-empty\");

                    }});
                \$('div.form-group').find('select').each(function () {
                    if (\$(this).find('option:selected').val() != '') {
                        \$(this).closest('div.form-group').removeClass(\"is-empty\");

                    }});
            }
            \$(\"#tituloModal\").html(titulo);
            \$('#modalRegla').modal('show');
        }
        \$(\"#estatus_busqueda\").on('change',function(){
            if (\$(this).val() != '') {
                \$(this).closest('div.form-group').removeClass(\"is-empty\");
            };
        });
    });
</script>
[% endblock %]", "regla.html", "C:\\wamp\\www\\starsoccer\\ui\\modulos\\regla\\html\\regla.html");
    }
}
