<?php

class Ferry {
    var $id;
    var $cVehiculo;
    var $cPasajero;


    function __construct ($id, $cVehiculo, $cPasajero){

        $this->id = $id;
        $this->cVehiculo = $cVehiculo;
        $this->cPasajero = $cPasajero;
    }

    function getId (){
        return $this->id;

    }

    function setId ($id){
        $this->id = $id;

    }

    function getCVehiculo (){
        return $this->cVehiculo;

    }

    function setCVehiculo ($cVehiculo){
        $this->cVehiculo = $cVehiculo;

    }

    function getCPasajero (){
        return $this->cPasajero;

    }

    function setCPasajero ($cPasajero){
        $this->cPasajero = $cPasajero;

    }






}

?>