<?php

/**
 * Created by PhpStorm.
 *
 * Time: 07:44 PM
 */
class EquipoController extends BaseController{

    private $equipoRepository;

    public function __construct() {
        parent::__construct();
        $this->equipoRepository = new EquipoRepository();
    }

    public function index(){
        $this->parametros["estados"]=EstatusEnum::getConstants();
        $this->render("equipo.html");
    }

    public function buscar() {
        $draw = F3::get('POST.draw');
        $start = F3::get('POST.start');
        $length = F3::get('POST.length');
        $filtros = F3::get('POST.filtros');
        //$this->validarFiltros($filtros);
        $total = $this->equipoRepository->buscarTotal($filtros);
        if ($total == 0) {
            MensajeRespuesta::datosJSON($draw, $total);
        }
        $reporte = $this->equipoRepository->buscar($start, $length, $filtros);
        MensajeRespuesta::datosJSON($draw, $total, $reporte);
    }

    public function guardar() {
        $equipo = $this->post("equipo");//recibiendo equipo
        $this->validar($equipo);
        if (!empty($equipo['id_equipo'])) {
            $this->equipoRepository->actualizar($equipo, 'equipo', 'id_equipo');
            $mensaje = "La informacion del Equipo se actualizo correctamente";
        }
        else {
            $this->equipoRepository->guardar($equipo, 'equipo');
            $mensaje = "La informacion se registro correctamente";
        }
        MensajeRespuesta::mensaje($mensaje);
    }

    private function validar($equipo) {
        $validadorUtil = new ValidadorUtil($equipo);
        $validadorUtil->validarTexto("nombre", true, 3, 120, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        $validadorUtil->validarFecha("fecha_fundacion", true,'2000-01-01', '2030-05-01', "Y-m-d");
        $validadorUtil->validarTexto("ruta_logo", true, 3, 120);
        $validadorUtil->validarTexto("estatus", true, 3, 10, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);

        if (!empty($equipo['id_equipo'])) {
            $validadorUtil->validarNumeroId("id_equipo", true, 1);
        }

        $validadorUtil->agregarEtiquetas(
            array('nombre' => 'Nombre', 'fecha_fundacion' => 'Fecha de Fundacion', 'ruta_logo' => 'Ruta Logo', 'estatus' => 'Estatus')
        );

        if (!$validadorUtil->validate()) {
            MensajeRespuesta::mensajesErrores($validadorUtil->getErrors());
        }
        $existe=$this->equipoRepository->existeGuardarEditarNombreCampo("equipo",$equipo,"nombre","id_equipo");
        if($existe){
            MensajeRespuesta::mensajeError('El nombre del equipo ya existe');
        }
    }
}