<?php

/* equipo.html */
class __TwigTemplate_e6f21175e7d00987192fcf87bf4ba0e8b757e0860e61fe91d02c73303d3ecf8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html", "equipo.html", 2);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Registro Equipos ";
    }

    // line 4
    public function block_estilos($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("estilos", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/datatables-1.10.12/css/dataTables-custom.css\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/lobibox/css/lobibox.min.css\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/selectize/css/selectize.bootstrap3.css\">
";
    }

    // line 9
    public function block_contenido($context, array $blocks = array())
    {
        // line 10
        echo "<!doctype html>
<div class=\"row\">
    <div class=\"col-lg-12\" style=\"margin:10px 0 0 0\"><p class=\"titulo\">
        <i class=\"icon2-dependencia-2 sube text-info\"></i>
        <span class=\"resalte\">Administraci&oacute;n</span>  <i style=\"font-size:0.6em\" class=\"fa fa-chevron-right text-muted\"></i> <span style=\"font-size:28px\"><span class=\"icon-info-sign sube\"></span> Equipos</span>
    </p>
        <br>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12 col-md-12\">
        <div class=\"card card-primary animated fadeInUp animation-delay-7\">
            <form id=\"frmBuscar\"><fieldset>
                <div class=\"container\">
                    <!--Nombre-->
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
                    <!--Fecha de Fundación-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group \">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Fecha de Fundacion:</label>
                                    <input type=\"date\" name=\"filtros[fecha_fundacion]\" min=\"2000-01-01\" max=\"2030-05-01\" class=\"form-control\" >
                                </div>
                                <span class=\"errores\" data-error=\"fecha_fundacion\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Estatus-->
                    <!--<div class=\"row\">-->
                        <!--<div class=\"col-md-11\">-->
                            <!--<div class=\"form-group\">-->
                                <!--<div class=\"input-group\">-->
                                    <!--<span class=\"input-group-addon\">-->
                                        <!--<i class=\"fa fa-filter\"></i>-->
                                    <!--</span>-->
                                    <!--<label class=\"control-label\">Estatussss:</label>-->
                                    <!--<select id=\"estatus_busqueda\" name=\"filtros[estatus_busqueda]\" placeholder=\"Seleccionar\">-->
                                        <!--<option value=\"\"></option>-->
                                        <!--";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estados"]) ? $context["estados"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["estatus"]) {
            echo "-->
                                        <!--<option value=\"";
            // line 66
            echo twig_escape_filter($this->env, $context["estatus"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["estatus"], "html", null, true);
            echo "</option>-->
                                        <!--";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "-->
                                    <!--</select>-->
                                <!--</div>-->
                                <!--<span class=\"errores\" data-error=\"estatus_busqueda\"><i class=\"fa fa-times\"></i></span>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
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
        <table class=\"display\" id=\"tbl_datos_equipo\" width=\"100%\">
            <thead>
            <tr>
                <th width=\"80%\">Nombre</th>
                <th width=\"80%\">Fecha de Fundacion</th>
                <th width=\"20%\">Logo</th>
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
        // line 104
        $this->loadTemplate("modalequipo.html", "equipo.html", 104)->display($context);
    }

    // line 106
    public function block_scripts($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/lobibox/js/notifications.min.js\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/datatables-1.10.12/js/datatables.min.js\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/dataTableComponente.js\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/notificacionComponente.js\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/selectize/js/selectize.min.js\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/selectizeComponente.js\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/bootdialog/js/bootstrap-modal.min.js\"></script>
<script type=\"text/javascript\">
    \$(function () {
        var columnas = [
            {
                \"data\": \"nombre\",
                \"defaultContent\": \"\"
            }, {
                \"data\": \"fecha_fundacion\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"ruta_logo\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"estatus\",
                \"defaultContent\": \"\"
            },
            {\"data\": null,
                \"defaultContent\": \"<button class='btn btn-raised btn-primary'>Editar</button>\"
            }
        ];

        var dt = dataTableComponente(\"#tbl_datos_equipo\", \"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/equipos/buscar\", columnas, \"#frmBuscar\", 10);
        var selectEstatus = selectizeComponente('[name=\"equipo[estatus]\"]');
        //var selectEstatusFiltro = selectizeComponente('[name=\"filtros[estatus_busqueda]\"]');
        \$(\".form-group\").addClass(\"is-empty\");

        \$('#frmBuscar').submit(function (event) {
            dt.buscar();
            event.preventDefault();
        });

        \$(\"#tbl_datos_equipo\").delegate('button', \"click\", function () {
            var datos = dt.obtenerSeleccionado(this);
            modalTipo('Editar Equipo', false, datos);
        });

        \$(\"#btn_nuevo\").on(\"click\", function () {
            baseComponente.limpiarFormulario('#frmAgregar');
            modalTipo(\"Agregar Equipo\", true, null);
        });

        \$(\"#frmAgregar\").submit(function (event) {
            //alert(\"Que hondaaaaaaaaaaaaaaaaaaa1!!!!\");
            \$.post(\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/equipos/guardar\", \$(\"#frmAgregar\").serialize(), function (data) {
                if (data.tipoRespuesta === \"MENSAJE\" && data.tipoMensaje ===\"CORRECTO\") {
                    baseComponente.limpiarFormulario('#frmAgregar');
                    dt.recargar();
                    notificacionComponente.mostrarCorrecto(data.mensaje);
                    \$('#modalEquipo').modal('hide');
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
                \$('[name=\"equipo[id_equipo]\"]').val(elemento['id_equipo']);
                \$('[name=\"equipo[nombre]\"]').val(elemento['nombre']);//nombre
                \$('[name=\"equipo[fecha_fundacion]\"]').val(elemento['fecha_fundacion']);
                \$('[name=\"equipo[ruta_logo]\"]').val(elemento['ruta_logo']);

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
            \$('#modalEquipo').modal('show');
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
        return "equipo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 157,  233 => 135,  208 => 113,  204 => 112,  200 => 111,  196 => 110,  192 => 109,  188 => 108,  184 => 107,  177 => 106,  173 => 104,  134 => 67,  124 => 66,  118 => 65,  61 => 10,  58 => 9,  52 => 7,  48 => 6,  44 => 5,  37 => 4,  31 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
[% extends \"base.html\" %]
[% block title %] Registro Equipos [% endblock %]
[% block estilos %] [[ parent() ]]
<link rel=\"stylesheet\" href=\"[[base]]/ui/js/base/datatables-1.10.12/css/dataTables-custom.css\">
<link rel=\"stylesheet\" href=\"[[base]]/ui/js/base/lobibox/css/lobibox.min.css\">
<link rel=\"stylesheet\" href=\"[[base]]/ui/js/base/selectize/css/selectize.bootstrap3.css\">
[% endblock %]
[% block contenido %]
<!doctype html>
<div class=\"row\">
    <div class=\"col-lg-12\" style=\"margin:10px 0 0 0\"><p class=\"titulo\">
        <i class=\"icon2-dependencia-2 sube text-info\"></i>
        <span class=\"resalte\">Administraci&oacute;n</span>  <i style=\"font-size:0.6em\" class=\"fa fa-chevron-right text-muted\"></i> <span style=\"font-size:28px\"><span class=\"icon-info-sign sube\"></span> Equipos</span>
    </p>
        <br>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12 col-md-12\">
        <div class=\"card card-primary animated fadeInUp animation-delay-7\">
            <form id=\"frmBuscar\"><fieldset>
                <div class=\"container\">
                    <!--Nombre-->
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
                    <!--Fecha de Fundación-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group \">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Fecha de Fundacion:</label>
                                    <input type=\"date\" name=\"filtros[fecha_fundacion]\" min=\"2000-01-01\" max=\"2030-05-01\" class=\"form-control\" >
                                </div>
                                <span class=\"errores\" data-error=\"fecha_fundacion\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Estatus-->
                    <!--<div class=\"row\">-->
                        <!--<div class=\"col-md-11\">-->
                            <!--<div class=\"form-group\">-->
                                <!--<div class=\"input-group\">-->
                                    <!--<span class=\"input-group-addon\">-->
                                        <!--<i class=\"fa fa-filter\"></i>-->
                                    <!--</span>-->
                                    <!--<label class=\"control-label\">Estatussss:</label>-->
                                    <!--<select id=\"estatus_busqueda\" name=\"filtros[estatus_busqueda]\" placeholder=\"Seleccionar\">-->
                                        <!--<option value=\"\"></option>-->
                                        <!--[% for estatus in estados %]-->
                                        <!--<option value=\"[[estatus]]\">[[estatus]]</option>-->
                                        <!--[% endfor %]-->
                                    <!--</select>-->
                                <!--</div>-->
                                <!--<span class=\"errores\" data-error=\"estatus_busqueda\"><i class=\"fa fa-times\"></i></span>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
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
        <table class=\"display\" id=\"tbl_datos_equipo\" width=\"100%\">
            <thead>
            <tr>
                <th width=\"80%\">Nombre</th>
                <th width=\"80%\">Fecha de Fundacion</th>
                <th width=\"20%\">Logo</th>
                <th width=\"10%\">Estatus</th>
                <th width=\"10%\">Acci&oacute;n</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
[% include 'modalequipo.html' %]
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
                \"data\": \"nombre\",
                \"defaultContent\": \"\"
            }, {
                \"data\": \"fecha_fundacion\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"ruta_logo\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"estatus\",
                \"defaultContent\": \"\"
            },
            {\"data\": null,
                \"defaultContent\": \"<button class='btn btn-raised btn-primary'>Editar</button>\"
            }
        ];

        var dt = dataTableComponente(\"#tbl_datos_equipo\", \"[[base]]/equipos/buscar\", columnas, \"#frmBuscar\", 10);
        var selectEstatus = selectizeComponente('[name=\"equipo[estatus]\"]');
        //var selectEstatusFiltro = selectizeComponente('[name=\"filtros[estatus_busqueda]\"]');
        \$(\".form-group\").addClass(\"is-empty\");

        \$('#frmBuscar').submit(function (event) {
            dt.buscar();
            event.preventDefault();
        });

        \$(\"#tbl_datos_equipo\").delegate('button', \"click\", function () {
            var datos = dt.obtenerSeleccionado(this);
            modalTipo('Editar Equipo', false, datos);
        });

        \$(\"#btn_nuevo\").on(\"click\", function () {
            baseComponente.limpiarFormulario('#frmAgregar');
            modalTipo(\"Agregar Equipo\", true, null);
        });

        \$(\"#frmAgregar\").submit(function (event) {
            //alert(\"Que hondaaaaaaaaaaaaaaaaaaa1!!!!\");
            \$.post(\"[[base]]/equipos/guardar\", \$(\"#frmAgregar\").serialize(), function (data) {
                if (data.tipoRespuesta === \"MENSAJE\" && data.tipoMensaje ===\"CORRECTO\") {
                    baseComponente.limpiarFormulario('#frmAgregar');
                    dt.recargar();
                    notificacionComponente.mostrarCorrecto(data.mensaje);
                    \$('#modalEquipo').modal('hide');
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
                \$('[name=\"equipo[id_equipo]\"]').val(elemento['id_equipo']);
                \$('[name=\"equipo[nombre]\"]').val(elemento['nombre']);//nombre
                \$('[name=\"equipo[fecha_fundacion]\"]').val(elemento['fecha_fundacion']);
                \$('[name=\"equipo[ruta_logo]\"]').val(elemento['ruta_logo']);

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
            \$('#modalEquipo').modal('show');
        }
        \$(\"#estatus_busqueda\").on('change',function(){
            if (\$(this).val() != '') {
                \$(this).closest('div.form-group').removeClass(\"is-empty\");
            };
        });
    });
</script>
[% endblock %]", "equipo.html", "C:\\wamp\\www\\starsoccerG\\ui\\modulos\\equipo\\html\\equipo.html");
    }
}