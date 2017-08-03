<?php

class ReglaRepository extends BaseRepository {

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
        $this->sql = "SELECT COUNT(id_regla) FROM regla t WHERE 1=1 ";


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

        $this->sql = "SELECT id_regla,regla,estatus FROM regla t WHERE 1=1 ";

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
        if (! empty ( $filtros ["nombre_busqueda"] )) {
            $this->filtros ["nombre"] = "%" . $filtros ["nombre_busqueda"] . "%";
            $this->sql = $this->sql . " AND regla LIKE :nombre ";
        }
        if (! empty ( $filtros ["estatus_busqueda"] )) {
            $this->filtros ["estatus"] = "%" . $filtros ["estatus_busqueda"] . "%";
            $this->sql = $this->sql . " AND t.estatus LIKE :estatus ";
        }
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