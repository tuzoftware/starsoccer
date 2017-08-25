<?php

/* calendario.html */
class __TwigTemplate_9d86305422afc8b4aa22a109555f30211f95a30548026a939a7021f2b4af1e51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html", "calendario.html", 2);
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
        echo " Registro Calendario ";
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
        <span class=\"resalte\">Administraci&oacute;n</span>  <i style=\"font-size:0.6em\" class=\"fa fa-chevron-right text-muted\"></i> <span style=\"font-size:28px\"><span class=\"icon-info-sign sube\"></span> Calendario</span>
    </p>
        <br>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-lg-12 col-md-12\">
        <div class=\"card card-primary animated fadeInUp animation-delay-7\">
            <form id=\"frmBuscar\"><fieldset>

                <div class=\"container\">
                    <!--Equipo-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-filter\"></i>
                                    </span>
                                    <label class=\"control-label\">Equipo</label>
                                    <input type=\"text\" name=\"filtros[equipo_busqueda]\" class=\"form-control\">
                                </div>
                                <span class=\"errores\" data-error=\"equipo_busqueda\"><i class=\"fa fa-times\"></i></span>
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
                <th width=\"20%\">Nombre del Torneo</th>
                <th width=\"20%\">Equipo Local</th>
                <th width=\"20%\">Equipo Visitante</th>
                <th width=\"10%\">Numero de Jornada</th>
                <th width=\"10%\">Fecha</th>
                <th width=\"10%\">Hora</th>
                <th width=\"10%\">Acci&oacute;n</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
";
        // line 76
        $this->loadTemplate("modalCalendario.html", "calendario.html", 76)->display($context);
    }

    // line 78
    public function block_scripts($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/lobibox/js/notifications.min.js\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/datatables-1.10.12/js/datatables.min.js\"></script>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/dataTableComponente.js\"></script>
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/notificacionComponente.js\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/selectize/js/selectize.min.js\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/selectizeComponente.js\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/bootdialog/js/bootstrap-modal.min.js\"></script>
<script type=\"text/javascript\">
    \$(function () {
        var columnas = [
            {
                \"data\": \"nombre\",
                \"defaultContent\": \"\"
            }, {
                \"data\": \"equipolocal\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"equipovisita\",
                \"defaultContent\": \"\"
            },{
                  \"data\": \"numero_jornada\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"fecha\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"hora\",
                \"defaultContent\": \"\"
            },
            {\"data\": null,
                \"defaultContent\": \"<button class='btn btn-raised btn-primary'>Editar</button>\"
            }
        ];

        var dt = dataTableComponente(\"#tbl_tecnologia\", \"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/calendario/buscar\", columnas, \"#frmBuscar\", 10);
        //var  selectTorneo = obtenerSeleccionado('[name=\"jornada[torneo]\"]');
        //var  selectTorneo = selector('[name=\"jornada[torneo]\"]');
        //var selectTorneo = getElements('[name=\"jornada[torneo]\"]');
        //var selectTorneo = selectizeComponente('[name=\"jornada[torneo]\"]','[value=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["torneo"]) ? $context["torneo"] : null), "html", null, true);
        echo "\"]');
        var selectTorneo = selectizeComponente('[name=\"jornada[torneo]\"]');
//        var selectTorneo = selectizeComponente({
//            data: '[name=\"jornada[torneo]\"]',
//            allowEmptyOption: true,
//            create: true
//        });
        //var porId=document.getElementById(\"jornada[torneo]\").value;
        //var selectTorneoFiltro = selectizeComponente('[name=\"filtros[estatus_busqueda]\"]');


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
            modalTipo(\"Agregar calendario\", true, null);
        });

        \$(\"#frmAgregar\").submit(function (event) {
            \$.post(\"";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/calendario/guardar\", \$(\"#frmAgregar\").serialize(), function (data) {
                if (data.tipoRespuesta === \"MENSAJE\" && data.tipoMensaje ===\"CORRECTO\") {
                    baseComponente.limpiarFormulario('#frmAgregar');
                    dt.recargar();
                    notificacionComponente.mostrarCorrecto(data.mensaje);
                    \$('#modalCalendario').modal('hide');
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
                \$('[name=\"jornada[id_juego]\"]').val(elemento['id_juego']);
                \$('[name=\"jornada[id_torneo]\"]').val(elemento['id_torneo']);
                \$('[name=\"jornada[id_equipo_local]\"]').val(elemento['id_equipo_local']);
                \$('[name=\"jornada[id_equipo_visita]\"]').val(elemento['id_equipo_visita']);
                \$('[name=\"jornada[torneo]\"]').val(elemento['nombre']);
                \$('[name=\"jornada[equipo_local]\"]').val(elemento['equipolocal']);
                \$('[name=\"jornada[equipo_visita]\"]').val(elemento['equipovisita']);
                \$('[name=\"jornada[numero_jornada]\"]').val(elemento['numero_jornada']);
                \$('[name=\"jornada[fecha]\"]').val(elemento['fecha']);
                \$('[name=\"jornada[hora]\"]').val(elemento['hora']);
                \$('[name=\"jornada[estatus]\"]').val(elemento['estatus']);
                \$(\".modal-content .form-group\").removeClass(\"is-empty\");
                //selectTorneo.setValue(elemento['nombre']);
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
            \$('#modalCalendario').modal('show');
        }
        \$(\"#equipo_busqueda\").on('change',function(){
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
        return "calendario.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 146,  202 => 117,  195 => 113,  164 => 85,  160 => 84,  156 => 83,  152 => 82,  148 => 81,  144 => 80,  140 => 79,  133 => 78,  129 => 76,  61 => 10,  58 => 9,  52 => 7,  48 => 6,  44 => 5,  37 => 4,  31 => 3,  11 => 2,);
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
[% block title %] Registro Calendario [% endblock %]
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
        <span class=\"resalte\">Administraci&oacute;n</span>  <i style=\"font-size:0.6em\" class=\"fa fa-chevron-right text-muted\"></i> <span style=\"font-size:28px\"><span class=\"icon-info-sign sube\"></span> Calendario</span>
    </p>
        <br>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-lg-12 col-md-12\">
        <div class=\"card card-primary animated fadeInUp animation-delay-7\">
            <form id=\"frmBuscar\"><fieldset>

                <div class=\"container\">
                    <!--Equipo-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-filter\"></i>
                                    </span>
                                    <label class=\"control-label\">Equipo</label>
                                    <input type=\"text\" name=\"filtros[equipo_busqueda]\" class=\"form-control\">
                                </div>
                                <span class=\"errores\" data-error=\"equipo_busqueda\"><i class=\"fa fa-times\"></i></span>
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
                <th width=\"20%\">Nombre del Torneo</th>
                <th width=\"20%\">Equipo Local</th>
                <th width=\"20%\">Equipo Visitante</th>
                <th width=\"10%\">Numero de Jornada</th>
                <th width=\"10%\">Fecha</th>
                <th width=\"10%\">Hora</th>
                <th width=\"10%\">Acci&oacute;n</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
[% include 'modalCalendario.html' %]
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
                \"data\": \"equipolocal\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"equipovisita\",
                \"defaultContent\": \"\"
            },{
                  \"data\": \"numero_jornada\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"fecha\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"hora\",
                \"defaultContent\": \"\"
            },
            {\"data\": null,
                \"defaultContent\": \"<button class='btn btn-raised btn-primary'>Editar</button>\"
            }
        ];

        var dt = dataTableComponente(\"#tbl_tecnologia\", \"[[base]]/calendario/buscar\", columnas, \"#frmBuscar\", 10);
        //var  selectTorneo = obtenerSeleccionado('[name=\"jornada[torneo]\"]');
        //var  selectTorneo = selector('[name=\"jornada[torneo]\"]');
        //var selectTorneo = getElements('[name=\"jornada[torneo]\"]');
        //var selectTorneo = selectizeComponente('[name=\"jornada[torneo]\"]','[value=\"[[torneo]]\"]');
        var selectTorneo = selectizeComponente('[name=\"jornada[torneo]\"]');
//        var selectTorneo = selectizeComponente({
//            data: '[name=\"jornada[torneo]\"]',
//            allowEmptyOption: true,
//            create: true
//        });
        //var porId=document.getElementById(\"jornada[torneo]\").value;
        //var selectTorneoFiltro = selectizeComponente('[name=\"filtros[estatus_busqueda]\"]');


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
            modalTipo(\"Agregar calendario\", true, null);
        });

        \$(\"#frmAgregar\").submit(function (event) {
            \$.post(\"[[base]]/calendario/guardar\", \$(\"#frmAgregar\").serialize(), function (data) {
                if (data.tipoRespuesta === \"MENSAJE\" && data.tipoMensaje ===\"CORRECTO\") {
                    baseComponente.limpiarFormulario('#frmAgregar');
                    dt.recargar();
                    notificacionComponente.mostrarCorrecto(data.mensaje);
                    \$('#modalCalendario').modal('hide');
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
                \$('[name=\"jornada[id_juego]\"]').val(elemento['id_juego']);
                \$('[name=\"jornada[id_torneo]\"]').val(elemento['id_torneo']);
                \$('[name=\"jornada[id_equipo_local]\"]').val(elemento['id_equipo_local']);
                \$('[name=\"jornada[id_equipo_visita]\"]').val(elemento['id_equipo_visita']);
                \$('[name=\"jornada[torneo]\"]').val(elemento['nombre']);
                \$('[name=\"jornada[equipo_local]\"]').val(elemento['equipolocal']);
                \$('[name=\"jornada[equipo_visita]\"]').val(elemento['equipovisita']);
                \$('[name=\"jornada[numero_jornada]\"]').val(elemento['numero_jornada']);
                \$('[name=\"jornada[fecha]\"]').val(elemento['fecha']);
                \$('[name=\"jornada[hora]\"]').val(elemento['hora']);
                \$('[name=\"jornada[estatus]\"]').val(elemento['estatus']);
                \$(\".modal-content .form-group\").removeClass(\"is-empty\");
                //selectTorneo.setValue(elemento['nombre']);
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
            \$('#modalCalendario').modal('show');
        }
        \$(\"#equipo_busqueda\").on('change',function(){
            if (\$(this).val() != '') {
                \$(this).closest('div.form-group').removeClass(\"is-empty\");
            };
        });
    });
</script>
[% endblock %]", "calendario.html", "C:\\wamp\\www\\starsoccerP\\ui\\modulos\\calendario\\html\\calendario.html");
    }
}
