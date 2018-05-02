<?php

class Oficina {
    var $cPostal;
    


    function __construct ($cPostal){
        $this->cPostal = $cPostal;
             
       
    }

    function setCPostal ($cPostal){
        $this->cPostal = $cPostal;

    }

    function getCPostal (){
        return $this->cPostal;

    }


    function venderBillete ($destino, $pasajero){

    }






    function mostrar(){

        echo "El código postal es".getCPostal();
        echo "<br>";
    }   
           
}

?>