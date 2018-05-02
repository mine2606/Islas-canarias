<?php

require_once("tarifa.php");

class TerifaVehiculo extends Tarifa {
    
    var $peso;


    function __construct ($precio, $peso){
        parent::_construct($precio);
        $this->peso = $peso;
        
    } 
    
    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }


    function mostrar (){
       
        echo "La tarifa del coche es".getTarifaCoche();
        echo "<br>";
        echo "La tarifa del camion es".getTarifaCamion();
        echo "<br>";
    
    }
}

?>
