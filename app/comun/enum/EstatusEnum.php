<?php

/**
 * Created by PhpStorm.
 * User: Solutions
 * Date: 09/05/2017
 * Time: 02:34 PM
 */
class EstatusEnum
{

    const ACTIVO="ACTIVO";

    const INACTIVO="INACTIVO";

    public static function getConstants() {
        $clase = new ReflectionClass(__CLASS__);
        return $clase->getConstants();
    }

}