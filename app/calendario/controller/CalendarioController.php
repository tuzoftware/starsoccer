<?php
/**
 * Created by PhpStorm.
 * User: Acer E5
 * Date: 17/08/2017
 * Time: 12:45 PM
 */

class CalendarioController extends BaseController{

    private $calendarioRepository;

    public function __construct() {
        parent::__construct();
        $this->calendarioRepository = new CalendarioRepository();
    }

    public function index(){
        //$this->p
        $this->parametros["torneo"]=$this->calendarioRepository->obtenerTorneos();
        $equipos=array(1=>"Equipo Uno",2=>"Equipo Dos");
        $this->parametros["equiposLocales"]=$equipos;
        $this->render("calendario.html");
    }


    public function buscar() {
        $draw = F3::get('POST.draw');
        $start = F3::get('POST.start');
        $length = F3::get('POST.length');
        $filtros = F3::get('POST.filtros');

        $total = $this->calendarioRepository->buscarTotal($filtros);
        if ($total == 0) {
            MensajeRespuesta::datosJSON($draw, $total);
        }
        $reporte = $this->calendarioRepository->buscar($start, $length, $filtros);
        MensajeRespuesta::datosJSON($draw, $total, $reporte);
    }

    public function guardar() {
        $calendario = $this->post("jornada");
        $this->validar($calendario);
        if (!empty($calendario['id_juego'])) {
            $this->calendarioRepository->actualizar($calendario, 'calendario', 'id_juego');
            $mensaje = "La informacion se actualizo correctamente";
        }
        else {
            $this->calendarioRepository->guardar($calendario, 'calendario');
            $mensaje = "La informacion se registro correctamente";
        }
        MensajeRespuesta::mensaje($mensaje);
    }

    private function validar($calendario) {
        $validadorUtil = new ValidadorUtil($calendario);
        $validadorUtil->validarTexto("id_torneo", true, 3, 50, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        $validadorUtil->validarTexto("id_equipo_local", true, 3, 50, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        $validadorUtil->validarTexto("id_equipo_visita", true, 3, 50, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        $validadorUtil->validarTexto("numero_jornada", true, 3, 50, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        $validadorUtil->validarFecha("fecha", true, '2017-05-01', '2030-05-01', "Y-m-d");
        $validadorUtil->validarTexto("hora", true, 3, 50, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        $validadorUtil->validarTexto("estatus", true, 3, 10, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        if (!empty($calendario['id_juego'])) {
            $validadorUtil->validarNumeroId("id_juego", true, 1);
        }
        $validadorUtil->agregarEtiquetas(
            array('id_torneo' => 'id_torneo', 'id_equipo_local' => 'id_equipo_local', 'id_equipo_visita' => 'id_equipo_visita', 'numero_jornada' => 'numero_jornada', 'fecha' => 'fecha', 'hora' => 'hora', 'estatus' => 'estatus'));
        if (!$validadorUtil->validate()) {
            MensajeRespuesta::mensajesErrores($validadorUtil->getErrors());
        }
        /* $existe=$this->calendarioRepository->existeGuardarEditarNombreCampo("regla",$regla,"regla","id_regla");
         if($existe){
             MensajeRespuesta::mensajeError('El nombre de la regla ya existe');
         }*/
    }
}