<?php

/* modalequipo.html */
class __TwigTemplate_d21f3e5d90eeb64e921c520269606b1d2d250977c5bd0d6d9543617b12df4dd8 extends Twig_Template
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
        echo "<div class=\"modal fade modal-danger\" id=\"modalEquipo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <form id=\"frmAgregar\" class=\"pArrow-p-form p-form-pArrow-extra2color2\">
        <!--Id Equipo-->
        <input type=\"hidden\" name=\"equipo[id_equipo]\" id=\"id_tec\">
        <div class=\"modal-dialog\" style=\"width:900px;height:600px;\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header primary\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"tituloModal\"></h4>
                </div>
                <div class=\"modal-body\">
                    <!--Nombre-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Nombre:</label>
                                    <input type=\"text\" name=\"equipo[nombre]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"nombre\"><i class=\"fa fa-times\"></i></span>
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
                                    <input type=\"date\" name=\"equipo[fecha_fundacion]\" min=\"2000-01-01\" max=\"2030-05-01\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"fecha_fundacion\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Ruta de Logo-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Ruta del Logo:</label>
                                    <input type=\"text\" name=\"equipo[ruta_logo]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"ruta_logo\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Estatus-->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Estatus:</label>
                                    <select name=\"equipo[estatus]\" placeholder=\"Seleccionar\">
                                        <option value=\"\"></option>
                                        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estados"]) ? $context["estados"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["estatus"]) {
            // line 70
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
        // line 72
        echo "                                    </select>
                                </div>
                                <span class=\"errores\" data-error=\"estatus\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Botones-->
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
        return "modalequipo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 72,  93 => 70,  89 => 69,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade modal-danger\" id=\"modalEquipo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <form id=\"frmAgregar\" class=\"pArrow-p-form p-form-pArrow-extra2color2\">
        <!--Id Equipo-->
        <input type=\"hidden\" name=\"equipo[id_equipo]\" id=\"id_tec\">
        <div class=\"modal-dialog\" style=\"width:900px;height:600px;\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header primary\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"tituloModal\"></h4>
                </div>
                <div class=\"modal-body\">
                    <!--Nombre-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Nombre:</label>
                                    <input type=\"text\" name=\"equipo[nombre]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"nombre\"><i class=\"fa fa-times\"></i></span>
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
                                    <input type=\"date\" name=\"equipo[fecha_fundacion]\" min=\"2000-01-01\" max=\"2030-05-01\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"fecha_fundacion\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Ruta de Logo-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Ruta del Logo:</label>
                                    <input type=\"text\" name=\"equipo[ruta_logo]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"ruta_logo\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Estatus-->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Estatus:</label>
                                    <select name=\"equipo[estatus]\" placeholder=\"Seleccionar\">
                                        <option value=\"\"></option>
                                        [% for estatus in estados %]
                                        <option value=\"[[estatus]]\">[[estatus]]</option>
                                        [% endfor %]
                                    </select>
                                </div>
                                <span class=\"errores\" data-error=\"estatus\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Botones-->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-raised btn-primary \" data-dismiss=\"modal\">Cancelar</button>&nbsp;
                    <button type=\"submit\" class=\"btn btn-raised btn-success pull-right\">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>", "modalequipo.html", "C:\\wamp\\www\\starsoccerG\\ui\\modulos\\equipo\\html\\modalequipo.html");
    }
}
