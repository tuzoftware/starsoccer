<?php

class CalendarioRepository extends BaseRepository {

    public function obtenerTorneos(){
        $this->sql='SELECT nombre FROM torneo';
        return $this->resultado();
    }

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
                $this->sql = "SELECT id_equipo FROM equipo WHERE nombre=:nombre";
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

        $this->sql = "SELECT COUNT(*)
                      FROM jornada
                      LEFT JOIN equipo  equipolocal ON jornada.id_equipo_local = equipolocal.id_equipo 
                      LEFT JOIN equipo equipovisita ON jornada.id_equipo_visita = equipovisita.id_equipo 
                      LEFT JOIN torneo ON jornada.id_torneo = torneo.id_torneo
                      WHERE 1=1 ";

        $this->construirConsulta ( $filtros, true );
        return $this->escalar ();
    }


    public function buscar($start,$length, $filtros){
        $this->filtros ["start"] = intval ( $start );
        $this->filtros ["length"] = intval ( $length );

        $this->sql = "SELECT jornada.id_juego, jornada.id_torneo, jornada.id_equipo_local, jornada.id_equipo_visita, jornada.numero_jornada, jornada.fecha, jornada.hora, jornada.estatus, torneo.nombre, equipolocal.nombre as equipolocal, equipovisita.nombre as equipovisita
                      FROM jornada
                      LEFT JOIN equipo  equipolocal ON jornada.id_equipo_local = equipolocal.id_equipo 
                      LEFT JOIN equipo equipovisita ON jornada.id_equipo_visita = equipovisita.id_equipo 
                      LEFT JOIN torneo ON jornada.id_torneo = torneo.id_torneo WHERE 1=1 ";

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
        if (! empty ( $filtros ["equipo_busqueda"] )) {
            $this->filtros ["equipo"] = "%" . $filtros ["equipo_busqueda"] . "%";
            $this->sql = $this->sql . " AND equipolocal.nombre LIKE :equipo ";
            $this->sql = $this->sql . " OR equipovisita.nombre LIKE :equipo ";
        }
    }

}