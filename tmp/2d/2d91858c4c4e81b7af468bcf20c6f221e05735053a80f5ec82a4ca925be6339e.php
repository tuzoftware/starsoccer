<?php

/* modalTorneo.html */
class __TwigTemplate_5ff63d3abd3a1fb081f5b96ecd1bcd8af76ece8bc758b72eb5c9c4e5bc78d6bf extends Twig_Template
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
        echo "<div class=\"modal fade modal-danger\" id=\"modalTorneo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <form id=\"frmAgregar\" class=\"pArrow-p-form p-form-pArrow-extra2color2\">
        <input type=\"hidden\" name=\"torneo[id_torneo]\" id=\"id_tec\"> <!--invisible-->
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
                                    <input type=\"text\" name=\"torneo[nombre]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"nombre\"><i class=\"fa fa-times\"></i></span>
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
                                    <input type=\"date\" name=\"torneo[fecha_inicio]\" min=\"2017-05-01\"
                                           max=\"2030-05-01\" class=\"form-control\" required=\"required\">
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
                                    <input type=\"date\" name=\"torneo[fecha_fin]\" min=\"2017-05-01\"
                                           max=\"2030-05-01\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"fecha_fin\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Logo-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Logo:</label>
                                    <input type=\"text\" name=\"torneo[ruta_logo]\" class=\"form-control\" required=\"required\">
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
                                    <select name=\"torneo[estatus]\" placeholder=\"Seleccionar\">
                                        <option value=\"\"></option>
                                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estados"]) ? $context["estados"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["estatus"]) {
            // line 86
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
        // line 88
        echo "                                    </select>
                                </div>
                                <span class=\"errores\" data-error=\"estatus\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>                </div>
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
        return "modalTorneo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 88,  109 => 86,  105 => 85,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade modal-danger\" id=\"modalTorneo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <form id=\"frmAgregar\" class=\"pArrow-p-form p-form-pArrow-extra2color2\">
        <input type=\"hidden\" name=\"torneo[id_torneo]\" id=\"id_tec\"> <!--invisible-->
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
                                    <input type=\"text\" name=\"torneo[nombre]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"nombre\"><i class=\"fa fa-times\"></i></span>
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
                                    <input type=\"date\" name=\"torneo[fecha_inicio]\" min=\"2017-05-01\"
                                           max=\"2030-05-01\" class=\"form-control\" required=\"required\">
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
                                    <input type=\"date\" name=\"torneo[fecha_fin]\" min=\"2017-05-01\"
                                           max=\"2030-05-01\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"fecha_fin\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <!--Logo-->
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Logo:</label>
                                    <input type=\"text\" name=\"torneo[ruta_logo]\" class=\"form-control\" required=\"required\">
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
                                    <select name=\"torneo[estatus]\" placeholder=\"Seleccionar\">
                                        <option value=\"\"></option>
                                        [% for estatus in estados %]
                                        <option value=\"[[estatus]]\">[[estatus]]</option>
                                        [% endfor %]
                                    </select>
                                </div>
                                <span class=\"errores\" data-error=\"estatus\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-raised btn-primary \" data-dismiss=\"modal\">Cancelar</button>&nbsp;
                    <button type=\"submit\" class=\"btn btn-raised btn-success pull-right\">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>", "modalTorneo.html", "C:\\wamp64\\www\\starsoccerprueba\\ui\\modulos\\torneo\\html\\modaltorneo.html");
    }
}
