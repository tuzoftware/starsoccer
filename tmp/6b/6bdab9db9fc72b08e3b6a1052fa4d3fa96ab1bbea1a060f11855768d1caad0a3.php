<?php

/* torneo.html */
class __TwigTemplate_7c06e8a71b13625329d7b5bef9805232d0cfb603d96f32ff4c831716cbaab06f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "torneo.html", 1);
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
        echo " Registro Torneos ";
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
        <span class=\"resalte\">Administraci&oacute;n</span>  <i style=\"font-size:0.6em\" class=\"fa fa-chevron-right text-muted\"></i> <span style=\"font-size:28px\"><span class=\"icon-info-sign sube\"></span> Torneos</span>
    </p>
        <br>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12 col-md-12\">
        <div class=\"card card-primary animated fadeInUp animation-delay-7\">
            <form id=\"frmBuscar\"><fieldset>
                <div class=\"container\">
                    <input type=\"hidden\" name=\"torneo[id_torneo]\" id=\"id_tec\"> <!--invisible-->
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
                    <!--Fecha de Inicio-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Fecha de Inicio:</label>
                                    <input type=\"date\" name=\"filtros[fecha_inicio]\" min=\"2017-05-01\"
                                           max=\"2030-05-01\" class=\"form-control\">
                                </div>
                                <span class=\"errores\" data-error=\"fecha_inicio\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Fecha de Fin-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Fecha de Fin:</label>
                                    <input type=\"date\" name=\"filtros[fecha_fin]\" min=\"2017-05-01\"
                                           max=\"2030-05-01\" class=\"form-control\">
                                </div>
                                <span class=\"errores\" data-error=\"fecha_fin\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Estatus-->
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
                <th width=\"20%\">Nombre</th>
                <th width=\"15%\">Fecha de Inicio</th>
                <th width=\"15%\">Fecha de Fin</th>
                <th width=\"20%\">Logo</th>
                <th width=\"15%\">Estatus</th>
                <th width=\"15%\">Acciones</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
";
        // line 101
        $this->loadTemplate("modalTorneo.html", "torneo.html", 101)->display($context);
    }

    // line 103
    public function block_scripts($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/lobibox/js/notifications.min.js\"></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/datatables-1.10.12/js/datatables.min.js\"></script>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/dataTableComponente.js\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/notificacionComponente.js\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/selectize/js/selectize.min.js\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/selectizeComponente.js\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/bootdialog/js/bootstrap-modal.min.js\"></script>
<script type=\"text/javascript\">
    \$(function () {
        var columnas = [
            {
                \"data\": \"nombre\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"fecha_inicio\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"fecha_fin\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"ruta_logo\",
                \"defaultContent\": \"\"
            }, {
                \"data\": \"estatus\",
                \"defaultContent\": \"\"
            },
            {\"data\": null,
                \"defaultContent\": \"<button class='btn btn-raised btn-primary'>Editar</button>\"
            }
        ];

        var dt= dataTableComponente(\"#tbl_tecnologia\", \"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/torneo/buscar\", columnas, \"#frmBuscar\", 10);
        var selectEstatus= selectizeComponente('[name=\"torneo[estatus]\"]');
        \$(\".form-group\").addClass(\"is-empty\");

        \$('#frmBuscar').submit(function (event) {
            dt.buscar();
            event.preventDefault();
        });

        \$(\"#tbl_tecnologia\").delegate('button', \"click\", function () {
            var datos = dt.obtenerSeleccionado(this);
            modalTipo('Editar Torneo', false, datos);
        });

        \$(\"#btn_nuevo\").on(\"click\", function () {
            baseComponente.limpiarFormulario('#frmAgregar');
            modalTipo(\"Agregar Torneo\", true, null);
        });

        \$(\"#frmAgregar\").submit(function (event) {
            // alert(\"Guardando\");
            \$.post(\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/torneo/guardar\", \$(\"#frmAgregar\").serialize(), function (data) {
                if (data.tipoRespuesta === \"MENSAJE\" && data.tipoMensaje ===\"CORRECTO\") {
                    baseComponente.limpiarFormulario('#frmAgregar');
                    dt.recargar();
                    notificacionComponente.mostrarCorrecto(data.mensaje);
                    \$('#modalTorneo').modal('hide');
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
            //alert(\"hola\");
            if (tipo === false) {
                \$('[name=\"torneo[id_torneo]\"]').val(elemento['id_torneo']);
                \$('[name=\"torneo[nombre]\"]').val(elemento['nombre']);
                \$('[name=\"torneo[fecha_inicio]\"]').val(elemento['fecha_inicio']);
                \$('[name=\"torneo[fecha_fin]\"]').val(elemento['fecha_fin']);
                \$('[name=\"torneo[ruta_logo]\"]').val(elemento['ruta_logo']);

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
            \$('#modalTorneo').modal('show');
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
        return "torneo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 156,  218 => 135,  190 => 110,  186 => 109,  182 => 108,  178 => 107,  174 => 106,  170 => 105,  166 => 104,  159 => 103,  155 => 101,  61 => 9,  58 => 8,  52 => 6,  48 => 5,  44 => 4,  37 => 3,  31 => 2,  11 => 1,);
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
[% block title %] Registro Torneos [% endblock %]
[% block estilos %] [[ parent() ]]
<link rel=\"stylesheet\" href=\"[[base]]/ui/js/base/datatables-1.10.12/css/dataTables-custom.css\">
<link rel=\"stylesheet\" href=\"[[base]]/ui/js/base/lobibox/css/lobibox.min.css\">
<link rel=\"stylesheet\" href=\"[[base]]/ui/js/base/selectize/css/selectize.bootstrap3.css\">
[% endblock %]
[% block contenido %]
<div class=\"row\">
    <div class=\"col-lg-12\" style=\"margin:10px 0 0 0\"><p class=\"titulo\">
        <i class=\"icon2-dependencia-2 sube text-info\"></i>
        <span class=\"resalte\">Administraci&oacute;n</span>  <i style=\"font-size:0.6em\" class=\"fa fa-chevron-right text-muted\"></i> <span style=\"font-size:28px\"><span class=\"icon-info-sign sube\"></span> Torneos</span>
    </p>
        <br>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12 col-md-12\">
        <div class=\"card card-primary animated fadeInUp animation-delay-7\">
            <form id=\"frmBuscar\"><fieldset>
                <div class=\"container\">
                    <input type=\"hidden\" name=\"torneo[id_torneo]\" id=\"id_tec\"> <!--invisible-->
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
                    <!--Fecha de Inicio-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Fecha de Inicio:</label>
                                    <input type=\"date\" name=\"filtros[fecha_inicio]\" min=\"2017-05-01\"
                                           max=\"2030-05-01\" class=\"form-control\">
                                </div>
                                <span class=\"errores\" data-error=\"fecha_inicio\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Fecha de Fin-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Fecha de Fin:</label>
                                    <input type=\"date\" name=\"filtros[fecha_fin]\" min=\"2017-05-01\"
                                           max=\"2030-05-01\" class=\"form-control\">
                                </div>
                                <span class=\"errores\" data-error=\"fecha_fin\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Estatus-->
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
                <th width=\"20%\">Nombre</th>
                <th width=\"15%\">Fecha de Inicio</th>
                <th width=\"15%\">Fecha de Fin</th>
                <th width=\"20%\">Logo</th>
                <th width=\"15%\">Estatus</th>
                <th width=\"15%\">Acciones</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
[% include 'modalTorneo.html' %]
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
            },{
                \"data\": \"fecha_inicio\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"fecha_fin\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"ruta_logo\",
                \"defaultContent\": \"\"
            }, {
                \"data\": \"estatus\",
                \"defaultContent\": \"\"
            },
            {\"data\": null,
                \"defaultContent\": \"<button class='btn btn-raised btn-primary'>Editar</button>\"
            }
        ];

        var dt= dataTableComponente(\"#tbl_tecnologia\", \"[[base]]/torneo/buscar\", columnas, \"#frmBuscar\", 10);
        var selectEstatus= selectizeComponente('[name=\"torneo[estatus]\"]');
        \$(\".form-group\").addClass(\"is-empty\");

        \$('#frmBuscar').submit(function (event) {
            dt.buscar();
            event.preventDefault();
        });

        \$(\"#tbl_tecnologia\").delegate('button', \"click\", function () {
            var datos = dt.obtenerSeleccionado(this);
            modalTipo('Editar Torneo', false, datos);
        });

        \$(\"#btn_nuevo\").on(\"click\", function () {
            baseComponente.limpiarFormulario('#frmAgregar');
            modalTipo(\"Agregar Torneo\", true, null);
        });

        \$(\"#frmAgregar\").submit(function (event) {
            // alert(\"Guardando\");
            \$.post(\"[[base]]/torneo/guardar\", \$(\"#frmAgregar\").serialize(), function (data) {
                if (data.tipoRespuesta === \"MENSAJE\" && data.tipoMensaje ===\"CORRECTO\") {
                    baseComponente.limpiarFormulario('#frmAgregar');
                    dt.recargar();
                    notificacionComponente.mostrarCorrecto(data.mensaje);
                    \$('#modalTorneo').modal('hide');
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
            //alert(\"hola\");
            if (tipo === false) {
                \$('[name=\"torneo[id_torneo]\"]').val(elemento['id_torneo']);
                \$('[name=\"torneo[nombre]\"]').val(elemento['nombre']);
                \$('[name=\"torneo[fecha_inicio]\"]').val(elemento['fecha_inicio']);
                \$('[name=\"torneo[fecha_fin]\"]').val(elemento['fecha_fin']);
                \$('[name=\"torneo[ruta_logo]\"]').val(elemento['ruta_logo']);

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
            \$('#modalTorneo').modal('show');
        }
        \$(\"#estatus_busqueda\").on('change',function(){
            if (\$(this).val() != '') {
                \$(this).closest('div.form-group').removeClass(\"is-empty\");
            };
        });
    });
</script>
[% endblock %]", "torneo.html", "C:\\wamp64\\www\\starsoccerprueba\\ui\\modulos\\torneo\\html\\torneo.html");
    }
}
