<?php

class TorneoRepository extends BaseRepository {

    /**
     *
     * @param type $datos
     */
    public function obtenerNombresDistintos(&$datos) {
        //$this->sql='SELECT id_torneo FROM torneo';
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
        $this->sql = "SELECT COUNT(id_torneo) FROM torneo t WHERE 1=1 ";


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

        $this->sql = "SELECT id_torneo,nombre,fecha_inicio,fecha_fin,ruta_logo,estatus FROM torneo t WHERE 1=1 ";

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
        //Pa' Buscar por Nombre
        if (! empty ( $filtros ["nombre_busqueda"] )) {
            $this->filtros ["nombre"] = "%" . $filtros ["nombre_busqueda"] . "%";
            $this->sql = $this->sql . " AND nombre LIKE :nombre ";
        }                                //filtro coincide con Nombre
        //Pa' Buscar por Fecha de inicio
        if (!empty($filtros["fecha_inicio"])){
            $this->filtros["fecha_inicio"]="%".$filtros["fecha_inicio"]."%";
            $this->sql = $this->sql . " AND t.fecha_inicio LIKE :fecha_inicio ";
        }
        //Pa' Buscar por Fecha de fin
        if (!empty($filtros["fecha_fin"])){
            $this->filtros["fecha_fin"]="%".$filtros["fecha_fin"]."%";
            $this->sql = $this->sql . " AND t.fecha_fin LIKE :fecha_fin ";
        }

        /*if (! empty ( $filtros ["estatus_busqueda"] )) {
            $this->filtros ["estatus"] = "%" . $filtros ["estatus_busqueda"] . "%";
            $this->sql = $this->sql . " AND t.estatus LIKE :estatus ";
        }
        */
    }
}