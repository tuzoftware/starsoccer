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
//        $equipos=array(1=>"Equipo Uno",2=>"Equipo Dos");
//        $this->parametros["equiposLocales"]=$equipos;
        //$this->parametros["torneos"]=calendarioRepository->obtenerTorneos();
        $this->parametros["torneos"]=$this->calendarioRepository->obtenerTorneos();
        $this->parametros["idtorneos"]=$this->calendarioRepository->obtenerTorneos();
        $this->parametros["equiposLocales"]=$this->calendarioRepository->obtenerEquipos();
        $this->parametros["equiposVisitantes"]=$this->calendarioRepository->obtenerEquipos();
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
            $this->calendarioRepository->actualizar($calendario, 'jornada', 'id_juego');
            $mensaje = "La informacion se actualizo correctamente";
        }
        else {
            $this->calendarioRepository->guardar($calendario, 'jornada');
            $mensaje = "La informacion se registro correctamente";
        }
        MensajeRespuesta::mensaje($mensaje);
    }

    private function validar($calendario) {
        $validadorUtil = new ValidadorUtil($calendario);

        $validadorUtil->validarTexto("torneo", true, 1, 100);
        $validadorUtil->validarTexto("equipo_local", true, 1, 100);
        $validadorUtil->validarTexto("equipo_visita", true, 1, 100);
        $validadorUtil->validarNumeroEntero("numero_jornada", true, 1, 100);
        $validadorUtil->validarFecha("fecha", true, '2017-05-01', '2030-05-01', "Y-m-d");
        $validadorUtil->validarTexto("hora", true, 3, 50);
        $validadorUtil->validarTexto("estatus", true, 3, 50, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);

        //para edit
        if (!empty($calendario['id_juego'])) {
            $validadorUtil->validarNumeroId("id_juego", true, 1);
        }
        if (!empty($calendario['id_torneo'])) {
            $validadorUtil->validarNumeroId("id_torneo", true, 1);
        }
        if (!empty($calendario['id_equipo_local'])) {
            $validadorUtil->validarNumeroId("id_equipo_local", true, 1);
        }
        if (!empty($calendario['id_equipo_visita'])) {
            $validadorUtil->validarNumeroId("id_equipo_visita", true, 1);
        }



        $validadorUtil->agregarEtiquetas(
            array('torneo' => 'Torneo','equipo_local' => 'Equipo Local','equipo_visita' => 'Equipo Visita','numero_jornada' => 'Número de Jornada', 'fecha' => 'Fecha', 'hora' => 'Hora', 'estatus' => 'Estatus'));

        if (!$validadorUtil->validate()) {
            MensajeRespuesta::mensajesErrores($validadorUtil->getErrors());
        }
//           $existe=$this->calendarioRepository->existeId("jornada","id_juego",$calendario['id_juego']);
//         if($existe){
//             MensajeRespuesta::mensajeError('El Juego ya existe');
         //}
         if ($calendario['id_equipo_local']==$calendario['id_equipo_visita']){
             MensajeRespuesta::mensajeError('No se puede agregar un equipo dos veces');
         }
         //$existe=$this->calendarioRepository->
    }
}