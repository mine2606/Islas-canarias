<?php

require_once("tarifa.php");

class TarifaPasajero extends Tarifa{
    var $edad;
  

    function __construct ($edad, $precio){
        parent::__parent($precio);
        $this->edad = $edad;
             
        
    }

    function getEdad (){
        return $this->edad;

    }

    function setEdad ($edad){
        $this->edad = $edad;
    }


    

    function mostrar (){
        parent::mostrar();
        echo "La edad del pasajero es".getEdad();
        echo "<br>";
        
    }


}

?>