<?php

/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 04/06/2017
 * Time: 07:44 PM
 */
class ReglaController extends BaseController{

    private $reglaRepository;

    public function __construct() {
        parent::__construct();
        $this->reglaRepository = new ReglaRepository();
    }

    public function index(){
        $this->parametros["estados"]=EstatusEnum::getConstants();
        $this->render("regla.html");
    }

    public function buscar() {
        $draw = F3::get('POST.draw');
        $start = F3::get('POST.start');
        $length = F3::get('POST.length');
        $filtros = F3::get('POST.filtros');
        //$this->validarFiltros($filtros);
        $total = $this->reglaRepository->buscarTotal($filtros);
        if ($total == 0) {
            MensajeRespuesta::datosJSON($draw, $total);
        }
        $reporte = $this->reglaRepository->buscar($start, $length, $filtros);
        MensajeRespuesta::datosJSON($draw, $total, $reporte);
    }

    public function guardar() {
        $regla = $this->post("regla");
        $this->validar($regla);
        if (!empty($regla['id_regla'])) {
            $this->reglaRepository->actualizar($regla, 'regla', 'id_regla');
            $mensaje = "La informacion se actualizo correctamente";
        }
        else {
            $this->reglaRepository->guardar($regla, 'regla');
            $mensaje = "La informacion se registro correctamente";
        }
        MensajeRespuesta::mensaje($mensaje);
    }

    private function validar($regla) {
        $validadorUtil = new ValidadorUtil($regla);
        $validadorUtil->validarTexto("regla", true, 3, 50, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        $validadorUtil->validarTexto("estatus", true, 3, 10, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);

        if (!empty($regla['id_regla'])) {
            $validadorUtil->validarNumeroId("id_regla", true, 1);
        }

        $validadorUtil->agregarEtiquetas(
            array('regla' => 'Regla', 'Estatus' => 'Estatus')
        );

        if (!$validadorUtil->validate()) {
            MensajeRespuesta::mensajesErrores($validadorUtil->getErrors());
        }
        $existe=$this->reglaRepository->existeGuardarEditarNombreCampo("regla",$regla,"regla","id_regla");
        if($existe){
            MensajeRespuesta::mensajeError('El nombre de la regla ya existe');
        }
    }
}