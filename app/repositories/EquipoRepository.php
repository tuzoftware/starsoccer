<?php

class EquipoRepository extends BaseRepository {

    /**
     *
     * @param type $datos
     */
    public function obtenerNombresDistintos(&$datos) {
        $this->filtrarNombresIguales ( $datos );
    }

    /**
     *
     * @param type $datos
     */
    private function filtrarNombresIguales(&$datos) {
        if (! empty ( $datos )) {
            foreach ( $datos as $key => $nombre ) {
                $this->filtros ["nombre"] = $nombre;
                $this->sql = "SELECT id_tecnologia FROM tecnologia WHERE nombre=:nombre";
                $id = $this->escalar ();
                if ($id) {
                    unset ( $datos [$key] );
                }
            }
        }
    }

    /**
     *
     * @param type $filtros
     * @return type
     */
    public function buscarTotal($filtros) {
        $this->sql = "SELECT COUNT(id_equipo) FROM equipo t WHERE 1=1 ";

        $this->construirConsulta ( $filtros, true );
        return $this->escalar ();
    }

    /**
     *
     * @param type $start
     * @param type $length
     * @param type $filtros
     * @return type
     */
    public function buscar($start, $length, $filtros) {
        $this->filtros ["start"] = intval ( $start );
        $this->filtros ["length"] = intval ( $length );

        $this->sql = "SELECT id_equipo,nombre,fecha_fundacion,ruta_logo,estatus FROM equipo t WHERE 1=1 ";

        $this->construirConsulta ( $filtros );
        $this->sql = $this->sql . " LIMIT :start,:length";
        $reporte = $this->resultado ();
        return $reporte;
    }

    /**
     *
     * @param type $filtros
     * @param type $esConteo
     */
    private function construirConsulta($filtros, $esConteo = false) {
        //Por nombre
        if (! empty ( $filtros ["nombre_busqueda"] )) {
            $this->filtros ["nombre"] = "%" . $filtros ["nombre_busqueda"] . "%";
            $this->sql = $this->sql . " AND nombre LIKE :nombre ";
        }
        //Por fecha_fundacion
        if (!empty($filtros["fecha_fundacion"])){
            $this->filtros["fecha_fundacion"]="%".$filtros["fecha_fundacion"]."%";
            $this->sql = $this->sql . " AND t.fecha_fundacion LIKE :fecha_fundacion ";
        }
        //
//        if (! empty ( $filtros ["estatus_busqueda"] )) {
//            $this->filtros ["estatus"] = "%" . $filtros ["estatus_busqueda"] . "%";
//            $this->sql = $this->sql . " AND t.estatus LIKE :estatus ";
//        }
    }

    /**
     *
     * @return array
     */
    public function obtenerEstatus() {
        $arr_estatus = [
            [
                "value" => "ACTIVO",
                "label" => "Activo" ],
            [
                "value" => "INACTIVO",
                "label" => "Inactivo" ] ];
        return $arr_estatus;
    }
}