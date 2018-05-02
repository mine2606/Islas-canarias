<?php 

require_once ("ruta.php");

require_once ("tarifa.php");

require_once ("ferry.php");

require_once ("vehiculo.php");

require_once ("oficina.php");

require_once ("pasajero.php");

require_once ("tarifapasajero.php");

require_once ("tarifavehiculo.php");



class Agencia {
    var $nombre;
    var $pasajeros;
    var $rutas; //matriz
    var $ferrys;
    var $tarifapasajero;
    var $tarifavehiculo;    
    var $oficina;

    function __construct ($nombre){

        $this->nombre = $nombre;
        $this->pasajeros = array();
        $this->rutas = array();
        $this->tarifapasajeros =  array(
            new TarifaPasajero (10, 5),
            new TarifaPasajero (11, 10),
            new TarifaPasajero (12, 15),
            new TarifaPasajero (13, 30),
            new TarifaPasajero (14, 45),
            new TarifaPasajero (15, 60),
            new TarifaPasajero (16, 70),
            new TarifaPasajero (17, 80)
        );
        $this->tarifavehiculos = array(
            new TarifaPasajero (10, 1500),
            new TarifaPasajero (11, 2000),
            new TarifaPasajero (12, 2500),
            new TarifaPasajero (13, 3000),
            new TarifaPasajero (14, 3500),
            new TarifaPasajero (15, 4000),
            new TarifaPasajero (16, 4500),
            new TarifaPasajero (17, 5000)
        );
       
        $this->ferrys = array();       
        $this->oficina = array("10000", "10001", "10002", "10003", "10004", "10005", "10006");
    }


    function getNombre (){
        return $this->nombre;

    }

    function setNombre ($nombre){
        $this->nombre = $nombre;

    }

    function inicializarRuta ($ruta){
        $this->rutas[$ruta->getOrigen()][$ruta->getDestino()] = $ruta;
    }
    

    function calcularPrecio ($edad){
        $enc=false;
        for($i = 0; $i > count ($this->tarifapasajero) && (!$enc); $i++ ) { //!$enc es lo mismo que $enc == false
            if ($edad > $this->tarifapasajero[$i]->getEdad()){
                //me quedo con el precio
                $final = $this->tarifapasajero[$i]->getPrecio();
            }
            else {
                //salgo
                $enc = true;
            }
        }
        echo $final;
        return $final;
    }


    function venderBillete ($origen, $destino, $pasajero) {
        $suma = $this->rutas[$origen][$destino]->getPrecio();
        /*otra forma de hacerlo
        $edad = $pasajero->getEdad();
        $extra = $this->calcularPrecio( $edad )
        $duracion= $this->rutas[$origen][$destino]->getDestino();
        $suma = $suma + $extra * $duracion;
        */
        /*lo de mismo de arriba pero de otra manera más corta*/
        
        $suma = $suma + $this->calcularPrecio ( $pasajero->getEdad() ) * $this->rutas[$origen][$destino]->getPrecio();


        //falta ver si tiene coche

        if (($pasajero->getDiscapacidad() == true) || ($pasajero->getEdad() < 18 )) {
            $suma = $suma / 2;
        }

        //disminuir la capacidad del ferry
        return $suma;       

        
    }

    


    function mostrar (){

        echo "El nombre de la Agencia es".getNombre();
    }




}

?>