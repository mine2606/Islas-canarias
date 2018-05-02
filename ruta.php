<?php

class Rutas {

    var $origen;
    var $destino;
    var $precio;
    var $duracionTrayecto;
    var $ferry;
    
    
    function __construct ($origen, $destino, $cPostal){
        $this->origen = $origen;
        $this->destino = $destino;        
        $this->precio = array();
        $this->duracionTrayecto = array();        
        $this->ferry = array();
        
    }

    function getOrigen (){
        return $this->origen;

    }

    function setOrigen ($origen){
        $this->origen = $origen;

    }

    function getDestino (){
        return $this->destino;

    }

    function setDestino ($destino){
        $this->destino = $destino;

    }

   



    function mostrar (){
        
        echo "El origen es".getOrigen();
        echo "<br>";
        echo "El destino es".getDestino();
        echo "<br>";
        echo "El código postal es".getDestino();
        echo "<br>";
    
    }



}

?>