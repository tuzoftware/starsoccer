<?php

/* modalCalendario.html */
class __TwigTemplate_3abf72fcaa92e371282034b2dd5eb69525ba9ec17925313b2d6f638a474ff450 extends Twig_Template
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
        echo "<div class=\"modal fade modal-danger\" id=\"modalCalendario\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <form id=\"frmAgregar\" class=\"pArrow-p-form p-form-pArrow-extra2color2\">
        <input type=\"\" name=\"jornada[id_juego]\" id=\"id_juego\"> <!--invisible--><!--autoincrementable-->
        <input type=\"\" name=\"jornada[id_torneo]\" id=\"id_torneo\"> <!--recuperar id por nombre-->
        <input type=\"\" name=\"jornada[id_equipo_local]\" id=\"id_equipo_local\"> <!--recuperar id por nombre-->
        <input type=\"\" name=\"jornada[id_equipo_visita]\" id=\"id_equipo_visita\"> <!--recuperar id por nombre-->
        <div class=\"modal-dialog\" style=\"width:900px;height:600px;\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header primary\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"tituloModal\"></h4>
                </div>
                <div class=\"modal-body\">
                    <!--Torneo-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Torneo:</label> <!--Nombre del torneo-->
                                    <select name=\"jornada[torneo]\" placeholder=\"Seleccionar\" required=\"required\">
                                        <option value=\"\"></option>
                                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["torneo"]);
        foreach ($context['_seq'] as $context["_key"] => $context["torneo"]) {
            // line 27
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["torneo"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["torneo"], "nombre", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torneo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                                    </select>
                                </div>
                                <span class=\"errores\" data-error=\"torneo\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--equipo local-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Equipo Local:</label>
                                    <input type=\"text\" name=\"jornada[equipo_local]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"equipo_local\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--equipo visita-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Equipo Visita:</label>
                                    <input type=\"text\" name=\"jornada[equipo_visita]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"equipo_visita\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--numero jornada-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Numero Jornada:</label>
                                    <input type=\"number\" name=\"jornada[numero_jornada]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"numero_jornada\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Fecha-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Fecha:</label>
                                    <input type=\"date\" name=\"jornada[fecha]\" min=\"2017-05-01\"
                                           max=\"2030-05-01\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"fecha\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--hora-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group \">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Hora:</label>
                                    <input type=\"time\" name=\"jornada[hora]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"hora\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Estatus-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Estatus:</label>
                                    <input type=\"text\" name=\"jornada[estatus]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"estatus\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-raised btn-primary \" data-dismiss=\"modal\">Cancelar</button>&nbsp;
                    <button type=\"submit\" class=\"btn btn-raised btn-success pull-right\">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "modalCalendario.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 29,  50 => 27,  46 => 26,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade modal-danger\" id=\"modalCalendario\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <form id=\"frmAgregar\" class=\"pArrow-p-form p-form-pArrow-extra2color2\">
        <input type=\"\" name=\"jornada[id_juego]\" id=\"id_juego\"> <!--invisible--><!--autoincrementable-->
        <input type=\"\" name=\"jornada[id_torneo]\" id=\"id_torneo\"> <!--recuperar id por nombre-->
        <input type=\"\" name=\"jornada[id_equipo_local]\" id=\"id_equipo_local\"> <!--recuperar id por nombre-->
        <input type=\"\" name=\"jornada[id_equipo_visita]\" id=\"id_equipo_visita\"> <!--recuperar id por nombre-->
        <div class=\"modal-dialog\" style=\"width:900px;height:600px;\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header primary\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"tituloModal\"></h4>
                </div>
                <div class=\"modal-body\">
                    <!--Torneo-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Torneo:</label> <!--Nombre del torneo-->
                                    <select name=\"jornada[torneo]\" placeholder=\"Seleccionar\" required=\"required\">
                                        <option value=\"\"></option>
                                        [% for torneo in torneo %]
                                        <option value=\"[[torneo]]\">[[torneo.nombre]]</option>
                                        [% endfor %]
                                    </select>
                                </div>
                                <span class=\"errores\" data-error=\"torneo\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--equipo local-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Equipo Local:</label>
                                    <input type=\"text\" name=\"jornada[equipo_local]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"equipo_local\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--equipo visita-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Equipo Visita:</label>
                                    <input type=\"text\" name=\"jornada[equipo_visita]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"equipo_visita\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--numero jornada-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Numero Jornada:</label>
                                    <input type=\"number\" name=\"jornada[numero_jornada]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"numero_jornada\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Fecha-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Fecha:</label>
                                    <input type=\"date\" name=\"jornada[fecha]\" min=\"2017-05-01\"
                                           max=\"2030-05-01\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"fecha\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--hora-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group \">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Hora:</label>
                                    <input type=\"time\" name=\"jornada[hora]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"hora\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Estatus-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Estatus:</label>
                                    <input type=\"text\" name=\"jornada[estatus]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"estatus\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-raised btn-primary \" data-dismiss=\"modal\">Cancelar</button>&nbsp;
                    <button type=\"submit\" class=\"btn btn-raised btn-success pull-right\">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>", "modalCalendario.html", "C:\\wamp\\www\\starsoccerP\\ui\\modulos\\calendario\\html\\modalcalendario.html");
    }
}