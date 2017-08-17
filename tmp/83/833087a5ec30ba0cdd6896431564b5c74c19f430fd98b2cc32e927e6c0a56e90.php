<?php

/* usuario.html */
class __TwigTemplate_b018da5d578f33c7b2fb351ab0fde34d4dd81c4b8254bee3d2ea3bc5967d1cae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html", "usuario.html", 2);
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
        echo " Registro Usuarios ";
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
        <span class=\"resalte\">Administraci&oacute;n</span>  <i style=\"font-size:0.6em\" class=\"fa fa-chevron-right text-muted\"></i> <span style=\"font-size:28px\"><span class=\"icon-info-sign sube\"></span> Usuarios</span>
    </p>
        <br>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-lg-12 col-md-12\">
        <div class=\"card card-primary animated fadeInUp animation-delay-7\">
            <form id=\"frmBuscar\"><fieldset>

                <div class=\"container\">
                    <!--Id Usuario-->
                    <div class=\"row\">
                            <div class=\"col-md-11\">
                                <div class=\"form-group label-floating\">
                                    <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-filter\"></i>
                                    </span>
                                        <label class=\"control-label\">Id Usuario</label>
                                        <input type=\"text\" name=\"filtros[id_usuario]\" class=\"form-control\">
                                    </div>
                                    <span class=\"errores\" data-error=\"id_usuario\"><i class=\"fa fa-times\"></i></span>
                                </div>
                            </div>
                        </div>
                    <!--Nombre Usuario-->
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
                    <!--Apellido Paterno-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-filter\"></i>
                                        </span>
                                    <label class=\"control-label\">Apellido Paterno</label>
                                    <input type=\"text\" name=\"filtros[apellido_paterno]\" class=\"form-control\">
                                </div>
                                <span class=\"errores\" data-error=\"apellido_paterno\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Rol-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-filter\"></i>
                                    </span>
                                    <label class=\"control-label\">Rol:</label>
                                    <select id=\"rol_busqueda\" name=\"filtros[rol_busqueda]\" placeholder=\"Seleccionar\">
                                        <option value=\"\"></option>
                                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rol"]) ? $context["rol"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["id_rol"]) {
            // line 83
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["id_rol"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["id_rol"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id_rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                    </select>
                                </div>
                                <span class=\"errores\" data-error=\"rol_busqueda\"><i class=\"fa fa-times\"></i></span>
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
        <table class=\"display\" id=\"tabla_usuario_datos\" width=\"100%\">
            <thead>
            <tr>
                <th width=\"10%\">Id Usuario</th>
                <th width=\"10%\">Nombre</th>
                <th width=\"10%\">Apellido Paterno</th>
                <th width=\"10%\">Apellido Materno</th>
                <th width=\"10%\">Activo</th>
                <th width=\"10%\">Bloqueado</th>
                <th width=\"40%\">Acciones</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
";
        // line 128
        $this->loadTemplate("modalusuario.html", "usuario.html", 128)->display($context);
    }

    // line 130
    public function block_scripts($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/lobibox/js/notifications.min.js\"></script>
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/datatables-1.10.12/js/datatables.min.js\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/dataTableComponente.js\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/notificacionComponente.js\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/selectize/js/selectize.min.js\"></script>
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/componentes/selectizeComponente.js\"></script>
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/js/base/bootdialog/js/bootstrap-modal.min.js\"></script>
<script type=\"text/javascript\">
    \$(function () {
        var columnas = [
            {
                \"data\": \"id_usuario\",
                \"defaultContent\": \"\"
            }, {
                \"data\": \"nombre\",
                \"defaultContent\": \"\"
            }, {
                \"data\": \"apellido_paterno\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"apellido_materno\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"activo\",
                \"defaultContent\": \"\"
            }, {
                \"data\": \"bloqueado\",
                \"defaultContent\": \"\"
            },
            {\"data\": null,
                \"defaultContent\": \"<button name='btn_editar' id='btn_editar' type='button' class='btn btn-raised btn-primary btn-sm'>Editar</button> <button class='btn btn-raised btn-sm'>Cambiar Activación</button> <button class='btn btn-raised btn-sm'>Cambiar Bloqueo</button> <button class='btn btn-raised btn-sm'>Resetear Password</button>\"
            }
        ];

        var dt= dataTableComponente(\"#tabla_usuario_datos\", \"";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/usuarios/buscar\", columnas, \"#frmBuscar\", 10);
        var selectSexo = selectizeComponente('[name=\"usuario_datos[sexo]\"]');//modal
        var selectIdRol = selectizeComponente('[name=\"usuario_rol[id_rol]\"]');//modal

        var selectRolFiltro = selectizeComponente('[name=\"filtros[rol_busqueda]\"]');//rol

        \$(\".form-group\").addClass(\"is-empty\");

        \$('#frmBuscar').submit(function (event) {
            dt.buscar();
            event.preventDefault();
        });

        \$(\"#tabla_usuario_datos\").on(\"click\", \"button#btn_editar\", function () {
            var datos = dt.obtenerSeleccionado(this);
            modalTipo('Editar Usuario', false, datos);
        });

        \$(\"#btn_nuevo\").on(\"click\", function () {
            baseComponente.limpiarFormulario('#frmAgregar');//limpiando modal
            modalTipo(\"Agregar Usuario\", true, null);
        });

        \$(\"#frmAgregar\").submit(function (event) {
            \$.post(\"";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/usuarios/guardar\", \$(\"#frmAgregar\").serialize(), function (data) {
                if (data.tipoRespuesta === \"MENSAJE\" && data.tipoMensaje ===\"CORRECTO\") {
                    baseComponente.limpiarFormulario('#frmAgregar');
                    dt.recargar();
                    notificacionComponente.mostrarCorrecto(data.mensaje);
                    \$('#modalUsuario').modal('hide');
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
//
//        //Modal
        function modalTipo(titulo, tipo, elemento){
            baseComponente.ocultarErrores();
            baseComponente.limpiarFormulario(\"#frmAgregar\");
            if (tipo === false) {
                //usuario
                \$('[name=\"usuario[id_usuario]\"]').val(elemento['id_usuario']);
                //for(usuario in usuarios)
                //nickname = ";
        // line 225
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "contrasenia", array())), "html", null, true);
        echo ";
                \$('[name=\"usuario[contrasenia]\"]').val(elemento['contrasenia']);
                //endfor

                //usuario_datos
                \$('[name=\"usuario_datos[id_usuario]\"]').val(elemento['id_usuario']);//id_usuario
                \$('[name=\"usuario_datos[nombre]\"]').val(elemento['nombre']);
                \$('[name=\"usuario_datos[apellido_paterno]\"]').val(elemento['apellido_paterno']);
                \$('[name=\"usuario_datos[apellido_materno]\"]').val(elemento['apellido_materno']);
                //\$('[name=\"usuario_datos[sexo]\"]').val(elemento['sexo']);
                selectSexo.setValue(elemento['sexo']);
                \$('[name=\"usuario_datos[fecha_nacimiento]\"]').val(elemento['fecha_nacimiento']);
                \$('[name=\"usuario_datos[email]\"]').val(elemento['email']);
                //usuario_rol
                \$('[name=\"usuario_rol[id_usuario_rol]\"]').val(elemento['id_usuario_rol']);//id_usuario_rol
                \$('[name=\"usuario_rol[id_usuario]\"]').val(elemento['id_usuario']);//id_usuario
                \$(\".modal-content .form-group\").removeClass(\"is-empty\");
                selectIdRol.setValue(elemento['id_rol']);

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
            \$('#modalUsuario').modal('show');
        }
        \$(\"#rol_busqueda\").on('change',function(){
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
        return "usuario.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 225,  288 => 189,  261 => 165,  230 => 137,  226 => 136,  222 => 135,  218 => 134,  214 => 133,  210 => 132,  206 => 131,  199 => 130,  195 => 128,  150 => 85,  139 => 83,  135 => 82,  61 => 10,  58 => 9,  52 => 7,  48 => 6,  44 => 5,  37 => 4,  31 => 3,  11 => 2,);
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
[% block title %] Registro Usuarios [% endblock %]
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
        <span class=\"resalte\">Administraci&oacute;n</span>  <i style=\"font-size:0.6em\" class=\"fa fa-chevron-right text-muted\"></i> <span style=\"font-size:28px\"><span class=\"icon-info-sign sube\"></span> Usuarios</span>
    </p>
        <br>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-lg-12 col-md-12\">
        <div class=\"card card-primary animated fadeInUp animation-delay-7\">
            <form id=\"frmBuscar\"><fieldset>

                <div class=\"container\">
                    <!--Id Usuario-->
                    <div class=\"row\">
                            <div class=\"col-md-11\">
                                <div class=\"form-group label-floating\">
                                    <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-filter\"></i>
                                    </span>
                                        <label class=\"control-label\">Id Usuario</label>
                                        <input type=\"text\" name=\"filtros[id_usuario]\" class=\"form-control\">
                                    </div>
                                    <span class=\"errores\" data-error=\"id_usuario\"><i class=\"fa fa-times\"></i></span>
                                </div>
                            </div>
                        </div>
                    <!--Nombre Usuario-->
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
                    <!--Apellido Paterno-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"fa fa-filter\"></i>
                                        </span>
                                    <label class=\"control-label\">Apellido Paterno</label>
                                    <input type=\"text\" name=\"filtros[apellido_paterno]\" class=\"form-control\">
                                </div>
                                <span class=\"errores\" data-error=\"apellido_paterno\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Rol-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-filter\"></i>
                                    </span>
                                    <label class=\"control-label\">Rol:</label>
                                    <select id=\"rol_busqueda\" name=\"filtros[rol_busqueda]\" placeholder=\"Seleccionar\">
                                        <option value=\"\"></option>
                                        [% for id_rol in rol %]
                                        <option value=\"[[id_rol]]\">[[id_rol]]</option>
                                        [% endfor %]
                                    </select>
                                </div>
                                <span class=\"errores\" data-error=\"rol_busqueda\"><i class=\"fa fa-times\"></i></span>
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
        <table class=\"display\" id=\"tabla_usuario_datos\" width=\"100%\">
            <thead>
            <tr>
                <th width=\"10%\">Id Usuario</th>
                <th width=\"10%\">Nombre</th>
                <th width=\"10%\">Apellido Paterno</th>
                <th width=\"10%\">Apellido Materno</th>
                <th width=\"10%\">Activo</th>
                <th width=\"10%\">Bloqueado</th>
                <th width=\"40%\">Acciones</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
[% include 'modalusuario.html' %]
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
                \"data\": \"id_usuario\",
                \"defaultContent\": \"\"
            }, {
                \"data\": \"nombre\",
                \"defaultContent\": \"\"
            }, {
                \"data\": \"apellido_paterno\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"apellido_materno\",
                \"defaultContent\": \"\"
            },{
                \"data\": \"activo\",
                \"defaultContent\": \"\"
            }, {
                \"data\": \"bloqueado\",
                \"defaultContent\": \"\"
            },
            {\"data\": null,
                \"defaultContent\": \"<button name='btn_editar' id='btn_editar' type='button' class='btn btn-raised btn-primary btn-sm'>Editar</button> <button class='btn btn-raised btn-sm'>Cambiar Activación</button> <button class='btn btn-raised btn-sm'>Cambiar Bloqueo</button> <button class='btn btn-raised btn-sm'>Resetear Password</button>\"
            }
        ];

        var dt= dataTableComponente(\"#tabla_usuario_datos\", \"[[base]]/usuarios/buscar\", columnas, \"#frmBuscar\", 10);
        var selectSexo = selectizeComponente('[name=\"usuario_datos[sexo]\"]');//modal
        var selectIdRol = selectizeComponente('[name=\"usuario_rol[id_rol]\"]');//modal

        var selectRolFiltro = selectizeComponente('[name=\"filtros[rol_busqueda]\"]');//rol

        \$(\".form-group\").addClass(\"is-empty\");

        \$('#frmBuscar').submit(function (event) {
            dt.buscar();
            event.preventDefault();
        });

        \$(\"#tabla_usuario_datos\").on(\"click\", \"button#btn_editar\", function () {
            var datos = dt.obtenerSeleccionado(this);
            modalTipo('Editar Usuario', false, datos);
        });

        \$(\"#btn_nuevo\").on(\"click\", function () {
            baseComponente.limpiarFormulario('#frmAgregar');//limpiando modal
            modalTipo(\"Agregar Usuario\", true, null);
        });

        \$(\"#frmAgregar\").submit(function (event) {
            \$.post(\"[[base]]/usuarios/guardar\", \$(\"#frmAgregar\").serialize(), function (data) {
                if (data.tipoRespuesta === \"MENSAJE\" && data.tipoMensaje ===\"CORRECTO\") {
                    baseComponente.limpiarFormulario('#frmAgregar');
                    dt.recargar();
                    notificacionComponente.mostrarCorrecto(data.mensaje);
                    \$('#modalUsuario').modal('hide');
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
//
//        //Modal
        function modalTipo(titulo, tipo, elemento){
            baseComponente.ocultarErrores();
            baseComponente.limpiarFormulario(\"#frmAgregar\");
            if (tipo === false) {
                //usuario
                \$('[name=\"usuario[id_usuario]\"]').val(elemento['id_usuario']);
                //for(usuario in usuarios)
                //nickname = [[ usuario.contrasenia|json_encode() ]];
                \$('[name=\"usuario[contrasenia]\"]').val(elemento['contrasenia']);
                //endfor

                //usuario_datos
                \$('[name=\"usuario_datos[id_usuario]\"]').val(elemento['id_usuario']);//id_usuario
                \$('[name=\"usuario_datos[nombre]\"]').val(elemento['nombre']);
                \$('[name=\"usuario_datos[apellido_paterno]\"]').val(elemento['apellido_paterno']);
                \$('[name=\"usuario_datos[apellido_materno]\"]').val(elemento['apellido_materno']);
                //\$('[name=\"usuario_datos[sexo]\"]').val(elemento['sexo']);
                selectSexo.setValue(elemento['sexo']);
                \$('[name=\"usuario_datos[fecha_nacimiento]\"]').val(elemento['fecha_nacimiento']);
                \$('[name=\"usuario_datos[email]\"]').val(elemento['email']);
                //usuario_rol
                \$('[name=\"usuario_rol[id_usuario_rol]\"]').val(elemento['id_usuario_rol']);//id_usuario_rol
                \$('[name=\"usuario_rol[id_usuario]\"]').val(elemento['id_usuario']);//id_usuario
                \$(\".modal-content .form-group\").removeClass(\"is-empty\");
                selectIdRol.setValue(elemento['id_rol']);

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
            \$('#modalUsuario').modal('show');
        }
        \$(\"#rol_busqueda\").on('change',function(){
            if (\$(this).val() != '') {
                \$(this).closest('div.form-group').removeClass(\"is-empty\");
            };
        });
    });
</script>
[% endblock %]", "usuario.html", "C:\\wamp\\www\\starsoccer\\ui\\modulos\\usuario\\html\\usuario.html");
    }
}
