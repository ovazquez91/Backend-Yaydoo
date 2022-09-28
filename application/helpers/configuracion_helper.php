<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function setModeProduction(){
    //true es igual a producción
    $produccion = false;
    return $produccion;
}

function setModeProductionServer(){
    //$produccion = 178;
    //$produccion = 179;
    //pruebas
    $produccion = 100;
    return $produccion;
}


?>