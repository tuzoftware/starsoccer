<?php

/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 04/06/2017
 * Time: 07:44 PM
 */
class TorneoController extends BaseController{

    private $torneoRepository;

    public function __construct() {
        parent::__construct();
        $this->torneoRepository = new TorneoRepository();
    }

    public function index(){
        $this->parametros["estados"]=EstatusEnum::getConstants();
        $this->render("torneo.html");
    }

    public function buscar() {
        $draw = F3::get('POST.draw');
        $start = F3::get('POST.start');
        $length = F3::get('POST.length');
        $filtros = F3::get('POST.filtros');
        //$this->validarFiltros($filtros);

        $total = $this->torneoRepository->buscarTotal($filtros);
        if ($total == 0) {
            MensajeRespuesta::datosJSON($draw, $total);
        }
        $reporte = $this->torneoRepository->buscar($start, $length, $filtros);
        MensajeRespuesta::datosJSON($draw, $total, $reporte);
    }

    public function guardar() {
        $torneo = $this->post("torneo");
        $this->validar($torneo);
        if (!empty($torneo['id_torneo'])) {
            $this->torneoRepository->actualizar($torneo, 'torneo', 'id_torneo');
            $mensaje = "La informacion del Torneo se actualizo correctamente";
        }
        else {
            $this->torneoRepository->guardar($torneo, 'torneo');
            $mensaje = "La informacion del Torneo se registro correctamente";
        }
        MensajeRespuesta::mensaje($mensaje);
    }

    private function validar($torneo) {
        $validadorUtil = new ValidadorUtil($torneo);
        $validadorUtil->validarTexto("nombre", true, 3, 100, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        $validadorUtil->validarFecha("fecha_inicio", true, '2017-05-01', '2030-05-01', "Y-m-d");//date("Y-m-d")
        $validadorUtil->validarFecha("fecha_fin", true, '2017-05-01', '2030-05-01', "Y-m-d");
        $validadorUtil->validarTexto("ruta_logo", true, 3, 200);
        $validadorUtil->validarTexto("estatus", true, 3, 10, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        if (!empty($torneo['id_torneo'])) {
            $validadorUtil->validarNumeroId("id_torneo", true, 1);
        }
        $validadorUtil->agregarEtiquetas(
            array('nombre' => 'nombre', 'fecha_inicio' => 'fecha_inicio', 'fecha_fin' => 'fecha_fin', 'ruta_logo' => 'ruta_logo', 'estatus' => 'estatus'));
        if (!$validadorUtil->validate()) {
            MensajeRespuesta::mensajesErrores($validadorUtil->getErrors());
        }
        $existe=$this->torneoRepository->existeGuardarEditarNombreCampo("torneo",$torneo,"nombre","id_torneo");
        if($existe){
            MensajeRespuesta::mensajeError('El nombre del torneo ya existe');
        }
    }
}