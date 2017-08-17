<?php

/* login.html */
class __TwigTemplate_53272769cad5d06554e30d0c331f0c0e59bd6f54a0bba80b49499f8b6be45d89 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"theme-color\" content=\"#333\">
    <title>Material Style</title>
    <meta name=\"description\" content=\"Material Style Theme\">
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/assets/img/favicon.png?v=3\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/css/preload.min.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/css/plugins.min.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/css/style.grey-800.min.css\" />
    <!--[if lt IE 9]>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/js/html5shiv.min.js\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/js/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<div id=\"ms-preload\" class=\"ms-preload\">
    <div id=\"status\">
        <div class=\"spinner\">
            <div class=\"dot1\"></div>
            <div class=\"dot2\"></div>
        </div>
    </div>
</div>
<div class=\"bg-full-page bg-primary back-fixed\">
    <div class=\"mw-500 absolute-center\">
        <div class=\"card animated zoomInDown animation-delay-5\">
            <div class=\"card-block\">
                <h1 class=\"color-primary\">StarSoccer</h1>
                <form id=\"frmLogin\">
                    <fieldset>
                        <div class=\"form-group label-floating\">
                            <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                      <i class=\"zmdi zmdi-account\"></i>
                    </span>
                                <label class=\"control-label\" for=\"id\">Username</label>
                                <input type=\"text\" id=\"id\" name=\"id\" required=\"required\" class=\"form-control\"> </div>
                        </div>
                        <div class=\"form-group label-floating\">
                            <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                      <i class=\"zmdi zmdi-lock\"></i>
                    </span>
                                <label class=\"control-label\" for=\"password\">Password</label>
                                <input type=\"password\" required=\"required\" id=\"password\" name=\"password\" class=\"form-control\"> </div>
                        </div>
                        <div class=\"row \">
                            <div class=\"col-md-12\">
                                <button class=\"btn btn-raised btn-primary btn-block\">Ingresar
                                    <i class=\"zmdi zmdi-long-arrow-right no-mr ml-1\"></i>
                                </button>
                            </div>

                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div id=\"consola\" class=\"color-primary\"></div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/js/plugins.min.js\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "/ui/assets/js/app.min.js\"></script>

<script>
    \$(function () {
        \$('#frmLogin').submit(function(event) {
            \$.post(\"loguear\",\$(\"#frmLogin\").serialize() ,function( data ) {
                if( data.tipoRespuesta == \"MENSAJE\" ) {
                    \$(\"#consola\").html(data.mensaje).show();
                }else{
                    window.location.href = data.url;
                }

            });
            event.preventDefault();
        });
    });//FIN READY
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 73,  110 => 72,  53 => 18,  49 => 17,  44 => 15,  40 => 14,  36 => 13,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"theme-color\" content=\"#333\">
    <title>Material Style</title>
    <meta name=\"description\" content=\"Material Style Theme\">
    <link rel=\"shortcut icon\" href=\"[[base]]/assets/img/favicon.png?v=3\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"[[base]]/ui/assets/css/preload.min.css\" />
    <link rel=\"stylesheet\" href=\"[[base]]/ui/assets/css/plugins.min.css\" />
    <link rel=\"stylesheet\" href=\"[[base]]/ui/assets/css/style.grey-800.min.css\" />
    <!--[if lt IE 9]>
    <script src=\"[[base]]/ui/assets/js/html5shiv.min.js\"></script>
    <script src=\"[[base]]/ui/assets/js/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<div id=\"ms-preload\" class=\"ms-preload\">
    <div id=\"status\">
        <div class=\"spinner\">
            <div class=\"dot1\"></div>
            <div class=\"dot2\"></div>
        </div>
    </div>
</div>
<div class=\"bg-full-page bg-primary back-fixed\">
    <div class=\"mw-500 absolute-center\">
        <div class=\"card animated zoomInDown animation-delay-5\">
            <div class=\"card-block\">
                <h1 class=\"color-primary\">StarSoccer</h1>
                <form id=\"frmLogin\">
                    <fieldset>
                        <div class=\"form-group label-floating\">
                            <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                      <i class=\"zmdi zmdi-account\"></i>
                    </span>
                                <label class=\"control-label\" for=\"id\">Username</label>
                                <input type=\"text\" id=\"id\" name=\"id\" required=\"required\" class=\"form-control\"> </div>
                        </div>
                        <div class=\"form-group label-floating\">
                            <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                      <i class=\"zmdi zmdi-lock\"></i>
                    </span>
                                <label class=\"control-label\" for=\"password\">Password</label>
                                <input type=\"password\" required=\"required\" id=\"password\" name=\"password\" class=\"form-control\"> </div>
                        </div>
                        <div class=\"row \">
                            <div class=\"col-md-12\">
                                <button class=\"btn btn-raised btn-primary btn-block\">Ingresar
                                    <i class=\"zmdi zmdi-long-arrow-right no-mr ml-1\"></i>
                                </button>
                            </div>

                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div id=\"consola\" class=\"color-primary\"></div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script src=\"[[base]]/ui/assets/js/plugins.min.js\"></script>
<script src=\"[[base]]/ui/assets/js/app.min.js\"></script>

<script>
    \$(function () {
        \$('#frmLogin').submit(function(event) {
            \$.post(\"loguear\",\$(\"#frmLogin\").serialize() ,function( data ) {
                if( data.tipoRespuesta == \"MENSAJE\" ) {
                    \$(\"#consola\").html(data.mensaje).show();
                }else{
                    window.location.href = data.url;
                }

            });
            event.preventDefault();
        });
    });//FIN READY
</script>
</body>
</html>", "login.html", "C:\\wamp\\www\\starsoccer\\ui\\modulos\\autenticacion\\html\\login.html");
    }
}
