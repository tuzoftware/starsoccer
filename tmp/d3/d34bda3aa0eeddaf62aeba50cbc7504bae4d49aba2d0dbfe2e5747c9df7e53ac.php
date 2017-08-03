<?php

/* modalregla.html */
class __TwigTemplate_e9bfca9380c9be989b582c42ab156f6ef062015c11784b1dafabac99f1e554f9 extends Twig_Template
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
        echo "<div class=\"modal fade modal-danger\" id=\"modalRegla\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <form id=\"frmAgregar\" class=\"pArrow-p-form p-form-pArrow-extra2color2\">
        <input type=\"hidden\" name=\"regla[id_regla]\" id=\"id_tec\">
        <div class=\"modal-dialog\" style=\"width:900px;height:600px;\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header primary\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"tituloModal\"></h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Nombre:</label>
                                    <input type=\"text\" name=\"regla[regla]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"regla\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Estatus:</label>
                                    <select name=\"regla[estatus]\" placeholder=\"Seleccionar\">
                                        <option value=\"\"></option>
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estados"]) ? $context["estados"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["estatus"]) {
            // line 37
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
        // line 39
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
        return "modalregla.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 39,  60 => 37,  56 => 36,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade modal-danger\" id=\"modalRegla\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <form id=\"frmAgregar\" class=\"pArrow-p-form p-form-pArrow-extra2color2\">
        <input type=\"hidden\" name=\"regla[id_regla]\" id=\"id_tec\">
        <div class=\"modal-dialog\" style=\"width:900px;height:600px;\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header primary\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"tituloModal\"></h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"form-group label-floating\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Nombre:</label>
                                    <input type=\"text\" name=\"regla[regla]\" class=\"form-control\" required=\"required\">
                                </div>
                                <span class=\"errores\" data-error=\"regla\"><i class=\"fa fa-times\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <label class=\"control-label\">Estatus:</label>
                                    <select name=\"regla[estatus]\" placeholder=\"Seleccionar\">
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
</div>", "modalregla.html", "C:\\wamp64\\www\\starsoccer\\ui\\modulos\\regla\\html\\modalregla.html");
    }
}
