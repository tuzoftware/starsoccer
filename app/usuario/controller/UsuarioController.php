<?php
/**
 * Created by PhpStorm.
 * User: Acer E5
 * Date: 26/06/2017
 * Time: 02:37 PM
 */
class UsuarioController extends BaseController{

    private $usuarioRepository;

    public function __construct() {
        parent::__construct();
        $this->usuarioRepository = new UsuarioRepository();
    }

    public function index(){
        $this->parametros["rol"]=RolEnum::getConstants();
        $this->parametros["sexo"]=SexoEnum::getConstants();
        $this->render("usuario.html");
    }


    public function buscar() {
        $draw = F3::get('POST.draw');
        $start = F3::get('POST.start');
        $length = F3::get('POST.length');
        $filtros = F3::get('POST.filtros');

        $total = $this->usuarioRepository->buscarTotal($filtros);
        if ($total == 0) {
            MensajeRespuesta::datosJSON($draw, $total);
        }
        $reporte = $this->usuarioRepository->buscar($start, $length, $filtros);
        MensajeRespuesta::datosJSON($draw, $total, $reporte);
    }


    public function guardar() {
        $usuario = $this->post("usuario");
        $usuario_datos = $this->post("usuario_datos");
        $usuario_rol = $this->post("usuario_rol");


        $this->validar($usuario, $usuario_datos, $usuario_rol); //,
        //$this->validarUsuarioDatos($usuario_datos);
        //$this->validarUsuarioRol($usuario_rol);


        if (!empty($usuario['id_usuario']) && !empty($usuario_datos['id_usuario']) && !empty($usuario_rol['id_usuario_rol'])) {
            $this->usuarioRepository->actualizar($usuario, 'usuario', 'id_usuario');
            $this->usuarioRepository->actualizar($usuario_datos, 'usuario_datos', 'id_usuario');
            $this->usuarioRepository->actualizar($usuario_rol, 'usuario_rol', 'id_usuario_rol');
            $mensaje = "La informacion se actualizo correctamente";
        } else {
            $this->usuarioRepository->guardar($usuario, 'usuario');
            $this->usuarioRepository->guardar($usuario_datos, 'usuario_datos');
            $this->usuarioRepository->guardar($usuario_rol, 'usuario_rol');
            $mensaje = "La informacion se registro correctamente";
        }
        MensajeRespuesta::mensaje($mensaje);
    }

    private function validar($usuario, $usuario_datos, $usuario_rol) {// $usuario_datos, $usuario_rol
        $validadorUtilUsuario = new ValidadorUtil($usuario);
        $validadorUtilUsuarioDatos = new ValidadorUtil($usuario_datos);
        $validadorUtilUsuarioRol = new ValidadorUtil($usuario_rol);

        //USUARIO
        //$validadorUtil->validarTexto("id_usuario", true, 3, 64, ExpresionRegularEnum::ALFA_NUMERICO_MEXICO_ESPACIO);
        $validadorUtilUsuario->validarTexto("contrasenia", true, 3, 255,ExpresionRegularEnum::ALFA_NUMERICO_MEXICO_ESPACIO);
        if (!empty($usuario['id_usuario'])) {
            $validadorUtilUsuario->validarTexto("id_usuario", true, 3, 64, ExpresionRegularEnum::ALFA_NUMERICO_MEXICO_ESPACIO);
        }
        //USUARIO_DATOS
        $validadorUtilUsuarioDatos->validarTexto("nombre", true, 3, 120, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        $validadorUtilUsuarioDatos->validarTexto("apellido_paterno", true, 3, 120, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        $validadorUtilUsuarioDatos->validarTexto("apellido_materno", true, 3, 120, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        $validadorUtilUsuarioDatos->validarTexto("sexo", true, 3, 10, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        $validadorUtilUsuarioDatos->validarFecha("fecha_nacimiento", true, '1900-01-01', '2030-05-01', "Y-m-d");//date("Y-m-d")
        $validadorUtilUsuarioDatos->validarCorreoElectronico("email",true,15,255);
        if (!empty($usuario_datos['id_usuario'])) {
            $validadorUtilUsuarioDatos->validarTexto("id_usuario", true, 3, 64, ExpresionRegularEnum::ALFA_NUMERICO_MEXICO_ESPACIO);
        }
        //USUARIO_ROL
        //$validadorUtil->validarTexto("id_usuario", true, 3, 64, ExpresionRegularEnum::ALFA_NUMERICO_MEXICO_ESPACIO);
        $validadorUtilUsuarioRol->validarTexto("id_rol", true, 3, 255, ExpresionRegularEnum::ALFA_MEXICO_ESPACIO);
        if (!empty($usuario_rol['id_usuario_rol'])) {
            $validadorUtilUsuarioRol->validarNumeroId("id_usuario_rol", true, 1);
        }
        if (!empty($usuario_rol['id_usuario'])) {
            $validadorUtilUsuarioRol->validarTexto("id_usuario", true, 3, 64, ExpresionRegularEnum::ALFA_NUMERICO_MEXICO_ESPACIO);
        }



        $validadorUtilUsuario->agregarEtiquetas(
            array('id_usuario' => 'Id Usuario', 'contrasenia' => 'Contraseña'));
        $validadorUtilUsuarioDatos->agregarEtiquetas(
            array('nombre' => 'Nombre', 'apellido_paterno' => 'Apellido Paterno', 'apellido_materno' => 'Apellido Materno', 'sexo' => 'Sexo', 'fecha_nacimiento' => 'Fecha de Nacimiento', 'email' => 'Email'));
        $validadorUtilUsuarioRol->agregarEtiquetas(
            array('id_rol'=>'Rol'));


        if (!$validadorUtilUsuario->validate()) {
            MensajeRespuesta::mensajesErrores($validadorUtilUsuario->getErrors());
        }
        if (!$validadorUtilUsuarioDatos->validate()) {
            MensajeRespuesta::mensajesErrores($validadorUtilUsuarioDatos->getErrors());
        }
        if (!$validadorUtilUsuarioRol->validate()) {
            MensajeRespuesta::mensajesErrores($validadorUtilUsuarioRol->getErrors());
        }

        $existe=$this->usuarioRepository->existeId("usuario","id_usuario",$usuario['id_usuario']);
        if($existe){
            MensajeRespuesta::mensajeError('El Id de usuario ya existe');
        }

        $existe=$this->usuarioRepository->existeGuardarEditarNombreCampo("usuario_datos",$usuario_datos,"nombre","id_usuario");
        if($existe){
            MensajeRespuesta::mensajeError('El Nombre de usuario ya existe');
        }
    }
    //validando usuario_rol

}