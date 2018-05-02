<?php

class Camion extends Vehiculo {
    var $pma;
    var $taraprecio;
    
    function __construct ($marca, $pma, $taraprecio){
        parent::__parent($marca);
        $this->pma = $pma;
        $this->taraprecio = $taraprecio;    
           
    }

    function getPma (){
        return $this->pma;

    }

    function setPma ($pma){
        $this->pma = $pma;

    }

    function getTaraPrecio (){
        return $this->taraprecio;

    }

    function setTaraPrecio ($taraprecio){
        $this->taraprecio = $taraprecio;
    }


    function mostrar (){
        parent::mostrar();
        echo "La PMA del camion es".getClase();
        echo "<br>";
        echo "La tara es".getPrecio();
        echo "<br>";


    }




}

?>