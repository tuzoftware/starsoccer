<?php

/**
 * Created by PhpStorm.
 * User: Solutions
 * Date: 09/05/2017
 * Time: 02:34 PM
 */
class SexoEnum
{

    const MASCULINO="MASCULINO";

    const FEMENINO="FEMENINO";

    public static function getConstants() {
        $clase = new ReflectionClass(__CLASS__);
        return $clase->getConstants();
    }

}