<?php

/**
 * Created by Tuzoftware.
 * User: Solutions
 * Date: 28/11/2016
 * Time: 12:30 PM
 */
class UsuarioRepository extends BaseRepository {

    public function obtenerUsuarios(){
        $this->sql='SELECT id_usuario FROM usuario';
        //$this->sql='SELECT UPPER(id_usuario) FROM usuario';
        //$this->sql = "SELECT id_usuario,nombre,apellido_paterno, apellido_materno, sexo, fecha_nacimiento, email FROM usuario_datos";

        return $this->resultado();
    }

    public function obtenerNombresDistintos(&$datos) {
        $this->filtrarNombresIguales ( $datos );
    }

    private function filtrarNombresIguales(&$datos) {
        if (! empty ( $datos )) {
            foreach ( $datos as $key => $nombre ) {
                $this->filtros ["nombre"] = $nombre;
                $this->sql = "SELECT id_usuario FROM usuario_datos WHERE id_usuario=:nombre";
                $id = $this->escalar ();
                if ($id) {
                    unset ( $datos [$key] );
                }
            }
        }
    }


    public function buscarTotal($filtros) {
        $this->sql = "SELECT COUNT(*) 
                      FROM usuario_datos
                      LEFT JOIN usuario ON usuario_datos.id_usuario = usuario.id_usuario
                      LEFT JOIN usuario_rol ON usuario.id_usuario = usuario_rol.id_usuario
                      WHERE 1=1 ";

        $this->construirConsulta ( $filtros, true );
        return $this->escalar ();
    }

    public function buscar($start,$length, $filtros){
        $this->filtros ["start"] = intval ( $start );
        $this->filtros ["length"] = intval ( $length );

        $this->sql="SELECT usuario_datos.id_usuario, usuario_datos.nombre, usuario_datos.apellido_paterno, usuario_datos.apellido_materno, usuario_datos.sexo, usuario_datos.fecha_nacimiento, usuario_datos.email, usuario_datos.estatus, usuario.contrasenia, usuario.activo, usuario.bloqueado, usuario_rol.id_usuario_rol, usuario_rol.id_usuario, usuario_rol.id_rol 
                    FROM usuario_datos
                     LEFT JOIN usuario ON usuario_datos.id_usuario = usuario.id_usuario
                     LEFT JOIN usuario_rol ON usuario.id_usuario = usuario_rol.id_usuario WHERE 1=1 ";

        $this->construirConsulta ( $filtros );
        $this->sql = $this->sql . " LIMIT :start,:length";
        $reporte = $this->resultado ();
        return $reporte;
    }

    private function construirConsulta($filtros, $esConteo = false) {

        if (! empty ( $filtros ["id_usuario"] )) {
            $this->filtros ["id_usuario"] = "%" . $filtros ["id_usuario"] . "%";
            $this->sql = $this->sql . " AND usuario.id_usuario LIKE :id_usuario ";
        }
        //Por nombre
        if (! empty ( $filtros ["nombre_busqueda"] )) {
            $this->filtros ["nombre"] = "%" . $filtros ["nombre_busqueda"] . "%";
            $this->sql = $this->sql . " AND nombre LIKE :nombre ";
        }

        if (! empty ( $filtros ["apellido_paterno"] )) {
            $this->filtros ["apellido_paterno"] = "%" . $filtros ["apellido_paterno"] . "%";
            $this->sql = $this->sql . " AND apellido_paterno LIKE :apellido_paterno ";
        }

        if (! empty ( $filtros ["rol_busqueda"] )) {
            $this->filtros ["id_rol"] = "%" . $filtros ["rol_busqueda"] . "%";
            $this->sql = $this->sql . " AND id_rol LIKE :id_rol ";
        }
    }



}